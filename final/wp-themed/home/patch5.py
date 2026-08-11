with open('home.php', 'r', encoding='utf-8') as f:
    home_lines = f.readlines()
css_lines = home_lines[3015:3335]

with open('../about/about-us.php', 'r', encoding='utf-8') as f:
    about_lines = f.readlines()

start_idx = -1
end_idx = -1

for i, line in enumerate(about_lines):
    if line.startswith(".testimonials {"):
        start_idx = i
    if line.startswith(".story {"):
        # Go up a few lines to find the comment
        end_idx = i - 3
        break

print(f"Start: {start_idx}, End: {end_idx}")

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

if start_idx != -1 and end_idx != -1:
    about_lines[start_idx:end_idx] = new_css

with open('../about/about-us.php', 'w', encoding='utf-8') as f:
    f.writelines(about_lines)
