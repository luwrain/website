<?php include "../functions.php"; luwrain_begin_page('/doc/index.php', luwrain_current_lang() == 'ru'?'Документация':'Documentation');?>
<?php if (luwrain_current_lang() == 'en') {?>
<h1>Documentation</h1>

<ul>
<li><a href="<?php echo luwrain_link('user/');?>">Users documentation</a> 
<ul>
<li><a href="<?php echo luwrain_link('user/start/');?>">Getting started: speedy instructions how to&#160;begin the&#160;work right now</a></li>
<li><a href="<?php echo luwrain_link('user/installation/');?>">Installation instructions: what should you do if you'd like to&#160;install LUWRAIN on&#160;your computer?</a></li>
<li><a href="<?php echo luwrain_link('user/manual/');?>">User manual: a&#160;complete guide to&#160;work in&#160;LUWRAIN</a></li>
<li><a href="<?php echo luwrain_link('js/');?>">Documentation for&#160;developers of&#160;JavaScript extensions</a></li>
</ul></li>
<li><a href="<?php echo luwrain_link('devel/');?>">Documentation for&#160;developers</a>
<ul>
<li><a href="/javadoc/">LUWRAIN API Javadoc</a></li>
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

<ul>
<li><a href="<?php echo luwrain_link('user/');?>">Документация для&#160;пользователей</a>
<ul>
<li><a href="<?php echo luwrain_link('user/start/');?>">С чего начать?</a></li>
<li><a href="<?php echo luwrain_link('user/installation/');?>">Инструкция по&#160;установке: как установить систему на&#160;жёсткий диск?</a></li>
<li><a href="<?php echo luwrain_link('user/manual/');?>">Руководство пользователя: полное описание правил работы в&#160;LUWRAIN</a></li>
</ul></li>
<li><a href="<?php echo luwrain_link('js/');?>">Документация для&#160;разработчиков расширений на&#160;языке JavaScript</a></li>
<li><a href="<?php echo luwrain_link('devel/');?>">Документация для&#160;участников проекта</a>
<ul>
<li><a href="/javadoc/">LUWRAIN API Javadoc</a></li>
</ul></li>
</ul>

<p>См.&#160;также:</p>

<ul>
<li><a href="http://wiki.luwrain.org">Наш вики</a></li>
</ul>

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
