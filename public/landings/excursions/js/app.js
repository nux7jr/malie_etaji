const swiper = new Swiper('.slider__content', {
    direction: 'horizontal',
    loop: true,
    spaceBetween: 50,
    centeredSlides: true,
    slidesPerView: 3,
    paginationClickable: true,
    autoHeight: true,

    pagination: {
      el: '.slider__pagination',
    },
  
    navigation: {
      nextEl: '.slider__arrow-right',
      prevEl: '.slider__arrow-left',
    },
    breakpoints: {
      320: {
        slidesPerView: 'auto',
        spaceBetween: 20
      },
      992: {
        spaceBetween: 50,
      centeredSlides: true,
      slidesPerView: 3
      }
    }
});
