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



/* ================== 
   TYPOGRAPHY SCALE
 =================== */
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

/* ================== 
  LAYOUT UTILITIES
 =================== */
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

/* ================== 
  BUTTONS
 =================== */

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

/* ==================
     HERO
 =================== */
.hero {
  background:
    linear-gradient(155deg, rgba(2, 8, 17, 0.9) 0%, rgba(3, 12, 26, 0.75) 50%, rgba(2, 9, 19, 0.92) 100%),
    url("https://a2zaccounting.co.uk/wp-content/uploads/2025/08/Home-Page-photo.webp");
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
  display: none !important;
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
  padding: clamp(80px, 8vw, 100px) clamp(24px, 5vw, 72px) clamp(100px, 10vw, 140px);
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



/* ====================================
     METRICS STRIP
  ==================================== */
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

/* ====================
  TEAM PULL-QUOTE BAND
========================*/  
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

/* Story section ÃƒÂ¢Ã¢â€šÂ¬Ã¢â‚¬Â founder journey header */
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

/* Story section ÃƒÂ¢Ã¢â€šÂ¬Ã¢â‚¬Â founder profile (right column) */
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


/* ==================
     GOOGLE REVIEWS
  */
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

/* ======================
     REVEAL ANIMATIONS
 ======================== */
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

/* =================
     FAQ SECTION
  =================== */
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
</style>

<!-- Google Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link
  href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;1,300;1,400;1,500&family=DM+Sans:wght@300;400;500&family=DM+Mono:wght@300;400&display=swap"
  rel="stylesheet" />

<!-- =============
   HERO
   ================ -->
<section class="hero">
  <!-- Right abstract: sweeping ribbon curves + angular corner form -->
  <div class="hero-deco-right" aria-hidden="true">
    <svg viewBox="0 0 500 800" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">

      <defs>

        <!-- Main Blue ÃƒÂ¢Ã¢â‚¬Â Ã¢â‚¬â„¢ Gold Gradient -->
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
    </svg>
  </div>
  <style>
    .hero {
      min-height: 680px !important;
      max-height: none !important;
      display: flex !important;
      align-items: center !important;
      justify-content: center !important;
    }
    .hero-inner {
      display: flex !important;
      flex-direction: column !important;
      align-items: center !important;
      justify-content: center !important;
      text-align: center !important;
      padding-top: 0 !important;
      padding-bottom: 0 !important;
      width: 100% !important;
      max-width: 1320px !important;
    }
    .hero-left {
      display: flex !important;
      flex-direction: column !important;
      align-items: center !important;
      text-align: center !important;
      max-width: 1320px !important;
      margin: 0 auto !important;
    }
    .hero-heading {
      text-align: center !important;
      font-size: clamp(3rem, 5vw, 4.5rem) !important;
      line-height: 1.1 !important;
      max-width: 100% !important;
      text-transform: capitalize !important;
    }
    .hero-sub {
      text-align: center !important;
      font-size: clamp(1.25rem, 2.5vw, 1.8rem) !important;
      font-weight: 400 !important;
      color: rgba(255, 255, 255, 0.9) !important;
      max-width: 800px !important;
      margin-left: auto !important;
      margin-right: auto !important;
    }
    .hero-ctas {
      justify-content: center !important;
      width: 100% !important;
    }
    .hero-ctas .btn {
      padding: clamp(16px, 2vw, 20px) clamp(32px, 4vw, 44px) !important;
      font-size: clamp(1.05rem, 1.2vw, 1.15rem) !important;
    }
    @media (max-width: 768px) {
      .hero-heading {
        font-size: clamp(2rem, 8vw, 3rem) !important;
      }
      .hero-sub {
        font-size: clamp(1.1rem, 4vw, 1.4rem) !important;
        padding-inline: 16px !important;
      }
      .hero-ctas.desk-res {
        flex-direction: column !important;
        align-items: center !important;
        gap: 16px !important;
      }
      .hero-ctas.desk-res .btn {
        width: 100% !important;
        max-width: 320px !important;
      }
    }
  </style>
  <div class="hero-inner">
    <div class="hero-left">
      <h1 class="hero-heading reveal d1">
        Most Accountants Keep You Compliant.<br /><em>We Help You Grow.</em>
      </h1>
      <h2 class="hero-sub reveal d2">
        Built and led by a Fellow Chartered Certified Accountant.
      </h2>

      <div class="hero-ctas desk-res reveal d4">
        <a href="/contact/" class="btn btn-gold">Speak With Our Team</a>
        <a href="/what-we-do-well/" class="btn btn-ghost-light">Our Services</a>
      </div>
    </div>

    <div class="hero-ctas mob-res reveal d4">
      <a href="/contact/" class="btn btn-gold">Speak With Our Team</a>
      <a href="/what-we-do-well/" class="btn btn-ghost-light">Our Services</a>
    </div>
  </div></div></section>

<!-- ==========================================
   UNIFIED FOUNDER SECTION (AS PER DESIGN)
========================================== -->
<style>
.founder-unified-sec {
  background: #ffffff;
  padding: 100px 24px;
  position: relative;
  overflow: hidden; /* For watermark */
}

.founder-unified-container {
  max-width: 1200px;
  margin: 0 auto;
  position: relative;
  z-index: 2;
}

/* 1. Navy Qualification Cards */
.fq-cards-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 32px;
  margin-bottom: 100px;
}

.fq-card {
  background: #112B45; /* Brand Navy */
  border-radius: 8px;
  padding: 40px 32px;
  color: #ffffff;
}

.fq-icon {
  width: 48px;
  height: 48px;
  background: #ffffff;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  margin-bottom: 24px;
  color: #112B45;
}

.fq-title {
  font-family: var(--sans);
  font-size: 1.15rem;
  font-weight: 700;
  text-transform: uppercase;
  margin-bottom: 20px;
  letter-spacing: 0.05em;
}

.fq-text {
  font-family: var(--sans);
  font-size: 1rem;
  line-height: 1.7;
  color: rgba(255, 255, 255, 0.9);
}

/* 2. Two-Column Layout */
.founder-split-grid {
  display: grid;
  grid-template-columns: 1.1fr 0.9fr;
  gap: 80px;
  align-items: flex-start;
}

/* Left Column */
.fm-eyebrow {
  font-family: var(--serif);
  font-size: 3rem;
  font-weight: 700;
  color: #000000;
  text-transform: uppercase;
  margin: 0 0 10px 0;
  line-height: 1.1;
  letter-spacing: 0.02em;
}

.fm-title {
  font-family: var(--serif);
  font-size: 3.2rem;
  font-weight: 700;
  color: var(--gold);
  text-transform: uppercase;
  margin: 0 0 40px 0;
  line-height: 1.1;
  letter-spacing: 0.02em;
}

.fm-body {
  font-family: var(--sans);
  font-size: 1.05rem;
  line-height: 1.8;
  color: #333333;
}

.fm-body p {
  margin-bottom: 28px;
}

.fm-dropcap::first-letter {
  float: left;
  font-family: var(--serif);
  font-size: 5rem;
  line-height: 0.75;
  padding-right: 16px;
  padding-top: 12px;
  color: var(--gold);
  font-weight: 700;
}

/* Right Column */
.fm-right-col {
  display: flex;
  flex-direction: column;
  gap: 40px;
  position: relative;
  z-index: 2;
  margin-top: 20px;
}

.fm-image-wrapper {
  position: relative;
  width: 100%;
  max-width: 450px;
  margin: 0 auto;
}

.fm-image-wrapper::before {
  content: '';
  position: absolute;
  top: -24px;
  bottom: 0;
  left: -24px;
  right: 0;
  border: 1.5px solid rgba(212, 168, 79, 0.35); /* Faint gold */
  z-index: 1;
}

.fm-image-wrapper::after {
  content: '';
  position: absolute;
  top: 0;
  bottom: -24px;
  left: 0;
  right: -24px;
  border: 1.5px solid rgba(212, 168, 79, 0.35); /* Faint gold */
  z-index: 1;
}

.fm-image-wrapper img {
  width: 100%;
  height: auto;
  display: block;
  position: relative;
  z-index: 2;
  background: #f1f5f9;
  border-radius: 2px;
  box-shadow: 0 20px 50px rgba(0,0,0,0.12); /* Softer, larger shadow */
}

.fm-floating-badge {
  position: absolute;
  bottom: -40px; /* Overlap the bottom edge */
  left: 50%;
  transform: translateX(-50%);
  background: #ffffff;
  padding: 24px 32px;
  border-radius: 6px;
  box-shadow: 0 15px 40px rgba(0,0,0,0.1);
  z-index: 3;
  width: 85%;
  max-width: 340px;
  border: 1px solid rgba(0,0,0,0.04);
}

.fm-badge-role {
  font-family: var(--sans);
  font-size: 0.8rem;
  font-weight: 700;
  color: var(--gold);
  text-transform: uppercase;
  letter-spacing: 0.1em;
  display: block;
  margin-bottom: 8px;
}

.fm-badge-name {
  font-family: var(--serif);
  font-size: 1.8rem;
  font-weight: 700;
  color: #000000;
  display: block;
  margin-bottom: 8px;
}

.fm-badge-desc {
  font-family: var(--sans);
  font-size: 0.85rem;
  color: #333333;
  line-height: 1.5;
  display: block;
}

/* Pull Quote */
.fm-pull-quote {
  position: relative;
  padding-top: 30px;
  max-width: 450px;
  margin: 20px auto 0 auto;
}

.fm-pull-quote::before {
  content: '\201D';
  position: absolute;
  top: -20px;
  left: -20px;
  font-family: var(--serif);
  font-size: 7rem;
  color: rgba(212, 168, 79, 0.2); /* Faint gold */
  line-height: 1;
  font-style: italic;
  font-weight: 700;
}

.fm-pull-quote p {
  font-family: var(--serif);
  font-size: 1.8rem;
  font-weight: 600;
  font-style: italic;
  color: #222222;
  line-height: 1.4;
  margin: 0;
  position: relative;
  z-index: 2;
}

.fm-pull-quote p span {
  color: var(--gold);
}

/* Background Watermark */
.a2z-watermark {
  position: absolute;
  bottom: -40px;
  right: -5%;
  font-family: var(--serif);
  font-size: 32rem;
  color: rgba(0,0,0,0.015);
  line-height: 1;
  z-index: 0;
  user-select: none;
  pointer-events: none;
  font-weight: 700;
  white-space: nowrap;
}

/* Responsive */
@media (max-width: 992px) {
  .fq-cards-grid {
    grid-template-columns: 1fr;
    gap: 20px;
  }
  .founder-split-grid {
    grid-template-columns: 1fr;
    gap: 60px;
  }
  .a2z-watermark {
    font-size: 20rem;
    bottom: -20px;
  }
}

@media (max-width: 768px) {
  .founder-unified-sec {
    padding: 60px 24px;
  }
  .fm-eyebrow {
    font-size: 2.2rem;
  }
  .fm-title {
    font-size: 2.4rem;
  }
  .fm-dropcap::first-letter {
    font-size: 4.5rem;
  }
  .fm-floating-badge {
    bottom: -30px;
    width: 90%;
    padding: 20px 24px;
  }
  .fm-pull-quote {
    margin-top: 60px;
    padding-left: 20px;
  }
  .fm-pull-quote p {
    font-size: 1.5rem;
  }
  .a2z-watermark {
    font-size: 14rem;
    bottom: 0;
    right: -10%;
  }
  .fm-image-wrapper::before {
    top: -12px;
    bottom: 0;
    left: -12px;
    right: 0;
  }
  .fm-image-wrapper::after {
    top: 0;
    bottom: -12px;
    left: 0;
    right: -12px;
  }
}
</style>

<section class="founder-unified-sec">
  <!-- Watermark -->
  <div class="a2z-watermark">A2Z</div>

  <div class="founder-unified-container">
    
    <!-- 1. Navy Qualification Cards -->
    <div class="fq-cards-grid reveal">
      <div class="fq-card">
        <div class="fq-icon">
          <!-- Graduation Cap SVG -->
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 10v6M2 10l10-5 10 5-10 5z"/><path d="M6 12v5c3 3 9 3 12 0v-5"/></svg>
        </div>
        <div class="fq-title">Qualifications</div>
        <div class="fq-text">Fellow Chartered Certified Accountant, the highest designation the profession awards, and a First Class Honours graduate in Economics from the University of Aberdeen.</div>
      </div>
      
      <div class="fq-card">
        <div class="fq-icon">
          <!-- Briefcase SVG -->
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>
        </div>
        <div class="fq-title">Corporate Background</div>
        <div class="fq-text">Built his corporate finance experience at Subsea 7, a multibillion-pound oil and gas contractor operating across international markets.</div>
      </div>

      <div class="fq-card">
        <div class="fq-icon">
          <!-- Check Badge SVG -->
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><polyline points="9 12 11 14 15 10"/></svg>
        </div>
        <div class="fq-title">Audit Discipline</div>
        <div class="fq-text">Operated to the full rigour of top-tier audit standards. The same discipline now governs every A2Z engagement.</div>
      </div>
    </div>

    <!-- 2. Two Column Layout -->
    <div class="founder-split-grid reveal d1">
      
      <!-- Left Column: The Message -->
      <div class="fm-left-col">
        <h3 class="fm-eyebrow">A Message From</h3>
        <h2 class="fm-title">Our Founder</h2>
        
        <div class="fm-body">
          <p class="fm-dropcap">I spent the early part of my career in corporate finance at a multibillion-pound oil and gas operator, where the accounts were audited to top-tier standards. That environment leaves no room for guesswork. It runs on precise systems, documented process, and discipline applied to every number. Those are the habits I built A2Z on.</p>
          <p>Beyond that world, I kept seeing the same thing. Growing businesses, ambitious and capable, were being underserved by accountants who treated compliance as a box to tick. Owners worn down by disorganised records, fees that appeared from nowhere, HMRC letters, and an advisor who saw the figures but never the business behind them.</p>
          <p>So I built A2Z differently. Specialist teams instead of one stretched generalist, layered quality control, and a senior review on every engagement before it reaches you. Proactive, accountable, and held to the standard I learned at corporate level.</p>
          <p>Tax is where most growing businesses quietly overpay. We plan it months ahead of every deadline, claim the reliefs you are entitled to, and structure your profits and income so the saving is captured while the window is still open, not calculated once it has closed.</p>
          <p>I oversee the standard on every client engagement myself. It is why 99% of our growth comes by referral, and when a client puts their own name behind a recommendation, we earn it on every engagement.</p>
        </div>
      </div>

      <!-- Right Column: Image and Pull Quote -->
      <div class="fm-right-col">
        
        <div class="fm-image-wrapper">
          <img src="https://a2zaccounting.co.uk/wp-content/uploads/2026/04/srahman.png" alt="Shabbir Rahman, Founder">
          
          <div class="fm-floating-badge">
            <span class="fm-badge-role">Founder & CEO</span>
            <span class="fm-badge-name">Shabbir Rahman</span>
            <span class="fm-badge-desc">The architect of the A2Z methodology.</span>
          </div>
        </div>

        <div class="fm-pull-quote">
          <p>"We did not set out to build another accounting firm. We built the <span>finance function</span> growing businesses deserve, and could rarely access until now."</p>
        </div>

      </div>

    </div>
  </div></div></section>
<!-- ==========================================
   COMBINED TEAM & METRICS SECTION
========================================== -->
<style>
.team-metrics-unified {
  background: linear-gradient(155deg, rgba(23, 40, 56, 0.95) 0%, rgba(13, 27, 42, 0.98) 100%), url('https://images.unsplash.com/photo-1521737604893-d14cc237f11d?auto=format&fit=crop&w=1600&q=80') center/cover no-repeat fixed;
  padding: 120px 24px;
  color: #ffffff;
}

.team-metrics-container {
  max-width: 1200px;
  margin: 0 auto;
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 100px;
  align-items: center;
}

/* Left side */
.tm-left .tm-eyebrow {
  font-family: var(--sans);
  font-size: 0.9rem;
  font-weight: 700;
  letter-spacing: 0.15em;
  color: var(--gold);
  text-transform: uppercase;
  margin-bottom: 24px;
}

.tm-left .tm-title {
  font-family: var(--serif);
  font-size: 3.5rem;
  font-weight: 600;
  line-height: 1.15;
  color: #ffffff;
  margin-bottom: 32px;
}

.tm-left .tm-title em {
  color: var(--gold);
  font-style: italic;
  display: block;
  font-weight: 500;
}

.tm-left .tm-desc {
  font-family: var(--sans);
  font-size: 1.15rem;
  line-height: 1.8;
  color: rgba(255, 255, 255, 0.95);
  max-width: 480px;
}

/* Right side - Metrics Grid */
.tm-metrics-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 16px;
}

.tm-metric-card {
  border: 1px solid rgba(255, 255, 255, 0.4);
  background: transparent;
  padding: 40px 32px;
  position: relative;
  display: flex;
  flex-direction: column;
  justify-content: center;
  min-height: 200px;
}

.tm-metric-num {
  font-family: var(--serif);
  font-size: 4rem;
  font-weight: 400;
  color: #ffffff;
  margin-bottom: 12px;
  line-height: 1;
}

.tm-metric-num span.small {
  font-size: 2.5rem;
  vertical-align: baseline;
}

.tm-metric-label {
  font-family: var(--sans);
  font-size: 0.75rem;
  font-weight: 700;
  letter-spacing: 0.12em;
  color: rgba(255, 255, 255, 0.85);
  text-transform: uppercase;
  line-height: 1.4;
}

.tm-metric-icon {
  position: absolute;
  top: 32px;
  right: 32px;
  opacity: 0.2;
}

.tm-metric-icon img {
  width: 48px;
  height: 48px;
  filter: invert(1);
}

/* Responsive */
@media (max-width: 1024px) {
  .team-metrics-container {
    gap: 60px;
  }
}

@media (max-width: 992px) {
  .team-metrics-container {
    grid-template-columns: 1fr;
    gap: 60px;
  }
  .tm-left .tm-title {
    font-size: 3rem;
  }
}

@media (max-width: 600px) {
  .tm-metrics-grid {
    grid-template-columns: 1fr;
  }
  .team-metrics-unified {
    padding: 80px 24px;
  }
}
</style>

<section class="team-metrics-unified">
  <div class="team-metrics-container">
    
    <!-- Left Column: Text -->
    <div class="tm-left reveal">
      <div class="tm-eyebrow">The Team Behind Your Numbers</div>
      <h2 class="tm-title">
        A Specialist For<br>
        <em>Every Part Of Your<br>Finances</em>
      </h2>
      <p class="tm-desc">
        17 of us and growing, with dedicated people for bookkeeping, VAT, payroll, accounts and tax. Work never waits behind one person, so you get speed, depth and quality on every job.
      </p>
    </div>

    <!-- Right Column: Metrics Grid -->
    <div class="tm-metrics-grid reveal d1">
      
      <!-- Metric 1 -->
      <div class="tm-metric-card">
        <div class="tm-metric-icon">
          <!-- Trend Up SVG -->
          <img src="https://cdn.jsdelivr.net/npm/lucide-static@0.326.0/icons/trending-up.svg" alt="Trending Up">
        </div>
        <div class="tm-metric-num"><span class="metric-num">750</span><span class="small">+</span></div>
        <div class="tm-metric-label">Businesses Supported</div>
      </div>

      <!-- Metric 2 -->
      <div class="tm-metric-card">
        <div class="tm-metric-icon">
          <!-- Verified Badge SVG -->
          <img src="https://cdn.jsdelivr.net/npm/lucide-static@0.326.0/icons/badge-check.svg" alt="Verified">
        </div>
        <div class="tm-metric-num"><span class="metric-num">100</span><span class="small">%</span></div>
        <div class="tm-metric-label">Client Satisfaction</div>
      </div>

      <!-- Metric 3 -->
      <div class="tm-metric-card">
        <div class="tm-metric-icon">
          <!-- Clock SVG -->
          <img src="https://cdn.jsdelivr.net/npm/lucide-static@0.326.0/icons/clock.svg" alt="Clock">
        </div>
        <div class="tm-metric-num"><span class="metric-num">0</span></div>
        <div class="tm-metric-label">Missed Deadlines,<br>Ever</div>
      </div>

      <!-- Metric 4 -->
      <div class="tm-metric-card">
        <div class="tm-metric-icon">
          <!-- Gavel SVG -->
          <img src="https://cdn.jsdelivr.net/npm/lucide-static@0.326.0/icons/gavel.svg" alt="Gavel">
        </div>
        <div class="tm-metric-num"><span class="metric-num">Â£0</span></div>
        <div class="tm-metric-label">HMRC Penalties, Ever</div>
      </div>

    </div>
  </div></div></section>

<script>
  /* Number Counter Animation for Metrics */
  document.addEventListener('DOMContentLoaded', function() {
    const counters = document.querySelectorAll('.metric-num');
    
    const animateCounter = (el) => {
      if (el.classList.contains('counted')) return;
      el.classList.add('counted');
      
      const text = el.textContent.trim();
      const match = text.match(/^([^0-9]*)([0-9,.]+)([^0-9]*)$/);
      if (!match) return;
      
      const prefix = match[1] || '';
      const target = parseFloat(match[2].replace(/,/g, ''));
      const suffix = match[3] || '';
      
      if (target === 0) return; // Don't animate 0
      
      const duration = 2000;
      const startTime = performance.now();
      
      // Temporarily set to 0 before animation starts
      el.textContent = prefix + '0' + suffix;
      
      const update = (currentTime) => {
        const elapsed = currentTime - startTime;
        const progress = Math.min(elapsed / duration, 1);
        
        // easeOutExpo
        const ease = progress === 1 ? 1 : 1 - Math.pow(2, -10 * progress);
        const current = Math.floor(ease * target);
        
        el.textContent = prefix + current + suffix;
        
        if (progress < 1) {
          requestAnimationFrame(update);
        } else {
          el.textContent = prefix + target + suffix;
        }
      };
      requestAnimationFrame(update);
    };
    
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          animateCounter(entry.target);
        }
      });
    }, { threshold: 0.5 });
    
    counters.forEach(counter => observer.observe(counter));
  });

</script>

<script>
    /*  a2zvt-new hero testimonials slider (3-column)  */
    document.addEventListener('DOMContentLoaded', function() {
        var slider = document.getElementById('a2zvt-new');
        if (!slider) return;
        var track = document.getElementById('a2zvt-new-track');
        if (!track) return;
        var prevBtn = document.querySelector('.a2zvt-new-global-prev');
        var nextBtn = document.querySelector('.a2zvt-new-global-next');
        var busy = false;

        function updateCenter() {
            var slides = track.querySelectorAll('.a2zvt-new__slide');
            slides.forEach(function(s) { s.classList.remove('is-center'); });
            var visible = 3;
            if (window.innerWidth <= 600) visible = 1;
            else if (window.innerWidth <= 900) visible = 2;
            var centerIdx = (visible === 3) ? 1 : 0;
            if (slides[centerIdx]) slides[centerIdx].classList.add('is-center');
        }

        function moveNext() {
            if (busy) return;
            busy = true;
            var slides = track.querySelectorAll('.a2zvt-new__slide');
            var first = slides[0];
            var slideWidth = first.offsetWidth + (window.innerWidth <= 600 ? 0 : 24);
            track.style.transition = 'transform 0.6s cubic-bezier(0.25, 1, 0.5, 1)';
            track.style.transform = 'translate3d(-' + slideWidth + 'px, 0, 0)';
            slides.forEach(function(s) { s.classList.remove('is-center'); });
            var visible = (window.innerWidth <= 600) ? 1 : ((window.innerWidth <= 900) ? 2 : 3);
            var centerIdx = (visible === 3) ? 2 : 1;
            if (slides[centerIdx]) slides[centerIdx].classList.add('is-center');
            setTimeout(function() {
                track.style.transition = 'none';
                track.appendChild(first);
                track.style.transform = 'translate3d(0, 0, 0)';
                void track.offsetWidth;
                busy = false;
            }, 600);
        }

        function movePrev() {
            if (busy) return;
            busy = true;
            var slides = track.querySelectorAll('.a2zvt-new__slide');
            var last = slides[slides.length - 1];
            var slideWidth = last.offsetWidth + (window.innerWidth <= 600 ? 0 : 24);
            track.style.transition = 'none';
            track.insertBefore(last, slides[0]);
            track.style.transform = 'translate3d(-' + slideWidth + 'px, 0, 0)';
            void track.offsetWidth;
            var visible = (window.innerWidth <= 600) ? 1 : ((window.innerWidth <= 900) ? 2 : 3);
            var centerIdx = (visible === 3) ? 1 : 0;
            var newSlides = track.querySelectorAll('.a2zvt-new__slide');
            newSlides.forEach(function(s) { s.classList.remove('is-center'); });
            if (newSlides[centerIdx]) newSlides[centerIdx].classList.add('is-center');
            track.style.transition = 'transform 0.6s cubic-bezier(0.25, 1, 0.5, 1)';
            track.style.transform = 'translate3d(0, 0, 0)';
            setTimeout(function() {
                busy = false;
            }, 600);
        }

        updateCenter();
        if (prevBtn) prevBtn.addEventListener('click', function(e) { e.preventDefault(); movePrev(); });
        if (nextBtn) nextBtn.addEventListener('click', function(e) { e.preventDefault(); moveNext(); });
        var timer = setInterval(moveNext, 6000);
        var outer = document.querySelector('.a2zvt-new-outer');
        if (outer) {
            outer.addEventListener('pointerenter', function() { clearInterval(timer); });
            outer.addEventListener('pointerleave', function() {
                timer = setInterval(moveNext, 6000);
            });
        }
        window.addEventListener('resize', updateCenter);
    });


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



<!-- ==========================================
   THE DIFFERENCES SECTION
========================================== -->
<style>
.diff-section {
  padding: 100px 24px;
  background: #ffffff;
}
.diff-header {
  text-align: center;
  margin-bottom: 60px;
}
.diff-header h2 {
  font-family: var(--serif);
  font-size: 3.5rem;
  font-weight: 700;
  color: #000000;
  line-height: 1.15;
}
.diff-header h2 em {
  color: var(--gold);
  font-style: italic;
  display: block;
}

/* Grid Table */
.diff-grid {
  display: grid;
  grid-template-columns: 28% 34% 38%;
  max-width: 1000px;
  margin: 0 auto 60px auto;
}
.diff-cell {
  padding: 24px 32px;
  display: flex;
  align-items: center;
  border-bottom: 1px solid rgba(0,0,0,0.08);
}

/* Column Backgrounds */
.diff-cell.bg-grey {
  background: #f4f5f7;
}
.diff-cell.bg-white {
  background: #ffffff;
}
.diff-cell.a2z {
  background: #fdfaf4;
  gap: 16px;
  font-family: var(--sans);
  font-weight: 600;
  font-size: 1.05rem;
  color: #111;
}

/* Cell Specifics */
.diff-cell.head {
  font-family: var(--sans);
  font-weight: 700;
  font-size: 1.1rem;
  color: #111;
  border-bottom: 1px solid rgba(0,0,0,0.08);
}
.diff-cell.head.a2z {
  color: #b8751e; /* deeper gold for header */
  border-top: 2px solid var(--gold);
}
.diff-cell.last.a2z {
  border-bottom: 2px solid var(--gold);
}
.diff-cell.criteria {
  font-family: var(--sans);
  font-size: 0.85rem;
  font-weight: 600;
  text-transform: uppercase;
  color: #333;
}
.diff-cell.typical {
  font-family: var(--sans);
  font-size: 1.05rem;
  color: #444;
}

/* Icons */
.diff-cell.a2z img {
  width: 20px;
  height: 20px;
  /* Gold filter to match #b8751e roughly */
  filter: invert(47%) sepia(61%) saturate(735%) hue-rotate(345deg) brightness(94%) contrast(92%);
}

/* Badges Footer */
.diff-badges {
  display: flex;
  justify-content: center;
  gap: 24px;
  max-width: 1100px;
  margin: 0 auto;
  flex-wrap: wrap;
}
.diff-badge {
  background: #ffffff;
  border: 1px solid rgba(0,0,0,0.06);
  border-radius: 8px;
  padding: 16px 24px;
  display: flex;
  align-items: center;
  gap: 16px;
  box-shadow: 0 4px 20px rgba(0,0,0,0.04);
}
.db-icon {
  background: #dcb34d;
  width: 40px;
  height: 40px;
  border-radius: 8px;
  display: flex;
  align-items: center;
  justify-content: center;
}
.db-icon img {
  width: 20px;
  height: 20px;
  filter: invert(1);
}
.db-text {
  display: flex;
  flex-direction: column;
  gap: 2px;
}
.db-lbl {
  font-family: var(--sans);
  font-size: 0.7rem;
  font-weight: 700;
  letter-spacing: 0.1em;
  color: #b8751e;
  text-transform: uppercase;
}
.db-val {
  font-family: var(--sans);
  font-size: 0.95rem;
  font-weight: 700;
  color: #111;
  text-transform: uppercase;
}

/* Responsive */
@media (max-width: 900px) {
  .diff-grid {
    grid-template-columns: 1fr;
  }
  .diff-cell.head {
    display: none; /* Hide table headers on mobile */
  }
  .diff-cell {
    padding: 16px;
    border-bottom: none;
  }
  .diff-cell.criteria {
    padding-top: 32px;
    padding-bottom: 8px;
    font-size: 1rem;
    color: var(--gold);
  }
  .diff-cell.typical {
    padding-top: 0;
    padding-bottom: 12px;
  }
  .diff-cell.a2z {
    padding-top: 16px;
    padding-bottom: 16px;
    border-radius: 8px;
    margin: 0 16px;
    border: 1px solid var(--gold);
  }
  .diff-cell.last.a2z {
    border-bottom: 1px solid var(--gold); /* override */
  }
}
</style>

<section class="diff-section">
  <div class="diff-header reveal">
    <h2>
      The Differences Most Firms<br>
      <em>Don't Disclose</em>
    </h2>
  </div>

  <div class="diff-grid reveal d1">
    <!-- Header -->
    <div class="diff-cell head bg-grey">Criteria</div>
    <div class="diff-cell head bg-grey">A Typical Firm</div>
    <div class="diff-cell head a2z"><img src="https://cdn.jsdelivr.net/npm/lucide-static@0.326.0/icons/badge-check.svg" alt="Check"> A2Z Accounting</div>

    <!-- Row 1 -->
    <div class="diff-cell criteria bg-white">WHO HANDLES IT</div>
    <div class="diff-cell typical bg-white">One stretched generalist</div>
    <div class="diff-cell a2z"><img src="https://cdn.jsdelivr.net/npm/lucide-static@0.326.0/icons/users.svg" alt="Users"> A dedicated specialist team</div>

    <!-- Row 2 -->
    <div class="diff-cell criteria bg-grey">QUALIFICATION</div>
    <div class="diff-cell typical bg-grey">Often a junior, undisclosed</div>
    <div class="diff-cell a2z"><img src="https://cdn.jsdelivr.net/npm/lucide-static@0.326.0/icons/graduation-cap.svg" alt="Graduation Cap"> Reviewed to FCCA standard</div>

    <!-- Row 3 -->
    <div class="diff-cell criteria bg-white">RESPONSE TIME</div>
    <div class="diff-cell typical bg-white">Days, or no reply</div>
    <div class="diff-cell a2z"><img src="https://cdn.jsdelivr.net/npm/lucide-static@0.326.0/icons/clock.svg" alt="Clock"> Same-day before midday</div>

    <!-- Row 4 -->
    <div class="diff-cell criteria bg-grey">DEADLINES</div>
    <div class="diff-cell typical bg-grey">Reactive, last minute</div>
    <div class="diff-cell a2z"><img src="https://cdn.jsdelivr.net/npm/lucide-static@0.326.0/icons/calendar-check.svg" alt="Calendar Check"> Tracked early. Zero missed, ever</div>

    <!-- Row 5 -->
    <div class="diff-cell criteria bg-white">TAX PLANNING</div>
    <div class="diff-cell typical bg-white">You ask, they react</div>
    <div class="diff-cell a2z"><img src="https://cdn.jsdelivr.net/npm/lucide-static@0.326.0/icons/trending-up.svg" alt="Trending Up"> Planned months ahead</div>

    <!-- Row 6 -->
    <div class="diff-cell criteria bg-grey">FEES</div>
    <div class="diff-cell typical bg-grey">Hourly, scope creeps</div>
    <div class="diff-cell a2z"><img src="https://cdn.jsdelivr.net/npm/lucide-static@0.326.0/icons/banknote.svg" alt="Banknote"> One fixed fee, in writing</div>

    <!-- Row 7 -->
    <div class="diff-cell criteria bg-white" style="border-bottom: none;">SECTOR KNOWLEDGE</div>
    <div class="diff-cell typical bg-white" style="border-bottom: none;">Generalist, applied broadly</div>
    <div class="diff-cell a2z last"><img src="https://cdn.jsdelivr.net/npm/lucide-static@0.326.0/icons/landmark.svg" alt="Landmark"> Specialists in your sector</div>
  </div>

  <div class="diff-badges reveal d2">
    <!-- Badge 1 -->
    <div class="diff-badge">
      <div class="db-icon">
        <img src="https://cdn.jsdelivr.net/npm/lucide-static@0.326.0/icons/shield-check.svg" alt="Shield">
      </div>
      <div class="db-text">
        <span class="db-lbl">PROFESSIONAL INDEMNITY</span>
        <span class="db-val">INSURED</span>
      </div>
    </div>
    
    <!-- Badge 2 -->
    <div class="diff-badge">
      <div class="db-icon">
        <img src="https://cdn.jsdelivr.net/npm/lucide-static@0.326.0/icons/landmark.svg" alt="Bank">
      </div>
      <div class="db-text">
        <span class="db-lbl">REGULATED BY</span>
        <span class="db-val">THE ACCA</span>
      </div>
    </div>

    <!-- Badge 3 -->
    <div class="diff-badge">
      <div class="db-icon">
        <img src="https://cdn.jsdelivr.net/npm/lucide-static@0.326.0/icons/file-text.svg" alt="File">
      </div>
      <div class="db-text">
        <span class="db-lbl">XERO, QUICKBOOKS AND</span>
        <span class="db-val">DEXT CERTIFIED</span>
      </div>
    </div>
  </div></div></section>







<!-- CSS INJECTION FOR TESTIMONIALS REDESIGN -->
<style>
.testimonials-dark { background-color: #102131; padding: 100px 0; overflow: hidden; position: relative; min-height: 789px; display: flex; flex-direction: column; justify-content: center; }
.testimonials-dark-inner { max-width: 1400px; margin: 0 auto; width: 100%; }
.testimonials-dark-head { text-align: center; margin-bottom: 60px; padding: 0 24px; }
.testimonials-dark-head h2 { font-family: var(--serif); font-size: clamp(2.5rem, 4vw, 3.5rem); font-weight: 700; color: #ffffff; line-height: 1.15; margin-bottom: 16px; text-align: center; }
.testimonials-dark-head h2 em { color: var(--gold); font-style: normal; }
.testimonials-dark-desc { color: rgba(255, 255, 255, 0.85); font-size: 1.125rem; max-width: 720px; margin: 0 auto !important; line-height: 1.6; text-align: center; }
.a2zvt-new-outer { position: relative; max-width: 1106px; margin: 0 auto; padding: 0; height: 400px; }
.a2zvt-new-clip { overflow: hidden; padding: 60px 0; margin: -60px 0; }
.a2zvt-new { overflow: visible !important; }
.a2zvt-new__track { display: flex; transition: transform 0.6s cubic-bezier(0.25, 1, 0.5, 1); align-items: center; }
.a2zvt-new__slide { flex: 0 0 229px; width: 229px; margin-right: 24px; transition: all 0.6s cubic-bezier(0.25, 1, 0.5, 1); opacity: 1; position: relative; border-radius: 4.58px; overflow: hidden; border: 0.76px solid rgba(255,255,255,0.05); background: #000; }
.a2zvt-new__slide.is-center { flex: 0 0 600px; width: 600px; border-radius: 12px; border-width: 1px; z-index: 2; box-shadow: 0 20px 50px rgba(0,0,0,0.5); border-color: rgba(212,168,79,0.3); opacity: 1; }
.a2zvt-new__thumb { display: block; position: relative; width: 100%; aspect-ratio: 16/9; text-decoration: none; }
.a2zvt-new__thumb-img { width: 100%; height: 100%; object-fit: cover; transition: opacity 0.3s; }
.a2zvt-new__slide.is-center .a2zvt-new__thumb-img { opacity: 1; }
.a2zvt-new__thumb::after { content: ""; position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(to top, rgba(16,33,49,1) 0%, rgba(16,33,49,0.4) 50%, rgba(16,33,49,0) 100%); pointer-events: none; }
.a2zvt-new__play { position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 28px; height: 28px; background: var(--gold); border-radius: 50%; display: flex; align-items: center; justify-content: center; z-index: 3; box-shadow: 0 4px 15px rgba(0,0,0,0.3); transition: transform 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275), width 0.4s, height 0.4s; }
.a2zvt-new__slide.is-center .a2zvt-new__play { width: 72px; height: 72px; }
.a2zvt-new__play-icon-img { width: 12px; height: 12px; margin-left: 2px; filter: invert(13%) sepia(35%) saturate(542%) hue-rotate(170deg) brightness(90%) contrast(92%); transition: all 0.3s; }
.a2zvt-new__slide.is-center .a2zvt-new__play .a2zvt-new__play-icon-img { width: 32px; height: 32px; margin-left: 4px; }
.a2zvt-new__thumb:hover .a2zvt-new__play { transform: translate(-50%, -50%) scale(1.15); background: #e6b95b; }
.a2zvt-new__body { position: absolute; bottom: 0; left: 0; width: 100%; padding: 12px; z-index: 3; pointer-events: none; }
.a2zvt-new__slide.is-center .a2zvt-new__body { padding: 32px; }
.a2zvt-new__author { display: flex; align-items: center; gap: 8px; }
.a2zvt-new__slide.is-center .a2zvt-new__author { gap: 16px; }
.a2zvt-new__avatar { width: 20px; height: 20px; border-radius: 50%; border: 1px solid rgba(255,255,255,0.25); display: flex; align-items: center; justify-content: center; background: rgba(255,255,255,0.05); flex-shrink: 0; }
.a2zvt-new__slide.is-center .a2zvt-new__avatar { width: 44px; height: 44px; }
.a2zvt-new__avatar-img { width: 10px; height: 10px; filter: invert(1); opacity: 0.8; }
.a2zvt-new__slide.is-center .a2zvt-new__avatar-img { width: 20px; height: 20px; }
.a2zvt-new__name { color: #fff; font-family: var(--serif); font-size: 0.65rem; font-weight: 600; margin-bottom: 2px; }
.a2zvt-new__slide.is-center .a2zvt-new__name { font-size: 1.15rem; margin-bottom: 2px; }
.a2zvt-new__role { color: rgba(255,255,255,0.7); font-family: var(--sans); font-size: 0.45rem; line-height: 1.2; }
.a2zvt-new__slide.is-center .a2zvt-new__role { font-size: 0.8rem; line-height: 1.3; }
.a2zvt-new-global-prev, .a2zvt-new-global-next { position: absolute; top: 50%; transform: translateY(-50%); width: 44px; height: 44px; border-radius: 50%; background: #182f45; border: 1px solid rgba(255,255,255,0.1); display: flex; align-items: center; justify-content: center; cursor: pointer; z-index: 10; transition: all 0.3s; }
.a2zvt-new-global-prev:hover, .a2zvt-new-global-next:hover { background: #1e3a55; border-color: rgba(255,255,255,0.3); }
.a2zvt-new-global-prev { left: -70px; }
.a2zvt-new-global-next { right: -70px; }
.a2zvt-new-global-prev img, .a2zvt-new-global-next img { width: 20px; height: 20px; filter: invert(1); opacity: 0.8; }
@media (max-width: 900px) { .a2zvt-new__slide { flex: 0 0 calc(50% - 12px); } .a2zvt-new__slide.is-center { transform: scale(1); } }
@media (max-width: 600px) { .a2zvt-new-outer { padding: 0; } .a2zvt-new__slide { flex: 0 0 100%; margin-right: 0; transform: scale(1) !important; opacity: 1 !important; } .a2zvt-new-global-prev, .a2zvt-new-global-next { display: none; } }
.lity-close { display: none !important; }
.lity-iframe-container { background: transparent url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" width="50" height="50"><circle cx="50" cy="50" fill="none" stroke="%23d4a84f" stroke-width="8" r="35" stroke-dasharray="164.93 56.97"><animateTransform attributeName="transform" type="rotate" repeatCount="indefinite" dur="1s" values="0 50 50;360 50 50" keyTimes="0;1"></animateTransform></circle></svg>') no-repeat center center; }
</style>
<!-- =================================
   CLIENT TESTIMONIALS
====================================== -->
<section class="testimonials-dark">
  <div class="testimonials-dark-inner">
    <div class="testimonials-dark-head reveal">
      <h2>Clients Who No Longer<br><em>Worry About Their Accounts</em></h2>
      <p class="testimonials-dark-desc">Hear directly from business leaders who have entrusted A2Z with their complex accounting needs, allowing them to focus on growth.</p>
    </div>

                    <!-- VIDEO TESTIMONIALS SLIDER -->
                <div class="a2zvt-new-outer">
                    <button class="a2zvt-new-global-prev" aria-label="Previous"><img src="https://cdn.jsdelivr.net/npm/lucide-static@0.326.0/icons/chevron-left.svg" alt="Prev"></button>
                    <button class="a2zvt-new-global-next" aria-label="Next"><img src="https://cdn.jsdelivr.net/npm/lucide-static@0.326.0/icons/chevron-right.svg" alt="Next"></button>
                    <div class="a2zvt-new a2zh-rv a2zh-d3" id="a2zvt-new">
                    <div class="a2zvt-new-clip"><div class="a2zvt-new__track" id="a2zvt-new-track"><?php
$a2z_testimonials = [
    [
        'link' => 'https://www.loom.com/embed/8761cb23b0a34e558b8867204c69e68f?sid=03ed2529-3243-45c6-a8e8-cfe8dfdfbfdc',
        'thumb' => 'https://a2zaccounting.co.uk/wp-content/uploads/2025/06/Testimonial-ÃƒÂ¢Ã¢â€šÂ¬Ã¢â‚¬Å“-a2z-accounting-06-04-2025_12_21_PM-21.png',
        'name' => 'Kevin Smith',
        'role' => 'Owner, The Drouthy Cobbler &ndash; Elgin &amp; Spey Life &ndash; Forres'
    ],
    [
        'link' => 'https://www.loom.com/embed/7878b7d8ae564fb7822bcc706a5efc33?sid=9ba321ad-2b32-47d8-9b10-4c35befedbb4',
        'thumb' => 'https://a2zaccounting.co.uk/wp-content/uploads/2025/04/testi-img-1.jpg',
        'name' => 'Mrs. Rona Tonge',
        'role' => 'Managing Director, Golf View Hotel &ndash; Lossiemouth'
    ],
    [
        'link' => 'https://www.loom.com/embed/9caff76064d2408c8193cb5406ef69ea?sid=d94dc925-fc5a-4791-9d7f-ec17f8c61099',
        'thumb' => 'https://a2zaccounting.co.uk/wp-content/uploads/2025/06/3.png',
        'name' => 'Mr. Mohamed Ali',
        'role' => 'Property Tycoon &amp; Owner, MacAli Hotel Group &ndash; Elgin'
    ],
    [
        'link' => 'https://www.loom.com/embed/157bd97bdd42416497aab3ccf8de5843?sid=69be3f94-62e4-4707-a7a1-a62d331a205a',
        'thumb' => 'https://a2zaccounting.co.uk/wp-content/uploads/2025/06/4-1024x787.png',
        'name' => 'Behrouz Abolghassem',
        'role' => 'Owner, Little Italy &ndash; St Andrews'
    ],
    [
        'link' => 'https://www.loom.com/embed/6e7d53d784924c84a5240d390cf0e40b?sid=f5faf8ce-1882-4c2d-aaac-6fa91e6cafd4',
        'thumb' => 'https://a2zaccounting.co.uk/wp-content/uploads/2025/06/5.png',
        'name' => 'Christopher O&rsquo;Halloran',
        'role' => 'Owner, The Green Inn &ndash; Ballater'
    ],
    [
        'link' => 'https://www.loom.com/embed/0f25c7b69a2e4af4bac8d720949df52b?sid=6cca37ba-b380-4659-b3f7-492a6a0c270e',
        'thumb' => 'https://a2zaccounting.co.uk/wp-content/uploads/2025/06/6-1024x846.png',
        'name' => 'Khuram Qadir CEng',
        'role' => 'Founder &amp; Oil &amp; Gas Engineer, Cygnas Solutions &ndash; Aberdeen'
    ],
    [
        'link' => 'https://www.loom.com/embed/71e4d66232384e49ad4642d862c65f73?sid=1ceca9bb-b0bd-43e7-bf28-ed5a78eae4a3',
        'thumb' => 'https://a2zaccounting.co.uk/wp-content/uploads/2025/06/7.png',
        'name' => 'Mrs. Lisa Morrison',
        'role' => 'Treasurer, Seaforth Club &ndash; Nairn'
    ],
    [
        'link' => 'https://www.loom.com/embed/93fa845584ea405891cbf002857eff90?sid=577353ff-833d-468c-b323-13c2dd81bdc3',
        'thumb' => 'https://a2zaccounting.co.uk/wp-content/uploads/2025/06/8.webp',
        'name' => 'Mr. Hosam Yousef',
        'role' => 'Pharmacist &amp; Pharmacy Owner &ndash; Aberdeen'
    ],
    [
        'link' => 'https://www.loom.com/embed/6a780d36e37a4a308ffcfaa4b5c574d6?sid=8a02ccd9-9067-4a15-873b-8f2acd06dba7',
        'thumb' => 'https://a2zaccounting.co.uk/wp-content/uploads/2025/06/9.png',
        'name' => 'Lesia Robertson',
        'role' => 'Director, Mamma Mia &ndash; Banchory'
    ],
    [
        'link' => 'https://www.loom.com/embed/fd60672b40cf4103a1f5c30f0ddfe884?sid=652f2519-2d2e-4aa2-87a0-22522d95a0bf',
        'thumb' => 'https://a2zaccounting.co.uk/wp-content/uploads/2025/06/10.webp',
        'name' => 'Nurul Hoque Ali',
        'role' => 'Owner, Ca&rsquo;dora Diner &ndash; Elgin'
    ],
    [
        'link' => 'https://www.loom.com/embed/309b1b0e1364427ab246273db38147ab?sid=6ee63d23-fd48-4854-b0c0-6fe7456a6b20',
        'thumb' => 'https://a2zaccounting.co.uk/wp-content/uploads/2025/06/12-1024x859.webp',
        'name' => 'Ameer Aslam',
        'role' => 'Owner, Nickel &amp; Dime &ndash; Various'
    ],
    [
        'link' => 'https://www.loom.com/embed/3e5ec41c4e4c4373bf29d8eee84788cb?sid=68038677-011d-4bb0-994e-34249e4f662a',
        'thumb' => 'https://a2zaccounting.co.uk/wp-content/uploads/2025/06/13.png',
        'name' => 'Ms. Cassandara-Jane Thornton',
        'role' => 'Owner, West End Hotel &ndash; Nairn'
    ],
    [
        'link' => 'https://www.loom.com/embed/a541d08386e4430f9f24cf73c2d8555b?sid=99e89d9f-52da-4f65-899d-c649c587f5bb',
        'thumb' => 'https://a2zaccounting.co.uk/wp-content/uploads/2025/06/14.png',
        'name' => 'Dr. Hassan Abbas',
        'role' => 'Managing Director &amp; Consultant Cardiologist, Hourglass Wellbeing &ndash; Aberdeen'
    ],
    [
        'link' => 'https://www.loom.com/embed/921fccbea4f843c491d01bcbd43ecb59?sid=6c19fc7e-8e90-4300-ae8b-0dc869a26a81',
        'thumb' => 'https://a2zaccounting.co.uk/wp-content/uploads/2025/06/15.png',
        'name' => 'Hassan Nazer',
        'role' => 'British Film Director &amp; Entrepreneur &ndash; Aberdeen'
    ]
];

foreach ($a2z_testimonials as $t) {
    echo '
                        <div class="a2zvt-new__slide">
                            <a href="' . htmlspecialchars($t['link']) . '"
                                data-lity class="a2zvt-new__thumb"><img class="a2zvt-new__thumb-img"
                                    src="' . htmlspecialchars($t['thumb']) . '"
                                    alt="' . htmlspecialchars(strip_tags($t['name'])) . '" loading="lazy"><span class="a2zvt-new__play"><svg class="a2zvt-new__play-icon-img" viewBox="0 0 24 24" fill="#000" stroke="none"><polygon points="5 3 19 12 5 21 5 3"></polygon></svg></span></a>
                            <div class="a2zvt-new__body">
                                <div>
                                    <div class="a2zvt-new__author"><span class="a2zvt-new__avatar"><svg
                                                class="a2zvt-new__avatar-img" viewBox="0 0 24 24" fill="none" stroke="#000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
                                                <circle cx="12" cy="7" r="4"></circle>
                                            </svg></span>
                                        <div>
                                            <div class="a2zvt-new__name">' . $t['name'] . '</div>
                                            <div class="a2zvt-new__role">' . $t['role'] . '</div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>';
}
?>                 
                            </div></div></div></div></div></section>






<!-- ==============
   FAQ
=================== -->
<section class="faq" id="faq">
  <div class="faq-inner">
    <div class="faq-layout">

      <div class="faq-sidebar reveal">
        <h2 class="display-lg">
          Questions we get<br /><em>asked the most</em>
        </h2>
      </div>

      <div class="faq-list" itemscope itemtype="https://schema.org/FAQPage">

        <div class="faq-item reveal" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
          <button class="faq-question" aria-expanded="false" id="faq-btn-1">
            <h3 itemprop="name">We already have an accountant. Why would we switch?</h3>
            <span class="faq-toggle" aria-hidden="true"></span>
          </button>
          <div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" role="region" aria-labelledby="faq-btn-1">
            <div class="faq-answer-inner" itemprop="text">
              <p>Most clients who move to us were not getting bad service, they were getting reactive service. The same returns filed on time, but no planning, slow replies, and no one looking ahead on their behalf. We review your full position before we change anything, so the move is handled by us, with no disruption and nothing for you to chase.</p>
            </div>
          </div>
        </div>

        <div class="faq-item reveal d1" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
          <button class="faq-question" aria-expanded="false" id="faq-btn-2">
            <h3 itemprop="name">What does FCCA mean, and why does it matter?</h3>
            <span class="faq-toggle" aria-hidden="true"></span>
          </button>
          <div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" role="region" aria-labelledby="faq-btn-2">
            <div class="faq-answer-inner" itemprop="text">
              <p>FCCA is the Fellow grade of the Association of Chartered Certified Accountants, the profession's highest designation. In the UK, anyone can call themselves an accountant with no qualification at all. FCCA means your work is overseen by someone held to a regulated professional standard, the same rigour large companies expect from their auditors.</p>
            </div>
          </div>
        </div>

        <div class="faq-item reveal d1" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
          <button class="faq-question" aria-expanded="false" id="faq-btn-3">
            <h3 itemprop="name">How does the fixed fee actually work?</h3>
            <span class="faq-toggle" aria-hidden="true"></span>
          </button>
          <div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" role="region" aria-labelledby="faq-btn-3">
            <div class="faq-answer-inner" itemprop="text">
              <p>Your fee is agreed in writing before any work begins, and it does not change without your approval. One predictable monthly amount, with no billing for calls, emails or quick questions, and no year-end surprise invoice. If your needs change, we agree any adjustment with you first.</p>
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
              <p>We handle it. HMRC correspondence comes to us, is dealt with promptly, and most queries are resolved before they escalate. Because your filings are prepared to a high standard and ahead of time, investigations are rare, and if one does happen, you have a qualified team managing it for you.</p>
            </div>
          </div>
        </div>

        <div class="faq-item reveal d2" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
          <button class="faq-question" aria-expanded="false" id="faq-btn-5">
            <h3 itemprop="name">We are based outside Aberdeen. Can you still work with us?</h3>
            <span class="faq-toggle" aria-hidden="true"></span>
          </button>
          <div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" role="region" aria-labelledby="faq-btn-5">
            <div class="faq-answer-inner" itemprop="text">
              <p>Yes. We work with businesses across the UK. Everything runs digitally, cloud accounting, secure document sharing and video meetings, so you get the same service wherever you are. Responsiveness comes from how we are structured, not how close our office is.</p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div></div></section>




<section class="contact">
  <div class="contact-inner">
    <div class="cta-body reveal">
      <div class="cta-left">
        <span class="cta-label" style="display: block; margin-bottom: 16px; color: var(--gold); letter-spacing: 0.15em; font-size: 0.95rem; font-weight: 700; text-transform: uppercase;">Get started</span>
        <h2 class="contact-heading">
          Work with accountants<br /><em>who actually deliver.</em>
        </h2>
        <p style="color: rgba(255,255,255,0.85); font-size: clamp(1.1rem, 1.4vw, 1.25rem); line-height: 1.6; margin-top: 16px; max-width: 660px;">
          One conversation is enough to see the difference a specialist firm makes.
        </p>
        <div class="contact-ctas" style="display: flex; margin-top: 32px;">
          <a href="/contact/" class="btn btn-gold">Speak with a chartered accountant</a>
        </div>
        <p style="color: rgba(255,255,255,0.6); font-size: 0.95rem; line-height: 1.6; margin-top: 24px; max-width: 520px;">
          No obligation, and you speak directly with a chartered accountant, not a sales team. Prefer to call? <a href="tel:01224042961" style="color: var(--gold); text-decoration: none;">01224 042961</a>
        </p>
      </div>
      <div class="cta-right">
        <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?auto=format&fit=crop&w=800&q=80" alt="Professional accounting meeting" style="width: 100%; height: auto; border-radius: 4px; border: 1px solid rgba(212, 168, 79, 0.25); box-shadow: 0 20px 50px rgba(0,0,0,0.3);" />
      </div>
    </div>
</div>
  </div></div></section>




    <section class="reviews" id="google_reviews">
        <div class="reviews-inner">
            <div class="reviews-head a2zh-rv" style="display: flex; justify-content: center; text-align: center;">
                <div class="reviews-head-left">
                    <h2>Trusted by growing businesses<br /><em>across the UK</em></h2>
                </div>
            </div>

            <div class="reviews-widget a2zh-rv a2zh-d1">
                <?php echo do_shortcode('[trustindex no-registration=google]'); ?>
            </div>

            <div class="reviews-footer a2zh-rv a2zh-d2" style="display: flex; justify-content: center;">
                <div class="reviews-footer-logo">
                    <img src="https://cdn.trustindex.io/assets/platform/Google/icon.svg" alt="Google" />
                    <span>Verified Google Reviews</span>
                </div>
            </div>
        </div></div></section>


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
        "text": "Most businesses don't switch because their accountant does anything wrong ÃƒÂ¢Ã¢â€šÂ¬Ã¢â‚¬Â they switch because their accountant does only the minimum. A2Z operates differently: every client has a dedicated specialist team responsible for identifying issues and opportunities proactively, before you notice them. If your current firm is filing returns and not much else, that is the gap A2Z addresses."
      }
    },
    {
      "@type": "Question",
      "name": "What does FCCA mean and why does it matter for my business?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "In the UK, anyone can legally call themselves an accountant without any qualification. FCCA stands for Fellow of the Association of Chartered Certified Accountants ÃƒÂ¢Ã¢â€šÂ¬Ã¢â‚¬Â the highest level of ACCA membership, awarded to fewer than 50,000 practitioners worldwide. At A2Z, every piece of work is reviewed to FCCA standard by a Fellow who trained under Big 4 audit standards (Deloitte and EY) before it leaves the firm."
      }
    },
    {
      "@type": "Question",
      "name": "How does A2Z Accounting's fixed fee work ÃƒÂ¢Ã¢â€šÂ¬Ã¢â‚¬Â what is included?",
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
        "text": "A2Z handles HMRC correspondence directly on your behalf. If an enquiry opens, your dedicated team manages the process from the initial HMRC letter through to resolution. The approach is preventative first: filings are prepared to Big 4 audit standards so discrepancies that typically trigger HMRC attention are caught before submission. From 1 April 2026, HMRC Corporation Tax late-filing penalties doubled ÃƒÂ¢Ã¢â€šÂ¬Ã¢â‚¬Â A2Z's zero missed deadline record means clients are not exposed to that risk. A2Z also offers a dedicated HMRC Tax Investigations and Dispute Resolution service."
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






