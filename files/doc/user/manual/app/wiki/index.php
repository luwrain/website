<?php include "../../../../../functions.php"; luwrain_begin_page('/doc/user/manual/app/wiki/index.php', luwrain_current_lang() == 'ru'?'Википедия':'Search in Wikipedia');?>
<?php if (luwrain_current_lang() == 'en') {?>
<p>Sorry, this page is available in Russian only.</p>
<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
<h1>Поиск в Википедии</h1>

<p>Приложение <em>«Поиск в Википедии»</em> позволяет выполнять поиск по
русскоязычным и англоязычным статьям энциклопедии. Запустите
приложение выбрав его из <em>«Главного меню»</em> или при помощи команды
<em>wiki</em> из командной строки, выберите из двух вариантов «поиск в
русскоязычном разделе» или «поиск в англоязычном разделе», введите
название интересующей статьи (темы) и нажмите клавишу
<em>Enter¬</em>. Система выгрузит результаты поиска, найдите с помощью клавиш
вверх/вниз нужную статью и нажмите <em>Enter</em> – система откроет выбранную
статью.
Приложение <em>«Поиск в Википедии»</em> позволяет перемещаться по статье как клавишами вверх/вниз построчно, так и клавишами <em>Page Up</em> или <em>Page Down</em> по абзацам. 
Если курсор находится на внутренней ссылке в статье, то нажатие клавиши <em>Enter</em> осуществляет переход по этой ссылке.</p>
<?php }?>
<?php luwrain_end_page('/doc/user/manual/app/wiki/index.php');?>