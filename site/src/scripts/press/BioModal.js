import $ from 'jquery';
import postal from 'postal';
import { GLOBAL_CHANNEL } from '../constants/Constants';

const BioModal = function (el) {
  const $el = $(el);
  const id = $el.attr('id');
  const $closeBtn = $el.find('.ab-bio__close-btn');
  const globalChannel = postal.channel(GLOBAL_CHANNEL);

  // Open modal
  const openModal = function () {
    // Set the element's visibility and opacity before animating it
    // so it doesn't just snap into view
    $el.css({ visibility: 'visible', opacity: 0 }).animate({
      opacity: 1
    }, 200, 'easeOutQuad', () => {
      // Clear out the inline styles so things work responsively
      $el.addClass('is-open').attr('style', '');
    });
  };

  // Listen for 'open.modal' publish
  globalChannel.subscribe('modal.open', (newId) => {
    if (newId === id) {
      openModal();
    }
  });

  // On close button click
  $closeBtn.click((e) => {
    e.preventDefault();
    closeModal();
  });

  // Close modal
  const closeModal = function () {
    $el.animate({
      opacity: 0
    }, 200, 'easeOutQuad', () => {
      $el.removeClass('is-open').attr('style', '');
    });
  };
};

export default BioModal;
