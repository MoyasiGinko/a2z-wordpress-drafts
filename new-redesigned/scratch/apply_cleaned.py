with open('e:/Github/Clients/Truedge/accounting-wordpress/new-redesigned/scratch/cleaned_home.php', 'r', encoding='utf-8') as f:
    cleaned = f.read()

with open('e:/Github/Clients/Truedge/accounting-wordpress/new-redesigned/home.php', 'w', encoding='utf-8') as f:
    f.write(cleaned)

print("Successfully replaced home.php with the cleaned CSS version!")
