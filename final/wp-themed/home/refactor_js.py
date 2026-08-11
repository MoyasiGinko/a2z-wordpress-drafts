# -*- coding: utf-8 -*-
import sys

with open('../about/about-us.php', 'r', encoding='utf-8') as f:
    lines = f.readlines()

out = []
skip = False
for line in lines:
    if "/* ─── a2zvt hero testimonials slider ─── */" in line or "/*  a2zvt hero testimonials slider  */" in line:
        out.append("    /* ─── a2zvt hero testimonials slider (3-column) ─── */\n")
        out.append("    (function() {\n")
        out.append("        var slider = document.getElementById('a2zvt');\n")
        out.append("        if (!slider) return;\n")
        out.append("        var track = document.getElementById('a2zvt-track');\n")
        out.append("        var slides = track.querySelectorAll('.a2zvt__slide');\n")
        out.append("        var prevBtn = document.querySelector('.a2zvt-global-prev');\n")
        out.append("        var nextBtn = document.querySelector('.a2zvt-global-next');\n")
        out.append("        var total = slides.length;\n")
        out.append("        var cur = 0;\n")
        out.append("        var busy = false;\n\n")
        out.append("        function getVisibleCount() {\n")
        out.append("            if (window.innerWidth <= 600) return 1;\n")
        out.append("            if (window.innerWidth <= 900) return 2;\n")
        out.append("            return 3;\n")
        out.append("        }\n\n")
        out.append("        function goTo(n) {\n")
        out.append("            if (busy) return;\n")
        out.append("            busy = true;\n")
        out.append("            var visible = getVisibleCount();\n")
        out.append("            var maxIndex = total - visible;\n")
        out.append("            if (maxIndex < 0) maxIndex = 0;\n\n")
        out.append("            if (n < 0) cur = maxIndex;\n")
        out.append("            else if (n > maxIndex) cur = 0;\n")
        out.append("            else cur = n;\n\n")
        out.append("            var slideWidth = slides[0].offsetWidth;\n")
        out.append("            var gap = 24;\n")
        out.append("            if (window.innerWidth <= 600) gap = 0;\n\n")
        out.append("            var move = cur * (slideWidth + gap);\n")
        out.append("            track.style.transform = 'translate3d(-' + move + 'px, 0, 0)';\n\n")
        out.append("            setTimeout(function() {\n")
        out.append("                busy = false;\n")
        out.append("            }, 560);\n")
        out.append("        }\n\n")
        out.append("        if (prevBtn) prevBtn.addEventListener('click', function(e) { e.preventDefault(); goTo(cur - 1); });\n")
        out.append("        if (nextBtn) nextBtn.addEventListener('click', function(e) { e.preventDefault(); goTo(cur + 1); });\n\n")
        out.append("        var timer = setInterval(function() {\n")
        out.append("            goTo(cur + 1);\n")
        out.append("        }, 6000);\n\n")
        out.append("        var outer = document.querySelector('.a2zvt-outer');\n")
        out.append("        if (outer) {\n")
        out.append("            outer.addEventListener('pointerenter', function() { clearInterval(timer); });\n")
        out.append("            outer.addEventListener('pointerleave', function() {\n")
        out.append("                timer = setInterval(function() { goTo(cur + 1); }, 6000);\n")
        out.append("            });\n")
        out.append("        }\n\n")
        out.append("        window.addEventListener('resize', function() {\n")
        out.append("            goTo(cur);\n")
        out.append("        });\n")
        out.append("    })();\n")
        skip = True
    elif line.strip() == "})();" and skip:
        skip = False
    elif not skip:
        out.append(line)

with open('../about/about-us.php', 'w', encoding='utf-8') as f:
    f.writelines(out)
print("JS Refactored")
