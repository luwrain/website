<?php include "../../functions.php"; luwrain_begin_page('/download/windows/index.php', luwrain_current_lang() == 'ru'?'Дистрибутив для Microsoft Windows':'Distribution for Microsoft Windows');?>
<?php if (luwrain_current_lang() == 'en') {?>
<h1>Distribution for&#160;Microsoft Windows</h1>

<p>Here&#160;are the&#160;releases for&#160;Microsoft Windows
divided onto two&#160;groups: with and without an&#160;installer.
The&#160;installer makes LUWRAIN launch very easy, but the&#160;experienced users could prefer a&#160;manual installation using the&#160;files in&#160;ZIP&#160;archive.
Clik on&#160;the&#160;direct link below to&#160;start  downloading:</p>

<ul>
<li>64 bit release with&#160;the&#160;installer: <!&#x2013;<a href="http://download.luwrain.org/binary/<?php echo lwr_version_windows();?>/windows/luwrain-windows-64bit-<?php echo lwr_version_windows();?>.exe">&#x2013;>luwrain-windows-64bit-<?php echo lwr_version_windows();?>.exe<!&#x2013;</a>&#x2013;></li>
<li>32 bit release with&#160;the&#160;installer: <!&#x2013;<a href="http://download.luwrain.org/binary/<?php echo lwr_version_windows();?>/windows/luwrain-windows-32bit-<?php echo lwr_version_windows();?>.exe">&#x2013;>luwrain-windows-32bit-<?php echo lwr_version_windows();?>.exe<!&#x2013;</a>&#x2013;></li>
<li>64 bit release without an&#160;installer: <!&#x2013;<a href="http://download.luwrain.org/binary/<?php echo lwr_version_windows();?>/windows/luwrain-windows-64bit-<?php echo lwr_version_windows();?>.zip">&#x2013;>luwrain-windows-64bit-<?php echo lwr_version_windows();?>.zip<!&#x2013;</a>&#x2013;></li>
<li>32 bit release without an&#160;installer: <!&#x2013;<a href="http://download.luwrain.org/binary/<?php echo lwr_version_windows();?>/windows/luwrain-windows-32bit-<?php echo lwr_version_windows();?>.zip">&#x2013;>luwrain-windows-32bit-<?php echo lwr_version_windows();?>.zip<!&#x2013;</a>&#x2013;></li>
</ul>

<p>Release details:</p>

<ul>
<li>Version: <?php echo lwr_version_windows();?></li>
<li>Date of&#160;release: <?php echo lwr_release_date_windows_en();?></li>
<li>Target platform: Microsoft Windows 7/8/8.1</li>
</ul>

<h2>See&#160;also</h2>

<ul>
<li><a href="<?php echo luwrain_link('/doc/user/installation/windows/');?>">Installation on&#160;Microsoft Windows</a>
<ul>
<li><a href="<?php echo luwrain_link('/doc/user/start');?>">Getting started</a></li>
</ul></li>
</ul>
<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
<h1>Дистрибутив для&#160;Microsoft Windows</h1>

<p>Ниже приведены версии LUWRAIN, которые предназначены для&#160;запуска в&#160;Microsoft Windows.
Они разделены на&#160;две группы: с&#160;программой установки и без&#160;неё.
Программа установки упрощает запуск  и делает возможным знакомство с&#160;LUWRAIN  практически сразу после щелчка на&#160;соответствующей ссылке.
Дистрибутив без&#160;программы установки представляет собой обычный ZIP-архив,
который может быть более предпочтителен для&#160;опытных пользователей.
Щёлкните по&#160;прямой ссылке ниже для&#160;начала загрузки:</p>

<ul>
<li>64-битная версия с&#160;программой установки: <!&#x2013;<a href="http://download.luwrain.org/binary/<?php echo lwr_version_windows();?>/windows/luwrain-windows-64bit-<?php echo lwr_version_windows();?>.exe">&#x2013;>luwrain-windows-64bit-<?php echo lwr_version_windows();?>.exe<!&#x2013;</a>&#x2013;></li>
<li>32-битная версия с&#160;программой установки: <!&#x2013;<a href="http://download.luwrain.org/binary/<?php echo lwr_version_windows();?>/windows/luwrain-windows-32bit-<?php echo lwr_version_windows();?>.exe">&#x2013;>luwrain-windows-32bit-<?php echo lwr_version_windows();?>.exe<!&#x2013;</a>&#x2013;></li>
<li>64-битная версия без&#160;программы установки: <!&#x2013;<a href="http://download.luwrain.org/binary/<?php echo lwr_version_windows();?>/windows/luwrain-windows-64bit-<?php echo lwr_version_windows();?>.zip">&#x2013;>luwrain-windows-64bit-<?php echo lwr_version_windows();?>.zip<!&#x2013;</a>&#x2013;></li>
<li>32-битная версия без&#160;программы установки: <!&#x2013;<a href="http://download.luwrain.org/binary/<?php echo lwr_version_windows();?>/windows/luwrain-windows-32bit-<?php echo lwr_version_windows();?>.zip">&#x2013;>luwrain-windows-32bit-<?php echo lwr_version_windows();?>.zip<!&#x2013;</a>&#x2013;></li>
</ul>

<p>Общая информация о&#160;релизе:</p>

<ul>
<li>Версия LUWRAIN: <?php echo lwr_version_windows();?></li>
<li>Дата релиза: <?php echo lwr_release_date_windows_ru();?></li>
<li>Версия ОС: Microsoft Windows 7/8/8.1</li>
</ul>

<h2>См.&#160;также</h2>

<ul>
<li><a href="<?php echo luwrain_link('/doc/user/installation/windows/');?>">Установка на&#160;Microsoft Windows</a>
<ul>
<li><a href="<?php echo luwrain_link('/doc/user/start');?>">С&#160;чего начать?</a></li>
</ul></li>
</ul>

<p><?php echo lwr_month_en(2); ?></p>
<?php }?>
<?php luwrain_end_page('/download/windows/index.php');?>
