<?php
$year = date('Y');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Digi9 | AI Software & App Development Company</title>
<meta name="description" content="We build intelligent systems, automation tools, and scalable applications engineered specifically for your complex operations.">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Bricolage+Grotesque:opsz,wght@12..96,400;12..96,500;12..96,700;12..96,800&display=swap" rel="stylesheet">

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>

<style>
*,*::before,*::after{box-sizing:border-box;margin:0;padding:0}
html{scroll-behavior:smooth}
:root{
  --white:#fff;
  --gray-50:#f9fafb;
  --gray-100:#f3f4f6;
  --gray-200:#e5e7eb;
  --gray-300:#d1d5db;
  --gray-400:#9ca3af;
  --gray-500:#6b7280;
  --gray-700:#374151;
  --gray-900:#111827;
  --blue-50:#eff6ff;
  --blue-100:#dbeafe;
  --blue-200:#bfdbfe;
  --blue-500:#3b82f6;
  --blue-600:#2563eb;
  --blue-700:#1d4ed8;
  --purple-600:#7c3aed;
  --indigo-600:#4f46e5;
  --font-h:'Bricolage Grotesque',sans-serif;
  --font-b:'Inter',sans-serif;
  --nav-h:68px;
  --sh:0 1px 3px rgba(0,0,0,.06),0 1px 2px rgba(0,0,0,.04);
  --shm:0 4px 6px rgba(0,0,0,.07),0 2px 4px rgba(0,0,0,.05);
  --shl:0 10px 25px rgba(0,0,0,.1);
  --shxl:0 20px 60px rgba(0,0,0,.12);
  --r:8px;
}
body{font-family:var(--font-b);color:var(--gray-900);background:#fff;overflow-x:hidden;-webkit-font-smoothing:antialiased}
a{color:inherit;text-decoration:none}
button{cursor:pointer;font-family:inherit}
img{max-width:100%;height:auto;display:block}

/* PROGRESS */
#pbar{position:fixed;top:0;left:0;height:3px;z-index:9999;background:linear-gradient(90deg,var(--blue-600),var(--purple-600));width:0;transition:width .08s linear}

/* NAV */
nav{
  position:fixed;top:0;left:0;right:0;height:var(--nav-h);z-index:300;
  display:flex;align-items:center;justify-content:space-between;
  padding:0 clamp(1rem,4vw,3rem);
  transition:background .3s,box-shadow .3s,backdrop-filter .3s;
}
nav.pinned{background:rgba(255,255,255,.93);backdrop-filter:blur(20px);box-shadow:0 1px 0 var(--gray-200)}
.nav-logo{
  font-family:var(--font-h);font-size:1.5rem;font-weight:800;
  color:var(--gray-900);display:flex;align-items:center;gap:.5rem;
}
.nav-logo .dot{width:10px;height:10px;border-radius:50%;background:var(--blue-600);box-shadow:0 0 0 3px rgba(59,130,246,.2)}
.nav-links{display:flex;align-items:center;gap:2rem;list-style:none}
.nav-links a{font-size:.875rem;font-weight:500;color:var(--gray-700);transition:color .2s}
.nav-links a:hover{color:var(--blue-600)}
.nav-cta{
  background:var(--blue-600);color:#fff!important;
  padding:.6rem 1.25rem;border-radius:6px;font-weight:600;
  transition:background .2s,transform .15s,box-shadow .2s;
  box-shadow:0 1px 3px rgba(37,99,235,.4);
}
.nav-cta:hover{background:var(--blue-700);transform:translateY(-1px);box-shadow:0 4px 12px rgba(37,99,235,.4)}

/* HERO */
#hero{
  position:relative;min-height:100svh;
  display:flex;flex-direction:column;align-items:center;justify-content:center;
  padding:calc(var(--nav-h) + 5rem) clamp(1rem,4vw,3rem) 5rem;
  text-align:center;overflow:hidden;
  background:linear-gradient(160deg,#f0f7ff 0%,#fff 55%,#faf5ff 100%);
}
#hero-canvas{position:absolute;inset:0;z-index:0;pointer-events:none}
.hero-badge{
  display:inline-flex;align-items:center;gap:.5rem;
  font-size:.78rem;font-weight:600;letter-spacing:.07em;text-transform:uppercase;
  color:var(--blue-600);background:var(--blue-50);border:1px solid var(--blue-100);
  padding:.4rem 1.1rem;border-radius:100px;margin-bottom:2rem;
  position:relative;z-index:2;opacity:0;transform:translateY(20px);
}
.hero-badge::before{content:'';width:6px;height:6px;border-radius:50%;background:var(--blue-500);animation:blink 2s ease infinite}
@keyframes blink{0%,100%{opacity:1}50%{opacity:.3}}
h1.hero-title{
  font-family:var(--font-h);
  font-size:clamp(2.5rem,7vw,5.5rem);
  font-weight:800;line-height:1.04;letter-spacing:-.035em;
  max-width:900px;margin-bottom:1.5rem;
  position:relative;z-index:2;opacity:0;transform:translateY(30px);
}
.hero-title .hl{
  background:linear-gradient(135deg,var(--blue-600) 0%,var(--purple-600) 100%);
  -webkit-background-clip:text;-webkit-text-fill-color:transparent;
}
.hero-sub{
  font-size:clamp(1rem,1.5vw,1.2rem);color:var(--gray-500);line-height:1.75;
  max-width:600px;margin-bottom:2.5rem;
  position:relative;z-index:2;opacity:0;transform:translateY(20px);
}
.hero-btns{
  display:flex;gap:1rem;flex-wrap:wrap;justify-content:center;
  position:relative;z-index:2;opacity:0;transform:translateY(20px);margin-bottom:4rem;
}
.btn-p{
  display:inline-flex;align-items:center;gap:.4rem;
  background:var(--blue-600);color:#fff;
  padding:.9rem 2rem;border-radius:var(--r);font-weight:600;font-size:1rem;border:none;
  box-shadow:0 2px 8px rgba(37,99,235,.35);transition:all .25s;
}
.btn-p:hover{background:var(--blue-700);transform:translateY(-2px);box-shadow:0 6px 20px rgba(37,99,235,.4)}
.btn-o{
  display:inline-flex;align-items:center;gap:.4rem;
  border:1.5px solid var(--gray-300);background:#fff;color:var(--gray-700);
  padding:.9rem 2rem;border-radius:var(--r);font-weight:600;font-size:1rem;
  transition:all .25s;
}
.btn-o:hover{border-color:var(--blue-600);color:var(--blue-600);transform:translateY(-2px);box-shadow:var(--shm)}

/* Hero mockup window */
.hero-mock{
  width:100%;max-width:1000px;
  border-radius:14px;overflow:hidden;
  box-shadow:0 40px 100px rgba(0,0,0,.15),0 0 0 1px rgba(0,0,0,.06);
  position:relative;z-index:2;
  opacity:0;
  transform:perspective(1400px) rotateX(14deg) translateY(50px);
  transform-origin:top center;
}
.mock-bar{
  height:36px;background:var(--gray-100);border-bottom:1px solid var(--gray-200);
  display:flex;align-items:center;gap:7px;padding:0 16px;
}
.mock-bar em{width:12px;height:12px;border-radius:50%;font-style:normal}
.mock-bar em:nth-child(1){background:#ff5f57}
.mock-bar em:nth-child(2){background:#ffbd2e}
.mock-bar em:nth-child(3){background:#28c840}
.mock-bar .url{flex:1;height:22px;background:var(--gray-200);border-radius:4px;margin-left:10px}
.mock-inner{
  background:linear-gradient(135deg,#0f172a 0%,#1e1b4b 60%,#0c1445 100%);
  height:380px;display:flex;align-items:center;justify-content:center;
  position:relative;overflow:hidden;
}
.mock-inner canvas{position:absolute;inset:0}
.mock-content{position:relative;z-index:2;text-align:center;color:#fff}
.mock-content h2{font-family:var(--font-h);font-size:2rem;font-weight:800;letter-spacing:-.03em;margin-bottom:.5rem}
.mock-content p{font-size:.9rem;color:rgba(255,255,255,.4);margin-bottom:2rem}
.mock-metrics{display:flex;gap:2.5rem;justify-content:center}
.mock-metrics .mv{font-family:var(--font-h);font-size:1.8rem;font-weight:800;color:#60a5fa}
.mock-metrics .ml{font-size:.7rem;color:rgba(255,255,255,.35);text-transform:uppercase;letter-spacing:.08em;margin-top:.2rem}

/* Hero stats */
.hero-stats{
  display:flex;gap:clamp(1.5rem,5vw,4rem);flex-wrap:wrap;justify-content:center;
  position:relative;z-index:2;opacity:0;transform:translateY(20px);margin-top:3rem;
}
.hstat .n{font-family:var(--font-h);font-size:2.25rem;font-weight:800;color:var(--gray-900);line-height:1}
.hstat .l{font-size:.78rem;color:var(--gray-400);margin-top:.3rem;font-weight:500}
.hstat-div{width:1px;background:var(--gray-200)}

/* SECTION BASE */
.sec{padding:clamp(4rem,8vw,7rem) clamp(1rem,4vw,3rem)}
.ctr{max-width:1140px;margin:0 auto}
.sec-hd{text-align:center;margin-bottom:clamp(2.5rem,5vw,4rem)}
.eyebrow{display:inline-block;font-size:.72rem;font-weight:700;letter-spacing:.14em;text-transform:uppercase;color:var(--blue-600);margin-bottom:.875rem}
.sh2{font-family:var(--font-h);font-size:clamp(1.75rem,4vw,2.75rem);font-weight:800;letter-spacing:-.025em;line-height:1.15;color:var(--gray-900);margin-bottom:1rem}
.ssub{font-size:1.05rem;color:var(--gray-500);line-height:1.75;max-width:580px;margin:0 auto}

/* GSAP initial states */
.fi{opacity:0;transform:translateY(40px)}
.fl{opacity:0;transform:translateX(-40px)}
.fr{opacity:0;transform:translateX(40px)}
.fs{opacity:0;transform:scale(.93)}

/* LOGO MARQUEE */
#logobar{background:var(--gray-50);border-top:1px solid var(--gray-100);border-bottom:1px solid var(--gray-100);padding:1.75rem 0;overflow:hidden}
.ltrack{display:flex;gap:2.5rem;animation:lscroll 24s linear infinite;width:max-content}
.ltrack:hover{animation-play-state:paused}
.litm{
  font-family:var(--font-h);font-size:1rem;font-weight:700;
  color:var(--gray-300);white-space:nowrap;transition:color .3s;display:flex;align-items:center;gap:.75rem;
}
.litm:hover{color:var(--gray-500)}
.litm::before{content:'·';color:var(--gray-300)}
@keyframes lscroll{from{transform:translateX(0)}to{transform:translateX(-50%)}}

/* SERVICES / FEATURES GRID */
#services{background:var(--white)}
.feat-grid{
  display:grid;grid-template-columns:repeat(3,1fr);
  gap:1px;background:var(--gray-200);
  border:1px solid var(--gray-200);border-radius:16px;overflow:hidden;
}
.feat-card{
  background:var(--white);padding:2.5rem 2rem;position:relative;overflow:hidden;
  transition:background .25s;
}
.feat-card:hover{background:var(--gray-50)}
.feat-card::after{
  content:'';position:absolute;bottom:0;left:2rem;right:2rem;height:2px;
  background:linear-gradient(90deg,var(--blue-600),var(--purple-600));
  transform:scaleX(0);transform-origin:left;transition:transform .35s ease;
}
.feat-card:hover::after{transform:scaleX(1)}
.feat-icon{
  width:48px;height:48px;border-radius:10px;background:var(--blue-50);
  display:flex;align-items:center;justify-content:center;font-size:1.35rem;margin-bottom:1.25rem;
}
.feat-name{font-family:var(--font-h);font-size:1.1rem;font-weight:700;letter-spacing:-.015em;color:var(--gray-900);margin-bottom:.6rem}
.feat-text{font-size:.875rem;color:var(--gray-500);line-height:1.7;margin-bottom:1.25rem}
.feat-items{list-style:none;margin-bottom:1.25rem}
.feat-items li{font-size:.8rem;color:var(--gray-500);padding:.25rem 0;display:flex;align-items:center;gap:.5rem}
.feat-items li::before{content:'';width:5px;height:5px;border-radius:50%;background:var(--blue-500);flex-shrink:0}
.feat-link{font-size:.82rem;font-weight:600;color:var(--blue-600);display:inline-flex;align-items:center;gap:.3rem;transition:gap .2s}
.feat-link:hover{gap:.6rem}
.feat-cta{
  background:linear-gradient(135deg,var(--blue-600),var(--purple-600));
  padding:2.5rem 2rem;display:flex;flex-direction:column;justify-content:center;
}
.feat-cta .eyebrow{color:rgba(255,255,255,.65)}
.feat-cta h3{font-family:var(--font-h);font-size:1.5rem;font-weight:800;color:#fff;letter-spacing:-.02em;margin:1rem 0 1.75rem;line-height:1.2}
.btn-white{
  display:inline-flex;align-items:center;gap:.4rem;
  background:#fff;color:var(--blue-700);
  padding:.8rem 1.75rem;border-radius:var(--r);font-weight:700;font-size:.95rem;border:none;
  box-shadow:var(--shl);transition:all .25s;
}
.btn-white:hover{transform:translateY(-2px);box-shadow:0 8px 24px rgba(0,0,0,.2)}

/* WHY US */
#why{background:var(--gray-50)}
.cb{display:grid;grid-template-columns:1fr 1fr;gap:clamp(3rem,6vw,6rem);align-items:center;margin-bottom:5rem}
.cb:last-child{margin-bottom:0}
.cb.rev{direction:rtl}
.cb.rev>*{direction:ltr}
.cb-text .eyebrow{text-align:left}
.cb-text .sh2{text-align:left;font-size:clamp(1.5rem,3vw,2.25rem)}
.cb-text .ssub{text-align:left;max-width:100%;font-size:.95rem}
.cb-items{margin-top:1.75rem;display:flex;flex-direction:column;gap:1rem}
.cb-item{
  display:flex;gap:1rem;padding:1.25rem;
  background:var(--white);border:1px solid var(--gray-200);border-radius:10px;
  transition:border-color .2s,box-shadow .2s;
}
.cb-item:hover{border-color:var(--blue-200);box-shadow:var(--shm)}
.cb-item-ico{
  font-size:1.25rem;flex-shrink:0;width:40px;height:40px;border-radius:8px;
  background:var(--blue-50);display:flex;align-items:center;justify-content:center;
}
.cb-item-title{font-weight:600;font-size:.9rem;color:var(--gray-900);margin-bottom:.2rem}
.cb-item-text{font-size:.82rem;color:var(--gray-500);line-height:1.6}
.cb-visual{border-radius:16px;overflow:hidden;box-shadow:var(--shxl);border:1px solid var(--gray-200)}
.cb-visual-inner{
  background:linear-gradient(135deg,#0f172a,#1e1b4b);
  padding:2.5rem;height:360px;
  display:flex;flex-direction:column;gap:.875rem;justify-content:center;
}
.cline{height:8px;border-radius:4px;background:rgba(255,255,255,.07)}
.cline.a1{background:rgba(99,102,241,.45);width:62%}
.cline.a2{background:rgba(59,130,246,.35);width:48%}

/* STATS BAND */
#stats{
  background:linear-gradient(135deg,var(--blue-600) 0%,var(--purple-600) 100%);
  padding:clamp(3.5rem,6vw,6rem) clamp(1rem,4vw,3rem);
}
.stats-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:2rem;text-align:center}
.snum{font-family:var(--font-h);font-size:clamp(2rem,5vw,3.5rem);font-weight:800;color:#fff;line-height:1;margin-bottom:.5rem}
.slbl{font-size:.875rem;color:rgba(255,255,255,.65);font-weight:500}

/* WORK */
#work{background:var(--white)}
.work-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:1.5rem}
.wcard{border:1px solid var(--gray-200);border-radius:16px;overflow:hidden;transition:all .35s;box-shadow:var(--sh)}
.wcard:hover{transform:translateY(-8px);box-shadow:var(--shxl);border-color:var(--blue-200)}
.wcard-img{height:180px;display:flex;align-items:center;justify-content:center;font-size:3.5rem}
.wcard:nth-child(1) .wcard-img{background:linear-gradient(135deg,#0f172a,#312e81)}
.wcard:nth-child(2) .wcard-img{background:linear-gradient(135deg,#022c22,#064e3b)}
.wcard:nth-child(3) .wcard-img{background:linear-gradient(135deg,#1c0533,#312e81)}
.wcard-body{padding:1.75rem}
.wchip{display:inline-block;font-size:.7rem;font-weight:700;letter-spacing:.08em;text-transform:uppercase;padding:.3rem .75rem;border-radius:100px;margin-bottom:.875rem}
.c-ai{background:var(--blue-50);color:var(--blue-600);border:1px solid var(--blue-100)}
.c-cv{background:#ecfdf5;color:#059669;border:1px solid #a7f3d0}
.c-llm{background:#fefce8;color:#ca8a04;border:1px solid #fef08a}
.wcard-title{font-family:var(--font-h);font-size:1.2rem;font-weight:700;letter-spacing:-.02em;margin-bottom:.625rem}
.wcard-text{font-size:.875rem;color:var(--gray-500);line-height:1.65;margin-bottom:1.25rem}
.wmetrics{display:flex;gap:1.5rem}
.wm-val{font-family:var(--font-h);font-size:1.5rem;font-weight:800;color:var(--blue-600)}
.wm-lbl{font-size:.7rem;color:var(--gray-400);text-transform:uppercase;letter-spacing:.06em;margin-top:.2rem}

/* PROCESS */
#process{background:var(--gray-50)}
.steps-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:1.5rem;position:relative}
.steps-grid::before{
  content:'';position:absolute;top:36px;left:calc(12.5% + 1rem);right:calc(12.5% + 1rem);
  height:1.5px;background:linear-gradient(90deg,var(--blue-600),var(--purple-600));z-index:0;
}
.step{text-align:center;position:relative;z-index:1}
.step-n{
  width:72px;height:72px;border-radius:50%;margin:0 auto 1.5rem;
  display:flex;align-items:center;justify-content:center;
  font-family:var(--font-h);font-size:1.4rem;font-weight:800;
  background:var(--white);border:2px solid var(--gray-200);
  color:var(--blue-600);box-shadow:var(--shm);transition:all .3s;
}
.step:hover .step-n{background:var(--blue-600);color:#fff;border-color:var(--blue-600);box-shadow:0 0 0 6px rgba(59,130,246,.12),var(--shm)}
.step-title{font-family:var(--font-h);font-size:1rem;font-weight:700;color:var(--gray-900);margin-bottom:.625rem}
.step-text{font-size:.82rem;color:var(--gray-500);line-height:1.65}

/* INDUSTRIES */
#industries{background:var(--white)}
.ind-grid{display:grid;grid-template-columns:repeat(7,1fr);gap:.875rem}
.ind-card{
  background:var(--gray-50);border:1px solid var(--gray-200);border-radius:12px;
  padding:1.5rem .75rem;text-align:center;transition:all .25s;
}
.ind-card:hover{background:var(--blue-50);border-color:var(--blue-200);transform:translateY(-3px)}
.ind-ico{font-size:1.75rem;margin-bottom:.625rem}
.ind-name{font-size:.75rem;color:var(--gray-500);font-weight:500;line-height:1.4}

/* FAQ */
#faq{background:var(--gray-50)}
.faq-grid{display:grid;grid-template-columns:1fr 1fr;gap:1rem}
.faq-item{background:var(--white);border:1px solid var(--gray-200);border-radius:12px;overflow:hidden}
.faq-q{
  width:100%;display:flex;align-items:center;justify-content:space-between;gap:1rem;
  padding:1.25rem 1.5rem;background:none;border:none;text-align:left;
  font-family:var(--font-b);font-size:.95rem;font-weight:600;color:var(--gray-900);transition:color .2s;
}
.faq-q:hover{color:var(--blue-600)}
.faq-arr{
  flex-shrink:0;width:22px;height:22px;border-radius:50%;background:var(--gray-100);
  display:flex;align-items:center;justify-content:center;font-size:.75rem;
  transition:transform .3s,background .2s;
}
.faq-item.open .faq-arr{transform:rotate(180deg);background:var(--blue-50);color:var(--blue-600)}
.faq-a{
  font-size:.875rem;color:var(--gray-500);line-height:1.75;
  max-height:0;overflow:hidden;transition:max-height .4s ease,padding .3s;
  padding:0 1.5rem;
}
.faq-item.open .faq-a{max-height:300px;padding:0 1.5rem 1.25rem}

/* BLOG */
#insights{background:var(--white)}
.blog-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:1.5rem}
.bcard{border:1px solid var(--gray-200);border-radius:14px;overflow:hidden;transition:all .3s}
.bcard:hover{transform:translateY(-6px);box-shadow:var(--shl);border-color:var(--blue-200)}
.bcard-img{height:160px;display:flex;align-items:center;justify-content:center;font-size:2.5rem}
.bi1{background:linear-gradient(135deg,#eff6ff,#dbeafe)}
.bi2{background:linear-gradient(135deg,#faf5ff,#ede9fe)}
.bi3{background:linear-gradient(135deg,#ecfdf5,#d1fae5)}
.bcard-body{padding:1.5rem}
.bcat{font-size:.7rem;font-weight:700;letter-spacing:.1em;text-transform:uppercase;color:var(--blue-600);margin-bottom:.625rem}
.btitle{font-family:var(--font-h);font-size:1.05rem;font-weight:700;letter-spacing:-.015em;margin-bottom:.625rem;line-height:1.3}
.btext{font-size:.82rem;color:var(--gray-500);line-height:1.65;margin-bottom:1rem}
.blink{font-size:.8rem;font-weight:600;color:var(--blue-600);display:inline-flex;align-items:center;gap:.3rem;transition:gap .2s}
.bcard:hover .blink{gap:.6rem}

/* CTA dark band */
#cta{
  background:var(--gray-900);
  padding:clamp(4rem,8vw,7rem) clamp(1rem,4vw,3rem);
  text-align:center;position:relative;overflow:hidden;
}
#cta::before{
  content:'';position:absolute;inset:0;
  background:
    radial-gradient(ellipse 70% 80% at 25% 50%,rgba(79,70,229,.25),transparent),
    radial-gradient(ellipse 70% 80% at 75% 50%,rgba(59,130,246,.15),transparent);
}
#cta .eyebrow{color:#60a5fa;position:relative}
#cta .sh2{color:#fff;position:relative}
#cta .ssub{color:rgba(255,255,255,.55);position:relative}
.cta-btns{display:flex;gap:1rem;justify-content:center;flex-wrap:wrap;margin-top:2.5rem;position:relative}
.btn-wh{
  background:#fff;color:var(--blue-700);padding:.9rem 2rem;border-radius:var(--r);
  font-weight:700;font-size:1rem;border:none;box-shadow:var(--shl);transition:all .25s;
}
.btn-wh:hover{transform:translateY(-2px);box-shadow:0 8px 24px rgba(0,0,0,.25)}
.btn-owh{
  border:1.5px solid rgba(255,255,255,.25);color:#fff;background:transparent;
  padding:.9rem 2rem;border-radius:var(--r);font-weight:600;font-size:1rem;transition:all .25s;
}
.btn-owh:hover{border-color:rgba(255,255,255,.6);background:rgba(255,255,255,.06)}

/* FOOTER */
footer{background:var(--gray-900);border-top:1px solid rgba(255,255,255,.05);padding:4rem clamp(1rem,4vw,3rem) 2rem}
.ft-grid{
  max-width:1140px;margin:0 auto;
  display:grid;grid-template-columns:2fr 1fr 1fr 1fr;gap:3rem;margin-bottom:3rem;
}
.ft-brand-name{font-family:var(--font-h);font-size:1.4rem;font-weight:800;color:#fff;margin-bottom:.875rem}
.ft-brand-text{font-size:.875rem;color:rgba(255,255,255,.35);line-height:1.75;max-width:260px;margin-bottom:1.25rem}
.ft-email{color:#60a5fa;font-size:.875rem;transition:color .2s}
.ft-email:hover{color:#93c5fd}
.ft-col h4{font-size:.7rem;font-weight:700;letter-spacing:.14em;text-transform:uppercase;color:rgba(255,255,255,.25);margin-bottom:1.25rem}
.ft-col ul{list-style:none;display:flex;flex-direction:column;gap:.625rem}
.ft-col a{font-size:.875rem;color:rgba(255,255,255,.45);transition:color .2s}
.ft-col a:hover{color:#fff}
.ft-bottom{
  max-width:1140px;margin:0 auto;
  border-top:1px solid rgba(255,255,255,.07);padding-top:1.5rem;
  display:flex;align-items:center;justify-content:space-between;gap:1rem;flex-wrap:wrap;
}
.ft-copy{font-size:.8rem;color:rgba(255,255,255,.25)}
.ft-legal{display:flex;gap:1.5rem}
.ft-legal a{font-size:.8rem;color:rgba(255,255,255,.25);transition:color .2s}
.ft-legal a:hover{color:rgba(255,255,255,.55)}

/* MODAL */
.modal-bg{
  position:fixed;inset:0;z-index:500;
  background:rgba(0,0,0,.5);backdrop-filter:blur(8px);
  display:none;align-items:center;justify-content:center;padding:1rem;
}
.modal-bg.open{display:flex}
.modal-box{
  background:#fff;border-radius:20px;width:100%;max-width:520px;
  padding:2.5rem;position:relative;max-height:90svh;overflow-y:auto;
  animation:mopen .35s cubic-bezier(.34,1.56,.64,1);
}
@keyframes mopen{from{opacity:0;transform:scale(.9) translateY(16px)}to{opacity:1;transform:none}}
.modal-x{
  position:absolute;top:1rem;right:1rem;width:32px;height:32px;
  background:var(--gray-100);border:none;border-radius:50%;
  display:flex;align-items:center;justify-content:center;font-size:1rem;transition:background .2s;
}
.modal-x:hover{background:var(--gray-200)}
.mstep{display:none}
.mstep.active{display:block}
.mstep-title{font-family:var(--font-h);font-size:1.5rem;font-weight:800;letter-spacing:-.02em;margin-bottom:.5rem}
.mstep-sub{font-size:.9rem;color:var(--gray-500);margin-bottom:1.75rem;line-height:1.6}
.mprog{display:flex;gap:.5rem;margin-bottom:1.75rem}
.mprog-dot{height:3px;border-radius:2px;flex:1;background:var(--gray-200);transition:background .3s}
.mprog-dot.on{background:var(--blue-600)}
.benefit-list{list-style:none;display:flex;flex-direction:column;gap:.75rem;margin-bottom:2rem}
.benefit-list li{display:flex;align-items:center;gap:.75rem;font-size:.9rem;color:var(--gray-700)}
.benefit-list li::before{
  content:'✓';flex-shrink:0;width:22px;height:22px;border-radius:50%;
  background:var(--blue-50);color:var(--blue-600);
  display:flex;align-items:center;justify-content:center;font-size:.7rem;font-weight:700;
}
.flabel{display:block;font-size:.8rem;font-weight:600;color:var(--gray-700);margin-bottom:.4rem;letter-spacing:.03em}
.finput{
  width:100%;padding:.75rem 1rem;border:1.5px solid var(--gray-200);border-radius:8px;
  font-family:var(--font-b);font-size:.95rem;color:var(--gray-900);outline:none;
  transition:border-color .2s;margin-bottom:1.25rem;
}
.finput:focus{border-color:var(--blue-500);box-shadow:0 0 0 3px rgba(59,130,246,.1)}
.finput::placeholder{color:var(--gray-300)}
textarea.finput{resize:vertical;min-height:90px}
.chip-wrap{display:flex;flex-wrap:wrap;gap:.625rem;margin-bottom:1.5rem}
.mchip{
  padding:.5rem 1rem;border:1.5px solid var(--gray-200);border-radius:100px;
  background:none;font-family:var(--font-b);font-size:.85rem;color:var(--gray-700);transition:all .2s;
}
.mchip.sel{border-color:var(--blue-600);background:var(--blue-50);color:var(--blue-700)}
.summary-box{background:var(--gray-50);border:1px solid var(--gray-200);border-radius:10px;padding:1.25rem;margin-bottom:1.5rem}
.srow{font-size:.875rem;color:var(--gray-600);padding:.3rem 0}
.mrow-btns{display:flex;gap:.75rem}
.btn-back{
  padding:.75rem 1.5rem;border-radius:8px;border:1.5px solid var(--gray-200);
  background:none;font-family:var(--font-b);font-weight:600;font-size:.9rem;color:var(--gray-700);transition:all .2s;
}
.btn-back:hover{border-color:var(--gray-400)}

/* TILT */
.tilt{transition:transform .4s ease;transform-style:preserve-3d}

/* RESPONSIVE */
@media(max-width:1024px){
  .feat-grid{grid-template-columns:1fr 1fr}
  .ind-grid{grid-template-columns:repeat(4,1fr)}
  .ft-grid{grid-template-columns:1fr 1fr}
}
@media(max-width:768px){
  .cb,.cb.rev{grid-template-columns:1fr;direction:ltr}
  .work-grid,.blog-grid{grid-template-columns:1fr}
  .steps-grid{grid-template-columns:1fr 1fr}
  .steps-grid::before{display:none}
  .stats-grid{grid-template-columns:repeat(2,1fr)}
  .faq-grid{grid-template-columns:1fr}
  nav ul{display:none}
  .feat-grid{grid-template-columns:1fr}
}
@media(max-width:480px){
  .ind-grid{grid-template-columns:repeat(2,1fr)}
  .ft-grid{grid-template-columns:1fr}
}
</style>
</head>
<body>

<div id="pbar"></div>

<!-- NAV -->
<nav id="nav">
  <a href="#" class="nav-logo"><span class="dot"></span>Digi9</a>
  <ul class="nav-links">
    <li><a href="#services">Services</a></li>
    <li><a href="#work">Work</a></li>
    <li><a href="#why">About</a></li>
    <li><a href="#process">Process</a></li>
    <li><a href="#insights">Insights</a></li>
    <li><a href="#contact" class="nav-cta" onclick="openModal(event)">Book a Call</a></li>
  </ul>
</nav>

<!-- HERO -->
<section id="hero">
  <canvas id="hero-canvas"></canvas>

  <div class="hero-badge" id="hbadge">AI &amp; Software Development · Bangalore, India</div>

  <h1 class="hero-title" id="htitle">
    AI Software &amp; App<br><span class="hl">Development Company</span><br>That Builds What Actually Works.
  </h1>

  <p class="hero-sub" id="hsub">
    We build intelligent systems, automation tools, and scalable applications engineered specifically for your complex operations.
  </p>

  <div class="hero-btns" id="hbtns">
    <a href="#contact" class="btn-p" onclick="openModal(event)">Book a Consultation →</a>
    <a href="#services" class="btn-o">Explore Services</a>
  </div>

  <div class="hero-mock" id="hmock">
    <div class="mock-bar">
      <em></em><em></em><em></em>
      <div class="url"></div>
    </div>
    <div class="mock-inner" id="mock-canvas-wrap">
      <canvas id="mock-canvas" style="position:absolute;inset:0;width:100%;height:100%"></canvas>
      <div class="mock-content">
        <h2>Your AI Platform</h2>
        <p>Intelligence engines built from scratch</p>
        <div class="mock-metrics">
          <?php foreach([['50+','Projects'],['99.2%','Accuracy'],['2.8x','Faster']] as $m): ?>
          <div><div class="mv"><?= $m[0] ?></div><div class="ml"><?= $m[1] ?></div></div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>

  <div class="hero-stats" id="hstats">
    <?php
    $hs=[['50+','Projects Delivered'],['8+','Years Expertise'],['30+','Enterprise Clients'],['7','Industries Served']];
    foreach($hs as $i=>$s):
    ?>
    <div class="hstat"><div class="n"><?= $s[0] ?></div><div class="l"><?= $s[1] ?></div></div>
    <?php if($i<3): ?><div class="hstat-div"></div><?php endif; ?>
    <?php endforeach; ?>
  </div>
</section>

<!-- LOGO MARQUEE -->
<div id="logobar">
  <?php
  $logos=['Supply Chain AI','Fitness Biometrics','FinTech LLMs','Computer Vision','Predictive Analytics','Workflow Automation','Enterprise SaaS','RAG Systems','Edge AI'];
  $all=array_merge($logos,$logos);
  ?>
  <div class="ltrack">
    <?php foreach($all as $l): ?><div class="litm"><?= htmlspecialchars($l) ?></div><?php endforeach; ?>
  </div>
</div>

<!-- SERVICES -->
<section id="services" class="sec">
  <div class="ctr">
    <div class="sec-hd">
      <div class="eyebrow fi">Our Focus</div>
      <h2 class="sh2 fi">Meet Your Technical Partners</h2>
      <p class="ssub fi">No generic templates. Pure custom builds for your specific business logic and operational needs.</p>
    </div>
    <div class="feat-grid">
      <?php
      $svcs=[
        ['🤖','AI Software Development','Custom enterprise AI systems engineered from scratch. Automate high-complexity workflows effectively.',['Custom enterprise AI systems','LLM applications','Predictive analytics platforms','Intelligence engines'],'ai-software-development.php'],
        ['💻','Web Application Development','Smart AI-integrated web applications and portals built for scalability and enterprise-grade usage.',['Smart web applications','AI-integrated portals','Intelligent dashboards','Customer interaction platforms'],'web-application-development.php'],
        ['📱','Mobile App Development','Intelligent mobile experiences with native and cross-platform capabilities, powered by AI-driven workflows.',['Intelligent mobile experiences','Recommendation engines','Predictive UX','Cross-platform builds'],'mobile-application-development.php'],
        ['🏢','Custom Enterprise Software','Admin platforms, operational command centers, real-time visibility. Software that matches your business logic.',['Admin platforms','Operational command centers','Real-time visibility','AI-powered insights'],'custom-software.php'],
        ['⚡','Automation & Integration','Intelligent workflow automation. Eliminate internal systems gaps. Accelerate your operational growth.',['Intelligent workflow automation','Systems gap elimination','High-ROI process optimization','Legacy modernization'],'solutions.php'],
      ];
      foreach($svcs as $s):
      ?>
      <div class="feat-card fs tilt">
        <div class="feat-icon"><?= $s[0] ?></div>
        <div class="feat-name"><?= htmlspecialchars($s[1]) ?></div>
        <p class="feat-text"><?= htmlspecialchars($s[2]) ?></p>
        <ul class="feat-items">
          <?php foreach($s[3] as $it): ?><li><?= htmlspecialchars($it) ?></li><?php endforeach; ?>
        </ul>
        <a href="<?= $s[4] ?>" class="feat-link">View Details →</a>
      </div>
      <?php endforeach; ?>
      <div class="feat-cta fs">
        <div class="eyebrow">Have a project?</div>
        <h3>Let's map out your project together.</h3>
        <a href="#contact" class="btn-white" onclick="openModal(event)">Book a Consultation →</a>
      </div>
    </div>
  </div>
</section>

<!-- WHY US -->
<section id="why" class="sec">
  <div class="ctr">

    <div class="cb">
      <div class="cb-text fl">
        <div class="eyebrow">Engineering Excellence</div>
        <h2 class="sh2">Built on modern foundations. Engineered to scale.</h2>
        <p class="ssub">Deep expertise in AI integration, LLM fine-tuning, and scalable cloud architecture designed for multi-million traffic loads.</p>
        <div class="cb-items">
          <?php foreach([['⚙️','Custom First','No white-label. Pure custom builds for your specific business logic.'],['🎯','Outcome Oriented','We solve bottlenecks, we don\'t just deliver code.'],['🌍','Real Experience','Direct experience with high-growth startups and global enterprise operations.']] as $it): ?>
          <div class="cb-item">
            <div class="cb-item-ico"><?= $it[0] ?></div>
            <div><div class="cb-item-title"><?= $it[1] ?></div><p class="cb-item-text"><?= htmlspecialchars($it[2]) ?></p></div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
      <div class="fr">
        <div class="cb-visual tilt">
          <div class="cb-visual-inner">
            <?php for($i=0;$i<9;$i++): ?>
            <div class="cline <?= $i===2?'a1':($i===6?'a2':'') ?>" style="width:<?= [62,48,75,38,55,42,68,35,58][$i] ?>%"></div>
            <?php endfor; ?>
          </div>
        </div>
      </div>
    </div>

    <div class="cb rev">
      <div class="cb-text fr">
        <div class="eyebrow">End-to-End Build</div>
        <h2 class="sh2">Discovery, Design, Engineering, Deployment — all internal.</h2>
        <p class="ssub">We handle every phase of your project internally, ensuring perfect cohesion and no communication gaps between stages.</p>
        <div class="cb-items">
          <?php foreach([['🔄','Rapid Delivery','Weekly progress demos so you see ROI early in the lifecycle.'],['🔒','Secure by Default','Security and scalability baked into every architecture decision.'],['📈','Growth-Ready','Your application stress-tested to handle explosive growth from day one.']] as $it): ?>
          <div class="cb-item">
            <div class="cb-item-ico"><?= $it[0] ?></div>
            <div><div class="cb-item-title"><?= $it[1] ?></div><p class="cb-item-text"><?= htmlspecialchars($it[2]) ?></p></div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
      <div class="fl">
        <div class="cb-visual tilt">
          <div class="cb-visual-inner" style="background:linear-gradient(135deg,#022c22,#064e3b)">
            <?php for($i=0;$i<9;$i++): ?>
            <div class="cline" style="width:<?= [45,70,38,60,50,82,42,65,35][$i] ?>%;background:rgba(<?= $i===3?'52,211,153,.4':($i===6?'16,185,129,.3':'255,255,255,.06') ?>)"></div>
            <?php endfor; ?>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>

<!-- STATS BAND -->
<section id="stats">
  <div class="ctr">
    <div class="stats-grid">
      <?php foreach([['50+','Projects Delivered'],['8+','Years of Expertise'],['30+','Enterprise Clients'],['7','Industries Served']] as $s): ?>
      <div class="fi">
        <div class="snum"><?= $s[0] ?></div>
        <div class="slbl"><?= $s[1] ?></div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- CASE STUDIES -->
<section id="work" class="sec">
  <div class="ctr">
    <div class="sec-hd">
      <div class="eyebrow fi">Case Studies</div>
      <h2 class="sh2 fi">Project Portfolios</h2>
      <p class="ssub fi">Real results from intelligent systems built for enterprise and high-growth clients.</p>
    </div>
    <div class="work-grid">
      <?php
      $works=[
        ['📦','c-ai','AI Logistics','Supply Chain AI','Smart demand forecasting and automated logistics optimization for multi-warehouse operations.',['34%','Efficiency'],['2.8x','Speed']],
        ['🏋️','c-cv','Computer Vision','Fitness Biometrics','Real-time form analysis using edge-AI for instant athlete feedback and continuous progress tracking.',['120K+','Users'],['99.2%','Accuracy']],
        ['🤖','c-llm','LLM Agents','Autonomous Support','Intelligent customer-service agents handling complex multi-step fintech inquiries autonomously.',['72%','Resolution'],['94%','CSAT']],
      ];
      foreach($works as $w):
      ?>
      <div class="wcard fs tilt">
        <div class="wcard-img"><?= $w[0] ?></div>
        <div class="wcard-body">
          <span class="wchip <?= $w[1] ?>"><?= $w[2] ?></span>
          <div class="wcard-title"><?= htmlspecialchars($w[3]) ?></div>
          <p class="wcard-text"><?= htmlspecialchars($w[4]) ?></p>
          <div class="wmetrics">
            <div><div class="wm-val"><?= $w[5][0] ?></div><div class="wm-lbl"><?= $w[5][1] ?></div></div>
            <div><div class="wm-val"><?= $w[6][0] ?></div><div class="wm-lbl"><?= $w[6][1] ?></div></div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
    <div style="text-align:center;margin-top:2.5rem" class="fi">
      <a href="work.php" class="btn-o">See More Projects →</a>
    </div>
  </div>
</section>

<!-- PROCESS -->
<section id="process" class="sec">
  <div class="ctr">
    <div class="sec-hd">
      <div class="eyebrow fi">Methodology</div>
      <h2 class="sh2 fi">The Blueprint to Delivery</h2>
    </div>
    <div class="steps-grid">
      <?php
      $steps=[
        ['01','Discovery & Analysis','We deep-dive into your workflows to identify where high-performance software or AI creates the most leverage.'],
        ['02','Architecture Blueprint','We design a robust technical foundation ensuring security and scalability before a single line of code is written.'],
        ['03','Iterative Engineering','High-speed modular development with weekly demos. Prioritize functional releases so you see ROI early.'],
        ['04','Production Scale','Rigorous stress-testing and automated deployment built to handle explosive growth from day one.'],
      ];
      foreach($steps as $s):
      ?>
      <div class="step fi">
        <div class="step-n"><?= $s[0] ?></div>
        <div class="step-title"><?= htmlspecialchars($s[1]) ?></div>
        <p class="step-text"><?= htmlspecialchars($s[2]) ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- INDUSTRIES -->
<section id="industries" class="sec" style="background:var(--gray-50)">
  <div class="ctr">
    <div class="sec-hd">
      <div class="eyebrow fi">Expertise</div>
      <h2 class="sh2 fi">Sectors We've Impacted</h2>
    </div>
    <div class="ind-grid">
      <?php foreach([['🏥','Healthcare & MedTech'],['💰','Financial Services'],['🚛','Supply Chain & Logistics'],['🛒','E-Commerce & Retail'],['💪','Fitness & Wellness'],['☁️','Enterprise SaaS'],['🏠','Real Estate']] as $ind): ?>
      <div class="ind-card fs">
        <div class="ind-ico"><?= $ind[0] ?></div>
        <div class="ind-name"><?= htmlspecialchars($ind[1]) ?></div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- FAQ -->
<section id="faq" class="sec">
  <div class="ctr">
    <div class="sec-hd">
      <div class="eyebrow fi">FAQs</div>
      <h2 class="sh2 fi">Frequently Asked Questions</h2>
      <p class="ssub fi">Everything you need to know before we start building together.</p>
    </div>
    <div class="faq-grid">
      <?php
      $faqs=[
        ['Why choose Digi9 over a larger agency?','We operate with the speed and focus of a specialist studio with full-stack capability. No account managers, no handoffs — you talk directly to the engineers building your product.'],
        ['What industries do you specialize in?','Healthcare, fintech, logistics, e-commerce, fitness, enterprise SaaS, and real estate. We bring domain expertise alongside deep technical skills for each vertical.'],
        ['How long does a typical project take?','Most projects run 8–20 weeks from discovery to production. We use iterative sprints with weekly demos so you see progress and ROI early.'],
        ['Do you support existing codebases?','Both greenfield and existing. We\'ve modernized legacy systems, extended existing platforms, and built from scratch. Discovery determines the best approach.'],
        ['What AI technologies do you use?','OpenAI, Anthropic, Gemini, open-source LLMs (Llama, Mistral), RAG architectures, LangChain, vector databases, computer vision pipelines, and custom ML models.'],
        ['How do you handle IP and confidentiality?','All code and intellectual property belongs to you. We sign NDAs before any discovery call and operate under strict confidentiality protocols.'],
      ];
      foreach($faqs as $f):
      ?>
      <div class="faq-item fi">
        <button class="faq-q" onclick="toggleFaq(this)">
          <?= htmlspecialchars($f[0]) ?>
          <span class="faq-arr">▼</span>
        </button>
        <div class="faq-a"><?= htmlspecialchars($f[1]) ?></div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- INSIGHTS -->
<section id="insights" class="sec">
  <div class="ctr">
    <div class="sec-hd">
      <div class="eyebrow fi">Latest</div>
      <h2 class="sh2 fi">Find out more in our Insights</h2>
    </div>
    <div class="blog-grid">
      <?php
      $blogs=[
        ['🤖','bi1','AI Strategy','The Custom AI Advantage','Most businesses rely on off-the-shelf SaaS. Custom AI creates a compounding competitive advantage that widens your moat over time.'],
        ['🏗️','bi2','Engineering','Architecture Patterns for Enterprise LLMs','Practical patterns for building enterprise-grade LLM applications: RAG pipelines, fine-tuning strategies, and orchestration at scale.'],
        ['📈','bi3','Data Insights','Building Prediction Pipelines','Modern predictive analytics combines traditional statistical methods with machine learning for robust, reliable forecasting systems.'],
      ];
      foreach($blogs as $b):
      ?>
      <div class="bcard fs tilt">
        <div class="bcard-img <?= $b[1] ?>"><?= $b[0] ?></div>
        <div class="bcard-body">
          <div class="bcat"><?= $b[2] ?></div>
          <div class="btitle"><?= htmlspecialchars($b[3]) ?></div>
          <p class="btext"><?= htmlspecialchars($b[4]) ?></p>
          <a href="insights.php" class="blink">Read Article →</a>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
    <div style="text-align:center;margin-top:2.5rem" class="fi">
      <a href="insights.php" class="btn-o">View all posts »</a>
    </div>
  </div>
</section>

<!-- CTA -->
<section id="cta">
  <div class="ctr" style="position:relative;z-index:1">
    <div class="sec-hd" style="margin-bottom:0">
      <div class="eyebrow fi">Get Started</div>
      <h2 class="sh2 fi">Get your dream system<br>up and running with Digi9.</h2>
      <p class="ssub fi">Free consultation. Zero pressure. Talk directly with our engineering team — not sales reps.</p>
    </div>
    <div class="cta-btns fi">
      <a href="#contact" class="btn-wh" onclick="openModal(event)">Book a Consultation →</a>
      <a href="#services" class="btn-owh">View Services</a>
    </div>
  </div>
</section>

<!-- FOOTER -->
<footer>
  <div class="ft-grid">
    <div>
      <div class="ft-brand-name">Digi9</div>
      <p class="ft-brand-text">Building real systems for real businesses. An AI and custom software development company based in Bangalore, India.</p>
      <a href="mailto:hello@digi9.in" class="ft-email">hello@digi9.in</a>
    </div>
    <div class="ft-col">
      <h4>Services</h4>
      <ul>
        <li><a href="ai-software-development.php">AI Software Development</a></li>
        <li><a href="web-application-development.php">Web Applications</a></li>
        <li><a href="mobile-application-development.php">Mobile Apps</a></li>
        <li><a href="custom-software.php">Custom Software</a></li>
        <li><a href="solutions.php">Automation & Integration</a></li>
      </ul>
    </div>
    <div class="ft-col">
      <h4>Company</h4>
      <ul>
        <li><a href="about.php">About Us</a></li>
        <li><a href="work.php">Our Work</a></li>
        <li><a href="process.php">Process</a></li>
        <li><a href="insights.php">Insights</a></li>
        <li><a href="#faq">FAQ</a></li>
      </ul>
    </div>
    <div class="ft-col">
      <h4>Contact</h4>
      <ul>
        <li><a href="#">Bangalore, Karnataka, India</a></li>
        <li><a href="mailto:hello@digi9.in">hello@digi9.in</a></li>
        <li><a href="#" onclick="openModal(event)">Book a Call</a></li>
      </ul>
    </div>
  </div>
  <div class="ft-bottom">
    <div class="ft-copy">© <?= $year ?> Digi9. All rights reserved · Made with ♥ in Bangalore, India</div>
    <div class="ft-legal"><a href="#">Privacy Policy</a><a href="#">Terms of Service</a></div>
  </div>
</footer>

<!-- MODAL -->
<div class="modal-bg" id="mbg" onclick="closeBg(event)">
  <div class="modal-box">
    <button class="modal-x" onclick="closeModal()">✕</button>

    <div class="mstep active" id="ms1">
      <div style="font-size:2.5rem;margin-bottom:1rem">🚀</div>
      <div class="mstep-title">Let's get you started</div>
      <p class="mstep-sub">Answer a few quick questions to book your free consultation. Takes under 60 seconds.</p>
      <ul class="benefit-list">
        <li>Live personalized walkthrough</li>
        <li>Custom strategy for your business</li>
        <li>Zero pressure, zero obligation</li>
        <li>Talk directly with our engineering team</li>
      </ul>
      <button class="btn-p" style="width:100%;justify-content:center;border:none" onclick="goTo(2)">Start Booking →</button>
    </div>

    <div class="mstep" id="ms2">
      <div class="mprog"><div class="mprog-dot on"></div><div class="mprog-dot"></div><div class="mprog-dot"></div><div class="mprog-dot"></div></div>
      <div class="mstep-title">👋 Who are you?</div>
      <p class="mstep-sub">Just the basics — we'll personalize everything from here.</p>
      <label class="flabel">Your Name</label><input class="finput" id="fn" type="text" placeholder="e.g. Priya Sharma">
      <label class="flabel">Email Address</label><input class="finput" id="fe" type="email" placeholder="you@company.com">
      <label class="flabel">Phone (optional)</label><input class="finput" id="fp" type="tel" placeholder="+91 9876543210">
      <div class="mrow-btns">
        <button class="btn-back" onclick="goTo(1)">← Back</button>
        <button class="btn-p" style="flex:1;justify-content:center;border:none" onclick="validateStep2()">Continue →</button>
      </div>
    </div>

    <div class="mstep" id="ms3">
      <div class="mprog"><div class="mprog-dot on"></div><div class="mprog-dot on"></div><div class="mprog-dot"></div><div class="mprog-dot"></div></div>
      <div class="mstep-title">🎯 What are you building?</div>
      <p class="mstep-sub">Helps us prepare a personalized consultation.</p>
      <div class="chip-wrap">
        <?php foreach(['🤖 AI Software','💻 Web Application','📱 Mobile App','⚡ Automation','📊 Dashboard','💡 Not Sure Yet'] as $c): ?>
        <button class="mchip" onclick="this.classList.toggle('sel')"><?= $c ?></button>
        <?php endforeach; ?>
      </div>
      <label class="flabel">Additional Notes (optional)</label>
      <textarea class="finput" id="fnotes" placeholder="Tell us a bit about your project..."></textarea>
      <div class="mrow-btns">
        <button class="btn-back" onclick="goTo(2)">← Back</button>
        <button class="btn-p" style="flex:1;justify-content:center;border:none" onclick="goTo(4)">Review & Confirm →</button>
      </div>
    </div>

    <div class="mstep" id="ms4">
      <div class="mprog"><div class="mprog-dot on"></div><div class="mprog-dot on"></div><div class="mprog-dot on"></div><div class="mprog-dot"></div></div>
      <div class="mstep-title">📋 Confirm your booking</div>
      <p class="mstep-sub">Here's a summary — everything looks good?</p>
      <div class="summary-box" id="sbox"></div>
      <div class="mrow-btns">
        <button class="btn-back" onclick="goTo(3)">← Edit</button>
        <button class="btn-p" style="flex:1;justify-content:center;border:none" onclick="goTo(5)">Confirm Booking ✓</button>
      </div>
    </div>

    <div class="mstep" id="ms5">
      <div style="font-size:3.5rem;text-align:center;margin-bottom:1rem">✅</div>
      <div class="mstep-title" style="text-align:center">You're all set!</div>
      <p class="mstep-sub" style="text-align:center">Your consultation request has been sent. Our engineering team will reach out within 24 hours.</p>
      <button class="btn-p" style="width:100%;justify-content:center;border:none;margin-top:.5rem" onclick="closeModal()">Done</button>
    </div>
  </div>
</div>

<script>
gsap.registerPlugin(ScrollTrigger);

/* ── PROGRESS BAR + NAV ── */
window.addEventListener('scroll',()=>{
  document.getElementById('pbar').style.width=(window.scrollY/(document.body.scrollHeight-window.innerHeight)*100)+'%';
  document.getElementById('nav').classList.toggle('pinned',window.scrollY>10);
});

/* ── GSAP HERO ENTRANCE ── */
const tl=gsap.timeline({defaults:{ease:'power3.out'}});
tl.to('#hbadge',{opacity:1,y:0,duration:.7,delay:.1})
  .to('#htitle',{opacity:1,y:0,duration:.8},'-=.4')
  .to('#hsub',{opacity:1,y:0,duration:.7},'-=.5')
  .to('#hbtns',{opacity:1,y:0,duration:.7},'-=.5')
  .to('#hmock',{opacity:1,y:0,rotateX:0,duration:1.1,ease:'power2.out'},'-=.4')
  .to('#hstats',{opacity:1,y:0,duration:.7},'-=.5');

/* ── SCROLL REVEALS ── */
document.querySelectorAll('.fi').forEach((el,i)=>{
  gsap.to(el,{
    scrollTrigger:{trigger:el,start:'top 88%',toggleActions:'play none none none'},
    opacity:1,y:0,duration:.7,ease:'power3.out',delay:(i%4)*.07
  });
});
document.querySelectorAll('.fl').forEach(el=>{
  gsap.to(el,{scrollTrigger:{trigger:el,start:'top 85%'},opacity:1,x:0,duration:.85,ease:'power3.out'});
});
document.querySelectorAll('.fr').forEach(el=>{
  gsap.to(el,{scrollTrigger:{trigger:el,start:'top 85%'},opacity:1,x:0,duration:.85,ease:'power3.out'});
});
document.querySelectorAll('.fs').forEach((el,i)=>{
  gsap.to(el,{
    scrollTrigger:{trigger:el,start:'top 88%'},
    opacity:1,scale:1,duration:.65,ease:'back.out(1.3)',delay:(i%3)*.1
  });
});

/* ── THREE.JS HERO BACKGROUND ── */
(function(){
  const canvas=document.getElementById('hero-canvas');
  const parent=document.getElementById('hero');
  const renderer=new THREE.WebGLRenderer({canvas,alpha:true,antialias:true});
  const scene=new THREE.Scene();
  const camera=new THREE.PerspectiveCamera(55,1,.1,100);
  camera.position.set(0,0,6);

  function resize(){
    const w=parent.clientWidth,h=parent.clientHeight;
    renderer.setSize(w,h,false);
    renderer.setPixelRatio(Math.min(devicePixelRatio,2));
    camera.aspect=w/h;camera.updateProjectionMatrix();
  }
  resize();window.addEventListener('resize',resize);

  /* Dots */
  const geo=new THREE.BufferGeometry();
  const N=350,pos=new Float32Array(N*3);
  for(let i=0;i<N;i++){pos[i*3]=(Math.random()-.5)*18;pos[i*3+1]=(Math.random()-.5)*14;pos[i*3+2]=(Math.random()-.5)*8;}
  geo.setAttribute('position',new THREE.BufferAttribute(pos,3));
  const pts=new THREE.Points(geo,new THREE.PointsMaterial({color:0x2563eb,size:.055,transparent:true,opacity:.45}));
  scene.add(pts);

  /* Grid */
  const gm=new THREE.LineBasicMaterial({color:0x3b82f6,opacity:.07,transparent:true});
  for(let i=-8;i<=8;i++){
    [[i,-8,-3,i,8,-3],[-8,i,-3,8,i,-3]].forEach(p=>{
      const bg=new THREE.BufferGeometry().setFromPoints([new THREE.Vector3(p[0],p[1],p[2]),new THREE.Vector3(p[3],p[4],p[5])]);
      scene.add(new THREE.Line(bg,gm));
    });
  }

  /* Orbs */
  [[-2.5,1.5,0,0x6366f1,1.2],[2.5,-1,0,0x3b82f6,1.0],[0,2.5,-2,0x8b5cf6,0.8]].forEach(o=>{
    const mesh=new THREE.Mesh(
      new THREE.SphereGeometry(o[4],32,32),
      new THREE.MeshBasicMaterial({color:o[3],transparent:true,opacity:.08})
    );
    mesh.position.set(o[0],o[1],o[2]);
    scene.add(mesh);
  });

  /* Mouse parallax */
  let mx=0,my=0;
  document.addEventListener('mousemove',e=>{mx=(e.clientX/window.innerWidth-.5)*2;my=(e.clientY/window.innerHeight-.5)*2;});

  let t=0;
  (function animate(){
    requestAnimationFrame(animate);
    t+=.004;
    pts.rotation.y=t*.1;
    pts.rotation.x=t*.05;
    camera.position.x+=(mx*.3-camera.position.x)*.04;
    camera.position.y+=(-my*.2-camera.position.y)*.04;
    camera.lookAt(scene.position);
    renderer.render(scene,camera);
  })();
})();

/* ── MOCK CANVAS ANIMATION ── */
(function(){
  const canvas=document.getElementById('mock-canvas');
  const wrap=document.getElementById('mock-canvas-wrap');
  if(!canvas||!wrap)return;
  const ctx=canvas.getContext('2d');
  function resize(){canvas.width=wrap.clientWidth;canvas.height=wrap.clientHeight;}
  resize();window.addEventListener('resize',resize);

  const lines=Array.from({length:12},()=>({
    x:Math.random()*1200,y:50+Math.random()*280,
    len:80+Math.random()*200,speed:.4+Math.random()*.8,
    opacity:Math.random()*.4+.1,hue:200+Math.random()*60
  }));

  (function draw(){
    requestAnimationFrame(draw);
    ctx.clearRect(0,0,canvas.width,canvas.height);
    lines.forEach(l=>{
      l.x+=l.speed;
      if(l.x>canvas.width+l.len)l.x=-l.len;
      const g=ctx.createLinearGradient(l.x,0,l.x+l.len,0);
      g.addColorStop(0,'transparent');
      g.addColorStop(.5,`hsla(${l.hue},80%,65%,${l.opacity})`);
      g.addColorStop(1,'transparent');
      ctx.beginPath();ctx.moveTo(l.x,l.y);ctx.lineTo(l.x+l.len,l.y);
      ctx.strokeStyle=g;ctx.lineWidth=1.5;ctx.stroke();
    });
  })();
})();

/* ── TILT EFFECT ── */
document.querySelectorAll('.tilt').forEach(el=>{
  el.addEventListener('mousemove',e=>{
    const r=el.getBoundingClientRect();
    const x=((e.clientX-r.left)/r.width-.5)*12;
    const y=((e.clientY-r.top)/r.height-.5)*-12;
    el.style.transform=`perspective(800px) rotateX(${y}deg) rotateY(${x}deg) translateZ(4px)`;
  });
  el.addEventListener('mouseleave',()=>{el.style.transform='';});
});

/* ── FAQ ── */
function toggleFaq(btn){
  const item=btn.closest('.faq-item');
  const isOpen=item.classList.contains('open');
  document.querySelectorAll('.faq-item.open').forEach(i=>i.classList.remove('open'));
  if(!isOpen)item.classList.add('open');
}

/* ── MODAL ── */
function openModal(e){if(e)e.preventDefault();document.getElementById('mbg').classList.add('open');document.body.style.overflow='hidden';goTo(1);}
function closeModal(){document.getElementById('mbg').classList.remove('open');document.body.style.overflow='';}
function closeBg(e){if(e.target===document.getElementById('mbg'))closeModal();}
document.addEventListener('keydown',e=>{if(e.key==='Escape')closeModal();});

function goTo(n){
  document.querySelectorAll('.mstep').forEach(s=>s.classList.remove('active'));
  const step=document.getElementById('ms'+n);
  if(step)step.classList.add('active');
  if(n===4)buildSummary();
}

function validateStep2(){
  const name=document.getElementById('fn').value.trim();
  const email=document.getElementById('fe').value.trim();
  if(!name){alert('Please enter your name.');return;}
  if(!email||!email.includes('@')){alert('Please enter a valid email.');return;}
  goTo(3);
}

function buildSummary(){
  const name=document.getElementById('fn').value||'—';
  const email=document.getElementById('fe').value||'—';
  const phone=document.getElementById('fp').value||'Not provided';
  const chips=[...document.querySelectorAll('.mchip.sel')].map(c=>c.textContent).join(', ')||'Not specified';
  const notes=document.getElementById('fnotes').value||'None';
  document.getElementById('sbox').innerHTML=
    `<div class="srow"><strong>Name:</strong> ${name}</div>
     <div class="srow"><strong>Email:</strong> ${email}</div>
     <div class="srow"><strong>Phone:</strong> ${phone}</div>
     <div class="srow"><strong>Building:</strong> ${chips}</div>
     <div class="srow"><strong>Notes:</strong> ${notes}</div>`;
}
</script>
</body>
</html>
