var swiper = new Swiper(".first-swiper", {
    pagination: {
        el: ".swiper-pagination",
        dynamicBullets: true,
    },
});


var swiper = new Swiper(".second-swiper", {
    slidesPerView: 4,
    centeredSlides: true,
    spaceBetween: 30,
    grabCursor: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
  });

