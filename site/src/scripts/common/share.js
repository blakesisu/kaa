import $ from 'jquery';

const $houzzLink = $('.share__link--houzz');

const loadHouzzBookmarklet = function () {
  const head = document.getElementsByTagName('head')[0];
  const script = document.createElement('script');
  script.type = 'text/javascript';
  script.src = `//www.houzz.com/js/clipperBookmarklet.js?l=en-US&c=${Math.floor(Math.random() * 99999)}`;

  head.appendChild(script);
};

if ($houzzLink.length > 0) {
  $houzzLink.on('click', (e) => {
    e.preventDefault();
    loadHouzzBookmarklet();
  });
}
