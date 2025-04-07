document.addEventListener('DOMContentLoaded', () => {

  jQuery('#homes_marquee').slick({
    speed: 5000,
    autoplay: true,
    autoplaySpeed: 0,
    centerMode: true,
    cssEase: 'linear',
    slidesToShow: 1,
    slidesToScroll: 1,
    variableWidth: true,
    infinite: true,
    initialSlide: 1,
    arrows: false,
    buttons: false,
    draggable: false
  });

  jQuery('#testimonials_slider').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    infinite: true,
    arrows: false,
    buttons: false,
    draggable: true,
    dots: true,
    responsive: [
      {
        breakpoint: 1201,
        settings: {
          slidesToShow: 2
        }
      },
      {
        breakpoint: 801,
        settings: {
          slidesToShow: 1
        }
      }
    ]
  });
})