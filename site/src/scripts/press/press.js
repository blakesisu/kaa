import $ from 'jquery';
import Carousel from './Carousel';


if ($('body').hasClass('page-template-press') ||
  $('body').hasClass('post-type-archive-press')) {
  // Enable dropdown
  $('.press-media-dropdown').on('click', () => {
    $('.press-media-dropdown-container').toggle();
  });

  // Create carousel
  const magCarousel = new Carousel(
    '.press-media-mags',
    '.press-media-back',
    '.press-media-next'
  );

  magCarousel.setFilter(
    '.press-media-mags-wrapper',
    '.press-media-mag-item',
    '.press-media-mag-filter'
  );
}

