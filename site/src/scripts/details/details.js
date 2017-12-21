import $ from 'jquery';
import postal from 'postal';
import Grid from './Grid';

if ($('body').hasClass('page-template-details')) {
  // for each grid item create a Grid object
  $('.pd-grid').each((i, el) => {
    /* eslint-disable no-new */
    new Grid(el);
  });
}

