<?php include "../../../functions.php"; luwrain_begin_page('/doc/user/manual/index.php', luwrain_current_lang() == 'ru'?'Руководство пользователя':'User manual');?>
<?php if (luwrain_current_lang() == 'en') {?>
<p>Sorry, this page is available in Russian only.</p>
<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
<h1>Руководство пользователя</h1>

<p>В&#160;нашем руководстве описаны основные принципы работы.
Мы&#160;полагаем, что система уже установлена
или вы запустили её в&#160;режиме live&#160;CD с&#160;целью ознакомиться без&#160;установки на&#160;жёсткий диск.
Если вам требуются инструкции по&#160;подготовке системы к&#160;работе, вы можете их&#160;найти <a href="<?php echo luwrain_link('/doc/user/installation/');?>">здесь</a>.</p>

<h2>Выберите интересующий вас раздел:</h2>

<ol>
<li><a href="<?php echo luwrain_link('startwork/');?>">Начало работы</a></li>
<li><a href="<?php echo luwrain_link('fundamentals/');?>">Основные принципы навигации</a></li>
<li><a href="<?php echo luwrain_link('switching/');?>">Перемещение между областями</a></li>
<li><a href="<?php echo luwrain_link('clipboard/');?>">Буфер обмена</a></li>
<li>Приложения
<ul>
<li><a href="<?php echo luwrain_link('app/commander/');?>">Файловый менеджер</a></li>
<li><a href="<?php echo luwrain_link('app/news/');?>">Чтение новостей</a></li>
<li><a href="<?php echo luwrain_link('app/mail/');?>">Электронная почта</a></li>
<li><a href="<?php echo luwrain_link('app/message/');?>">Составление нового сообщения</a></li>
<li><a href="<?php echo luwrain_link('app/contacts/');?>">Адресная книга</a></li>
<li><a href="<?php echo luwrain_link('app/googlesearch/');?>">Поиск в Google</a></li>
<li><a href="<?php echo luwrain_link('app/notepad/');?>">Блокнот</a></li>
<li><a href="<?php echo luwrain_link('app/twitter/');?>">Твиттер</a></li>
<li><a href="<?php echo luwrain_link('app/wiki/');?>">Поиск в Википедии</a></li>
</ul></li>
<li>Расширения
<ul>
<li><a href="<?php echo luwrain_link('ext/yatran/');?>">Яндекс.Переводчик</a></li>
</ul></li>
<li>Справочная информация
<ul>
<li><a href="<?php echo luwrain_link('commands/');?>">Доступные команды</a></li>
</ul></li>
</ol>
<?php }?>
<?php luwrain_end_page('/doc/user/manual/index.php');?>
