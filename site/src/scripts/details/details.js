import $ from 'jquery';
import postal from 'postal';
import Grid from './Grid';

if ($('body').hasClass('page-template-details') || $('body').hasClass('projects-template-default')) {
  // for each grid item create a Grid object
  $('.pd-grid').each((i, el) => {
    /* eslint-disable no-new */
    new Grid(el);
  });
}

