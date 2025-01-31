# FROM ubuntu:18.04
FROM witcher/normalphp7run

ENV TZ="Asia/Hong_Kong"
RUN apt-get update && apt-get install -y sudo php-mysqli

# Install OpenEMR
RUN wget https://sourceforge.net/projects/openemr/files/OpenEMR%20Ubuntu_debian%20Package/5.0.1/openemr-php7_5.0.1-2_all.deb/download -O /openemr-php7_5.0.1-2_all.deb
RUN dpkg -i /openemr-php7_5.0.1-2_all.deb || true
RUN apt-get install -y -f

# Forget about the PHP installed in apache2
RUN a2dismod php7.2

# (Auto) Configure OpenEMR
WORKDIR /var/www/openemr
COPY etc/scripts/* /var/www/openemr/
COPY etc/scripts/utilities/* /root/

RUN chmod 600 /var/www/openemr
RUN chmod 500 autoconfig.sh /root/unlock_admin.sh
COPY --chown=www-data:www-data etc/globals.php /var/www/openemr/interface/globals.php
COPY --chown=wc:wc admin /test_modes
COPY --chown=wc:wc user /test_modes

RUN chmod 0755 /var/www/openemr/run_setup.sh
ENTRYPOINT /var/www/openemr/run_setup.sh
