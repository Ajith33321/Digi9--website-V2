/**
 * DIGI9 — Navbar Controller
 */
(function() {
  'use strict';

  document.addEventListener('DOMContentLoaded', () => {
    const navbar = document.getElementById('navbar');
    const toggle = document.getElementById('nav-toggle');
    const menu = document.getElementById('nav-menu');

    // Scroll behavior
    if (navbar) {
      let lastScroll = 0;
      window.addEventListener('scroll', () => {
        const y = window.pageYOffset;
        if (y > 50) {
          navbar.classList.add('scrolled');
        } else {
          navbar.classList.remove('scrolled');
        }
        lastScroll = y;
      }, { passive: true });
    }

    // Mobile toggle
    if (toggle && menu) {
      toggle.addEventListener('click', () => {
        toggle.classList.toggle('open');
        menu.classList.toggle('open');
        document.body.style.overflow = menu.classList.contains('open') ? 'hidden' : '';
      });

      // Close on link click
      menu.querySelectorAll('a').forEach(link => {
        link.addEventListener('click', () => {
          toggle.classList.remove('open');
          menu.classList.remove('open');
          document.body.style.overflow = '';
        });
      });
    }
  });
})();
