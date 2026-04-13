<?php
$pageTitle = "Mobile Application Development Services | Digi9";
$metaDesc  = "Custom mobile application development company in Bangalore. We build AI-integrated mobile apps for Android and iOS that solve real business operational challenges.";
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
:root{--bg:#030307;--bg2:#07070f;--surf:#0d0d1a;--surf2:#12122a;--p:#7c3aed;--b:#3b82f6;--c:#00d4ff;--g:#f5c842;--t:#f0eeff;--t2:#9b97c4;--t3:#5a5780;--br:rgba(124,58,237,.15);--br2:rgba(124,58,237,.3);--fh:'Syne',sans-serif;--fb:'DM Sans',sans-serif;--nav:68px;--acc:#a855f7}
html{scroll-behavior:smooth}
body{background:var(--bg);color:var(--t);font-family:var(--fb);overflow-x:hidden;cursor:none}
canvas#bg-canvas{position:fixed;inset:0;z-index:0;pointer-events:none}
#cur{position:fixed;width:8px;height:8px;background:var(--acc);border-radius:50%;pointer-events:none;z-index:9999;transform:translate(-50%,-50%)}
#cur2{position:fixed;width:32px;height:32px;border:1.5px solid var(--acc);border-radius:50%;pointer-events:none;z-index:9998;transform:translate(-50%,-50%);mix-blend-mode:screen}
#prog{position:fixed;top:0;left:0;height:2px;background:linear-gradient(90deg,var(--p),var(--acc));z-index:1000;width:0%}
nav{position:fixed;top:0;left:0;right:0;height:var(--nav);z-index:900;display:flex;align-items:center;justify-content:space-between;padding:0 48px;background:rgba(3,3,7,.7);backdrop-filter:blur(20px);border-bottom:1px solid var(--br)}
.logo{font-family:var(--fh);font-size:24px;font-weight:800;background:linear-gradient(135deg,var(--p),var(--acc));-webkit-background-clip:text;-webkit-text-fill-color:transparent;text-decoration:none}
.nav-links{display:flex;gap:32px;list-style:none}
.nav-links a{color:var(--t2);font-size:14px;font-weight:500;text-decoration:none;transition:color .2s}
.nav-links a:hover{color:var(--t)}
.nav-cta{background:linear-gradient(135deg,var(--p),var(--acc));color:#fff;border:none;padding:10px 24px;border-radius:100px;font-size:14px;font-weight:600;cursor:pointer;font-family:var(--fb)}
main,section{position:relative;z-index:1}
.container{max-width:1200px;margin:0 auto;padding:0 24px}
.hero{min-height:100vh;display:flex;align-items:center;padding-top:var(--nav)}
.eyebrow{font-size:12px;font-weight:600;letter-spacing:.12em;text-transform:uppercase;color:var(--acc);margin-bottom:16px}
.hero-title{font-family:var(--fh);font-size:clamp(42px,6vw,88px);font-weight:800;line-height:1.05;margin-bottom:24px}
.grad-text{background:linear-gradient(135deg,var(--p),var(--acc));-webkit-background-clip:text;-webkit-text-fill-color:transparent}
.hero-sub{font-size:18px;color:var(--t2);max-width:600px;line-height:1.7;margin-bottom:40px}
.btn-row{display:flex;gap:16px;flex-wrap:wrap}
.btn-p{background:linear-gradient(135deg,var(--p),var(--acc));color:#fff;border:none;padding:14px 32px;border-radius:100px;font-size:15px;font-weight:600;cursor:pointer;font-family:var(--fb);transition:transform .2s,box-shadow .2s}
.btn-p:hover{transform:translateY(-2px);box-shadow:0 8px 32px rgba(168,85,247,.4)}
.btn-o{background:transparent;color:var(--t);border:1px solid rgba(168,85,247,.3);padding:14px 32px;border-radius:100px;font-size:15px;font-weight:600;cursor:pointer;font-family:var(--fb);transition:border-color .2s,color .2s}
.btn-o:hover{border-color:var(--acc);color:var(--acc)}
.sec{padding:120px 0}
.sec-title{font-family:var(--fh);font-size:clamp(32px,4vw,52px);font-weight:800;margin-bottom:16px}
.sec-sub{color:var(--t2);font-size:17px;max-width:600px;line-height:1.7;margin-bottom:64px}
/* features */
.feat-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:24px}
@media(max-width:900px){.feat-grid{grid-template-columns:1fr 1fr}}
@media(max-width:600px){.feat-grid{grid-template-columns:1fr}.nav-links{display:none}.hero-title{font-size:36px}}
.feat-card{background:var(--surf);border:1px solid var(--br);border-radius:20px;padding:32px;transition:all .3s}
.feat-card:hover{transform:translateY(-6px);border-color:rgba(168,85,247,.4);box-shadow:0 20px 60px rgba(168,85,247,.1)}
.feat-icon{width:52px;height:52px;border-radius:14px;background:linear-gradient(135deg,rgba(168,85,247,.2),rgba(124,58,237,.1));display:flex;align-items:center;justify-content:center;font-size:22px;margin-bottom:20px}
.feat-title{font-family:var(--fh);font-size:18px;font-weight:700;margin-bottom:10px}
.feat-body{color:var(--t2);font-size:14px;line-height:1.7}
/* platform split */
.platform-split{display:grid;grid-template-columns:1fr 1fr;gap:32px}
@media(max-width:700px){.platform-split{grid-template-columns:1fr}}
.platform-card{background:var(--surf);border:1px solid var(--br);border-radius:20px;padding:40px}
.platform-card h3{font-family:var(--fh);font-size:22px;font-weight:800;margin-bottom:12px}
.platform-card p{color:var(--t2);font-size:14px;line-height:1.75;margin-bottom:24px}
.feature-list{list-style:none}
.feature-list li{color:var(--t2);font-size:14px;padding:8px 0;border-bottom:1px solid var(--br);display:flex;align-items:center;gap:10px}
.feature-list li::before{content:'→';color:var(--acc);font-weight:700}
/* cs */
.cs-wrap{background:var(--surf);border:1px solid var(--br);border-radius:24px;padding:64px;display:grid;grid-template-columns:1fr 1fr;gap:64px;align-items:center}
@media(max-width:800px){.cs-wrap{grid-template-columns:1fr;padding:40px}}
.cs-stats{display:grid;grid-template-columns:1fr 1fr;gap:16px}
.cs-stat{text-align:center;padding:32px;background:var(--bg2);border-radius:16px;border:1px solid var(--br)}
.cs-stat-num{font-family:var(--fh);font-size:48px;font-weight:800;background:linear-gradient(135deg,var(--p),var(--acc));-webkit-background-clip:text;-webkit-text-fill-color:transparent}
.cs-stat-label{color:var(--t2);font-size:14px;margin-top:4px}
/* faq */
.faq-list{max-width:780px}
.faq-item{border-bottom:1px solid var(--br);padding:24px 0}
.faq-q{font-family:var(--fh);font-size:17px;font-weight:700;cursor:pointer;display:flex;justify-content:space-between;align-items:center}
.faq-q::after{content:'+';font-size:22px;color:var(--acc);transition:transform .3s}
.faq-item.open .faq-q::after{transform:rotate(45deg)}
.faq-a{color:var(--t2);font-size:15px;line-height:1.75;max-height:0;overflow:hidden;transition:max-height .4s,padding .3s}
.faq-item.open .faq-a{max-height:300px;padding-top:16px}
.cta-band{background:linear-gradient(135deg,rgba(168,85,247,.12),rgba(124,58,237,.06));border:1px solid rgba(168,85,247,.2);border-radius:32px;padding:100px 64px;text-align:center}
@media(max-width:600px){.cta-band{padding:60px 24px}}
footer{background:var(--bg2);border-top:1px solid var(--br);padding:64px 0 32px}
.foot-grid{display:grid;grid-template-columns:2fr 1fr 1fr 1fr;gap:48px;margin-bottom:48px}
@media(max-width:800px){.foot-grid{grid-template-columns:1fr 1fr}}
.foot-brand p{color:var(--t2);font-size:14px;line-height:1.7;margin-top:12px;max-width:280px}
.foot-col h4{font-family:var(--fh);font-size:13px;font-weight:700;letter-spacing:.08em;text-transform:uppercase;color:var(--t3);margin-bottom:16px}
.foot-col a{display:block;color:var(--t2);font-size:14px;text-decoration:none;margin-bottom:10px;transition:color .2s}
.foot-col a:hover{color:var(--c)}
.foot-bottom{border-top:1px solid var(--br);padding-top:24px;display:flex;justify-content:space-between;flex-wrap:wrap;gap:12px}
.foot-bottom p{color:var(--t3);font-size:13px}
.rv{opacity:0;transform:translateY(40px);transition:opacity .7s,transform .7s}
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
.form-field input:focus,.form-field select:focus,.form-field textarea:focus{border-color:var(--acc)}
.chips{display:flex;flex-wrap:wrap;gap:10px;margin-bottom:24px}
.chip{padding:10px 20px;border-radius:100px;border:1px solid var(--br);font-size:14px;cursor:pointer;transition:all .2s;background:var(--bg2)}
.chip.sel{background:var(--acc);border-color:var(--acc);color:#fff}
.progress-dots{display:flex;gap:8px;justify-content:center;margin-bottom:32px}
.dot{width:8px;height:8px;border-radius:50%;background:var(--br2);transition:background .3s}
.dot.active{background:var(--acc)}
</style>
</head>
<body>
<div id="cur"></div><div id="cur2"></div><div id="prog"></div>
<canvas id="bg-canvas"></canvas>

<nav>
  <a class="logo" href="index.php">Digi9</a>
  <ul class="nav-links">
    <li><a href="index.php">Home</a></li><li><a href="services.php">Services</a></li><li><a href="work.php">Work</a></li><li><a href="about.php">About</a></li><li><a href="insights.php">Insights</a></li><li><a href="contact.php">Contact</a></li>
  </ul>
  <button class="nav-cta" onclick="openModal()">Start Project</button>
</nav>

<main>
<section class="hero">
  <div class="container">
    <div class="eyebrow rv">Mobile Application Development</div>
    <h1 class="hero-title rv">Apps That Work<br><span class="grad-text">Where You Work</span></h1>
    <p class="hero-sub rv">We build native-quality mobile applications for iOS and Android with deep AI integration — from field operations tools to consumer apps serving millions.</p>
    <div class="btn-row rv">
      <button class="btn-p" onclick="openModal()">Start Mobile Project</button>
      <button class="btn-o" onclick="document.getElementById('features').scrollIntoView({behavior:'smooth'})">See Capabilities</button>
    </div>
  </div>
</section>

<section class="sec" id="features">
  <div class="container">
    <div class="rv"><div class="eyebrow">Capabilities</div><h2 class="sec-title">Mobile Engineering <span class="grad-text">Expertise</span></h2><p class="sec-sub">Cross-platform or native — we build mobile experiences that feel exceptional on every device.</p></div>
    <div class="feat-grid">
      <div class="feat-card rv"><div class="feat-icon">📱</div><div class="feat-title">Cross-Platform (Flutter)</div><p class="feat-body">Single codebase delivering native-quality performance on iOS and Android. 60fps animations, platform-native widgets, zero compromise on experience.</p></div>
      <div class="feat-card rv"><div class="feat-icon">🤖</div><div class="feat-title">On-Device AI/ML</div><p class="feat-body">TensorFlow Lite and Core ML models running locally for offline inference — no latency, no privacy risk, works anywhere.</p></div>
      <div class="feat-card rv"><div class="feat-icon">📡</div><div class="feat-title">Offline-First Architecture</div><p class="feat-body">Field teams and remote workers can't rely on connectivity. We build apps that sync intelligently when online and work fully offline.</p></div>
      <div class="feat-card rv"><div class="feat-icon">🔔</div><div class="feat-title">Push & Real-Time</div><p class="feat-body">WebSocket connections, push notification orchestration, live data feeds, and background sync for apps that keep users informed.</p></div>
      <div class="feat-card rv"><div class="feat-icon">💳</div><div class="feat-title">Payment Integration</div><p class="feat-body">Stripe, Razorpay, Apple Pay, Google Pay — secure in-app purchase flows, subscription management, and transaction reporting.</p></div>
      <div class="feat-card rv"><div class="feat-icon">📍</div><div class="feat-title">Location & Maps</div><p class="feat-body">Geofencing, route tracking, live location sharing, and custom map overlays for logistics, field service, and delivery applications.</p></div>
    </div>
  </div>
</section>

<section class="sec" style="padding-top:0">
  <div class="container">
    <div class="rv"><div class="eyebrow">Platforms</div><h2 class="sec-title">iOS & Android <span class="grad-text">Excellence</span></h2></div>
    <div class="platform-split">
      <div class="platform-card rv">
        <h3>iOS Development</h3>
        <p>Swift and SwiftUI applications that follow Apple's Human Interface Guidelines — smooth animations, native gestures, and seamless iCloud integration.</p>
        <ul class="feature-list">
          <li>Swift / SwiftUI</li><li>Core Data & CloudKit</li><li>ARKit & Vision Framework</li><li>App Store Optimization</li><li>TestFlight Beta Program</li>
        </ul>
      </div>
      <div class="platform-card rv">
        <h3>Android Development</h3>
        <p>Kotlin-first Android apps with Material Design 3, Jetpack Compose, and tight integration with Google's ecosystem services.</p>
        <ul class="feature-list">
          <li>Kotlin / Jetpack Compose</li><li>Room & DataStore</li><li>ML Kit & CameraX</li><li>Play Store Deployment</li><li>Firebase Integration</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<section class="sec" style="padding-top:0">
  <div class="container">
    <div class="rv"><div class="eyebrow">Case Study</div><h2 class="sec-title">Shipped & <span class="grad-text">Scaling</span></h2></div>
    <div class="cs-wrap rv">
      <div>
        <div class="eyebrow" style="margin-bottom:12px">Field Service Operations</div>
        <h3 style="font-family:var(--fh);font-size:28px;font-weight:800;margin-bottom:16px">AI-Assisted Inspection App for 1,200 Field Agents</h3>
        <p style="color:var(--t2);font-size:15px;line-height:1.75;margin-bottom:24px">A utilities company needed their field agents to perform standardized equipment inspections with photo capture, offline form completion, and automatic anomaly flagging using on-device computer vision.</p>
        <ul style="color:var(--t2);font-size:14px;line-height:2;padding-left:20px">
          <li>Works 100% offline in remote field locations</li>
          <li>On-device CV model detects 12 defect categories</li>
          <li>Inspections sync in batches when connected</li>
        </ul>
      </div>
      <div class="cs-stats">
        <div class="cs-stat"><div class="cs-stat-num">1,200</div><div class="cs-stat-label">Field Agents</div></div>
        <div class="cs-stat"><div class="cs-stat-num">97%</div><div class="cs-stat-label">Offline Reliability</div></div>
        <div class="cs-stat"><div class="cs-stat-num">12</div><div class="cs-stat-label">Defect Categories</div></div>
        <div class="cs-stat"><div class="cs-stat-num">40%</div><div class="cs-stat-label">Faster Inspections</div></div>
      </div>
    </div>
  </div>
</section>

<section class="sec" style="padding-top:0">
  <div class="container">
    <div class="rv"><div class="eyebrow">FAQ</div><h2 class="sec-title">Common <span class="grad-text">Questions</span></h2></div>
    <div class="faq-list">
      <div class="faq-item rv"><div class="faq-q">Flutter vs native — which should I choose?</div><div class="faq-a">Flutter is right when you want identical experiences on both platforms quickly and cost-effectively. Native is better when you need deep OS integration, performance-critical features, or heavy use of platform-specific APIs. We'll advise based on your use case.</div></div>
      <div class="faq-item rv"><div class="faq-q">How do you handle app store submission?</div><div class="faq-a">We handle the complete submission process — App Store Connect, Google Play Console, metadata, screenshots, review guidelines compliance, and responding to rejections. We've shipped dozens of apps through both stores.</div></div>
      <div class="faq-item rv"><div class="faq-q">Can the app integrate with our existing backend?</div><div class="faq-a">Yes. We build mobile apps as API consumers — connecting to your existing REST or GraphQL backend. If you don't have a mobile-ready API, we can build one alongside the app.</div></div>
      <div class="faq-item rv"><div class="faq-q">What does a typical mobile project timeline look like?</div><div class="faq-a">Simple apps: 8-12 weeks. Feature-rich enterprise apps: 16-24 weeks. Complex apps with custom hardware integrations: 6+ months. We structure in milestones so you see working software every 2 weeks.</div></div>
    </div>
  </div>
</section>

<section class="sec" style="padding-top:0">
  <div class="container">
    <div class="cta-band rv">
      <div class="eyebrow" style="margin-bottom:16px">Ready to Build?</div>
      <h2 style="font-family:var(--fh);font-size:clamp(32px,4vw,52px);font-weight:800;margin-bottom:16px">Your Mobile App,<br><span class="grad-text">Shipped Right</span></h2>
      <p style="color:var(--t2);font-size:17px;max-width:520px;margin:0 auto 40px;line-height:1.7">Tell us what your app needs to do. We'll spec it out and show you a realistic path to launch.</p>
      <button class="btn-p" onclick="openModal()">Start Mobile App Discussion</button>
    </div>
  </div>
</section>
</main>

<footer>
  <div class="container">
    <div class="foot-grid">
      <div class="foot-brand"><a class="logo" href="index.php">Digi9</a><p>Building mobile experiences that work where your teams work.</p></div>
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
    <div class="modal-step active" id="s1"><div class="step-title">Start a Project</div><div class="step-sub">Tell us about your mobile app idea.</div><div class="form-field"><label>Full Name</label><input id="m-name" type="text" placeholder="Your name"></div><div class="form-field"><label>Email</label><input id="m-email" type="email" placeholder="you@company.com"></div><div class="form-field"><label>Phone</label><input id="m-phone" type="tel" placeholder="+91 98765 43210"></div><button class="btn-p" style="width:100%" onclick="nextStep(2)">Continue →</button></div>
    <div class="modal-step" id="s2"><div class="step-title">Platform & Type</div><div class="step-sub">What are you building?</div><div class="chips"><div class="chip" onclick="toggleChip(this)">iOS App</div><div class="chip" onclick="toggleChip(this)">Android App</div><div class="chip" onclick="toggleChip(this)">Cross-Platform (Flutter)</div><div class="chip" onclick="toggleChip(this)">Enterprise Field App</div><div class="chip" onclick="toggleChip(this)">Consumer App</div><div class="chip" onclick="toggleChip(this)">AI-Powered App</div><div class="chip" onclick="toggleChip(this)">Offline-First App</div></div><button class="btn-p" style="width:100%" onclick="nextStep(3)">Continue →</button></div>
    <div class="modal-step" id="s3"><div class="step-title">Project Details</div><div class="step-sub">Help us understand the scope.</div><div class="form-field"><label>Company</label><input id="m-company" type="text" placeholder="Your company name"></div><div class="form-field"><label>Timeline</label><select id="m-timeline"><option value="">Select timeline</option><option>Under 3 months</option><option>3-6 months</option><option>6-12 months</option><option>Planning phase</option></select></div><div class="form-field"><label>Description</label><textarea id="m-desc" rows="3" placeholder="What does your app do?"></textarea></div><button class="btn-p" style="width:100%" onclick="nextStep(4)">Review →</button></div>
    <div class="modal-step" id="s4"><div class="step-title">Confirm Details</div><div class="step-sub">We'll reach out within 24 hours.</div><div id="summary" style="background:var(--bg2);border-radius:16px;padding:24px;margin-bottom:24px;font-size:14px;line-height:2;color:var(--t2)"></div><button class="btn-p" style="width:100%" onclick="submitModal()">Submit Request</button></div>
    <div class="modal-step" id="s5"><div style="text-align:center;padding:32px 0"><div style="font-size:64px;margin-bottom:24px">🚀</div><div class="step-title">Request Received!</div><p style="color:var(--t2);line-height:1.7;margin-top:8px">Our mobile team will reach out within 24 hours.</p></div></div>
  </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
<script>
// Orbital Ring canvas — rings orbiting a central device glow
(function(){
  const cv=document.getElementById('bg-canvas');
  const ctx=cv.getContext('2d');
  let W,H,t=0;
  const rings=[
    {r:80,speed:.003,tilt:.3,phase:0,color:'rgba(168,85,247,',dots:3},
    {r:150,speed:.002,tilt:.5,phase:1,color:'rgba(124,58,237,',dots:4},
    {r:240,speed:.0015,tilt:.2,phase:2,color:'rgba(59,130,246,',dots:5},
    {r:340,speed:.001,tilt:.4,phase:.5,color:'rgba(0,212,255,',dots:6},
    {r:450,speed:.0007,tilt:.6,phase:3,color:'rgba(168,85,247,',dots:7},
  ];
  function resize(){W=cv.width=window.innerWidth;H=cv.height=window.innerHeight}
  resize();window.addEventListener('resize',resize);
  function drawRing(ring,cx,cy,time){
    const a=ring.tilt;
    ctx.save();
    ctx.translate(cx,cy);
    ctx.scale(1,Math.sin(a));
    // ring
    ctx.beginPath();ctx.arc(0,0,ring.r,0,Math.PI*2);
    ctx.strokeStyle=ring.color+'.12)';ctx.lineWidth=1;ctx.stroke();
    // dots on ring
    for(let i=0;i<ring.dots;i++){
      const angle=time*ring.speed*1000+ring.phase+(i/ring.dots)*Math.PI*2;
      const dx=Math.cos(angle)*ring.r;
      const dy=Math.sin(angle)*ring.r;
      const pulse=Math.sin(time*.003+i)*.4+.6;
      const g=ctx.createRadialGradient(dx,dy,0,dx,dy,8);
      g.addColorStop(0,ring.color+(pulse)+')');
      g.addColorStop(1,ring.color+'0)');
      ctx.beginPath();ctx.arc(dx,dy,8,0,Math.PI*2);ctx.fillStyle=g;ctx.fill();
      ctx.beginPath();ctx.arc(dx,dy,2,0,Math.PI*2);ctx.fillStyle='#fff';ctx.fill();
    }
    ctx.restore();
  }
  function draw(ts){
    t=ts||0;
    ctx.clearRect(0,0,W,H);
    const cx=W/2,cy=H*0.35;
    // center glow
    const cg=ctx.createRadialGradient(cx,cy,0,cx,cy,120);
    cg.addColorStop(0,'rgba(168,85,247,.15)');cg.addColorStop(1,'rgba(168,85,247,0)');
    ctx.beginPath();ctx.arc(cx,cy,120,0,Math.PI*2);ctx.fillStyle=cg;ctx.fill();
    // center dot
    ctx.beginPath();ctx.arc(cx,cy,6,0,Math.PI*2);
    ctx.fillStyle='rgba(255,255,255,.9)';ctx.fill();
    rings.forEach(r=>drawRing(r,cx,cy,t));
    // starfield
    if(!draw.stars){draw.stars=[];for(let i=0;i<200;i++)draw.stars.push({x:Math.random()*W,y:Math.random()*H,r:Math.random()*1.2,a:Math.random()*.5})}
    draw.stars.forEach(s=>{ctx.beginPath();ctx.arc(s.x,s.y,s.r,0,Math.PI*2);ctx.fillStyle=`rgba(240,238,255,${s.a})`;ctx.fill()});
    requestAnimationFrame(draw);
  }
  requestAnimationFrame(draw);
})();

const cur=document.getElementById('cur'),cur2=document.getElementById('cur2');
let cx=0,cy=0,cx2=0,cy2=0;
document.addEventListener('mousemove',e=>{cx=e.clientX;cy=e.clientY});
(function loop(){cur.style.left=cx+'px';cur.style.top=cy+'px';cx2+=(cx-cx2)*.12;cy2+=(cy-cy2)*.12;cur2.style.left=cx2+'px';cur2.style.top=cy2+'px';requestAnimationFrame(loop)})();
window.addEventListener('scroll',()=>{const p=window.scrollY/(document.body.scrollHeight-window.innerHeight)*100;document.getElementById('prog').style.width=p+'%'});

gsap.registerPlugin(ScrollTrigger);
gsap.from('.hero .rv',{duration:1.2,y:60,opacity:0,stagger:.15,ease:'power3.out',delay:.3});
document.querySelectorAll('.rv').forEach(el=>{if(el.closest('.hero'))return;ScrollTrigger.create({trigger:el,start:'top 85%',onEnter:()=>el.classList.add('in')})});
gsap.utils.toArray('.feat-card').forEach((c,i)=>{ScrollTrigger.create({trigger:c,start:'top 85%',onEnter:()=>{gsap.from(c,{duration:.7,y:50,opacity:0,delay:i%3*.1,ease:'power2.out'})}})});
document.querySelectorAll('.feat-card').forEach(c=>{c.addEventListener('mousemove',e=>{const r=c.getBoundingClientRect();const x=(e.clientX-r.left)/r.width-.5;const y=(e.clientY-r.top)/r.height-.5;c.style.transform=`perspective(700px) rotateY(${x*10}deg) rotateX(${-y*10}deg) translateZ(8px)`});c.addEventListener('mouseleave',()=>{c.style.transform=''})});
document.querySelectorAll('.faq-q').forEach(q=>{q.addEventListener('click',()=>{q.parentElement.classList.toggle('open')})});
let step=1;
function openModal(){document.getElementById('modal').classList.add('show');document.body.style.overflow='hidden'}
function closeModal(){document.getElementById('modal').classList.remove('show');document.body.style.overflow=''}
function nextStep(n){document.getElementById('s'+step).classList.remove('active');document.getElementById('d'+step).classList.remove('active');step=n;document.getElementById('s'+step).classList.add('active');document.getElementById('d'+step).classList.add('active');if(n===4){const chips=[...document.querySelectorAll('.chip.sel')].map(c=>c.textContent).join(', ');document.getElementById('summary').innerHTML=`<b>Name:</b> ${document.getElementById('m-name').value||'—'}<br><b>Email:</b> ${document.getElementById('m-email').value||'—'}<br><b>Platform:</b> ${chips||'—'}<br><b>Company:</b> ${document.getElementById('m-company').value||'—'}<br><b>Timeline:</b> ${document.getElementById('m-timeline').value||'—'}`}}
function toggleChip(el){el.classList.toggle('sel')}
function submitModal(){nextStep(5)}
document.getElementById('modal').addEventListener('click',e=>{if(e.target===document.getElementById('modal'))closeModal()});
window.openModal=openModal;
</script>
</body>
</html>
