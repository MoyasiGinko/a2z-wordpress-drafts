<?php
/**
 * Template Name: About Us - CSTM
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
get_header(); ?>

<style>
:root {
  --bg: #f7f8fc;
  --bg-dark: #071421;
  --bg-mid: #102235;

  --ink: #0f172a;
  --ink-60: rgba(15, 23, 42, 0.6);
  --ink-30: rgba(15, 23, 42, 0.3);
  --ink-10: rgba(15, 23, 42, 0.1);

  --gold: #d4a84f;
  --gold-lt: #f4d58d;
  --gold-10: rgba(212, 168, 79, 0.14);

  --blue: #2563eb;
  --blue-hover: #1d4ed8;
  --blue-light: #60a5fa;
  --blue-10: rgba(37, 99, 235, 0.12);

  --white: #ffffff;

  --border: rgba(15, 23, 42, 0.08);
  --shadow: rgba(2, 8, 20, 0.08);

  --serif: "Libre Baskerville", serif;
  --sans: : "Inter", system-ui, sans-serif;
  --mono: "Merriweather", Georgia, serif;

  --ease: cubic-bezier(0.25, 0.46, 0.45, 0.94);
}

*,
*::before,
*::after {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

html {
  scroll-behavior: smooth;
  font-size: clamp(15px, 0.28vw + 14px, 16px);
}

body {
  font-family: var(--sans);
  font-weight: 300;
  color: var(--ink);
  background: var(--bg);
  -webkit-font-smoothing: antialiased;
  overflow-x: hidden;
}

img {
  display: block;
  max-width: 100%;
  height: auto;
}

figure {
  margin: 0;
}

a {
  color: inherit;
  text-decoration: none;
}



/* ─── TYPOGRAPHY SCALE ─── */
.label {
  font-family: var(--serif);
  font-size: clamp(0.68rem, 0.65vw, 0.75rem);
  font-weight: 400;
  letter-spacing: 0.22em;
  text-transform: uppercase;
  color: var(--gold);
}

.display-xl {
  font-family: var(--serif);
  font-weight: 300;
  font-size: clamp(3.5rem, 7vw, 7rem);
  line-height: 0.95;
  letter-spacing: -0.02em;
  color: var(--white);
}

.display-xl em {
  font-style: normal;
  font-weight: 300;
}

.display-lg {
  font-family: var(--serif);
  font-weight: 300;
  font-size: clamp(1.9rem, 7.5vw, 2.8rem);
  line-height: 1.08;
  letter-spacing: -0.02em;
  color: var(--ink);
}

.display-lg em {
  font-style: normal;
  color: var(--gold);
}

.display-md {
  font-family: var(--serif);
  font-weight: 300;
  font-size: clamp(1.8rem, 3vw, 2.8rem);
  line-height: 1.15;
  letter-spacing: -0.015em;
  color: var(--ink);
}

.display-md em {
  font-style: normal;
  color: var(--gold);
}

.body-text {
  font-size: clamp(0.95rem, 0.9vw, 1rem);
  line-height: 1.9;
  color: var(--ink-60);
  font-weight: 400;
}

/* ─── LAYOUT UTILITIES ─── */
.container {
  max-width: 1320px;
  margin: 0 auto;
  padding: 0 clamp(24px, 5vw, 72px);
}

.section-pad {
  padding: clamp(80px, 11vw, 130px) clamp(24px, 5vw, 72px);
}

.divider {
  width: 32px;
  height: 1px;
  background: var(--gold);
  margin: 24px 0;
}

/* ─── BUTTONS ─── */

.btn::before {
  background: transparent;
}

.btn {
  display: inline-flex;
  align-items: center;
  gap: 10px;
  font-family: var(--mono);
  font-size: clamp(0.95rem, 0.9vw, 1rem);
  font-weight: 400;
  letter-spacing: 0.14em;
  text-transform: uppercase;
  padding: 14px 28px;
  transition: all 0.3s var(--ease);
  cursor: pointer;
  border: 1px solid transparent;
}

.btn-gold {
  background: var(--gold);
  color: var(--bg-dark);
  border-color: var(--gold);
}

.btn-gold:hover {
  background: var(--gold-lt);
  border-color: var(--gold-lt);
}

.btn-ghost-light {
  background: transparent;
  color: rgba(255, 255, 255, 0.75);
  border-color: rgba(255, 255, 255, 0.2);
}

.btn-ghost-light:hover {
  color: var(--white);
  border-color: rgba(255, 255, 255, 0.5);
}

.btn-ghost-dark {
  background: transparent;
  color: var(--gold);
  border-color: rgba(176, 141, 87, 0.35);
}

.btn-ghost-dark:hover {
  border-color: var(--gold);
  color: var(--gold);
  /*     background: var(--gold-10); */
}

/* ══════════════════════════════════════════
     HERO
  ══════════════════════════════════════════ */
.hero {
  background:
    linear-gradient(155deg, rgba(2, 8, 17, 0.9) 0%, rgba(3, 12, 26, 0.87) 50%, rgba(2, 9, 19, 0.92) 100%),
    url("https://media.ceros.com/kpmg-design/images/2026/01/14/55a99adcec51384fa514c4a063faec04/adobestock-496772834.jpg?imageOpt=1");
  background-size: cover;
  background-position: center;
  background-color: #02060f;
  min-height: 0;
  display: flex;
  align-items: center;
  position: relative;
  overflow: hidden;
}

.hero::before {
  content: "";
  position: absolute;
  top: 10%;
  left: -12%;
  width: 65%;
  height: 80%;
  background: radial-gradient(ellipse at center,
      rgba(176, 141, 87, 0.1) 0%,
      transparent 65%);
  pointer-events: none;
  z-index: 0;
}

.hero::after {
  content: "";
  position: absolute;
  bottom: -10%;
  right: -5%;
  width: 50%;
  height: 60%;
  background: radial-gradient(ellipse at center,
      rgba(176, 141, 87, 0.055) 0%,
      transparent 68%);
  pointer-events: none;
  z-index: 0;
}

.mob-res {
  display: none !important;
}

.desk-res {
  display: flex !important;
}

.hero-deco-left,
.hero-deco-right {
  position: absolute;
  top: 0;
  height: 100%;
  pointer-events: none;
  z-index: 0;
  overflow: hidden;
}

.hero-deco-left {
  left: 0;
  width: clamp(200px, 24vw, 380px);
}

.hero-deco-right {
  right: 0;
  width: clamp(280px, 36vw, 560px);
}

.hero-deco-left svg,
.hero-deco-right svg {
  width: 100%;
  height: 100%;
}

.hero-inner {
  max-width: 1560px;
  margin: 0 auto;
  padding: clamp(100px, 13vw, 160px) clamp(24px, 5vw, 72px);
  display: grid;
  grid-template-columns: 1fr 420px;
  gap: clamp(60px, 8vw, 120px);
  align-items: center;
  width: 100%;
  position: relative;
  z-index: 1;
}

.hero-kicker {
  display: flex;
  align-items: center;
  gap: 16px;
  margin-bottom: 40px;
}

.hero-kicker-dot {
  width: 6px;
  height: 6px;
  border-radius: 50%;
  background: var(--gold);
  flex-shrink: 0;
}

.hero-heading {
  font-family: var(--serif);
  font-weight: 300;
  font-size: clamp(2.6rem, 4.5vw, 4.8rem);
  line-height: 1;
  letter-spacing: -0.025em;
  color: var(--white);
  margin-bottom: 40px;
  text-align: left;
}

.hero-heading em {
  font-style: normal;
  background: linear-gradient(108deg,
      var(--gold-lt) 0%,
      #e8c97e 32%,
      var(--gold) 58%,
      var(--gold-lt) 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
}

.hero-sub {
  font-size: clamp(1.05rem, 1.22vw, 1.18rem);
  line-height: 1.95;
  color: rgba(255, 255, 255, 0.82);
  font-weight: 400;
  max-width: 48ch;
  margin-bottom: 48px;
}

.hero-sub {
  margin-top: 14px;
}

.hero-meta {
  display: grid;
  grid-template-columns: repeat(3, auto);
  gap: 40px;
  margin-bottom: 52px;
  width: fit-content;
}

.hero-meta-val {
  font-family: var(--serif);
  font-style: normal;
  font-size: clamp(1.55rem, 2.6vw, 2rem);
  color: var(--gold-lt);
  line-height: 1;
  margin-bottom: 6px;
}

.hero-meta-lbl {
  font-family: var(--mono);
  font-size: clamp(0.62rem, 0.55vw, 0.68rem);
  letter-spacing: 0.12em;
  text-transform: uppercase;
  color: rgba(255, 255, 255, 0.58);
}

.hero-ctas {
  display: flex;
  gap: 12px;
  flex-wrap: wrap;
}

.hero-portrait-col {
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 0;
  position: relative;
}

.hero-portrait-col::before {
  content: "";
  position: absolute;
  top: -10px;
  right: -10px;
  width: 38px;
  height: 38px;
  border-top: 1.5px solid rgba(176, 141, 87, 0.55);
  border-right: 1.5px solid rgba(176, 141, 87, 0.55);
  pointer-events: none;
  z-index: 2;
}

.hero-portrait-col::after {
  display: none;
}

.hero-portrait-frame {
  width: 100%;
  aspect-ratio: 3/4;
  overflow: visible;
  position: relative;
  border: 1px solid rgba(176, 141, 87, 0.32);
  box-shadow:
    0 24px 64px rgba(0, 0, 0, 0.45),
    0 6px 18px rgba(0, 0, 0, 0.28),
    inset 0 0 0 1px rgba(255, 255, 255, 0.04);
}

/* bottom-left corner bracket anchored to the image frame, so it
   sits exactly on the image's bottom-left corner at every screen
   size regardless of caption height */
.hero-portrait-frame::after {
  content: "";
  position: absolute;
  bottom: -10px;
  left: -10px;
  width: 38px;
  height: 38px;
  border-bottom: 1.5px solid rgba(176, 141, 87, 0.55);
  border-left: 1.5px solid rgba(176, 141, 87, 0.55);
  pointer-events: none;
  z-index: 2;
}

.hero-portrait-frame img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  object-position: top center;
  filter: grayscale(15%) contrast(1.05);
  display: block;
  transition: filter 0.6s ease;
}

.hero-portrait-frame:hover img {
  filter: grayscale(0%) contrast(1.02);
}

.hero-portrait-caption {
  margin-top: 20px;
  text-align: center;
}

.hero-portrait-caption strong {
  display: block;
  font-family: var(--serif);
  font-style: normal;
  font-size: clamp(1.35rem, 2.4vw, 1.8rem);
  color: var(--white);
  font-weight: 300;
  margin-bottom: 4px;
}

.hero-portrait-caption span {
  font-family: var(--mono);
  font-size: clamp(1.05rem, 1.25vw, 1.2rem);
  letter-spacing: 0.12em;
  text-transform: uppercase;
  color: rgba(255, 255, 255, 0.55);
}

@media (max-width: 1440px) {
    .a2zvt-global-prev { left: 0; }
    .a2zvt-global-next { right: 0; }
    .a2zvt-outer { padding: 0 50px; }
}

@media (max-width: 900px) {
    .a2zvt__slide {
        flex: 0 0 calc(50% - 12px);
    }
}

@media (max-width: 600px) {
    .a2zvt__slide {
        flex: 0 0 100%;
    }
    .a2zvt-outer { padding: 0; }
    .a2zvt__track { gap: 0; }
    .a2zvt-global-prev, .a2zvt-global-next { display: none; }
}

/* ══════════════════════════════════════════
     METRICS STRIP
  ══════════════════════════════════════════ */
.metrics {
  background: var(--bg);
  border-top: 1px solid var(--ink-10);
  border-bottom: 1px solid var(--ink-10);
  padding: clamp(22px, 3vw, 34px) clamp(24px, 5vw, 72px);
}

.metrics-inner {
  max-width: 1320px;
  margin: 0 auto;
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: clamp(24px, 4vw, 56px);
  align-items: center;
}

.metric-item {
  display: flex;
  flex-direction: column;
  align-items: center;
  text-align: center;
  gap: 6px;
  position: relative;
}

.metric-item:not(:last-child)::after {
  content: "";
  position: absolute;
  right: 0;
  top: 50%;
  transform: translateY(-50%);
  height: 40px;
  width: 1px;
  background: var(--ink-10);
}

.metric-num {
  font-family: var(--serif);
  font-weight: 300;
  font-style: normal;
  font-size: clamp(2rem, 3.5vw, 3rem);
  line-height: 1;
  letter-spacing: -0.02em;
  color: var(--gold);
}

.metric-lbl {
  font-family: var(--mono);
  font-size: clamp(0.72rem, 0.72vw, 0.8rem);
  letter-spacing: 0.14em;
  text-transform: uppercase;
  color: var(--ink-60);
  line-height: 1.5;
}

@media (max-width: 720px) {
  .metrics-inner {
    grid-template-columns: repeat(2, 1fr);
  }

  .metric-item:nth-child(2)::after {
    display: none;
  }
}

@media (max-width: 640px) {
  .metrics {
    padding-inline: 18px;
  }
}

@media (max-width: 380px) {
  .metrics {
    padding-inline: 14px;
  }
}

/* ══════════════════════════════════════════
     TEAM PULL-QUOTE BAND
  ══════════════════════════════════════════ */
.team-quote-band {
  background:
    linear-gradient(155deg, rgba(2, 8, 17, 0.9) 0%, rgba(3, 12, 26, 0.85) 50%, rgba(2, 9, 19, 0.92) 100%),
    url("https://images.unsplash.com/photo-1521737604893-d14cc237f11d?auto=format&fit=crop&w=1600&q=80");
  background-size: cover;
  background-position: center;
  background-attachment: fixed;
  background-color: #02060f;
  padding: clamp(64px, 9vw, 100px) clamp(24px, 5vw, 72px);
  position: relative;
  overflow: hidden;
}

.team-quote-band::before {
  content: "";
  position: absolute;
  inset: 0;
  background: radial-gradient(ellipse at 85% 12%,
      rgba(37, 99, 235, 0.16) 0%,
      rgba(13, 30, 52, 0.05) 35%,
      transparent 58%);
  pointer-events: none;
}

.team-quote-inner {
  max-width: 920px;
  margin: 0 auto;
  position: relative;
  z-index: 1;
  text-align: center;
}

.team-quote-main {
  font-family: var(--serif);
  font-weight: 300;
  font-size: clamp(2.2rem, 3.5vw, 3.2rem);
  line-height: 1.15;
  letter-spacing: -0.02em;
  color: var(--white);
  margin-bottom: 24px;
}

.team-quote-main em {
  font-style: normal;
  color: var(--gold);
}

.team-quote-sub {
  font-size: clamp(0.92rem, 1vw, 1rem);
  line-height: 1.75;
  color: rgba(255, 255, 255, 0.58);
  font-weight: 400;
  letter-spacing: 0.04em;
}

.team-quote-sub strong {
  color: rgba(255, 255, 255, 0.82);
  font-weight: 600;
}

@media (max-width: 640px) {
  .team-quote-band {
    padding-inline: 18px;
  }
}

/* ══════════════════════════════════════════
     TESTIMONIALS
  ══════════════════════════════════════════ */
.testimonials {
  background: #0b1a2a url('https://images.unsplash.com/photo-1448630360428-65456885c650?auto=format&fit=crop&w=1600&q=80') center/cover no-repeat;
  padding: clamp(80px, 11vw, 130px) clamp(24px, 5vw, 72px);
  position: relative;
  overflow: hidden;
}

.testimonials::before {
  content: "";
  position: absolute;
  inset: 0;
  background: linear-gradient(135deg, rgba(11, 26, 42, 0.92) 0%, rgba(11, 26, 42, 0.98) 100%);
  pointer-events: none;
}

.testimonials-inner {
  max-width: 1320px;
  margin: 0 auto;
  position: relative;
  z-index: 1;
}

.testimonials-head {
  display: grid;
  grid-template-columns: 1fr;
  gap: clamp(40px, 6vw, 80px);
  align-items: end;
  margin-bottom: clamp(20px, 2.5vw, 28px);
}

.testimonials-head h2 {
  font-family: var(--serif);
  font-weight: 300;
  font-size: clamp(2.2rem, 3.5vw, 3.2rem);
  line-height: 1.08;
  letter-spacing: -0.02em;
  color: #fff;
}

.testimonials-head h2 em {
  font-style: normal;
  color: var(--gold);
}

/* ════════════════════════════════════════════════════
   A2Z HERO VIDEO TESTIMONIALS — fully isolated namespace
   Prefix: a2zvt-  (zero overlap with any global class)
════════════════════════════════════════════════════ */
.a2zvt-outer {
    position: relative;
    max-width: 1320px;
    margin: clamp(32px, 5vw, 52px) auto 0;
}

.a2zvt-global-prev,
.a2zvt-global-next {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    width: clamp(40px, 4vw, 48px);
    height: clamp(40px, 4vw, 48px);
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.1);
    border: 1px solid rgba(255, 255, 255, 0.2);
    color: #fff;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    z-index: 10;
    transition: all 0.3s;
}

.a2zvt-global-prev { left: -60px; }
.a2zvt-global-next { right: -60px; }
.a2zvt-global-prev:hover,
.a2zvt-global-next:hover {
    background: var(--gold, #d4a84f);
    border-color: var(--gold, #d4a84f);
    color: #000;
}

.a2zvt {
    position: relative;
    width: 100%;
    overflow: hidden;
    padding: 10px 0;
}

.a2zvt__track {
    display: flex;
    gap: 24px;
    transition: transform 0.52s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    will-change: transform;
}

.a2zvt__slide {
    flex: 0 0 calc(33.333% - 16px);
    display: flex;
    flex-direction: column;
    background: rgba(10, 28, 52, 0.72);
    border: 1px solid rgba(255, 255, 255, 0.11);
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 2px 0 0 rgba(255, 255, 255, 0.06) inset, 0 32px 72px rgba(0, 0, 0, 0.3);
    position: relative;
    min-height: 480px;
}

/* Thumbnail fills the entire card */
.a2zvt__thumb {
    position: absolute;
    inset: 0;
    display: block;
    text-decoration: none;
    overflow: hidden;
}

.a2zvt__thumb-img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center top;
    display: block;
}

.a2zvt__thumb:hover .a2zvt__thumb-img {
    /* no scale on hover */
}

.a2zvt__thumb::before {
    content: "";
    position: absolute;
    inset: 0;
    background: linear-gradient(to top, rgba(5, 15, 30, 0.92) 0%, rgba(5, 15, 30, 0.45) 45%, rgba(5, 15, 30, 0.1) 100%);
    z-index: 1;
    pointer-events: none;
}

.a2zvt__play {
    position: absolute;
    top: 50%;
    left: 50%;
    z-index: 2;
    width: clamp(46px, 12vw, 58px);
    height: clamp(46px, 12vw, 58px);
    border-radius: 50%;
    background: rgba(212, 168, 79, 0.9);
    transform: translate(-50%, -50%);
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3), 0 0 0 6px rgba(255, 255, 255, 0.08);
    transition: background 0.22s, transform 0.22s, box-shadow 0.22s;
    pointer-events: none;
}

.a2zvt__play-icon {
    width: 0;
    height: 0;
    border-style: solid;
    border-width: 9px 0 9px 16px;
    border-color: transparent transparent transparent #fff;
    margin-left: 3px;
    display: block;
}

.a2zvt__thumb:hover .a2zvt__play {
    background: #d4a84f;
    transform: translate(-50%, -50%) scale(1.1);
    box-shadow: 0 10px 28px rgba(0, 0, 0, 0.35), 0 0 0 8px rgba(255, 255, 255, 0.1);
}

/* Content overlay at the bottom of the card */
.a2zvt__body {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    z-index: 3;
    display: flex;
    flex-direction: column;
    justify-content: flex-end;
    padding: clamp(20px, 4.2vw, 36px) clamp(20px, 4.8vw, 40px);
    box-sizing: border-box;
    min-width: 0;
    overflow-wrap: break-word;
    word-wrap: break-word;
    background: linear-gradient(to top, rgba(5, 15, 30, 0.95) 0%, rgba(5, 15, 30, 0.6) 60%, transparent 100%);
    min-height: 60%;
}

.a2zvt__meta {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 10px;
    margin-bottom: clamp(10px, 2.5vw, 14px);
}

.a2zvt__eyebrow {
    font-family: "Plus Jakarta Sans", system-ui, sans-serif;
    font-size: clamp(0.58rem, 1.5vw, 0.65rem);
    font-weight: 700;
    letter-spacing: 0.16em;
    text-transform: uppercase;
    color: #d4a84f;
    line-height: 1.3;
    text-align: left;
}

.a2zvt__stars {
    font-size: clamp(0.85rem, 2.2vw, 0.95rem);
    color: #d4a84f;
    letter-spacing: 0.04em;
    line-height: 1;
    flex-shrink: 0;
}

.a2zvt__quote {
    font-family: "Plus Jakarta Sans", system-ui, sans-serif;
    font-size: clamp(0.95rem, 2.4vw, 1.28rem);
    font-weight: 600;
    line-height: 1.5;
    color: #ffffff;
    margin: 0 0 clamp(16px, 3.5vw, 28px);
    flex-grow: 1;
    display: flex;
    align-items: center;
}

.a2zvt__body>div:first-child {
    display: flex;
    flex-direction: column;
    flex: 1;
}

.a2zvt__author {
    display: flex;
    align-items: center;
    justify-content: flex-start;
    text-align: left;
    gap: clamp(10px, 2.4vw, 13px);
    margin-top: auto;
    margin-bottom: clamp(16px, 3.5vw, 28px);
}

.a2zvt__avatar {
    width: clamp(34px, 9vw, 42px);
    height: clamp(34px, 9vw, 42px);
    border-radius: 50%;
    background: rgba(212, 168, 79, 0.18);
    border: 1px solid rgba(212, 168, 79, 0.3);
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.a2zvt__avatar-icon {
    width: clamp(16px, 4.4vw, 20px);
    height: clamp(16px, 4.4vw, 20px);
    fill: rgba(255, 255, 255, 0.45);
    display: block;
}

.a2zvt__name {
    font-family: "Plus Jakarta Sans", system-ui, sans-serif;
    font-size: clamp(0.82rem, 2.2vw, 0.9rem);
    font-weight: 700;
    color: #ffffff;
    line-height: 1.25;
    text-align: left;
}

.a2zvt__role {
    font-family: "Plus Jakarta Sans", system-ui, sans-serif;
    font-size: clamp(0.85rem, 1.9vw, 0.95rem);
    font-weight: 500;
    color: rgba(255, 255, 255, 0.85);
    line-height: 1.4;
    margin-top: 2px;
    text-align: left;
}

.a2zvt__divider {
    height: 1px;
    background: rgba(255, 255, 255, 0.07);
    margin: 0;
}

.a2zvt__controls {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 12px;
    padding-top: clamp(14px, 3vw, 20px);
}

.a2zvt__counter {
    font-family: "Plus Jakarta Sans", system-ui, sans-serif;
    font-size: clamp(0.62rem, 1.6vw, 0.7rem);
    font-weight: 700;
    letter-spacing: 0.12em;
    color: var(--gold);
    text-decoration: none;
    text-transform: uppercase;
    padding: 8px 18px;
    border: 1.5px solid rgba(212, 168, 79, 0.45);
    border-radius: 6px;
    background: transparent;
    transition: background 0.3s var(--ease), color 0.3s var(--ease), border-color 0.3s var(--ease), box-shadow 0.3s var(--ease);
}

.a2zvt__counter:hover {
    background: var(--gold);
    color: #0f172a;
    border-color: var(--gold);
    box-shadow: 0 4px 16px rgba(212, 168, 79, 0.3);
}

.a2zvt__nav {
    display: flex;
    gap: 8px;
    align-items: center;
}

.a2zvt__arrow {
    width: clamp(32px, 8.5vw, 38px);
    height: clamp(32px, 8.5vw, 38px);
    border-radius: 50%;
    flex-shrink: 0;
    border: 1.5px solid rgba(255, 255, 255, 0.22);
    background: transparent;
    color: rgba(255, 255, 255, 0.8);
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: border-color 0.2s, background 0.2s, color 0.2s, transform 0.18s;
    padding: 0;
    line-height: 1;
}

.a2zvt__arrow:hover {
    border-color: rgba(212, 168, 79, 0.8);
    background: rgba(212, 168, 79, 0.12);
    color: #fff;
    transform: scale(1.1);
}

.a2zvt__arrow-svg {
    width: 15px;
    height: 15px;
    fill: none;
    stroke: currentColor;
    stroke-width: 2.5;
    stroke-linecap: round;
    stroke-linejoin: round;
    display: block;
}

@media (max-width: 1440px) {
    .a2zvt-global-prev { left: 0; }
    .a2zvt-global-next { right: 0; }
    .a2zvt-outer { padding: 0 50px; }
}

@media (max-width: 900px) {
    .a2zvt__slide {
        flex: 0 0 calc(50% - 12px);
    }
}

@media (max-width: 600px) {
    .a2zvt__slide {
        flex: 0 0 100%;
    }
    .a2zvt-outer { padding: 0; }
    .a2zvt__track { gap: 0; }
    .a2zvt-global-prev, .a2zvt-global-next { display: none; }
}

/* ════════════════════════════════════════════════════
   HERO — small-screen refinements.
   The hero's base rules above are now fully fluid (clamp),
   so the layout scales continuously at every width. These
   rules only handle the few things fluid sizing can't:
   stacking the CTAs and de-cramping the slider on phones.
   Scoped to hero classes — nothing else is affected.
════════════════════════════════════════════════════ */

/* Phones — let the testimonial card controls wrap on very narrow
   screens. The CTA buttons stay content-width and centered via the
   768px rule above, and their padding/font are fluid (clamp). */

/* ══════════════════════════════════════════
     STORY
  ══════════════════════════════════════════ */
.story {
  background: var(--white);
  padding: clamp(80px, 11vw, 130px) clamp(24px, 5vw, 72px);
}

.team {
  background: var(--white);
  padding: clamp(80px, 11vw, 130px) clamp(24px, 5vw, 72px);
}

.team-inner {
  max-width: 1320px;
  margin: 0 auto;
}

.team-head {
  max-width: 880px;
  margin-bottom: clamp(52px, 7vw, 82px);
}

.team-head .label {
  display: block;
  margin-bottom: 20px;
}

.team-head p {
  max-width: 62ch;
  margin-top: 24px;
  font-size: clamp(1rem, 1vw, 1.05rem);
  line-height: 1.9;
  color: rgba(12, 12, 10, 0.72);
  font-weight: 400;
}

.team-grid {
  display: grid;
  grid-template-columns: 1.2fr repeat(3, 1fr);
  gap: 1px;
  background: var(--ink-10);
}

.team-card {
  background: var(--white);
  min-height: 420px;
  display: flex;
  flex-direction: column;
}

.team-photo {
  aspect-ratio: 4/3;
  background:
    linear-gradient(135deg, rgba(176, 141, 87, 0.18), rgba(4, 19, 34, 0.08)),
    var(--bg);
  overflow: hidden;
  display: flex;
  align-items: center;
  justify-content: center;
}

.team-photo img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  object-position: top center;
}

.team-initials {
  font-family: var(--serif);
  font-style: normal;
  font-size: clamp(3rem, 5vw, 5.5rem);
  color: var(--gold);
}

.team-body {
  padding: clamp(28px, 3vw, 42px);
  flex: 1;
  display: flex;
  flex-direction: column;
}

.team-body h3 {
  font-family: var(--serif);
  font-weight: 300;
  font-size: clamp(1.7rem, 2.4vw, 2.35rem);
  line-height: 1.1;
  color: var(--ink);
  margin-bottom: 10px;
}

.team-role {
  font-family: var(--serif);
  font-size: clamp(0.8rem, 0.5vw, 1rem);
  letter-spacing: 0.14em;
  text-transform: uppercase;
  color: var(--gold);
  line-height: 1.6;
  margin-bottom: 24px;
}

.team-body p {
  font-size: clamp(0.94rem, 0.95vw, 0.98rem);
  line-height: 1.85;
  color: rgba(12, 12, 10, 0.72);
  font-weight: 400;
}

.team.story {
  background: var(--white);
}

.team .story-sidebar-head {
  max-width: 100%;
}

.team .story-sidebar-copy {
  margin-top: 24px;
  font-size: clamp(1.0rem, 1.22vw, 1.1rem);
  line-height: 1.85;
  color: rgba(12, 12, 10, 0.62);
  font-weight: 400;
}

.team-profile {
  display: grid;
  grid-template-columns: clamp(120px, 18vw, 190px) 1fr;
  gap: clamp(24px, 4vw, 48px);
  align-items: center;
}

.team-profile-media {
  aspect-ratio: 4/5;
  background:
    linear-gradient(135deg, rgba(176, 141, 87, 0.18), rgba(4, 19, 34, 0.08)),
    var(--bg);
  border: 1px solid rgba(176, 141, 87, 0.18);
  overflow: hidden;
  display: flex;
  align-items: center;
  justify-content: center;
}

.team-profile-media img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  object-position: top center;
}

.team-profile-initials {
  font-family: var(--serif);
  font-style: normal;
  font-size: clamp(2.8rem, 5vw, 5rem);
  color: var(--gold);
}

.team-profile-body h3 {
  font-family: var(--serif);
  font-weight: 300;
  font-size: clamp(1.8rem, 3vw, 2.8rem);
  line-height: 1.1;
  letter-spacing: -0.015em;
  color: var(--ink);
  margin-bottom: 12px;
}

.team-profile-role {
  display: block;
  font-family: var(--mono);
  font-size: clamp(0.95rem, 0.9vw, 1rem);
  letter-spacing: 0.14em;
  text-transform: uppercase;
  color: var(--gold);
  line-height: 1.6;
  margin-bottom: 20px;
}

.team .sp-body .team-profile-body p {
  opacity: 1;
  transform: none;
  transition: none;
}

@media (max-width: 640px) {
  .team-profile {
    grid-template-columns: 1fr;
  }

  .team-profile-media {
    max-width: 220px;
  }
}

@media (max-width: 1080px) {
  .team-grid {
    grid-template-columns: repeat(2, 1fr);
  }
}

/* Story section — founder journey header */
.story-journey-header {
  display: flex;
  align-items: center;
  gap: clamp(16px, 2.5vw, 28px);
  margin-bottom: 8px;
  padding-bottom: 28px;
  border-bottom: 1px solid var(--ink-10);
}

.story-journey-photo {
  width: clamp(60px, 8vw, 88px);
  aspect-ratio: 1;
  border-radius: 50%;
  overflow: hidden;
  border: 1px solid rgba(176, 141, 87, 0.28);
  flex-shrink: 0;
  background:
    linear-gradient(135deg, rgba(176, 141, 87, 0.18), rgba(4, 19, 34, 0.08)),
    var(--bg);
}

.story-journey-photo img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  object-position: top center;
}

.story-journey-ident .story-founder-name {
  font-size: clamp(1.3rem, 1.8vw, 1.8rem);
  margin-bottom: 4px;
}

.story-journey-ident .story-founder-role {
  margin-bottom: 0;
}

/* Story section — founder profile (right column) */
.story-founder {
  display: grid;
  grid-template-columns: clamp(180px, 26vw, 300px) 1fr;
  gap: clamp(28px, 4vw, 52px);
  align-items: start;
}

.story-founder-photo {
  aspect-ratio: 4/5;
  background:
    linear-gradient(135deg, rgba(176, 141, 87, 0.18), rgba(4, 19, 34, 0.08)),
    var(--bg);
  border: 1px solid rgba(176, 141, 87, 0.18);
  overflow: hidden;
}

.story-founder-photo img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  object-position: top center;
}

.story-founder-name {
  font-family: var(--serif);
  font-weight: 300;
  font-size: clamp(2rem, 2.8vw, 2.8rem);
  line-height: 1.1;
  letter-spacing: -0.015em;
  color: var(--ink);
  margin-bottom: 10px;
}

.story-founder-name em {
  font-style: normal;
  color: var(--gold);
}

.story-founder-role {
  display: block;
  font-family: var(--mono);
  font-size: clamp(0.8rem, 0.82vw, 0.9rem);
  letter-spacing: 0.14em;
  text-transform: uppercase;
  color: var(--gold);
  line-height: 1.6;
  margin-bottom: 22px;
}

.story-founder-bio {
  font-size: clamp(0.95rem, 1.05vw, 1.05rem);
  line-height: 1.85;
  color: rgba(12, 12, 10, 0.72);
  margin-bottom: 28px;
}

.story-founder-credentials {
  list-style: none;
  padding: 0;
  margin: 0;
  display: flex;
  flex-direction: column;
  gap: 14px;
  border-top: 1px solid var(--ink-10);
  padding-top: 24px;
}

.story-founder-credentials li {
  display: flex;
  align-items: baseline;
  gap: 14px;
  font-size: clamp(0.88rem, 0.92vw, 0.98rem);
  color: rgba(12, 12, 10, 0.72);
  line-height: 1.5;
}

.story-founder-credentials li span {
  font-family: var(--mono);
  font-size: clamp(0.72rem, 0.76vw, 0.82rem);
  letter-spacing: 0.1em;
  text-transform: uppercase;
  color: var(--gold);
  min-width: 58px;
  flex-shrink: 0;
}

@media (max-width: 640px) {
  .story-founder {
    grid-template-columns: 1fr;
  }

  .story-founder-photo {
    max-width: 240px;
  }
}

@media (max-width: 640px) {
  .team {
    padding-inline: 18px;
  }

  .team-grid {
    grid-template-columns: 1fr;
  }
}

.story-inner {
  max-width: 1320px;
  margin: 0 auto;
  display: grid;
  grid-template-columns: 300px 1fr;
  gap: clamp(60px, 8vw, 120px);
  align-items: start;
}

.story-sidebar {
  position: sticky;
  top: clamp(160px, 10vh, 100px);
}

.story-sidebar .label {
  margin-bottom: 24px;
  display: block;
}

.story-sidebar-head {
  font-family: var(--serif);
  font-weight: 300;
  font-size: clamp(2.6rem, 3vw, 2.8rem);
  line-height: 1.15;
  letter-spacing: -0.015em;
  color: var(--ink);
  margin-bottom: 0;
}

.story-sidebar-head em {
  font-style: normal;
  color: var(--gold);
}

.story-sidebar-rule {
  width: 28px;
  height: 1px;
  background: var(--gold);
  margin: 28px 0 0;
  opacity: 0.5;
}

.story-progress {
  margin-top: 24px;
  position: relative;
  display: flex;
  flex-direction: column;
  gap: 18px;
}

.story-progress::before {
  content: "";
  position: absolute;
  left: 4px;
  top: 9px;
  bottom: 9px;
  width: 1px;
  background: rgba(176, 141, 87, 0.1);
}

.sp-prog-fill {
  position: absolute;
  left: 4px;
  top: 9px;
  width: 1px;
  height: 0%;
  background: linear-gradient(to bottom,
      var(--gold),
      rgba(176, 141, 87, 0.35));
  transition: height 0.14s ease;
  z-index: 1;
  pointer-events: none;
}

.sp-prog-item {
  display: flex;
  align-items: center;
  gap: 12px;
  position: relative;
  z-index: 2;
}

.sp-prog-dot {
  width: 9px;
  height: 9px;
  border-radius: 50%;
  border: 1px solid rgba(176, 141, 87, 0.18);
  background: var(--white);
  flex-shrink: 0;
  transition:
    background 0.3s ease,
    border-color 0.3s ease,
    transform 0.35s cubic-bezier(0.22, 1, 0.36, 1),
    box-shadow 0.3s ease;
}

.sp-prog-label {
  font-family: var(--mono);
  font-size: clamp(0.48rem, 0.18vw, 0.5rem);
  letter-spacing: 0.14em;
  text-transform: uppercase;
  color: rgba(12, 12, 10, 0.16);
  transition: color 0.3s ease;
  white-space: nowrap;
}

.sp-prog-item.sp-prog-active .sp-prog-dot {
  background: rgba(176, 141, 87, 0.42);
  border-color: rgba(176, 141, 87, 0.5);
  transform: scale(1.1);
}

.sp-prog-item.sp-prog-active .sp-prog-label {
  color: rgba(12, 12, 10, 0.34);
}

.sp-prog-item.sp-prog-current .sp-prog-dot {
  background: var(--gold);
  border-color: var(--gold);
  transform: scale(1.55);
  box-shadow:
    0 0 0 3px rgba(176, 141, 87, 0.15),
    0 0 8px rgba(176, 141, 87, 0.3);
}

.sp-prog-item.sp-prog-current .sp-prog-label {
  color: var(--gold);
}

.story-chain {
  padding-top: 2px;
}

.sp-item {
  display: grid;
  grid-template-columns: 22px 1fr;
  gap: 0 clamp(18px, 2.5vw, 28px);
}

.sp-track {
  display: flex;
  flex-direction: column;
  align-items: center;
}

.sp-line {
  width: 1px;
  height: 44px;
  flex-shrink: 0;
  background: linear-gradient(to bottom,
      rgba(176, 141, 87, 0.04),
      rgba(176, 141, 87, 0.38));
  transform-origin: top center;
  transform: scaleY(0);
  transition: transform 0.72s cubic-bezier(0.22, 1, 0.36, 1) 0s;
}

.sp-item:first-child .sp-line {
  opacity: 0;
}

.sp-dot {
  width: 9px;
  height: 9px;
  border-radius: 50%;
  border: 1.5px solid rgba(176, 141, 87, 0.28);
  background: transparent;
  flex-shrink: 0;
  position: relative;
  transform: scale(1);
  transition:
    background 0.32s ease 0.48s,
    border-color 0.32s ease 0.48s,
    transform 0.45s cubic-bezier(0.22, 1, 0.36, 1) 0.48s,
    box-shadow 0.4s ease 0.48s;
}

.sp-dot::after {
  content: "";
  position: absolute;
  inset: -3px;
  border-radius: 50%;
  border: 1.5px solid rgba(176, 141, 87, 0);
  opacity: 0;
  pointer-events: none;
}

.sp-item.sp-active .sp-dot::after {
  animation: sp-ripple 1s ease-out 0.54s both;
}

.sp-tail {
  width: 1px;
  flex: 1;
  min-height: 24px;
  background: linear-gradient(to bottom,
      rgba(176, 141, 87, 0.38),
      rgba(176, 141, 87, 0.04));
  transform-origin: top center;
  transform: scaleY(0);
  transition: transform 0.55s ease 0.52s;
}

.sp-item:last-child .sp-tail {
  display: none;
}

.sp-body {
  padding-top: 40px;
  padding-bottom: clamp(36px, 4.5vw, 52px);
}

.sp-item:last-child .sp-body {
  padding-bottom: 0;
}

.sp-body p {
  font-size: clamp(1rem, 1.15vw, 1.1rem);
  line-height: 1.95;
  color: var(--ink-60);
  font-weight: 400;
  opacity: 0;
  transform: translateY(13px);
  transition:
    opacity 0.62s ease 0.32s,
    transform 0.62s ease 0.32s;
}

.sp-item--quote .sp-dot {
  width: 11px;
  height: 11px;
  border-color: var(--gold);
}

.sp-item--quote .sp-body {
  padding-top: 40px;
  padding-inline: clamp(20px, 2.5vw, 32px);
  background: rgba(176, 141, 87, 0.035);
}

.sp-body blockquote {
  font-family: var(--serif);
  font-style: normal;
  font-weight: 300;
  font-size: clamp(1.35rem, 2.4vw, 2.1rem);
  line-height: 1.38;
  color: var(--ink);
  position: relative;
  padding-top: 0;
  margin-bottom: 14px;
  opacity: 0;
  transform: translateY(13px);
  transition:
    opacity 0.65s ease 0.3s,
    transform 0.65s ease 0.3s;
}

.sp-body blockquote::before {
  content: "\201C";
  position: static;
  display: inline;
  font-family: var(--serif);
  font-style: normal;
  font-size: clamp(3.5rem, 5vw, 6rem);
  line-height: 0.75;
  vertical-align: -0.15em;
  color: var(--gold);
  opacity: 0.55;
  margin-right: 4px;
  pointer-events: none;
  user-select: none;
}

.sp-body blockquote::after {
  content: "\201D";
  display: inline;
  font-family: var(--serif);
  font-style: normal;
  font-size: clamp(3.5rem, 5vw, 6rem);
  line-height: 0.75;
  vertical-align: -0.15em;
  color: var(--gold);
  opacity: 0.55;
  margin-left: 3px;
  pointer-events: none;
  user-select: none;
}

.sp-body cite {
  display: block;
  font-style: normal;
  font-family: var(--mono);
  font-size: clamp(0.61rem, 0.52vw, 0.66rem);
  letter-spacing: 0.12em;
  text-transform: uppercase;
  color: var(--gold);
  opacity: 0;
  transform: translateY(8px);
  transition:
    opacity 0.5s ease 0.55s,
    transform 0.5s ease 0.55s;
}

.sp-item.sp-active .sp-line {
  transform: scaleY(1);
}

.sp-item.sp-active .sp-dot {
  background: var(--gold);
  border-color: var(--gold);
  transform: scale(1.45);
  box-shadow:
    0 0 0 4px rgba(176, 141, 87, 0.1),
    0 0 14px rgba(176, 141, 87, 0.22);
}

.sp-item.sp-active .sp-tail {
  transform: scaleY(1);
}

.sp-item.sp-revealed .sp-body p,
.sp-item.sp-revealed .sp-body blockquote,
.sp-item.sp-revealed .sp-body cite {
  opacity: 1;
  transform: none;
}

.sp-item.sp-active.sp-focus .sp-dot {
  transform: scale(1.65);
  animation: sp-pulse 2.2s ease-in-out infinite;
}

@keyframes sp-ripple {
  from {
    inset: -3px;
    border-color: rgba(176, 141, 87, 0.65);
    opacity: 1;
  }

  to {
    inset: -18px;
    border-color: rgba(176, 141, 87, 0);
    opacity: 0;
  }
}

@keyframes sp-pulse {

  0%,
  100% {
    box-shadow:
      0 0 0 4px rgba(176, 141, 87, 0.1),
      0 0 12px rgba(176, 141, 87, 0.22);
  }

  50% {
    box-shadow:
      0 0 0 7px rgba(176, 141, 87, 0.18),
      0 0 22px rgba(176, 141, 87, 0.38);
  }
}

@media (prefers-reduced-motion: reduce) {

  .sp-line,
  .sp-tail,
  .sp-body p,
  .sp-body blockquote,
  .sp-body cite {
    transition: none;
    transform: none;
    opacity: 1;
  }

  .sp-dot {
    background: var(--gold);
    border-color: var(--gold);
    transform: scale(1);
    transition: none;
  }

  .sp-item.sp-active .sp-dot::after,
  .sp-item.sp-active.sp-focus .sp-dot {
    animation: none;
  }
}

@media (max-width: 820px) {
  .story-inner {
    grid-template-columns: 1fr;
  }

  .story-sidebar {
    position: static;
  }
}

/* ══════════════════════════════════════════
     PRINCIPLES
  ══════════════════════════════════════════ */
.principles {
  background:
    linear-gradient(155deg, rgba(2, 8, 17, 0.9) 0%, rgba(3, 12, 26, 0.85) 50%, rgba(2, 9, 19, 0.92) 100%),
    url("https://images.unsplash.com/photo-1448630360428-65456885c650?auto=format&fit=crop&w=1600&q=80");
  background-size: cover;
  background-position: center;
  background-attachment: fixed;
  background-color: #02060f;
  padding: clamp(80px, 11vw, 130px) clamp(24px, 5vw, 72px);
  position: relative;
}

.principles::before {
  content: "";
  position: absolute;
  inset: 0;
  background: radial-gradient(ellipse at 85% 12%,
      rgba(37, 99, 235, 0.16) 0%,
      rgba(13, 30, 52, 0.05) 35%,
      transparent 58%);
  pointer-events: none;
  z-index: 0;
}

.principles-inner {
  max-width: 1320px;
  margin: 0 auto;
  position: relative;
  z-index: 1;
}

.layers-head.solo-head,
.sect-head.solo-head {
  grid-template-columns: 1fr;
  max-width: 100%;
}

.principles-layout {
  display: grid;
  grid-template-columns: 1fr 1.7fr;
  gap: clamp(64px, 9vw, 140px);
  align-items: start;
}

.principles-sidebar {
  position: sticky;
  top: clamp(80px, 10vw, 140px);
  /*   padding-top: clamp(28px, 3.5vw, 40px); */
}

.principles-sidebar .label {
  display: flex;
  align-items: center;
  gap: 12px;
  margin-bottom: clamp(20px, 2.5vw, 28px);
}

.principles-sidebar .label::before {
  content: "";
  width: 28px;
  height: 1px;
  background: var(--gold);
  flex-shrink: 0;
}

.principles-sidebar .display-lg {
  color: var(--white);
  margin-bottom: clamp(24px, 3vw, 36px);
}

.principles-sidebar .display-lg em {
  color: var(--gold);
}

.principles-intro {
  font-size: clamp(0.95rem, 1vw, 1.05rem);
  line-height: 1.85;
  color: rgba(255, 255, 255, 0.68);
  font-weight: 400;
  margin-bottom: clamp(36px, 4.5vw, 56px);
  max-width: 34ch;
}

.principles-list {
  border-top: 1px solid rgba(255, 255, 255, 0.1);
}

.principle-row {
  position: relative;
  display: grid;
  grid-template-columns: clamp(72px, 8vw, 104px) 1fr;
  gap: 0 clamp(28px, 3.5vw, 48px);
  padding: clamp(34px, 4.5vw, 52px) clamp(20px, 2.5vw, 32px);
  border-bottom: 1px solid rgba(255, 255, 255, 0.08);
  align-items: start;
  cursor: default;
  overflow: hidden;
  transition: background 0.45s var(--ease);
}

/* sliding gold accent bar on the left */
.principle-row::before {
  content: "";
  position: absolute;
  left: 0;
  top: 0;
  bottom: 0;
  width: 2px;
  background: linear-gradient(to bottom, var(--gold), rgba(212, 168, 79, 0.2));
  transform: scaleY(0);
  transform-origin: top;
  transition: transform 0.5s var(--ease);
}

/* soft glow that sweeps in from the left */
.principle-row::after {
  content: "";
  position: absolute;
  inset: 0;
  background: linear-gradient(to right, rgba(212, 168, 79, 0.07) 0%, transparent 40%);
  opacity: 0;
  transition: opacity 0.45s var(--ease);
  pointer-events: none;
}

.principle-row:hover {
  background: rgba(255, 255, 255, 0.025);
}

.principle-row:hover::before {
  transform: scaleY(1);
}

.principle-row:hover::after {
  opacity: 1;
}

.principle-row-num {
  display: block;
  font-family: var(--serif);
  font-weight: 300;
  font-style: normal;
  font-size: clamp(2.4rem, 3.2vw, 3.4rem);
  line-height: 0.85;
  letter-spacing: -0.03em;
  color: transparent;
  background: linear-gradient(135deg, var(--gold-lt) 0%, var(--gold) 60%, rgba(212, 168, 79, 0.55) 100%);
  -webkit-background-clip: text;
  background-clip: text;
  position: relative;
  z-index: 1;
  user-select: none;
  transition: transform 0.45s var(--ease);
}

.principle-row:hover .principle-row-num {
  transform: translateX(6px);
}

.principle-row-body {
  position: relative;
  z-index: 1;
}

.principle-row-body h3 {
  font-family: var(--serif);
  font-weight: 300;
  font-size: clamp(1.15rem, 1.7vw, 1.65rem);
  color: rgba(255, 255, 255, 0.9);
  line-height: 1.2;
  letter-spacing: 0.02em;
  margin-bottom: clamp(14px, 1.6vw, 20px);
  transition: color 0.35s ease, transform 0.45s var(--ease);
  text-transform: uppercase;
}

.principle-row:hover .principle-row-body h3 {
  color: var(--white);
  transform: translateX(6px);
}

.principle-row-body h3 em {
  font-style: normal;
  color: var(--gold);
}

.principle-row-body p {
  font-size: clamp(0.95rem, 1vw, 1.05rem);
  line-height: 1.85;
  color: rgba(255, 255, 255, 0.6);
  font-weight: 400;
  max-width: 52ch;
  transition: color 0.35s ease, transform 0.45s var(--ease);
}

.principle-row:hover .principle-row-body p {
  color: rgba(255, 255, 255, 0.78);
  transform: translateX(6px);
}

@media (max-width: 1440px) {
    .a2zvt-global-prev { left: 0; }
    .a2zvt-global-next { right: 0; }
    .a2zvt-outer { padding: 0 50px; }
}

@media (max-width: 900px) {
    .a2zvt__slide {
        flex: 0 0 calc(50% - 12px);
    }
}

@media (max-width: 600px) {
    .a2zvt__slide {
        flex: 0 0 100%;
    }
    .a2zvt-outer { padding: 0; }
    .a2zvt__track { gap: 0; }
    .a2zvt-global-prev, .a2zvt-global-next { display: none; }
}

@media (max-width: 600px) {
  .principle-row {
    grid-template-columns: 64px 1fr;
    gap: 0 16px;
    padding: 26px 16px;
  }

  .principle-row-num {
    font-size: clamp(2.2rem, 9vw, 3rem);
  }
}

/* ══════════════════════════════════════════
     QUALITY LAYERS
  ══════════════════════════════════════════ */
.layers {
  background: var(--bg);
  padding: clamp(80px, 11vw, 130px) clamp(24px, 5vw, 72px);
}

.layers-inner {
  max-width: 1320px;
  margin: 0 auto;
}

.layers-head {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: clamp(40px, 6vw, 100px);
  align-items: end;
  margin-bottom: clamp(64px, 9vw, 100px);
}

.layers-head-left .label {
  display: block;
  margin-bottom: 20px;
}

.layers-head-right {
  align-self: flex-start;
}

.layers-head-right p {
  font-size: clamp(0.95rem, 0.9vw, 1rem);
  line-height: 1.9;
  color: rgba(12, 12, 10, 0.76);
  font-weight: 400;
}

.layers-stack {
  display: flex;
  flex-direction: column;
}

.layer-connector {
  display: flex;
  padding-left: calc(clamp(52px, 6vw, 68px) / 2 - 0.5px);
  height: 28px;
}

.layer-connector-line {
  width: 1px;
  height: 100%;
  background: linear-gradient(to bottom,
      rgba(176, 141, 87, 0.55),
      rgba(176, 141, 87, 0.15));
}

.layer-panel {
  position: relative;
  display: grid;
  grid-template-columns: clamp(52px, 6vw, 68px) 1fr;
  gap: 0 clamp(28px, 4vw, 56px);
  align-items: center;
  padding: clamp(36px, 4.5vw, 56px) 0;
  border-bottom: 1px solid var(--ink-10);
  transition: background 0.55s var(--ease);
  overflow: hidden;
}

.layer-panel:first-child {
  border-top: 1px solid var(--ink-10);
}

.layer-panel::before {
  content: attr(data-watermark);
  position: absolute;
  right: 20px;
  top: 50%;
  transform: translateY(-50%);
  font-family: var(--serif);
  font-style: normal;
  font-weight: 600;
  font-size: clamp(1.9rem, 3vw, 3.6rem);
  line-height: 1;
  white-space: nowrap;
  color: rgba(172, 176, 179, 0.705);
  pointer-events: none;
  user-select: none;
  opacity: 0;
  z-index: 0;
  transition:
    opacity 0.65s var(--ease),
    -webkit-text-stroke-color 0.65s var(--ease);
}

.layer-panel:hover::before {
  opacity: 1;
  -webkit-text-stroke-color: rgba(105, 112, 122, 0.72);
}

.layer-panel::after {
  content: "";
  position: absolute;
  bottom: -1px;
  left: 0;
  height: 1px;
  width: 0;
  background: var(--gold);
  z-index: 2;
  transition: width 0.65s var(--ease);
}

.layer-panel:hover {
  background: rgba(176, 141, 87, 0.028);
}

.layer-panel:hover::after {
  width: 100%;
}

.layer-ring {
  width: clamp(52px, 6vw, 68px);
  height: clamp(52px, 6vw, 68px);
  border-radius: 50%;
  border: 1px solid rgba(176, 141, 87, 0.38);
  display: flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
  position: relative;
  z-index: 1;
  transition:
    background 0.55s var(--ease),
    border-color 0.55s var(--ease);
}

.layer-panel:hover .layer-ring {
  background: var(--gold);
  border-color: var(--gold);
}

.layer-ring-num {
  font-family: var(--serif);
  font-style: normal;
  font-weight: 300;
  font-size: clamp(1.1rem, 1.6vw, 1.45rem);
  color: var(--gold);
  line-height: 1;
  transition: color 0.55s var(--ease);
}

.layer-panel:hover .layer-ring-num {
  color: var(--bg-dark);
}

.layer-body {
  min-width: 0;
  position: relative;
  z-index: 1;
}

.layer-body-stage {
  font-family: var(--mono);
  font-size: clamp(0.56rem, 0.42vw, 0.61rem);
  letter-spacing: 0.2em;
  text-transform: uppercase;
  color: var(--gold);
  display: block;
  margin-bottom: 10px;
}

.layer-body h4 {
  font-family: var(--serif);
  font-weight: 300;
  font-size: clamp(1.35rem, 2.1vw, 2rem);
  color: var(--ink);
  line-height: 1.15;
  letter-spacing: -0.012em;
  margin-bottom: 14px;
}

.layer-body p {
  font-size: clamp(1.05rem, 1.22vw, 1.18rem);
  line-height: 1.82;
  color: rgba(12, 12, 10, 0.76);
  font-weight: 400;
  max-width: 40ch;
}

@media (max-width: 820px) {
  .layers-head {
    grid-template-columns: 1fr;
  }

  .layer-panel {
    grid-template-columns: clamp(48px, 8vw, 60px) 1fr;
    gap: 0 18px;
  }

  .layer-connector {
    padding-left: calc(clamp(48px, 8vw, 60px) / 2 - 0.5px);
  }
}

/* ══════════════════════════════════════════
     DEPARTMENTS
  ══════════════════════════════════════════ */
.opt-c {
  background: var(--bg-dark);
  padding: clamp(80px, 11vw, 120px) clamp(24px, 5vw, 72px);
}

.opt-c-inner {
  margin: 0 auto;
}

.sect-head {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: clamp(40px, 6vw, 80px);
  align-items: start;
  margin-bottom: clamp(48px, 6vw, 72px);
}

.sect-head-eyebrow {
  font-family: var(--mono);
  font-size: clamp(0.62rem, 0.55vw, 0.68rem);
  letter-spacing: 0.22em;
  text-transform: uppercase;
  color: var(--gold);
  display: block;
  margin-bottom: 20px;
}

.sect-head h2 {
  font-family: var(--serif);
  font-weight: 300;
  font-size: clamp(2.2rem, 3.5vw, 3.2rem);
  line-height: 1.05;
  letter-spacing: -0.02em;
  color: var(--white);
}

.sect-head h2 em {
  font-style: normal;
  color: var(--gold);
}

.sect-head-right {
  align-self: flex-start;
}

.sect-head-right p {
  font-size: clamp(1rem, 1vw, 1.05rem);
  line-height: 1.9;
  color: rgba(255, 255, 255, 0.75);
  font-weight: 400;
}

@media (max-width: 820px) {
  .sect-head {
    grid-template-columns: 1fr;
    gap: 24px;
  }

  .sect-head-right {
    padding-top: 0;
  }
}

.c-grid {
  display: flex;
  align-items: stretch;
  border: 1px solid rgba(255, 255, 255, 0.14);
  min-height: 760px;
  overflow: hidden;
  box-shadow: 0 0 0 1px rgba(176, 141, 87, 0.08) inset;
}

.c-col {
  position: relative;
  overflow: hidden;
  cursor: pointer;
  border-right: 1px solid rgba(255, 255, 255, 0.12);
  transition:
    flex 0.72s var(--ease),
    background 0.55s var(--ease);
  flex: 1;
  min-width: 0;
}

.c-col:last-child {
  border-right: 0;
}

.c-grid.has-hover .c-col:not(.expanded) {
  flex: 0.62;
}

.c-col.expanded {
  flex: 1.76;
}

.c-col::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 2px;
  background: linear-gradient(to right,
      transparent 0%,
      var(--gold) 50%,
      transparent 100%);
  opacity: 0.48;
  transition:
    opacity 0.5s var(--ease),
    background 0.5s var(--ease);
  z-index: 3;
}

.c-col:not(.expanded):hover::before {
  opacity: 0.72;
}

.c-col.expanded::before {
  opacity: 1;
  background: linear-gradient(to right,
      var(--gold) 0%,
      rgba(176, 141, 87, 0.4) 60%,
      transparent 100%);
}

.c-col::after {
  content: "";
  position: absolute;
  inset: 0;
  background: radial-gradient(ellipse at 50% 30%,
      rgba(176, 141, 87, 0.08) 0%,
      transparent 62%);
  opacity: 0.5;
  transition: opacity 0.6s var(--ease);
  pointer-events: none;
  z-index: 0;
}

.c-col:not(.expanded):hover::after {
  opacity: 0.85;
}

.c-col.expanded::after {
  opacity: 1;
  background: radial-gradient(ellipse at 0% 35%,
      rgba(176, 141, 87, 0.12) 0%,
      transparent 58%);
}

.c-rest {
  position: absolute;
  inset: 0;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  gap: 28px;
  opacity: 1;
  transition: opacity 0.28s 0.42s var(--ease);
  pointer-events: none;
  z-index: 2;
  overflow: hidden;
}

.c-col.expanded .c-rest {
  opacity: 0;
  transition: opacity 0.12s var(--ease);
}

.c-rest::after {
  content: "";
  position: absolute;
  bottom: 28px;
  left: 50%;
  transform: translateX(-50%);
  font-family: var(--mono);
  font-size: clamp(0.66rem, 0.58vw, 0.72rem);
  color: var(--gold);
  opacity: 0.35;
  letter-spacing: 0.1em;
  transition:
    opacity 0.35s ease,
    transform 0.35s ease;
}

.c-col:not(.expanded):hover .c-rest::after {
  opacity: 0.8;
  transform: translateX(-50%) translateY(5px);
}

.c-rest-num {
  position: absolute;
  top: -8px;
  left: 40px;
  font-family: var(--serif);
  font-style: normal;
  font-weight: 300;
  font-size: clamp(4rem, 7vw, 8rem);
  line-height: 1;
  color: transparent;
  -webkit-text-stroke: 1.5px rgba(176, 141, 87, 0.48);
  white-space: nowrap;
  pointer-events: none;
  user-select: none;
  transition: -webkit-text-stroke-color 0.45s ease;
}

.c-col:not(.expanded):hover .c-rest-num {
  -webkit-text-stroke-color: rgba(176, 141, 87, 0.72);
}

.c-rest-name {
  font-family: var(--serif);
  font-style: normal;
  font-weight: 300;
  font-size: clamp(1.85rem, 2.6vw, 2.6rem);
  color: rgba(255, 255, 255, 0.95);
  white-space: nowrap;
  writing-mode: vertical-rl;
  text-orientation: mixed;
  transform: rotate(180deg);
  line-height: 1;
  position: relative;
  z-index: 1;
  transition: color 0.35s ease;
}

.c-col:not(.expanded):hover .c-rest-name {
  color: var(--gold-lt);
}

.c-content {
  position: absolute;
  inset: 0;
  padding: clamp(44px, 5vw, 60px) clamp(36px, 4vw, 52px);
  opacity: 0;
  transition: opacity 0.08s var(--ease);
  pointer-events: none;
  overflow: hidden;
  z-index: 1;
}

.c-col.expanded .c-content {
  opacity: 1;
  transition: opacity 0.45s 0.32s var(--ease);
  pointer-events: auto;
  overflow-y: auto;
  scrollbar-width: thin;
  scrollbar-color: rgba(176, 141, 87, 0.3) transparent;
}

.c-col.expanded .c-content::-webkit-scrollbar {
  width: 4px;
}

.c-col.expanded .c-content::-webkit-scrollbar-track {
  background: transparent;
}

.c-col.expanded .c-content::-webkit-scrollbar-thumb {
  background: rgba(176, 141, 87, 0.3);
  border-radius: 2px;
}

.c-col.expanded .c-content::-webkit-scrollbar-thumb:hover {
  background: rgba(176, 141, 87, 0.55);
}

.c-wm {
  position: absolute;
  bottom: -60px;
  right: -16px;
  font-family: var(--serif);
  font-style: normal;
  font-weight: 300;
  font-size: clamp(14rem, 20vw, 28rem);
  line-height: 1;
  color: transparent;
  -webkit-text-stroke: 1.5px rgba(176, 141, 87, 0.18);
  pointer-events: none;
  user-select: none;
  z-index: 0;
}

.c-col.expanded .c-wm {
  -webkit-text-stroke-color: rgba(176, 141, 87, 0.28);
}

.c-idx {
  font-family: var(--mono);
  font-size: clamp(0.62rem, 0.55vw, 0.68rem);
  letter-spacing: 0.24em;
  text-transform: uppercase;
  color: var(--gold);
  opacity: 1;
  display: block;
  margin-bottom: 20px;
  position: relative;
  z-index: 1;
}

.c-content h3 {
  font-family: var(--serif);
  font-weight: 300;
  font-style: normal;
  font-size: clamp(2.2rem, 3.4vw, 3.2rem);
  color: var(--white);
  line-height: 1.08;
  letter-spacing: -0.02em;
  margin-bottom: 18px;
  position: relative;
  z-index: 1;
}

.c-desc {
  margin-top: 12px;
  font-size: clamp(1.05rem, 1.22vw, 1.18rem);
  line-height: 1.9;
  color: rgba(255, 255, 255, 0.82);
  font-weight: 400;
  margin-bottom: 32px;
  padding-bottom: 28px;
  border-bottom: 1px solid rgba(255, 255, 255, 0.14);
  max-width: 50ch;
  position: relative;
  z-index: 1;
}

.c-services {
  list-style: none;
  counter-reset: cs;
  position: relative;
  z-index: 1;
}

.c-services li {
  counter-increment: cs;
  display: grid;
  grid-template-columns: 30px 1fr;
  gap: 0 10px;
  align-items: baseline;
  padding: 12px 0;
  font-size: clamp(1rem, 1.12vw, 1.12rem);
  line-height: 1.65;
  color: rgba(255, 255, 255, 0.82);
  font-weight: 400;
  border-bottom: 1px solid rgba(255, 255, 255, 0.09);
  transition: color 0.28s ease;
}

.c-services li:hover {
  color: rgba(255, 255, 255, 0.95);
}

.c-services li:last-child {
  border-bottom: 0;
}

.c-services li::before {
  content: "0"counter(cs);
  font-family: var(--mono);
  font-size: clamp(1.1rem, 1.5vw, 1.3rem);
  letter-spacing: 0.08em;
  color: var(--gold);
  opacity: 0.85;
  display: block;
  padding-top: 2px;
}

@media (min-width: 641px) and (max-width: 900px) {
  .c-grid {
    flex-direction: column;
    min-height: unset;
    gap: 0;
  }

  .c-col,
  .c-col.expanded,
  .c-grid.has-hover .c-col:not(.expanded) {
    flex: none;
    min-height: 0;
    border-right: none;
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
  }

  .c-col:last-child {
    border-bottom: none;
  }

  .c-col::before {
    top: 0;
    left: 0;
    width: 2px;
    height: 100%;
    background: linear-gradient(to bottom,
        var(--gold) 0%,
        rgba(176, 141, 87, 0.15) 100%);
    opacity: 0;
    transition: opacity 0.35s ease;
  }

  .c-col.expanded::before {
    opacity: 1;
  }

  .c-col::after {
    opacity: 0;
  }

  .c-col.expanded::after {
    opacity: 0.5;
  }

  .c-rest {
    position: relative;
    inset: auto;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-between;
    gap: 16px;
    padding: 22px 28px 22px 32px;
    opacity: 1 !important;
    pointer-events: auto;
    z-index: 2;
    overflow: visible;
    cursor: pointer;
    transition: background 0.3s ease;
  }

  .c-col.expanded .c-rest {
    opacity: 1 !important;
    background: rgba(176, 141, 87, 0.045);
    transition: background 0.3s ease;
  }

  .c-rest-num {
    position: static;
    top: auto;
    left: auto;
    font-size: clamp(1.65rem, 3.2vw, 2.2rem);
    line-height: 1;
    flex-shrink: 0;
    min-width: auto;
    -webkit-text-stroke: 1.5px rgba(176, 141, 87, 0.55);
  }

  .c-col:not(.expanded):hover .c-rest-num {
    -webkit-text-stroke-color: rgba(176, 141, 87, 0.85);
  }

  .c-rest-name {
    writing-mode: horizontal-tb;
    text-orientation: mixed;
    transform: none;
    font-size: clamp(1.35rem, 2.6vw, 1.85rem);
    white-space: normal;
    line-height: 1.15;
    flex: 1;
    text-align: left;
    color: rgba(255, 255, 255, 0.92);
  }

  .c-col.expanded .c-rest-name {
    color: var(--gold-lt);
  }

  .c-col:not(.expanded):hover .c-rest-name {
    color: var(--gold-lt);
  }

  .c-rest::after {
    content: "+";
    position: static;
    bottom: auto;
    left: auto;
    transform: none !important;
    font-family: var(--mono);
    font-size: clamp(1.15rem, 1.65vw, 1.35rem);
    font-weight: 300;
    color: var(--gold);
    opacity: 0.5;
    flex-shrink: 0;
    letter-spacing: 0;
    transition: opacity 0.25s ease;
  }

  .c-col.expanded .c-rest::after {
    content: "\2212";
    opacity: 1;
    transform: none !important;
  }

  .c-col:not(.expanded):hover .c-rest::after {
    opacity: 0.9;
    transform: none !important;
  }

  .c-content {
    position: relative;
    inset: auto;
    max-height: 0;
    opacity: 0;
    overflow: hidden;
    padding: 0 28px 0 32px;
    pointer-events: none;
    transition:
      max-height 0.52s cubic-bezier(0.4, 0, 0.2, 1),
      opacity 0.28s ease,
      padding 0.28s ease;
  }

  .c-col.expanded .c-content {
    max-height: 1200px;
    opacity: 1;
    padding: 0 28px 32px 32px;
    pointer-events: auto;
    overflow: hidden;
    transition:
      max-height 0.52s cubic-bezier(0.4, 0, 0.2, 1),
      opacity 0.4s 0.08s ease,
      padding 0.28s ease;
  }

  .c-wm {
    display: none;
  }

  .c-idx {
    display: none;
  }

  .c-content h3 {
    display: none;
  }
}

/* ══════════════════════════════════════════
     GUARANTEES
  ══════════════════════════════════════════ */
.guarantees {
  background: var(--bg);
  padding: clamp(80px, 11vw, 120px) clamp(24px, 5vw, 72px);
  position: relative;
}

.guar-inner {
  max-width: 1320px;
  margin: 0 auto;
}

.guar-head {
  max-width: 680px;
  margin-bottom: clamp(28px, 3.5vw, 44px);
}

.guar-head .label {
  display: block;
  margin-bottom: clamp(14px, 1.8vw, 20px);
}

.guar-head h2 {
  color: var(--ink);
}

.guar-head h2 em {
  color: var(--gold);
}

.guar-stack {
  display: flex;
  flex-direction: column;
  gap: clamp(10px, 1.4vw, 16px);
}

.guar-panel {
  flex: none;
  width: 84%;
  position: relative;
  overflow: hidden;
  background: var(--white);
  padding: clamp(32px, 4vw, 48px) clamp(36px, 4.5vw, 56px);
  display: grid;
  grid-template-columns: clamp(64px, 7vw, 88px) 1fr;
  gap: 0 clamp(28px, 4vw, 52px);
  align-items: center;
  box-shadow:
    0 4px 22px rgba(2, 8, 20, 0.1),
    0 1px 5px rgba(2, 8, 20, 0.06);
  transition: box-shadow 0.7s var(--ease);
  cursor: default;
}

.guar-panel:nth-child(1) {
  margin-left: 0;
}

.guar-panel:nth-child(2) {
  margin-left: 8%;
}

.guar-panel:nth-child(3) {
  margin-left: 16%;
}

.guar-panel:hover {
  box-shadow:
    0 6px 28px rgba(2, 8, 20, 0.12),
    0 2px 6px rgba(2, 8, 20, 0.06);
}

.guar-panel:hover .guar-panel-arrow svg,
.guar-panel:hover .guar-panel-arrow svg polyline {
  stroke: #0f2a52;
}

.guar-panel-arrow {
  display: flex;
  align-items: center;
  justify-content: center;
  position: relative;
  z-index: 2;
}

.guar-panel-arrow svg {
  width: clamp(36px, 4.5vw, 52px);
  height: auto;
  overflow: visible;
  fill: none;
  stroke: var(--gold);
  stroke-width: 2.2;
  stroke-linecap: round;
  stroke-linejoin: round;
  transition: stroke 0.5s var(--ease);
}

/* continuous downward cascade through the three chevrons */
.guar-panel-arrow svg polyline {
  animation: guar-chevron-flow 1.9s ease-in-out infinite;
  transition: stroke 0.5s var(--ease);
}

.guar-panel-arrow svg polyline:nth-child(1) {
  animation-delay: 0s;
}

.guar-panel-arrow svg polyline:nth-child(2) {
  animation-delay: 0.24s;
}

.guar-panel-arrow svg polyline:nth-child(3) {
  animation-delay: 0.48s;
}

@keyframes guar-chevron-flow {

  0%,
  100% {
    opacity: 0.18;
  }

  45% {
    opacity: 1;
  }
}

.guar-panel-body {
  position: relative;
  z-index: 2;
}

.guar-panel-body h3 {
  font-family: var(--serif);
  font-weight: 300;
  font-size: clamp(1.15rem, 1.7vw, 1.65rem);
  color: var(--ink);
  line-height: 1.22;
  letter-spacing: -0.015em;
  margin-bottom: clamp(10px, 1.2vw, 14px);
}

.guar-panel-body p {
  font-size: clamp(0.95rem, 1vw, 1.05rem);
  line-height: 1.85;
  color: var(--ink-60);
  font-weight: 400;
  max-width: 52ch;
}

@media (prefers-reduced-motion: reduce) {
  .guar-panel-arrow svg polyline {
    animation: none;
    opacity: 1;
  }

  .guar-panel::after {
    display: none;
  }
}

@media (max-width: 820px) {

  .guar-panel:nth-child(2),
  .guar-panel:nth-child(3) {
    margin-left: 0;
  }

  .guar-panel {
    width: 100%;
  }
}

@media (max-width: 600px) {
  .guar-panel {
    grid-template-columns: clamp(64px, 14vw, 80px) 1fr;
    gap: 0 16px;
    padding: 24px 22px;
  }

}

/* ══════════════════════════════════════════
     CTA / CONTACT
  ══════════════════════════════════════════ */
/* ══════════════════════════════════════════
     PROFESSIONAL STANDING STRIP
  ══════════════════════════════════════════ */
.prof-standing-strip {
  background: var(--bg);
  padding: clamp(22px, 3vw, 34px) 0;
  min-height: clamp(100px, 10vw, 146px); /* roughly match metrics strip height */
  display: flex;
  justify-content: center;
  align-items: center;
  border-bottom: 1px solid rgba(0,0,0,0.05);
}

.prof-standing-inner {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  align-items: center;
  justify-content: center;
  gap: clamp(16px, 3vw, 40px);
  max-width: 1320px;
  width: 100%;
  padding: 0 24px;
  text-align: center;
}

.prof-standing-strip span {
  font-family: "Plus Jakarta Sans", system-ui, sans-serif;
  font-size: clamp(0.95rem, 1.8vw, 1.25rem);
  font-weight: 700;
  letter-spacing: 0.12em;
  line-height: 1.4;
  color: #3b4252;
  text-transform: uppercase;
}

.prof-standing-strip .dot {
  color: var(--gold);
  font-size: 1.2rem;
  line-height: 0.8;
}

.contact {
  background:
    linear-gradient(155deg, rgba(2, 8, 17, 0.9) 0%, rgba(3, 12, 26, 0.85) 50%, rgba(2, 9, 19, 0.92) 100%),
    url("https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=1600&q=80");
  background-size: cover;
  background-position: center;
  background-attachment: fixed;
  background-color: #02060f;
  padding: clamp(80px, 11vw, 120px) clamp(24px, 5vw, 72px);
  position: relative;
  overflow: hidden;
}

.contact::before {
  content: "";
  position: absolute;
  inset: 0;
  background: radial-gradient(ellipse at 85% 12%,
      rgba(37, 99, 235, 0.16) 0%,
      rgba(13, 30, 52, 0.05) 35%,
      transparent 58%);
  pointer-events: none;
  z-index: 0;
}

.cta-wm {
  position: absolute;
  bottom: clamp(60px, 10vw, 120px);
  left: 50%;
  transform: translateX(-50%);
  font-family: var(--serif);
  font-style: normal;
  font-weight: 300;
  font-size: clamp(10rem, 22vw, 22rem);
  line-height: 1;
  white-space: nowrap;
  color: transparent;
  -webkit-text-stroke: 1px rgba(176, 141, 87, 0.07);
  pointer-events: none;
  user-select: none;
  z-index: 0;
}

.contact-inner {
  margin: 0 auto;
  position: relative;
  z-index: 1;
}

.cta-body {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: clamp(60px, 8vw, 120px);
  align-items: start;
}

.cta-label {
  font-family: var(--mono);
  font-size: clamp(0.62rem, 0.55vw, 0.68rem);
  letter-spacing: 0.24em;
  text-transform: uppercase;
  color: var(--gold);
  display: block;
  margin-bottom: 28px;
}

.contact-heading {
  font-family: var(--serif);
  font-weight: 300;
  font-size: clamp(2.4rem, 4.5vw, 4.2rem);
  line-height: 0.97;
  letter-spacing: -0.025em;
  color: var(--white);
  margin-bottom: 0;
}

.contact-heading em {
  font-style: normal;
  color: var(--gold);
}

.cta-right {
  align-self: flex-start;
}

.cta-sub {
  font-size: clamp(1.05rem, 1.25vw, 1.2rem);
  line-height: 1.95;
  color: rgba(255, 255, 255, 0.68);
  font-weight: 400;
  max-width: 52ch;
  margin: 0 0 clamp(32px, 4vw, 46px);
}

.contact-ctas {
  display: flex;
  align-items: center;
  justify-content: flex-start;
  gap: 14px;
  flex-wrap: wrap;
}

.cta-trust {
  display: flex;
  align-items: center;
  justify-content: flex-start;
  gap: 24px;
  margin-top: clamp(24px, 3.5vw, 36px);
  flex-wrap: wrap;
}

.cta-trust-item {
  display: flex;
  align-items: center;
  gap: 7px;
  font-family: var(--mono);
  font-size: clamp(0.56rem, 0.45vw, 0.6rem);
  letter-spacing: 0.14em;
  text-transform: uppercase;
  color: rgba(255, 255, 255, 0.52);
}

.cta-trust-item svg {
  width: 12px;
  height: 12px;
  stroke: var(--gold);
  fill: none;
  stroke-width: 1.5;
  stroke-linecap: round;
  stroke-linejoin: round;
  opacity: 0.85;
  flex-shrink: 0;
}

.cta-divider {
  display: flex;
  align-items: center;
  gap: 16px;
  margin-bottom: 0;
  opacity: 0.22;
}

.cta-divider::before,
.cta-divider::after {
  content: "";
  flex: 1;
  height: 1px;
  background: var(--gold);
}

.cta-divider-dot {
  width: 4px;
  height: 4px;
  border-radius: 50%;
  background: var(--gold);
  flex-shrink: 0;
}

.contact-cards {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 1px;
  background: rgba(255, 255, 255, 0.06);
}

.cnt-card {
  background: var(--bg-dark);
  padding: clamp(28px, 3.5vw, 44px) clamp(24px, 3vw, 40px) clamp(32px, 4vw, 52px);
  position: relative;
  overflow: hidden;
  cursor: default;
  transition: background 0.42s var(--ease);
}

.cnt-card::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  height: 1px;
  background: var(--gold);
  transform: scaleX(0);
  transform-origin: left center;
  transition: transform 0.62s cubic-bezier(0.22, 1, 0.36, 1);
  z-index: 1;
}

.cnt-card:hover::before {
  transform: scaleX(1);
}

.cnt-card:hover {
  background: rgba(176, 141, 87, 0.03);
}

.cnt-head {
  display: flex;
  align-items: center;
  gap: 12px;
  margin-bottom: 20px;
}

.cnt-head-icon {
  display: flex;
  align-items: center;
  flex-shrink: 0;
}

.cnt-head-icon svg {
  width: 15px;
  height: 15px;
  stroke: var(--gold);
  fill: none;
  stroke-width: 1.5;
  stroke-linecap: round;
  stroke-linejoin: round;
  transition: stroke 0.38s var(--ease);
}

.cnt-card:hover .cnt-head-icon svg {
  stroke: var(--gold-lt);
}

.cnt-type {
  font-family: var(--mono);
  font-size: clamp(0.6rem, 0.5vw, 0.65rem);
  letter-spacing: 0.18em;
  color: rgba(255, 255, 255, 0.45);
  text-transform: uppercase;
  transition: color 0.38s var(--ease);
}

.cnt-card:hover .cnt-type {
  color: rgba(255, 255, 255, 0.72);
}

.cnt-value {
  display: block;
  font-family: var(--serif);
  font-weight: 300;
  color: rgba(255, 255, 255, 0.88);
  line-height: 1.18;
  transition: color 0.38s var(--ease);
  padding-right: 40px;
}

.cnt-value.is-phone {
  font-style: normal;
  font-size: clamp(1.6rem, 2.6vw, 2.6rem);
  letter-spacing: -0.025em;
}

.cnt-value.is-email {
  font-style: normal;
  font-size: clamp(0.95rem, 1.4vw, 1.4rem);
  letter-spacing: -0.01em;
  word-break: break-all;
}

.cnt-value.is-address {
  font-size: clamp(0.95rem, 1.3vw, 1.25rem);
  line-height: 1.65;
}

.cnt-card:hover .cnt-value {
  color: var(--white);
}

a.cnt-value:hover {
  color: var(--gold-lt);
}

.cnt-arrow {
  position: absolute;
  bottom: clamp(22px, 3vw, 32px);
  right: clamp(22px, 2.5vw, 32px);
  width: 32px;
  height: 32px;
  border-radius: 50%;
  border: 1px solid rgba(176, 141, 87, 0.3);
  display: flex;
  align-items: center;
  justify-content: center;
  transition:
    border-color 0.38s var(--ease),
    background 0.38s var(--ease);
}

.cnt-arrow svg {
  width: 10px;
  height: 10px;
  stroke: rgba(176, 141, 87, 0.65);
  fill: none;
  stroke-width: 1.5;
  stroke-linecap: round;
  stroke-linejoin: round;
  transition:
    stroke 0.35s,
    transform 0.35s var(--ease);
}

.cnt-card:hover .cnt-arrow {
  border-color: var(--gold);
  background: var(--gold-10);
}

.cnt-card:hover .cnt-arrow svg {
  stroke: var(--gold);
  transform: translate(2px, -2px);
}

@media (max-width: 820px) {
  .contact-cards {
    grid-template-columns: 1fr;
  }

  .cnt-value.is-phone {
    font-size: clamp(1.75rem, 7vw, 2.4rem);
  }
}

/* ══════════════════════════════════════════
     GOOGLE REVIEWS
  ══════════════════════════════════════════ */
.reviews {
  background: var(--bg);
  padding: clamp(80px, 11vw, 130px) clamp(24px, 5vw, 72px);
  position: relative;
  overflow: hidden;
}

.reviews::before {
  content: "";
  position: absolute;
  top: 0;
  left: 50%;
  transform: translateX(-50%);
  width: 1px;
  height: clamp(48px, 8vw, 72px);
  background: linear-gradient(to bottom, var(--gold), transparent);
  opacity: 0.4;
}

.reviews-inner {
  max-width: 1320px;
  margin: 0 auto;
}

.reviews-head {
  text-align: left;
  margin-bottom: clamp(20px, 2.5vw, 28px);
  display: grid;
  grid-template-columns: 1fr auto;
  gap: clamp(24px, 3vw, 40px);
  align-items: center;
}

.reviews-badge {
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: flex-end;
  flex-wrap: wrap;
  text-align: center;
  gap: 8px 18px;
  flex-shrink: 0;
}

.reviews-badge-label {
  font-family: var(--serif);
  font-weight: 700;
  font-size: clamp(0.78rem, 0.8vw, 0.9rem);
  letter-spacing: 0.28em;
  text-transform: uppercase;
  color: var(--ink);
}

.reviews-badge-stars {
  display: flex;
  gap: 3px;
  color: #e8a400;
  font-size: clamp(1.1rem, 1.3vw, 1.4rem);
  letter-spacing: 0.04em;
  line-height: 1;
}

.reviews-badge-count {
  font-family: var(--mono);
  font-size: clamp(0.6rem, 0.58vw, 0.66rem);
  letter-spacing: 0.14em;
  text-transform: uppercase;
  color: var(--ink-60);
  line-height: 1;
}

.reviews-badge-google {
  display: flex;
  align-items: center;
  gap: 6px;
}

.reviews-badge-google svg,
.reviews-badge-google img {
  width: 16px;
  height: 16px;
  flex-shrink: 0;
  display: block;
}

.reviews-badge-google span {
  font-family: var(--sans);
  font-size: clamp(0.72rem, 0.7vw, 0.8rem);
  color: var(--ink-60);
  font-weight: 400;
  letter-spacing: 0.04em;
}

.reviews-eyebrow {
  font-family: var(--mono);
  font-size: clamp(0.62rem, 0.55vw, 0.68rem);
  letter-spacing: 0.22em;
  text-transform: uppercase;
  color: var(--gold);
  display: block;
  margin-bottom: 18px;
}

.reviews-head h2 {
  font-family: var(--serif);
  font-weight: 300;
  font-size: clamp(2.2rem, 3.5vw, 3.2rem);
  line-height: 1.08;
  letter-spacing: -0.02em;
  color: var(--ink);
  margin-bottom: 18px;
}

.reviews-head h2 em {
  font-style: normal;
  color: var(--gold);
}

.reviews-head-right {
  display: flex;
  flex-direction: column;
  justify-content: flex-end;
  gap: 20px;
  align-self: flex-start;
}

.reviews-head p {
  font-size: clamp(0.95rem, 0.9vw, 1rem);
  line-height: 1.88;
  color: var(--ink-60);
  font-weight: 300;
  max-width: 52ch;
  margin: 0;
}

.reviews-stars {
  display: flex;
  align-items: center;
  justify-content: flex-start;
  gap: 10px;
  margin-top: 0;
}

.reviews-stars-icons {
  color: #e8a400;
  font-size: clamp(1rem, 1vw, 1.05rem);
  letter-spacing: 0.08em;
}

.reviews-stars-score {
  font-family: var(--serif);
  font-weight: 300;
  font-size: clamp(1.25rem, 1.8vw, 1.5rem);
  line-height: 1;
  color: var(--ink);
}

.reviews-stars-count {
  font-family: var(--mono);
  font-size: clamp(0.6rem, 0.5vw, 0.65rem);
  letter-spacing: 0.1em;
  color: var(--ink-60);
}

.reviews-widget {
  width: 100%;
}

.reviews-footer {
  display: flex;
  align-items: center;
  justify-content: flex-start;
  gap: 10px;
  margin-top: clamp(36px, 5vw, 56px);
  padding-top: clamp(24px, 3vw, 36px);
  border-top: 1px solid var(--ink-10);
}

.reviews-footer-logo {
  display: flex;
  align-items: center;
  gap: 6px;
  opacity: 0.5;
}

.reviews-footer-logo svg,
.reviews-footer-logo img {
  width: 16px;
  height: 16px;
  flex-shrink: 0;
  display: block;
}

.reviews-footer span {
  font-family: var(--mono);
  font-size: clamp(0.8rem, 0.9vw, 1rem);
  letter-spacing: 0.16em;
  text-transform: uppercase;
  color: var(--ink-60);
}

@media (max-width: 820px) {
  .reviews-head {
    grid-template-columns: 1fr;
    gap: 10px;
    align-items: start;
  }

  .reviews-badge {
    align-self: stretch;
    justify-content: center;
    flex-direction: row;
    flex-wrap: wrap;
    gap: 8px 16px;
  }
}

@media (max-width: 640px) {
  .reviews {
    padding-inline: 18px;
  }

  .reviews-head p {
    max-width: 100%;
  }
}

@media (max-width: 380px) {
  .reviews {
    padding-inline: 14px;
  }
}

/* ══════════════════════════════════════════
     REVEAL ANIMATIONS
  ══════════════════════════════════════════ */
@media (min-width: 1440px) {

  .container,
  .story-inner,
  .principles-inner,
  .layers-inner,
  .opt-c-inner,
  .guar-inner,
  .contact-inner {
    max-width: 1320px;
  }

  .hero-inner {
    max-width: 1680px;
    grid-template-columns: minmax(0, 1fr) minmax(400px, 500px);
    gap: clamp(100px, 9vw, 160px);
  }

  .hero-sub {
    max-width: 54ch;
  }

  .hero-meta {
    gap: 52px;
  }

  .hero-portrait-col::before {
    width: 44px;
    height: 44px;
    top: -12px;
    right: -12px;
  }

  .hero-portrait-frame::after {
    width: 44px;
    height: 44px;
    bottom: -12px;
    left: -12px;
  }
}

@media (min-width: 1920px) {
  .hero-inner {
    max-width: 1800px;
    grid-template-columns: minmax(0, 1fr) minmax(440px, 540px);
    gap: clamp(120px, 9vw, 200px);
  }

  .hero-heading {
    font-size: clamp(6rem, 6.5vw, 8.5rem);
  }
}

@media (max-width: 1180px) {
  .hero-inner {
    grid-template-columns: minmax(0, 1fr) minmax(300px, 360px);
    gap: clamp(44px, 6vw, 76px);
  }

  .hero-meta {
    gap: 28px;
  }

  .principle-row {
    padding-inline: 16px;
  }

  .contact-cards {
    grid-template-columns: 1fr;
  }

  .cnt-card {
    min-height: 190px;
  }
}

@media (max-width: 1440px) {
    .a2zvt-global-prev { left: 0; }
    .a2zvt-global-next { right: 0; }
    .a2zvt-outer { padding: 0 50px; }
}

@media (max-width: 900px) {
    .a2zvt__slide {
        flex: 0 0 calc(50% - 12px);
    }
}

@media (max-width: 600px) {
    .a2zvt__slide {
        flex: 0 0 100%;
    }
    .a2zvt-outer { padding: 0; }
    .a2zvt__track { gap: 0; }
    .a2zvt-global-prev, .a2zvt-global-next { display: none; }
}

@media (min-width: 641px) and (max-width: 900px) {
  .hero-portrait-col {
    background:
      linear-gradient(to right,
        rgba(176, 141, 87, 0.09) 0%,
        rgba(176, 141, 87, 0.02) 45%,
        transparent 72%),
      rgba(4, 19, 34, 0.52);
    border: 1px solid rgba(176, 141, 87, 0.24);
    border-top-color: rgba(176, 141, 87, 0.42);
    box-shadow:
      0 22px 60px rgba(0, 0, 0, 0.38),
      0 6px 18px rgba(0, 0, 0, 0.22),
      inset 0 0 0 1px rgba(255, 255, 255, 0.03);
  }

  .hero-portrait-col::before {
    width: 88px;
    background: linear-gradient(to right,
        var(--gold) 0%,
        rgba(176, 141, 87, 0.45) 100%);
    opacity: 0.9;
  }

  .hero-portrait-frame {
    border-right-color: rgba(176, 141, 87, 0.3);
  }
}

@media (max-width: 820px) {
  .contact {
    padding-inline: 18px;
  }

  .cta-body {
    grid-template-columns: 1fr;
    gap: clamp(28px, 6vw, 40px);
    padding-bottom: clamp(44px, 8vw, 64px);
  }

  .cta-right {
    padding-top: 0;
  }

  .contact-heading {
    font-size: clamp(2.4rem, 12vw, 3.6rem);
  }

  .cta-sub {
    max-width: 100%;
  }

  .contact-ctas {
    flex-direction: column;
    align-items: stretch;
  }

  .contact-ctas .btn {
    justify-content: center;
  }

  .cta-trust {
    gap: 16px;
  }

  .contact-cards {
    gap: 1px;
    background: rgba(255, 255, 255, 0.06);
  }

  .cnt-card {
    min-height: 0;
    padding: 24px 20px 28px;
  }

  .cnt-value {
    padding-right: 0;
  }

  .cnt-value.is-email {
    font-size: clamp(1.05rem, 5.5vw, 1.4rem);
    word-break: break-word;
    overflow-wrap: anywhere;
  }

  .cnt-arrow {
    display: none;
  }
}

@media (max-width: 640px) {
  html {
    font-size: clamp(14px, 0.24vw + 13.25px, 15px);
  }

  body {
    min-width: 0;
  }

  .container,
  .section-pad,
  .story,
  .principles,
  .layers,
  .opt-c,
  .contact {
    padding-inline: 18px;
  }

  .story,
  .principles,
  .layers,
  .opt-c,
  .guarantees,
  .contact {
    padding-block: 68px;
  }

  .display-lg,
  .sect-head h2 {
    font-size: clamp(1.9rem, 7.5vw, 2.8rem);
    line-height: 1.08;
    max-width: 100%;
  }

  .display-md {
    font-size: clamp(1.8rem, 9vw, 2.55rem);
  }

  .label {
    font-size: clamp(0.64rem, 0.6vw, 0.72rem);
    letter-spacing: 0.22em;
  }

  .btn {
    width: 100%;
    justify-content: center;
    padding: 15px 18px;
    text-align: center;
    white-space: normal;
    font-size: clamp(0.8rem, 0.9vw, 1rem);
    letter-spacing: 0.08em;
  }

  .hero {
    min-height: auto;
    align-items: stretch;
  }

  .hero-deco-left,
  .hero-deco-right {
    opacity: 0.28;
  }

  .hero-inner {
    display: flex;
    flex-direction: column;
    gap: 2px;
    padding: 42px 18px 64px;
  }

  .hero-left {
    display: block;
    min-width: 0;
    width: 100%;
    max-width: calc(100vw - 36px);
  }

  .hero-portrait-col {
    display: flex;
    flex-direction: row;
    align-items: stretch;
    gap: 0;
    width: 100%;
    max-width: none;
    margin: 0;
    align-self: stretch;
    padding: 0;
    border: 1px solid rgba(176, 141, 87, 0.26);
    background:
      linear-gradient(145deg,
        rgba(255, 255, 255, 0.055) 0%,
        rgba(255, 255, 255, 0.012) 100%),
      rgba(4, 19, 34, 0.85);
    box-shadow: 0 8px 32px rgba(0, 0, 0, 0.32);
    position: relative;
  }

  .hero-portrait-col::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 1.5px;
    background: linear-gradient(90deg,
        var(--gold) 0%,
        rgba(176, 141, 87, 0.35) 55%,
        transparent 100%);
    opacity: 1;
    z-index: 2;
  }

  .hero-portrait-col::after {
    content: "";
    position: absolute;
    bottom: 14px;
    right: 16px;
    width: 5px;
    height: 5px;
    border-radius: 50%;
    background: var(--gold);
    opacity: 0.45;
    z-index: 2;
  }

  .hero-portrait-frame {
    width: clamp(100px, 32vw, 140px);
    height: auto;
    aspect-ratio: 3/4;
    flex-shrink: 0;
    border-radius: 0;
    background: rgba(255, 255, 255, 0.04);
    border: none;
    border-right: 1px solid rgba(176, 141, 87, 0.3);
    overflow: hidden;
  }

  .hero-portrait-frame img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: top center;
    filter: grayscale(8%) contrast(1.04);
  }

  .hero-portrait-caption {
    flex: 1;
    width: auto;
    margin-top: 0;
    text-align: left;
    display: flex;
    flex-direction: column;
    justify-content: center;
    padding: 18px 16px 18px 18px;
  }

  .hero-portrait-caption strong {
    font-size: clamp(0.95rem, 0.9vw, 1rem);
    margin-bottom: 6px;
    letter-spacing: -0.01em;
  }

  .hero-portrait-caption span {
    line-height: 1.65;
    white-space: normal;
    font-size: clamp(0.56rem, 0.45vw, 0.6rem);
    letter-spacing: 0.11em;
  }

  .hero-heading {
    font-size: clamp(2.6rem, 9vw, 3.2rem);
    line-height: 1.02;
    max-width: 100%;
    margin-bottom: 26px;
    text-align: center;
  }

  .hero-sub {
    font-size: clamp(0.95rem, 0.9vw, 1rem);
    line-height: 1.75;
    margin-bottom: 30px;
    max-width: min(100%) !important;
    width: auto;
    overflow-wrap: break-word;
    text-align: center;
  }

  .hero-ctas {
    align-items: center;
  }

  .hero-meta {
    width: 100%;
    grid-template-columns: 1fr;
    gap: 0;
    margin-bottom: 32px;
    border-block: 1px solid rgba(255, 255, 255, 0.1);
  }

  .hero-meta-item {
    display: grid;
    grid-template-columns: 88px 1fr;
    align-items: baseline;
    gap: 16px;
    padding: 15px 0;
    border-bottom: 1px solid rgba(255, 255, 255, 0.08);
  }

  .hero-meta-item:last-child {
    border-bottom: 0;
  }

  .hero-meta-val {
    font-size: clamp(1.25rem, 1.9vw, 1.55rem);
    margin-bottom: 0;
  }

  .hero-meta-lbl {
    line-height: 1.5;
  }

  .hero-ctas,
  .contact-ctas {
    width: 100%;
    flex-direction: column;
  }

  .story-inner {
    gap: 34px;
    min-width: 0;
  }

  .story-chain,
  .sp-body,
  .principles-inner,
  .layers-inner,
  .opt-c-inner,
  .contact-inner {
    min-width: 0;
    max-width: 100%;
  }

  .story-sidebar {
    padding-bottom: 26px;
    border-bottom: 1px solid var(--ink-10);
  }

  .story-sidebar-head {
    font-size: clamp(2.25rem, 11vw, 3rem);
  }

  .story-progress {
    flex-direction: row;
    gap: 10px;
    overflow-x: auto;
    padding: 2px 2px 8px;
    scrollbar-width: none;
  }

  .story-progress::-webkit-scrollbar {
    display: none;
  }

  .story-progress::before,
  .sp-prog-fill {
    display: none;
  }

  .sp-prog-item {
    flex: 0 0 auto;
    padding: 8px 10px;
    border: 1px solid rgba(176, 141, 87, 0.16);
  }

  .sp-prog-label {
    font-size: clamp(0.5rem, 0.4vw, 0.54rem);
    letter-spacing: 0.1em;
  }

  .sp-item {
    grid-template-columns: 16px minmax(0, 1fr);
    gap: 0 16px;
  }

  .sp-body {
    padding-top: 24px;
    padding-bottom: 34px;
  }

  .sp-body p {
    line-height: 1.78;
    max-width: min(100%);
  }

  .sp-item--quote .sp-body {
    padding: 22px 18px 22px 20px;
    background: rgba(176, 141, 87, 0.035);
    margin-top: 4px;
  }

  .sp-body blockquote {
    font-size: clamp(1.35rem, 6.5vw, 1.75rem);
    line-height: 1.32;
    padding-top: 0;
    max-width: 100%;
    overflow-wrap: break-word;
  }

  .sp-item--quote .sp-body blockquote::before {
    font-size: clamp(1.9rem, 9vw, 2.5rem);
    vertical-align: -0.1em;
    margin-right: 3px;
    opacity: 0.75;
  }

  .sp-item--quote .sp-body blockquote::after {
    font-size: clamp(1.9rem, 9vw, 2.5rem);
    vertical-align: -0.1em;
    margin-left: 3px;
    opacity: 0.75;
  }

  .sp-body cite {
    max-width: 100%;
    line-height: 1.7;
    overflow-wrap: break-word;
    border-top: 1px solid rgba(176, 141, 87, 0.22);
    padding-top: 12px;
    margin-top: 6px;
  }

  .layers-head-right p,
  .sect-head-right p {
    font-size: clamp(0.95rem, 0.9vw, 1rem);
    line-height: 1.75;
    max-width: min(100%);
  }

  .principle-row-body p {
    max-width: 100%;
    line-height: 1.72;
  }

  .layers-head {
    margin-bottom: 42px;
  }

  .layer-panel {
    grid-template-columns: 46px minmax(0, 1fr);
    gap: 0 15px;
    padding: 28px 0;
    align-items: start;
  }

  .layer-connector {
    height: 20px;
    padding-left: 22px;
  }

  .layer-ring {
    width: 46px;
    height: 46px;
  }

  .layer-panel::before {
    display: none;
  }

  .layer-body h4 {
    font-size: clamp(1.25rem, 1.9vw, 1.55rem);
  }

  .layer-body p {
    line-height: 1.7;
    max-width: min(100%);
  }

  .opt-c {
    overflow: hidden;
  }

  .c-grid {
    display: flex;
    flex-direction: column;
    min-height: unset;
    gap: 0;
    border: 1px solid rgba(255, 255, 255, 0.14);
    overflow: hidden;
  }

  .c-col,
  .c-col.expanded,
  .c-grid.has-hover .c-col:not(.expanded) {
    flex: none;
    min-height: 0;
    border: none;
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    cursor: pointer;
  }

  .c-col:last-child {
    border-bottom: none;
  }

  .c-col::before {
    top: 0;
    left: 0;
    width: 2px;
    height: 100%;
    background: linear-gradient(to bottom,
        var(--gold) 0%,
        rgba(176, 141, 87, 0.15) 100%);
    opacity: 0;
    transition: opacity 0.35s ease;
  }

  .c-col.expanded::before {
    opacity: 1;
  }

  .c-col::after {
    opacity: 0;
  }

  .c-col.expanded::after {
    opacity: 0.45;
  }

  .c-rest {
    position: relative;
    inset: auto;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-between;
    gap: 14px;
    padding: 18px 20px 18px 24px;
    opacity: 1 !important;
    pointer-events: auto;
    z-index: 2;
    overflow: visible;
    cursor: pointer;
    transition: background 0.3s ease;
  }

  .c-col.expanded .c-rest {
    opacity: 1 !important;
    background: rgba(176, 141, 87, 0.045);
  }

  .c-rest-num {
    position: static;
    top: auto;
    left: auto;
    font-size: clamp(1.5rem, 5.5vw, 1.9rem);
    line-height: 1;
    flex-shrink: 0;
    min-width: auto;
    -webkit-text-stroke: 1.5px rgba(176, 141, 87, 0.55);
  }

  .c-col.expanded .c-rest-num {
    -webkit-text-stroke-color: rgba(176, 141, 87, 0.85);
  }

  .c-rest-name {
    writing-mode: horizontal-tb;
    transform: none;
    white-space: normal;
    font-size: clamp(1.25rem, 5vw, 1.6rem);
    line-height: 1.15;
    flex: 1;
    text-align: left;
    color: rgba(255, 255, 255, 0.92);
  }

  .c-col.expanded .c-rest-name {
    color: var(--gold-lt);
  }

  .c-rest::after {
    content: "+";
    position: static;
    display: block;
    bottom: auto;
    left: auto;
    transform: none !important;
    font-family: var(--mono);
    font-size: clamp(1.1rem, 1.4vw, 1.25rem);
    font-weight: 300;
    color: var(--gold);
    opacity: 0.5;
    flex-shrink: 0;
    letter-spacing: 0;
    transition: opacity 0.25s ease;
  }

  .c-col.expanded .c-rest::after {
    content: "\2212";
    opacity: 1;
    transform: none !important;
  }

  .c-content {
    position: relative;
    inset: auto;
    max-height: 0;
    opacity: 0;
    overflow: hidden;
    padding: 0 20px 0 24px;
    pointer-events: none;
    transition:
      max-height 0.52s cubic-bezier(0.4, 0, 0.2, 1),
      opacity 0.28s ease,
      padding 0.28s ease;
  }

  .c-col.expanded .c-content {
    max-height: 1200px;
    opacity: 1;
    padding: 0 20px 28px 24px;
    pointer-events: auto;
    overflow: hidden;
    transition:
      max-height 0.52s cubic-bezier(0.4, 0, 0.2, 1),
      opacity 0.4s 0.08s ease,
      padding 0.28s ease;
  }

  .c-content h3 {
    display: none;
  }

  .c-wm {
    display: none;
  }

  .c-idx {
    display: none;
  }

  .c-desc {
    margin-bottom: 18px;
    padding-bottom: 18px;
    line-height: 1.68;
    max-width: 100%;
  }

  .c-services li {
    grid-template-columns: 26px 1fr;
    padding: 9px 0;
    line-height: 1.48;
  }

  .guar-head {
    margin-bottom: 32px;
  }

  .guar-panel {
    width: 100%;
    margin-left: 0 !important;
    grid-template-columns: clamp(56px, 12vw, 72px) 1fr;
    gap: 0 14px;
    padding: 22px 18px;
  }


  .contact {
    padding-inline: 18px;
  }

  .cta-body {
    grid-template-columns: 1fr;
    gap: clamp(28px, 6vw, 40px);
    padding-bottom: clamp(44px, 8vw, 64px);
  }

  .cta-right {
    padding-top: 0;
  }

  .contact-heading {
    font-size: clamp(2.4rem, 12vw, 3.6rem);
  }

  .cta-sub {
    max-width: 100%;
  }

  .contact-ctas {
    flex-direction: column;
    align-items: stretch;
  }

  .contact-ctas .btn {
    justify-content: center;
  }

  .cta-trust {
    gap: 16px;
  }

  .contact-cards {
    gap: 1px;
    background: rgba(255, 255, 255, 0.06);
  }

  .cnt-card {
    min-height: 0;
    padding: 24px 20px 28px;
  }

  .cnt-value {
    padding-right: 0;
  }

  .cnt-value.is-email {
    font-size: clamp(1.05rem, 5.5vw, 1.4rem);
    word-break: break-word;
    overflow-wrap: anywhere;
  }

  .cnt-arrow {
    display: none;
  }
}

@media (max-width: 380px) {

  .hero-inner,
  .story,
  .principles,
  .layers,
  .opt-c,
  .contact,
  .guarantees {
    padding-inline: 14px;
  }

  .hero-heading {
    font-size: clamp(2.4rem, 7.5vw, 3.2rem);
  }

  .hero-portrait-col {
    padding: 0;
    gap: 0;
  }

  .hero-portrait-frame {
    width: clamp(88px, 30vw, 110px);
    height: auto;
    aspect-ratio: 3/4;
  }

  .hero-portrait-caption {
    padding: 14px 12px 14px 14px;
  }

  .hero-portrait-caption strong {
    font-size: clamp(0.82rem, 0.82vw, 0.9rem);
  }

  .hero-portrait-caption span {
    font-size: clamp(0.52rem, 0.45vw, 0.56rem);
    letter-spacing: 0.08em;
  }

  .hero-meta-item {
    grid-template-columns: 72px 1fr;
  }

  .btn {
    gap: 6px;
    padding-inline: 10px;
    font-size: clamp(0.8rem, 0.45vw, 1rem);
    letter-spacing: 0.04em;
  }

  .cnt-type {
    letter-spacing: 0.12em;
  }
}

.reveal {
  opacity: 0;
  transform: translateY(20px);
  transition:
    opacity 0.9s var(--ease),
    transform 0.9s var(--ease);
}

.reveal.visible {
  opacity: 1;
  transform: none;
}

.d1 {
  transition-delay: 0.1s;
}

.d2 {
  transition-delay: 0.2s;
}

.d3 {
  transition-delay: 0.3s;
}

.d4 {
  transition-delay: 0.45s;
}

@media (prefers-reduced-motion: reduce) {
  .reveal {
    opacity: 1;
    transform: none;
  }
}

/* ══════════════════════════════════════════
     FAQ SECTION
  ══════════════════════════════════════════ */
.faq {
  background: var(--white);
  padding: clamp(80px, 11vw, 130px) clamp(24px, 5vw, 72px);
  position: relative;
}

.faq::before {
  content: "";
  position: absolute;
  inset: 0;
  background: radial-gradient(ellipse at 0% 100%,
      rgba(212, 168, 79, 0.04) 0%,
      transparent 55%);
  pointer-events: none;
}

.faq-inner {
  max-width: 1320px;
  margin: 0 auto;
  position: relative;
  z-index: 1;
}

.faq-layout {
  display: grid;
  grid-template-columns: 1fr 1.85fr;
  gap: clamp(60px, 8vw, 120px);
  align-items: start;
}

.faq-sidebar {
  position: sticky;
  top: clamp(80px, 10vw, 140px);
  align-self: start;
  text-align: left;
}

.faq-sidebar .label {
  display: flex;
  align-items: center;
  gap: 12px;
  margin-bottom: clamp(20px, 2.5vw, 28px);
}

.faq-sidebar .label::before {
  content: "";
  width: 28px;
  height: 1px;
  background: var(--gold);
  flex-shrink: 0;
}

.faq-sidebar .display-lg {
  margin-bottom: clamp(20px, 2.5vw, 32px);
}

.faq-sidebar-intro {
  font-size: clamp(0.95rem, 1vw, 1.05rem);
  line-height: 1.85;
  color: var(--ink-60);
  font-weight: 400;
  max-width: 34ch;
}

.faq-list {
  border-top: 1px solid var(--ink-10);
}

.faq-item {
  border-bottom: 1px solid var(--ink-10);
  position: relative;
  overflow: hidden;
}

.faq-item::after {
  content: "";
  position: absolute;
  bottom: -1px;
  left: 0;
  height: 1px;
  width: 0;
  background: var(--gold);
  transition: width 0.55s var(--ease);
  z-index: 1;
}

.faq-item.faq-open::after {
  width: 100%;
}

.faq-question {
  display: grid;
  grid-template-columns: 1fr 44px;
  gap: 16px;
  align-items: center;
  padding: clamp(24px, 3vw, 34px) 0;
  cursor: pointer;
  background: none;
  border: none;
  width: 100%;
  text-align: left;
  font-family: inherit;
  transition: background 0.35s var(--ease);
}

.faq-question:hover {
  background: rgba(212, 168, 79, 0.028);
}

.faq-question h3 {
  font-family: var(--serif);
  font-weight: 300;
  font-size: clamp(1.1rem, 1.5vw, 1.45rem);
  color: var(--ink);
  line-height: 1.3;
  letter-spacing: -0.01em;
  transition: color 0.3s ease;
}

.faq-item.faq-open .faq-question h3 {
  color: var(--gold);
}

.faq-toggle {
  width: 36px;
  height: 36px;
  border-radius: 50%;
  border: 1px solid var(--ink-10);
  display: flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
  position: relative;
  transition:
    border-color 0.35s var(--ease),
    background 0.35s var(--ease);
}

.faq-item.faq-open .faq-toggle {
  border-color: var(--gold);
  background: var(--gold-10);
}

.faq-toggle::before,
.faq-toggle::after {
  content: "";
  position: absolute;
  background: var(--gold);
  border-radius: 1px;
  transition: transform 0.4s var(--ease), opacity 0.3s ease;
}

.faq-toggle::before {
  width: 12px;
  height: 1.5px;
}

.faq-toggle::after {
  width: 1.5px;
  height: 12px;
}

.faq-item.faq-open .faq-toggle::after {
  transform: rotate(90deg);
  opacity: 0;
}

.faq-answer {
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.55s cubic-bezier(0.4, 0, 0.2, 1);
}

.faq-answer-inner {
  padding: 0 0 clamp(28px, 3.5vw, 40px) 0;
}

.faq-answer-inner p {
  font-size: clamp(0.95rem, 1vw, 1.05rem);
  line-height: 1.85;
  color: var(--ink-60);
  font-weight: 400;
  max-width: 60ch;
}

.faq-answer-inner p + p {
  margin-top: 16px;
}

@media (max-width: 1440px) {
    .a2zvt-global-prev { left: 0; }
    .a2zvt-global-next { right: 0; }
    .a2zvt-outer { padding: 0 50px; }
}

@media (max-width: 900px) {
    .a2zvt__slide {
        flex: 0 0 calc(50% - 12px);
    }
}

@media (max-width: 600px) {
    .a2zvt__slide {
        flex: 0 0 100%;
    }
    .a2zvt-outer { padding: 0; }
    .a2zvt__track { gap: 0; }
    .a2zvt-global-prev, .a2zvt-global-next { display: none; }
}

@media (max-width: 640px) {
  .faq {
    padding-inline: 18px;
  }

  .faq-question h3 {
    font-size: clamp(1rem, 4.5vw, 1.2rem);
  }
}

@media (max-width: 380px) {
  .faq {
    padding-inline: 14px;
  }
}

/* ══════════════════════════════════════════
     COMPARISON TABLE SECTION
  ══════════════════════════════════════════ */
.comparison {
  background:
    linear-gradient(155deg, rgba(2, 8, 17, 0.92) 0%, rgba(3, 12, 26, 0.88) 50%, rgba(2, 9, 19, 0.94) 100%),
    url("https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=1600&q=80");
  background-size: cover;
  background-position: center;
  background-attachment: fixed;
  background-color: #02060f;
  padding: clamp(80px, 11vw, 130px) clamp(24px, 5vw, 72px);
  position: relative;
  overflow: hidden;
}

.comparison::before {
  content: "";
  position: absolute;
  inset: 0;
  background: radial-gradient(ellipse at 85% 12%,
      rgba(37, 99, 235, 0.12) 0%,
      rgba(13, 30, 52, 0.04) 35%,
      transparent 58%);
  pointer-events: none;
  z-index: 0;
}

.comparison-inner {
  max-width: 1320px;
  margin: 0 auto;
  position: relative;
  z-index: 1;
}

.comparison-head {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: clamp(40px, 6vw, 80px);
  align-items: start;
  margin-bottom: clamp(48px, 6vw, 72px);
}

.comparison-head-left .label {
  display: flex;
  align-items: center;
  gap: 12px;
  margin-bottom: clamp(20px, 2.5vw, 28px);
}

.comparison-head-left .label::before {
  content: "";
  width: 28px;
  height: 1px;
  background: var(--gold);
  flex-shrink: 0;
}

.comparison-head h2 {
  font-family: var(--serif);
  font-weight: 300;
  font-size: clamp(2.2rem, 3.5vw, 3.2rem);
  line-height: 1.08;
  letter-spacing: -0.02em;
  color: var(--white);
}

.comparison-head h2 em {
  font-style: normal;
  color: var(--gold);
}

.comparison-head-right {
  align-self: flex-start;
}

.comparison-head-right p {
  font-size: clamp(1.02rem, 1.1vw, 1.15rem);
  line-height: 1.85;
  color: rgba(255, 255, 255, 0.65);
  font-weight: 400;
}

/* Comparison Table */
.cmp-table {
  width: 100%;
  border-collapse: separate;
  border-spacing: 0;
}

.cmp-table thead th {
  padding: clamp(18px, 2.5vw, 28px) clamp(20px, 2.5vw, 32px);
  text-align: left;
  vertical-align: bottom;
  border-bottom: 2px solid rgba(176, 141, 87, 0.3);
}

.cmp-table thead th:first-child {
  width: 24%;
}

.cmp-th-label {
  font-family: var(--mono);
  font-size: clamp(0.68rem, 0.62vw, 0.75rem);
  letter-spacing: 0.22em;
  text-transform: uppercase;
  color: rgba(255, 255, 255, 0.45);
  font-weight: 400;
}

.cmp-th-brand {
  font-family: var(--serif);
  font-weight: 300;
  font-size: clamp(1.35rem, 1.8vw, 1.7rem);
  color: rgba(255, 255, 255, 0.75);
  line-height: 1.2;
  display: block;
  margin-top: 6px;
}

.cmp-th-brand--gold {
  color: var(--gold-lt);
}

.cmp-table tbody tr {
  transition: background 0.35s var(--ease);
}

.cmp-table tbody tr:hover {
  background: rgba(176, 141, 87, 0.04);
}

.cmp-table tbody td {
  padding: clamp(26px, 3.5vw, 38px) clamp(22px, 2.8vw, 36px);
  vertical-align: top;
  border-bottom: 1px solid rgba(255, 255, 255, 0.06);
  line-height: 1.8;
}

.cmp-table tbody tr:last-child td {
  border-bottom: 1px solid rgba(176, 141, 87, 0.2);
}

/* Category column */
.cmp-cat {
  font-family: var(--sans);
  font-weight: 700;
  font-size: clamp(1.4rem, 1.8vw, 1.7rem);
  color: var(--gold-lt);
  line-height: 1.3;
  letter-spacing: -0.01em;
}

.cmp-cat-sub {
  display: block;
  font-family: var(--sans);
  font-size: clamp(1.1rem, 1.2vw, 1.28rem);
  color: rgba(255, 255, 255, 0.5);
  font-weight: 400;
  margin-top: 10px;
  line-height: 1.65;
  font-style: italic;
}

/* Typical firm column */
.cmp-typical {
  font-family: var(--sans);
  font-size: clamp(1.12rem, 1.22vw, 1.32rem);
  color: rgba(255, 255, 255, 0.6);
  font-weight: 400;
  line-height: 1.78;
}

/* A2Z column */
.cmp-a2z {
  font-family: var(--sans);
  font-size: clamp(1.12rem, 1.22vw, 1.32rem);
  color: rgba(255, 255, 255, 0.95);
  font-weight: 500;
  line-height: 1.78;
  position: relative;
}

.cmp-a2z::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 2px;
  height: 100%;
  background: linear-gradient(to bottom, var(--gold), rgba(212, 168, 79, 0.15));
  opacity: 0;
  transition: opacity 0.4s var(--ease);
}

.cmp-table tbody tr:hover .cmp-a2z::before {
  opacity: 1;
}

/* Mobile: card layout */
@media (max-width: 1440px) {
    .a2zvt-global-prev { left: 0; }
    .a2zvt-global-next { right: 0; }
    .a2zvt-outer { padding: 0 50px; }
}

@media (max-width: 900px) {
    .a2zvt__slide {
        flex: 0 0 calc(50% - 12px);
    }
}

@media (max-width: 600px) {
    .a2zvt__slide {
        flex: 0 0 100%;
    }
    .a2zvt-outer { padding: 0; }
    .a2zvt__track { gap: 0; }
    .a2zvt-global-prev, .a2zvt-global-next { display: none; }
}

@media (max-width: 640px) {
  .comparison {
    padding-inline: 18px;
  }
}

@media (max-width: 380px) {
  .comparison {
    padding-inline: 14px;
  }
}
</style>

<!-- Google Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link
  href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;1,300;1,400;1,500&family=DM+Sans:wght@300;400;500&family=DM+Mono:wght@300;400&display=swap"
  rel="stylesheet" />

<!-- ═══════════════════════════════════════
   HERO
═══════════════════════════════════════ -->
<section class="hero">
  <!-- Left abstract: angular crystalline shard composition -->
  <!--   <div class="hero-deco-left" aria-hidden="true">
    <svg viewBox="0 0 300 700" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">

      <defs>

        <linearGradient id="blueGoldMain" x1="0%" y1="0%" x2="100%" y2="100%">
          <stop offset="0%" stop-color="rgba(37,99,235,0.45)" />
          <stop offset="100%" stop-color="rgba(212,168,79,0.28)" />
        </linearGradient>


        <linearGradient id="goldGlow" x1="0%" y1="0%" x2="100%" y2="100%">
          <stop offset="0%" stop-color="rgba(244,213,141,0.38)" />
          <stop offset="100%" stop-color="rgba(212,168,79,0.16)" />
        </linearGradient>


        <linearGradient id="diamondFill" x1="0%" y1="0%" x2="100%" y2="100%">
          <stop offset="0%" stop-color="rgba(96,165,250,0.55)" />
          <stop offset="100%" stop-color="rgba(212,168,79,0.4)" />
        </linearGradient>
      </defs>


      <g>
        <polygon points="-90,45 185,0 252,170 218,435 -110,515" fill="url(#blueGoldMain)"
          stroke="rgba(244,213,141,0.35)" stroke-width="1" />

        <line x1="185" y1="0" x2="218" y2="435" stroke="rgba(255,255,255,0.18)" stroke-width="0.8" />

        <line x1="90" y1="180" x2="252" y2="135" stroke="rgba(255,255,255,0.14)" stroke-width="0.7" />

        <animateTransform attributeName="transform" type="translate" values="0,0; 7,-28; 0,0" dur="10s"
          repeatCount="indefinite" calcMode="spline" keySplines="0.42 0 0.58 1; 0.42 0 0.58 1" />

        <animate attributeName="opacity" values="0.75; 1; 0.75" dur="10s" repeatCount="indefinite" calcMode="spline"
          keySplines="0.42 0 0.58 1; 0.42 0 0.58 1" />
      </g>


      <g>
        <polygon points="-80,545 125,508 162,625 55,655 -95,635" fill="url(#goldGlow)" stroke="rgba(212,168,79,0.3)"
          stroke-width="0.9" />

        <animateTransform attributeName="transform" type="translate" values="0,0; -6,20; 0,0" dur="8s"
          repeatCount="indefinite" calcMode="spline" keySplines="0.42 0 0.58 1; 0.42 0 0.58 1" />

        <animate attributeName="opacity" values="0.65; 1; 0.65" dur="8s" repeatCount="indefinite" calcMode="spline"
          keySplines="0.42 0 0.58 1; 0.42 0 0.58 1" />
      </g>


      <g>
        <polygon points="225,195 265,158 300,195 265,232" fill="url(#diamondFill)" stroke="rgba(255,255,255,0.22)"
          stroke-width="0.9" />

        <animateTransform attributeName="transform" type="rotate" from="0 263 195" to="360 263 195" dur="10s"
          repeatCount="indefinite" />

        <animate attributeName="opacity" values="0.55; 1; 0.55" dur="5s" repeatCount="indefinite" calcMode="spline"
          keySplines="0.42 0 0.58 1; 0.42 0 0.58 1" />
      </g>

    </svg>
  </div> -->

  <!-- Right abstract: sweeping ribbon curves + angular corner form -->
  <div class="hero-deco-right" aria-hidden="true">
    <svg viewBox="0 0 500 800" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">

      <defs>

        <!-- Main Blue → Gold Gradient -->
        <linearGradient id="flowGradient" x1="0%" y1="0%" x2="100%" y2="100%">
          <stop offset="0%" stop-color="rgba(96,165,250,0.9)" />
          <stop offset="50%" stop-color="rgba(37,99,235,0.65)" />
          <stop offset="100%" stop-color="rgba(212,168,79,0.75)" />
        </linearGradient>

        <!-- Soft Background Glow -->
        <linearGradient id="panelGradient" x1="0%" y1="0%" x2="100%" y2="100%">
          <stop offset="0%" stop-color="rgba(37,99,235,0.22)" />
          <stop offset="100%" stop-color="rgba(212,168,79,0.14)" />
        </linearGradient>

        <!-- Gold Glow -->
        <radialGradient id="goldGlow">
          <stop offset="0%" stop-color="rgba(244,213,141,0.95)" />
          <stop offset="100%" stop-color="rgba(244,213,141,0)" />
        </radialGradient>

        <!-- Blur -->
        <filter id="softBlur">
          <feGaussianBlur stdDeviation="18" />
        </filter>

      </defs>

      <!-- Background Flow Lines -->
      <g opacity="0.8">

        <path d="M 500 0 C 75,145 38,385 152,548 C 268,712 500,762 500,800" fill="none" stroke="url(#flowGradient)"
          stroke-width="1.4" />

        <path d="M 500 52 C 128,182 92,400 194,558 C 298,716 476,764 476,800" fill="none" stroke="rgba(96,165,250,0.28)"
          stroke-width="1" />

        <path d="M 500 108 C 188,222 150,415 235,568 C 322,722 452,766 452,800" fill="none"
          stroke="rgba(212,168,79,0.18)" stroke-width="0.9" />

        <animateTransform attributeName="transform" type="translate" values="0,0; -8,-18; 0,0" dur="13s"
          repeatCount="indefinite" calcMode="spline" keySplines="0.42 0 0.58 1; 0.42 0 0.58 1" />

      </g>

      <!-- Animated Energy Line -->
      <path d="M 500 0 C 75,145 38,385 152,548 C 268,712 500,762 500,800" fill="none" stroke="url(#flowGradient)"
        stroke-width="2.2" stroke-dasharray="85 3000" stroke-linecap="round">
        <animate attributeName="stroke-dashoffset" from="0" to="3085" dur="5s" repeatCount="indefinite" />
      </path>

      <!-- Secondary Energy Line -->
      <path d="M 500 52 C 128,182 92,400 194,558 C 298,716 476,764 476,800" fill="none" stroke="rgba(244,213,141,0.65)"
        stroke-width="1.4" stroke-dasharray="60 3000" stroke-linecap="round">
        <animate attributeName="stroke-dashoffset" from="0" to="3060" dur="6s" begin="1.8s" repeatCount="indefinite" />
      </path>

      <!-- Floating Panel -->
      <!--       <g>

        <polygon points="392,0 500,0 500,185 450,218 382,118" fill="url(#panelGradient)" stroke="rgba(255,255,255,0.18)"
          stroke-width="1" />

        <line x1="450" y1="0" x2="382" y2="118" stroke="rgba(255,255,255,0.12)" stroke-width="0.7" />

        <animateTransform attributeName="transform" type="translate" values="0,0; 4,-10; 0,0" dur="9s" begin="1.5s"
          repeatCount="indefinite" calcMode="spline" keySplines="0.42 0 0.58 1; 0.42 0 0.58 1" />

        <animate attributeName="opacity" values="0.65; 1; 0.65" dur="9s" begin="1.5s" repeatCount="indefinite"
          calcMode="spline" keySplines="0.42 0 0.58 1; 0.42 0 0.58 1" />

      </g> -->

    </svg>
  </div>

  <div class="hero-inner">
    <div class="hero-left">
      <h1 class="hero-heading reveal d1">
        Most accountants file your returns.
        We run your <br /><em>finance function.</em>
      </h1>
      <p class="hero-sub reveal d2">
        Growing businesses are consistently underserved by accountants who treat compliance as a box-ticking exercise.
        A2Z was built specifically to change that — to give ambitious businesses the structured, fully managed finance
        function they actually deserve.<br /><br />
        <strong>Shabbir Rahman, FCCA, Econ (Hons)</strong> — Fellow of the Association of Chartered Certified
        Accountants, the highest qualification in the profession — founded A2Z after managing complex international
        group accounts at Subsea 7, a multibillion-pound oil and gas contractor, to Big 4 audit standards imposed by
        Deloitte and EY. That level of rigour is what every A2Z client receives.
      </p>

      <div class="hero-ctas desk-res reveal d4">
        <a href="/contact/" class="btn btn-gold">Speak With Our Team</a>
        <a href="/what-we-do-well/" class="btn btn-ghost-light">Our Services</a>
      </div>
    </div>

    <div class="hero-portrait-col reveal d2">
      <figure class="hero-portrait-frame">
        <img src="https://a2zaccounting.co.uk/wp-content/uploads/2026/04/srahman.png"
          alt="Shabbir Rahman FCCA, Founder and Chief Executive of A2Z Accounting Solutions" width="420" height="560" />
      </figure>
      <div class="hero-portrait-caption">
        <strong>Shabbir Rahman, FCCA, Econ (Hons)</strong>
        <span>Founder &amp; Chief Executive</span>
      </div>
    </div>

    <div class="hero-ctas mob-res reveal d4">
      <a href="/contact/" class="btn btn-gold">Speak With Our Team</a>
      <a href="/what-we-do-well/" class="btn btn-ghost-light">Our Services</a>
    </div>
</div>
  </div>
</section>



<!-- ═══════════════════════════════════════
   FOUNDER MESSAGE
═══════════════════════════════════════ -->
<section class="founder-message" style="background: #ffffff; padding: clamp(80px, 10vw, 120px) clamp(24px, 5vw, 72px);">
  <div class="founder-message-inner" style="max-width: 860px; margin: 0 auto;">
    
    <span class="label reveal" style="display: block; margin-bottom: 40px; color: var(--gold); letter-spacing: 0.15em; font-size: 0.95rem; font-weight: 700; text-transform: uppercase; background: none; border: none; padding: 0;">
      A Message From Our Founder
    </span>

    <div class="founder-prose reveal d1" style="color: var(--ink); font-size: clamp(1.15rem, 1.5vw, 1.3rem); line-height: 1.8; font-weight: 400; display: flex; flex-direction: column; gap: 24px;">
      <p>I spent the early part of my career in corporate finance at a multibillion-pound oil and gas operator, where the accounts were audited to Big 4 standards by Deloitte and EY. That environment leaves no room for guesswork. It runs on precise systems, documented process, and discipline applied to every number. Those are the habits I built A2Z on.</p>
      
      <p>Beyond that world, I kept seeing the same thing. Growing businesses, ambitious and capable, were being underserved by accountants who treated compliance as a box to tick. Owners worn down by disorganised records, fees that appeared from nowhere, HMRC letters, and an advisor who saw the figures but never the business behind them.</p>

      <p>So I built A2Z differently. Specialist teams instead of one stretched generalist, layered quality control, and a senior review on every engagement before it reaches you. Proactive, accountable, and held to the standard I learned at corporate level.</p>

      <p>Tax is where most growing businesses quietly overpay. We plan it months ahead of every deadline, claim the reliefs you are entitled to, and structure your profits and income so the saving is captured while the window is still open, not calculated once it has closed.</p>

      <p>I oversee the standard on every client myself. It is why 99% of our growth comes by referral, and when a client puts their own name behind a recommendation, we earn it on every engagement.</p>
    </div>

    <div class="founder-callout reveal d2" style="margin-top: 60px; padding-top: 40px; border-top: 1px solid rgba(0,0,0,0.1);">
      <h3 style="font-family: 'Cormorant Garamond', serif; font-size: clamp(2.2rem, 4vw, 3rem); line-height: 1.3; font-weight: 500; color: var(--ink); margin: 0; font-style: italic;">
        We did not set out to build another accounting firm. We built the <span style="color: var(--gold);">finance function</span> growing businesses deserve, and could rarely access until now.
      </h3>
    </div>

  </div>
</section>

<!-- ═══════════════════════════════════════
   DEDICATED TEAM PULL-QUOTE
═══════════════════════════════════════ -->
<section class="team-quote-band" style="background: linear-gradient(155deg, rgba(2, 8, 17, 0.88) 0%, rgba(9, 26, 47, 0.85) 50%, rgba(2, 8, 17, 0.9) 100%), url('https://images.unsplash.com/photo-1521737604893-d14cc237f11d?auto=format&fit=crop&w=1600&q=80') center/cover no-repeat fixed; padding: clamp(80px, 10vw, 120px) clamp(24px, 5vw, 72px);">
  <div class="team-quote-inner" style="text-align: center; max-width: 1000px; margin: 0 auto;">
    <span class="label reveal" style="display: inline-block; margin-bottom: 24px; color: var(--gold); letter-spacing: 0.15em; font-size: 0.9rem; font-weight: 700; background: none; border: none; padding: 0;">THE TEAM BEHIND YOUR NUMBERS</span>
    <h2 class="display-lg reveal d1" style="color: #fff; margin-bottom: 24px; font-weight: 400; text-transform: none; letter-spacing: normal;">
      A specialist for <em style="font-family: 'Cormorant Garamond', serif; font-style: italic; color: var(--gold);">every part of your finances.</em>
    </h2>
    <p class="reveal d2" style="color: rgba(255,255,255,0.85); font-size: clamp(1.2rem, 1.6vw, 1.35rem); line-height: 1.8; max-width: 900px; font-weight: 400; margin: 0 auto;">
      17 of us and growing, with dedicated people for bookkeeping, VAT, payroll, accounts and tax. Work never waits behind one person, so you get speed, depth and quality on every job.
    </p>
  </div>
</section>


<!-- ═══════════════════════════════════════
   METRICS STRIP
═══════════════════════════════════════ -->
<section class="metrics" aria-label="Key performance metrics">
  <div class="metrics-inner">
    <div class="metric-item reveal">
      <span class="metric-num">750+</span>
      <span class="metric-lbl">Businesses<br />supported</span>
    </div>
    <div class="metric-item reveal d1">
      <span class="metric-num">100%</span>
      <span class="metric-lbl">Client<br />satisfaction</span>
    </div>
    <div class="metric-item reveal d2">
      <span class="metric-num">10+</span>
      <span class="metric-lbl">Years<br />in practice</span>
    </div>
    <div class="metric-item reveal d3">
      <span class="metric-num">0</span>
      <span class="metric-lbl">Missed HMRC<br />deadlines - ever</span>
    </div>
</div>
  </div>
</section>

<script>
    /* ─── a2zvt hero testimonials slider (3-column) ─── */
    document.addEventListener('DOMContentLoaded', function() {
        var slider = document.getElementById('a2zvt');
        if (!slider) return;
        var track = document.getElementById('a2zvt-track');
        var slides = track.querySelectorAll('.a2zvt__slide');
        var prevBtn = document.querySelector('.a2zvt-global-prev');
        var nextBtn = document.querySelector('.a2zvt-global-next');
        var total = slides.length;
        var cur = 0;
        var busy = false;

        function getVisibleCount() {
            if (window.innerWidth <= 600) return 1;
            if (window.innerWidth <= 900) return 2;
            return 3;
        }

        function goTo(n) {
            if (busy) return;
            busy = true;
            var visible = getVisibleCount();
            var maxIndex = total - visible;
            if (maxIndex < 0) maxIndex = 0;

            if (n < 0) cur = maxIndex;
            else if (n > maxIndex) cur = 0;
            else cur = n;

            var slideWidth = slides[0].offsetWidth;
            var gap = 24;
            if (window.innerWidth <= 600) gap = 0;

            var move = cur * (slideWidth + gap);
            track.style.transform = 'translate3d(-' + move + 'px, 0, 0)';

            setTimeout(function() {
                busy = false;
            }, 560);
        }

        if (prevBtn) prevBtn.addEventListener('click', function(e) { e.preventDefault(); goTo(cur - 1); });
        if (nextBtn) nextBtn.addEventListener('click', function(e) { e.preventDefault(); goTo(cur + 1); });

        var timer = setInterval(function() {
            goTo(cur + 1);
        }, 6000);

        var outer = document.querySelector('.a2zvt-outer');
        if (outer) {
            outer.addEventListener('pointerenter', function() { clearInterval(timer); });
            outer.addEventListener('pointerleave', function() {
                timer = setInterval(function() { goTo(cur + 1); }, 6000);
            });
        }

        window.addEventListener('resize', function() {
            goTo(cur);
        });
    })();


// Metric count-up animation
(function() {
  var metricNums = document.querySelectorAll('.metric-num');
  if (!metricNums.length) return;

  function countUp(el) {
    if (el.dataset.counted) return;
    el.dataset.counted = '1';

    var raw = el.textContent.trim();
    var suffix = raw.replace(/^[\d,.]+/, '');
    var numStr = raw.replace(/[^\d.]/g, '');
    var target = parseFloat(numStr) || 0;
    var isFloat = numStr.indexOf('.') !== -1;
    var duration = 1800;
    var start = performance.now();

    function step(now) {
      var elapsed = now - start;
      var progress = Math.min(elapsed / duration, 1);
      // Ease out cubic
      var eased = 1 - Math.pow(1 - progress, 3);
      var current = eased * target;
      if (isFloat) {
        el.textContent = current.toFixed(1) + suffix;
      } else {
        el.textContent = Math.round(current).toLocaleString() + suffix;
      }
      if (progress < 1) {
        requestAnimationFrame(step);
      } else {
        el.textContent = raw;
      }
    }
    requestAnimationFrame(step);
  }

  var observer = new IntersectionObserver(function(entries) {
    entries.forEach(function(entry) {
      if (entry.isIntersecting) {
        var items = entry.target.querySelectorAll('.metric-num');
        items.forEach(function(el, i) {
          setTimeout(function() { countUp(el); }, i * 200);
        });
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.3 });

  var section = document.querySelector('.metrics');
  if (section) observer.observe(section);
})();
</script>



<!-- ═══════════════════════════════════════
   GUARANTEES
═══════════════════════════════════════ -->
<section class="guarantees" style="display:none">
  <div class="guar-inner">
    <div class="guar-head reveal">
      <!--       <span class="label">Contractual commitments</span> -->
      <h2 class="display-lg">
        The three commitments<br /><em>All in writing</em>
      </h2>
    </div>

    <div class="guar-stack">
      <div class="guar-panel reveal">
        <div class="guar-panel-arrow" aria-hidden="true">
          <svg viewBox="0 0 22 28">
            <polyline opacity="0.28" points="2 0 11 8 20 0" />
            <polyline opacity="0.58" points="2 10 11 18 20 10" />
            <polyline opacity="1" points="2 20 11 28 20 20" />
          </svg>
        </div>
        <div class="guar-panel-body">
          <h3>Same-day Response</h3>
          <p>Any query submitted before midday on a working day receives a substantive response the same day. Not an
            acknowledgement — a real answer.</p>
        </div>
      </div>
      <div class="guar-panel reveal d1">
        <div class="guar-panel-arrow" aria-hidden="true">
          <svg viewBox="0 0 22 28">
            <polyline opacity="0.28" points="2 0 11 8 20 0" />
            <polyline opacity="0.58" points="2 10 11 18 20 10" />
            <polyline opacity="1" points="2 20 11 28 20 20" />
          </svg>
        </div>
        <div class="guar-panel-body">
          <h3>Zero Missed Deadlines</h3>
          <p>Every HMRC and Companies House deadline is met proactively, well in advance. No last-minute rushes, no
            penalty exposure.</p>
        </div>
      </div>
      <div class="guar-panel reveal d2">
        <div class="guar-panel-arrow" aria-hidden="true">
          <svg viewBox="0 0 22 28">
            <polyline opacity="0.28" points="2 0 11 8 20 0" />
            <polyline opacity="0.58" points="2 10 11 18 20 10" />
            <polyline opacity="1" points="2 20 11 28 20 20" />
          </svg>
        </div>
        <div class="guar-panel-body">
          <h3>Transparent Fixed Fees</h3>
          <p>Your monthly fee is agreed, confirmed in writing, and never changes without your prior approval. No hourly
            billing, no surprise invoices.</p>
        </div>
      </div>
    </div>
</div>
  </div>
</section>



<!-- ═══════════════════════════════════════
   PRINCIPLES
═══════════════════════════════════════ -->
<section class="principles" style="display:none">
  <div class="principles-inner">
    <div class="principles-layout">

      <div class="principles-sidebar reveal">
        <h2 class="display-lg">
          Three things we will<br /><em>not compromise</em>
        </h2>
        <p class="principles-intro">These are not aspirations. They are the written commitments every A2Z engagement is
          built around.</p>
        <a href="/contact/" class="btn btn-ghost-light">Discuss Your Growth Plans</a>
      </div>

      <div class="principles-list">
        <article class="principle-row reveal">
          <span class="principle-row-num">01</span>
          <div class="principle-row-body">
            <h3>We do not compete on <em>price</em></h3>
            <p>Low quality accounting creates expensive problems. We price for the value delivered: certainty, accuracy,
              and measurable strategic advantage.</p>
          </div>
        </article>
        <article class="principle-row reveal d1">
          <span class="principle-row-num">02</span>
          <div class="principle-row-body">
            <h3>We do not sell <em>hours</em></h3>
            <p>Every engagement is for specific, guaranteed outcomes: fixed-fee, fully scoped, and confirmed in writing
              before any work begins.</p>
          </div>
        </article>
        <article class="principle-row reveal d2">
          <span class="principle-row-num">03</span>
          <div class="principle-row-body">
            <h3>We do not react to <em>problems</em></h3>
            <p>We prevent them. We identify and resolve issues proactively, long before they reach you or HMRC.</p>
          </div>
        </article>
      </div>

    </div>
</div>
  </div>
</section>


<!-- ═══════════════════════════════════════
   STORY — REMOVED PER FEEDBACK
═══════════════════════════════════════ -->
<section class="story team" style="display:none">
  <div class="story-inner">
    <div class="story-sidebar reveal">
      <span class="label">The Founder's Story</span>
      <h2 class="story-sidebar-head" style="margin-top: 20px">
        A Discipline <em>Learned Differently</em>
      </h2>
    </div>

    <div class="story-chain story-journey">
      <div class="story-journey-header reveal">
        <div class="story-journey-photo">
          <img src="https://a2zaccounting.co.uk/wp-content/uploads/2026/04/srahman.png"
            alt="Shabbir Rahman FCCA, Founder and Chief Executive of A2Z Accounting Solutions" />
        </div>
        <div class="story-journey-ident">
          <h3 class="story-founder-name">Shabbir Rahman, <em>FCCA</em></h3>
          <span class="story-founder-role">Founder &amp; Chief Executive</span>
        </div>
      </div>

      <article class="sp-item" data-story-idx="0">
        <div class="sp-track">
          <div class="sp-line"></div>
          <span class="sp-dot"></span>
          <div class="sp-tail"></div>
        </div>
        <div class="sp-body">
          <span class="label" style="margin-bottom: 10px; display: block;">Big 4 · Early Career</span>
          <p>Trained under rigorous audit standards at Deloitte and EY — absorbing the frameworks, controls, and
            reporting discipline that large-cap clients demand, and building the technical foundation that underpins
            every A2Z engagement today.</p>
        </div>
      </article>

      <article class="sp-item" data-story-idx="1">
        <div class="sp-track">
          <div class="sp-line"></div>
          <span class="sp-dot"></span>
          <div class="sp-tail"></div>
        </div>
        <div class="sp-body">
          <span class="label" style="margin-bottom: 10px; display: block;">Subsea 7 · Group Finance</span>
          <p>Moved into group-accounting leadership at Subsea 7, a FTSE-listed energy contractor — overseeing
            multi-entity consolidation, director-level reporting, and the kind of governance that public-market
            shareholders expect.</p>
        </div>
      </article>

      <article class="sp-item" data-story-idx="2">
        <div class="sp-track">
          <div class="sp-line"></div>
          <span class="sp-dot"></span>
          <div class="sp-tail"></div>
        </div>
        <div class="sp-body">
          <span class="label" style="margin-bottom: 10px; display: block;">FCCA · Fellow Qualification</span>
          <p>Achieved Fellow Chartered Certified Accountant status — recognition reserved for practitioners who combine
            technical excellence with a sustained track record of professional leadership, placing him among the UK's
            top-qualified accountants.</p>
        </div>
      </article>

      <article class="sp-item" data-story-idx="3">
        <div class="sp-track">
          <div class="sp-line"></div>
          <span class="sp-dot"></span>
          <div class="sp-tail"></div>
        </div>
        <div class="sp-body">
          <span class="label" style="margin-bottom: 10px; display: block;">A2Z Accounting · Founded</span>
          <p>Left corporate finance to apply that same rigour — specialist roles, director oversight, clear
            accountability — to growing UK businesses that deserve more than a generalist filing service. A2Z was built
            around that single conviction.</p>
        </div>
      </article>

      <article class="sp-item" data-story-idx="4">
        <div class="sp-track">
          <div class="sp-line"></div>
          <span class="sp-dot"></span>
          <div class="sp-tail"></div>
        </div>
        <div class="sp-body">
          <span class="label" style="margin-bottom: 10px; display: block;">Today · Leading the Team</span>
          <p>Now leads a specialist team of accountants, payroll administrators, and client support staff — each with
            defined responsibilities across VAT, tax, bookkeeping, and year-end accounts — so clients always know who
            owns their numbers.</p>
        </div>
      </article>
    </div>
</div>
  </div>
</section>



<!-- ═══════════════════════════════════════
   COMPARISON
═══════════════════════════════════════ -->
<section class="comparison" id="comparison">
  <div class="comparison-inner">

    <div class="comparison-head reveal">
      <div class="comparison-head-left">
        <h2>
          The differences most firms<br /><em>don&rsquo;t disclose</em>
        </h2>
      </div>
    </div>

    <table class="cmp-table reveal d1">
      <thead>
        <tr>
          <th>
            <span class="cmp-th-label">What to check</span>
          </th>
          <th>
            <span class="cmp-th-label">Industry standard</span>
            <span class="cmp-th-brand">A Typical UK Firm</span>
          </th>
          <th>
            <span class="cmp-th-label">Our approach</span>
            <span class="cmp-th-brand cmp-th-brand--gold">A2Z Accounting</span>
          </th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="cmp-cat">
            Who handles your account
            <span class="cmp-cat-sub">The single biggest factor in service quality</span>
          </td>
          <td class="cmp-typical" data-mobile-label="A typical UK firm">
            One generalist handling dozens of clients across multiple sectors. When they&rsquo;re on leave or leave the firm, your relationship and institutional knowledge go with them.
          </td>
          <td class="cmp-a2z" data-mobile-label="A2Z Accounting">
            A dedicated specialist team &mdash; separate accountants for VAT, payroll, management accounts, and year-end, each with defined responsibility for your numbers. You know who owns what.
          </td>
        </tr>
        <tr>
          <td class="cmp-cat">
            Qualification standard
            <span class="cmp-cat-sub">In the UK, anyone can legally call themselves an accountant</span>
          </td>
          <td class="cmp-typical" data-mobile-label="A typical UK firm">
            Variable. The partner may be qualified; the person preparing your accounts is often a junior with limited oversight. Credentials at the individual work level are rarely disclosed.
          </td>
          <td class="cmp-a2z" data-mobile-label="A2Z Accounting">
            Every file is reviewed to FCCA standards by a Fellow Chartered Certified Accountant trained in the Deloitte and EY Big 4 audit frameworks before it leaves the firm.
          </td>
        </tr>
        <tr>
          <td class="cmp-cat">
            Fee structure
            <span class="cmp-cat-sub">Hourly billing creates misaligned incentives</span>
          </td>
          <td class="cmp-typical" data-mobile-label="A typical UK firm">
            Hourly rates or a fixed fee with scope expansions throughout the year. Final invoices frequently exceed what was quoted.
          </td>
          <td class="cmp-a2z" data-mobile-label="A2Z Accounting">
            One fixed monthly fee, countersigned in writing before work begins. Doesn&rsquo;t change based on transaction volume, query frequency, or complexity.
          </td>
        </tr>
        <tr>
          <td class="cmp-cat">
            Response time
            <span class="cmp-cat-sub">HMRC correspondence and commercial decisions rarely wait</span>
          </td>
          <td class="cmp-typical" data-mobile-label="A typical UK firm">
            No formal commitment. Response times of several days are common &mdash; particularly around filing deadlines when every client needs attention at once.
          </td>
          <td class="cmp-a2z" data-mobile-label="A2Z Accounting">
            Same-day response to any query submitted before midday. A substantive answer, not an acknowledgement. In writing, on every engagement.
          </td>
        </tr>
        <tr>
          <td class="cmp-cat">
            Deadline management
            <span class="cmp-cat-sub">From April 2026, HMRC late-filing penalties doubled</span>
          </td>
          <td class="cmp-typical" data-mobile-label="A typical UK firm">
            Reactive. Deadlines are met &mdash; usually &mdash; but often in the final days, leaving no time to review or improve the filing before it goes in.
          </td>
          <td class="cmp-a2z" data-mobile-label="A2Z Accounting">
            Every deadline is managed weeks in advance, with tracking visible to you. A2Z has a zero missed HMRC and Companies House deadline record.
          </td>
        </tr>
        <tr>
          <td class="cmp-cat">
            Industry knowledge
            <span class="cmp-cat-sub">VAT treatment, payroll, and tax planning vary significantly by sector</span>
          </td>
          <td class="cmp-typical" data-mobile-label="A typical UK firm">
            Generalist across many sectors. Industry-specific questions are answered from general knowledge rather than specialism.
          </td>
          <td class="cmp-a2z" data-mobile-label="A2Z Accounting">
            Dedicated teams by sector &mdash; oil &amp; gas, healthcare (dental, pharmacy, GP), e-commerce (Shopify, Amazon FBA, WooCommerce), hospitality, property. Sector-specific compliance is the default, not an upgrade.
          </td>
        </tr>
      </tbody>
    </table>

  </div>
</section>






<!-- ═══════════════════════════════════════
   CTA
═══════════════════════════════════════ -->





<!-- ══════════════════════════════════════════
   PROFESSIONAL STANDING STRIP
══════════════════════════════════════════ -->
<section class="prof-standing-strip">
  <div class="prof-standing-inner reveal">
    <span>REGULATED BY<br>THE ACCA</span>
    <span>PROFESSIONAL INDEMNITY<br>INSURED</span>
    <span>XERO, QUICKBOOKS AND<br>DEXT CERTIFIED</span>
  </div>
</section>

<section class="contact">
  <div class="contact-inner">
    <div class="cta-body reveal">
      <div class="cta-left">
        <!--         <span class="cta-label">Start the conversation</span> -->
        <h2 class="contact-heading">
          Ready to work with<br /><em>accountants who deliver?</em>
        </h2>
      </div>
      <div class="cta-right">
        <div class="contact-ctas">
          <a href="/contact/" class="btn btn-gold">Speak With a Chartered Accountant</a>
          <a href="/what-we-do-well/" class="btn btn-ghost-dark">Explore Our Services</a>
        </div>
        <!--         <div class="cta-trust">
          <span class="cta-trust-item">
            <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"></polyline></svg>
            No obligation
          </span>
          <span class="cta-trust-item">
            <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"></polyline></svg>
            Fixed-fee from day one
          </span>
          <span class="cta-trust-item">
            <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"></polyline></svg>
            FCCA qualified
          </span>
        </div> -->
      </div>
    </div>
</div>
  </div>
</section>





<!-- ═══════════════════════════════════════
   FAQ
═══════════════════════════════════════ -->
<section class="faq" id="faq">
  <div class="faq-inner">
    <div class="faq-layout">

      <div class="faq-sidebar reveal">
        <h2 class="display-lg">
          Questions we get<br /><em>asked the most</em>
        </h2>
        <p class="faq-sidebar-intro">Straightforward answers to the questions prospective clients ask before making a decision.</p>
      </div>

      <div class="faq-list" itemscope itemtype="https://schema.org/FAQPage">

        <div class="faq-item reveal" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
          <button class="faq-question" aria-expanded="false" id="faq-btn-1">
            <h3 itemprop="name">We already have an accountant. Why would we consider switching?</h3>
            <span class="faq-toggle" aria-hidden="true"></span>
          </button>
          <div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" role="region" aria-labelledby="faq-btn-1">
            <div class="faq-answer-inner" itemprop="text">
              <p>Most businesses don't change accountants because something has gone wrong. They change because they realise they're only receiving basic compliance services.</p>
              <p>If your accountant mainly files returns, sends reminders, and reacts when you contact them, you could be missing opportunities to reduce tax, improve cash flow, and make better business decisions.</p>
              <p>At A2Z Accounting, we take a proactive approach. Our team identifies risks, tax-saving opportunities, and financial issues before they become problems, helping business owners stay ahead rather than simply staying compliant.</p>
            </div>
          </div>
        </div>

        <div class="faq-item reveal d1" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
          <button class="faq-question" aria-expanded="false" id="faq-btn-2">
            <h3 itemprop="name">What does &ldquo;FCCA&rdquo; actually mean &mdash; and why does it matter for my business?</h3>
            <span class="faq-toggle" aria-hidden="true"></span>
          </button>
          <div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" role="region" aria-labelledby="faq-btn-2">
            <div class="faq-answer-inner" itemprop="text">
              <p>In the UK, anyone can call themselves an accountant, regardless of qualifications.</p>
              <p>FCCA (Fellow of the Association of Chartered Certified Accountants) is one of the highest professional accounting designations and reflects years of examinations, practical experience, and ongoing professional standards.</p>
              <p>For business owners, this means your accounts, tax returns, and financial advice are reviewed to a recognised professional standard, reducing risk and improving accuracy.</p>
            </div>
          </div>
        </div>

        <div class="faq-item reveal d1" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
          <button class="faq-question" aria-expanded="false" id="faq-btn-3">
            <h3 itemprop="name">How does the fixed fee actually work &mdash; what&rsquo;s included and what isn&rsquo;t?</h3>
            <span class="faq-toggle" aria-hidden="true"></span>
          </button>
          <div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" role="region" aria-labelledby="faq-btn-3">
            <div class="faq-answer-inner" itemprop="text">
              <p>Our fixed-fee service includes the agreed accounting and tax services for a single monthly fee with no unexpected invoices.</p>
              <p>Depending on your package, this may include bookkeeping, VAT returns, payroll, management accounts, year-end accounts, Corporation Tax returns, and ongoing support.</p>
              <p>Any additional advisory projects are discussed and agreed upon in advance, ensuring complete transparency.</p>
            </div>
          </div>
        </div>

        <div class="faq-item reveal d2" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
          <button class="faq-question" aria-expanded="false" id="faq-btn-4">
            <h3 itemprop="name">What happens if HMRC contacts us or opens an investigation?</h3>
            <span class="faq-toggle" aria-hidden="true"></span>
          </button>
          <div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" role="region" aria-labelledby="faq-btn-4">
            <div class="faq-answer-inner" itemprop="text">
              <p>If HMRC contacts your business, we deal directly with them on your behalf.</p>
              <p>Our team manages the process from the initial HMRC letter through to resolution, helping reduce stress and ensuring responses are handled correctly and professionally.</p>
              <p>We also focus heavily on preventative compliance to minimise the risk of enquiries occurring in the first place.</p>
            </div>
          </div>
        </div>

        <div class="faq-item reveal d2" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
          <button class="faq-question" aria-expanded="false" id="faq-btn-5">
            <h3 itemprop="name">We&rsquo;re based outside Aberdeen. Can A2Z Solutions still work with us?</h3>
            <span class="faq-toggle" aria-hidden="true"></span>
          </button>
          <div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" role="region" aria-labelledby="faq-btn-5">
            <div class="faq-answer-inner" itemprop="text">
              <p>Absolutely.</p>
              <p>We work with businesses across Scotland, England, and Wales through secure digital systems, allowing clients to share documents, review accounts, and receive support without needing face-to-face meetings.</p>
              <p>Whether you're based in Aberdeen, Glasgow, Edinburgh, London, Manchester, or anywhere else in the UK, you'll receive the same specialist support, industry expertise, and dedicated service.</p>
            </div>
          </div>
        </div>

      </div>
    </div>
</div>
  </div>
</section>



<!-- ═══════════════════════════════════════
   CLIENT TESTIMONIALS
═══════════════════════════════════════ -->
<section class="testimonials">
  <div class="testimonials-inner">
    <div class="testimonials-head reveal">
      <div>
        <!--         <span class="label" style="display: block; margin-bottom: 20px">Client Testimonials</span> -->
        <h2>
          Clients who no longer<br /><em>worry about their accounts</em>
        </h2>
      </div>
    </div>

                    <!-- VIDEO TESTIMONIALS SLIDER -->
                <div class="a2zvt-outer">
                    <button class="a2zvt-global-prev" aria-label="Previous">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="15 18 9 12 15 6"></polyline></svg>
                    </button>
                    <button class="a2zvt-global-next" aria-label="Next">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </button>
                    <div class="a2zvt a2zh-rv a2zh-d3" id="a2zvt">
                    <div class="a2zvt__track" id="a2zvt-track">

                        <div class="a2zvt__slide">
                            <a href="https://www.loom.com/embed/8761cb23b0a34e558b8867204c69e68f?sid=03ed2529-3243-45c6-a8e8-cfe8dfdfbfdc"
                                data-lity class="a2zvt__thumb"><img class="a2zvt__thumb-img"
                                    src="https://a2zaccounting.co.uk/wp-content/uploads/2025/06/Testimonial-–-a2z-accounting-06-04-2025_12_21_PM-21.png"
                                    alt="Kevin Smith" loading="lazy"><span class="a2zvt__play"><span
                                        class="a2zvt__play-icon"></span></span></a>
                            <div class="a2zvt__body">
                                <div>
                                    <div class="a2zvt__meta"><span class="a2zvt__eyebrow">Trusted by ambitious
                                            businesses</span><span class="a2zvt__stars">★★★★★</span></div>
                                    <p class="a2zvt__quote">&ldquo;Building a real relationship with our accountant, not
                                        just handing over
                                        paperwork like before&rdquo;</p>
                                    <div class="a2zvt__author"><span class="a2zvt__avatar"><svg
                                                class="a2zvt__avatar-icon" viewBox="0 0 24 24">
                                                <path
                                                    d="M12 12c2.7 0 5-2.3 5-5s-2.3-5-5-5-5 2.3-5 5 2.3 5 5 5zm0 2c-3.3 0-10 1.7-10 5v2h20v-2c0-3.3-6.7-5-10-5z" />
                                            </svg></span>
                                        <div>
                                            <div class="a2zvt__name">Kevin Smith</div>
                                            <div class="a2zvt__role">Owner, The Drouthy Cobbler &ndash; Elgin &amp; Spey
                                                Life &ndash; Forres
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>

                        <div class="a2zvt__slide">
                            <a href="https://www.loom.com/embed/7878b7d8ae564fb7822bcc706a5efc33?sid=9ba321ad-2b32-47d8-9b10-4c35befedbb4"
                                data-lity class="a2zvt__thumb"><img class="a2zvt__thumb-img"
                                    src="https://a2zaccounting.co.uk/wp-content/uploads/2025/04/testi-img-1.jpg"
                                    alt="Mrs. Rona Tonge" loading="lazy"><span class="a2zvt__play"><span
                                        class="a2zvt__play-icon"></span></span></a>
                            <div class="a2zvt__body">
                                <div>
                                    <div class="a2zvt__meta"><span class="a2zvt__eyebrow">Trusted by ambitious
                                            businesses</span><span class="a2zvt__stars">★★★★★</span></div>
                                    <p class="a2zvt__quote">&ldquo;An absolute pleasure to work with!&rdquo;</p>
                                    <div class="a2zvt__author"><span class="a2zvt__avatar"><svg
                                                class="a2zvt__avatar-icon" viewBox="0 0 24 24">
                                                <path
                                                    d="M12 12c2.7 0 5-2.3 5-5s-2.3-5-5-5-5 2.3-5 5 2.3 5 5 5zm0 2c-3.3 0-10 1.7-10 5v2h20v-2c0-3.3-6.7-5-10-5z" />
                                            </svg></span>
                                        <div>
                                            <div class="a2zvt__name">Mrs. Rona Tonge</div>
                                            <div class="a2zvt__role">Managing Director, Golf View Hotel &ndash;
                                                Lossiemouth</div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>

                        <div class="a2zvt__slide">
                            <a href="https://www.loom.com/embed/9caff76064d2408c8193cb5406ef69ea?sid=d94dc925-fc5a-4791-9d7f-ec17f8c61099"
                                data-lity class="a2zvt__thumb"><img class="a2zvt__thumb-img"
                                    src="https://a2zaccounting.co.uk/wp-content/uploads/2025/06/3.png"
                                    alt="Mr. Mohamed Ali" loading="lazy"><span class="a2zvt__play"><span
                                        class="a2zvt__play-icon"></span></span></a>
                            <div class="a2zvt__body">
                                <div>
                                    <div class="a2zvt__meta"><span class="a2zvt__eyebrow">Trusted by ambitious
                                            businesses</span><span class="a2zvt__stars">★★★★★</span></div>
                                    <p class="a2zvt__quote">&ldquo;As they grow, we grow&rdquo;</p>
                                    <div class="a2zvt__author"><span class="a2zvt__avatar"><svg
                                                class="a2zvt__avatar-icon" viewBox="0 0 24 24">
                                                <path
                                                    d="M12 12c2.7 0 5-2.3 5-5s-2.3-5-5-5-5 2.3-5 5 2.3 5 5 5zm0 2c-3.3 0-10 1.7-10 5v2h20v-2c0-3.3-6.7-5-10-5z" />
                                            </svg></span>
                                        <div>
                                            <div class="a2zvt__name">Mr. Mohamed Ali</div>
                                            <div class="a2zvt__role">Property Tycoon &amp; Owner, MacAli Hotel Group
                                                &ndash; Elgin</div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>

                        <div class="a2zvt__slide">
                            <a href="https://www.loom.com/embed/157bd97bdd42416497aab3ccf8de5843?sid=69be3f94-62e4-4707-a7a1-a62d331a205a"
                                data-lity class="a2zvt__thumb"><img class="a2zvt__thumb-img"
                                    src="https://a2zaccounting.co.uk/wp-content/uploads/2025/06/4-1024x787.png"
                                    alt="Behrouz Abolghassem" loading="lazy"><span class="a2zvt__play"><span
                                        class="a2zvt__play-icon"></span></span></a>
                            <div class="a2zvt__body">
                                <div>
                                    <div class="a2zvt__meta"><span class="a2zvt__eyebrow">Trusted by ambitious
                                            businesses</span><span class="a2zvt__stars">★★★★★</span></div>
                                    <p class="a2zvt__quote">&ldquo;My business grew stress-free&mdash;want a good life?
                                        Move to
                                        A2Z.&rdquo;</p>
                                    <div class="a2zvt__author"><span class="a2zvt__avatar"><svg
                                                class="a2zvt__avatar-icon" viewBox="0 0 24 24">
                                                <path
                                                    d="M12 12c2.7 0 5-2.3 5-5s-2.3-5-5-5-5 2.3-5 5 2.3 5 5 5zm0 2c-3.3 0-10 1.7-10 5v2h20v-2c0-3.3-6.7-5-10-5z" />
                                            </svg></span>
                                        <div>
                                            <div class="a2zvt__name">Behrouz Abolghassem</div>
                                            <div class="a2zvt__role">Owner, Little Italy &ndash; St Andrews</div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>

                        <div class="a2zvt__slide">
                            <a href="https://www.loom.com/embed/6e7d53d784924c84a5240d390cf0e40b?sid=f5faf8ce-1882-4c2d-aaac-6fa91e6cafd4"
                                data-lity class="a2zvt__thumb"><img class="a2zvt__thumb-img"
                                    src="https://a2zaccounting.co.uk/wp-content/uploads/2025/06/5.png"
                                    alt="Christopher O'Halloran" loading="lazy"><span class="a2zvt__play"><span
                                        class="a2zvt__play-icon"></span></span></a>
                            <div class="a2zvt__body">
                                <div>
                                    <div class="a2zvt__meta"><span class="a2zvt__eyebrow">Trusted by ambitious
                                            businesses</span><span class="a2zvt__stars">★★★★★</span></div>
                                    <p class="a2zvt__quote">&ldquo;The friends I referred to A2Z faced challenges, but
                                        those who made the
                                        move to A2Z couldn&rsquo;t thank me enough&rdquo;</p>
                                    <div class="a2zvt__author"><span class="a2zvt__avatar"><svg
                                                class="a2zvt__avatar-icon" viewBox="0 0 24 24">
                                                <path
                                                    d="M12 12c2.7 0 5-2.3 5-5s-2.3-5-5-5-5 2.3-5 5 2.3 5 5 5zm0 2c-3.3 0-10 1.7-10 5v2h20v-2c0-3.3-6.7-5-10-5z" />
                                            </svg></span>
                                        <div>
                                            <div class="a2zvt__name">Christopher O&rsquo;Halloran</div>
                                            <div class="a2zvt__role">Owner, The Green Inn &ndash; Ballater</div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>

                        <div class="a2zvt__slide">
                            <a href="https://www.loom.com/embed/0f25c7b69a2e4af4bac8d720949df52b?sid=6cca37ba-b380-4659-b3f7-492a6a0c270e"
                                data-lity class="a2zvt__thumb"><img class="a2zvt__thumb-img"
                                    src="https://a2zaccounting.co.uk/wp-content/uploads/2025/06/6-1024x846.png"
                                    alt="Khuram Qadir CEng" loading="lazy"><span class="a2zvt__play"><span
                                        class="a2zvt__play-icon"></span></span></a>
                            <div class="a2zvt__body">
                                <div>
                                    <div class="a2zvt__meta"><span class="a2zvt__eyebrow">Trusted by ambitious
                                            businesses</span><span class="a2zvt__stars">★★★★★</span></div>
                                    <p class="a2zvt__quote">&ldquo;You really get to know your accountant when
                                        you&rsquo;re in the deep
                                        end.&rdquo;</p>
                                    <div class="a2zvt__author"><span class="a2zvt__avatar"><svg
                                                class="a2zvt__avatar-icon" viewBox="0 0 24 24">
                                                <path
                                                    d="M12 12c2.7 0 5-2.3 5-5s-2.3-5-5-5-5 2.3-5 5 2.3 5 5 5zm0 2c-3.3 0-10 1.7-10 5v2h20v-2c0-3.3-6.7-5-10-5z" />
                                            </svg></span>
                                        <div>
                                            <div class="a2zvt__name">Khuram Qadir CEng</div>
                                            <div class="a2zvt__role">Founder &amp; Oil &amp; Gas Engineer, Cygnas
                                                Solutions &ndash; Aberdeen
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>

                        <div class="a2zvt__slide">
                            <a href="https://www.loom.com/embed/71e4d66232384e49ad4642d862c65f73?sid=1ceca9bb-b0bd-43e7-bf28-ed5a78eae4a3"
                                data-lity class="a2zvt__thumb"><img class="a2zvt__thumb-img"
                                    src="https://a2zaccounting.co.uk/wp-content/uploads/2025/06/7.png"
                                    alt="Mrs. Lisa Morrison" loading="lazy"><span class="a2zvt__play"><span
                                        class="a2zvt__play-icon"></span></span></a>
                            <div class="a2zvt__body">
                                <div>
                                    <div class="a2zvt__meta"><span class="a2zvt__eyebrow">Trusted by ambitious
                                            businesses</span><span class="a2zvt__stars">★★★★★</span></div>
                                    <p class="a2zvt__quote">&ldquo;Every team member is exceptionally
                                        supportive&mdash;always quick to
                                        assist and resolve&rdquo;</p>
                                    <div class="a2zvt__author"><span class="a2zvt__avatar"><svg
                                                class="a2zvt__avatar-icon" viewBox="0 0 24 24">
                                                <path
                                                    d="M12 12c2.7 0 5-2.3 5-5s-2.3-5-5-5-5 2.3-5 5 2.3 5 5 5zm0 2c-3.3 0-10 1.7-10 5v2h20v-2c0-3.3-6.7-5-10-5z" />
                                            </svg></span>
                                        <div>
                                            <div class="a2zvt__name">Mrs. Lisa Morrison</div>
                                            <div class="a2zvt__role">Treasurer, Seaforth Club &ndash; Nairn</div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>

                        <div class="a2zvt__slide">
                            <a href="https://www.loom.com/embed/93fa845584ea405891cbf002857eff90?sid=577353ff-833d-468c-b323-13c2dd81bdc3"
                                data-lity class="a2zvt__thumb"><img class="a2zvt__thumb-img"
                                    src="https://a2zaccounting.co.uk/wp-content/uploads/2025/06/8.webp"
                                    alt="Mr. Hosam Yousef" loading="lazy"><span class="a2zvt__play"><span
                                        class="a2zvt__play-icon"></span></span></a>
                            <div class="a2zvt__body">
                                <div>
                                    <div class="a2zvt__meta"><span class="a2zvt__eyebrow">Trusted by ambitious
                                            businesses</span><span class="a2zvt__stars">★★★★★</span></div>
                                    <p class="a2zvt__quote">&ldquo;I can trust them to handle everything while I focus
                                        on growing my
                                        business&rdquo;</p>
                                    <div class="a2zvt__author"><span class="a2zvt__avatar"><svg
                                                class="a2zvt__avatar-icon" viewBox="0 0 24 24">
                                                <path
                                                    d="M12 12c2.7 0 5-2.3 5-5s-2.3-5-5-5-5 2.3-5 5 2.3 5 5 5zm0 2c-3.3 0-10 1.7-10 5v2h20v-2c0-3.3-6.7-5-10-5z" />
                                            </svg></span>
                                        <div>
                                            <div class="a2zvt__name">Mr. Hosam Yousef</div>
                                            <div class="a2zvt__role">Pharmacist &amp; Pharmacy Owner &ndash; Aberdeen
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>

                        <div class="a2zvt__slide">
                            <a href="https://www.loom.com/embed/6a780d36e37a4a308ffcfaa4b5c574d6?sid=8a02ccd9-9067-4a15-873b-8f2acd06dba7"
                                data-lity class="a2zvt__thumb"><img class="a2zvt__thumb-img"
                                    src="https://a2zaccounting.co.uk/wp-content/uploads/2025/06/9.png"
                                    alt="Lesia Robertson" loading="lazy"><span class="a2zvt__play"><span
                                        class="a2zvt__play-icon"></span></span></a>
                            <div class="a2zvt__body">
                                <div>
                                    <div class="a2zvt__meta"><span class="a2zvt__eyebrow">Trusted by ambitious
                                            businesses</span><span class="a2zvt__stars">★★★★★</span></div>
                                    <p class="a2zvt__quote">&ldquo;A2Z are the most amazing accountants&mdash;turning my
                                        sleepless nights
                                        into clarity and confidence.&rdquo;</p>
                                    <div class="a2zvt__author"><span class="a2zvt__avatar"><svg
                                                class="a2zvt__avatar-icon" viewBox="0 0 24 24">
                                                <path
                                                    d="M12 12c2.7 0 5-2.3 5-5s-2.3-5-5-5-5 2.3-5 5 2.3 5 5 5zm0 2c-3.3 0-10 1.7-10 5v2h20v-2c0-3.3-6.7-5-10-5z" />
                                            </svg></span>
                                        <div>
                                            <div class="a2zvt__name">Lesia Robertson</div>
                                            <div class="a2zvt__role">Director, Mamma Mia &ndash; Banchory</div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>

                        <div class="a2zvt__slide">
                            <a href="https://www.loom.com/embed/fd60672b40cf4103a1f5c30f0ddfe884?sid=652f2519-2d2e-4aa2-87a0-22522d95a0bf"
                                data-lity class="a2zvt__thumb"><img class="a2zvt__thumb-img"
                                    src="https://a2zaccounting.co.uk/wp-content/uploads/2025/06/10.webp"
                                    alt="Nurul Hoque Ali" loading="lazy"><span class="a2zvt__play"><span
                                        class="a2zvt__play-icon"></span></span></a>
                            <div class="a2zvt__body">
                                <div>
                                    <div class="a2zvt__meta"><span class="a2zvt__eyebrow">Trusted by ambitious
                                            businesses</span><span class="a2zvt__stars">★★★★★</span></div>
                                    <p class="a2zvt__quote">Oil &amp; Gas Engineering Consultant &ndash; Aberdeen</p>
                                    <div class="a2zvt__author"><span class="a2zvt__avatar"><svg
                                                class="a2zvt__avatar-icon" viewBox="0 0 24 24">
                                                <path
                                                    d="M12 12c2.7 0 5-2.3 5-5s-2.3-5-5-5-5 2.3-5 5 2.3 5 5 5zm0 2c-3.3 0-10 1.7-10 5v2h20v-2c0-3.3-6.7-5-10-5z" />
                                            </svg></span>
                                        <div>
                                            <div class="a2zvt__name">Nurul Hoque Ali</div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>

                        <div class="a2zvt__slide">
                            <a href="https://www.loom.com/embed/13ce4a974d34447baf27484eebf9b93f?sid=c808bb8a-53ed-451c-befb-ce214241f5df"
                                data-lity class="a2zvt__thumb"><img class="a2zvt__thumb-img"
                                    src="https://a2zaccounting.co.uk/wp-content/uploads/2025/06/11.png"
                                    alt="Kimberley Welsh" loading="lazy"><span class="a2zvt__play"><span
                                        class="a2zvt__play-icon"></span></span></a>
                            <div class="a2zvt__body">
                                <div>
                                    <div class="a2zvt__meta"><span class="a2zvt__eyebrow">Trusted by ambitious
                                            businesses</span><span class="a2zvt__stars">★★★★★</span></div>
                                    <p class="a2zvt__quote">&ldquo;Switching to A2Z has been a game-changer &ndash;
                                        fast, efficient, and
                                        helped improve my knowledge!&rdquo;</p>
                                    <div class="a2zvt__author"><span class="a2zvt__avatar"><svg
                                                class="a2zvt__avatar-icon" viewBox="0 0 24 24">
                                                <path
                                                    d="M12 12c2.7 0 5-2.3 5-5s-2.3-5-5-5-5 2.3-5 5 2.3 5 5 5zm0 2c-3.3 0-10 1.7-10 5v2h20v-2c0-3.3-6.7-5-10-5z" />
                                            </svg></span>
                                        <div>
                                            <div class="a2zvt__name">Kimberley Welsh</div>
                                            <div class="a2zvt__role">Owner, Ca&rsquo;dora Diner &ndash; Elgin</div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>

                        <div class="a2zvt__slide">
                            <a href="https://www.loom.com/embed/309b1b0e1364427ab246273db38147ab?sid=6ee63d23-fd48-4854-b0c0-6fe7456a6b20"
                                data-lity class="a2zvt__thumb"><img class="a2zvt__thumb-img"
                                    src="https://a2zaccounting.co.uk/wp-content/uploads/2025/06/12-1024x859.webp"
                                    alt="Ameer Aslam" loading="lazy"><span class="a2zvt__play"><span
                                        class="a2zvt__play-icon"></span></span></a>
                            <div class="a2zvt__body">
                                <div>
                                    <div class="a2zvt__meta"><span class="a2zvt__eyebrow">Trusted by ambitious
                                            businesses</span><span class="a2zvt__stars">★★★★★</span></div>
                                    <p class="a2zvt__quote">&ldquo;Switched accountants a week before the
                                        deadline&mdash;A2Z handled
                                        everything flawlessly.&rdquo;</p>
                                    <div class="a2zvt__author"><span class="a2zvt__avatar"><svg
                                                class="a2zvt__avatar-icon" viewBox="0 0 24 24">
                                                <path
                                                    d="M12 12c2.7 0 5-2.3 5-5s-2.3-5-5-5-5 2.3-5 5 2.3 5 5 5zm0 2c-3.3 0-10 1.7-10 5v2h20v-2c0-3.3-6.7-5-10-5z" />
                                            </svg></span>
                                        <div>
                                            <div class="a2zvt__name">Ameer Aslam</div>
                                            <div class="a2zvt__role">Owner, Nickel &amp; Dime &ndash; Various</div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>

                        <div class="a2zvt__slide">
                            <a href="https://www.loom.com/embed/3e5ec41c4e4c4373bf29d8eee84788cb?sid=68038677-011d-4bb0-994e-34249e4f662a"
                                data-lity class="a2zvt__thumb"><img class="a2zvt__thumb-img"
                                    src="https://a2zaccounting.co.uk/wp-content/uploads/2025/06/13.png"
                                    alt="Ms. Cassandara-Jane Thornton" loading="lazy"><span class="a2zvt__play"><span
                                        class="a2zvt__play-icon"></span></span></a>
                            <div class="a2zvt__body">
                                <div>
                                    <div class="a2zvt__meta"><span class="a2zvt__eyebrow">Trusted by ambitious
                                            businesses</span><span class="a2zvt__stars">★★★★★</span></div>
                                    <p class="a2zvt__quote">&ldquo;A2Z transformed our chaotic accounts, making the
                                        impossible
                                        achievable&rdquo;</p>
                                    <div class="a2zvt__author"><span class="a2zvt__avatar"><svg
                                                class="a2zvt__avatar-icon" viewBox="0 0 24 24">
                                                <path
                                                    d="M12 12c2.7 0 5-2.3 5-5s-2.3-5-5-5-5 2.3-5 5 2.3 5 5 5zm0 2c-3.3 0-10 1.7-10 5v2h20v-2c0-3.3-6.7-5-10-5z" />
                                            </svg></span>
                                        <div>
                                            <div class="a2zvt__name">Ms. Cassandara-Jane Thornton</div>
                                            <div class="a2zvt__role">Owner, West End Hotel &ndash; Nairn</div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>

                        <div class="a2zvt__slide">
                            <a href="https://www.loom.com/embed/a541d08386e4430f9f24cf73c2d8555b?sid=99e89d9f-52da-4f65-899d-c649c587f5bb"
                                data-lity class="a2zvt__thumb"><img class="a2zvt__thumb-img"
                                    src="https://a2zaccounting.co.uk/wp-content/uploads/2025/06/14.png"
                                    alt="Dr. Hassan Abbas" loading="lazy"><span class="a2zvt__play"><span
                                        class="a2zvt__play-icon"></span></span></a>
                            <div class="a2zvt__body">
                                <div>
                                    <div class="a2zvt__meta"><span class="a2zvt__eyebrow">Trusted by ambitious
                                            businesses</span><span class="a2zvt__stars">★★★★★</span></div>
                                    <p class="a2zvt__quote">&ldquo;7 years of unwavering support&mdash;A2Z navigates VAT
                                        complexities and
                                        fuels my clinic&rsquo;s growth!&rdquo;</p>
                                    <div class="a2zvt__author"><span class="a2zvt__avatar"><svg
                                                class="a2zvt__avatar-icon" viewBox="0 0 24 24">
                                                <path
                                                    d="M12 12c2.7 0 5-2.3 5-5s-2.3-5-5-5-5 2.3-5 5 2.3 5 5 5zm0 2c-3.3 0-10 1.7-10 5v2h20v-2c0-3.3-6.7-5-10-5z" />
                                            </svg></span>
                                        <div>
                                            <div class="a2zvt__name">Dr. Hassan Abbas</div>
                                            <div class="a2zvt__role">Managing Director &amp; Consultant Cardiologist,
                                                Hourglass Wellbeing
                                                &ndash; Aberdeen</div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>

                        <div class="a2zvt__slide">
                            <a href="https://www.loom.com/embed/921fccbea4f843c491d01bcbd43ecb59?sid=6c19fc7e-8e90-4300-ae8b-0dc869a26a81"
                                data-lity class="a2zvt__thumb"><img class="a2zvt__thumb-img"
                                    src="https://a2zaccounting.co.uk/wp-content/uploads/2025/06/15.png"
                                    alt="Hassan Nazer" loading="lazy"><span class="a2zvt__play"><span
                                        class="a2zvt__play-icon"></span></span></a>
                            <div class="a2zvt__body">
                                <div>
                                    <div class="a2zvt__meta"><span class="a2zvt__eyebrow">Trusted by ambitious
                                            businesses</span><span class="a2zvt__stars">★★★★★</span></div>
                                    <p class="a2zvt__quote">&ldquo;They&rsquo;ve got a solution for every problem&rdquo;
                                    </p>
                                    <div class="a2zvt__author"><span class="a2zvt__avatar"><svg
                                                class="a2zvt__avatar-icon" viewBox="0 0 24 24">
                                                <path
                                                    d="M12 12c2.7 0 5-2.3 5-5s-2.3-5-5-5-5 2.3-5 5 2.3 5 5 5zm0 2c-3.3 0-10 1.7-10 5v2h20v-2c0-3.3-6.7-5-10-5z" />
                                            </svg></span>
                                        <div>
                                            <div class="a2zvt__name">Hassan Nazer</div>
                                            <div class="a2zvt__role">British Film Director &amp; Entrepreneur &ndash;
                                                Aberdeen</div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>

                    </div>
</section>





    <section class="reviews" id="google_reviews">
        <div class="reviews-inner">
            <div class="reviews-head a2zh-rv">
                <div class="reviews-head-left">
                    <h2>Trusted by growing businesses<br /><em>across the UK</em></h2>
                </div>
                <div class="reviews-badge">
                    <span class="reviews-badge-label">Excellent</span>
                    <div class="reviews-badge-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                    <span class="reviews-badge-count">Based on 75 reviews</span>
                    <div class="reviews-badge-google">
                        <img src="https://cdn.trustindex.io/assets/platform/Google/icon.svg" alt="Google" />
                        <span>Google</span>
                    </div>
                </div>
            </div>

            <div class="reviews-widget a2zh-rv a2zh-d1">
                <?php echo do_shortcode('[trustindex no-registration=google]'); ?>
            </div>

            <div class="reviews-footer a2zh-rv a2zh-d2">
                <div class="reviews-footer-logo">
                    <img src="https://cdn.trustindex.io/assets/platform/Google/icon.svg" alt="Google" />
                    <span>Verified Google Reviews</span>
                </div>
            </div>
        </div>
    </section>


<!-- FAQPage Schema -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "We already have an accountant. Why would we consider switching to A2Z?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Most businesses don't switch because their accountant does anything wrong — they switch because their accountant does only the minimum. A2Z operates differently: every client has a dedicated specialist team responsible for identifying issues and opportunities proactively, before you notice them. If your current firm is filing returns and not much else, that is the gap A2Z addresses."
      }
    },
    {
      "@type": "Question",
      "name": "What does FCCA mean and why does it matter for my business?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "In the UK, anyone can legally call themselves an accountant without any qualification. FCCA stands for Fellow of the Association of Chartered Certified Accountants — the highest level of ACCA membership, awarded to fewer than 50,000 practitioners worldwide. At A2Z, every piece of work is reviewed to FCCA standard by a Fellow who trained under Big 4 audit standards (Deloitte and EY) before it leaves the firm."
      }
    },
    {
      "@type": "Question",
      "name": "How does A2Z Accounting's fixed fee work — what is included?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Before any work begins, A2Z provides a written fee letter setting out exactly what will be delivered and the single fixed monthly fee. That fee is countersigned by both parties and does not change based on transaction volume, query frequency, or complexity. Any change to scope is agreed in writing before work proceeds. There is no scenario where you receive an invoice you did not approve in advance."
      }
    },
    {
      "@type": "Question",
      "name": "What happens if HMRC contacts us or opens a tax investigation?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "A2Z handles HMRC correspondence directly on your behalf. If an enquiry opens, your dedicated team manages the process from the initial HMRC letter through to resolution. The approach is preventative first: filings are prepared to Big 4 audit standards so discrepancies that typically trigger HMRC attention are caught before submission. From 1 April 2026, HMRC Corporation Tax late-filing penalties doubled — A2Z's zero missed deadline record means clients are not exposed to that risk. A2Z also offers a dedicated HMRC Tax Investigations and Dispute Resolution service."
      }
    },
    {
      "@type": "Question",
      "name": "We are based outside Aberdeen. Can A2Z Accounting still work with us?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. A2Z serves businesses across Scotland, England, and Wales through a secure client portal, with no requirement for in-person meetings. Location is not a factor. The firm is structured around industry specialists, so the right sector expertise is available to any client regardless of where they are based."
      }
    }
  ]
}
</script>

<script>
const observer = new IntersectionObserver(
  (entries) =>
  entries.forEach((e) => {
    if (e.isIntersecting) {
      e.target.classList.add("visible");
      observer.unobserve(e.target);
    }
  }), {
    threshold: 0.08,
    rootMargin: "0px 0px -24px 0px"
  },
);
document.querySelectorAll(".reveal").forEach((el) => observer.observe(el));

// Story chain — bidirectional dot progress + fire-once text reveal
(function() {
  const spItems = document.querySelectorAll(".sp-item");
  const progItems = document.querySelectorAll(".sp-prog-item");
  const progFill = document.querySelector(".sp-prog-fill");
  const storySection = document.querySelector(".story");
  if (!spItems.length) return;

  const chainIO = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        const idx = parseInt(entry.target.dataset.storyIdx, 10);
        if (entry.isIntersecting) {
          entry.target.classList.add("sp-active");
        } else {
          entry.target.classList.remove("sp-active");
        }
      });
    }, {
      threshold: 0.18,
      rootMargin: "0px 0px -20px 0px"
    },
  );
  spItems.forEach((item) => chainIO.observe(item));

  const textIO = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add("sp-revealed");
          textIO.unobserve(entry.target);
        }
      });
    }, {
      threshold: 0.18,
      rootMargin: "0px 0px -32px 0px"
    },
  );
  spItems.forEach((item) => textIO.observe(item));

  const focusIO = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        entry.target.classList.toggle("sp-focus", entry.isIntersecting);
      });
    }, {
      threshold: 0.45
    },
  );
  spItems.forEach((item) => focusIO.observe(item));

  if (progFill && storySection) {
    const syncProgress = () => {
      const rect = storySection.getBoundingClientRect();
      const usable = storySection.offsetHeight - window.innerHeight * 0.45;
      const progress = Math.max(
        0,
        Math.min(1, (-rect.top + window.innerHeight * 0.38) / usable),
      );
      progFill.style.height = progress * 100 + "%";

      let nearestIdx = 0;
      let nearestDistance = Infinity;
      const focusLine = window.innerHeight * 0.42;
      spItems.forEach((item, idx) => {
        const itemRect = item.getBoundingClientRect();
        const itemCenter = itemRect.top + itemRect.height * 0.45;
        const distance = Math.abs(itemCenter - focusLine);
        if (distance < nearestDistance) {
          nearestDistance = distance;
          nearestIdx = idx;
        }
      });

      progItems.forEach((item, idx) => {
        item.classList.toggle("sp-prog-active", idx <= nearestIdx);
        item.classList.toggle("sp-prog-current", idx === nearestIdx);
      });
    };
    window.addEventListener("scroll", syncProgress, {
      passive: true
    });
    window.addEventListener("resize", syncProgress);
    syncProgress();
  }
})();

// Guarantees — scroll-focus highlight (mobile only, bidirectional)
(function() {
  const guarRows = document.querySelectorAll(".guar-row");
  if (!guarRows.length) return;

  const io = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        entry.target.classList.toggle("guar-focus", entry.isIntersecting);
      });
    }, {
      threshold: 0.38,
      rootMargin: "-4% 0px -4% 0px"
    },
  );

  guarRows.forEach((row) => io.observe(row));
})();

// Dept pillars — hover+auto-shuffle on desktop, click accordion on tablet
(function() {
  const cGrid = document.querySelector(".c-grid");
  const cCols = Array.from(document.querySelectorAll(".c-col"));
  if (!cGrid || !cCols.length) return;

  const INTERVAL = 4200;
  let currentIdx = 0;
  let userHovering = false;
  let timer = null;

  function isTablet() {
    return window.innerWidth >= 641 && window.innerWidth <= 900;
  }

  function isDesktop() {
    return window.innerWidth > 900;
  }

  function activate(idx) {
    currentIdx = idx;
    cCols.forEach((c, i) => c.classList.toggle("expanded", i === idx));
  }

  function advance() {
    if (!userHovering) activate((currentIdx + 1) % cCols.length);
  }

  function startTimer() {
    clearInterval(timer);
    timer = setInterval(advance, INTERVAL);
  }

  cCols.forEach((col, i) => {
    col.addEventListener("mouseenter", () => {
      if (!isDesktop()) return;
      userHovering = true;
      activate(i);
    });

    col.addEventListener("click", () => {
      if (isDesktop()) return;
      const wasExpanded = col.classList.contains("expanded");
      cCols.forEach((c) => c.classList.remove("expanded"));
      if (!wasExpanded) col.classList.add("expanded");
    });
  });

  cGrid.addEventListener("mouseleave", () => {
    if (!isDesktop()) return;
    userHovering = false;
    startTimer();
  });

  function init() {
    if (isDesktop()) {
      cGrid.classList.add("has-hover");
      activate(0);
      startTimer();
    } else {
      cGrid.classList.remove("has-hover");
      clearInterval(timer);
      cCols.forEach((c) => c.classList.remove("expanded"));
      cCols[0] && cCols[0].classList.add("expanded");
    }
  }

  let resizeDebounce = null;
  window.addEventListener("resize", () => {
    clearTimeout(resizeDebounce);
    resizeDebounce = setTimeout(init, 150);
  });

  init();
})();
// FAQ accordion
(function() {
  const faqItems = document.querySelectorAll('.faq-item');
  if (!faqItems.length) return;

  faqItems.forEach(item => {
    const btn = item.querySelector('.faq-question');
    const answer = item.querySelector('.faq-answer');
    if (!btn || !answer) return;

    btn.addEventListener('click', () => {
      const isOpen = item.classList.contains('faq-open');

      // Close all
      faqItems.forEach(other => {
        other.classList.remove('faq-open');
        const otherBtn = other.querySelector('.faq-question');
        const otherAnswer = other.querySelector('.faq-answer');
        if (otherBtn) otherBtn.setAttribute('aria-expanded', 'false');
        if (otherAnswer) otherAnswer.style.maxHeight = '0';
      });

      // Toggle clicked
      if (!isOpen) {
        item.classList.add('faq-open');
        btn.setAttribute('aria-expanded', 'true');
        answer.style.maxHeight = answer.scrollHeight + 'px';
      }
    });
  });
})();
</script>

<?php get_footer(); ?>