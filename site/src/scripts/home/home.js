import $ from 'jquery';
import Instafeed from 'instafeed.js';

// variables
let feed;

// Instagram
// -------------------------------------------------------------------------------------------- //
if ($('.hm-instagram').length > 0) {
  // init instagram feed
  feed = new Instafeed({
    get: 'user',
    userId: 5792963322,
    accessToken: '5792963322.1677ed0.9da887a2336d4cc99c48250a3c96130f',
    limit: 12,
    resolution: 'standard_resolution',
    template: `
      <li class="hm-instagram__item is-{{orientation}}">
        <a class="hm-instagram__link" href="{{link}}" target="_blank">
          <img class="hm-instagram__img is-{{orientation}}" src="{{image}}" />
        </a>
      </li>
    `,
    // wait until images have loaded
    after: () => {}
  });

  feed.run();
}
