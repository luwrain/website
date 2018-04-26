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

<h2>For&#160;developers and testers</h2>

<p>The&#160;first option of&#160;this list is purposed for&#160;the&#160;developers
of&#160;applications for&#160;LUWRAIN.
Others can be&#160;useful only for&#160;developers who would like to&#160;improve LUWRAIN itself.</p>

<ul>
<li><a href="<?php echo luwrain_link('sdk/');?>">LUWRAIN&#160;SDK</a> (needed for&#160;building your own application for&#160;LUWRAIN)</li>
<li><a href="<?php echo luwrain_link('tarball/');?>">Tarball with source code</a> (published basically to&#160;make LUWRAIN sources downloadable in&#160;single click)</li>
<li><a href="<?php echo luwrain_link('git/');?>">Git&#160;repositories</a> (the&#160;entire set of&#160;repositories for&#160;tracking of&#160;changes in&#160;our&#160;project)</li>
<li><a href="<?php echo luwrain_link('nightly/');?>">Nightly builds</a> (regular binary builds for&#160;testers)</li>
</ul>

<h2>Host download.luwrain.org</h2>

<p>Please be aware that you can visit the&#160;host <a href="http://download.luwrain.org">download.luwrain.org</a> directly 
as&#160;a&#160;single and easily observable place gathering all of&#160;our&#160;materials for&#160;download.
Besides all, you can find there:</p>

<ul>
<li><a href="http://download.luwrain.org/pdf/">Our pdf materials</a></li>
<li><a href="http://download.luwrain.org/chats/">Talks on&#160;radio and podcasts</a> (mostly in&#160;Russian)</li>
<li><a href="http://download.luwrain.org/video/">Video recordings</a> (mostly in&#160;Russian)</li>
</ul>

<h2>see&#160;also</h2>

<ul>
<li><a href="<?php echo luwrain_link('/community/publications/');?>">Our publications</a></li>
</ul>
<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
<h1>Загрузка наших дистрибутивов</h1>

<p>Всё множество продуктов и услуг, предоставляемых командой LUWRAIN, сосредоточено вокруг нашей одноимённой платформы.
Она представляет из&#160;себя пользовательскую среду для людей с&#160;нарушениями зрения, 
подходящую для&#160;решения большинства повседневных  задач и
позволяющую разрабатывать и запускать невизуальные приложения. 
Среда LUWRAIN распространяется бесплатно, поскольку является ПО с&#160;открытым исходным кодом. 
Её можно свободно загрузить с&#160;нашего сайта в&#160;одной из&#160;нескольких форм.</p>

<p>LUWRAIN как самостоятельная ОС на ядре Linux в&#160;виде ISO-образа не&#160;требует никакого стороннего ПО на вашем компьютере  и подходит как для работы,
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

<h2>Релизы для&#160;разработчиков   и тестеров</h2>

<p>Первый вариант в&#160;списке ниже предназначен для&#160;разработчиков,
желающих создать собственные приложения и расширения на&#160;основе LUWRAIN.
Остальные разделы позволяют получить доступ ко&#160;всем исходным текстам и материалам,
которые развиваются членами нашей команды.</p>

<ul>
<li><a href="<?php echo luwrain_link('sdk/');?>">LUWRAIN&#160;SDK</a> (требуется для&#160;разработки ваших собственных приложений)</li>
<li><a href="<?php echo luwrain_link('tarball/');?>">Tar-архив с&#160;исходным кодом проекта</a> (позволяет загрузить исходные тексты проекта одним файлом)</li>
<li><a href="<?php echo luwrain_link('git/');?>">Репозитории Git</a> (полный перечень репозиториев для&#160;отслеживания изменений в&#160;наших исходных текстах)</li>
<li><a href="<?php echo luwrain_link('nightly/');?>">Nightly-сборки</a> (регулярные сборки для&#160;тестирования изменений)</li>
</ul>

<h2>Узел download.luwrain.org</h2>

<p>Обратите внимание, что вы можете работать напрямую с&#160;нашим ресурсом <a href="http://download.luwrain.org">download.luwrain.org</a>,
просматривая доступные файлы и каталоге при&#160;помощи автоматически генерируемого индекса.
Помимо прочего, на&#160;нём можно найти:</p>

<ul>
<li><a href="http://download.luwrain.org/pdf/">Материалы в&#160;pdf-формате</a> (публикации и презентации)</li>
<li><a href="http://download.luwrain.org/chats/">Беседы на&#160;радио и подкасты</a></li>
<li><a href="http://download.luwrain.org/video/">Видеозаписи выступлений и демонстраций</a></li>
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
<?php luwrain_end_page('/download/index.php');?>
