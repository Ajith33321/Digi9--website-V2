<?php
$pageTitle = "Web Application Development Services | Digi9";
$metaDesc  = "Custom web application development company in Bangalore. We build scalable platforms, AI-enabled dashboards, and enterprise-grade portals.";
?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title><?= $pageTitle ?></title>
<meta name="description" content="<?= $metaDesc ?>">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;600;700;800&family=DM+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
<style>
*,*::before,*::after{box-sizing:border-box;margin:0;padding:0}
:root{--bg:#030307;--bg2:#07070f;--surf:#0d0d1a;--surf2:#12122a;--p:#7c3aed;--b:#3b82f6;--c:#00d4ff;--g:#f5c842;--t:#f0eeff;--t2:#9b97c4;--t3:#5a5780;--br:rgba(124,58,237,.15);--br2:rgba(124,58,237,.3);--fh:'Syne',sans-serif;--fb:'DM Sans',sans-serif;--nav:68px}
html{scroll-behavior:smooth}
body{background:var(--bg);color:var(--t);font-family:var(--fb);overflow-x:hidden;cursor:none}
canvas#bg-canvas{position:fixed;inset:0;z-index:0;pointer-events:none}
#cur{position:fixed;width:8px;height:8px;background:var(--c);border-radius:50%;pointer-events:none;z-index:9999;transform:translate(-50%,-50%)}
#cur2{position:fixed;width:32px;height:32px;border:1.5px solid var(--p);border-radius:50%;pointer-events:none;z-index:9998;transform:translate(-50%,-50%);mix-blend-mode:screen}
#prog{position:fixed;top:0;left:0;height:2px;background:linear-gradient(90deg,var(--b),var(--c));z-index:1000;width:0%}
nav{position:fixed;top:0;left:0;right:0;height:var(--nav);z-index:900;display:flex;align-items:center;justify-content:space-between;padding:0 48px;background:rgba(3,3,7,.7);backdrop-filter:blur(20px);border-bottom:1px solid var(--br)}
.logo{font-family:var(--fh);font-size:24px;font-weight:800;background:linear-gradient(135deg,var(--b),var(--c));-webkit-background-clip:text;-webkit-text-fill-color:transparent;text-decoration:none}
.nav-links{display:flex;gap:32px;list-style:none}
.nav-links a{color:var(--t2);font-size:14px;font-weight:500;text-decoration:none;transition:color .2s}
.nav-links a:hover{color:var(--t)}
.nav-cta{background:linear-gradient(135deg,var(--b),var(--c));color:#fff;border:none;padding:10px 24px;border-radius:100px;font-size:14px;font-weight:600;cursor:pointer;font-family:var(--fb)}
main{position:relative;z-index:1}
section{position:relative;z-index:1}
.container{max-width:1200px;margin:0 auto;padding:0 24px}
.hero{min-height:100vh;display:flex;align-items:center;padding-top:var(--nav)}
.eyebrow{font-size:12px;font-weight:600;letter-spacing:.12em;text-transform:uppercase;color:var(--c);margin-bottom:16px}
.hero-title{font-family:var(--fh);font-size:clamp(42px,6vw,88px);font-weight:800;line-height:1.05;margin-bottom:24px}
.grad-text{background:linear-gradient(135deg,var(--b),var(--c));-webkit-background-clip:text;-webkit-text-fill-color:transparent}
.hero-sub{font-size:18px;color:var(--t2);max-width:600px;line-height:1.7;margin-bottom:40px}
.btn-row{display:flex;gap:16px;flex-wrap:wrap}
.btn-p{background:linear-gradient(135deg,var(--b),var(--c));color:#fff;border:none;padding:14px 32px;border-radius:100px;font-size:15px;font-weight:600;cursor:pointer;font-family:var(--fb);transition:transform .2s,box-shadow .2s}
.btn-p:hover{transform:translateY(-2px);box-shadow:0 8px 32px rgba(59,130,246,.4)}
.btn-o{background:transparent;color:var(--t);border:1px solid rgba(59,130,246,.3);padding:14px 32px;border-radius:100px;font-size:15px;font-weight:600;cursor:pointer;font-family:var(--fb);transition:border-color .2s,color .2s}
.btn-o:hover{border-color:var(--c);color:var(--c)}
.sec{padding:120px 0}
.sec-title{font-family:var(--fh);font-size:clamp(32px,4vw,52px);font-weight:800;margin-bottom:16px}
.sec-sub{color:var(--t2);font-size:17px;max-width:600px;line-height:1.7;margin-bottom:64px}
/* services grid */
.svc-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:24px}
@media(max-width:900px){.svc-grid{grid-template-columns:1fr 1fr}}
@media(max-width:600px){.svc-grid{grid-template-columns:1fr}.nav-links{display:none}.hero-title{font-size:36px}}
.svc-card{background:var(--surf);border:1px solid var(--br);border-radius:20px;padding:32px;transition:all .3s}
.svc-card:hover{transform:translateY(-6px);border-color:rgba(59,130,246,.4);box-shadow:0 20px 60px rgba(59,130,246,.1)}
.svc-icon{width:52px;height:52px;border-radius:14px;background:linear-gradient(135deg,rgba(59,130,246,.2),rgba(0,212,255,.1));display:flex;align-items:center;justify-content:center;font-size:22px;margin-bottom:20px}
.svc-title{font-family:var(--fh);font-size:18px;font-weight:700;margin-bottom:10px}
.svc-body{color:var(--t2);font-size:14px;line-height:1.7}
/* process timeline */
.timeline{display:flex;flex-direction:column;gap:0;max-width:800px}
.tl-item{display:grid;grid-template-columns:80px 1fr;gap:32px;position:relative}
.tl-item::before{content:'';position:absolute;left:39px;top:52px;bottom:-20px;width:2px;background:linear-gradient(180deg,rgba(59,130,246,.4),transparent)}
.tl-item:last-child::before{display:none}
.tl-num{width:52px;height:52px;border-radius:50%;background:linear-gradient(135deg,var(--b),var(--c));display:flex;align-items:center;justify-content:center;font-family:var(--fh);font-size:18px;font-weight:800;flex-shrink:0;margin-left:14px}
.tl-content{padding-bottom:48px}
.tl-content h3{font-family:var(--fh);font-size:20px;font-weight:700;margin-bottom:8px}
.tl-content p{color:var(--t2);font-size:15px;line-height:1.7}
/* tech */
.tech-tabs{display:flex;gap:8px;flex-wrap:wrap;margin-bottom:40px}
.ttab{padding:8px 18px;border-radius:100px;border:1px solid var(--br);font-size:13px;cursor:pointer;transition:all .2s;background:var(--surf);color:var(--t2)}
.ttab.active{background:var(--b);border-color:var(--b);color:#fff}
.tech-content{background:var(--surf);border:1px solid var(--br);border-radius:20px;padding:32px}
.tech-chips{display:flex;flex-wrap:wrap;gap:10px}
.tech-chip{background:var(--bg2);border:1px solid var(--br);border-radius:8px;padding:8px 16px;font-size:13px;color:var(--t2)}
/* cs */
.cs-wrap{background:var(--surf);border:1px solid var(--br);border-radius:24px;padding:64px;display:grid;grid-template-columns:1fr 1fr;gap:64px;align-items:center}
@media(max-width:800px){.cs-wrap{grid-template-columns:1fr;padding:40px}}
.cs-stats{display:grid;grid-template-columns:1fr 1fr;gap:16px}
.cs-stat{text-align:center;padding:32px;background:var(--bg2);border-radius:16px;border:1px solid var(--br)}
.cs-stat-num{font-family:var(--fh);font-size:48px;font-weight:800;background:linear-gradient(135deg,var(--b),var(--c));-webkit-background-clip:text;-webkit-text-fill-color:transparent}
.cs-stat-label{color:var(--t2);font-size:14px;margin-top:4px}
/* faq */
.faq-list{max-width:780px}
.faq-item{border-bottom:1px solid var(--br);padding:24px 0}
.faq-q{font-family:var(--fh);font-size:17px;font-weight:700;cursor:pointer;display:flex;justify-content:space-between;align-items:center}
.faq-q::after{content:'+';font-size:22px;color:var(--b);transition:transform .3s}
.faq-item.open .faq-q::after{transform:rotate(45deg)}
.faq-a{color:var(--t2);font-size:15px;line-height:1.75;max-height:0;overflow:hidden;transition:max-height .4s,padding .3s}
.faq-item.open .faq-a{max-height:300px;padding-top:16px}
.cta-band{background:linear-gradient(135deg,rgba(59,130,246,.12),rgba(0,212,255,.06));border:1px solid rgba(59,130,246,.2);border-radius:32px;padding:100px 64px;text-align:center}
@media(max-width:600px){.cta-band{padding:60px 24px}}
footer{background:var(--bg2);border-top:1px solid var(--br);padding:64px 0 32px}
.foot-grid{display:grid;grid-template-columns:2fr 1fr 1fr 1fr;gap:48px;margin-bottom:48px}
@media(max-width:800px){.foot-grid{grid-template-columns:1fr 1fr}}
.foot-brand p{color:var(--t2);font-size:14px;line-height:1.7;margin-top:12px;max-width:280px}
.foot-col h4{font-family:var(--fh);font-size:13px;font-weight:700;letter-spacing:.08em;text-transform:uppercase;color:var(--t3);margin-bottom:16px}
.foot-col a{display:block;color:var(--t2);font-size:14px;text-decoration:none;margin-bottom:10px;transition:color .2s}
.foot-col a:hover{color:var(--c)}
.foot-bottom{border-top:1px solid var(--br);padding-top:24px;display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap;gap:12px}
.foot-bottom p{color:var(--t3);font-size:13px}
.rv{opacity:0;transform:translateY(40px);transition:opacity .7s ease,transform .7s ease}
.rv.in{opacity:1;transform:none}
.modal-overlay{position:fixed;inset:0;background:rgba(3,3,7,.92);z-index:2000;display:flex;align-items:center;justify-content:center;padding:24px;opacity:0;pointer-events:none;transition:opacity .3s}
.modal-overlay.show{opacity:1;pointer-events:all}
.modal{background:var(--surf);border:1px solid var(--br2);border-radius:28px;padding:48px;max-width:560px;width:100%;position:relative;max-height:90vh;overflow-y:auto}
.modal-close{position:absolute;top:20px;right:20px;background:none;border:none;color:var(--t3);font-size:24px;cursor:pointer}
.modal-step{display:none}.modal-step.active{display:block}
.step-title{font-family:var(--fh);font-size:24px;font-weight:800;margin-bottom:8px}
.step-sub{color:var(--t2);font-size:15px;margin-bottom:32px}
.form-field{margin-bottom:20px}
.form-field label{display:block;font-size:13px;font-weight:600;color:var(--t2);margin-bottom:8px;text-transform:uppercase;letter-spacing:.06em}
.form-field input,.form-field select,.form-field textarea{width:100%;background:var(--bg2);border:1px solid var(--br);border-radius:12px;padding:14px 18px;color:var(--t);font-family:var(--fb);font-size:15px;outline:none;transition:border-color .2s}
.form-field input:focus,.form-field select:focus,.form-field textarea:focus{border-color:var(--b)}
.chips{display:flex;flex-wrap:wrap;gap:10px;margin-bottom:24px}
.chip{padding:10px 20px;border-radius:100px;border:1px solid var(--br);font-size:14px;cursor:pointer;transition:all .2s;background:var(--bg2)}
.chip.sel{background:var(--b);border-color:var(--b);color:#fff}
.progress-dots{display:flex;gap:8px;justify-content:center;margin-bottom:32px}
.dot{width:8px;height:8px;border-radius:50%;background:var(--br2);transition:background .3s}
.dot.active{background:var(--b)}
</style>
</head>
<body>
<div id="cur"></div>
<div id="cur2"></div>
<div id="prog"></div>
<canvas id="bg-canvas"></canvas>

<nav>
  <a class="logo" href="index.php">Digi9</a>
  <ul class="nav-links">
    <li><a href="index.php">Home</a></li>
    <li><a href="services.php">Services</a></li>
    <li><a href="work.php">Work</a></li>
    <li><a href="about.php">About</a></li>
    <li><a href="insights.php">Insights</a></li>
    <li><a href="contact.php">Contact</a></li>
  </ul>
  <button class="nav-cta" onclick="openModal()">Start Project</button>
</nav>

<main>
<section class="hero">
  <div class="container">
    <div class="eyebrow rv">Web Application Development</div>
    <h1 class="hero-title rv">Platforms Built to<br><span class="grad-text">Scale & Perform</span></h1>
    <p class="hero-sub rv">We engineer enterprise web applications that handle millions of requests, integrate AI intelligence, and evolve with your business — built to last, not just to launch.</p>
    <div class="btn-row rv">
      <button class="btn-p" onclick="openModal()">Start Your Web Project</button>
      <button class="btn-o" onclick="document.getElementById('services').scrollIntoView({behavior:'smooth'})">Our Capabilities</button>
    </div>
  </div>
</section>

<section class="sec" id="services">
  <div class="container">
    <div class="rv"><div class="eyebrow">What We Build</div><h2 class="sec-title">Web Engineering <span class="grad-text">Services</span></h2><p class="sec-sub">From complex SaaS platforms to enterprise portals — we build applications that become your competitive moat.</p></div>
    <div class="svc-grid">
      <div class="svc-card rv"><div class="svc-icon">⚡</div><div class="svc-title">SaaS Platform Development</div><p class="svc-body">Multi-tenant architectures, subscription management, usage billing, and the performance foundations that SaaS businesses need to scale.</p></div>
      <div class="svc-card rv"><div class="svc-icon">📊</div><div class="svc-title">AI-Powered Dashboards</div><p class="svc-body">Real-time data visualization platforms with predictive overlays, anomaly detection, and natural-language query interfaces.</p></div>
      <div class="svc-card rv"><div class="svc-icon">🏢</div><div class="svc-title">Enterprise Portals</div><p class="svc-body">Customer portals, vendor management systems, and intranet platforms with SSO, role-based access, and audit logging.</p></div>
      <div class="svc-card rv"><div class="svc-icon">🛒</div><div class="svc-title">E-Commerce & Marketplace</div><p class="svc-body">Custom commerce platforms with dynamic pricing, inventory intelligence, AI recommendations, and payment orchestration.</p></div>
      <div class="svc-card rv"><div class="svc-icon">🔌</div><div class="svc-title">API & Integration Layer</div><p class="svc-body">REST and GraphQL API development, third-party integrations, webhooks, and event-driven microservice architectures.</p></div>
      <div class="svc-card rv"><div class="svc-icon">🔒</div><div class="svc-title">Secure Web Infrastructure</div><p class="svc-body">SOC2-ready deployments, secrets management, WAF configuration, and cloud security architecture for regulated industries.</p></div>
    </div>
  </div>
</section>

<section class="sec" style="padding-top:0">
  <div class="container">
    <div class="rv"><div class="eyebrow">How We Work</div><h2 class="sec-title">Our <span class="grad-text">Process</span></h2></div>
    <div class="timeline">
      <div class="tl-item rv"><div class="tl-num">01</div><div class="tl-content"><h3>Discovery & Architecture</h3><p>We map your business requirements to technical architecture — choosing the right stack, infrastructure, and data models before writing a line of code.</p></div></div>
      <div class="tl-item rv"><div class="tl-num">02</div><div class="tl-content"><h3>Design & Prototype</h3><p>High-fidelity UX prototypes reviewed with your team before development begins. We validate the experience, not just the idea.</p></div></div>
      <div class="tl-item rv"><div class="tl-num">03</div><div class="tl-content"><h3>Agile Build Sprints</h3><p>Two-week sprints with working software at every checkpoint. You see real progress, not PowerPoint updates.</p></div></div>
      <div class="tl-item rv"><div class="tl-num">04</div><div class="tl-content"><h3>Performance & Security Hardening</h3><p>Load testing, penetration testing, caching optimization, and CDN configuration before every major release.</p></div></div>
      <div class="tl-item rv"><div class="tl-num">05</div><div class="tl-content"><h3>Launch & Scale Support</h3><p>Monitored production launch with on-call engineers, followed by an optimization phase based on real user behavior data.</p></div></div>
    </div>
  </div>
</section>

<section class="sec" style="padding-top:0">
  <div class="container">
    <div class="rv"><div class="eyebrow">Technology</div><h2 class="sec-title">Built With <span class="grad-text">Best-in-Class</span> Stack</h2></div>
    <div class="tech-content rv">
      <div class="tech-chips">
        <span class="tech-chip">Next.js 14</span><span class="tech-chip">React</span><span class="tech-chip">TypeScript</span><span class="tech-chip">Node.js</span><span class="tech-chip">Python / FastAPI</span><span class="tech-chip">PostgreSQL</span><span class="tech-chip">Redis</span><span class="tech-chip">GraphQL</span><span class="tech-chip">AWS / GCP</span><span class="tech-chip">Docker</span><span class="tech-chip">Kubernetes</span><span class="tech-chip">Tailwind CSS</span><span class="tech-chip">Prisma</span><span class="tech-chip">Stripe</span><span class="tech-chip">Auth0</span><span class="tech-chip">Vercel</span>
      </div>
    </div>
  </div>
</section>

<section class="sec" style="padding-top:0">
  <div class="container">
    <div class="rv"><div class="eyebrow">Case Study</div><h2 class="sec-title">Built & <span class="grad-text">Shipped</span></h2></div>
    <div class="cs-wrap rv">
      <div>
        <div class="eyebrow" style="margin-bottom:12px">Logistics SaaS</div>
        <h3 style="font-family:var(--fh);font-size:28px;font-weight:800;margin-bottom:16px">AI-Powered Fleet Operations Platform</h3>
        <p style="color:var(--t2);font-size:15px;line-height:1.75;margin-bottom:24px">A logistics company managing 800+ vehicles needed a real-time dispatch platform with ML-based route optimization and live driver communication. We built their entire platform from scratch in 16 weeks.</p>
        <ul style="color:var(--t2);font-size:14px;line-height:2;padding-left:20px">
          <li>Real-time WebSocket updates for 800 concurrent vehicles</li>
          <li>ML route optimizer cutting average trip time 23%</li>
          <li>Mobile-responsive dispatcher dashboard</li>
        </ul>
      </div>
      <div class="cs-stats">
        <div class="cs-stat"><div class="cs-stat-num">800+</div><div class="cs-stat-label">Live Vehicles</div></div>
        <div class="cs-stat"><div class="cs-stat-num">23%</div><div class="cs-stat-label">Route Savings</div></div>
        <div class="cs-stat"><div class="cs-stat-num">16wk</div><div class="cs-stat-label">Build to Launch</div></div>
        <div class="cs-stat"><div class="cs-stat-num">99.9%</div><div class="cs-stat-label">Uptime SLA</div></div>
      </div>
    </div>
  </div>
</section>

<section class="sec" style="padding-top:0">
  <div class="container">
    <div class="rv"><div class="eyebrow">FAQ</div><h2 class="sec-title">Common <span class="grad-text">Questions</span></h2></div>
    <div class="faq-list">
      <div class="faq-item rv"><div class="faq-q">What's the difference between a web app and a website?</div><div class="faq-a">A website is primarily informational. A web application has user authentication, data processing, business logic, and often integrates with other systems. We specialize in the latter.</div></div>
      <div class="faq-item rv"><div class="faq-q">How do you handle scalability for high-traffic platforms?</div><div class="faq-a">We design for horizontal scaling from day one — containerized services, database read replicas, Redis caching layers, and CDN-offloaded assets. We load-test to 10x expected traffic before launch.</div></div>
      <div class="faq-item rv"><div class="faq-q">Do you offer ongoing maintenance after launch?</div><div class="faq-a">Yes. We offer retainer-based maintenance covering security patches, dependency updates, performance monitoring, and feature iterations. Most clients continue with 20-40 hours/month.</div></div>
      <div class="faq-item rv"><div class="faq-q">Can you work with our existing backend or APIs?</div><div class="faq-a">Absolutely. We frequently build new frontend layers on top of existing APIs, or extend existing backends with new microservices rather than replacing working infrastructure.</div></div>
    </div>
  </div>
</section>

<section class="sec" style="padding-top:0">
  <div class="container">
    <div class="cta-band rv">
      <div class="eyebrow" style="margin-bottom:16px">Ready to Build?</div>
      <h2 style="font-family:var(--fh);font-size:clamp(32px,4vw,52px);font-weight:800;margin-bottom:16px">Your Platform,<br><span class="grad-text">Engineered Right</span></h2>
      <p style="color:var(--t2);font-size:17px;max-width:520px;margin:0 auto 40px;line-height:1.7">Share your requirements. We'll respond with architecture options, timeline, and a transparent proposal.</p>
      <button class="btn-p" onclick="openModal()">Start Web Project Discussion</button>
    </div>
  </div>
</section>
</main>

<footer>
  <div class="container">
    <div class="foot-grid">
      <div class="foot-brand"><a class="logo" href="index.php">Digi9</a><p>Engineering enterprise web platforms that scale, perform, and adapt.</p></div>
      <div class="foot-col"><h4>Services</h4><a href="ai-software-development.php">AI Development</a><a href="web-application-development.php">Web Apps</a><a href="mobile-application-development.php">Mobile Apps</a><a href="custom-software.php">Custom Software</a></div>
      <div class="foot-col"><h4>Company</h4><a href="about.php">About</a><a href="work.php">Work</a><a href="insights.php">Insights</a><a href="contact.php">Contact</a></div>
      <div class="foot-col"><h4>Contact</h4><a href="mailto:hello@digi9.in">hello@digi9.in</a><a href="tel:+919999999999">+91 99999 99999</a><a href="contact.php">Bangalore, India</a></div>
    </div>
    <div class="foot-bottom"><p>© 2025 Digi9. All rights reserved.</p><p style="color:var(--t3);font-size:13px">Crafted with intent.</p></div>
  </div>
</footer>

<div class="modal-overlay" id="modal">
  <div class="modal">
    <button class="modal-close" onclick="closeModal()">×</button>
    <div class="progress-dots"><div class="dot active" id="d1"></div><div class="dot" id="d2"></div><div class="dot" id="d3"></div><div class="dot" id="d4"></div><div class="dot" id="d5"></div></div>
    <div class="modal-step active" id="s1"><div class="step-title">Start a Project</div><div class="step-sub">Tell us about your web application idea.</div><div class="form-field"><label>Full Name</label><input id="m-name" type="text" placeholder="Your name"></div><div class="form-field"><label>Email</label><input id="m-email" type="email" placeholder="you@company.com"></div><div class="form-field"><label>Phone</label><input id="m-phone" type="tel" placeholder="+91 98765 43210"></div><button class="btn-p" style="width:100%" onclick="nextStep(2)">Continue →</button></div>
    <div class="modal-step" id="s2"><div class="step-title">What are you building?</div><div class="step-sub">Select what applies to your project.</div><div class="chips"><div class="chip" onclick="toggleChip(this)">SaaS Platform</div><div class="chip" onclick="toggleChip(this)">Enterprise Portal</div><div class="chip" onclick="toggleChip(this)">AI Dashboard</div><div class="chip" onclick="toggleChip(this)">E-Commerce</div><div class="chip" onclick="toggleChip(this)">API / Backend</div><div class="chip" onclick="toggleChip(this)">Marketplace</div><div class="chip" onclick="toggleChip(this)">Redesign / Rebuild</div></div><button class="btn-p" style="width:100%" onclick="nextStep(3)">Continue →</button></div>
    <div class="modal-step" id="s3"><div class="step-title">Project Details</div><div class="step-sub">A little context goes a long way.</div><div class="form-field"><label>Company</label><input id="m-company" type="text" placeholder="Your company name"></div><div class="form-field"><label>Timeline</label><select id="m-timeline"><option value="">Select timeline</option><option>Under 3 months</option><option>3-6 months</option><option>6-12 months</option><option>Planning phase</option></select></div><div class="form-field"><label>Description</label><textarea id="m-desc" rows="3" placeholder="What does your platform do?"></textarea></div><button class="btn-p" style="width:100%" onclick="nextStep(4)">Review →</button></div>
    <div class="modal-step" id="s4"><div class="step-title">Confirm Details</div><div class="step-sub">We'll reach out within 24 hours.</div><div id="summary" style="background:var(--bg2);border-radius:16px;padding:24px;margin-bottom:24px;font-size:14px;line-height:2;color:var(--t2)"></div><button class="btn-p" style="width:100%" onclick="submitModal()">Submit Request</button></div>
    <div class="modal-step" id="s5"><div style="text-align:center;padding:32px 0"><div style="font-size:64px;margin-bottom:24px">🚀</div><div class="step-title">Request Received!</div><p style="color:var(--t2);line-height:1.7;margin-top:8px">Our web engineering team will prepare a tailored response within 24 hours.</p></div></div>
  </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
<script>
// Data Streams canvas — flowing light tubes through a dark tunnel
(function(){
  const cv=document.getElementById('bg-canvas');
  const ctx=cv.getContext('2d');
  let W,H,streams=[];
  function resize(){W=cv.width=window.innerWidth;H=cv.height=window.innerHeight;streams=[];init()}
  function Stream(){
    this.reset=function(){
      this.x=Math.random()*W;
      this.y=-20;
      this.len=Math.random()*200+60;
      this.speed=Math.random()*3+1;
      this.width=Math.random()*2+.5;
      this.hue=Math.random()<.5?210:185; // blue or cyan
      this.alpha=Math.random()*.6+.2;
      this.done=false;
    };
    this.reset();
    this.y=Math.random()*H; // stagger start
  }
  function init(){for(let i=0;i<60;i++)streams.push(new Stream())}
  resize();window.addEventListener('resize',resize);
  // radial grid overlay
  function drawGrid(){
    ctx.save();
    const cx=W/2,cy=H/2;
    for(let r=80;r<Math.max(W,H)*1.2;r+=80){
      ctx.beginPath();ctx.arc(cx,cy,r,0,Math.PI*2);
      ctx.strokeStyle=`rgba(59,130,246,${Math.max(0,.04-r/50000)})`;
      ctx.lineWidth=1;ctx.stroke();
    }
    // radial lines
    for(let a=0;a<Math.PI*2;a+=Math.PI/12){
      ctx.beginPath();ctx.moveTo(cx,cy);
      ctx.lineTo(cx+Math.cos(a)*Math.max(W,H),cy+Math.sin(a)*Math.max(W,H));
      ctx.strokeStyle='rgba(59,130,246,.015)';ctx.lineWidth=1;ctx.stroke();
    }
    ctx.restore();
  }
  function draw(){
    ctx.clearRect(0,0,W,H);
    drawGrid();
    streams.forEach(s=>{
      const grd=ctx.createLinearGradient(s.x,s.y,s.x,s.y+s.len);
      grd.addColorStop(0,'rgba(0,0,0,0)');
      grd.addColorStop(.5,`hsla(${s.hue},100%,65%,${s.alpha})`);
      grd.addColorStop(1,'rgba(0,0,0,0)');
      ctx.beginPath();ctx.moveTo(s.x,s.y);ctx.lineTo(s.x,s.y+s.len);
      ctx.strokeStyle=grd;ctx.lineWidth=s.width;ctx.stroke();
      s.y+=s.speed;
      if(s.y>H+s.len)s.reset();
    });
    requestAnimationFrame(draw);
  }
  draw();
})();

// cursor
const cur=document.getElementById('cur'),cur2=document.getElementById('cur2');
let cx=0,cy=0,cx2=0,cy2=0;
document.addEventListener('mousemove',e=>{cx=e.clientX;cy=e.clientY});
(function loop(){cur.style.left=cx+'px';cur.style.top=cy+'px';cx2+=(cx-cx2)*.12;cy2+=(cy-cy2)*.12;cur2.style.left=cx2+'px';cur2.style.top=cy2+'px';requestAnimationFrame(loop)})();
window.addEventListener('scroll',()=>{const p=window.scrollY/(document.body.scrollHeight-window.innerHeight)*100;document.getElementById('prog').style.width=p+'%'});

gsap.registerPlugin(ScrollTrigger);
gsap.from('.hero .rv',{duration:1.2,y:60,opacity:0,stagger:.15,ease:'power3.out',delay:.3});
document.querySelectorAll('.rv').forEach(el=>{
  if(el.closest('.hero'))return;
  ScrollTrigger.create({trigger:el,start:'top 85%',onEnter:()=>el.classList.add('in')});
});
gsap.utils.toArray('.svc-card').forEach((c,i)=>{
  ScrollTrigger.create({trigger:c,start:'top 85%',onEnter:()=>{gsap.from(c,{duration:.7,y:50,opacity:0,delay:i%3*.1,ease:'power2.out'})}});
});
document.querySelectorAll('.svc-card').forEach(c=>{
  c.addEventListener('mousemove',e=>{const r=c.getBoundingClientRect();const x=(e.clientX-r.left)/r.width-.5;const y=(e.clientY-r.top)/r.height-.5;c.style.transform=`perspective(700px) rotateY(${x*10}deg) rotateX(${-y*10}deg) translateZ(8px)`});
  c.addEventListener('mouseleave',()=>{c.style.transform=''});
});
document.querySelectorAll('.faq-q').forEach(q=>{q.addEventListener('click',()=>{q.parentElement.classList.toggle('open')})});
let step=1;
function openModal(){document.getElementById('modal').classList.add('show');document.body.style.overflow='hidden'}
function closeModal(){document.getElementById('modal').classList.remove('show');document.body.style.overflow=''}
function nextStep(n){document.getElementById('s'+step).classList.remove('active');document.getElementById('d'+step).classList.remove('active');step=n;document.getElementById('s'+step).classList.add('active');document.getElementById('d'+step).classList.add('active');if(n===4){const chips=[...document.querySelectorAll('.chip.sel')].map(c=>c.textContent).join(', ');document.getElementById('summary').innerHTML=`<b>Name:</b> ${document.getElementById('m-name').value||'—'}<br><b>Email:</b> ${document.getElementById('m-email').value||'—'}<br><b>Services:</b> ${chips||'—'}<br><b>Company:</b> ${document.getElementById('m-company').value||'—'}<br><b>Timeline:</b> ${document.getElementById('m-timeline').value||'—'}`}}
function toggleChip(el){el.classList.toggle('sel')}
function submitModal(){nextStep(5)}
document.getElementById('modal').addEventListener('click',e=>{if(e.target===document.getElementById('modal'))closeModal()});
window.openModal=openModal;
</script>
</body>
</html>
