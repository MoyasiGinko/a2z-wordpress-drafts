# -*- coding: utf-8 -*-

with open('../about/about-us.php', 'r', encoding='utf-8') as f:
    about_lines = f.readlines()

css = """/* ══════════════════════════════════════════
     PROFESSIONAL STANDING STRIP
  ══════════════════════════════════════════ */
.prof-standing-strip {
  background: var(--bg);
  padding: 28px 0;
  display: flex;
  justify-content: center;
  align-items: center;
  border-bottom: 1px solid rgba(0,0,0,0.05);
}

.prof-standing-inner {
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  justify-content: center;
  column-gap: clamp(16px, 3vw, 40px);
  row-gap: 12px;
  max-width: 1320px;
  padding: 0 24px;
}

.prof-standing-strip span {
  font-family: "Plus Jakarta Sans", system-ui, sans-serif;
  font-size: clamp(0.75rem, 1.5vw, 0.85rem);
  font-weight: 700;
  letter-spacing: 0.12em;
  color: #3b4252;
  text-transform: uppercase;
}

.prof-standing-strip .dot {
  color: var(--gold);
  font-size: 1.2rem;
  line-height: 0.8;
}

"""

for i, line in enumerate(about_lines):
    if line.startswith(".contact {"):
        about_lines.insert(i, css)
        break

with open('../about/about-us.php', 'w', encoding='utf-8') as f:
    f.writelines(about_lines)
print("CSS Inserted successfully")
