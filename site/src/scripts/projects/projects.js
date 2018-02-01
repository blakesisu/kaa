import $ from 'jquery';
import Scroll from './Scroll';


if ($('body').hasClass('page-template-projects') ||
  $('body').hasClass('post-type-archive-projects')) {
  // Create leader objects
  $('.proj-projects__project').each((i, el) => {
    /* eslint-disable no-new */
    new Scroll(el);
  });
}

