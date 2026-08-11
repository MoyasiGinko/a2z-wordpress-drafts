import sys
import re

# 1. Read home.php
with open('home.php', 'r', encoding='utf-8') as f:
    home_lines = f.readlines()

css_lines = home_lines[3015:3335]
html_lines = home_lines[3709:3843]
js_lines = home_lines[4786:4825]

css_block = "".join(css_lines)
html_block = "".join(html_lines)
js_block = "".join(js_lines)

# 2. Read about-us.php
with open('../about/about-us.php', 'r', encoding='utf-8') as f:
    about_content = f.read()

# 3. CSS Replace
css_pattern = re.compile(r'/\* ---------------------------------------\s*TESTIMONIALS\s*--------------------------------------- \*/.*?@media \(max-width: 380px\) {\s*\.testimonials {\s*padding-inline: 14px;\s*}\s*}', re.DOTALL)

new_testimonials_css = """/* ---------------------------------------
   TESTIMONIALS (Dark Themed Video Slider)
--------------------------------------- */
.testimonials {
  background: #0b1a2a;
  padding: clamp(80px, 11vw, 130px) clamp(24px, 5vw, 72px);
  position: relative;
  overflow: hidden;
}

.testimonials::before {
  content: "";
  position: absolute;
  inset: 0;
  background: radial-gradient(ellipse at 100% 0%, rgba(212, 168, 79, 0.05) 0%, transparent 55%);
  pointer-events: none;
}

.testimonials-inner {
  max-width: 1320px;
  margin: 0 auto;
  position: relative;
  z-index: 1;
}

.testimonials-head {
  display: grid;
  grid-template-columns: 1fr;
  gap: clamp(40px, 6vw, 80px);
  align-items: end;
  margin-bottom: clamp(20px, 2.5vw, 28px);
}

.testimonials-head h2 {
  font-family: var(--serif);
  font-weight: 300;
  font-size: clamp(2.2rem, 3.5vw, 3.2rem);
  line-height: 1.08;
  letter-spacing: -0.02em;
  color: #fff;
}

.testimonials-head h2 em {
  font-style: normal;
  color: var(--gold);
}

""" + css_block

print("CSS matches:", len(css_pattern.findall(about_content)))
about_content = css_pattern.sub(new_testimonials_css, about_content)

# 4. HTML Replace
html_pattern = re.compile(r'<div class="testimonials-grid">.*?</section>', re.DOTALL)
print("HTML matches:", len(html_pattern.findall(about_content)))

new_html = html_block + """
  </div>
</section>"""
about_content = html_pattern.sub(new_html, about_content)

# 5. JS Replace
if "/* --- a2zvt hero testimonials slider --- */" not in about_content:
    js_to_insert = js_block + "\n"
    # Find the last </script> tag
    js_insert_pattern = re.compile(r'(</script>\s*</body>\s*</html>)', re.IGNORECASE)
    print("JS matches:", len(js_insert_pattern.findall(about_content)))
    about_content = js_insert_pattern.sub(lambda m: js_to_insert + m.group(1), about_content)

with open('../about/about-us.php', 'w', encoding='utf-8') as f:
    f.write(about_content)

print("Done patching about-us.php")
