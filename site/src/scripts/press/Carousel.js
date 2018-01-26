import $ from 'jquery';
import Swiper from 'swiper';

const Carousel = function (el, prev, next) {
  const $container = $(el);

  const swiper = new Swiper($container, {
    grabCursor: true,
    loop: true,
    spaceBetween: 60,
    initialSlide: 3,
    centeredSlides: true,
    slidesPerView: 'auto',
    navigation: {
      prevEl: prev,
      nextEl: next
    },
    breakpoints: {
      // when window width is <= 1366px
      1366: {
        spaceBetween: 40
      },
      // when window width is <= 1010px
      1010: {
        spaceBetween: 60
      },
      // when window width is <= 750px
      750: {
        spaceBetween: 30
      },
    }
  });
};

export default Carousel;
