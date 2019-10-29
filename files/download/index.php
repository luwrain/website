<?php include "../functions.php"; luwrain_begin_page('/download/index.php', luwrain_current_lang() == 'ru'?'Загрузка':'downloads');?>
<?php if (luwrain_current_lang() == 'en') {?>
<h1>Our downloads</h1>

<p>The&#160;entire set of&#160;our products and services is&#160;concentrated around our&#160;platform LUWRAIN.
With LUWRAIN platform,
blind users can create their own accessible applications or run the&#160;applications
created by&#160;our team or other people.
The&#160;main distributions of&#160;LUWRAIN are&#160;free for&#160;use for&#160;everybody, since they are licensed under the&#160;terms of&#160;GPL&#160;v.3.</p>

<p>These options are for&#160;people who needs LUWRAIN for&#160;work. 
With&#160;the&#160;list below, you can find a&#160;binary distribution prepared for&#160;OS you have already installed or 
a&#160;ISO&#160;image suitable for running LUWRAIN as&#160;a&#160;stand-alone OS (in&#160;this&#160;case any&#160;previously installed OS is unnecessary).</p>

<p>Choose the&#160;most suitable form you need:</p>

<ul>
<li>As&#160;an&#160;application:
<ul>
<li><a href="<?php echo luwrain_link('windows/');?>">For&#160;Microsoft Windows</a></li>
<li><a href="<?php echo luwrain_link('linux/');?>">For&#160;GNU/Linux</a></li>
<li><a href="<?php echo luwrain_link('iso/');?>">As a&#160;bootable ISO image</a> (installed OS isn't required)</li>
</ul></li>
</ul>

<h2>LUWRAIN SDK</h2>

<p>LUWRAIN&#160;SDK is purposed for&#160;the&#160;developers who are willing to create
their own application or extension for&#160;LUWRAIN using Java.</p>

<ul>
<li><a href="<?php echo luwrain_link('sdk/');?>">Download page for&#160;LUWRAIN&#160;SDK</a></li>
</ul>

<h2>Our&#160;source code</h2>

<p>The&#160;source code of&#160;LUWRAIN can be&#160;obtained in&#160;one&#160;of&#160;the&#160;several </p>

<p>The&#160;first option of&#160;this list is purposed for&#160;the&#160;developers
of&#160;applications for&#160;LUWRAIN.
Others can be&#160;useful only for&#160;developers who would like to&#160;improve LUWRAIN itself.</p>

<ul>
<li><a href="<?php echo luwrain_link('tarball/');?>">Tarball with source code</a> (published basically to&#160;make LUWRAIN sources downloadable in&#160;single click)</li>
<li><a href="<?php echo luwrain_link('git/');?>">Git&#160;repositories</a> (the&#160;entire set of&#160;repositories for&#160;tracking of&#160;changes in&#160;our&#160;project)</li>
<li><a href="<?php echo luwrain_link('nightly/');?>">Nightly builds</a> (regular binary builds for&#160;testers)</li>
</ul>

<p>Please be aware that you can visit the&#160;host <a href="http://download.luwrain.org">download.luwrain.org</a> directly.</p>
<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
<h1>Загрузка дистрибутивов</h1>

<p>Всё множество продуктов и услуг, предоставляемых командой LUWRAIN, сосредоточено вокруг нашей одноимённой платформы.
Это пользовательская среда для людей с&#160;нарушениями зрения, 
позволяющая разрабатывать и запускать невизуальные приложения. 
Среда LUWRAIN распространяется бесплатно, поскольку является свободным ПО. 
Её можно загрузить с&#160;нашего сайта в&#160;одной из&#160;нескольких форм.</p>

<p>LUWRAIN как самостоятельная ОС на ядре Linux в&#160;виде ISO-образа не&#160;требует стороннего ПО на вашем компьютере  и подходит как для работы,
так и для ознакомления без установки на жёсткий диск.
В&#160;остальных случаях LUWRAIN подготовлен как&#160;приложение для запуска в&#160;Microsoft Windows или в&#160;GNU/Linux.</p>

<h2>Дистрибутивы для пользователей</h2>

<ul>
<li>LUWRAIN в&#160;виде приложения:
<ul>
<li><a href="<?php echo luwrain_link('windows/');?>">Для&#160;Microsoft Windows</a></li>
<li><a href="<?php echo luwrain_link('linux/');?>">Для&#160;GNU/Linux</a></li>
</ul></li>
<li><a href="<?php echo luwrain_link('iso/');?>">LUWRAIN в&#160;виде загрузочного ISO-образа на ядре Linux</a></li>
</ul>

<h2>LUWRAIN&#160;SDK</h2>

<p>LUWRAIN&#160;SDK предназначен для&#160;разработчиков,
желающих создать собственные приложение или расширение на&#160;основе LUWRAIN с&#160;использованием языка Java.</p>

<ul>
<li><a href="<?php echo luwrain_link('sdk/');?>">Страница загрузки LUWRAIN&#160;SDK</a></li>
</ul>

<h2>Исходный код</h2>

<p>Исходный код платформы LUWRAIN может быть получен несколькими способами.
Мы рекомендуем пользоваться  nightly-сборками,
поскольку они включают в&#160;себя исходный код,
максимально подготовленный для&#160;воспроизведения текущего состояния разработки.</p>

<ul>
<li><a href="<?php echo luwrain_link('nightly/');?>">Nightly-сборки</a></li>
<li><a href="<?php echo luwrain_link('git/');?>">Репозитории Git</a></li>
<li><a href="<?php echo luwrain_link('tarball/');?>">Tar-архив с&#160;исходным кодом текущей стабильной версии</a></li>
</ul>

<p><em>ВНИМАНИЕ!</em>
Вы можете работать с&#160;нашим ресурсом <a href="http://download.luwrain.org">download.luwrain.org</a> напрямую.</p>

<h2>О&#160;проекте</h2>

<ul>
<li><a href="<?php echo luwrain_link('/doc/about/');?>">Что&#160;такое LUWRAIN?</a></li>
<li><a href="<?php echo luwrain_link('/doc/faq/');?>">Часто задаваемые вопросы</a></li>
<li><a href="<?php echo luwrain_link('/doc/difference/');?>">Чем LUWRAIN отличается от&#160;других вспомогательных технологий?</a></li>
<li><a href="<?php echo luwrain_link('/doc/legal/');?>">Правовой статус</a></li>
<li><a href="<?php echo luwrain_link('/doc/authors/');?>">Авторы проекта</a></li>
</ul>
<?php }?>
<?php luwrain_end_page('/download/index.php');?>
