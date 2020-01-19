<?php

namespace Drupal\cmsg_base\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\node\NodeInterface;
use Drupal\taxonomy\TermInterface;
use Drupal\user\Entity\User;
use Drupal\user\UserInterface;

/**
 * Provides a block that contains the page title, the submenu and the breadcrumb.
 *
 * @Block(
 *   id = "cmsg_page_title",
 *   admin_label = @Translation("CMSG Page title")
 * )
 */
class CMSGPageTitleBlock extends BlockBase
{

  /**
   * Build block's output.
   */
  public function build()
  {
    $build = [];
    if ($node = \Drupal::routeMatch()->getParameter('node')) {
      $build = $this->buildNode($node);
    } elseif ($taxonomy_term = \Drupal::routeMatch()
      ->getParameter('taxonomy_term')) {
      $build = $this->buildTaxonomyTerm($taxonomy_term);
    } elseif ($user = \Drupal::routeMatch()->getParameter('user')) {
      if (!$user instanceof UserInterface) {
        $user = \Drupal::entityTypeManager()->getStorage('user')->load($user);
      }
      $build = $this->buildUser($user);
    } else {
      $request = \Drupal::request();
      $route_match = \Drupal::routeMatch();
      $title = \Drupal::service('title_resolver')
        ->getTitle($request, $route_match->getRouteObject());
      $debug = 1;
      $build = [
        '#theme' => 'cmsg_title_block',
        '#title' => $title,
      ];
    }


    $build['#breadcrumb'] = \Drupal::service('breadcrumb')
      ->build(\Drupal::routeMatch())
      ->toRenderable();


    $tabs = \Drupal::service('plugin.manager.block')
      ->createInstance('local_tasks_block', []);
    $build['#tabs'] = $tabs->build();

    return $build;
  }

  protected function buildTaxonomyTerm(TermInterface $taxonomy_term)
  {
    if ($taxonomy_term->bundle() == 'content_management_systems') {
      return [
        '#theme' => 'cmsg_cms_title_block',
        '#title' => '',
        '#menu' => '',
      ];
    }
  }

  protected function buildNode(NodeInterface $node)
  {
    if ($node->bundle() == 'page') {
      $menu_link_manager = \Drupal::service('plugin.manager.menu.link');
      $result = $menu_link_manager->loadLinksByRoute('entity.node.canonical', array('node' => $node->id()));
      $menu = [];
      if (!empty($result)) {
        $menu_name = reset($result)->getMenuName();
        $menu = \Drupal::service('plugin.manager.block')
          ->createInstance("system_menu_block:$menu_name", [
            'level' => 2,
            'depth' => 2
          ]);
        $menu = $menu->build();
      }

      return [
        '#theme' => 'cmsg_title_block',
        '#title' => $node->getTitle(),
        '#menu' => $menu,
      ];
    }

  }

}
