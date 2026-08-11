<?php
/**
 * Template Name: About Us - NEW CSTM
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
  --sans: "Inter", system-ui, sans-serif;
  --mono: "Merriweather", Georgia, serif;

  --ease: cubic-bezier(0.25, 0.46, 0.45, 0.94);
}

.about-new-wrapper *,
.about-new-wrapper *::before,
.about-new-wrapper *::after {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

.about-new-wrapper {
  font-size: clamp(15px, 0.28vw + 14px, 16px);
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
    linear-gradient(155deg, rgba(0, 0, 0, 0.7) 0%, rgba(0, 0, 0, 0.75) 50%, rgba(0, 0, 0, 0.7) 100%), url("https://a2zaccounting.co.uk/wp-content/uploads/2025/08/Home-Page-photo.webp");
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
  color: #D4A850;
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
  color: #fff;
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
  .guar-inner {
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

  .hero-ctas {
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
  .opt-c-inner {
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


}

@media (max-width: 380px) {

  .hero-inner,
  .story,
  .principles,
  .layers,
  .opt-c,
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
  padding: clamp(60px, 11vw, 130px) clamp(14px, 4vw, 72px);
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
  max-width: 900px;
  margin: 0 auto;
  position: relative;
  z-index: 1;
}

.faq-header {
  text-align: center;
  margin-bottom: 60px;
}

.faq-header .display-lg {
  font-family: 'Playfair Display', serif;
  font-size: clamp(32px, 5vw, 62px);
  font-weight: 600;
  color: var(--ink);
  line-height: 1.2;
  text-align: center;
  text-transform: capitalize;
}

.faq-header .display-lg em {
  font-family: 'Playfair Display', serif;
  font-weight: 700;
  font-style: italic;
  font-size: clamp(32px, 5vw, 62px);
  line-height: 1.2;
  text-align: center;
  text-transform: capitalize;
  color: #D4A850;
}

.faq-list {
  display: flex;
  flex-direction: column;
  gap: 16px;
}

.faq-item {
  background: #ffffff;
  border-radius: 8px;
  box-shadow: 0 4px 20px rgba(0, 0, 0, 0.03);
  position: relative;
  overflow: hidden;
  border: 1px solid rgba(0, 0, 0, 0.04);
}

.faq-question {
  display: flex;
  justify-content: space-between;
  gap: 16px;
  align-items: center;
  padding: clamp(16px, 2vw, 24px) clamp(16px, 3vw, 32px);
  cursor: pointer;
  background: none;
  border: none;
  width: 100%;
  text-align: left;
  font-family: inherit;
}

.faq-question h3 {
  font-family: 'Manrope', sans-serif;
  font-weight: 500;
  font-size: clamp(16px, 2.5vw, 20px);
  line-height: 1.4;
  color: #071424;
  vertical-align: middle;
  margin: 0;
}

.faq-toggle {
  width: 24px;
  height: 24px;
  display: flex;
  align-items: center;
  justify-content: center;
  position: relative;
  flex-shrink: 0;
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
  width: 14px;
  height: 1.5px;
}

.faq-toggle::after {
  width: 1.5px;
  height: 14px;
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
  padding: 0 clamp(16px, 3vw, 32px) clamp(16px, 3vw, 32px) clamp(16px, 3vw, 32px);
}

.faq-answer-inner p {
  font-size: clamp(15px, 1.8vw, 20px);
  line-height: 1.6;
  color: #666;
  font-family: var(--sans);
  margin: 0;
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
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@700&family=Inter:wght@600;700&family=Libre+Caslon+Text:wght@400&family=Manrope:wght@500;600;700;800&family=Montserrat:wght@600&family=Playfair+Display:ital,wght@0,700;0,800;1,700&display=swap');
    .hero {
      min-height: 680px !important;
      max-height: none !important;
      display: flex !important;
      align-items: center !important;
      justify-content: center !important;
      background-size: cover !important;
      background-position: center center !important;
      background-repeat: no-repeat !important;
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
      margin: -40px auto 0 auto !important; /* Restore desktop shift */
    }
    .hero-heading {
      font-family: 'Playfair Display', serif !important;
      font-weight: 700 !important;
      font-size: 66px !important;
      letter-spacing: 0px !important;
      text-align: center !important;
      vertical-align: middle !important;
      line-height: 1.35 !important; /* Vertically a little more spaced */
      max-width: 100% !important;
      text-transform: capitalize !important;
      margin-bottom: 28px !important;
    }
    .hero-sub {
      font-family: 'Manrope', sans-serif !important;
      font-weight: 700 !important;
      font-size: 26px !important;
      letter-spacing: 0px !important;
      text-align: center !important;
      vertical-align: middle !important;
      color: rgba(255, 255, 255, 0.9) !important;
      max-width: 800px !important;
      margin-left: auto !important;
      margin-right: auto !important;
      margin-bottom: 40px !important;
      line-height: 1.6 !important;
    }
    .hero-ctas {
      justify-content: center !important;
      width: 100% !important;
    }
    .hero-ctas .btn {
      font-family: 'Inter', sans-serif !important;
      font-weight: 700 !important;
      font-size: 16px !important;
      line-height: 20px !important;
      letter-spacing: 1.4px !important;
      vertical-align: middle !important;
      text-transform: uppercase !important;
      height: 52px !important;
      padding: 16px 32px !important;
      border-radius: 7px !important;
    }
    .hero-ctas .btn-ghost-light {
      color: var(--gold) !important;
      border-color: var(--gold) !important;
    }
    .hero-ctas .btn-ghost-light:hover {
      background: rgba(212, 168, 79, 0.1) !important;
    }
    @media (max-width: 768px) {
      .hero {
        min-height: auto !important; /* Let height adjust dynamically on mobile */
        padding: 50px 16px !important; /* Compact mobile top and bottom spacing */
      }
      .hero-left {
        margin: 0 auto !important; /* Reset margin offset on mobile */
      }
      .hero-heading {
        font-size: clamp(2.3rem, 9.5vw, 3.6rem) !important;
        line-height: 1.25 !important;
        margin-bottom: 22px !important;
      }
      .hero-sub {
        font-size: clamp(1.15rem, 4.5vw, 1.45rem) !important;
        padding-inline: 16px !important;
        margin-bottom: 30px !important;
        line-height: 1.5 !important;
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
      <h1 class="hero-heading">
        Most Accountants Keep You Compliant.<br /><em>We Help You Grow.</em>
      </h1>
      <h2 class="hero-sub">
        Built and led by a Fellow Chartered Certified Accountant.
      </h2>

      <div class="hero-ctas desk-res">
        <a href="<?php echo esc_url(get_permalink()); ?>#a2z-enquire" class="btn btn-gold">Speak With Our Team</a>
        <a href="<?php echo esc_url(get_permalink()); ?>#a2z-feequote" class="btn btn-ghost-light">Get A Fee Estimate</a>
      </div>
    </div>

    <div class="hero-ctas mob-res">
      <a href="<?php echo esc_url(get_permalink()); ?>#a2z-enquire" class="btn btn-gold">Speak With Our Team</a>
      <a href="<?php echo esc_url(get_permalink()); ?>#a2z-feequote" class="btn btn-ghost-light">Get A Fee Estimate</a>
    </div>
  </div></div></section>

<!-- ==========================================
   UNIFIED FOUNDER SECTION (AS PER DESIGN)
========================================== -->
<style>
.founder-unified-sec {
  background: #ffffff;
  padding: clamp(60px, 8vw, 100px) 24px;
  position: relative;
  overflow: hidden; /* For watermark */
}

.founder-unified-container {
  max-width: 1278px;
  margin: 0 auto;
  position: relative;
  z-index: 2;
}

/* 1. Navy Qualification Cards */
.fq-cards-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: clamp(20px, 3vw, 32px);
  margin-bottom: clamp(60px, 8vw, 100px);
}

.fq-card {
  background: #112B45; /* Brand Navy */
  border-radius: 8px;
  padding: clamp(24px, 4vw, 40px) clamp(20px, 3vw, 32px);
  color: #ffffff;
}

.fq-icon {
  width: 40px;
  height: 40px;
  background: #ffffff;
  border-radius: 12.81px;
  display: flex;
  align-items: center;
  justify-content: center;
  margin-bottom: 24px;
  color: #112B45;
  opacity: 1;
}

.fq-title {
  font-family: 'Manrope', sans-serif;
  font-size: clamp(18px, 2.5vw, 22px);
  font-weight: 800;
  text-transform: uppercase;
  margin-bottom: 20px;
  letter-spacing: 0px;
  vertical-align: middle;
}

.fq-text {
  font-family: 'Manrope', sans-serif;
  font-size: clamp(14px, 1.5vw, 16px);
  font-weight: 600;
  line-height: 1.7;
  color: rgba(255, 255, 255, 0.9);
  letter-spacing: 0px;
  vertical-align: middle;
}

/* 2. Two-Column Layout */
.founder-split-grid {
  display: grid;
  max-width: 1224px;
  margin: 0 auto;
  grid-template-columns: 1.1fr 0.9fr;
  gap: clamp(40px, 6vw, 80px);
  align-items: flex-start;
}

/* Left Column */
.fm-eyebrow {
  font-family: 'Playfair Display', serif;
  font-size: clamp(2.2rem, 4vw, 3.2rem);
  font-weight: 800;
  color: #000000;
  line-height: 1.2;
  letter-spacing: 0px;
  vertical-align: middle;
  margin: 0 0 10px 0;
}

.fm-title {
  font-family: var(--serif);
  font-size: clamp(2.4rem, 4.5vw, 3.2rem);
  font-weight: 700;
  color: #D4A850;
  text-transform: uppercase;
  margin: 0 0 clamp(20px, 4vw, 40px) 0;
  line-height: 1.1;
  letter-spacing: 0.02em;
}

.fm-body {
  font-family: 'Manrope', sans-serif;
  font-size: clamp(16px, 2vw, 18px);
  font-weight: 500;
  line-height: 1.6;
  color: #000000;
  letter-spacing: 0px;
  vertical-align: middle;
}

.fm-body p {
  margin-bottom: clamp(16px, 2vw, 28px);
  font-family: 'Manrope', sans-serif !important;
}

.fm-dropcap::first-letter {
  float: left;
  font-family: 'Libre Caslon Text', serif;
  font-size: clamp(4.5rem, 8vw, 80px);
  font-weight: 400;
  color: #D4AF37;
  letter-spacing: 0px;
  vertical-align: middle;
  line-height: 0.75;
  padding-right: 16px;
  padding-top: 12px;
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
  max-width: 372px;
  aspect-ratio: 372 / 452;
  margin: 0 auto;
}

.fm-image-wrapper::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: calc(100% - clamp(12px, 4vw, 29px));
  height: calc(100% - clamp(12px, 4vw, 29px));
  border: 1.5px solid rgba(212, 168, 79, 0.35); /* Faint gold */
  z-index: 1;
}

.fm-image-wrapper::after {
  content: '';
  position: absolute;
  bottom: 0;
  right: 0;
  width: calc(100% - clamp(12px, 4vw, 29px));
  height: calc(100% - clamp(12px, 4vw, 29px));
  border: 1.5px solid rgba(212, 168, 79, 0.35); /* Faint gold */
  z-index: 1;
}

.fm-image-wrapper img {
  position: absolute;
  top: clamp(12px, 4vw, 29px);
  left: clamp(12px, 4vw, 29px);
  width: calc(100% - clamp(24px, 8vw, 58px));
  height: calc(100% - clamp(24px, 8vw, 58px));
  object-fit: cover;
  display: block;
  z-index: 2;
  background: #f1f5f9;
  border-radius: 2px;
  border: 0.91px solid #0000000D;
  box-shadow: 0 20px 50px rgba(0,0,0,0.12); /* Softer, larger shadow */
  opacity: 1;
}

.fm-floating-badge {
  position: absolute;
  bottom: clamp(-30px, -6vw, -52px);
  left: 50%;
  transform: translateX(-50%);
  background: #ffffff;
  padding: clamp(12px, 3vw, 16px) clamp(16px, 4vw, 20px);
  border-radius: 5.44px;
  box-shadow: 0 15px 40px rgba(0,0,0,0.1);
  z-index: 3;
  width: 90%;
  max-width: 217.65px;
  border: 0.91px solid rgba(212, 168, 79, 0.4);
  display: flex;
  flex-direction: column;
  justify-content: center;
}

.fm-badge-role {
  font-family: 'Manrope', sans-serif;
  font-size: clamp(10px, 1.5vw, 13.61px);
  font-weight: 800;
  color: #D4AF37;
  line-height: 1.5;
  letter-spacing: 1.36px;
  vertical-align: middle;
  text-transform: uppercase;
  display: block;
  margin-bottom: 2px;
}

.fm-badge-name {
  font-family: 'Libre Caslon Text', serif;
  font-size: clamp(16px, 2.5vw, 20.42px);
  font-weight: 700;
  color: #1A1C1E;
  line-height: 1.5;
  letter-spacing: 0px;
  vertical-align: middle;
  display: block;
  margin-bottom: 4px;
}

.fm-badge-desc {
  font-family: 'Manrope', sans-serif;
  font-size: clamp(10px, 1.5vw, 12.7px);
  font-weight: 600;
  color: #112B46;
  line-height: 1.5;
  letter-spacing: 0px;
  vertical-align: middle;
  display: block;
}

/* Pull Quote */
.fm-pull-quote {
  display: none;
  position: relative;
  padding-top: 50px;
  padding-bottom: 50px;
  max-width: 450px;
  margin: clamp(30px, 5vw, 60px) auto 0 auto;
  border-top: 1.02px solid #F2EBDD;
  border-bottom: 1.02px solid #F2EBDD;
}

.fm-pull-quote p::before {
  content: '\201D';
  position: absolute;
  top: -0.5em;
  left: -0.15em;
  font-family: var(--serif);
  font-size: clamp(4rem, 10vw, 7rem);
  color: rgba(212, 168, 79, 0.2); /* Faint gold */
  line-height: 1;
  font-style: italic;
  font-weight: 700;
  z-index: -1;
}


.fm-pull-quote p {
  font-family: 'Libre Caslon Text', serif;
  font-size: clamp(1.5rem, 3vw, 24.95px);
  font-weight: 500;
  font-style: italic;
  color: #222222;
  line-height: 1.4;
  margin: 0;
  position: relative;
  z-index: 2;
}

.fm-watermark-a2z {
  display: none;
  font-family: 'Libre Caslon Text', serif;
  font-size: clamp(80px, 20vw, 200px);
  font-weight: 400;
  font-style: normal;
  color: #f8f8f8;
  text-align: center;
  line-height: 1;
  letter-spacing: 0px;
  vertical-align: middle;
  pointer-events: none;
  user-select: none;
}

.fm-pull-quote p span {
  color: var(--gold);
  font-weight: 600;
}

/* Founder Details beneath Pull Quote */
.fm-details {
  display: flex;
  flex-direction: column;
  gap: 32px;
  max-width: 450px;
  margin: 30px auto 0 auto;
}

.fmd-item {
  display: flex;
  flex-direction: column;
  gap: 8px;
}

.fmd-title {
  font-family: var(--serif);
  font-size: clamp(15px, 1.8vw, 18px);
  font-weight: 700;
  text-transform: uppercase;
  color: var(--gold);
  letter-spacing: 0.12em;
  margin: 0;
  line-height: 1.2;
}

.fmd-text {
  font-family: 'Georgia', 'Times New Roman', serif;
  font-size: clamp(14px, 1.6vw, 16px);
  font-weight: 400;
  line-height: 1.65;
  color: #374151;
  margin: 0;
}




/* Responsive */
@media (max-width: 992px) {
  .fq-cards-grid {
    grid-template-columns: 1fr;
  }
  .founder-split-grid {
    grid-template-columns: 1fr;
  }
}

@media (max-width: 768px) {
  .fm-pull-quote {
    padding-left: 20px;
  }
}
</style>

<section class="founder-unified-sec">


  <div class="founder-unified-container">
    


    <!-- 2. Two Column Layout -->
    <div class="founder-split-grid reveal d1">
      
      <!-- Left Column: The Message -->
      <div class="fm-left-col">
        <h3 class="fm-eyebrow">A MESSAGE FROM</h3>
        <h2 class="fm-title">OUR FOUNDER</h2>
        
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

        <div class="fm-details">
          <div class="fmd-item">
            <h4 class="fmd-title">Qualifications</h4>
            <p class="fmd-text">Fellow Chartered Certified Accountant, the highest designation the profession awards, and a First Class Honours graduate in Economics from the University of Aberdeen.</p>
          </div>
          
          <div class="fmd-item">
            <h4 class="fmd-title">Corporate Background</h4>
            <p class="fmd-text">Built his corporate finance experience at Subsea 7, a multibillion-pound oil and gas contractor operating across international markets.</p>
          </div>

          <div class="fmd-item">
            <h4 class="fmd-title">Audit Discipline</h4>
            <p class="fmd-text">Operated to the full rigour of Big 4 audit standards, with the accounts audited by Deloitte and EY. The same discipline now governs every A2Z engagement.</p>
          </div>
        </div>

        <div class="fm-watermark-a2z">A2Z</div>

      </div>

    </div>
  </div></div></section>
<!-- ==========================================
   COMBINED TEAM & METRICS SECTION
========================================== -->
<style>
.team-metrics-unified {
  background: linear-gradient(155deg, rgba(12, 44, 74, 0.8) 0%, rgba(0, 30, 63, 0.8) 100%), url('https://images.unsplash.com/photo-1521737604893-d14cc237f11d?auto=format&fit=crop&w=1600&q=80') center/cover no-repeat fixed;
  padding: clamp(60px, 8vw, 120px) 24px;
  color: #ffffff;
}

.team-metrics-container {
  max-width: 1200px;
  margin: 0 auto;
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: clamp(40px, 6vw, 100px);
  align-items: center;
}

/* Left side */
.tm-left .tm-eyebrow {
  font-family: 'Manrope', sans-serif;
  font-size: clamp(14px, 1.5vw, 20px);
  font-weight: 700;
  color: #D4AF37;
  letter-spacing: 1px;
  line-height: 1.2;
  vertical-align: middle;
  text-transform: uppercase;
  margin-bottom: clamp(16px, 2vw, 24px);
}

.tm-left .tm-title {
  font-family: 'Libre Caslon Text', serif;
  font-size: clamp(32px, 4.5vw, 54px);
  font-weight: 600;
  line-height: 1.2;
  color: #ffffff;
  letter-spacing: 0px;
  vertical-align: middle;
  margin-bottom: clamp(20px, 3vw, 32px);
}

.tm-left .tm-title em {
  font-family: 'Libre Caslon Text', serif;
  font-size: clamp(32px, 4.5vw, 54px);
  font-weight: 600;
  font-style: italic;
  color: #D4AF37;
  line-height: 1;
  letter-spacing: 0px;
  vertical-align: middle;
  display: block;
}

.tm-left .tm-desc {
  font-family: 'Manrope', sans-serif;
  font-size: clamp(16px, 2vw, 22px);
  font-weight: 600;
  line-height: 1.5;
  color: #ffffff;
  letter-spacing: 0px;
  vertical-align: middle;
  max-width: 480px;
}

/* Right side - Metrics Grid */
.tm-metrics-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: clamp(12px, 2vw, 16px);
}

.tm-metric-card {
  width: 100%;
  min-height: clamp(130px, 15vw, 154px);
  border: 1px solid #FFFFFF;
  background: #112B46;
  padding: clamp(20px, 3vw, 32px);
  position: relative;
  display: flex;
  flex-direction: column;
  justify-content: center;
}

.tm-metric-num {
  font-family: 'Libre Caslon Text', serif;
  font-weight: 400;
  font-size: clamp(36px, 4.5vw, 48px);
  line-height: 1.2;
  letter-spacing: -1.2px;
  vertical-align: middle;
  color: #ffffff;
  margin-bottom: 8px;
}

.tm-metric-num span.small {
  font-size: clamp(1.8rem, 2.5vw, 2.5rem);
  vertical-align: baseline;
}

.tm-metric-label {
  font-family: 'Manrope', sans-serif;
  font-weight: 600;
  font-size: clamp(12px, 1.5vw, 14px);
  line-height: 1.2;
  letter-spacing: 1.4px;
  vertical-align: middle;
  text-transform: uppercase;
  color: #ffffff;
}

.tm-metric-icon {
  position: absolute;
  top: clamp(16px, 3vw, 32px);
  right: clamp(16px, 3vw, 32px);
  opacity: 0.2;
}

.tm-metric-icon img {
  width: clamp(32px, 4vw, 49px);
  height: clamp(32px, 4vw, 49px);
  filter: invert(1);
}

/* Responsive */
@media (max-width: 992px) {
  .team-metrics-container {
    grid-template-columns: 1fr;
  }
}

@media (max-width: 600px) {
  .tm-metrics-grid {
    grid-template-columns: 1fr;
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
        <div class="tm-metric-num"><span class="metric-num">£0</span></div>
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
            if (busy) return;
            var slides = track.querySelectorAll('.a2zvt-new__slide');
            slides.forEach(function(s) { s.classList.remove('is-center'); });
            if (slides[1]) slides[1].classList.add('is-center');
            track.style.transform = 'translate3d(0, 0, 0)';
        }

        function moveNext() {
            if (busy) return;
            busy = true;
            var slides = track.querySelectorAll('.a2zvt-new__slide');
            var first = slides[0];
            var margin = parseFloat(window.getComputedStyle(first).marginRight) || 0;
            var slideWidth = first.offsetWidth + margin;
            track.style.transition = 'transform 0.6s cubic-bezier(0.25, 1, 0.5, 1)';
            track.style.transform = 'translate3d(-' + slideWidth + 'px, 0, 0)';
            slides.forEach(function(s) { s.classList.remove('is-center'); });
            if (slides[2]) slides[2].classList.add('is-center');
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
            var margin = parseFloat(window.getComputedStyle(last).marginRight) || 0;
            var slideWidth = last.offsetWidth + margin;
            track.style.transition = 'none';
            track.insertBefore(last, slides[0]);
            track.style.transform = 'translate3d(-' + slideWidth + 'px, 0, 0)';
            void track.offsetWidth;
            var newSlides = track.querySelectorAll('.a2zvt-new__slide');
            newSlides.forEach(function(s) { s.classList.remove('is-center'); });
            if (newSlides[1]) newSlides[1].classList.add('is-center');
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
  padding: clamp(60px, 8vw, 100px) 24px;
  background: #ffffff;
}
.diff-header {
  text-align: center;
  margin-bottom: clamp(40px, 6vw, 60px);
}
.diff-header h2 {
  font-family: 'Playfair Display', serif;
  font-weight: 600;
  font-size: clamp(36px, 5vw, 62px);
  line-height: 1.2;
  letter-spacing: 0px;
  text-align: center;
  vertical-align: middle;
  text-transform: capitalize;
  color: #000000;
}
.diff-header h2 em {
  font-family: 'Playfair Display', serif;
  font-weight: 700;
  font-style: italic;
  font-size: clamp(36px, 5vw, 62px);
  line-height: 1.1;
  letter-spacing: 0px;
  text-align: center;
  vertical-align: middle;
  text-transform: capitalize;
  color: #D4A850;
  display: block;
}

/* Comparison Card Table (A2ZVSX) from A2Z_About_Comparison_v5.html */
.a2zvsx-card{position:relative;border-radius:20px;overflow:hidden;border:1px solid rgba(196,144,90,.5);box-shadow:0 28px 60px -30px rgba(13,43,66,.5);background-image:linear-gradient(180deg,#F9F7F3,#F0EBE1),radial-gradient(120% 80% at 82% 0%,rgba(196,144,90,.16),rgba(0,0,0,0) 55%),linear-gradient(168deg,#16456b 0%,#0D2B42 40%,#0a2236 100%);background-size:50.05% 100%,100% 100%,100% 100%;background-position:left top;background-repeat:no-repeat;max-width:720px;margin:0 auto clamp(40px, 6vw, 60px) auto;}
.a2zvsx-card::before{content:"";position:absolute;left:50%;top:0;bottom:34px;width:1px;background:linear-gradient(180deg,rgba(196,144,90,.95),rgba(196,144,90,.5));z-index:1;}
.a2zvsx-dia{position:absolute;z-index:1;bottom:22px;left:50%;margin-left:-6px;width:12px;height:12px;}
.a2zvsx-head{position:relative;z-index:2;display:grid;grid-template-columns:1fr 1fr;}
.a2zvsx-head span{text-align:center;font-size:13px;letter-spacing:.13em;text-transform:uppercase;font-weight:800;padding:19px 8px;}
.a2zvsx-hl{color:#5C636B;background:#ECE8E0;border-bottom:1px solid #DDD6C8;box-shadow:inset 0 -6px 10px -8px rgba(13,43,66,.18);}
.a2zvsx-hr{color:#0D2B42;background:linear-gradient(90deg,#C4905A,#D8AF82);border-bottom:1px solid rgba(255,255,255,.4);box-shadow:inset 0 1px 0 rgba(255,255,255,.45);}
.a2zvsx-vs{position:absolute;z-index:4;top:33px;left:50%;margin-left:-25px;width:50px;height:50px;border-radius:50%;background:linear-gradient(150deg,#D8AF82,#C4905A 55%,#B07D3C);border:2px solid #FFFFFF;box-shadow:0 7px 18px -6px rgba(13,43,66,.55);display:flex;align-items:center;justify-content:center;font-family:'Cormorant Garamond',Georgia,serif;font-style:italic;font-weight:600;font-size:23px;color:#0D2B42;line-height:1;padding-bottom:3px;}
.a2zvsx-item{position:relative;z-index:2;padding:23px 0 26px;}
.a2zvsx-head + .a2zvsx-item{padding-top:48px;}
.a2zvsx-item + .a2zvsx-item::before{content:"";position:absolute;top:0;left:7%;right:7%;height:1px;background:linear-gradient(90deg,rgba(13,43,66,.12) 0 46%,rgba(0,0,0,0) 46% 54%,rgba(196,144,90,.32) 54% 100%);}
.a2zvsx-pill{position:relative;z-index:3;display:table;margin:0 auto 16px;background:#FFFFFF;border:1px solid #D8AF82;border-radius:999px;padding:7px 18px;font-family:'DM Sans',Arial,sans-serif;font-size:11px;line-height:1.2;letter-spacing:.15em;text-transform:uppercase;font-weight:700;color:#0D2B42;white-space:nowrap;box-shadow:0 3px 12px -6px rgba(13,43,66,.35);}
.a2zvsx-cells{display:grid;grid-template-columns:1fr 1fr;align-items:start;}
.a2zvsx-l{padding:1px 16px 0 20px;text-align:left;color:#5C636B;font-size:15px;line-height:1.48;}
.a2zvsx-r{padding:0 20px 0 18px;text-align:left;color:#FFFFFF;font-size:15.5px;line-height:1.48;font-weight:600;letter-spacing:.005em;display:flex;align-items:flex-start;gap:9px;}
.a2zvsx-r svg{flex:0 0 20px;width:20px;height:20px;margin-top:1px;}
.a2zvsx-card .a2zvsx-item:last-of-type{padding-bottom:46px;}
@media (min-width:760px){
  .a2zvsx-head span{font-size:14.5px;padding:22px 8px;}
  .a2zvsx-vs{top:38px;}
  .a2zvsx-head + .a2zvsx-item{padding-top:54px;}
  .a2zvsx-item{padding:27px 0 30px;}
  .a2zvsx-item + .a2zvsx-item::before{left:6%;right:6%;}
  .a2zvsx-pill{font-size:11.5px;padding:8px 20px;}
  .a2zvsx-l{font-size:16.5px;padding:1px 28px 0 34px;}
  .a2zvsx-r{font-size:17.5px;padding:0 34px 0 30px;}
  .a2zvsx-card .a2zvsx-item:last-of-type{padding-bottom:52px;}
}

/* Badges Footer */
.diff-badges {
  display: flex;
  justify-content: center;
  gap: clamp(16px, 2vw, 24px);
  max-width: 1100px;
  margin: 0 auto;
  flex-wrap: wrap;
}
.diff-badge {
  background: #ffffff;
  border: 1px solid rgba(0,0,0,0.08);
  border-radius: 12px;
  padding: clamp(12px, 2vw, 16px) clamp(20px, 3vw, 32px);
  min-height: clamp(70px, 8vw, 85px);
  display: flex;
  align-items: center;
  gap: clamp(12px, 2vw, 16px);
  box-shadow: 0 4px 20px rgba(0,0,0,0.04);
}
.db-icon {
  background: #D4AF37;
  width: clamp(28px, 4vw, 32px);
  height: clamp(28px, 4vw, 32px);
  border-radius: 12px;
  display: flex;
  align-items: center;
  justify-content: center;
  box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.05);
}
.db-icon img {
  width: clamp(16px, 2vw, 20px);
  height: clamp(16px, 2vw, 20px);
  filter: invert(1);
}
.db-text {
  display: flex;
  flex-direction: column;
  gap: 2px;
}
.db-lbl {
  font-family: 'Inter', sans-serif;
  font-weight: 600;
  font-size: clamp(12px, 1.5vw, 16px);
  line-height: 1;
  letter-spacing: 1.2px;
  vertical-align: middle;
  text-transform: uppercase;
  color: #D4AF37;
}
.db-val {
  font-family: 'Montserrat', sans-serif;
  font-weight: 600;
  font-size: clamp(14px, 2vw, 18px);
  line-height: 1.2;
  letter-spacing: 0px;
  vertical-align: middle;
  text-transform: uppercase;
  color: #000000;
}

/* Responsive */
@media (max-width: 900px) {
  .diff-grid {
    display: flex;
    flex-direction: column;
    gap: 0 !important;
    padding: 0 16px;
    background: transparent !important;
    max-width: 520px;
    margin-left: auto;
    margin-right: auto;
  }
  .diff-cell.head {
    display: none !important; /* Hide table headers on mobile */
  }
  .diff-cell {
    padding: 16px 20px !important;
    border-bottom: none !important;
    box-sizing: border-box;
    width: 100% !important;
    min-height: auto !important;
  }
  
  /* Criteria Section (Card Header) */
  .diff-cell.criteria {
    background: #F3F4F6 !important;
    border-top: 1px solid #E5E7EB !important;
    border-left: 1px solid #E5E7EB !important;
    border-right: 1px solid #E5E7EB !important;
    border-bottom: 1px solid #E5E7EB !important;
    border-top-left-radius: 12px;
    border-top-right-radius: 12px;
    font-family: 'Manrope', sans-serif;
    font-weight: 700;
    font-size: 16px !important;
    letter-spacing: 0.8px;
    color: #1F2937 !important;
    margin-bottom: 0 !important;
    padding-top: 14px !important;
    padding-bottom: 14px !important;
  }

  /* Typical Firm Section (Card Body) */
  .diff-cell.typical {
    background: #FFFFFF !important;
    border-left: 1px solid #E5E7EB !important;
    border-right: 1px solid #E5E7EB !important;
    border-bottom: 1px solid #F3F4F6 !important; /* separation line inside card */
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: center;
    gap: 4px;
    font-family: 'Manrope', sans-serif;
    font-weight: 500;
    font-size: 15px !important;
    color: #374151 !important;
  }
  .diff-cell.typical::before {
    content: "A TYPICAL FIRM";
    display: block;
    font-size: 13px !important;
    font-weight: 700;
    letter-spacing: 0.5px;
    color: #6B7280;
  }

  /* A2Z Accounting Section (Highlighted Card Footer) */
  .diff-cell.a2z:not(.head) {
    background: #FAF8F5 !important; /* Soft cream background */
    border-top: none !important;
    border-left: 1px solid #E5E7EB !important;
    border-right: 1px solid #E5E7EB !important;
    border-bottom: 1px solid #E5E7EB !important;
    border-bottom-left-radius: 12px;
    border-bottom-right-radius: 12px;
    display: grid !important;
    grid-template-columns: auto 1fr;
    gap: 8px 12px;
    align-items: center;
    font-family: 'Manrope', sans-serif;
    font-weight: 600;
    font-size: 16px !important;
    color: #111827 !important;
    margin: 0 0 24px 0 !important; /* Space between cards */
  }
  .diff-cell.a2z:not(.head)::before {
    content: "A2Z ACCOUNTING";
    grid-column: 1 / -1;
    display: block;
    padding-left: 20px;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='%239B4500' stroke='%239B4500' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpath d='M3.85 8.62a4 4 0 0 1 4.78-4.77 4 4 0 0 1 6.74 0 4 4 0 0 1 4.78 4.78 4 4 0 0 1 0 6.74 4 4 0 0 1-4.77 4.78 4 4 0 0 1-6.75 0 4 4 0 0 1-4.78-4.77 4 4 0 0 1 0-6.76Z'/%3E%3Cpath d='m9 12 2 2 4-4' stroke='%23ffffff' stroke-width='2.5'/%3E%3C/svg%3E");
    background-repeat: no-repeat;
    background-position: left center;
    background-size: 13px;
    color: #9B4500;
    font-size: 13px !important;
    font-weight: 800;
    letter-spacing: 0.5px;
    line-height: 1.2;
  }
  .diff-cell.a2z:not(.head) img {
    width: 18px !important;
    height: 18px !important;
    margin: 0 !important;
    grid-column: 1;
    filter: invert(27%) sepia(89%) saturate(3195%) hue-rotate(17deg) brightness(96%) contrast(101%) !important; /* Force gold/brown color */
  }

  /* Badges Section */
  .diff-badges {
    display: flex !important;
    flex-direction: column !important;
    gap: 12px !important;
    padding: 0 16px !important;
    max-width: 520px !important;
    margin-left: auto !important;
    margin-right: auto !important;
  }
  .diff-badge {
    background: #FAF8F5 !important; /* Soft cream background */
    border: 1px solid #E5E7EB !important;
    border-radius: 12px !important;
    padding: 16px 20px !important;
    min-height: auto !important;
    display: flex !important;
    align-items: center !important;
    gap: 16px !important;
    width: 100% !important;
    box-shadow: none !important;
  }
  .db-icon {
    background: #D4A84F !important; /* Gold background */
    width: 48px !important;
    height: 48px !important;
    border-radius: 16px !important;
    flex-shrink: 0 !important;
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    box-shadow: none !important;
  }
  .db-icon img {
    width: 24px !important;
    height: 24px !important;
    filter: invert(1) !important; /* Force white icon */
  }
  .db-text {
    display: flex !important;
    flex-direction: column !important;
    gap: 4px !important;
    text-align: left !important;
  }
  .db-lbl {
    font-size: 13px !important;
    font-weight: 600 !important;
    letter-spacing: 0.5px !important;
    line-height: 1.2 !important;
  }
  .db-val {
    font-size: 16px !important;
    font-weight: 700 !important;
    letter-spacing: 0px !important;
    line-height: 1.2 !important;
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

  <div class="a2zvsx-card reveal d1">
    <span class="a2zvsx-vs" aria-hidden="true">vs</span>
    <svg class="a2zvsx-dia" viewBox="0 0 12 12" aria-hidden="true"><path d="M6 0L12 6L6 12L0 6Z" fill="#C4905A"/></svg>
    <div class="a2zvsx-head">
      <span class="a2zvsx-hl">A Typical Firm</span>
      <span class="a2zvsx-hr">A2Z Accounting</span>
    </div>

    <!-- Row 1: Who Handles It -->
    <div class="a2zvsx-item">
      <h3 class="a2zvsx-pill">Who Handles It</h3>
      <div class="a2zvsx-cells">
        <p class="a2zvsx-l">One stretched generalist</p>
        <p class="a2zvsx-r">
          <svg viewBox="0 0 24 24" fill="none"><circle cx="12" cy="12" r="10.5" stroke="#C4905A" stroke-width="1.2" opacity="0.55"/><path d="M7 12.5l3.4 3.4L17 8.5" stroke="#D8AF82" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"/></svg>
          A dedicated specialist team
        </p>
      </div>
    </div>

    <!-- Row 2: Qualification -->
    <div class="a2zvsx-item">
      <h3 class="a2zvsx-pill">Qualification</h3>
      <div class="a2zvsx-cells">
        <p class="a2zvsx-l">Often a junior, undisclosed</p>
        <p class="a2zvsx-r">
          <svg viewBox="0 0 24 24" fill="none"><circle cx="12" cy="12" r="10.5" stroke="#C4905A" stroke-width="1.2" opacity="0.55"/><path d="M7 12.5l3.4 3.4L17 8.5" stroke="#D8AF82" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"/></svg>
          Reviewed to FCCA standard
        </p>
      </div>
    </div>

    <!-- Row 3: Sector Knowledge -->
    <div class="a2zvsx-item">
      <h3 class="a2zvsx-pill">Sector Knowledge</h3>
      <div class="a2zvsx-cells">
        <p class="a2zvsx-l">Same advice for every industry</p>
        <p class="a2zvsx-r">
          <svg viewBox="0 0 24 24" fill="none"><circle cx="12" cy="12" r="10.5" stroke="#C4905A" stroke-width="1.2" opacity="0.55"/><path d="M7 12.5l3.4 3.4L17 8.5" stroke="#D8AF82" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"/></svg>
          Specialists in your sector
        </p>
      </div>
    </div>

    <!-- Row 4: Response Time -->
    <div class="a2zvsx-item">
      <h3 class="a2zvsx-pill">Response Time</h3>
      <div class="a2zvsx-cells">
        <p class="a2zvsx-l">Days, or no reply</p>
        <p class="a2zvsx-r">
          <svg viewBox="0 0 24 24" fill="none"><circle cx="12" cy="12" r="10.5" stroke="#C4905A" stroke-width="1.2" opacity="0.55"/><path d="M7 12.5l3.4 3.4L17 8.5" stroke="#D8AF82" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"/></svg>
          Same day for all queries received by midday
        </p>
      </div>
    </div>

    <!-- Row 5: Deadlines -->
    <div class="a2zvsx-item">
      <h3 class="a2zvsx-pill">Deadlines</h3>
      <div class="a2zvsx-cells">
        <p class="a2zvsx-l">Reactive, last minute</p>
        <p class="a2zvsx-r">
          <svg viewBox="0 0 24 24" fill="none"><circle cx="12" cy="12" r="10.5" stroke="#C4905A" stroke-width="1.2" opacity="0.55"/><path d="M7 12.5l3.4 3.4L17 8.5" stroke="#D8AF82" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"/></svg>
          Tracked early. Zero missed, ever
        </p>
      </div>
    </div>

    <!-- Row 6: Tax Planning -->
    <div class="a2zvsx-item">
      <h3 class="a2zvsx-pill">Tax Planning</h3>
      <div class="a2zvsx-cells">
        <p class="a2zvsx-l">You ask, they react</p>
        <p class="a2zvsx-r">
          <svg viewBox="0 0 24 24" fill="none"><circle cx="12" cy="12" r="10.5" stroke="#C4905A" stroke-width="1.2" opacity="0.55"/><path d="M7 12.5l3.4 3.4L17 8.5" stroke="#D8AF82" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"/></svg>
          Planned months ahead
        </p>
      </div>
    </div>

    <!-- Row 7: Fees -->
    <div class="a2zvsx-item">
      <h3 class="a2zvsx-pill">Fees</h3>
      <div class="a2zvsx-cells">
        <p class="a2zvsx-l">Hourly, scope creeps</p>
        <p class="a2zvsx-r">
          <svg viewBox="0 0 24 24" fill="none"><circle cx="12" cy="12" r="10.5" stroke="#C4905A" stroke-width="1.2" opacity="0.55"/><path d="M7 12.5l3.4 3.4L17 8.5" stroke="#D8AF82" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"/></svg>
          One fixed fee, in writing
        </p>
      </div>
    </div>
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
.testimonials-dark { background-color: #112B46; padding: clamp(60px, 8vw, 100px) 0; overflow: hidden; position: relative; min-height: clamp(500px, 60vw, 789px); display: flex; flex-direction: column; justify-content: center; }
.testimonials-dark-inner { max-width: 1400px; margin: 0 auto; width: 100%; }
.testimonials-dark-head { text-align: center; margin-bottom: clamp(40px, 6vw, 60px); padding: 0 24px; }
.testimonials-dark-head h2 {
  font-family: 'Playfair Display', serif;
  font-size: clamp(36px, 5vw, 56px);
  font-weight: 700;
  color: #ffffff;
  line-height: 1.1;
  letter-spacing: -1.12px;
  text-align: center;
  margin-bottom: clamp(12px, 2vw, 16px);
}
.testimonials-dark-head h2 em { color: var(--gold); font-style: normal; }
.testimonials-dark-desc {
  font-family: 'Manrope', sans-serif;
  font-size: clamp(16px, 2vw, 18px);
  font-weight: 600;
  color: rgba(255, 255, 255, 0.85);
  line-height: 1.6;
  letter-spacing: 0px;
  text-align: center;
  max-width: 720px;
  margin: 0 auto !important;
}
.a2zvt-new-outer { position: relative; max-width: 1106px; margin: 0 auto; padding: 0; height: auto; }
.a2zvt-new-clip { overflow: hidden; padding: 60px 0; margin: 0px 0; width: 100%; height: clamp(150px, 36vw, 400px); display: flex; align-items: center; }
.a2zvt-new { overflow: visible !important; width: 100%; flex: 1; }
.a2zvt-new__track { display: flex; transition: transform 0.6s cubic-bezier(0.25, 1, 0.5, 1); align-items: center; }
.a2zvt-new__slide { flex: 0 0 clamp(0px, 20.705vw, 229px); width: clamp(0px, 20.705vw, 229px); margin-right: clamp(0px, 2.17vw, 24px); transition: all 0.6s cubic-bezier(0.25, 1, 0.5, 1); opacity: 1; position: relative; border-radius: 4.58px; overflow: hidden; border: 0.76px solid rgba(255,255,255,0.05); background: #000; }
.a2zvt-new__slide.is-center { flex: 0 0 clamp(0px, 54.249vw, 600px); width: clamp(0px, 54.249vw, 600px); border-radius: 12px; border-width: 1px; z-index: 2; border-color: rgba(212,168,79,0.3); opacity: 1; }
.a2zvt-new__thumb { display: block; position: relative; width: 100%; aspect-ratio: 16/9; text-decoration: none; }
.a2zvt-new__thumb-img { width: 100%; height: 100%; object-fit: cover; object-position: left top; transition: opacity 0.3s; }
.a2zvt-new__slide.is-center .a2zvt-new__thumb-img { opacity: 1; }
.a2zvt-new__thumb::after { content: ""; position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(to top, rgba(16,33,49,1) 0%, rgba(16,33,49,0.4) 50%, rgba(16,33,49,0) 100%); pointer-events: none; }
.a2zvt-new__play { position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 28px; height: 28px; background: var(--gold); border-radius: 50%; display: flex; align-items: center; justify-content: center; z-index: 10; box-shadow: 0 4px 15px rgba(0,0,0,0.3); transition: transform 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275), width 0.4s, height 0.4s; }
.a2zvt-new__slide.is-center .a2zvt-new__play { width: clamp(48px, 10vw, 72px); height: clamp(48px, 10vw, 72px); }
.a2zvt-new__play-icon-img { width: 12px; height: 12px; margin-left: 2px; filter: invert(13%) sepia(35%) saturate(542%) hue-rotate(170deg) brightness(90%) contrast(92%); transition: all 0.3s; }
.a2zvt-new__slide.is-center .a2zvt-new__play .a2zvt-new__play-icon-img { width: clamp(20px, 4vw, 32px); height: clamp(20px, 4vw, 32px); margin-left: 4px; }
.a2zvt-new__thumb:hover .a2zvt-new__play { transform: translate(-50%, -50%) scale(1.15); background: #e6b95b; }
.a2zvt-new__body { position: absolute; bottom: 0; left: 0; width: 100%; padding: 12px; z-index: 3; pointer-events: none; background: #14203166; border-top: 1px solid #E9C34933; backdrop-filter: blur(12px); }
.a2zvt-new__slide.is-center .a2zvt-new__body { padding: clamp(16px, 4vw, 18px); }
.a2zvt-new__author { display: flex; align-items: center; gap: 8px; }
.a2zvt-new__slide.is-center .a2zvt-new__author { gap: clamp(8px, 2vw, 16px); }
.a2zvt-new__avatar { width: 20px; height: 20px; border-radius: 50%; border: 1px solid rgba(255,255,255,0.25); display: flex; align-items: center; justify-content: center; background: rgba(255,255,255,0.05); flex-shrink: 0; }
.a2zvt-new__slide.is-center .a2zvt-new__avatar { width: clamp(28px, 6vw, 44px); height: clamp(28px, 6vw, 44px); }
.a2zvt-new__avatar-img { width: 10px; height: 10px; filter: invert(1); opacity: 0.8; }
.a2zvt-new__slide.is-center .a2zvt-new__avatar-img { width: clamp(14px, 3vw, 20px); height: clamp(14px, 3vw, 20px); }
.a2zvt-new__name { color: #fff; font-family: var(--serif); font-size: 0.65rem; font-weight: 600; margin-bottom: 2px; }
.a2zvt-new__slide.is-center .a2zvt-new__name { font-size: clamp(0.9rem, 2.5vw, 1.15rem); margin-bottom: 2px; }
.a2zvt-new__role { color: rgba(255,255,255,0.7); font-family: var(--sans); font-size: 0.45rem; line-height: 1.2; }
.a2zvt-new__slide.is-center .a2zvt-new__role { font-size: clamp(0.65rem, 2vw, 0.8rem); line-height: 1.3; }
.a2zvt-new-global-prev, .a2zvt-new-global-next { position: absolute; top: 50%; transform: translateY(-50%); width: 44px; height: 44px; border-radius: 50%; background: #182f45; border: 1px solid rgba(255,255,255,0.1); display: flex; align-items: center; justify-content: center; cursor: pointer; z-index: 10; transition: all 0.3s; }
.a2zvt-new-global-prev:hover, .a2zvt-new-global-next:hover { background: #1e3a55; border-color: rgba(255,255,255,0.3); }
.a2zvt-new-global-prev { left: -70px; }
.a2zvt-new-global-next { right: -70px; }
.a2zvt-new-global-prev img, .a2zvt-new-global-next img { width: 20px; height: 20px; filter: invert(1); opacity: 0.8; }
@media (max-width: 1280px) {
  .a2zvt-new-global-prev, .a2zvt-new-global-next {
    top: auto; 
    bottom: -60px; 
    transform: none; 
  }
  .a2zvt-new-global-prev { left: calc(50% - 50px); }
  .a2zvt-new-global-next { right: calc(50% - 50px); }
  .a2zvt-new-outer { margin-bottom: 80px; }
}
@media (max-width: 900px) {
  .a2zvt-new-clip { height: calc(42.1875vw + 80px) !important; max-height: 360px !important; padding: 40px 0 !important; }
  .a2zvt-new__track { margin-left: calc(20vw - 12px - (min(75vw, 497px) / 2)) !important; }
  .a2zvt-new__slide { flex: 0 0 30vw !important; width: 30vw !important; margin-right: 12px !important; border-radius: 6px !important; }
  .a2zvt-new__slide.is-center { flex: 0 0 min(75vw, 497px) !important; width: min(75vw, 497px) !important; border-radius: 8px !important; }
  
  .a2zvt-new__slide:not(.is-center) .a2zvt-new__body { opacity: 0 !important; pointer-events: none; }
  
  .a2zvt-new__slide.is-center .a2zvt-new__body { padding: 16px 16px !important; opacity: 1 !important; transition: opacity 0.4s 0.2s; }
  .a2zvt-new__slide.is-center .a2zvt-new__name { font-size: 14px !important; margin-bottom: 2px !important; }
  .a2zvt-new__slide.is-center .a2zvt-new__role { font-size: 11px !important; line-height: 1.2 !important; }
  .a2zvt-new__slide.is-center .a2zvt-new__avatar { width: 32px !important; height: 32px !important; }
  .a2zvt-new__slide.is-center .a2zvt-new__author { gap: 10px !important; }
  .a2zvt-new__slide.is-center .a2zvt-new__play { width: 48px !important; height: 48px !important; }
  .a2zvt-new__slide.is-center .a2zvt-new__play-icon-img { width: 20px !important; height: 20px !important; margin-left: 4px !important; }
}
@media (max-width: 540px) {
  .a2zvt-new__slide.is-center .a2zvt-new__role { display: none !important; }
  .a2zvt-new__body {
    background: transparent !important;
    border-top: none !important;
    backdrop-filter: none !important;
    padding: clamp(4px,1vw,8px) !important;
  }
}
.lity-close { display: none !important; }
.lity-loader { display: none !important; }
.lity-iframe-container { background: transparent url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='50' height='50' viewBox='0 0 50 50'%3E%3Cpath fill='%23ffffff' d='M25.251,6.461c-10.318,0-18.683,8.365-18.683,18.683h4.068c0-8.071,6.543-14.615,14.615-14.615V6.461z'%3E%3CanimateTransform attributeType='xml' attributeName='transform' type='rotate' from='0 25 25' to='360 25 25' dur='0.8s' repeatCount='indefinite'/%3E%3C/path%3E%3C/svg%3E") no-repeat center center !important; background-size: 50px 50px !important; }
.lity-iframe-container iframe { background: transparent !important; }

/* =================
     NEW CONTACT CTA
   =================== */
.contact {
  position: relative;
  background: #ffffff;
  padding: 0 clamp(16px, 4vw, 24px);
}
.contact::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: clamp(240px, 60vw, 660px);
  background: url('https://images.unsplash.com/photo-1600880292203-757bb62b4baf?auto=format&fit=crop&w=1920&q=80') no-repeat center center / cover;
  z-index: 0;
}
.contact::after {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: clamp(240px, 60vw, 660px);
  background: rgba(0, 0, 0, 0.4);
  z-index: 0;
}
.contact-inner {
  position: relative;
  z-index: 1;
  max-width: 900px;
  margin: 0 auto;
  padding: clamp(140px, 40vw, 405px) 0 clamp(40px, 8vw, 100px) 0;
}
.cta-box {
  background-color: #112B46;
  width: 100%;
  max-width: 768px;
  min-height: clamp(300px, 50vw, 509px);
  margin: 0 auto;
  padding: clamp(32px, 6vw, 80px) clamp(16px, 4vw, 40px);
  text-align: center;
  box-shadow: 0 20px 50px rgba(0,0,0,0.3);
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  border-radius: 2px;
  border: 1px solid rgba(255,255,255,0.1);
}
.cta-box .display-lg {
  font-family: 'Playfair Display', serif;
  font-weight: 700;
  font-size: clamp(28px, 6vw, 56px);
  line-height: 1.15;
  letter-spacing: -0.5px;
  text-align: center;
  color: #ffffff;
  margin-bottom: clamp(16px, 2vw, 24px);
}
.cta-box .display-lg em {
  font-family: 'Playfair Display', serif;
  font-weight: 700;
  font-style: italic;
  font-size: clamp(28px, 6vw, 56px);
  line-height: 1.15;
  letter-spacing: -0.5px;
  text-align: center;
  color: #D4AF37;
}
.cta-desc {
  font-family: 'Manrope', sans-serif;
  font-weight: 500;
  font-size: clamp(15px, 2vw, 18px);
  line-height: 1.6;
  letter-spacing: 0px;
  text-align: center;
  color: rgba(255,255,255,0.9);
  margin-bottom: clamp(24px, 4vw, 40px);
}
.cta-box .btn-gold {
  background: #d4a84f;
  color: #000;
  font-family: 'Hanken Grotesk', sans-serif;
  font-weight: 700;
  font-size: clamp(11px, 1.5vw, 14px);
  line-height: 1.4;
  letter-spacing: 1.2px;
  text-align: center;
  text-transform: uppercase;
  height: auto;
  padding: clamp(14px, 2vw, 20px) clamp(16px, 3vw, 32px);
  border-radius: 2px;
  text-decoration: none;
  display: inline-block;
  box-sizing: border-box;
  margin-bottom: 24px;
  transition: all 0.3s;
  white-space: normal;
  max-width: 100%;
}
.cta-box .btn-gold:hover {
  background: #e6b95b;
}
.cta-note {
  font-family: 'Manrope', sans-serif;
  font-weight: 600;
  font-size: clamp(14px, 1.5vw, 16px);
  line-height: 1.5;
  letter-spacing: 0px;
  text-align: center;
  color: rgba(255,255,255,0.7);
  margin: 0;
}
@media (max-width: 600px) {
  .cta-box .display-lg br,
  .cta-desc br,
  .cta-note br {
    display: none;
  }
}

/* =================
     REVIEWS
   =================== */
.reviews {
  padding: clamp(60px, 8vw, 100px) 0;
}
.reviews-inner {
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 clamp(16px, 4vw, 24px);
}
.reviews-head h2 {
  font-family: 'Playfair Display', serif;
  font-weight: 700;
  font-size: clamp(32px, 6vw, 56px);
  line-height: 1.1;
  letter-spacing: -0.5px;
  color: var(--ink);
  margin-bottom: clamp(30px, 5vw, 50px);
}
.reviews-head h2 em {
  font-style: normal;
  color: var(--gold);
}
.reviews-footer {
  margin-top: clamp(30px, 5vw, 50px);
}
.reviews-footer-logo {
  display: flex;
  align-items: center;
  gap: 12px;
  font-family: var(--sans);
  font-size: clamp(14px, 2vw, 16px);
  font-weight: 600;
  color: var(--ink-60);
}
.reviews-footer-logo img {
  width: clamp(24px, 4vw, 32px);
  height: clamp(24px, 4vw, 32px);
}
@media (max-width: 600px) {
  /* Removed br { display: none; } so the text breaks properly onto a new line */
}
</style>
<div class="about-new-wrapper">
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
        'thumb' => 'https://a2zaccounting.co.uk/wp-content/uploads/2025/06/Testimonial-–-a2z-accounting-06-04-2025_12_21_PM-21.png',
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

$slide_idx = 0;
foreach ($a2z_testimonials as $t) {
    $is_center_class = ($slide_idx === 1) ? ' is-center' : '';
    echo '
                        <div class="a2zvt-new__slide' . $is_center_class . '">
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
    $slide_idx++;
}
?>                 
                            </div></div></div></div></div></section>






<!-- ==============
   FAQ
=================== -->
<section class="faq" id="faq">
  <div class="faq-inner">
    
    <div class="faq-header reveal">
      <h2 class="display-lg">
        Questions We Get<br /><em>Asked The Most</em>
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
</section>




<section class="contact">
  <div class="contact-inner reveal">
    <div class="cta-box">
      <h2 class="display-lg">
        WORK WITH ACCOUNTANTS <br /><em>WHO ACTUALLY DELIVER.</em>
      </h2>
      <p class="cta-desc">
        One conversation is enough to see the difference<br />a specialist firm makes.
      </p>
      <a href="<?php echo esc_url(get_permalink()); ?>#a2z-enquire" class="btn btn-gold">SPEAK WITH A CHARTERED CERTIFIED ACCOUNTANT</a>
      <p class="cta-note">
        You speak directly with a Chartered Certified Accountant, <br />not a sales team.
      </p>
    </div>
  </div>
</section>




    <section class="reviews" id="google_reviews">
        <div class="reviews-inner">
            <div class="reviews-head a2zh-rv" style="display: flex; justify-content: center; text-align: center;">
                <div class="reviews-head-left">
                    <h2>Trusted By Growing Businesses<br /><em>Across The UK.</em></h2>
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

</div>
<?php get_footer(); ?>






