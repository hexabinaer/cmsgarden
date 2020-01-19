<?php

namespace Drupal\cmsg_base\Plugin\Layout;

use Drupal\Core\Form\FormStateInterface;

/**
 * Configurable two column layout plugin class.
 *
 * @internal
 *   Plugin classes are internal.
 */
class TwoColumnLayout extends MultiWidthLayoutBase {

  /**
   * {@inheritdoc}
   */
  public function defaultConfiguration() {
    $default_config = parent::defaultConfiguration();
    $default_config['offset2'] = 'no-offset';
    return $default_config;
  }

  /**
   * {@inheritdoc}
   */
  protected function getWidthOptions() {
    return [
      'is-6:is-4' => '6/4',
      'is-4:is-6' => '4/6',
      'is-3:is-6' => '3/6',
      'is-5:is-2' => '5/2',
      'is-5:is-3' => '5/3',
      'is-6:is-3' => '6/3',
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function buildConfigurationForm(array $form, FormStateInterface $form_state) {
    $form = parent::buildConfigurationForm($form, $form_state);

    $form['offset2'] = [
      '#type' => 'select',
      '#title' => $this->t('Offset second column'),
      '#default_value' => $this->configuration['offset2'],
      '#options' => [
        'no-offset' => $this->t('No offset'),
        'is-offset-1' => $this->t('Offset 1'),
        'is-offset-2' => $this->t('Offset 2'),
      ],
      '#description' => $this->t('Choose the offset for the second column.'),
    ];

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function submitConfigurationForm(array &$form, FormStateInterface $form_state) {
    parent::submitConfigurationForm($form, $form_state);
    $this->configuration['offset2'] = $form_state->getValue('offset2');
  }
}
