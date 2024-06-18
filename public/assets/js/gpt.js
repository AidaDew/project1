document.addEventListener('DOMContentLoaded', function () {
    const swiper1 = new Swiper('.swiper1', {
      loop: true,
      pagination: {
        el: '.swiper1-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper1-button-next',
        prevEl: '.swiper1-button-prev',
      },
    });
  
    const swiper2 = new Swiper('.swiper2', {
      loop: true,
      pagination: {
        el: '.swiper2-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper2-button-next',
        prevEl: '.swiper2-button-prev',
      },
    });
  });
  