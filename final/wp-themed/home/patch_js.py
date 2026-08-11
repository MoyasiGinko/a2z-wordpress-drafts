with open('home.php', 'r', encoding='utf-8') as f:
    home_lines = f.readlines()
js_lines = home_lines[4786:4825]
js_block = "".join(js_lines)

with open('../about/about-us.php', 'r', encoding='utf-8') as f:
    about_lines = f.readlines()

for i, line in enumerate(about_lines):
    if "// Metric count-up animation" in line:
        about_lines.insert(i, js_block + "\n\n")
        print("Inserted JS")
        break

with open('../about/about-us.php', 'w', encoding='utf-8') as f:
    f.writelines(about_lines)
