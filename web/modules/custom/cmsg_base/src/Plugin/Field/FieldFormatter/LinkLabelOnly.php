<?php

namespace Drupal\cmsg_base\Plugin\Field\FieldFormatter;

use Drupal\Core\Field\FormatterBase;
use Drupal\Core\Field\FieldItemListInterface;

/**
 * Plugin implementation of the 'cmsg_link_label_only' formatter.
 *
 * @FieldFormatter(
 *   id = "cmsg_link_label_only",
 *   label = @Translation("CMSG Link label only"),
 *   field_types = {
 *     "link"
 *   }
 * )
 */
class LinkLabelOnly extends FormatterBase {

  /**
   * {@inheritdoc}
   */
  public function settingsSummary() {
    $summary = [];
    $summary[] = $this->t('Displays the link label.');
    return $summary;
  }

  /**
   * {@inheritdoc}
   */
  public function viewElements(FieldItemListInterface $items, $langcode) {
    $element = [];

    foreach ($items as $delta => $item) {
      $value = $item->getValue();
      // Render each element as markup.
      $element[$delta] = ['#markup' => $value['title']];
    }

    return $element;
  }

}
