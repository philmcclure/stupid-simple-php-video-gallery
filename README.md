Installation
============

The only thing this script does is take mp4 videos in this directory and create a single webpage with HTML5 video embeds. Newest videos are posted at the top of the page.

nginx-config:

    server {
    server_name gallery.lan;
    listen 80;
    root /gallery;
    index index.php;
    access_log /var/log/nginx/gallery-access.log;
    error_log /var/log/nginx/gallery-error.log;
    
    location ~ \.php$ {
        try_files $uri $uri/ =404;
        fastcgi_split_path_info ^(.+\.php)(/.+)$;
        fastcgi_pass unix:/var/run/php5-fpm.sock;
        fastcgi_index index.php;
        fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
        include fastcgi_params;
    }
    }

