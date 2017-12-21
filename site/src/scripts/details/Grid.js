import $ from 'jquery';
import postal from 'postal';
import { GLOBAL_CHANNEL } from '../constants/Constants';

const Grid = function (el) {
  const $el = $(el);
  const $imgBlock = $(el).find('.pd-grid__block--image');
  const $img = $(el).find('.pd-grid__img');
  const $textBlock = $el.find('.pd-grid__block--text');
  const $text = $el.find('.pd-grid__block-text-container');
  const channel = postal.channel(GLOBAL_CHANNEL);

  const checkHeights = function () {
    // if text height matches height of container
    if ($text.outerHeight(true) >= $textBlock.outerHeight()) {
      $el.addClass('has-max-text');
    }

    // if image is narrower that container
    if ($img.width() <= $imgBlock.width()) {
      $el.removeClass('has-max-text');
    }
  };

  // if there is text and an image
  if ($textBlock.length > 0 && $imgBlock.length > 0) {
    // Listen for window resize
    channel.subscribe('window.resize', () => {
      checkHeights();
    });

    // Check height on page load
    checkHeights();
  }
};

export default Grid;
