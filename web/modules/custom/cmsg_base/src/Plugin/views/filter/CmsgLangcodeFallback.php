<?php

/**
 * @file
 * Definition of Drupal\cmsg_base\Plugin\views\filter\CmsgLangcodeFallback.
 */

namespace Drupal\cmsg_base\Plugin\views\filter;

use Drupal\Core\Database\Connection;
use Drupal\Core\Database\Query\Condition;
use Drupal\Core\Database\Query\Select;
use Drupal\Core\Language\LanguageManagerInterface;
use Drupal\views\Plugin\views\display\DisplayPluginBase;
use Drupal\views\Plugin\views\filter\FilterPluginBase;
use Drupal\views\ViewExecutable;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 *
 * @ingroup views_filter_handlers
 *
 * @ViewsFilter("cmsg_views_langcode_fallback")
 */
class CmsgLangcodeFallback extends FilterPluginBase {

  /**
   * DB Connection
   *
   * @var \Drupal\Core\Database\Connection
   */
  protected $connection;

  /**
   * Langcode
   *
   * @var string
   */
  protected $language;

  public function __construct(array $configuration, $plugin_id, $plugin_definition, Connection $connection, LanguageManagerInterface $language_manager) {
    $this->connection = $connection;
    $this->language = $language_manager->getCurrentLanguage()->getId();
    parent::__construct($configuration, $plugin_id, $plugin_definition);
  }

  public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition) {
    return new static($configuration, $plugin_id, $plugin_definition, $container->get('database'), $container->get('language_manager'));
  }

  /**
   * {@inheritdoc}
   */
  public function init(ViewExecutable $view, DisplayPluginBase $display, array &$options = NULL) {
    parent::init($view, $display, $options);
    $this->valueTitle = t('Allowed node titles');
    $this->definition['options callback'] = array($this, 'generateOptions');
  }

  /**
   * If they exists get the nodes in the current language and in other languages otherwise.
   */
  public function query() {
    $or = new Condition('OR');

    // Build exists statement
    $exists = new Select('node_field_data', 'n2', $this->connection);
    $exists->fields('n2', ['nid']);
    $exists->where('n2.nid = node_field_data.nid');

    //    foreach ($this->query->where[$this->options['group']]['conditions'] as $condition) {
    //      $exists->condition($condition['field'], $condition['value'], $condition['operator']);
    //    }
    $exists->condition('n2.langcode', $this->language);

    // Get nodes in current language or in other languages if no nodes exist.
    $this->query->addWhere($this->options['group'], $or->condition('node_field_data.langcode', $this->language)->notExists($exists));
  }

  /**
   * Skip validation if no options have been chosen so we can use it as a
   * non-filter.
   */
  public function validate() {
    if (!empty($this->value)) {
      parent::validate();
    }
  }

  /**
   * Helper function that generates the options.
   * @return array
   */
  public function generateOptions() {
    // Array keys are used to compare with the table field values.
    return array();
  }

}
