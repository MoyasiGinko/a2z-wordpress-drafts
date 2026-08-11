# -*- coding: utf-8 -*-

with open('../about/about-us.php', 'r', encoding='utf-8') as f:
    content = f.read()

css = """
/* ══════════════════════════════════════════
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

html = """
<!-- ══════════════════════════════════════════
   PROFESSIONAL STANDING STRIP
══════════════════════════════════════════ -->
<section class="prof-standing-strip">
  <div class="prof-standing-inner reveal">
    <span>REGULATED BY THE ACCA</span>
    <span class="dot">&bull;</span>
    <span>PROFESSIONAL INDEMNITY INSURED</span>
    <span class="dot">&bull;</span>
    <span>XERO, QUICKBOOKS AND DEXT CERTIFIED</span>
  </div>
</section>

"""

# Insert CSS before /*  CONTACT CTA */
idx = content.find("/* ══════════════════════════════════════════\n     CONTACT CTA\n  ══════════════════════════════════════════ */")
if idx == -1:
    idx = content.find("/* ══════════════════════════════════════════\n     CONTACT\n  ══════════════════════════════════════════ */")

if idx != -1:
    content = content[:idx] + css + "\n" + content[idx:]
else:
    print("Could not find CSS marker")

# Insert HTML before <section class="contact">
h_idx = content.find('<section class="contact">')
if h_idx != -1:
    content = content[:h_idx] + html + "\n" + content[h_idx:]
else:
    print("Could not find HTML marker")

with open('../about/about-us.php', 'w', encoding='utf-8') as f:
    f.write(content)
print("Strip inserted")
