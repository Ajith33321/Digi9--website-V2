<?php
$pageTitle = "Solutions — AI Powered Business Systems | Digi9";
$metaDesc  = "Digi9 delivers end-to-end automation, system integration, and AI-powered business intelligence solutions tailored for intensive operational success.";
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
#prog{position:fixed;top:0;left:0;height:2px;background:linear-gradient(90deg,var(--p),var(--c));z-index:1000;width:0%}
nav{position:fixed;top:0;left:0;right:0;height:var(--nav);z-index:900;display:flex;align-items:center;justify-content:space-between;padding:0 48px;background:rgba(3,3,7,.7);backdrop-filter:blur(20px);border-bottom:1px solid var(--br)}
.logo{font-family:var(--fh);font-size:24px;font-weight:800;background:linear-gradient(135deg,var(--p),var(--c));-webkit-background-clip:text;-webkit-text-fill-color:transparent;text-decoration:none}
.nav-links{display:flex;gap:32px;list-style:none}
.nav-links a{color:var(--t2);font-size:14px;font-weight:500;text-decoration:none;transition:color .2s}
.nav-links a:hover{color:var(--t)}
.nav-cta{background:linear-gradient(135deg,var(--p),var(--b));color:#fff;border:none;padding:10px 24px;border-radius:100px;font-size:14px;font-weight:600;cursor:pointer;font-family:var(--fb)}
main,section{position:relative;z-index:1}
.container{max-width:1200px;margin:0 auto;padding:0 24px}
.hero{min-height:100vh;display:flex;align-items:center;padding-top:var(--nav)}
.eyebrow{font-size:12px;font-weight:600;letter-spacing:.12em;text-transform:uppercase;color:var(--c);margin-bottom:16px}
.hero-title{font-family:var(--fh);font-size:clamp(42px,6vw,88px);font-weight:800;line-height:1.05;margin-bottom:24px}
.grad-text{background:linear-gradient(135deg,var(--p),var(--c));-webkit-background-clip:text;-webkit-text-fill-color:transparent}
.hero-sub{font-size:18px;color:var(--t2);max-width:600px;line-height:1.7;margin-bottom:40px}
.btn-row{display:flex;gap:16px;flex-wrap:wrap}
.btn-p{background:linear-gradient(135deg,var(--p),var(--b));color:#fff;border:none;padding:14px 32px;border-radius:100px;font-size:15px;font-weight:600;cursor:pointer;font-family:var(--fb);transition:transform .2s,box-shadow .2s}
.btn-p:hover{transform:translateY(-2px);box-shadow:0 8px 32px rgba(124,58,237,.4)}
.btn-o{background:transparent;color:var(--t);border:1px solid var(--br2);padding:14px 32px;border-radius:100px;font-size:15px;font-weight:600;cursor:pointer;font-family:var(--fb);transition:border-color .2s,color .2s}
.btn-o:hover{border-color:var(--c);color:var(--c)}
.sec{padding:120px 0}
.sec-title{font-family:var(--fh);font-size:clamp(32px,4vw,52px);font-weight:800;margin-bottom:16px}
.sec-sub{color:var(--t2);font-size:17px;max-width:600px;line-height:1.7;margin-bottom:64px}
/* solutions grid */
.sol-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:24px}
@media(max-width:900px){.sol-grid{grid-template-columns:1fr 1fr}}
@media(max-width:600px){.sol-grid{grid-template-columns:1fr}.nav-links{display:none}.hero-title{font-size:36px}}
.sol-card{background:var(--surf);border:1px solid var(--br);border-radius:20px;padding:32px;transition:all .3s;position:relative;overflow:hidden}
.sol-card::before{content:'';position:absolute;inset:0;background:linear-gradient(135deg,rgba(124,58,237,.06),transparent);opacity:0;transition:opacity .3s}
.sol-card:hover{transform:translateY(-6px);border-color:var(--br2);box-shadow:0 20px 60px rgba(124,58,237,.12)}
.sol-card:hover::before{opacity:1}
.sol-icon{width:56px;height:56px;border-radius:16px;background:linear-gradient(135deg,var(--p),var(--b));display:flex;align-items:center;justify-content:center;font-size:24px;margin-bottom:20px}
.sol-title{font-family:var(--fh);font-size:19px;font-weight:700;margin-bottom:10px}
.sol-body{color:var(--t2);font-size:14px;line-height:1.75;margin-bottom:20px}
.sol-tags{display:flex;flex-wrap:wrap;gap:6px}
.sol-tag{background:var(--bg2);border:1px solid var(--br);border-radius:100px;padding:4px 12px;font-size:12px;color:var(--t3)}
/* industries */
.ind-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:16px}
@media(max-width:800px){.ind-grid{grid-template-columns:1fr 1fr}}
@media(max-width:500px){.ind-grid{grid-template-columns:1fr}}
.ind-card{background:var(--surf);border:1px solid var(--br);border-radius:16px;padding:28px 20px;text-align:center;transition:all .3s}
.ind-card:hover{border-color:var(--br2);transform:translateY(-4px)}
.ind-icon{font-size:32px;margin-bottom:12px}
.ind-name{font-family:var(--fh);font-size:15px;font-weight:700;margin-bottom:6px}
.ind-desc{color:var(--t2);font-size:13px;line-height:1.6}
/* approach */
.approach-steps{display:grid;grid-template-columns:repeat(4,1fr);gap:24px}
@media(max-width:800px){.approach-steps{grid-template-columns:1fr 1fr}}
@media(max-width:500px){.approach-steps{grid-template-columns:1fr}}
.step-card{text-align:center;padding:32px 20px}
.step-num{font-family:var(--fh);font-size:52px;font-weight:800;background:linear-gradient(135deg,var(--p),var(--c));-webkit-background-clip:text;-webkit-text-fill-color:transparent;line-height:1;margin-bottom:16px}
.step-title{font-family:var(--fh);font-size:17px;font-weight:700;margin-bottom:8px}
.step-body{color:var(--t2);font-size:14px;line-height:1.7}
/* cta */
.cta-band{background:linear-gradient(135deg,rgba(124,58,237,.12),rgba(0,212,255,.06));border:1px solid var(--br);border-radius:32px;padding:100px 64px;text-align:center}
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
.step-title-m{font-family:var(--fh);font-size:24px;font-weight:800;margin-bottom:8px}
.step-sub{color:var(--t2);font-size:15px;margin-bottom:32px}
.form-field{margin-bottom:20px}
.form-field label{display:block;font-size:13px;font-weight:600;color:var(--t2);margin-bottom:8px;text-transform:uppercase;letter-spacing:.06em}
.form-field input,.form-field select,.form-field textarea{width:100%;background:var(--bg2);border:1px solid var(--br);border-radius:12px;padding:14px 18px;color:var(--t);font-family:var(--fb);font-size:15px;outline:none;transition:border-color .2s}
.form-field input:focus,.form-field select:focus,.form-field textarea:focus{border-color:var(--p)}
.chips{display:flex;flex-wrap:wrap;gap:10px;margin-bottom:24px}
.chip{padding:10px 20px;border-radius:100px;border:1px solid var(--br);font-size:14px;cursor:pointer;transition:all .2s;background:var(--bg2)}
.chip.sel{background:var(--p);border-color:var(--p);color:#fff}
.progress-dots{display:flex;gap:8px;justify-content:center;margin-bottom:32px}
.dot{width:8px;height:8px;border-radius:50%;background:var(--br2);transition:background .3s}
.dot.active{background:var(--p)}
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
  <button class="nav-cta" onclick="openModal()">Get Started</button>
</nav>

<main>
<section class="hero">
  <div class="container">
    <div class="eyebrow rv">Enterprise Solutions</div>
    <h1 class="hero-title rv">Systems That<br><span class="grad-text">Run Themselves</span></h1>
    <p class="hero-sub rv">End-to-end automation, AI-powered intelligence, and deep system integration — purpose-built solutions that transform how your enterprise operates at every level.</p>
    <div class="btn-row rv">
      <button class="btn-p" onclick="openModal()">Explore Solutions for You</button>
      <button class="btn-o" onclick="document.getElementById('solutions').scrollIntoView({behavior:'smooth'})">See All Solutions</button>
    </div>
  </div>
</section>

<section class="sec" id="solutions">
  <div class="container">
    <div class="rv"><div class="eyebrow">Solution Portfolio</div><h2 class="sec-title">What We <span class="grad-text">Deliver</span></h2><p class="sec-sub">Each solution is an end-to-end build — not a consulting engagement. We ship working systems.</p></div>
    <div class="sol-grid">
      <div class="sol-card rv">
        <div class="sol-icon">⚙️</div>
        <div class="sol-title">Workflow Automation</div>
        <p class="sol-body">Custom RPA engines and process orchestration that eliminate manual work across your organization — from document routing to approval chains.</p>
        <div class="sol-tags"><span class="sol-tag">RPA</span><span class="sol-tag">Process Engine</span><span class="sol-tag">Automation</span></div>
      </div>
      <div class="sol-card rv">
        <div class="sol-icon">🔗</div>
        <div class="sol-title">System Integration</div>
        <p class="sol-body">Connecting legacy systems, modern SaaS, and custom software into a unified data and process layer — real-time sync, zero manual reconciliation.</p>
        <div class="sol-tags"><span class="sol-tag">API</span><span class="sol-tag">ETL</span><span class="sol-tag">Middleware</span></div>
      </div>
      <div class="sol-card rv">
        <div class="sol-icon">📊</div>
        <div class="sol-title">AI Business Intelligence</div>
        <p class="sol-body">Predictive analytics dashboards, anomaly detection, and natural-language reporting that surface decisions your team would otherwise miss.</p>
        <div class="sol-tags"><span class="sol-tag">ML</span><span class="sol-tag">Dashboard</span><span class="sol-tag">NLP</span></div>
      </div>
      <div class="sol-card rv">
        <div class="sol-icon">🤖</div>
        <div class="sol-title">AI Agent Deployment</div>
        <p class="sol-body">Autonomous AI agents that handle customer support, internal queries, document processing, and multi-step task execution without human intervention.</p>
        <div class="sol-tags"><span class="sol-tag">LLM</span><span class="sol-tag">RAG</span><span class="sol-tag">Agentic AI</span></div>
      </div>
      <div class="sol-card rv">
        <div class="sol-icon">🛡️</div>
        <div class="sol-title">Compliance Automation</div>
        <p class="sol-body">Automated regulatory reporting, audit trail management, and policy enforcement systems for finance, healthcare, and government sectors.</p>
        <div class="sol-tags"><span class="sol-tag">GRC</span><span class="sol-tag">Audit</span><span class="sol-tag">Reporting</span></div>
      </div>
      <div class="sol-card rv">
        <div class="sol-icon">🏭</div>
        <div class="sol-title">Operational Command Center</div>
        <p class="sol-body">Real-time operations dashboards with multi-source data aggregation, alert routing, and escalation management for teams running complex operations.</p>
        <div class="sol-tags"><span class="sol-tag">Real-time</span><span class="sol-tag">Monitoring</span><span class="sol-tag">Ops</span></div>
      </div>
    </div>
  </div>
</section>

<section class="sec" style="padding-top:0">
  <div class="container">
    <div class="rv"><div class="eyebrow">Industries</div><h2 class="sec-title">Solutions by <span class="grad-text">Sector</span></h2><p class="sec-sub">We've solved operational challenges across sectors where complexity is the norm.</p></div>
    <div class="ind-grid">
      <div class="ind-card rv"><div class="ind-icon">🏛️</div><div class="ind-name">Government</div><p class="ind-desc">Permit systems, citizen portals, compliance automation</p></div>
      <div class="ind-card rv"><div class="ind-icon">🏥</div><div class="ind-name">Healthcare</div><p class="ind-desc">Clinical workflows, document intelligence, scheduling</p></div>
      <div class="ind-card rv"><div class="ind-icon">💰</div><div class="ind-name">Finance</div><p class="ind-desc">Reconciliation, risk monitoring, regulatory reporting</p></div>
      <div class="ind-card rv"><div class="ind-icon">🚚</div><div class="ind-name">Logistics</div><p class="ind-desc">Fleet management, route optimization, dispatch</p></div>
      <div class="ind-card rv"><div class="ind-icon">🏗️</div><div class="ind-name">Manufacturing</div><p class="ind-desc">Quality control, inventory, production monitoring</p></div>
      <div class="ind-card rv"><div class="ind-icon">🎓</div><div class="ind-name">Education</div><p class="ind-desc">Student systems, admissions automation, analytics</p></div>
      <div class="ind-card rv"><div class="ind-icon">🛒</div><div class="ind-name">Retail</div><p class="ind-desc">Inventory intelligence, demand forecasting, CRM</p></div>
      <div class="ind-card rv"><div class="ind-icon">⚡</div><div class="ind-name">Utilities</div><p class="ind-desc">Field inspection, asset management, billing automation</p></div>
    </div>
  </div>
</section>

<section class="sec" style="padding-top:0">
  <div class="container">
    <div class="rv"><div class="eyebrow">How We Work</div><h2 class="sec-title">Solution <span class="grad-text">Delivery</span></h2><p class="sec-sub">A proven process that moves from understanding to impact — fast.</p></div>
    <div class="approach-steps">
      <div class="step-card rv"><div class="step-num">01</div><div class="step-title">Discovery</div><p class="step-body">Deep-dive into your operations, data, and current tools to map exactly what needs to be built.</p></div>
      <div class="step-card rv"><div class="step-num">02</div><div class="step-num"></div><div class="step-title">Solution Design</div><p class="step-body">Architecture, integrations, and UX designed and reviewed before a line of code is written.</p></div>
      <div class="step-card rv"><div class="step-num">03</div><div class="step-title">Agile Build</div><p class="step-body">Sprint-based development with working demos every two weeks — you stay in control.</p></div>
      <div class="step-card rv"><div class="step-num">04</div><div class="step-title">Deploy & Optimize</div><p class="step-body">Monitored production launch with real usage data driving continuous improvements.</p></div>
    </div>
  </div>
</section>

<section class="sec" style="padding-top:0">
  <div class="container">
    <div class="cta-band rv">
      <div class="eyebrow" style="margin-bottom:16px">Let's Solve It</div>
      <h2 style="font-family:var(--fh);font-size:clamp(32px,4vw,52px);font-weight:800;margin-bottom:16px">The Right Solution<br><span class="grad-text">For Your Operations</span></h2>
      <p style="color:var(--t2);font-size:17px;max-width:520px;margin:0 auto 40px;line-height:1.7">Tell us the operational challenge you're trying to crack. We'll map the right solution path.</p>
      <button class="btn-p" onclick="openModal()">Discuss Your Solution</button>
    </div>
  </div>
</section>
</main>

<footer>
  <div class="container">
    <div class="foot-grid">
      <div class="foot-brand"><a class="logo" href="index.php">Digi9</a><p>Building enterprise solutions that automate, integrate, and intelligently scale your operations.</p></div>
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
    <div class="modal-step active" id="s1"><div class="step-title-m">Let's Find Your Solution</div><div class="step-sub">Start with the basics.</div><div class="form-field"><label>Full Name</label><input id="m-name" type="text" placeholder="Your name"></div><div class="form-field"><label>Email</label><input id="m-email" type="email" placeholder="you@company.com"></div><div class="form-field"><label>Phone</label><input id="m-phone" type="tel" placeholder="+91 98765 43210"></div><button class="btn-p" style="width:100%" onclick="nextStep(2)">Continue →</button></div>
    <div class="modal-step" id="s2"><div class="step-title-m">What area needs solving?</div><div class="step-sub">Select all that apply.</div><div class="chips"><div class="chip" onclick="toggleChip(this)">Workflow Automation</div><div class="chip" onclick="toggleChip(this)">System Integration</div><div class="chip" onclick="toggleChip(this)">AI / Business Intelligence</div><div class="chip" onclick="toggleChip(this)">Compliance Automation</div><div class="chip" onclick="toggleChip(this)">Operations Dashboard</div><div class="chip" onclick="toggleChip(this)">AI Agents</div><div class="chip" onclick="toggleChip(this)">Not sure yet</div></div><button class="btn-p" style="width:100%" onclick="nextStep(3)">Continue →</button></div>
    <div class="modal-step" id="s3"><div class="step-title-m">Your Context</div><div class="step-sub">Help us understand your situation.</div><div class="form-field"><label>Company</label><input id="m-company" type="text" placeholder="Your company name"></div><div class="form-field"><label>Industry</label><select id="m-timeline"><option value="">Select your industry</option><option>Government</option><option>Healthcare</option><option>Finance</option><option>Logistics</option><option>Manufacturing</option><option>Retail</option><option>Education</option><option>Other</option></select></div><div class="form-field"><label>Describe the Challenge</label><textarea id="m-desc" rows="3" placeholder="What's the operational problem?"></textarea></div><button class="btn-p" style="width:100%" onclick="nextStep(4)">Review →</button></div>
    <div class="modal-step" id="s4"><div class="step-title-m">Confirm Details</div><div class="step-sub">We'll respond within 24 hours with a tailored approach.</div><div id="summary" style="background:var(--bg2);border-radius:16px;padding:24px;margin-bottom:24px;font-size:14px;line-height:2;color:var(--t2)"></div><button class="btn-p" style="width:100%" onclick="submitModal()">Submit</button></div>
    <div class="modal-step" id="s5"><div style="text-align:center;padding:32px 0"><div style="font-size:64px;margin-bottom:24px">⚡</div><div class="step-title-m">We're On It!</div><p style="color:var(--t2);line-height:1.7;margin-top:8px">Our solutions team will prepare a tailored response for your specific challenge within 24 hours.</p></div></div>
  </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
<script>
// Energy Field canvas — plasma nodes connected by lightning arcs
(function(){
  const cv=document.getElementById('bg-canvas');
  const ctx=cv.getContext('2d');
  let W,H,nodes=[];
  function resize(){W=cv.width=window.innerWidth;H=cv.height=window.innerHeight;nodes=[];init()}
  function Node(){
    this.x=Math.random()*W;this.y=Math.random()*H;
    this.vx=(Math.random()-.5)*.5;this.vy=(Math.random()-.5)*.5;
    this.r=Math.random()*3+1;this.pulse=Math.random()*Math.PI*2;
    this.charge=Math.random();
  }
  function init(){for(let i=0;i<70;i++)nodes.push(new Node())}
  resize();window.addEventListener('resize',resize);
  function lightning(x1,y1,x2,y2,detail,alpha){
    if(detail===0||Math.abs(x2-x1)+Math.abs(y2-y1)<4){
      ctx.beginPath();ctx.moveTo(x1,y1);ctx.lineTo(x2,y2);
      ctx.strokeStyle=`rgba(0,212,255,${alpha})`;ctx.lineWidth=.5;ctx.stroke();return;
    }
    const mx=(x1+x2)/2+(Math.random()-.5)*30;
    const my=(y1+y2)/2+(Math.random()-.5)*30;
    lightning(x1,y1,mx,my,detail-1,alpha*.7);
    lightning(mx,my,x2,y2,detail-1,alpha*.7);
  }
  let arcTimer=0;let arcs=[];
  function draw(){
    ctx.clearRect(0,0,W,H);
    arcTimer++;
    if(arcTimer%8===0&&nodes.length>1){
      const a=Math.floor(Math.random()*nodes.length);
      let b=Math.floor(Math.random()*nodes.length);
      while(b===a)b=Math.floor(Math.random()*nodes.length);
      arcs.push({a,b,life:12});
    }
    arcs=arcs.filter(arc=>{
      arc.life--;
      const n1=nodes[arc.a],n2=nodes[arc.b];
      if(!n1||!n2)return false;
      const d=Math.hypot(n2.x-n1.x,n2.y-n1.y);
      if(d>300)return false;
      lightning(n1.x,n1.y,n2.x,n2.y,3,arc.life/12*.6);
      return arc.life>0;
    });
    // node connections (soft)
    for(let i=0;i<nodes.length;i++){
      for(let j=i+1;j<nodes.length;j++){
        const d=Math.hypot(nodes[i].x-nodes[j].x,nodes[i].y-nodes[j].y);
        if(d<120){
          ctx.beginPath();ctx.moveTo(nodes[i].x,nodes[i].y);ctx.lineTo(nodes[j].x,nodes[j].y);
          ctx.strokeStyle=`rgba(124,58,237,${(1-d/120)*.12})`;ctx.lineWidth=.5;ctx.stroke();
        }
      }
    }
    // nodes
    nodes.forEach(n=>{
      n.pulse+=.025;n.charge=Math.sin(n.pulse)*.5+.5;
      const g=ctx.createRadialGradient(n.x,n.y,0,n.x,n.y,n.r*5);
      g.addColorStop(0,`rgba(124,58,237,${.7*n.charge})`);
      g.addColorStop(.5,`rgba(0,212,255,${.3*n.charge})`);
      g.addColorStop(1,'rgba(0,212,255,0)');
      ctx.beginPath();ctx.arc(n.x,n.y,n.r*5,0,Math.PI*2);ctx.fillStyle=g;ctx.fill();
      ctx.beginPath();ctx.arc(n.x,n.y,n.r,0,Math.PI*2);ctx.fillStyle=`rgba(255,255,255,${.8+n.charge*.2})`;ctx.fill();
      n.x+=n.vx;n.y+=n.vy;
      if(n.x<0)n.x=W;if(n.x>W)n.x=0;
      if(n.y<0)n.y=H;if(n.y>H)n.y=0;
    });
    requestAnimationFrame(draw);
  }
  draw();
})();

const cur=document.getElementById('cur'),cur2=document.getElementById('cur2');
let cx=0,cy=0,cx2=0,cy2=0;
document.addEventListener('mousemove',e=>{cx=e.clientX;cy=e.clientY});
(function loop(){cur.style.left=cx+'px';cur.style.top=cy+'px';cx2+=(cx-cx2)*.12;cy2+=(cy-cy2)*.12;cur2.style.left=cx2+'px';cur2.style.top=cy2+'px';requestAnimationFrame(loop)})();
window.addEventListener('scroll',()=>{const p=window.scrollY/(document.body.scrollHeight-window.innerHeight)*100;document.getElementById('prog').style.width=p+'%'});

gsap.registerPlugin(ScrollTrigger);
gsap.from('.hero .rv',{duration:1.2,y:60,opacity:0,stagger:.15,ease:'power3.out',delay:.3});
document.querySelectorAll('.rv').forEach(el=>{if(el.closest('.hero'))return;ScrollTrigger.create({trigger:el,start:'top 85%',onEnter:()=>el.classList.add('in')})});
gsap.utils.toArray('.sol-card').forEach((c,i)=>{ScrollTrigger.create({trigger:c,start:'top 85%',onEnter:()=>{gsap.from(c,{duration:.7,y:50,opacity:0,delay:i%3*.1,ease:'power2.out'})}})});
document.querySelectorAll('.sol-card').forEach(c=>{c.addEventListener('mousemove',e=>{const r=c.getBoundingClientRect();const x=(e.clientX-r.left)/r.width-.5;const y=(e.clientY-r.top)/r.height-.5;c.style.transform=`perspective(700px) rotateY(${x*8}deg) rotateX(${-y*8}deg) translateZ(8px)`});c.addEventListener('mouseleave',()=>{c.style.transform=''})});
let step=1;
function openModal(){document.getElementById('modal').classList.add('show');document.body.style.overflow='hidden'}
function closeModal(){document.getElementById('modal').classList.remove('show');document.body.style.overflow=''}
function nextStep(n){document.getElementById('s'+step).classList.remove('active');document.getElementById('d'+step).classList.remove('active');step=n;document.getElementById('s'+step).classList.add('active');document.getElementById('d'+step).classList.add('active');if(n===4){const chips=[...document.querySelectorAll('.chip.sel')].map(c=>c.textContent).join(', ');document.getElementById('summary').innerHTML=`<b>Name:</b> ${document.getElementById('m-name').value||'—'}<br><b>Email:</b> ${document.getElementById('m-email').value||'—'}<br><b>Solutions:</b> ${chips||'—'}<br><b>Company:</b> ${document.getElementById('m-company').value||'—'}<br><b>Industry:</b> ${document.getElementById('m-timeline').value||'—'}`}}
function toggleChip(el){el.classList.toggle('sel')}
function submitModal(){nextStep(5)}
document.getElementById('modal').addEventListener('click',e=>{if(e.target===document.getElementById('modal'))closeModal()});
window.openModal=openModal;
</script>
</body>
</html>
