FROM wyveo/nginx-php-fpm:latest
WORKDIR /usr/share/nginx
RUN rm -rf /usr/share/nginx/html
COPY . /usr/share/nginx/
RUN chmod -R 775 /usr/share/nginx/storage/*
RUN ln -s public html
#RUN chmod -R 777 storage && chmod -R 777 bootstrap/cache
