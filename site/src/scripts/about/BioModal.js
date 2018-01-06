import $ from 'jquery';
// import postal from 'postal';
// import { GLOBAL_CHANNEL } from '../constants/Constants';

const BioModal = function (el) {
  const $el = $(el);
  const $link = $(el).find('.about-family-link');
  const $bio = $(el).find('.about-family-bio');

  $link.on('click', (e) => {
    const targetedPopup = $bio.attr('data-popup-open');
    console.log('open sesame see popup', targetedPopup);
    $(`[data-popup="${targetedPopup}"]`).fadeIn(350);
    $('.about-family').css('pointer-events', 'none');

    e.preventDefault();
  })


  $('[data-popup-close]').on('click', function(e) {
    console.log('close the sesame');
    const targetedPopup = $(this).attr('data-popup-close');
    $(`[data-popup="${targetedPopup}"]`).fadeOut(350);
    $('.about-family').css('pointer-events', '');

    e.preventDefault();
  })
}

export default BioModal;
