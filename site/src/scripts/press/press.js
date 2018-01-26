import $ from 'jquery';
import Carousel from './Carousel';


if ($('body').hasClass('page-template-press')) {
  // Enable dropdown
  $('.press-media-dropdown').on('click', function(ev) {
    $('.press-media-dropdown-container').toggle();
  });

  // Create carousel
  const magCarousel = new Carousel('.press-media-mags');
}

