<?php

namespace Drupal\cmsg_base;

use Drupal\Core\Breadcrumb\Breadcrumb;
use Drupal\Core\Breadcrumb\BreadcrumbBuilderInterface;
use Drupal\Core\Link;
use Drupal\Core\Menu\MenuLinkManagerInterface;
use Drupal\Core\Routing\RouteMatchInterface;
use Drupal\Core\StringTranslation\StringTranslationTrait;
use Drupal\Core\Entity\EntityTypeManagerInterface;
use Drupal\node\Entity\NodeType;
use Drupal\node\NodeInterface;

/**
 * Provides a custom node breadcrumb builder that uses the term hierarchy.
 */
class NodeBreadcrumbBuilder implements BreadcrumbBuilderInterface {

  use StringTranslationTrait;

  /**
   * The entity type manager.
   *
   * @var \Drupal\Core\Entity\EntityTypeManager
   */
  protected $entityTypeManager;

  /**
   * A menu link manager instance.
   *
   * @var \Drupal\Core\Menu\MenuLinkManagerInterface
   */
  protected $menuLinkManager;

  /**
   * Constructs NodeBreadcrumbBuilder.
   *
   * @param \Drupal\Core\Entity\EntityTypeManagerInterface $entity_type_manager
   *   The entity type manager.
   * @param \Drupal\Core\Menu\MenuLinkManagerInterface $menuLinkManager
   *   A menu link manager instance.
   */
  public function __construct(
    EntityTypeManagerInterface $entity_type_manager,
    MenuLinkManagerInterface $menuLinkManager
  ) {
    $this->entityTypeManager = $entity_type_manager;
    $this->menuLinkManager = $menuLinkManager;
  }

  /**
   * {@inheritdoc}
   */
  public function applies(RouteMatchInterface $route_match) {
    return $route_match->getRouteName() == 'entity.node.canonical' && $route_match->getParameter('node') instanceof NodeInterface;
  }

  /**
   * {@inheritdoc}
   */
  public function build(RouteMatchInterface $route_match) {
    $breadcrumb = new Breadcrumb();

    /** @var \Drupal\node\NodeInterface $term */
    $node = $route_match->getParameter('node');
    $breadcrumb->addCacheableDependency($node);

    if ($menu_links = $this->menuLinkManager->loadLinksByRoute('entity.node.canonical', array('node' => $node->id()))) {
      if ($parent_link_id = reset($menu_links)->getParent()) {
        $parent = $this->menuLinkManager->getDefinition($parent_link_id);
        $breadcrumb->addCacheableDependency($parent);
        $breadcrumb->addLink(Link::createFromRoute($parent["title"], 'entity.node.canonical', ['node' => $parent["route_parameters"]["node"]]));
      }
    }

    if (empty($breadcrumb->getLinks())) {
      $node_type = NodeType::load($node->bundle());
      $breadcrumb->addCacheableDependency($node_type);
      if ($node->bundle() == 'blog_entry' || $node->bundle() == 'article') {
        // @todo: Link to /magazine
        $breadcrumb->setLinks([Link::createFromRoute($this->t('Publication'), '<front>')]);
      }
      elseif ($node->bundle() == 'page') {

      }
      else {
        $breadcrumb->setLinks([Link::createFromRoute($node_type->get('name'), '<none>')]);
      }
    }
    // This breadcrumb builder is based on a route parameter, and hence it
    // depends on the 'route' cache context.
    $breadcrumb->addCacheContexts(['route']);

    return $breadcrumb;
  }

}
