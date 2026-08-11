# -*- coding: utf-8 -*-
import sys
import re

with open('../about/about-us.php', 'r', encoding='utf-8') as f:
    content = f.read()

# Replace HTML outer wrapping
html_start = '<div class="a2zvt a2zh-rv a2zh-d3" id="a2zvt">'
new_html_start = """<div class="a2zvt-outer">
                    <button class="a2zvt-global-prev" aria-label="Previous">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="15 18 9 12 15 6"></polyline></svg>
                    </button>
                    <button class="a2zvt-global-next" aria-label="Next">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </button>
                    <div class="a2zvt a2zh-rv a2zh-d3" id="a2zvt">"""

if html_start in content and new_html_start not in content:
    content = content.replace(html_start, new_html_start)
    # Add closing div before </section>
    end_pattern = '</div>\n  </div>\n</section>'
    if end_pattern in content:
        content = content.replace(end_pattern, '</div>\n</div>\n  </div>\n</section>')

# Remove internal controls and dividers
controls_pattern = re.compile(r'<div class="a2zvt__divider"></div>\s*<div class="a2zvt__controls">.*?</div>\s*</div>', re.DOTALL)
content = controls_pattern.sub('', content)

# Remove any stray "Watch client stories" link blocks if any matched slightly differently
extra_controls_pattern = re.compile(r'<div class="a2zvt__controls">.*?</div>\s*</div>', re.DOTALL)
content = extra_controls_pattern.sub('', content)

with open('../about/about-us.php', 'w', encoding='utf-8') as f:
    f.write(content)
print("HTML Refactored")
