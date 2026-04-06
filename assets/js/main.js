/**
 * DIGI9 — Premium Tech Main Controller
 * (Inspired by voizpanda.ai aesthetic)
 */
(function() {
  'use strict';

  // ===== STAR FIELD CANVAS (Twinkle Effect) =====
  function initStarfield() {
    const canvas = document.getElementById('starfield');
    if (!canvas) return;
    const ctx = canvas.getContext('2d');
    let stars = [];
    const STAR_COUNT = 80;

    function resize() {
      canvas.width = window.innerWidth;
      canvas.height = window.innerHeight;
    }

    function createStars() {
      stars = [];
      for (let i = 0; i < STAR_COUNT; i++) {
        stars.push({
          x: Math.random() * canvas.width,
          y: Math.random() * canvas.height,
          size: Math.random() * 1.5 + 0.5,
          opacity: Math.random() * 0.6 + 0.3,
          twinkleSpeed: Math.random() * 0.05 + 0.01,
          twinklePhase: Math.random() * Math.PI * 2
        });
      }
    }

    function drawStars(time) {
      ctx.clearRect(0, 0, canvas.width, canvas.height);
      stars.forEach(s => {
        // Sine wave oscillation for twinkle
        const twinkle = Math.sin(time * 0.001 * s.twinkleSpeed + s.twinklePhase) * 0.3 + 0.7;
        
        ctx.beginPath();
        ctx.arc(s.x, s.y, s.size, 0, Math.PI * 2);
        ctx.fillStyle = `rgba(255, 255, 255, ${s.opacity * twinkle})`;
        ctx.fill();
        
        // Very subtle bloom for larger stars
        if (s.size > 1.2) {
            ctx.shadowBlur = s.size * 2;
            ctx.shadowColor = 'rgba(255, 255, 255, 0.4)';
        }
      });
      requestAnimationFrame(drawStars);
    }

    resize();
    createStars();
    requestAnimationFrame(drawStars);
    window.addEventListener('resize', () => { resize(); createStars(); });
  }

  // ===== 3D PARALLAX SCROLL (Smooth Layering) =====
  function initParallax() {
    if (window.innerWidth < 1024) return;
    const layers = document.querySelectorAll('[data-depth]');
    
    window.addEventListener('scroll', () => {
      const scrollY = window.pageYOffset;
      layers.forEach(layer => {
        const depth = parseFloat(layer.getAttribute('data-depth')) || 0;
        // Moving slower in the distance, faster in the foreground
        const yOffset = scrollY * depth * -0.4;
        layer.style.transform = `translate3d(0, ${yOffset}px, 0)`;
      });
    }, { passive: true });
  }

  // ===== REVEAL ENTRANCE ANIMATIONS =====
  function initReveal() {
    const reveals = document.querySelectorAll('.reveal');
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
          // Stagger children if specified
          if (entry.target.classList.contains('stagger-parent')) {
              entry.target.querySelectorAll('.stagger-item').forEach((item, index) => {
                  setTimeout(() => item.classList.add('visible'), index * 80);
              });
          }
        }
      });
    }, {
      threshold: 0.15,
      rootMargin: '0px 0px -50px 0px'
    });

    reveals.forEach(el => observer.observe(el));
  }

  // ===== MASCOT CONTROLLER (Scrubbing + Floating) =====
  function initMascot() {
    const canvas = document.getElementById('mascot-canvas');
    if (!canvas) return;
    const ctx = canvas.getContext('2d');
    const TOTAL_FRAMES = 240;
    const frames = [];
    let imagesLoaded = 0;
    let currentFrame = 0;

    // Preload frames (assuming absolute paths)
    for (let i = 1; i <= TOTAL_FRAMES; i++) {
        const img = new Image();
        const frameNumber = i.toString().padStart(3, '0');
        img.src = `/assets/mascot/ezgif-frame-${frameNumber}.png`;
        img.onload = () => { imagesLoaded++; if (currentFrame === 0) drawFrame(0); };
        img.onerror = () => imagesLoaded++;
        frames.push(img);
    }

    function drawFrame(index) {
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        const img = frames[index];
        if (img && img.complete && img.width > 0) {
            ctx.drawImage(img, 0, 0, canvas.width, canvas.height);
        } else {
            // Placeholder drawing logic
            ctx.strokeStyle = 'rgba(255, 255, 255, 0.1)';
            ctx.setLineDash([5, 5]);
            ctx.strokeRect(10, 10, canvas.width - 20, canvas.height - 20);
            ctx.fillStyle = 'rgba(255,255,255,0.3)';
            ctx.font = '14px Inter';
            ctx.textAlign = 'center';
            ctx.fillText('[ Mascot Rendering ]', canvas.width/2, canvas.height/2);
        }
    }

    window.addEventListener('scroll', () => {
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        const maxScroll = document.documentElement.scrollHeight - window.innerHeight;
        const scrollPercent = Math.min(Math.max(scrollTop / maxScroll, 0), 1);
        
        // 1. Scrub frame
        const frameIndex = Math.floor(scrollPercent * (TOTAL_FRAMES - 1));
        if (frameIndex !== currentFrame) {
            currentFrame = frameIndex;
            drawFrame(frameIndex);
        }

        // 2. Fade out near footer
        const container = canvas.parentElement;
        if (scrollPercent > 0.88) {
            container.style.opacity = (1 - (scrollPercent - 0.88) * 8.3).toString();
        } else {
            container.style.opacity = '1';
        }
    }, { passive: true });
    
    // Ambient floating (Desktop only)
    if (window.innerWidth >= 1024) {
        let startTime = Date.now();
        function floatMascot() {
            const elapsed = (Date.now() - startTime) / 1000;
            const yOffset = Math.sin(elapsed * 2 * Math.PI / 3) * 8; // ±8px, 3s cycle
            canvas.style.transform = `translateY(${yOffset}px)`;
            requestAnimationFrame(floatMascot);
        }
        floatMascot();
    }
  }

  // ===== DOM READY =====
  document.addEventListener('DOMContentLoaded', () => {
    initStarfield();
    initParallax();
    initReveal();
    initMascot();
  });

})();
