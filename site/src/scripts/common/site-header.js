import $ from 'jquery';

const $dropDown = $('.header-drop-down');
const $btn = $dropDown.find('.header-drop-down__btn');
const $list = $dropDown.find('.header-drop-down__list');
const $items = $dropDown.find('.header-drop-down__item');
let isOpen = false;

const openDropDown = function () {
  isOpen = true;

  // Get the list's current height
  // The list is absolutely positioned off the left of the screen
  const newHeight = $list.height();

  // Set the height to zero
  $list.css('height', 0);

  // Move the list into view
  $list.addClass('is-open');

  // Turn the arrow 180 deg
  $btn.addClass('is-open');

  // Animate the list open
  $list.css('height', 0).animate({
    height: newHeight
  }, 500, 'easeInOutCubic', () => {
    // Remove inline styles so things work responsively
    $list.attr('style', '');
  });

  // Animate the list items
  setTimeout(() => {
    $items.each((i, el) => {
      setTimeout(() => {
        $(el).addClass('is-visible');
      }, i * 80);
    });
  }, 100);
};

const closeDropDown = function () {
  isOpen = false;

  // Turn the arrow 180 deg
  $btn.removeClass('is-open');

  // reverse the links using reverse loop
  $($dropDown.find('.header-drop-down__item').get().reverse()).each((i, el) => {
    setTimeout(() => {
      $(el).removeClass('is-visible');
    }, i * 100);
  });

  setTimeout(() => {
    $list.animate({
      height: 0
    }, 500, 'easeInOutCubic', () => {
      // Remove class and inline styles so things work responsively
      $list.removeClass('is-open').attr('style', '');
    });
  }, 100);
};

$btn.on('click', (e) => {
  e.preventDefault();
  if (isOpen) {
    closeDropDown();
  } else {
    openDropDown();
  }
});

