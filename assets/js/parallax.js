/**
 * DIGI9 — Premium Parallax System
 * Layers: mouse-move depth · nebula drift · card 3D tilt · ambient orbs
 */
(function () {
  'use strict';

  const isMobile = () => window.innerWidth < 1024;
  const lerp = (a, b, t) => a + (b - a) * t;

  // ─── MOUSE PARALLAX (Hero depth layers) ──────────────────────────────────────
  // Elements with data-prlx-mouse="depth" float with the cursor at that depth.
  // Deeper value = more movement = feels closer to viewer.
  let mouseEls = [];
  let rawMX = 0, rawMY = 0, smMX = 0, smMY = 0;
  let mouseLoop = false;

  function initMouseParallax() {
    if (isMobile()) return;

    // Scan runs AFTER injectHeroOrbs so orbs are included
    mouseEls = Array.from(document.querySelectorAll('[data-prlx-mouse]')).map(el => ({
      el,
      d: parseFloat(el.getAttribute('data-prlx-mouse')) || 0.1
    }));
    if (!mouseEls.length) return;

    document.addEventListener('mousemove', (e) => {
      rawMX = (e.clientX / window.innerWidth  - 0.5) * 2; // −1…+1
      rawMY = (e.clientY / window.innerHeight - 0.5) * 2;
      if (!mouseLoop) { mouseLoop = true; mouseTick(); }
    });
  }

  function mouseTick() {
    smMX = lerp(smMX, rawMX, 0.055);
    smMY = lerp(smMY, rawMY, 0.055);

    mouseEls.forEach(({ el, d }) => {
      el.style.transform = `translate3d(${smMX * d * 52}px, ${smMY * d * 32}px, 0)`;
    });

    if (Math.abs(smMX - rawMX) > 0.0003 || Math.abs(smMY - rawMY) > 0.0003) {
      requestAnimationFrame(mouseTick);
    } else {
      mouseLoop = false;
    }
  }

  // ─── NEBULA DRIFT (Slow atmospheric movement) ────────────────────────────────
  // The two fixed nebula blobs drift gently in opposite directions with the mouse.
  function initNebulaParallax() {
    if (isMobile()) return;

    const n1 = document.querySelector('.nebula-1');
    const n2 = document.querySelector('.nebula-2');
    if (!n1 && !n2) return;

    let rx = 0, ry = 0;
    let cx1 = 0, cy1 = 0, cx2 = 0, cy2 = 0;
    let running = false;

    document.addEventListener('mousemove', (e) => {
      rx = (e.clientX / window.innerWidth  - 0.5) * 2;
      ry = (e.clientY / window.innerHeight - 0.5) * 2;
      if (!running) { running = true; requestAnimationFrame(nebulaTick); }
    });

    function nebulaTick() {
      cx1 = lerp(cx1, rx, 0.020); cy1 = lerp(cy1, ry, 0.020);
      cx2 = lerp(cx2, rx, 0.014); cy2 = lerp(cy2, ry, 0.014);

      if (n1) n1.style.transform = `translate3d(${cx1 * 60}px, ${cy1 * 35}px, 0)`;
      if (n2) n2.style.transform = `translate3d(${-cx2 * 55}px, ${-cy2 * 28}px, 0)`;

      if (Math.abs(cx1 - rx) > 0.001 || Math.abs(cy1 - ry) > 0.001) {
        requestAnimationFrame(nebulaTick);
      } else {
        running = false;
      }
    }
  }

  // ─── CARD 3D TILT ────────────────────────────────────────────────────────────
  // Each .card gets a perspective tilt that follows the cursor, with lerp easing.
  function initCardTilt() {
    if (isMobile()) return;

    document.querySelectorAll('.card').forEach(card => {
      let tx = 0, ty = 0, tgtX = 0, tgtY = 0;
      let raf = null, hovered = false;

      card.addEventListener('mouseenter', () => { hovered = true; });

      card.addEventListener('mousemove', (e) => {
        const r = card.getBoundingClientRect();
        tgtX =  ((e.clientX - r.left) / r.width  - 0.5) * 14;
        tgtY = -((e.clientY - r.top)  / r.height - 0.5) * 14;
        if (!raf) raf = requestAnimationFrame(tiltTick);
      });

      card.addEventListener('mouseleave', () => {
        hovered = false;
        tgtX = tgtY = 0;
        if (!raf) raf = requestAnimationFrame(tiltTick);
      });

      function tiltTick() {
        tx = lerp(tx, tgtX, 0.12);
        ty = lerp(ty, tgtY, 0.12);

        // When back to rest and not hovered, clear inline style so CSS takes over
        if (!hovered && Math.abs(tx) < 0.03 && Math.abs(ty) < 0.03) {
          card.style.transform = '';
          raf = null;
          return;
        }

        const tz = hovered ? 10 : 0;
        card.style.transform = `perspective(700px) rotateY(${tx}deg) rotateX(${ty}deg) translateZ(${tz}px)`;
        raf = requestAnimationFrame(tiltTick);
      }
    });
  }

  // ─── HERO AMBIENT ORBS ───────────────────────────────────────────────────────
  // Injects subtle glowing depth orbs into the hero section.
  // Each orb has a different data-prlx-mouse depth so they float at different rates.
  function injectHeroOrbs() {
    const hero = document.querySelector('main > section:first-child');
    if (!hero || hero.querySelector('.prlx-orb')) return;

    [
      { w: 260, x: '4%',  y: '8%',  d: 0.55, c: 'rgba(37,99,235,0.07)',  b: 60 },
      { w: 180, x: '75%', y: '5%',  d: 0.72, c: 'rgba(6,182,212,0.06)',  b: 44 },
      { w: 140, x: '50%', y: '65%', d: 0.38, c: 'rgba(59,130,246,0.05)', b: 40 },
      { w: 95,  x: '17%', y: '72%', d: 0.82, c: 'rgba(6,182,212,0.06)',  b: 30 },
      { w: 60,  x: '36%', y: '22%', d: 0.62, c: 'rgba(37,99,235,0.08)',  b: 20 },
      { w: 45,  x: '88%', y: '55%', d: 0.90, c: 'rgba(6,182,212,0.07)',  b: 14 },
    ].forEach(o => {
      const el = document.createElement('div');
      el.className = 'prlx-orb';
      el.setAttribute('data-prlx-mouse', o.d);
      el.style.cssText = `
        position:absolute;
        width:${o.w}px;height:${o.w}px;
        left:${o.x};top:${o.y};
        border-radius:50%;
        background:radial-gradient(circle,${o.c} 0%,transparent 70%);
        filter:blur(${o.b}px);
        pointer-events:none;
        will-change:transform;
        z-index:0;
      `;
      hero.appendChild(el);
    });
  }

  // ─── SCROLL DEPTH PARALLAX ───────────────────────────────────────────────────
  // Elements with data-prlx-scroll="speed" drift on scroll.
  // Positive speed = drifts down (behind content), negative = drifts up (foreground).
  let scrollEls = [];
  let scrollLoop = false;

  function initScrollParallax() {
    if (isMobile()) return;

    scrollEls = Array.from(document.querySelectorAll('[data-prlx-scroll]')).map(el => ({
      el,
      speed: parseFloat(el.getAttribute('data-prlx-scroll')) || 0.15
    }));
    if (!scrollEls.length) return;

    window.addEventListener('scroll', () => {
      if (!scrollLoop) { scrollLoop = true; requestAnimationFrame(scrollTick); }
    }, { passive: true });

    scrollTick();
  }

  function scrollTick() {
    const sy = window.pageYOffset;
    scrollEls.forEach(({ el, speed }) => {
      el.style.transform = `translate3d(0, ${sy * speed}px, 0)`;
    });
    scrollLoop = false;
  }

  // ─── INIT ─────────────────────────────────────────────────────────────────────
  document.addEventListener('DOMContentLoaded', () => {
    injectHeroOrbs();       // Must run before initMouseParallax so orbs are scanned
    initMouseParallax();    // Scans all [data-prlx-mouse] including orbs
    initScrollParallax();   // Scans all [data-prlx-scroll]
    initNebulaParallax();   // Dedicated nebula handler (own lerp state)
    initCardTilt();         // 3D tilt on all .card elements
  });

})();
