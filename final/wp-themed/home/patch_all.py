import sys
import re

print("Reading home.php")
with open('home.php', 'r', encoding='utf-8') as f:
    home_lines = f.readlines()

css_lines = home_lines[3015:3335]
html_lines = home_lines[3709:3843]
js_lines = home_lines[4786:4825]

css_block = "".join(css_lines)
html_block = "".join(html_lines)
js_block = "".join(js_lines)

print("Reading about-us.php")
with open('../about/about-us.php', 'r', encoding='utf-8') as f:
    about_lines = f.readlines()
    about_content = "".join(about_lines)

print("Replacing CSS")
css_pattern = re.compile(r'/\* ------------------------------------------\s*TESTIMONIALS\s*------------------------------------------ \*/.*?@media \(max-width: 380px\) {\s*\.testimonials {\s*padding-inline: 14px;\s*}\s*}', re.DOTALL)
new_css = """/* ------------------------------------------
     TESTIMONIALS (Dark Themed Video Slider)
  ------------------------------------------ */
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
about_content = css_pattern.sub(new_css, about_content)

print("Replacing HTML")
html_pattern = re.compile(r'<div class="testimonials-grid">.*?</section>', re.DOTALL)
new_html = html_block + "\n  </div>\n</section>"
about_content = html_pattern.sub(new_html, about_content)

print("Inserting JS")
if "/* --- a2zvt hero testimonials slider --- */" not in about_content:
    js_pattern = re.compile(r'// Metric count-up animation')
    about_content = js_pattern.sub(js_block + "\n\n// Metric count-up animation", about_content)

print("Writing about-us.php")
with open('../about/about-us.php', 'w', encoding='utf-8') as f:
    f.write(about_content)
print("Done")
