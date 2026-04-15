<?php $year=date('Y'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Contact Us — Start Your Project | Digi9</title>
<meta name="description" content="Get in touch with Digi9. We build AI software, web platforms, and mobile apps for businesses in Bangalore and globally.">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;600;700;800&family=DM+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
<style>
*,*::before,*::after{box-sizing:border-box;margin:0;padding:0}
:root{--bg:#030307;--bg2:#07070f;--surf:#0d0d1a;--surf2:#12122a;--p:#7c3aed;--b:#3b82f6;--c:#00d4ff;--g:#f5c842;--t:#f0eeff;--t2:#9b97c4;--t3:#5a5780;--br:rgba(124,58,237,.15);--br2:rgba(124,58,237,.3);--fh:'Syne',sans-serif;--fb:'DM Sans',sans-serif;--nav:68px}
html{scroll-behavior:auto}
body{font-family:var(--fb);background:var(--bg);color:var(--t);overflow-x:hidden;cursor:none}
a{color:inherit;text-decoration:none}
::-webkit-scrollbar{width:3px}::-webkit-scrollbar-track{background:var(--bg)}::-webkit-scrollbar-thumb{background:var(--p);border-radius:2px}
#cur,#cur2{position:fixed;border-radius:50%;pointer-events:none;z-index:9999}
#cur{width:10px;height:10px;background:var(--c);top:0;left:0;mix-blend-mode:screen}
#cur2{width:36px;height:36px;border:1px solid rgba(0,212,255,.4);top:0;left:0;transition:all .12s ease;opacity:.6}
#bg-canvas{position:fixed;inset:0;z-index:0;pointer-events:none}
#prog{position:fixed;top:0;left:0;height:2px;z-index:999;background:linear-gradient(90deg,var(--p),var(--c));width:0;box-shadow:0 0 8px var(--c)}
nav{position:fixed;top:0;left:0;right:0;height:var(--nav);z-index:100;display:flex;align-items:center;justify-content:space-between;padding:0 4vw;transition:all .4s}
nav.on{background:rgba(3,3,7,.9);backdrop-filter:blur(24px);border-bottom:1px solid var(--br)}
.logo{font-family:var(--fh);font-size:1.55rem;font-weight:800;letter-spacing:-.02em;display:flex;align-items:center;gap:8px}
.logo::before{content:'';width:9px;height:9px;border-radius:50%;background:var(--p);box-shadow:0 0 12px var(--p);animation:pd 2s ease infinite;flex-shrink:0}
.logo span{background:linear-gradient(135deg,var(--p),var(--c));-webkit-background-clip:text;-webkit-text-fill-color:transparent}
@keyframes pd{0%,100%{box-shadow:0 0 8px var(--p)}50%{box-shadow:0 0 20px var(--p),0 0 40px var(--c)}}
.nav-ul{display:flex;align-items:center;gap:2.5rem;list-style:none}
.nav-ul a{font-size:.82rem;font-weight:500;letter-spacing:.06em;text-transform:uppercase;color:var(--t2);transition:color .2s;position:relative}
.nav-ul a::after{content:'';position:absolute;bottom:-4px;left:0;right:0;height:1px;background:var(--p);transform:scaleX(0);transition:transform .3s}
.nav-ul a:hover{color:var(--t)}.nav-ul a:hover::after{transform:scaleX(1)}
.nav-cta{background:var(--p)!important;color:#fff!important;padding:10px 22px;border-radius:100px;font-weight:600!important;box-shadow:0 0 18px rgba(124,58,237,.35);transition:all .3s!important}
.nav-cta::after{display:none!important}
section{position:relative;z-index:2}
.inner{max-width:1160px;margin:0 auto;padding:0 4vw}
.eyebrow{font-size:.68rem;font-weight:700;letter-spacing:.2em;text-transform:uppercase;color:var(--p);margin-bottom:.875rem;display:block}
.stitle{font-family:var(--fh);font-size:clamp(2rem,5vw,3.2rem);font-weight:800;letter-spacing:-.03em;line-height:1.08;margin-bottom:1.25rem}
.ssub{font-size:1rem;color:var(--t2);line-height:1.75;max-width:520px}
.btn-p{background:linear-gradient(135deg,var(--p),#a855f7);color:#fff;padding:15px 34px;border-radius:100px;font-weight:600;font-size:.95rem;border:none;cursor:pointer;box-shadow:0 0 28px rgba(124,58,237,.4);transition:all .3s;display:inline-flex;align-items:center;gap:8px;font-family:var(--fb)}
.btn-p:hover{transform:translateY(-2px);box-shadow:0 0 54px rgba(124,58,237,.65)}
.btn-g{color:var(--t);padding:15px 34px;border-radius:100px;font-weight:500;font-size:.95rem;border:1px solid var(--br2);backdrop-filter:blur(10px);background:rgba(255,255,255,.03);transition:all .3s;display:inline-flex;align-items:center;gap:8px}
.btn-g:hover{border-color:var(--p);background:rgba(124,58,237,.1)}

/* HERO */
.hero{min-height:70vh;display:flex;align-items:center;padding-top:var(--nav);text-align:center}
.hero-tag{display:inline-flex;align-items:center;gap:8px;background:rgba(124,58,237,.08);border:1px solid var(--br);border-radius:100px;padding:7px 18px;font-size:.75rem;font-weight:600;letter-spacing:.1em;text-transform:uppercase;color:var(--p);margin-bottom:2rem}
.hero-title{font-family:var(--fh);font-size:clamp(2.8rem,7vw,5rem);font-weight:800;letter-spacing:-.04em;line-height:1.04;margin-bottom:1.25rem}
.hero-title .grad{background:linear-gradient(135deg,var(--p),var(--c));-webkit-background-clip:text;-webkit-text-fill-color:transparent}
.hero-sub{font-size:1.05rem;color:var(--t2);line-height:1.8;max-width:520px;margin:0 auto}

/* DROP ITEMS */
.drop-item{transform-origin:50% 0;will-change:transform,opacity}

/* INFO CARDS */
.info-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:24px;padding:80px 0 0}
@media(max-width:700px){.info-grid{grid-template-columns:1fr}}
.info-card{background:var(--surf);border:1px solid var(--br);border-radius:18px;padding:36px 28px;text-align:center;transition:all .3s}
.info-card:hover{border-color:var(--br2);transform:translateY(-4px);box-shadow:0 16px 48px rgba(124,58,237,.12)}
.info-ico{font-size:2.5rem;margin-bottom:16px}
.info-label{font-size:.68rem;font-weight:700;letter-spacing:.2em;text-transform:uppercase;color:var(--p);margin-bottom:8px}
.info-val{font-family:var(--fh);font-size:1.1rem;font-weight:700;margin-bottom:6px}
.info-sub{font-size:.82rem;color:var(--t2)}

/* FORM SECTION */
.form-sec{padding:80px 0 120px}
.form-grid{display:grid;grid-template-columns:1fr 1fr;gap:64px;align-items:start}
@media(max-width:860px){.form-grid{grid-template-columns:1fr}}
.form-wrap{background:var(--surf);border:1px solid var(--br);border-radius:24px;padding:44px}
.fg{margin-bottom:18px}
.fg label{display:block;font-size:.72rem;font-weight:600;letter-spacing:.08em;text-transform:uppercase;color:var(--t2);margin-bottom:8px}
.fg input,.fg select,.fg textarea{width:100%;background:var(--surf2);border:1px solid var(--br);border-radius:10px;padding:13px 16px;color:var(--t);font-family:var(--fb);font-size:.92rem;outline:none;transition:border-color .2s}
.fg input:focus,.fg select:focus,.fg textarea:focus{border-color:var(--p);box-shadow:0 0 0 3px rgba(124,58,237,.12)}
.fg textarea{resize:vertical;min-height:110px}
.fg select option{background:var(--surf2)}
.fg-row{display:grid;grid-template-columns:1fr 1fr;gap:16px}
@media(max-width:500px){.fg-row{grid-template-columns:1fr}}
.form-title{font-family:var(--fh);font-size:1.5rem;font-weight:800;margin-bottom:6px}
.form-sub{font-size:.875rem;color:var(--t2);margin-bottom:28px}
#cf-success{display:none;text-align:center;padding:48px 0}
#cf-success .s-ico{font-size:4rem;margin-bottom:20px;animation:pop .6s cubic-bezier(.34,1.56,.64,1)}
@keyframes pop{from{transform:scale(0)}to{transform:scale(1)}}

/* NEXT STEPS */
.next-steps{}
.next-title{font-family:var(--fh);font-size:1.35rem;font-weight:800;margin-bottom:24px}
.step-row{display:flex;gap:20px;margin-bottom:28px;padding-bottom:28px;border-bottom:1px solid var(--br)}
.step-row:last-of-type{border-bottom:none;margin-bottom:0;padding-bottom:0}
.step-num-badge{width:44px;height:44px;border-radius:50%;background:linear-gradient(135deg,var(--p),var(--b));display:flex;align-items:center;justify-content:center;font-family:var(--fh);font-size:1rem;font-weight:800;flex-shrink:0}
.step-row-body h4{font-family:var(--fh);font-size:1rem;font-weight:700;margin-bottom:5px}
.step-row-body p{font-size:.875rem;color:var(--t2);line-height:1.6}
.trust-box{background:var(--surf);border:1px solid var(--br);border-radius:18px;padding:28px;margin-top:32px}
.trust-box .tb-label{font-size:.68rem;font-weight:700;letter-spacing:.15em;text-transform:uppercase;color:var(--p);margin-bottom:16px;display:block}
.trust-item{display:flex;align-items:center;gap:12px;padding:9px 0;border-bottom:1px solid var(--br);font-size:.875rem;color:var(--t2)}
.trust-item:last-child{border-bottom:none}
.trust-item::before{content:'✓';color:var(--c);font-weight:800;font-size:1rem}

/* FAQ */
.faq-sec{padding:0 0 120px}
.faq-list{max-width:760px;margin:0 auto}
.faq-item{border-bottom:1px solid var(--br)}
.faq-q{width:100%;background:none;border:none;color:var(--t);font-family:var(--fh);font-size:1.05rem;font-weight:700;text-align:left;padding:22px 0;cursor:pointer;display:flex;justify-content:space-between;align-items:center;gap:16px}
.faq-q span{font-size:1.4rem;color:var(--p);transition:transform .3s;flex-shrink:0}
.faq-item.open .faq-q span{transform:rotate(45deg)}
.faq-a{max-height:0;overflow:hidden;transition:max-height .4s ease,padding .3s}
.faq-item.open .faq-a{max-height:300px;padding-bottom:20px}
.faq-a p{font-size:.9rem;color:var(--t2);line-height:1.75}

/* CTA BAND */
.cta-band{background:linear-gradient(135deg,rgba(124,58,237,.1),rgba(0,212,255,.05));border:1px solid var(--br);border-radius:28px;padding:80px 60px;text-align:center;margin-bottom:120px}
@media(max-width:600px){.cta-band{padding:50px 24px}}

/* FOOTER */
footer{background:var(--bg2);border-top:1px solid var(--br);padding:70px 0 36px;position:relative;z-index:2}
.ft-inner{max-width:1160px;margin:0 auto;padding:0 4vw}
.ft-top{display:grid;grid-template-columns:2fr 1fr 1fr 1fr;gap:50px;margin-bottom:50px}
.ft-brand .bn{font-family:var(--fh);font-size:1.45rem;font-weight:800;margin-bottom:14px;display:flex;align-items:center;gap:8px}
.ft-brand .bn span{background:linear-gradient(135deg,var(--p),var(--c));-webkit-background-clip:text;-webkit-text-fill-color:transparent}
.ft-brand p{font-size:.845rem;color:var(--t2);line-height:1.7;margin-bottom:20px;max-width:260px}
.ft-email{color:var(--c);font-size:.845rem}
.ft-col h4{font-family:var(--fh);font-size:.68rem;font-weight:700;letter-spacing:.15em;text-transform:uppercase;color:var(--t3);margin-bottom:18px}
.ft-col ul{list-style:none}.ft-col li{margin-bottom:9px}.ft-col a{font-size:.845rem;color:var(--t2);transition:color .2s}.ft-col a:hover{color:var(--p)}
.ft-bot{border-top:1px solid var(--br);padding-top:28px;display:flex;align-items:center;justify-content:space-between;gap:16px;flex-wrap:wrap}
.ft-copy{font-size:.76rem;color:var(--t3)}
@media(max-width:580px){.nav-ul{display:none}.ft-top{grid-template-columns:1fr}}
@media(max-width:900px){.ft-top{grid-template-columns:1fr 1fr}}
</style>
</head>
<body>
<div id="cur"></div>
<div id="cur2"></div>
<div id="prog"></div>
<canvas id="bg-canvas"></canvas>

<nav id="nav">
  <a class="logo" href="index.php"><span>Digi9</span></a>
  <ul class="nav-ul">
    <li><a href="index.php">Home</a></li>
    <li><a href="services.php">Services</a></li>
    <li><a href="work.php">Work</a></li>
    <li><a href="about.php">About</a></li>
    <li><a href="insights.php">Insights</a></li>
    <li><a href="contact.php" class="nav-cta">Contact</a></li>
  </ul>
</nav>

<main>

<!-- HERO -->
<section class="hero">
  <div class="inner">
    <div class="hero-tag">✦ &nbsp;Get In Touch</div>
    <h1 class="hero-title">Let's Build Something<br><span class="grad">Together</span></h1>
    <p class="hero-sub">Tell us about your project. We'll respond within 24 hours with a clear path forward.</p>
  </div>
</section>

<!-- INFO CARDS -->
<section style="position:relative;z-index:2">
  <div class="inner">
    <div class="info-grid" id="info-grid">
      <div class="info-card drop-item">
        <div class="info-ico">✉️</div>
        <div class="info-label">Email Us</div>
        <div class="info-val"><a href="mailto:hello@digi9.in" style="color:var(--c)">hello@digi9.in</a></div>
        <p class="info-sub">We reply within 24 hours</p>
      </div>
      <div class="info-card drop-item">
        <div class="info-ico">📍</div>
        <div class="info-label">Our Office</div>
        <div class="info-val">Bangalore, India</div>
        <p class="info-sub">Building for global clients 🇮🇳</p>
      </div>
      <div class="info-card drop-item">
        <div class="info-ico">🕐</div>
        <div class="info-label">Working Hours</div>
        <div class="info-val">Mon – Sat</div>
        <p class="info-sub">9:00 AM – 7:00 PM IST</p>
      </div>
    </div>
  </div>
</section>

<!-- FORM + NEXT STEPS -->
<section class="form-sec" id="contact-section">
  <div class="inner">
    <div class="form-grid">

      <!-- Form -->
      <div class="drop-item" id="form-panel">
        <div class="form-wrap">
          <div class="form-title">Send a Message</div>
          <p class="form-sub">Tell us about your project and we'll get back to you within 24 hours.</p>
          <form id="contactForm" onsubmit="return handleContact(event)">
            <div class="fg-row">
              <div class="fg"><label>Full Name *</label><input type="text" id="cf-name" placeholder="Your name" required></div>
              <div class="fg"><label>Company</label><input type="text" id="cf-company" placeholder="Acme Corp"></div>
            </div>
            <div class="fg-row">
              <div class="fg"><label>Email *</label><input type="email" id="cf-email" placeholder="you@company.com" required></div>
              <div class="fg"><label>Phone</label><input type="tel" id="cf-phone" placeholder="+91 98765 43210"></div>
            </div>
            <div class="fg-row">
              <div class="fg"><label>What Are You Building? *</label>
                <select id="cf-service" required>
                  <option value="" disabled selected>Select a service</option>
                  <option>AI Software Development</option>
                  <option>Web Application</option>
                  <option>Mobile App</option>
                  <option>Custom Software</option>
                  <option>Automation / Integration</option>
                  <option>Not sure yet</option>
                </select>
              </div>
              <div class="fg"><label>Estimated Budget</label>
                <select id="cf-budget">
                  <option value="" disabled selected>Select range</option>
                  <option>Under ₹5 Lakhs</option>
                  <option>₹5 – ₹15 Lakhs</option>
                  <option>₹15 – ₹50 Lakhs</option>
                  <option>₹50 Lakhs+</option>
                  <option>Not sure</option>
                </select>
              </div>
            </div>
            <div class="fg"><label>Project Details *</label>
              <textarea id="cf-message" rows="5" placeholder="Describe the problem you're solving..." required></textarea>
            </div>
            <button type="submit" class="btn-p" id="cf-submit" style="width:100%;justify-content:center">Send Message →</button>
            <p id="cf-error" style="display:none;color:#f87171;font-size:.82rem;margin-top:12px;text-align:center"></p>
          </form>
          <div id="cf-success">
            <div class="s-ico">✅</div>
            <h3 style="font-family:var(--fh);font-size:1.4rem;font-weight:800;margin-bottom:8px">Message Sent!</h3>
            <p style="color:var(--t2);font-size:.9rem">We've received your message and will get back to you within 24 hours.</p>
          </div>
        </div>
      </div>

      <!-- Next Steps -->
      <div class="drop-item" id="steps-panel">
        <div class="next-title">What Happens Next</div>
        <div class="step-row">
          <div class="step-num-badge">1</div>
          <div class="step-row-body"><h4>We Review Your Request</h4><p>Our team reads your brief and prepares relevant questions within 24 hours.</p></div>
        </div>
        <div class="step-row">
          <div class="step-num-badge">2</div>
          <div class="step-row-body"><h4>Discovery Call</h4><p>A 30-minute call to understand your workflow, goals, and technical requirements.</p></div>
        </div>
        <div class="step-row">
          <div class="step-num-badge">3</div>
          <div class="step-row-body"><h4>Proposal & Roadmap</h4><p>You receive a detailed scope, timeline, and investment breakdown.</p></div>
        </div>
        <div class="step-row">
          <div class="step-num-badge">4</div>
          <div class="step-row-body"><h4>We Start Building</h4><p>Kick off with your dedicated team. First milestone delivered in 2 weeks.</p></div>
        </div>
        <div class="trust-box">
          <span class="tb-label">Why Businesses Choose Us</span>
          <div class="trust-item">No white-label — 100% custom built</div>
          <div class="trust-item">50+ projects delivered across 7 industries</div>
          <div class="trust-item">8+ years of engineering expertise</div>
          <div class="trust-item">End-to-end: Design → Dev → Deploy</div>
          <div class="trust-item">Transparent pricing, no surprises</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FAQ -->
<section class="faq-sec">
  <div class="inner">
    <div style="text-align:center;margin-bottom:56px">
      <span class="eyebrow">Common Questions</span>
      <h2 class="stitle">Before You Reach Out</h2>
    </div>
    <div class="faq-list">
      <div class="faq-item"><button class="faq-q" onclick="toggleFaq(this)">How long does a typical project take?<span>+</span></button><div class="faq-a"><p>Most projects range from 8–24 weeks depending on complexity. A simple web app: 8–10 weeks. An AI-powered platform: 16–24 weeks. We give realistic timelines upfront — no surprises.</p></div></div>
      <div class="faq-item"><button class="faq-q" onclick="toggleFaq(this)">Do you work with early-stage startups?<span>+</span></button><div class="faq-a"><p>Yes. We work with startups from MVP stage through scale. Budget-conscious options are available for early-stage teams who need to validate fast.</p></div></div>
      <div class="faq-item"><button class="faq-q" onclick="toggleFaq(this)">What information do I need to have ready?<span>+</span></button><div class="faq-a"><p>Just a description of the problem you're solving and who your users are. You don't need a technical spec — we handle discovery together.</p></div></div>
      <div class="faq-item"><button class="faq-q" onclick="toggleFaq(this)">Do you offer post-launch support?<span>+</span></button><div class="faq-a"><p>Yes. Every project includes a 30-day post-launch support window. Monthly retainer plans cover ongoing maintenance, feature additions, and performance monitoring.</p></div></div>
      <div class="faq-item"><button class="faq-q" onclick="toggleFaq(this)">Can you work with our existing tech stack?<span>+</span></button><div class="faq-a"><p>Absolutely. We integrate with existing systems, APIs, and databases. Whether extending a platform or building something new alongside it, we adapt to what's already in place.</p></div></div>
    </div>
  </div>
</section>

<!-- CTA -->
<section style="position:relative;z-index:2;padding:0 0 120px">
  <div class="inner">
    <div class="cta-band">
      <span class="eyebrow" style="margin-bottom:1rem">Ready?</span>
      <h2 style="font-family:var(--fh);font-size:clamp(2rem,5vw,3.2rem);font-weight:800;margin-bottom:1rem">Start the Conversation</h2>
      <p style="color:var(--t2);margin-bottom:2rem;max-width:420px;margin-left:auto;margin-right:auto;line-height:1.7">Fill out the form above or email us directly — whichever works for you.</p>
      <div style="display:flex;gap:1rem;justify-content:center;flex-wrap:wrap">
        <a href="mailto:hello@digi9.in" class="btn-p">Email Us Directly</a>
        <a href="services.php" class="btn-g">Explore Services →</a>
      </div>
    </div>
  </div>
</section>

</main>

<footer>
  <div class="ft-inner">
    <div class="ft-top">
      <div class="ft-brand">
        <div class="bn"><span>Digi9</span></div>
        <p>Engineering intelligent systems for enterprises that demand more from their software.</p>
        <a href="mailto:hello@digi9.in" class="ft-email">hello@digi9.in</a>
      </div>
      <div class="ft-col"><h4>Services</h4><ul>
        <li><a href="ai-software-development.php">AI Development</a></li>
        <li><a href="web-application-development.php">Web Apps</a></li>
        <li><a href="mobile-application-development.php">Mobile Apps</a></li>
        <li><a href="custom-software.php">Custom Software</a></li>
      </ul></div>
      <div class="ft-col"><h4>Company</h4><ul>
        <li><a href="about.php">About</a></li>
        <li><a href="work.php">Work</a></li>
        <li><a href="process.php">Process</a></li>
        <li><a href="insights.php">Insights</a></li>
      </ul></div>
      <div class="ft-col"><h4>Contact</h4><ul>
        <li><a href="mailto:hello@digi9.in">hello@digi9.in</a></li>
        <li><a href="tel:+919999999999">+91 99999 99999</a></li>
        <li><a href="#">Bangalore, India</a></li>
      </ul></div>
    </div>
    <div class="ft-bot">
      <p class="ft-copy">© <?= $year ?> Digi9. All rights reserved.</p>
      <p class="ft-copy">Crafted with intent.</p>
    </div>
  </div>
</footer>

<!-- Lenis -->
<script src="https://unpkg.com/lenis@1.1.14/dist/lenis.min.js"></script>

<script>
// ── BLACK HOLE CANVAS ─────────────────────────────────
(function(){
  const cv=document.getElementById('bg-canvas');
  const ctx=cv.getContext('2d');
  let W,H,particles=[],t=0;
  function resize(){W=cv.width=window.innerWidth;H=cv.height=window.innerHeight}
  resize();window.addEventListener('resize',resize);

  function Particle(){
    const angle=Math.random()*Math.PI*2;
    const dist=180+Math.random()*Math.max(W,H)*.5;
    this.x=W/2+Math.cos(angle)*dist;
    this.y=H/2+Math.sin(angle)*dist;
    this.ox=this.x;this.oy=this.y;
    this.angle=angle;
    this.dist=dist;
    this.speed=(Math.random()*.4+.1)*(Math.random()<.5?1:-1);
    this.inSpeed=Math.random()*.8+.3;
    this.r=Math.random()*1.5+.3;
    this.hue=Math.random()<.4?30+Math.random()*30:260+Math.random()*40; // orange or purple
    this.alpha=Math.random()*.6+.2;
  }
  for(let i=0;i<220;i++)particles.push(new Particle());

  function draw(){
    ctx.clearRect(0,0,W,H);
    t+=.008;
    const cx=W/2,cy=H*0.38;

    // Gravitational rings
    for(let r=30;r<400;r+=50){
      const alpha=Math.max(0,.15-r/2000);
      ctx.beginPath();ctx.arc(cx,cy,r,0,Math.PI*2);
      ctx.strokeStyle=`rgba(245,158,11,${alpha})`;ctx.lineWidth=1;ctx.stroke();
    }
    // Accretion disk glow
    const disk=ctx.createRadialGradient(cx,cy,20,cx,cy,180);
    disk.addColorStop(0,'rgba(245,120,20,.12)');
    disk.addColorStop(.4,'rgba(124,58,237,.06)');
    disk.addColorStop(1,'transparent');
    ctx.beginPath();ctx.arc(cx,cy,180,0,Math.PI*2);ctx.fillStyle=disk;ctx.fill();

    // Event horizon (black hole core)
    const core=ctx.createRadialGradient(cx,cy,0,cx,cy,50);
    core.addColorStop(0,'rgba(0,0,0,1)');
    core.addColorStop(.7,'rgba(3,3,7,.9)');
    core.addColorStop(1,'rgba(3,3,7,0)');
    ctx.beginPath();ctx.arc(cx,cy,50,0,Math.PI*2);ctx.fillStyle=core;ctx.fill();

    // Particles spiraling inward
    particles.forEach(p=>{
      p.angle+=p.speed*.012;
      p.dist=Math.max(55,p.dist-p.inSpeed*.15);
      p.x=cx+Math.cos(p.angle)*p.dist;
      p.y=cy+Math.sin(p.angle)*p.dist*.45; // flatten for disk effect

      if(p.dist<=55){
        const angle=Math.random()*Math.PI*2;
        const dist=250+Math.random()*Math.max(W,H)*.4;
        p.x=cx+Math.cos(angle)*dist;p.y=cy+Math.sin(angle)*dist;
        p.angle=angle;p.dist=dist;
        p.speed=(Math.random()*.4+.1)*(Math.random()<.5?1:-1);
        p.inSpeed=Math.random()*.8+.3;
      }

      const closeness=1-Math.min(1,p.dist/300);
      const g=ctx.createRadialGradient(p.x,p.y,0,p.x,p.y,p.r*3);
      g.addColorStop(0,`hsla(${p.hue},80%,65%,${p.alpha*(1+closeness)})`);
      g.addColorStop(1,'transparent');
      ctx.beginPath();ctx.arc(p.x,p.y,p.r*3,0,Math.PI*2);ctx.fillStyle=g;ctx.fill();
      ctx.beginPath();ctx.arc(p.x,p.y,p.r,0,Math.PI*2);
      ctx.fillStyle=`hsla(${p.hue},90%,80%,${p.alpha})`;ctx.fill();
    });

    // Outer starfield
    if(!draw.stars){draw.stars=[];for(let i=0;i<150;i++)draw.stars.push({x:Math.random()*10000%W,y:Math.random()*10000%H,r:Math.random()*.8,a:Math.random()*.4})}
    draw.stars.forEach(s=>{ctx.beginPath();ctx.arc(s.x,s.y,s.r,0,Math.PI*2);ctx.fillStyle=`rgba(240,238,255,${s.a})`;ctx.fill()});

    requestAnimationFrame(draw);
  }
  ctx.fillStyle='#030307';ctx.fillRect(0,0,W,H);draw();
})();

// ── CURSOR ────────────────────────────────────────────
const cur=document.getElementById('cur'),cur2=document.getElementById('cur2');
let mx=0,my=0,mx2=0,my2=0;
document.addEventListener('mousemove',e=>{mx=e.clientX;my=e.clientY});
(function loop(){
  cur.style.left=mx+'px';cur.style.top=my+'px';
  mx2+=(mx-mx2)*.12;my2+=(my-my2)*.12;
  cur2.style.left=mx2+'px';cur2.style.top=my2+'px';
  requestAnimationFrame(loop);
})();

// ── PROGRESS BAR ─────────────────────────────────────
window.addEventListener('scroll',()=>{
  const p=window.scrollY/(document.body.scrollHeight-window.innerHeight)*100;
  document.getElementById('prog').style.width=p+'%';
});

// ── NAV ───────────────────────────────────────────────
window.addEventListener('scroll',()=>{
  document.getElementById('nav').classList.toggle('on',window.scrollY>40);
});

// ── LENIS ────────────────────────────────────────────
gsap.registerPlugin(ScrollTrigger);
const lenis=new Lenis({lerp:.1,smoothWheel:true});
lenis.on('scroll',ScrollTrigger.update);
gsap.ticker.add(t=>lenis.raf(t*1000));
gsap.ticker.lagSmoothing(0);

// ── HERO ANIMATION ────────────────────────────────────
gsap.from('.hero-tag',{opacity:0,y:30,duration:1,delay:.2});
gsap.from('.hero-title',{opacity:0,y:50,scale:.95,duration:1.2,delay:.4,ease:'power3.out'});
gsap.from('.hero-sub',{opacity:0,y:30,duration:1,delay:.8});

// ── FLOOR DROP — Info cards ───────────────────────────
gsap.from('.info-card',{
  y:-220,rotateX:-75,opacity:0,
  duration:1.3,ease:'elastic.out(1,.55)',
  stagger:.18,transformOrigin:'50% 0%',
  scrollTrigger:{trigger:'#info-grid',start:'top 80%'}
});

// ── FLOOR DROP — Form + steps panel ──────────────────
gsap.from('#form-panel',{
  y:-300,rotateX:-65,opacity:0,scale:.88,
  duration:1.4,ease:'back.out(1.3)',
  transformOrigin:'50% 0%',
  scrollTrigger:{trigger:'#contact-section',start:'top 70%'}
});
gsap.from('#steps-panel',{
  y:-200,rotateX:-50,opacity:0,
  duration:1.2,ease:'back.out(1.2)',
  delay:.3,transformOrigin:'50% 0%',
  scrollTrigger:{trigger:'#contact-section',start:'top 70%'}
});

// Form fields unfold
gsap.from('#form-panel .fg, #form-panel button',{
  opacity:0,y:20,
  stagger:.07,duration:.5,delay:.6,
  scrollTrigger:{trigger:'#contact-section',start:'top 70%'}
});

// ── FAQ ───────────────────────────────────────────────
function toggleFaq(btn){
  const item=btn.parentElement;
  const isOpen=item.classList.contains('open');
  document.querySelectorAll('.faq-item.open').forEach(i=>i.classList.remove('open'));
  const a=item.querySelector('.faq-a');
  a.style.maxHeight='0';
  if(!isOpen){item.classList.add('open');item.querySelector('.faq-a').style.maxHeight=item.querySelector('.faq-a').scrollHeight+'px';}
}
window.toggleFaq=toggleFaq;

// ── CONTACT FORM ──────────────────────────────────────
function handleContact(e){
  e.preventDefault();
  const name=document.getElementById('cf-name').value.trim();
  const email=document.getElementById('cf-email').value.trim();
  const service=document.getElementById('cf-service').value;
  const msg=document.getElementById('cf-message').value.trim();
  const err=document.getElementById('cf-error');
  err.style.display='none';
  if(!name||name.length<2){err.textContent='Please enter your full name.';err.style.display='block';return false;}
  if(!email||!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)){err.textContent='Please enter a valid email.';err.style.display='block';return false;}
  if(!service){err.textContent='Please select what you need built.';err.style.display='block';return false;}
  if(!msg||msg.length<20){err.textContent='Please describe your project (at least 20 characters).';err.style.display='block';return false;}
  const btn=document.getElementById('cf-submit');
  btn.disabled=true;btn.textContent='Sending…';
  setTimeout(()=>{
    document.getElementById('contactForm').style.display='none';
    document.getElementById('cf-success').style.display='block';
  },1200);
  return false;
}
window.handleContact=handleContact;
</script>
</body>
</html>
