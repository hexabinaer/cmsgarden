<?php

namespace Drupal\cmsg_base\Plugin\Block;

use Drupal\Component\Utility\Html;
use Drupal\Core\Block\BlockBase;
use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
use Drupal\Core\Plugin\Context\EntityContext;
use Drupal\Core\Routing\RouteMatchInterface;
use Drupal\Core\Url;
use Drupal\cmsg_base\LayoutConfigTranslationTrait;
use Drupal\layout_builder\LayoutEntityHelperTrait;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Provides a block that links to all sections in a layout.
 *
 * @Block(
 *   id = "cmsg_layout_navigation",
 *   admin_label = @Translation("CMSG layout navigation")
 * )
 */
class CMSGLayoutNavigation extends BlockBase implements ContainerFactoryPluginInterface {

  use LayoutConfigTranslationTrait;
  use LayoutEntityHelperTrait;

  /**
   * Current route match service.
   *
   * @var \Drupal\Core\Routing\RouteMatchInterface
   */
  protected $routeMatch;

  /**
   * {@inheritdoc}
   *
   * @param \Drupal\Core\Routing\RouteMatchInterface $route_match
   *   The "current_route_match" service.
   */
  public function __construct(array $configuration, $plugin_id, $plugin_definition, RouteMatchInterface $route_match) {
    parent::__construct($configuration, $plugin_id, $plugin_definition);
    $this->routeMatch = $route_match;
    $this->setConfiguration($configuration);
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition) {
    return new static(
      $configuration,
      $plugin_id,
      $plugin_definition,
      $container->get('current_route_match')
    );
  }

  /**
   * Build block's output.
   */
  public function build() {
    $block_configuration = $this->configuration;

    // Determine which section storage to load.
    if (empty($section_storage = $this->routeMatch->getParameter('section_storage'))) {
      if ($this->routeMatch->getParameter('node')) {
        $section_storage = $this->getSectionStorageForEntity($this->routeMatch->getParameter('node'));
      }
      if ($this->routeMatch->getParameter('taxonomy_term')) {
        $section_storage = $this->getSectionStorageForEntity($this->routeMatch->getParameter('taxonomy_term'));
      }
    }

    $items = [];
    if ($section_storage) {
      foreach ($section_storage->getSections() as $section) {
        $this->configuration = $section->getLayoutSettings();
        $value = empty($this->getTranslatedConfigurationValue('layout_menu_headline')['value']) ? $this->getTranslatedConfigurationValue('section_headline')['value'] : $this->getTranslatedConfigurationValue('layout_menu_headline')['value'];
        $anchor = !empty($this->getTranslatedConfigurationValue('section_headline')['value']) ? $this->getTranslatedConfigurationValue('section_headline')['value'] : $this->getTranslatedConfigurationValue('layout_menu_headline')['value'];
        if (!empty($value) && !empty($anchor)) {
          $url = Url::fromUserInput('#' . Html::cleanCssIdentifier($anchor));
          $items[] = [
            '#type' => 'link',
            '#url' => $url,
            '#title' => $value,
            '#wrapper_attributes' => [
              'style' => 'display:none;'
            ],
          ];
        }
      }
    }

    $this->configuration = $block_configuration;
    return [
      '#theme' => 'item_list',
      '#title' => $this->t('Content navigation'),
      '#list_type' => 'ol',
      '#items' => $items,
      '#attached' => [
        'library' => ['cmsg_base/cmsg-layout-navigation']
      ]
    ];
  }
}
