// ── Navbar scroll
const navbar = document.getElementById('navbar');
let lastScroll = 0;
window.addEventListener('scroll', () => {
    const currentScroll = window.scrollY;
    navbar.classList.toggle('scrolled', currentScroll > 60);
    navbar.classList.toggle('scroll-down', currentScroll > lastScroll && currentScroll > 300);
    navbar.classList.toggle('scroll-up', currentScroll < lastScroll);
    lastScroll = currentScroll;
});

// ── Reveal on scroll
const reveals = document.querySelectorAll('.reveal');
const observer = new IntersectionObserver((entries) => {
    entries.forEach(e => {
        if (e.isIntersecting) {
            e.target.classList.add('visible');
            observer.unobserve(e.target);
        }
    });
}, { threshold: 0.1 });
reveals.forEach(el => observer.observe(el));
