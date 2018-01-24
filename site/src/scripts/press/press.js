import $ from 'jquery';


if ($('body').hasClass('page-template-press')) {
  // Create leader objects
  $('.press-media-dropdown').on('click', function(ev) {
    $('.press-media-dropdown-container').toggle();
  });
}

