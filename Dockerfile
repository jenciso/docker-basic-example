FROM php:7.2-apache
COPY myapp/ /var/www/html/
ENV ENV_VAR=meu_primeiro_dockerfile
