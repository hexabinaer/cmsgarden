<?php

namespace Drupal\cmsg_base\Plugin\Field\FieldFormatter;

use Drupal\Core\Field\FormatterBase;
use Drupal\Core\Field\FieldItemListInterface;

/**
 * Plugin implementation of the 'cmsg_address_location_only' formatter.
 *
 * @FieldFormatter(
 *   id = "cmsg_address_location_only",
 *   label = @Translation("CMSG Address location only"),
 *   field_types = {
 *     "address"
 *   }
 * )
 */
class AddressLocationOnly extends FormatterBase {

  /**
   * {@inheritdoc}
   */
  public function settingsSummary() {
    $summary = [];
    $summary[] = $this->t('Displays the address location.');
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
      $element[$delta] = ['#markup' => $value['locality']];
    }

    return $element;
  }

}
