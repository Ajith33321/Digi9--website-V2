<?php
$pageTitle = "Custom Software Solutions | Digi9";
$metaDesc  = "Specialized software engineering for enterprise-grade automation, legacy system connectivity, and complex operational integration in Bangalore.";
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
:root{--bg:#030307;--bg2:#07070f;--surf:#0d0d1a;--surf2:#12122a;--p:#7c3aed;--b:#3b82f6;--c:#00d4ff;--g:#f5c842;--t:#f0eeff;--t2:#9b97c4;--t3:#5a5780;--br:rgba(124,58,237,.15);--br2:rgba(124,58,237,.3);--fh:'Syne',sans-serif;--fb:'DM Sans',sans-serif;--nav:68px;--acc:#f59e0b}
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
.btn-p:hover{transform:translateY(-2px);box-shadow:0 8px 32px rgba(245,158,11,.4)}
.btn-o{background:transparent;color:var(--t);border:1px solid rgba(245,158,11,.3);padding:14px 32px;border-radius:100px;font-size:15px;font-weight:600;cursor:pointer;font-family:var(--fb);transition:border-color .2s,color .2s}
.btn-o:hover{border-color:var(--acc);color:var(--acc)}
.sec{padding:120px 0}
.sec-title{font-family:var(--fh);font-size:clamp(32px,4vw,52px);font-weight:800;margin-bottom:16px}
.sec-sub{color:var(--t2);font-size:17px;max-width:600px;line-height:1.7;margin-bottom:64px}
/* service cards */
.svc-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:24px}
@media(max-width:900px){.svc-grid{grid-template-columns:1fr 1fr}}
@media(max-width:600px){.svc-grid{grid-template-columns:1fr}.nav-links{display:none}.hero-title{font-size:36px}}
.svc-card{background:var(--surf);border:1px solid var(--br);border-radius:20px;padding:32px;transition:all .3s}
.svc-card:hover{transform:translateY(-6px);border-color:rgba(245,158,11,.4);box-shadow:0 20px 60px rgba(245,158,11,.08)}
.svc-icon{width:52px;height:52px;border-radius:14px;background:linear-gradient(135deg,rgba(245,158,11,.2),rgba(124,58,237,.1));display:flex;align-items:center;justify-content:center;font-size:22px;margin-bottom:20px}
.svc-title{font-family:var(--fh);font-size:18px;font-weight:700;margin-bottom:10px}
.svc-body{color:var(--t2);font-size:14px;line-height:1.7}
/* comparison table */
.compare-wrap{background:var(--surf);border:1px solid var(--br);border-radius:20px;overflow:hidden}
.compare-row{display:grid;grid-template-columns:2fr 1fr 1fr;padding:20px 32px;border-bottom:1px solid var(--br);align-items:center}
.compare-row:last-child{border-bottom:none}
.compare-header{background:var(--bg2);font-family:var(--fh);font-size:14px;font-weight:700;color:var(--t3);text-transform:uppercase;letter-spacing:.06em}
.compare-row p{font-size:14px;color:var(--t2)}
.compare-row .yes{color:#22c55e;font-weight:700}
.compare-row .no{color:var(--t3)}
.compare-col-head{font-family:var(--fh);font-size:14px;font-weight:700;text-align:center}
.compare-col-head.ours{color:var(--acc)}
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
.cta-band{background:linear-gradient(135deg,rgba(245,158,11,.1),rgba(124,58,237,.06));border:1px solid rgba(245,158,11,.2);border-radius:32px;padding:100px 64px;text-align:center}
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
.chip.sel{background:var(--acc);border-color:var(--acc);color:#111}
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
    <div class="eyebrow rv">Custom Software Solutions</div>
    <h1 class="hero-title rv">Built for Your<br><span class="grad-text">Exact Problem</span></h1>
    <p class="hero-sub rv">Off-the-shelf software solves generic problems. We build the systems that handle your specific operations — the workflows, integrations, and automation that no product on the shelf can touch.</p>
    <div class="btn-row rv">
      <button class="btn-p" onclick="openModal()">Discuss Your Challenge</button>
      <button class="btn-o" onclick="document.getElementById('solutions').scrollIntoView({behavior:'smooth'})">See What We Build</button>
    </div>
  </div>
</section>

<section class="sec" id="solutions">
  <div class="container">
    <div class="rv"><div class="eyebrow">Build Categories</div><h2 class="sec-title">Custom Software <span class="grad-text">Specializations</span></h2><p class="sec-sub">We focus on the hard problems — the ones that require deep engineering, not configuration.</p></div>
    <div class="svc-grid">
      <div class="svc-card rv"><div class="svc-icon">⚙️</div><div class="svc-title">Workflow Automation Engines</div><p class="svc-body">RPA and custom-built process orchestration that eliminates repetitive manual work at scale — rule engines, approval flows, and exception handling.</p></div>
      <div class="svc-card rv"><div class="svc-icon">🔗</div><div class="svc-title">Legacy System Modernization</div><p class="svc-body">Bridging outdated systems with modern AI layers — data extraction, API wrappers, and incremental migration without the big-bang rewrite risk.</p></div>
      <div class="svc-card rv"><div class="svc-icon">🗄️</div><div class="svc-title">Database & Data Architecture</div><p class="svc-body">High-availability database design, migration management, data warehouse builds, and real-time streaming pipelines for data-intensive operations.</p></div>
      <div class="svc-card rv"><div class="svc-icon">🔌</div><div class="svc-title">Middleware & API Development</div><p class="svc-body">Custom integration layers, event-driven microservices, and API gateways that connect your software ecosystem reliably and securely.</p></div>
      <div class="svc-card rv"><div class="svc-icon">📋</div><div class="svc-title">ERP & CRM Extensions</div><p class="svc-body">Custom modules on top of SAP, Salesforce, or Microsoft Dynamics — adding the exact functionality your team needs without replacing what works.</p></div>
      <div class="svc-card rv"><div class="svc-icon">🛡️</div><div class="svc-title">Compliance & Audit Systems</div><p class="svc-body">Automated compliance reporting, audit trail management, and regulatory workflow engines for finance, healthcare, and government sectors.</p></div>
    </div>
  </div>
</section>

<section class="sec" style="padding-top:0">
  <div class="container">
    <div class="rv"><div class="eyebrow">Why Custom?</div><h2 class="sec-title">Custom vs <span class="grad-text">Off-the-Shelf</span></h2></div>
    <div class="compare-wrap rv">
      <div class="compare-row compare-header"><p>Capability</p><p class="compare-col-head">SaaS Product</p><p class="compare-col-head ours">Custom Build</p></div>
      <div class="compare-row"><p>Fits your exact process</p><span class="no">Partial</span><span class="yes">✓ Exact fit</span></div>
      <div class="compare-row"><p>Connects to all your systems</p><span class="no">Limited connectors</span><span class="yes">✓ Full control</span></div>
      <div class="compare-row"><p>No per-seat pricing surprises</p><span class="no">Scales with cost</span><span class="yes">✓ One-time build</span></div>
      <div class="compare-row"><p>Handles your edge cases</p><span class="no">Generic only</span><span class="yes">✓ Built in</span></div>
      <div class="compare-row"><p>You own the IP</p><span class="no">Vendor-owned</span><span class="yes">✓ Fully yours</span></div>
      <div class="compare-row"><p>No vendor lock-in risk</p><span class="no">High risk</span><span class="yes">✓ Independent</span></div>
    </div>
  </div>
</section>

<section class="sec" style="padding-top:0">
  <div class="container">
    <div class="rv"><div class="eyebrow">Case Study</div><h2 class="sec-title">Problem <span class="grad-text">Solved</span></h2></div>
    <div class="cs-wrap rv">
      <div>
        <div class="eyebrow" style="margin-bottom:12px">Government Operations</div>
        <h3 style="font-family:var(--fh);font-size:28px;font-weight:800;margin-bottom:16px">Custom Permit Management System</h3>
        <p style="color:var(--t2);font-size:15px;line-height:1.75;margin-bottom:24px">A state government department was processing 12,000+ permit applications monthly using printed forms, manual data entry, and email chains. We replaced the entire workflow with a custom digital system including applicant portal, officer review queue, and automated approval routing.</p>
        <ul style="color:var(--t2);font-size:14px;line-height:2;padding-left:20px">
          <li>Integrated with existing finance and ID verification systems</li>
          <li>Digital signatures and audit-grade logging</li>
          <li>Processing time dropped from 18 days to 3 days</li>
        </ul>
      </div>
      <div class="cs-stats">
        <div class="cs-stat"><div class="cs-stat-num">12k+</div><div class="cs-stat-label">Monthly Applications</div></div>
        <div class="cs-stat"><div class="cs-stat-num">83%</div><div class="cs-stat-label">Faster Processing</div></div>
        <div class="cs-stat"><div class="cs-stat-num">3 day</div><div class="cs-stat-label">Average Turnaround</div></div>
        <div class="cs-stat"><div class="cs-stat-num">Zero</div><div class="cs-stat-label">Paper Required</div></div>
      </div>
    </div>
  </div>
</section>

<section class="sec" style="padding-top:0">
  <div class="container">
    <div class="rv"><div class="eyebrow">FAQ</div><h2 class="sec-title">Common <span class="grad-text">Questions</span></h2></div>
    <div class="faq-list">
      <div class="faq-item rv"><div class="faq-q">How do we know custom is the right choice over buying a product?</div><div class="faq-a">We ask you to walk us through your process. If 3+ key requirements can't be met by any existing product, or if the integration cost of a product exceeds the build cost, custom is almost always the right answer.</div></div>
      <div class="faq-item rv"><div class="faq-q">Can you work with our existing IT systems?</div><div class="faq-a">Yes. We specialize in connecting custom software to legacy systems — through API wrappers, database connectors, file-based integration, or screen scraping as a last resort. We work with what exists.</div></div>
      <div class="faq-item rv"><div class="faq-q">Who owns the code after the project?</div><div class="faq-a">You do. Fully. We transfer all source code, documentation, and deployment configs at project close. No licensing, no annual fees, no vendor dependency.</div></div>
      <div class="faq-item rv"><div class="faq-q">What if requirements change during the project?</div><div class="faq-a">We build in a change management buffer and use agile sprints so requirements can evolve. Major scope changes are scoped transparently — no surprises on either side.</div></div>
    </div>
  </div>
</section>

<section class="sec" style="padding-top:0">
  <div class="container">
    <div class="cta-band rv">
      <div class="eyebrow" style="margin-bottom:16px">Ready to Build?</div>
      <h2 style="font-family:var(--fh);font-size:clamp(32px,4vw,52px);font-weight:800;margin-bottom:16px">Your Process,<br><span class="grad-text">Engineered Precisely</span></h2>
      <p style="color:var(--t2);font-size:17px;max-width:520px;margin:0 auto 40px;line-height:1.7">Describe your bottleneck. We'll tell you exactly how we'd build around it.</p>
      <button class="btn-p" onclick="openModal()">Start Custom Software Discussion</button>
    </div>
  </div>
</section>
</main>

<footer>
  <div class="container">
    <div class="foot-grid">
      <div class="foot-brand"><a class="logo" href="index.php">Digi9</a><p>Engineering precise software solutions for operational challenges that demand custom thinking.</p></div>
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
    <div class="modal-step active" id="s1"><div class="step-title">Describe Your Challenge</div><div class="step-sub">Tell us about the operational bottleneck you need solved.</div><div class="form-field"><label>Full Name</label><input id="m-name" type="text" placeholder="Your name"></div><div class="form-field"><label>Email</label><input id="m-email" type="email" placeholder="you@company.com"></div><div class="form-field"><label>Phone</label><input id="m-phone" type="tel" placeholder="+91 98765 43210"></div><button class="btn-p" style="width:100%" onclick="nextStep(2)">Continue →</button></div>
    <div class="modal-step" id="s2"><div class="step-title">What do you need built?</div><div class="step-sub">Select all that apply.</div><div class="chips"><div class="chip" onclick="toggleChip(this)">Workflow Automation</div><div class="chip" onclick="toggleChip(this)">Legacy System Integration</div><div class="chip" onclick="toggleChip(this)">Data Pipeline</div><div class="chip" onclick="toggleChip(this)">Custom ERP Module</div><div class="chip" onclick="toggleChip(this)">API / Middleware</div><div class="chip" onclick="toggleChip(this)">Compliance System</div><div class="chip" onclick="toggleChip(this)">Not sure yet</div></div><button class="btn-p" style="width:100%" onclick="nextStep(3)">Continue →</button></div>
    <div class="modal-step" id="s3"><div class="step-title">Project Details</div><div class="step-sub">The more context, the better our response.</div><div class="form-field"><label>Company</label><input id="m-company" type="text" placeholder="Your company name"></div><div class="form-field"><label>Timeline</label><select id="m-timeline"><option value="">Select timeline</option><option>ASAP</option><option>1-3 months</option><option>3-6 months</option><option>Planning stage</option></select></div><div class="form-field"><label>Describe the Problem</label><textarea id="m-desc" rows="4" placeholder="What process is broken? What's the cost of not solving it?"></textarea></div><button class="btn-p" style="width:100%" onclick="nextStep(4)">Review →</button></div>
    <div class="modal-step" id="s4"><div class="step-title">Confirm Details</div><div class="step-sub">We'll reach out within 24 hours.</div><div id="summary" style="background:var(--bg2);border-radius:16px;padding:24px;margin-bottom:24px;font-size:14px;line-height:2;color:var(--t2)"></div><button class="btn-p" style="width:100%" onclick="submitModal()">Submit Request</button></div>
    <div class="modal-step" id="s5"><div style="text-align:center;padding:32px 0"><div style="font-size:64px;margin-bottom:24px">⚙️</div><div class="step-title">Challenge Received!</div><p style="color:var(--t2);line-height:1.7;margin-top:8px">Our engineering team will review your problem and reach out with an approach within 24 hours.</p></div></div>
  </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
<script>
// Hologram canvas — rotating wireframe cubes in depth
(function(){
  const cv=document.getElementById('bg-canvas');
  const ctx=cv.getContext('2d');
  let W,H,cubes=[];
  function resize(){W=cv.width=window.innerWidth;H=cv.height=window.innerHeight}
  resize();window.addEventListener('resize',resize);
  function Cube(){
    this.x=Math.random()*W;this.y=Math.random()*H;
    this.size=Math.random()*40+15;
    this.rx=Math.random()*Math.PI*2;this.ry=Math.random()*Math.PI*2;
    this.drx=(Math.random()-.5)*.008;this.dry=(Math.random()-.5)*.008;
    this.alpha=Math.random()*.15+.05;
    this.color=Math.random()<.5?'245,158,11':'124,58,237';
  }
  for(let i=0;i<18;i++)cubes.push(new Cube());
  function project(x,y,z,ox,oy){
    const fov=400;const d=fov/(fov+z);
    return{x:ox+x*d,y:oy+y*d};
  }
  function drawCube(cube){
    const s=cube.size;
    const cosX=Math.cos(cube.rx),sinX=Math.sin(cube.rx);
    const cosY=Math.cos(cube.ry),sinY=Math.sin(cube.ry);
    const verts=[[-s,-s,-s],[s,-s,-s],[s,s,-s],[-s,s,-s],[-s,-s,s],[s,-s,s],[s,s,s],[-s,s,s]];
    // rotate
    const rv=verts.map(([x,y,z])=>{
      // rotate Y
      let nx=x*cosY+z*sinY,nz=-x*sinY+z*cosY,ny=y;
      // rotate X
      let ny2=ny*cosX-nz*sinX,nz2=ny*sinX+nz*cosX;
      return[nx,ny2,nz2];
    });
    const pv=rv.map(([x,y,z])=>project(x,y,z,cube.x,cube.y));
    const edges=[[0,1],[1,2],[2,3],[3,0],[4,5],[5,6],[6,7],[7,4],[0,4],[1,5],[2,6],[3,7]];
    ctx.strokeStyle=`rgba(${cube.color},${cube.alpha})`;
    ctx.lineWidth=.8;
    edges.forEach(([a,b])=>{
      ctx.beginPath();ctx.moveTo(pv[a].x,pv[a].y);ctx.lineTo(pv[b].x,pv[b].y);ctx.stroke();
    });
    cube.rx+=cube.drx;cube.ry+=cube.dry;
  }
  function draw(){
    ctx.clearRect(0,0,W,H);
    // scanlines
    for(let y=0;y<H;y+=4){ctx.fillStyle='rgba(3,3,7,.04)';ctx.fillRect(0,y,W,2)}
    cubes.forEach(drawCube);
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
gsap.utils.toArray('.svc-card').forEach((c,i)=>{ScrollTrigger.create({trigger:c,start:'top 85%',onEnter:()=>{gsap.from(c,{duration:.7,y:50,opacity:0,delay:i%3*.1,ease:'power2.out'})}})});
document.querySelectorAll('.svc-card').forEach(c=>{c.addEventListener('mousemove',e=>{const r=c.getBoundingClientRect();const x=(e.clientX-r.left)/r.width-.5;const y=(e.clientY-r.top)/r.height-.5;c.style.transform=`perspective(700px) rotateY(${x*10}deg) rotateX(${-y*10}deg) translateZ(8px)`});c.addEventListener('mouseleave',()=>{c.style.transform=''})});
document.querySelectorAll('.faq-q').forEach(q=>{q.addEventListener('click',()=>{q.parentElement.classList.toggle('open')})});
let step=1;
function openModal(){document.getElementById('modal').classList.add('show');document.body.style.overflow='hidden'}
function closeModal(){document.getElementById('modal').classList.remove('show');document.body.style.overflow=''}
function nextStep(n){document.getElementById('s'+step).classList.remove('active');document.getElementById('d'+step).classList.remove('active');step=n;document.getElementById('s'+step).classList.add('active');document.getElementById('d'+step).classList.add('active');if(n===4){const chips=[...document.querySelectorAll('.chip.sel')].map(c=>c.textContent).join(', ');document.getElementById('summary').innerHTML=`<b>Name:</b> ${document.getElementById('m-name').value||'—'}<br><b>Email:</b> ${document.getElementById('m-email').value||'—'}<br><b>Needs:</b> ${chips||'—'}<br><b>Company:</b> ${document.getElementById('m-company').value||'—'}<br><b>Timeline:</b> ${document.getElementById('m-timeline').value||'—'}`}}
function toggleChip(el){el.classList.toggle('sel')}
function submitModal(){nextStep(5)}
document.getElementById('modal').addEventListener('click',e=>{if(e.target===document.getElementById('modal'))closeModal()});
window.openModal=openModal;
</script>
</body>
</html>
