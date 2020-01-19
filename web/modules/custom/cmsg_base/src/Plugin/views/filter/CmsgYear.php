<?php

/**
 * @file
 * Definition of Drupal\cmsg_base\Plugin\views\filter\CmsgLangcodeFallback.
 */

namespace Drupal\cmsg_base\Plugin\views\filter;

use Drupal\Core\Database\Database;
use Drupal\Core\Database\Query\Condition;
use Drupal\Core\Database\Query\Select;
use Drupal\Core\Form\FormStateInterface;
use Drupal\views\Plugin\views\display\DisplayPluginBase;
use Drupal\views\Plugin\views\filter\FilterPluginBase;
use Drupal\views\ViewExecutable;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\views\Plugin\views\filter\Date;

/**
 *
 * @ingroup views_filter_handlers
 *
 * @ViewsFilter("cmsg_views_year")
 */
class CmsgYear extends FilterPluginBase {
  /**
   * DB Connection
   *
   * @var \Drupal\Core\Database\Connection
   */
  protected $connection;

  public function __construct(array $configuration, $plugin_id, $plugin_definition, $connection) {
    $this->connection = $connection;
    parent::__construct($configuration, $plugin_id, $plugin_definition);
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition) {
    return new static($configuration, $plugin_id, $plugin_definition, $container->get('database'));
  }

  protected function getYears() {
    $years = [];

    if($this->table && $this->realField) {

      $query = $this->connection->select($this->table, 't');
      $query->addField('t', $this->realField);
      $query->orderBy($this->realField);
      $query->distinct();
      $dates = $query->execute()->fetchAll();

      foreach ($dates as $date) {
        $year = date('Y', strtotime($date->{$this->realField}));
        $years[$year] = $year;
      }
    }

    return $years;
  }

  protected function valueForm(&$form, FormStateInterface $form_state) {
    // We use additional selector on exposed forms.
    if ($this->options['exposed']) {
      $years = $this->getYears();
      $form['value'] = [
        '#type' => 'select',
        '#options' => $years,
        '#title' => $this->t('Year'),
        '#default_value' => array_pop($years),
      ];

    }
  }

  /**
   * Renew the view when a marketing is given
   */
  public function acceptExposedInput($input) {
    if(!empty($input[$this->options['expose']['identifier']])) {
      return TRUE;
    }
    return parent::acceptExposedInput($input);
  }

  /**
   * Add a where clause if a group was elected.
   */
  public function query() {
    $input = $this->view->getExposedInput();
    if (isset($input[$this->options['expose']['identifier']])) {
      $year = $input[$this->options['expose']['identifier']];

      $start = $year . '-01-01';
      $end = ++$year . '-01-01';

      $this->query->addWhere($this->options['group'], $this->realField, $start, '>=');
      $this->query->addWhere($this->options['group'], $this->realField, $end, '<');
    }
  }

  /**
   * Display the filter on the administrative summary
   */
  public function adminSummary() {
    return $this->operator;
  }

}
