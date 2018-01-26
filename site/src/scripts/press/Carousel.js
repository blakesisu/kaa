import $ from 'jquery';
import Swiper from 'swiper';

const Carousel = function (el) {
  // const $container = $('.swiper-container');
  const $container = $(el);

  const swiper = new Swiper($container, {
    grabCursor: true,
    loop: true,
    spaceBetween: 60,
    initialSlide: 3,
    // slidesPerView: 6,
    centeredSlides: true,
    slidesPerView: 'auto',
    breakpoints: {
      // when window width is <= 1366px
      1366: {
        // slidesPerView: 4,
        spaceBetween: 40
      },
      1000: {
        // slidesPerView: 3,
        spaceBetween: 60
      },
      // when window width is <= 750px
      750: {
        // slidesPerView: 2,
        spaceBetween: 30
      },
      // when window width is <= 480px
      // 480: {
      //   slidesPerView: 2,
      //   spaceBetween: 50
      // },
    }
  });
};

export default Carousel;
