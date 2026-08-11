# -*- coding: utf-8 -*-
import sys

# Get home.php reviews HTML
with open('../home/home.php', 'r', encoding='utf-8') as f:
    home_lines = f.readlines()

reviews_html = "".join(home_lines[4728:4757])

# Insert into about-us.php
with open('../about/about-us.php', 'r', encoding='utf-8') as f:
    about_lines = f.readlines()

for i, line in enumerate(about_lines):
    if "<!-- FAQPage Schema -->" in line:
        about_lines.insert(i, reviews_html + "\n\n")
        break

with open('../about/about-us.php', 'w', encoding='utf-8') as f:
    f.writelines(about_lines)
print("Inserted successfully before FAQPage Schema")
