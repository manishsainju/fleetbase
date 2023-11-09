# alpine is more secure
FROM nginx:stable-alpine

ENV NGINX_APPLICATION_HOSTNAME localhost

COPY docker/httpd/vhost.conf /etc/nginx/templates/default.conf.template
COPY api/public/ /var/www/html/api/public/
