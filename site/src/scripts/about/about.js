import $ from 'jquery';
import BioModal from './BioModal';
import Leader from './Leader';


if ($('body').hasClass('page-template-about')) {
  // Create leader objects
  $('.about-family-link').each((i, el) => {
    /* eslint-disable no-new */
    new Leader(el);
  });

  // Create modal objects
  $('.ab-bio').each((i, el) => {
    /* eslint-disable no-new */
    new BioModal(el);
  });
}

