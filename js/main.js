const swiper = new Swiper('.swiper', {
  // Optional parameters
  loop: true,

  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },

  autoplay: {
    delay: 2700,
  },
});

const menuButton = document.querySelector(".header-menu-mobile")
menuButton.addEventListener('click', function() {
  document.querySelector ('.header-right').classList.toggle("header-right--visible");
  document.querySelector ('.header-menu-mobile__close').classList.toggle("header-menu-mobile__close--visible");
  document.querySelector ('.header-menu-mobile__button').classList.toggle("header-menu-mobile__button--hidden");
  document.querySelector ('.header').classList.toggle("header--fixed");

});