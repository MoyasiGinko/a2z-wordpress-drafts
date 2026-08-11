# -*- coding: utf-8 -*-
import sys

# Get home.php reviews HTML
with open('../home/home.php', 'r', encoding='utf-8') as f:
    home_lines = f.readlines()

reviews_html = "".join(home_lines[4728:4757])

# Insert into about-us.php
with open('../about/about-us.php', 'r', encoding='utf-8') as f:
    about_content = f.read()

# Find the end of testimonials
# <div class="a2zvt-outer"> ... </div>
# </div>
# </div>
# </section>
# We can just search for '<section class="team">' or similar that comes after testimonials, or search for '</section>' right after 'a2zvt-outer'.
idx = about_content.find('<section class="story">')
if idx != -1:
    # Insert right before <section class="story">
    about_content = about_content[:idx] + reviews_html + "\n\n" + about_content[idx:]
    with open('../about/about-us.php', 'w', encoding='utf-8') as f:
        f.write(about_content)
    print("Inserted successfully before story")
else:
    print("Could not find <section class='story'>")
