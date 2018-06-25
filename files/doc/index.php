<?php include "../functions.php"; luwrain_begin_page('/doc/index.php', luwrain_current_lang() == 'ru'?'Документация':'Documentation');?>
<?php if (luwrain_current_lang() == 'en') {?>
<h1>Documentation</h1>

<p>This&#160;page contains all&#160;categories of&#160;documentation we have on&#160;our&#160;website.
Choose any&#160;section you need:</p>

<ul>
<li><a href="<?php echo luwrain_link('user/');?>">Users documentation</a> 
<ul>
<li><a href="<?php echo luwrain_link('user/start/');?>">Getting started: speedy instructions how to&#160;begin the&#160;work right now</a></li>
<li><a href="<?php echo luwrain_link('user/installation/');?>">Installation instructions: what should you do if you'd like to&#160;install LUWRAIN on&#160;your computer?</a></li>
<li><a href="<?php echo luwrain_link('user/manual/');?>">User manual: a&#160;complete guide to&#160;work in&#160;LUWRAIN</a></li>
<li><a href="<?php echo luwrain_link('/community/bugs/');?>">How to&#160;report a&#160;bug?</a></li>
</ul></li>
<li><a href="<?php echo luwrain_link('devel/');?>">Documentation for&#160;developers</a>
<ul>
<li><a href="/api/">LUWRAIN API Javadoc</a></li>
</ul></li>
</ul>

<h2>About the&#160;project</h2>

<ul>
<li><a href="<?php echo luwrain_link('about/');?>">The&#160;free story what LUWRAIN is</a></li>
<li><a href="<?php echo luwrain_link('faq/');?>">Frequently asked questions</a></li>
<li><a href="<?php echo luwrain_link('difference/');?>">Why is LUWRAIN different than other accessibility solutions?</a></li>
<li><a href="<?php echo luwrain_link('legal/');?>">Legal notes</a></li>
<li><a href="<?php echo luwrain_link('authors/');?>">The project authors</a></li>
<li><a href="<?php echo luwrain_link('contacts/');?>">Contact&#160;us</a></li>
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
<li><a href="<?php echo luwrain_link('user/start/');?>">С чего начать?: минимальное описание необходимых действий для&#160;быстрой установки системы  на&#160;жёсткий диск и начала работы</a></li>
<li><a href="<?php echo luwrain_link('user/installation/');?>">Инструкция по&#160;установке: как установить систему на&#160;жёсткий диск?</a></li>
<li><a href="<?php echo luwrain_link('user/manual/');?>">Руководство пользователя: полное описание правил работы в&#160;нашей среде</a></li>
<li><a href="<?php echo luwrain_link('/community/bugs/');?>">Как сообщить об&#160;ошибке?</a></li>
</ul></li>
<li><p><a href="<?php echo luwrain_link('devel/');?>">Документация для&#160;разработчиков</a></p>

<ul>
<li><a href="/api/">LUWRAIN API Javadoc</a></li>
</ul>

<p><p>См.&#160;также:</p></li>
<li><p><a href="http://wiki.luwrain.org">Наш вики</a></p></li>
</ul></p>

<h2>О&#160;проекте</h2>

<ul>
<li><a href="<?php echo luwrain_link('/doc/about/');?>">Что&#160;такое LUWRAIN?</a></li>
<li><a href="<?php echo luwrain_link('/doc/faq/');?>">Часто задаваемые вопросы</a></li>
<li><a href="<?php echo luwrain_link('/doc/difference/');?>">Чем LUWRAIN отличается от&#160;других вспомогательных технологий?</a></li>
<li><a href="<?php echo luwrain_link('/doc/legal/');?>">Правовой статус</a></li>
<li><a href="<?php echo luwrain_link('/doc/authors/');?>">Авторы проекта</a></li>
</ul>
<?php }?>
<?php luwrain_end_page('/doc/index.php');?>
