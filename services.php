<?php $year = date('Y'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Services — AI Software, Web & Mobile Development | Digi9</title>
<meta name="description" content="Digi9 offers AI software development, web application development, mobile app development, custom software, and automation solutions for businesses in Bangalore and globally.">
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
.hero{min-height:100vh;display:flex;align-items:center;padding-top:var(--nav);text-align:center}
.hero-tag{display:inline-flex;align-items:center;gap:8px;background:rgba(124,58,237,.08);border:1px solid var(--br);border-radius:100px;padding:7px 18px;font-size:.75rem;font-weight:600;letter-spacing:.1em;text-transform:uppercase;color:var(--p);margin-bottom:2rem}
.hero-title{font-family:var(--fh);font-size:clamp(2.8rem,7vw,5rem);font-weight:800;letter-spacing:-.04em;line-height:1.04;margin-bottom:1.5rem}
.hero-title .grad{background:linear-gradient(135deg,var(--p),var(--c));-webkit-background-clip:text;-webkit-text-fill-color:transparent}
.hero-sub{font-size:1.1rem;color:var(--t2);line-height:1.8;max-width:580px;margin:0 auto 2.5rem}
.hero-btns{display:flex;gap:1rem;justify-content:center;flex-wrap:wrap}
.section-head{margin-bottom:60px}
.section-head.center{text-align:center}.section-head.center .ssub{margin:0 auto}

.svc-list{padding:120px 0}
.svc-item{display:grid;grid-template-columns:1fr 1fr;gap:70px;align-items:center;margin-bottom:100px;padding-bottom:100px;border-bottom:1px solid var(--br)}
.svc-item:last-child{margin-bottom:0;padding-bottom:0;border-bottom:none}
.svc-item:nth-child(even){direction:rtl}
.svc-item:nth-child(even)>*{direction:ltr}
.svc-num{font-family:var(--fh);font-size:5rem;font-weight:800;background:linear-gradient(135deg,var(--p),var(--c));-webkit-background-clip:text;-webkit-text-fill-color:transparent;line-height:1;margin-bottom:1rem;opacity:.3}
.svc-title{font-family:var(--fh);font-size:clamp(1.6rem,3vw,2.2rem);font-weight:800;letter-spacing:-.03em;margin-bottom:1rem;line-height:1.15}
.svc-desc{color:var(--t2);line-height:1.8;margin-bottom:1.5rem;font-size:.975rem}
.svc-tags{display:flex;flex-wrap:wrap;gap:8px;margin-bottom:1.75rem}
.svc-tag{background:rgba(124,58,237,.08);border:1px solid var(--br);border-radius:100px;padding:5px 14px;font-size:.75rem;font-weight:500;color:var(--t2)}
.svc-visual{background:var(--surf);border:1px solid var(--br);border-radius:24px;padding:40px;min-height:320px;display:flex;flex-direction:column;gap:14px;justify-content:center}
.svc-feat{display:flex;align-items:center;gap:14px;padding:14px 18px;background:var(--surf2);border-radius:12px;border:1px solid var(--br);transition:all .3s}
.svc-feat:hover{border-color:var(--p)}
.svc-feat-icon{width:36px;height:36px;border-radius:8px;display:flex;align-items:center;justify-content:center;font-size:16px;flex-shrink:0}
.svc-feat-text{font-size:.85rem;font-weight:500}
.svc-feat-sub{font-size:.75rem;color:var(--t2);margin-top:2px}

.why{padding:100px 0;background:linear-gradient(180deg,transparent,rgba(124,58,237,.03),transparent)}
.why-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:24px;margin-top:60px}

.process-ov{padding:100px 0}
.proc-steps{display:grid;grid-template-columns:repeat(4,1fr);gap:24px;margin-top:60px;counter-reset:step}
.proc-step{background:var(--surf);border:1px solid var(--br);border-radius:18px;padding:28px 24px;counter-increment:step;position:relative;overflow:hidden;transition:all .35s}
.proc-step:hover{border-color:var(--p);background:var(--surf2)}
.proc-step::before{content:counter(step,'0'counter(step));font-family:var(--fh);font-size:3.5rem;font-weight:800;position:absolute;top:-10px;right:16px;color:var(--p);opacity:.08;line-height:1}
.proc-step-title{font-family:var(--fh);font-size:1rem;font-weight:700;margin-bottom:8px}
.proc-step-text{font-size:.82rem;color:var(--t2);line-height:1.6}

.svc-cta{padding:130px 0;text-align:center}
.svc-cta .stitle{max-width:640px;margin:0 auto 1.25rem}
.svc-cta .ssub{margin:0 auto 2.5rem}

@media(max-width:900px){.svc-item{grid-template-columns:1fr}.svc-item:nth-child(even){direction:ltr}.why-grid{grid-template-columns:repeat(2,1fr)}.proc-steps{grid-template-columns:repeat(2,1fr)}}
@media(max-width:580px){.why-grid,.proc-steps{grid-template-columns:1fr}}
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
    <div class="hero-tag">What We Do</div>
    <h1 class="hero-title">Engineering That<br><span class="grad">Actually Ships</span></h1>
    <p class="hero-sub">Five core services. One engineering team. Complete ownership from architecture to production deployment.</p>
    <div class="hero-btns">
      <a href="#services" class="btn-p">Explore Services ↓</a>
      <button class="btn-g" onclick="openM(event)">Get a Quote</button>
    </div>
  </div>
</section>

<section class="svc-list" id="services">
  <div class="inner">
    <div class="svc-item rv">
      <div>
        <div class="svc-num">01</div>
        <h2 class="svc-title">AI Software Development</h2>
        <p class="svc-desc">We build intelligent systems powered by large language models, computer vision, predictive analytics, and autonomous agents. Not demos — production-grade AI that runs in your business every day.</p>
        <div class="svc-tags">
          <span class="svc-tag">LLM Integration</span><span class="svc-tag">RAG Systems</span><span class="svc-tag">ML Pipelines</span><span class="svc-tag">AI Agents</span><span class="svc-tag">NLP</span>
        </div>
        <a href="ai-software-development.php" class="btn-p">Learn More →</a>
      </div>
      <div class="svc-visual rv" style="transition-delay:.15s">
        <div class="svc-feat"><div class="svc-feat-icon" style="background:rgba(124,58,237,.15)">🧠</div><div><div class="svc-feat-text">LLM-Powered Applications</div><div class="svc-feat-sub">GPT-4, Claude, Gemini integrations</div></div></div>
        <div class="svc-feat"><div class="svc-feat-icon" style="background:rgba(0,212,255,.15)">📊</div><div><div class="svc-feat-text">Predictive Analytics</div><div class="svc-feat-sub">ML models that learn from your data</div></div></div>
        <div class="svc-feat"><div class="svc-feat-icon" style="background:rgba(59,130,246,.15)">🤖</div><div><div class="svc-feat-text">AI Agents & Automation</div><div class="svc-feat-sub">Autonomous workflows and decision engines</div></div></div>
        <div class="svc-feat"><div class="svc-feat-icon" style="background:rgba(245,200,66,.15)">🔍</div><div><div class="svc-feat-text">Semantic Search</div><div class="svc-feat-sub">Vector embeddings and RAG pipelines</div></div></div>
      </div>
    </div>
    <div class="svc-item rv">
      <div>
        <div class="svc-num">02</div>
        <h2 class="svc-title">Web Application Development</h2>
        <p class="svc-desc">Complex, scalable web platforms built with modern frameworks. From multi-tenant SaaS products to enterprise portals — we handle architecture, frontend, backend, and deployment.</p>
        <div class="svc-tags">
          <span class="svc-tag">React / Next.js</span><span class="svc-tag">Node.js</span><span class="svc-tag">PostgreSQL</span><span class="svc-tag">Microservices</span><span class="svc-tag">API Design</span>
        </div>
        <a href="web-application-development.php" class="btn-p">Learn More →</a>
      </div>
      <div class="svc-visual rv" style="transition-delay:.15s">
        <div class="svc-feat"><div class="svc-feat-icon" style="background:rgba(59,130,246,.15)">🌐</div><div><div class="svc-feat-text">SaaS Platforms</div><div class="svc-feat-sub">Multi-tenant, subscription-based products</div></div></div>
        <div class="svc-feat"><div class="svc-feat-icon" style="background:rgba(124,58,237,.15)">🏢</div><div><div class="svc-feat-text">Enterprise Portals</div><div class="svc-feat-sub">Role-based access, complex workflows</div></div></div>
        <div class="svc-feat"><div class="svc-feat-icon" style="background:rgba(0,212,255,.15)">📈</div><div><div class="svc-feat-text">Analytics Dashboards</div><div class="svc-feat-sub">Real-time data visualization</div></div></div>
        <div class="svc-feat"><div class="svc-feat-icon" style="background:rgba(245,200,66,.15)">🔌</div><div><div class="svc-feat-text">API Development</div><div class="svc-feat-sub">REST, GraphQL, webhooks</div></div></div>
      </div>
    </div>
    <div class="svc-item rv">
      <div>
        <div class="svc-num">03</div>
        <h2 class="svc-title">Mobile Application Development</h2>
        <p class="svc-desc">Native and cross-platform mobile apps for iOS and Android. Performance-first, feature-rich, and built to handle real user loads. Flutter for cross-platform, Swift and Kotlin for native.</p>
        <div class="svc-tags">
          <span class="svc-tag">Flutter</span><span class="svc-tag">React Native</span><span class="svc-tag">iOS (Swift)</span><span class="svc-tag">Android (Kotlin)</span><span class="svc-tag">Offline-First</span>
        </div>
        <a href="mobile-application-development.php" class="btn-p">Learn More →</a>
      </div>
      <div class="svc-visual rv" style="transition-delay:.15s">
        <div class="svc-feat"><div class="svc-feat-icon" style="background:rgba(0,212,255,.15)">📱</div><div><div class="svc-feat-text">Cross-Platform Apps</div><div class="svc-feat-sub">One codebase, iOS + Android</div></div></div>
        <div class="svc-feat"><div class="svc-feat-icon" style="background:rgba(124,58,237,.15)">⚡</div><div><div class="svc-feat-text">Native Performance</div><div class="svc-feat-sub">60fps animations, fast load times</div></div></div>
        <div class="svc-feat"><div class="svc-feat-icon" style="background:rgba(59,130,246,.15)">🔒</div><div><div class="svc-feat-text">Secure by Default</div><div class="svc-feat-sub">Biometrics, encryption, secure storage</div></div></div>
        <div class="svc-feat"><div class="svc-feat-icon" style="background:rgba(245,200,66,.15)">📡</div><div><div class="svc-feat-text">Offline-First Architecture</div><div class="svc-feat-sub">Works without constant connectivity</div></div></div>
      </div>
    </div>
    <div class="svc-item rv">
      <div>
        <div class="svc-num">04</div>
        <h2 class="svc-title">Custom Software Solutions</h2>
        <p class="svc-desc">When off-the-shelf doesn't fit your operations, we build from scratch. ERPs, workflow engines, data pipelines, industry-specific tools — engineered to your exact requirements.</p>
        <div class="svc-tags">
          <span class="svc-tag">ERP Systems</span><span class="svc-tag">Workflow Engines</span><span class="svc-tag">Data Pipelines</span><span class="svc-tag">System Design</span><span class="svc-tag">DevOps</span>
        </div>
        <a href="custom-software.php" class="btn-p">Learn More →</a>
      </div>
      <div class="svc-visual rv" style="transition-delay:.15s">
        <div class="svc-feat"><div class="svc-feat-icon" style="background:rgba(124,58,237,.15)">🏗️</div><div><div class="svc-feat-text">System Architecture</div><div class="svc-feat-sub">Designed for scale from day one</div></div></div>
        <div class="svc-feat"><div class="svc-feat-icon" style="background:rgba(0,212,255,.15)">⚙️</div><div><div class="svc-feat-text">Business Process Automation</div><div class="svc-feat-sub">Replace manual workflows with code</div></div></div>
        <div class="svc-feat"><div class="svc-feat-icon" style="background:rgba(59,130,246,.15)">🗄️</div><div><div class="svc-feat-text">Database Design</div><div class="svc-feat-sub">Optimized for your query patterns</div></div></div>
        <div class="svc-feat"><div class="svc-feat-icon" style="background:rgba(245,200,66,.15)">☁️</div><div><div class="svc-feat-text">Cloud Infrastructure</div><div class="svc-feat-sub">AWS, GCP, Azure deployment</div></div></div>
      </div>
    </div>
    <div class="svc-item rv">
      <div>
        <div class="svc-num">05</div>
        <h2 class="svc-title">Automation & System Intelligence</h2>
        <p class="svc-desc">Connect your tools, automate your repetitive workflows, and unlock insights from data you already have. From API integrations to AI-powered dashboards and legacy system modernization.</p>
        <div class="svc-tags">
          <span class="svc-tag">Workflow Automation</span><span class="svc-tag">API Integration</span><span class="svc-tag">ETL Pipelines</span><span class="svc-tag">BI Dashboards</span><span class="svc-tag">Legacy Modernization</span>
        </div>
        <a href="solutions.php" class="btn-p">Learn More →</a>
      </div>
      <div class="svc-visual rv" style="transition-delay:.15s">
        <div class="svc-feat"><div class="svc-feat-icon" style="background:rgba(245,200,66,.15)">⚡</div><div><div class="svc-feat-text">Workflow Automation</div><div class="svc-feat-sub">Eliminate repetitive manual tasks</div></div></div>
        <div class="svc-feat"><div class="svc-feat-icon" style="background:rgba(124,58,237,.15)">🔗</div><div><div class="svc-feat-text">System Integration</div><div class="svc-feat-sub">Connect Salesforce, SAP, custom APIs</div></div></div>
        <div class="svc-feat"><div class="svc-feat-icon" style="background:rgba(0,212,255,.15)">📊</div><div><div class="svc-feat-text">Intelligent Dashboards</div><div class="svc-feat-sub">AI-powered insights from your data</div></div></div>
        <div class="svc-feat"><div class="svc-feat-icon" style="background:rgba(59,130,246,.15)">🔄</div><div><div class="svc-feat-text">Legacy Modernization</div><div class="svc-feat-sub">Migrate without disrupting operations</div></div></div>
      </div>
    </div>
  </div>
</section>

<section class="why">
  <div class="inner">
    <div class="section-head center rv">
      <span class="eyebrow">Why Digi9</span>
      <h2 class="stitle">What Makes Us Different</h2>
      <p class="ssub">There are a lot of software companies. Here's why businesses choose us and stay.</p>
    </div>
    <div class="why-grid">
      <div class="card rv" style="transition-delay:.05s"><div class="card-ico">🎯</div><div class="card-title">Senior Team, Always</div><div class="card-text">No junior engineers handed to you after the sale. The people who scoped your project are the ones building it.</div></div>
      <div class="card rv" style="transition-delay:.1s"><div class="card-ico">📦</div><div class="card-title">Full-Stack Ownership</div><div class="card-text">We own the entire stack — design, frontend, backend, infrastructure, CI/CD. One team, one accountable partner.</div></div>
      <div class="card rv" style="transition-delay:.15s"><div class="card-ico">🚀</div><div class="card-title">Fast Without Cutting Corners</div><div class="card-text">Our processes and patterns let us move fast while maintaining quality. Weeks to production, not months to kickoff.</div></div>
      <div class="card rv" style="transition-delay:.2s"><div class="card-ico">💬</div><div class="card-title">No Black-Box Delivery</div><div class="card-text">Weekly demos, Slack access, and real documentation. You're always part of the process, not waiting on it.</div></div>
      <div class="card rv" style="transition-delay:.25s"><div class="card-ico">🔧</div><div class="card-title">Post-Launch Support</div><div class="card-text">We don't disappear after go-live. Maintenance, iteration, and feature development are built into how we work.</div></div>
      <div class="card rv" style="transition-delay:.3s"><div class="card-ico">💰</div><div class="card-title">Transparent Pricing</div><div class="card-text">Fixed-scope projects or monthly retainers — either way, you know exactly what you're paying for before we start.</div></div>
    </div>
  </div>
</section>

<section class="process-ov">
  <div class="inner">
    <div class="section-head center rv">
      <span class="eyebrow">How We Work</span>
      <h2 class="stitle">A Process That Delivers</h2>
      <p class="ssub">Four repeatable phases that take you from idea to production-grade software.</p>
    </div>
    <div class="proc-steps">
      <div class="proc-step rv" style="transition-delay:.05s"><div class="proc-step-title">Discovery</div><div class="proc-step-text">We map your requirements, define scope, and identify technical constraints before writing a line of code.</div></div>
      <div class="proc-step rv" style="transition-delay:.1s"><div class="proc-step-title">Architecture</div><div class="proc-step-text">System design, database modeling, API contracts, and tech stack decisions with your long-term needs in mind.</div></div>
      <div class="proc-step rv" style="transition-delay:.15s"><div class="proc-step-title">Engineering</div><div class="proc-step-text">Agile sprints with weekly demos. Real code, real progress, real feedback loops — not status updates in a vacuum.</div></div>
      <div class="proc-step rv" style="transition-delay:.2s"><div class="proc-step-title">Launch & Beyond</div><div class="proc-step-text">Staged deployment, monitoring setup, documentation handoff — and we stay on for post-launch iteration.</div></div>
    </div>
    <div style="text-align:center;margin-top:50px"><a href="process.php" class="btn-g rv">See Full Process →</a></div>
  </div>
</section>

<section class="svc-cta">
  <div class="inner rv">
    <span class="eyebrow">Start Now</span>
    <h2 class="stitle">Let's Talk About<br>Your Project</h2>
    <p class="ssub">No obligation. Just an honest conversation about what you're building and how we can help.</p>
    <div style="display:flex;gap:1rem;justify-content:center;flex-wrap:wrap">
      <button class="btn-p" onclick="openM(event)">Get a Free Consultation →</button>
      <a href="work.php" class="btn-g">View Our Portfolio</a>
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
  let W,H,scrollRatio=0;
  function resize(){W=canvas.width=window.innerWidth;H=canvas.height=window.innerHeight}
  resize();window.addEventListener('resize',resize);
  window.addEventListener('scroll',()=>{scrollRatio=window.scrollY/(document.body.scrollHeight-window.innerHeight)});
  const stars=Array.from({length:300},()=>({x:Math.random()*3000%2000,y:Math.random()*1200,r:Math.random()*.8+.2,a:Math.random()}));
  const nebulas=[
    {cx:.2,cy:.3,rx:400,ry:280,h:260,t:0},
    {cx:.8,cy:.6,rx:350,ry:300,h:200,t:2},
    {cx:.5,cy:.8,rx:500,ry:250,h:280,t:4},
    {cx:.1,cy:.9,rx:300,ry:350,h:320,t:1},
  ];
  let t=0;
  function draw(){
    requestAnimationFrame(draw);
    ctx.fillStyle='rgba(3,3,7,.12)';ctx.fillRect(0,0,W,H);
    t+=.003;
    stars.forEach(s=>{
      ctx.beginPath();ctx.arc(s.x%W,s.y%H,s.r,0,Math.PI*2);
      ctx.fillStyle=`rgba(240,238,255,${s.a*.5})`;ctx.fill();
    });
    nebulas.forEach((n,i)=>{
      const hue=n.h+scrollRatio*120+Math.sin(t+n.t)*20;
      const nx=n.cx*W+Math.sin(t*.4+n.t)*100;
      const ny=n.cy*H+Math.cos(t*.3+n.t)*60;
      const rx=n.rx*(1+Math.sin(t*.2+i)*.2);
      const ry=n.ry*(1+Math.cos(t*.25+i)*.2);
      ctx.save();ctx.translate(nx,ny);
      const gr=ctx.createRadialGradient(0,0,0,0,0,Math.max(rx,ry));
      gr.addColorStop(0,`hsla(${hue},70%,55%,0.06)`);
      gr.addColorStop(.5,`hsla(${hue+30},80%,45%,0.03)`);
      gr.addColorStop(1,'transparent');
      ctx.scale(rx/Math.max(rx,ry),ry/Math.max(rx,ry));
      ctx.fillStyle=gr;ctx.beginPath();ctx.arc(0,0,Math.max(rx,ry),0,Math.PI*2);ctx.fill();
      ctx.restore();
    });
  }
  ctx.fillStyle='#030307';ctx.fillRect(0,0,W,H);draw();
})();

gsap.registerPlugin(ScrollTrigger);
gsap.from('.hero-tag',{opacity:0,y:30,duration:1,delay:.2});
gsap.from('.hero-title',{opacity:0,y:50,duration:1.2,delay:.4});
gsap.from('.hero-sub',{opacity:0,y:30,duration:1,delay:.7});
gsap.from('.hero-btns',{opacity:0,y:20,duration:.8,delay:1});
gsap.utils.toArray('.svc-item').forEach((el,i)=>{
  gsap.from(el,{scrollTrigger:{trigger:el,start:'top 80%'},opacity:0,y:60,duration:1});
});
</script>

<!-- Lenis smooth scroll -->
<script src="https://unpkg.com/lenis@1.1.14/dist/lenis.min.js"></script>

<!-- 3D Effects: Card Flip + Carousel -->
<style>
/* ── FLIP CARDS ─────────────────────────────────────── */
.flip-wrap{perspective:1200px;cursor:default}
.flip-inner{position:relative;width:100%;height:100%;min-height:300px;transition:transform .9s cubic-bezier(.4,0,.2,1);transform-style:preserve-3d}
.flip-wrap.flipped .flip-inner{transform:rotateY(180deg)}
.flip-face{position:absolute;inset:0;backface-visibility:hidden;-webkit-backface-visibility:hidden;border-radius:18px;padding:32px 28px}
.flip-back-face{background:var(--surf2);border:1px solid var(--br);display:flex;flex-direction:column;align-items:center;justify-content:center;text-align:center}
.flip-back-face .fb-ico{font-size:3rem;margin-bottom:16px}
.flip-back-face .fb-name{font-family:var(--fh);font-size:1.1rem;font-weight:700;color:var(--t2)}
.flip-front-face{background:var(--surf);border:1px solid var(--br2);transform:rotateY(180deg)}

/* ── 3D CAROUSEL ────────────────────────────────────── */
#carousel-section{padding:120px 0;overflow:hidden}
.car-stage{width:100%;height:480px;perspective:1400px;perspective-origin:50% 40%;display:flex;align-items:center;justify-content:center;position:relative}
.car-wheel{width:320px;height:420px;position:relative;transform-style:preserve-3d;transition:transform .6s cubic-bezier(.4,0,.2,1)}
.car-panel{position:absolute;width:320px;height:380px;background:var(--surf);border:1px solid var(--br);border-radius:24px;padding:36px 28px;backface-visibility:hidden;display:flex;flex-direction:column;align-items:center;justify-content:center;text-align:center;transition:all .4s}
.car-panel.active-panel{background:var(--surf2);border-color:var(--br2);box-shadow:0 0 60px rgba(124,58,237,.3)}
.car-ico{font-size:3.5rem;margin-bottom:20px}
.car-title{font-family:var(--fh);font-size:1.25rem;font-weight:800;margin-bottom:12px;letter-spacing:-.02em}
.car-desc{font-size:.875rem;color:var(--t2);line-height:1.65}
.car-dots{display:flex;gap:10px;justify-content:center;margin-top:40px}
.car-dot{width:8px;height:8px;border-radius:50%;background:var(--br2);transition:all .3s;cursor:pointer}
.car-dot.on{background:var(--p);transform:scale(1.4)}
.car-nav{display:flex;gap:16px;justify-content:center;margin-top:16px}
.car-btn{background:var(--surf2);border:1px solid var(--br);color:var(--t2);width:44px;height:44px;border-radius:50%;font-size:18px;cursor:pointer;transition:all .2s;display:flex;align-items:center;justify-content:center}
.car-btn:hover{border-color:var(--p);color:var(--p)}
</style>

<script>
// ── LENIS ────────────────────────────────────────────
const lenis=new Lenis({lerp:.1,smoothWheel:true});
lenis.on('scroll',ScrollTrigger.update);
gsap.ticker.add(t=>lenis.raf(t*1000));
gsap.ticker.lagSmoothing(0);

// ── CARD FLIP on scroll ──────────────────────────────
(function(){
  // Wrap existing service cards in flip structure
  document.querySelectorAll('.svc-item').forEach((item,i)=>{
    const titleEl=item.querySelector('.stitle, h2, h3');
    const ico=item.querySelector('.svc-num');
    const icoTxt=ico?ico.textContent:'0'+(i+1);
    const title=titleEl?titleEl.textContent:'Service';

    // Wrap the visual panel side in a flip card
    const panel=item.querySelector('.card, [class*="vis"], [class*="panel"]');
    if(!panel)return;
    const orig=panel.innerHTML;
    const backHTML=`<div class="flip-back-face"><div class="fb-ico">${['🧠','⚡','📱','⚙️','🤖'][i]||'🔧'}</div><div class="fb-name">${title}</div></div>`;
    panel.innerHTML=`<div class="flip-inner"><div class="flip-face flip-back-face">${backHTML}</div><div class="flip-face flip-front-face">${orig}</div></div>`;
    panel.classList.add('flip-wrap');
    panel.style.cssText+='background:none;border:none;padding:0;overflow:visible';

    ScrollTrigger.create({
      trigger:item,start:'top 72%',
      onEnter:()=>setTimeout(()=>panel.classList.add('flipped'),i*120),
      onLeaveBack:()=>panel.classList.remove('flipped')
    });
  });
})();

// ── 3D CAROUSEL ──────────────────────────────────────
(function(){
  const svcs=[
    {ico:'🧠',title:'AI Software Development',desc:'LLM & RAG systems that automate complex high-value workflows at scale'},
    {ico:'⚡',title:'Web App Development',desc:'Scalable SaaS platforms and enterprise portals built to perform'},
    {ico:'📱',title:'Mobile Development',desc:'Native-quality Flutter & React Native applications for iOS and Android'},
    {ico:'⚙️',title:'Custom Software',desc:'Bespoke systems for operational problems that need real engineering'},
    {ico:'🤖',title:'AI Agents & Automation',desc:'Autonomous workflows that execute multi-step tasks without human intervention'},
  ];
  const N=svcs.length;
  const angleStep=360/N;
  const radius=340;

  // Build carousel HTML
  const section=document.createElement('section');
  section.id='carousel-section';
  section.innerHTML=`
    <div class="inner">
      <div class="section-head center rv">
        <span class="eyebrow">Services In Focus</span>
        <h2 class="stitle">Every Service,<br><em>Front & Centre</em></h2>
      </div>
      <div class="car-stage">
        <div class="car-wheel" id="car-wheel">
          ${svcs.map((s,i)=>`<div class="car-panel${i===0?' active-panel':''}" style="transform:rotateY(${i*angleStep}deg) translateZ(${radius}px)">
            <div class="car-ico">${s.ico}</div>
            <div class="car-title">${s.title}</div>
            <p class="car-desc">${s.desc}</p>
          </div>`).join('')}
        </div>
      </div>
      <div class="car-dots">${svcs.map((_,i)=>`<div class="car-dot${i===0?' on':''}" onclick="rotateTo(${i})"></div>`).join('')}</div>
      <div class="car-nav">
        <button class="car-btn" onclick="rotateTo((carIdx-1+${N})%${N})">&#8592;</button>
        <button class="car-btn" onclick="rotateTo((carIdx+1)%${N})">&#8594;</button>
      </div>
    </div>`;

  // Insert before footer
  const footer=document.querySelector('footer');
  if(footer)footer.parentNode.insertBefore(section,footer);

  let carIdx=0;
  const wheel=document.getElementById('car-wheel');

  window.rotateTo=function(idx){
    carIdx=((idx%N)+N)%N;
    wheel.style.transform=`rotateY(${-carIdx*angleStep}deg)`;
    document.querySelectorAll('.car-panel').forEach((p,i)=>{
      p.classList.toggle('active-panel',i===carIdx);
    });
    document.querySelectorAll('.car-dot').forEach((d,i)=>{
      d.classList.toggle('on',i===carIdx);
    });
  };

  // Scroll-driven auto-rotate
  ScrollTrigger.create({
    trigger:'#carousel-section',start:'top 60%',end:'bottom 40%',
    onUpdate:self=>{
      const idx=Math.floor(self.progress*N)%N;
      if(idx!==carIdx)rotateTo(idx);
    }
  });

  // Entry animation
  ScrollTrigger.create({
    trigger:'#carousel-section',start:'top 80%',
    onEnter:()=>{
      document.querySelectorAll('.car-panel').forEach((p,i)=>{
        gsap.from(p,{opacity:0,scale:.7,duration:.8,delay:i*.1,ease:'back.out(1.2)'});
      });
    }
  });
})();
</script>
</body>
</html>
