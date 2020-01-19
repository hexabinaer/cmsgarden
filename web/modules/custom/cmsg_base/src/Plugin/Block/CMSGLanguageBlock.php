<?php

namespace Drupal\cmsg_base\Plugin\Block;

use Drupal\Core\Url;
use Drupal\language\Plugin\Block\LanguageBlock;

/**
 * Provides a 'Language switcher' block.
 *
 * @Block(
 *   id = "cmsg_language_block",
 *   admin_label = @Translation("CMSG Language switcher"),
 *   category = @Translation("System"),
 *   deriver = "Drupal\language\Plugin\Derivative\LanguageBlock"
 * )
 */
class CMSGLanguageBlock extends LanguageBlock {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $route_name = $this->pathMatcher->isFrontPage() ? '<front>' : '<current>';
    $type = $this->getDerivativeId();
    $links = $this->languageManager->getLanguageSwitchLinks($type, Url::fromRoute($route_name));

    $current_lang_id = $this->languageManager->getCurrentLanguage()->getId();
    if (isset($links->links)) {
      unset($links->links[$current_lang_id]);
      foreach ($links->links as $lang_id => &$link) {
        $link['title'] = $lang_id;
        $link['attributes']['class'] = 'menu--item__language-switcher';
      }

      $build = [
        '#theme' => 'links__language_block',
        '#links' => $links->links,
        '#attributes' => [
          'class' => [
            "language-switcher-{$links->method_id}",
          ],
        ],
        '#set_active_class' => TRUE,
      ];
    }
    return $build;
  }

}
