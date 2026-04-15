<?php $year = date('Y'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Digi9 | AI Software & App Development Company</title>
<meta name="description" content="AI Software and App Development Company that builds what actually works. Custom enterprise AI, web apps, mobile, and automation. Bangalore, India.">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;600;700;800&family=DM+Sans:opsz,wght@9..40,300;9..40,400;9..40,500&display=swap" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
<style>
/* ── SPACE DESIGN SYSTEM ────────────────────────────── */
*,*::before,*::after{box-sizing:border-box;margin:0;padding:0}
:root{
  --bg:#030307;--bg2:#07070f;--surf:#0d0d1a;--surf2:#12122a;
  --p:#7c3aed;--b:#3b82f6;--c:#00d4ff;--g:#f5c842;
  --t:#f0eeff;--t2:#9b97c4;--t3:#5a5780;
  --br:rgba(124,58,237,.15);--br2:rgba(124,58,237,.3);
  --fh:'Syne',sans-serif;--fb:'DM Sans',sans-serif;
  --nav:68px;
}
html{scroll-behavior:auto}
body{font-family:var(--fb);background:var(--bg);color:var(--t);overflow-x:hidden;cursor:none}
a{color:inherit;text-decoration:none}
::-webkit-scrollbar{width:3px}
::-webkit-scrollbar-track{background:var(--bg)}
::-webkit-scrollbar-thumb{background:var(--p);border-radius:2px}

/* CURSOR */
#cur,#cur2{position:fixed;border-radius:50%;pointer-events:none;z-index:9999}
#cur{width:10px;height:10px;background:var(--c);top:0;left:0;mix-blend-mode:screen;transition:transform .1s}
#cur2{width:36px;height:36px;border:1px solid rgba(0,212,255,.4);top:0;left:0;transition:all .12s ease;opacity:.6}

/* WARP CANVAS */
#warp{position:fixed;inset:0;z-index:0;pointer-events:none}

/* SCROLL PROGRESS */
#prog{position:fixed;top:0;left:0;height:2px;z-index:999;background:linear-gradient(90deg,var(--p),var(--c));width:0;box-shadow:0 0 8px var(--c)}

/* NAV */
nav{position:fixed;top:0;left:0;right:0;height:var(--nav);z-index:100;
  display:flex;align-items:center;justify-content:space-between;padding:0 4vw;
  transition:all .4s}
nav.on{background:rgba(3,3,7,.88);backdrop-filter:blur(24px);border-bottom:1px solid var(--br)}
.logo{font-family:var(--fh);font-size:1.55rem;font-weight:800;letter-spacing:-.02em;
  display:flex;align-items:center;gap:8px}
.logo::before{content:'';width:9px;height:9px;border-radius:50%;background:var(--p);
  box-shadow:0 0 12px var(--p);animation:pd 2s ease infinite;flex-shrink:0}
.logo span{background:linear-gradient(135deg,var(--p),var(--c));-webkit-background-clip:text;-webkit-text-fill-color:transparent}
@keyframes pd{0%,100%{box-shadow:0 0 8px var(--p)}50%{box-shadow:0 0 20px var(--p),0 0 40px var(--c)}}
.nav-ul{display:flex;align-items:center;gap:2.5rem;list-style:none}
.nav-ul a{font-size:.82rem;font-weight:500;letter-spacing:.06em;text-transform:uppercase;color:var(--t2);transition:color .2s;position:relative}
.nav-ul a::after{content:'';position:absolute;bottom:-4px;left:0;right:0;height:1px;background:var(--p);transform:scaleX(0);transition:transform .3s}
.nav-ul a:hover{color:var(--t)}
.nav-ul a:hover::after{transform:scaleX(1)}
.nav-cta{background:var(--p)!important;color:#fff!important;padding:10px 22px;border-radius:100px;font-weight:600!important;
  box-shadow:0 0 18px rgba(124,58,237,.35);transition:all .3s!important}
.nav-cta::after{display:none!important}
.nav-cta:hover{background:#fff!important;color:var(--p)!important;box-shadow:0 0 36px rgba(124,58,237,.6)!important}

/* SECTIONS */
section{position:relative;z-index:2}
.inner{max-width:1160px;margin:0 auto;padding:0 4vw}
.eyebrow{font-size:.68rem;font-weight:700;letter-spacing:.2em;text-transform:uppercase;color:var(--p);margin-bottom:.875rem;display:block}
.stitle{font-family:var(--fh);font-size:clamp(2rem,5vw,3.2rem);font-weight:800;letter-spacing:-.03em;line-height:1.08;margin-bottom:1.25rem}
.stitle em{font-style:normal;color:var(--t2)}
.ssub{font-size:1rem;color:var(--t2);line-height:1.75;max-width:520px}

/* HERO */
#hero{min-height:100vh;display:flex;flex-direction:column;align-items:center;justify-content:center;
  text-align:center;padding:calc(var(--nav) + 4rem) 4vw 4rem;overflow:hidden}
.h-badge{display:inline-flex;align-items:center;gap:8px;font-size:.72rem;font-weight:600;
  letter-spacing:.15em;text-transform:uppercase;color:var(--c);border:1px solid rgba(0,212,255,.25);
  padding:6px 18px;border-radius:100px;margin-bottom:2rem;background:rgba(0,212,255,.04);
  backdrop-filter:blur(10px);opacity:0;transform:translateY(24px)}
.h-badge::before{content:'';width:6px;height:6px;border-radius:50%;background:var(--c);animation:pd 2s infinite}
h1.htitle{font-family:var(--fh);font-size:clamp(3rem,9vw,7.5rem);font-weight:800;
  line-height:.94;letter-spacing:-.045em;margin-bottom:1.75rem;opacity:0;transform:translateY(32px)}
.htitle .glow{background:linear-gradient(135deg,var(--p) 0%,var(--c) 100%);
  -webkit-background-clip:text;-webkit-text-fill-color:transparent}
.htitle .dim{color:var(--t2)}
.hsub{font-size:clamp(1rem,1.4vw,1.15rem);color:var(--t2);max-width:580px;line-height:1.75;
  margin-bottom:2.75rem;opacity:0;transform:translateY(20px)}
.hbtns{display:flex;gap:1rem;flex-wrap:wrap;justify-content:center;opacity:0;transform:translateY(20px)}
.btn-p{background:linear-gradient(135deg,var(--p),#a855f7);color:#fff;padding:15px 34px;
  border-radius:100px;font-weight:600;font-size:.95rem;border:none;cursor:pointer;
  box-shadow:0 0 28px rgba(124,58,237,.4);transition:all .3s;text-decoration:none;display:inline-flex;align-items:center;gap:8px}
.btn-p:hover{transform:translateY(-2px);box-shadow:0 0 54px rgba(124,58,237,.65)}
.btn-g{color:var(--t);padding:15px 34px;border-radius:100px;font-weight:500;font-size:.95rem;
  border:1px solid var(--br2);backdrop-filter:blur(10px);background:rgba(255,255,255,.03);
  transition:all .3s;text-decoration:none}
.btn-g:hover{border-color:var(--p);background:rgba(124,58,237,.1)}
.htags{display:flex;gap:.6rem;flex-wrap:wrap;justify-content:center;margin-top:3rem;opacity:0;transform:translateY(20px)}
.htag{font-size:.72rem;color:var(--t3);border:1px solid var(--br);padding:4px 14px;border-radius:100px;transition:all .25s}
.htag:hover{color:var(--p);border-color:var(--p)}
.hstats{display:flex;gap:3rem;flex-wrap:wrap;justify-content:center;margin-top:4.5rem;opacity:0;transform:translateY(20px);position:relative;z-index:2}
.hstat .n{font-family:var(--fh);font-size:2.4rem;font-weight:800;
  background:linear-gradient(135deg,var(--t),var(--c));-webkit-background-clip:text;-webkit-text-fill-color:transparent;line-height:1}
.hstat .l{font-size:.72rem;color:var(--t3);text-transform:uppercase;letter-spacing:.1em;margin-top:4px}

/* REVEAL */
.rv{opacity:0;transform:translateY(50px);transition:opacity .8s ease,transform .8s ease}
.rv.in{opacity:1;transform:translateY(0)}
.rv.l{transform:translateX(-50px)}
.rv.r{transform:translateX(50px)}
.rv.in.l,.rv.in.r{transform:translateX(0)}
.d1{transition-delay:.1s}.d2{transition-delay:.2s}.d3{transition-delay:.3s}.d4{transition-delay:.4s}

/* MARQUEE */
#mq{padding:60px 0;overflow:hidden;border-top:1px solid var(--br);border-bottom:1px solid var(--br);position:relative;z-index:2}
#mq::before,#mq::after{content:'';position:absolute;top:0;bottom:0;width:200px;z-index:2}
#mq::before{left:0;background:linear-gradient(90deg,var(--bg),transparent)}
#mq::after{right:0;background:linear-gradient(-90deg,var(--bg),transparent)}
.mqt{display:flex;gap:20px;animation:mqs 28s linear infinite;width:max-content}
.mqt:hover{animation-play-state:paused}
.mqi{display:flex;align-items:center;gap:12px;background:var(--surf);border:1px solid var(--br);
  border-radius:100px;padding:12px 26px;white-space:nowrap;font-size:.88rem;font-weight:500;color:var(--t2);transition:all .3s}
.mqi:hover{border-color:var(--p);color:var(--t);background:rgba(124,58,237,.08)}
.mqd{width:7px;height:7px;border-radius:50%;background:var(--p);flex-shrink:0}
@keyframes mqs{from{transform:translateX(0)}to{transform:translateX(-50%)}}

/* SERVICES */
#services{padding:120px 0}
.sv-hd{text-align:center;margin-bottom:70px}
.sv-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:1.5px;background:var(--br);
  border:1px solid var(--br);border-radius:20px;overflow:hidden}
.sv-card{background:var(--surf);padding:44px 36px;position:relative;overflow:hidden;transition:background .35s;cursor:default}
.sv-card::before{content:'';position:absolute;inset:0;background:linear-gradient(135deg,rgba(124,58,237,.07),transparent);opacity:0;transition:opacity .35s}
.sv-card:hover{background:var(--surf2)}
.sv-card:hover::before{opacity:1}
.sv-num{font-family:var(--fh);font-size:.65rem;font-weight:700;color:var(--p);letter-spacing:.18em;margin-bottom:20px}
.sv-ico{width:46px;height:46px;background:rgba(124,58,237,.1);border:1px solid rgba(124,58,237,.2);
  border-radius:12px;display:flex;align-items:center;justify-content:center;font-size:20px;margin-bottom:20px;transition:all .3s}
.sv-card:hover .sv-ico{background:rgba(124,58,237,.2);border-color:var(--p);box-shadow:0 0 18px rgba(124,58,237,.3)}
.sv-name{font-family:var(--fh);font-size:1.15rem;font-weight:700;margin-bottom:10px;letter-spacing:-.02em}
.sv-desc{font-size:.875rem;color:var(--t2);line-height:1.65;margin-bottom:20px}
.sv-list{list-style:none;margin-bottom:24px}
.sv-list li{font-size:.78rem;color:var(--t3);padding:3px 0;display:flex;align-items:center;gap:8px}
.sv-list li::before{content:'';width:4px;height:4px;border-radius:50%;background:var(--p);flex-shrink:0}
.sv-link{font-size:.8rem;color:var(--p);font-weight:600;display:flex;align-items:center;gap:6px;transition:gap .2s}
.sv-link:hover{gap:10px}
.sv-cta{background:linear-gradient(135deg,rgba(124,58,237,.15),rgba(0,212,255,.08));
  display:flex;flex-direction:column;justify-content:center;align-items:flex-start}

/* WHY US */
#why{padding:120px 0;background:var(--bg2)}
.why-lay{display:grid;grid-template-columns:1fr 1fr;gap:80px;align-items:center}
.why-cards{display:grid;grid-template-columns:1fr 1fr;gap:14px}
.wc{background:var(--surf);border:1px solid var(--br);border-radius:18px;padding:26px 22px;
  transition:all .4s;cursor:default;transform-style:preserve-3d}
.wc:hover{border-color:var(--p);transform:translateY(-5px) rotateX(4deg);
  box-shadow:0 20px 50px rgba(124,58,237,.2);background:var(--surf2)}
.wc-ico{font-size:22px;margin-bottom:14px}
.wc-title{font-family:var(--fh);font-size:.95rem;font-weight:700;margin-bottom:7px;letter-spacing:-.01em}
.wc-text{font-size:.8rem;color:var(--t2);line-height:1.6}

/* STATS */
#stats{padding:90px 0;background:linear-gradient(135deg,rgba(124,58,237,.12) 0%,transparent 50%,rgba(0,212,255,.06) 100%);
  border-top:1px solid var(--br);border-bottom:1px solid var(--br)}
.st-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:2rem;text-align:center}
.sn{font-family:var(--fh);font-size:clamp(2rem,5vw,3.2rem);font-weight:800;
  background:linear-gradient(135deg,var(--t),var(--c));-webkit-background-clip:text;-webkit-text-fill-color:transparent;line-height:1;margin-bottom:.4rem}
.sl{font-size:.78rem;color:var(--t3);text-transform:uppercase;letter-spacing:.1em}

/* WORK */
#work{padding:120px 0}
.wk-hd{text-align:center;margin-bottom:70px}
.wk-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:22px}
.wk-card{background:var(--surf);border:1px solid var(--br);border-radius:22px;overflow:hidden;
  transition:all .4s;position:relative}
.wk-card:hover{transform:translateY(-8px);border-color:var(--p);box-shadow:0 30px 70px rgba(124,58,237,.22)}
.wk-top{height:190px;display:flex;align-items:center;justify-content:center;position:relative;overflow:hidden}
.wk-card:nth-child(1) .wk-top{background:linear-gradient(135deg,#0d0d2e,#1a0a40)}
.wk-card:nth-child(2) .wk-top{background:linear-gradient(135deg,#00140f,#001f2e)}
.wk-card:nth-child(3) .wk-top{background:linear-gradient(135deg,#1a0000,#0d0020)}
.wk-ico{font-size:2.8rem;position:relative;z-index:1;filter:drop-shadow(0 0 18px currentColor)}
.wk-badge{font-size:.62rem;font-weight:700;letter-spacing:.14em;text-transform:uppercase;padding:3px 12px;border-radius:100px;position:relative;z-index:1;margin-top:8px}
.ba{background:rgba(124,58,237,.2);color:var(--p);border:1px solid rgba(124,58,237,.3)}
.bb{background:rgba(0,212,255,.1);color:var(--c);border:1px solid rgba(0,212,255,.3)}
.bc{background:rgba(245,200,66,.1);color:var(--g);border:1px solid rgba(245,200,66,.3)}
.wk-body{padding:28px}
.wk-name{font-family:var(--fh);font-size:1.2rem;font-weight:700;letter-spacing:-.02em;margin-bottom:8px}
.wk-desc{font-size:.845rem;color:var(--t2);line-height:1.65;margin-bottom:20px}
.wk-met{display:flex;gap:20px}
.wm-v{font-family:var(--fh);font-size:1.45rem;font-weight:800;color:var(--c)}
.wm-l{font-size:.68rem;color:var(--t3);text-transform:uppercase;letter-spacing:.08em;margin-top:.2rem}
.wk-top-inner{display:flex;flex-direction:column;align-items:center;gap:8px}

/* PROCESS */
#process{padding:120px 0;background:var(--bg2)}
.pr-hd{text-align:center;margin-bottom:90px}
.pr-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:22px;position:relative}
.pr-grid::before{content:'';position:absolute;top:52px;left:10%;right:10%;height:1px;
  background:linear-gradient(90deg,transparent,var(--p),var(--c),var(--p),transparent);
  animation:gl 3s ease infinite}
@keyframes gl{0%,100%{opacity:.4}50%{opacity:1}}
.pr-step{text-align:center;position:relative;z-index:1}
.pr-num{width:76px;height:76px;border-radius:50%;background:var(--surf);border:1px solid var(--br);
  display:flex;align-items:center;justify-content:center;margin:0 auto 24px;
  font-family:var(--fh);font-size:1.4rem;font-weight:800;color:var(--p);transition:all .4s}
.pr-step:hover .pr-num{background:var(--p);color:#fff;box-shadow:0 0 28px rgba(124,58,237,.5);transform:scale(1.1)}
.pr-title{font-family:var(--fh);font-size:1rem;font-weight:700;margin-bottom:10px;letter-spacing:-.01em}
.pr-text{font-size:.835rem;color:var(--t2);line-height:1.65}

/* INDUSTRIES */
#industries{padding:120px 0}
.in-hd{text-align:center;margin-bottom:55px}
.in-grid{display:grid;grid-template-columns:repeat(7,1fr);gap:10px}
.in-item{background:var(--surf);border:1px solid var(--br);border-radius:14px;padding:22px 10px;
  text-align:center;transition:all .3s;cursor:default}
.in-item:hover{border-color:var(--p);background:rgba(124,58,237,.08);transform:translateY(-4px)}
.in-ico{font-size:1.8rem;margin-bottom:8px}
.in-name{font-size:.7rem;color:var(--t2);font-weight:500;line-height:1.3}

/* FAQ */
#faq{padding:120px 0;background:var(--bg2)}
.fq-hd{text-align:center;margin-bottom:55px}
.fq-grid{display:grid;grid-template-columns:1fr 1fr;gap:12px}
.fq-item{background:var(--surf);border:1px solid var(--br);border-radius:14px;overflow:hidden}
.fq-q{width:100%;display:flex;align-items:center;justify-content:space-between;gap:1rem;
  padding:1.2rem 1.5rem;background:none;border:none;text-align:left;font-family:var(--fb);
  font-size:.92rem;font-weight:600;color:var(--t);transition:color .2s;cursor:pointer}
.fq-q:hover{color:var(--p)}
.fq-arr{flex-shrink:0;width:20px;height:20px;border-radius:50%;background:var(--surf2);
  display:flex;align-items:center;justify-content:center;font-size:.7rem;color:var(--t2);transition:transform .3s,background .2s}
.fq-item.open .fq-arr{transform:rotate(180deg);background:rgba(124,58,237,.15);color:var(--p)}
.fq-a{font-size:.855rem;color:var(--t2);line-height:1.75;max-height:0;overflow:hidden;
  transition:max-height .4s ease,padding .3s;padding:0 1.5rem}
.fq-item.open .fq-a{max-height:300px;padding:0 1.5rem 1.2rem}

/* CTA */
#cta{padding:100px 0;position:relative;overflow:hidden}
.cta-box{background:var(--surf);border:1px solid var(--br2);border-radius:28px;padding:76px;
  text-align:center;position:relative;overflow:hidden}
.cta-box::before{content:'';position:absolute;inset:0;
  background:radial-gradient(ellipse 60% 70% at 20% 50%,rgba(124,58,237,.1),transparent),
             radial-gradient(ellipse 60% 70% at 80% 50%,rgba(0,212,255,.07),transparent)}
.cta-title{font-family:var(--fh);font-size:clamp(2rem,5vw,3.2rem);font-weight:800;
  letter-spacing:-.03em;position:relative;margin-bottom:1.2rem}
.cta-sub{color:var(--t2);font-size:1rem;position:relative;margin-bottom:2.5rem}
.cta-btns{display:flex;gap:1rem;justify-content:center;position:relative;flex-wrap:wrap}

/* FOOTER */
footer{background:var(--bg2);border-top:1px solid var(--br);padding:70px 0 36px;position:relative;z-index:2}
.ft-inner{max-width:1160px;margin:0 auto;padding:0 4vw}
.ft-top{display:grid;grid-template-columns:2fr 1fr 1fr 1fr;gap:50px;margin-bottom:50px}
.ft-brand .bn{font-family:var(--fh);font-size:1.45rem;font-weight:800;margin-bottom:14px;display:flex;align-items:center;gap:8px}
.ft-brand .bn span{background:linear-gradient(135deg,var(--p),var(--c));-webkit-background-clip:text;-webkit-text-fill-color:transparent}
.ft-brand p{font-size:.845rem;color:var(--t2);line-height:1.7;margin-bottom:20px;max-width:260px}
.ft-email{color:var(--c);font-size:.845rem;transition:color .2s}
.ft-email:hover{color:#93c5fd}
.ft-col h4{font-family:var(--fh);font-size:.68rem;font-weight:700;letter-spacing:.15em;text-transform:uppercase;color:var(--t3);margin-bottom:18px}
.ft-col ul{list-style:none}
.ft-col li{margin-bottom:9px}
.ft-col a{font-size:.845rem;color:var(--t2);transition:color .2s}
.ft-col a:hover{color:var(--p)}
.ft-bot{border-top:1px solid var(--br);padding-top:28px;display:flex;align-items:center;justify-content:space-between;gap:16px;flex-wrap:wrap}
.ft-copy{font-size:.76rem;color:var(--t3)}
.ft-links{display:flex;gap:20px}
.ft-links a{font-size:.76rem;color:var(--t3);transition:color .2s}
.ft-links a:hover{color:var(--t2)}

/* MODAL */
.modal-bg{position:fixed;inset:0;z-index:500;background:rgba(3,3,7,.88);backdrop-filter:blur(22px);display:none;align-items:center;justify-content:center;padding:1rem}
.modal-bg.open{display:flex}
.modal-box{background:var(--surf);border:1px solid var(--br2);border-radius:22px;width:100%;max-width:500px;padding:44px;position:relative;max-height:90vh;overflow-y:auto;animation:mop .35s cubic-bezier(.34,1.56,.64,1)}
@keyframes mop{from{opacity:0;transform:scale(.9) translateY(18px)}to{opacity:1;transform:none}}
.modal-x{position:absolute;top:18px;right:18px;width:30px;height:30px;background:var(--surf2);border:1px solid var(--br);color:var(--t2);border-radius:50%;display:flex;align-items:center;justify-content:center;cursor:pointer;font-size:14px;transition:all .2s}
.modal-x:hover{border-color:var(--p);color:var(--t)}
.mst{display:none}.mst.act{display:block}
.mt{font-family:var(--fh);font-size:1.5rem;font-weight:800;letter-spacing:-.03em;margin-bottom:8px}
.ms{color:var(--t2);font-size:.88rem;margin-bottom:28px;line-height:1.55}
.mpg{display:flex;gap:7px;margin-bottom:28px}
.mpg span{height:3px;border-radius:2px;flex:1;background:var(--br2);transition:background .3s}
.mpg span.on{background:var(--p)}
.mchips{display:flex;flex-wrap:wrap;gap:9px;margin-bottom:22px}
.mchip{padding:9px 18px;border:1px solid var(--br);border-radius:100px;font-size:.83rem;color:var(--t2);cursor:pointer;background:none;font-family:var(--fb);transition:all .2s}
.mchip.s,.mchip:hover{border-color:var(--p);color:var(--p);background:rgba(124,58,237,.1)}
.fg{margin-bottom:18px}
.fg label{display:block;font-size:.76rem;font-weight:600;color:var(--t2);margin-bottom:7px;letter-spacing:.05em;text-transform:uppercase}
.fg input,.fg textarea{width:100%;background:var(--surf2);border:1px solid var(--br);border-radius:10px;padding:12px 16px;color:var(--t);font-family:var(--fb);font-size:.92rem;outline:none;transition:border-color .2s}
.fg input:focus,.fg textarea:focus{border-color:var(--p);box-shadow:0 0 0 3px rgba(124,58,237,.12)}
.fg textarea{resize:vertical;min-height:90px}
.sbox{background:var(--surf2);border:1px solid var(--br);border-radius:10px;padding:1.1rem;margin-bottom:18px}
.srow{font-size:.845rem;color:var(--t2);padding:.28rem 0}
.mbtns{display:flex;gap:.7rem}
.mbk{padding:.7rem 1.4rem;border-radius:8px;border:1px solid var(--br2);background:none;color:var(--t2);font-family:var(--fb);font-weight:600;font-size:.875rem;transition:all .2s;cursor:pointer}
.mbk:hover{border-color:var(--p);color:var(--p)}
.mbl{list-style:none;margin-bottom:24px;display:flex;flex-direction:column;gap:10px}
.mbl li{display:flex;align-items:center;gap:10px;font-size:.875rem;color:var(--t2)}
.mbl li::before{content:'✓';width:20px;height:20px;border-radius:50%;background:rgba(124,58,237,.15);color:var(--p);display:flex;align-items:center;justify-content:center;font-size:.66rem;font-weight:700;flex-shrink:0}

/* RESPONSIVE */
@media(max-width:900px){
  .sv-grid,.wk-grid,.fq-grid{grid-template-columns:1fr 1fr}
  .why-lay{grid-template-columns:1fr}
  .st-grid{grid-template-columns:repeat(2,1fr)}
  .pr-grid{grid-template-columns:1fr 1fr}
  .pr-grid::before{display:none}
  .in-grid{grid-template-columns:repeat(4,1fr)}
  .ft-top{grid-template-columns:1fr 1fr}
}
@media(max-width:580px){
  .nav-ul{display:none}
  .sv-grid,.wk-grid,.fq-grid{grid-template-columns:1fr}
  .why-cards{grid-template-columns:1fr}
  .in-grid{grid-template-columns:repeat(2,1fr)}
  .ft-top{grid-template-columns:1fr}
  .cta-box{padding:36px 22px}
  .modal-box{padding:30px 22px}
}
</style>
</head>
<body>

<div id="cur"></div><div id="cur2"></div>
<div id="prog"></div>
<canvas id="warp"></canvas>

<!-- NAV -->
<nav id="nav">
  <a href="index.php" class="logo">Digi<span>9</span></a>
  <ul class="nav-ul">
    <li><a href="#services">Services</a></li>
    <li><a href="#work">Work</a></li>
    <li><a href="#why">About</a></li>
    <li><a href="#process">Process</a></li>
    <li><a href="insights.php">Insights</a></li>
    <li><a href="#" class="nav-cta" onclick="openM(event)">Book a Call</a></li>
  </ul>
</nav>

<!-- HERO -->
<section id="hero">
  <div class="h-badge" id="hb">AI &amp; Software Development &middot; Bangalore, India</div>
  <h1 class="htitle" id="ht">
    <span class="glow">AI Software</span><br>
    <span class="dim">&amp; App Development</span><br>
    <span>Company</span>
  </h1>
  <p class="hsub" id="hs">We build intelligent systems, automation tools, and scalable applications engineered specifically for your complex operations.</p>
  <div class="hbtns" id="hbtn">
    <a href="#" class="btn-p" onclick="openM(event)">Book a Consultation</a>
    <a href="#services" class="btn-g">Explore Services &rarr;</a>
  </div>
  <div class="htags" id="htg">
    <?php foreach(['AI Development','Web Apps','Mobile','Enterprise','Automation','LLM','RAG','Edge AI'] as $t): ?>
    <span class="htag"><?= $t ?></span>
    <?php endforeach; ?>
  </div>
  <div class="hstats" id="hst">
    <?php foreach([['50+','Projects'],['8+','Years'],['30+','Clients'],['7','Industries']] as $s): ?>
    <div class="hstat"><div class="n"><?= $s[0] ?></div><div class="l"><?= $s[1] ?></div></div>
    <?php endforeach; ?>
  </div>
</section>

<!-- MARQUEE -->
<div id="mq">
  <?php $caps=['Supply Chain AI','Smart Fitness Apps','Automated Support','Enterprise Dashboards','Recommendation Engines','Predictive Analytics','Customer Portals','Workflow Automation','LLM Fine-tuning','Computer Vision','RAG Systems','Edge AI'];$all=array_merge($caps,$caps); ?>
  <div class="mqt">
    <?php foreach($all as $c): ?><div class="mqi"><span class="mqd"></span><?= htmlspecialchars($c) ?></div><?php endforeach; ?>
  </div>
</div>

<!-- SERVICES -->
<section id="services">
  <div class="inner">
    <div class="sv-hd rv"><span class="eyebrow">Our Focus</span><h2 class="stitle">Meet Your <em>Technical Partners</em></h2></div>
    <div class="sv-grid rv d1">
      <?php
      $svcs=[
        ['01','🤖','AI Software Development','Custom enterprise AI systems engineered from scratch to automate high-complexity workflows.',['Custom enterprise AI','LLM applications','Predictive analytics','Intelligence engines'],'ai-software-development.php'],
        ['02','💻','Web Application Development','Smart, AI-integrated web applications built for scalability and enterprise-grade usage.',['Smart web applications','AI-integrated portals','Intelligent dashboards','Customer platforms'],'web-application-development.php'],
        ['03','📱','Mobile App Development','Intelligent mobile experiences with native and cross-platform capabilities built for scale.',['Intelligent mobile apps','Recommendation engines','Predictive UX','AI-driven workflows'],'mobile-application-development.php'],
        ['04','🏢','Custom Enterprise Software','Software that matches your exact business logic — from admin platforms to command centers.',['Admin platforms','Command centers','Real-time visibility','AI-powered insights'],'custom-software.php'],
        ['05','⚡','Automation & Integration','Accelerate growth by eliminating gaps between internal systems with intelligent automation.',['Workflow automation','Systems integration','Process optimization','Legacy modernization'],'solutions.php'],
      ];
      foreach($svcs as $s): ?>
      <div class="sv-card">
        <div class="sv-num"><?= $s[0] ?></div>
        <div class="sv-ico"><?= $s[1] ?></div>
        <div class="sv-name"><?= htmlspecialchars($s[2]) ?></div>
        <p class="sv-desc"><?= htmlspecialchars($s[3]) ?></p>
        <ul class="sv-list"><?php foreach($s[4] as $i): ?><li><?= htmlspecialchars($i) ?></li><?php endforeach; ?></ul>
        <a href="<?= $s[5] ?>" class="sv-link">View Details &rarr;</a>
      </div>
      <?php endforeach; ?>
      <div class="sv-card sv-cta">
        <span class="eyebrow">Have a project?</span>
        <h3 style="font-family:var(--fh);font-size:1.35rem;font-weight:800;letter-spacing:-.02em;margin:14px 0;line-height:1.2">Let's map out your project together.</h3>
        <a href="#" class="btn-p" onclick="openM(event)" style="font-size:.88rem;padding:12px 24px">Book a Consultation</a>
      </div>
    </div>
  </div>
</section>

<!-- WHY US -->
<section id="why">
  <div class="inner">
    <div class="why-lay">
      <div class="rv l">
        <span class="eyebrow">Our Advantage</span>
        <h2 class="stitle">Why Businesses <em>Choose Digi9</em></h2>
        <p class="ssub" style="margin-bottom:2rem">We don't just deliver code. We solve bottlenecks, unlock growth levers, and become your long-term technical partners.</p>
      </div>
      <div class="why-cards rv r">
        <?php foreach([
          ['⚙️','Engineering Excellence','Deep expertise in AI integration, LLM fine-tuning, and scalable cloud architecture.'],
          ['🎯','Custom First','No white-label. Pure custom builds for your specific business logic.'],
          ['📈','Outcome Oriented','We solve real bottlenecks and measure success by ROI — not lines of code.'],
          ['🌍','Real Experience','Direct experience with high-growth startups and global enterprise clients.'],
          ['🔄','End-to-End Build','Discovery, Design, Engineering, Deployment — all handled by one team.'],
          ['🚀','Rapid Delivery','Weekly demos so you start seeing ROI early in the project lifecycle.'],
        ] as $w): ?>
        <div class="wc">
          <div class="wc-ico"><?= $w[0] ?></div>
          <div class="wc-title"><?= htmlspecialchars($w[1]) ?></div>
          <p class="wc-text"><?= htmlspecialchars($w[2]) ?></p>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<!-- STATS -->
<section id="stats">
  <div class="inner">
    <div class="st-grid">
      <?php foreach([['50','Projects Delivered','+'],['8','Years of Expertise','+'],['30','Enterprise Clients','+'],['7','Industries Served','']] as $s): ?>
      <div class="rv"><div class="sn" data-n="<?= $s[0] ?>" data-s="<?= $s[2] ?>"><?= $s[0].$s[2] ?></div><div class="sl"><?= $s[1] ?></div></div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- WORK -->
<section id="work">
  <div class="inner">
    <div class="wk-hd rv"><span class="eyebrow">Case Studies</span><h2 class="stitle">Project <em>Portfolios</em></h2></div>
    <div class="wk-grid">
      <?php foreach([
        ['📦','ba','AI Logistics','Supply Chain AI','Smart demand forecasting and automated logistics optimization for multi-warehouse operations.',['34%','Efficiency'],['2.8x','Speed']],
        ['🏋️','bb','Computer Vision','Fitness Biometrics','Real-time form analysis using edge-AI for instant athlete feedback and continuous progress tracking.',['120K+','Users'],['99.2%','Accuracy']],
        ['🤖','bc','LLM Agents','Autonomous Support','Intelligent customer-service agents handling complex multi-step fintech inquiries autonomously.',['72%','Resolution'],['94%','CSAT']],
      ] as $w): ?>
      <div class="wk-card rv">
        <div class="wk-top"><div class="wk-top-inner"><div class="wk-ico"><?= $w[0] ?></div><span class="wk-badge <?= $w[1] ?>"><?= $w[2] ?></span></div></div>
        <div class="wk-body">
          <div class="wk-name"><?= htmlspecialchars($w[3]) ?></div>
          <p class="wk-desc"><?= htmlspecialchars($w[4]) ?></p>
          <div class="wk-met">
            <div><div class="wm-v"><?= $w[5][0] ?></div><div class="wm-l"><?= $w[5][1] ?></div></div>
            <div><div class="wm-v"><?= $w[6][0] ?></div><div class="wm-l"><?= $w[6][1] ?></div></div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
    <div style="text-align:center;margin-top:44px" class="rv"><a href="work.php" class="btn-g">See More Projects &rarr;</a></div>
  </div>
</section>

<!-- PROCESS -->
<section id="process">
  <div class="inner">
    <div class="pr-hd rv"><span class="eyebrow">Methodology</span><h2 class="stitle">The Blueprint <em>to Delivery</em></h2></div>
    <div class="pr-grid">
      <?php foreach([
        ['01','Discovery & Analysis','We deep-dive into your workflows to identify where AI or software creates the most leverage.'],
        ['02','Architecture Blueprint','We design a robust foundation ensuring security and scalability before writing a single line.'],
        ['03','Iterative Engineering','High-speed modular development with weekly demos. ROI starts early in the lifecycle.'],
        ['04','Production Scale','Rigorous stress-testing and automated deployment built for explosive growth.'],
      ] as $i=>$s): ?>
      <div class="pr-step rv d<?= $i+1 ?>">
        <div class="pr-num"><?= $s[0] ?></div>
        <div class="pr-title"><?= htmlspecialchars($s[1]) ?></div>
        <p class="pr-text"><?= htmlspecialchars($s[2]) ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- INDUSTRIES -->
<section id="industries">
  <div class="inner">
    <div class="in-hd rv"><span class="eyebrow">Expertise</span><h2 class="stitle">Sectors We've <em>Impacted</em></h2></div>
    <div class="in-grid rv d1">
      <?php foreach([['🏥','Healthcare & MedTech'],['💰','Financial Services'],['🚛','Supply Chain'],['🛒','E-Commerce'],['💪','Fitness & Wellness'],['☁️','Enterprise SaaS'],['🏠','Real Estate']] as $i): ?>
      <div class="in-item"><div class="in-ico"><?= $i[0] ?></div><div class="in-name"><?= htmlspecialchars($i[1]) ?></div></div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- FAQ -->
<section id="faq">
  <div class="inner">
    <div class="fq-hd rv"><span class="eyebrow">FAQs</span><h2 class="stitle">Frequently Asked <em>Questions</em></h2></div>
    <div class="fq-grid">
      <?php foreach([
        ['Why choose Digi9 over a larger agency?','We operate with the speed of a specialist studio with full-stack capability. No account managers — you talk directly to the engineers building your product.'],
        ['What industries do you specialize in?','Healthcare, fintech, logistics, e-commerce, fitness, enterprise SaaS, and real estate. We bring domain expertise alongside deep technical skills.'],
        ['How long does a typical project take?','Most projects run 8–20 weeks from discovery to production. We use iterative sprints with weekly demos so you see ROI early.'],
        ['Do you support existing codebases?','Both greenfield and existing. We\'ve modernized legacy systems, extended platforms, and built from scratch — discovery determines the best approach.'],
        ['What AI technologies do you use?','OpenAI, Anthropic, Gemini, Llama, Mistral, RAG architectures, LangChain, vector databases, computer vision pipelines, and custom ML models.'],
        ['How do you handle IP and confidentiality?','All code and IP belongs to you. We sign NDAs before any discovery call and operate under strict confidentiality protocols.'],
      ] as $f): ?>
      <div class="fq-item rv">
        <button class="fq-q" onclick="faq(this)"><?= htmlspecialchars($f[0]) ?><span class="fq-arr">▼</span></button>
        <div class="fq-a"><?= htmlspecialchars($f[1]) ?></div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- CTA -->
<section id="cta">
  <div class="inner">
    <div class="cta-box rv">
      <h2 class="cta-title">Let's Build What Your Business<br><span style="background:linear-gradient(135deg,var(--p),var(--c));-webkit-background-clip:text;-webkit-text-fill-color:transparent">Actually Needs</span></h2>
      <p class="cta-sub">Free consultation. No pressure. Talk directly with our engineering team.</p>
      <div class="cta-btns">
        <a href="#" class="btn-p" onclick="openM(event)">Book a Consultation</a>
        <a href="#services" class="btn-g">View Services</a>
      </div>
    </div>
  </div>
</section>

<!-- FOOTER -->
<footer>
  <div class="ft-inner">
    <div class="ft-top">
      <div class="ft-brand">
        <div class="bn">Digi<span>9</span></div>
        <p>Building real systems for real businesses. An AI and custom software development company based in Bangalore, India.</p>
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
        <li><a href="#" onclick="openM(event)">Book a Call</a></li>
      </ul></div>
    </div>
    <div class="ft-bot">
      <div class="ft-copy">&copy; <?= $year ?> Digi9. All rights reserved &middot; Made with &hearts; in Bangalore</div>
      <div class="ft-links"><a href="#">Privacy</a><a href="#">Terms</a></div>
    </div>
  </div>
</footer>

<!-- MODAL -->
<div class="modal-bg" id="mbg" onclick="closeBg(event)">
  <div class="modal-box">
    <button class="modal-x" onclick="closeM()">&#x2715;</button>
    <div class="mst act" id="ms1">
      <div style="font-size:2.4rem;margin-bottom:14px">🚀</div>
      <div class="mt">Let's get you started</div>
      <p class="ms">Free consultation. Takes under 60 seconds to book.</p>
      <ul class="mbl">
        <li>Personalized consultation walkthrough</li><li>Custom strategy for your business</li>
        <li>Zero pressure, zero obligation</li><li>Direct access to our engineering team</li>
      </ul>
      <button class="btn-p" style="width:100%;justify-content:center;border:none" onclick="mgo(2)">Start Booking &rarr;</button>
    </div>
    <div class="mst" id="ms2">
      <div class="mpg"><span class="on"></span><span></span><span></span><span></span></div>
      <div class="mt">👋 Who are you?</div>
      <p class="ms">Just the basics to get started.</p>
      <div class="fg"><label>Your Name</label><input id="mn" type="text" placeholder="e.g. Priya Sharma"></div>
      <div class="fg"><label>Email Address</label><input id="me" type="email" placeholder="you@company.com"></div>
      <div class="fg"><label>Phone (optional)</label><input id="mp" type="tel" placeholder="+91 9876543210"></div>
      <div class="mbtns"><button class="mbk" onclick="mgo(1)">&larr; Back</button><button class="btn-p" style="flex:1;justify-content:center;border:none" onclick="mv2()">Continue &rarr;</button></div>
    </div>
    <div class="mst" id="ms3">
      <div class="mpg"><span class="on"></span><span class="on"></span><span></span><span></span></div>
      <div class="mt">🎯 What are you building?</div>
      <p class="ms">Helps us prepare a relevant consultation.</p>
      <div class="mchips">
        <?php foreach(['🤖 AI Software','💻 Web App','📱 Mobile App','⚡ Automation','📊 Dashboard','💡 Not Sure'] as $c): ?>
        <button class="mchip" onclick="this.classList.toggle('s')"><?= $c ?></button>
        <?php endforeach; ?>
      </div>
      <div class="fg"><label>Notes (optional)</label><textarea id="mnt" placeholder="Tell us about your project..."></textarea></div>
      <div class="mbtns"><button class="mbk" onclick="mgo(2)">&larr; Back</button><button class="btn-p" style="flex:1;justify-content:center;border:none" onclick="mgo(4)">Review &rarr;</button></div>
    </div>
    <div class="mst" id="ms4">
      <div class="mpg"><span class="on"></span><span class="on"></span><span class="on"></span><span></span></div>
      <div class="mt">📋 Confirm Booking</div>
      <p class="ms">Does everything look right?</p>
      <div class="sbox" id="msb"></div>
      <div class="mbtns"><button class="mbk" onclick="mgo(3)">&larr; Edit</button><button class="btn-p" style="flex:1;justify-content:center;border:none" onclick="mgo(5)">Confirm ✓</button></div>
    </div>
    <div class="mst" id="ms5">
      <div style="font-size:3.2rem;text-align:center;margin-bottom:14px">✅</div>
      <div class="mt" style="text-align:center">You're all set!</div>
      <p class="ms" style="text-align:center">We'll reach out within 24 hours. Our engineering team will be in touch directly.</p>
      <button class="btn-p" style="width:100%;justify-content:center;border:none;margin-top:8px" onclick="closeM()">Done</button>
    </div>
  </div>
</div>

<script>
/* ── CURSOR ── */
const cur=document.getElementById('cur'),cur2=document.getElementById('cur2');
let cx=0,cy=0,tx=0,ty=0;
document.addEventListener('mousemove',e=>{
  cx=e.clientX;cy=e.clientY;
  cur.style.left=cx-5+'px';cur.style.top=cy-5+'px';
});
(function loop(){tx+=(cx-tx)*.13;ty+=(cy-ty)*.13;cur2.style.left=tx-18+'px';cur2.style.top=ty-18+'px';requestAnimationFrame(loop)})();
document.querySelectorAll('a,button,.mchip,.fq-q,.sv-card,.wk-card,.wc,.in-item').forEach(el=>{
  el.addEventListener('mouseenter',()=>{cur.style.transform='scale(2.5)';cur2.style.transform='scale(1.4)'});
  el.addEventListener('mouseleave',()=>{cur.style.transform='';cur2.style.transform=''});
});

/* ── WARP DRIVE BACKGROUND ── */
(function(){
  const canvas=document.getElementById('warp');
  const ctx=canvas.getContext('2d');
  let W,H,stars=[],lastY=0,warp=0;

  function resize(){W=canvas.width=window.innerWidth;H=canvas.height=window.innerHeight}
  resize();window.addEventListener('resize',resize);

  /* Create stars */
  function mkStar(){return{x:(Math.random()-0.5)*W*2,y:(Math.random()-0.5)*H*2,z:Math.random()*W,pz:0}}
  for(let i=0;i<700;i++)stars.push(mkStar());

  /* Scroll warp */
  window.addEventListener('scroll',()=>{
    const dy=Math.abs(window.scrollY-lastY);
    warp=Math.min(dy*0.35,18);lastY=window.scrollY;
    document.getElementById('prog').style.width=(window.scrollY/(document.body.scrollHeight-window.innerHeight)*100)+'%';
    document.getElementById('nav').classList.toggle('on',window.scrollY>30);
  });

  /* Nebula blobs */
  const blobs=[
    {x:.15,y:.2,r:350,c:'rgba(124,58,237,'},
    {x:.85,y:.75,r:280,c:'rgba(59,130,246,'},
    {x:.5,y:.5,r:200,c:'rgba(0,212,255,'},
    {x:.25,y:.8,r:180,c:'rgba(124,58,237,'},
  ];

  let t=0;
  function draw(){
    requestAnimationFrame(draw);
    ctx.fillStyle='rgba(3,3,7,0.18)';
    ctx.fillRect(0,0,W,H);
    t+=0.003;
    warp*=0.88;
    // Boost from scroll dolly
    if(window._warpBoost&&window._warpBoost>1){warp+=window._warpBoost*.4;}

    /* Nebula */
    blobs.forEach((b,i)=>{
      const bx=b.x*W+Math.sin(t+i)*60,by=b.y*H+Math.cos(t*0.7+i)*40;
      const gr=ctx.createRadialGradient(bx,by,0,bx,by,b.r+Math.sin(t+i)*40);
      gr.addColorStop(0,b.c+'0.04)');
      gr.addColorStop(1,b.c+'0)');
      ctx.fillStyle=gr;ctx.beginPath();ctx.arc(bx,by,b.r+100,0,Math.PI*2);ctx.fill();
    });

    /* Stars warp */
    const cx2=W/2,cy2=H/2;
    stars.forEach(s=>{
      s.pz=s.z;
      s.z-=1.2+warp;
      if(s.z<=0){Object.assign(s,mkStar());s.z=W;s.pz=W}
      const sx=((s.x/s.z)*W)+cx2,sy=((s.y/s.z)*H)+cy2;
      const px=((s.x/s.pz)*W)+cx2,py=((s.y/s.pz)*H)+cy2;
      const size=Math.max(.4,(1-s.z/W)*2.8);
      const brightness=Math.min(1,(1-s.z/W)*1.8);
      const stretch=1+warp*.15;
      ctx.beginPath();
      ctx.moveTo(px,py);
      ctx.lineTo(sx+(sx-px)*stretch,sy+(sy-py)*stretch);
      const hue=s.x>0?220:260;
      ctx.strokeStyle=`hsla(${hue},80%,75%,${brightness*.7})`;
      ctx.lineWidth=size;
      ctx.stroke();
    });
  }
  /* Initial fill */
  ctx.fillStyle='#030307';ctx.fillRect(0,0,W,H);
  draw();
})();

/* ── HERO ENTRANCE ── */
(function(){
  const els=[['#hb',.15],['#ht',.3],['#hs',.5],['#hbtn',.65],['#htg',.8],['#hst',.95]];
  els.forEach(([id,delay])=>{
    setTimeout(()=>{
      const el=document.querySelector(id);
      if(el){el.style.transition='opacity .8s ease, transform .8s ease';el.style.opacity='1';el.style.transform='translateY(0)'}
    },delay*1000);
  });
})();

/* ── SCROLL REVEALS ── */
const ro=new IntersectionObserver(es=>{es.forEach(e=>{if(e.isIntersecting)e.target.classList.add('in')})},{threshold:.12});
document.querySelectorAll('.rv').forEach(el=>ro.observe(el));

/* ── SECTION 3D ENTRANCE EFFECTS via GSAP ── */
if(typeof gsap!=='undefined'){
  gsap.registerPlugin(ScrollTrigger);

  /* Services — rise from below with depth */
  gsap.utils.toArray('.sv-card').forEach((el,i)=>{
    gsap.fromTo(el,{opacity:0,y:80,rotateX:15,z:-60},{
      opacity:1,y:0,rotateX:0,z:0,duration:1,ease:'power3.out',delay:i*.08,
      scrollTrigger:{trigger:el,start:'top 88%'}
    });
  });

  /* Work cards — meteor from different angles */
  const angles=[[-120,-60],[-40,80],[120,-50]];
  gsap.utils.toArray('.wk-card').forEach((el,i)=>{
    gsap.fromTo(el,{opacity:0,x:angles[i][0],y:angles[i][1],rotation:angles[i][0]*.06},{
      opacity:1,x:0,y:0,rotation:0,duration:1.1,ease:'power3.out',delay:i*.12,
      scrollTrigger:{trigger:'#work',start:'top 75%'}
    });
  });

  /* Process steps — float from space */
  gsap.utils.toArray('.pr-step').forEach((el,i)=>{
    gsap.fromTo(el,{opacity:0,y:100,scale:.7},{
      opacity:1,y:0,scale:1,duration:.9,ease:'back.out(1.4)',delay:i*.15,
      scrollTrigger:{trigger:'#process',start:'top 78%'}
    });
  });

  /* Why cards — 3D flip in */
  gsap.utils.toArray('.wc').forEach((el,i)=>{
    gsap.fromTo(el,{opacity:0,rotateY:90,x:40},{
      opacity:1,rotateY:0,x:0,duration:.85,ease:'power3.out',delay:i*.1,
      scrollTrigger:{trigger:'#why',start:'top 78%'}
    });
  });

  /* Industries — scatter assemble */
  gsap.utils.toArray('.in-item').forEach((el,i)=>{
    const ox=(Math.random()-.5)*200,oy=(Math.random()-.5)*200;
    gsap.fromTo(el,{opacity:0,x:ox,y:oy,scale:.5},{
      opacity:1,x:0,y:0,scale:1,duration:1,ease:'power3.out',delay:i*.06,
      scrollTrigger:{trigger:'#industries',start:'top 80%'}
    });
  });

  /* Stats — 3D Slot Machine Drum Roll */
  gsap.utils.toArray('.sn').forEach((el,i)=>{
    // Wrap in drum container
    const parent=el.parentElement;
    const drum=document.createElement('div');
    drum.style.cssText='overflow:hidden;height:1.15em;perspective:300px;display:block';
    el.style.cssText+='display:block;transform-origin:50% 50% -20px;will-change:transform,opacity';
    parent.insertBefore(drum,el);
    drum.appendChild(el);

    ScrollTrigger.create({trigger:'#stats',start:'top 80%',once:true,onEnter:()=>{
      // 3D roll-in
      gsap.fromTo(el,
        {rotateX:90,opacity:0,y:'100%'},
        {rotateX:0,opacity:1,y:0,duration:.9,delay:i*.18,ease:'back.out(1.6)',
         onStart:()=>{
           let c=0,t=parseInt(el.dataset.n),sf=el.dataset.s||'';
           const step=Math.ceil(t/60);
           const timer=setInterval(()=>{c=Math.min(c+step,t);el.textContent=c+sf;if(c>=t)clearInterval(timer)},22);
         }
        }
      );
    }});
  });

  /* CTA — zoom from far */
  gsap.fromTo('.cta-box',{opacity:0,scale:.85,y:60},{
    opacity:1,scale:1,y:0,duration:1.1,ease:'power3.out',
    scrollTrigger:{trigger:'#cta',start:'top 80%'}
  });

  /* FAQ items — drop from above */
  gsap.utils.toArray('.fq-item').forEach((el,i)=>{
    gsap.fromTo(el,{opacity:0,y:-40,rotateX:-20},{
      opacity:1,y:0,rotateX:0,duration:.75,ease:'power3.out',delay:i*.07,
      scrollTrigger:{trigger:'#faq',start:'top 80%'}
    });
  });
}

/* ── 3D TILT on cards ── */
document.querySelectorAll('.sv-card,.wk-card,.wc').forEach(el=>{
  el.addEventListener('mousemove',e=>{
    const r=el.getBoundingClientRect();
    const x=((e.clientX-r.left)/r.width-.5)*14;
    const y=((e.clientY-r.top)/r.height-.5)*-14;
    el.style.transform=`perspective(700px) rotateX(${y}deg) rotateY(${x}deg) translateZ(6px)`;
  });
  el.addEventListener('mouseleave',()=>el.style.transform='');
});

/* ── FAQ ── */
function faq(btn){
  const item=btn.closest('.fq-item'),open=item.classList.contains('open');
  document.querySelectorAll('.fq-item.open').forEach(i=>i.classList.remove('open'));
  if(!open)item.classList.add('open');
}

/* ── MODAL ── */
function openM(e){if(e)e.preventDefault();document.getElementById('mbg').classList.add('open');document.body.style.overflow='hidden';mgo(1)}
function closeM(){document.getElementById('mbg').classList.remove('open');document.body.style.overflow=''}
function closeBg(e){if(e.target===document.getElementById('mbg'))closeM()}
document.addEventListener('keydown',e=>{if(e.key==='Escape')closeM()});
function mgo(n){
  document.querySelectorAll('.mst').forEach(s=>s.classList.remove('act'));
  const s=document.getElementById('ms'+n);if(s)s.classList.add('act');
  if(n===4)msum();
}
function mv2(){
  const n=document.getElementById('mn').value.trim(),e=document.getElementById('me').value.trim();
  if(!n)return alert('Please enter your name.');
  if(!e||!e.includes('@'))return alert('Please enter a valid email.');
  mgo(3);
}
function msum(){
  const n=document.getElementById('mn').value||'—';
  const e=document.getElementById('me').value||'—';
  const p=document.getElementById('mp').value||'Not provided';
  const ch=[...document.querySelectorAll('.mchip.s')].map(c=>c.textContent).join(', ')||'Not specified';
  const nt=document.getElementById('mnt').value||'None';
  document.getElementById('msb').innerHTML=
    `<div class="srow"><strong>Name:</strong> ${n}</div>
     <div class="srow"><strong>Email:</strong> ${e}</div>
     <div class="srow"><strong>Phone:</strong> ${p}</div>
     <div class="srow"><strong>Building:</strong> ${ch}</div>
     <div class="srow"><strong>Notes:</strong> ${nt}</div>`;
}
</script>

<!-- Lenis smooth scroll -->
<script src="https://unpkg.com/lenis@1.1.14/dist/lenis.min.js"></script>

<!-- 3D Parallax Hero Layers + Camera Dolly -->
<style>
#hero{position:relative;overflow:hidden}
/* Parallax depth layers */
.layer-bg,.layer-mid,.layer-fg{position:absolute;inset:0;pointer-events:none;z-index:0;will-change:transform}
/* BG: star field */
.layer-bg{background:
  radial-gradient(1px 1px at 10% 15%,rgba(255,255,255,.7) 0%,transparent 100%),
  radial-gradient(1px 1px at 25% 60%,rgba(255,255,255,.5) 0%,transparent 100%),
  radial-gradient(1px 1px at 40% 30%,rgba(255,255,255,.6) 0%,transparent 100%),
  radial-gradient(1px 1px at 55% 75%,rgba(255,255,255,.4) 0%,transparent 100%),
  radial-gradient(1px 1px at 70% 20%,rgba(255,255,255,.7) 0%,transparent 100%),
  radial-gradient(1px 1px at 85% 50%,rgba(255,255,255,.5) 0%,transparent 100%),
  radial-gradient(1px 1px at 15% 85%,rgba(255,255,255,.6) 0%,transparent 100%),
  radial-gradient(1px 1px at 60% 45%,rgba(255,255,255,.4) 0%,transparent 100%),
  radial-gradient(1px 1px at 90% 80%,rgba(255,255,255,.6) 0%,transparent 100%),
  radial-gradient(1px 1px at 35% 10%,rgba(255,255,255,.8) 0%,transparent 100%),
  radial-gradient(1.5px 1.5px at 48% 88%,rgba(200,180,255,.6) 0%,transparent 100%),
  radial-gradient(1.5px 1.5px at 78% 35%,rgba(180,220,255,.5) 0%,transparent 100%)}
/* MID: glowing orbs */
.layer-mid::before,.layer-mid::after{content:'';position:absolute;border-radius:50%;filter:blur(40px)}
.layer-mid::before{width:300px;height:300px;background:rgba(124,58,237,.08);top:10%;left:5%}
.layer-mid::after{width:200px;height:200px;background:rgba(0,212,255,.06);top:40%;right:10%}
/* FG: large glows */
.layer-fg::before{content:'';position:absolute;width:500px;height:500px;background:radial-gradient(circle,rgba(124,58,237,.05),transparent 70%);top:-10%;left:30%;border-radius:50%}
/* Hero content stays above layers */
#hero>*:not(.layer-bg):not(.layer-mid):not(.layer-fg){position:relative;z-index:1}
</style>

<script>
// ── LENIS ────────────────────────────────────────────
const lenis=new Lenis({lerp:.1,smoothWheel:true});
lenis.on('scroll',ScrollTrigger.update);
gsap.ticker.add(t=>lenis.raf(t*1000));
gsap.ticker.lagSmoothing(0);

// ── PARALLAX DEPTH LAYERS ────────────────────────────
(function(){
  const hero=document.getElementById('hero');
  if(!hero)return;

  // Inject layers
  ['layer-bg','layer-mid','layer-fg'].forEach(cls=>{
    const d=document.createElement('div');d.className=cls;
    hero.insertBefore(d,hero.firstChild);
  });

  // Hero text fly-in from z-depth
  gsap.fromTo('#ht',
    {scale:.5,opacity:0,filter:'blur(12px)'},
    {scale:1,opacity:1,filter:'blur(0px)',duration:1.6,ease:'power3.out',delay:.3}
  );
  gsap.fromTo('#hb',
    {y:-40,opacity:0},{y:0,opacity:1,duration:1,delay:.15,ease:'power2.out'}
  );
  gsap.fromTo('#hs',
    {y:40,opacity:0},{y:0,opacity:1,duration:1,delay:.7,ease:'power2.out'}
  );

  // Parallax on scroll
  ScrollTrigger.create({
    trigger:hero,start:'top top',end:'bottom top',
    onUpdate(self){
      const p=self.progress;
      document.querySelector('.layer-bg').style.transform=`translateY(${p*80}px)`;
      document.querySelector('.layer-mid').style.transform=`translateY(${p*160}px)`;
      document.querySelector('.layer-fg').style.transform=`translateY(${p*240}px)`;
      // Camera dolly: hero text floats forward then fades
      gsap.set('#ht',{z:p*120,opacity:1-p*1.4,scale:1+p*.08});
      gsap.set('#hs',{y:p*-30,opacity:1-p*2});
    }
  });
})();

// ── WARP CANVAS SPEED ON SCROLL ──────────────────────
// Increase warp speed as hero scrolls
ScrollTrigger.create({
  trigger:'#hero',start:'top top',end:'+=600',
  onUpdate(self){
    // Signal warp to go faster (warp reads this global)
    window._warpBoost=1+self.progress*6;
  }
});
</script>
</body>
</body>
</html>
