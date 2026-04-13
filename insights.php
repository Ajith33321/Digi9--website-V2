<?php
$pageTitle = "Insights — AI & Custom Software Engineering | Digi9";
$metaDesc  = "Explore the latest insights on AI integration, custom software engineering, and digital transformation for operational success. Digi9's engineering perspective.";
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
.hero{min-height:60vh;display:flex;align-items:center;padding-top:var(--nav)}
.eyebrow{font-size:12px;font-weight:600;letter-spacing:.12em;text-transform:uppercase;color:var(--c);margin-bottom:16px}
.hero-title{font-family:var(--fh);font-size:clamp(42px,6vw,80px);font-weight:800;line-height:1.05;margin-bottom:20px}
.grad-text{background:linear-gradient(135deg,var(--p),var(--c));-webkit-background-clip:text;-webkit-text-fill-color:transparent}
.hero-sub{font-size:18px;color:var(--t2);max-width:560px;line-height:1.7}
.sec{padding:80px 0}
.sec-title{font-family:var(--fh);font-size:clamp(28px,3.5vw,44px);font-weight:800;margin-bottom:16px}
/* filter bar */
.filter-bar{display:flex;gap:8px;flex-wrap:wrap;margin-bottom:48px}
.filter-btn{padding:8px 20px;border-radius:100px;border:1px solid var(--br);background:var(--surf);color:var(--t2);font-size:13px;font-weight:500;cursor:pointer;transition:all .2s;font-family:var(--fb)}
.filter-btn.active,.filter-btn:hover{background:var(--p);border-color:var(--p);color:#fff}
/* featured article */
.featured{display:grid;grid-template-columns:1fr 1fr;gap:48px;align-items:center;margin-bottom:64px;background:var(--surf);border:1px solid var(--br);border-radius:24px;padding:48px;transition:border-color .3s}
.featured:hover{border-color:var(--br2)}
@media(max-width:800px){.featured{grid-template-columns:1fr;padding:32px}}
.feat-thumb{height:280px;background:linear-gradient(135deg,rgba(124,58,237,.15),rgba(0,212,255,.05));border-radius:16px;display:flex;align-items:center;justify-content:center;font-size:80px;border:1px solid var(--br)}
.feat-label{display:inline-block;background:var(--p);color:#fff;padding:4px 14px;border-radius:100px;font-size:11px;font-weight:700;letter-spacing:.08em;text-transform:uppercase;margin-bottom:16px}
.feat-title{font-family:var(--fh);font-size:28px;font-weight:800;margin-bottom:12px;line-height:1.3}
.feat-excerpt{color:var(--t2);font-size:15px;line-height:1.75;margin-bottom:24px}
.feat-meta{display:flex;gap:16px;align-items:center;font-size:13px;color:var(--t3);margin-bottom:24px}
.read-link{color:var(--c);font-size:14px;font-weight:700;text-decoration:none;display:inline-flex;align-items:center;gap:6px;transition:gap .2s}
.read-link:hover{gap:10px}
/* articles grid */
.articles-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:24px}
@media(max-width:900px){.articles-grid{grid-template-columns:1fr 1fr}}
@media(max-width:600px){.articles-grid{grid-template-columns:1fr}.nav-links{display:none}.hero-title{font-size:36px}}
.article-card{background:var(--surf);border:1px solid var(--br);border-radius:20px;overflow:hidden;transition:all .3s}
.article-card:hover{transform:translateY(-6px);border-color:var(--br2);box-shadow:0 20px 60px rgba(124,58,237,.1)}
.article-thumb{height:180px;display:flex;align-items:center;justify-content:center;font-size:48px;border-bottom:1px solid var(--br)}
.article-body{padding:24px}
.article-cat{font-size:11px;font-weight:700;text-transform:uppercase;letter-spacing:.08em;color:var(--c);margin-bottom:10px}
.article-title{font-family:var(--fh);font-size:18px;font-weight:700;margin-bottom:10px;line-height:1.4}
.article-excerpt{color:var(--t2);font-size:13px;line-height:1.7;margin-bottom:16px}
.article-meta{display:flex;justify-content:space-between;align-items:center;font-size:12px;color:var(--t3)}
/* newsletter */
.newsletter{background:var(--surf);border:1px solid var(--br);border-radius:24px;padding:64px;text-align:center}
@media(max-width:600px){.newsletter{padding:40px 24px}}
.nl-form{display:flex;gap:12px;max-width:480px;margin:32px auto 0;flex-wrap:wrap}
.nl-input{flex:1;min-width:200px;background:var(--bg2);border:1px solid var(--br);border-radius:100px;padding:14px 24px;color:var(--t);font-family:var(--fb);font-size:15px;outline:none;transition:border-color .2s}
.nl-input:focus{border-color:var(--p)}
.nl-btn{background:linear-gradient(135deg,var(--p),var(--b));color:#fff;border:none;padding:14px 28px;border-radius:100px;font-size:14px;font-weight:600;cursor:pointer;font-family:var(--fb);white-space:nowrap;transition:transform .2s}
.nl-btn:hover{transform:translateY(-2px)}
/* topics */
.topics-grid{display:flex;flex-wrap:wrap;gap:12px}
.topic{background:var(--surf);border:1px solid var(--br);border-radius:100px;padding:10px 24px;font-size:14px;cursor:pointer;transition:all .2s;color:var(--t2)}
.topic:hover{border-color:var(--br2);color:var(--t)}
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
  <button class="nav-cta" onclick="window.location.href='contact.php'">Start Project</button>
</nav>

<main>
<section class="hero">
  <div class="container">
    <div class="eyebrow rv">Engineering Blog</div>
    <h1 class="hero-title rv">Insights &<br><span class="grad-text">Perspectives</span></h1>
    <p class="hero-sub rv">Our engineers write about AI, operational automation, and the decisions behind the systems we build.</p>
  </div>
</section>

<section class="sec">
  <div class="container">
    <div class="filter-bar rv">
      <button class="filter-btn active">All</button>
      <button class="filter-btn">AI & Machine Learning</button>
      <button class="filter-btn">Engineering</button>
      <button class="filter-btn">Automation</button>
      <button class="filter-btn">Architecture</button>
      <button class="filter-btn">Case Studies</button>
    </div>

    <!-- Featured -->
    <div class="featured rv">
      <div class="feat-thumb">🧠</div>
      <div>
        <span class="feat-label">Featured</span>
        <h2 class="feat-title">How RAG Architectures Are Changing Enterprise Knowledge Management</h2>
        <div class="feat-meta"><span>AI & Machine Learning</span><span>·</span><span>12 min read</span><span>·</span><span>March 2025</span></div>
        <p class="feat-excerpt">Retrieval-Augmented Generation has moved from research paper to production reality. We break down how we're deploying RAG at enterprise scale — the architectural decisions, the failure modes, and what accuracy benchmarks actually mean in production.</p>
        <a href="#" class="read-link">Read Article →</a>
      </div>
    </div>

    <!-- Grid -->
    <div class="articles-grid">
      <article class="article-card rv">
        <div class="article-thumb" style="background:linear-gradient(135deg,rgba(59,130,246,.08),rgba(0,212,255,.04))">🚀</div>
        <div class="article-body">
          <div class="article-cat">Engineering</div>
          <h3 class="article-title">Building Scalable Multi-Tenant SaaS on Next.js 14</h3>
          <p class="article-excerpt">The architecture decisions we make at the start of a SaaS build determine whether you're paying for refactors two years later.</p>
          <div class="article-meta"><span>Engineering</span><span>8 min read</span></div>
        </div>
      </article>

      <article class="article-card rv">
        <div class="article-thumb" style="background:linear-gradient(135deg,rgba(124,58,237,.08),rgba(59,130,246,.04))">⚙️</div>
        <div class="article-body">
          <div class="article-cat">Automation</div>
          <h3 class="article-title">The Real ROI of Workflow Automation in 2025</h3>
          <p class="article-excerpt">Measuring tangible business impact of migrating manual processes to custom software — and what the numbers actually look like.</p>
          <div class="article-meta"><span>Automation</span><span>6 min read</span></div>
        </div>
      </article>

      <article class="article-card rv">
        <div class="article-thumb" style="background:linear-gradient(135deg,rgba(0,212,255,.08),rgba(124,58,237,.04))">📱</div>
        <div class="article-body">
          <div class="article-cat">Mobile Engineering</div>
          <h3 class="article-title">Flutter vs React Native in 2025: An Honest Comparison</h3>
          <p class="article-excerpt">After shipping 20+ cross-platform apps on both, here's what we'd actually choose and when — without the marketing spin.</p>
          <div class="article-meta"><span>Mobile</span><span>10 min read</span></div>
        </div>
      </article>

      <article class="article-card rv">
        <div class="article-thumb" style="background:linear-gradient(135deg,rgba(245,158,11,.08),rgba(124,58,237,.04))">🔗</div>
        <div class="article-body">
          <div class="article-cat">Architecture</div>
          <h3 class="article-title">Legacy System Integration Without the Big-Bang Rewrite</h3>
          <p class="article-excerpt">How we incrementally modernize 15-year-old enterprise systems without stopping operations — the strangler fig pattern in practice.</p>
          <div class="article-meta"><span>Architecture</span><span>9 min read</span></div>
        </div>
      </article>

      <article class="article-card rv">
        <div class="article-thumb" style="background:linear-gradient(135deg,rgba(124,58,237,.08),rgba(0,212,255,.04))">👁️</div>
        <div class="article-body">
          <div class="article-cat">AI & Machine Learning</div>
          <h3 class="article-title">Deploying Computer Vision at the Edge: What We Learned</h3>
          <p class="article-excerpt">Lessons from deploying TFLite models on industrial edge devices — optimization, reliability, and the gap between lab accuracy and production.</p>
          <div class="article-meta"><span>AI/ML</span><span>11 min read</span></div>
        </div>
      </article>

      <article class="article-card rv">
        <div class="article-thumb" style="background:linear-gradient(135deg,rgba(34,197,94,.08),rgba(59,130,246,.04))">📊</div>
        <div class="article-body">
          <div class="article-cat">Case Study</div>
          <h3 class="article-title">How We Automated 4,200 Hours/Month of Clinical Data Entry</h3>
          <p class="article-excerpt">A detailed breakdown of the LLM pipeline we built for a hospital network — architecture, accuracy benchmarks, and the human-in-loop design.</p>
          <div class="article-meta"><span>Case Study</span><span>14 min read</span></div>
        </div>
      </article>

      <article class="article-card rv">
        <div class="article-thumb" style="background:linear-gradient(135deg,rgba(239,68,68,.08),rgba(245,158,11,.04))">🛡️</div>
        <div class="article-body">
          <div class="article-cat">Engineering</div>
          <h3 class="article-title">Designing for SOC2 from Day One</h3>
          <p class="article-excerpt">The security architecture decisions that make compliance a natural byproduct rather than a painful retrofit.</p>
          <div class="article-meta"><span>Security</span><span>7 min read</span></div>
        </div>
      </article>

      <article class="article-card rv">
        <div class="article-thumb" style="background:linear-gradient(135deg,rgba(168,85,247,.08),rgba(0,212,255,.04))">🤖</div>
        <div class="article-body">
          <div class="article-cat">AI & Machine Learning</div>
          <h3 class="article-title">Building AI Agents That Actually Work in Production</h3>
          <p class="article-excerpt">The gap between a demo agent and a production agent is enormous. Here's what reliable agentic systems actually require.</p>
          <div class="article-meta"><span>AI Agents</span><span>13 min read</span></div>
        </div>
      </article>

      <article class="article-card rv">
        <div class="article-thumb" style="background:linear-gradient(135deg,rgba(59,130,246,.08),rgba(124,58,237,.04))">⚡</div>
        <div class="article-body">
          <div class="article-cat">Automation</div>
          <h3 class="article-title">Event-Driven Architecture for Complex Workflow Orchestration</h3>
          <p class="article-excerpt">Why message queues and event sourcing beat polling-based systems for enterprise automation at scale.</p>
          <div class="article-meta"><span>Architecture</span><span>8 min read</span></div>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- Topics -->
<section class="sec" style="padding-top:0">
  <div class="container">
    <div class="rv"><div class="eyebrow">Browse by Topic</div><h2 class="sec-title">Engineering <span class="grad-text">Topics</span></h2></div>
    <div class="topics-grid rv">
      <span class="topic">Large Language Models</span><span class="topic">RAG Architectures</span><span class="topic">React & Next.js</span><span class="topic">Flutter Development</span><span class="topic">MLOps</span><span class="topic">Workflow Automation</span><span class="topic">Database Design</span><span class="topic">API Architecture</span><span class="topic">Computer Vision</span><span class="topic">Enterprise Integration</span><span class="topic">Cloud Infrastructure</span><span class="topic">Security Engineering</span>
    </div>
  </div>
</section>

<!-- Newsletter -->
<section class="sec" style="padding-top:0">
  <div class="container">
    <div class="newsletter rv">
      <div class="eyebrow">Stay Updated</div>
      <h2 style="font-family:var(--fh);font-size:clamp(28px,3.5vw,44px);font-weight:800;margin-bottom:12px">Engineering Insights<br><span class="grad-text">In Your Inbox</span></h2>
      <p style="color:var(--t2);font-size:16px;max-width:440px;margin:0 auto;line-height:1.7">New articles on AI, automation, and software engineering — no spam, unsubscribe anytime.</p>
      <div class="nl-form">
        <input class="nl-input" type="email" placeholder="your@email.com" id="nl-email">
        <button class="nl-btn" onclick="subscribeNL()">Subscribe</button>
      </div>
      <p id="nl-msg" style="margin-top:12px;font-size:14px;color:var(--c);display:none">Thanks! You're on the list.</p>
    </div>
  </div>
</section>
</main>

<footer>
  <div class="container">
    <div class="foot-grid">
      <div class="foot-brand"><a class="logo" href="index.php">Digi9</a><p>Engineering intelligent systems. Sharing what we learn along the way.</p></div>
      <div class="foot-col"><h4>Services</h4><a href="ai-software-development.php">AI Development</a><a href="web-application-development.php">Web Apps</a><a href="mobile-application-development.php">Mobile Apps</a><a href="custom-software.php">Custom Software</a></div>
      <div class="foot-col"><h4>Company</h4><a href="about.php">About</a><a href="work.php">Work</a><a href="insights.php">Insights</a><a href="contact.php">Contact</a></div>
      <div class="foot-col"><h4>Contact</h4><a href="mailto:hello@digi9.in">hello@digi9.in</a><a href="tel:+919999999999">+91 99999 99999</a><a href="contact.php">Bangalore, India</a></div>
    </div>
    <div class="foot-bottom"><p>© 2025 Digi9. All rights reserved.</p><p style="color:var(--t3);font-size:13px">Crafted with intent.</p></div>
  </div>
</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
<script>
// Deep Field canvas — infinite galaxy zoom (Hubble effect on scroll)
(function(){
  const cv=document.getElementById('bg-canvas');
  const ctx=cv.getContext('2d');
  let W,H,stars=[],scrollY=0;
  function resize(){W=cv.width=window.innerWidth;H=cv.height=window.innerHeight;stars=[];init()}
  function Star(){
    this.reset=function(initial){
      const angle=Math.random()*Math.PI*2;
      const dist=initial?Math.random()*Math.max(W,H)*.8:10+Math.random()*20;
      this.x=W/2+Math.cos(angle)*dist;
      this.y=H/2+Math.sin(angle)*dist;
      this.ox=this.x;this.oy=this.y;
      this.r=Math.random()*1.5;
      this.speed=Math.random()*.3+.05;
      this.color=Math.random()<.3?`hsl(${200+Math.random()*60},80%,70%)`:'rgba(240,238,255,0.8)';
      this.trail=[];
    };
    this.reset(true);
  }
  function init(){for(let i=0;i<300;i++){const s=new Star();stars.push(s)}}
  resize();window.addEventListener('resize',resize);
  window.addEventListener('scroll',()=>{scrollY=window.scrollY});
  let t=0;
  function draw(){
    t++;
    ctx.fillStyle='rgba(3,3,7,.2)';ctx.fillRect(0,0,W,H);
    const zoomFactor=1+scrollY*.0003;
    const cx=W/2,cy=H/2;
    stars.forEach(s=>{
      // move outward from center
      const dx=s.x-cx,dy=s.y-cy;
      const d=Math.sqrt(dx*dx+dy*dy);
      const speed=s.speed*(1+zoomFactor*.5);
      s.x+=dx/d*speed;s.y+=dy/d*speed;
      // trail
      s.trail.push({x:s.x,y:s.y});
      if(s.trail.length>8)s.trail.shift();
      // draw trail
      if(s.trail.length>1){
        ctx.beginPath();ctx.moveTo(s.trail[0].x,s.trail[0].y);
        for(let i=1;i<s.trail.length;i++)ctx.lineTo(s.trail[i].x,s.trail[i].y);
        ctx.strokeStyle=s.color.replace('0.8',`${s.trail.length/20}`);
        ctx.lineWidth=s.r*.5;ctx.stroke();
      }
      // core
      ctx.beginPath();ctx.arc(s.x,s.y,s.r,0,Math.PI*2);
      ctx.fillStyle=s.color;ctx.fill();
      // reset if off screen
      if(s.x<-20||s.x>W+20||s.y<-20||s.y>H+20)s.reset(false);
    });
    // occasional galaxy blob
    if(t%180===0){
      const gx=cx+(Math.random()-.5)*W*.6;
      const gy=cy+(Math.random()-.5)*H*.6;
      const gr=Math.random()*60+20;
      const g=ctx.createRadialGradient(gx,gy,0,gx,gy,gr);
      g.addColorStop(0,`hsla(${220+Math.random()*60},60%,60%,.06)`);
      g.addColorStop(1,'transparent');
      ctx.beginPath();ctx.arc(gx,gy,gr,0,Math.PI*2);ctx.fillStyle=g;ctx.fill();
    }
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
gsap.utils.toArray('.article-card').forEach((c,i)=>{ScrollTrigger.create({trigger:c,start:'top 88%',onEnter:()=>{gsap.from(c,{duration:.6,y:40,opacity:0,delay:i%3*.1,ease:'power2.out'})}})});
// tilt on cards
document.querySelectorAll('.article-card').forEach(c=>{c.addEventListener('mousemove',e=>{const r=c.getBoundingClientRect();const x=(e.clientX-r.left)/r.width-.5;const y=(e.clientY-r.top)/r.height-.5;c.style.transform=`perspective(700px) rotateY(${x*8}deg) rotateX(${-y*8}deg) translateY(-6px)`});c.addEventListener('mouseleave',()=>{c.style.transform=''})});
// filter buttons
document.querySelectorAll('.filter-btn').forEach(btn=>{btn.addEventListener('click',()=>{document.querySelectorAll('.filter-btn').forEach(b=>b.classList.remove('active'));btn.classList.add('active')})});
// newsletter
function subscribeNL(){const v=document.getElementById('nl-email').value;if(v&&v.includes('@')){document.getElementById('nl-msg').style.display='block';document.getElementById('nl-email').value=''}}
window.subscribeNL=subscribeNL;
</script>
</body>
</html>
