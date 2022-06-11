const swiperSlider = (() => {
  const accountantInit = new Swiper('.js-accountant-slider', {
    slidesPerView: 2,
    spaceBetween: 20,
    speed: 800,
    centerInsufficientSlides: true,
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true,
    },
    breakpoints: {
      768: {
        spaceBetween: 40,
        slidesPerView: 3,
      },
    },
  });

  const init = () => {};

  return {
    init,
  };

})();

export default swiperSlider;
