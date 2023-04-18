let swiper = new Swiper(".image-slider", {
  spaceBetween: 0,
  loop: true,
  autoplay: {
    delay: 5000,
    disableOnInteraction: true,
  },
  scrollbar: {
    el: ".swiper-scrollbar",
    draggable: true,
  },
});
