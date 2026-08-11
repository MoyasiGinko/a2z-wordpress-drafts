import re

file_path = 'e:/Github/Clients/Truedge/accounting-wordpress/new-redesigned/home.php'

with open(file_path, 'r', encoding='utf-8') as f:
    content = f.read()

# Find the main style tag (the large one)
style_matches = list(re.finditer(r'<style[^>]*>(.*?)</style>', content, re.DOTALL))
print(f"Found {len(style_matches)} style blocks.")

main_css = ""
main_style_indices = []

for idx, match in enumerate(style_matches):
    css_text = match.group(1)
    if len(css_text) > 1000:
        main_css += css_text + "\n"
        main_style_indices.append((match.start(), match.end()))

# HTML/JS content is everything outside style blocks
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

print(f"Total classes in main CSS: {len(raw_classes)}")
print(f"Used classes ({len(used_classes)}): {sorted(list(used_classes))[:10]}...")
print(f"Unused classes ({len(unused_classes)}):")
for u in sorted(list(unused_classes)):
    print(f"  - .{u}")
