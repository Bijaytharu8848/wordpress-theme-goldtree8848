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


  breakpoints: {
      0: {
        slidesPerView: 1, // 📱 Mobile (default small screens)
      },
      768: {
        slidesPerView: 2, // Tablet
      },
      1024: {
        slidesPerView: 3, // Desktop
      }
    }

});