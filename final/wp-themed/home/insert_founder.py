# -*- coding: utf-8 -*-
with open('../about/about-us.php', 'r', encoding='utf-8') as f:
    content = f.read()

html = """
<!-- ═══════════════════════════════════════
   FOUNDER MESSAGE
═══════════════════════════════════════ -->
<section class="founder-message" style="background: #ffffff; padding: clamp(80px, 10vw, 120px) clamp(24px, 5vw, 72px);">
  <div class="founder-message-inner" style="max-width: 860px; margin: 0 auto;">
    
    <span class="label reveal" style="display: block; margin-bottom: 40px; color: var(--gold); letter-spacing: 0.15em; font-size: 0.85rem; font-weight: 700; text-transform: uppercase; background: none; border: none; padding: 0;">
      A Message From Our Founder
    </span>

    <div class="founder-prose reveal d1" style="color: var(--ink); font-size: clamp(1.05rem, 1.3vw, 1.15rem); line-height: 1.8; font-weight: 400; display: flex; flex-direction: column; gap: 24px;">
      <p>I spent the early part of my career in corporate finance at a multibillion-pound oil and gas operator, where the accounts were audited to Big 4 standards by Deloitte and EY. That environment leaves no room for guesswork. It runs on precise systems, documented process, and discipline applied to every number. Those are the habits I built A2Z on.</p>
      
      <p>Beyond that world, I kept seeing the same thing. Growing businesses, ambitious and capable, were being underserved by accountants who treated compliance as a box to tick. Owners worn down by disorganised records, fees that appeared from nowhere, HMRC letters, and an advisor who saw the figures but never the business behind them.</p>

      <p>So I built A2Z differently. Specialist teams instead of one stretched generalist, layered quality control, and a senior review on every engagement before it reaches you. Proactive, accountable, and held to the standard I learned at corporate level.</p>

      <p>Tax is where most growing businesses quietly overpay. We plan it months ahead of every deadline, claim the reliefs you are entitled to, and structure your profits and income so the saving is captured while the window is still open, not calculated once it has closed.</p>

      <p>I oversee the standard on every client myself. It is why 99% of our growth comes by referral, and when a client puts their own name behind a recommendation, we earn it on every engagement.</p>
    </div>

    <div class="founder-callout reveal d2" style="margin-top: 60px; padding-top: 40px; border-top: 1px solid rgba(0,0,0,0.1);">
      <h3 style="font-family: 'Cormorant Garamond', serif; font-size: clamp(2rem, 3.5vw, 2.6rem); line-height: 1.3; font-weight: 500; color: var(--ink); margin: 0; font-style: italic;">
        We did not set out to build another accounting firm. We built the <span style="color: var(--gold);">finance function</span> growing businesses deserve, and could rarely access until now.
      </h3>
    </div>

  </div>
</section>

"""

idx = content.find("<!-- ═══════════════════════════════════════\n   DEDICATED TEAM PULL-QUOTE")
if idx != -1:
    content = content[:idx] + html + content[idx:]
    with open('../about/about-us.php', 'w', encoding='utf-8') as f:
        f.write(content)
    print("Inserted successfully")
else:
    print("Marker not found")
