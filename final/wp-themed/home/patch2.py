import sys

with open('home.php', 'r', encoding='utf-8') as f:
    home_lines = f.readlines()

css_lines = home_lines[3015:3335]
js_lines = home_lines[4786:4825]

css_block = "".join(css_lines)
js_block = "".join(js_lines)

with open('../about/about-us.php', 'r', encoding='utf-8') as f:
    about_lines = f.readlines()

# find css block
start_css = -1
end_css = -1
for i, line in enumerate(about_lines):
    if "/* ---------------------------------------" in line and "TESTIMONIALS" in about_lines[i+1]:
        start_css = i
    if start_css != -1 and i > start_css and "@media (max-width: 380px) {" in line:
        # find closing brace for this media query
        end_css = i + 4
        break

if start_css != -1 and end_css != -1:
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

""" + css_block + "\n"
    about_lines[start_css:end_css] = [new_testimonials_css]
    print(f"Replaced CSS from {start_css} to {end_css}")

# find js insert location
js_insert = -1
for i, line in enumerate(about_lines):
    if "/* FAQ accordion */" in line:
        js_insert = i
        break

if js_insert != -1:
    about_lines.insert(js_insert, js_block + "\n\n")
    print(f"Inserted JS at {js_insert}")

with open('../about/about-us.php', 'w', encoding='utf-8') as f:
    f.write("".join(about_lines))

print("Done patching about-us.php")
