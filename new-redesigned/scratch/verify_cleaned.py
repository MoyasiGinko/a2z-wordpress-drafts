import re

file_path = 'e:/Github/Clients/Truedge/accounting-wordpress/new-redesigned/scratch/cleaned_home.php'

with open(file_path, 'r', encoding='utf-8') as f:
    content = f.read()

style_matches = list(re.finditer(r'<style[^>]*>(.*?)</style>', content, re.DOTALL))
main_css = ""
main_style_indices = []

for idx, match in enumerate(style_matches):
    css_text = match.group(1)
    if len(css_text) > 1000:
        main_css += css_text + "\n"
        main_style_indices.append((match.start(), match.end()))

html_js_content = content
for start, end in reversed(main_style_indices):
    html_js_content = html_js_content[:start] + html_js_content[end:]

raw_classes = set(re.findall(r'\.([a-zA-Z_-][a-zA-Z0-9_-]*)', main_css))

unused_classes = set()
used_classes = set()

for c in sorted(raw_classes):
    pattern = r'\b' + re.escape(c) + r'\b'
    if re.search(pattern, html_js_content):
        used_classes.add(c)
    else:
        unused_classes.add(c)

print(f"Total classes in cleaned CSS: {len(raw_classes)}")
print(f"Used classes: {len(used_classes)}")
print(f"Remaining unused classes ({len(unused_classes)}):")
for u in sorted(list(unused_classes)):
    print(f"  - .{u}")
