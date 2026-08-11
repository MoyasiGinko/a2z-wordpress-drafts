import re

sample_html = """
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700;800&display=swap" rel="stylesheet">
<link rel='stylesheet' id='theme-font-css' href='https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap' type='text/css' media='all' />
"""

def unblock_fonts(buffer):
    def font_replacer(match):
        tag = match.group(0)
        if 'preconnect' in tag:
            return tag
        if 'onload=' in tag or 'preload' in tag:
            return tag
        
        href_match = re.search(r'href=[\'"]([^\'"]+)[\'"]', tag)
        if href_match:
            url = href_match.group(1)
            url = url.replace('display=swap', 'display=optional')
            return f'<link rel="preload" as="style" href="{url}" onload="this.onload=null;this.rel=\'stylesheet\'"><noscript><link rel="stylesheet" href="{url}"></noscript>'
        return tag

    return re.sub(r'<link\s+[^>]*fonts\.googleapis\.com[^>]*>', font_replacer, buffer)

print(unblock_fonts(sample_html))
