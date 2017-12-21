import $ from 'jquery';
import postal from 'postal';
import throttle from 'lodash/throttle';

import { GLOBAL_CHANNEL } from '../constants/Constants';

const channel = postal.channel(GLOBAL_CHANNEL);
const $window = $(window);

// Throttle the window resize event
// Publish on a channel so other modules can subscribe
// This minimizes the number of event listeners bound to the window
$window.on('resize', throttle(() => {
  channel.publish('window.resize', {
    width: $window.width(),
    height: $window.height()
  });
}, 300));
