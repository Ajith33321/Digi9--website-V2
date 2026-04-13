<?php $year = date('Y'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Selected Work — Portfolio | Digi9</title>
<meta name="description" content="Explore Digi9's portfolio of custom AI software, enterprise web platforms, and mobile apps built for real business impact across multiple industries.">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;600;700;800&family=DM+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
<style>
*,*::before,*::after{box-sizing:border-box;margin:0;padding:0}
:root{--bg:#030307;--bg2:#07070f;--surf:#0d0d1a;--surf2:#12122a;--p:#7c3aed;--b:#3b82f6;--c:#00d4ff;--g:#f5c842;--t:#f0eeff;--t2:#9b97c4;--t3:#5a5780;--br:rgba(124,58,237,.15);--br2:rgba(124,58,237,.3);--fh:'Syne',sans-serif;--fb:'DM Sans',sans-serif;--nav:68px}
html{scroll-behavior:smooth}
body{font-family:var(--fb);background:var(--bg);color:var(--t);overflow-x:hidden;cursor:none}
a{color:inherit;text-decoration:none}
::-webkit-scrollbar{width:3px}::-webkit-scrollbar-track{background:var(--bg)}::-webkit-scrollbar-thumb{background:var(--p);border-radius:2px}
#cur,#cur2{position:fixed;border-radius:50%;pointer-events:none;z-index:9999}
#cur{width:10px;height:10px;background:var(--c);top:0;left:0;mix-blend-mode:screen;transition:transform .1s}
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
.nav-cta::after{display:none!important}.nav-cta:hover{background:#fff!important;color:var(--p)!important}
section{position:relative;z-index:2}
.inner{max-width:1160px;margin:0 auto;padding:0 4vw}
.eyebrow{font-size:.68rem;font-weight:700;letter-spacing:.2em;text-transform:uppercase;color:var(--p);margin-bottom:.875rem;display:block}
.stitle{font-family:var(--fh);font-size:clamp(2rem,5vw,3.2rem);font-weight:800;letter-spacing:-.03em;line-height:1.08;margin-bottom:1.25rem}
.ssub{font-size:1rem;color:var(--t2);line-height:1.75;max-width:520px}
.btn-p{background:linear-gradient(135deg,var(--p),#a855f7);color:#fff;padding:15px 34px;border-radius:100px;font-weight:600;font-size:.95rem;border:none;cursor:pointer;box-shadow:0 0 28px rgba(124,58,237,.4);transition:all .3s;text-decoration:none;display:inline-flex;align-items:center;gap:8px}
.btn-p:hover{transform:translateY(-2px);box-shadow:0 0 54px rgba(124,58,237,.65)}
.btn-g{color:var(--t);padding:15px 34px;border-radius:100px;font-weight:500;font-size:.95rem;border:1px solid var(--br2);backdrop-filter:blur(10px);background:rgba(255,255,255,.03);transition:all .3s;text-decoration:none;display:inline-flex;align-items:center;gap:8px}
.btn-g:hover{border-color:var(--p);background:rgba(124,58,237,.1)}
.rv{opacity:0;transform:translateY(40px);transition:opacity .8s ease,transform .8s ease}
.rv.in{opacity:1;transform:translateY(0)}
footer{background:var(--bg2);border-top:1px solid var(--br);padding:70px 0 36px;position:relative;z-index:2}
.ft-inner{max-width:1160px;margin:0 auto;padding:0 4vw}
.ft-top{display:grid;grid-template-columns:2fr 1fr 1fr 1fr;gap:50px;margin-bottom:50px}
.ft-brand .bn{font-family:var(--fh);font-size:1.45rem;font-weight:800;margin-bottom:14px;display:flex;align-items:center;gap:8px}
.ft-brand .bn span{background:linear-gradient(135deg,var(--p),var(--c));-webkit-background-clip:text;-webkit-text-fill-color:transparent}
.ft-brand p{font-size:.845rem;color:var(--t2);line-height:1.7;margin-bottom:20px;max-width:260px}
.ft-email{color:var(--c);font-size:.845rem}.ft-col h4{font-family:var(--fh);font-size:.68rem;font-weight:700;letter-spacing:.15em;text-transform:uppercase;color:var(--t3);margin-bottom:18px}
.ft-col ul{list-style:none}.ft-col li{margin-bottom:9px}.ft-col a{font-size:.845rem;color:var(--t2);transition:color .2s}.ft-col a:hover{color:var(--p)}
.ft-bot{border-top:1px solid var(--br);padding-top:28px;display:flex;align-items:center;justify-content:space-between;gap:16px;flex-wrap:wrap}
.ft-copy{font-size:.76rem;color:var(--t3)}.ft-links{display:flex;gap:20px}.ft-links a{font-size:.76rem;color:var(--t3);transition:color .2s}.ft-links a:hover{color:var(--t2)}
.modal-bg{position:fixed;inset:0;z-index:500;background:rgba(3,3,7,.88);backdrop-filter:blur(22px);display:none;align-items:center;justify-content:center;padding:1rem}
.modal-bg.open{display:flex}
.modal-box{background:var(--surf);border:1px solid var(--br2);border-radius:22px;width:100%;max-width:500px;padding:44px;position:relative;max-height:90vh;overflow-y:auto;animation:mop .35s cubic-bezier(.34,1.56,.64,1)}
@keyframes mop{from{opacity:0;transform:scale(.9) translateY(18px)}to{opacity:1;transform:none}}
.modal-x{position:absolute;top:18px;right:18px;width:30px;height:30px;background:var(--surf2);border:1px solid var(--br);color:var(--t2);border-radius:50%;display:flex;align-items:center;justify-content:center;cursor:pointer;font-size:14px;transition:all .2s}
.modal-x:hover{border-color:var(--p);color:var(--t)}
.mst{display:none}.mst.act{display:block}
.mt{font-family:var(--fh);font-size:1.5rem;font-weight:800;letter-spacing:-.03em;margin-bottom:8px}
.ms{color:var(--t2);font-size:.88rem;margin-bottom:28px;line-height:1.55}
.mpg{display:flex;gap:7px;margin-bottom:28px}.mpg span{height:3px;border-radius:2px;flex:1;background:var(--br2);transition:background .3s}.mpg span.on{background:var(--p)}
.fg{margin-bottom:18px}.fg label{display:block;font-size:.76rem;font-weight:600;color:var(--t2);margin-bottom:7px;letter-spacing:.05em;text-transform:uppercase}
.fg input,.fg textarea,.fg select{width:100%;background:var(--surf2);border:1px solid var(--br);border-radius:10px;padding:12px 16px;color:var(--t);font-family:var(--fb);font-size:.92rem;outline:none;transition:border-color .2s}
.fg input:focus,.fg textarea:focus,.fg select:focus{border-color:var(--p);box-shadow:0 0 0 3px rgba(124,58,237,.12)}
.fg textarea{resize:vertical;min-height:90px}
.fg select option{background:var(--surf2)}
.mbtns{display:flex;gap:.7rem}.mbk{padding:.7rem 1.4rem;border-radius:8px;border:1px solid var(--br2);background:none;color:var(--t2);font-family:var(--fb);font-weight:600;font-size:.875rem;transition:all .2s;cursor:pointer}.mbk:hover{border-color:var(--p);color:var(--p)}
.card-surf{background:var(--surf);border:1px solid var(--br)}
@media(max-width:580px){.nav-ul{display:none}.ft-top{grid-template-columns:1fr}}
@media(max-width:900px){.ft-top{grid-template-columns:1fr 1fr}}

/* Page Specific */
.hero{min-height:80vh;display:flex;align-items:center;padding-top:var(--nav);text-align:center}
.hero-tag{display:inline-flex;align-items:center;gap:8px;background:rgba(124,58,237,.08);border:1px solid var(--br);border-radius:100px;padding:7px 18px;font-size:.75rem;font-weight:600;letter-spacing:.1em;text-transform:uppercase;color:var(--p);margin-bottom:2rem}
.hero-title{font-family:var(--fh);font-size:clamp(2.8rem,7vw,5rem);font-weight:800;letter-spacing:-.04em;line-height:1.04;margin-bottom:1.5rem}
.hero-title .grad{background:linear-gradient(135deg,var(--p),var(--c));-webkit-background-clip:text;-webkit-text-fill-color:transparent}
.hero-sub{font-size:1.1rem;color:var(--t2);line-height:1.8;max-width:560px;margin:0 auto 2.5rem}

.filter-bar{padding:30px 0 0;position:sticky;top:var(--nav);z-index:10}
.filter-inner{display:flex;gap:10px;flex-wrap:wrap;padding:16px;background:rgba(3,3,7,.8);backdrop-filter:blur(20px);border-radius:16px;border:1px solid var(--br)}
.filter-btn{padding:8px 20px;border-radius:100px;font-size:.78rem;font-weight:600;letter-spacing:.04em;border:1px solid var(--br);background:none;color:var(--t2);cursor:pointer;transition:all .2s;font-family:var(--fb)}
.filter-btn:hover,.filter-btn.active{background:var(--p);border-color:var(--p);color:#fff}

.portfolio{padding:80px 0}
.port-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:26px;margin-top:0}
.port-card{background:var(--surf);border:1px solid var(--br);border-radius:20px;overflow:hidden;transition:all .35s;position:relative}
.port-card:hover{border-color:var(--p);transform:translateY(-6px);box-shadow:0 24px 60px rgba(124,58,237,.22)}
.port-img{height:200px;display:flex;align-items:center;justify-content:center;font-size:3rem;position:relative;overflow:hidden}
.port-img::after{content:'';position:absolute;inset:0;background:linear-gradient(180deg,transparent 50%,var(--surf))}
.port-body{padding:24px}
.port-tags{display:flex;gap:6px;flex-wrap:wrap;margin-bottom:12px}
.port-tag{background:rgba(124,58,237,.08);border:1px solid var(--br);border-radius:100px;padding:3px 10px;font-size:.7rem;color:var(--t2)}
.port-title{font-family:var(--fh);font-size:1.1rem;font-weight:700;letter-spacing:-.02em;margin-bottom:8px}
.port-desc{font-size:.845rem;color:var(--t2);line-height:1.6;margin-bottom:16px}
.port-metrics{display:flex;gap:20px}
.port-metric{font-size:.78rem}
.port-metric strong{display:block;color:var(--c);font-family:var(--fh);font-size:1.1rem;font-weight:700}
.port-metric span{color:var(--t3)}

.metrics-band{padding:80px 0;background:linear-gradient(180deg,transparent,rgba(124,58,237,.03),transparent)}
.metrics-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:2px;margin-top:50px;background:var(--br);border-radius:20px;overflow:hidden}
.metric-item{background:var(--surf);padding:40px 30px;text-align:center}
.metric-num{font-family:var(--fh);font-size:2.8rem;font-weight:800;background:linear-gradient(135deg,var(--p),var(--c));-webkit-background-clip:text;-webkit-text-fill-color:transparent;line-height:1;margin-bottom:8px}
.metric-label{font-size:.845rem;color:var(--t2);line-height:1.5}

.work-cta{padding:130px 0;text-align:center}
.work-cta .stitle{max-width:600px;margin:0 auto 1.25rem}
.work-cta .ssub{margin:0 auto 2.5rem}

@media(max-width:900px){.port-grid{grid-template-columns:repeat(2,1fr)}.metrics-grid{grid-template-columns:repeat(2,1fr)}}
@media(max-width:580px){.port-grid{grid-template-columns:1fr}.metrics-grid{grid-template-columns:1fr 1fr}}
</style>
</head>
<body>
<div id="cur"></div>
<div id="cur2"></div>
<canvas id="bg-canvas"></canvas>
<div id="prog"></div>

<nav id="nav">
  <a href="index.php" class="logo">Digi<span>9</span></a>
  <ul class="nav-ul">
    <li><a href="services.php">Services</a></li>
    <li><a href="work.php">Work</a></li>
    <li><a href="about.php">About</a></li>
    <li><a href="process.php">Process</a></li>
    <li><a href="insights.php">Insights</a></li>
    <li><a href="contact.php" class="nav-cta">Contact</a></li>
  </ul>
</nav>

<section class="hero">
  <div class="inner">
    <div class="hero-tag">Portfolio</div>
    <h1 class="hero-title">Selected <span class="grad">Work</span></h1>
    <p class="hero-sub">Real projects. Real results. Here's a look at what we've built for businesses across industries.</p>
  </div>
</section>

<div class="filter-bar">
  <div class="inner">
    <div class="filter-inner">
      <button class="filter-btn active" onclick="filterWork(this,'all')">All Projects</button>
      <button class="filter-btn" onclick="filterWork(this,'ai')">AI Software</button>
      <button class="filter-btn" onclick="filterWork(this,'web')">Web Apps</button>
      <button class="filter-btn" onclick="filterWork(this,'mobile')">Mobile Apps</button>
      <button class="filter-btn" onclick="filterWork(this,'custom')">Custom Software</button>
    </div>
  </div>
</div>

<section class="portfolio">
  <div class="inner">
    <div class="port-grid">
      <div class="port-card rv" data-cat="ai" style="transition-delay:.05s">
        <div class="port-img" style="background:linear-gradient(135deg,rgba(124,58,237,.15),rgba(0,212,255,.1))">🧠</div>
        <div class="port-body">
          <div class="port-tags"><span class="port-tag">AI Software</span><span class="port-tag">LLM</span><span class="port-tag">Fintech</span></div>
          <div class="port-title">AI-Powered Loan Underwriting Engine</div>
          <div class="port-desc">Built a custom LLM-based document analysis system for a Bangalore NBFC. Automates credit evaluation from 30 minutes to under 90 seconds.</div>
          <div class="port-metrics">
            <div class="port-metric"><strong>95%</strong><span>Accuracy rate</span></div>
            <div class="port-metric"><strong>12x</strong><span>Faster processing</span></div>
            <div class="port-metric"><strong>₹4Cr</strong><span>Ops savings/yr</span></div>
          </div>
        </div>
      </div>
      <div class="port-card rv" data-cat="web" style="transition-delay:.1s">
        <div class="port-img" style="background:linear-gradient(135deg,rgba(59,130,246,.15),rgba(124,58,237,.1))">🛒</div>
        <div class="port-body">
          <div class="port-tags"><span class="port-tag">Web App</span><span class="port-tag">E-Commerce</span><span class="port-tag">Multi-tenant</span></div>
          <div class="port-title">D2C Marketplace Platform</div>
          <div class="port-desc">Multi-tenant e-commerce platform serving 200+ brands. Custom storefront builder, inventory management, and integrated analytics dashboard.</div>
          <div class="port-metrics">
            <div class="port-metric"><strong>200+</strong><span>Brands onboarded</span></div>
            <div class="port-metric"><strong>2.1M</strong><span>Monthly orders</span></div>
            <div class="port-metric"><strong>99.9%</strong><span>Uptime SLA</span></div>
          </div>
        </div>
      </div>
      <div class="port-card rv" data-cat="mobile" style="transition-delay:.15s">
        <div class="port-img" style="background:linear-gradient(135deg,rgba(0,212,255,.15),rgba(59,130,246,.1))">🚚</div>
        <div class="port-body">
          <div class="port-tags"><span class="port-tag">Mobile App</span><span class="port-tag">Logistics</span><span class="port-tag">Flutter</span></div>
          <div class="port-title">Last-Mile Delivery Driver App</div>
          <div class="port-desc">Flutter app for 5,000+ delivery agents with real-time route optimization, offline mode, proof-of-delivery capture, and earnings tracking.</div>
          <div class="port-metrics">
            <div class="port-metric"><strong>5K+</strong><span>Active drivers</span></div>
            <div class="port-metric"><strong>4.7★</strong><span>App store rating</span></div>
            <div class="port-metric"><strong>40%</strong><span>Fuel savings</span></div>
          </div>
        </div>
      </div>
      <div class="port-card rv" data-cat="custom" style="transition-delay:.2s">
        <div class="port-img" style="background:linear-gradient(135deg,rgba(245,200,66,.1),rgba(124,58,237,.1))">🏭</div>
        <div class="port-body">
          <div class="port-tags"><span class="port-tag">Custom ERP</span><span class="port-tag">Manufacturing</span><span class="port-tag">IoT</span></div>
          <div class="port-title">Factory Floor Management ERP</div>
          <div class="port-desc">Custom ERP system integrating IoT sensors, production scheduling, quality control, and vendor management for a mid-size auto components manufacturer.</div>
          <div class="port-metrics">
            <div class="port-metric"><strong>28%</strong><span>OEE improvement</span></div>
            <div class="port-metric"><strong>60%</strong><span>Less downtime</span></div>
            <div class="port-metric"><strong>₹8Cr</strong><span>Savings year 1</span></div>
          </div>
        </div>
      </div>
      <div class="port-card rv" data-cat="ai" style="transition-delay:.25s">
        <div class="port-img" style="background:linear-gradient(135deg,rgba(167,139,250,.15),rgba(0,212,255,.1))">🏥</div>
        <div class="port-body">
          <div class="port-tags"><span class="port-tag">AI Software</span><span class="port-tag">Healthcare</span><span class="port-tag">NLP</span></div>
          <div class="port-title">Clinical Notes Summarization AI</div>
          <div class="port-desc">AI system that reads unstructured doctor notes and generates structured SOAP summaries, diagnosis codes, and prescription recommendations for a hospital chain.</div>
          <div class="port-metrics">
            <div class="port-metric"><strong>85%</strong><span>Time saved per note</span></div>
            <div class="port-metric"><strong>98%</strong><span>Code accuracy</span></div>
            <div class="port-metric"><strong>50+</strong><span>Doctors using daily</span></div>
          </div>
        </div>
      </div>
      <div class="port-card rv" data-cat="web" style="transition-delay:.3s">
        <div class="port-img" style="background:linear-gradient(135deg,rgba(59,130,246,.15),rgba(0,212,255,.1))">🎓</div>
        <div class="port-body">
          <div class="port-tags"><span class="port-tag">Web App</span><span class="port-tag">EdTech</span><span class="port-tag">SaaS</span></div>
          <div class="port-title">Corporate Learning Management System</div>
          <div class="port-desc">Full-featured LMS for enterprise training. AI-powered adaptive learning paths, skills gap analysis, live cohort sessions, and completion certification engine.</div>
          <div class="port-metrics">
            <div class="port-metric"><strong>80K+</strong><span>Learners</span></div>
            <div class="port-metric"><strong>3x</strong><span>Completion rates</span></div>
            <div class="port-metric"><strong>14</strong><span>Enterprise clients</span></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="metrics-band">
  <div class="inner">
    <div class="section-head" style="text-align:center;margin-bottom:0">
      <span class="eyebrow rv">By the Numbers</span>
      <h2 class="stitle rv">Results We've Delivered</h2>
    </div>
    <div class="metrics-grid rv" style="transition-delay:.1s">
      <div class="metric-item"><div class="metric-num">50+</div><div class="metric-label">Projects shipped to production</div></div>
      <div class="metric-item"><div class="metric-num">₹80Cr+</div><div class="metric-label">Client revenue enabled annually</div></div>
      <div class="metric-item"><div class="metric-num">98%</div><div class="metric-label">On-time delivery rate</div></div>
      <div class="metric-item"><div class="metric-num">4.9/5</div><div class="metric-label">Average client satisfaction score</div></div>
    </div>
  </div>
</section>

<section class="work-cta">
  <div class="inner rv">
    <span class="eyebrow">Your Project</span>
    <h2 class="stitle">Ready to Add Yours<br>to This List?</h2>
    <p class="ssub" style="margin:0 auto 2.5rem">Every project in our portfolio started with a conversation. Let's have one.</p>
    <div style="display:flex;gap:1rem;justify-content:center;flex-wrap:wrap">
      <button class="btn-p" onclick="openM(event)">Start Your Project →</button>
      <a href="services.php" class="btn-g">Explore Services</a>
    </div>
  </div>
</section>

<footer>
  <div class="ft-inner">
    <div class="ft-top">
      <div class="ft-brand">
        <div class="bn">Digi<span>9</span></div>
        <p>Building real systems for real businesses. AI and custom software development company based in Bangalore, India.</p>
        <a href="mailto:hello@digi9.in" class="ft-email">hello@digi9.in</a>
      </div>
      <div class="ft-col"><h4>Services</h4><ul>
        <li><a href="ai-software-development.php">AI Software</a></li>
        <li><a href="web-application-development.php">Web Applications</a></li>
        <li><a href="mobile-application-development.php">Mobile Apps</a></li>
        <li><a href="custom-software.php">Custom Software</a></li>
        <li><a href="solutions.php">Automation</a></li>
      </ul></div>
      <div class="ft-col"><h4>Company</h4><ul>
        <li><a href="about.php">About Us</a></li>
        <li><a href="work.php">Our Work</a></li>
        <li><a href="process.php">Process</a></li>
        <li><a href="insights.php">Insights</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul></div>
      <div class="ft-col"><h4>Contact</h4><ul>
        <li><a href="#">Bangalore, India</a></li>
        <li><a href="mailto:hello@digi9.in">hello@digi9.in</a></li>
      </ul></div>
    </div>
    <div class="ft-bot">
      <div class="ft-copy">&copy; <?= $year ?> Digi9. All rights reserved &middot; Made with &hearts; in Bangalore</div>
      <div class="ft-links"><a href="#">Privacy</a><a href="#">Terms</a></div>
    </div>
  </div>
</footer>

<div class="modal-bg" id="mbg" onclick="closeBg(event)">
  <div class="modal-box">
    <div class="modal-x" onclick="closeM()">✕</div>
    <div class="mst act" id="ms1">
      <div class="mpg"><span class="on"></span><span></span><span></span><span></span><span></span></div>
      <div class="mt">Let's Build Together</div>
      <div class="ms">Tell us about your project and we'll respond within 24 hours.</div>
      <div class="fg"><label>Your Name</label><input type="text" placeholder="Rajesh Kumar"></div>
      <div class="fg"><label>Company</label><input type="text" placeholder="Your company name"></div>
      <div class="mbtns"><button class="btn-p" onclick="goStep(2)" style="flex:1">Next →</button></div>
    </div>
    <div class="mst" id="ms2">
      <div class="mpg"><span class="on"></span><span class="on"></span><span></span><span></span><span></span></div>
      <div class="mt">What Are You Building?</div>
      <div class="ms">Select the type of project you have in mind.</div>
      <div class="fg"><label>Service Needed</label><select>
        <option>AI Software Development</option><option>Web Application</option><option>Mobile Application</option><option>Custom Software</option><option>Automation & Integration</option>
      </select></div>
      <div class="fg"><label>Budget Range</label><select>
        <option>Under ₹5 Lakhs</option><option>₹5–15 Lakhs</option><option>₹15–50 Lakhs</option><option>₹50 Lakhs+</option>
      </select></div>
      <div class="mbtns"><button class="mbk" onclick="goStep(1)">← Back</button><button class="btn-p" onclick="goStep(3)" style="flex:1">Next →</button></div>
    </div>
    <div class="mst" id="ms3">
      <div class="mpg"><span class="on"></span><span class="on"></span><span class="on"></span><span></span><span></span></div>
      <div class="mt">Describe Your Project</div>
      <div class="ms">The more detail, the better we can help.</div>
      <div class="fg"><label>Project Description</label><textarea placeholder="What problem are you solving? What does success look like?"></textarea></div>
      <div class="mbtns"><button class="mbk" onclick="goStep(2)">← Back</button><button class="btn-p" onclick="goStep(4)" style="flex:1">Next →</button></div>
    </div>
    <div class="mst" id="ms4">
      <div class="mpg"><span class="on"></span><span class="on"></span><span class="on"></span><span class="on"></span><span></span></div>
      <div class="mt">How to Reach You?</div>
      <div class="ms">We'll schedule a call at your convenience.</div>
      <div class="fg"><label>Email</label><input type="email" placeholder="you@company.com"></div>
      <div class="fg"><label>Phone (optional)</label><input type="tel" placeholder="+91 98765 43210"></div>
      <div class="mbtns"><button class="mbk" onclick="goStep(3)">← Back</button><button class="btn-p" onclick="goStep(5)" style="flex:1">Submit →</button></div>
    </div>
    <div class="mst" id="ms5">
      <div class="mpg"><span class="on"></span><span class="on"></span><span class="on"></span><span class="on"></span><span class="on"></span></div>
      <div style="text-align:center;padding:20px 0">
        <div style="font-size:3rem;margin-bottom:1rem">🚀</div>
        <div class="mt">You're All Set!</div>
        <div class="ms" style="margin-bottom:1.5rem">Thanks for reaching out. We'll review your project and get back within 24 hours.</div>
        <button class="btn-p" onclick="closeM()" style="width:100%">Close</button>
      </div>
    </div>
  </div>
</div>

<script>
const cur=document.getElementById('cur'),cur2=document.getElementById('cur2');
let cx=0,cy=0,tx=0,ty=0;
document.addEventListener('mousemove',e=>{cx=e.clientX;cy=e.clientY;cur.style.left=cx-5+'px';cur.style.top=cy-5+'px'});
(function loop(){tx+=(cx-tx)*.13;ty+=(cy-ty)*.13;cur2.style.left=tx-18+'px';cur2.style.top=ty-18+'px';requestAnimationFrame(loop)})();
document.querySelectorAll('a,button').forEach(el=>{
  el.addEventListener('mouseenter',()=>{cur.style.transform='scale(2.5)';cur2.style.transform='scale(1.4)'});
  el.addEventListener('mouseleave',()=>{cur.style.transform='';cur2.style.transform=''});
});
window.addEventListener('scroll',()=>{
  document.getElementById('prog').style.width=(window.scrollY/(document.body.scrollHeight-window.innerHeight)*100)+'%';
  document.getElementById('nav').classList.toggle('on',window.scrollY>30);
});
const ro=new IntersectionObserver(es=>{es.forEach(e=>{if(e.isIntersecting)e.target.classList.add('in')})},{threshold:.12});
document.querySelectorAll('.rv').forEach(el=>ro.observe(el));
let curStep=1;
function goStep(n){document.getElementById('ms'+curStep).classList.remove('act');curStep=n;document.getElementById('ms'+curStep).classList.add('act')}
function openM(e){if(e)e.preventDefault();document.getElementById('mbg').classList.add('open');document.body.style.overflow='hidden'}
function closeM(){document.getElementById('mbg').classList.remove('open');document.body.style.overflow=''}
function closeBg(e){if(e.target===document.getElementById('mbg'))closeM()}
document.addEventListener('keydown',e=>{if(e.key==='Escape')closeM()});
function filterWork(btn,cat){
  document.querySelectorAll('.filter-btn').forEach(b=>b.classList.remove('active'));
  btn.classList.add('active');
  document.querySelectorAll('.port-card').forEach(c=>{
    c.style.display=(cat==='all'||c.dataset.cat===cat)?'block':'none';
  });
}

(function(){
  const canvas=document.getElementById('bg-canvas');
  const ctx=canvas.getContext('2d');
  let W,H;
  function resize(){W=canvas.width=window.innerWidth;H=canvas.height=window.innerHeight}
  resize();window.addEventListener('resize',resize);
  const stars=Array.from({length:350},()=>({x:Math.random()*W,y:Math.random()*H,r:Math.random()*.9+.2,a:Math.random()*.6+.1}));
  function mkMeteor(){return{x:Math.random()*W*1.5,y:-20,vx:-(2+Math.random()*4),vy:1.5+Math.random()*3,len:60+Math.random()*120,life:1,hue:200+Math.random()*80,width:1+Math.random()*1.5}}
  const meteors=Array.from({length:6},mkMeteor);
  let t=0;
  function draw(){
    requestAnimationFrame(draw);
    ctx.fillStyle='rgba(3,3,7,.16)';ctx.fillRect(0,0,W,H);
    t+=.003;
    stars.forEach(s=>{
      ctx.beginPath();ctx.arc(s.x,s.y,s.r,0,Math.PI*2);
      ctx.fillStyle=`rgba(240,238,255,${s.a*(.5+.5*Math.sin(t*2+s.x*.01))})`;ctx.fill();
    });
    [[.3,.3,'rgba(124,58,237,'],[.7,.7,'rgba(59,130,246,'],[.15,.8,'rgba(0,212,255,']].forEach(([bx,by,bc])=>{
      const gr=ctx.createRadialGradient(bx*W,by*H,0,bx*W,by*H,300);
      gr.addColorStop(0,bc+'0.04)');gr.addColorStop(1,bc+'0)');
      ctx.fillStyle=gr;ctx.fillRect(0,0,W,H);
    });
    meteors.forEach((m,i)=>{
      m.x+=m.vx;m.y+=m.vy;m.life-=.004;
      if(m.life<=0||m.x<-200||m.y>H+50){Object.assign(meteors[i],mkMeteor());return}
      const angle=Math.atan2(m.vy,m.vx);
      const tx2=m.x-Math.cos(angle)*m.len,ty2=m.y-Math.sin(angle)*m.len;
      const gr=ctx.createLinearGradient(m.x,m.y,tx2,ty2);
      gr.addColorStop(0,`hsla(${m.hue},85%,70%,${m.life*.9})`);
      gr.addColorStop(.4,`hsla(${m.hue},80%,60%,${m.life*.4})`);
      gr.addColorStop(1,'transparent');
      ctx.beginPath();ctx.moveTo(m.x,m.y);ctx.lineTo(tx2,ty2);
      ctx.strokeStyle=gr;ctx.lineWidth=m.width;ctx.stroke();
      ctx.beginPath();ctx.arc(m.x,m.y,m.width*1.5,0,Math.PI*2);
      ctx.fillStyle=`hsla(${m.hue},90%,80%,${m.life*.6})`;ctx.fill();
    });
    if(Math.random()<.008)meteors.push(mkMeteor());
    if(meteors.length>12)meteors.splice(0,meteors.length-12);
  }
  ctx.fillStyle='#030307';ctx.fillRect(0,0,W,H);draw();
})();

gsap.registerPlugin(ScrollTrigger);
gsap.from('.hero-tag',{opacity:0,y:30,duration:1,delay:.2});
gsap.from('.hero-title',{opacity:0,y:50,duration:1.2,delay:.4});
gsap.from('.hero-sub',{opacity:0,y:30,duration:1,delay:.7});
gsap.utils.toArray('.port-card').forEach((el,i)=>{
  gsap.from(el,{scrollTrigger:{trigger:el,start:'top 85%'},opacity:0,y:50,scale:.95,duration:.8,delay:i*.07});
});
gsap.from('.metric-item',{scrollTrigger:{trigger:'.metrics-grid',start:'top 80%'},opacity:0,y:30,stagger:.1,duration:.7});
</script>
</body>
</html>
