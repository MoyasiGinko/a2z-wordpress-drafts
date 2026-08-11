import re

file_path = 'e:/Github/Clients/Truedge/accounting-wordpress/new-redesigned/home.php'

with open(file_path, 'r', encoding='utf-8') as f:
    lines = f.readlines()

unused_set = {
    'accordion-body', 'accordion-body-desc', 'accordion-body-title', 'accordion-header-text', 'accordion-wrapper',
    'addon-card', 'calculator-wrapper', 'cta-bar-actions', 'cta-bar-checklist', 'cta-bar-wrap',
    'feature-card', 'feature-card-desc', 'feature-card-title', 'feature-icon-wrapper', 'features-grid',
    'font-serif', 'header-top', 'hero-subtitle', 'highlighted', 'italic',
    'level-card', 'level-card-desc', 'level-card-title', 'level-eyebrow', 'level-premium-badge', 'levels-grid',
    'menu-toggle', 'nav-menu', 'process-desc', 'process-info', 'process-split',
    'reception-card', 'reception-card-text', 'reviews-grid', 'sc-icon-box', 'section-dark', 'section-subtitle',
    'service-card', 'services-grid', 'stat-desc', 'stat-item', 'stat-number', 'stat-subtitle', 'stats-grid',
    'step-card', 'steps-grid', 'trust-feature', 'trust-features', 'weight-bold', 'weight-normal'
}

print("Line matches for unused CSS selectors in home.php:")
for idx, line in enumerate(lines[:2830]): # css is in first ~2830 lines
    for cls in unused_set:
        if f'.{cls}' in line:
            print(f"Line {idx+1}: {line.strip()[:100]}")
            break
