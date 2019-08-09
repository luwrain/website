<?php include "../../../../../functions.php"; luwrain_begin_page('/doc/user/manual/linux/ubuntu-repo/index.php', luwrain_current_lang() == 'ru'?'Репозиторий для Ubuntu Linux':'Repository for Ubuntu Linux');?>
<?php if (luwrain_current_lang() == 'en') {?>
<h1>Repository for&#160;Ubuntu&#160;Linux</h1>
<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
<h1>Репозиторий для&#160;Ubuntu Linux</h1>

<p>Для&#160;пользователей, использующих Ubuntu&#160;Linux 18.04 (LTS) с&#160;архитектурой amd64,
на&#160;нашем сервере поддерживается репозиторий, предоставляющий обновления LUWRAIN и других пакетов,
полезных для&#160;русскоговорящих пользователей GNU/Linux.</p>

<p>Строка нашего репозитория для&#160;пакетного менеджера APT имеет следующий вид:</p>

<ul>
<li>deb http://download.luwrain.org/ubuntu/ bionic main</li>
</ul>

<p>Эту&#160;строку необходимо добавить в&#160;файл /etc/apt/sources.list.
С&#160;целью предотвращения попыток подмены пакетов репозиторий защищён цифровой подписью.
Для&#160;безопасной установки ПО необходимо зарегистрировать в&#160;системе наш&#160;GPG-ключ, который расположен по&#160;адресу:</p>

<ul>
<li><a href="http://download.luwrain.org/ubuntu/gpg/luwrain.pub.gpg">http://download.luwrain.org/ubuntu/gpg/luwrain.pub.gpg</a></li>
</ul>

<p>Файл по&#160;этой ссылке должен быть скачан и добавлен в&#160;APT при&#160;помощи команды:</p>

<ul>
<li>sudo apt-key repo add luwrain.pub.gpg</li>
</ul>
<?php }?>
<?php luwrain_end_page('/doc/user/manual/linux/ubuntu-repo/index.php');?>
