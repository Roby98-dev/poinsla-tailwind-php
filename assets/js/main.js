// const btn = document.getElementById('mobile-nav-btn');
// const menu = document.getElementById('mobile-menu');

// btn.addEventListener('click', () => {
//     menu.classList.toggle('hidden');
// })

// Swiperjs
var swiper = new Swiper('.swiper-container', {
  slidesPerView: 'auto',
  spaceBetween: 10,
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
});

// AOS Animation Script
// AOS.init({
//     once: true,
// });