FROM docker.macopedia.pl/typo3/typo3-container:php8.1-v1.0.3-prod

COPY --chown=www-data:www-data . /code/

USER www-data

RUN mkdir -p /code/var \
    && chmod 775 /code/var \
    && mkdir -p /code/public/typo3temp \
    && chmod 775 /code/public/typo3temp \
    && export COMPOSER_HOME="/code/.cache/" \
    && composer install -d /code --prefer-dist --no-progress --optimize-autoloader

USER root
