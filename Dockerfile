FROM httpd:2.4

MAINTAINER dbwnsgur741

COPY ./public-html/ /usr/local/apache2/htdocs/

RUN apt-get update