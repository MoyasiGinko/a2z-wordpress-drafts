import re

file_path = r'e:\Github\Clients\Truedge\accounting-wordpress\new-redesigned\about\about-us.php'
with open(file_path, 'r', encoding='utf-8') as f:
    content = f.read()

lines = content.splitlines()

print('=== CONTAINER MATCHES ===')
for idx, line in enumerate(lines, 1):
    if re.search(r'\.container\b|class=["\'][^"\']*\bcontainer\b', line):
        print(f'{idx}: {line.strip()[:110]}')

print('\n=== BTN MATCHES ===')
for idx, line in enumerate(lines, 1):
    if re.search(r'\.btn\b|class=["\'][^"\']*\bbtn\b', line):
        print(f'{idx}: {line.strip()[:110]}')
