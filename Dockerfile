FROM php:apache
RUN sed 's/80/${PORT}/g' -i /etc/apache2/sites-available/000-default.conf /etc/apache2/ports.conf
ENV PORT=80                                                                                                               
COPY index.php . 
COPY new.php . 
COPY .htaccess .
RUN a2enmod rewrite
RUN apt-get update
RUN apt-get install -y libpq-dev \
	&& docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql \
	&& docker-php-ext-install pdo pdo_pgsql pgsql
