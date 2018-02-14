import $ from 'jquery';
import Scroll from './Scroll';

const $body = $('body');

if ($body.hasClass('page-template-projects') ||
  $body.hasClass('post-type-archive-projects') ||
  $body.hasClass('tax-project_category')) {
  // Create leader objects
  $('.proj-projects__project').each((i, el) => {
    /* eslint-disable no-new */
    new Scroll(el);
  });
}

