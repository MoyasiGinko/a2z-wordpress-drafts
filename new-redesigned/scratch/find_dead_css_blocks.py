import re

file_path = 'e:/Github/Clients/Truedge/accounting-wordpress/new-redesigned/home.php'

with open(file_path, 'r', encoding='utf-8') as f:
    content = f.read()

style_match = re.search(r'<style[^>]*>(.*?)</style>', content, re.DOTALL)
css_content = style_match.group(1)

# Find all comments in CSS
comments = re.findall(r'/\*+(.*?)\*+/', css_content, re.DOTALL)
for c in comments:
    c_clean = c.strip()
    if len(c_clean) > 0 and ('SECTION' in c_clean or '=' in c_clean or '---' in c_clean):
        lines = [line.strip() for line in c_clean.split('\n') if line.strip() and not line.strip().startswith('=')]
        if lines:
            print("Header:", " | ".join(lines))
