<?php include "../../functions.php"; luwrain_begin_page('/download/windows/index.php', luwrain_current_lang() == 'ru'?'Дистрибутив для Microsoft Windows':'Distribution for Microsoft Windows');?>
<?php if (luwrain_current_lang() == 'en') {?>
<h1>Distribution for&#160;Microsoft Windows</h1>

<p>Clik on&#160;the&#160;direct link below to&#160;start  downloading.</p>

<p>Version: <?php echo lwr_version_windows();?></p>

<p>Date of&#160;release: <?php echo lwr_release_date_windows_en();?></p>

<p>Target platform: Microsoft Windows 7/8/8.1</p>

<ul>
<li>luwrain-windows-<?php echo lwr_version_windows();?>.zip</li>
</ul>

<h2>See&#160;also</h2>

<ul>
<li><a href="<?php echo luwrain_link('/doc/user/installation/windows/');?>">Installation for&#160;Microsoft Windows</a>
<ul>
<li><a href="<?php echo luwrain_link('/community/');?>">Our&#160;community</a></li>
<li><a href="<?php echo luwrain_link('/community/bugs/');?>">Report a&#160;bug</a></li>
</ul></li>
</ul>
<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
<h1>Дистрибутив для&#160;Microsoft Windows</h1>

<p>Используйте прямую ссылку ниже, чтобы начать загрузку.</p>

<p>Версия системы: <?php echo lwr_version_windows();?></p>

<p>Дата релиза: <?php echo lwr_release_date_windows_ru();?></p>

<p>Платформа: Microsoft Windows 7/8/8.1</p>

<ul>
<li>luwrain-windows-<?php echo lwr_version_windows();?>.zip</li>
</ul>

<h2>См.&#160;также</h2>

<ul>
<li><a href="<?php echo luwrain_link('/doc/user/installation/windows/');?>">Инструкция по&#160;установке на&#160;Microsoft Windows</a></li>
<li><a href="<?php echo luwrain_link('/community/');?>">Наше&#160;сообщество</a></li>
<li><a href="<?php echo luwrain_link('/community/bugs/');?>">Сообщить об&#160;ошибке</a></li>
</ul>
<?php }?>
<?php luwrain_end_page('/download/windows/index.php');?>
