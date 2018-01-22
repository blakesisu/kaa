import $ from 'jquery';
// import postal from 'postal';
import BioModal from './BioModal';
import Visible from './Visible';


// jquery visible plugin
(function($) {

  /**
   * Copyright 2012, Digital Fusion
   * Licensed under the MIT license.
   * http://teamdf.com/jquery-plugins/license/
   *
   * @author Sam Sehnert
   * @desc A small plugin that checks whether elements are within
   *     the user visible viewport of a web browser.
   *     only accounts for vertical position, not horizontal.
   */

  $.fn.visible = function(partial) {

      var $t            = $(this),
          $w            = $(window),
          viewTop       = $w.scrollTop(),
          viewBottom    = viewTop + $w.height(),
          _top          = $t.offset().top,
          _bottom       = _top + $t.height(),
          compareTop    = partial === true ? _bottom : _top,
          compareBottom = partial === true ? _top : _bottom;

    return ((compareBottom <= viewBottom) && (compareTop >= viewTop));

  };

})($);

if ($('body').hasClass('page-template-about')) {
  // for each person create a modal object
  let family = $('.about-family-person');
  // $('.about-family-person').each((i, el) => {
  family.each((i, el) => {
    /* eslint-disable no-new */
    new BioModal(el);
  });

  // add scroll effect to each bio block
  new Visible(family);
}
