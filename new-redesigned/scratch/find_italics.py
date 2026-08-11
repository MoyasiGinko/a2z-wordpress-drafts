with open('e:/Github/Clients/Truedge/accounting-wordpress/new-redesigned/home.php', 'r', encoding='utf-8') as f:
    lines = f.readlines()

# Find IntersectionObserver, scroll animations, fadeIn, data-aos, AOS, animate, reveal, lazy-anim
targets = ['IntersectionObserver', 'data-aos', 'fadeIn', 'fadeUp', 'slideIn', 'animate__', 'reveal', 
           'scroll-anim', 'is-visible', 'in-view', 'aos-init', 'observer', 'threshold']
for idx, line in enumerate(lines):
    stripped = line.strip()
    for t in targets:
        if t.lower() in stripped.lower():
            print(f"Line {idx+1}: {stripped[:180]}")
            break
