# -*- coding: utf-8 -*-
import sys
import re

# 1. Update CSS
with open('../about/about-us.php', 'r', encoding='utf-8') as f:
    about_content = f.read()

# Add flex: 1 to a2zvt__body
body_old = """.a2zvt__body {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    padding: clamp(20px, 4.2vw, 36px) clamp(20px, 4.8vw, 40px);
    box-sizing: border-box;
    min-width: 0;
    overflow-wrap: break-word;
    word-wrap: break-word;
    border-left: 1px solid rgba(255, 255, 255, 0.07);
}"""

body_new = """.a2zvt__body {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    padding: clamp(20px, 4.2vw, 36px) clamp(20px, 4.8vw, 40px);
    box-sizing: border-box;
    min-width: 0;
    overflow-wrap: break-word;
    word-wrap: break-word;
    border-left: 1px solid rgba(255, 255, 255, 0.07);
    flex: 1;
}"""

if body_old in about_content:
    about_content = about_content.replace(body_old, body_new)

# 2. Extract slides from home.php
with open('../home/home.php', 'r', encoding='utf-8') as f:
    home_content = f.read()

# The slides are inside <div class="a2zvt__track" id="a2zvt-track"> ... </div>
# But they could be deeply nested. Let's just find all <div class="a2zvt__slide"> ... </div>
# Since there are nested divs, we should use a stack-based parser or carefully crafted regex.
# Actually, since it's PHP/HTML, we can just grab everything between <div class="a2zvt__track" id="a2zvt-track"> and the closing </div> of the track.
track_start = '<div class="a2zvt__track" id="a2zvt-track">'
start_idx = home_content.find(track_start)
if start_idx != -1:
    start_idx += len(track_start)
    # Find the closing </div> of the track. We'll count divs.
    div_count = 1
    idx = start_idx
    while div_count > 0 and idx < len(home_content):
        next_open = home_content.find('<div', idx)
        next_close = home_content.find('</div', idx)
        if next_close == -1:
            break
        if next_open != -1 and next_open < next_close:
            div_count += 1
            idx = next_open + 4
        else:
            div_count -= 1
            idx = next_close + 5
    
    end_idx = idx - 5 # Backtrack to before the </div
    
    all_slides_html = home_content[start_idx:end_idx]
    
    # 3. Clean slides (remove controls and dividers)
    controls_pattern = re.compile(r'<div class="a2zvt__divider"></div>\s*<div class="a2zvt__controls">.*?</div>\s*</div>', re.DOTALL)
    cleaned_slides_html = controls_pattern.sub('', all_slides_html)

    # 4. Insert into about-us.php
    about_track_start = '<div class="a2zvt__track" id="a2zvt-track">'
    about_start_idx = about_content.find(about_track_start)
    if about_start_idx != -1:
        about_start_idx += len(about_track_start)
        
        div_count = 1
        idx = about_start_idx
        while div_count > 0 and idx < len(about_content):
            next_open = about_content.find('<div', idx)
            next_close = about_content.find('</div', idx)
            if next_close == -1:
                break
            if next_open != -1 and next_open < next_close:
                div_count += 1
                idx = next_open + 4
            else:
                div_count -= 1
                idx = next_close + 5
        about_end_idx = idx - 5
        
        # Replace the contents of the track
        about_content = about_content[:about_start_idx] + cleaned_slides_html + about_content[about_end_idx:]

with open('../about/about-us.php', 'w', encoding='utf-8') as f:
    f.write(about_content)

print("Slides imported and cleaned!")
