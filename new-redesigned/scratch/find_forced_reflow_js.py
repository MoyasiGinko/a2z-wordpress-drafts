import re

file_path = 'e:/Github/Clients/Truedge/accounting-wordpress/new-redesigned/home.php'

with open(file_path, 'r', encoding='utf-8') as f:
    content = f.read()

# Extract script blocks
script_matches = list(re.finditer(r'<script[^>]*>(.*?)</script>', content, re.DOTALL))
full_js = "\n".join([m.group(1) for m in script_matches])

reflow_props = ['offsetWidth', 'offsetHeight', 'clientWidth', 'clientHeight', 'getBoundingClientRect', 'scrollTop', 'offsetTop', 'offsetLeft', 'scrollWidth', 'scrollHeight', 'getComputedStyle']

print("Occurrences of forced reflow properties in home.php scripts:")
for prop in reflow_props:
    matches = [m.start() for m in re.finditer(r'\b' + prop + r'\b', full_js)]
    if matches:
        print(f" - {prop}: {len(matches)} occurrences")
        # Find line numbers in file
        for m in re.finditer(r'\b' + prop + r'\b', content):
            line_no = content[:m.start()].count('\n') + 1
            line_str = content[m.start()-20:m.start()+60].replace('\n', ' ')
            print(f"    Line {line_no}: ...{line_str}...")
