<?php

namespace Drupal\cmsg_base\Plugin\Layout;

/**
 * Configurable one column layout plugin class.
 *
 * @internal
 *   Plugin classes are internal.
 */
class OneColumnLayout extends MultiWidthLayoutBase {

  /**
   * {@inheritdoc}
   */
  protected function getWidthOptions() {
    return [
      'is-10' => '10',
      'is-8' => '8',
      'is-full' => '100%',
    ];
  }

}
