<?php include "../../functions.php"; luwrain_begin_page('/download/tarball/index.php', luwrain_current_lang() == 'ru'?'Tar-архивы':'Tarballs');?>
<?php if (luwrain_current_lang() == 'en') {?>
<h1>Sources tarballs</h1>

<p>If you need our source code and would like to&#160;get it in&#160;single click,
you can  take our tarball distribution available by&#160;the&#160;direct link below.
Vaste majority of&#160;LUWRAIN materials of&#160;our project
including scripts for preparing ISO images and binary distributions,
go to&#160;this tarball.</p>

<p>Version: <?php echo lwr_version_tarball();?></p>

<p>Date of&#160;release: <?php echo lwr_release_date_tarball_en();?></p>

<ul>
<li><a href="http://download.luwrain.org/src/luwrain-<?php echo lwr_version_tarball();?>.tar.gz">luwrain-<?php echo lwr_version_tarball();?>.tar.gz</a> </li>
</ul>

<h2>See&#160;also</h2>

<ul>
<li><a href="<?php echo luwrain_link('/download/git');?>">Our Git repositories</a></li>
<li><a href="<?php echo luwrain_link('/doc/devel/');?>">Our&#160;documentation for&#160;developers</a></li>
</ul>
<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
<h1>Tar-архив с&#160;исходными текстами</h1>

<p>Если вам необходимы полные исходные тексты нашего проекта, и вы хотите их загрузить одним файлом,
то вы можете воспользоваться прямой ссылкой ниже. 
Большинство материалов LUWRAIN, включая скрипты для&#160;сборки ISO-образов и бинарных дистрибутивов,
содержатся в&#160;этом архиве.</p>

<p>Версия: <?php echo lwr_version_tarball();?></p>

<p>Дата релиза: <?php echo lwr_release_date_tarball_ru();?></p>

<ul>
<li><a href="http://download.luwrain.org/src/luwrain-<?php echo lwr_version_tarball();?>.tar.gz">luwrain-<?php echo lwr_version_tarball();?>.tar.gz</a> </li>
</ul>

<h2>См.&#160;также</h2>

<ul>
<li><a href="<?php echo luwrain_link('/download/git');?>">Наши репозитории Git</a></li>
<li><a href="<?php echo luwrain_link('/doc/devel/');?>">Документация для&#160;разработчиков</a></li>
</ul>
<?php }?>
<?php luwrain_end_page('/download/tarball/index.php');?>
