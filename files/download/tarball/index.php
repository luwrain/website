<?php include "../../functions.php"; luwrain_begin_page('/download/tarball/index.php', luwrain_current_lang() == 'ru'?'Tar-архив':'Tarball');?>
<?php if (luwrain_current_lang() == 'en') {?>
<h1>Sources tarball</h1>

<p>In&#160;order to&#160;get a&#160;tarball with our&#160;source code,
please use this direct link:</p>

<ul>
<li><a href="http://download.luwrain.org/src/1.x.x/luwrain-<?php echo lwr_version_tarball();?>.tar.gz">luwrain-<?php echo lwr_version_tarball();?>.tar.gz</a></li>
</ul>

<p>Release information:</p>

<ul>
<li>Version: <?php echo lwr_version_tarball();?></li>
<li>Date of&#160;release: <?php echo lwr_release_date_tarball_en();?></li>
<li>License: GNU Public License v.3</li>
</ul>

<p>This&#160;tarball contains:</p>

<ul>
<li>System core and standard controls</li>
<li>JavaScript engine</li>
<li>Browser, PIM, Studio and other major components</li>
<li>System-dependent code for&#160;Microsoft Windows and GNU/Linux</li>
<li>Our standard applications</li>
<li>Sound files and third-party libraries in&#160;binary form</li>
</ul>

<h2>See&#160;also</h2>

<ul>
<li><a href="<?php echo luwrain_link('/download/git');?>">Our Git repositories</a></li>
<li><a href="<?php echo luwrain_link('/doc/devel/');?>">Our&#160;documentation for&#160;developers</a></li>
</ul>
<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
<h1>Tar-архив с&#160;исходными текстами</h1>

<p>Если вы желаете загрузить исходные тексты LUWRAIN,собранные в&#160;один файл,
воспользуйтесь, пожалуйста, этой ссылкой:</p>

<ul>
<li><a href="http://download.luwrain.org/src/1.x.x/luwrain-<?php echo lwr_version_tarball();?>.tar.gz">luwrain-<?php echo lwr_version_tarball();?>.tar.gz</a></li>
</ul>

<p>Общая информация о&#160;релизе:</p>

<ul>
<li>Версия: <?php echo lwr_version_tarball();?></li>
<li>Дата релиза: <?php echo lwr_release_date_tarball_ru();?></li>
<li>Лицензия: GNU&#160;Public License v.3</li>
</ul>

<p>В&#160;состав архива входят:</p>

<ul>
<li>ядро системы и библиотека стандартных элементов управления;</li>
<li>движок исполнения JavaScript;</li>
<li>браузер, PIM, студия и другие компоненты;</li>
<li>системнозависимый код для&#160;Microsoft Windows и GNU/Linux;</li>
<li>наши стандартные приложения;</li>
<li>файлы звуков и сторонние библиотеки в&#160;бинарном формате.</li>
</ul>

<h2>См.&#160;также</h2>

<ul>
<li><a href="<?php echo luwrain_link('/download/git');?>">Наши репозитории Git</a></li>
<li><a href="<?php echo luwrain_link('/doc/devel/');?>">Документация для&#160;разработчиков</a></li>
</ul>
<?php }?>
<?php luwrain_end_page('/download/tarball/index.php');?>
