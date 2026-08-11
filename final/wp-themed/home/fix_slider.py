# -*- coding: utf-8 -*-
import sys

with open('../about/about-us.php', 'r', encoding='utf-8') as f:
    content = f.read()

# 1. Fix Background Image
content = content.replace("background: #0b1a2a url('https://a2zaccounting.co.uk/wp-content/uploads/2025/04/hero-bg.jpg') center/cover no-repeat;", 
                          "background: #0b1a2a url('https://images.unsplash.com/photo-1448630360428-65456885c650?auto=format&fit=crop&w=1600&q=80') center/cover no-repeat;")

# 2. Fix JS block to wrap in DOMContentLoaded
old_js_start = """    /* ─── a2zvt hero testimonials slider (3-column) ─── */
    (function() {"""

new_js_start = """    /* ─── a2zvt hero testimonials slider (3-column) ─── */
    document.addEventListener('DOMContentLoaded', function() {"""

content = content.replace(old_js_start, new_js_start)

# 3. Modify CSS for symmetrical author block
import re
author_css = r"""\.a2zvt__author \{
    display: flex;
    align-items: center;
    gap: clamp\(10px, 2\.4vw, 13px\);
    margin-top: auto;
    margin-bottom: clamp\(16px, 3\.5vw, 28px\);
\}"""

new_author_css = """.a2zvt__author {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
    gap: clamp(10px, 2.4vw, 13px);
    margin-top: auto;
    margin-bottom: clamp(16px, 3.5vw, 28px);
}"""
content = re.sub(author_css, new_author_css, content)

name_css = r"""\.a2zvt__name \{
    font-family: "Plus Jakarta Sans", system-ui, sans-serif;
    font-size: clamp\(0\.82rem, 2\.2vw, 0\.9rem\);
    font-weight: 700;
    color: #ffffff;
    line-height: 1\.25;
    text-align: left;
\}"""

new_name_css = """.a2zvt__name {
    font-family: "Plus Jakarta Sans", system-ui, sans-serif;
    font-size: clamp(0.82rem, 2.2vw, 0.9rem);
    font-weight: 700;
    color: #ffffff;
    line-height: 1.25;
    text-align: center;
}"""
content = re.sub(name_css, new_name_css, content)

role_css = r"""\.a2zvt__role \{
    font-family: "Plus Jakarta Sans", system-ui, sans-serif;
    font-size: clamp\(0\.85rem, 1\.9vw, 0\.95rem\);
    font-weight: 500;
    color: rgba\(255, 255, 255, 0\.85\);
    line-height: 1\.4;
    margin-top: 2px;
    text-align: left;
\}"""

new_role_css = """.a2zvt__role {
    font-family: "Plus Jakarta Sans", system-ui, sans-serif;
    font-size: clamp(0.85rem, 1.9vw, 0.95rem);
    font-weight: 500;
    color: rgba(255, 255, 255, 0.85);
    line-height: 1.4;
    margin-top: 2px;
    text-align: center;
}"""
content = re.sub(role_css, new_role_css, content)

with open('../about/about-us.php', 'w', encoding='utf-8') as f:
    f.write(content)
print("Fix applied")
