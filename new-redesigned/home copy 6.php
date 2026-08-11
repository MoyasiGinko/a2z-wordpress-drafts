<?php
/**
* Template Name: Home - CSTM
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
$btn_1_title = $btn_1['title'] ?? 'Start Your Enquiry';
$btn_2_url   = $btn_2['url']   ?? '/contact/';
$btn_2_title = 'Watch Success Stories';

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
  ['Structured tax planning',        'We plan your tax months ahead, not in a year-end rush. You keep more, with no surprises.'],
  ['Immediate, reliable support',    'Ask before midday and get an answer the same day, guaranteed in writing. Your business never waits.'],
  ['Complete financial confidence',  'Zero missed deadlines and zero HMRC penalties since we started. Every figure is checked before it reaches you.'],
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
  ['E-Commerce',        'Online Stores, Retailers, Wholesale, Fashion, Subscription Services', '/help/e-commerce-and-retail/', 'https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?auto=format&fit=crop&w=800&q=80'],
  ['Healthcare',                     'Pharmacies, Dental &amp; Medical Practices, Locums, Aesthetics, Care Homes, Opticians', '/help/healthcare/', 'https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?auto=format&fit=crop&w=800&q=80'],
  ['Property &amp; Trades',          'Property Companies, Landlords, Builders, Plumbers, Electricians, Surveyors, Estate Agents, Joiners, Roofers, Tilers, Carpenters, Floor Layers', '/help/property-trades/', 'https://images.unsplash.com/photo-1503387762-592deb58ef4e?auto=format&fit=crop&w=800&q=80'],
  ['Influencers &amp; Affiliates', 'Content Creators, YouTubers, Bloggers, Podcasters, Digital Marketers', '/help/social-media-influencers/', 'https://images.unsplash.com/photo-1611162617213-7d7a39e9b1d7?auto=format&fit=crop&w=600&q=80'],
  ['Hospitality',                    'Hotels, Restaurants, Bars, Clubs, B&amp;Bs, Events, Catering, Holiday Parks, Tour Operators', '/help/hospitality/', 'https://images.unsplash.com/photo-1514933651103-005eec06c04b?auto=format&fit=crop&w=800&q=80'],
  ['Oil &amp; Gas Engineering',  'Companies, Engineers, Contractors, IT, Energy Consultancies, Oilfield Services, Renewables', '/help/oil-gas-and-engineering/', 'https://images.unsplash.com/photo-1518709268805-4e9042af9f23?auto=format&fit=crop&w=800&q=80'],
];

// Moving to A2Z steps
$switch_steps = [
  ['Discovery Conversation', 'We learn your business, your structure, your goals, and what your previous accountant may have missed.'],
  ['Structured Handover',    'We contact your previous accountant directly. Records are reviewed, software configured, and access set up.'],
  ['Ongoing Management',     'Your account runs within a defined system from day one. No drift, no gaps, no chasing.'],
];
?>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&family=Libre+Caslon+Text:ital,wght@0,400;0,700;1,400&family=Plus+Jakarta+Sans:wght@400;500;600;700&family=Hanken+Grotesk:wght@400;500;600;700;800&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">

<style>

        /* ==========================================
           1. RESET & VARIABLE TOKENS
           ========================================== */
        :root {
            /* Brand Color Palette */
            --color-navy-deepest: #03080f;
            --color-navy-deep: #112B45;
            --color-navy: #0a1d30;
            --color-navy-light: #11253c;
            --color-gold: #d4a84f;
            --color-gold-hover: #b8862f;
            --color-gold-light: #f4ead2;
            --color-gold-rgb: 212, 168, 79;
            
            /* Slate Grays */
            --color-slate-50: #f8fafc;
            --color-slate-100: #f1f5f9;
            --color-slate-200: #e2e8f0;
            --color-slate-300: #cbd5e1;
            --color-slate-400: #94a3b8;
            --color-slate-600: #475569;
            --color-slate-800: #1e293b;
            
            --color-white: #ffffff;
            
            /* Typography */
            --font-sans: 'Inter', system-ui, -apple-system, sans-serif;
            --font-serif: 'Playfair Display', Georgia, serif;
            
            /* Transitions */
            --transition-smooth: all 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            
            /* Layout Constraints */
            --max-width: 1200px;
        }

        *, *::before, *::after {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        .a2z-new-home-wrapper {
            font-family: var(--font-sans);
            color: var(--color-slate-800);
            background-color: var(--color-white);
            line-height: 1.6;
            overflow-x: hidden;
            -webkit-font-smoothing: antialiased;
        }

        a {
            text-decoration: none;
            color: inherit;
            transition: var(--transition-smooth);
        }

        button {
            font-family: inherit;
            border: none;
            background: none;
            cursor: pointer;
            transition: var(--transition-smooth);
        }

        img {
            max-width: 100%;
            height: auto;
            display: block;
        }

        .container {
            width: 100%;
            max-width: var(--max-width);
            margin: 0 auto;
            padding: 0 24px;
        }

        /* Utility classes */
        .text-center { text-align: center; }
        .text-gold { color: var(--color-gold); }
        .font-serif { font-family: var(--font-serif); }
        .italic { font-style: italic; }
        .weight-normal { font-weight: 400; }
        .weight-bold { font-weight: 700; }

        /* Buttons */
        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 14px 28px;
            font-size: 0.85rem;
            font-weight: 700;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            border-radius: 7px;
            transition: var(--transition-smooth);
        }

	
	.btn::before {
		background: transparent;
	}
        .btn-solid {
            background-color: var(--color-gold);
            color: var(--color-navy-deepest);
            box-shadow: 0 4px 14px rgba(212, 168, 79, 0.25);
        }

        .btn-solid:hover {
            background-color: var(--color-gold-hover);
			color: #fff;
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(212, 168, 79, 0.35);
        }

        .btn-outline {
            border: 1px solid var(--color-gold);
            color: var(--color-gold);
            background-color: #FFFFFF0D;
            gap: 8px;
        }

        .btn-outline:hover {
            background-color: var(--color-gold);
            color: var(--color-navy-deepest);
            transform: translateY(-2px);
        }

        /* Section structure */
        section {
            padding: 90px 0;
            position: relative;
        }

        .section-dark {
            background-color: var(--color-navy);
            color: var(--color-white);
        }

        .section-light {
            background-color: var(--color-slate-50);
        }

        .section-white {
            background-color: var(--color-white);
        }

        .section-title {
            font-family: Playfair Display;
            font-style: Bold;
            leading-trim: NONE;
        
            font-family: 'Playfair Display', serif;
            font-size: 56px;
            font-weight: 700;
            line-height: 61.6px;
            letter-spacing: 0px;
            text-align: center;
            vertical-align: middle;
            text-transform: capitalize;
            margin-bottom: 20px;
            color: #000;
        }

        .section-dark .section-title {
            color: var(--color-white);
        }

        .section-subtitle {
            font-size: 0.85rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.15em;
            color: var(--color-gold);
            margin-bottom: 12px;
            display: inline-block;
        }

        /* ==========================================
           2. HEADER & NAVIGATION
           ========================================== */
        header {
            width: 100%;
            position: relative;
            background-color: var(--color-white);
            z-index: 100;
            border-bottom: 1px solid var(--color-slate-100);
        }

        .header-top {
            background-color: var(--color-navy-deep);
            color: var(--color-white);
            font-size: 0.8rem;
            font-weight: 500;
            position: relative;
            overflow: hidden;
        }

        .header-top::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 35%;
            height: 100%;
            background-color: var(--color-white);
            transform: skewX(-30deg);
            transform-origin: top left;
            z-index: 1;
        }

        .header-top-wrap {
            display: flex;
            justify-content: flex-end;
            align-items: center;
            height: 40px;
            gap: 24px;
            position: relative;
            z-index: 2;
        }

        .header-top-link {
            color: var(--color-slate-300);
            transition: var(--transition-smooth);
        }

        .header-top-link:hover {
            color: var(--color-gold);
        }

        .header-main-wrap {
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 85px;
        }

        /* Logo Area */
        .logo-container {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .logo-emblem {
            width: 44px;
            height: 44px;
            background-color: var(--color-navy-deep);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 2px solid var(--color-gold);
        }

        .logo-text-title {
            font-family: var(--font-sans);
            font-weight: 800;
            font-size: 1.25rem;
            color: var(--color-navy-deep);
            letter-spacing: 0.05em;
            line-height: 1.1;
        }

        .logo-text-subtitle {
            font-family: var(--font-sans);
            font-size: 0.65rem;
            font-weight: 600;
            color: var(--color-gold-hover);
            letter-spacing: 0.08em;
            text-transform: uppercase;
        }

        /* Nav links */
        nav {
            display: flex;
            align-items: center;
            gap: 32px;
        }

        .nav-link {
            font-size: 0.9rem;
            font-weight: 600;
            color: var(--color-navy-deep);
            padding: 8px 0;
            position: relative;
        }

        .nav-link::after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background-color: var(--color-gold);
            transition: var(--transition-smooth);
        }

        .nav-link:hover::after {
            width: 100%;
        }

        .nav-link:hover {
            color: var(--color-gold-hover);
        }

        .nav-btn {
            margin-left: 12px;
        }

        /* Mobile menu toggle */
        .menu-toggle {
            display: none;
            flex-direction: column;
            gap: 6px;
            width: 30px;
            height: 20px;
            justify-content: space-between;
        }

        .menu-toggle span {
            display: block;
            width: 100%;
            height: 2px;
            background-color: var(--color-navy-deep);
            transition: var(--transition-smooth);
        }

        /* ==========================================
           3. HERO SECTION
           ========================================== */
        .hero {
            position: relative;
            background: linear-gradient(rgba(0, 0, 0, 0.705), rgba(0, 0, 0, 0.705)), url('https://www.communitytax.com/wp-content/uploads/2023/09/File-or-Pay-Taxes.webp');
            background-size: cover;
            background-position: center;
            color: var(--color-white);
            padding: 100px 0 90px 0;
            min-height: 95vh;
            display: flex;
            align-items: center;
        }

        .hero-content {
            max-width: 1000px;
            margin: 0 auto;
            text-align: center;
            position: relative;
            z-index: 10;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .hero-title {
            font-family: 'Libre Caslon Text', serif;
            font-weight: 600;
            font-style: normal;
            font-size: 60px;
            line-height: 74px;
            letter-spacing: -1.12px;
            text-align: center;
            vertical-align: middle;
            margin-bottom: 49px;
			color: #fff;
        }

        .hero-title span {
            display: block;
            color: var(--color-gold);
            font-style: italic;
            font-weight: 600;
        }

        .hero-actions {
            display: flex;
            justify-content: center;
            gap: 16px;
            margin-bottom: 40px;
            flex-wrap: wrap;
        }

        /* Gold Pill Badge under buttons */
        .hero-badge-pill {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 10px 24px;
            border-radius: 12px;
            border: 1px solid #D4A84F80;
            background: #D4A84F1A;
            color: var(--color-white);
            font-size: 0.95rem;
            font-weight: 500;
            margin-bottom: 40px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.25);
        }

        .hero-badge-icon {
            color: var(--color-gold);
            flex-shrink: 0;
        }

        /* Circular Checklist Items */
        .hero-checklist {
            display: flex;
            justify-content: center;
            gap: 36px;
            margin-bottom: 54px;
            flex-wrap: wrap;
            font-size: 0.95rem;
            color: var(--color-white);
            font-weight: 600;
        }

        .hero-checklist-item {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .checklist-icon-circle {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            border: 1.5px solid var(--color-gold);
            color: var(--color-gold);
            flex-shrink: 0;
        }

        /* Success Story Testimonial Card Overlay */
        .hero-card-container {
            position: relative;
            max-width: 920px;
            width: 100%;
            margin: 0 auto;
        }

        .hero-card-offset-border {
            position: absolute;
            right: -5px;
            bottom: -15px;
            width: 155px;
            height: 143px;
            border-bottom: 1px solid var(--color-gold);
            border-right: 1px solid var(--color-gold);
            border-bottom-right-radius: 8px;
            z-index: 1;
            pointer-events: none;
        }

        .hero-card {
            angle: 0 deg;
            opacity: 1;
        
            background: rgba(10, 26, 42, 0.92);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 8px;
            display: grid;
            grid-template-columns: 357.6px 1fr;
            width: 100%;
            max-width: 894px;
            height: 313px;
            text-align: left;
            box-shadow: 0 25px 60px rgba(0, 0, 0, 0.4);
            position: relative;
            z-index: 2;
            overflow: hidden;
            margin: 0 auto;
        }

        /* Left Side: Video Player Thumbnail */
        .hero-card-video {
            position: relative;
            border-radius: 8px 0 0 8px;
            overflow: hidden;
            box-shadow: 0 8px 24px rgba(0,0,0,0.3);
            background-color: #03080f;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 357.6px;
            height: 313px;
        }

        .hero-card-video img {
            width: 357.5899963378906px;
            height: 313px;
            angle: 0 deg;
            opacity: 1;
        
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .hero-card-play {
            angle: 0 deg;
            opacity: 1;
        
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 48px;
            height: 48px;
            border-radius: 12px;
            background-color: var(--color-gold);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--color-navy-deep);
            box-shadow: 0 4px 15px rgba(0,0,0,0.4);
            cursor: pointer;
            transition: var(--transition-smooth);
            z-index: 10;
        }

        .hero-card-play svg {
            margin-left: 3px;
        }

        .hero-card-play:hover {
            transform: translate(-50%, -50%) scale(1.08);
            background-color: var(--color-white);
        }

        /* Right Side: Quote and Metadata */
        .hero-card-info {
            width: 536.4000244140625px;
            angle: 0 deg;
            opacity: 1;
        
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            padding: 32px;
            width: 536.4px;
            height: 313px;
            left: 357.6px;
        }

        .hero-card-header-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 12px;
        }

        .hero-card-eyebrow {
            font-family: Manrope;
            font-style: ExtraBold;
            leading-trim: NONE;
        
            font-family: 'Manrope', sans-serif;
            font-size: 10px;
            font-weight: 800;
            line-height: 15px;
            letter-spacing: 1px;
            vertical-align: middle;
            text-transform: uppercase;
            color: var(--color-gold);
        }

        .hero-card-stars {
            display: flex;
            gap: 2px;
        }

        .hero-card-stars svg {
            color: var(--color-gold);
            width: 14px;
            height: 14px;
        }

        .hero-card-quote {
            font-family: Libre Caslon Text;
            font-style: Italic;
            leading-trim: NONE;
            width: 472.4000244140625px;
            angle: 0 deg;
            opacity: 1;
        
            font-family: 'Libre Caslon Text', serif;
            font-size: 28px;
            font-weight: 400;
            font-style: italic;
            line-height: 38.5px;
            letter-spacing: 0px;
            vertical-align: middle;
            color: var(--color-white);
            margin-bottom: 20px;
            width: 472.4px;
            height: 154px;
        }

        .hero-card-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: auto;
        }

        .hero-card-profile {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .hero-card-avatar {
            width: 38px;
            height: 38px;
            border-radius: 8px;
            background: rgba(255, 255, 255, 0.15);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--color-slate-300);
            flex-shrink: 0;
        }

        .hero-card-meta {
            display: flex;
            flex-direction: column;
        }

        .hero-card-author-name {
            font-size: 0.88rem;
            font-weight: 700;
            color: var(--color-white);
            line-height: 1.2;
        }

        .hero-card-author-role {
            font-size: 0.75rem;
            color: var(--color-slate-400);
            margin-top: 1px;
        }

        .hero-card-nav {
            display: flex;
            gap: 8px;
        }

        .hero-card-nav-btn {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            border: 1px solid rgba(255, 255, 255, 0.25);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--color-white);
            cursor: pointer;
            transition: var(--transition-smooth);
        }

        .hero-card-nav-btn:hover {
            border-color: var(--color-gold);
            color: var(--color-gold);
            background: rgba(212, 168, 79, 0.1);
        }

        @media (max-width: 992px) {
            .hero-card {
                grid-template-columns: 1fr;
                gap: 24px;
                max-width: 550px;
                padding: 24px;
            }
            .hero-card-video {
                aspect-ratio: 16 / 9;
            }
            .hero-card-offset-border {
                display: none;
            }
        }

        /* ==========================================
           4. SECTION 2: THREE THINGS
           ========================================== */
        .features-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
            margin-top: 80px;
        }

        .feature-card {
            background-color: var(--color-white);
            border: 1px solid #D4A84F4D;
            border-radius: 16px;
            padding: 38px 32px;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.04);
            transition: transform 0.4s ease, box-shadow 0.4s ease, border-color 0.4s ease;
            position: relative;
            width: 100%;
            max-width: 380px;
            height: 344px;
            margin: 0 auto;
        }

        .feature-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 25px 50px rgba(212, 168, 79, 0.12);
            border-color: rgba(212, 168, 79, 0.7);
        }

        .feature-icon-wrapper {
            width: 56px;
            height: 56px;
            background: #F4EFE6;
            border-radius: 12px;
            border: 1px solid #C5A05933;
            padding: 1px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 26px;
            color: var(--color-gold);
            transition: transform 0.5s cubic-bezier(0.34, 1.56, 0.64, 1), background-color 0.4s ease, color 0.4s ease;
        }

        .feature-card:hover .feature-icon-wrapper {
            transform: scale(1.1);
            background-color: var(--color-gold);
            color: var(--color-white);
        }

        .feature-card-title {
            font-family: 'Playfair Display', serif;
            font-size: 28px;
            font-weight: 700;
            color: #000;
            margin-bottom: 26px;
            line-height: 100%;
            letter-spacing: 0px;
            vertical-align: middle;
        }

        .feature-card-desc {
            font-family: 'Inter', sans-serif;
            font-size: 18px;
            font-weight: 500;
            color: #000;
            line-height: 150%;
            letter-spacing: 0px;
            vertical-align: middle;
        }

        /* ==========================================
           5. SECTION 3: THREE LEVELS
           ========================================== */
        .levels-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
            margin-top: 120px;
        }

        .level-card {
            background-color: var(--color-navy-deep);
            border: 1px solid rgba(255, 255, 255, 0.05);
            border-radius: 30px;
            padding: 71px 31px;
            display: flex;
            flex-direction: column;
            position: relative;
            transition: var(--transition-smooth);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.08);
            width: 100%;
            max-width: 380px;
            height: 375px;
            margin: 0 auto;
        }

        .level-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.12);
        }

        .level-card.highlighted {
            transform: translateY(-56px);
            box-shadow: 0 25px 60px rgba(0, 0, 0, 0.12);
            z-index: 2;
        }
        
        .level-card.highlighted:hover {
            transform: translateY(-62px);
        }

        .level-eyebrow {
            font-family: 'Inter', sans-serif;
            font-size: 14px;
            font-weight: 600;
            letter-spacing: 2px;
            line-height: 100%;
            text-transform: uppercase;
            vertical-align: middle;
            color: var(--color-gold);
            margin-bottom: 12px;
        }

        .level-card-title {
            font-family: 'Playfair Display', serif;
            font-size: 40px;
            font-weight: 800;
            line-height: 44px;
            letter-spacing: 0px;
            vertical-align: middle;
            color: var(--color-white);
            margin-bottom: 32px;
        }

        .level-card-desc {
            font-family: 'Inter', sans-serif;
            font-size: 18px;
            font-weight: 600;
            line-height: 150%;
            letter-spacing: 0px;
            vertical-align: middle;
            color: var(--color-white);
        }

        .level-premium-badge {
            position: absolute;
            top: 20px;
            right: 20px;
            background-color: var(--color-gold);
            color: var(--color-navy-deepest);
            font-size: 0.65rem;
            font-weight: 800;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            padding: 6px 14px;
            border-radius: 100px;
            box-shadow: 0 4px 12px rgba(212, 168, 79, 0.3);
        }

        /* ==========================================
           5.5. SECTION: OPTIONAL ADD-ON
           ========================================== */
        .section-eyebrow {
            font-family: 'Inter', sans-serif;
            font-size: 16px;
            font-weight: 700;
            line-height: 100%;
            letter-spacing: 4px;
            text-align: center;
            vertical-align: middle;
            text-transform: uppercase;
            color: var(--color-gold);
            margin-bottom: 16px;
            display: inline-block;
        }

        .addon-container {
            background-color: var(--color-navy-deep);
            border-radius: 17.81px;
            border: 0.89px solid rgba(255, 255, 255, 0.05);
            border-top: transparent;
            margin-top: 40px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 100%;
            max-width: 1132.45px;
            margin-left: auto;
            margin-right: auto;
            position: relative;
        }
        
        .addon-container::before {
            content: "";
            position: absolute;
            width: 100%;
            max-width: 100%;
            height: 5px;
            top: -1px;
            left: 50%;
            transform: translateX(-50%);
            background: linear-gradient(90deg, rgba(255, 195, 0, 0.97) 0.63%, rgba(255, 195, 0, 0.7) 30.44%, #FFFFFF 50.32%, rgba(255, 195, 0, 0.7) 70.19%, rgba(255, 195, 0, 0.7) 100.01%);
            z-index: 10;
        }
        
        @media (min-width: 993px) {
            .addon-container {
                height: 456.13px;
            }
        }

        .addon-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
        }

        .addon-col {
            padding: 50px 40px;
            display: flex;
            flex-direction: column;
            position: relative;
            width: 100%;
            max-width: 376.29px;
            height: 454.35px;
            transition: background 0.4s ease;
            cursor: pointer;
        }

        .addon-col:hover {
            background: rgba(255, 255, 255, 0.04);
        }

        .addon-col-middle {
            border-left: 1px solid rgba(255, 255, 255, 0.05);
            border-right: 1px solid rgba(255, 255, 255, 0.05);
        }

        @media (max-width: 992px) {
            .addon-grid {
                grid-template-columns: 1fr;
            }
            .addon-col-middle {
                border-left: none;
                border-right: none;
                border-top: 1px solid rgba(255, 255, 255, 0.05);
                border-bottom: 1px solid rgba(255, 255, 255, 0.05);
            }
        }

        .addon-badge {
            align-self: flex-start;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 90px;
            height: 27px;
            background: #C5A0591A;
            border-radius: 89.03px;
            border: 0.89px solid #FFFFFF4D;
            box-shadow: inset 0px 1.78px 8.9px 0.89px #D4AF370D;
            font-size: 0.65rem;
            font-weight: 800;
            letter-spacing: 0.15em;
            text-transform: uppercase;
            color: var(--color-gold);
            margin-bottom: 35px;
            transition: background 0.4s ease, transform 0.4s ease;
        }

        .addon-col:hover .addon-badge {
            background: rgba(197, 160, 89, 0.35);
            transform: translateY(-2px);
        }

        /* Icon 1: Random Dots */
        @keyframes rand-dot-gold {
            0%, 20% { fill: #5D6D82; filter: none; }
            25%, 35% { fill: #D4A84F; filter: drop-shadow(0px 0px 4px rgba(212,168,79,0.8)); }
            40%, 100% { fill: #5D6D82; filter: none; }
        }
        @keyframes rand-dot-light {
            0%, 60% { fill: #5D6D82; filter: none; }
            65%, 75% { fill: #E8D595; filter: drop-shadow(0px 0px 4px rgba(232,213,149,0.8)); }
            80%, 100% { fill: #5D6D82; filter: none; }
        }
        .dot-1 { animation: rand-dot-gold 3s infinite 0.2s; }
        .dot-2 { animation: rand-dot-light 4s infinite 1.1s; }
        .dot-3 { animation: rand-dot-gold 3.5s infinite 2s; }
        .dot-4 { animation: rand-dot-light 4.5s infinite 0.5s; }
        .dot-5 { animation: rand-dot-gold 5s infinite 1.8s; }
        .dot-6 { fill: #5D6D82; }

        /* Icon 2: Network Bars Sequence */
        @keyframes bar-seq {
            0%, 10% { fill: #5D6D82; filter: none; }
            20%, 30% { fill: #D4A84F; filter: drop-shadow(0px 0px 6px rgba(212,168,79,0.9)); }
            40%, 100% { fill: #5D6D82; filter: none; }
        }
        .bar-1 { animation: bar-seq 2.5s infinite 0s; fill: #5D6D82; }
        .bar-2 { animation: bar-seq 2.5s infinite 0.3s; fill: #5D6D82; }
        .bar-3 { animation: bar-seq 2.5s infinite 0.6s; fill: #5D6D82; }

        /* Icon 3: Strategic Rings */
        @keyframes ring-spin {
            0% { stroke-dasharray: 63; stroke-dashoffset: 63; filter: drop-shadow(0px 0px 6px rgba(212,168,79,0)); stroke: #E8D595; }
            50% { stroke-dashoffset: 0; filter: drop-shadow(0px 0px 6px rgba(212,168,79,0.8)); stroke: #D4A84F; }
            100% { stroke-dashoffset: -63; filter: drop-shadow(0px 0px 6px rgba(212,168,79,0)); stroke: #E8D595; }
        }
        .ring-1 { animation: ring-spin 3s ease-in-out infinite 0s; }
        .ring-2 { animation: ring-spin 3s ease-in-out infinite 1.5s; }

        .addon-icon {
            margin-bottom: 24px;
            height: 32px;
            display: flex;
            align-items: center;
        }

        .addon-title {
            font-family: 'Playfair Display', serif;
            font-size: 30px;
            font-weight: 700;
            line-height: 31.34px;
            letter-spacing: 0px;
            color: var(--color-white);
            margin-bottom: 20px;
        }

        .addon-desc {
            font-family: 'Inter', sans-serif;
            font-size: 17px;
            font-weight: 600;
            line-height: 150%;
            letter-spacing: 0px;
            vertical-align: middle;
            color: var(--color-white);
        }

        /* ==========================================
           5.7. SECTION: RECEPTION BANNER
           ========================================== */
        .reception-banner-wrapper {
            position: relative;
            width: 100%;
            max-width: 1132px;
            height: 623px;
            margin: 0 auto;
            border-radius: 16px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            overflow: hidden;
            box-shadow: 0 20px 50px rgba(0,0,0,0.1);
        }

        .reception-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .reception-overlay {
            position: absolute;
            bottom: 40px;
            left: 40px;
            background-color: #1A1E26B2;
            padding: 24px 32px;
            display: flex;
            align-items: flex-start;
            gap: 20px;
            border-style: solid;
            border-width: 0 0 0 4px;
            border-image-source: radial-gradient(47.37% 50% at 0% 50%, #E2BE4A 100%, rgba(255, 255, 255, 0.1) 100%);
            border-image-slice: 1;
            box-shadow: 0 15px 35px rgba(0,0,0,0.4);
            z-index: 2;
        }

        .reception-dot {
            width: 11px;
            height: 11px;
            background-color: #E2BE4A;
            border-radius: 50%;
            box-shadow: 0 0 10px 3px rgba(226, 190, 74, 0.4);
            flex-shrink: 0;
            margin-top: 6px; /* Optical alignment with text cap-height */
        }

        .reception-text {
            font-family: 'Inter', sans-serif;
            font-size: 14px;
            font-weight: 600;
            line-height: 1.8;
            letter-spacing: 3px;
            vertical-align: middle;
            text-transform: uppercase;
            color: #E2BE4A;
            margin: 0;
        }
        
        @media (max-width: 768px) {
            .reception-banner-wrapper {
                height: 400px;
            }
            .reception-overlay {
                left: 20px;
                right: 20px;
                bottom: 20px;
                padding: 20px;
            }
            .reception-text {
                font-size: 0.8rem;
            }
        }

        /* ==========================================
           5.8. SECTION: DEEP TAX EXPERTISE
           ========================================== */
        .tax-expertise-section {
            padding: 100px 0;
            background:  linear-gradient(123.51deg, rgb(0, 17, 33) -5.87%, rgb(0, 27, 40) 94.63%);
            position: relative;
        }

        .tax-expertise-bg {
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            background-image: url('https://images.unsplash.com/photo-1554224155-6726b3ff858f?auto=format&fit=crop&w=1200&q=80');
            background-size: cover;
            background-position: center;
            opacity: 0.03;
            pointer-events: none;
        }

        .tax-timeline-layout {
            position: relative;
            max-width: 1078px;
            margin: 0 auto;
            padding-left: 20px;
        }

        @keyframes line-glow {
            0%, 100% { opacity: 0.4; box-shadow: 0 0 0px transparent; }
            50% { opacity: 0.9; box-shadow: 0 0 8px var(--color-gold); }
        }

        .tax-timeline-line {
            position: absolute;
            top: 12px; 
            bottom: 100px; 
            left: 26.5px;
            width: 1.5px;
            background-color: var(--color-gold);
            opacity: 0.6;
            z-index: 1;
            animation: line-glow 3s ease-in-out infinite;
        }

        .tax-timeline-row {
            display: flex;
            gap: 40px;
            margin-bottom: 40px;
            position: relative;
            z-index: 2;
        }
        .tax-timeline-row:last-child { margin-bottom: 0; }

        .tax-row-header { align-items: stretch; }
        .tax-row-card { align-items: stretch; }

        .tax-timeline-marker {
            width: 14px;
            display: flex;
            justify-content: center;
            flex-shrink: 0;
            position: relative;
            z-index: 3;
        }
        .tax-row-header .tax-timeline-marker {
            align-items: flex-start;
            padding-top: 5px; 
        }
        .tax-row-card .tax-timeline-marker {
            align-items: center; 
        }

        @keyframes pulse-dot {
            0% { box-shadow: 0 0 0 0 rgba(212, 168, 79, 0.6); }
            70% { box-shadow: 0 0 0 10px rgba(212, 168, 79, 0); }
            100% { box-shadow: 0 0 0 0 rgba(212, 168, 79, 0); }
        }

        .tax-dot-target, .tax-dot-hollow {
            width: 14px;
            height: 14px;
            border: 4.5px solid var(--color-gold);
            border-radius: 50%;
            background-color: var(--color-navy-deepest);
            position: relative;
            animation: pulse-dot 2.5s infinite;
        }

        .tax-content { flex-grow: 1; }

        .tax-eyebrow {
            display: inline-block;
            border: 1px solid rgba(226, 190, 74, 0.4);
            border-radius: 4px;
            padding: 6px 14px;
            background-color: rgba(3, 8, 15, 0.8);
            margin-bottom: 24px;
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 17.82px;
            font-weight: 600;
            line-height: 21.38px;
            letter-spacing: 1.78px;
            text-transform: uppercase;
            vertical-align: middle;
            color: var(--color-gold);
        }

        .tax-title {
            font-family: 'Libre Caslon Text', serif;
            font-weight: 500;
            font-style: normal;
            font-size: 42.6px;
            color: var(--color-white);
            margin-bottom: 16px;
            line-height: 48.69px;
            letter-spacing: 0px;
            vertical-align: middle;
        }

        .tax-desc {
            font-family: 'Inter', sans-serif;
            font-weight: 500;
            font-style: normal;
            font-size: 23.19px;
            color: var(--color-slate-300);
            max-width: 750px;
            line-height: 34.78px;
            letter-spacing: 0px;
            vertical-align: middle;
            margin: 0;
            margin-bottom: 20px;
        }

        .tax-card {
            background: #132C4596;
            border: 1.23px solid #FFFFFF0D;
            border-radius: 9.82px;
            padding: 40px 50px;
            position: relative;
            width: 100%;
            max-width: 957.07px;
            min-height: 200.95px;
            overflow: hidden;
            box-shadow: inset 0px 1.23px 0px 1.23px #FFFFFF26;
            backdrop-filter: blur(4.91px);
            -webkit-backdrop-filter: blur(4.91px);
            transition: transform 0.4s ease, background 0.4s ease, box-shadow 0.4s ease;
        }

        .tax-card:hover {
            transform: translateY(-8px);
            background: rgba(19, 44, 69, 0.85);
            box-shadow: inset 0px 1.23px 0px 1.23px rgba(255, 255, 255, 0.3), 0 15px 30px rgba(0, 0, 0, 0.25);
        }
        .tax-card::before {
            content: "";
            position: absolute;
            top: 0; left: 0; bottom: 0;
            width: 80px;
            background: linear-gradient(90deg, rgba(255, 255, 255, 0.04) 0%, transparent 100%);
            pointer-events: none;
        }

        .tax-card-badge {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            height: 27.27px;
            background: #C5A059;
            border-radius: 4.91px;
            border: 1.23px solid #FFFFFF1A;
            padding: 4.91px 9.82px;
            margin-bottom: 20px;
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 12.27px;
            font-weight: 600;
            line-height: 14.72px;
            letter-spacing: 1.23px;
            text-transform: uppercase;
            color: #ffffff;
        }

        .tax-card-title {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 22.08px;
            font-weight: 600;
            line-height: 35.34px;
            letter-spacing: 0px;
            vertical-align: middle;
            color: var(--color-white);
            margin-bottom: 12px;
        }

        .tax-card-desc {
            font-family: 'Inter', sans-serif;
            font-size: 17.18px;
            font-weight: 500;
            line-height: 24.54px;
            letter-spacing: 0px;
            vertical-align: middle;
            color: var(--color-slate-300);
            margin: 0;
            max-width: 500px;
        }

        .tax-card-icon {
            position: absolute;
            top: 1.23px;
            right: 0px;
            width: 104.7px;
            height: 112.06px;
            padding: 19.63px 19.63px 26.99px 19.63px;
            opacity: 0.1;
            transition: transform 0.5s cubic-bezier(0.34, 1.56, 0.64, 1), opacity 0.4s ease;
        }

        .tax-card:hover .tax-card-icon {
            opacity: 0.2;
            transform: scale(1.15) rotate(-5deg);
        }
        .tax-card-icon img {
            width: 100%;
            height: 100%;
            filter: invert(1);
        }
        
        @media (max-width: 768px) {
            .tax-timeline-layout { padding-left: 0; }
            .tax-timeline-line, .tax-timeline-marker { display: none; }
            .tax-card { padding: 30px 20px; }
            .tax-card-icon { top: 20px; right: 20px; transform: scale(0.7); }
        }

        /* ==========================================
           6. SECTION 4: REVIEWS STATS
           ========================================== */
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 40px;
            margin-top: 40px;
        }

        .stat-item {
            text-align: center;
            padding: 10px 20px;
        }

        .stat-number {
            font-family: var(--font-serif);
            font-size: clamp(3.5rem, 6vw, 4.8rem);
            font-weight: 700;
            color: var(--color-gold);
            line-height: 1.1;
            margin-bottom: 8px;
        }

        .stat-subtitle {
            font-size: 1.15rem;
            font-weight: 700;
            color: var(--color-navy-deep);
            margin-bottom: 12px;
        }

        .stat-desc {
            font-size: 0.95rem;
            color: var(--color-slate-600);
            max-width: 280px;
            margin: 0 auto;
        }

        /* ==========================================
           7. SECTION 5: OFFICE RECEPTION BANNER
           ========================================== */
        .reception-banner {
            height: 520px;
            background: linear-gradient(rgba(7, 21, 36, 0.35), rgba(7, 21, 36, 0.35)), url('https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&w=1200&q=80');
            background-size: cover;
            background-position: center;
            position: relative;
            display: flex;
            align-items: flex-end;
            padding-bottom: 60px;
        }

        .reception-card {
            background: rgba(7, 21, 36, 0.85);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 12px;
            padding: 32px;
            max-width: 500px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.3);
        }

        .reception-card-text {
            color: var(--color-white);
            font-size: 1.1rem;
            font-weight: 500;
            line-height: 1.5;
        }

        .reception-card-text span {
            color: var(--color-gold);
        }

        /* ==========================================
           8. SECTION 6: HOW WE SERVE YOU (ACCORDION)
           ========================================== */
        .process-split {
            display: grid;
            grid-template-columns: 4fr 5fr;
            gap: 60px;
            align-items: center;
        }

        .process-info {
            padding-right: 20px;
        }

        .process-desc {
            font-size: 1.05rem;
            color: var(--color-slate-300);
            line-height: 1.7;
            margin-top: 15px;
        }

        .accordion-wrapper {
            display: flex;
            flex-direction: column;
            gap: 16px;
        }

        .accordion-item {
            background-color: var(--color-navy-light);
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-radius: 10px;
            overflow: hidden;
            transition: var(--transition-smooth);
        }

        .accordion-item.active {
            border-color: rgba(212, 168, 79, 0.3);
            box-shadow: 0 8px 24px rgba(0,0,0,0.15);
        }

        .accordion-header {
            padding: 24px 28px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            cursor: pointer;
            width: 100%;
            text-align: left;
        }

        .accordion-header-text {
            font-size: 0.9rem;
            font-weight: 700;
            letter-spacing: 0.1em;
            color: var(--color-slate-300);
            text-transform: uppercase;
        }

        .accordion-item.active .accordion-header-text {
            color: var(--color-gold);
        }

        .accordion-icon {
            width: 24px;
            height: 24px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--color-gold);
            transition: var(--transition-smooth);
        }

        .accordion-body {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease-out;
            padding: 0 28px;
        }

        .accordion-item.active .accordion-body {
            max-height: 200px;
            padding-bottom: 28px;
        }

        .accordion-body-title {
            font-size: 1.15rem;
            font-weight: 700;
            color: var(--color-white);
            margin-bottom: 8px;
        }

        .accordion-body-desc {
            font-size: 0.95rem;
            color: var(--color-slate-300);
            line-height: 1.6;
        }

        /* ==========================================
           9. SECTION 7: DEEP SECTOR EXPERTISE
           ========================================== */
        .sectors-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px;
            margin-top: 50px;
            max-width: 1216px;
            margin-left: auto;
            margin-right: auto;
        }

        .sector-card {
            height: 350px;
            border-radius: 16px;
            border: 1px solid #D0C5AF;
            overflow: hidden;
            position: relative;
            display: flex;
            align-items: flex-end;
            padding: 30px;
            transition: var(--transition-smooth);
        }

        .sector-card::before {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(to top, rgba(7, 21, 36, 0.9) 0%, rgba(7, 21, 36, 0.2) 100%);
            z-index: 2;
            transition: var(--transition-smooth);
        }

        .sector-img {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s ease;
            z-index: 1;
        }

        .sector-content {
            position: relative;
            z-index: 3;
            width: 100%;
        }

        .sector-title {
            font-family: 'Libre Caslon Text', serif;
            font-size: 1.6rem;
            font-weight: 600;
            color: var(--color-white);
            margin-bottom: 8px;
            transition: var(--transition-smooth);
        }

        .sector-link {
            font-family: var(--font-sans);
            font-size: 0.75rem;
            font-weight: 700;
            letter-spacing: 0.1em;
            color: var(--color-white);
            text-decoration: none;
            text-transform: uppercase;
            display: inline-flex;
            align-items: center;
            opacity: 0.9;
        }
        .sector-link:hover {
            color: var(--color-gold);
        }

        .sector-card:hover::before {
            background: linear-gradient(to top, rgba(7, 21, 36, 0.95) 0%, rgba(7, 21, 36, 0.5) 100%);
        }

        .sector-card:hover .sector-img {
            transform: scale(1.08);
        }

        .sector-card:hover .sector-title {
            color: var(--color-gold);
        }

        /* ==========================================
           10. SECTION 8: PRICE GUARANTEE
           ========================================== */
        .price-guarantee-section {
            padding: 35px 0 49px 0;
            background: linear-gradient(rgba(14, 28, 44, 0.95), rgba(14, 28, 44, 0.95)), url('https://images.unsplash.com/photo-1554224155-6726b3ff858f?auto=format&fit=crop&w=1200&q=80');
            background-size: cover;
            background-position: center;
            text-align: center;
        }

        .pg-eyebrow {
            font-family: 'Hanken Grotesk', sans-serif;
            font-size: 16px;
            font-weight: 700;
            line-height: 24px;
            letter-spacing: 3.2px;
            text-align: center;
            vertical-align: middle;
            text-transform: uppercase;
            color: var(--color-gold);
            margin-bottom: 20px;
        }

        .pg-title {
            font-family: 'Playfair Display', serif;
            font-size: 40px;
            font-weight: 700;
            line-height: 40.4px;
            letter-spacing: -1.68px;
            text-align: center;
            vertical-align: middle;
            color: var(--color-white);
            margin-bottom: 8px;
        }

        .pg-subtitle {
            font-family: 'Playfair Display', serif;
            font-size: 36px;
            font-weight: 600;
            line-height: 40px;
            letter-spacing: 0px;
            text-align: center;
            vertical-align: middle;
            color: #F2CA50;
            margin-bottom: 60px;
        }

        .pg-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 40px;
            max-width: 1000px;
            margin: 0 auto 60px;
        }

        @keyframes pg-icon-draw {
            0% { stroke-dasharray: 40; stroke-dashoffset: 40; }
            30%, 70% { stroke-dasharray: 40; stroke-dashoffset: 0; }
            100% { stroke-dasharray: 40; stroke-dashoffset: -40; }
        }

        .pg-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            width: 100%;
            min-height: 88px;
            margin: 0 auto;
        }

        .pg-icon {
            color: var(--color-gold);
            margin-bottom: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .pg-icon svg path {
            animation: pg-icon-draw 4s ease-in-out infinite;
        }
        
        .pg-item:nth-child(1) .pg-icon svg path { animation-delay: 0s; }
        .pg-item:nth-child(2) .pg-icon svg path { animation-delay: 1.3s; }
        .pg-item:nth-child(3) .pg-icon svg path { animation-delay: 2.6s; }

        .pg-item-title {
            font-family: 'Playfair Display', serif;
            font-size: 24px;
            font-weight: 800;
            line-height: 28px;
            letter-spacing: 0px;
            text-align: center;
            vertical-align: middle;
            color: var(--color-white);
            margin-bottom: 8px;
        }

        .pg-item-desc {
            font-family: 'Manrope', sans-serif;
            font-size: 17px;
            font-weight: 600;
            line-height: 24px;
            letter-spacing: 0px;
            text-align: center;
            vertical-align: middle;
            color: var(--color-white);
            opacity: 0.9;
            margin: 0;
        }

        .pg-btn {
            font-family: var(--font-sans);
            font-size: 0.85rem;
            font-weight: 700;
            letter-spacing: 0.1em;
            color: var(--color-gold);
            border: 1px solid var(--color-gold);
            background: transparent;
            padding: 16px 32px;
            border-radius: 4px;
            text-transform: uppercase;
            text-decoration: none;
            display: inline-block;
            transition: var(--transition-smooth);
        }

        .pg-btn:hover {
            background: var(--color-gold);
            color: var(--color-navy-deepest);
        }



        /* ==========================================
           10.5. SECTION: SECTOR EXPERTISE
           ========================================== */
        .sector-content .sector-title {
            font-family: 'Libre Caslon Text', serif;
            font-size: 24px;
            font-weight: 700;
            line-height: 30px;
            letter-spacing: 0px;
            vertical-align: middle;
            margin-bottom: 10px;
        }

        .sector-desc {
            font-family: 'Inter', sans-serif;
            font-size: 14px;
            color: rgba(255, 255, 255, 0.85);
            line-height: 1.5;
            opacity: 0;
            max-height: 0;
            overflow: hidden;
            transition: opacity 0.4s ease, max-height 0.4s ease, margin 0.4s ease;
            margin-bottom: 0;
        }

        .sector-card:hover .sector-desc {
            opacity: 1;
            max-height: 100px;
            margin-bottom: 15px;
        }

        .sector-link {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            font-family: 'Inter', sans-serif;
            font-size: 12px;
            font-weight: 600;
            line-height: 14.4px;
            letter-spacing: 1.2px;
            vertical-align: middle;
            text-transform: uppercase;
            text-decoration: none;
            color: var(--color-gold);
            opacity: 0;
            transform: translateY(15px);
            transition: opacity 0.4s ease, transform 0.4s ease;
        }

        .sector-card:hover .sector-link {
            opacity: 1;
            transform: translateY(0);
        }

        .sector-link svg {
            width: 10.67px;
            height: 10.67px;
        }

        .sector-card {
            width: 100%;
            max-width: 389.33px;
            height: 350px;
            border-radius: 16px;
            border: 1px solid rgba(0, 0, 0, 0.1);
            overflow: hidden;
            position: relative;
        }
        /* ==========================================
           11. SECTION 9: SWITCHING STEP
           ========================================== */
        .switching-section {
            background-color: #112B45;
            padding: 100px 0;
            position: relative;
            z-index: 1;
            overflow: hidden;
            margin-top: 100px;
        }

        .switching-section::before {
            content: "";
            position: absolute;
            top: -1px;
            left: 50%;
            transform: translateX(-50%);
            width: 1558px;
            height: 114px;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1558 114' preserveAspectRatio='none'%3E%3Cpath d='M0,0 Q779,60 1558,0 Z' fill='%23ffffff'/%3E%3C/svg%3E");
            background-size: 100% 100%;
            background-repeat: no-repeat;
            z-index: 0;
        }

        .switching-section > .container {
            position: relative;
            z-index: 2;
        }

        .switching-title {
            font-family: Playfair Display;
            font-style: SemiBold;
            leading-trim: NONE;
        
            text-align: center;
            font-family: 'Playfair Display', serif;
            font-size: 56px;
            font-weight: 600;
            line-height: 100%;
            letter-spacing: 0px;
            vertical-align: middle;
            color: var(--color-white);
            margin-bottom: 70px;
        }

        .switching-title span {
            color: #E2AD3D;
        }

        .switching-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .switching-card {
            background-color: var(--color-white);
            border-radius: 8px;
            height: 526px;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            box-shadow: 0 10px 30px rgba(0,0,0,0.15);
            transition: transform 0.4s ease, box-shadow 0.4s ease;
            cursor: pointer;
        }

        .switching-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.25);
        }

        .switching-card:nth-child(2) {
            transform: translateY(44px);
        }

        .switching-card:nth-child(2):hover {
            transform: translateY(36px);
        }

        .sc-img-box {
            border-top: 6px solid #E2AD3D;
            overflow: hidden;
        }

        .sc-img-box img {
            width: 373.3299865722656px;
            angle: 0 deg;
            opacity: 1;
        
            width: 373.33px;
            height: 256px;
            object-fit: cover;
            transition: transform 0.6s ease;
        }

        .switching-card:hover .sc-img-box img {
            transform: scale(1.08);
        }

        .sc-body {
            padding: 30px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .sc-header-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 24px;
        }

        .sc-icon-box {
            width: 40px;
            height: 40px;
            background-color: #E2AD3D;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--color-white);
            transition: transform 0.5s cubic-bezier(0.34, 1.56, 0.64, 1);
        }

        .switching-card:hover .sc-icon-box {
            transform: scale(1.15);
        }

        .sc-badge {
            font-family: Manrope;
            font-style: ExtraBold;
            leading-trim: NONE;
        
            background-color: #112B45;
            color: var(--color-white);
            font-family: 'Manrope', sans-serif;
            font-size: 16px;
            font-weight: 800;
            line-height: 11.69px;
            letter-spacing: 0.49px;
            vertical-align: middle;
            text-transform: uppercase;
            padding: 10px 14px;
            border-radius: 6px;
        }

        .sc-title {
            font-family: Playfair Display;
            font-style: ExtraBold;
            leading-trim: NONE;
        
            font-family: 'Playfair Display', serif;
            font-size: 28px;
            font-weight: 800;
            line-height: 33.6px;
            letter-spacing: 0px;
            vertical-align: middle;
            color: #000000;
            margin-bottom: 12px;
        }

        .sc-desc {
            font-family: Manrope;
            font-style: SemiBold;
            leading-trim: NONE;
        
            font-family: 'Manrope', sans-serif;
            font-size: 17px;
            font-weight: 600;
            line-height: 150%;
            letter-spacing: 0px;
            vertical-align: middle;
            color: #111111;
            margin: 0;
        }

        .switching-footer-btn {
            text-align: center;
            margin-top: 90px;
        }

        .btn-switching {
            font-family: Manrope;
            font-style: ExtraBold;
            leading-trim: NONE;
            text-align: center;
            vertical-align: middle;
            padding-top: 16px;
            padding-right: 40px;
            padding-bottom: 16px;
            padding-left: 40px;
            background: #D4A84F;
        
            display: inline-flex;
            align-items: center;
            justify-content: center;
            height: 50px;
            background-color: #D4A84F;
            color: var(--color-white);
            font-family: 'Manrope', sans-serif;
            font-size: 16px;
            font-weight: 800;
            line-height: 14px;
            letter-spacing: 0.7px;
            text-transform: uppercase;
            padding: 16px 40px;
            border-radius: 4px;
            border: none;
            cursor: pointer;
            text-decoration: none;
            transition: var(--transition-smooth);
        }

        .btn-switching:hover {
            background-color: #b8862f;
			color: #fff;
        }



        /* ==========================================
           12. SECTION 10: FROM OUR RESOURCE CENTER
           ========================================== */
        .blogs-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
            margin-top: 50px;
        }

        .blog-card {
            background-color: var(--color-white);
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
            display: flex;
            flex-direction: column;
            transition: var(--transition-smooth);
            border: 1px solid #ebebeb;
        }

        .blog-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.12);
        }

        .blog-img-box {
            height: 220px;
            position: relative;
            overflow: hidden;
        }

        .blog-img-box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .blog-card:hover .blog-img-box img {
            transform: scale(1.05);
        }

        .blog-badge {
            position: absolute;
            top: 16px;
            left: 16px;
            background-color: #D4A84F;
            color: var(--color-white);
            font-family: var(--font-sans);
            font-size: 0.75rem;
            font-weight: 700;
            padding: 6px 12px;
            border-radius: 4px;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            z-index: 2;
        }

        .blog-body {
            padding: 30px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .blog-meta {
            margin-bottom: 12px;
        }

        .blog-date {
            color: #D4A84F;
            font-family: var(--font-sans);
            font-size: 0.75rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }

        .blog-card-title {
            text-decoration: none;
        }
        
        .blog-card-title h3 {
            font-family: 'Libre Caslon Text', serif;
            font-size: 1.4rem;
            font-weight: 600;
            color: #000;
            margin: 0;
            line-height: 1.4;
            transition: var(--transition-smooth);
        }

        .blog-card-title:hover h3 {
            color: var(--color-gold);
        }

        .blogs-footer-btn {
            text-align: center;
            margin-top: 50px;
        }

        .btn-blog {
            background-color: #D4A84F;
            color: #111111;
            font-family: var(--font-sans);
            font-size: 0.9rem;
            font-weight: 700;
            padding: 16px 32px;
            border-radius: 4px;
            border: none;
            cursor: pointer;
            text-transform: uppercase;
            text-decoration: none;
            transition: var(--transition-smooth);
            display: inline-block;
        }

        .btn-blog:hover {
            background-color: #b8862f;
            color: var(--color-white);
        }

        /* ==========================================
           13. SECTION 11: TRUSTED BY (REVIEWS)
           ========================================== */
        .google-reviews-badge {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
            margin-top: 40px;

            padding-top: clamp(12px, 3vw, 16px);
            border-top: 1px solid #ababab54;
        }

        .google-reviews-badge img {
            width: 24px;
            height: 24px;
            opacity: 0.5;
        }

        .google-reviews-badge span {
            color: #b0b0b0;
            font-family: 'Libre Caslon Text', serif;
            font-size: 1.1rem;
            font-weight: 500;
            letter-spacing: 0.15em;
            text-transform: uppercase;
        }

        .trustindex-placeholder {
            width: 100%;
        }

    
        /* ==========================================
           15. RESPONSIVE BREAKPOINTS
           ========================================== */
        @media (max-width: 1024px) {
            .reviews-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 900px) {
            .features-grid {
                grid-template-columns: 1fr;
                gap: 20px;
            }
            .levels-grid {
                grid-template-columns: 1fr;
                gap: 24px;
            }
            .stats-grid {
                grid-template-columns: 1fr;
                gap: 30px;
            }
            .process-split {
                grid-template-columns: 1fr;
                gap: 40px;
            }
            .process-info {
                padding-right: 0;
                text-align: center;
            }
            .sectors-grid {
                grid-template-columns: repeat(2, 1fr);
            }
            .steps-grid {
                grid-template-columns: 1fr;
                gap: 30px;
            }
            .blogs-grid {
                grid-template-columns: 1fr;
                gap: 30px;
            }
            .cta-bar-wrap {
                justify-content: center;
                text-align: center;
            }
            .cta-bar-checklist {
                justify-content: center;
            }
            .cta-bar-actions {
                justify-content: center;
            }
        }

        @media (max-width: 768px) {
            section {
                padding: 60px 0;
            }

            .header-top {
                display: none;
            }

            .nav-menu {
                display: none;
                position: absolute;
                top: 85px;
                left: 0;
                width: 100%;
                background-color: var(--color-white);
                flex-direction: column;
                padding: 24px;
                gap: 16px;
                border-bottom: 2px solid var(--color-gold);
                box-shadow: 0 10px 15px rgba(0,0,0,0.05);
            }

            .nav-menu.mobile-open {
                display: flex;
            }

            .menu-toggle {
                display: flex;
            }

            .nav-btn {
                margin-left: 0;
                width: 100%;
            }

            .hero-card {
                grid-template-columns: 1fr;
            }

            .hero-card-info {
                padding: 24px;
            }

            .hero-card-video {
                height: 160px;
            }

            .hero-checklist {
                flex-direction: column;
                align-items: center;
                gap: 12px;
            }

            .reception-banner {
                height: 400px;
            }

            .reception-card {
                margin: 0 15px;
                padding: 20px;
            }
        }

        @media (max-width: 580px) {
            .sectors-grid {
                grid-template-columns: 1fr;
            }
            .reviews-grid {
                grid-template-columns: 1fr;
            }
        }
    
</style>

<div class="a2z-new-home-wrapper">
<!-- ==========================================
       HERO SECTION
       ========================================== -->
    <section class="hero">
        <div class="container hero-content">
            <h1 class="hero-title">
                Your business has grown.
                <span>Is your accounting keeping up?</span>
            </h1>
            
            <div class="hero-actions">
                <a href="javascript:void(0)" class="btn btn-solid" data-bs-toggle="modal" data-bs-target="#enquireModal" data-source="Start Your Enquiry">Start Your Enquiry</a>
                <button class="btn btn-outline" onclick="alert('Playing success stories...')">Watch Success Stories</button>
            </div>

            <!-- Credential Pill Badge -->
            <div class="hero-badge-pill">
                <svg class="hero-badge-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M3.85 8.62a4 4 0 0 1 4.78-4.77 4 4 0 0 1 6.74 0 4 4 0 0 1 4.78 4.78 4 4 0 0 1 0 6.74 4 4 0 0 1-4.77 4.78 4 4 0 0 1-6.75 0 4 4 0 0 1-4.78-4.77 4 4 0 0 1 0-6.76Z"/>
                    <path d="m9 12 2 2 4-4"/>
                </svg>
                Chartered Certified Accountants for growing UK businesses
            </div>
            
            <!-- Circled Checklist -->
            <div class="hero-checklist">
                <div class="hero-checklist-item">
                    <div class="checklist-icon-circle">
                        <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="4" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="20 6 9 17 4 12"></polyline>
                        </svg>
                    </div>
                    Fixed Monthly Fees
                </div>
                <div class="hero-checklist-item">
                    <div class="checklist-icon-circle">
                        <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="4" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="20 6 9 17 4 12"></polyline>
                        </svg>
                    </div>
                    Quick Support
                </div>
                <div class="hero-checklist-item">
                    <div class="checklist-icon-circle">
                        <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="4" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="20 6 9 17 4 12"></polyline>
                        </svg>
                    </div>
                    Tax Planning
                </div>
                <div class="hero-checklist-item">
                    <div class="checklist-icon-circle">
                        <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="4" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="20 6 9 17 4 12"></polyline>
                        </svg>
                    </div>
                    Dedicated Accountant
                </div>
            </div>
            
            <!-- Success Story Testimonial Card Overlay -->
            <div class="hero-card-container">
                <div class="hero-card-offset-border"></div>
                <div class="hero-card" id="heroTestimonialCard">
                    <!-- Left Video Panel -->
                    <div class="hero-card-video">
                        <img id="heroVideoThumb" src="https://a2zaccounting.co.uk/wp-content/uploads/2025/06/15.png" alt="Testimonial speaking in video">
                        <div class="hero-card-play" onclick="playLoomVideo()" style="width: 60px; height: 42px; border-radius: 8px;">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="var(--color-navy-deepest)">
                                <path d="M8 5v14l11-7z"/>
                            </svg>
                        </div>
                    </div>
                    
                    <!-- Right Testimonial Panel -->
                    <div class="hero-card-info">
                        <div>
                            <div class="hero-card-header-row">
                                <span class="hero-card-eyebrow">PROACTIVE SUCCESS STORY</span>
                                <div class="hero-card-stars">
                                    <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                                    <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                                    <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                                    <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                                    <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                                </div>
                            </div>
                            <p class="hero-card-quote" id="heroQuote">"An absolute pleasure to work with! They transformed our tax strategy and became a true partner in our growth. "</p>
                        </div>
                        
                        <div class="hero-card-footer">
                            <div class="hero-card-profile">
                                <div class="hero-card-avatar">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg>
                                </div>
                                <div class="hero-card-meta">
                                    <div class="hero-card-author-name" id="heroAuthorName">Mrs. Rona Tonge</div>
                                    <div class="hero-card-author-role" id="heroAuthorRole">Managing Director, Golf View Hotel</div>
                                </div>
                            </div>
                            <div class="hero-card-nav">
                                <button class="hero-card-nav-btn" onclick="prevHeroTestimonial()" aria-label="Previous testimonial">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="15 18 9 12 15 6"></polyline>
                                    </svg>
                                </button>
                                <button class="hero-card-nav-btn" onclick="nextHeroTestimonial()" aria-label="Next testimonial">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="9 6 15 12 9 18"></polyline>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==========================================
       SECTION 2: THREE THINGS
       ========================================== -->
    <section class="section-white" id="services">
        <div class="container">
            <div class="text-center">
                <h2 style="font-family: 'Playfair Display', serif; font-weight: 700; font-size: 56px; line-height: 61.6px; letter-spacing: -1px; text-align: center; vertical-align: middle; color: #000; margin-bottom: 50px;">
                    Three Things That Change<br>When You <span class="text-gold" style="font-style: italic;">Work With A2Z.</span>
                </h2>
            </div>
            
            <div class="features-grid">
                <!-- Feature 1 -->
                <div class="feature-card">
                    <div class="feature-icon-wrapper">
                        <!-- Icon: Pie Chart -->
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path>
                            <path d="M22 12A10 10 0 0 0 12 2v10z"></path>
                        </svg>
                    </div>
                    <h3 class="feature-card-title">Structured Tax<br>Planning</h3>
                    <p class="feature-card-desc">We plan your tax months ahead, not in a year-end rush. You keep more, with no surprises.</p>
                </div>
                
                <!-- Feature 2 -->
                <div class="feature-card">
                    <div class="feature-icon-wrapper">
                        <!-- Icon: Lightning -->
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
                        </svg>
                    </div>
                    <h3 class="feature-card-title">Immediate, Reliable<br>Support</h3>
                    <p class="feature-card-desc">Ask before midday and get an answer the same day, guaranteed in writing. Your business never waits.</p>
                </div>
                
                <!-- Feature 3 -->
                <div class="feature-card">
                    <div class="feature-icon-wrapper">
                        <!-- Icon: Shield-Check -->
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                            <polyline points="9 12 11 14 15 10"></polyline>
                        </svg>
                    </div>
                    <h3 class="feature-card-title">Complete Financial<br>Confidence</h3>
                    <p class="feature-card-desc">Zero missed deadlines and zero HMRC penalties since we started. Every figure is checked before it reaches you.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ==========================================
       SECTION 3: THREE LEVELS
       ========================================== -->
    <section class="section-white" id="levels">
        <div class="container">
            <div class="text-center">
                <h2 style="font-family: 'Playfair Display', serif; font-weight: 600; font-size: 62px; line-height: 115.2px; letter-spacing: -2px; text-align: center; vertical-align: middle; color: #000; margin-bottom: 50px;">
                    Three Levels. <span class="text-gold" style="font-style: italic;">One Standard.</span>
                </h2>
            </div>
            
            <div class="levels-grid">
                <!-- Foundational -->
                <div class="level-card">
                    <div class="level-eyebrow">SMALL, STEADY COMPANIES</div>
                    <h3 class="level-card-title">Foundational</h3>
                    <p class="level-card-desc">Everything you must get right: year end accounts, corporation tax, confirmation statement and HMRC deadlines, all done flawlessly and on time.</p>
                </div>
                
                <!-- Structured -->
                <div class="level-card highlighted">
                    <div class="level-eyebrow">GROWING, VAT-REGISTERED</div>
                    <h3 class="level-card-title">Structured</h3>
                    <p class="level-card-desc">Everything in Foundational, plus quarterly bookkeeping and VAT, cloud software included, tax estimates and planning, and same day support.</p>
                </div>
                
                <!-- Strategic -->
                <div class="level-card">
                    <div class="level-premium-badge">PREMIUM</div>
                    <div class="level-eyebrow">ESTABLISHED &amp; COMPLEX</div>
                    <h3 class="level-card-title">Strategic</h3>
                    <p class="level-card-desc">A full finance function: quarterly management accounts, proactive monthly tax planning, cash flow forecasting, advisory and a dedicated manager.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ==========================================
       SECTION 3.5: QUARTERLY MANAGEMENT ACCOUNTS
       ========================================== -->
    <section class="section-white" style="padding-top: 20px; padding-bottom: 80px;" id="optional-addon">
        <div class="container">
            <div class="text-center">
                <div class="section-eyebrow">OPTIONAL ADD-ON</div>
                <h2 class="section-title">Quarterly Management Accounts</h2>
            </div>
            
            <div class="addon-container">
                <div class="addon-grid">
                    <!-- Column 1: Basic -->
                    <div class="addon-col">
                        <div class="addon-badge">BASIC</div>
                        <div class="addon-icon">
                            <!-- Custom SVG for Health Check -->
                            <svg width="40" height="28" viewBox="-3 -3 40 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect class="dot-1" x="0" y="0" width="10" height="10" rx="3" fill="#D4A84F" style="filter: drop-shadow(0px 0px 6px rgba(212,168,79,1));"/>
                                <rect class="dot-2" x="12" y="0" width="10" height="10" rx="3" fill="#5D6D82"/>
                                <rect class="dot-3" x="24" y="0" width="10" height="10" rx="3" fill="#5D6D82"/>
                                <rect class="dot-4" x="0" y="12" width="10" height="10" rx="3" fill="#5D6D82"/>
                                <rect class="dot-5" x="12" y="12" width="10" height="10" rx="3" fill="#E8D595"/>
                                <rect class="dot-6" x="24" y="12" width="10" height="10" rx="3" fill="#5D6D82"/>
                            </svg>
                        </div>
                        <h3 class="addon-title">Financial<br>Health Check</h3>
                        <p class="addon-desc">Your profit, cash and tax position, your outstanding tax liabilities and your year-to-date tax estimate. You always know where you stand.</p>
                    </div>
                    
                    <!-- Column 2: Growth -->
                    <div class="addon-col addon-col-middle">
                        <div class="addon-badge">GROWTH</div>
                        <div class="addon-icon">
                            <!-- Custom SVG for Business Performance -->
                            <svg width="40" height="34" viewBox="-4 -4 40 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <!-- Left bar -->
                                <path class="bar-1" d="M0 26 V14 C0 11.79 1.79 10 4 10 C6.21 10 8 11.79 8 14 V26 Z"/>
                                <!-- Middle bar -->
                                <path class="bar-2" d="M12 26 V10 C12 7.79 13.79 6 16 6 C18.21 6 20 7.79 20 10 V26 Z"/>
                                <!-- Right bar -->
                                <path class="bar-3" d="M24 26 V4 C24 1.79 25.79 0 28 0 C30.21 0 32 1.79 32 4 V26 Z"/>
                            </svg>
                        </div>
                        <h3 class="addon-title">Business<br>Performance</h3>
                        <p class="addon-desc">Everything above, plus margins, trends and KPIs, so you see what is working and act on it.</p>
                    </div>
                    
                    <!-- Column 3: Premium -->
                    <div class="addon-col">
                        <div class="addon-badge">PREMIUM</div>
                        <div class="addon-icon">
                            <!-- Custom SVG for Strategic Advisory -->
                            <svg width="44" height="32" viewBox="-4 -4 44 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <!-- Right ring drawn first -->
                                <circle class="ring-1" cx="26" cy="12" r="10" stroke="#E8D595" stroke-width="2.5" fill="none"/>
                                <!-- Left ring drawn second -->
                                <circle class="ring-2" cx="12" cy="12" r="10" stroke="#D4A84F" stroke-width="2.5" fill="none"/>
                                <!-- Faint inner glow -->
                                <circle cx="12" cy="12" r="10" fill="rgba(212,168,79,0.1)"/>
                            </svg>
                        </div>
                        <h3 class="addon-title">Strategic<br>Advisory</h3>
                        <p class="addon-desc">Everything above, plus forecasting and board-level guidance to drive your next stage of growth.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==========================================
       SECTION 3.7: RECEPTION BANNER
       ========================================== -->
    <section class="section-white" style="padding-top: 40px; padding-bottom: 80px;" id="reception-banner">
        <div class="container">
            <div class="reception-banner-wrapper">
                <img src="https://a2zaccounting.co.uk/wp-content/uploads/2025/08/Home-Page-photo.webp" alt="A2Z Accounting Office" class="reception-img">
                <div class="reception-overlay">
                    <div class="reception-dot"></div>
                    <h3 class="reception-text">BUILT FOR HIGH GROWTH<br>UK BUSINESSES</h3>
                </div>
            </div>
        </div>
    </section>


    <!-- ==========================================
       SECTION 3.8: TAX EXPERTISE
       ========================================== -->
    <section class="tax-expertise-section" id="expertise">
        <div class="tax-expertise-bg"></div>
        <div class="container">
            <div class="tax-timeline-layout">
                <div class="tax-timeline-line"></div>
                
                <!-- Header Row -->
                <div class="tax-timeline-row tax-row-header">
                    <div class="tax-timeline-marker">
                        <div class="tax-dot-target"></div>
                    </div>
                    <div class="tax-content">
                        <div class="tax-eyebrow">DEEP TAX EXPERTISE</div>
                        <h2 class="tax-title">Every new client gets a full tax restructure free.</h2>
                        <p class="tax-desc">A Chartered Certified Accountant reworks your entire setup, the most tax-efficient way the law allows, before we do anything else.</p>
                    </div>
                </div>

                <!-- Card 1 -->
                <div class="tax-timeline-row tax-row-card">
                    <div class="tax-timeline-marker">
                        <div class="tax-dot-hollow"></div>
                    </div>
                    <div class="tax-content">
                        <div class="tax-card">
                            <div class="tax-card-badge">STRATEGY</div>
                            <h3 class="tax-card-title">Wealth-focused consultancy</h3>
                            <p class="tax-card-desc">Mitigating risk across generational wealth transfers.</p>
                            <div class="tax-card-icon">
                                <img src="https://unpkg.com/lucide-static@0.400.0/icons/landmark.svg" alt="Strategy Icon">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="tax-timeline-row tax-row-card">
                    <div class="tax-timeline-marker">
                        <div class="tax-dot-target"></div>
                    </div>
                    <div class="tax-content">
                        <div class="tax-card">
                            <div class="tax-card-badge">COMPLIANCE</div>
                            <h3 class="tax-card-title">Real HMRC expertise</h3>
                            <p class="tax-card-desc">Strategic advisory for complex tax enquiries.</p>
                            <div class="tax-card-icon">
                                <img src="https://unpkg.com/lucide-static@0.400.0/icons/bar-chart-4.svg" alt="Compliance Icon">
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

   

    <!-- ==========================================
       SECTION 7: DEEP SECTOR EXPERTISE
       ========================================== -->
    <section class="section-light" id="sectors" style="background-color: #F8F9FA;">
        <div class="container">
            <div class="text-center">
                <h2 class="section-title">Deep Sector Expertise Across<br><span class="text-gold">Six Key Industries.</span></h2>
            </div>
            
            <div class="sectors-grid">
                <?php foreach ($sectors_default as $sector): ?>
                <div class="sector-card">
                    <img src="<?php echo esc_url($sector[3]); ?>" alt="<?php echo esc_attr($sector[0]); ?>" class="sector-img">
                    <div class="sector-content">
                        <h3 class="sector-title"><?php echo esc_html($sector[0]); ?></h3>
                        <p class="sector-desc"><?php echo esc_html($sector[1]); ?></p>
                        <a href="<?php echo esc_url($sector[2]); ?>" class="sector-link">VIEW DETAILS <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></a>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ==========================================
       SECTION 8: PRICE GUARANTEE
       ========================================== -->
    <section class="price-guarantee-section" id="price-guarantee">
        <div class="container">
            <div class="pg-eyebrow">OUR PRICE GUARANTEE</div>
            <h2 class="pg-title">One Fixed Monthly Price.</h2>
            <h2 class="pg-subtitle">No Surprise Bills. Guaranteed.</h2>
            
            <div class="pg-grid">
                <!-- Grid Item 1 -->
                <div class="pg-item">
                    <div class="pg-icon">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 6 7 17l-5-5"/>
                            <path d="m22 10-7.5 7.5L13 16"/>
                        </svg>
                    </div>
                    <h3 class="pg-item-title">Scope Agreed</h3>
                    <p class="pg-item-desc">Clear boundaries set up front.</p>
                </div>
                
                <!-- Grid Item 2 -->
                <div class="pg-item">
                    <div class="pg-icon">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 6 7 17l-5-5"/>
                            <path d="m22 10-7.5 7.5L13 16"/>
                        </svg>
                    </div>
                    <h3 class="pg-item-title">All Inclusive</h3>
                    <p class="pg-item-desc">Everything included, no extras.</p>
                </div>
                
                <!-- Grid Item 3 -->
                <div class="pg-item">
                    <div class="pg-icon">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 6 7 17l-5-5"/>
                            <path d="m22 10-7.5 7.5L13 16"/>
                        </svg>
                    </div>
                    <h3 class="pg-item-title">Proactive Strategy Advice</h3>
                    <p class="pg-item-desc">Clear strategy advice that matters.</p>
                </div>
            </div>
            
            <a href="javascript:void(0)" class="pg-btn" data-bs-toggle="modal" data-bs-target="#gitModal" data-source="Get a fee estimate">GET A FEE ESTIMATE</a>
        </div>
    </section>

    <!-- ==========================================
       SECTION 9: SWITCHING STEP
       ========================================== -->
    <section class="switching-section" id="switching">
        <div class="container">
            <h2 class="switching-title">Switching To Us Is <span>Simple</span></h2>
            
            <div class="switching-grid">
                <!-- Step 1 -->
                <div class="switching-card">
                    <div class="sc-img-box">
                        <img src="https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?auto=format&fit=crop&w=600&q=80" alt="Discovery Call">
                    </div>
                    <div class="sc-body">
                        <div class="sc-header-row">
                            <div class="sc-icon-box">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="11" cy="11" r="8"/>
                                    <path d="m21 21-4.3-4.3"/>
                                </svg>
                            </div>
                            <div class="sc-badge">FIRST</div>
                        </div>
                        <h3 class="sc-title">Discovery<br>Conversation</h3>
                        <p class="sc-desc">We learn your business, your goals, and what your last accountant missed.</p>
                    </div>
                </div>
                
                <!-- Step 2 -->
                <div class="switching-card">
                    <div class="sc-img-box">
                        <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216?auto=format&fit=crop&w=600&q=80" alt="Handover">
                    </div>
                    <div class="sc-body">
                        <div class="sc-header-row">
                            <div class="sc-icon-box">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M8 3 4 7l4 4"/>
                                    <path d="M4 7h16"/>
                                    <path d="m16 21 4-4-4-4"/>
                                    <path d="M20 17H4"/>
                                </svg>
                            </div>
                            <div class="sc-badge">THEN</div>
                        </div>
                        <h3 class="sc-title">Structured<br>Handover</h3>
                        <p class="sc-desc">We deal with your previous accountant and set everything up.</p>
                    </div>
                </div>
                
                <!-- Step 3 -->
                <div class="switching-card">
                    <div class="sc-img-box">
                        <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=600&q=80" alt="Ongoing Management">
                    </div>
                    <div class="sc-body">
                        <div class="sc-header-row">
                            <div class="sc-icon-box">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M3 12a9 9 0 1 0 9-9 9.75 9.75 0 0 0-6.74 2.74L3 8"/>
                                    <path d="M3 3v5h5"/>
                                </svg>
                            </div>
                            <div class="sc-badge">ONGOING</div>
                        </div>
                        <h3 class="sc-title">Ongoing<br>Management</h3>
                        <p class="sc-desc">Your account runs to a defined system. No drift, no gaps, no chasing.</p>
                    </div>
                </div>
            </div>
            
            <div class="switching-footer-btn">
                <a href="javascript:void(0)" class="btn-switching" data-bs-toggle="modal" data-bs-target="#enquireModal" data-source="Switching">START THE CONVERSATION</a>
            </div>
        </div>
    </section>

    <!-- ==========================================
       SECTION 10: RESOURCE CENTER (BLOG)
       ========================================== -->
    <section class="section-light" id="blogs" style="background-color: #ffffff;">
        <div class="container">
            <div class="text-center">
                <h2 class="section-title" >From Our <span style="color: #D4A84F;">Knowledge Desk.</span></h2>
            </div>
            
            <div class="blogs-grid">
                <!-- Blog 1 -->
                <div class="blog-card">
                    <div class="blog-img-box">
                        <div class="blog-badge">OTHERS</div>
                        <img src="https://images.unsplash.com/photo-1577717903315-1691ae25ab3f?auto=format&fit=crop&w=600&q=80" alt="Aberdeen Architecture">
                    </div>
                    <div class="blog-body">
                        <div class="blog-meta">
                            <span class="blog-date">JULY 6, 2026</span>
                        </div>
                        <a href="#blog-single" class="blog-card-title"><h3>Switching Accountants In Aberdeen: Why SMEs Are Moving In 2026</h3></a>
                    </div>
                </div>
                
                <!-- Blog 2 -->
                <div class="blog-card">
                    <div class="blog-img-box">
                        <div class="blog-badge">E-COMMERCE</div>
                        <img src="https://images.unsplash.com/photo-1580674285054-bed31e145f59?auto=format&fit=crop&w=600&q=80" alt="VAT Amazon Packages">
                    </div>
                    <div class="blog-body">
                        <div class="blog-meta">
                            <span class="blog-date">JUNE 24, 2026</span>
                        </div>
                        <a href="#blog-single" class="blog-card-title"><h3>The VAT Mistake Most Amazon Sellers Don't Catch Until Year Two</h3></a>
                    </div>
                </div>
                
                <!-- Blog 3 -->
                <div class="blog-card">
                    <div class="blog-img-box">
                        <div class="blog-badge">E-COMMERCE</div>
                        <img src="https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?auto=format&fit=crop&w=600&q=80" alt="Checklist Document">
                    </div>
                    <div class="blog-body">
                        <div class="blog-meta">
                            <span class="blog-date">JUNE 22, 2026</span>
                        </div>
                        <a href="#blog-single" class="blog-card-title"><h3>Hiring An Amazon Accountant? Ask These Three Questions First</h3></a>
                    </div>
                </div>
            </div>
            
            <div class="blogs-footer-btn">
                <a href="#blogs" class="btn-blog">VIEW ALL ARTICLES</a>
            </div>
        </div>
    </section>

    <!-- ==========================================
       SECTION 11: TRUSTED BY (REVIEWS)
       ========================================== -->
    <section class="section-white">
        <div class="container">
            <div class="text-center">
                <h2 class="section-title">Trusted by Growing Businesses<br><span class="text-gold">Across the UK.</span></h2>
                
                      
                <!-- Trustindex.io shortcode placeholder -->
                <div class="trustindex-placeholder a2zh-rv a2zh-d1">
                  <?php echo do_shortcode('[trustindex no-registration=google]'); ?>
                </div>  

                <div class="google-reviews-badge">
                    <svg width="24" height="24" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg" style="opacity: 0.6;">
                        <path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/>
                        <path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/>
                        <path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/>
                        <path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/>
                    </svg>
                    <span>VERIFIED GOOGLE REVIEWS</span>
                </div>
            </div>
        </div>
    </section>



    <!-- ==========================================
       JAVASCRIPT INTERACTIONS
       ========================================== -->
</div>

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
                                        <select name="bookkeeping_software" id="bookkeeping_software"
                                            onchange="calculateTotal()">
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
                                        <select name="document_uploads_software" id="document_uploads_software"
                                            onchange="calculateTotal()">
                                            <option value="NA">NA</option>
                                            <option value="Dext">Dext</option>
                                        </select>
                                    </td>
                                    <td id="document_uploads_software_price" data-title="Monthly fee excluding VAT:">
                                    </td>
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
                                        <select name="management_accounts" id="management_accounts"
                                            onchange="calculateTotal()">
                                            <option value="NA">NA</option>
                                            <option value="Quarterly Management Accounts">Quarterly Management Accounts
                                            </option>
                                            <option value="Monthly Management Accounts">Monthly Management Accounts
                                            </option>
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
                                        <select name="people_tax_returns" id="people_tax_returns"
                                            onchange="calculateTotal()">
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
                                    <td><strong>Companies House Annual Fee (<span>CS01</span>)<span>*</span></strong>
                                    </td>
                                    <td>
                                        <select name="companies_house_annual" id="companies_house_annual"
                                            onchange="calculateTotal()">
                                            <option value="Yes">Yes</option>
                                        </select>
                                    </td>
                                    <td id="companies_house_annual_price" data-title="Montheely fee excluding VAT:">
                                    </td>
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





<script>
        document.addEventListener('DOMContentLoaded', () => {
            
            // 1. Mobile navigation menu toggle (disabled since header is removed)
            const menuToggle = document.getElementById('menuToggle');
            const navMenu = document.getElementById('navMenu');
            
            if (menuToggle && navMenu) {
                menuToggle.addEventListener('click', () => {
                    navMenu.classList.toggle('mobile-open');
                    
                    // Animate menu toggle icon to an 'X' shape
                    const spans = menuToggle.querySelectorAll('span');
                    if (navMenu.classList.contains('mobile-open')) {
                        spans[0].style.transform = 'rotate(45deg) translate(5px, 5px)';
                        spans[1].style.opacity = '0';
                        spans[2].style.transform = 'rotate(-45deg) translate(5px, -5px)';
                    } else {
                        spans[0].style.transform = 'none';
                        spans[1].style.opacity = '1';
                        spans[2].style.transform = 'none';
                    }
                });
                
                // Close mobile menu when clicking nav links
                const navLinks = navMenu.querySelectorAll('a');
                navLinks.forEach(link => {
                    link.addEventListener('click', () => {
                        navMenu.classList.remove('mobile-open');
                        const spans = menuToggle.querySelectorAll('span');
                        spans[0].style.transform = 'none';
                        spans[1].style.opacity = '1';
                        spans[2].style.transform = 'none';
                    });
                });
            }

            // 2. Interactive Process Accordions
            const accordionItems = document.querySelectorAll('.accordion-item');
            
            accordionItems.forEach(item => {
                const header = item.querySelector('.accordion-header');
                
                header.addEventListener('click', () => {
                    const isActive = item.classList.contains('active');
                    
                    // Collapse all accordion items
                    accordionItems.forEach(acc => {
                        acc.classList.remove('active');
                        // Reset all icons to pluses
                        const iconWrapper = acc.querySelector('.accordion-icon');
                        iconWrapper.innerHTML = `
                            <svg class="icon-plus" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round">
                                <line x1="12" y1="5" x2="12" y2="19"></line>
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                            </svg>
                        `;
                    });
                    
                    // If clicked item was not active, expand it and set its icon to a minus
                    if (!isActive) {
                        item.classList.add('active');
                        const iconWrapper = item.querySelector('.accordion-icon');
                        iconWrapper.innerHTML = `
                            <svg class="icon-minus" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                            </svg>
                        `;
                    }
                });
            });

            // 3. Smooth scrolling for internal anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    const href = this.getAttribute('href');
                    if (href !== '#') {
                        e.preventDefault();
                        const target = document.querySelector(href);
                        if (target) {
                            target.scrollIntoView({
                                behavior: 'smooth'
                            });
                        }
                    }
                });
            });

            // 4. Hero Video Testimonial Carousel
            const heroTestimonials = [
                {
                    name: "Mrs. Rona Tonge",
                    role: "Managing Director, Golf View Hotel",
                    quote: `"An absolute pleasure to work with! They transformed our tax strategy and became a true partner in our growth."`,
                    videoName: "Mr. Hassan",
                    videoRole: "British Film Director &amp;<br>Entrepreneur - Aberdeen",
                    thumb: "https://a2zaccounting.co.uk/wp-content/uploads/2025/06/15.png",
                    captions: "like, four or five different, come on, both. and",
                    loomUrl: "https://www.loom.com/embed/921fccbea4f843c491d01bcbd43ecb59"
                },
                {
                    name: "Kimberley Welsh",
                    role: "Owner, Ca'dora Diner &ndash; Elgin",
                    quote: `"Switching to A2Z has been a game-changer &ndash; fast, efficient, and helped improve my knowledge!"`,
                    videoName: "Kimberley Welsh",
                    videoRole: "Owner, Ca'dora Diner &ndash; Elgin",
                    thumb: "https://a2zaccounting.co.uk/wp-content/uploads/2025/06/11.png",
                    captions: "\"Switching to A2Z has been a game-changer...\"",
                    loomUrl: "https://www.loom.com/embed/13ce4a974d34447baf27484eebf9b93f"
                },
                {
                    name: "Dr. Hassan Abbas",
                    role: "Managing Director &amp; Consultant Cardiologist",
                    quote: `"7 years of unwavering support &mdash; A2Z navigates VAT complexities and fuels my clinic's growth!"`,
                    videoName: "Dr. Hassan Abbas",
                    videoRole: "Managing Director &amp; Consultant Cardiologist &ndash; Aberdeen",
                    thumb: "https://a2zaccounting.co.uk/wp-content/uploads/2025/06/14.png",
                    captions: "\"A2Z fuels my clinic's growth!\"",
                    loomUrl: "https://www.loom.com/embed/a541d08386e4430f9f24cf73c2d8555b"
                }
            ];

            let currentHeroTestimonial = 0;

            window.updateHeroTestimonial = () => {
                const data = heroTestimonials[currentHeroTestimonial];
                document.getElementById('heroAuthorName').innerHTML = data.name;
                document.getElementById('heroAuthorRole').innerHTML = data.role;
                document.getElementById('heroQuote').innerHTML = data.quote;
                document.getElementById('heroVideoThumb').src = data.thumb;
            };

            window.nextHeroTestimonial = () => {
                currentHeroTestimonial = (currentHeroTestimonial + 1) % heroTestimonials.length;
                updateHeroTestimonial();
            };

            window.prevHeroTestimonial = () => {
                currentHeroTestimonial = (currentHeroTestimonial - 1 + heroTestimonials.length) % heroTestimonials.length;
                updateHeroTestimonial();
            };

            window.playLoomVideo = () => {
                const data = heroTestimonials[currentHeroTestimonial];
                alert('Playing video testimonial from ' + data.name + ':\n' + data.loomUrl);
            };
        });
    </script>

<script>
        document.addEventListener('DOMContentLoaded', () => {
            
            // 1. Mobile navigation menu toggle (disabled since header is removed)
            const menuToggle = document.getElementById('menuToggle');
            const navMenu = document.getElementById('navMenu');
            
            if (menuToggle && navMenu) {
                menuToggle.addEventListener('click', () => {
                    navMenu.classList.toggle('mobile-open');
                    
                    // Animate menu toggle icon to an 'X' shape
                    const spans = menuToggle.querySelectorAll('span');
                    if (navMenu.classList.contains('mobile-open')) {
                        spans[0].style.transform = 'rotate(45deg) translate(5px, 5px)';
                        spans[1].style.opacity = '0';
                        spans[2].style.transform = 'rotate(-45deg) translate(5px, -5px)';
                    } else {
                        spans[0].style.transform = 'none';
                        spans[1].style.opacity = '1';
                        spans[2].style.transform = 'none';
                    }
                });
                
                // Close mobile menu when clicking nav links
                const navLinks = navMenu.querySelectorAll('a');
                navLinks.forEach(link => {
                    link.addEventListener('click', () => {
                        navMenu.classList.remove('mobile-open');
                        const spans = menuToggle.querySelectorAll('span');
                        spans[0].style.transform = 'none';
                        spans[1].style.opacity = '1';
                        spans[2].style.transform = 'none';
                    });
                });
            }

            // 2. Interactive Process Accordions
            const accordionItems = document.querySelectorAll('.accordion-item');
            
            accordionItems.forEach(item => {
                const header = item.querySelector('.accordion-header');
                
                header.addEventListener('click', () => {
                    const isActive = item.classList.contains('active');
                    
                    // Collapse all accordion items
                    accordionItems.forEach(acc => {
                        acc.classList.remove('active');
                        // Reset all icons to pluses
                        const iconWrapper = acc.querySelector('.accordion-icon');
                        iconWrapper.innerHTML = `
                            <svg class="icon-plus" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round">
                                <line x1="12" y1="5" x2="12" y2="19"></line>
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                            </svg>
                        `;
                    });
                    
                    // If clicked item was not active, expand it and set its icon to a minus
                    if (!isActive) {
                        item.classList.add('active');
                        const iconWrapper = item.querySelector('.accordion-icon');
                        iconWrapper.innerHTML = `
                            <svg class="icon-minus" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                            </svg>
                        `;
                    }
                });
            });

            // 3. Smooth scrolling for internal anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    const href = this.getAttribute('href');
                    if (href !== '#') {
                        e.preventDefault();
                        const target = document.querySelector(href);
                        if (target) {
                            target.scrollIntoView({
                                behavior: 'smooth'
                            });
                        }
                    }
                });
            });

            // 4. Hero Video Testimonial Carousel
            const heroTestimonials = [
                {
                    name: "Mrs. Rona Tonge",
                    role: "Managing Director, Golf View Hotel",
                    quote: `"An absolute pleasure to work with! They transformed our tax strategy and became a true partner in our growth."`,
                    videoName: "Mr. Hassan",
                    videoRole: "British Film Director &amp;<br>Entrepreneur - Aberdeen",
                    thumb: "https://a2zaccounting.co.uk/wp-content/uploads/2025/06/15.png",
                    captions: "like, four or five different, come on, both. and",
                    loomUrl: "https://www.loom.com/embed/921fccbea4f843c491d01bcbd43ecb59"
                },
                {
                    name: "Kimberley Welsh",
                    role: "Owner, Ca'dora Diner &ndash; Elgin",
                    quote: `"Switching to A2Z has been a game-changer &ndash; fast, efficient, and helped improve my knowledge!"`,
                    videoName: "Kimberley Welsh",
                    videoRole: "Owner, Ca'dora Diner &ndash; Elgin",
                    thumb: "https://a2zaccounting.co.uk/wp-content/uploads/2025/06/11.png",
                    captions: "\"Switching to A2Z has been a game-changer...\"",
                    loomUrl: "https://www.loom.com/embed/13ce4a974d34447baf27484eebf9b93f"
                },
                {
                    name: "Dr. Hassan Abbas",
                    role: "Managing Director &amp; Consultant Cardiologist",
                    quote: `"7 years of unwavering support &mdash; A2Z navigates VAT complexities and fuels my clinic's growth!"`,
                    videoName: "Dr. Hassan Abbas",
                    videoRole: "Managing Director &amp; Consultant Cardiologist &ndash; Aberdeen",
                    thumb: "https://a2zaccounting.co.uk/wp-content/uploads/2025/06/14.png",
                    captions: "\"A2Z fuels my clinic's growth!\"",
                    loomUrl: "https://www.loom.com/embed/a541d08386e4430f9f24cf73c2d8555b"
                }
            ];

            let currentHeroTestimonial = 0;

            window.updateHeroTestimonial = () => {
                const data = heroTestimonials[currentHeroTestimonial];
                document.getElementById('heroAuthorName').innerHTML = data.name;
                document.getElementById('heroAuthorRole').innerHTML = data.role;
                document.getElementById('heroQuote').innerHTML = data.quote;
                document.getElementById('heroVideoThumb').src = data.thumb;
            };

            window.nextHeroTestimonial = () => {
                currentHeroTestimonial = (currentHeroTestimonial + 1) % heroTestimonials.length;
                updateHeroTestimonial();
            };

            window.prevHeroTestimonial = () => {
                currentHeroTestimonial = (currentHeroTestimonial - 1 + heroTestimonials.length) % heroTestimonials.length;
                updateHeroTestimonial();
            };

            window.playLoomVideo = () => {
                const data = heroTestimonials[currentHeroTestimonial];
                alert('Playing video testimonial from ' + data.name + ':\n' + data.loomUrl);
            };
        });
    </script>

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
    document.getElementById('document_uploads_software_price').textContent = formatPrice(
        documentUploadsSoftwarePrice);
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
                            const calculatorModal = new bootstrap.Modal(document
                                .getElementById('service-table'));
                            calculatorModal.show();
                            jQuery('#client-details').modal('hide');
                            jQuery('#gitModal').modal('hide');
                        });
                    } else {
                        //alert("Failed to save. " + response.data.message);
                        Swal.fire({
                            icon: 'error',
                            title: 'Submission Failed',
                            text: response.data.message ||
                                'Something went wrong.',
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
            if (key.includes('_price') || key === 'total_price' || key === 'vat_total' || key ===
                'gross_monthly') {
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