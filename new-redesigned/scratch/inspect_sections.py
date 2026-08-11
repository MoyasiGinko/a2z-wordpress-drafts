import re

file_path = r'e:\Github\Clients\Truedge\accounting-wordpress\new-redesigned\about\about-us.php'
with open(file_path, 'r', encoding='utf-8') as f:
    lines = f.readlines()

for idx, line in enumerate(lines, 1):
    if '<section' in line or ('<div' in line and 'class=' in line):
        print(f'{idx:4d}: {line.strip()[:110]}')
