<?php include "../functions.php"; luwrain_begin_page('/resources/index.php', luwrain_current_lang() == 'ru'?'Все ресурсы':'All resources');?>
<?php if (luwrain_current_lang() == 'en') {?>
<h1>All resources</h1>
<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
<h1>Все ресурсы</h1>

<p>На&#160;этой странице собраны ссылки на&#160;основные ресурсы  нашего проекта для&#160;быстрого доступа.</p>

<h2>Общение и коммуникации</h2>

<ul>
<li><a href="http://wiki.luwrain.org">Вики</a></li>
<li><a href="<?php echo luwrain_link('/community/mailing-lists');?>">Списки рассылок</a></li>
<li><a href="http://twitter.com/luwrain">Твиттер</a></li>
<li><a href="https://github.com/luwrain">GitHub</a></li>
</ul>

<h2>Загрузка релизов и материалов</h2>

<ul>
<li><a href="http://download.luwrain.org/nightly/latest/">Текущая nightly-сборка</a></li>
<li><a href="<?php echo luwrain_link('/download//iso/');?>">ISO-образы</a></li>
<li><a href="<?php echo luwrain_link('/download/windows/');?>">Версия для&#160;Microsoft Windows</a></li>
<li><a href="<?php echo luwrain_link('/download/linux/');?>">Версия для&#160;Gnu/Linux</a></li>
<li><a href="<?php echo luwrain_link('/download/tarball/');?>">Исходные тексты</a></li>
</ul>

<h2>Для&#160;разработчиков</h2>

<ul>
<li><a href="/api/">LUWRAIN API Javadoc</a></li>
<li><a href="<?php echo luwrain_link('/download/git/');?>">Все репозитории Git</a></li>
</ul>

<h2>Информация о&#160;проекте</h2>

<ul>
<li><a href="<?php echo luwrain_link('/community/publications/');?>">Публикации</a></li>
<li><a href="<?php echo luwrain_link('/doc/difference/');?>">Страница преимуществ системы перед другими решениями</a></li>
<li><a href="<?php echo luwrain_link('/community/album/');?>">Фотоальбом</a></li>
<li><a href="<?php echo luwrain_link('/doc/authors/');?>">Список авторов и разработчиков</a></li>
</ul>

<h2>Центральный узел загрузок (download.luwrain.org)</h2>

<ul>
<li><a href="http://download.luwrain.org/">Основной каталог</a></li>
<li><a href="http://download.luwrain.org/nightly/">Текущая история nightly-релизов</a></li>
<li><a href="http://download.luwrain.org/pdf/">Файлы в&#160;формате PDF</a></li>
<li><a href="http://download.luwrain.org/media/greeting/langs/">Голосовые приветствия на&#160;разных языках</a></li>
<li><a href="http://download.luwrain.org/chats/">Записи бесед</a></li>
<li><a href="http://download.luwrain.org/video/">Видеозаписи</a></li>
</ul>
<?php }?>
<?php luwrain_end_page('/resources/index.php');?>
