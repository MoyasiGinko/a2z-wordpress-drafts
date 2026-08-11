<?php
/**
 * Template Name: A2Z Premium Homepage
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 */

get_header();
?>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;1,300;1,400;1,500&family=DM+Sans:wght@300;400;500&family=DM+Mono:wght@300;400&display=swap" rel="stylesheet">

<style>
  .a2z-home {
    --a2z-bg: #f8f6f2;
    --a2z-dark: #041322;
    --a2z-dark-2: #081a2d;
    --a2z-panel: #0d2238;
    --a2z-ink: #0c0c0a;
    --a2z-muted: rgba(255, 255, 255, 0.7);
    --a2z-muted-dark: rgba(12, 12, 10, 0.68);
    --a2z-line: rgba(176, 141, 87, 0.22);
    --a2z-line-soft: rgba(255, 255, 255, 0.08);
    --a2z-gold: #b08d57;
    --a2z-gold-light: #c9a96e;
    --a2z-white: #fff;
    --a2z-serif: "Cormorant Garamond", Georgia, serif;
    --a2z-sans: "DM Sans", system-ui, sans-serif;
    --a2z-mono: "DM Mono", monospace;
    --a2z-ease: cubic-bezier(0.25, 0.46, 0.45, 0.94);
    background: var(--a2z-bg);
    color: var(--a2z-ink);
    font-family: var(--a2z-sans);
    font-weight: 300;
    line-height: 1.7;
    overflow: hidden;
    -webkit-font-smoothing: antialiased;
  }

  .a2z-home,
  .a2z-home * {
    box-sizing: border-box;
  }

  .a2z-home * {
    margin: 0;
    padding: 0;
  }

  .a2z-home img {
    display: block;
    max-width: 100%;
    height: auto;
  }

  .a2z-home a {
    color: inherit;
    text-decoration: none;
  }

  .a2z-home button {
    font: inherit;
  }

  .a2z-wrap {
    max-width: 1320px;
    margin: 0 auto;
    padding: 0 clamp(22px, 5vw, 72px);
  }

  .a2z-section {
    position: relative;
    padding: clamp(82px, 10vw, 128px) 0;
  }

  .a2z-section-dark {
    background: var(--a2z-dark);
    color: var(--a2z-white);
  }

  .a2z-section-mid {
    background: var(--a2z-dark-2);
    color: var(--a2z-white);
  }

  .a2z-label {
    display: block;
    color: var(--a2z-gold);
    font-family: var(--a2z-mono);
    font-size: 0.68rem;
    font-weight: 400;
    letter-spacing: 0.2em;
    line-height: 1.5;
    text-transform: uppercase;
  }

  .a2z-title {
    color: var(--a2z-ink);
    font-family: var(--a2z-serif);
    font-size: clamp(2.35rem, 4.6vw, 4.25rem);
    font-weight: 300;
    letter-spacing: -0.02em;
    line-height: 1.05;
    margin-top: 18px;
  }

  .a2z-section-dark .a2z-title,
  .a2z-section-mid .a2z-title {
    color: var(--a2z-white);
  }

  .a2z-title em {
    color: var(--a2z-gold);
    font-style: italic;
  }

  .a2z-copy {
    color: var(--a2z-muted-dark);
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.9;
  }

  .a2z-copy-spaced {
    margin-top: 24px;
  }

  .a2z-section-dark .a2z-copy,
  .a2z-section-mid .a2z-copy {
    color: var(--a2z-muted);
  }

  .a2z-section-head {
    display: grid;
    grid-template-columns: minmax(0, 1fr) minmax(320px, 0.86fr);
    gap: clamp(34px, 6vw, 90px);
    align-items: end;
    margin-bottom: clamp(48px, 7vw, 84px);
    text-align: left;
  }

  .a2z-head-copy {
    align-self: end;
    padding-bottom: 4px;
  }

  .a2z-split {
    display: grid;
    grid-template-columns: minmax(0, 1fr) minmax(320px, 0.92fr);
    gap: clamp(44px, 7vw, 96px);
    align-items: start;
  }

  .a2z-split.a2z-split-reverse {
    grid-template-columns: minmax(320px, 0.92fr) minmax(0, 1fr);
  }

  .a2z-actions {
    display: flex;
    flex-wrap: wrap;
    gap: 12px;
    margin-top: clamp(28px, 4vw, 44px);
  }

  .a2z-btn {
    align-items: center;
    border: 1px solid transparent;
    cursor: pointer;
    display: inline-flex;
    font-family: var(--a2z-mono);
    font-size: 0.68rem;
    font-weight: 400;
    justify-content: center;
    letter-spacing: 0.13em;
    line-height: 1.4;
    min-height: 48px;
    padding: 14px 26px;
    text-align: center;
    text-transform: uppercase;
    transition: background 0.28s var(--a2z-ease), border-color 0.28s var(--a2z-ease), color 0.28s var(--a2z-ease);
  }

  .a2z-btn-gold {
    background: var(--a2z-gold);
    border-color: var(--a2z-gold);
    color: var(--a2z-dark);
  }

  .a2z-btn-gold:hover {
    background: var(--a2z-gold-light);
    border-color: var(--a2z-gold-light);
    color: var(--a2z-dark);
  }

  .a2z-btn-ghost {
    background: transparent;
    border-color: rgba(176, 141, 87, 0.35);
    color: var(--a2z-gold);
  }

  .a2z-section-dark .a2z-btn-ghost,
  .a2z-section-mid .a2z-btn-ghost {
    color: rgba(255, 255, 255, 0.78);
    border-color: rgba(255, 255, 255, 0.2);
  }

  .a2z-btn-ghost:hover {
    border-color: var(--a2z-gold);
    color: var(--a2z-gold-light);
  }

  .a2z-media-frame {
    border: 1px solid var(--a2z-line);
    position: relative;
  }

  .a2z-media-frame::before {
    border-left: 1px solid rgba(176, 141, 87, 0.52);
    border-top: 1px solid rgba(176, 141, 87, 0.52);
    content: "";
    height: 46px;
    left: -10px;
    position: absolute;
    top: -10px;
    width: 46px;
    z-index: 2;
  }

  .a2z-media-frame img {
    aspect-ratio: 4 / 5;
    height: 100%;
    object-fit: cover;
    width: 100%;
  }

  .a2z-reveal {
    opacity: 0;
    transform: translateY(20px);
    transition: opacity 0.82s var(--a2z-ease), transform 0.82s var(--a2z-ease);
  }

  .a2z-reveal.is-visible {
    opacity: 1;
    transform: none;
  }

  .a2z-delay-1 {
    transition-delay: 0.1s;
  }

  .a2z-delay-2 {
    transition-delay: 0.2s;
  }

  .a2z-delay-3 {
    transition-delay: 0.3s;
  }

  .a2z-hero {
    align-items: stretch;
    background: var(--a2z-dark);
    color: var(--a2z-white);
    display: flex;
    min-height: min(900px, 100vh);
    overflow: hidden;
    position: relative;
  }

  .a2z-hero-bg {
    background: url("https://a2zaccounting.co.uk/wp-content/uploads/2025/10/home_banner-scaled-1.webp") center top / cover no-repeat;
    inset: 0;
    position: absolute;
  }

  .a2z-hero-bg::after {
    background:
      linear-gradient(105deg, rgba(4, 19, 34, 0.96) 0%, rgba(4, 19, 34, 0.82) 48%, rgba(4, 19, 34, 0.5) 100%),
      radial-gradient(ellipse at 18% 82%, rgba(176, 141, 87, 0.18) 0%, transparent 55%);
    content: "";
    inset: 0;
    position: absolute;
  }

  .a2z-hero .a2z-wrap {
    align-items: end;
    display: grid;
    min-height: inherit;
    padding-bottom: clamp(72px, 9vw, 118px);
    padding-top: clamp(92px, 12vw, 150px);
    position: relative;
    width: 100%;
    z-index: 1;
  }

  .a2z-hero-grid {
    display: grid;
    gap: clamp(38px, 7vw, 92px);
    grid-template-columns: minmax(0, 1fr) minmax(280px, 380px);
    align-items: end;
  }

  .a2z-hero h1 {
    color: var(--a2z-white);
    font-family: var(--a2z-serif);
    font-size: clamp(3.45rem, 7vw, 7.15rem);
    font-weight: 300;
    letter-spacing: -0.025em;
    line-height: 0.95;
    max-width: 860px;
  }

  .a2z-hero h1 em {
    color: var(--a2z-gold-light);
    display: block;
    font-style: italic;
  }

  .a2z-hero-sub {
    color: rgba(255, 255, 255, 0.8);
    font-size: clamp(1rem, 1.3vw, 1.13rem);
    font-weight: 400;
    line-height: 1.9;
    margin-top: 32px;
    max-width: 62ch;
  }

  .a2z-hero-points {
    border-block: 1px solid rgba(255, 255, 255, 0.11);
    display: grid;
    gap: 0;
    grid-template-columns: repeat(2, minmax(0, 1fr));
    margin-top: 36px;
    max-width: 720px;
  }

  .a2z-hero-point {
    color: rgba(255, 255, 255, 0.82);
    font-size: 0.92rem;
    font-weight: 400;
    line-height: 1.55;
    min-height: 64px;
    padding: 18px 22px 18px 0;
  }

  .a2z-hero-point:nth-child(odd) {
    border-right: 1px solid rgba(255, 255, 255, 0.1);
  }

  .a2z-hero-point:nth-child(n + 3) {
    border-top: 1px solid rgba(255, 255, 255, 0.1);
  }

  .a2z-hero-point::before {
    color: var(--a2z-gold);
    content: "/";
    font-family: var(--a2z-mono);
    margin-right: 10px;
  }

  .a2z-hero-card {
    align-self: stretch;
    background: rgba(4, 19, 34, 0.82);
    border: 1px solid rgba(176, 141, 87, 0.32);
    display: flex;
    flex-direction: column;
    justify-content: end;
    min-height: 430px;
    padding: 34px 30px;
    position: relative;
  }

  .a2z-hero-card::before {
    background: linear-gradient(to bottom, var(--a2z-gold), transparent);
    content: "";
    height: 120px;
    left: -1px;
    position: absolute;
    top: -1px;
    width: 2px;
  }

  .a2z-hero-score {
    color: var(--a2z-gold-light);
    font-family: var(--a2z-serif);
    font-size: clamp(4rem, 6vw, 5.8rem);
    font-style: italic;
    font-weight: 300;
    line-height: 0.9;
  }

  .a2z-hero-card p {
    color: rgba(255, 255, 255, 0.7);
    font-size: 0.95rem;
    line-height: 1.8;
    margin-top: 18px;
  }

  .a2z-hero-card strong {
    color: var(--a2z-white);
    display: block;
    font-family: var(--a2z-mono);
    font-size: 0.66rem;
    font-weight: 400;
    letter-spacing: 0.15em;
    margin-top: 26px;
    text-transform: uppercase;
  }

  .a2z-metrics {
    background: var(--a2z-bg);
    border-block: 1px solid rgba(12, 12, 10, 0.08);
    padding: 0;
  }

  .a2z-metrics-grid {
    display: grid;
    grid-template-columns: repeat(6, minmax(0, 1fr));
  }

  .a2z-metric {
    border-right: 1px solid rgba(12, 12, 10, 0.08);
    min-height: 136px;
    padding: 30px clamp(16px, 2.5vw, 30px);
    text-align: left;
  }

  .a2z-metric:last-child {
    border-right: 0;
  }

  .a2z-metric strong {
    color: var(--a2z-gold);
    display: block;
    font-family: var(--a2z-serif);
    font-size: clamp(1.8rem, 3vw, 2.65rem);
    font-style: italic;
    font-weight: 300;
    line-height: 1;
  }

  .a2z-metric span {
    color: rgba(12, 12, 10, 0.62);
    display: block;
    font-family: var(--a2z-mono);
    font-size: 0.58rem;
    letter-spacing: 0.12em;
    line-height: 1.55;
    margin-top: 12px;
    text-transform: uppercase;
  }

  .a2z-slider-shell {
    position: relative;
  }

  .a2z-slider-viewport {
    overflow: hidden;
  }

  .a2z-slider-track {
    display: flex;
    transition: transform 0.48s var(--a2z-ease);
    will-change: transform;
  }

  .a2z-slide {
    flex: 0 0 auto;
    padding: 0 8px;
  }

  .a2z-video-card,
  .a2z-review-card {
    background: var(--a2z-dark);
    border: 1px solid var(--a2z-line);
    display: block;
    height: 100%;
    overflow: hidden;
    position: relative;
  }

  .a2z-video-card img {
    aspect-ratio: 4 / 3;
    object-fit: cover;
    transition: transform 0.45s var(--a2z-ease);
    width: 100%;
  }

  .a2z-video-card:hover img {
    transform: scale(1.045);
  }

  .a2z-video-overlay {
    background: linear-gradient(to top, rgba(4, 19, 34, 0.98), rgba(4, 19, 34, 0.32) 66%, transparent);
    display: flex;
    flex-direction: column;
    inset: 0;
    justify-content: end;
    padding: 22px;
    position: absolute;
  }

  .a2z-play {
    align-items: center;
    background: rgba(4, 19, 34, 0.55);
    border: 1px solid var(--a2z-gold);
    border-radius: 999px;
    color: var(--a2z-gold);
    display: flex;
    height: 54px;
    justify-content: center;
    left: 50%;
    position: absolute;
    top: 44%;
    transform: translate(-50%, -50%);
    transition: background 0.25s var(--a2z-ease), color 0.25s var(--a2z-ease), transform 0.25s var(--a2z-ease);
    width: 54px;
  }

  .a2z-play svg {
    height: 18px;
    margin-left: 3px;
    width: 18px;
  }

  .a2z-video-card:hover .a2z-play {
    background: var(--a2z-gold);
    color: var(--a2z-dark);
    transform: translate(-50%, -50%) scale(1.06);
  }

  .a2z-video-quote {
    color: rgba(255, 255, 255, 0.9);
    font-family: var(--a2z-serif);
    font-size: 1.08rem;
    font-style: italic;
    font-weight: 300;
    line-height: 1.45;
  }

  .a2z-video-name,
  .a2z-review-author strong {
    color: var(--a2z-white);
    display: block;
    font-size: 0.82rem;
    font-weight: 400;
    margin-top: 18px;
  }

  .a2z-video-biz,
  .a2z-review-author span {
    color: rgba(255, 255, 255, 0.58);
    display: block;
    font-size: 0.75rem;
    line-height: 1.5;
    margin-top: 3px;
  }

  .a2z-slider-controls {
    align-items: center;
    display: flex;
    gap: 20px;
    justify-content: space-between;
    margin-top: 28px;
  }

  .a2z-dots {
    display: flex;
    gap: 7px;
  }

  .a2z-dot {
    background: rgba(176, 141, 87, 0.24);
    border: 0;
    border-radius: 999px;
    cursor: pointer;
    height: 7px;
    padding: 0;
    transition: background 0.25s var(--a2z-ease), transform 0.25s var(--a2z-ease);
    width: 7px;
  }

  .a2z-dot.is-active {
    background: var(--a2z-gold);
    transform: scale(1.35);
  }

  .a2z-arrows {
    display: flex;
    gap: 8px;
  }

  .a2z-arrow {
    align-items: center;
    background: transparent;
    border: 1px solid var(--a2z-line);
    color: var(--a2z-gold);
    cursor: pointer;
    display: flex;
    height: 44px;
    justify-content: center;
    transition: border-color 0.25s var(--a2z-ease), background 0.25s var(--a2z-ease);
    width: 44px;
  }

  .a2z-arrow:hover {
    background: rgba(176, 141, 87, 0.08);
    border-color: var(--a2z-gold);
  }

  .a2z-arrow svg {
    fill: none;
    height: 16px;
    stroke: currentColor;
    stroke-linecap: round;
    stroke-linejoin: round;
    stroke-width: 1.7;
    width: 16px;
  }

  .a2z-arrow:disabled {
    cursor: default;
    opacity: 0.35;
  }

  .a2z-card-grid {
    background: var(--a2z-line-soft);
    display: grid;
    gap: 1px;
    grid-template-columns: repeat(3, minmax(0, 1fr));
  }

  .a2z-feature-card {
    background: var(--a2z-dark);
    min-height: 360px;
    padding: clamp(34px, 4vw, 52px);
    position: relative;
    text-align: left;
    transition: background 0.4s var(--a2z-ease);
  }

  .a2z-feature-card:hover {
    background: #0a1c2f;
  }

  .a2z-feature-num {
    color: transparent;
    font-family: var(--a2z-serif);
    font-size: clamp(5rem, 9vw, 9rem);
    font-style: italic;
    font-weight: 300;
    line-height: 1;
    position: absolute;
    right: 22px;
    top: 10px;
    -webkit-text-stroke: 1px rgba(176, 141, 87, 0.18);
  }

  .a2z-feature-card h3 {
    color: var(--a2z-white);
    font-family: var(--a2z-serif);
    font-size: clamp(1.55rem, 2.3vw, 2.25rem);
    font-style: italic;
    font-weight: 300;
    line-height: 1.16;
    margin-top: 86px;
    position: relative;
  }

  .a2z-feature-card p {
    color: rgba(255, 255, 255, 0.66);
    font-size: 0.96rem;
    font-weight: 400;
    line-height: 1.86;
    margin-top: 24px;
    position: relative;
  }

  .a2z-list {
    display: grid;
    gap: 12px;
    margin-top: 28px;
  }

  .a2z-list-item {
    background: rgba(176, 141, 87, 0.055);
    border-left: 2px solid var(--a2z-gold);
    padding: 18px 22px;
    text-align: left;
  }

  .a2z-list-item strong {
    color: var(--a2z-white);
    display: block;
    font-family: var(--a2z-serif);
    font-size: 1.18rem;
    font-weight: 300;
    line-height: 1.3;
  }

  .a2z-list-item span {
    color: var(--a2z-muted);
    display: block;
    font-size: 0.9rem;
    font-weight: 400;
    line-height: 1.72;
    margin-top: 7px;
  }

  .a2z-plain-list {
    display: grid;
    gap: 11px;
    list-style: none;
    margin-top: 28px;
  }

  .a2z-plain-list li {
    color: var(--a2z-muted);
    font-size: 0.95rem;
    font-weight: 400;
    line-height: 1.7;
    padding-left: 24px;
    position: relative;
  }

  .a2z-plain-list li::before {
    background: var(--a2z-gold);
    content: "";
    height: 1px;
    left: 0;
    position: absolute;
    top: 0.85em;
    width: 12px;
  }

  .a2z-quote {
    border-left: 2px solid var(--a2z-gold);
    color: rgba(255, 255, 255, 0.88);
    font-family: var(--a2z-serif);
    font-size: clamp(1.25rem, 2vw, 1.65rem);
    font-style: italic;
    font-weight: 300;
    line-height: 1.45;
    margin-top: 32px;
    padding: 4px 0 4px 24px;
  }

  .a2z-sector-grid {
    background: rgba(12, 12, 10, 0.08);
    display: grid;
    gap: 1px;
    grid-template-columns: repeat(3, minmax(0, 1fr));
  }

  .a2z-sector-card {
    background: var(--a2z-bg);
    border-top: 2px solid transparent;
    min-height: 260px;
    padding: 32px 28px;
    text-align: left;
    transition: background 0.3s var(--a2z-ease), border-color 0.3s var(--a2z-ease);
  }

  .a2z-sector-card:hover {
    background: var(--a2z-white);
    border-color: var(--a2z-gold);
  }

  .a2z-sector-card h3 {
    color: var(--a2z-ink);
    font-family: var(--a2z-serif);
    font-size: 1.5rem;
    font-weight: 300;
    line-height: 1.15;
  }

  .a2z-sector-card p {
    color: var(--a2z-muted-dark);
    font-size: 0.9rem;
    font-weight: 400;
    line-height: 1.72;
    margin-top: 14px;
  }

  .a2z-sector-link {
    color: var(--a2z-gold);
    display: inline-block;
    font-family: var(--a2z-mono);
    font-size: 0.62rem;
    letter-spacing: 0.14em;
    margin-top: 22px;
    text-transform: uppercase;
  }

  .a2z-photo-grid {
    display: grid;
    gap: 8px;
    grid-template-columns: repeat(2, minmax(0, 1fr));
  }

  .a2z-photo-grid figure:first-child {
    grid-column: 1 / -1;
  }

  .a2z-photo-grid img {
    aspect-ratio: 4 / 3;
    object-fit: cover;
    width: 100%;
  }

  .a2z-photo-grid figure:first-child img {
    aspect-ratio: 16 / 8;
  }

  .a2z-steps {
    background: rgba(255, 255, 255, 0.07);
    display: grid;
    gap: 1px;
    margin-top: 32px;
  }

  .a2z-step {
    background: var(--a2z-dark);
    display: grid;
    gap: 18px;
    grid-template-columns: 58px minmax(0, 1fr);
    padding: 20px 22px;
    text-align: left;
  }

  .a2z-step-num {
    color: transparent;
    font-family: var(--a2z-serif);
    font-size: 2.05rem;
    font-style: italic;
    line-height: 1;
    -webkit-text-stroke: 1px rgba(176, 141, 87, 0.5);
  }

  .a2z-step strong {
    color: var(--a2z-white);
    display: block;
    font-size: 0.95rem;
    font-weight: 400;
    line-height: 1.4;
  }

  .a2z-step span {
    color: var(--a2z-muted);
    display: block;
    font-size: 0.86rem;
    font-weight: 400;
    line-height: 1.66;
    margin-top: 4px;
  }

  .a2z-review-card {
    padding: 34px 30px;
  }

  .a2z-review-stars {
    color: var(--a2z-gold);
    font-family: var(--a2z-mono);
    font-size: 0.63rem;
    letter-spacing: 0.12em;
    margin-bottom: 20px;
    text-transform: uppercase;
  }

  .a2z-review-text {
    color: rgba(255, 255, 255, 0.88);
    font-family: var(--a2z-serif);
    font-size: clamp(1.15rem, 1.8vw, 1.45rem);
    font-style: italic;
    font-weight: 300;
    line-height: 1.52;
  }

  .a2z-review-footer {
    align-items: center;
    border-top: 1px solid var(--a2z-line-soft);
    display: flex;
    flex-wrap: wrap;
    gap: 18px 28px;
    justify-content: space-between;
    margin-top: 36px;
    padding-top: 28px;
  }

  .a2z-google-badge {
    align-items: center;
    display: flex;
    gap: 18px;
  }

  .a2z-google-score {
    color: var(--a2z-gold-light);
    font-family: var(--a2z-serif);
    font-size: 2.45rem;
    font-style: italic;
    line-height: 1;
  }

  .a2z-google-badge span {
    color: var(--a2z-muted);
    display: block;
    font-size: 0.78rem;
    font-weight: 400;
  }

  .a2z-contact-stack {
    background: rgba(255, 255, 255, 0.07);
    display: grid;
    gap: 1px;
  }

  .a2z-contact-card {
    background: var(--a2z-panel);
    padding: 24px 26px;
    text-align: left;
  }

  .a2z-contact-card span {
    color: var(--a2z-gold);
    display: block;
    font-family: var(--a2z-mono);
    font-size: 0.62rem;
    letter-spacing: 0.14em;
    margin-bottom: 8px;
    text-transform: uppercase;
  }

  .a2z-contact-card a,
  .a2z-contact-card strong {
    color: var(--a2z-white);
    font-family: var(--a2z-serif);
    font-size: clamp(1.12rem, 1.8vw, 1.45rem);
    font-weight: 300;
    line-height: 1.35;
  }

  @media (max-width: 1020px) {
    .a2z-section-head,
    .a2z-split,
    .a2z-split.a2z-split-reverse,
    .a2z-hero-grid {
      grid-template-columns: 1fr;
    }

    .a2z-hero-card {
      min-height: auto;
    }

    .a2z-metrics-grid {
      grid-template-columns: repeat(3, minmax(0, 1fr));
    }

    .a2z-metric:nth-child(3) {
      border-right: 0;
    }

    .a2z-metric:nth-child(n + 4) {
      border-top: 1px solid rgba(12, 12, 10, 0.08);
    }

    .a2z-card-grid,
    .a2z-sector-grid {
      grid-template-columns: 1fr 1fr;
    }

    .a2z-split-reverse .a2z-media-frame,
    .a2z-split-reverse .a2z-photo-grid {
      order: -1;
    }
  }

  @media (max-width: 680px) {
    .a2z-section {
      padding: 68px 0;
    }

    .a2z-wrap {
      padding-inline: 18px;
    }

    .a2z-title {
      font-size: clamp(2.25rem, 11vw, 3.35rem);
    }

    .a2z-hero {
      min-height: auto;
    }

    .a2z-hero .a2z-wrap {
      padding-bottom: 62px;
      padding-top: 76px;
    }

    .a2z-hero h1 {
      font-size: clamp(3rem, 15vw, 4.7rem);
    }

    .a2z-hero-points,
    .a2z-metrics-grid,
    .a2z-card-grid,
    .a2z-sector-grid {
      grid-template-columns: 1fr;
    }

    .a2z-hero-point,
    .a2z-hero-point:nth-child(odd),
    .a2z-hero-point:nth-child(n + 3),
    .a2z-metric,
    .a2z-metric:nth-child(3),
    .a2z-metric:nth-child(n + 4) {
      border-right: 0;
      border-top: 1px solid rgba(255, 255, 255, 0.1);
    }

    .a2z-hero-point:first-child {
      border-top: 0;
    }

    .a2z-metric {
      border-top: 1px solid rgba(12, 12, 10, 0.08);
    }

    .a2z-metric:first-child {
      border-top: 0;
    }

    .a2z-actions,
    .a2z-slider-controls,
    .a2z-review-footer {
      align-items: stretch;
      flex-direction: column;
    }

    .a2z-btn {
      width: 100%;
    }

    .a2z-feature-card {
      min-height: 300px;
    }

    .a2z-step {
      grid-template-columns: 44px minmax(0, 1fr);
    }
  }

  @media (prefers-reduced-motion: reduce) {
    .a2z-reveal,
    .a2z-slider-track,
    .a2z-video-card img,
    .a2z-play {
      transition: none;
    }

    .a2z-reveal {
      opacity: 1;
      transform: none;
    }
  }
</style>

<main class="a2z-home" id="a2z-homepage">
  <section class="a2z-hero">
    <div class="a2z-hero-bg" aria-hidden="true"></div>
    <div class="a2z-wrap">
      <div class="a2z-hero-grid">
        <div>
          <span class="a2z-label a2z-reveal">FCCA Chartered Accountants - Aberdeen</span>
          <h1 class="a2z-reveal a2z-delay-1">Your business has grown. <em>Is your accounting keeping up?</em></h1>
          <p class="a2z-hero-sub a2z-reveal a2z-delay-2">FCCA-qualified chartered accountants for ambitious UK businesses, fully managed, proactively advised, and guaranteed to respond the same day.</p>
          <div class="a2z-hero-points a2z-reveal a2z-delay-3">
            <div class="a2z-hero-point">Proactive tax planning that builds wealth</div>
            <div class="a2z-hero-point">Fully managed support so you stay focused on growth</div>
            <div class="a2z-hero-point">Complex advice made simple and actionable</div>
            <div class="a2z-hero-point">Same-day response, guaranteed in writing</div>
          </div>
          <div class="a2z-actions a2z-reveal a2z-delay-3">
            <a class="a2z-btn a2z-btn-gold" href="/contact/">Get a free fee estimate</a>
            <a class="a2z-btn a2z-btn-ghost" href="/testimonial/">Watch client stories</a>
          </div>
        </div>
        <aside class="a2z-hero-card a2z-reveal a2z-delay-2" aria-label="Google rating">
          <div class="a2z-hero-score">5.0</div>
          <p>Rated 5.0 across 75 Google reviews by business owners who rely on A2Z for payroll, VAT, tax, reporting, and director-level oversight.</p>
          <strong>Aberdeen's top-rated accountancy firm</strong>
        </aside>
      </div>
    </div>
  </section>

  <section class="a2z-metrics" aria-label="A2Z Accounting credentials">
    <div class="a2z-metrics-grid">
      <div class="a2z-metric"><strong>FCCA</strong><span>Fellow Chartered Accountant</span></div>
      <div class="a2z-metric"><strong>Big 4</strong><span>Deloitte and EY audit standards</span></div>
      <div class="a2z-metric"><strong>Subsea 7</strong><span>Multinational finance experience</span></div>
      <div class="a2z-metric"><strong>75</strong><span>Five-star Google reviews</span></div>
      <div class="a2z-metric"><strong>&pound;0</strong><span>HMRC penalties since founding</span></div>
      <div class="a2z-metric"><strong>0</strong><span>Missed deadlines since founding</span></div>
    </div>
  </section>

  <section class="a2z-section a2z-section-mid">
    <div class="a2z-wrap">
      <div class="a2z-section-head">
        <div>
          <span class="a2z-label a2z-reveal">Trusted by ambitious businesses</span>
          <h2 class="a2z-title a2z-reveal a2z-delay-1">Hear it from the businesses <em>we work with.</em></h2>
        </div>
        <div class="a2z-head-copy a2z-reveal a2z-delay-2">
          <p class="a2z-copy">Real clients. Real results. Watch business owners explain what changed when their accounts moved from reactive compliance to proactive financial management.</p>
          <div class="a2z-actions"><a class="a2z-btn a2z-btn-ghost" href="/testimonial/">See all stories</a></div>
        </div>
      </div>
      <div class="a2z-slider-shell" data-a2z-slider="videos">
        <div class="a2z-slider-viewport">
          <div class="a2z-slider-track" id="a2z-video-track"></div>
        </div>
        <div class="a2z-slider-controls">
          <div class="a2z-dots" id="a2z-video-dots"></div>
          <div class="a2z-arrows">
            <button class="a2z-arrow" id="a2z-video-prev" type="button" aria-label="Previous testimonial"><svg viewBox="0 0 24 24"><polyline points="15 18 9 12 15 6"></polyline></svg></button>
            <button class="a2z-arrow" id="a2z-video-next" type="button" aria-label="Next testimonial"><svg viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"></polyline></svg></button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="a2z-section a2z-section-dark">
    <div class="a2z-wrap">
      <div class="a2z-section-head">
        <div>
          <span class="a2z-label a2z-reveal">Built on structure, focused on growth</span>
          <h2 class="a2z-title a2z-reveal a2z-delay-1">Three things that change when you <em>work with A2Z.</em></h2>
        </div>
        <p class="a2z-copy a2z-head-copy a2z-reveal a2z-delay-2">The firm is built around proactive planning, reliable communication, and layered review. That structure is what lets growing businesses make decisions with confidence.</p>
      </div>
      <div class="a2z-card-grid">
        <article class="a2z-feature-card a2z-reveal">
          <span class="a2z-feature-num">01</span>
          <h3>Structured tax planning</h3>
          <p>Tax strategies planned months before deadlines, not assembled in a rush at year-end. Reliefs are identified proactively and transactions are structured for optimal outcomes.</p>
        </article>
        <article class="a2z-feature-card a2z-reveal a2z-delay-1">
          <span class="a2z-feature-num">02</span>
          <h3>Immediate, reliable support</h3>
          <p>Queries received before midday receive a same-day response, guaranteed in your engagement letter. Your business does not wait, and neither should your accountant.</p>
        </article>
        <article class="a2z-feature-card a2z-reveal a2z-delay-2">
          <span class="a2z-feature-num">03</span>
          <h3>Complete financial confidence</h3>
          <p>Every output is reviewed across specialist, department head, senior accountant, and FCCA director layers before it reaches you.</p>
        </article>
      </div>
    </div>
  </section>

  <section class="a2z-section a2z-section-mid">
    <div class="a2z-wrap">
      <div class="a2z-split a2z-split-reverse">
        <figure class="a2z-media-frame a2z-reveal">
          <img src="https://a2zaccounting.co.uk/wp-content/uploads/2025/08/Home-Page-photo.webp" alt="A2Z Accounting Solutions for high growth business owners in the UK" loading="lazy">
        </figure>
        <div>
          <span class="a2z-label a2z-reveal">Who this is for</span>
          <h2 class="a2z-title a2z-reveal a2z-delay-1">For high growth businesses that <em>value structure and control.</em></h2>
          <div class="a2z-list">
            <div class="a2z-list-item"><strong>Simple systems. You send records. We handle everything.</strong><span>No software to manage, no admin to chase, and no explaining things twice.</span></div>
            <div class="a2z-list-item"><strong>Specialist teams. Fast turnaround. No delays.</strong><span>Payroll, bookkeeping and VAT, accounts and tax flow through specialists, not stretched generalists.</span></div>
            <div class="a2z-list-item"><strong>Clear reporting. Know profit and upcoming tax in advance.</strong><span>Monthly or quarterly management accounts so you understand your position before it is too late to act.</span></div>
            <div class="a2z-list-item"><strong>Complex advice made simple and immediately actionable.</strong><span>HMRC investigations, group structures, capital gains, inheritance planning and R&amp;D claims handled in-house.</span></div>
          </div>
          <div class="a2z-actions"><a class="a2z-btn a2z-btn-ghost" href="/about-us/">Meet the firm</a></div>
        </div>
      </div>
    </div>
  </section>

  <section class="a2z-section a2z-section-dark">
    <div class="a2z-wrap">
      <div class="a2z-split">
        <div>
          <span class="a2z-label a2z-reveal">Our responsibility</span>
          <h2 class="a2z-title a2z-reveal a2z-delay-1">A higher standard of <em>financial management.</em></h2>
          <p class="a2z-copy a2z-copy-spaced a2z-reveal a2z-delay-2">Reactive accounting creates unnecessary stress and missed opportunities. Established businesses deserve ongoing, structured oversight, not a call once a year when it is too late to change anything.</p>
          <ul class="a2z-plain-list a2z-reveal a2z-delay-2">
            <li>Up-to-date financial visibility at all times, not just at year-end.</li>
            <li>Proactive tax planning months ahead, not weeks behind.</li>
            <li>Organised, documented, repeatable systems with no single points of failure.</li>
            <li>Clear, accountable communication from a specialist team.</li>
            <li>Ongoing structured oversight, not annual compliance and silence.</li>
            <li>Corporate finance experience from Big 4 audit environments, applied here.</li>
          </ul>
          <blockquote class="a2z-quote a2z-reveal a2z-delay-3">Our responsibility is simple: to ensure your financial foundations are properly managed at all times, so you can build with complete confidence.</blockquote>
          <div class="a2z-actions"><a class="a2z-btn a2z-btn-gold" href="/contact/">Discuss your requirements</a></div>
        </div>
        <figure class="a2z-media-frame a2z-reveal a2z-delay-1">
          <img src="https://a2zaccounting.co.uk/wp-content/uploads/2025/04/promise-img.jpg" alt="A2Z Accounting higher standard of financial management for UK businesses" loading="lazy">
        </figure>
      </div>
    </div>
  </section>

  <section class="a2z-section">
    <div class="a2z-wrap">
      <div class="a2z-section-head">
        <div>
          <span class="a2z-label a2z-reveal">Who we help</span>
          <h2 class="a2z-title a2z-reveal a2z-delay-1">Deep sector expertise across <em>six key industries.</em></h2>
        </div>
        <p class="a2z-copy a2z-head-copy a2z-reveal a2z-delay-2">Each sector carries its own compliance requirements, tax complexities and reporting needs. Our clients receive advice from specialists who understand their industry.</p>
      </div>
      <div class="a2z-sector-grid">
        <a class="a2z-sector-card" href="/help/e-commerce-and-retail/"><h3>E-Commerce &amp; Retail</h3><p>Shopify, Amazon FBA, WooCommerce, Etsy and marketplaces. UK VAT, EU IOSS, multi-currency, settlement reconciliation and platform profitability.</p><span class="a2z-sector-link">Explore</span></a>
        <a class="a2z-sector-card" href="/help/social-media-influencers/"><h3>Social Media &amp; Influencers</h3><p>Content creators, YouTubers, podcasters and digital marketers. Brand deal structuring, platform revenue tax treatment and gifted product compliance.</p><span class="a2z-sector-link">Explore</span></a>
        <a class="a2z-sector-card" href="/help/healthcare/"><h3>Healthcare</h3><p>GPs, dentists, consultants, pharmacies, aesthetics and care homes. NHS pensions, mixed income structures, CQC compliance and practitioner tax positions.</p><span class="a2z-sector-link">Explore</span></a>
        <a class="a2z-sector-card" href="/help/property-trades/"><h3>Property &amp; Trades</h3><p>CIS contractors and subcontractors, landlords, builders, electricians, surveyors and joiners. CIS returns, job costing, WIP reporting and SDLT planning.</p><span class="a2z-sector-link">Explore</span></a>
        <a class="a2z-sector-card" href="/help/hospitality/"><h3>Hospitality</h3><p>Hotels, restaurants, bars, clubs and B&amp;Bs. Margin analysis, staff cost tracking, tip and service charge compliance, consolidation and seasonal cash flow.</p><span class="a2z-sector-link">Explore</span></a>
        <a class="a2z-sector-card" href="/help/oil-gas-and-engineering/"><h3>Oil, Gas &amp; Engineering</h3><p>Companies, engineers, contractors and energy consultancies. Project accounting, international contractor arrangements, R&amp;D tax credits and consolidation.</p><span class="a2z-sector-link">Explore</span></a>
      </div>
    </div>
  </section>

  <section class="a2z-section a2z-section-mid">
    <div class="a2z-wrap">
      <div class="a2z-split a2z-split-reverse">
        <div class="a2z-photo-grid a2z-reveal">
          <figure><img src="https://a2zaccounting.co.uk/wp-content/uploads/2025/08/switch-1.webp" alt="Moving to A2Z Accounting structured onboarding" loading="lazy"></figure>
          <figure><img src="https://a2zaccounting.co.uk/wp-content/uploads/2025/08/switch-2.webp" alt="A2Z Accounting client partnership built on trust" loading="lazy"></figure>
          <figure><img src="https://a2zaccounting.co.uk/wp-content/uploads/2025/08/switch-3.webp" alt="A2Z Accounting professional specialist team" loading="lazy"></figure>
        </div>
        <div>
          <span class="a2z-label a2z-reveal">Moving to A2Z</span>
          <h2 class="a2z-title a2z-reveal a2z-delay-1">Structured, straightforward <em>from day one.</em></h2>
          <p class="a2z-copy a2z-copy-spaced a2z-reveal a2z-delay-2">We coordinate directly with your previous accountant so the transition is clean, complete and without disruption to your business.</p>
          <div class="a2z-steps">
            <div class="a2z-step"><span class="a2z-step-num">01</span><div><strong>Discovery Conversation</strong><span>We learn your business, your structure, your goals, and what your previous accountant may have missed.</span></div></div>
            <div class="a2z-step"><span class="a2z-step-num">02</span><div><strong>Structured Handover</strong><span>We contact your previous accountant directly. Records are reviewed, software configured, and access set up.</span></div></div>
            <div class="a2z-step"><span class="a2z-step-num">03</span><div><strong>Ongoing Management</strong><span>Your account runs within a defined system from day one. No drift, no gaps, no chasing.</span></div></div>
          </div>
          <div class="a2z-actions"><a class="a2z-btn a2z-btn-gold" href="/contact/">Start the conversation</a></div>
        </div>
      </div>
    </div>
  </section>

  <section class="a2z-section a2z-section-dark" id="google_reviews">
    <div class="a2z-wrap">
      <div class="a2z-section-head">
        <div>
          <span class="a2z-label a2z-reveal">Google Reviews</span>
          <h2 class="a2z-title a2z-reveal a2z-delay-1">What our clients say <em>in their own words.</em></h2>
        </div>
        <p class="a2z-copy a2z-head-copy a2z-reveal a2z-delay-2">Verified reviews from business owners who rely on A2Z for complete accounting support, tax planning, and financial clarity.</p>
      </div>
      <div class="a2z-slider-shell" data-a2z-slider="reviews">
        <div class="a2z-slider-viewport">
          <div class="a2z-slider-track" id="a2z-review-track"></div>
        </div>
        <div class="a2z-slider-controls">
          <div class="a2z-dots" id="a2z-review-dots"></div>
          <div class="a2z-arrows">
            <button class="a2z-arrow" id="a2z-review-prev" type="button" aria-label="Previous review"><svg viewBox="0 0 24 24"><polyline points="15 18 9 12 15 6"></polyline></svg></button>
            <button class="a2z-arrow" id="a2z-review-next" type="button" aria-label="Next review"><svg viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"></polyline></svg></button>
          </div>
        </div>
      </div>
      <div class="a2z-review-footer">
        <div class="a2z-google-badge">
          <strong class="a2z-google-score">5.0</strong>
          <span>75 Google Reviews<br>Aberdeen's top-rated accountancy firm</span>
        </div>
        <a class="a2z-btn a2z-btn-ghost" href="https://g.page/r/CQKFgSng6bXTEAE/review" target="_blank" rel="noopener">Leave a review</a>
      </div>
    </div>
  </section>

  <section class="a2z-section">
    <div class="a2z-wrap">
      <div class="a2z-split a2z-split-reverse">
        <figure class="a2z-media-frame a2z-reveal">
          <img src="https://a2zaccounting.co.uk/wp-content/uploads/2025/04/download_img1.png" alt="A2Z Accounting free resources for growing UK businesses" loading="lazy">
        </figure>
        <div>
          <span class="a2z-label a2z-reveal">Free Resources</span>
          <h2 class="a2z-title a2z-reveal a2z-delay-1">Structured guides for <em>ambitious business owners.</em></h2>
          <p class="a2z-copy a2z-copy-spaced a2z-reveal a2z-delay-2">Practical, no-jargon guides covering tax planning, company structuring, management accounts and financial decision-making, written for business owners who want clarity and confidence.</p>
          <div class="a2z-actions">
            <a class="a2z-btn a2z-btn-gold" href="/free-resources/">Download free resources</a>
            <a class="a2z-btn a2z-btn-ghost" href="/blog/">Read our blog</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="a2z-section a2z-section-mid" id="getquote">
    <div class="a2z-wrap">
      <div class="a2z-split">
        <div>
          <span class="a2z-label a2z-reveal">Get started today</span>
          <h2 class="a2z-title a2z-reveal a2z-delay-1">We work best with business owners who value <em>structure, responsiveness and long-term stability.</em></h2>
          <p class="a2z-copy a2z-copy-spaced a2z-reveal a2z-delay-2">If that reflects how you operate, we would be pleased to speak. No obligation, just a straightforward conversation about your business, what you need, and whether we are the right fit.</p>
          <div class="a2z-actions">
            <a class="a2z-btn a2z-btn-gold" href="/contact/">Get an instant fee estimate</a>
            <a class="a2z-btn a2z-btn-ghost" href="/about-us/">Learn about the firm</a>
          </div>
        </div>
        <div class="a2z-contact-stack a2z-reveal a2z-delay-1">
          <div class="a2z-contact-card"><span>Call us directly</span><a href="tel:01224042961">01224 042961</a></div>
          <div class="a2z-contact-card"><span>Email</span><a href="mailto:info@a2zaccounting.co.uk">info@a2zaccounting.co.uk</a></div>
          <div class="a2z-contact-card"><span>Office</span><strong>1st Floor, 499 Union Street, Aberdeen AB11 6DB</strong></div>
          <div class="a2z-contact-card"><span>Client portal</span><a href="https://login.engager.app/" target="_blank" rel="noopener">Login to your portal</a></div>
        </div>
      </div>
    </div>
  </section>
</main>

<script>
  (function () {
    const root = document.getElementById("a2z-homepage");
    if (!root) return;

    const videos = [
      { img: "https://a2zaccounting.co.uk/wp-content/uploads/2025/06/Testimonial-%E2%80%93-a2z-accounting-06-04-2025_12_21_PM-21.png", quote: "Building a real relationship with our accountant, not just handing over paperwork like before.", name: "Kevin Smith", biz: "Owner, The Drouthy Cobbler and Spey Life", url: "https://www.loom.com/embed/8761cb23b0a34e558b8867204c69e68f" },
      { img: "https://a2zaccounting.co.uk/wp-content/uploads/2025/04/testi-img-1.jpg", quote: "An absolute pleasure to work with, responsive, knowledgeable and genuinely invested in our success.", name: "Mrs. Rona Tonge", biz: "Managing Director, Golf View Hotel", url: "https://www.loom.com/embed/7878b7d8ae564fb7822bcc706a5efc33" },
      { img: "https://a2zaccounting.co.uk/wp-content/uploads/2025/06/3.png", quote: "As they grow, we grow. A2Z are the reason our finances never hold us back.", name: "Mr. Mohamed Ali", biz: "Property Tycoon and MacAli Hotel Group", url: "https://www.loom.com/embed/9caff76064d2408c8193cb5406ef69ea" },
      { img: "https://a2zaccounting.co.uk/wp-content/uploads/2025/06/4-1024x787.png", quote: "My business grew stress-free. Want a good life? Move to A2Z.", name: "Behrouz Abolghassem", biz: "Owner, Little Italy", url: "https://www.loom.com/embed/157bd97bdd42416497aab3ccf8de5843" },
      { img: "https://a2zaccounting.co.uk/wp-content/uploads/2025/06/5.png", quote: "The friends I referred who moved to A2Z could not thank me enough.", name: "Christopher O'Halloran", biz: "Owner, The Green Inn", url: "https://www.loom.com/embed/6e7d53d784924c84a5240d390cf0e40b" },
      { img: "https://a2zaccounting.co.uk/wp-content/uploads/2025/06/6-1024x846.png", quote: "You really get to know your accountant when you are in the deep end.", name: "Khuram Qadir CEng", biz: "Founder, Cygnas Solutions", url: "https://www.loom.com/embed/0f25c7b69a2e4af4bac8d720949df52b" },
      { img: "https://a2zaccounting.co.uk/wp-content/uploads/2025/06/8.webp", quote: "I can trust them to handle everything while I focus on growing my business.", name: "Mr. Hosam Yousef", biz: "Pharmacist and pharmacy owner", url: "https://www.loom.com/embed/93fa845584ea405891cbf002857eff90" },
      { img: "https://a2zaccounting.co.uk/wp-content/uploads/2025/06/12-1024x859.webp", quote: "Switched accountants a week before the deadline. A2Z handled everything flawlessly.", name: "Ameer Aslam", biz: "Owner, Nickel and Dime", url: "https://www.loom.com/embed/309b1b0e1364427ab246273db38147ab" }
    ];

    const reviews = [
      { text: "Since starting to work with A2Z, they have completely transformed our businesses into ones that truly have a future. They work with you in real partnership.", author: "Colin Cass", sub: "Business Owner, Google Review" },
      { text: "A2Z Accounting Solutions has been managing our full accounting operations and their service has consistently exceeded expectations. Proactive, precise, and invested in growth.", author: "Faiyadh", sub: "Immigration Consultancy Owner, Google Review" },
      { text: "From day one, they impressed me with their professionalism, speed, and genuine care. With A2Z, you really feel looked after, respected, and valued.", author: "Yuliya Forrest", sub: "Client, Google Review" },
      { text: "They have always been the best. Never missed a submission or deadline. Even after moving across the country, they remain the best I have worked with.", author: "Ramona Obafemi", sub: "Director, Google Review" },
      { text: "Shabbir and the team are friendly, quick to reply and they really know their stuff. They have taken all the stress out of bookkeeping and tax time.", author: "BlackGard Joinery", sub: "Trades Business Owner, Google Review" },
      { text: "Really good experience. They helped me get my fines down substantially and completed all outstanding tax returns. They could not have been more helpful.", author: "Lee Wood", sub: "Client, Google Review" }
    ];

    function escapeHtml(value) {
      return String(value).replace(/[&<>"']/g, function (char) {
        return ({ "&": "&amp;", "<": "&lt;", ">": "&gt;", '"': "&quot;", "'": "&#039;" })[char];
      });
    }

    function initSlider(config) {
      const track = root.querySelector("#" + config.trackId);
      const prev = root.querySelector("#" + config.prevId);
      const next = root.querySelector("#" + config.nextId);
      const dotsWrap = root.querySelector("#" + config.dotsId);
      if (!track || !prev || !next || !dotsWrap) return;

      let current = 0;
      let timer = null;

      config.items.forEach(function (item) {
        const slide = document.createElement("div");
        slide.className = "a2z-slide";
        slide.innerHTML = config.render(item);
        track.appendChild(slide);
      });

      config.items.forEach(function (_, index) {
        const dot = document.createElement("button");
        dot.type = "button";
        dot.className = "a2z-dot" + (index === 0 ? " is-active" : "");
        dot.setAttribute("aria-label", "Go to slide " + (index + 1));
        dot.addEventListener("click", function () {
          current = index;
          update();
        });
        dotsWrap.appendChild(dot);
      });

      const slides = Array.from(track.children);
      const dots = Array.from(dotsWrap.children);

      function visibleCount() {
        return window.innerWidth >= 980 ? config.desktop : 1;
      }

      function update(animate) {
        const count = visibleCount();
        const viewport = track.parentElement;
        const slideWidth = viewport.offsetWidth / count;
        const max = Math.max(0, slides.length - count);
        current = Math.max(0, Math.min(current, max));

        slides.forEach(function (slide) {
          slide.style.width = slideWidth + "px";
        });

        track.style.transition = animate === false ? "none" : "";
        track.style.transform = "translateX(" + (-current * slideWidth) + "px)";
        dots.forEach(function (dot, index) {
          dot.classList.toggle("is-active", index === current);
        });
        prev.disabled = current === 0;
        next.disabled = current >= max;
      }

      prev.addEventListener("click", function () {
        current -= 1;
        update();
      });

      next.addEventListener("click", function () {
        current += 1;
        update();
      });

      let touchStart = 0;
      track.addEventListener("touchstart", function (event) {
        touchStart = event.touches[0].clientX;
      }, { passive: true });

      track.addEventListener("touchend", function (event) {
        const delta = touchStart - event.changedTouches[0].clientX;
        if (Math.abs(delta) > 42) {
          delta > 0 ? next.click() : prev.click();
        }
      }, { passive: true });

      window.addEventListener("resize", function () {
        update(false);
      });

      if (config.autoMs) {
        const start = function () {
          timer = window.setInterval(function () {
            const max = Math.max(0, slides.length - visibleCount());
            current = current >= max ? 0 : current + 1;
            update();
          }, config.autoMs);
        };
        const stop = function () {
          window.clearInterval(timer);
        };
        start();
        track.parentElement.addEventListener("mouseenter", stop);
        track.parentElement.addEventListener("mouseleave", start);
      }

      update(false);
    }

    initSlider({
      trackId: "a2z-video-track",
      prevId: "a2z-video-prev",
      nextId: "a2z-video-next",
      dotsId: "a2z-video-dots",
      items: videos,
      desktop: 3,
      autoMs: 6000,
      render: function (item) {
        return '<a class="a2z-video-card" href="' + escapeHtml(item.url) + '" target="_blank" rel="noopener">' +
          '<img src="' + escapeHtml(item.img) + '" alt="' + escapeHtml(item.name) + ' testimonial for A2Z Accounting" loading="lazy">' +
          '<span class="a2z-play" aria-hidden="true"><svg viewBox="0 0 16 16"><polygon points="3,2 14,8 3,14" fill="currentColor"></polygon></svg></span>' +
          '<div class="a2z-video-overlay"><p class="a2z-video-quote">&ldquo;' + escapeHtml(item.quote) + '&rdquo;</p><span class="a2z-video-name">' + escapeHtml(item.name) + '</span><span class="a2z-video-biz">' + escapeHtml(item.biz) + '</span></div>' +
          '</a>';
      }
    });

    initSlider({
      trackId: "a2z-review-track",
      prevId: "a2z-review-prev",
      nextId: "a2z-review-next",
      dotsId: "a2z-review-dots",
      items: reviews,
      desktop: 2,
      autoMs: 7000,
      render: function (item) {
        return '<article class="a2z-review-card"><div class="a2z-review-stars">5 / 5 Google review</div><p class="a2z-review-text">&ldquo;' + escapeHtml(item.text) + '&rdquo;</p><div class="a2z-review-author"><strong>' + escapeHtml(item.author) + '</strong><span>' + escapeHtml(item.sub) + '</span></div></article>';
      }
    });

    if ("IntersectionObserver" in window) {
      const observer = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            entry.target.classList.add("is-visible");
            observer.unobserve(entry.target);
          }
        });
      }, { threshold: 0.08, rootMargin: "0px 0px -24px 0px" });

      root.querySelectorAll(".a2z-reveal").forEach(function (element) {
        observer.observe(element);
      });
    } else {
      root.querySelectorAll(".a2z-reveal").forEach(function (element) {
        element.classList.add("is-visible");
      });
    }
  })();
</script>

<?php
get_footer();
