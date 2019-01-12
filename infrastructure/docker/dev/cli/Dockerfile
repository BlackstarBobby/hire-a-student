FROM php:7.2-cli-alpine3.8

# Xdebug extension
#RUN apk --no-cache add pcre-dev ${PHPIZE_DEPS} \
#    && pecl install xdebug \
#    && docker-php-ext-enable xdebug \
#    && apk del pcre-dev ${PHPIZE_DEPS}

RUN apk update \
    && apk upgrade \
    && apk add zlib-dev zip php7-zip\
    && docker-php-ext-configure zip --with-zlib-dir=/usr \
    && docker-php-ext-install zip

RUN  apk add --update --no-cache \
    libgcc libstdc++ libx11 glib libxrender libxext libintl \
    libcrypto1.0 libssl1.0 \
    ttf-dejavu ttf-droid ttf-freefont ttf-liberation ttf-ubuntu-font-family