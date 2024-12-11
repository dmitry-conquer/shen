import "../styles/style.scss";
// @ts-ignore
import Swiper, { Pagination } from "swiper";

document.addEventListener("DOMContentLoaded", () => {
  const reviewsSlider = document.getElementById("reviews-slider");
  if (reviewsSlider) {
    new Swiper(reviewsSlider, {
      modules: [Pagination],
      speed: 800,
      loop: true,
      slideToClickedSlide: true,
      centeredSlides: true,
      spaceBetween: 40,
      pagination: {
        el: ".landing-rewiews__pagination",
        clickable: true,
      },
      breakpoints: {
        0: {
          slidesPerView: 1.3,
          spaceBetween: 15,
        },
        480: {
          slidesPerView: 1.9,
          spaceBetween: 25,
        },
        640: {
          slidesPerView: 2.3,
          spaceBetween: 25,
        },
        768: {
          slidesPerView: 3,
          spaceBetween: 25,
        },
        992: {
          slidesPerView: 3.7,
          spaceBetween: 40,
        },
        1400: {
          slidesPerView: 5,
          spaceBetween: 40,
        },
      },
    });
  }
});
