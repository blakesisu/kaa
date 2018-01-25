import $ from 'jquery';
import slick from 'slick-carousel';

const Carousel = function (slider) {
  const $slider = $(slider);

  // Create slick carousel
  $slider.slick({
    accessibility: true,
    arrows: true,
    slidesToShow: 6,
    slidesToScroll: 1,
    centerMode: true,
    focusOnSelect: true,
    // fade: this.isTransitionTypeFade(),
    // autoplaySpeed: this.getSlideInterval(),
    // speed: this.getSpeedValue(),
    responsive: [
      {
        breakpoint: 1366,
        settings: {
          // speed: this.getSpeedValue(),
          slidesToShow: 4,
          slidesToScroll: 1,
          centerMode: true,
        }
      },
      {
        breakpoint: 750,
        settings: {
          mobileFirst: true,
          infinite: true,
          // speed: this.getSpeedValue(),
          slidesToShow: 1,
          slidesToScroll: 1,
          centerMode: true,
        }
      }
    ]
  });

  $slider.on('beforeChange', () => {
    $('.slick-list').css({
      'width': '100%'
    });
    $('.slick-track').css({
      'display': 'flex',
      'width': '100%',
      'flex-direction': 'row',
      'align-items': 'baseline',
      'overflow': 'hidden',
    });

  })

  $slider.slick('refresh');
};

export default Carousel;
