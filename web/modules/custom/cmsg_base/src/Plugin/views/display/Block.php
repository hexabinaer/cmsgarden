<?php

namespace Drupal\cmsg_base\Plugin\views\display;

use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Url;
use Drupal\cmsg_base\LayoutConfigTranslationTrait;
use Drupal\views\Plugin\Block\ViewsBlock;
use Drupal\views\Plugin\views\display\Block as BlockOriginal;
use Drupal\views\Plugin\views\display\DisplayPluginBase;

/**
 * Extends the plugin that handles a block.
 */
class Block extends BlockOriginal {

  use LayoutConfigTranslationTrait;

  /**
   * {@inheritdoc}
   */
  protected function defineOptions() {
    $options = parent::defineOptions();
    $options['allow']['contains']['offset'] = ['default' => 0];
    $options['allow']['contains']['show_exposed_filters'] = ['default' => FALSE];
    $options['allow']['contains']['dont_hide_if_unfiltered_empty'] = ['default' => FALSE];
    $options['allow']['contains']['show_more_link'] = ['default' => FALSE];
    $options['allow']['contains']['more_link_text'] = ['default' => ''];

    return $options;
  }

  /**
   * {@inheritdoc}
   */
  public function optionsSummary(&$categories, &$options) {
    parent::optionsSummary($categories, $options);
    $filtered_allow = array_filter($this->getOption('allow'));
    $options['allow'] = [
      'category' => 'block',
      'title' => $this->t('Allow settings'),
      'value' => empty($filtered_allow) ? $this->t('None') : $this->t('Settings allowed'),
    ];
  }

  /**
   * {#inheritdoc}
   */
  public function blockSettings(array $settings) {
    $settings = parent::blockSettings($settings);
    $settings['offset'] = 0;
    $settings['show_exposed_filters'] = FALSE;
    $settings['dont_hide_if_unfiltered_empty'] = FALSE;
    $settings['show_more_link'] = FALSE;
    $settings['more_link_text'] = '';
    $settings['pager_type'] = '';
    return $settings;
  }

  /**
   * Provide the default form for setting options.
   */
  public function buildOptionsForm(&$form, FormStateInterface $form_state) {
    parent::buildOptionsForm($form, $form_state);

    switch ($form_state->get('section')) {

      case 'allow':
        $form['#title'] .= $this->t('Allow settings in the block configuration');

        $options = [
          'items_per_page' => $this->t('Items per page'),
          'offset' => $this->t('Offset'),
          'show_exposed_filters' => $this->t('Toggle exposed form filters'),
          'dont_hide_if_unfiltered_empty' => $this->t('Toggle hide if view is unfiltered empty'),
          'show_more_link' => $this->t('Show more link'),
          'pager_type' => $this->t('Allow pager type to be changed'),
        ];

        $allow = array_filter($this->getOption('allow'));
        $form['allow'] = [
          '#type' => 'checkboxes',
          '#default_value' => $allow,
          '#options' => $options,
        ];
        break;
    }
  }

  /**
   * {@inheritdoc}
   */
  public function blockForm(ViewsBlock $block, array &$form, FormStateInterface $form_state) {
    $form = parent::blockForm($block, $form, $form_state);
    $allow_settings = array_filter($this->getOption('allow'));

    // For some reason deactivating context_mapping here has no effect.
    // Set this to alter the form in cmsg_base_form_alter().
    $form['#cmsg_views_block'] = TRUE;

    $block_configuration = $block->getConfiguration();

    foreach ($allow_settings as $type => $enabled) {
      if (empty($enabled)) {
        continue;
      }
      switch ($type) {
        case 'offset':
          $form['override']['offset'] = [
            '#type' => 'number',
            '#title' => $this->t('Offset'),
            '#default_value' => $block_configuration['offset'],
          ];
          break;
        case 'show_exposed_filters':
          $form['override']['show_exposed_filters'] = [
            '#type' => 'checkbox',
            '#title' => $this->t('Show exposed form filters'),
            '#default_value' => $block_configuration['show_exposed_filters'],
          ];
          break;
        case 'dont_hide_if_unfiltered_empty':
          $form['override']['dont_hide_if_unfiltered_empty'] = [
            '#type' => 'checkbox',
            '#title' => $this->t('Don \'t hide view if unfiltered is empty'),
            '#default_value' => $block_configuration['dont_hide_if_unfiltered_empty'],
          ];
          break;
        case 'pager_type':
          // @todo: Make pager configurable.
          $form['override']['pager_type'] = [
            '#type' => 'select',
            '#title' => $this->t('Change pager type'),
            '#default_value' => $block_configuration['pager_type'],
            '#options' => [
              'cmsg_pager' => 'cmsg_pager',
              'some' => 'Fix amount of items',
              'infinite_scroll' => 'Infinite scroll',
              'full' => 'Full',
            ]
          ];
          break;
        case 'show_more_link':
          $form['override']['show_more_link'] = [
            '#type' => 'checkbox',
            '#title' => $this->t('Show more link'),
            '#default_value' => $block_configuration['show_more_link'],
          ];

          $this->setTranslatableConfiguration($block_configuration['translatable_configuration']);
          $form['override']['use_more_text'] = [
            '#type' => 'textfield',
            '#title' => $this->t('More link text (translatable)'),
            '#default_value' => $this->getTranslatedConfigurationValue('use_more_text'),
            '#states' => [
              'visible' => [
                ':input[name="settings[override][show_more_link]"]' => ['value' => 1],
              ],
            ],
          ];

          $description[] = [
            '#markup' => $this->t('A Drupal path or external URL the more link will point to. Note that this will override the link display setting above.'),
          ];
          $form['override']['link_url'] = [
            '#type' => 'textfield',
            '#title' => $this->t('Link url'),
            '#default_value' => $block_configuration['link_url'],
            '#description' => $description,
            '#states' => [
              'visible' => [
                ':input[name="settings[override][show_more_link]"]' => ['value' => 1],
              ],
            ],
          ];
          break;
      }
    }

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function blockSubmit(ViewsBlock $block, $form, FormStateInterface $form_state) {
    $block->setConfigurationValue('offset', $form_state->getValue([
      'override',
      'offset'
    ]));
    $block->setConfigurationValue('show_exposed_filters', $form_state->getValue([
      'override',
      'show_exposed_filters'
    ]));
    $block->setConfigurationValue('dont_hide_if_unfiltered_empty', $form_state->getValue([
      'override',
      'dont_hide_if_unfiltered_empty'
    ]));
    $block->setConfigurationValue('show_more_link', $form_state->getValue([
      'override',
      'show_more_link'
    ]));
    $block->setConfigurationValue('pager_type', $form_state->getValue([
      'override',
      'pager_type'
    ]));
    $block->setConfigurationValue('offset', $form_state->getValue([
      'override',
      'offset'
    ]));
    $block->setConfigurationValue('show_exposed_filters', $form_state->getValue([
      'override',
      'show_exposed_filters'
    ]));
    $block->setConfigurationValue('show_more_link', $form_state->getValue([
      'override',
      'show_more_link'
    ]));
    $block->setConfigurationValue('pager_type', $form_state->getValue([
      'override',
      'pager_type'
    ]));

    $configuration = $this->setTranslatedConfigurationValue('use_more_text', $form_state->getValue([
      'override',
      'use_more_text'
    ]));
    $block->setConfigurationValue('translatable_configuration', $configuration);

    $block->setConfigurationValue('link_url', $form_state->getValue([
      'override',
      'link_url'
    ]));
    if ($items_per_page = $form_state->getValue([
      'override',
      'items_per_page'
    ])) {
      $block->setConfigurationValue('items_per_page', $items_per_page);
    }
    $form_state->unsetValue([
      'override',
      'items_per_page',
      'offset',
      'show_exposed_filters',
      'dont_hide_if_unfiltered_empty'
    ]);
    $form_state->unsetValue([
      'override',
      'items_per_page',
      'offset',
      'show_exposed_filters'
    ]);
  }

  protected $show_exposed_filteres = TRUE;
  protected $dont_hide_if_unfiltered_empty = FALSE;

  /**
   * {#inheritdoc}
   */
  public function preBlockBuild(ViewsBlock $block) {
    parent::preBlockBuild($block);
    $config = $block->getConfiguration();

    if (empty($config['show_exposed_filters']) || $config['show_exposed_filters'] === FALSE) {
      $this->show_exposed_filteres = FALSE;
    }
    if (!empty($config['dont_hide_if_unfiltered_empty']) && $config['dont_hide_if_unfiltered_empty']) {
      $this->dont_hide_if_unfiltered_empty = TRUE;
    }


    // Set offset value if configured.
    if ($config['offset'] !== '0') {
      $this->view->setOffset($config['offset']);
    }
    if (isset($_POST["offset"]) && $_POST["offset"] !== "") {
      $this->view->setOffset($_POST['offset']);
    }

    // Set items_per_page value if configured.
    if ($config['items_per_page'] !== '0' && $config["items_per_page"] != 'none') {
      $this->view->setItemsPerPage($config['items_per_page']);
    }
    else {
      // Otherwise use default.
      $this->view->setItemsPerPage($this->view->getPager()->options['items_per_page']);
    }

    // Set show more link if configured.
    if (!empty($config['show_more_link'])) {
      $this->options["use_more"] = TRUE;
      $this->setTranslatableConfiguration($config['translatable_configuration']);

      $this->options["use_more_text"] = $this->getTranslatedConfigurationValue('use_more_text');
      $this->options["link_display"] = TRUE;
      // Avoid the exception - InvalidArgumentException: The user-entered string '' must begin with a '/', '?', or '#'. in Drupal\Core\Url::fromUserInput()
      try {
        $url = Url::fromUserInput($config['link_url']);
      }
      catch (\InvalidArgumentException $exception) {
        $message = sprintf('The block %s has wrong broken url. (%s)', $block->getPluginId(), $exception->getMessage());
        \Drupal::logger('php')->error($message);
        if (\Drupal::currentUser()->hasPermission('Configure any layout') || \Drupal::currentUser()->hasPermission('create and edit custom blocks')) {
          \Drupal::messenger()->addError($message);
        }
        $url = Url::fromUserInput('/'. $config['link_url']);
      }
      $this->options['link_url'] = $url->toString();
    }

    // Change views style to default for 'infinite_scroll' and 'some' pager
    // options.
    if ($config['pager_type'] == 'some' || $config['pager_type'] == 'infinite_scroll') {
      // Reset the style to default if no pager is requested.
      $this->default_display->options["style"]['type'] = $this->options["style"]['type'] = 'default';
      $this->default_display->options["style"]['options'] = $this->options["style"]['options'] = [];

      // Reinitialize the style plugin.
      $this->view->style_plugin = NULL;
      $this->view->initStyle();
    }

    // On initial build, set items per page to 1. We will trigger an automatic load on pager init to load missing items.
    if (($config['pager_type'] == 'cmsg_pager' || (empty($config['pager_type']) && $this->view->getPager()->getPluginId() == 'cmsg_pager')) && !$this->view->getRequest()->isXmlHttpRequest()) {
      if ($this->view->getItemsPerPage() == 4) {
        $this->view->setItemsPerPage(2);
      }
      else {
        $this->view->setItemsPerPage(1);
      }
    }
    else {
      $debug = 1;
    }

    // Dynamically change items_per_page based on the view port.
    if (isset($_POST["items_per_page"])) {
      $this->view->setItemsPerPage($_POST["items_per_page"]);
    }

    // Change pager type if configured.
    if (!empty($config['pager_type'])) {
      $this->default_display->options["pager"]["type"] = $this->options["pager"]["type"] = $config['pager_type'];
      $this->default_display->options["pager"]["options"] = $this->options["pager"]["options"] = [
        'items_per_page' => $this->view->getItemsPerPage(),
        'offset' => $this->view->getOffset(),
        'views_infinite_scroll' => $this->view->getPager()->options['views_infinite_scroll'],
      ];
    }

    // Reinitialize the pager plugin for 'infinite_scroll' pager option.
    global $pager_page_array, $pager_total;
    global $pager_page_array_backup, $pager_total_backup;
//    $pager_total_backup[reset($pager_page_array)] = 0;
    if ($config['pager_type'] == 'infinite_scroll') {
      $this->view->pager = NULL;
      $this->view->initPager();
      $pager_page_array_backup =  $pager_page_array;
      $pager_total_backup = $pager_total;
      $debug = 1;
    }
  }

  /**
   * {@inheritdoc}
   */
  public function elementPreRender(array $element) {
    $section_storage = \Drupal::service('current_route_match')
      ->getParameter('section_storage');
    $layout = isset($section_storage) ? 'true' : 'false';

    $element['#view']->element['#cache']['tags'][] = 'layout:' . $layout;

    if (isset($section_storage)) {
      $variables['attributes']['class'][] = 'layout-builder-context';
    }

    if ($this->view->total_rows == 0 && !$this->view->getRequest()
        ->isXmlHttpRequest() && !$this->dont_hide_if_unfiltered_empty && !isset($section_storage)) {
      $element['#view']->empty = [];
    }

    // Pass the config to the view in order to use it in the template later.
    $element['#view']->show_exposed_filteres = $this->show_exposed_filteres;

    return parent::elementPreRender($element);
  }

  /**
   * Allows block views to put exposed filter forms in blocks.
   */
  public function usesExposedFormInBlock() {
    return TRUE;
  }

  /**
   * Block views use exposed widgets only if AJAX is set.
   */
  public function usesExposed() {
    return DisplayPluginBase::usesExposed();
  }

}
