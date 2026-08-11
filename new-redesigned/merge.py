import re

def main():
    with open('e:/Github/Clients/Truedge/accounting-wordpress/new-redesigned/new-home.html', 'r', encoding='utf-8') as f:
        new_home_content = f.read()
    
    with open('e:/Github/Clients/Truedge/accounting-wordpress/new-redesigned/home.php', 'r', encoding='utf-8') as f:
        home_php_content = f.read()

    # 1. Extract from new-home.html
    style_match = re.search(r'<style>(.*?)</style>', new_home_content, re.DOTALL)
    if not style_match:
        print("Could not find <style> in new-home.html")
        return
    css_content = style_match.group(1)

    # Scoping generic CSS selectors
    css_content = css_content.replace('body {', '.a2z-new-home-wrapper {')
    css_content = css_content.replace('\na {', '\n.a2z-new-home-wrapper a {')
    css_content = css_content.replace('\nbutton {', '\n.a2z-new-home-wrapper button {')
    css_content = css_content.replace('\nimg {', '\n.a2z-new-home-wrapper img {')
    
    # Extract body content (between <body> and </body>, excluding the script tag at the bottom)
    body_match = re.search(r'<body>(.*?)<script>', new_home_content, re.DOTALL)
    if not body_match:
        print("Could not find <body> in new-home.html")
        return
    body_content = body_match.group(1).strip()
    
    # Wire buttons
    body_content = body_content.replace(
        'href="#contact" class="btn btn-solid"',
        'href="javascript:void(0)" class="btn btn-solid" data-bs-toggle="modal" data-bs-target="#enquireModal" data-source="Start Your Enquiry"'
    )
    body_content = body_content.replace(
        'href="#contact" class="pg-btn"',
        'href="javascript:void(0)" class="pg-btn" data-bs-toggle="modal" data-bs-target="#gitModal" data-source="Get a fee estimate"'
    )
    body_content = body_content.replace(
        'href="#contact" class="btn-switching"',
        'href="javascript:void(0)" class="btn-switching" data-bs-toggle="modal" data-bs-target="#enquireModal" data-source="Switching"'
    )

    # Wrap body content
    html_content = f'<div class="a2z-new-home-wrapper">\n{body_content}\n</div>'

    # Extract script
    script_match = re.search(r'(<script>.*?</script>)\s*</body>', new_home_content, re.DOTALL)
    if not script_match:
        print("Could not find <script> in new-home.html")
        return
    script_content = script_match.group(1)

    # 2. Modify home.php
    
    # Find the boundary for the end of PHP header/start of old HTML
    header_split_match = re.search(r'(\$switch_steps = \[.*?\];\n\?>)', home_php_content, re.DOTALL)
    if not header_split_match:
        print("Could not find header PHP end block.")
        return
    header_end_idx = header_split_match.end()

    # Find the boundary for the start of the ACF Modal logic
    acf_logic_match = re.search(r'(<\?php\s*// Fetch fixed ACF fields)', home_php_content)
    if not acf_logic_match:
        print("Could not find ACF Modal logic start.")
        return
    old_html_end_idx = acf_logic_match.start()

    # Find get_footer() to insert script before it
    footer_match = re.search(r'(<\?php\s*get_footer\(\);\s*\?>)', home_php_content)
    if not footer_match:
        print("Could not find get_footer().")
        return
    
    part1 = home_php_content[:header_end_idx]
    
    # Fonts from original home.php that we might want to keep, or just use new-home.html fonts
    new_fonts = """
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&family=Libre+Caslon+Text:ital,wght@0,400;0,700;1,400&family=Plus+Jakarta+Sans:wght@400;500;600;700&family=Hanken+Grotesk:wght@400;500;600;700;800&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
"""
    
    combined_middle = f"\n{new_fonts}\n<style>\n{css_content}\n</style>\n\n{html_content}\n\n"
    
    part2 = home_php_content[old_html_end_idx:footer_match.start()]
    
    # inject script before get_footer
    part3 = script_content + "\n\n" + home_php_content[footer_match.start():]
    
    final_content = part1 + combined_middle + part2 + part3
    
    with open('e:/Github/Clients/Truedge/accounting-wordpress/new-redesigned/home.php', 'w', encoding='utf-8') as f:
        f.write(final_content)
        
    print("Successfully merged new-home.html into home.php!")

if __name__ == "__main__":
    main()
