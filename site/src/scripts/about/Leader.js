import $ from 'jquery';
import postal from 'postal';
import Window from '../common/window';
import { GLOBAL_CHANNEL } from '../constants/Constants';

const Leader = function (el) {
  const $el = $(el);
  const id = $el.attr('href').replace('#', '');
  const globalChannel = postal.channel(GLOBAL_CHANNEL);
  let scrollSub;

  const checkSizeAndPosition = function () {
    if ($el.offset().top - Window.scrollTop < Window.height - 50) {
      showItem();
    }
  };

  const showItem = function () {
    // Remove event listener now that we don't need the scroll position
    scrollSub.unsubscribe();

    // Fade element in at random offset so they don't all show at the same time
    setTimeout(() => {
      $el.addClass('is-visible');
    }, Math.floor(Math.random() * ((500 + 1) + 1)));
  };

  // On link click
  $el.click((e) => {
    e.preventDefault();
    // Publish the id
    globalChannel.publish('modal.open', id);
  });

  // Listen for window resize
  globalChannel.subscribe('window.resize', () => {
    checkSizeAndPosition();
  });

  // Listen for window scroll
  scrollSub = globalChannel.subscribe('window.scroll', () => {
    checkSizeAndPosition();
  });

  // Check when page first loads
  checkSizeAndPosition();
};

export default Leader;
