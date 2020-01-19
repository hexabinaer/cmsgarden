/**
 * @file
 * Provides custom JS for the cmsg pager.
 */

(function ($, Drupal, drupalSettings) {

  'use strict';

  // The selector for both manual load and automatic pager.
  var pagerSelector = '[data-drupal-views-infinite-scroll-pager]';

  // The selector for the automatic pager.
  var contentWrapperSelector = '[data-drupal-views-infinite-scroll-content-wrapper]';

  /**
   * @type {Drupal~behavior}
   */
  Drupal.behaviors.cmsgPager = {
    attach: function (context, settings) {

      $('.slick').parents(contentWrapperSelector).once('CMSGPager').each(function () {

        // Extract the view DOM ID from the view classes.
        var matches = /(js-view-dom-id-\w+)/.exec($(this).parents('.view').attr('class'));
        var currentDomId = matches[1].replace('js-view-dom-id-', '');
        let $view = $(this).parents('.view');

        // Append pager template.
        $(this).children().prepend(Drupal.theme.cmsg_pager());

        if (settings.cmsg_pager[currentDomId]) {
          var total_rows = settings.cmsg_pager[currentDomId].total_rows;
          var total_pages;

          $view.find('.slick__slider').on('afterChange init', function (e, index) {
            total_pages = Math.ceil(total_rows / (index.options.slidesToShow * index.options.rows));
            let current = index.currentSlide / ((index.options.slidesToShow) * index.options.rows) + 1;
            $view.find('.cmsg-pager__current').text(current);
            $view.find('.cmsg-pager__total').text(total_pages);

            $view.find('.cmsg-pager-prev').attr('disabled', (current == 1));
            $view.find('.cmsg-pager-next').attr('disabled', (current == total_pages));
          });

          // Hide infinite scroll and slick controls.
          $(this).find('.slick__arrow').hide();
          $view.find(pagerSelector).hide();

          // Build custom click logic.
          $(this).find('.cmsg-pager-prev').click(function (e) {
            $view.find('.slick-prev').trigger('click');
          });

          $(this).find('.cmsg-pager-next').click(function (e) {
            // If there is no more content so slide to, request it via infinite scroll.
            if ($view.find('.slick-next').hasClass('slick-disabled') || $view.find('.slick-next').hasClass('slick-hidden')) {
              $view.find(pagerSelector).find('a').trigger('click');
            }
            else {
              $view.find('.slick-next').trigger('click');
            }
          });

          var touchStart = 0, touchDistance = 0;
          var condition = (window.innerWidth / 3);
          $(this).find('.slick__slider').on('touchstart', function (e) {
            touchStart = e.touches[0].clientX;
            touchDistance = 0;
            $(this).on('touchmove', function (e) {
              touchDistance = e.touches[0].clientX;

              if ((touchStart - touchDistance) > condition) {
                touchStart = touchDistance;

                // If there is no more content so slide to, request it via infinite scroll.
                if ($view.find('.slick-next').hasClass('slick-disabled') || $view.find('.slick-next').hasClass('slick-hidden')) {
                  $view.find(pagerSelector).find('a').trigger('click');
                }
                else {
                  $view.find('.slick-next').trigger('click');
                }
              }
            });
          });
        }

        // React on adding items to slick.
        let run, track;
        $view.find('.slick__slider').on('reInit', function () {
          track = true;
          // Click on the next button till it works (it takes some time, since slick manipulates the markup).
          run = setInterval(function () {
            $view.find('.slick__slider').slick('slickNext');
            // Refresh since config can change.
            setTimeout(function () {
              $view.find('.slick__slider').slick('refresh');
            }, 1500);
          }, 100);
          $view.find('.slick__slider').on('afterChange', function () {
            // Make sure this does not end in endless calls.
            if (track) {
              setTimeout(function () {
                clearInterval(run);
              }, 1000);
              track = false;
            }
          });
        });

        // Trigger click on init to load more items on higher resolutions.
        let slickConfig = $view.find('.slick__slider').data('slick');
        var browserWith = window.innerWidth;
        $view.once('initTrigger').find('.slick__slider').on('init', function (e, index) {
          if (slickConfig && slickConfig.hasOwnProperty('responsive')) {
            slickConfig['responsive'].forEach(function (config) {
              // Not on moobile.
              if (browserWith > config.breakpoint && config.breakpoint !== 1) {
                $view.find('.cmsg-pager-next').trigger('click');
              }
            });
          }
        });

      });
    }
  };

  /**
   * Insert a views infinite scroll view into the slick slider.
   *
   * @param {jQuery} $newView
   *   New content detached from the DOM.
   */
  $.fn.CMSGPagerInsertView = function ($newView) {
    // Extract the view DOM ID from the view classes.
    var matches = /(js-view-dom-id-\w+)/.exec(this.attr('class'));
    var currentViewId = matches[1].replace('js-view-dom-id-', 'views_dom_id:');

    // Get the existing ajaxViews object.
    var view = Drupal.views.instances[currentViewId];
    // Remove once so that the exposed form and pager are processed on
    // behavior attach.
    view.$view.removeOnce('ajax-pager');
    view.$exposed_form.removeOnce('exposed-form');
    // Make sure infinite scroll can be reinitialized.
    var $existingPager = view.$view.find(pagerSelector);
    $existingPager.removeOnce('infinite-scroll');

    // Check if we have a slick slider.
    var $newRows = $newView.find(contentWrapperSelector).find('.slick__slide').children();
    var rows = '';
    $newRows.each(function () {
      rows += '<div><div>' + $(this).wrapAll('<div>').parent().html() + '</div></div>';
    });
    // Add the new rows to existing view slick carousel.
    view.$view.find('.slick__slider').slick('slickAdd', rows);

    // Replace the pager link with the new link and ajaxPageState values.
    var $newPager = $newView.find(pagerSelector);
    $existingPager.replaceWith($newPager);
    $newPager.hide();

    // Run views and VIS behaviors.
    Drupal.attachBehaviors(view.$view[0]);
  };

  /**
   * GDAP Pager theme function.
   *
   * Adds custom buttons and counter display for the cmsg pager.
   *
   * @returns {string}
   */
  Drupal.theme.cmsg_pager = function () {
    return '' +
      '<div class="cmsg-pager column is-full-desktop">' +
      '<span class="cmsg-pager__current">1</span>' +
      '<span class="cmsg-pager__total">1</span>' +
      '</div>' +
      '<nav class="cmsg-pager__arrow column is-2-desktop is-1-widescreen">' +
      '<button type="button" data-role="none" class="cmsg-pager-prev cmsg-pager-arrow" aria-label="Previous" aria-disabled="true" disabled>' +
      Drupal.t('Previous') +
      '</button>' +
      '<button type="button" data-role="none" class="cmsg-pager-next cmsg-pager-arrow" aria-label="Next" aria-disabled="false" disabled>' +
      Drupal.t('Next') +
      '</button>' +
      '</nav>'
      ;
  };

})(jQuery, Drupal, drupalSettings);
