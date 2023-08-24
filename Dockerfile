from php:apache
run rm -f /var/www/html/index.html
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
