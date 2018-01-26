import $ from 'jquery';
import slick from 'slick-carousel';

const Carousel = function (slider, previous, next) {
  const $slider = $(slider);

  // Create slick carousel
  $slider.on('init beforeChange', () => {
    $('.slick-list').css({
      'width': '100%',
      // '-webkit-transform': 'translate3d(0, 0, 0)'
    });
    $('.slick-track').css({
      'display': 'flex',
      'width': '100%',
      // 'flex-direction': 'row',
      'align-items': 'baseline',
      // 'overflow': 'hidden',
      // '-webkit-transform': 'translate3d(0, 0, 0)'
    });
    $('.slick-slide').css({
      'padding': '0 20px',
      'width': '240px',
    });
  })

  $slider.slick({
    arrows: false,
    infinite: false,
    initialSlide: 3,
    prevArrow: previous,
    nextArrow: next,
    slidesToShow: 6,
    slidesToScroll: 1,
    // variableWidth: true,
    responsive: [
      {
        breakpoint: 1366,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 1,
          // variableWidth: true,
        }
      },
      {
        breakpoint: 750,
        settings: {
          mobileFirst: true,
          slidesToShow: 1,
          slidesToScroll: 1,
          // variableWidth: true,
          centerMode: true,
        }
      }
    ]
  });
};

export default Carousel;
