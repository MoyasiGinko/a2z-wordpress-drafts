import sys

# 1. Read home.php to get a2zvt CSS and JS
with open('home.php', 'r', encoding='utf-8') as f:
    home_lines = f.readlines()

css_lines = home_lines[3019:3314] # from .a2zvt to end of @media (max-width: 900px) }
js_lines = home_lines[4786:4825]  # from /* --- a2zvt hero testimonials slider --- */ to end

# 2. Read about-us.php
with open('../about/about-us.php', 'r', encoding='utf-8') as f:
    about_lines = f.readlines()

# 3. Replace CSS in about-us.php (Lines 711 to 913)
# The CSS is roughly from ".testimonials {" up to "@media (max-width: 380px) { ... }"
start_idx = -1
end_idx = -1
for i, line in enumerate(about_lines):
    if line.strip() == ".testimonials {":
        start_idx = i
    if start_idx != -1 and "@media (max-width: 380px) {" in line:
        end_idx = i + 4
        break

if start_idx != -1 and end_idx != -1:
    new_css = [
        ".testimonials {\n",
        "  background: #0b1a2a;\n",
        "  padding: clamp(80px, 11vw, 130px) clamp(24px, 5vw, 72px);\n",
        "  position: relative;\n",
        "  overflow: hidden;\n",
        "}\n\n",
        ".testimonials::before {\n",
        "  content: \"\";\n",
        "  position: absolute;\n",
        "  inset: 0;\n",
        "  background: radial-gradient(ellipse at 100% 0%, rgba(212, 168, 79, 0.05) 0%, transparent 55%);\n",
        "  pointer-events: none;\n",
        "}\n\n",
        ".testimonials-inner {\n",
        "  max-width: 1320px;\n",
        "  margin: 0 auto;\n",
        "  position: relative;\n",
        "  z-index: 1;\n",
        "}\n\n",
        ".testimonials-head {\n",
        "  display: grid;\n",
        "  grid-template-columns: 1fr;\n",
        "  gap: clamp(40px, 6vw, 80px);\n",
        "  align-items: end;\n",
        "  margin-bottom: clamp(20px, 2.5vw, 28px);\n",
        "}\n\n",
        ".testimonials-head h2 {\n",
        "  font-family: var(--serif);\n",
        "  font-weight: 300;\n",
        "  font-size: clamp(2.2rem, 3.5vw, 3.2rem);\n",
        "  line-height: 1.08;\n",
        "  letter-spacing: -0.02em;\n",
        "  color: #fff;\n",
        "}\n\n",
        ".testimonials-head h2 em {\n",
        "  font-style: normal;\n",
        "  color: var(--gold);\n",
        "}\n\n"
    ]
    new_css.extend(css_lines)
    new_css.append("\n\n")
    
    about_lines[start_idx:end_idx] = new_css
    print("Replaced CSS successfully")

# 4. Insert JS before closing script tag
js_insert_idx = -1
for i, line in enumerate(about_lines):
    if "/* FAQ accordion */" in line:
        js_insert_idx = i
        break
        
if js_insert_idx != -1:
    about_lines.insert(js_insert_idx, "".join(js_lines) + "\n\n")
    print("Inserted JS successfully")

with open('../about/about-us.php', 'w', encoding='utf-8') as f:
    f.writelines(about_lines)

print("Done patching CSS and JS")
