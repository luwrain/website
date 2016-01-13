<?php include "../../../../../functions.php"; luwrain_begin_page('/doc/user/manual/app/googlesearch/index.php', luwrain_current_lang() == 'ru'?'Поиск в Google':'Search in Google');?>
<?php if (luwrain_current_lang() == 'en') {?>
<p>Sorry, this page is available in Russian only.</p>
<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
<h1>Поиск в Google</h1>

<p>На Рабочем столе пользователю доступно приложение <em>«Поиск в
Google»</em>. При нажатии <em>Enter</em> на этом приложении система предлагает
ввести поисковой запрос.  Введите значение для поиска, нажмите
<em>Enter</em>, LUWRAIN выдаст результаты поиска из сети Интернет в
интерфейсе поисковой системы Google. Перемещаясь по странице при
помощи клавиш <em>Вверх</em> и <em>Вниз</em> и <em>PageUp</em> и <em>PageDown</em> вы можете
ставить курсор на интересующую ссылку и переходить на найденный сайт
клавишей <em>Enter</em>. Возврат осуществляется клавишей <em>Backspace</em>.</p>
<?php }?>
<?php luwrain_end_page('/doc/user/manual/app/googlesearch/index.php');?>
