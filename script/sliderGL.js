var sliderSlider = new Swiper('.slider-slider', {
    effect: 'coverflow',
    grabCursor: true,
    centeredSlides: true,
    loop: true,
    slidesPerView: 'auto',
    coverflowEffect: {
      rotate: 0,
      stretch: 0,
      depth: 100,
      modifier: 2.5,
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    }
  });

  document.addEventListener("DOMContentLoaded", function() {
    var swiperSlides = document.querySelectorAll('#slide');
    
    swiperSlides.forEach(function(slide, index) {
        var ariaLabel = (index + 1) + "/" + swiperSlides.length;
        slide.setAttribute('aria-label', ariaLabel);
    });
});