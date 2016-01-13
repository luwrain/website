<?php include "../../../../../functions.php"; luwrain_begin_page('/doc/user/manual/ext/yatran/index.php', luwrain_current_lang() == 'ru'?'Яндекс.Переводчик':'Yandex.Translator');?>
<?php if (luwrain_current_lang() == 'en') {?>
<p>Sorry, this page is available in Russian only.</p>
<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
<h1>Яндекс.Переводчик</h1>

<p>В систему интегрирован <em>«Переводчик»</em>, который позволяет переводить
любой кусок текста с английского на русский язык. Для перевода
отдельного слова или фразы необходимо поставить курсор в конец слова
(фразы) и нажать комбинацию клавиш <em>Ctrl</em>+<em>Y</em>. Также предусмотрена
команда для командной строки <em>ya-translate</em>.
Перевод доступен во всех приложениях LUWRAIN. Вы можете осуществить
перевод английской статьи в Wikipedia или новостной статьи на
английском языке. Для этого поставьте курсор в начале фрагмента,
нажмите <em>Ctrl</em>+<em>Пробел</em>, стрелками-клавишами вправо и вниз дойдите до
конца фрагмента и нажмите комбинацию клавиш <em>Ctrl</em>+<em>Y</em>.</p>
<?php }?>
<?php luwrain_end_page('/doc/user/manual/ext/yatran/index.php');?>
