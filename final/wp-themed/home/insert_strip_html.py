# -*- coding: utf-8 -*-

with open('../about/about-us.php', 'r', encoding='utf-8') as f:
    about_lines = f.readlines()

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

for i, line in enumerate(about_lines):
    if line.startswith('<section class="contact">'):
        about_lines.insert(i, html)
        break

with open('../about/about-us.php', 'w', encoding='utf-8') as f:
    f.writelines(about_lines)
print("HTML Inserted successfully")
