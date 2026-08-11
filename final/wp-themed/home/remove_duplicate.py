# -*- coding: utf-8 -*-
with open('../about/about-us.php', 'r', encoding='utf-8') as f:
    content = f.read()

# Find the exact duplicate string
html = """<!-- ══════════════════════════════════════════
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
</section>"""

# Replace the first instance with empty string (or just replace 2 instances with 1)
count = content.count('<section class="prof-standing-strip">')
if count > 1:
    import re
    # We can just do string replace with count=1
    # But wait, there might be slight whitespace differences because of \n
    pattern = re.compile(r'<!-- ══════════════════════════════════════════\n   PROFESSIONAL STANDING STRIP\n══════════════════════════════════════════ -->\n<section class="prof-standing-strip">\n  <div class="prof-standing-inner reveal">\n    <span>REGULATED BY THE ACCA</span>\n    <span class="dot">&bull;</span>\n    <span>PROFESSIONAL INDEMNITY INSURED</span>\n    <span class="dot">&bull;</span>\n    <span>XERO, QUICKBOOKS AND DEXT CERTIFIED</span>\n  </div>\n</section>\n+', re.DOTALL)
    
    # Let's just remove the first one manually using find
    idx1 = content.find('<section class="prof-standing-strip">')
    
    # We want to remove the whole block.
    # The block starts at the comment.
    comment = "<!-- ══════════════════════════════════════════\n   PROFESSIONAL STANDING STRIP\n══════════════════════════════════════════ -->"
    start_idx = content.find(comment)
    
    # Find the end of the block
    end_idx = content.find('</section>', start_idx) + 10
    
    # Replace
    content = content[:start_idx] + content[end_idx:]
    
    with open('../about/about-us.php', 'w', encoding='utf-8') as f:
        f.write(content)
    print("Duplicate removed")
else:
    print("No duplicates found")
