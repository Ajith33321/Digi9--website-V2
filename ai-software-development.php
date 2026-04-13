<?php
$pageTitle = "AI Software Development Services | Digi9";
$metaDesc  = "Custom AI software development services in Bangalore. We build LLM-based apps, machine learning systems, and intelligent automation tools.";
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
#cur{position:fixed;width:8px;height:8px;background:var(--c);border-radius:50%;pointer-events:none;z-index:9999;transform:translate(-50%,-50%);transition:transform .1s,background .2s}
#cur2{position:fixed;width:32px;height:32px;border:1.5px solid var(--p);border-radius:50%;pointer-events:none;z-index:9998;transform:translate(-50%,-50%);transition:transform .08s,width .2s,height .2s;mix-blend-mode:screen}
#prog{position:fixed;top:0;left:0;height:2px;background:linear-gradient(90deg,var(--p),var(--c));z-index:1000;width:0%;transition:width .1s}
nav{position:fixed;top:0;left:0;right:0;height:var(--nav);z-index:900;display:flex;align-items:center;justify-content:space-between;padding:0 48px;background:rgba(3,3,7,.7);backdrop-filter:blur(20px);border-bottom:1px solid var(--br)}
.logo{font-family:var(--fh);font-size:24px;font-weight:800;background:linear-gradient(135deg,var(--p),var(--c));-webkit-background-clip:text;-webkit-text-fill-color:transparent;text-decoration:none}
.nav-links{display:flex;gap:32px;list-style:none}
.nav-links a{color:var(--t2);font-size:14px;font-weight:500;text-decoration:none;transition:color .2s}
.nav-links a:hover{color:var(--t)}
.nav-cta{background:linear-gradient(135deg,var(--p),var(--b));color:#fff;border:none;padding:10px 24px;border-radius:100px;font-size:14px;font-weight:600;cursor:pointer;font-family:var(--fb)}
main{position:relative;z-index:1}
section{position:relative;z-index:1}
.container{max-width:1200px;margin:0 auto;padding:0 24px}
/* hero */
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
/* sections */
.sec{padding:120px 0}
.sec-title{font-family:var(--fh);font-size:clamp(32px,4vw,52px);font-weight:800;margin-bottom:16px}
.sec-sub{color:var(--t2);font-size:17px;max-width:600px;line-height:1.7;margin-bottom:64px}
/* capabilities grid */
.cap-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:24px}
@media(max-width:900px){.cap-grid{grid-template-columns:1fr 1fr}}
@media(max-width:600px){.cap-grid{grid-template-columns:1fr}.hero-title{font-size:36px}.nav-links{display:none}}
.cap-card{background:var(--surf);border:1px solid var(--br);border-radius:20px;padding:32px;transition:transform .3s,border-color .3s,box-shadow .3s;cursor:default}
.cap-card:hover{transform:translateY(-6px) rotateX(2deg);border-color:var(--br2);box-shadow:0 20px 60px rgba(124,58,237,.15)}
.cap-icon{width:52px;height:52px;border-radius:14px;display:flex;align-items:center;justify-content:center;font-size:22px;margin-bottom:20px;background:linear-gradient(135deg,rgba(124,58,237,.2),rgba(0,212,255,.1))}
.cap-title{font-family:var(--fh);font-size:18px;font-weight:700;margin-bottom:10px}
.cap-body{color:var(--t2);font-size:14px;line-height:1.7}
/* use cases */
.uc-grid{display:grid;grid-template-columns:repeat(2,1fr);gap:32px}
@media(max-width:700px){.uc-grid{grid-template-columns:1fr}}
.uc-item{display:flex;gap:20px;padding:28px;background:var(--surf);border-radius:16px;border:1px solid var(--br);transition:border-color .2s}
.uc-item:hover{border-color:var(--p)}
.uc-num{font-family:var(--fh);font-size:42px;font-weight:800;color:var(--br2);min-width:60px;line-height:1}
.uc-text h3{font-family:var(--fh);font-size:17px;font-weight:700;margin-bottom:8px}
.uc-text p{color:var(--t2);font-size:14px;line-height:1.7}
/* tech stack */
.tech-row{display:flex;flex-wrap:wrap;gap:12px;margin-top:40px}
.tech-tag{background:var(--surf2);border:1px solid var(--br);border-radius:100px;padding:8px 20px;font-size:13px;font-weight:500;color:var(--t2);transition:border-color .2s,color .2s}
.tech-tag:hover{border-color:var(--c);color:var(--c)}
/* case study */
.cs-wrap{background:var(--surf);border:1px solid var(--br);border-radius:24px;padding:64px;display:grid;grid-template-columns:1fr 1fr;gap:64px;align-items:center}
@media(max-width:800px){.cs-wrap{grid-template-columns:1fr;padding:40px}}
.cs-stat{text-align:center;padding:32px;background:var(--bg2);border-radius:16px;border:1px solid var(--br)}
.cs-stat-num{font-family:var(--fh);font-size:48px;font-weight:800;background:linear-gradient(135deg,var(--p),var(--c));-webkit-background-clip:text;-webkit-text-fill-color:transparent}
.cs-stat-label{color:var(--t2);font-size:14px;margin-top:4px}
.cs-stats{display:grid;grid-template-columns:1fr 1fr;gap:16px}
/* faq */
.faq-list{max-width:780px}
.faq-item{border-bottom:1px solid var(--br);padding:24px 0}
.faq-q{font-family:var(--fh);font-size:17px;font-weight:700;cursor:pointer;display:flex;justify-content:space-between;align-items:center;gap:16px}
.faq-q::after{content:'+';font-size:22px;color:var(--p);transition:transform .3s;flex-shrink:0}
.faq-item.open .faq-q::after{transform:rotate(45deg)}
.faq-a{color:var(--t2);font-size:15px;line-height:1.75;max-height:0;overflow:hidden;transition:max-height .4s ease,padding .3s}
.faq-item.open .faq-a{max-height:300px;padding-top:16px}
/* cta */
.cta-band{background:linear-gradient(135deg,rgba(124,58,237,.12),rgba(0,212,255,.06));border:1px solid var(--br);border-radius:32px;padding:100px 64px;text-align:center}
@media(max-width:600px){.cta-band{padding:60px 24px}}
/* footer */
footer{background:var(--bg2);border-top:1px solid var(--br);padding:64px 0 32px}
.foot-grid{display:grid;grid-template-columns:2fr 1fr 1fr 1fr;gap:48px;margin-bottom:48px}
@media(max-width:800px){.foot-grid{grid-template-columns:1fr 1fr}}
@media(max-width:500px){.foot-grid{grid-template-columns:1fr}}
.foot-brand p{color:var(--t2);font-size:14px;line-height:1.7;margin-top:12px;max-width:280px}
.foot-col h4{font-family:var(--fh);font-size:13px;font-weight:700;letter-spacing:.08em;text-transform:uppercase;color:var(--t3);margin-bottom:16px}
.foot-col a{display:block;color:var(--t2);font-size:14px;text-decoration:none;margin-bottom:10px;transition:color .2s}
.foot-col a:hover{color:var(--c)}
.foot-bottom{border-top:1px solid var(--br);padding-top:24px;display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap;gap:12px}
.foot-bottom p{color:var(--t3);font-size:13px}
/* reveal */
.rv{opacity:0;transform:translateY(40px);transition:opacity .7s ease,transform .7s ease}
.rv.in{opacity:1;transform:none}
/* modal */
.modal-overlay{position:fixed;inset:0;background:rgba(3,3,7,.92);z-index:2000;display:flex;align-items:center;justify-content:center;padding:24px;opacity:0;pointer-events:none;transition:opacity .3s}
.modal-overlay.show{opacity:1;pointer-events:all}
.modal{background:var(--surf);border:1px solid var(--br2);border-radius:28px;padding:48px;max-width:560px;width:100%;position:relative;max-height:90vh;overflow-y:auto}
.modal-close{position:absolute;top:20px;right:20px;background:none;border:none;color:var(--t3);font-size:24px;cursor:pointer;line-height:1}
.modal-step{display:none}.modal-step.active{display:block}
.step-title{font-family:var(--fh);font-size:24px;font-weight:800;margin-bottom:8px}
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
<!-- HERO -->
<section class="hero">
  <div class="container">
    <div class="eyebrow rv">AI Software Development</div>
    <h1 class="hero-title rv">Build Intelligence<br>Into <span class="grad-text">Everything</span></h1>
    <p class="hero-sub rv">We engineer LLM-powered systems, machine learning pipelines, and intelligent automation that transforms how your business operates — from prototype to production at scale.</p>
    <div class="btn-row rv">
      <button class="btn-p" onclick="openModal()">Start Your AI Project</button>
      <button class="btn-o" onclick="document.getElementById('capabilities').scrollIntoView({behavior:'smooth'})">Explore Capabilities</button>
    </div>
  </div>
</section>

<!-- CAPABILITIES -->
<section class="sec" id="capabilities">
  <div class="container">
    <div class="rv">
      <div class="eyebrow">What We Build</div>
      <h2 class="sec-title">AI Engineering <span class="grad-text">Capabilities</span></h2>
      <p class="sec-sub">From raw ML research to production-grade AI systems — we handle the full engineering lifecycle.</p>
    </div>
    <div class="cap-grid">
      <div class="cap-card rv"><div class="cap-icon">🧠</div><div class="cap-title">LLM Integration & RAG</div><p class="cap-body">Connect large language models to your proprietary data with retrieval-augmented generation pipelines for accurate, grounded AI responses.</p></div>
      <div class="cap-card rv"><div class="cap-icon">📈</div><div class="cap-title">Predictive Analytics</div><p class="cap-body">ML models that forecast demand, detect anomalies, and surface opportunities hidden in your operational data streams.</p></div>
      <div class="cap-card rv"><div class="cap-icon">🤖</div><div class="cap-title">Intelligent Automation</div><p class="cap-body">AI agents and workflow engines that handle multi-step tasks, route decisions, and escalate exceptions without human intervention.</p></div>
      <div class="cap-card rv"><div class="cap-icon">💬</div><div class="cap-title">NLP & Conversation AI</div><p class="cap-body">Semantic search, document understanding, entity extraction, and enterprise chatbots that go far beyond scripted flows.</p></div>
      <div class="cap-card rv"><div class="cap-icon">👁️</div><div class="cap-title">Computer Vision</div><p class="cap-body">Visual inspection, OCR, object detection, and video analytics systems deployed at the edge or in the cloud.</p></div>
      <div class="cap-card rv"><div class="cap-icon">🔗</div><div class="cap-title">ML Model Deployment</div><p class="cap-body">End-to-end MLOps: model versioning, monitoring, A/B testing, and continuous retraining pipelines on AWS, GCP, or Azure.</p></div>
    </div>
  </div>
</section>

<!-- USE CASES -->
<section class="sec" style="padding-top:0">
  <div class="container">
    <div class="rv">
      <div class="eyebrow">Real-World Impact</div>
      <h2 class="sec-title">Use Cases We <span class="grad-text">Solve</span></h2>
    </div>
    <div class="uc-grid">
      <div class="uc-item rv"><div class="uc-num">01</div><div class="uc-text"><h3>Document Intelligence</h3><p>Automated extraction, classification, and processing of contracts, invoices, and compliance documents — eliminating manual data entry.</p></div></div>
      <div class="uc-item rv"><div class="uc-num">02</div><div class="uc-text"><h3>Internal Knowledge Copilot</h3><p>AI assistant trained on your SOPs, wikis, and ticketing history so teams get instant, accurate answers instead of hunting through docs.</p></div></div>
      <div class="uc-item rv"><div class="uc-num">03</div><div class="uc-text"><h3>Churn & Risk Prediction</h3><p>ML models that score customer health, flag at-risk accounts, and trigger intervention workflows before revenue is lost.</p></div></div>
      <div class="uc-item rv"><div class="uc-num">04</div><div class="uc-text"><h3>AI-Powered Customer Support</h3><p>Multi-tier support automation that resolves Tier-1 tickets, routes Tier-2 intelligently, and drafts responses for agents.</p></div></div>
      <div class="uc-item rv"><div class="uc-num">05</div><div class="uc-text"><h3>Quality Control Vision</h3><p>Real-time visual defect detection on production lines with sub-100ms inference latency using edge-deployed models.</p></div></div>
      <div class="uc-item rv"><div class="uc-num">06</div><div class="uc-text"><h3>Demand Forecasting</h3><p>Time-series models that predict inventory needs, staffing requirements, and resource allocation weeks in advance.</p></div></div>
    </div>
  </div>
</section>

<!-- TECH STACK -->
<section class="sec" style="padding-top:0">
  <div class="container">
    <div class="rv">
      <div class="eyebrow">Technology</div>
      <h2 class="sec-title">Our AI <span class="grad-text">Stack</span></h2>
      <p class="sec-sub">We work with best-in-class tools across the full AI engineering spectrum.</p>
    </div>
    <div class="tech-row rv">
      <span class="tech-tag">Python</span><span class="tech-tag">PyTorch</span><span class="tech-tag">TensorFlow</span><span class="tech-tag">LangChain</span><span class="tech-tag">LlamaIndex</span><span class="tech-tag">OpenAI API</span><span class="tech-tag">Anthropic Claude</span><span class="tech-tag">Hugging Face</span><span class="tech-tag">Pinecone</span><span class="tech-tag">Weaviate</span><span class="tech-tag">FastAPI</span><span class="tech-tag">AWS SageMaker</span><span class="tech-tag">Google Vertex AI</span><span class="tech-tag">MLflow</span><span class="tech-tag">Kubernetes</span><span class="tech-tag">Docker</span>
    </div>
  </div>
</section>

<!-- CASE STUDY -->
<section class="sec" style="padding-top:0">
  <div class="container">
    <div class="rv">
      <div class="eyebrow">Case Study</div>
      <h2 class="sec-title">AI in <span class="grad-text">Action</span></h2>
    </div>
    <div class="cs-wrap rv">
      <div>
        <div class="eyebrow" style="margin-bottom:12px">Healthcare Operations</div>
        <h3 style="font-family:var(--fh);font-size:28px;font-weight:800;margin-bottom:16px">LLM-Powered Clinical Document Processor</h3>
        <p style="color:var(--t2);font-size:15px;line-height:1.75;margin-bottom:24px">A major hospital network was spending 4,200 hours/month manually extracting data from unstructured clinical notes. We built a RAG pipeline with fine-tuned extraction models that automated 94% of the workflow, feeding directly into their EHR system.</p>
        <ul style="color:var(--t2);font-size:14px;line-height:2;padding-left:20px">
          <li>12-week build from requirements to production</li>
          <li>HIPAA-compliant deployment on private cloud</li>
          <li>Human-in-loop review for edge cases</li>
        </ul>
      </div>
      <div class="cs-stats">
        <div class="cs-stat"><div class="cs-stat-num">94%</div><div class="cs-stat-label">Automation Rate</div></div>
        <div class="cs-stat"><div class="cs-stat-num">4,200h</div><div class="cs-stat-label">Saved Monthly</div></div>
        <div class="cs-stat"><div class="cs-stat-num">12wk</div><div class="cs-stat-label">Build Time</div></div>
        <div class="cs-stat"><div class="cs-stat-num">3.1x</div><div class="cs-stat-label">ROI Year One</div></div>
      </div>
    </div>
  </div>
</section>

<!-- FAQ -->
<section class="sec" style="padding-top:0">
  <div class="container">
    <div class="rv"><div class="eyebrow">FAQ</div><h2 class="sec-title">Common <span class="grad-text">Questions</span></h2></div>
    <div class="faq-list">
      <div class="faq-item rv"><div class="faq-q">Do we need large datasets to start an AI project?</div><div class="faq-a">Not always. LLM-based solutions like RAG work well with existing documents. For predictive ML, we can assess your data maturity early and advise on data collection strategies if needed.</div></div>
      <div class="faq-item rv"><div class="faq-q">How do you ensure AI accuracy and reliability?</div><div class="faq-a">We build evaluation frameworks specific to your use case, set accuracy baselines before deployment, and implement monitoring systems that alert on model drift or degradation over time.</div></div>
      <div class="faq-item rv"><div class="faq-q">Can AI systems connect to our existing software?</div><div class="faq-a">Yes. We specialize in integrating AI layers with existing ERP, CRM, and custom software through APIs, webhooks, and database connectors — no rip-and-replace required.</div></div>
      <div class="faq-item rv"><div class="faq-q">What does a typical AI engagement look like?</div><div class="faq-a">Discovery (2 weeks) → Proof of Concept (4 weeks) → Production Build (6-12 weeks) → Monitoring & Improvement (ongoing). We structure milestones so you see value before full investment.</div></div>
      <div class="faq-item rv"><div class="faq-q">Is our data safe during development?</div><div class="faq-a">We sign NDAs before discovery, use isolated environments, and can work entirely within your private cloud infrastructure. No training data leaves your control without explicit approval.</div></div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="sec" style="padding-top:0">
  <div class="container">
    <div class="cta-band rv">
      <div class="eyebrow" style="margin-bottom:16px">Ready to Build?</div>
      <h2 style="font-family:var(--fh);font-size:clamp(32px,4vw,52px);font-weight:800;margin-bottom:16px">Turn Your Data Into<br><span class="grad-text">Competitive Advantage</span></h2>
      <p style="color:var(--t2);font-size:17px;max-width:520px;margin:0 auto 40px;line-height:1.7">Tell us your operational challenge. We'll show you exactly how AI can solve it.</p>
      <button class="btn-p" onclick="openModal()">Start AI Project Consultation</button>
    </div>
  </div>
</section>
</main>

<footer>
  <div class="container">
    <div class="foot-grid">
      <div class="foot-brand"><a class="logo" href="index.php">Digi9</a><p>Engineering intelligent systems for enterprises that demand more from their software.</p></div>
      <div class="foot-col"><h4>Services</h4><a href="ai-software-development.php">AI Development</a><a href="web-application-development.php">Web Apps</a><a href="mobile-application-development.php">Mobile Apps</a><a href="custom-software.php">Custom Software</a></div>
      <div class="foot-col"><h4>Company</h4><a href="about.php">About</a><a href="work.php">Work</a><a href="insights.php">Insights</a><a href="contact.php">Contact</a></div>
      <div class="foot-col"><h4>Contact</h4><a href="mailto:hello@digi9.in">hello@digi9.in</a><a href="tel:+919999999999">+91 99999 99999</a><a href="contact.php">Bangalore, India</a></div>
    </div>
    <div class="foot-bottom"><p>© 2025 Digi9. All rights reserved.</p><p style="color:var(--t3);font-size:13px">Crafted with intent.</p></div>
  </div>
</footer>

<!-- MODAL -->
<div class="modal-overlay" id="modal">
  <div class="modal">
    <button class="modal-close" onclick="closeModal()">×</button>
    <div class="progress-dots"><div class="dot active" id="d1"></div><div class="dot" id="d2"></div><div class="dot" id="d3"></div><div class="dot" id="d4"></div><div class="dot" id="d5"></div></div>
    <div class="modal-step active" id="s1"><div class="step-title">Start a Project</div><div class="step-sub">Let's build something intelligent together. Tell us about yourself.</div><div class="form-field"><label>Full Name</label><input id="m-name" type="text" placeholder="Your name"></div><div class="form-field"><label>Email</label><input id="m-email" type="email" placeholder="you@company.com"></div><div class="form-field"><label>Phone</label><input id="m-phone" type="tel" placeholder="+91 98765 43210"></div><button class="btn-p" style="width:100%" onclick="nextStep(2)">Continue →</button></div>
    <div class="modal-step" id="s2"><div class="step-title">What are you building?</div><div class="step-sub">Select the AI capability you need.</div><div class="chips"><div class="chip" onclick="toggleChip(this)">LLM / RAG System</div><div class="chip" onclick="toggleChip(this)">ML Predictive Model</div><div class="chip" onclick="toggleChip(this)">Intelligent Automation</div><div class="chip" onclick="toggleChip(this)">Computer Vision</div><div class="chip" onclick="toggleChip(this)">NLP / Document AI</div><div class="chip" onclick="toggleChip(this)">AI Chatbot</div><div class="chip" onclick="toggleChip(this)">MLOps / Deployment</div><div class="chip" onclick="toggleChip(this)">Other</div></div><button class="btn-p" style="width:100%" onclick="nextStep(3)">Continue →</button></div>
    <div class="modal-step" id="s3"><div class="step-title">Project Details</div><div class="step-sub">A little more context helps us prepare better.</div><div class="form-field"><label>Company / Organisation</label><input id="m-company" type="text" placeholder="Your company name"></div><div class="form-field"><label>Timeline</label><select id="m-timeline"><option value="">Select timeline</option><option>ASAP (within 4 weeks)</option><option>1-3 months</option><option>3-6 months</option><option>Planning stage</option></select></div><div class="form-field"><label>Brief Description</label><textarea id="m-desc" rows="3" placeholder="Describe your AI use case..."></textarea></div><button class="btn-p" style="width:100%" onclick="nextStep(4)">Review →</button></div>
    <div class="modal-step" id="s4"><div class="step-title">Confirm Details</div><div class="step-sub">We'll reach out within 24 hours.</div><div id="summary" style="background:var(--bg2);border-radius:16px;padding:24px;margin-bottom:24px;font-size:14px;line-height:2;color:var(--t2)"></div><button class="btn-p" style="width:100%" onclick="submitModal()">Submit Request</button></div>
    <div class="modal-step" id="s5"><div style="text-align:center;padding:32px 0"><div style="font-size:64px;margin-bottom:24px">🚀</div><div class="step-title">You're In!</div><p style="color:var(--t2);line-height:1.7;margin-top:8px">Our AI team will review your project and reach out within 24 hours with a tailored approach.</p></div></div>
  </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
<script>
// Neural Cosmos Canvas
(function(){
  const cv=document.getElementById('bg-canvas');
  const ctx=cv.getContext('2d');
  let W,H,nodes=[],mx=0,my=0;
  function resize(){W=cv.width=window.innerWidth;H=cv.height=window.innerHeight}
  resize();window.addEventListener('resize',resize);
  function Node(){
    this.x=Math.random()*W;this.y=Math.random()*H;
    this.vx=(Math.random()-.5)*.4;this.vy=(Math.random()-.5)*.4;
    this.r=Math.random()*2+1;this.pulse=Math.random()*Math.PI*2;
    this.layer=Math.floor(Math.random()*3);
  }
  for(let i=0;i<110;i++)nodes.push(new Node());
  window.addEventListener('mousemove',e=>{mx=e.clientX;my=e.clientY});
  function draw(){
    ctx.clearRect(0,0,W,H);
    // subtle deep grid
    ctx.strokeStyle='rgba(124,58,237,.03)';
    ctx.lineWidth=1;
    for(let x=0;x<W;x+=80){ctx.beginPath();ctx.moveTo(x,0);ctx.lineTo(x,H);ctx.stroke()}
    for(let y=0;y<H;y+=80){ctx.beginPath();ctx.moveTo(0,y);ctx.lineTo(W,y);ctx.stroke()}
    // connections
    for(let i=0;i<nodes.length;i++){
      for(let j=i+1;j<nodes.length;j++){
        const dx=nodes[i].x-nodes[j].x,dy=nodes[i].y-nodes[j].y;
        const d=Math.sqrt(dx*dx+dy*dy);
        if(d<160){
          const alpha=(1-d/160)*.25;
          const grd=ctx.createLinearGradient(nodes[i].x,nodes[i].y,nodes[j].x,nodes[j].y);
          grd.addColorStop(0,`rgba(124,58,237,${alpha})`);
          grd.addColorStop(1,`rgba(0,212,255,${alpha})`);
          ctx.beginPath();ctx.moveTo(nodes[i].x,nodes[i].y);ctx.lineTo(nodes[j].x,nodes[j].y);
          ctx.strokeStyle=grd;ctx.lineWidth=.8;ctx.stroke();
        }
      }
    }
    // mouse connections
    nodes.forEach(n=>{
      const dx=n.x-mx,dy=n.y-my,d=Math.sqrt(dx*dx+dy*dy);
      if(d<200){
        const alpha=(1-d/200)*.6;
        ctx.beginPath();ctx.moveTo(n.x,n.y);ctx.lineTo(mx,my);
        ctx.strokeStyle=`rgba(0,212,255,${alpha})`;ctx.lineWidth=1;ctx.stroke();
      }
    });
    // nodes
    nodes.forEach(n=>{
      n.pulse+=.02;
      const glow=Math.sin(n.pulse)*.5+.5;
      // glow halo
      const g=ctx.createRadialGradient(n.x,n.y,0,n.x,n.y,n.r*6);
      const cols=['rgba(124,58,237,','rgba(59,130,246,','rgba(0,212,255,'];
      g.addColorStop(0,cols[n.layer]+(0.6*glow)+')');
      g.addColorStop(1,cols[n.layer]+'0)');
      ctx.beginPath();ctx.arc(n.x,n.y,n.r*6,0,Math.PI*2);
      ctx.fillStyle=g;ctx.fill();
      // core
      ctx.beginPath();ctx.arc(n.x,n.y,n.r,0,Math.PI*2);
      ctx.fillStyle=`rgba(255,255,255,${.7+glow*.3})`;ctx.fill();
      // move
      n.x+=n.vx;n.y+=n.vy;
      if(n.x<0)n.x=W;if(n.x>W)n.x=0;
      if(n.y<0)n.y=H;if(n.y>H)n.y=0;
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

// scroll progress
window.addEventListener('scroll',()=>{const p=window.scrollY/(document.body.scrollHeight-window.innerHeight)*100;document.getElementById('prog').style.width=p+'%'});

// GSAP
gsap.registerPlugin(ScrollTrigger);
gsap.from('.hero .rv',{duration:1.2,y:60,opacity:0,stagger:.15,ease:'power3.out',delay:.3});
document.querySelectorAll('.rv').forEach(el=>{
  if(el.closest('.hero'))return;
  ScrollTrigger.create({trigger:el,start:'top 85%',onEnter:()=>el.classList.add('in')});
});
gsap.utils.toArray('.cap-card').forEach((card,i)=>{
  ScrollTrigger.create({trigger:card,start:'top 85%',onEnter:()=>{
    gsap.from(card,{duration:.7,y:50,rotateX:15,opacity:0,delay:i%3*.1,ease:'power2.out'});
  }});
});

// 3D tilt on cards
document.querySelectorAll('.cap-card').forEach(card=>{
  card.addEventListener('mousemove',e=>{
    const r=card.getBoundingClientRect();
    const x=(e.clientX-r.left)/r.width-.5;
    const y=(e.clientY-r.top)/r.height-.5;
    card.style.transform=`perspective(700px) rotateY(${x*10}deg) rotateX(${-y*10}deg) translateZ(8px)`;
  });
  card.addEventListener('mouseleave',()=>{card.style.transform=''});
});

// FAQ
document.querySelectorAll('.faq-q').forEach(q=>{
  q.addEventListener('click',()=>{q.parentElement.classList.toggle('open')});
});

// Modal
let step=1;
function openModal(){document.getElementById('modal').classList.add('show');document.body.style.overflow='hidden'}
function closeModal(){document.getElementById('modal').classList.remove('show');document.body.style.overflow=''}
function nextStep(n){
  document.getElementById('s'+step).classList.remove('active');
  document.getElementById('d'+step).classList.remove('active');
  step=n;
  document.getElementById('s'+step).classList.add('active');
  document.getElementById('d'+step).classList.add('active');
  if(n===4){
    const chips=[...document.querySelectorAll('.chip.sel')].map(c=>c.textContent).join(', ');
    document.getElementById('summary').innerHTML=`<b>Name:</b> ${document.getElementById('m-name').value||'—'}<br><b>Email:</b> ${document.getElementById('m-email').value||'—'}<br><b>Phone:</b> ${document.getElementById('m-phone').value||'—'}<br><b>Services:</b> ${chips||'—'}<br><b>Company:</b> ${document.getElementById('m-company').value||'—'}<br><b>Timeline:</b> ${document.getElementById('m-timeline').value||'—'}`;
  }
}
function toggleChip(el){el.classList.toggle('sel')}
function submitModal(){nextStep(5)}
document.getElementById('modal').addEventListener('click',e=>{if(e.target===document.getElementById('modal'))closeModal()});
window.openModal=openModal;
</script>
</body>
</html>
