web: vendor/bin/heroku-php-apache2 public/

<!-- change file upload size for heroku -->
<FilesMatch "\.php$">
    <IfModule mod_php5.c>
        php_value upload_max_filesize 5M
        php_value post_max_size 5M
    </IfModule>
</FilesMatch>
