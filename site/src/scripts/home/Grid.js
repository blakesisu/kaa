import $ from 'jquery';
import Modernizr from 'modernizr';

// pubsub
import postal from 'postal';
import { GLOBAL_CHANNEL } from '../constants/Constants';

// scrolling
import ScrollMagic from 'ScrollMagic';
import TimelineMax from 'TimelineMax';
import TweenMax from 'TweenMax';
import Easing from 'Easing';
import scrollController from './ScrollController';

// variables
const channel = postal.channel(GLOBAL_CHANNEL);
const mobileBreak = 700;

const Grid = function (el, index) {
  const $window = $(window);
  const $el = $(el);
  const $gridItems = $el.find('.hm-grid__item');
  const $projectImgSquare = $el.find('.hm-grid__item--square-lrg .hm-project-block__picture');
  const $projectImgFull = $el.find('.hm-grid__item--full .hm-project-block__picture');
  const $verticalImg = $el.find('.hm-grid__item--vertical .hm-image-block__picture');
  const $horizontalImg = $el.find('.hm-grid__item--horizontal .hm-image-block__picture');
  const $squareImg = $el.find('.hm-grid__item--square .hm-image-block__picture');
  let parallaxScene;

  function init() {
    createParallaxScenes();
    createFadeScenes();

    // when window resizes destroy and recreate parallax scenes
    channel.subscribe('window.resize', () => {
      if (parallaxScene) {
        parallaxScene.destroy();
      }

      createParallaxScenes();
    });
  }


  function createParallaxScenes() {
    // If not on a touch device and screen is wider than the mobile view
    if (!Modernizr.touchevents && $window.width() > mobileBreak) {
      // Animated timeline that moves images at different speeds
      const slowTimeline = new TimelineMax()
        .add([
          TweenMax.fromTo($projectImgSquare, 1, { y: '-20%' }, { y: '20%', ease: Easing.Linear.easeNone }),
          TweenMax.fromTo($verticalImg, 1, { y: '-10%' }, { y: '10%', ease: Easing.Linear.easeNone }),
          TweenMax.fromTo($horizontalImg, 1, { y: '8%' }, { y: '-8%', ease: Easing.Linear.easeNone }),
          TweenMax.fromTo($squareImg, 1, { y: '10%' }, { y: '-10%', ease: Easing.Linear.easeNone }),
          TweenMax.fromTo($projectImgFull, 1, { y: '-10%' }, { y: '10%', ease: Easing.Linear.easeNone })
        ]);

      // Tie timeline to scrolling
      parallaxScene = new ScrollMagic.Scene({
        triggerElement: $el,
        triggerHook: 'onEnter',
        duration: $window.height() + $el.outerHeight()
      })
        .setTween(slowTimeline)
        // .addIndicators({ name: `project ${index}` })
        .addTo(scrollController);
    }
  }

  function createFadeScenes() {
    // If not on a touch device
    if (!Modernizr.touchevents) {
      // For each grid item
      $gridItems.each((i) => {
        const $item = $($gridItems[i]);
        const $img = $item.find('.hm-grid__img');
        const $textContent = $item.find('.hm-text-block__content');

        // If it has an image
        if ($img.length > 0) {
          // Create a new scene that fades the image in when it becomes visible
          new ScrollMagic.Scene({
            triggerElement: $item,
            triggerHook: 'onEnter',
            offset: 200,
            reverse: false
          })
            .setTween(TweenMax.fromTo($img, 1, { opacity: '0' }, { opacity: '1' }))
            // .addIndicators({ name: `image ${i}` })
            .addTo(scrollController)
        }

        // If it has a text content
        if ($textContent.length > 0) {
          const $header = $textContent.find('.hm-text-block__header');
          const $dash = $textContent.find('.hm-text-block__dash');
          const $description = $textContent.find('.hm-text-block__description');
          const headerTimeline = new TimelineMax();

          // Add each span to the timeline
          $header.find('span').each((j, span) => {
            headerTimeline.fromTo(span, 0.3, { opacity: '0' }, { opacity: '1' }, j * 0.1);
          });

          // Add the description and dash to the timeline
          headerTimeline
            .fromTo($description, 1.5, { opacity: '0' }, { opacity: '1' }, '0')
            .fromTo($dash, 0.2, { width: '0', opacity: '0' }, { width: $dash.width(), opacity: 1, clearProps: 'all' }, '-=1');

          // Start the timeline when the text scrolls into view
          new ScrollMagic.Scene({
            triggerElement: $item,
            triggerHook: 'onEnter',
            offset: 200,
            reverse: false
          })
            .setTween(headerTimeline)
            // .addIndicators({ name: 'text timeline' })
            .addTo(scrollController)
        }

        // If it has a text content
        if ($textContent.length > 0) {
          const $header = $textContent.find('.hm-text-block__header');
          const $dash = $textContent.find('.hm-text-block__dash');
          const $description = $textContent.find('.hm-text-block__description');
          const headerTimeline = new TimelineMax();

          // Add each span to the timeline
          $header.find('span').each((j, span) => {
            headerTimeline.fromTo(span, 0.3, { opacity: '0' }, { opacity: '1' }, j * 0.1);
          });

          // Add the description and dash to the timeline
          headerTimeline
            .fromTo($description, 1.5, { opacity: '0' }, { opacity: '1' }, '0')
            .fromTo($dash, 0.2, { width: '0', opacity: '0' }, { width: $dash.width(), opacity: 1, clearProps: 'all' }, '-=1');

          // Start the timeline when the text scrolls into view
          imageScenes.push(
            new ScrollMagic.Scene({
              triggerElement: $item,
              triggerHook: 'onEnter',
              offset: 200,
              reverse: false
            })
              .setTween(headerTimeline)
              // .addIndicators({ name: 'text timeline' })
              .addTo(scrollController)
          );
        }
      });
    }
  }

  init();
};

export default Grid;
