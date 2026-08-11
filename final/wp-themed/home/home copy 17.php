<?php
/**
* Template Name: New Home
*
* @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0
*/

get_header();

$banner_img = get_field('banner_img');

/* ───────────────────────────────────────────────
   Content with sensible defaults pulled from the
   premium homepage.php so the page is fully
   populated even when ACF fields are empty.
─────────────────────────────────────────────── */

// Hero
$hero_title = get_field('title');
$hero_sub   = get_field('subtitle');
$btn_1      = get_field('btn');
$btn_2      = get_field('btn_2');

$btn_1_url   = $btn_1['url']   ?? '/contact/';
$btn_1_title = $btn_1['title'] ?? 'Get a free fee estimate';
$btn_2_url   = $btn_2['url']   ?? '/testimonial/';
$btn_2_title = $btn_2['title'] ?? 'Watch client stories';

// Hero proof points (static defaults from homepage.php)
$hero_points = [
  'Proactive tax planning that builds wealth',
  'Fully managed support so you stay focused on growth',
  'Complex advice made simple and actionable',
  'Same-day response, guaranteed in writing',
];

// Credential metrics (static defaults from homepage.php)
$metrics = [
  ['FCCA',     'Fellow Chartered Accountant'],
  ['Big 4',    'Deloitte and EY audit standards'],
  ['Subsea 7', 'Multinational finance experience'],
  ['75',       'Five-star Google reviews'],
  ['&pound;0', 'HMRC penalties since founding'],
  ['0',        'Missed deadlines since founding'],
];

// Three feature pods
$threepods_default = [
  ['Structured tax planning',        'Tax strategies planned months before deadlines, not assembled in a rush at year-end. Reliefs are identified proactively and transactions are structured for optimal outcomes.'],
  ['Immediate, reliable support',    'Queries received before midday receive a same-day response, guaranteed in your engagement letter. Your business does not wait, and neither should your accountant.'],
  ['Complete financial confidence',  'Every output is reviewed across specialist, department head, senior accountant, and FCCA director layers before it reaches you.'],
];

// "Who this is for" list
$who_title_default = 'For high growth businesses that <span>value structure and control.</span>';
$who_items = [
  ['Simple systems. You send records. We handle everything.', 'No software to manage, no admin to chase, and no explaining things twice.'],
  ['Specialist teams. Fast turnaround. No delays.',            'Payroll, bookkeeping and VAT, accounts and tax flow through specialists, not stretched generalists.'],
  ['Clear reporting. Know profit and upcoming tax in advance.', 'Monthly or quarterly management accounts so you understand your position before it is too late to act.'],
  ['Complex advice made simple and immediately actionable.',   'HMRC investigations, group structures, capital gains, inheritance planning and R&amp;D claims handled in-house.'],
];

// Promise / higher standard
$promise_default_title = 'A higher standard of <span>financial management.</span>';
$promise_points = [
  'Up-to-date financial visibility at all times, not just at year-end.',
  'Proactive tax planning months ahead, not weeks behind.',
  'Organised, documented, repeatable systems with no single points of failure.',
  'Clear, accountable communication from a specialist team.',
  'Ongoing structured oversight, not annual compliance and silence.',
  'Corporate finance experience from Big 4 audit environments, applied here.',
];
$promise_quote = 'Our responsibility is simple: to ensure your financial foundations are properly managed at all times, so you can build with complete confidence.';

// Sectors (defaults from homepage.php)
$sectors_default = [
  ['E-Commerce &amp; Retail',        'Shopify, Amazon FBA, WooCommerce, Etsy and marketplaces. UK VAT, EU IOSS, multi-currency, settlement reconciliation and platform profitability.', '/help/e-commerce-and-retail/'],
  ['Social Media &amp; Influencers', 'Content creators, YouTubers, podcasters and digital marketers. Brand deal structuring, platform revenue tax treatment and gifted product compliance.', '/help/social-media-influencers/'],
  ['Healthcare',                     'GPs, dentists, consultants, pharmacies, aesthetics and care homes. NHS pensions, mixed income structures, CQC compliance and practitioner tax positions.', '/help/healthcare/'],
  ['Property &amp; Trades',          'CIS contractors and subcontractors, landlords, builders, electricians, surveyors and joiners. CIS returns, job costing, WIP reporting and SDLT planning.', '/help/property-trades/'],
  ['Hospitality',                    'Hotels, restaurants, bars, clubs and B&amp;Bs. Margin analysis, staff cost tracking, tip and service charge compliance, consolidation and seasonal cash flow.', '/help/hospitality/'],
  ['Oil, Gas &amp; Engineering',     'Companies, engineers, contractors and energy consultancies. Project accounting, international contractor arrangements, R&amp;D tax credits and consolidation.', '/help/oil-gas-and-engineering/'],
];

// Moving to A2Z steps
$switch_steps = [
  ['Discovery Conversation', 'We learn your business, your structure, your goals, and what your previous accountant may have missed.'],
  ['Structured Handover',    'We contact your previous accountant directly. Records are reviewed, software configured, and access set up.'],
  ['Ongoing Management',     'Your account runs within a defined system from day one. No drift, no gaps, no chasing.'],
];
?>

<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap"
  rel="stylesheet" />

<style>
/* ════════════════════════════════════════════════════════════
   A2Z HOME — scoped FAQ-theme redesign.
   Everything is namespaced under .a2zh-home so no other theme
   CSS overrides it, and it overrides nothing outside this scope.
════════════════════════════════════════════════════════════ */
.a2zh-home {
  --blue: #1a6fa8;
  --blue-lt: #2d93d4;
  --blue-dk: #0d4f7c;
  --navy: #153658;
  --navy-deep: #0c2742;
  --navy-deepest: #071a30;
  --blue-pale: #f4f9fc;
  --blue-xpale: #eef6fb;
  --cyan: #2d93d4;
  --sky: #e3f1fa;
  --ink: #153658;
  --card: #ffffff;
  /* glassmorphism */
  --glass-bg: rgba(255, 255, 255, 0.55);
  --glass-brd: rgba(255, 255, 255, 0.75);
  --glass-shadow: rgba(13, 79, 124, 0.1);
  --glass-dark-bg: rgba(255, 255, 255, 0.06);
  --glass-dark-brd: rgba(255, 255, 255, 0.14);
  --serif: "Plus Jakarta Sans", system-ui, sans-serif;
  --sans: "Plus Jakarta Sans", system-ui, sans-serif;
  --ease: cubic-bezier(0.25, 0.46, 0.45, 0.94);
  /* corners are rounded (faq-component theme); cut vars neutralised */
  --cut7: none;
  --cut8: none;
  --cut9: none;

  font-family: var(--sans);
  font-weight: 400;
  color: var(--navy);
  background: #fff;
  line-height: 1.7;
  -webkit-font-smoothing: antialiased;
  overflow: hidden;
}

.a2zh-home *,
.a2zh-home *::before,
.a2zh-home *::after {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

.a2zh-home img {
  display: block;
  max-width: 100%;
  height: auto;
}

.a2zh-home a {
  /*   color: inherit; */
  text-decoration: none;
}

.a2zh-home button {
  font: inherit;
}

/* rounded-corner language (faq-component theme) */
.a2zh-card,
.a2zh-blog-card,
.a2zh-hero-media,
.a2zh-rating,
.a2zh-media {
  border-radius: 14px;
}

.a2zh-list-item,
.a2zh-step,
.a2zh-photo-stack figure,
.a2zh-tcard-media {
  border-radius: 12px;
}

.a2zh-blog-card {
  overflow: hidden;
}

.a2zh-blog-cat {
  border-radius: 6px;
}

.a2zh-btn {
  border-radius: 8px;
}

.a2zh-wrap {
  max-width: 1320px;
  margin: 0 auto;
  padding: 0 clamp(24px, 5vw, 64px);
}

.a2zh-section {
  position: relative;
  padding: clamp(60px, 9vw, 110px) 0;
}

/* tinted sections get a faint deep-navy radial wash so the glass
   cards sitting on them read as frosted */
.a2zh-section--tint {
  background:
    radial-gradient(ellipse at 12% 0%, rgba(26, 111, 168, 0.08) 0%, transparent 45%),
    radial-gradient(ellipse at 92% 100%, rgba(12, 39, 66, 0.07) 0%, transparent 50%),
    var(--blue-xpale);
}

.a2zh-section--sky {
  background: var(--sky);
}

/* ─── Shared type ─── */
.a2zh-label {
  display: none;
}

.a2zh-title {
  font-family: var(--serif);
  font-weight: 700;
  font-size: clamp(1.85rem, 2.6vw, 2.65rem);
  line-height: 1.12;
  letter-spacing: -0.025em;
  color: var(--ink);
  margin-top: 0;
}

.a2zh-title span,
.a2zh-title em {
  color: var(--blue);
  font-style: normal;
}

.a2zh-copy {
  font-size: clamp(0.98rem, 1vw, 1.05rem);
  line-height: 1.85;
  color: rgba(12, 31, 46, 0.64);
  font-weight: 400;
}

.a2zh-copy p+p {
  margin-top: 1em;
}

.a2zh-copy-spaced {
  margin-top: 22px;
}

/* ─── Section header (title only) ─── */
.a2zh-head {
  display: block;
  max-width: 60ch;
  margin-bottom: clamp(36px, 5vw, 60px);
}

.a2zh-head-copy {
  display: none;
}

/* ─── Buttons ─── */
.a2zh-actions {
  display: flex;
  flex-wrap: wrap;
  gap: 12px;
  margin-top: clamp(26px, 4vw, 40px);
}

.a2zh-btn {
  position: relative;
  display: inline-flex;
  align-items: center;
  gap: 10px;
  font-family: var(--sans);
  font-size: 0.95rem;
  font-weight: 700;
  letter-spacing: 0.08em;
  text-transform: uppercase;
  padding: 14px 32px;
  cursor: pointer;
  border: none;
  outline: none;
  transition: background 0.18s, color 0.18s, transform 0.18s;
}

.a2zh-btn--solid {
  background: linear-gradient(135deg, var(--navy) 0%, var(--navy-deep) 100%);
  color: #fff;
  box-shadow: 0 6px 18px rgba(12, 39, 66, 0.25);
}

.a2zh-btn--solid:hover {
  background: linear-gradient(135deg, var(--blue-dk) 0%, var(--navy) 100%);
  transform: translateY(-1px);
  color: #fff;
  box-shadow: 0 10px 24px rgba(12, 39, 66, 0.3);
}

.a2zh-btn--soft {
  background: #fff;
  color: var(--blue-dk);
  border: 2px solid rgba(13, 79, 124, 0.2);
}

.a2zh-btn--soft:hover {
  background: var(--blue-dk);
  border-color: var(--blue-dk);
  color: #fff;
}

.a2zh-btn--ghost {
  background: transparent;
  color: var(--blue);
  border: 2px solid var(--blue);
}

.a2zh-btn--ghost:hover {
  background: var(--blue);
  border-color: var(--blue);
  color: #fff;
}

/* ─── Cards (interactive glassmorphism) ─── */
.a2zh-card {
  --mx: 50%;
  --my: 50%;
  position: relative;
  overflow: hidden;
  background: var(--glass-bg);
  -webkit-backdrop-filter: blur(16px) saturate(1.6);
  backdrop-filter: blur(16px) saturate(1.6);
  border: 1px solid var(--glass-brd);
  padding: clamp(26px, 3vw, 38px);
  box-shadow: 0 8px 26px var(--glass-shadow);
  transform: perspective(1000px) translateY(0);
  transform-style: preserve-3d;
  transition:
    transform 0.3s var(--ease),
    box-shadow 0.35s var(--ease),
    border-color 0.35s var(--ease),
    background 0.35s var(--ease);
  will-change: transform;
}

/* pointer-following spotlight glow */
.a2zh-card::before {
  content: "";
  position: absolute;
  inset: -1px;
  border-radius: inherit;
  background: radial-gradient(360px circle at var(--mx) var(--my),
      rgba(45, 147, 212, 0.22) 0%,
      rgba(45, 147, 212, 0.08) 35%,
      transparent 62%);
  opacity: 0;
  transition: opacity 0.4s var(--ease);
  pointer-events: none;
  z-index: 0;
}

/* glossy sheen that sweeps across on hover */
.a2zh-card::after {
  content: "";
  position: absolute;
  top: 0;
  left: -75%;
  width: 55%;
  height: 100%;
  background: linear-gradient(105deg, transparent 0%, rgba(255, 255, 255, 0.5) 50%, transparent 100%);
  transform: skewX(-18deg);
  pointer-events: none;
  z-index: 1;
  transition: left 0.75s var(--ease);
}

.a2zh-card>* {
  position: relative;
  z-index: 2;
}

.a2zh-card:hover {
  background: rgba(255, 255, 255, 0.78);
  border-color: rgba(45, 147, 212, 0.55);
  box-shadow:
    0 30px 64px rgba(8, 29, 51, 0.24),
    0 0 0 1px rgba(45, 147, 212, 0.18),
    inset 0 1px 0 rgba(255, 255, 255, 0.6);
}

.a2zh-card:hover::before {
  opacity: 1;
}

.a2zh-card:hover::after {
  left: 135%;
}

/* ════ HERO ════ */
.a2zh-hero {
  background: linear-gradient(180deg, #e8f3fb 0%, var(--blue-pale) 100%);
  padding: clamp(88px, 12vw, 160px) 0 clamp(80px, 10vw, 130px);
  position: relative;
  min-height: 72vh;
  display: flex;
  align-items: center;
  border-bottom: 1px solid rgba(13, 79, 124, 0.08);
}

.a2zh-hero>.a2zh-wrap {
  width: 100%;
}

.a2zh-hero::before {
  content: "";
  position: absolute;
  inset: 0;
  pointer-events: none;
  background:
    radial-gradient(ellipse at 82% 4%, rgba(45, 147, 212, 0.16) 0%, transparent 44%),
    radial-gradient(ellipse at 14% 96%, rgba(12, 39, 66, 0.08) 0%, transparent 46%);
}

.a2zh-hero-grid {
  position: relative;
  max-width: 920px;
  margin: 0 auto;
  text-align: center;
}

.a2zh-hero .a2zh-actions {
  justify-content: center;
}

.a2zh-hero h1 {
  font-family: var(--serif);
  font-weight: 800;
  font-size: clamp(2.3rem, 4.4vw, 3.7rem);
  line-height: 1.05;
  letter-spacing: -0.03em;
  color: var(--ink);
}

.a2zh-hero h1 span,
.a2zh-hero h1 em {
  color: var(--blue);
  font-style: normal;
  display: block;
}

.a2zh-hero-sub {
  margin: 26px auto 0;
  font-size: clamp(1rem, 1.25vw, 1.15rem);
  line-height: 1.85;
  color: rgba(12, 31, 46, 0.66);
  max-width: 60ch;
  font-weight: 400;
}

.a2zh-hero-sub p+p {
  margin-top: 0.9em;
}

.a2zh-points {
  display: grid;
  grid-template-columns: repeat(2, minmax(0, 1fr));
  margin-top: 34px;
  border-top: 1px solid rgba(26, 111, 168, 0.18);
  max-width: 680px;
}

.a2zh-point {
  position: relative;
  padding: 16px 22px 16px 26px;
  font-size: 0.92rem;
  font-weight: 500;
  color: rgba(12, 31, 46, 0.78);
  line-height: 1.5;
  border-bottom: 1px solid rgba(26, 111, 168, 0.12);
}

.a2zh-point:nth-child(odd) {
  border-right: 1px solid rgba(26, 111, 168, 0.12);
}

.a2zh-point::before {
  content: "/";
  position: absolute;
  left: 6px;
  top: 16px;
  color: var(--blue-lt);
  font-weight: 700;
}

.a2zh-hero-aside {
  display: flex;
  flex-direction: column;
  gap: 16px;
}

.a2zh-hero-media {
  border: 1px solid rgba(26, 111, 168, 0.18);
  clip-path: var(--cut9);
  overflow: hidden;
}

.a2zh-hero-media img {
  width: 100%;
  aspect-ratio: 4 / 3;
  object-fit: cover;
}

.a2zh-rating {
  position: relative;
  background: var(--card);
  border: 1px solid rgba(26, 111, 168, 0.16);
  padding: 28px 28px 30px;
  overflow: hidden;
}

.a2zh-rating::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  width: 2px;
  background: linear-gradient(to bottom, var(--blue-lt), transparent);
}

.a2zh-rating-score {
  font-family: var(--serif);
  font-weight: 700;
  font-size: clamp(3rem, 5vw, 4rem);
  line-height: 0.9;
  color: var(--blue);
}

.a2zh-rating-stars {
  color: #f4a900;
  letter-spacing: 0.12em;
  font-size: 1rem;
  margin-top: 8px;
}

.a2zh-rating p {
  margin-top: 14px;
  font-size: 0.92rem;
  line-height: 1.7;
  color: rgba(12, 31, 46, 0.6);
  font-weight: 400;
}

.a2zh-rating strong {
  display: block;
  margin-top: 18px;
  font-size: 0.68rem;
  font-weight: 700;
  letter-spacing: 0.14em;
  text-transform: uppercase;
  color: var(--blue-dk);
}

/* ════ METRICS ════ */
.a2zh-metrics {
  background: var(--blue-xpale);
  border-block: 1px solid rgba(26, 111, 168, 0.14);
}

.a2zh-metrics-grid {
  display: grid;
  grid-template-columns: repeat(6, minmax(0, 1fr));
}

.a2zh-metric {
  padding: 28px clamp(14px, 2vw, 28px);
  border-right: 1px solid rgba(26, 111, 168, 0.12);
  min-height: 128px;
}

.a2zh-metric:last-child {
  border-right: 0;
}

.a2zh-metric strong {
  display: block;
  font-family: var(--serif);
  font-weight: 700;
  font-size: clamp(1.7rem, 2.8vw, 2.5rem);
  line-height: 1;
  color: var(--blue);
  letter-spacing: -0.02em;
}

.a2zh-metric span {
  display: block;
  margin-top: 12px;
  font-size: 0.62rem;
  font-weight: 600;
  letter-spacing: 0.1em;
  text-transform: uppercase;
  color: rgba(12, 31, 46, 0.55);
  line-height: 1.55;
}

/* ════ FEATURE / POD GRID ════ */
.a2zh-grid-3 {
  display: grid;
  grid-template-columns: repeat(3, minmax(0, 1fr));
  gap: 16px;
}

.a2zh-feature {
  min-height: 320px;
}

.a2zh-feature-num {
  font-family: var(--serif);
  font-weight: 700;
  font-size: clamp(2rem, 3vw, 2.6rem);
  color: rgba(26, 111, 168, 0.32);
  line-height: 1;
  letter-spacing: 0.04em;
}

.a2zh-feature-icon {
  width: 52px;
  height: 52px;
  object-fit: contain;
  margin-bottom: 4px;
}

.a2zh-feature h3 {
  margin-top: 20px;
  font-family: var(--serif);
  font-weight: 700;
  font-size: clamp(1.25rem, 1.6vw, 1.5rem);
  line-height: 1.22;
  color: var(--ink);
}

.a2zh-feature p {
  margin-top: 14px;
  font-size: clamp(0.95rem, 0.98vw, 1rem);
  line-height: 1.8;
  color: rgba(12, 31, 46, 0.62);
  font-weight: 400;
}

/* ════ THREE PODS — centered head, number on top, thread, soft glass ════ */
.a2zh-pods-sec .a2zh-head {
  text-align: center;
  max-width: 62ch;
  margin-left: auto;
  margin-right: auto;
}

.a2zh-pods-sec .a2zh-title {
  margin-left: auto;
  margin-right: auto;
}

.a2zh-pods3 {
  position: relative;
  display: grid;
  grid-template-columns: repeat(3, minmax(0, 1fr));
  gap: 16px;
}

/* soft thread linking the three number badges across the top */
.a2zh-pods3-thread {
  position: absolute;
  top: 27px;
  left: 0;
  right: 0;
  margin: 0 16.66%;
  height: 4px;
  border-radius: 999px;
  background: linear-gradient(90deg, rgba(26, 111, 168, 0.45), rgba(45, 147, 212, 0.7), rgba(26, 111, 168, 0.45));
  box-shadow: 0 2px 10px rgba(45, 147, 212, 0.2);
  z-index: 0;
}

.a2zh-pod3 {
  position: relative;
  z-index: 1;
  display: flex;
  flex-direction: column;
  align-items: stretch;
}

.a2zh-pod3-num {
  align-self: center;
  width: 58px;
  height: 58px;
  border-radius: 999px;
  display: grid;
  place-items: center;
  font-family: var(--serif);
  font-weight: 700;
  font-size: 1.4rem;
  color: var(--blue-dk);
  background: #fff;
  border: 2px solid rgba(26, 111, 168, 0.3);
  box-shadow: 0 8px 22px rgba(13, 79, 124, 0.14);
  position: relative;
  z-index: 2;
  margin-bottom: 18px;
  transition: background 0.45s var(--ease), color 0.45s var(--ease), border-color 0.45s var(--ease), transform 0.45s var(--ease), box-shadow 0.45s var(--ease);
}

.a2zh-pod3 .a2zh-card {
  flex: 1;
  background: rgba(255, 255, 255, 0.04);
  -webkit-backdrop-filter: blur(22px) saturate(1.4);
  backdrop-filter: blur(22px) saturate(1.4);
  border: 1px solid rgba(255, 255, 255, 0.35);
  box-shadow: 0 18px 50px rgba(13, 79, 124, 0.1);
  transition: background 0.45s var(--ease), border-color 0.45s var(--ease), box-shadow 0.45s var(--ease), transform 0.45s var(--ease);
}

/* highlighted state — soft glassy blue, eased in sequence or on hover */
.a2zh-pod3.is-active .a2zh-pod3-num {
  background: linear-gradient(135deg, var(--blue) 0%, var(--blue-dk) 100%);
  color: #fff;
  border-color: rgba(255, 255, 255, 0.5);
  transform: scale(1.1);
  box-shadow: 0 12px 30px rgba(26, 111, 168, 0.4);
}

.a2zh-pod3.is-active .a2zh-card {
  background: rgba(255, 255, 255, 0.22);
  border-color: rgba(45, 147, 212, 0.45);
  box-shadow: 0 30px 60px rgba(8, 29, 51, 0.16), 0 0 0 1px rgba(45, 147, 212, 0.18);
  transform: translateY(-5px);
}

@media (max-width: 820px) {
  .a2zh-pods3 {
    grid-template-columns: 1fr;
    gap: 24px;
  }

  .a2zh-pods3-thread {
    display: none;
  }
}

/* ════ SPLIT (image + text) ════ */
.a2zh-split {
  display: grid;
  grid-template-columns: minmax(0, 1fr) minmax(300px, 0.92fr);
  gap: clamp(40px, 6vw, 90px);
  align-items: center;
}

.a2zh-split--rev {
  grid-template-columns: minmax(300px, 0.92fr) minmax(0, 1fr);
}

.a2zh-media {
  position: relative;
  border: 1px solid rgba(26, 111, 168, 0.2);
  clip-path: var(--cut9);
  overflow: hidden;
}

.a2zh-media img {
  width: 100%;
  aspect-ratio: 4 / 5;
  object-fit: cover;
}

.a2zh-media--wide img {
  aspect-ratio: 4 / 3;
}

.a2zh-photo-stack {
  display: grid;
  gap: 8px;
  grid-template-columns: repeat(2, minmax(0, 1fr));
}

.a2zh-photo-stack figure {
  overflow: hidden;
  border-radius: 0;
  border: 1px solid rgba(26, 111, 168, 0.16);
}

.a2zh-photo-stack figure:first-child {
  grid-column: 1 / -1;
}

.a2zh-photo-stack img {
  width: 100%;
  aspect-ratio: 1 / 1;
  object-fit: cover;
  display: block;
}

.a2zh-photo-stack figure:first-child img {
  aspect-ratio: 1 / 1;
}

/* ════ JOURNEY PATH (zig-zag connected timeline) ════ */
.a2zh-journey-head {
  max-width: 60ch;
  margin: 0 auto clamp(36px, 5vw, 60px);
  text-align: center;
}

.a2zh-journey-head .a2zh-title {
  margin-left: auto;
  margin-right: auto;
}

.a2zh-journey-head .a2zh-copy {
  margin-top: 16px;
}

.a2zh-path {
  position: relative;
  max-width: 1280px;
  margin: 0 auto;
}

/* title + CTA — stacked on mobile, tucked into the empty right-side
   gaps beside image 1 (top) and image 3 (bottom) on desktop */
.a2zh-path-aside--title {
  text-align: center;
  margin-bottom: clamp(28px, 5vw, 48px);
}

.a2zh-path-aside--title .a2zh-title {
  margin-left: auto;
  margin-right: auto;
}

.a2zh-path-aside--title .a2zh-actions {
  justify-content: center;
}

@media (min-width: 769px) {
  .a2zh-path-aside {
    position: absolute;
    right: 0;
    width: 44%;
    margin: 0;
    padding-left: clamp(24px, 3.5vw, 60px);
    z-index: 2;
  }

  .a2zh-path-aside--title {
    top: 0;
    text-align: left;
  }

  .a2zh-path-aside--title .a2zh-title {
    margin: 0;
  }

  .a2zh-path-aside--title .a2zh-actions {
    justify-content: flex-start;
  }
}

/* SVG diagonal connector + scroll-progress line */
.a2zh-path-svg {
  position: absolute;
  inset: 0;
  width: 100%;
  height: 100%;
  overflow: visible;
  pointer-events: none;
  z-index: 0;
}

.a2zh-path-base {
  fill: none;
  stroke: rgba(26, 111, 168, 0.22);
  stroke-width: 6;
  stroke-linecap: round;
  stroke-linejoin: round;
}

.a2zh-path-prog {
  fill: none;
  stroke: var(--blue);
  stroke-width: 8;
  stroke-linecap: round;
  stroke-linejoin: round;
  transition: stroke-dashoffset 0.12s linear;
}

.a2zh-path-dot {
  fill: #fff;
  stroke: rgba(26, 111, 168, 0.45);
  stroke-width: 3;
  transition: fill 0.4s var(--ease), stroke 0.4s var(--ease);
}

.a2zh-path-dot.is-on {
  fill: var(--blue);
  stroke: var(--blue);
}

.a2zh-path-item {
  position: relative;
  z-index: 1;
  width: 50%;
  padding: 0;
}

/* pull each item up to tighten the vertical gap (alternating sides
   sit in opposite columns, so they don't collide) */
.a2zh-path-item+.a2zh-path-item {
  margin-top: clamp(-80px, -6vw, -30px);
}

.a2zh-path-item--left {
  padding-right: clamp(24px, 3.5vw, 48px);
  text-align: left;
}

.a2zh-path-item--right {
  margin-left: 50%;
  padding-left: clamp(24px, 3.5vw, 48px);
  text-align: right;
}

/* bigger media, aligned to the outer side so the path zig-zags
   diagonally through the centre */
.a2zh-path-media {
  width: min(100%, 680px);
  aspect-ratio: 4 / 3;
  overflow: hidden;
  border-radius: 20px;
  filter: drop-shadow(0 22px 44px rgba(13, 79, 124, 0.22));
}

/* "bitten" circular corner notches */
.a2zh-path-media--bite-br {
  -webkit-mask: radial-gradient(circle at 100% 100%, transparent 86px, #000 87px) no-repeat;
  mask: radial-gradient(circle at 100% 100%, transparent 86px, #000 87px) no-repeat;
}

.a2zh-path-media--bite-tr {
  -webkit-mask: radial-gradient(circle at 100% 0%, transparent 86px, #000 87px) no-repeat;
  mask: radial-gradient(circle at 100% 0%, transparent 86px, #000 87px) no-repeat;
}

.a2zh-path-media--bite-l {
  -webkit-mask:
    radial-gradient(circle at 0% 0%, transparent 76px, #000 77px) no-repeat,
    radial-gradient(circle at 0% 100%, transparent 76px, #000 77px) no-repeat;
  -webkit-mask-composite: source-in;
  mask:
    radial-gradient(circle at 0% 0%, transparent 76px, #000 77px) no-repeat,
    radial-gradient(circle at 0% 100%, transparent 76px, #000 77px) no-repeat;
  mask-composite: intersect;
}

.a2zh-path-item--left .a2zh-path-media {
  margin-right: auto;
}

.a2zh-path-item--right .a2zh-path-media {
  margin-left: auto;
  width: min(112%, 760px);
}

.a2zh-path-media img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  filter: grayscale(0.34) brightness(0.92);
  transform: scale(1);
  transition: filter 0.55s var(--ease), transform 0.6s var(--ease);
}

.a2zh-path-item.is-focus .a2zh-path-media img {
  filter: none;
  transform: scale(1.04);
}

.a2zh-path-text {
  margin-top: 22px;
  max-width: 460px;
}

.a2zh-path-item--right .a2zh-path-text {
  margin-left: auto;
}

.a2zh-path-text strong {
  display: block;
  font-family: var(--serif);
  font-weight: 700;
  font-size: clamp(1.25rem, 1.8vw, 1.7rem);
  line-height: 1.22;
  color: rgba(21, 54, 88, 0.5);
  margin-bottom: 8px;
  transition: color 0.4s var(--ease);
}

.a2zh-path-item.is-focus .a2zh-path-text strong {
  color: var(--ink);
}

.a2zh-path-text span {
  display: block;
  font-size: 0.96rem;
  line-height: 1.75;
  color: rgba(12, 31, 46, 0.42);
  transition: color 0.4s var(--ease);
}

.a2zh-path-item.is-focus .a2zh-path-text span {
  color: rgba(12, 31, 46, 0.7);
}

@media (max-width: 768px) {
  .a2zh-path-svg {
    display: none;
  }

  .a2zh-path {
    padding-left: 28px;
  }

  .a2zh-path::before {
    content: "";
    position: absolute;
    left: 8px;
    top: 8px;
    bottom: 8px;
    width: 2px;
    background: rgba(26, 111, 168, 0.2);
  }

  .a2zh-path-item,
  .a2zh-path-item--left,
  .a2zh-path-item--right {
    width: 100%;
    margin-left: 0;
    padding-left: 0;
    padding-right: 0;
    text-align: left;
  }

  .a2zh-path-item+.a2zh-path-item {
    margin-top: 16px;
  }

  .a2zh-path-item--left .a2zh-path-media,
  .a2zh-path-item--right .a2zh-path-media {
    margin-left: 0;
    margin-right: auto;
    width: min(100%, 680px);
  }

  .a2zh-path-item--right .a2zh-path-text {
    margin-left: 0;
  }
}

/* list items inside split */
.a2zh-list {
  display: grid;
  gap: 12px;
  margin-top: 26px;
}

.a2zh-list-item {
  position: relative;
  background: var(--glass-bg);
  -webkit-backdrop-filter: blur(10px) saturate(1.4);
  backdrop-filter: blur(10px) saturate(1.4);
  border: 1px solid var(--glass-brd);
  border-left: 3px solid var(--blue);
  padding: 18px 22px;
  transition: transform 0.28s var(--ease), box-shadow 0.28s var(--ease), border-left-width 0.28s var(--ease), background 0.28s var(--ease);
}

.a2zh-list-item:hover {
  transform: translateX(6px);
  border-left-width: 6px;
  background: rgba(255, 255, 255, 0.85);
  box-shadow: 0 14px 32px rgba(8, 29, 51, 0.12);
}

.a2zh-list-item strong {
  display: block;
  font-family: var(--serif);
  font-weight: 600;
  font-size: 1.18rem;
  line-height: 1.3;
  color: var(--ink);
}

.a2zh-list-item span {
  display: block;
  margin-top: 7px;
  font-size: 0.92rem;
  line-height: 1.7;
  color: rgba(12, 31, 46, 0.6);
  font-weight: 400;
}

.a2zh-plist {
  display: grid;
  gap: 11px;
  list-style: none;
  margin-top: 26px;
}

.a2zh-plist li {
  position: relative;
  padding-left: 26px;
  font-size: 0.98rem;
  line-height: 1.7;
  color: rgba(12, 31, 46, 0.66);
  font-weight: 400;
}

.a2zh-plist li::before {
  content: "";
  position: absolute;
  left: 0;
  top: 0.8em;
  width: 13px;
  height: 2px;
  background: var(--blue);
}

.a2zh-quote {
  margin-top: 30px;
  border-left: 2px solid var(--blue);
  padding: 6px 0 6px 24px;
  font-family: var(--serif);
  font-weight: 500;
  font-style: italic;
  font-size: clamp(1.2rem, 2vw, 1.55rem);
  line-height: 1.45;
  color: var(--blue-dk);
}

/* ════ WHO THIS IS FOR (editorial banner + numbered criteria) ════ */
.a2zh-who-head {
  text-align: center;
  max-width: 64ch;
  margin: 0 auto clamp(34px, 4vw, 54px);
}

.a2zh-who-eyebrow {
  display: inline-block;
  font-size: 0.66rem;
  font-weight: 700;
  letter-spacing: 0.16em;
  text-transform: uppercase;
  color: var(--blue);
  margin-bottom: 14px;
}

.a2zh-who-title {
  margin-left: auto;
  margin-right: auto;
}

.a2zh-who-intro {
  margin: 16px auto 0;
  max-width: 56ch;
  font-size: clamp(0.98rem, 1vw, 1.05rem);
  line-height: 1.85;
  color: rgba(12, 31, 46, 0.64);
}

.a2zh-who .a2zh-actions {
  justify-content: center;
  margin-top: clamp(20px, 2.6vw, 30px);
}

.a2zh-who-banner {
  position: relative;
  border-radius: 22px;
  overflow: hidden;
  aspect-ratio: 24 / 8;
  border: 1px solid rgba(26, 111, 168, 0.18);
  box-shadow: 0 24px 60px rgba(13, 79, 124, 0.16);
  margin-bottom: clamp(16px, 2.4vw, 28px);
}

.a2zh-who-banner img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
}

.a2zh-who-banner::after {
  content: "";
  position: absolute;
  inset: 0;
  background: linear-gradient(105deg, rgba(7, 26, 48, 0.62) 0%, rgba(7, 26, 48, 0.18) 42%, transparent 70%);
}

.a2zh-who-tag {
  position: absolute;
  left: clamp(18px, 2.4vw, 32px);
  bottom: clamp(18px, 2.4vw, 30px);
  z-index: 1;
  display: inline-flex;
  align-items: center;
  gap: 9px;
  padding: 11px 18px;
  border-radius: 999px;
  background: rgba(255, 255, 255, 0.16);
  border: 1px solid rgba(255, 255, 255, 0.3);
  -webkit-backdrop-filter: blur(10px);
  backdrop-filter: blur(10px);
  font-size: 0.7rem;
  font-weight: 700;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  color: #fff;
}

.a2zh-who-tag::before {
  content: "";
  width: 8px;
  height: 8px;
  border-radius: 999px;
  background: var(--blue-lt);
  box-shadow: 0 0 0 4px rgba(45, 147, 212, 0.3);
}

.a2zh-who-grid {
  position: relative;
  display: grid;
  grid-template-columns: repeat(4, minmax(0, 1fr));
  gap: 14px;
}

/* fully transparent glass by default; on hover, a glassy blue tint */
.a2zh-who-item {
  position: relative;
  z-index: 1;
  padding: clamp(22px, 2.4vw, 30px);
  border-radius: 16px;
  background: rgba(255, 255, 255, 0.06);
  -webkit-backdrop-filter: blur(4px) saturate(1.3);
  backdrop-filter: blur(4px) saturate(1.3);
  border: 1px solid rgba(255, 255, 255, 0.45);
  box-shadow: 0 8px 26px rgba(13, 79, 124, 0.05);
  transition: background 0.3s var(--ease), border-color 0.3s var(--ease), box-shadow 0.3s var(--ease), transform 0.3s var(--ease);
}

.a2zh-who-item:hover {
  background: linear-gradient(135deg, rgba(45, 147, 212, 0.22), rgba(26, 111, 168, 0.12));
  -webkit-backdrop-filter: blur(10px) saturate(1.5);
  backdrop-filter: blur(10px) saturate(1.5);
  border-color: rgba(45, 147, 212, 0.55);
  box-shadow: 0 18px 40px rgba(45, 147, 212, 0.18);
  transform: translateY(-4px);
}

.a2zh-who-item strong {
  display: block;
  font-family: var(--serif);
  font-weight: 700;
  font-size: clamp(1.05rem, 1.3vw, 1.24rem);
  line-height: 1.25;
  color: var(--ink);
}

.a2zh-who-item p {
  margin-top: 10px;
  font-size: 0.9rem;
  line-height: 1.7;
  color: rgba(12, 31, 46, 0.62);
}

@media (max-width: 920px) {
  .a2zh-who-grid {
    grid-template-columns: repeat(2, minmax(0, 1fr));
  }

  .a2zh-who-banner {
    aspect-ratio: 16 / 9;
  }
}

@media (max-width: 540px) {
  .a2zh-who-grid {
    grid-template-columns: 1fr;
  }
}

/* ════ PROMISE / HIGHER STANDARD (radial hub) ════ */
.a2zh-promise {
  background: linear-gradient(150deg, var(--navy) 0%, var(--navy-deep) 55%, var(--navy-deepest) 100%);
  color: #fff;
  position: relative;
  overflow: hidden;
}

.a2zh-promise::before {
  content: "";
  position: absolute;
  inset: 0;
  pointer-events: none;
  background:
    radial-gradient(ellipse at 10% 6%, rgba(45, 147, 212, 0.22) 0%, transparent 46%),
    radial-gradient(ellipse at 94% 98%, rgba(26, 111, 168, 0.18) 0%, transparent 52%);
}

.a2zh-promise-head {
  position: relative;
  text-align: center;
  max-width: 62ch;
  margin: 0 auto clamp(40px, 5vw, 70px);
}

.a2zh-promise-eyebrow {
  display: inline-block;
  font-size: 0.66rem;
  font-weight: 700;
  letter-spacing: 0.16em;
  text-transform: uppercase;
  color: #8fd6f4;
  margin-bottom: 14px;
}

.a2zh-promise-title {
  color: #fff;
  margin-left: auto;
  margin-right: auto;
}

.a2zh-promise-title span,
.a2zh-promise-title em {
  color: #8fd6f4;
  font-style: normal;
}

.a2zh-promise-intro {
  margin-top: 16px;
  color: rgba(255, 255, 255, 0.78);
  font-size: clamp(0.98rem, 1vw, 1.05rem);
  line-height: 1.85;
}

/* the hub: points | image | points */
.a2zh-hub {
  position: relative;
  display: grid;
  grid-template-columns: 1fr minmax(220px, 340px) 1fr;
  gap: clamp(24px, 4vw, 72px);
  align-items: center;
}

.a2zh-hub-svg {
  position: absolute;
  inset: 0;
  width: 100%;
  height: 100%;
  overflow: visible;
  pointer-events: none;
  z-index: 0;
}

.a2zh-hub-line {
  fill: none;
  stroke: rgba(143, 214, 244, 0.45);
  stroke-width: 2;
  stroke-dasharray: 3 7;
  stroke-linecap: round;
}

.a2zh-hub-end {
  fill: var(--blue-lt);
}

.a2zh-hub-col {
  position: relative;
  z-index: 1;
  display: flex;
  flex-direction: column;
  gap: clamp(16px, 2.2vw, 30px);
}

.a2zh-hub-center {
  position: relative;
  z-index: 1;
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: clamp(14px, 1.6vw, 20px);
}

.a2zh-hub-media {
  position: relative;
  width: 100%;
  aspect-ratio: 1 / 1;
  border-radius: 50%;
  overflow: hidden;
  border: 4px solid rgba(143, 214, 244, 0.3);
  box-shadow: 0 30px 70px rgba(3, 13, 26, 0.55), 0 0 0 12px rgba(255, 255, 255, 0.04);
}

.a2zh-hub-media img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
}

.a2zh-hub-badge {
  display: inline-flex;
  align-items: center;
  gap: 9px;
  padding: 10px 18px;
  border-radius: 999px;
  background: rgba(7, 26, 48, 0.8);
  border: 1px solid var(--glass-dark-brd);
  -webkit-backdrop-filter: blur(10px);
  backdrop-filter: blur(10px);
  white-space: nowrap;
}

.a2zh-hub-badge strong {
  font-family: var(--serif);
  font-size: 1.05rem;
  font-weight: 700;
  color: #fff;
  line-height: 1;
}

.a2zh-hub-badge span {
  font-size: 0.55rem;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  color: #8fd6f4;
  font-weight: 700;
}

.a2zh-hub-point {
  position: relative;
  display: flex;
  gap: 12px;
  align-items: flex-start;
  padding: 16px 18px;
  border-radius: 14px;
  background: var(--glass-dark-bg);
  border: 1px solid var(--glass-dark-brd);
  transition: background 0.25s var(--ease), transform 0.25s var(--ease), border-color 0.25s var(--ease);
}

.a2zh-hub-point:hover {
  background: rgba(255, 255, 255, 0.1);
  border-color: rgba(45, 147, 212, 0.5);
  transform: translateY(-3px);
}

.a2zh-hub-point span {
  font-size: 0.9rem;
  line-height: 1.5;
  color: rgba(255, 255, 255, 0.85);
  font-weight: 500;
}

.a2zh-hub-check {
  flex-shrink: 0;
  width: 24px;
  height: 24px;
  border-radius: 7px;
  background: linear-gradient(135deg, var(--blue-lt), var(--blue-dk));
  position: relative;
  box-shadow: 0 4px 12px rgba(45, 147, 212, 0.35);
}

.a2zh-hub-check::before {
  content: "";
  position: absolute;
  top: 46%;
  left: 50%;
  width: 5px;
  height: 9px;
  border-right: 2px solid #fff;
  border-bottom: 2px solid #fff;
  transform: translate(-50%, -60%) rotate(45deg);
}

/* left column mirrors toward the image */
.a2zh-hub-col--left .a2zh-hub-point {
  flex-direction: row-reverse;
  text-align: right;
}

.a2zh-promise-foot {
  position: relative;
  text-align: center;
  margin-top: clamp(40px, 5vw, 66px);
}

.a2zh-promise-quote {
  max-width: 60ch;
  margin: 0 auto;
  font-family: var(--serif);
  font-style: italic;
  font-weight: 500;
  font-size: clamp(1.15rem, 1.8vw, 1.5rem);
  line-height: 1.5;
  color: #fff;
}

.a2zh-promise-quote::before {
  content: "“";
  color: #8fd6f4;
}

.a2zh-promise-quote::after {
  content: "”";
  color: #8fd6f4;
}

.a2zh-promise .a2zh-actions {
  justify-content: center;
  margin-top: clamp(24px, 3vw, 32px);
}

.a2zh-promise .a2zh-btn--solid {
  background: #fff;
  color: var(--navy-deep);
  box-shadow: 0 10px 26px rgba(0, 0, 0, 0.3);
}

.a2zh-promise .a2zh-btn--solid:hover {
  background: var(--sky);
  color: var(--navy-deep);
  transform: translateY(-1px);
}

/* mobile: image on top, points stacked, no connectors */
@media (max-width: 900px) {
  .a2zh-hub {
    grid-template-columns: 1fr;
    gap: clamp(14px, 3vw, 22px);
  }

  .a2zh-hub-svg {
    display: none;
  }

  .a2zh-hub-center {
    order: -1;
    margin-bottom: clamp(8px, 2vw, 18px);
  }

  .a2zh-hub-media {
    width: min(72%, 260px);
  }

  .a2zh-hub-col--left .a2zh-hub-point {
    flex-direction: row;
    text-align: left;
  }
}

/* ════ SECTORS ════ */
.a2zh-sectors {
  display: grid;
  grid-template-columns: repeat(3, minmax(0, 1fr));
  gap: 16px;
}

.a2zh-sector {
  display: flex;
  flex-direction: column;
  min-height: 230px;
}

.a2zh-sector h3 {
  font-family: var(--serif);
  font-weight: 600;
  font-size: 1.58rem;
  line-height: 1.15;
  color: var(--ink);
}

.a2zh-sector p {
  margin-top: 14px;
  font-size: 1.02rem;
  line-height: 1.78;
  color: rgba(12, 31, 46, 0.6);
  font-weight: 400;
}

.a2zh-sector-link {
  display: inline-flex;
  align-self: flex-start;
  align-items: center;
  margin-top: auto;
  padding-top: 22px;
  font-size: 0.82rem;
  font-weight: 700;
  letter-spacing: 0.14em;
  text-transform: uppercase;
  color: var(--blue);
}

/* ════ STEPS ════ */
.a2zh-steps {
  display: grid;
  gap: 12px;
  margin-top: 28px;
}

.a2zh-step {
  display: grid;
  grid-template-columns: 44px minmax(0, 1fr);
  gap: 18px;
  align-items: center;
  min-height: 92px;
  background: var(--glass-bg);
  -webkit-backdrop-filter: blur(10px) saturate(1.4);
  backdrop-filter: blur(10px) saturate(1.4);
  border: 1px solid var(--glass-brd);
  padding: 20px 24px;
  transition: transform 0.28s var(--ease), box-shadow 0.28s var(--ease), background 0.28s var(--ease), border-color 0.28s var(--ease);
}

.a2zh-step:hover {
  transform: translateX(6px);
  background: rgba(255, 255, 255, 0.85);
  border-color: rgba(45, 147, 212, 0.45);
  box-shadow: 0 14px 32px rgba(8, 29, 51, 0.14);
}

/* arrow marker (replaces numbers) */
.a2zh-step-marker {
  width: 44px;
  height: 44px;
  border-radius: 12px;
  background: linear-gradient(135deg, var(--blue) 0%, var(--blue-dk) 100%);
  position: relative;
  flex-shrink: 0;
  box-shadow: 0 6px 16px rgba(8, 29, 51, 0.22);
  transition: transform 0.28s var(--ease);
}

.a2zh-step-marker::before {
  content: "";
  position: absolute;
  top: 50%;
  left: 50%;
  width: 9px;
  height: 9px;
  border-top: 2px solid #fff;
  border-right: 2px solid #fff;
  transform: translate(-60%, -50%) rotate(45deg);
}

.a2zh-step:hover .a2zh-step-marker {
  transform: scale(1.08) rotate(3deg);
}

.a2zh-step strong {
  display: block;
  font-size: 0.98rem;
  font-weight: 700;
  line-height: 1.4;
  color: var(--ink);
}

.a2zh-step span {
  display: block;
  margin-top: 5px;
  font-size: 0.88rem;
  line-height: 1.66;
  color: rgba(12, 31, 46, 0.6);
  font-weight: 400;
}

/* ════ TESTIMONIALS ════ */
.a2zh-tcard {
  display: flex;
  flex-direction: column;
  gap: 16px;
}

.a2zh-tcard-media {
  position: relative;
  overflow: hidden;
  clip-path: var(--cut8);
  aspect-ratio: 4 / 3;
}

.a2zh-tcard-media img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 0.4s var(--ease);
}

.a2zh-tcard:hover .a2zh-tcard-media img {
  transform: scale(1.045);
}

.a2zh-tcard-play {
  position: absolute;
  inset: 0;
  display: flex;
  align-items: center;
  justify-content: center;
}

.a2zh-tcard-play i {
  width: 52px;
  height: 52px;
  border-radius: 999px;
  background: rgba(26, 111, 168, 0.82);
  color: #fff;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 1.1rem;
  transition: transform 0.25s var(--ease), background 0.25s;
}

.a2zh-tcard:hover .a2zh-tcard-play i {
  transform: scale(1.08);
  background: var(--blue);
}

.a2zh-tcard h5 {
  font-family: var(--serif);
  font-weight: 600;
  font-size: 1.2rem;
  color: var(--ink);
  line-height: 1.2;
}

.a2zh-tcard h6 {
  font-size: 0.78rem;
  font-weight: 700;
  letter-spacing: 0.08em;
  text-transform: uppercase;
  color: var(--blue);
  margin-top: 4px;
}

.a2zh-tcard p {
  margin-top: 4px;
  font-size: 0.95rem;
  line-height: 1.75;
  color: rgba(12, 31, 46, 0.62);
  font-weight: 400;
}

.a2zh-tcard .a2zh-stars {
  color: #f4a900;
  letter-spacing: 0.1em;
  margin-top: 10px;
  font-size: 0.95rem;
}

.a2zh-tcard .a2zh-stars .off {
  color: rgba(12, 31, 46, 0.18);
}

/* ════ GOOGLE REVIEWS ════ */
.a2zh-reviews-head {
  text-align: center;
  max-width: 720px;
  margin: 0 auto clamp(36px, 5vw, 56px);
}

.a2zh-reviews-head .a2zh-title {
  margin-left: auto;
  margin-right: auto;
}

.a2zh-reviews-head .a2zh-copy {
  margin-top: 18px;
}

.a2zh-reviews-widget {
  width: 100%;
}

.a2zh-reviews-cta {
  display: flex;
  justify-content: center;
  margin-top: clamp(30px, 4vw, 48px);
}

/* ════ BLOG ════ */
.a2zh-blog {
  display: grid;
  grid-template-columns: repeat(3, minmax(0, 1fr));
  gap: 16px;
}

.a2zh-blog-card {
  display: flex;
  flex-direction: column;
  padding: 0;
}

.a2zh-blog-thumb {
  position: relative;
  overflow: hidden;
  aspect-ratio: 16 / 10;
}

.a2zh-blog-thumb img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 0.4s var(--ease);
}

.a2zh-blog-card:hover .a2zh-blog-thumb img {
  transform: scale(1.05);
}

.a2zh-blog-cat {
  position: absolute;
  top: 14px;
  left: 14px;
  background: var(--blue);
  color: #fff;
  font-size: 0.62rem;
  font-weight: 700;
  letter-spacing: 0.1em;
  text-transform: uppercase;
  padding: 6px 12px;
  clip-path: var(--cut7);
}

.a2zh-blog-body {
  padding: clamp(22px, 2.4vw, 30px);
  display: flex;
  flex-direction: column;
  gap: 10px;
}

.a2zh-blog-date {
  display: flex;
  align-items: center;
  gap: 8px;
  font-size: 0.72rem;
  font-weight: 600;
  letter-spacing: 0.06em;
  text-transform: uppercase;
  color: var(--blue);
}

.a2zh-blog-body h3 {
  font-family: var(--serif);
  font-weight: 600;
  font-size: 1.25rem;
  line-height: 1.3;
  color: var(--ink);
  transition: color 0.2s;
}

.a2zh-blog-card:hover .a2zh-blog-body h3 {
  color: var(--blue);
}

.a2zh-blog-btn {
  display: flex;
  justify-content: center;
  margin-top: clamp(32px, 4vw, 48px);
}

/* ════ CTA / GET A QUOTE ════ */
.a2zh-cta {
  background: linear-gradient(150deg, var(--navy) 0%, var(--navy-deep) 55%, var(--navy-deepest) 100%);
  color: #fff;
  position: relative;
  overflow: hidden;
}

.a2zh-cta::before {
  content: "";
  position: absolute;
  inset: 0;
  background:
    radial-gradient(ellipse at 85% 8%, rgba(45, 147, 212, 0.28) 0%, transparent 48%),
    radial-gradient(ellipse at 8% 100%, rgba(26, 111, 168, 0.18) 0%, transparent 52%);
  pointer-events: none;
}

.a2zh-cta .a2zh-label {
  color: #bfe6fb;
}

.a2zh-cta .a2zh-title {
  color: #fff;
}

.a2zh-cta .a2zh-title span {
  color: #8fd6f4;
}

.a2zh-cta .a2zh-copy {
  color: rgba(255, 255, 255, 0.82);
}

.a2zh-cta-split {
  display: grid;
  grid-template-columns: minmax(0, 1fr) minmax(300px, 0.9fr);
  gap: clamp(40px, 6vw, 90px);
  align-items: start;
  position: relative;
}

.a2zh-cta .a2zh-btn--soft {
  background: #fff;
  color: var(--blue-dk);
}

.a2zh-cta .a2zh-btn--soft:hover {
  background: var(--sky);
}

.a2zh-cta .a2zh-btn--ghost {
  color: #fff;
  border-color: rgba(255, 255, 255, 0.4);
}

.a2zh-cta .a2zh-btn--ghost:hover {
  border-color: #fff;
  background: rgba(255, 255, 255, 0.08);
}

.a2zh-contact-stack {
  display: grid;
  gap: 1px;
  background: rgba(255, 255, 255, 0.12);
  border: 1px solid var(--glass-dark-brd);
  border-radius: 16px;
  overflow: hidden;
  -webkit-backdrop-filter: blur(14px);
  backdrop-filter: blur(14px);
}

.a2zh-contact-card {
  background: var(--glass-dark-bg);
  padding: 24px 26px;
  transition: background 0.25s var(--ease);
}

.a2zh-contact-card:hover {
  background: rgba(255, 255, 255, 0.1);
}

.a2zh-contact-card span {
  display: block;
  margin-bottom: 8px;
  font-size: 0.64rem;
  font-weight: 700;
  letter-spacing: 0.14em;
  text-transform: uppercase;
  color: #8fd6f4;
}

.a2zh-contact-card a,
.a2zh-contact-card strong {
  font-family: var(--serif);
  font-weight: 600;
  font-size: clamp(1.1rem, 1.6vw, 1.4rem);
  line-height: 1.35;
  color: #fff;
}

.a2zh-foot-note {
  text-align: center;
  max-width: 900px;
  margin: 0 auto;
  font-size: 0.9rem;
  line-height: 1.8;
  color: rgba(12, 31, 46, 0.5);
}

/* ─── Reveal ─── */
.a2zh-rv {
  opacity: 0;
  transform: translateY(16px);
  transition: opacity 0.7s var(--ease), transform 0.7s var(--ease);
}

.a2zh-rv.in {
  opacity: 1;
  transform: none;
}

.a2zh-d1 {
  transition-delay: 0.08s;
}

.a2zh-d2 {
  transition-delay: 0.16s;
}

.a2zh-d3 {
  transition-delay: 0.24s;
}

/* ─── Responsive ─── */
@media (max-width: 1020px) {

  .a2zh-hero-grid,
  .a2zh-split,
  .a2zh-split--rev,
  .a2zh-cta-split {
    grid-template-columns: 1fr;
  }

  .a2zh-metrics-grid {
    grid-template-columns: repeat(3, minmax(0, 1fr));
  }

  .a2zh-metric:nth-child(3) {
    border-right: 0;
  }

  .a2zh-metric:nth-child(n + 4) {
    border-top: 1px solid rgba(26, 111, 168, 0.12);
  }

  .a2zh-grid-3,
  .a2zh-sectors,
  .a2zh-blog {
    grid-template-columns: 1fr 1fr;
  }

  .a2zh-split--rev .a2zh-media,
  .a2zh-split--rev .a2zh-photo-stack {
    order: -1;
  }
}

@media (max-width: 680px) {

  .a2zh-points,
  .a2zh-metrics-grid,
  .a2zh-grid-3,
  .a2zh-sectors,
  .a2zh-blog {
    grid-template-columns: 1fr;
  }

  .a2zh-point:nth-child(odd) {
    border-right: 0;
  }

  .a2zh-metric {
    border-right: 0;
    border-top: 1px solid rgba(26, 111, 168, 0.12);
  }

  .a2zh-metric:first-child {
    border-top: 0;
  }

  .a2zh-actions,
  .a2zh-reviews-cta,
  .a2zh-blog-btn {
    flex-direction: column;
    align-items: stretch;
  }

  .a2zh-btn {
    width: 100%;
    justify-content: center;
  }
}

@media (prefers-reduced-motion: reduce) {
  .a2zh-rv {
    opacity: 1;
    transform: none;
  }

  .a2zh-tcard-media img,
  .a2zh-blog-thumb img {
    transition: none;
  }

  .a2zh-card::after {
    display: none;
  }

  .a2zh-card {
    transform: none !important;
  }
}
</style>

<main class="a2zh-home" id="a2zh-home">

  <!-- ════════ HERO ════════ -->
  <section class="a2zh-hero">
    <div class="a2zh-wrap">
      <div class="a2zh-hero-grid">
        <h1 class="a2zh-rv a2zh-d1">
          <?php if ($hero_title) { echo $hero_title; } else { ?>
          Your business has grown. <span>Is your accounting keeping up?</span>
          <?php } ?>
        </h1>
        <p class="a2zh-hero-sub a2zh-rv a2zh-d2">
          <?php echo $hero_sub ? esc_html(wp_strip_all_tags($hero_sub)) : 'FCCA-qualified chartered accountants for ambitious UK businesses.'; ?>
        </p>
        <div class="a2zh-actions a2zh-rv a2zh-d2">
          <a class="a2zh-btn a2zh-btn--solid"
            href="<?php echo esc_url($btn_1_url); ?>"><?php echo esc_html($btn_1_title); ?></a>
          <a class="a2zh-btn a2zh-btn--ghost"
            href="<?php echo esc_url($btn_2_url); ?>"><?php echo esc_html($btn_2_title); ?></a>
        </div>
      </div>
    </div>
  </section>


  <!-- ════════ THREE PODS / FEATURES ════════ -->
  <section class="a2zh-section a2zh-pods-sec">
    <div class="a2zh-wrap">
      <div class="a2zh-head">
        <div>
          <span class="a2zh-label a2zh-rv">Built on structure, focused on growth</span>
          <h2 class="a2zh-title a2zh-rv a2zh-d1">
            <?php echo get_field('focus_title') ?: 'Three things that change when you <span>work with A2Z.</span>'; ?>
          </h2>
        </div>
        <p class="a2zh-copy a2zh-head-copy a2zh-rv a2zh-d2">The firm is built around proactive planning, reliable
          communication, and layered review. That structure is what lets growing businesses make decisions with
          confidence.</p>
      </div>

      <div class="a2zh-pods3">
        <div class="a2zh-pods3-thread" aria-hidden="true"></div>
        <?php
        if (have_rows('threepods_repeater')) :
          $i = 0;
          while (have_rows('threepods_repeater')) : the_row();
            $i++;
            $icon = get_sub_field('icon');
        ?>
        <div class="a2zh-pod3 a2zh-rv a2zh-d<?php echo $i; ?>">
          <span class="a2zh-pod3-num"><?php echo sprintf('%02d', $i); ?></span>
          <article class="a2zh-card a2zh-feature">
            <?php if ($icon) : ?>
            <img class="a2zh-feature-icon" src="<?php echo esc_url($icon['url']); ?>"
              alt="<?php echo esc_attr($icon['alt'] ?: get_sub_field('title')); ?>" />
            <?php endif; ?>
            <h3><?php echo get_sub_field('title'); ?></h3>
            <p><?php echo get_sub_field('content'); ?></p>
          </article>
        </div>
        <?php
          endwhile;
        else :
          foreach ($threepods_default as $i => $pod) :
        ?>
        <div class="a2zh-pod3 a2zh-rv a2zh-d<?php echo $i + 1; ?>">
          <span class="a2zh-pod3-num"><?php echo sprintf('%02d', $i + 1); ?></span>
          <article class="a2zh-card a2zh-feature">
            <h3><?php echo $pod[0]; ?></h3>
            <p><?php echo $pod[1]; ?></p>
          </article>
        </div>
        <?php endforeach; endif; ?>
      </div>
    </div>
  </section>


  <!-- ════════ WHO THIS IS FOR ════════ -->
  <?php
  $why_choose_img_1 = get_field('why_choose_img_1');
  $why_choose_btn   = get_field('why_choose_btn');
  ?>
  <section class="a2zh-section a2zh-section--tint a2zh-who">
    <div class="a2zh-wrap">
      <div class="a2zh-who-head a2zh-rv">
        <h2 class="a2zh-title a2zh-who-title">
          <?php echo get_field('why_choose_title') ?: $who_title_default; ?>
        </h2>
        <?php if (get_field('why_choose_content')) : ?>
        <div class="a2zh-who-intro"><?php echo get_field('why_choose_content'); ?></div>
        <?php else : ?>
        <p class="a2zh-who-intro">Our clients are not looking for a cheaper accountant. They want structure,
          responsiveness, and a team that takes ownership of the detail so they can focus on growth.</p>
        <?php endif; ?>
        <div class="a2zh-actions">
          <a class="a2zh-btn a2zh-btn--ghost"
            href="<?php echo $why_choose_btn ? esc_url($why_choose_btn['url']) : '/about-us/'; ?>"><?php echo $why_choose_btn ? esc_html($why_choose_btn['title']) : 'Meet the firm'; ?></a>
        </div>
      </div>

      <figure class="a2zh-who-banner a2zh-rv">
        <img
          src="<?php echo $why_choose_img_1 ? esc_url($why_choose_img_1['url']) : 'https://a2zaccounting.co.uk/wp-content/uploads/2025/08/Home-Page-photo.webp'; ?>"
          alt="A2Z Accounting Solutions for high growth business owners in the UK" loading="lazy" />
        <span class="a2zh-who-tag">High-growth UK businesses</span>
      </figure>

      <div class="a2zh-who-grid">
        <?php $wi = 0; foreach ($who_items as $it) : $wi++; ?>
        <article class="a2zh-who-item a2zh-rv a2zh-d<?php echo min($wi, 3); ?>">
          <strong><?php echo $it[0]; ?></strong>
          <p><?php echo $it[1]; ?></p>
        </article>
        <?php endforeach; ?>
      </div>
    </div>
  </section>





  <!-- ════════ OUR PROMISE / HIGHER STANDARD ════════ -->
  <?php
  $our_promise_img = get_field('our_promise_img');
  $our_promise_btn = get_field('our_promise_btn');
  $promise_btn_title = $our_promise_btn['title'] ?? 'Discuss your requirements';
  $promise_btn_url   = $our_promise_btn['url'] ?? '/contact/';
  ?>
  <?php
  $promise_left  = array_slice($promise_points, 0, 3);
  $promise_right = array_slice($promise_points, 3);
  ?>
  <section class="a2zh-section a2zh-promise">
    <div class="a2zh-wrap">
      <div class="a2zh-promise-head a2zh-rv">

        <h2 class="a2zh-title a2zh-promise-title">
          <?php echo get_field('our_promise') ?: $promise_default_title; ?>
        </h2>
        <?php if (get_field('our_promise_content')) : ?>
        <div class="a2zh-promise-intro"><?php echo get_field('our_promise_content'); ?></div>
        <?php else : ?>

        <?php endif; ?>
      </div>

      <div class="a2zh-hub" id="a2zhHub">
        <svg class="a2zh-hub-svg" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"></svg>

        <div class="a2zh-hub-col a2zh-hub-col--left">
          <?php foreach ($promise_left as $pp) : ?>
          <div class="a2zh-hub-point"><i class="a2zh-hub-check"></i><span><?php echo $pp; ?></span></div>
          <?php endforeach; ?>
        </div>

        <div class="a2zh-hub-center">
          <figure class="a2zh-hub-media">
            <img
              src="<?php echo $our_promise_img ? esc_url($our_promise_img['url']) : 'https://a2zaccounting.co.uk/wp-content/uploads/2025/04/promise-img.jpg'; ?>"
              alt="A2Z Accounting higher standard of financial management for UK businesses" loading="lazy" />
          </figure>
          <div class="a2zh-hub-badge">
            <strong>FCCA</strong>
            <span>Director-led oversight</span>
          </div>
        </div>

        <div class="a2zh-hub-col a2zh-hub-col--right">
          <?php foreach ($promise_right as $pp) : ?>
          <div class="a2zh-hub-point"><i class="a2zh-hub-check"></i><span><?php echo $pp; ?></span></div>
          <?php endforeach; ?>
        </div>
      </div>

      <div class="a2zh-promise-foot a2zh-rv">
        <blockquote class="a2zh-promise-quote"><?php echo $promise_quote; ?></blockquote>
        <div class="a2zh-actions">
          <button type="button" data-source="<?php echo esc_attr($promise_btn_title); ?>" data-bs-toggle="modal"
            data-bs-target="#enquireModal"
            class="a2zh-btn a2zh-btn--solid"><?php echo esc_html($promise_btn_title); ?></button>
        </div>
      </div>
    </div>
  </section>

  <!-- ════════ SECTORS / WHO WE HELP ════════ -->
  <section class="a2zh-section a2zh-section--tint">
    <div class="a2zh-wrap">
      <div class="a2zh-head">
        <div>
          <span class="a2zh-label a2zh-rv">Who we help</span>
          <h2 class="a2zh-title a2zh-rv a2zh-d1">
            <?php echo get_field('we_help') ?: 'Deep sector expertise across <span>six key industries.</span>'; ?>
          </h2>
        </div>
        <p class="a2zh-copy a2zh-head-copy a2zh-rv a2zh-d2">
          <?php echo get_field('we_help_content') ?: 'Each sector carries its own compliance requirements, tax complexities and reporting needs. Our clients receive advice from specialists who understand their industry.'; ?>
        </p>
      </div>

      <div class="a2zh-sectors">
        <?php
        if (have_rows('we_help_repeater')) :
          while (have_rows('we_help_repeater')) : the_row();
            $link = get_sub_field('link');
            $link_url = $link['url'] ?? '#';
        ?>
        <a class="a2zh-card a2zh-sector a2zh-rv" href="<?php echo esc_url($link_url); ?>">
          <h3><?php echo get_sub_field('title'); ?></h3>
          <p><?php echo get_sub_field('content'); ?></p>
          <span class="a2zh-sector-link">Explore</span>
        </a>
        <?php
          endwhile;
        else :
          foreach ($sectors_default as $sc) :
        ?>
        <a class="a2zh-card a2zh-sector a2zh-rv" href="<?php echo esc_url($sc[2]); ?>">
          <h3><?php echo $sc[0]; ?></h3>
          <p><?php echo $sc[1]; ?></p>
          <span class="a2zh-sector-link">Explore</span>
        </a>
        <?php endforeach; endif; ?>
      </div>
    </div>
  </section>

  <!-- ════════ MOVING TO A2Z / SWITCH ════════ -->
  <?php
  $switching_img_1 = get_field('switching_img_1');
  $switching_img_2 = get_field('switching_img_2');
  $switching_img_3 = get_field('switching_img_3');
  $switch_imgs = [
    $switching_img_1 ? esc_url($switching_img_1['url']) : 'https://images.unsplash.com/photo-1521737604893-d14cc237f11d?auto=format&fit=crop&w=900&h=900&q=80',
    $switching_img_2 ? esc_url($switching_img_2['url']) : 'https://images.unsplash.com/photo-1600880292203-757bb62b4baf?auto=format&fit=crop&w=900&h=900&q=80',
    $switching_img_3 ? esc_url($switching_img_3['url']) : 'https://images.unsplash.com/photo-1554224155-6726b3ff858f?auto=format&fit=crop&w=900&h=900&q=80',
  ];
  // bitten-corner shape per image: 1 → bottom-right, 2 → left (top+bottom), 3 → top-right
  $switch_bites = ['a2zh-path-media--bite-br', 'a2zh-path-media--bite-l', 'a2zh-path-media--bite-tr'];
  ?>
  <section class="a2zh-section">
    <div class="a2zh-wrap">
      <div class="a2zh-path" id="a2zhPath">
        <svg class="a2zh-path-svg" aria-hidden="true" xmlns="http://www.w3.org/2000/svg">
          <path class="a2zh-path-base" d=""></path>
          <path class="a2zh-path-prog" d=""></path>
        </svg>

        <div class="a2zh-path-aside a2zh-path-aside--title a2zh-rv">
          <h2 class="a2zh-title">
            <?php echo get_field('switching') ?: 'Structured, straightforward <span>from day one.</span>'; ?>
          </h2>
          <div class="a2zh-actions">
            <a class="a2zh-btn a2zh-btn--solid" href="/contact/">Start the conversation</a>
          </div>
        </div>

        <?php foreach ($switch_steps as $i => $st) :
          $side = ($i % 2 === 0) ? 'left' : 'right';
        ?>
        <div class="a2zh-path-item a2zh-path-item--<?php echo $side; ?> a2zh-rv">
          <figure class="a2zh-path-media <?php echo $switch_bites[$i] ?? ''; ?>">
            <img src="<?php echo $switch_imgs[$i]; ?>" alt="<?php echo esc_attr($st[0]); ?>" loading="lazy" />
          </figure>
          <div class="a2zh-path-text">
            <strong><?php echo $st[0]; ?></strong>
            <span><?php echo $st[1]; ?></span>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- ════════ TESTIMONIALS ════════ -->
  <section class="a2zh-section a2zh-section--tint" id="testimonials">
    <div class="a2zh-wrap">
      <div class="a2zh-head">
        <div>
          <span class="a2zh-label a2zh-rv">Trusted by ambitious businesses</span>
          <h2 class="a2zh-title a2zh-rv a2zh-d1">
            <?php echo get_field('testimonials') ?: 'Hear it from the businesses <span>we work with.</span>'; ?>
          </h2>
        </div>
        <div class="a2zh-head-copy a2zh-rv a2zh-d2">
          <p class="a2zh-copy">
            <?php echo get_field('testimonial_text') ?: 'Real clients. Real results. Watch business owners explain what changed when their accounts moved from reactive compliance to proactive financial management.'; ?>
          </p>
          <div class="a2zh-actions"><a class="a2zh-btn a2zh-btn--ghost" href="/testimonial/">See all stories</a></div>
        </div>
      </div>

      <div class="a2zh-grid-3">
        <?php
        $t_args = array(
          'posts_per_page' => 6,
          'post_type' => 'testimonials',
          'orderby' => 'date',
          'order' => 'DESC'
        );
        $t_results = new WP_Query($t_args);
        $t_i = 0;
        while ($t_results->have_posts()) : $t_results->the_post();
          $t_i++;
          $t_image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), "medium");
          $t_feature_image = $t_image[0] ?? '';
          $t_designation = get_field('designation', get_the_ID());
          $t_review = (int) get_field('star', get_the_ID());
          $t_video = get_field('video_file', get_the_ID());
          $t_video_url = is_array($t_video) ? ($t_video['url'] ?? '#') : ($t_video ?: '#');
        ?>
        <article class="a2zh-card a2zh-tcard a2zh-rv a2zh-d<?php echo (($t_i - 1) % 3) + 1; ?>">
          <a class="a2zh-tcard-media" href="<?php echo esc_url($t_video_url); ?>" data-lity>
            <?php if ($t_feature_image) : ?><img src="<?php echo esc_url($t_feature_image); ?>"
              alt="<?php echo esc_attr(get_the_title()); ?>" loading="lazy" /><?php endif; ?>
            <span class="a2zh-tcard-play"><i class="fa-solid fa-circle-play"></i></span>
          </a>
          <div>
            <h5><?php echo get_the_title(); ?></h5>
            <?php if ($t_designation) : ?><h6><?php echo $t_designation; ?></h6><?php endif; ?>
            <p><?php echo wp_trim_words(get_the_content(), 26); ?></p>
            <?php if ($t_review) : ?>
            <div class="a2zh-stars">
              <?php for ($s = 1; $s <= 5; $s++) { echo $s <= $t_review ? '&#9733;' : '<span class="off">&#9733;</span>'; } ?>
            </div>
            <?php endif; ?>
          </div>
        </article>
        <?php endwhile; wp_reset_postdata(); ?>
      </div>
    </div>
  </section>

  <!-- ════════ GOOGLE REVIEWS ════════ -->
  <section class="a2zh-section" id="google_reviews">
    <div class="a2zh-wrap">
      <div class="a2zh-reviews-head">
        <span class="a2zh-label a2zh-rv">Google Reviews</span>
        <h2 class="a2zh-title a2zh-rv a2zh-d1">
          <?php echo get_field('google_review_heading', 'option') ?: 'What our clients say <span>in their own words.</span>'; ?>
        </h2>
        <?php if (get_field('google_review_sub_heading', 'option')) : ?>
        <p class="a2zh-copy a2zh-rv a2zh-d2"><?php echo get_field('google_review_sub_heading', 'option'); ?></p>
        <?php else : ?>
        <p class="a2zh-copy a2zh-rv a2zh-d2">Verified reviews from business owners who rely on A2Z for complete
          accounting support, tax planning, and financial clarity.</p>
        <?php endif; ?>
      </div>

      <div class="a2zh-reviews-widget a2zh-rv a2zh-d1">
        <?php echo get_field('google_review_shortcode', 'option'); ?>
      </div>

      <div class="a2zh-reviews-cta a2zh-rv a2zh-d2">
        <?php
        $review_link = get_field('google_review_link', 'option');
        $rev_url   = $review_link['url'] ?? 'https://g.page/r/CQKFgSng6bXTEAE/review';
        $rev_title = $review_link['title'] ?? 'Leave a review';
        $rev_target = $review_link['target'] ?? '_blank';
        ?>
        <a href="<?php echo esc_url($rev_url); ?>" target="<?php echo esc_attr($rev_target); ?>" rel="noopener"
          class="a2zh-btn a2zh-btn--ghost"><?php echo esc_html($rev_title); ?></a>
      </div>
    </div>
  </section>

  <!-- ════════ FREE RESOURCES / DOWNLOAD ════════ -->
  <?php
  $download_img = get_field('download_img');
  $download_file = get_field('download_file');
  $download_file_target = ($download_file && !empty($download_file['target'])) ? $download_file['target'] : '_self';
  ?>
  <section class="a2zh-section a2zh-section--tint">
    <div class="a2zh-wrap">
      <div class="a2zh-split a2zh-split--rev">
        <figure class="a2zh-media a2zh-media--wide a2zh-rv">
          <img
            src="<?php echo $download_img ? esc_url($download_img['url']) : 'https://a2zaccounting.co.uk/wp-content/uploads/2025/04/download_img1.png'; ?>"
            alt="A2Z Accounting free resources for growing UK businesses" loading="lazy" />
        </figure>
        <div>
          <span class="a2zh-label a2zh-rv">Free Resources</span>
          <h2 class="a2zh-title a2zh-rv a2zh-d1">
            <?php echo get_field('download_title') ?: 'Structured guides for <span>ambitious business owners.</span>'; ?>
          </h2>
          <p class="a2zh-copy a2zh-copy-spaced a2zh-rv a2zh-d2">
            <?php echo get_field('download_content') ?: 'Practical, no-jargon guides covering tax planning, company structuring, management accounts and financial decision-making, written for business owners who want clarity and confidence.'; ?>
          </p>
          <div class="a2zh-actions a2zh-rv">
            <a class="a2zh-btn a2zh-btn--solid" target="<?php echo esc_attr($download_file_target); ?>"
              href="<?php echo $download_file ? esc_url($download_file['url']) : '/free-resources/'; ?>"><?php echo $download_file ? esc_html($download_file['title']) : 'Download free resources'; ?></a>
            <a class="a2zh-btn a2zh-btn--ghost" href="/blog/">Read our blog</a>
          </div>
        </div>
      </div>
    </div>
  </section>



  <!-- ════════ CTA / GET A QUOTE ════════ -->
  <?php
  $focus_btn = get_field('focus_btn');
  $quote_btn_title = $focus_btn['title'] ?? 'Get an instant fee estimate';
  $quote_modal_target = is_page(36959) ? '#gitModal' : '#enquireModal';
  ?>
  <section class="a2zh-section a2zh-cta" id="getquote">
    <div class="a2zh-wrap">
      <div class="a2zh-cta-split">
        <div>
          <span class="a2zh-label a2zh-rv">Get started today</span>
          <h2 class="a2zh-title a2zh-rv a2zh-d1">
            <?php echo get_field('get_a_quote') ?: 'We work best with owners who value <span>structure, responsiveness and long-term stability.</span>'; ?>
          </h2>
          <p class="a2zh-copy a2zh-copy-spaced a2zh-rv a2zh-d2">
            <?php echo get_field('get_a_quote_content') ?: 'If that reflects how you operate, we would be pleased to speak. No obligation, just a straightforward conversation about your business, what you need, and whether we are the right fit.'; ?>
          </p>
          <div class="a2zh-actions a2zh-rv">
            <?php if ($focus_btn) : ?>
            <button type="button" data-source="<?php echo esc_attr($quote_btn_title); ?>" data-bs-toggle="modal"
              data-bs-target="<?php echo $quote_modal_target; ?>"
              class="a2zh-btn a2zh-btn--soft"><?php echo esc_html($quote_btn_title); ?></button>
            <?php else : ?>
            <button type="button" data-source="Get an instant fee estimate" data-bs-toggle="modal"
              data-bs-target="<?php echo $quote_modal_target; ?>" class="a2zh-btn a2zh-btn--soft">Get an instant fee
              estimate</button>
            <?php endif; ?>
            <a class="a2zh-btn a2zh-btn--ghost" href="/about-us/">Learn about the firm</a>
          </div>
        </div>
        <div class="a2zh-contact-stack a2zh-rv a2zh-d1">
          <div class="a2zh-contact-card"><span>Call us directly</span><a href="tel:01224042961">01224 042961</a></div>
          <div class="a2zh-contact-card"><span>Email</span><a
              href="mailto:info@a2zaccounting.co.uk">info@a2zaccounting.co.uk</a></div>
          <div class="a2zh-contact-card"><span>Office</span><strong>1st Floor, 499 Union Street, Aberdeen AB11
              6DB</strong></div>
          <div class="a2zh-contact-card"><span>Client portal</span><a href="https://login.engager.app/" target="_blank"
              rel="noopener">Login to your portal</a></div>
        </div>
      </div>

      <?php if (is_page(36959) && get_field('above_footer_text')) : ?>
      <p class="a2zh-foot-note a2zh-rv" style="margin-top:clamp(40px,5vw,64px);color:rgba(255,255,255,0.7);">
        <?php echo get_field('above_footer_text'); ?></p>
      <?php endif; ?>
    </div>
  </section>


  <!-- ════════ BLOG ════════ -->
  <section class="a2zh-section a2zh-blog-sec">
    <div class="a2zh-wrap">
      <div class="a2zh-head">
        <div>
          <span class="a2zh-label a2zh-rv">Insights</span>
          <h2 class="a2zh-title a2zh-rv a2zh-d1">
            <?php echo get_field('our_blogs') ?: 'From our <span>knowledge desk.</span>'; ?></h2>
        </div>
      </div>

      <div class="a2zh-blog">
        <?php
        $b_args = array(
          'posts_per_page' => 3,
          'post_type' => 'post',
          'orderby' => 'date',
          'order' => 'DESC'
        );
        $b_results = new WP_Query($b_args);
        $b_i = 0;
        while ($b_results->have_posts()) : $b_results->the_post();
          $b_i++;
          $b_image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), "full");
          $b_feature_image = $b_image[0] ?? '';
          $b_day = get_the_date('j');
          $b_month = get_the_date('F');
          $b_year = get_the_date('Y');
          $b_categories = get_the_category();
        ?>
        <article class="a2zh-card a2zh-blog-card a2zh-rv a2zh-d<?php echo $b_i; ?>">
          <div class="a2zh-blog-thumb">
            <a href="<?php echo get_the_permalink(); ?>" aria-label="<?php echo esc_attr(get_the_title()); ?>"></a>
            <?php if ($b_feature_image) : ?><img src="<?php echo esc_url($b_feature_image); ?>"
              alt="<?php echo esc_attr(get_the_title()); ?>" loading="lazy" /><?php endif; ?>
            <?php if (!empty($b_categories)) : ?><span
              class="a2zh-blog-cat"><?php echo esc_html($b_categories[0]->name); ?></span><?php endif; ?>
          </div>
          <div class="a2zh-blog-body">
            <div class="a2zh-blog-date"><?php echo $b_month . ' ' . $b_day . ', ' . $b_year; ?></div>
            <a href="<?php echo get_the_permalink(); ?>">
              <h3><?php echo get_the_title(); ?></h3>
            </a>
          </div>
        </article>
        <?php endwhile; wp_reset_postdata(); ?>
      </div>

      <div class="a2zh-blog-btn">
        <?php
        $our_blogs_btn = get_field('our_blogs_btn');
        $blog_btn_target = ($our_blogs_btn && !empty($our_blogs_btn['target'])) ? $our_blogs_btn['target'] : '_self';
        ?>
        <a class="a2zh-btn a2zh-btn--soft" target="<?php echo esc_attr($blog_btn_target); ?>"
          href="<?php echo $our_blogs_btn ? esc_url($our_blogs_btn['url']) : '/blog/'; ?>"><?php echo $our_blogs_btn ? esc_html($our_blogs_btn['title']) : 'View all articles'; ?></a>
      </div>
    </div>
  </section>

</main>

<script>
(function() {
  var root = document.getElementById("a2zh-home");
  if (!root) return;

  /* ─── interactive glass cards: pointer spotlight + 3D tilt ─── */
  var reduceMotion = window.matchMedia("(prefers-reduced-motion: reduce)").matches;
  root.querySelectorAll(".a2zh-card").forEach(function(card) {
    var raf = null;
    card.addEventListener("pointermove", function(e) {
      if (raf) return;
      raf = requestAnimationFrame(function() {
        raf = null;
        var r = card.getBoundingClientRect();
        var px = (e.clientX - r.left) / r.width;
        var py = (e.clientY - r.top) / r.height;
        card.style.setProperty("--mx", (px * 100).toFixed(2) + "%");
        card.style.setProperty("--my", (py * 100).toFixed(2) + "%");
        if (!reduceMotion) {
          var rx = (0.5 - py) * 7;
          var ry = (px - 0.5) * 9;
          card.style.transform =
            "perspective(1000px) rotateX(" + rx.toFixed(2) + "deg) rotateY(" +
            ry.toFixed(2) + "deg) translateY(-7px) scale(1.018)";
        }
      });
    });
    card.addEventListener("pointerleave", function() {
      card.style.transform = "";
      card.style.removeProperty("--mx");
      card.style.removeProperty("--my");
    });
  });

  /* ─── three pods: highlight cycles randomly, holds on the hovered card ─── */
  var pods3 = root.querySelector(".a2zh-pods3");
  if (pods3) {
    var pod3Items = Array.prototype.slice.call(pods3.querySelectorAll(".a2zh-pod3"));
    var pod3Hover = false;
    var pod3Last = 0;
    var setPod3 = function(idx) {
      pod3Items.forEach(function(it, i) {
        it.classList.toggle("is-active", i === idx);
      });
    };
    var cyclePod3 = function() {
      if (pod3Hover || pod3Items.length < 2) return;
      pod3Last = (pod3Last + 1) % pod3Items.length; // step 1 → 2 → 3 → 1 …
      setPod3(pod3Last);
    };
    pod3Items.forEach(function(it) {
      it.addEventListener("pointerenter", function() {
        pod3Hover = true;
        pod3Last = pod3Items.indexOf(it);
        setPod3(pod3Last);
      });
      it.addEventListener("pointerleave", function() {
        pod3Hover = false;
      });
    });
    setPod3(0);
    if (!reduceMotion) setInterval(cyclePod3, 1800);
  }

  /* ─── journey path: diagonal SVG connector, scroll progress + focus ─── */
  var path = root.querySelector("#a2zhPath");
  if (path) {
    var svg = path.querySelector(".a2zh-path-svg");
    var baseLine = svg.querySelector(".a2zh-path-base");
    var progLine = svg.querySelector(".a2zh-path-prog");
    var pathItems = Array.prototype.slice.call(path.querySelectorAll(".a2zh-path-item"));
    var dots = [];
    var itemDotIdx = [];
    var dotFrac = [];
    var progLen = 0;
    var pathW = 0;
    var SVGNS = "http://www.w3.org/2000/svg";

    // one big, smooth sweeping curve from a to b that bulges sideways
    // toward a target x (tx) — used to throw the line out into the empty
    // space beside an image. A single cubic Bézier keeps it clean.
    var bigCurve = function(a, b, tx, lift) {
      lift = lift || 0;
      var c1y = a[1] + (b[1] - a[1]) * 0.25;
      var c2y = a[1] + (b[1] - a[1]) * 0.75 - lift; // raise the top control to arc higher
      return " C" + tx.toFixed(1) + "," + c1y.toFixed(1) + " " +
        tx.toFixed(1) + "," + c2y.toFixed(1) + " " +
        b[0].toFixed(1) + "," + b[1].toFixed(1);
    };

    // deterministic pseudo-random in [0,1) — stable across rebuilds
    var rand = function(s) {
      var x = Math.sin(s * 99.7 + 12.3) * 43758.5453;
      return x - Math.floor(x);
    };

    // a big, evenly rounded arc. Both control points are offset
    // perpendicular to the chord toward `side` (+1 right / -1 left) and
    // spread along it, so the line balloons out into a smooth round bulge
    // with a single apex — not a squeezed flat-sided shape.
    var roundCurve = function(a, b, bulge, side) {
      var dx = b[0] - a[0],
        dy = b[1] - a[1];
      var len = Math.sqrt(dx * dx + dy * dy) || 1;
      var ux = dx / len,
        uy = dy / len; // along the chord
      var nx = -dy / len,
        ny = dx / len; // perpendicular
      if (nx < 0) {
        nx = -nx;
        ny = -ny;
      } // normalise perp to point right
      nx *= side;
      ny *= side; // then flip to the chosen side
      var spread = len * 0.2; // push controls apart for a rounder, wider apex
      var c1x = a[0] - ux * spread + nx * bulge;
      var c1y = a[1] - uy * spread + ny * bulge;
      var c2x = b[0] + ux * spread + nx * bulge;
      var c2y = b[1] + uy * spread + ny * bulge;
      return " C" + c1x.toFixed(1) + "," + c1y.toFixed(1) + " " +
        c2x.toFixed(1) + "," + c2y.toFixed(1) + " " +
        b[0].toFixed(1) + "," + b[1].toFixed(1);
    };

    var buildPath = function() {
      var pr = path.getBoundingClientRect();
      if (!pr.width || !pr.height) return;
      svg.setAttribute("viewBox", "0 0 " + pr.width + " " + pr.height);
      svg.setAttribute("preserveAspectRatio", "none");

      // each image drops its dot(s) into the "bitten" corner(s):
      //   img1 (bite-br) → bottom-right
      //   img2 (bite-l)  → top-left AND bottom-left
      //   img3 (bite-tr) → top-right
      var pts = [];
      itemDotIdx = [];
      pathItems.forEach(function(it) {
        var media = it.querySelector(".a2zh-path-media");
        var mr = media.getBoundingClientRect();
        var L = mr.left - pr.left,
          R = mr.right - pr.left,
          T = mr.top - pr.top,
          B = mr.bottom - pr.top;
        var cls = media.getAttribute("class") || "";
        var idxs = [];
        if (cls.indexOf("bite-br") > -1) {
          idxs.push(pts.length);
          pts.push([R, B]);
        }
        if (cls.indexOf("bite-l") > -1) {
          idxs.push(pts.length);
          pts.push([L, T]);
          idxs.push(pts.length);
          pts.push([L, B]);
        }
        if (cls.indexOf("bite-tr") > -1) {
          idxs.push(pts.length);
          pts.push([R, T]);
        }
        if (!idxs.length) {
          idxs.push(pts.length);
          pts.push([L + mr.width / 2, T + mr.height / 2]);
        }
        itemDotIdx.push(idxs);
      });

      // big sweeping curves between the dots:
      //   seg 0 (img1 → img2)  bulges far RIGHT, into the empty space
      //                        beside the first image
      //   middle seg (img2 edge) a gentle lean to the left
      //   last seg (img2 → img3) bulges far LEFT, into the empty space
      //                        beside the second image
      // every segment is a wide rounded arc that balloons out into the
      // empty space, alternating sides (right / left / right …) with
      // seeded variation, so the whole path reads as one organic, wide
      // curvy ribbon threading all the dots.
      // a scalloped chain of rounded arcs: each segment is a near-semicircular
      // sweep between two dots, bulging to alternating sides — a clean,
      // fully rounded, geometric path with no points.
      pathW = pr.width;
      var d = "";
      if (pts.length) {
        d = "M" + pts[0][0].toFixed(1) + "," + pts[0][1].toFixed(1);
        for (var i = 0; i < pts.length - 1; i++) {
          var a = pts[i],
            b = pts[i + 1];
          var dx = b[0] - a[0],
            dy = b[1] - a[1];
          var dist = Math.sqrt(dx * dx + dy * dy) || 1;
          var r = (dist * 0.56).toFixed(1); // >= dist/2 keeps the arc valid
          var sweep = (i % 2 === 0) ? 1 : 0; // alternate which side it bulges
          d += " A" + r + " " + r + " 0 0 " + sweep + " " +
            b[0].toFixed(1) + "," + b[1].toFixed(1);
        }
      }
      baseLine.setAttribute("d", d);
      progLine.setAttribute("d", d);

      progLen = progLine.getTotalLength ? progLine.getTotalLength() : 0;
      progLine.style.strokeDasharray = progLen;

      dots.forEach(function(el) {
        if (el.parentNode) el.parentNode.removeChild(el);
      });
      dots = pts.map(function(p) {
        var c = document.createElementNS(SVGNS, "circle");
        c.setAttribute("cx", p[0].toFixed(1));
        c.setAttribute("cy", p[1].toFixed(1));
        c.setAttribute("r", 16);
        c.setAttribute("class", "a2zh-path-dot");
        svg.appendChild(c);
        return c;
      });
      // arc-length fraction of each dot along the path, so a dot only
      // fills once the progress line has actually reached (touched) it
      var segLen = [],
        totalLen = 0;
      for (var s = 0; s < pts.length - 1; s++) {
        var sx = pts[s + 1][0] - pts[s][0],
          sy = pts[s + 1][1] - pts[s][1];
        var sd = Math.sqrt(sx * sx + sy * sy) || 1;
        var sr = sd * 0.56;
        var th = 2 * Math.asin(Math.min(1, (sd / 2) / sr));
        segLen.push(sr * th);
        totalLen += sr * th;
      }
      dotFrac = [0];
      var accLen = 0;
      for (var s2 = 0; s2 < segLen.length; s2++) {
        accLen += segLen[s2];
        dotFrac.push(accLen / (totalLen || 1));
      }
      updateProgress();
    };

    var updateProgress = function() {
      if (!progLen) return;
      var r = path.getBoundingClientRect();
      var focusLine = window.innerHeight * 0.5;
      var p = (focusLine - r.top) / r.height;
      p = Math.max(0, Math.min(1, p));
      progLine.style.strokeDashoffset = (progLen * (1 - p));
      // light each dot only once the drawn progress has reached it
      for (var k = 0; k < dots.length; k++) {
        if (dots[k]) dots[k].classList.toggle("is-on", p >= (dotFrac[k] || 0) - 0.002);
      }
    };

    window.addEventListener("scroll", updateProgress, {
      passive: true
    });
    window.addEventListener("resize", buildPath);
    window.addEventListener("load", buildPath);
    buildPath();

    if ("IntersectionObserver" in window) {
      var focusIO = new IntersectionObserver(function(entries) {
        entries.forEach(function(en) {
          en.target.classList.toggle("is-focus", en.isIntersecting);
        });
      }, {
        threshold: 0,
        rootMargin: "-42% 0px -42% 0px"
      });
      pathItems.forEach(function(it) {
        focusIO.observe(it);
      });
    } else {
      pathItems.forEach(function(it) {
        it.classList.add("is-focus");
      });
    }
  }

  /* ─── promise hub: draw connectors from the centre image to each point ─── */
  var hub = root.querySelector("#a2zhHub");
  if (hub) {
    var hubSvg = hub.querySelector(".a2zh-hub-svg");
    var hubMedia = hub.querySelector(".a2zh-hub-media");
    var hubPts = Array.prototype.slice.call(hub.querySelectorAll(".a2zh-hub-point"));

    var buildHub = function() {
      if (window.innerWidth <= 900) {
        hubSvg.innerHTML = "";
        return;
      }
      var hr = hub.getBoundingClientRect();
      if (!hr.width || !hr.height) return;
      hubSvg.setAttribute("viewBox", "0 0 " + hr.width + " " + hr.height);
      hubSvg.setAttribute("preserveAspectRatio", "none");

      var mr = hubMedia.getBoundingClientRect();
      var cx = mr.left + mr.width / 2 - hr.left;
      var cy = mr.top + mr.height / 2 - hr.top;
      var rad = mr.width / 2;

      var s = "";
      hubPts.forEach(function(pt) {
        var col = pt.parentNode;
        var isLeft = col && col.className.indexOf("a2zh-hub-col--left") > -1;
        var pr = pt.getBoundingClientRect();
        var nx = (isLeft ? pr.right : pr.left) - hr.left;
        var ny = pr.top + pr.height / 2 - hr.top;
        var dx = nx - cx,
          dy = ny - cy;
        var dist = Math.sqrt(dx * dx + dy * dy) || 1;
        var sx = cx + dx / dist * rad; // start on the image edge
        var sy = cy + dy / dist * rad;
        var c1x = sx + (nx - sx) * 0.5,
          c1y = sy; // gentle horizontal ease
        var c2x = nx - (nx - sx) * 0.5,
          c2y = ny;
        s += '<path class="a2zh-hub-line" d="M' + sx.toFixed(1) + ',' + sy.toFixed(1) +
          ' C' + c1x.toFixed(1) + ',' + c1y.toFixed(1) + ' ' +
          c2x.toFixed(1) + ',' + c2y.toFixed(1) + ' ' +
          nx.toFixed(1) + ',' + ny.toFixed(1) + '"></path>';
        s += '<circle class="a2zh-hub-end" cx="' + nx.toFixed(1) + '" cy="' + ny.toFixed(1) +
          '" r="4"></circle>';
      });
      hubSvg.innerHTML = s;
    };

    window.addEventListener("resize", buildHub);
    window.addEventListener("load", buildHub);
    buildHub();
  }

  if (!("IntersectionObserver" in window)) {
    root.querySelectorAll(".a2zh-rv").forEach(function(el) {
      el.classList.add("in");
    });
    return;
  }
  var io = new IntersectionObserver(function(entries) {
    entries.forEach(function(e) {
      if (e.isIntersecting) {
        e.target.classList.add("in");
        io.unobserve(e.target);
      }
    });
  }, {
    threshold: 0.08,
    rootMargin: "0px 0px -24px 0px"
  });
  root.querySelectorAll(".a2zh-rv").forEach(function(el) {
    io.observe(el);
  });
})();
</script>

<?php
// Fetch fixed ACF fields
$fixed_fields = [
    'quick_books_software' => floatval(get_field('quick_books_software', 'option') ?: 0),
    'xero_software' => floatval(get_field('xero_software', 'option') ?: 0),
    'dext_software' => floatval(get_field('dext_software', 'option') ?: 0),
    'monthly_vat' => floatval(get_field('monthly_vat', 'option') ?: 0),
    'monthly_bookkeeping' => floatval(get_field('monthly_bookkeeping', 'option') ?: 0),
    'monthly_management_accounts' => floatval(get_field('monthly_management_accounts', 'option') ?: 0),
    'personal_tax_per_person' => floatval(get_field('personal_tax_per_person', 'option') ?: 0),
    'companies_house_annual_fee' => floatval(get_field('companies_house_annual_fee', 'option') ?: 0),
    'pension_contributions' => floatval(get_field('pension_contributions', 'option') ?: 0),
];

// Fetch repeater data
$repeater_data = [];
if (have_rows('price_range_repeater', 'option')) {
    while (have_rows('price_range_repeater', 'option')) {
        the_row();

        $client_revenue_new = sanitize_text_field(get_sub_field('client_revenue'));
        $client_revenue = str_replace('£', '', $client_revenue_new);

        $repeater_data[] = [
            'client_revenue' => $client_revenue,
            'annual_accounts_corporation_tax' => floatval(get_sub_field('annual_accounts_corporation_tax') ?: 0),
            'weekly_payroll' => floatval(get_sub_field('weekly_payroll') ?: 0),
            'monthly_payroll' => floatval(get_sub_field('monthly_payroll') ?: 0),
            'quarterly_vat' => floatval(get_sub_field('quarterly_vat') ?: 0),
            'quarterly_bookkeeping' => floatval(get_sub_field('quarterly_bookkeeping') ?: 0),
            'quarterly_management_accounts' => floatval(get_sub_field('quarterly_management_accounts') ?: 0),
            'cis_returns' => floatval(get_sub_field('cis_returns') ?: 0),
            'address_service' => floatval(get_sub_field('address_service') ?: 0),

            'quick_books_software' => floatval(get_sub_field('quick_books_software') ?: 0),
            'xero_software' => floatval(get_sub_field('xero_software') ?: 0),
            'dext_software' => floatval(get_sub_field('dext_software') ?: 0),
            'monthly_vat' => floatval(get_sub_field('monthly_vat') ?: 0),
            'monthly_bookkeeping' => floatval(get_sub_field('monthly_bookkeeping') ?: 0),
            'monthly_management_accounts' => floatval(get_sub_field('monthly_management_accounts') ?: 0),
            'personal_tax_per_person' => floatval(get_sub_field('personal_tax_per_person') ?: 0),
            'companies_house_annual_fee' => floatval(get_sub_field('companies_house_annual_fee') ?: 0),
            'pension_contributions' => floatval(get_sub_field('pension_contributions') ?: 0),
        ];
    }
}
?>

<!-- Modal -->
<div class="modal service-table fade" id="service-table" tabindex="-1" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">

        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

        <div class="table-wraper">
          <form id="calculator_form" class="pricing-calculator-form">
            <table class="pricing-calculator">
              <thead>
                <tr>
                  <th></th>
                  <th>Services</th>
                  <th>Monthly fee <br> excluding VAT</th>
                </tr>
                <tr>
                  <th>Select Annual Sales*</th>
                  <th>
                    <select name="client_revenue" id="client_revenue" onchange="calculateTotal()">
                      <option value="">Select Revenue Range</option>
                      <?php
                                foreach ($repeater_data as $row) {
                                    if ($row['client_revenue']) {
                                        echo '<option value="' . esc_attr($row['client_revenue']) . '">' . esc_html($row['client_revenue']) . '</option>';
                                    }
                                }
                                ?>
                    </select>
                  </th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td data-title="Services"><strong>Bookkeeping Software</strong></td>
                  <td>
                    <select name="bookkeeping_software" id="bookkeeping_software" onchange="calculateTotal()">
                      <option value="NA">NA</option>
                      <option value="Quick Books">Quick Books</option>
                      <option value="XERO">XERO</option>
                    </select>
                  </td>
                  <td id="bookkeeping_software_price" data-title="Monthly fee excluding VAT:"></td>
                </tr>
                <tr>
                  <td><strong>Document Uploads Software</strong></td>
                  <td>
                    <select name="document_uploads_software" id="document_uploads_software" onchange="calculateTotal()">
                      <option value="NA">NA</option>
                      <option value="Dext">Dext</option>
                    </select>
                  </td>
                  <td id="document_uploads_software_price" data-title="Monthly fee excluding VAT:"></td>
                </tr>
                <tr>
                  <td><strong>Payroll</strong></td>
                  <td>
                    <select name="payroll" id="payroll" onchange="calculateTotal()">
                      <option value="NA">NA</option>
                      <option value="Weekly Payroll">Weekly Payroll</option>
                      <option value="Monthly Payroll">Monthly Payroll</option>
                    </select>
                  </td>
                  <td id="payroll_price" data-title="Monthly fee excluding VAT:"></td>
                </tr>
                <tr>
                  <td><strong>VAT</strong></td>
                  <td>
                    <select name="vat" id="vat" onchange="calculateTotal()">
                      <option value="NA">NA</option>
                      <option value="Quarterly VAT">Quarterly VAT</option>
                      <option value="Monthly VAT">Monthly VAT</option>
                    </select>
                  </td>
                  <td id="vat_price" data-title="Monthly fee excluding VAT:"></td>
                </tr>
                <tr>
                  <td><strong>Bookkeeping</strong></td>
                  <td>
                    <select name="bookkeeping" id="bookkeeping" onchange="calculateTotal()">
                      <option value="NA">NA</option>
                      <option value="Quarterly Bookkeeping">Quarterly Bookkeeping</option>
                      <option value="Monthly Bookkeeping">Monthly Bookkeeping</option>
                    </select>
                  </td>
                  <td id="bookkeeping_price" data-title="Monthly fee excluding VAT:"></td>
                </tr>
                <tr>
                  <td><strong>Management Accounts</strong></td>
                  <td>
                    <select name="management_accounts" id="management_accounts" onchange="calculateTotal()">
                      <option value="NA">NA</option>
                      <option value="Quarterly Management Accounts">Quarterly Management Accounts</option>
                      <option value="Monthly Management Accounts">Monthly Management Accounts</option>
                    </select>
                  </td>
                  <td id="management_accounts_price" data-title="Monthly fee excluding VAT:"></td>
                </tr>
                <tr>
                  <td><strong>Annual Accounts & Corporation Tax <span>*</span></strong></td>
                  <td>
                    <select name="annual_accounts" id="annual_accounts" onchange="calculateTotal()">
                      <option value="Yes">Yes</option>
                    </select>
                  </td>
                  <td id="annual_accounts_price" data-title="Monthly fee excluding VAT:"></td>
                </tr>
                <tr>
                  <td><strong>Director's Tax Returns (<span>select no. of people</span>)</strong></td>
                  <td>
                    <select name="people_tax_returns" id="people_tax_returns" onchange="calculateTotal()">
                      <?php for ($i = 1; $i <= 15; $i++): ?>
                      <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                      <?php endfor; ?>
                    </select>
                  </td>
                  <td id="people_tax_returns_price" data-title="Monthly fee excluding VAT:"></td>
                </tr>
                <tr>
                  <td><strong>Pension Contributions (no extra)</strong></td>
                  <td>
                    <select name="pension" id="pension" onchange="calculateTotal()">
                      <option value="Yes">Yes</option>
                      <option value="No">No</option>
                    </select>
                  </td>
                  <td id="pension_price" data-title="Monthly fee excluding VAT:"></td>
                </tr>
                <tr>
                  <td><strong>CIS Returns</strong></td>
                  <td>
                    <select name="cis_returns" id="cis_returns" onchange="calculateTotal()">
                      <option value="Yes">Yes</option>
                      <option value="No">No</option>
                    </select>
                  </td>
                  <td id="cis_returns_price" data-title="Monthly fee excluding VAT:"></td>
                </tr>
                <tr>
                  <td><strong>Companies House Annual Fee (<span>CS01</span>)<span>*</span></strong></td>
                  <td>
                    <select name="companies_house_annual" id="companies_house_annual" onchange="calculateTotal()">
                      <option value="Yes">Yes</option>
                    </select>
                  </td>
                  <td id="companies_house_annual_price" data-title="Montheely fee excluding VAT:"></td>
                </tr>
                <tr>
                  <td><strong>Address Service</strong></td>
                  <td>
                    <select name="address_service" id="address_service" onchange="calculateTotal()">
                      <option value="Yes">Yes</option>
                      <option value="No">No</option>
                    </select>
                  </td>
                  <td id="address_service_price" data-title="Montheely fee excluding VAT:"></td>
                </tr>
              </tbody>
              <tfoot>
                <tr>
                  <td colspan="2"><strong>Total</strong></td>
                  <td id="total_price"><strong></strong></td>
                </tr>
                <tr>
                  <td colspan="2">VAT</td>
                  <td id="vat_total"></td>
                </tr>
                <tr>
                  <td colspan="2"><strong>Gross Monthly</strong></td>
                  <td id="gross_monthly"><strong></strong></td>
                </tr>
              </tfoot>
            </table>



            <div class="inputouter m-3 text-center">
              <input type="submit" value="Request A Quote" class="btn">
              <?php wp_nonce_field('calculator_nonce', 'calculator_nonce'); ?>
            </div>
          </form>
          <?php echo get_field('notes', 'option'); ?>
        </div>

      </div>
    </div>
  </div>
</div>





<?php
get_footer();
?>



<script>
// Calculator JavaScript
const fixedFields = <?php echo json_encode($fixed_fields); ?>;
const repeaterData = <?php echo json_encode($repeater_data, JSON_UNESCAPED_UNICODE); ?>;
const vatRate = 0.2;

// Define calculateTotal globally
window.calculateTotal = function() {
  console.log('calculateTotal called'); // Debug
  const clientRevenue = document.getElementById('client_revenue')?.value || '';
  const selectedRange = repeaterData.find(row => row.client_revenue === clientRevenue);
  let total = 0;

  // Helper function to format price
  const formatPrice = (price) => price === 0 ? '' : '£' + price.toFixed(2);

  // Object to store form data
  const formData = {
    client_revenue: clientRevenue
  };

  // Bookkeeping Software
  const bookkeepingSoftware = document.getElementById('bookkeeping_software')?.value || 'NA';
  let bookkeepingSoftwarePrice = 0;
  if (bookkeepingSoftware === 'Quick Books') {
    bookkeepingSoftwarePrice = selectedRange.quick_books_software;
  } else if (bookkeepingSoftware === 'XERO') {
    bookkeepingSoftwarePrice = selectedRange.xero_software;
  }
  document.getElementById('bookkeeping_software_price').textContent = formatPrice(bookkeepingSoftwarePrice);
  formData.bookkeeping_software = bookkeepingSoftware;
  formData.bookkeeping_software_price = bookkeepingSoftwarePrice;
  total += bookkeepingSoftwarePrice;

  // Document Uploads Software
  const documentUploadsSoftware = document.getElementById('document_uploads_software')?.value || 'NA';
  let documentUploadsSoftwarePrice = documentUploadsSoftware === 'Dext' ? selectedRange.dext_software : 0;
  document.getElementById('document_uploads_software_price').textContent = formatPrice(documentUploadsSoftwarePrice);
  formData.document_uploads_software = documentUploadsSoftware;
  formData.document_uploads_software_price = documentUploadsSoftwarePrice;
  total += documentUploadsSoftwarePrice;

  // Payroll
  const payroll = document.getElementById('payroll')?.value || 'NA';
  let payrollPrice = 0;
  if (selectedRange) {
    if (payroll === 'Weekly Payroll') {
      payrollPrice = selectedRange.weekly_payroll;
    } else if (payroll === 'Monthly Payroll') {
      payrollPrice = selectedRange.monthly_payroll;
    }
  }
  document.getElementById('payroll_price').textContent = formatPrice(payrollPrice);
  formData.payroll = payroll;
  formData.payroll_price = payrollPrice;
  total += payrollPrice;

  // VAT
  const vat = document.getElementById('vat')?.value || 'NA';
  let vatPrice = 0;
  if (selectedRange) {
    if (vat === 'Quarterly VAT') {
      vatPrice = selectedRange.quarterly_vat;
    } else if (vat === 'Monthly VAT') {
      vatPrice = selectedRange.monthly_vat;
    }
  }
  document.getElementById('vat_price').textContent = formatPrice(vatPrice);
  formData.vat = vat;
  formData.vat_price = vatPrice;
  total += vatPrice;

  // Bookkeeping
  const bookkeeping = document.getElementById('bookkeeping')?.value || 'NA';
  let bookkeepingPrice = 0;
  if (selectedRange) {
    if (bookkeeping === 'Quarterly Bookkeeping') {
      bookkeepingPrice = selectedRange.quarterly_bookkeeping;
    } else if (bookkeeping === 'Monthly Bookkeeping') {
      bookkeepingPrice = selectedRange.monthly_bookkeeping;
    }
  }
  document.getElementById('bookkeeping_price').textContent = formatPrice(bookkeepingPrice);
  formData.bookkeeping = bookkeeping;
  formData.bookkeeping_price = bookkeepingPrice;
  total += bookkeepingPrice;

  // Management Accounts
  const managementAccounts = document.getElementById('management_accounts')?.value || 'NA';
  let managementAccountsPrice = 0;
  if (selectedRange) {
    if (managementAccounts === 'Quarterly Management Accounts') {
      managementAccountsPrice = selectedRange.quarterly_management_accounts;
    } else if (managementAccounts === 'Monthly Management Accounts') {
      managementAccountsPrice = selectedRange.monthly_management_accounts;
    }
  }
  document.getElementById('management_accounts_price').textContent = formatPrice(managementAccountsPrice);
  formData.management_accounts = managementAccounts;
  formData.management_accounts_price = managementAccountsPrice;
  total += managementAccountsPrice;

  // Annual Accounts & Corporation Tax
  const annualAccounts = document.getElementById('annual_accounts')?.value || 'No';
  let annualAccountsPrice = annualAccounts === 'Yes' && selectedRange ? selectedRange
    .annual_accounts_corporation_tax : 0;
  document.getElementById('annual_accounts_price').textContent = formatPrice(annualAccountsPrice);
  formData.annual_accounts = annualAccounts;
  formData.annual_accounts_price = annualAccountsPrice;
  total += annualAccountsPrice;

  // Director's Tax Returns
  const peopleTaxReturns = parseInt(document.getElementById('people_tax_returns')?.value || 1);
  let peopleTaxReturnsPrice = peopleTaxReturns * selectedRange.personal_tax_per_person;
  document.getElementById('people_tax_returns_price').textContent = formatPrice(peopleTaxReturnsPrice);
  formData.people_tax_returns = peopleTaxReturns;
  formData.people_tax_returns_price = peopleTaxReturnsPrice;
  total += peopleTaxReturnsPrice;

  // Pension Contributions
  const pension = document.getElementById('pension')?.value || 'No';
  let pensionPrice = pension === 'Yes' ? selectedRange.pension_contributions : 0;
  document.getElementById('pension_price').textContent = '£' + pensionPrice.toFixed(2);
  formData.pension = pension;
  formData.pension_price = pensionPrice;
  total += pensionPrice;

  // CIS Returns
  const cisReturns = document.getElementById('cis_returns')?.value || 'No';
  let cisReturnsPrice = cisReturns === 'Yes' && selectedRange ? selectedRange.cis_returns : 0;
  document.getElementById('cis_returns_price').textContent = formatPrice(cisReturnsPrice);
  formData.cis_returns = cisReturns;
  formData.cis_returns_price = cisReturnsPrice;
  total += cisReturnsPrice;

  // Companies House Annual Fee
  const companiesHouseAnnual = document.getElementById('companies_house_annual')?.value || 'Yes';
  let companiesHouseAnnualPrice = companiesHouseAnnual === 'Yes' ? selectedRange.companies_house_annual_fee : 0;
  document.getElementById('companies_house_annual_price').textContent = formatPrice(companiesHouseAnnualPrice);
  formData.companies_house_annual = companiesHouseAnnual;
  formData.companies_house_annual_price = companiesHouseAnnualPrice;
  total += companiesHouseAnnualPrice;

  // Address Service
  const addressService = document.getElementById('address_service')?.value || 'No';
  let addressServicePrice = addressService === 'Yes' && selectedRange ? selectedRange.address_service : 0;
  document.getElementById('address_service_price').textContent = formatPrice(addressServicePrice);
  formData.address_service = addressService;
  formData.address_service_price = addressServicePrice;
  total += addressServicePrice;

  // Calculate totals
  const vatTotal = total * vatRate;
  const grossMonthly = total + vatTotal;

  // Update tfoot
  document.getElementById('total_price').textContent = '£' + total.toFixed(2);
  document.getElementById('vat_total').textContent = '£' + vatTotal.toFixed(2);
  document.getElementById('gross_monthly').textContent = '£' + grossMonthly.toFixed(2);

  // Store totals in formData
  formData.total_price = total;
  formData.vat_total = vatTotal;
  formData.gross_monthly = grossMonthly;

  // Store formData in window
  window.calculatorFormData = formData;
};

jQuery(document).ready(function($) {
  // Client Details Form Validation
  $("#calculator-client-details").validate({
    rules: {
      name: "required",
      email: {
        required: true,
        email: true
      },
      location: "required",
      phone: "required",
      business_name: "required",
      business_sector: "required"
    },
    submitHandler: function(form) {
      var formData = $(form).serialize();

      var $submitBtn = $(form).find("input[type=submit].btn");
      // Disable after first click
      $submitBtn.prop("disabled", true).val("Submitting...");

      $.ajax({
        url: '<?php echo admin_url('admin-ajax.php'); ?>',
        method: "POST",
        data: formData + "&action=save_calculator_client_details",
        success: function(response) {
          console.log("Success:", response);
          if (response.success) {
            $submitBtn.prop("disabled", false).val("Submit");
            //window.location.href = 'thank-you/';
            Swal.fire({
              icon: 'success',
              title: 'Submitted!',
              text: response.data.message,
            }).then(() => {
              const clientId = response.data.insert_id;
              sessionStorage.setItem('clientId', clientId);
              const calculatorModal = new bootstrap.Modal(document.getElementById('service-table'));
              calculatorModal.show();
              jQuery('#client-details').modal('hide');
              jQuery('#gitModal').modal('hide');
            });
          } else {
            //alert("Failed to save. " + response.data.message);
            Swal.fire({
              icon: 'error',
              title: 'Submission Failed',
              text: response.data.message || 'Something went wrong.',
            });
          }
        },
        error: function(xhr, status, error) {
          console.error("Error:", error);
          //alert("Something went wrong.");
          Swal.fire({
            icon: 'error',
            title: 'Submission Failed',
            text: 'Something went wrong.',
          });
        }
      });
    }
  });

  // Initialize calculator on modal show
  $('#service-table').on('shown.bs.modal', function() {
    console.log('Modal shown, initializing calculator');
    window.calculateTotal();
  });

  // Attach onchange events with jQuery
  $('#calculator_form select').on('change', function() {
    window.calculateTotal();
  });

  // Handle calculator form submission
  $('#calculator_form').on('submit', function(e) {
    e.preventDefault();

    const formData = window.calculatorFormData;
    const clientId = sessionStorage.getItem('clientId');

    if (!formData || !formData.client_revenue) {
      alert('Please select a revenue range.');
      return;
    }
    if (!clientId) {
      alert('Client ID not found. Please submit client details first.');
      return;
    }

    // Clean prices for submission
    const cleanedData = {};
    for (const [key, value] of Object.entries(formData)) {
      if (key.includes('_price') || key === 'total_price' || key === 'vat_total' || key === 'gross_monthly') {
        cleanedData[key] = typeof value === 'number' ? value : 0;
      } else {
        cleanedData[key] = value;
      }
    }

    // AJAX request
    const data = {
      action: 'save_calculator_form_data',
      nonce: document.getElementById('calculator_nonce').value,
      client_id: clientId,
      ...cleanedData
    };

    fetch('<?php echo admin_url('admin-ajax.php'); ?>', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: new URLSearchParams(data).toString()
      })
      .then(response => response.json())
      .then(result => {
        if (result.success) {
          Swal.fire({
            icon: 'success',
            title: 'Submitted!',
            text: result.data.message,
          }).then(() => {
            this.reset();
            window.calculateTotal();
            jQuery('#service-table').modal('hide');
            jQuery('#calculator-client-details')[0].reset();
            sessionStorage.removeItem('clientId');
          });
        } else {
          Swal.fire({
            icon: 'error',
            title: 'Submission Failed',
            text: result.data.message || 'Something went wrong.',
          });
        }
      })
      .catch(error => {
        console.error('AJAX error:', error.zoho_response);
        //alert('An error occurred while saving the quote in zoho.');
        Swal.fire({
          icon: 'error',
          title: 'Error',
          text: 'Could not submit form. Please try again.',
        });
      });
  });
});
</script>