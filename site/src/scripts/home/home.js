import $ from 'jquery';
import './instagram';
import Grid from './Grid';

if ($('body').hasClass('page-template-home')) {
  const grids = [];
  const $heroImg = $('.hm-hero__img');

  // Init grid functionality
  $('.hm-grid').each((i, el) => {
    grids.push(new Grid(el, i));
  });

  // Fade and zoom the hero image
  $heroImg.addClass('is-loaded');
}
