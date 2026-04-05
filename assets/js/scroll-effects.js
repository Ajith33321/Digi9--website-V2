/**
 * DIGI9 — Scroll Effects
 * IntersectionObserver-based reveal animations
 */
(function() {
  'use strict';

  // Reveal elements on scroll
  function initReveal() {
    const elements = document.querySelectorAll('.reveal, .reveal-left, .reveal-right, .reveal-scale, .stagger-children');
    if (!elements.length) return;

    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
        }
      });
    }, {
      threshold: 0.08,
      rootMargin: '0px 0px -40px 0px'
    });

    elements.forEach(el => observer.observe(el));
  }

  // Parallax effect for hero glows
  function initParallax() {
    const parallaxElements = document.querySelectorAll('.parallax-slow');
    if (!parallaxElements.length) return;

    let ticking = false;
    window.addEventListener('scroll', () => {
      if (!ticking) {
        requestAnimationFrame(() => {
          const scrollY = window.pageYOffset;
          parallaxElements.forEach(el => {
            const speed = parseFloat(el.dataset.speed) || 0.3;
            el.style.transform = `translateY(${scrollY * speed}px)`;
          });
          ticking = false;
        });
        ticking = true;
      }
    }, { passive: true });
  }

  // FAQ accordion
  function initFAQ() {
    const faqItems = document.querySelectorAll('.faq-item');
    faqItems.forEach(item => {
      const question = item.querySelector('.faq-question');
      const answer = item.querySelector('.faq-answer');
      if (!question || !answer) return;

      question.addEventListener('click', () => {
        const isOpen = item.classList.contains('open');

        // Close all
        faqItems.forEach(other => {
          other.classList.remove('open');
          const otherAnswer = other.querySelector('.faq-answer');
          if (otherAnswer) otherAnswer.style.maxHeight = null;
        });

        // Open this one
        if (!isOpen) {
          item.classList.add('open');
          answer.style.maxHeight = answer.scrollHeight + 'px';
        }
      });
    });
  }

  // Init
  document.addEventListener('DOMContentLoaded', () => {
    initReveal();
    initParallax();
    initFAQ();
  });
})();
