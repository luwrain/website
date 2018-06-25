<?php include "../../../../functions.php"; luwrain_begin_page('/doc/user/installation/linux/index.php', luwrain_current_lang() == 'ru'?'Установка в GNU/Linux':'Installation on GNU/Linux');?>
<?php if (luwrain_current_lang() == 'en') {?>
<h1>Installation on&#160;GNU/Linux</h1>
<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
<h1>Установка на&#160;GNU/Linux</h1>

<p>Для&#160;установки на&#160;GNU/Linux  требуется определить архитектуру вашей системы.
Мы публикуем дистрибутивы для&#160;64-битных и 32-битных компьютеров.
В&#160;наше время в&#160;подавляющем большинстве случаев используется 64&#160;битные системы,
но  для поддержки устаревшего оборудования  мы продолжаем публиковать также 32-битную сборку.
Вы можете узнать архитектуру вашей системы, вызвав команду "<strong>uname -m</strong>".
Для&#160;запуска LUWRAIN в&#160;GNU/Linux выполните следующие действия:</p>

<ol>
<li>Загрузите дистрибутив (ссылки на&#160;архивы указаны на&#160;<a href="<?php echo luwrain_link('/download/linux/');?>">этой странице</a>).</li>
<li>Распакуйте архив  командой "<strong>tar xf luwrain*.tar.gz</strong>".</li>
<li>Перейдите в&#160;каталог с&#160;запускаемым файлом.</li>
<li>Запустите систему командой "<strong>./luwrain</strong>".</li>
</ol>
<?php }?>
<?php luwrain_end_page('/doc/user/installation/linux/index.php');?>
