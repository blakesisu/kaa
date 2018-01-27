import $ from 'jquery';
import Scroll from './Scroll';


if ($('body').hasClass('page-template-projects')) {
  // Create leader objects
  $('.proj-projects__project').each((i, el) => {
    /* eslint-disable no-new */
    new Scroll(el);
  });
}

