<?php

namespace Drupal\cmsg_base\Plugin\Layout;

/**
 * Configurable three column layout plugin class.
 *
 * @internal
 *   Plugin classes are internal.
 */
class ThreeColumnLayout extends MultiWidthLayoutBase {

  /**
   * {@inheritdoc}
   */
  protected function getWidthOptions() {
    return [
      'is-one-quarter-desktop:is-half-desktop:is-one-quarter-desktop' => '25%/50%/25%',
      'is-one-third-desktop:is-auto:is-auto' => '33%/34%/33%',
      'is-one-quarter-desktop:is-one-quarter-desktop:is-half-desktop' => '25%/25%/50%',
      'is-half-desktop:is-one-quarter-desktop:is-one-quarter-desktop' => '50%/25%/25%',
    ];
  }

}
