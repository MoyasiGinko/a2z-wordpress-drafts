import os

base = 'e:/Github/Clients/Truedge/accounting-wordpress'
for root, dirs, files in os.walk(base):
    for fname in files:
        if fname.endswith('.php') or fname.endswith('.html'):
            fpath = os.path.join(root, fname)
            try:
                with open(fpath, 'r', encoding='utf-8', errors='ignore') as f:
                    for idx, line in enumerate(f, 1):
                        if 'rating-stars' in line or 'leftrating' in line:
                            relpath = os.path.relpath(fpath, base)
                            print(f"{relpath} Line {idx}: {line.strip()[:180]}")
            except:
                pass
