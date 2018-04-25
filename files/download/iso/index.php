<?php include "../../functions.php"; luwrain_begin_page('/download/iso/index.php', luwrain_current_lang() == 'ru'?'Загрузочные ISO-образы':'Bootable ISO images');?>
<?php if (luwrain_current_lang() == 'en') {?>
<h1>Bootable ISO images</h1>

<p>Here you can find the&#160;direct links to&#160;our&#160;bootable ISO images.
They will be&#160;useful, if you'd like to&#160;run LUWRAIN as&#160;live&#160;CD without installing  on&#160;your&#160;hard drive 
or if you'd like to&#160;install it as&#160;a&#160;stand-alone OS on&#160;your PC.</p>

<p>These ISO images are based on&#160;<a href="https://wiki.ubuntu.com/XenialXerus/ReleaseNotes">Ubuntu Linux 16.04.3 (Xenial Xerus)</a>.
They prepared as&#160;hybrid files, suitable for&#160;writing 
on&#160;your flash stick or on&#160;CD/DVD recordable media.
We support amd64 machines only.</p>

<p>Select the&#160;image by&#160;the&#160;preferable language:</p>

<ul>
<li><a href="http://download.luwrain.org/iso/luwrain-en-amd64-<?php echo lwr_version_iso();?>.iso">English</a></li>
<li><a href="http://download.luwrain.org/iso/luwrain-ru-amd64-<?php echo lwr_version_iso();?>.iso">Russian</a></li>
</ul>

<p>General information:</p>

<ul>
<li>Version: <?php echo lwr_version_iso();?></li>
<li>Date of&#160;release: <?php echo lwr_release_date_iso_en();?></li>
</ul>

<h2>See also</h2>

<ul>
<li><a href="<?php echo luwrain_link('writing/');?>">Writing the&#160;ISO-image on&#160;a&#160;media</a></li>
<li><a href="<?php echo luwrain_link('/doc/user/installation/iso/');?>">Installation as&#160;a&#160;stand-alone OS</a></li>
</ul>
<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
<h1>Загрузочные ISO-образы</h1>

<p>На&#160;этой странице приведены прямые ссылки на&#160;наши загрузочные ISO-образы.
Они могут быть полезны, если вы желаете запустить LUWRAIN в&#160;режиме live CD без&#160;установки на&#160;жёсткий диск 
или требуется установить LUWRAIN на&#160;ваш ПК как&#160;самостоятельную ОС.</p>

<p>Наши образы основаны на&#160;<a href="https://wiki.ubuntu.com/XenialXerus/ReleaseNotes">Ubuntu Linux 16.04.3 (Xenial Xerus)</a>.
Они являются гибридными файлами и пригодны для&#160;записи как&#160;на&#160;флеш-носитель,
так и на&#160;CD/DVD-диск.
Мы поддерживаем только 64-битные компьютеры с&#160;архитектурой amd64.</p>

<p>Выберите язык для&#160;начала загрузки файла:</p>

<ul>
<li><a href="http://download.luwrain.org/iso/luwrain-ru-amd64-<?php echo lwr_version_iso();?>.iso">Русский</a></li>
<li><a href="http://download.luwrain.org/iso/luwrain-en-amd64-<?php echo lwr_version_iso();?>.iso">Английский</a></li>
</ul>

<p>Общая информация:</p>

<ul>
<li>Версия LUWRAIN: <?php echo lwr_version_iso();?></li>
<li>Дата релиза: <?php echo lwr_release_date_iso_ru();?></li>
</ul>

<h2>См.&#160;также</h2>

<ul>
<li><a href="<?php echo luwrain_link('writing/');?>">Запись загруженного ISO-образа на&#160;носитель</a></li>
<li><a href="<?php echo luwrain_link('/doc/user/installation/iso/');?>">Установка в&#160;виде самостоятельной ОС</a></li>
</ul>
<?php }?>
<?php luwrain_end_page('/download/iso/index.php');?>
