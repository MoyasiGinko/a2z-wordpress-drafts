import re

file_path = 'e:/Github/Clients/Truedge/accounting-wordpress/new-redesigned/home.php'

with open(file_path, 'r', encoding='utf-8') as f:
    content = f.read()

# Expanded list including the 6 compound selector classes
unused_classes = {
    'accordion-body', 'accordion-body-desc', 'accordion-body-title', 'accordion-header-text', 'accordion-wrapper',
    'addon-card', 'calculator-wrapper', 'cta-bar-actions', 'cta-bar-checklist', 'cta-bar-wrap',
    'feature-card', 'feature-card-desc', 'feature-card-title', 'feature-icon-wrapper', 'features-grid',
    'font-serif', 'header-top', 'hero-subtitle', 'highlighted', 'html', 'italic',
    'level-card', 'level-card-desc', 'level-card-title', 'level-eyebrow', 'level-premium-badge', 'levels-grid',
    'menu-toggle', 'nav-menu', 'process-desc', 'process-info', 'process-split',
    'reception-card', 'reception-card-text', 'reviews-grid', 'sc-icon-box', 'section-dark', 'section-subtitle',
    'service-card', 'services-grid', 'stat-desc', 'stat-item', 'stat-number', 'stat-subtitle', 'stats-grid',
    'step-card', 'steps-grid', 'trust-feature', 'trust-features', 'weight-bold', 'weight-normal'
}

style_matches = list(re.finditer(r'<style[^>]*>(.*?)</style>', content, re.DOTALL))
main_match = None
for m in style_matches:
    if len(m.group(1)) > 1000:
        main_match = m
        break

css_text = main_match.group(1)

# Function to check if a selector should be removed
def should_remove_selector(sel_str):
    classes = re.findall(r'\.([a-zA-Z_-][a-zA-Z0-9_-]*)', sel_str)
    if not classes:
        return False
    # If ANY class in this selector is in unused_classes, check if the key target is unused
    # E.g. in `.accordion-item.active .accordion-body`, `.accordion-body` is the target and is unused.
    # If all classes or the final target class is in unused_classes, remove it.
    target_class = classes[-1] # the last class in the descendant chain
    if target_class in unused_classes:
        return True
    return all(c in unused_classes for c in classes)

lines = css_text.split('\n')
new_css_lines = []

i = 0
removed_count = 0

while i < len(lines):
    line = lines[i]
    stripped = line.strip()
    
    if '{' in stripped and not stripped.startswith('@') and not stripped.startswith('/*'):
        selector = stripped.split('{')[0].strip()
        sub_selectors = [s.strip() for s in selector.split(',')]
        if all(should_remove_selector(s) for s in sub_selectors if s):
            depth = line.count('{') - line.count('}')
            while depth > 0 and i + 1 < len(lines):
                i += 1
                depth += lines[i].count('{') - lines[i].count('}')
            removed_count += 1
            i += 1
            continue
            
    new_css_lines.append(line)
    i += 1

cleaned_css = "\n".join(new_css_lines)

# Remove empty comments / media queries
cleaned_css = re.sub(r'@media\s*\([^)]+\)\s*\{\s*\}', '', cleaned_css)
cleaned_css = re.sub(r'/\*\s*==========================================\s*\d+\.\s*SECTION[^*]*\*+/', '', cleaned_css)
cleaned_css = re.sub(r'\n\s*\n\s*\n+', '\n\n', cleaned_css)

print(f"Original CSS length: {len(css_text)} bytes")
print(f"Cleaned CSS length: {len(cleaned_css)} bytes")
print(f"Removed {removed_count} unused CSS rule blocks!")
print(f"Saved {len(css_text) - len(cleaned_css)} bytes (~{(len(css_text) - len(cleaned_css))/1024:.1f} KB) of CSS!")

new_content = content[:main_match.start(1)] + cleaned_css + content[main_match.end(1):]
with open('e:/Github/Clients/Truedge/accounting-wordpress/new-redesigned/scratch/cleaned_home.php', 'w', encoding='utf-8') as f:
    f.write(new_content)
