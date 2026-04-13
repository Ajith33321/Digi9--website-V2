<?php $year = date('Y'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Our Engineering Process — How We Build | Digi9</title>
<meta name="description" content="Digi9's structured approach to building software that works. Discovery, architecture, agile engineering, QA-first deployment and post-launch support.">
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
.hero{min-height:90vh;display:flex;align-items:center;padding-top:var(--nav);text-align:center}
.hero-tag{display:inline-flex;align-items:center;gap:8px;background:rgba(124,58,237,.08);border:1px solid var(--br);border-radius:100px;padding:7px 18px;font-size:.75rem;font-weight:600;letter-spacing:.1em;text-transform:uppercase;color:var(--p);margin-bottom:2rem}
.hero-title{font-family:var(--fh);font-size:clamp(2.8rem,7vw,5rem);font-weight:800;letter-spacing:-.04em;line-height:1.04;margin-bottom:1.5rem}
.hero-title .grad{background:linear-gradient(135deg,var(--p),var(--c));-webkit-background-clip:text;-webkit-text-fill-color:transparent}
.hero-sub{font-size:1.1rem;color:var(--t2);line-height:1.8;max-width:580px;margin:0 auto 2.5rem}
.section-head{margin-bottom:60px}
.section-head.center{text-align:center}.section-head.center .ssub{margin:0 auto}

.process-steps{padding:120px 0}
.step-item{display:grid;grid-template-columns:80px 1fr;gap:40px;margin-bottom:80px;align-items:start;position:relative}
.step-item::before{content:'';position:absolute;left:40px;top:80px;bottom:-80px;width:1px;background:linear-gradient(180deg,var(--p),transparent);transform:translateX(-50%)}
.step-item:last-child::before{display:none}
.step-num{width:80px;height:80px;border-radius:50%;background:rgba(124,58,237,.1);border:2px solid var(--p);display:flex;align-items:center;justify-content:center;font-family:var(--fh);font-size:1.4rem;font-weight:800;color:var(--p);flex-shrink:0;position:relative;z-index:1;box-shadow:0 0 30px rgba(124,58,237,.2)}
.step-content{padding-top:16px}
.step-title{font-family:var(--fh);font-size:clamp(1.5rem,3vw,2rem);font-weight:800;letter-spacing:-.03em;margin-bottom:.75rem}
.step-desc{color:var(--t2);line-height:1.8;font-size:.975rem;margin-bottom:1.5rem}
.step-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:14px}
.step-item-card{background:var(--surf);border:1px solid var(--br);border-radius:12px;padding:16px 18px;transition:all .3s}
.step-item-card:hover{border-color:var(--p)}
.step-item-card .title{font-size:.875rem;font-weight:600;margin-bottom:4px}
.step-item-card .sub{font-size:.78rem;color:var(--t2);line-height:1.5}
.step-duration{display:inline-flex;align-items:center;gap:6px;background:rgba(124,58,237,.08);border:1px solid var(--br);border-radius:100px;padding:5px 14px;font-size:.75rem;color:var(--t2);margin-bottom:1.25rem}

.tech-stack{padding:100px 0;background:linear-gradient(180deg,transparent,rgba(124,58,237,.03),transparent)}
.tech-categories{display:grid;grid-template-columns:repeat(3,1fr);gap:24px;margin-top:60px}
.tech-cat{background:var(--surf);border:1px solid var(--br);border-radius:18px;padding:28px}
.tech-cat-title{font-family:var(--fh);font-size:.85rem;font-weight:700;letter-spacing:.08em;text-transform:uppercase;color:var(--p);margin-bottom:16px}
.tech-items{display:flex;flex-wrap:wrap;gap:8px}
.tech-chip{background:var(--surf2);border:1px solid var(--br);border-radius:8px;padding:6px 12px;font-size:.78rem;font-weight:500;color:var(--t2);transition:all .2s}
.tech-chip:hover{border-color:var(--p);color:var(--t)}

.methodology{padding:100px 0}
.meth-grid{display:grid;grid-template-columns:repeat(2,1fr);gap:24px;margin-top:60px}

.proc-cta{padding:130px 0;text-align:center}
.proc-cta .stitle{max-width:600px;margin:0 auto 1.25rem}
.proc-cta .ssub{margin:0 auto 2.5rem}

@media(max-width:900px){.step-grid{grid-template-columns:repeat(2,1fr)}.tech-categories,.meth-grid{grid-template-columns:1fr}}
@media(max-width:580px){.step-item{grid-template-columns:1fr}.step-item::before{display:none}.step-grid{grid-template-columns:1fr}}
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
    <div class="hero-tag">How We Work</div>
    <h1 class="hero-title">How We <span class="grad">Build</span></h1>
    <p class="hero-sub">A repeatable, battle-tested process that consistently delivers working software on time. No magic — just disciplined engineering.</p>
    <div style="display:flex;gap:1rem;justify-content:center;flex-wrap:wrap">
      <a href="#steps" class="btn-p">See the Process ↓</a>
      <button class="btn-g" onclick="openM(event)">Start a Project</button>
    </div>
  </div>
</section>

<section class="process-steps" id="steps">
  <div class="inner">
    <div class="step-item rv">
      <div class="step-num">01</div>
      <div class="step-content">
        <div class="step-duration">⏱ Week 1–2</div>
        <h2 class="step-title">Discovery & Scoping</h2>
        <p class="step-desc">Before any code is written, we deeply understand the problem. We run structured discovery sessions to map your requirements, validate assumptions, and define the exact scope of work — with hard boundaries that prevent scope creep.</p>
        <div class="step-grid">
          <div class="step-item-card"><div class="title">Stakeholder Interviews</div><div class="sub">We talk to every person who'll use or be affected by the system</div></div>
          <div class="step-item-card"><div class="title">Requirements Mapping</div><div class="sub">Every functional and non-functional requirement documented</div></div>
          <div class="step-item-card"><div class="title">Scope Definition</div><div class="sub">Fixed deliverables, clear acceptance criteria, no ambiguity</div></div>
          <div class="step-item-card"><div class="title">Risk Assessment</div><div class="sub">Technical and business risks identified and mitigated upfront</div></div>
          <div class="step-item-card"><div class="title">Timeline & Budget</div><div class="sub">Realistic estimates with buffer — not optimistic promises</div></div>
          <div class="step-item-card"><div class="title">Kickoff Document</div><div class="sub">Everything aligned and signed off before development starts</div></div>
        </div>
      </div>
    </div>
    <div class="step-item rv">
      <div class="step-num">02</div>
      <div class="step-content">
        <div class="step-duration">⏱ Week 2–3</div>
        <h2 class="step-title">Architecture & Design</h2>
        <p class="step-desc">We design the system before building it. Architecture decisions made here determine scalability, maintainability, and cost for years to come. We document everything and get your sign-off before a line of production code is written.</p>
        <div class="step-grid">
          <div class="step-item-card"><div class="title">System Architecture</div><div class="sub">Monolith vs microservices, cloud vs on-prem, scaling plan</div></div>
          <div class="step-item-card"><div class="title">Database Modeling</div><div class="sub">Schema design optimized for your actual query patterns</div></div>
          <div class="step-item-card"><div class="title">API Design</div><div class="sub">Contract-first API design with OpenAPI specification</div></div>
          <div class="step-item-card"><div class="title">UI/UX Wireframes</div><div class="sub">Lo-fi then hi-fi prototypes before any frontend code</div></div>
          <div class="step-item-card"><div class="title">Security Model</div><div class="sub">Auth, authorization, data encryption designed from the start</div></div>
          <div class="step-item-card"><div class="title">Tech Stack Selection</div><div class="sub">Right tool for the job — not just the latest trend</div></div>
        </div>
      </div>
    </div>
    <div class="step-item rv">
      <div class="step-num">03</div>
      <div class="step-content">
        <div class="step-duration">⏱ Weeks 3–N (sprint-based)</div>
        <h2 class="step-title">Agile Engineering</h2>
        <p class="step-desc">Two-week sprints with a working demo at the end of each one. You're not waiting months to see something — you're seeing real progress every two weeks and giving feedback that shapes the product.</p>
        <div class="step-grid">
          <div class="step-item-card"><div class="title">Sprint Planning</div><div class="sub">Prioritized backlog, clear sprint goals, team commitment</div></div>
          <div class="step-item-card"><div class="title">Daily Standups</div><div class="sub">Brief daily syncs — blockers surfaced and resolved fast</div></div>
          <div class="step-item-card"><div class="title">Weekly Demos</div><div class="sub">Working software shown every week, not just status updates</div></div>
          <div class="step-item-card"><div class="title">Code Reviews</div><div class="sub">Every PR reviewed by a senior engineer before merge</div></div>
          <div class="step-item-card"><div class="title">Automated Testing</div><div class="sub">Unit, integration, and e2e tests written alongside features</div></div>
          <div class="step-item-card"><div class="title">CI/CD Pipeline</div><div class="sub">Automated builds and deployments from day one</div></div>
        </div>
      </div>
    </div>
    <div class="step-item rv">
      <div class="step-num">04</div>
      <div class="step-content">
        <div class="step-duration">⏱ Final sprint + ongoing</div>
        <h2 class="step-title">Launch & Post-Launch Support</h2>
        <p class="step-desc">Launch isn't the end — it's the beginning. We do staged deployments, performance monitoring setup, comprehensive documentation, and stay on for post-launch iteration. Most of our clients engage us for the next project within 3 months.</p>
        <div class="step-grid">
          <div class="step-item-card"><div class="title">Staged Rollout</div><div class="sub">Beta → limited → full production, with rollback capability</div></div>
          <div class="step-item-card"><div class="title">Performance Monitoring</div><div class="sub">APM, error tracking, uptime monitoring configured</div></div>
          <div class="step-item-card"><div class="title">Documentation</div><div class="sub">Technical docs, user guides, API references delivered</div></div>
          <div class="step-item-card"><div class="title">Team Handoff</div><div class="sub">Your team trained and confident operating the system</div></div>
          <div class="step-item-card"><div class="title">Warranty Period</div><div class="sub">30-day warranty — any bugs fixed at no extra cost</div></div>
          <div class="step-item-card"><div class="title">Ongoing Retainer</div><div class="sub">Optional monthly retainer for continued development</div></div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="tech-stack">
  <div class="inner">
    <div class="section-head center rv">
      <span class="eyebrow">Technology</span>
      <h2 class="stitle">Our Tech Stack</h2>
      <p class="ssub">We use battle-tested, modern technologies — not hype-driven choices. The right tool for every job.</p>
    </div>
    <div class="tech-categories">
      <div class="tech-cat rv" style="transition-delay:.05s">
        <div class="tech-cat-title">Frontend</div>
        <div class="tech-items">
          <span class="tech-chip">React</span><span class="tech-chip">Next.js</span><span class="tech-chip">TypeScript</span><span class="tech-chip">Vue.js</span><span class="tech-chip">Tailwind CSS</span><span class="tech-chip">Framer Motion</span>
        </div>
      </div>
      <div class="tech-cat rv" style="transition-delay:.1s">
        <div class="tech-cat-title">Backend</div>
        <div class="tech-items">
          <span class="tech-chip">Node.js</span><span class="tech-chip">Python</span><span class="tech-chip">FastAPI</span><span class="tech-chip">Django</span><span class="tech-chip">Go</span><span class="tech-chip">PHP / Laravel</span>
        </div>
      </div>
      <div class="tech-cat rv" style="transition-delay:.15s">
        <div class="tech-cat-title">Mobile</div>
        <div class="tech-items">
          <span class="tech-chip">Flutter</span><span class="tech-chip">React Native</span><span class="tech-chip">Swift (iOS)</span><span class="tech-chip">Kotlin (Android)</span>
        </div>
      </div>
      <div class="tech-cat rv" style="transition-delay:.2s">
        <div class="tech-cat-title">AI / ML</div>
        <div class="tech-items">
          <span class="tech-chip">OpenAI GPT-4</span><span class="tech-chip">Anthropic Claude</span><span class="tech-chip">LangChain</span><span class="tech-chip">LlamaIndex</span><span class="tech-chip">HuggingFace</span><span class="tech-chip">PyTorch</span>
        </div>
      </div>
      <div class="tech-cat rv" style="transition-delay:.25s">
        <div class="tech-cat-title">Databases</div>
        <div class="tech-items">
          <span class="tech-chip">PostgreSQL</span><span class="tech-chip">MySQL</span><span class="tech-chip">MongoDB</span><span class="tech-chip">Redis</span><span class="tech-chip">Pinecone</span><span class="tech-chip">Weaviate</span>
        </div>
      </div>
      <div class="tech-cat rv" style="transition-delay:.3s">
        <div class="tech-cat-title">Infrastructure</div>
        <div class="tech-items">
          <span class="tech-chip">AWS</span><span class="tech-chip">GCP</span><span class="tech-chip">Azure</span><span class="tech-chip">Docker</span><span class="tech-chip">Kubernetes</span><span class="tech-chip">Terraform</span>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="methodology">
  <div class="inner">
    <div class="section-head center rv">
      <span class="eyebrow">Engineering Standards</span>
      <h2 class="stitle">How We Maintain Quality</h2>
      <p class="ssub">The practices that ensure every project we ship meets production standards.</p>
    </div>
    <div class="meth-grid">
      <div class="card rv" style="transition-delay:.05s"><div class="card-ico">🧪</div><div class="card-title">Test-Driven Development</div><div class="card-text">We write tests alongside features — not as an afterthought. Our target is 80%+ code coverage on all critical paths. Automated test suites run on every commit.</div></div>
      <div class="card rv" style="transition-delay:.1s"><div class="card-ico">🔍</div><div class="card-title">Code Review Culture</div><div class="card-text">Every pull request gets reviewed by at least one senior engineer. We check for correctness, performance, security, and maintainability before anything merges.</div></div>
      <div class="card rv" style="transition-delay:.15s"><div class="card-ico">🔒</div><div class="card-title">Security by Design</div><div class="card-text">Authentication, authorization, input validation, and encryption are designed in — not bolted on. We follow OWASP guidelines and run security audits before launch.</div></div>
      <div class="card rv" style="transition-delay:.2s"><div class="card-ico">📊</div><div class="card-title">Performance Engineering</div><div class="card-text">We set performance budgets and test against them. Load testing before launch. P95 response time targets defined and met. No slow launches.</div></div>
    </div>
  </div>
</section>

<section class="proc-cta">
  <div class="inner rv">
    <span class="eyebrow">Start the Process</span>
    <h2 class="stitle">Ready to Get<br>the Ball Rolling?</h2>
    <p class="ssub" style="margin:0 auto 2.5rem">The first step is a conversation. Tell us what you're building and we'll walk you through how we'd approach it.</p>
    <div style="display:flex;gap:1rem;justify-content:center;flex-wrap:wrap">
      <button class="btn-p" onclick="openM(event)">Start a Conversation →</button>
      <a href="work.php" class="btn-g">See Our Work</a>
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
  const stars=Array.from({length:300},()=>({x:Math.random()*W,y:Math.random()*H,r:Math.random()*.8+.2,a:Math.random()*.5}));
  const orbiters=[
    {r:120,speed:.008,angle:0,size:8,color:'rgba(124,58,237,',trail:[]},
    {r:200,speed:.005,angle:2,size:12,color:'rgba(59,130,246,',trail:[]},
    {r:290,speed:.003,angle:4,size:10,color:'rgba(0,212,255,',trail:[]},
    {r:370,speed:.002,angle:1,size:14,color:'rgba(245,200,66,',trail:[]},
    {r:450,speed:.0015,angle:3,size:9,color:'rgba(167,139,250,',trail:[]},
  ];
  let t=0;
  function draw(){
    requestAnimationFrame(draw);
    ctx.fillStyle='rgba(3,3,7,.14)';ctx.fillRect(0,0,W,H);
    t+=.006;
    const sx=W*.5,sy=H*.42;
    stars.forEach(s=>{
      ctx.beginPath();ctx.arc(s.x,s.y,s.r,0,Math.PI*2);
      ctx.fillStyle=`rgba(240,238,255,${s.a*(.4+.4*Math.sin(t+s.x*.01))})`;ctx.fill();
    });
    [300,200,120,60].forEach((gr,i)=>{
      const g=ctx.createRadialGradient(sx,sy,0,sx,sy,gr);
      const a=[.03,.05,.08,.15][i];
      g.addColorStop(0,`rgba(245,200,66,${a})`);g.addColorStop(1,'transparent');
      ctx.fillStyle=g;ctx.beginPath();ctx.arc(sx,sy,gr,0,Math.PI*2);ctx.fill();
    });
    ctx.beginPath();ctx.arc(sx,sy,18,0,Math.PI*2);
    const sg=ctx.createRadialGradient(sx-5,sy-5,0,sx,sy,18);
    sg.addColorStop(0,'rgba(255,240,180,.9)');sg.addColorStop(1,'rgba(245,160,40,.4)');
    ctx.fillStyle=sg;ctx.fill();
    orbiters.forEach((o,i)=>{
      ctx.beginPath();ctx.arc(sx,sy,o.r,0,Math.PI*2);
      ctx.strokeStyle='rgba(124,58,237,0.08)';ctx.lineWidth=1;ctx.stroke();
      o.angle+=o.speed;
      const px=sx+Math.cos(o.angle)*o.r,py=sy+Math.sin(o.angle)*o.r*.4;
      o.trail.push({x:px,y:py});if(o.trail.length>20)o.trail.shift();
      o.trail.forEach((tp,ti)=>{
        const a=(ti/o.trail.length)*.25;
        ctx.beginPath();ctx.arc(tp.x,tp.y,o.size*(ti/o.trail.length)*.5,0,Math.PI*2);
        ctx.fillStyle=o.color+a+')';ctx.fill();
      });
      const pg=ctx.createRadialGradient(px-o.size*.3,py-o.size*.3,0,px,py,o.size);
      pg.addColorStop(0,o.color+'0.9)');pg.addColorStop(1,o.color+'0.3)');
      ctx.beginPath();ctx.arc(px,py,o.size,0,Math.PI*2);ctx.fillStyle=pg;ctx.fill();
      const gg=ctx.createRadialGradient(px,py,0,px,py,o.size*3);
      gg.addColorStop(0,o.color+'0.12)');gg.addColorStop(1,o.color+'0)');
      ctx.beginPath();ctx.arc(px,py,o.size*3,0,Math.PI*2);ctx.fillStyle=gg;ctx.fill();
    });
  }
  ctx.fillStyle='#030307';ctx.fillRect(0,0,W,H);draw();
})();

gsap.registerPlugin(ScrollTrigger);
gsap.from('.hero-tag',{opacity:0,y:30,duration:1,delay:.2});
gsap.from('.hero-title',{opacity:0,y:50,duration:1.2,delay:.4});
gsap.from('.hero-sub',{opacity:0,y:30,duration:1,delay:.7});
gsap.utils.toArray('.step-item').forEach((el,i)=>{
  gsap.from(el,{scrollTrigger:{trigger:el,start:'top 80%'},opacity:0,x:-50,duration:1,delay:i*.05});
});
gsap.utils.toArray('.tech-cat').forEach((el,i)=>{
  gsap.from(el,{scrollTrigger:{trigger:el,start:'top 85%'},opacity:0,y:30,duration:.7,delay:i*.08});
});
</script>
</body>
</html>
