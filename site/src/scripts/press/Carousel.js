import $ from 'jquery';
import Swiper from 'swiper';

export default class Carousel {
  constructor(el, prev, next) {
    this.container = $(el);
    this.prevNav = prev;
    this.nextNav = next;
    this.swiper = new Swiper(this.container, {
      grabCursor: true,
      // loop: true,
      spaceBetween: 60,
      initialSlide: 2,
      centeredSlides: true,
      slidesPerView: 'auto',
      navigation: {
        prevEl: this.prevNav,
        nextEl: this.nextNav
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
  }

  setFilter(wrapper, slides, filter) {
    const swiper = this.swiper;
    const winWidth = $(window).width();
    const translate = winWidth > 480 ? 120 : 60;

    wrapper = $(wrapper);
    slides = $(slides);
    filter = $(filter);

    filter.each((i, el) => {
      $(el).on('click', () => {
        const magId = $(el).attr('data-mag');
        if (magId !== 'all') {
          //
          slides.each((id, ele) => {
            ele = $(ele);

            console.log(magId);
            if ( ele.attr('data-magitem') !== magId) {
              ele.addClass('swiper-hidden-slide')
                .removeClass('swiper-slide swiper-slide-active');
            } else {
              ele.addClass('swiper-slide swiper-slide-active')
                .removeClass('swiper-hidden-slide');
            }
          });
          swiper.update();
          swiper.setTranslate(($(window).width() / 2) - translate);
        } else {
          slides.addClass('swiper-slide')
            .removeClass('swiper-hidden-slide');
          swiper.update();
          swiper.setTranslate(0);
        }
      });
    });
  }
}
