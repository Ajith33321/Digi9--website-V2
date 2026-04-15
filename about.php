<?php $year = date('Y'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>About Us — Digi9 | Software Engineering Company Bangalore</title>
<meta name="description" content="Digi9 is a software engineering company focused on execution. We build AI-powered software, web apps, and mobile applications for businesses across India.">
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
.stitle em{font-style:normal;color:var(--t2)}
.ssub{font-size:1rem;color:var(--t2);line-height:1.75;max-width:520px}
.btn-p{background:linear-gradient(135deg,var(--p),#a855f7);color:#fff;padding:15px 34px;border-radius:100px;font-weight:600;font-size:.95rem;border:none;cursor:pointer;box-shadow:0 0 28px rgba(124,58,237,.4);transition:all .3s;text-decoration:none;display:inline-flex;align-items:center;gap:8px}
.btn-p:hover{transform:translateY(-2px);box-shadow:0 0 54px rgba(124,58,237,.65)}
.btn-g{color:var(--t);padding:15px 34px;border-radius:100px;font-weight:500;font-size:.95rem;border:1px solid var(--br2);backdrop-filter:blur(10px);background:rgba(255,255,255,.03);transition:all .3s;text-decoration:none;display:inline-flex;align-items:center;gap:8px}
.btn-g:hover{border-color:var(--p);background:rgba(124,58,237,.1)}
.rv{opacity:0;transform:translateY(40px);transition:opacity .8s ease,transform .8s ease}
.rv.in{opacity:1;transform:translateY(0)}
.card{background:var(--surf);border:1px solid var(--br);border-radius:18px;padding:32px 28px;transition:all .35s;position:relative;overflow:hidden}
.card:hover{border-color:var(--p);background:var(--surf2);transform:translateY(-5px);box-shadow:0 20px 50px rgba(124,58,237,.2)}
.card-ico{width:48px;height:48px;background:rgba(124,58,237,.1);border:1px solid rgba(124,58,237,.2);border-radius:12px;display:flex;align-items:center;justify-content:center;font-size:20px;margin-bottom:20px;transition:all .3s}
.card:hover .card-ico{background:rgba(124,58,237,.2);border-color:var(--p);box-shadow:0 0 18px rgba(124,58,237,.3)}
.card-title{font-family:var(--fh);font-size:1.1rem;font-weight:700;margin-bottom:10px;letter-spacing:-.02em}
.card-text{font-size:.875rem;color:var(--t2);line-height:1.65}
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
@media(max-width:580px){.nav-ul{display:none}.ft-top{grid-template-columns:1fr}}
@media(max-width:900px){.ft-top{grid-template-columns:1fr 1fr}}

/* Page Specific */
.hero{min-height:100vh;display:flex;align-items:center;padding-top:var(--nav)}
.hero-tag{display:inline-flex;align-items:center;gap:8px;background:rgba(124,58,237,.08);border:1px solid var(--br);border-radius:100px;padding:7px 18px;font-size:.75rem;font-weight:600;letter-spacing:.1em;text-transform:uppercase;color:var(--p);margin-bottom:2rem}
.hero-title{font-family:var(--fh);font-size:clamp(2.8rem,7vw,5.2rem);font-weight:800;letter-spacing:-.04em;line-height:1.04;margin-bottom:1.5rem}
.hero-title .grad{background:linear-gradient(135deg,var(--p),var(--c));-webkit-background-clip:text;-webkit-text-fill-color:transparent}
.hero-sub{font-size:1.1rem;color:var(--t2);line-height:1.8;max-width:600px;margin-bottom:2.5rem}
.hero-btns{display:flex;gap:1rem;flex-wrap:wrap}
.section-head{margin-bottom:60px}
.section-head.center{text-align:center}.section-head.center .ssub{margin:0 auto}

.mission{padding:120px 0}
.mission-grid{display:grid;grid-template-columns:1fr 1fr;gap:80px;align-items:center}
.mission-text h2{font-family:var(--fh);font-size:clamp(1.8rem,3.5vw,2.6rem);font-weight:800;letter-spacing:-.03em;line-height:1.15;margin-bottom:1.25rem}
.mission-text p{color:var(--t2);line-height:1.8;margin-bottom:1rem;font-size:.975rem}
.stat-cards{display:flex;flex-direction:column;gap:16px}
.stat-card{background:var(--surf);border:1px solid var(--br);border-radius:16px;padding:24px 28px;display:flex;align-items:center;gap:20px;transition:all .3s}
.stat-card:hover{border-color:var(--p);background:var(--surf2)}
.stat-num{font-family:var(--fh);font-size:2.2rem;font-weight:800;background:linear-gradient(135deg,var(--p),var(--c));-webkit-background-clip:text;-webkit-text-fill-color:transparent;line-height:1;flex-shrink:0;min-width:80px}
.stat-label{font-size:.875rem;color:var(--t2);line-height:1.5}
.stat-label strong{display:block;color:var(--t);font-weight:600;margin-bottom:2px}

.values{padding:100px 0;background:linear-gradient(180deg,transparent,rgba(124,58,237,.03),transparent)}
.values-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:24px;margin-top:60px}

.culture{padding:100px 0}
.culture-grid{display:grid;grid-template-columns:1fr 1fr;gap:80px;align-items:center}
.culture-visual{background:var(--surf);border:1px solid var(--br);border-radius:24px;padding:36px;display:flex;flex-direction:column;gap:14px}
.culture-row{display:flex;align-items:center;gap:16px;padding:16px;background:var(--surf2);border-radius:12px;border:1px solid var(--br);transition:all .3s}
.culture-row:hover{border-color:var(--p)}
.culture-icon{width:42px;height:42px;border-radius:10px;display:flex;align-items:center;justify-content:center;font-size:18px;flex-shrink:0}
.culture-label{font-size:.875rem;font-weight:600;margin-bottom:3px}
.culture-sub{font-size:.76rem;color:var(--t2)}

.industries{padding:100px 0}
.ind-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:16px;margin-top:56px}
.ind-card{background:var(--surf);border:1px solid var(--br);border-radius:14px;padding:22px 18px;display:flex;align-items:center;gap:14px;transition:all .3s}
.ind-card:hover{border-color:var(--p);background:var(--surf2);transform:translateY(-3px)}
.ind-icon{font-size:22px;flex-shrink:0}
.ind-name{font-size:.875rem;font-weight:600}
.ind-desc{font-size:.76rem;color:var(--t2);margin-top:2px}

.about-cta{padding:130px 0;text-align:center}
.about-cta .stitle{max-width:640px;margin:0 auto 1.25rem}
.about-cta .ssub{margin:0 auto 2.5rem}
.cta-btns{display:flex;gap:1rem;justify-content:center;flex-wrap:wrap}

@media(max-width:900px){.mission-grid,.culture-grid{grid-template-columns:1fr}.values-grid{grid-template-columns:repeat(2,1fr)}.ind-grid{grid-template-columns:repeat(2,1fr)}}
@media(max-width:580px){.values-grid,.ind-grid{grid-template-columns:1fr}}
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
    <div class="hero-tag">Who We Are</div>
    <h1 class="hero-title">A Software Engineering Company<br><span class="grad">Focused on Execution</span></h1>
    <p class="hero-sub">We don't just consult — we build. Digi9 is a product-minded software engineering firm that turns complex technical requirements into real, working systems that drive measurable business outcomes.</p>
    <div class="hero-btns">
      <a href="#mission" class="btn-p">Our Story ↓</a>
      <a href="contact.php" class="btn-g">Work With Us</a>
    </div>
  </div>
</section>

<section class="mission" id="mission">
  <div class="inner">
    <div class="mission-grid">
      <div class="mission-text rv">
        <span class="eyebrow">Our Mission</span>
        <h2>Built to Build. Not to Talk.</h2>
        <p>Digi9 was founded on a simple belief: the gap between a great idea and a working product should be as narrow as possible. Too many businesses get lost in endless strategy sessions and scope documents. We close that gap.</p>
        <p>We're a lean, senior-heavy team of engineers, designers, and product thinkers based in Bangalore. Every person on our team has shipped production software. We bring that obsession with working code to every engagement.</p>
        <p>From AI-powered internal tools to customer-facing mobile apps, we operate across the full stack — and we stay until the job is done right.</p>
        <div style="margin-top:2rem"><a href="process.php" class="btn-g">See How We Work →</a></div>
      </div>
      <div class="stat-cards rv" style="transition-delay:.15s">
        <div class="stat-card">
          <div class="stat-num">50+</div>
          <div><div class="stat-label"><strong>Projects Delivered</strong>Across web, mobile, AI, and enterprise software</div></div>
        </div>
        <div class="stat-card">
          <div class="stat-num">7+</div>
          <div><div class="stat-label"><strong>Industries Served</strong>Fintech, healthcare, retail, logistics, and more</div></div>
        </div>
        <div class="stat-card">
          <div class="stat-num">98%</div>
          <div><div class="stat-label"><strong>Client Retention</strong>Most clients return for their next project</div></div>
        </div>
        <div class="stat-card">
          <div class="stat-num">4yr+</div>
          <div><div class="stat-label"><strong>In Operation</strong>Growing since 2020, based in Bangalore</div></div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="values">
  <div class="inner">
    <div class="section-head center rv">
      <span class="eyebrow">Our Values</span>
      <h2 class="stitle">What We Stand For</h2>
      <p class="ssub">Six principles that shape how we work, how we hire, and how we deliver every project.</p>
    </div>
    <div class="values-grid">
      <div class="card rv" style="transition-delay:.05s">
        <div class="card-ico">🎯</div>
        <div class="card-title">Custom First</div>
        <div class="card-text">We never recommend a custom build when an off-the-shelf solution is the right fit. And when custom is right, we build it exactly to spec — no compromises, no shortcuts.</div>
      </div>
      <div class="card rv" style="transition-delay:.1s">
        <div class="card-ico">⚙️</div>
        <div class="card-title">Engineering First</div>
        <div class="card-text">We make decisions based on technical merit. Clean architecture, proper testing, and maintainable code aren't negotiable — they're the baseline we start from.</div>
      </div>
      <div class="card rv" style="transition-delay:.15s">
        <div class="card-ico">📈</div>
        <div class="card-title">Outcome Driven</div>
        <div class="card-text">We measure success by your business results — not lines of code or story points. If it doesn't move the needle, we question whether it should exist.</div>
      </div>
      <div class="card rv" style="transition-delay:.2s">
        <div class="card-ico">🔍</div>
        <div class="card-title">Radical Transparency</div>
        <div class="card-text">You always know where your project stands. We share progress, blockers, and decisions in real time — no surprises, no scope creep hidden in footnotes.</div>
      </div>
      <div class="card rv" style="transition-delay:.25s">
        <div class="card-ico">🤝</div>
        <div class="card-title">Long-term Partners</div>
        <div class="card-text">We don't disappear after launch. The best relationships in our portfolio are years old. We want to be the team that grows with your business over time.</div>
      </div>
      <div class="card rv" style="transition-delay:.3s">
        <div class="card-ico">🌆</div>
        <div class="card-title">Bangalore Roots</div>
        <div class="card-text">Built in India's engineering capital. We combine world-class technical talent with deep local market knowledge — global quality at sensible cost.</div>
      </div>
    </div>
  </div>
</section>

<section class="culture">
  <div class="inner">
    <div class="culture-grid">
      <div class="rv">
        <span class="eyebrow">Team Culture</span>
        <h2 class="stitle">Senior Engineers<br><em>All the Way Down</em></h2>
        <p class="ssub" style="margin-bottom:1.5rem">We don't staff projects with juniors supervised from a distance. Every team member at Digi9 has shipped production software. You get experience, not just effort.</p>
        <p style="color:var(--t2);line-height:1.8;font-size:.975rem;margin-bottom:1.5rem">Our team structure is flat. Engineers communicate directly with clients, ask the hard questions early, and push back when something doesn't make sense. That honesty is why projects succeed.</p>
        <p style="color:var(--t2);line-height:1.8;font-size:.975rem">We believe the best software comes from small, focused teams with full ownership. No hand-offs, no fragmented accountability.</p>
      </div>
      <div class="culture-visual rv" style="transition-delay:.15s">
        <div class="culture-row">
          <div class="culture-icon" style="background:rgba(124,58,237,.15)">👩‍💻</div>
          <div><div class="culture-label">Senior-only Engineering</div><div class="culture-sub">All engineers have 4+ years production experience</div></div>
        </div>
        <div class="culture-row">
          <div class="culture-icon" style="background:rgba(59,130,246,.15)">📡</div>
          <div><div class="culture-label">Direct Client Access</div><div class="culture-sub">No account managers — engineers talk directly to you</div></div>
        </div>
        <div class="culture-row">
          <div class="culture-icon" style="background:rgba(0,212,255,.15)">🔄</div>
          <div><div class="culture-label">Agile, Not Theatrical</div><div class="culture-sub">Weekly demos, real progress, no ceremony for its own sake</div></div>
        </div>
        <div class="culture-row">
          <div class="culture-icon" style="background:rgba(245,200,66,.15)">🏆</div>
          <div><div class="culture-label">Ownership Mentality</div><div class="culture-sub">We act like we're building our own product every time</div></div>
        </div>
        <div class="culture-row">
          <div class="culture-icon" style="background:rgba(124,58,237,.15)">📚</div>
          <div><div class="culture-label">Continuous Learning</div><div class="culture-sub">Active R&D investment — you get the latest, not yesterday's patterns</div></div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="industries">
  <div class="inner">
    <div class="section-head center rv">
      <span class="eyebrow">Industries</span>
      <h2 class="stitle">We Build Across Sectors</h2>
      <p class="ssub">Domain knowledge matters. Our team has built production software across all of these verticals.</p>
    </div>
    <div class="ind-grid">
      <div class="ind-card rv" style="transition-delay:.05s"><div class="ind-icon">🏦</div><div><div class="ind-name">Fintech & Banking</div><div class="ind-desc">Payments, lending, insurance</div></div></div>
      <div class="ind-card rv" style="transition-delay:.1s"><div class="ind-icon">🏥</div><div><div class="ind-name">Healthcare</div><div class="ind-desc">Diagnostics, EHR, telemedicine</div></div></div>
      <div class="ind-card rv" style="transition-delay:.15s"><div class="ind-icon">🛒</div><div><div class="ind-name">E-Commerce & Retail</div><div class="ind-desc">D2C, marketplace, inventory</div></div></div>
      <div class="ind-card rv" style="transition-delay:.2s"><div class="ind-icon">🚚</div><div><div class="ind-name">Logistics & Supply Chain</div><div class="ind-desc">Tracking, routing, warehouse ops</div></div></div>
      <div class="ind-card rv" style="transition-delay:.25s"><div class="ind-icon">🎓</div><div><div class="ind-name">EdTech</div><div class="ind-desc">LMS, assessments, content delivery</div></div></div>
      <div class="ind-card rv" style="transition-delay:.3s"><div class="ind-icon">🏭</div><div><div class="ind-name">Manufacturing</div><div class="ind-desc">ERP, IoT, quality control</div></div></div>
      <div class="ind-card rv" style="transition-delay:.35s"><div class="ind-icon">🏢</div><div><div class="ind-name">Enterprise SaaS</div><div class="ind-desc">B2B platforms, automation tools</div></div></div>
      <div class="ind-card rv" style="transition-delay:.4s"><div class="ind-icon">🌐</div><div><div class="ind-name">Media & Content</div><div class="ind-desc">CMS, streaming, publishing</div></div></div>
    </div>
  </div>
</section>

<section class="about-cta">
  <div class="inner">
    <div class="rv">
      <span class="eyebrow">Get Started</span>
      <h2 class="stitle">Ready to Build<br>Something Real?</h2>
      <p class="ssub">Tell us what you're building. We'll be honest about what it takes, how long it'll take, and what it'll cost.</p>
      <div class="cta-btns">
        <button class="btn-p" onclick="openM(event)">Start a Conversation →</button>
        <a href="work.php" class="btn-g">See Our Work</a>
      </div>
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

(function(){
  const canvas=document.getElementById('bg-canvas');
  const ctx=canvas.getContext('2d');
  let W,H;
  function resize(){W=canvas.width=window.innerWidth;H=canvas.height=window.innerHeight}
  resize();window.addEventListener('resize',resize);
  const stars=Array.from({length:400},()=>({x:Math.random()*2000,y:Math.random()*1200,r:Math.random()*1.2+.2,a:Math.random()}));
  const planets=[
    {x:W*.8,y:H*.3,r:180,dx:-.008,dy:.003,color:'rgba(124,58,237,',rings:true,ringColor:'rgba(167,139,250,'},
    {x:W*.15,y:H*.7,r:120,dx:.006,dy:-.004,color:'rgba(59,130,246,',rings:false,ringColor:''},
    {x:W*.5,y:H*1.1,r:90,dx:-.005,dy:-.002,color:'rgba(0,212,255,',rings:true,ringColor:'rgba(0,212,255,'},
    {x:W*.9,y:H*.9,r:60,dx:.004,dy:.005,color:'rgba(245,200,66,',rings:false,ringColor:''},
  ];
  let t=0;
  function draw(){
    requestAnimationFrame(draw);
    ctx.fillStyle='rgba(3,3,7,.15)';ctx.fillRect(0,0,W,H);
    t+=.004;
    stars.forEach(s=>{
      const a=s.a*(.5+.5*Math.sin(t*2+s.x));
      ctx.beginPath();ctx.arc(s.x%W,s.y%H,s.r,0,Math.PI*2);
      ctx.fillStyle=`rgba(240,238,255,${a*.6})`;ctx.fill();
    });
    planets.forEach((p,i)=>{
      p.x+=p.dx;p.y+=p.dy;
      if(p.x<-p.r*2)p.x=W+p.r;if(p.x>W+p.r*2)p.x=-p.r;
      if(p.y<-p.r*2)p.y=H+p.r;if(p.y>H+p.r*2)p.y=-p.r;
      const glow=ctx.createRadialGradient(p.x,p.y,0,p.x,p.y,p.r*2.5);
      glow.addColorStop(0,p.color+'0.06)');glow.addColorStop(1,p.color+'0)');
      ctx.fillStyle=glow;ctx.beginPath();ctx.arc(p.x,p.y,p.r*2.5,0,Math.PI*2);ctx.fill();
      const grad=ctx.createRadialGradient(p.x-p.r*.3,p.y-p.r*.3,0,p.x,p.y,p.r);
      grad.addColorStop(0,p.color+'0.25)');grad.addColorStop(.6,p.color+'0.12)');grad.addColorStop(1,p.color+'0.04)');
      ctx.fillStyle=grad;ctx.beginPath();ctx.arc(p.x,p.y,p.r,0,Math.PI*2);ctx.fill();
      if(p.rings){
        ctx.save();ctx.translate(p.x,p.y);ctx.rotate(Math.sin(t*.3+i)*.15);
        ctx.scale(1,.25);
        for(let ri=1;ri<=3;ri++){
          ctx.beginPath();ctx.arc(0,0,p.r*(1.4+ri*.3),0,Math.PI*2);
          ctx.strokeStyle=p.ringColor+(0.08-ri*.02)+')';ctx.lineWidth=p.r*.08;ctx.stroke();
        }
        ctx.restore();
      }
    });
    const nb=ctx.createRadialGradient(W*.5+Math.sin(t)*80,H*.5+Math.cos(t*.7)*60,0,W*.5,H*.5,W*.6);
    nb.addColorStop(0,'rgba(124,58,237,0.03)');nb.addColorStop(1,'transparent');
    ctx.fillStyle=nb;ctx.fillRect(0,0,W,H);
  }
  ctx.fillStyle='#030307';ctx.fillRect(0,0,W,H);draw();
})();

gsap.registerPlugin(ScrollTrigger);
gsap.from('.hero-tag',{opacity:0,y:30,duration:1,delay:.2});
gsap.from('.hero-title',{opacity:0,y:50,duration:1.2,delay:.4});
gsap.from('.hero-sub',{opacity:0,y:30,duration:1,delay:.7});
gsap.from('.hero-btns',{opacity:0,y:20,duration:.8,delay:1});
gsap.utils.toArray('.stat-card').forEach((el,i)=>{
  gsap.from(el,{scrollTrigger:{trigger:el,start:'top 85%'},opacity:0,x:40,duration:.7,delay:i*.1});
});
gsap.utils.toArray('.culture-row').forEach((el,i)=>{
  gsap.from(el,{scrollTrigger:{trigger:el,start:'top 88%'},opacity:0,x:30,duration:.6,delay:i*.08});
});
</script>

<!-- Lenis smooth scroll -->
<script src="https://unpkg.com/lenis@1.1.14/dist/lenis.min.js"></script>

<!-- 3D Timeline Tunnel + Values Orbit -->
<style>
/* ── TIMELINE TUNNEL ─────────────────────────────────── */
#tunnel-section{padding:120px 0;overflow:hidden}
.tunnel-wrap{position:relative;max-width:900px;margin:0 auto;padding:60px 0}
.tunnel-line{position:absolute;left:50%;top:0;bottom:0;width:2px;transform:translateX(-50%);background:linear-gradient(180deg,transparent,var(--p) 20%,var(--c) 80%,transparent);z-index:0}
.tunnel-line::before,.tunnel-line::after{content:'';position:absolute;left:50%;transform:translateX(-50%);width:10px;height:10px;border-radius:50%;background:var(--c);box-shadow:0 0 20px var(--c)}
.tunnel-line::before{top:0}.tunnel-line::after{bottom:0}
.milestone{position:relative;z-index:1;width:45%;padding:28px;background:var(--surf);border:1px solid var(--br);border-radius:18px;margin-bottom:60px;opacity:0;transition:opacity .7s,transform .7s}
.milestone.visible{opacity:1!important;transform:none!important}
.milestone.left{margin-left:0;margin-right:auto;transform:translateX(-60px) rotateY(15deg)}
.milestone.right{margin-left:auto;margin-right:0;transform:translateX(60px) rotateY(-15deg)}
.milestone:hover{border-color:var(--br2);box-shadow:0 10px 40px rgba(124,58,237,.15)}
.ms-year{font-family:var(--fh);font-size:1.8rem;font-weight:800;background:linear-gradient(135deg,var(--p),var(--c));-webkit-background-clip:text;-webkit-text-fill-color:transparent;margin-bottom:8px}
.ms-text{font-size:.9rem;color:var(--t2);line-height:1.65}
/* connector dots */
.milestone::after{content:'';position:absolute;top:50%;width:12px;height:12px;background:var(--p);border-radius:50%;box-shadow:0 0 16px var(--p)}
.milestone.left::after{right:-6%;transform:translateY(-50%)}
.milestone.right::after{left:-6%;transform:translateY(-50%)}

/* ── VALUES ORBIT ────────────────────────────────────── */
#orbit-section{padding:120px 0}
.orbit-stage{position:relative;width:560px;height:560px;margin:0 auto}
.orbit-hub{position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);width:100px;height:100px;border-radius:50%;background:linear-gradient(135deg,var(--p),var(--b));display:flex;align-items:center;justify-content:center;font-size:2rem;box-shadow:0 0 60px rgba(124,58,237,.4);z-index:2}
.orbit-ring{position:absolute;inset:0;border:1px solid var(--br);border-radius:50%;animation:spin 20s linear infinite}
@keyframes spin{to{transform:rotate(360deg)}}
.orbit-card{position:absolute;width:160px;background:var(--surf);border:1px solid var(--br);border-radius:16px;padding:20px;text-align:center;transform-origin:50% 50%;transition:all .3s;cursor:default}
.orbit-card:hover{border-color:var(--br2);box-shadow:0 10px 40px rgba(124,58,237,.2);transform:scale(1.08)!important}
.orbit-card .o-ico{font-size:1.8rem;margin-bottom:8px}
.orbit-card .o-title{font-family:var(--fh);font-size:.875rem;font-weight:700;margin-bottom:6px}
.orbit-card .o-desc{font-size:.75rem;color:var(--t2);line-height:1.5}
@media(max-width:640px){.orbit-stage{width:320px;height:320px}.orbit-card{width:110px;padding:12px}.orbit-card .o-desc{display:none}}
</style>

<script>
// ── LENIS ────────────────────────────────────────────
const lenis=new Lenis({lerp:.1,smoothWheel:true});
lenis.on('scroll',ScrollTrigger.update);
gsap.ticker.add(t=>lenis.raf(t*1000));
gsap.ticker.lagSmoothing(0);

// ── TIMELINE TUNNEL ──────────────────────────────────
(function(){
  const milestones=[
    {year:'2020',text:'Founded in Bangalore with a mission to build software that actually works — no fluff, just execution.',side:'left'},
    {year:'2021',text:'First enterprise AI deployment — LLM workflow automation for a major BFSI client.',side:'right'},
    {year:'2022',text:'Expanded into mobile development — shipped 8 production apps across iOS and Android.',side:'left'},
    {year:'2023',text:'Launched AI agent platform — serving 40+ enterprise clients across 7 industries.',side:'right'},
    {year:'2024',text:'₹50Cr+ in client revenue generated through software we engineered.',side:'left'},
  ];

  const section=document.createElement('section');
  section.id='tunnel-section';
  section.innerHTML=`<div class="inner"><div class="section-head center rv" style="margin-bottom:72px"><span class="eyebrow">Our Journey</span><h2 class="stitle">Through the <em>Tunnel</em></h2></div>
  <div class="tunnel-wrap"><div class="tunnel-line"></div>
  ${milestones.map(m=>`<div class="milestone ${m.side}"><div class="ms-year">${m.year}</div><p class="ms-text">${m.text}</p></div>`).join('')}
  </div></div>`;

  const about=document.querySelector('section');
  const footer=document.querySelector('footer');
  if(footer)footer.parentNode.insertBefore(section,footer);

  // Animate milestones on scroll
  document.querySelectorAll('.milestone').forEach(ms=>{
    ScrollTrigger.create({
      trigger:ms,start:'top 82%',
      onEnter:()=>ms.classList.add('visible'),
    });
  });
})();

// ── VALUES ORBIT ─────────────────────────────────────
(function(){
  const values=[
    {ico:'🎯',title:'Execution First',desc:'We ship, not just design'},
    {ico:'🔬',title:'Engineering Depth',desc:'Real engineers, real solutions'},
    {ico:'🤝',title:'Client Aligned',desc:'Your success is our metric'},
    {ico:'⚡',title:'Speed + Quality',desc:'Fast without cutting corners'},
  ];

  const section=document.createElement('section');
  section.id='orbit-section';
  const angles=[315,45,135,225]; // deg positions
  const r=200; // orbit radius

  section.innerHTML=`<div class="inner"><div class="section-head center rv" style="margin-bottom:72px"><span class="eyebrow">Our Values</span><h2 class="stitle">What We <em>Stand For</em></h2></div>
  <div class="orbit-stage">
    <div class="orbit-ring"></div>
    <div class="orbit-hub">⚡</div>
    ${values.map((v,i)=>{
      const a=angles[i]*Math.PI/180;
      const x=50+Math.cos(a)*50-14+'%'; // approximate % positions
      const y=50+Math.sin(a)*50-14+'%';
      return `<div class="orbit-card" style="left:${x};top:${y}"><div class="o-ico">${v.ico}</div><div class="o-title">${v.title}</div><p class="o-desc">${v.desc}</p></div>`;
    }).join('')}
  </div></div>`;

  const footer=document.querySelector('footer');
  if(footer)footer.parentNode.insertBefore(section,footer);

  // Fly-in animation
  ScrollTrigger.create({
    trigger:'#orbit-section',start:'top 75%',once:true,
    onEnter:()=>{
      gsap.from('.orbit-card',{
        opacity:0,scale:0,rotation:180,
        duration:.9,stagger:.15,ease:'back.out(1.7)',
        transformOrigin:'center center'
      });
      gsap.from('.orbit-hub',{opacity:0,scale:0,duration:.6,ease:'back.out(2)'});
    }
  });
})();
</script>
</body>
</html>
