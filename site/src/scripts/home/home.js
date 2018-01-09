import $ from 'jquery';
import './instagram';
import Grid from './Grid';

if ($('body').hasClass('home')) {
  const grids = [];
  $('.hm-grid').each((i, el) => {
    grids.push(new Grid(el, i));
  });
}
