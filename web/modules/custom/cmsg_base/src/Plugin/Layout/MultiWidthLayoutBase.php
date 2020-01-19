<?php

namespace Drupal\cmsg_base\Plugin\Layout;

use Drupal\Component\Utility\Html;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Layout\LayoutDefault;
use Drupal\Core\Plugin\PluginFormInterface;
use Drupal\cmsg_base\LayoutConfigTranslationTrait;

/**
 * Base class of layouts with configurable widths.
 *
 * @internal
 *   Plugin classes are internal.
 */
abstract class MultiWidthLayoutBase extends LayoutDefault implements PluginFormInterface {

  use LayoutConfigTranslationTrait;

  /**
   * {@inheritdoc}
   */
  public function defaultConfiguration() {
    $width_classes = array_keys($this->getWidthOptions());
    return [
      'column_widths' => array_shift($width_classes),
      'offset' => 'is-offset-1',
      'background' => 'transparent',
      'section_headline' => array(
        'format' => 'accessible_html',
        'value' => '',
      ),
      'layout_menu_headline' => array(
        'format' => 'accessible_html',
        'value' => '',
      ),
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function buildConfigurationForm(array $form, FormStateInterface $form_state) {
    $form['column_widths'] = [
      '#type' => 'select',
      '#title' => $this->t('Column widths'),
      '#default_value' => $this->configuration['column_widths'],
      '#options' => $this->getWidthOptions(),
      '#description' => $this->t('Choose the column widths for this layout.'),
    ];

    $form['offset'] = [
      '#type' => 'select',
      '#title' => $this->t('Offset'),
      '#default_value' => $this->configuration['offset'],
      '#options' => [
        'no-offset' => $this->t('No offset'),
        'is-offset-1' => $this->t('Offset 1'),
        'is-offset-2' => $this->t('Offset 2'),
      ],
      '#description' => $this->t('Choose the column widths for this layout.'),
    ];

    $form['background'] = [
      '#type' => 'select',
      '#title' => $this->t('Background'),
      '#default_value' => $this->configuration['background'],
      '#options' => [
        'transparent' => $this->t('Transparent'),
        'blue-lighter' => $this->t('Blue lighter'),
        'primary' => $this->t('Primary'),
        'grey-lighter' => $this->t('Grey lighter'),
        'blue-gradient' => $this->t('Blue gradient'),
        'blue-gradient-light' => $this->t('Blue gradient light'),
      ],
      '#description' => $this->t('Choose the column widths for this layout.'),
    ];

    $form['section_headline'] = [
      '#type' => 'text_format',
      '#title' => $this->t('Section headline'),
      '#default_value' => $this->getTranslatedConfigurationValue('section_headline')['value'],
      '#base_type' => 'textfield',
      '#format' => $this->getTranslatedConfigurationValue('section_headline')['format'],
      '#allowed_formats' => ['accessible_html'],
    ];

    $form['layout_menu_headline'] = [
      '#type' => 'text_format',
      '#title' => $this->t('Layout menu headline'),
      '#description' => $this->t('This field can be used to override the layout menu item.'),
      '#default_value' => $this->getTranslatedConfigurationValue('layout_menu_headline')['value'],
      '#base_type' => 'textfield',
      '#format' => $this->getTranslatedConfigurationValue('layout_menu_headline')['format'],
      '#allowed_formats' => ['accessible_html'],
    ];

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function validateConfigurationForm(array &$form, FormStateInterface $form_state) {
  }

  /**
   * {@inheritdoc}
   * Test <span lang="en">Screen</span> whatever
   */
  public function submitConfigurationForm(array &$form, FormStateInterface $form_state) {
    $this->configuration['column_widths'] = $form_state->getValue('column_widths');
    $this->configuration['offset'] = $form_state->getValue('offset');
    $this->configuration['background'] = $form_state->getValue('background');
    $this->setTranslatedConfigurationValue('section_headline', $form_state->getValue('section_headline'));
    $this->setTranslatedConfigurationValue('layout_menu_headline', $form_state->getValue('layout_menu_headline'));
  }

  /**
   * {@inheritdoc}
   */
  public function build(array $regions) {
    $build = parent::build($regions);

    $build['#section_headline'] = [
      '#type' => 'processed_text',
      '#text' => $this->getTranslatedConfigurationValue('section_headline')['value'],
      '#format' => $this->getTranslatedConfigurationValue('section_headline')['format'],
    ];

    $build['#attributes']['class'] = [
      $this->getPluginDefinition()->getTemplate(),
      $this->getPluginDefinition()->getTemplate() . '--' . $this->configuration['column_widths'],
      $this->configuration['background'] != 'transparent' ? 'has-background-' . $this->configuration['background'] : '',
    ];
    $build['#attributes']['id'] = [
      !empty($this->getTranslatedConfigurationValue('section_headline')['value']) ? Html::cleanCssIdentifier($this->getTranslatedConfigurationValue('section_headline')['value']) : Html::cleanCssIdentifier($this->getTranslatedConfigurationValue('layout_menu_headline')['value'])
    ];

    return $build;
  }

  /**
   * Gets the width options for the configuration form.
   *
   * The first option will be used as the default 'column_widths' configuration
   * value.
   *
   * @return string[]
   *   The width options array where the keys are strings that will be added to
   *   the CSS classes and the values are the human readable labels.
   */
  abstract protected function getWidthOptions();

}
