import re

with open('home.php', 'r', encoding='utf-8') as f:
    home_lines = f.readlines()
css_lines = home_lines[3015:3335]
css_block = "".join(css_lines)

with open('../about/about-us.php', 'r', encoding='utf-8') as f:
    about_content = f.read()

# Replace from .testimonials { to right before /* ------------------------------------------ STORY
css_pattern = re.compile(r'\.testimonials \{.*?(?=/\* [-]+\s*STORY)', re.DOTALL)

new_css = """\.testimonials {
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

""" + css_block + "\n\n"

print("Matches:", len(css_pattern.findall(about_content)))
about_content = css_pattern.sub(new_css.replace('\.testimonials', '.testimonials'), about_content)

with open('../about/about-us.php', 'w', encoding='utf-8') as f:
    f.write(about_content)
