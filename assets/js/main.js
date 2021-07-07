// Nav button
const btn = document.getElementById('mobile-nav-btn');
const menu = document.getElementById('mobile-menu');

btn.addEventListener('click', () => {
    menu.classList.toggle('hidden');
})

// AOS Animation Script
AOS.init({
    once: true,
});