const swiper = new Swiper('.swiper', {
  slidesPerView: 3,   // show 3 images at a time
  spaceBetween: 10,   // gap between slides (px)
  loop: true,
  

  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },


});