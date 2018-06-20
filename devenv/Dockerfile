FROM wordpress:latest

# 必要なツール郡をインストール
RUN apt-get update
RUN apt-get -y install wget unzip

# WP プラグイン (zip) ダウンロード
WORKDIR /tmp/wp-plugins
RUN wget https://downloads.wordpress.org/plugin/contact-form-7.4.6.zip
RUN wget https://downloads.wordpress.org/plugin/syntaxhighlighter.zip
RUN wget https://downloads.wordpress.org/plugin/wp-emmet.zip

RUN curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar && \
    chmod +x wp-cli.phar && \
    mv wp-cli.phar /usr/local/bin/wp

RUN wget http://cs.sensiolabs.org/download/php-cs-fixer-v2.phar -O php-cs-fixer && \
    chmod a+x php-cs-fixer && \
    mv php-cs-fixer /usr/local/bin/php-cs-fixer

COPY php.ini /usr/local/etc/php/conf.d/php.ini

# Zip ファイルを解凍してインストール
RUN unzip './*.zip' -d /usr/src/wordpress/wp-content/plugins

# 不要になった一時ファイルを削除
RUN apt-get clean
RUN rm -rf /tmp/*

# サーバが読めるように wp-content 以下の所有者を変更
RUN chown -R www-data:www-data /usr/src/wordpress/wp-content

WORKDIR /var/www/html
