<?php include "../../functions.php"; luwrain_begin_page('/download/windows/index.php', luwrain_current_lang() == 'ru'?'Дистрибутив для Microsoft Windows':'Distribution for Microsoft Windows');?>
<?php if (luwrain_current_lang() == 'en') {?>
<h1>Distribution for&#160;Microsoft Windows</h1>

<p>There&#160;are the&#160;releases which we recommend for&#160;running on&#160;Microsoft Windows.
They include Java Runtime Environment (JRE) and a&#160;speech synthesizer inside.
The&#160;releases are prepared with&#160;all&#160;currently supported languages. 
Clik on&#160;the&#160;direct link below to&#160;start  downloading:</p>

<p>Version: <?php echo lwr_version_windows();?></p>

<p>Date of&#160;release: <?php echo lwr_release_date_windows_en();?></p>

<p>Target platform: Microsoft Windows 7/8/8.1</p>

<ul>
<li>For&#160;32-bit systems: <a href="http://download.luwrain.org/binary/<?php echo lwr_version_windows();?>/windows/luwrain-windows-32bit-<?php echo lwr_version_windows();?>.exe">luwrain-windows-32bit-<?php echo lwr_version_windows();?>.exe</a></li>
</ul>

<p>In&#160;addition we provide a&#160;special release for&#160;Microsoft Windows containing all&#160;necessary LUWRAIN binary files, but without Java Runtime Environment (JRE).
Choosing of&#160;this version can result in&#160;economy of&#160;your traffic for&#160;downloading, 
but you should take care of&#160;proper preparing  JRE on&#160;your own.
Clik on&#160;the&#160;direct link below to&#160;start  downloading:</p>

<ul>
<li><a href="http://download.luwrain.org/binary/<?php echo lwr_version_windows();?>/windows/luwrain-windows-nojre-<?php echo lwr_version_windows();?>.zip">luwrain-windows-nojre-<?php echo lwr_version_windows();?>.zip</a></li>
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

<p>Ниже приведены версии LUWRAIN, которые мы рекомендуем для&#160;запуска в&#160;Microsoft Windows. 
Они включают в&#160;себя  Java Runtime Environment (JRE) и речевой синтезатор.
Дистрибутивы содержат все&#160;поддерживаемые языки. 
Щёлкните по&#160;прямой ссылке ниже для&#160;начала загрузки:</p>

<p>Версия LUWRAIN: <?php echo lwr_version_windows();?></p>

<p>Дата релиза: <?php echo lwr_release_date_windows_ru();?></p>

<p>Версия ОС: Microsoft Windows 7/8/8.1</p>

<ul>
<li>Для&#160;32-битных систем: <a href="http://download.luwrain.org/binary/<?php echo lwr_version_windows();?>/windows/luwrain-windows-32bit-<?php echo lwr_version_windows();?>.exe">luwrain-windows-32bit-<?php echo lwr_version_windows();?>.exe</a></li>
</ul>

<p>Помимо этого мы&#160;предлагаем отдельную версию, которая содержит все необходимые файлы,
но&#160;не&#160;включает в&#160;себя Java Runtime Environment (JRE).
Выбор этой версии поможет сократить размер данных для&#160;загрузки,
но вы должны самостоятельно подготовить JRE для&#160;работы. 
Щёлкните по&#160;прямой ссылке ниже для&#160;начала загрузки:</p>

<ul>
<li><a href="http://download.luwrain.org/binary/<?php echo lwr_version_windows();?>/windows/luwrain-windows-nojre-<?php echo lwr_version_windows();?>.zip">luwrain-windows-nojre-<?php echo lwr_version_windows();?>.zip</a></li>
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
