var swiper = new Swiper('.swiper-container1', {
  slidesPerView: 4,
  spaceBetween: 30,
  loop: true,
  autoplay: {
    delay: 0, // No delay, continuous scrolling
    disableOnInteraction: false, // Keeps autoplay even after user interaction
  },
  speed: 2000, // Speed of the scrolling animation
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  breakpoints: {
    1024: {
      slidesPerView: 4,
      spaceBetween: 40,
    },
    768: {
      slidesPerView: 3,
      spaceBetween: 30,
    },
    640: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
    320: {
      slidesPerView: 1,
      spaceBetween: 10,
    },
  }
});



// -----------------------------



var swiper = new Swiper('.swiper-container', {
  slidesPerView: 5,
  spaceBetween: 30,
  loop: true,
  autoplay: {
      delay: 0, // No delay between transitions
      disableOnInteraction: false,
  },
  speed: 2000, // Speed of the autoplay transition in milliseconds
  pagination: {
      el: '.swiper-pagination',
      clickable: true,
  },
  navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
  },
  breakpoints: {
      1024: {
          slidesPerView: 5,
          spaceBetween: 20,
      },
      768: {
          slidesPerView: 3,
          spaceBetween: 30,
      },
      640: {
          slidesPerView: 2,
          spaceBetween: 20,
      },
      320: {
          slidesPerView: 1,
          spaceBetween: 10,
      },
  }
});
