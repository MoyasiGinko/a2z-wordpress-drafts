import re

with open('../about/about-us.php', 'r', encoding='utf-8') as f:
    content = f.read()

# 1. Update .testimonials CSS
testimonials_css = r"""\.testimonials \{
  background: #0b1a2a;
  padding: clamp\(80px, 11vw, 130px\) clamp\(24px, 5vw, 72px\);
  position: relative;
  overflow: hidden;
\}

\.testimonials::before \{
  content: "";
  position: absolute;
  inset: 0;
  background: radial-gradient\(ellipse at 100% 0%, rgba\(212, 168, 79, 0\.05\) 0%, transparent 55%\);
  pointer-events: none;
\}"""

new_testimonials_css = """.testimonials {
  background: #0b1a2a url('https://a2zaccounting.co.uk/wp-content/uploads/2025/04/hero-bg.jpg') center/cover no-repeat;
  padding: clamp(80px, 11vw, 130px) clamp(24px, 5vw, 72px);
  position: relative;
  overflow: hidden;
}

.testimonials::before {
  content: "";
  position: absolute;
  inset: 0;
  background: linear-gradient(135deg, rgba(11, 26, 42, 0.92) 0%, rgba(11, 26, 42, 0.98) 100%);
  pointer-events: none;
}"""
content = re.sub(testimonials_css, new_testimonials_css, content)

# 2. Update .a2zvt CSS
old_a2zvt_css = r"""\.a2zvt \{
    position: relative;
    width: 100%;
    min-width: 0;
    max-width: 900px;
    margin: clamp\(32px, 5vw, 52px\) auto 0;
    border-radius: 20px;
    overflow: hidden;
    background: rgba\(10, 28, 52, 0\.72\);
    -webkit-backdrop-filter: blur\(22px\) saturate\(1\.5\);
    backdrop-filter: blur\(22px\) saturate\(1\.5\);
    border: 1px solid rgba\(255, 255, 255, 0\.11\);
    box-shadow: 0 2px 0 0 rgba\(255, 255, 255, 0\.06\) inset, 0 32px 72px rgba\(0, 0, 0, 0\.3\);
\}

\.a2zvt__track \{
    display: flex;
    transition: transform 0\.52s cubic-bezier\(0\.25, 0\.46, 0\.45, 0\.94\);
    will-change: transform;
    align-items: stretch;
\}

\.a2zvt__slide \{
    min-width: 100%;
    display: grid;
    grid-template-columns: 1fr 1fr;
    align-items: stretch;
\}

/\* Left: video thumbnail fills grid cell height \*/
\.a2zvt__thumb \{
    position: relative;
    display: block;
    text-decoration: none;
    overflow: hidden;
    height: 380px;
\}"""

new_a2zvt_css = """.a2zvt-outer {
    position: relative;
    max-width: 1320px;
    margin: clamp(32px, 5vw, 52px) auto 0;
}

.a2zvt-global-prev,
.a2zvt-global-next {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    width: clamp(40px, 4vw, 48px);
    height: clamp(40px, 4vw, 48px);
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.1);
    border: 1px solid rgba(255, 255, 255, 0.2);
    color: #fff;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    z-index: 10;
    transition: all 0.3s;
}

.a2zvt-global-prev { left: -60px; }
.a2zvt-global-next { right: -60px; }

.a2zvt-global-prev:hover,
.a2zvt-global-next:hover {
    background: var(--gold, #d4a84f);
    border-color: var(--gold, #d4a84f);
    color: #000;
}

.a2zvt {
    position: relative;
    width: 100%;
    overflow: hidden;
    padding: 10px 0;
}

.a2zvt__track {
    display: flex;
    gap: 24px;
    transition: transform 0.52s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    will-change: transform;
}

.a2zvt__slide {
    flex: 0 0 calc(33.333% - 16px);
    display: flex;
    flex-direction: column;
    background: rgba(10, 28, 52, 0.72);
    -webkit-backdrop-filter: blur(22px) saturate(1.5);
    backdrop-filter: blur(22px) saturate(1.5);
    border: 1px solid rgba(255, 255, 255, 0.11);
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 2px 0 0 rgba(255, 255, 255, 0.06) inset, 0 32px 72px rgba(0, 0, 0, 0.3);
}

/* Video thumbnail top */
.a2zvt__thumb {
    position: relative;
    display: block;
    text-decoration: none;
    overflow: hidden;
    height: 240px;
    flex-shrink: 0;
}"""
content = re.sub(old_a2zvt_css, new_a2zvt_css, content)

# 3. Update media queries for 3 cards
old_mq = r"""@media \(max-width: 900px\) \{
    \.a2zvt \{
        border-radius: 16px;
    \}

    \.a2zvt__slide \{
        grid-template-columns: 1fr;
    \}

    \.a2zvt__thumb \{
        height: auto;
        aspect-ratio: 16/9;
    \}

    \.a2zvt__body \{
        border-left: none;
        border-top: 1px solid rgba\(255, 255, 255, 0\.07\);
    \}
\}

/\* ----------------------------------------------------
   HERO — small-screen refinements.
   The hero's base rules above are now fully fluid \(clamp\),
   so the layout scales continuously at every width. These
   rules only handle the few things fluid sizing can't:
   stacking the CTAs and de-cramping the slider on phones.
   Scoped to hero classes — nothing else is affected.
---------------------------------------------------- \*/

/\* Phones — let the testimonial card controls wrap on very narrow
   screens. The CTA buttons stay content-width and centered via the
   768px rule above, and their padding/font are fluid \(clamp\)\. \*/
@media \(max-width: 480px\) \{
    \.a2zvt__controls \{
        flex-wrap: wrap;
    \}
\}"""

new_mq = """@media (max-width: 1440px) {
    .a2zvt-global-prev { left: 0; }
    .a2zvt-global-next { right: 0; }
    .a2zvt-outer { padding: 0 50px; }
}

@media (max-width: 900px) {
    .a2zvt__slide {
        flex: 0 0 calc(50% - 12px);
    }
}

@media (max-width: 600px) {
    .a2zvt__slide {
        flex: 0 0 100%;
    }
    .a2zvt-outer { padding: 0; }
    .a2zvt-global-prev,
    .a2zvt-global-next {
        display: none; /* Hide global arrows on mobile, rely on swipe if implemented, or just show arrows inside? Let's keep them but position them differently */
    }
}
"""
content = re.sub(old_mq, new_mq, content)

# 4. Modify HTML
# Find the start of the slider
# <div class="a2zvt a2zh-rv a2zh-d3" id="a2zvt">
html_start = '<div class="a2zvt a2zh-rv a2zh-d3" id="a2zvt">'
new_html_start = """<div class="a2zvt-outer">
                    <button class="a2zvt-global-prev" aria-label="Previous">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="15 18 9 12 15 6"></polyline></svg>
                    </button>
                    <button class="a2zvt-global-next" aria-label="Next">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </button>
                    <div class="a2zvt a2zh-rv a2zh-d3" id="a2zvt">"""

content = content.replace(html_start, new_html_start)

# Add closing div for a2zvt-outer
# Find the end of <div class="a2zvt a2zh-rv a2zh-d3" id="a2zvt">
# It ends right before "</div>\n  </div>\n</section>"
content = content.replace('</div>\n  </div>\n</section>', '</div>\n</div>\n  </div>\n</section>')

# Remove .a2zvt__controls from all slides
import re
controls_pattern = re.compile(r'<div class="a2zvt__divider"></div>\s*<div class="a2zvt__controls">.*?</div>\s*</div>', re.DOTALL)
content = controls_pattern.sub('', content)

# 5. Replace JS
js_old = r"""    /\* --- a2zvt hero testimonials slider --- \*/
    \(function\(\) \{
        var slider = document\.getElementById\('a2zvt'\);
        if \(!slider\) return;
        var track = document\.getElementById\('a2zvt-track'\);
        var slides = track\.querySelectorAll\('\.a2zvt__slide'\);
        var total = slides\.length;
        var cur = 0;
        var busy = false;

        function goTo\(n\) \{
            if \(busy\) return;
            busy = true;
            cur = \(\(n % total\) \+ total\) % total;
            track\.style\.transform = 'translateX\(-' \+ \(cur \* 100\) \+ '%\)';
            setTimeout\(function\(\) \{
                busy = false;
            \}, 560\);
        \}

        slider\.addEventListener\('click', function\(e\) \{
            var b = e\.target\.closest\('\.a2zvt-prev, \.a2zvt-next'\);
            if \(!b\) return;
            e\.preventDefault\(\);
            goTo\(b\.classList\.contains\('a2zvt-next'\) \? cur \+ 1 : cur - 1\);
        \}\);

        var timer = setInterval\(function\(\) \{
            goTo\(cur \+ 1\);
        \}, 6000\);
        slider\.addEventListener\('pointerenter', function\(\) \{
            clearInterval\(timer\);
        \}\);
        slider\.addEventListener\('pointerleave', function\(\) \{
            timer = setInterval\(function\(\) \{
                goTo\(cur \+ 1\);
            \}, 6000\);
        \}\);
    \}\)\(\);"""

js_new = """    /* --- a2zvt hero testimonials slider (3-column) --- */
    (function() {
        var slider = document.getElementById('a2zvt');
        if (!slider) return;
        var track = document.getElementById('a2zvt-track');
        var slides = track.querySelectorAll('.a2zvt__slide');
        var prevBtn = document.querySelector('.a2zvt-global-prev');
        var nextBtn = document.querySelector('.a2zvt-global-next');
        var total = slides.length;
        var cur = 0;
        var busy = false;

        function getVisibleCount() {
            if (window.innerWidth <= 600) return 1;
            if (window.innerWidth <= 900) return 2;
            return 3;
        }

        function goTo(n) {
            if (busy) return;
            busy = true;
            var visible = getVisibleCount();
            var maxIndex = total - visible;
            if (maxIndex < 0) maxIndex = 0;
            
            // Handle looping
            if (n < 0) cur = maxIndex;
            else if (n > maxIndex) cur = 0;
            else cur = n;
            
            var slideWidth = slides[0].offsetWidth;
            var gap = 24; // from CSS
            if (window.innerWidth <= 600) gap = 0;
            
            var move = cur * (slideWidth + gap);
            track.style.transform = 'translateX(-' + move + 'px)';
            
            setTimeout(function() {
                busy = false;
            }, 560);
        }

        if (prevBtn) prevBtn.addEventListener('click', function(e) { e.preventDefault(); goTo(cur - 1); });
        if (nextBtn) nextBtn.addEventListener('click', function(e) { e.preventDefault(); goTo(cur + 1); });

        var timer = setInterval(function() {
            goTo(cur + 1);
        }, 6000);
        
        var outer = document.querySelector('.a2zvt-outer');
        if (outer) {
            outer.addEventListener('pointerenter', function() { clearInterval(timer); });
            outer.addEventListener('pointerleave', function() {
                timer = setInterval(function() { goTo(cur + 1); }, 6000);
            });
        }
        
        window.addEventListener('resize', function() {
            goTo(cur); // recalculate width
        });
    })();"""

content = re.sub(js_old, js_new, content)

with open('../about/about-us.php', 'w', encoding='utf-8') as f:
    f.write(content)
print("Done")
