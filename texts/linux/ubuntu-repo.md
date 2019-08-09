
ENTITLE='Repository for Ubuntu Linux'
RUTITLE='Репозиторий для Ubuntu Linux'
TARGET=doc/user/manual/linux/ubuntu-repo/index.php

luwrain-page-en

# Repository for~Ubuntu~Linux

luwrain-page-ru

# Репозиторий для~Ubuntu Linux

Для~пользователей, использующих Ubuntu~Linux 18.04 (LTS) с~архитектурой amd64,
на~нашем сервере поддерживается репозиторий, предоставляющий обновления LUWRAIN и других пакетов,
полезных для~русскоговорящих пользователей GNU/Linux.

Строка нашего репозитория для~пакетного менеджера APT имеет следующий вид:

* deb http://download.luwrain.org/ubuntu/ bionic main

Эту~строку необходимо добавить в~файл /etc/apt/sources.list.
С~целью предотвращения попыток подмены пакетов репозиторий защищён цифровой подписью.
Для~безопасной установки ПО необходимо зарегистрировать в~системе наш~GPG-ключ, который расположен по~адресу:

* [http://download.luwrain.org/ubuntu/gpg/luwrain.pub.gpg](http://download.luwrain.org/ubuntu/gpg/luwrain.pub.gpg)

Файл по~этой ссылке должен быть скачан и добавлен в~APT при~помощи команды:

* sudo apt-key repo add luwrain.pub.gpg


