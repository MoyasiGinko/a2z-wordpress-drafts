# -*- coding: utf-8 -*-
import sys

with open('../about/about-us.php', 'r', encoding='utf-8') as f:
    lines = f.readlines()

out = []
skip = False
for line in lines:
    if line.startswith(".testimonials {"):
        out.append(".testimonials {\n")
        out.append("  background: #0b1a2a url('https://a2zaccounting.co.uk/wp-content/uploads/2025/04/hero-bg.jpg') center/cover no-repeat;\n")
        out.append("  padding: clamp(80px, 11vw, 130px) clamp(24px, 5vw, 72px);\n")
        out.append("  position: relative;\n")
        out.append("  overflow: hidden;\n")
        out.append("}\n")
        skip = True
    elif line.startswith("}") and skip:
        skip = False
    elif line.startswith(".testimonials::before {"):
        out.append(".testimonials::before {\n")
        out.append("  content: \"\";\n")
        out.append("  position: absolute;\n")
        out.append("  inset: 0;\n")
        out.append("  background: linear-gradient(135deg, rgba(11, 26, 42, 0.92) 0%, rgba(11, 26, 42, 0.98) 100%);\n")
        out.append("  pointer-events: none;\n")
        out.append("}\n")
        skip = True
    elif not skip:
        out.append(line)

lines = out
out = []
skip = False
in_a2zvt = False
for line in lines:
    if line.startswith(".a2zvt {"):
        out.append(".a2zvt-outer {\n")
        out.append("    position: relative;\n")
        out.append("    max-width: 1320px;\n")
        out.append("    margin: clamp(32px, 5vw, 52px) auto 0;\n")
        out.append("}\n\n")
        out.append(".a2zvt-global-prev,\n.a2zvt-global-next {\n")
        out.append("    position: absolute;\n")
        out.append("    top: 50%;\n")
        out.append("    transform: translateY(-50%);\n")
        out.append("    width: clamp(40px, 4vw, 48px);\n")
        out.append("    height: clamp(40px, 4vw, 48px);\n")
        out.append("    border-radius: 50%;\n")
        out.append("    background: rgba(255, 255, 255, 0.1);\n")
        out.append("    border: 1px solid rgba(255, 255, 255, 0.2);\n")
        out.append("    color: #fff;\n")
        out.append("    display: flex;\n")
        out.append("    align-items: center;\n")
        out.append("    justify-content: center;\n")
        out.append("    cursor: pointer;\n")
        out.append("    z-index: 10;\n")
        out.append("    transition: all 0.3s;\n")
        out.append("}\n\n")
        out.append(".a2zvt-global-prev { left: -60px; }\n")
        out.append(".a2zvt-global-next { right: -60px; }\n")
        out.append(".a2zvt-global-prev:hover,\n.a2zvt-global-next:hover {\n")
        out.append("    background: var(--gold, #d4a84f);\n")
        out.append("    border-color: var(--gold, #d4a84f);\n")
        out.append("    color: #000;\n")
        out.append("}\n\n")
        out.append(".a2zvt {\n")
        out.append("    position: relative;\n")
        out.append("    width: 100%;\n")
        out.append("    overflow: hidden;\n")
        out.append("    padding: 10px 0;\n")
        out.append("}\n")
        skip = True
    elif line.startswith("}") and skip:
        skip = False
    elif line.startswith(".a2zvt__track {"):
        out.append(".a2zvt__track {\n")
        out.append("    display: flex;\n")
        out.append("    gap: 24px;\n")
        out.append("    transition: transform 0.52s cubic-bezier(0.25, 0.46, 0.45, 0.94);\n")
        out.append("    will-change: transform;\n")
        out.append("}\n")
        skip = True
    elif line.startswith(".a2zvt__slide {"):
        out.append(".a2zvt__slide {\n")
        out.append("    flex: 0 0 calc(33.333% - 16px);\n")
        out.append("    display: flex;\n")
        out.append("    flex-direction: column;\n")
        out.append("    background: rgba(10, 28, 52, 0.72);\n")
        out.append("    -webkit-backdrop-filter: blur(22px) saturate(1.5);\n")
        out.append("    backdrop-filter: blur(22px) saturate(1.5);\n")
        out.append("    border: 1px solid rgba(255, 255, 255, 0.11);\n")
        out.append("    border-radius: 20px;\n")
        out.append("    overflow: hidden;\n")
        out.append("    box-shadow: 0 2px 0 0 rgba(255, 255, 255, 0.06) inset, 0 32px 72px rgba(0, 0, 0, 0.3);\n")
        out.append("}\n")
        skip = True
    elif line.startswith(".a2zvt__thumb {"):
        out.append(".a2zvt__thumb {\n")
        out.append("    position: relative;\n")
        out.append("    display: block;\n")
        out.append("    text-decoration: none;\n")
        out.append("    overflow: hidden;\n")
        out.append("    height: 240px;\n")
        out.append("    flex-shrink: 0;\n")
        out.append("}\n")
        skip = True
    elif not skip:
        out.append(line)

lines = out
out = []
skip_mq = False
for line in lines:
    if line.startswith("@media (max-width: 900px) {"):
        out.append("@media (max-width: 1440px) {\n")
        out.append("    .a2zvt-global-prev { left: 0; }\n")
        out.append("    .a2zvt-global-next { right: 0; }\n")
        out.append("    .a2zvt-outer { padding: 0 50px; }\n")
        out.append("}\n\n")
        out.append("@media (max-width: 900px) {\n")
        out.append("    .a2zvt__slide {\n")
        out.append("        flex: 0 0 calc(50% - 12px);\n")
        out.append("    }\n")
        out.append("}\n\n")
        out.append("@media (max-width: 600px) {\n")
        out.append("    .a2zvt__slide {\n")
        out.append("        flex: 0 0 100%;\n")
        out.append("    }\n")
        out.append("    .a2zvt-outer { padding: 0; }\n")
        out.append("    .a2zvt__track { gap: 0; }\n")
        out.append("    .a2zvt-global-prev, .a2zvt-global-next { display: none; }\n")
        out.append("}\n")
        skip_mq = True
    elif skip_mq and line.startswith("}"):
        skip_mq = False
    elif skip_mq:
        pass
    elif line.startswith("@media (max-width: 480px) {"):
        skip_mq = True
    elif not skip_mq:
        out.append(line)

with open('../about/about-us.php', 'w', encoding='utf-8') as f:
    f.writelines(out)
print("CSS Refactored")
