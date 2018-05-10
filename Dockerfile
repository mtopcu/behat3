# BehatDev Tool
FROM ubuntu
MAINTAINER mustafatopcu

# Update and install packages
RUN apt-get update && apt-get install git -y && apt-get install vim -y && apt-get install composer && \
apt-get install php -y && apt-get install zip -y && apt-get install php7.2-mbstring && \
apt-get install curl -y && apt-get install php-curl -y && apt-get install php-xml

# Clone Behat3 from mtopcu github and install it via composer
RUN git clone https://github.com/mtopcu/behat3.git

#edit behat.yml -> wd_host: http://hub:4444/wd/hub