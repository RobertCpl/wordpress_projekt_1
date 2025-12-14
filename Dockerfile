FROM wordpress:latest

# Katalog roboczy WordPressa
WORKDIR /var/www/html

# Skopiuj cały kod z repozytorium do katalogu /var/www/html
# (upewnij się, że masz .dockerignore, żeby nie kopiować np. .git itp.)
COPY . /var/www/html/wp-content

# Domyślny punkt wejścia i komenda z obrazu wordpress:latest
