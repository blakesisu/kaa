import $ from 'jquery';
// import postal from 'postal';
// import { GLOBAL_CHANNEL } from '../constants/Constants';

const BioModal = function (el) {
  const $el = $(el);
  const $link = $(el).find('.about-family-link');
  const $bio = $(el).find('.about-family-bio');

  $link.on('click', (e) => {
    const targetedPopup = $bio.attr('data-popup-open');
    $(`[data-popup="${targetedPopup}"]`).fadeIn(300);

    e.preventDefault();
  })


  $('[data-popup-close]').on('click', function(e) {
    const targetedPopup = $(this).attr('data-popup-close');
    $(`[data-popup="${targetedPopup}"]`).fadeOut(300);

    e.preventDefault();
  })
}

export default BioModal;
