<?php include "../functions.php"; luwrain_begin_page('/doc/index.php', luwrain_current_lang() == 'ru'?'Документация':'Documentation');?>
<?php if (luwrain_current_lang() == 'en') {?>
<h1>Documentation</h1>

<p>This&#160;page contains all&#160;categories of&#160;documentation we have on&#160;our&#160;website.
Choose any&#160;section you need:</p>

<ul>
<li><a href="<?php echo luwrain_link('user/');?>">Users documentation</a> 
<ul>
<li><a href="<?php echo luwrain_link('user/installation/');?>">Installation instructions: what should you do if you'd like to&#160;install LUWRAIN on&#160;your computer?</a></li>
<li><a href="<?php echo luwrain_link('user/manual/');?>">User manual: a&#160;complete guide to&#160;work in&#160;LUWRAIN</a></li>
<li><a href="<?php echo luwrain_link('user/start/');?>">Getting started: speedy instructions how to&#160;begin the&#160;work right now</a></li>
<li><a href="<?php echo luwrain_link('/community/bugs/');?>">How to&#160;report a&#160;bug?</a></li>
</ul></li>
<li><a href="<?php echo luwrain_link('ext/');?>">How&#160;to create your own extensions and applications for&#160;LUWRAIN?</a></li>
<li><a href="<?php echo luwrain_link('devel/');?>">Documentation for&#160;members of&#160;our team: how to&#160;work on&#160;LUWRAIN itself?</a></li>
</ul>

<h2>About the&#160;project</h2>

<ul>
<li><a href="<?php echo luwrain_link('about/');?>">The&#160;free story what LUWRAIN is, and why do we think blind users need it?</a></li>
<li><a href="<?php echo luwrain_link('difference/');?>">Why is LUWRAIN different than other accessible solutions?</a></li>
<li><a href="<?php echo luwrain_link('authors/');?>">The project authors</a></li>
<li><a href="<?php echo luwrain_link('legal/');?>">Legal notes</a></li>
<li><a href="<?php echo luwrain_link('faq/');?>">Frequently asked questions</a></li>
</ul>
<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
<h1>Документация</h1>

<p>На&#160;этой странице перечислены все&#160;категории документации,
представленной на&#160;нашем сайте.
Выберите интересующий вас раздел:</p>

<ul>
<li><a href="<?php echo luwrain_link('user/');?>">Документация для&#160;пользователей</a>
<ul>
<li><a href="<?php echo luwrain_link('user/installation/');?>">Инструкция по&#160;установке: как установить систему на&#160;жёсткий диск?</a></li>
<li><a href="<?php echo luwrain_link('user/manual/');?>">Руководство пользователя: полное описание правил работы в&#160;нашей среде</a></li>
<li><a href="<?php echo luwrain_link('user/start/');?>">С чего начать?: минимальное описание необходимых действий для&#160;быстрой установки системы  на&#160;жёсткий диск и начала работы</a></li>
<li><a href="<?php echo luwrain_link('/community/bugs/');?>">Как сообщить об&#160;ошибке?</a></li>
</ul></li>
<li><a href="<?php echo luwrain_link('ext/');?>">Как создать собственные приложения и расширения для&#160;LUWRAIN</a></li>
<li><a href="<?php echo luwrain_link('devel/');?>">Документация для&#160;участников нашей команды</a></li>
</ul>

<h2>О&#160;проекте</h2>

<ul>
<li><a href="<?php echo luwrain_link('about/');?>">Что&#160;такое LUWRAIN, и почему мы считаем, что незрячие люди нуждаются в&#160;нём?</a></li>
<li><a href="<?php echo luwrain_link('difference/');?>">Чем LUWRAIN отличается от&#160;других вспомогательных технологий?</a></li>
<li><a href="<?php echo luwrain_link('authors/');?>">Авторы проекта</a></li>
<li><a href="<?php echo luwrain_link('legal/');?>">Правовой статус проекта</a></li>
<li><a href="<?php echo luwrain_link('faq/');?>">Часто задаваемые вопросы</a></li>
</ul>
<?php }?>
<?php luwrain_end_page('/doc/index.php');?>
