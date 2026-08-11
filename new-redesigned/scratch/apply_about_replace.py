import re

file_path = r'e:\Github\Clients\Truedge\accounting-wordpress\new-redesigned\about\about-us.php'
with open(file_path, 'r', encoding='utf-8') as f:
    content = f.read()

# Replace .container in CSS selector (not followed by dash or word char)
def replace_css_container(text):
    return re.sub(r'\.container\b(?![-_a-zA-Z0-9])', '.section-container', text)

# Replace container in HTML class attribute where container is a standalone word in class list
def replace_html_container(text):
    def replacer(match):
        prefix = match.group(1)
        classes = match.group(2).split()
        suffix = match.group(3)
        new_classes = ['section-container' if c == 'container' else c for c in classes]
        return f'{prefix}{" ".join(new_classes)}{suffix}'
    
    text = re.sub(r'(class=")([^"]*)(")', replacer, text)
    text = re.sub(r"(class=')([^']*)(')", replacer, text)
    return text

# Replace .btn in CSS selector (not followed by dash or word char)
def replace_css_btn(text):
    return re.sub(r'\.btn\b(?![-_a-zA-Z0-9])', '.btn-cstm', text)

# Replace btn in HTML class attribute where btn is a standalone word in class list
def replace_html_btn(text):
    def replacer(match):
        prefix = match.group(1)
        classes = match.group(2).split()
        suffix = match.group(3)
        new_classes = ['btn-cstm' if c == 'btn' else c for c in classes]
        return f'{prefix}{" ".join(new_classes)}{suffix}'
    
    text = re.sub(r'(class=")([^"]*)(")', replacer, text)
    text = re.sub(r"(class=')([^']*)(')", replacer, text)
    return text

new_content = content
new_content = replace_css_container(new_content)
new_content = replace_html_container(new_content)
new_content = replace_css_btn(new_content)
new_content = replace_html_btn(new_content)

with open(file_path, 'w', encoding='utf-8') as f:
    f.write(new_content)

print("Updated about-us.php successfully.")
