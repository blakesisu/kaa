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
    userId: 5780039093,
    accessToken: '5780039093.9f4e4ba.26b3b990210345ed975fe1fedc2a4564',
    limit: 12,
    resolution: 'low_resolution',
    template: `
      <li class="hm-instagram__item">
        <a class="hm-instagram__link" href="{{link}}" target="_blank">
          <img class="hm-instagram__img" src="{{image}}" />
        </a>
      </li>
    `,
    // wait until images have loaded
    after: () => {}
  });

  feed.run();
}
