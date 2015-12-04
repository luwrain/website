<?php include "../../functions.php"; luwrain_begin_page('/download/iso/index.php', luwrain_current_lang() == 'ru'?'Загрузочные ISO-образы':'Bootable ISO images');?>
<?php if (luwrain_current_lang() == 'en') {?>
<h1>Bootable ISO images</h1>

<p>There are the&#160;direct links to&#160;our&#160;bootable ISO images available for&#160;download.
They would be&#160;useful if you'd like to&#160;run LUWRAIN as&#160;live&#160;CD without installation on&#160;a&#160;hard drive 
or to&#160;install it as&#160;a&#160;stand-alone OS on&#160;your PC.</p>

<p>These ISO images are based on&#160;Ubuntu 15.10 (Wily Werewolf).
They prepared as&#160;hybrid files suitable for&#160;writing 
on&#160;your flash stick or on&#160;CD/DVD recordable media.</p>

<p>Version: <?php echo lwr_version_iso();?></p>

<p>Release date: <?php echo lwr_release_date_iso_en();?></p>

<ul>
<li>English language:
<ul>
<li>[i386.iso] </li>
<li>[amd64.iso]</li>
</ul></li>
<li>Russian language:
<ul>
<li>[i386.iso] </li>
<li>[amd64.iso]</li>
</ul></li>
</ul>

<h2>See also</h2>

<ul>
<li>How to write ISO image on flash stick in&#160;Microsoft Windows</li>
<li>How to write ISO image on flash stick in&#160;GNU/Linux</li>
</ul>
<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
<h1>Загрузочные ISO-образы</h1>

<p>На&#160;этой странице приведены прямые ссылки на&#160;загрузочные ISO-образы,
доступные для&#160;загрузки с&#160;нашего сайта.
Они могут быть полезны, если вы желаете запустить LUWRAIN в&#160;режиме live CD без&#160;установки на&#160;жёсткий диск 
или установить на&#160;ваш ПК как&#160;самостоятельную ОС.</p>

<p>Наши образы основаны на&#160;Ubuntu 15.10 (Wily Werewolf).
Они являются гибридными файлами и пригодны для&#160;записи как&#160;на&#160;флэш-носитель,
так и на&#160;CD/DVD-диск.</p>

<p>Версия: <?php echo lwr_version_iso();?></p>

<p>Дата релиза: <?php echo lwr_release_date_iso_ru();?></p>

<ul>
<li>Русская версия: 
<ul>
<li>[i386.iso]</li>
<li>[amd64.iso]</li>
</ul></li>
<li>Английская версия:
<ul>
<li>[i386.iso] </li>
<li>[amd64.iso]</li>
</ul></li>
</ul>

<h2>См.&#160;также</h2>

<ul>
<li>Как записать ISO-образ на&#160;флэш-носитель в&#160;Microsoft Windows</li>
<li>Как записать ISO-образ на&#160;флэш-носитель в&#160;GNU/Linux</li>
</ul>
<?php }?>
<?php luwrain_end_page('/download/iso/index.php');?>
