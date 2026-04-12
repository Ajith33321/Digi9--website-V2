<?php
$page_title = "Digi9 | AI Software and App Development";
$meta_description = "AI Software and App Development Company that builds what actually works. Custom enterprise AI, web apps, mobile, and automation. Bangalore, India.";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= htmlspecialchars($page_title) ?></title>
<meta name="description" content="<?= htmlspecialchars($meta_description) ?>">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;500;600;700;800&family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;1,9..40,300&display=swap" rel="stylesheet">

<style>
/* =====================================================
   RESET & BASE
   ===================================================== */
*, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

:root {
  --bg: #030307;
  --bg2: #07070f;
  --surface: #0d0d1a;
  --surface2: #12122a;
  --accent: #6c63ff;
  --accent2: #00d4ff;
  --accent3: #ff6b35;
  --gold: #f5c842;
  --text: #f0eeff;
  --text2: #9b97c4;
  --text3: #5a5780;
  --border: rgba(108,99,255,0.15);
  --border2: rgba(108,99,255,0.3);
  --glow: rgba(108,99,255,0.4);
  --glow2: rgba(0,212,255,0.3);
  --font-head: 'Syne', sans-serif;
  --font-body: 'DM Sans', sans-serif;
  --nav-h: 72px;
}

html { scroll-behavior: smooth; }

body {
  font-family: var(--font-body);
  background: var(--bg);
  color: var(--text);
  overflow-x: hidden;
  cursor: none;
}

/* =====================================================
   CUSTOM CURSOR
   ===================================================== */
#cursor {
  position: fixed;
  width: 12px; height: 12px;
  background: var(--accent);
  border-radius: 50%;
  pointer-events: none;
  z-index: 9999;
  transition: transform 0.1s ease;
  mix-blend-mode: screen;
}

#cursor-trail {
  position: fixed;
  width: 40px; height: 40px;
  border: 1px solid var(--accent);
  border-radius: 50%;
  pointer-events: none;
  z-index: 9998;
  transition: all 0.15s ease;
  opacity: 0.5;
}

body:hover #cursor { opacity: 1; }

/* =====================================================
   NOISE OVERLAY
   ===================================================== */
body::before {
  content: '';
  position: fixed;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.03'/%3E%3C/svg%3E");
  pointer-events: none;
  z-index: 1;
  opacity: 0.4;
}

/* =====================================================
   SCROLLBAR
   ===================================================== */
::-webkit-scrollbar { width: 4px; }
::-webkit-scrollbar-track { background: var(--bg); }
::-webkit-scrollbar-thumb { background: var(--accent); border-radius: 2px; }

/* =====================================================
   NAV
   ===================================================== */
nav {
  position: fixed;
  top: 0; left: 0; right: 0;
  height: var(--nav-h);
  z-index: 100;
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 0 4vw;
  transition: background 0.4s ease, backdrop-filter 0.4s ease;
}

nav.scrolled {
  background: rgba(3,3,7,0.85);
  backdrop-filter: blur(20px);
  border-bottom: 1px solid var(--border);
}

.nav-logo {
  font-family: var(--font-head);
  font-size: 1.6rem;
  font-weight: 800;
  letter-spacing: -0.02em;
  color: var(--text);
  text-decoration: none;
  display: flex;
  align-items: center;
  gap: 8px;
}

.nav-logo span {
  background: linear-gradient(135deg, var(--accent), var(--accent2));
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}

.nav-logo::before {
  content: '';
  display: inline-block;
  width: 10px; height: 10px;
  background: var(--accent);
  border-radius: 50%;
  box-shadow: 0 0 12px var(--accent);
  animation: pulse-dot 2s ease infinite;
}

@keyframes pulse-dot {
  0%,100% { box-shadow: 0 0 8px var(--accent); }
  50% { box-shadow: 0 0 20px var(--accent), 0 0 40px var(--accent2); }
}

.nav-links {
  display: flex;
  align-items: center;
  gap: 2.5rem;
  list-style: none;
}

.nav-links a {
  color: var(--text2);
  text-decoration: none;
  font-size: 0.875rem;
  font-weight: 500;
  letter-spacing: 0.05em;
  text-transform: uppercase;
  transition: color 0.2s;
  position: relative;
}

.nav-links a::after {
  content: '';
  position: absolute;
  bottom: -4px; left: 0; right: 0;
  height: 1px;
  background: var(--accent);
  transform: scaleX(0);
  transition: transform 0.3s ease;
}

.nav-links a:hover { color: var(--text); }
.nav-links a:hover::after { transform: scaleX(1); }

.nav-cta {
  background: var(--accent);
  color: #fff !important;
  padding: 10px 24px;
  border-radius: 100px;
  font-weight: 600 !important;
  transition: all 0.3s ease !important;
  box-shadow: 0 0 20px rgba(108,99,255,0.3);
}

.nav-cta:hover {
  background: #fff;
  color: var(--accent) !important;
  box-shadow: 0 0 40px rgba(108,99,255,0.6);
}

.nav-cta::after { display: none !important; }

/* =====================================================
   HERO
   ===================================================== */
#hero {
  position: relative;
  min-height: 100vh;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  text-align: center;
  padding: 0 4vw;
  overflow: hidden;
}

/* 3D Grid floor */
.hero-grid {
  position: absolute;
  bottom: 0; left: 50%;
  transform: translateX(-50%);
  width: 200%;
  height: 55vh;
  background-image:
    linear-gradient(rgba(108,99,255,0.15) 1px, transparent 1px),
    linear-gradient(90deg, rgba(108,99,255,0.15) 1px, transparent 1px);
  background-size: 60px 60px;
  transform-origin: bottom center;
  transform: translateX(-50%) perspective(600px) rotateX(60deg);
  mask-image: radial-gradient(ellipse 80% 60% at 50% 100%, black 40%, transparent 100%);
  animation: grid-move 6s linear infinite;
}

@keyframes grid-move {
  0% { background-position: 0 0; }
  100% { background-position: 0 60px; }
}

/* Orbs */
.hero-orb {
  position: absolute;
  border-radius: 50%;
  filter: blur(80px);
  pointer-events: none;
}

.orb1 {
  width: 600px; height: 600px;
  background: radial-gradient(circle, rgba(108,99,255,0.3) 0%, transparent 70%);
  top: -100px; left: -100px;
  animation: float1 10s ease-in-out infinite;
}

.orb2 {
  width: 400px; height: 400px;
  background: radial-gradient(circle, rgba(0,212,255,0.2) 0%, transparent 70%);
  bottom: 10%; right: -50px;
  animation: float2 8s ease-in-out infinite;
}

.orb3 {
  width: 300px; height: 300px;
  background: radial-gradient(circle, rgba(255,107,53,0.15) 0%, transparent 70%);
  top: 30%; left: 60%;
  animation: float3 12s ease-in-out infinite;
}

@keyframes float1 { 0%,100%{transform:translate(0,0)} 50%{transform:translate(40px,30px)} }
@keyframes float2 { 0%,100%{transform:translate(0,0)} 50%{transform:translate(-30px,-20px)} }
@keyframes float3 { 0%,100%{transform:translate(0,0)} 50%{transform:translate(-20px,40px)} }

.hero-eyebrow {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  font-size: 0.75rem;
  font-weight: 500;
  letter-spacing: 0.15em;
  text-transform: uppercase;
  color: var(--accent2);
  border: 1px solid rgba(0,212,255,0.3);
  padding: 6px 16px;
  border-radius: 100px;
  margin-bottom: 2rem;
  backdrop-filter: blur(10px);
  background: rgba(0,212,255,0.05);
  opacity: 0;
  animation: fade-up 0.8s 0.2s forwards;
}

.hero-eyebrow::before {
  content: '';
  width: 6px; height: 6px;
  background: var(--accent2);
  border-radius: 50%;
  animation: pulse-dot 2s infinite;
}

h1.hero-title {
  font-family: var(--font-head);
  font-size: clamp(3rem, 8vw, 7rem);
  font-weight: 800;
  line-height: 0.95;
  letter-spacing: -0.04em;
  margin-bottom: 1.5rem;
  opacity: 0;
  animation: fade-up 0.8s 0.4s forwards;
}

.hero-title .line1 { display: block; }
.hero-title .line2 { display: block; color: var(--text2); }
.hero-title .accent-word {
  background: linear-gradient(135deg, var(--accent) 0%, var(--accent2) 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  position: relative;
}

.hero-sub {
  font-size: clamp(1rem, 1.5vw, 1.2rem);
  color: var(--text2);
  max-width: 600px;
  line-height: 1.7;
  margin-bottom: 3rem;
  opacity: 0;
  animation: fade-up 0.8s 0.6s forwards;
}

.hero-actions {
  display: flex;
  gap: 1rem;
  align-items: center;
  flex-wrap: wrap;
  justify-content: center;
  opacity: 0;
  animation: fade-up 0.8s 0.8s forwards;
}

.btn-primary {
  background: linear-gradient(135deg, var(--accent), #8b82ff);
  color: #fff;
  padding: 16px 36px;
  border-radius: 100px;
  text-decoration: none;
  font-weight: 600;
  font-size: 1rem;
  border: none;
  cursor: pointer;
  transition: all 0.3s ease;
  box-shadow: 0 0 30px rgba(108,99,255,0.4);
  position: relative;
  overflow: hidden;
}

.btn-primary::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(135deg, #fff2, transparent);
  opacity: 0;
  transition: opacity 0.3s;
}

.btn-primary:hover { transform: translateY(-2px); box-shadow: 0 0 60px rgba(108,99,255,0.6); }
.btn-primary:hover::before { opacity: 1; }

.btn-ghost {
  color: var(--text);
  padding: 16px 36px;
  border-radius: 100px;
  text-decoration: none;
  font-weight: 500;
  font-size: 1rem;
  border: 1px solid var(--border2);
  cursor: pointer;
  transition: all 0.3s ease;
  backdrop-filter: blur(10px);
  background: rgba(255,255,255,0.03);
}

.btn-ghost:hover {
  border-color: var(--accent);
  background: rgba(108,99,255,0.1);
  box-shadow: 0 0 20px rgba(108,99,255,0.2);
}

/* Hero stats */
.hero-stats {
  display: flex;
  gap: 3rem;
  margin-top: 5rem;
  opacity: 0;
  animation: fade-up 0.8s 1s forwards;
  position: relative;
  z-index: 2;
}

.hero-stat { text-align: center; }

.hero-stat .num {
  font-family: var(--font-head);
  font-size: 2.5rem;
  font-weight: 800;
  background: linear-gradient(135deg, var(--text), var(--accent2));
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  line-height: 1;
}

.hero-stat .label {
  font-size: 0.75rem;
  color: var(--text3);
  text-transform: uppercase;
  letter-spacing: 0.1em;
  margin-top: 4px;
}

/* Tag pills */
.hero-tags {
  display: flex;
  gap: 0.75rem;
  flex-wrap: wrap;
  justify-content: center;
  margin: 2rem 0 0;
  opacity: 0;
  animation: fade-up 0.8s 1.1s forwards;
}

.tag {
  font-size: 0.75rem;
  color: var(--text3);
  border: 1px solid var(--border);
  padding: 4px 12px;
  border-radius: 100px;
  backdrop-filter: blur(5px);
  transition: all 0.3s;
}

.tag:hover { color: var(--accent); border-color: var(--accent); }

@keyframes fade-up {
  from { opacity: 0; transform: translateY(30px); }
  to { opacity: 1; transform: translateY(0); }
}

/* =====================================================
   SECTION SHARED
   ===================================================== */
section { position: relative; z-index: 2; }

.section-inner {
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 4vw;
}

.section-eyebrow {
  font-size: 0.7rem;
  font-weight: 600;
  letter-spacing: 0.2em;
  text-transform: uppercase;
  color: var(--accent);
  margin-bottom: 1rem;
}

.section-title {
  font-family: var(--font-head);
  font-size: clamp(2rem, 5vw, 3.5rem);
  font-weight: 800;
  letter-spacing: -0.03em;
  line-height: 1.05;
  margin-bottom: 1.5rem;
}

.section-title em {
  font-style: normal;
  color: var(--text2);
}

.section-sub {
  font-size: 1.05rem;
  color: var(--text2);
  line-height: 1.7;
  max-width: 540px;
}

/* Reveal animation */
.reveal {
  opacity: 0;
  transform: translateY(50px);
  transition: opacity 0.8s ease, transform 0.8s ease;
}

.reveal.visible {
  opacity: 1;
  transform: translateY(0);
}

.reveal-delay-1 { transition-delay: 0.1s; }
.reveal-delay-2 { transition-delay: 0.2s; }
.reveal-delay-3 { transition-delay: 0.3s; }
.reveal-delay-4 { transition-delay: 0.4s; }
.reveal-delay-5 { transition-delay: 0.5s; }

/* =====================================================
   SERVICES SECTION
   ===================================================== */
#services {
  padding: 140px 0;
}

.services-header {
  text-align: center;
  margin-bottom: 80px;
}

.services-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 1.5px;
  background: var(--border);
  border: 1px solid var(--border);
  border-radius: 24px;
  overflow: hidden;
}

.service-card {
  background: var(--surface);
  padding: 48px 40px;
  position: relative;
  overflow: hidden;
  transition: background 0.4s ease;
  cursor: default;
}

.service-card::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(135deg, rgba(108,99,255,0.08), transparent);
  opacity: 0;
  transition: opacity 0.4s;
}

.service-card:hover { background: var(--surface2); }
.service-card:hover::before { opacity: 1; }

.service-card:last-child {
  background: linear-gradient(135deg, rgba(108,99,255,0.12), rgba(0,212,255,0.05));
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: flex-start;
  border-top: none;
}

.service-num {
  font-family: var(--font-head);
  font-size: 0.7rem;
  font-weight: 700;
  color: var(--accent);
  letter-spacing: 0.15em;
  margin-bottom: 24px;
}

.service-icon {
  width: 48px; height: 48px;
  background: rgba(108,99,255,0.1);
  border: 1px solid rgba(108,99,255,0.2);
  border-radius: 12px;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 20px;
  margin-bottom: 24px;
  transition: all 0.3s;
}

.service-card:hover .service-icon {
  background: rgba(108,99,255,0.2);
  border-color: var(--accent);
  box-shadow: 0 0 20px rgba(108,99,255,0.3);
}

.service-name {
  font-family: var(--font-head);
  font-size: 1.25rem;
  font-weight: 700;
  margin-bottom: 12px;
  letter-spacing: -0.02em;
}

.service-desc {
  font-size: 0.9rem;
  color: var(--text2);
  line-height: 1.65;
  margin-bottom: 24px;
}

.service-items {
  list-style: none;
  margin-bottom: 28px;
}

.service-items li {
  font-size: 0.82rem;
  color: var(--text3);
  padding: 4px 0;
  display: flex;
  align-items: center;
  gap: 8px;
}

.service-items li::before {
  content: '';
  width: 4px; height: 4px;
  background: var(--accent);
  border-radius: 50%;
  flex-shrink: 0;
}

.service-link {
  font-size: 0.82rem;
  color: var(--accent);
  text-decoration: none;
  font-weight: 600;
  letter-spacing: 0.05em;
  display: flex;
  align-items: center;
  gap: 6px;
  transition: gap 0.2s;
}

.service-link:hover { gap: 10px; }

/* =====================================================
   CAPABILITIES — MARQUEE
   ===================================================== */
#capabilities {
  padding: 80px 0;
  overflow: hidden;
  border-top: 1px solid var(--border);
  border-bottom: 1px solid var(--border);
}

.marquee-header {
  text-align: center;
  margin-bottom: 50px;
}

.marquee-track {
  display: flex;
  gap: 24px;
  animation: marquee 25s linear infinite;
  width: max-content;
}

.marquee-track:hover { animation-play-state: paused; }

.marquee-item {
  display: flex;
  align-items: center;
  gap: 12px;
  background: var(--surface);
  border: 1px solid var(--border);
  border-radius: 100px;
  padding: 12px 28px;
  white-space: nowrap;
  font-size: 0.9rem;
  font-weight: 500;
  color: var(--text2);
  transition: all 0.3s;
}

.marquee-item:hover {
  border-color: var(--accent);
  color: var(--text);
  background: rgba(108,99,255,0.08);
}

.marquee-dot {
  width: 8px; height: 8px;
  border-radius: 50%;
  background: var(--accent);
  flex-shrink: 0;
}

@keyframes marquee {
  from { transform: translateX(0); }
  to { transform: translateX(-50%); }
}

/* =====================================================
   WHY US — 3D CARDS
   ===================================================== */
#why-us {
  padding: 140px 0;
}

.why-layout {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 80px;
  align-items: center;
}

.why-cards {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 16px;
}

.why-card {
  background: var(--surface);
  border: 1px solid var(--border);
  border-radius: 20px;
  padding: 28px 24px;
  transition: all 0.4s ease;
  transform-style: preserve-3d;
  cursor: default;
}

.why-card:hover {
  border-color: var(--accent);
  transform: translateY(-6px) rotateX(5deg);
  box-shadow: 0 20px 60px rgba(108,99,255,0.2);
  background: var(--surface2);
}

.why-card-icon {
  font-size: 24px;
  margin-bottom: 16px;
}

.why-card-title {
  font-family: var(--font-head);
  font-size: 1rem;
  font-weight: 700;
  margin-bottom: 8px;
  letter-spacing: -0.01em;
}

.why-card-text {
  font-size: 0.82rem;
  color: var(--text2);
  line-height: 1.6;
}

/* =====================================================
   CASE STUDIES
   ===================================================== */
#work {
  padding: 140px 0;
  background: var(--bg2);
}

.work-header {
  text-align: center;
  margin-bottom: 80px;
}

.work-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 24px;
}

.work-card {
  background: var(--surface);
  border: 1px solid var(--border);
  border-radius: 24px;
  overflow: hidden;
  transition: all 0.4s ease;
  position: relative;
}

.work-card:hover {
  transform: translateY(-8px);
  border-color: var(--accent);
  box-shadow: 0 30px 80px rgba(108,99,255,0.25);
}

.work-card-top {
  height: 200px;
  position: relative;
  overflow: hidden;
  display: flex;
  align-items: center;
  justify-content: center;
}

.work-card:nth-child(1) .work-card-top { background: linear-gradient(135deg, #0d0d2e, #1a0a40); }
.work-card:nth-child(2) .work-card-top { background: linear-gradient(135deg, #00140f, #001f2e); }
.work-card:nth-child(3) .work-card-top { background: linear-gradient(135deg, #1a0000, #0d0020); }

.work-visual {
  position: relative;
  z-index: 1;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  gap: 8px;
}

.work-visual-icon {
  font-size: 3rem;
  filter: drop-shadow(0 0 20px currentColor);
}

.work-badge {
  font-size: 0.65rem;
  font-weight: 700;
  letter-spacing: 0.15em;
  text-transform: uppercase;
  padding: 4px 12px;
  border-radius: 100px;
}

.badge-ai { background: rgba(108,99,255,0.2); color: var(--accent); border: 1px solid rgba(108,99,255,0.3); }
.badge-cv { background: rgba(0,212,255,0.1); color: var(--accent2); border: 1px solid rgba(0,212,255,0.3); }
.badge-llm { background: rgba(245,200,66,0.1); color: var(--gold); border: 1px solid rgba(245,200,66,0.3); }

.work-card-body { padding: 32px; }

.work-card-name {
  font-family: var(--font-head);
  font-size: 1.3rem;
  font-weight: 700;
  letter-spacing: -0.02em;
  margin-bottom: 10px;
}

.work-card-desc {
  font-size: 0.875rem;
  color: var(--text2);
  line-height: 1.65;
  margin-bottom: 24px;
}

.work-metrics {
  display: flex;
  gap: 24px;
}

.work-metric .val {
  font-family: var(--font-head);
  font-size: 1.5rem;
  font-weight: 800;
  color: var(--accent2);
}

.work-metric .val-label {
  font-size: 0.75rem;
  color: var(--text3);
  text-transform: uppercase;
  letter-spacing: 0.08em;
}

/* =====================================================
   PROCESS
   ===================================================== */
#process {
  padding: 140px 0;
}

.process-header {
  text-align: center;
  margin-bottom: 100px;
}

.process-steps {
  position: relative;
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 24px;
}

.process-steps::before {
  content: '';
  position: absolute;
  top: 64px;
  left: 10%;
  right: 10%;
  height: 1px;
  background: linear-gradient(90deg, transparent, var(--accent), var(--accent2), var(--accent), transparent);
  animation: line-glow 3s ease infinite;
}

@keyframes line-glow {
  0%,100% { opacity: 0.4; }
  50% { opacity: 1; }
}

.process-step {
  text-align: center;
  position: relative;
  z-index: 1;
}

.process-step-num {
  width: 80px; height: 80px;
  border-radius: 50%;
  background: var(--surface);
  border: 1px solid var(--border);
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 0 auto 28px;
  font-family: var(--font-head);
  font-size: 1.5rem;
  font-weight: 800;
  color: var(--accent);
  position: relative;
  transition: all 0.4s;
}

.process-step:hover .process-step-num {
  background: var(--accent);
  color: #fff;
  box-shadow: 0 0 30px rgba(108,99,255,0.5);
  transform: scale(1.1);
}

.process-step-title {
  font-family: var(--font-head);
  font-size: 1.1rem;
  font-weight: 700;
  margin-bottom: 12px;
  letter-spacing: -0.02em;
}

.process-step-text {
  font-size: 0.875rem;
  color: var(--text2);
  line-height: 1.65;
}

/* =====================================================
   INDUSTRIES
   ===================================================== */
#industries {
  padding: 140px 0;
  background: var(--bg2);
}

.industries-header {
  text-align: center;
  margin-bottom: 60px;
}

.industries-grid {
  display: grid;
  grid-template-columns: repeat(7, 1fr);
  gap: 12px;
}

.industry-item {
  background: var(--surface);
  border: 1px solid var(--border);
  border-radius: 16px;
  padding: 24px 12px;
  text-align: center;
  transition: all 0.3s;
  cursor: default;
}

.industry-item:hover {
  border-color: var(--accent);
  background: rgba(108,99,255,0.08);
  transform: translateY(-4px);
}

.industry-icon { font-size: 2rem; margin-bottom: 10px; }

.industry-name {
  font-size: 0.75rem;
  color: var(--text2);
  font-weight: 500;
  line-height: 1.3;
}

/* =====================================================
   INSIGHTS
   ===================================================== */
#insights {
  padding: 140px 0;
}

.insights-header {
  text-align: center;
  margin-bottom: 60px;
}

.insights-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 24px;
}

.insight-card {
  background: var(--surface);
  border: 1px solid var(--border);
  border-radius: 20px;
  padding: 36px;
  transition: all 0.4s;
  cursor: pointer;
}

.insight-card:hover {
  border-color: var(--accent);
  transform: translateY(-6px);
  box-shadow: 0 20px 60px rgba(108,99,255,0.15);
}

.insight-cat {
  font-size: 0.7rem;
  font-weight: 700;
  letter-spacing: 0.15em;
  text-transform: uppercase;
  color: var(--accent);
  margin-bottom: 16px;
  display: flex;
  align-items: center;
  gap: 8px;
}

.insight-title {
  font-family: var(--font-head);
  font-size: 1.2rem;
  font-weight: 700;
  letter-spacing: -0.02em;
  line-height: 1.25;
  margin-bottom: 14px;
}

.insight-text {
  font-size: 0.875rem;
  color: var(--text2);
  line-height: 1.65;
  margin-bottom: 24px;
}

.insight-arrow {
  color: var(--accent);
  font-size: 0.875rem;
  font-weight: 600;
  display: flex;
  align-items: center;
  gap: 6px;
  transition: gap 0.2s;
}

.insight-card:hover .insight-arrow { gap: 10px; }

/* =====================================================
   CTA BANNER
   ===================================================== */
#cta-banner {
  padding: 100px 0;
  position: relative;
  overflow: hidden;
}

.cta-inner {
  background: var(--surface);
  border: 1px solid var(--border2);
  border-radius: 32px;
  padding: 80px;
  text-align: center;
  position: relative;
  overflow: hidden;
}

.cta-inner::before {
  content: '';
  position: absolute;
  inset: 0;
  background:
    radial-gradient(ellipse 60% 60% at 20% 50%, rgba(108,99,255,0.12), transparent),
    radial-gradient(ellipse 60% 60% at 80% 50%, rgba(0,212,255,0.08), transparent);
}

.cta-title {
  font-family: var(--font-head);
  font-size: clamp(2rem, 5vw, 3.5rem);
  font-weight: 800;
  letter-spacing: -0.03em;
  position: relative;
  margin-bottom: 1.25rem;
}

.cta-sub {
  color: var(--text2);
  font-size: 1.05rem;
  position: relative;
  margin-bottom: 2.5rem;
}

.cta-actions {
  display: flex;
  gap: 1rem;
  justify-content: center;
  position: relative;
}

/* =====================================================
   CONTACT / BOOKING MODAL
   ===================================================== */
.modal-overlay {
  position: fixed;
  inset: 0;
  background: rgba(3,3,7,0.85);
  backdrop-filter: blur(20px);
  z-index: 200;
  display: none;
  align-items: center;
  justify-content: center;
  padding: 20px;
}

.modal-overlay.open { display: flex; }

.modal {
  background: var(--surface);
  border: 1px solid var(--border2);
  border-radius: 24px;
  width: 100%;
  max-width: 540px;
  padding: 48px;
  position: relative;
  animation: modal-in 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
}

@keyframes modal-in {
  from { opacity: 0; transform: scale(0.9) translateY(20px); }
  to { opacity: 1; transform: scale(1) translateY(0); }
}

.modal-close {
  position: absolute;
  top: 20px; right: 20px;
  background: var(--surface2);
  border: 1px solid var(--border);
  color: var(--text2);
  width: 32px; height: 32px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  font-size: 16px;
  transition: all 0.2s;
}

.modal-close:hover { border-color: var(--accent); color: var(--text); }

.modal-step { display: none; }
.modal-step.active { display: block; }

.modal-title {
  font-family: var(--font-head);
  font-size: 1.6rem;
  font-weight: 800;
  letter-spacing: -0.03em;
  margin-bottom: 8px;
}

.modal-sub {
  color: var(--text2);
  font-size: 0.9rem;
  margin-bottom: 32px;
  line-height: 1.5;
}

.form-group { margin-bottom: 20px; }

.form-group label {
  display: block;
  font-size: 0.8rem;
  font-weight: 600;
  color: var(--text2);
  margin-bottom: 8px;
  letter-spacing: 0.05em;
  text-transform: uppercase;
}

.form-group input,
.form-group textarea,
.form-group select {
  width: 100%;
  background: var(--surface2);
  border: 1px solid var(--border);
  border-radius: 12px;
  padding: 14px 18px;
  color: var(--text);
  font-family: var(--font-body);
  font-size: 0.95rem;
  outline: none;
  transition: border-color 0.2s;
}

.form-group input:focus,
.form-group textarea:focus {
  border-color: var(--accent);
  box-shadow: 0 0 0 3px rgba(108,99,255,0.1);
}

.form-group textarea { resize: vertical; min-height: 100px; }

.modal-chips {
  display: flex;
  flex-wrap: wrap;
  gap: 10px;
  margin-bottom: 28px;
}

.chip {
  padding: 10px 20px;
  border: 1px solid var(--border);
  border-radius: 100px;
  font-size: 0.85rem;
  color: var(--text2);
  cursor: pointer;
  transition: all 0.2s;
  background: none;
  font-family: var(--font-body);
}

.chip.active,
.chip:hover {
  border-color: var(--accent);
  color: var(--accent);
  background: rgba(108,99,255,0.1);
}

.modal-benefits {
  list-style: none;
  margin-bottom: 32px;
}

.modal-benefits li {
  display: flex;
  align-items: center;
  gap: 10px;
  font-size: 0.875rem;
  color: var(--text2);
  padding: 5px 0;
}

.modal-benefits li::before {
  content: '✓';
  width: 20px; height: 20px;
  background: rgba(108,99,255,0.15);
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--accent);
  font-size: 0.7rem;
  font-weight: 700;
  flex-shrink: 0;
}

.modal-progress {
  display: flex;
  gap: 8px;
  margin-bottom: 32px;
}

.progress-dot {
  height: 3px;
  border-radius: 2px;
  background: var(--border);
  flex: 1;
  transition: background 0.3s;
}

.progress-dot.done { background: var(--accent); }

.success-icon {
  font-size: 3rem;
  text-align: center;
  margin-bottom: 16px;
}

/* =====================================================
   FOOTER
   ===================================================== */
footer {
  background: var(--bg2);
  border-top: 1px solid var(--border);
  padding: 80px 0 40px;
}

.footer-inner {
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 4vw;
}

.footer-top {
  display: grid;
  grid-template-columns: 2fr 1fr 1fr 1fr;
  gap: 60px;
  margin-bottom: 60px;
}

.footer-brand .brand-name {
  font-family: var(--font-head);
  font-size: 1.5rem;
  font-weight: 800;
  margin-bottom: 16px;
  display: flex;
  align-items: center;
  gap: 8px;
}

.footer-brand .brand-name span {
  background: linear-gradient(135deg, var(--accent), var(--accent2));
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}

.footer-brand p {
  font-size: 0.875rem;
  color: var(--text2);
  line-height: 1.7;
  margin-bottom: 24px;
  max-width: 280px;
}

.footer-email {
  color: var(--accent2);
  text-decoration: none;
  font-size: 0.875rem;
  display: flex;
  align-items: center;
  gap: 8px;
}

.footer-col h4 {
  font-family: var(--font-head);
  font-size: 0.75rem;
  font-weight: 700;
  letter-spacing: 0.15em;
  text-transform: uppercase;
  color: var(--text3);
  margin-bottom: 20px;
}

.footer-col ul { list-style: none; }

.footer-col li {
  margin-bottom: 10px;
}

.footer-col a {
  color: var(--text2);
  text-decoration: none;
  font-size: 0.875rem;
  transition: color 0.2s;
}

.footer-col a:hover { color: var(--accent); }

.footer-bottom {
  border-top: 1px solid var(--border);
  padding-top: 32px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 20px;
}

.footer-copy {
  font-size: 0.8rem;
  color: var(--text3);
}

.footer-links {
  display: flex;
  gap: 24px;
}

.footer-links a {
  font-size: 0.8rem;
  color: var(--text3);
  text-decoration: none;
  transition: color 0.2s;
}

.footer-links a:hover { color: var(--text2); }

/* =====================================================
   RESPONSIVE
   ===================================================== */
@media (max-width: 900px) {
  .services-grid { grid-template-columns: 1fr 1fr; }
  .work-grid { grid-template-columns: 1fr; }
  .process-steps { grid-template-columns: 1fr 1fr; }
  .process-steps::before { display: none; }
  .industries-grid { grid-template-columns: repeat(4, 1fr); }
  .insights-grid { grid-template-columns: 1fr; }
  .why-layout { grid-template-columns: 1fr; }
  .footer-top { grid-template-columns: 1fr 1fr; }
  .hero-stats { gap: 2rem; }
}

@media (max-width: 640px) {
  .nav-links { display: none; }
  .services-grid { grid-template-columns: 1fr; }
  .work-grid { grid-template-columns: 1fr; }
  .why-cards { grid-template-columns: 1fr; }
  .industries-grid { grid-template-columns: repeat(2, 1fr); }
  .footer-top { grid-template-columns: 1fr; }
  .hero-stats { flex-wrap: wrap; gap: 1.5rem; }
  .cta-inner { padding: 40px 24px; }
  .modal { padding: 32px 24px; }
}

/* =====================================================
   3D PARALLAX
   ===================================================== */
.parallax-layer {
  will-change: transform;
}

/* Floating particles */
.particles {
  position: fixed;
  inset: 0;
  pointer-events: none;
  z-index: 0;
}

.particle {
  position: absolute;
  width: 2px; height: 2px;
  background: var(--accent);
  border-radius: 50%;
  animation: particle-float linear infinite;
  opacity: 0;
}

@keyframes particle-float {
  0% { opacity: 0; transform: translateY(100vh) translateX(0); }
  10% { opacity: 0.6; }
  90% { opacity: 0.4; }
  100% { opacity: 0; transform: translateY(-10vh) translateX(var(--drift)); }
}

/* =====================================================
   SCROLL PROGRESS BAR
   ===================================================== */
#scroll-progress {
  position: fixed;
  top: 0; left: 0;
  height: 2px;
  background: linear-gradient(90deg, var(--accent), var(--accent2));
  z-index: 999;
  width: 0%;
  transition: width 0.1s linear;
  box-shadow: 0 0 10px var(--accent);
}
</style>
</head>
<body>

<!-- Cursor -->
<div id="cursor"></div>
<div id="cursor-trail"></div>

<!-- Scroll Progress -->
<div id="scroll-progress"></div>

<!-- Particles -->
<div class="particles" id="particles"></div>

<!-- NAV -->
<nav id="navbar">
  <a href="#" class="nav-logo">Digi<span>9</span></a>
  <ul class="nav-links">
    <li><a href="#services">Services</a></li>
    <li><a href="#work">Work</a></li>
    <li><a href="#why-us">About</a></li>
    <li><a href="#process">Process</a></li>
    <li><a href="#insights">Insights</a></li>
    <li><a href="#contact" class="nav-cta" onclick="openModal(event)">Book a Call</a></li>
  </ul>
</nav>

<!-- HERO -->
<section id="hero">
  <div class="hero-orb orb1"></div>
  <div class="hero-orb orb2"></div>
  <div class="hero-orb orb3"></div>
  <div class="hero-grid"></div>

  <div class="hero-eyebrow">AI &amp; Software Development &middot; Bangalore, India</div>

  <h1 class="hero-title">
    <span class="line1">AI Software &amp; <span class="accent-word">App</span></span>
    <span class="line2">Development Company</span>
  </h1>

  <p class="hero-sub">We build intelligent systems, automation tools, and scalable applications engineered specifically for your complex operations.</p>

  <div class="hero-actions">
    <a href="#contact" class="btn-primary" onclick="openModal(event)">Book a Consultation</a>
    <a href="#services" class="btn-ghost">Explore Services &rarr;</a>
  </div>

  <div class="hero-tags">
    <span class="tag">AI Development</span>
    <span class="tag">Web Apps</span>
    <span class="tag">Mobile</span>
    <span class="tag">Enterprise</span>
    <span class="tag">Automation</span>
  </div>

  <div class="hero-stats">
    <div class="hero-stat">
      <div class="num" data-count="50">0</div>
      <div class="label">Projects Delivered</div>
    </div>
    <div class="hero-stat">
      <div class="num" data-count="8">0</div>
      <div class="label">Years of Expertise</div>
    </div>
    <div class="hero-stat">
      <div class="num" data-count="30">0</div>
      <div class="label">Enterprise Clients</div>
    </div>
    <div class="hero-stat">
      <div class="num" data-count="7">0</div>
      <div class="label">Industries Served</div>
    </div>
  </div>
</section>

<!-- SERVICES -->
<section id="services">
  <div class="section-inner">
    <div class="services-header reveal">
      <div class="section-eyebrow">Our Focus</div>
      <h2 class="section-title">Meet Your <em>Technical Partners</em></h2>
    </div>

    <div class="services-grid reveal">

      <?php
      $services = [
        [
          'num' => '01',
          'icon' => '🤖',
          'name' => 'AI Software Development',
          'desc' => 'Custom enterprise AI systems engineered from scratch to automate high-complexity workflows effectively.',
          'items' => ['Custom enterprise AI systems', 'LLM applications', 'Predictive analytics platforms', 'Intelligence engines built from scratch'],
          'link' => 'ai-software-development.php'
        ],
        [
          'num' => '02',
          'icon' => '💻',
          'name' => 'Web Application Development',
          'desc' => 'Smart, AI-integrated web applications built for scalability and enterprise-grade usage.',
          'items' => ['Smart web applications', 'AI-integrated portals', 'Intelligent dashboards', 'Customer interaction platforms'],
          'link' => 'web-application-development.php'
        ],
        [
          'num' => '03',
          'icon' => '📱',
          'name' => 'Mobile App Development',
          'desc' => 'Intelligent mobile experiences with native and cross-platform capabilities built for scale.',
          'items' => ['Intelligent mobile experiences', 'Recommendation engines', 'Predictive UX', 'AI-driven workflows'],
          'link' => 'mobile-application-development.php'
        ],
        [
          'num' => '04',
          'icon' => '🏢',
          'name' => 'Custom Enterprise Software',
          'desc' => 'Software that matches your exact business logic — from admin platforms to operational command centers.',
          'items' => ['Admin platforms', 'Operational command centers', 'Real-time visibility', 'AI-powered insights'],
          'link' => 'custom-software.php'
        ],
        [
          'num' => '05',
          'icon' => '⚡',
          'name' => 'Automation & Integration',
          'desc' => 'Accelerate your operational growth by eliminating gaps between internal systems.',
          'items' => ['Intelligent workflow automation', 'Internal systems integration', 'High-ROI process optimization', 'Legacy software modernization'],
          'link' => 'solutions.php'
        ],
      ];

      foreach($services as $s): ?>
      <div class="service-card">
        <div class="service-num"><?= $s['num'] ?></div>
        <div class="service-icon"><?= $s['icon'] ?></div>
        <div class="service-name"><?= htmlspecialchars($s['name']) ?></div>
        <p class="service-desc"><?= htmlspecialchars($s['desc']) ?></p>
        <ul class="service-items">
          <?php foreach($s['items'] as $item): ?>
          <li><?= htmlspecialchars($item) ?></li>
          <?php endforeach; ?>
        </ul>
        <a href="<?= $s['link'] ?>" class="service-link">View Details &rarr;</a>
      </div>
      <?php endforeach; ?>

      <div class="service-card">
        <div class="section-eyebrow" style="margin-bottom:16px">Have a project?</div>
        <h3 style="font-family:var(--font-head);font-size:1.4rem;font-weight:800;letter-spacing:-0.03em;margin-bottom:16px">Let's map out your project together.</h3>
        <a href="#contact" class="btn-primary" onclick="openModal(event)" style="font-size:0.9rem;padding:14px 28px">Book a Consultation</a>
      </div>

    </div>
  </div>
</section>

<!-- CAPABILITIES MARQUEE -->
<section id="capabilities">
  <div class="marquee-header reveal">
    <div class="section-eyebrow">What We Build</div>
    <h2 class="section-title" style="font-size:clamp(1.5rem,3vw,2.2rem)">No generic templates. <em>Pure custom builds.</em></h2>
  </div>

  <?php
  $caps = ['Supply Chain AI','Smart Fitness Apps','Automated Support','Enterprise Dashboards','Recommendation Engines','Predictive Analytics','Customer Portals','Workflow Automation','LLM Fine-tuning','Computer Vision','RAG Systems','Edge AI'];
  $caps_doubled = array_merge($caps, $caps);
  ?>

  <div class="marquee-track">
    <?php foreach($caps_doubled as $cap): ?>
    <div class="marquee-item">
      <span class="marquee-dot"></span>
      <?= htmlspecialchars($cap) ?>
    </div>
    <?php endforeach; ?>
  </div>
</section>

<!-- WHY US -->
<section id="why-us">
  <div class="section-inner">
    <div class="why-layout">
      <div class="reveal">
        <div class="section-eyebrow">Our Advantage</div>
        <h2 class="section-title">Why Businesses <em>Choose Digi9</em></h2>
        <p class="section-sub">We don't just deliver code. We solve bottlenecks, unlock growth levers, and become your long-term technical partners.</p>
      </div>

      <?php
      $why = [
        ['icon'=>'⚙️','title'=>'Engineering Excellence','text'=>'Deep expertise in AI integration, LLM fine-tuning, and scalable cloud architecture built for multi-million traffic.'],
        ['icon'=>'🎯','title'=>'Custom First','text'=>'No white-label. No templates. Pure custom builds engineered for your specific business logic.'],
        ['icon'=>'📈','title'=>'Outcome Oriented','text'=>'We solve your real bottlenecks and measure success by ROI — not just lines of code shipped.'],
        ['icon'=>'🌍','title'=>'Real Experience','text'=>'Direct experience with high-growth startups and global enterprise clients ensuring stability and rapid time-to-market.'],
        ['icon'=>'🔄','title'=>'End-to-End Build','text'=>'Discovery, Design, Engineering, and Deployment — all handled internally by a single cohesive team.'],
        ['icon'=>'🚀','title'=>'Rapid Delivery','text'=>'Iterative engineering with weekly demos so you start seeing ROI early in the project lifecycle.'],
      ];
      ?>

      <div class="why-cards reveal reveal-delay-2">
        <?php foreach($why as $w): ?>
        <div class="why-card">
          <div class="why-card-icon"><?= $w['icon'] ?></div>
          <div class="why-card-title"><?= htmlspecialchars($w['title']) ?></div>
          <p class="why-card-text"><?= htmlspecialchars($w['text']) ?></p>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<!-- CASE STUDIES -->
<section id="work">
  <div class="section-inner">
    <div class="work-header reveal">
      <div class="section-eyebrow">Case Studies</div>
      <h2 class="section-title">Project <em>Portfolios</em></h2>
    </div>

    <?php
    $works = [
      [
        'badge_class' => 'badge-ai',
        'badge' => 'AI Logistics',
        'icon' => '📦',
        'name' => 'Supply Chain AI',
        'desc' => 'Smart demand forecasting and automated logistics optimization for multi-warehouse operations with real-time intelligence.',
        'metrics' => [['val'=>'34%','label'=>'Efficiency gain'],['val'=>'2.8x','label'=>'Processing speed']],
      ],
      [
        'badge_class' => 'badge-cv',
        'badge' => 'Computer Vision',
        'icon' => '🏋️',
        'name' => 'Fitness Biometrics',
        'desc' => 'Real-time form analysis platform using edge-AI for instant athlete feedback and continuous progress tracking.',
        'metrics' => [['val'=>'120K+','label'=>'Active users'],['val'=>'99.2%','label'=>'Accuracy']],
      ],
      [
        'badge_class' => 'badge-llm',
        'badge' => 'LLM Agents',
        'icon' => '🤖',
        'name' => 'Autonomous Support',
        'desc' => 'Intelligent customer-service agents capable of handling complex multi-step fintech inquiries without human intervention.',
        'metrics' => [['val'=>'72%','label'=>'Auto-resolution'],['val'=>'94%','label'=>'CSAT score']],
      ],
    ];
    ?>

    <div class="work-grid">
      <?php foreach($works as $w): ?>
      <div class="work-card reveal">
        <div class="work-card-top">
          <div class="work-visual">
            <div class="work-visual-icon"><?= $w['icon'] ?></div>
            <span class="work-badge <?= $w['badge_class'] ?>"><?= htmlspecialchars($w['badge']) ?></span>
          </div>
        </div>
        <div class="work-card-body">
          <div class="work-card-name"><?= htmlspecialchars($w['name']) ?></div>
          <p class="work-card-desc"><?= htmlspecialchars($w['desc']) ?></p>
          <div class="work-metrics">
            <?php foreach($w['metrics'] as $m): ?>
            <div class="work-metric">
              <div class="val"><?= $m['val'] ?></div>
              <div class="val-label"><?= $m['label'] ?></div>
            </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>

    <div style="text-align:center;margin-top:48px" class="reveal">
      <a href="work.php" class="btn-ghost">See More Projects &rarr;</a>
    </div>
  </div>
</section>

<!-- PROCESS -->
<section id="process">
  <div class="section-inner">
    <div class="process-header reveal">
      <div class="section-eyebrow">Methodology</div>
      <h2 class="section-title">The Blueprint <em>to Delivery</em></h2>
    </div>

    <?php
    $steps = [
      ['num'=>'01','title'=>'Discovery & Analysis','text'=>'We deep-dive into your existing workflows to identify the specific touchpoints where high-performance software or AI creates the most leverage.'],
      ['num'=>'02','title'=>'Architecture Blueprint','text'=>'We design a robust technical foundation ensuring security, scalability, and seamless integration with your current tech stack before writing a single line of code.'],
      ['num'=>'03','title'=>'Iterative Engineering','text'=>'High-speed, modular development with weekly progress demos. We prioritize functional releases that allow you to start seeing ROI early in the lifecycle.'],
      ['num'=>'04','title'=>'Production Scale','text'=>'Rigorous stress-testing and automated deployment. We ensure your application is built to handle explosive growth from day one.'],
    ];
    ?>

    <div class="process-steps">
      <?php foreach($steps as $i => $s): ?>
      <div class="process-step reveal reveal-delay-<?= $i+1 ?>">
        <div class="process-step-num"><?= $s['num'] ?></div>
        <div class="process-step-title"><?= htmlspecialchars($s['title']) ?></div>
        <p class="process-step-text"><?= htmlspecialchars($s['text']) ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- INDUSTRIES -->
<section id="industries">
  <div class="section-inner">
    <div class="industries-header reveal">
      <div class="section-eyebrow">Expertise</div>
      <h2 class="section-title">Sectors We've <em>Impacted</em></h2>
    </div>

    <?php
    $industries = [
      ['icon'=>'🏥','name'=>'Healthcare & MedTech'],
      ['icon'=>'💰','name'=>'Financial Services'],
      ['icon'=>'🚛','name'=>'Supply Chain & Logistics'],
      ['icon'=>'🛒','name'=>'E-Commerce & Retail'],
      ['icon'=>'💪','name'=>'Fitness & Wellness'],
      ['icon'=>'☁️','name'=>'Enterprise SaaS'],
      ['icon'=>'🏠','name'=>'Real Estate'],
    ];
    ?>

    <div class="industries-grid reveal">
      <?php foreach($industries as $ind): ?>
      <div class="industry-item">
        <div class="industry-icon"><?= $ind['icon'] ?></div>
        <div class="industry-name"><?= htmlspecialchars($ind['name']) ?></div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- INSIGHTS -->
<section id="insights">
  <div class="section-inner">
    <div class="insights-header reveal">
      <div class="section-eyebrow">Latest</div>
      <h2 class="section-title">Insights &amp; <em>Articles</em></h2>
    </div>

    <?php
    $insights = [
      [
        'cat' => '🤖 AI Strategy',
        'title' => 'The Custom AI Advantage',
        'text' => 'Most businesses rely on off-the-shelf SaaS. Custom AI creates a compounding competitive advantage that compounds over time and widens your moat.',
      ],
      [
        'cat' => '🏗️ Engineering',
        'title' => 'Architecture Patterns for Enterprise LLMs',
        'text' => 'Practical patterns for building enterprise-grade LLM applications: RAG pipelines, fine-tuning strategies, and orchestration at scale.',
      ],
      [
        'cat' => '📈 Data Insights',
        'title' => 'Building Prediction Pipelines',
        'text' => 'Modern predictive analytics combines traditional statistical methods with machine learning for robust, reliable forecasting systems.',
      ],
    ];
    ?>

    <div class="insights-grid">
      <?php foreach($insights as $i => $ins): ?>
      <div class="insight-card reveal reveal-delay-<?= $i+1 ?>">
        <div class="insight-cat"><?= $ins['cat'] ?></div>
        <div class="insight-title"><?= htmlspecialchars($ins['title']) ?></div>
        <p class="insight-text"><?= htmlspecialchars($ins['text']) ?></p>
        <div class="insight-arrow">Read Article &rarr;</div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- CTA BANNER -->
<section id="cta-banner">
  <div class="section-inner">
    <div class="cta-inner reveal">
      <h2 class="cta-title">Let's Build What Your<br>Business <span style="background:linear-gradient(135deg,var(--accent),var(--accent2));-webkit-background-clip:text;-webkit-text-fill-color:transparent">Actually Needs</span></h2>
      <p class="cta-sub">Free consultation. No pressure. Talk directly with our engineering team.</p>
      <div class="cta-actions">
        <a href="#contact" class="btn-primary" onclick="openModal(event)">Book a Consultation</a>
        <a href="#services" class="btn-ghost">View Services</a>
      </div>
    </div>
  </div>
</section>

<!-- FOOTER -->
<footer>
  <div class="footer-inner">
    <div class="footer-top">
      <div class="footer-brand">
        <div class="brand-name">Digi<span>9</span></div>
        <p>Building real systems for real businesses. An AI and custom software development company based in Bangalore, India.</p>
        <a href="mailto:hello@digi9.in" class="footer-email">✉ hello@digi9.in</a>
      </div>

      <div class="footer-col">
        <h4>Services</h4>
        <ul>
          <li><a href="ai-software-development.php">AI Software Development</a></li>
          <li><a href="web-application-development.php">Web Applications</a></li>
          <li><a href="mobile-application-development.php">Mobile Apps</a></li>
          <li><a href="custom-software.php">Custom Software</a></li>
          <li><a href="solutions.php">Automation & Integration</a></li>
        </ul>
      </div>

      <div class="footer-col">
        <h4>Company</h4>
        <ul>
          <li><a href="about.php">About Us</a></li>
          <li><a href="work.php">Our Work</a></li>
          <li><a href="process.php">Process</a></li>
          <li><a href="insights.php">Insights</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </div>

      <div class="footer-col">
        <h4>Contact</h4>
        <ul>
          <li><a href="#">Bangalore, Karnataka, India</a></li>
          <li><a href="mailto:hello@digi9.in">hello@digi9.in</a></li>
        </ul>
      </div>
    </div>

    <div class="footer-bottom">
      <div class="footer-copy">&copy; <?= date('Y') ?> Digi9. All rights reserved &middot; Made with &hearts; in Bangalore, India</div>
      <div class="footer-links">
        <a href="#">Privacy Policy</a>
        <a href="#">Terms of Service</a>
      </div>
    </div>
  </div>
</footer>

<!-- BOOKING MODAL -->
<div class="modal-overlay" id="modal-overlay" onclick="closeModalOnBg(event)">
  <div class="modal">
    <button class="modal-close" onclick="closeModal()">&times;</button>

    <!-- Step 1: Service selection -->
    <div class="modal-step active" id="step-1">
      <div class="modal-progress">
        <div class="progress-dot done" id="dot-1"></div>
        <div class="progress-dot" id="dot-2"></div>
        <div class="progress-dot" id="dot-3"></div>
      </div>
      <div class="modal-title">What are you building?</div>
      <p class="modal-sub">Select all that apply — we'll tailor the conversation to your needs.</p>
      <div class="modal-chips">
        <button class="chip" onclick="toggleChip(this)">AI Software</button>
        <button class="chip" onclick="toggleChip(this)">Web Application</button>
        <button class="chip" onclick="toggleChip(this)">Mobile App</button>
        <button class="chip" onclick="toggleChip(this)">Enterprise System</button>
        <button class="chip" onclick="toggleChip(this)">Automation</button>
        <button class="chip" onclick="toggleChip(this)">Not sure yet</button>
      </div>
      <button class="btn-primary" style="width:100%" onclick="goToStep(2)">Continue &rarr;</button>
    </div>

    <!-- Step 2: Contact details -->
    <div class="modal-step" id="step-2">
      <div class="modal-progress">
        <div class="progress-dot done" id="dot-1b"></div>
        <div class="progress-dot done" id="dot-2b"></div>
        <div class="progress-dot" id="dot-3b"></div>
      </div>
      <div class="modal-title">Tell us about yourself</div>
      <p class="modal-sub">We'll reach out within one business day to schedule your call.</p>
      <div class="form-group">
        <label>Full Name</label>
        <input type="text" id="modal-name" placeholder="Your name">
      </div>
      <div class="form-group">
        <label>Work Email</label>
        <input type="email" id="modal-email" placeholder="you@company.com">
      </div>
      <div class="form-group">
        <label>Brief on your project <span style="color:var(--text3);font-weight:400;text-transform:none">(optional)</span></label>
        <textarea id="modal-message" placeholder="What problem are you solving?"></textarea>
      </div>
      <button class="btn-primary" style="width:100%" onclick="submitModal()">Book My Consultation &rarr;</button>
    </div>

    <!-- Step 3: Success -->
    <div class="modal-step" id="step-3">
      <div class="modal-progress">
        <div class="progress-dot done"></div>
        <div class="progress-dot done"></div>
        <div class="progress-dot done"></div>
      </div>
      <div class="success-icon">🚀</div>
      <div class="modal-title" style="text-align:center">You're all set!</div>
      <p class="modal-sub" style="text-align:center">We'll reach out within one business day. In the meantime, explore what we've built.</p>
      <ul class="modal-benefits">
        <li>No-pressure 30-minute consultation call</li>
        <li>Direct conversation with our engineering team</li>
        <li>Custom project roadmap at no cost</li>
      </ul>
      <a href="work.php" class="btn-primary" style="width:100%;text-align:center;display:block">Explore Our Work &rarr;</a>
    </div>
  </div>
</div>

<script>
/* =====================================================
   CURSOR
   ===================================================== */
const cursor = document.getElementById('cursor');
const trail = document.getElementById('cursor-trail');
let mx = 0, my = 0, tx = 0, ty = 0;

document.addEventListener('mousemove', e => {
  mx = e.clientX; my = e.clientY;
  cursor.style.left = mx - 6 + 'px';
  cursor.style.top  = my - 6 + 'px';
});

(function animTrail() {
  tx += (mx - tx) * 0.12;
  ty += (my - ty) * 0.12;
  trail.style.left = tx - 20 + 'px';
  trail.style.top  = ty - 20 + 'px';
  requestAnimationFrame(animTrail);
})();

document.querySelectorAll('a,button,.chip').forEach(el => {
  el.addEventListener('mouseenter', () => { cursor.style.transform = 'scale(2.5)'; trail.style.transform = 'scale(1.5)'; });
  el.addEventListener('mouseleave', () => { cursor.style.transform = 'scale(1)';   trail.style.transform = 'scale(1)'; });
});

/* =====================================================
   SCROLL PROGRESS
   ===================================================== */
window.addEventListener('scroll', () => {
  const pct = window.scrollY / (document.body.scrollHeight - window.innerHeight) * 100;
  document.getElementById('scroll-progress').style.width = pct + '%';
});

/* =====================================================
   NAV SCROLL
   ===================================================== */
const navbar = document.getElementById('navbar');
window.addEventListener('scroll', () => {
  navbar.classList.toggle('scrolled', window.scrollY > 40);
});

/* =====================================================
   REVEAL ON SCROLL
   ===================================================== */
const revealObserver = new IntersectionObserver((entries) => {
  entries.forEach(e => { if (e.isIntersecting) { e.target.classList.add('visible'); } });
}, { threshold: 0.1 });

document.querySelectorAll('.reveal').forEach(el => revealObserver.observe(el));

/* =====================================================
   COUNTER ANIMATION
   ===================================================== */
function animateCounter(el, target) {
  let count = 0;
  const suffix = el.textContent.replace(/[0-9]/g, '').trim();
  const step = Math.ceil(target / 60);
  const timer = setInterval(() => {
    count = Math.min(count + step, target);
    el.textContent = count + (target >= 50 ? '+' : target === 8 ? '+' : target === 30 ? '+' : '');
    if (count >= target) clearInterval(timer);
  }, 25);
}

const counterObserver = new IntersectionObserver((entries) => {
  entries.forEach(e => {
    if (e.isIntersecting) {
      const target = parseInt(e.target.dataset.count);
      animateCounter(e.target, target);
      counterObserver.unobserve(e.target);
    }
  });
}, { threshold: 0.5 });

document.querySelectorAll('.num[data-count]').forEach(el => counterObserver.observe(el));

/* =====================================================
   PARTICLES
   ===================================================== */
const particleContainer = document.getElementById('particles');
for (let i = 0; i < 30; i++) {
  const p = document.createElement('div');
  p.className = 'particle';
  p.style.left = Math.random() * 100 + 'vw';
  p.style.setProperty('--drift', (Math.random() * 100 - 50) + 'px');
  p.style.animationDuration = (8 + Math.random() * 12) + 's';
  p.style.animationDelay = (Math.random() * 10) + 's';
  p.style.width = p.style.height = (1 + Math.random() * 2) + 'px';
  particleContainer.appendChild(p);
}

/* =====================================================
   MODAL
   ===================================================== */
function openModal(e) {
  if (e) e.preventDefault();
  document.getElementById('modal-overlay').classList.add('open');
  document.body.style.overflow = 'hidden';
  goToStep(1);
}

function closeModal() {
  document.getElementById('modal-overlay').classList.remove('open');
  document.body.style.overflow = '';
}

function closeModalOnBg(e) {
  if (e.target === document.getElementById('modal-overlay')) closeModal();
}

function goToStep(n) {
  document.querySelectorAll('.modal-step').forEach(s => s.classList.remove('active'));
  document.getElementById('step-' + n).classList.add('active');
}

function toggleChip(el) {
  el.classList.toggle('active');
}

function submitModal() {
  const name  = document.getElementById('modal-name').value.trim();
  const email = document.getElementById('modal-email').value.trim();
  if (!name || !email) {
    alert('Please enter your name and email.');
    return;
  }
  // In production, send to your API/form handler here
  goToStep(3);
}

document.addEventListener('keydown', e => { if (e.key === 'Escape') closeModal(); });
</script>
</body>
</html>
