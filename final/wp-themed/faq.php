<?php
/**
 * Template Name: A2Z FAQ
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 */

get_header();

require_once __DIR__ . '/../../draft/faq/faq-component.php';

$faq_data = [
    [
        'id' => 'general',
        'label' => 'General',
        'items' => [
            ['q' => 'How can accountants help me to reduce my tax?', 'a' => "We don't just file returns — we proactively plan your taxes throughout the year to help you legally reduce what you pay and improve your cash flow.", 'cta' => 'Book a consultation to see how much you could save'],
            ['q' => 'Do A2Z Accounting provide fully managed accounting services?', 'a' => 'Yes, we handle everything from bookkeeping to tax, VAT, and financial reporting, giving you complete financial control without the stress.', 'cta' => 'Get started with a consultation'],
            ['q' => 'How is A2Z different from other accountants?', 'a' => 'Most accountants are reactive. We provide proactive advice, fast support, and structured reporting to help your business grow with confidence.', 'cta' => 'Speak to an expert today'],
            ['q' => 'Is this right for my growing business?', 'a' => 'If your business is growing and you need better financial control, faster support, and strategic advice, our services are designed for you.', 'cta' => 'Book a call to discuss your needs'],
            ['q' => 'Do you offer fixed pricing?', 'a' => 'Yes, we offer clear, fixed monthly pricing with no hidden fees, so you always know what to expect.', 'cta' => 'Request your personalised quote'],
            ['q' => 'How do I get started?', 'a' => "Simply book a free consultation or submit your enquiry. We'll review your current setup and recommend the best approach for your business.", 'cta' => 'Start your enquiry today'],
        ],
    ],
    [
        'id' => 'hospitality',
        'label' => 'Hospitality',
        'items' => [
            ['q' => 'How can an accountant improve profitability in my hospitality business?', 'a' => 'We provide real-time financial insights, cost control strategies, and proactive tax planning to help increase margins and improve profitability.', 'cta' => 'Book a consultation to review your business'],
            ['q' => 'Do you specialise in hospitality accounting?', 'a' => 'Yes, we work with restaurants, hotels, cafés, bars, and event businesses, providing tailored accounting solutions for the hospitality sector.', 'cta' => 'Speak to a hospitality accountant today'],
            ['q' => 'How do you handle VAT for hospitality businesses?', 'a' => 'We manage VAT compliance, optimise VAT structures, and ensure accurate reporting across food, accommodation, and event revenue.', 'cta' => 'Get expert VAT support'],
            ['q' => 'Can you manage payroll for hospitality staff?', 'a' => 'Yes, we provide fully managed payroll for shift-based teams, including wages, tips, pensions, and compliance.', 'cta' => 'Let us handle your payroll'],
            ['q' => 'Why is my business busy but not profitable?', 'a' => 'This is usually due to poor cost control, VAT inefficiencies, or lack of financial visibility. We help you identify and fix these issues.', 'cta' => 'Book a consultation to improve profitability'],
        ],
    ],
    [
        'id' => 'influencers',
        'label' => 'Influencers',
        'items' => [
            ['q' => 'Do influencers need to pay tax in the UK?', 'a' => 'Yes, if you earn income from brand deals, ads, or affiliates, you must declare it to HMRC.', 'cta' => 'Book a consultation to stay compliant'],
            ['q' => 'Are gifted products taxable?', 'a' => 'In many cases, yes. HMRC may treat PR gifts as income depending on their purpose.', 'cta' => 'Speak to an expert to avoid mistakes'],
            ['q' => 'How can I reduce tax as a content creator?', 'a' => 'By claiming expenses, structuring your income correctly, and planning, you can reduce your tax legally.', 'cta' => 'Get your personalised tax plan'],
            ['q' => 'Do I need an accountant as an influencer?', 'a' => 'If your income is growing or coming from multiple sources, an accountant helps you stay compliant and maximise earnings.', 'cta' => 'Talk to a specialist today'],
            ['q' => 'Can you manage all my finances as a creator?', 'a' => 'Yes, we provide fully managed services including bookkeeping, tax, VAT, and financial advice.', 'cta' => 'Get started with a free consultation'],
        ],
    ],
    [
        'id' => 'ecommerce',
        'label' => 'E-Commerce',
        'items' => [
            ['q' => 'Why is my e-commerce business not as profitable as expected?', 'a' => 'Fees, VAT, refunds, and platform costs reduce your margins. We help you track real profit and improve performance.', 'cta' => 'Book a consultation to review your business'],
            ['q' => 'Do I need an accountant for my online business?', 'a' => 'Yes, especially if you sell on multiple platforms or internationally. E-commerce accounting is more complex than traditional business accounting.', 'cta' => 'Speak to an expert today'],
            ['q' => 'How do you handle VAT for e-commerce businesses?', 'a' => 'We manage UK VAT, EU VAT (OSS/IOSS), and cross-border compliance to ensure accuracy and reduce tax risk.', 'cta' => 'Get expert VAT support'],
            ['q' => 'Can you track profit across Amazon and Shopify?', 'a' => 'Yes, we reconcile all platforms, fees, and payouts to give you a clear picture of your actual profit.', 'cta' => 'Get full financial clarity'],
            ['q' => 'How can I reduce taxes as an e-commerce business?', 'a' => 'Through proactive tax planning, expense optimisation, and proper structuring, we help you reduce tax legally.', 'cta' => 'Get your personalised tax plan'],
        ],
    ],
    [
        'id' => 'healthcare',
        'label' => 'Healthcare',
        'items' => [
            ['q' => 'Do healthcare professionals need a specialist accountant?', 'a' => 'Yes, healthcare finances are complex, especially with NHS contracts and compliance requirements. A specialist accountant helps you stay compliant and optimise your income.', 'cta' => 'Book a consultation to get expert advice'],
            ['q' => 'How can I reduce taxes as a doctor or dentist?', 'a' => 'Through proactive tax planning, expense optimisation, and proper structuring, we help reduce your tax legally.', 'cta' => 'Get your personalised tax plan'],
            ['q' => 'Do you work with NHS and private practices?', 'a' => 'Yes, we support both NHS and private healthcare providers, including clinics, dentists, and locum professionals.', 'cta' => 'Speak to a specialist today'],
            ['q' => 'How do you handle VAT for healthcare businesses?', 'a' => 'We manage complex VAT rules, especially for pharmacies and aesthetic clinics, ensuring compliance and tax efficiency.', 'cta' => 'Get expert VAT support'],
            ['q' => 'Can you manage payroll and pensions?', 'a' => 'Yes, we handle payroll, NHS pensions, and compliance to ensure accuracy and reduce administrative burden.', 'cta' => 'Let us manage your payroll'],
        ],
    ],
    [
        'id' => 'property',
        'label' => 'Property & Trades',
        'items' => [
            ['q' => 'What is CIS and how does it affect my business?', 'a' => 'CIS (Construction Industry Scheme) affects how tax is deducted from payments to subcontractors. We manage compliance and help you reclaim overpaid tax.', 'cta' => 'Book a consultation for expert guidance'],
            ['q' => 'Can I reduce tax as a property developer or landlord?', 'a' => 'Yes, through capital allowances, tax planning, and proper structuring, you can significantly reduce your tax liability.', 'cta' => 'Get your personalised tax plan'],
            ['q' => 'Do I need an accountant for my trade business?', 'a' => 'Yes, especially if you deal with subcontractors, VAT, or fluctuating income. A specialist accountant helps you stay compliant and maximise profits.', 'cta' => 'Speak to an expert today'],
            ['q' => 'How do you handle VAT in construction and property?', 'a' => 'We manage complex VAT rules for new builds, renovations, and commercial properties to ensure compliance and avoid overpaying.', 'cta' => 'Get expert VAT support'],
            ['q' => 'Can you manage payroll and subcontractors?', 'a' => 'Yes, we handle payroll, PAYE, and subcontractor payments to ensure everything is accurate and compliant.', 'cta' => 'Let us manage your payroll'],
        ],
    ],
    [
        'id' => 'oilgas',
        'label' => 'Oil & Gas',
        'items' => [
            ['q' => 'Do oil & gas companies need specialist accountants?', 'a' => 'Yes, due to complex regulations, international operations, and tax structures, specialist accounting is essential.', 'cta' => 'Book a consultation for expert advice'],
            ['q' => 'Can you handle international tax and compliance?', 'a' => 'Yes, we support cross-border operations, tax structuring, and compliance with UK and global standards.', 'cta' => 'Speak to an expert today'],
            ['q' => 'How do accountants help improve cash flow in large projects?', 'a' => 'We provide project-level financial tracking and forecasting to improve cash flow and profitability.', 'cta' => 'Get financial clarity for your projects'],
            ['q' => 'Do you manage contractor payroll?', 'a' => 'Yes, we handle payroll for contractors, offshore teams, and engineering staff with full compliance.', 'cta' => 'Let us manage your payroll'],
            ['q' => 'How can I reduce taxes in my engineering business?', 'a' => 'Through proactive tax planning, structuring, and compliance strategies, we help reduce tax legally.', 'cta' => 'Get your personalised tax plan'],
        ],
    ],
];
?>

<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,500;9..144,600;9..144,700&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet" />

<style>
  *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
  html { font-size: 16px; scroll-behavior: smooth; }
  body { font-family: "Manrope", sans-serif; font-weight: 300; -webkit-font-smoothing: antialiased; background: #daeef9; }
  :root { --blue: #1a6fa8; --blue-lt: #2d93d4; --blue-dk: #0d4f7c; --blue-pale: #daeef9; --blue-xpale: #eaf4fb; --cyan: #1fd4e8; --sky: #cce8f6; --ink: #0c1f2e; --serif: "Fraunces", Georgia, serif; --sans: "Manrope", sans-serif; --ease: cubic-bezier(0.25, 0.46, 0.45, 0.94); --cut7: polygon(0 0, calc(100% - 7px) 0, 100% 7px, 100% 100%, 7px 100%, 0 calc(100% - 7px)); --cut8: polygon(0 0, calc(100% - 8px) 0, 100% 8px, 100% 100%, 8px 100%, 0 calc(100% - 8px)); --cut9: polygon(0 0, calc(100% - 9px) 0, 100% 9px, 100% 100%, 9px 100%, 0 calc(100% - 9px)); }
  .faq-section { background: #daeef9; padding: clamp(60px, 9vw, 110px) 0; }
  .faq-inner { max-width: 1360px; margin: 0 auto; padding: 0 clamp(24px, 5vw, 72px); }
  .faq-header { display: grid; grid-template-columns: 1fr 1fr; gap: clamp(32px, 5vw, 80px); align-items: end; margin-bottom: clamp(40px, 5vw, 64px); }
  .faq-title { font-family: var(--serif); font-weight: 700; font-size: clamp(2.15rem, 4vw, 3.6rem); line-height: 1.02; letter-spacing: -0.03em; color: var(--ink); }
  .faq-title span { color: var(--blue); }
  .faq-grid { display: flex; gap: 14px; align-items: flex-start; flex-wrap: wrap; }
  .faq-col { flex: 1 1 calc(50% - 7px); display: flex; flex-direction: column; gap: 14px; min-width: 0; }
  .see-more-wrap { flex: 0 0 100%; }
  .faq-item { background: #f1f8fd; position: relative; overflow: hidden; border: 1px solid rgba(26, 111, 168, 0.12); align-self: start; transition: transform 0.22s var(--ease), box-shadow 0.22s var(--ease), border-color 0.22s var(--ease), background 0.22s var(--ease); }
  .faq-item:hover, .faq-item.open { background: #fbfdff; border-color: rgba(26, 111, 168, 0.22); box-shadow: 0 14px 28px rgba(13, 79, 124, 0.08); }
  .faq-item:hover { transform: translateY(-2px); }
  .faq-item, .faq-item.open, .faq-item:hover { width: 100%; }
  .faq-item.is-matched { min-height: var(--faq-match-height, auto); }
  .faq-item::before { content: ""; position: absolute; top: 0; left: 0; right: 0; height: 1px; background: linear-gradient(to right, var(--blue-lt), var(--cyan)); opacity: 0.25; transition: opacity 0.22s var(--ease); }
  .faq-item.open::before, .faq-item:hover::before { opacity: 1; }
  .faq-q { display: flex; align-items: flex-start; gap: 18px; padding: clamp(20px, 2.6vw, 28px) clamp(20px, 3vw, 36px); cursor: pointer; user-select: none; }
  .faq-q-num { font-family: var(--serif); font-weight: 700; font-size: 1.35rem; color: rgba(26, 111, 168, 0.35); flex-shrink: 0; line-height: 1.2; letter-spacing: 0.04em; transition: color 0.22s; }
  .faq-item.open .faq-q-num, .faq-item:hover .faq-q-num { color: var(--blue-lt); }
  .faq-q-text { display: flex; align-items: flex-start; gap: 10px; min-width: 0; flex: 1; font-size: clamp(1rem, 1.35vw, 1.12rem); font-weight: 600; color: rgba(12, 31, 46, 0.78); line-height: 1.45; transition: color 0.22s; }
  .faq-item.open .faq-q-text, .faq-item:hover .faq-q-text { color: var(--ink); }
  .faq-toggle { width: 30px; height: 30px; flex-shrink: 0; position: relative; background: transparent; display: flex; align-items: center; justify-content: center; border-radius: 999px; margin-top: 1px; align-self: flex-start; }
  .faq-toggle svg { width: 17px; height: 17px; stroke: var(--blue-dk); fill: none; stroke-width: 2.6; stroke-linecap: round; stroke-linejoin: round; transition: transform 0.3s var(--ease), stroke 0.22s; }
  .faq-item.open .faq-toggle svg, .faq-item:hover .faq-toggle svg { stroke: var(--blue); }
  .faq-item.open .faq-toggle svg { transform: rotate(45deg); }
  .faq-a { max-height: 0; overflow: hidden; transition: max-height 0.42s var(--ease); }
  .faq-item.open .faq-a { max-height: 320px; }
  .faq-a-inner { padding: 0 clamp(20px, 3vw, 34px) clamp(18px, 2.2vw, 26px); padding-left: clamp(20px, 3vw, 34px); border-top: 1px solid rgba(26, 111, 168, 0.1); }
  .faq-a-text { font-size: 1.05rem; line-height: 1.9; color: rgba(12, 31, 46, 0.64); font-weight: 300; padding-top: 16px; margin-bottom: 14px; }
  .faq-cta { display: inline-flex; align-items: center; gap: 10px; font-size: 0.85rem; font-weight: 700; letter-spacing: 0.12em; text-transform: uppercase; color: var(--blue); text-decoration: none; transition: gap 0.18s, color 0.18s; }
  .faq-cta:hover { gap: 14px; color: var(--blue-dk); }
  .faq-cta::after { content: ""; }
  .faq-item.hidden { display: none; }
  .see-more-wrap { grid-column: 1/-1; display: flex; flex-direction: column; align-items: center; padding: 36px 0 8px; gap: 18px; }
  .btn-see { position: relative; display: inline-flex; align-items: center; gap: 12px; font-family: var(--sans); font-size: 0.95rem; font-weight: 700; letter-spacing: 0.08em; text-transform: uppercase; padding: 14px 34px; background: #eaf4fb; color: var(--blue); cursor: pointer; border: none; outline: none; clip-path: var(--cut8); transition: background 0.18s, transform 0.18s; }
  .btn-see:hover { background: var(--sky); }
  .btn-see svg { width: 18px; height: 18px; stroke: var(--blue); fill: none; stroke-width: 2.6; stroke-linecap: round; stroke-linejoin: round; transition: transform 0.28s var(--ease); }
  .btn-see.expanded svg { transform: rotate(180deg); }
  .see-count { font-size: 0.75rem; font-weight: 500; letter-spacing: 0.08em; color: rgba(26, 111, 168, 0.7); }
  .faq-footer { display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 20px; margin-top: clamp(36px, 5vw, 56px); padding-top: 26px; border-top: 1px solid rgba(26, 111, 168, 0.2); }
  .faq-footer-txt { font-size: 0.95rem; line-height: 1.7; color: rgba(12, 31, 46, 0.5); }
  .faq-footer-txt strong { color: var(--ink); font-weight: 500; }
  .btn-blue { position: relative; display: inline-flex; align-items: center; gap: 10px; font-family: var(--sans); font-size: 0.95rem; font-weight: 700; letter-spacing: 0.08em; text-transform: uppercase; padding: 14px 34px; background: var(--blue); color: #fff; cursor: pointer; text-decoration: none; white-space: nowrap; border: none; outline: none; clip-path: var(--cut9); transition: background 0.18s, transform 0.18s; }
  .btn-blue:hover { background: var(--blue-lt); }
  .btn-blue::before, .btn-see::before, .faq-badge::before { display: none !important; }
  .rv { opacity: 0; transform: translateY(14px); transition: opacity 0.7s var(--ease), transform 0.7s var(--ease); }
  .rv.in { opacity: 1; transform: none; }
  .d1 { transition-delay: 0.1s; }
  .d2 { transition-delay: 0.2s; }
  .d3 { transition-delay: 0.3s; }
  @media (prefers-reduced-motion: reduce) { .rv { opacity: 1; transform: none; } }
  @media (max-width: 900px) { .faq-header { grid-template-columns: 1fr; } .faq-grid { flex-direction: column; } .faq-col { width: 100%; } }
</style>

<?php echo render_faq_component($faq_data, 6); ?>

<?php get_footer(); ?>
