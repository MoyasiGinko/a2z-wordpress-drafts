with open('e:/Github/Clients/Truedge/accounting-wordpress/new-redesigned/home.php', 'r', encoding='utf-8') as f:
    lines = f.readlines()

in_html = False
for idx, line in enumerate(lines):
    if '</style>' in line:
        in_html = True
    if in_html and ('<section' in line or 'class="' in line or 'SECTION' in line):
        if 'section' in line.lower() or 'SECTION' in line:
            print(f"Line {idx+1}: {line.strip()[:100]}")
