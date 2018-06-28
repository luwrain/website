<?php include "../../functions.php"; luwrain_begin_page('/download/windows/index.php', luwrain_current_lang() == 'ru'?'Дистрибутив для Microsoft Windows':'Distribution for Microsoft Windows');?>
<?php if (luwrain_current_lang() == 'en') {?>
<h1>Distribution for&#160;Microsoft Windows</h1>

<p>Here&#160;is our&#160;release for&#160;Microsoft Windows.
It&#160;includes Java Runtime Environment (JRE), a&#160;speech synthesizer and support </p>

<p>Clik on&#160;the&#160;direct link below to&#160;start  downloading:</p>

<ul>
<li><!&#x2013;<a href="http://download.luwrain.org/binary/<?php echo lwr_version_windows();?>/windows/luwrain-windows-32bit-<?php echo lwr_version_windows();?>.zip">&#x2013;>luwrain-windows-32bit-<?php echo lwr_version_windows();?>.zip<!&#x2013;</a>&#x2013;></li>
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

<p>Ниже приведена ссылка на&#160;дистрибутив LUWRAIN для&#160;Microsoft Windows.
Он включает в&#160;себя Java Runtime Environment (JRE),
речевой синтезатор и
поддерживает русский и английский языки.</p>

<p>Щёлкните по&#160;прямой ссылке ниже для&#160;начала загрузки:</p>

<ul>
<li><a href="http://download.luwrain.org/binary/<?php echo lwr_version_windows();?>/windows/luwrain-windows-32bit-<?php echo lwr_version_windows();?>.zip">&#x2013;>luwrain-windows-32bit-<?php echo lwr_version_windows();?>.zip<!&#x2013;</a></li>
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
<?php }?>
<?php luwrain_end_page('/download/windows/index.php');?>
