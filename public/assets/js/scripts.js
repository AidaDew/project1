document.addEventListener('DOMContentLoaded', function () {
    const swiper = new Swiper('.swiper-container', {
      // Optional parameters
      loop: true,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
  });
  