<?php


namespace Drupal\cmsg_base\Plugin\views\pager;

use Drupal\views\Plugin\views\pager\SqlBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\views_infinite_scroll\Plugin\views\pager\InfiniteScroll;

/**
 * Views pager plugin to handle custom CMSG pager.
 *
 * @ViewsPager(
 *  id = "cmsg_pager",
 *  title = @Translation("CMSG Pager (with Infinite Scroll)"),
 *  short_title = @Translation("CMSG pager"),
 *  help = @Translation("Custom pager for CMSG which uses infinte scroll in combination with a slick carousel."),
 *  theme = "views_infinite_scroll_pager"
 * )
 */
class CMSGPager extends InfiniteScroll {

  /**
   * {@inheritdoc}
   */
  public function render($input) {
    if ($this->view->total_rows == 0) {
      return [];
    }

    $build = parent::render($input);
    $build['#attached']['library'] = ['cmsg_base/cmsg-pager'];
    $build['#attached']['drupalSettings']['cmsg_pager'][$this->view->dom_id] = [
      'total_rows' => $this->view->total_rows,
      'items_per_page' => $this->view->getItemsPerPage(),
      'offset' => $this->view->getOffset(),
      'current_page' => $this->getCurrentPage(),
    ];

    return $build;
  }

  /**
   * {@inheritdoc}
   */
  public function query() {
    parent::query();
    $this->view->get_total_rows = TRUE;
  }

}
