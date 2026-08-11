import re

def main():
    with open('home.php', 'r', encoding='utf-8') as f:
        content = f.read()

    style_match = re.search(r'<style>(.*?)</style>', content, re.DOTALL)
    if not style_match:
        print("No style block found")
        return
    css = style_match.group(1)

    patches = {
        ".switching-title": """
            font-family: Playfair Display;
            font-style: SemiBold;
            leading-trim: NONE;
        """,
        ".sc-img-box img": """
            width: 373.3299865722656px;
            angle: 0 deg;
            opacity: 1;
        """,
        ".sc-badge": """
            font-family: Manrope;
            font-style: ExtraBold;
            leading-trim: NONE;
        """,
        ".sc-title": """
            font-family: Playfair Display;
            font-style: ExtraBold;
            leading-trim: NONE;
        """,
        ".sc-desc": """
            font-family: Manrope;
            font-style: SemiBold;
            leading-trim: NONE;
        """,
        ".btn-switching": """
            font-family: Manrope;
            font-style: ExtraBold;
            leading-trim: NONE;
            text-align: center;
            vertical-align: middle;
            padding-top: 16px;
            padding-right: 40px;
            padding-bottom: 16px;
            padding-left: 40px;
            background: #D4A84F;
        """,
        ".section-title": """
            font-family: Playfair Display;
            font-style: Bold;
            leading-trim: NONE;
        """,
        ".hero-card-play": """
            angle: 0 deg;
            opacity: 1;
        """,
        ".hero-card-video img": """
            width: 357.5899963378906px;
            height: 313px;
            angle: 0 deg;
            opacity: 1;
        """,
        ".hero-card-info": """
            width: 536.4000244140625px;
            angle: 0 deg;
            opacity: 1;
        """,
        ".hero-card-quote": """
            font-family: Libre Caslon Text;
            font-style: Italic;
            leading-trim: NONE;
            width: 472.4000244140625px;
            angle: 0 deg;
            opacity: 1;
        """,
        ".hero-card": """
            angle: 0 deg;
            opacity: 1;
        """,
        ".hero-card-eyebrow": """
            font-family: Manrope;
            font-style: ExtraBold;
            leading-trim: NONE;
        """
    }

    new_css = css
    for selector, props in patches.items():
        # find the FIRST occurrence of the selector to inject properties
        # Note: some selectors might be inside media queries, we just find the first normal one.
        pattern = r'((?:\n|^)\s*' + re.escape(selector) + r'\s*\{)'
        match = re.search(pattern, new_css)
        if match:
            # inject properties right after the {
            replacement = match.group(1) + props
            new_css = new_css[:match.start()] + replacement + new_css[match.end():]
        else:
            # If not found, just append it at the end of the CSS
            new_css += f"\n{selector} {{{props}}}\n"

    # Now replace the CSS in the main content
    new_content = content[:style_match.start(1)] + new_css + content[style_match.end(1):]

    with open('home.php', 'w', encoding='utf-8') as f:
        f.write(new_content)
    
    print("Patched home.php successfully!")

if __name__ == "__main__":
    main()
