<?php include "../../../../functions.php"; luwrain_begin_page('/doc/user/manual/commands/index.php', luwrain_current_lang() == 'ru'?'ДОступные команды':'Commands');?>
<?php if (luwrain_current_lang() == 'en') {?>
<p>Sorry, this page is available in Russian only.</p>
<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
<h1>Перечень доступных команд</h1>

<p><strong>ВНИМАНИЕ!</strong>  Команды обрабатываются системой с&#160;учётом регистра.</p>

<ul>
<li>close &#x2014; закрыть</li>
<li>commander &#x2014; файловый менеджер</li>
<li>contacts &#x2014; адресная книга</li>
<li>context-menu &#x2014; активация контекстного меню в областях, которые это поддерживают</li>
<li>control-panel &#x2014; панель управления</li>
<li>copy &#x2014; скопировать</li>
<li>cut &#x2014; вырезать</li>
<li>paste &#x2014; вставить</li>
<li>decrease-font-size &#x2014; уменьшить размер шрифта на экране</li>
<li>increase-font-size &#x2014; увеличить размер шрифта на экране</li>
<li>delete &#x2014; удалить элемент</li>
<li>fetch &#x2014; активация функции доставки почты и новостей</li>
<li>mail &#x2014; клиент электронной почты</li>
<li>main-menu &#x2014; главное меню</li>
<li>message &#x2014; новое сообщение</li>
<li>news &#x2014; новости</li>
<li>notepad &#x2014; блокнот</li>
<li>open &#x2014; открыть файл</li>
<li>refresh &#x2014; обновить область</li>
<li>registry &#x2014; реестр системы</li>
<li>quit &#x2014; завершить работу в&#160;LUWRAIN</li>
<li>search &#x2014; режим поиска</li>
<li>save &#x2014; сохранить</li>
<li>switch-next-app &#x2014; переключиться на следующее запущенное  приложение</li>
<li>switch-next-area &#x2014; переключиться на следующую активную область</li>
<li>term &#x2014; терминал</li>
<li>twitter &#x2014; Твиттер</li>
<li>wiki - википедия</li>
</ul>
<?php }?>
<?php luwrain_end_page('/doc/user/manual/commands/index.php');?>
