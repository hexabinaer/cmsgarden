/**
 * @file
 * Provides custom JS for the cmsg layout navigation.
 */

(function ($, Drupal) {

  'use strict';

  /**
   * @type {Drupal~behavior}
   *
   * @todo: Hide if there is only one visible element.
   */
  Drupal.behaviors.cmsgLayoutNavigation = {
    attach: function (context, settings) {
      let target, timer = 0;
      $('.block-cmsg-layout-navigation').once('cmsgLayoutNavigation').find('a').each(function () {
        target = $(this).attr('href');
        if ($(target).length == 0) {
          $(this).parents('li').remove();
        }
        else {
          timer += 600;
          $(this).parents('li').fadeIn(timer);
        }
      });
    }
  };

  /**
   * @type {Drupal~behavior}
   */
  Drupal.behaviors.cmsgLayoutNavigationMobile = {
    attach: function (context, settings) {
      $(".block-cmsg-layout-navigation h3").once('navbarBurger').click(function () {
        $(this).toggleClass('is-open').next('ol').slideToggle();
      });
    }
  };

})(jQuery, Drupal);
