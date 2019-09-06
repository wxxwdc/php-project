# Auto Generate By ServiceStage
FROM composer:1.8.0
ADD ./lib /app
WORKDIR /app

RUN composer config -g repo.packagist composer https://repo.huaweicloud.com/repository/php/
RUN cd /app && composer install -vvv && cp .env.example .env && php artisan key:generate

ENTRYPOINT ["php"]
CMD ["artisan", "serve", "--host=0.0.0.0", "--port=8080"]

