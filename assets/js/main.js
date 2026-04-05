// ===== STAR FIELD CANVAS =====
(function() {
  const canvas = document.getElementById('starfield');
  if (!canvas) return;
  const ctx = canvas.getContext('2d');
  let stars = [];
  const STAR_COUNT = 150; // Performance limits, bright stars

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
        size: Math.random() * 2.5 + 0.5,
        speed: Math.random() * 0.4 + 0.05,
        opacity: Math.random() * 0.8 + 0.2,
        twinkleSpeed: Math.random() * 0.05 + 0.01,
        twinklePhase: Math.random() * Math.PI * 2,
        isIceBlue: Math.random() > 0.8 // 20% ice blue stars
      });
    }
  }

  function drawStars(time) {
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    stars.forEach(s => {
      const twinkle = Math.sin(time * 0.001 * s.twinkleSpeed + s.twinklePhase) * 0.4 + 0.6;
      
      ctx.beginPath();
      ctx.arc(s.x, s.y, s.size, 0, Math.PI * 2);
      
      if (s.isIceBlue) {
        ctx.fillStyle = `rgba(180, 230, 255, ${s.opacity * twinkle})`;
        ctx.shadowColor = 'rgba(180, 230, 255, 0.8)';
      } else {
        ctx.fillStyle = `rgba(255, 255, 255, ${s.opacity * twinkle})`;
        ctx.shadowColor = 'rgba(255, 255, 255, 0.8)';
      }
      
      // Add subtle bloom to slightly larger stars
      if (s.size > 1.5) {
        ctx.shadowBlur = s.size * 3;
      } else {
        ctx.shadowBlur = 0;
      }
      
      ctx.fill();

      // Parallax-like drift (independent of scroll, just ambient)
      s.y -= s.speed;
      if (s.y < -10) {
        s.y = canvas.height + 10;
        s.x = Math.random() * canvas.width;
      }
    });
    requestAnimationFrame(drawStars);
  }

  resize();
  createStars();
  requestAnimationFrame(drawStars);
  window.addEventListener('resize', () => { resize(); createStars(); });
})();


// ===== 3D PARALLAX SCROLL (Desktop Only) =====
(function() {
  // Only activate on minimum desktop widths
  if (window.innerWidth < 1024) return;

  const elements = Array.from(document.querySelectorAll('[data-depth]'));
  if (!elements.length) return;

  let ticking = false;

  function updateParallax() {
    const scrollY = window.pageYOffset || document.documentElement.scrollTop;
    
    for (let i = 0; i < elements.length; i++) {
      const el = elements[i];
      // Positive depth goes towards user (moves fast upwards)
      // Negative depth goes away from user (moves slow upwards or even downwards relative to screen)
      const depth = parseFloat(el.getAttribute('data-depth')) || 0;
      const yPos = scrollY * (depth / 100); 
      
      // Using translate3d for hardware acceleration
      el.style.transform = `translate3d(0, ${yPos}px, 0)`;
    }
    ticking = false;
  }

  window.addEventListener('scroll', () => {
    if (!ticking) {
      requestAnimationFrame(updateParallax);
      ticking = true;
    }
  }, { passive: true });
})();


// ===== MASCOT CAROUSEL RENDERER =====
(function() {
  const canvas = document.getElementById('mascot-canvas');
  const heroCTA = document.getElementById('hero-cta');
  if (!canvas) return;

  const ctx = canvas.getContext('2d');
  const TOTAL_FRAMES = 240;
  let frames = [];
  let imagesLoaded = 0;
  
  // Animation state
  let currentFrame = 0;
  let fps = 24;
  let isHovering = false;
  let isClickReaction = false;
  let lastDrawTime = 0;
  let animationId = null;

  // Preload frames
  for (let i = 1; i <= TOTAL_FRAMES; i++) {
    const img = new Image();
    const frameNumber = i.toString().padStart(3, '0');
    // Connecting the new 240 jpg sequence path
    img.src = `assets/mascot/ezgif-frame-${frameNumber}.jpg`;
    img.onload = () => { imagesLoaded++; };
    // If error, generate a dummy frame so user can see logic working
    img.onerror = () => {
      generateDummyFrame(i, img);
      imagesLoaded++;
    };
    frames.push(img);
  }

  function generateDummyFrame(index, imgObj) {
    const tempCanvas = document.createElement('canvas');
    tempCanvas.width = 320; tempCanvas.height = 320;
    const tCtx = tempCanvas.getContext('2d');
    
    // Draw dummy bot
    tCtx.fillStyle = '#0057FF';
    tCtx.beginPath();
    tCtx.arc(160, 160 + (Math.sin(index * 0.4) * 20), 80, 0, Math.PI * 2);
    tCtx.fill();
    tCtx.fillStyle = '#ffffff';
    tCtx.font = "20px Syne";
    tCtx.textAlign = "center";
    tCtx.fillText("Mascot Placeholder", 160, 160 + (Math.sin(index * 0.4) * 20));
    
    imgObj.src = tempCanvas.toDataURL();
  }

  function render(time) {
    if (imagesLoaded < TOTAL_FRAMES) {
      requestAnimationFrame(render);
      return;
    }

    const frameInterval = 1000 / fps;
    const delta = time - lastDrawTime;

    if (delta > frameInterval) {
      ctx.clearRect(0, 0, canvas.width, canvas.height);
      const img = frames[currentFrame];
      
      // Center image in canvas
      if (img && img.complete && img.width > 0) {
        ctx.drawImage(img, 0, 0, canvas.width, canvas.height);
      }

      // Logic for frame advancement
      if (isClickReaction) {
        // Run to the end once very fast, then stop
        if (currentFrame < TOTAL_FRAMES - 1) {
          currentFrame++;
        } else {
          // Finished reaction
          isClickReaction = false;
          fps = 24; // reset speed
        }
      } else {
        // Standard loop
        currentFrame = (currentFrame + 1) % TOTAL_FRAMES;
      }

      lastDrawTime = time - (delta % frameInterval);
    }

    animationId = requestAnimationFrame(render);
  }

  // Interactivity
  canvas.addEventListener('mouseenter', () => {
    if (!isClickReaction) fps = 48; // speed up
  });

  canvas.addEventListener('mouseleave', () => {
    if (!isClickReaction) fps = 24; // slow down
  });

  if (heroCTA) {
    heroCTA.addEventListener('click', () => {
      isClickReaction = true;
      fps = 60; // Ultra fast
      currentFrame = 0; // Restart loop
    });
  }

  // Start loop once init completes
  requestAnimationFrame(render);

})();


// ===== CONTACT FORM =====
function handleFormSubmit(e) {
  e.preventDefault();
  const form = e.target;
  const btn = form.querySelector('button[type="submit"]');
  const success = document.getElementById('formSuccess');
  btn.textContent = 'Sending...';
  btn.disabled = true;
  setTimeout(() => {
    form.style.display = 'none';
    if (success) success.style.display = 'block';
  }, 1500);
}
