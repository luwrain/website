<?php include "../../functions.php"; luwrain_begin_page('/download/linux/index.php', luwrain_current_lang() == 'ru'?'Дистрибутив для GNU/Linux':'Distribution for GNU/Linux');?>
<?php if (luwrain_current_lang() == 'en') {?>
<h1>Distribution for&#160;GNU/Linux</h1>

<p>There&#160;are the&#160;releases which we recommend for&#160;running on&#160;GNU/Linux.
They include the&#160;Java Runtime Environment (JRE),
a&#160;speech synthesizer
and support both English and Russian languages.
Each of the&#160;archives below supports one of&#160;two&#160;machine architectures: 64-bit (recommended) or 32-bit.
Please be aware that there could be compatibility issues with&#160;the&#160;GNU/Linux system you are running,
though we hope that our&#160;releases are suitable for&#160;the&#160;most of&#160;popular distributions.</p>

<p>Select the&#160;archive by&#160;the&#160;preferable architecture:</p>

<ul>
<li>For&#160;64-bit systems (recommended): <a href="http://download.luwrain.org/binary/<?php echo lwr_version_linux();?>/linux/luwrain-linux-64bit-<?php echo lwr_version_linux();?>.tar.gz">luwrain-linux-64bit-<?php echo lwr_version_linux();?>.tar.gz</a></li>
<li>For&#160;32-bit systems: <a href="http://download.luwrain.org/binary/<?php echo lwr_version_linux();?>/linux/luwrain-linux-32bit-<?php echo lwr_version_linux();?>.tar.gz">luwrain-linux-32bit-<?php echo lwr_version_linux();?>.tar.gz</a></li>
</ul>

<p>Release information:</p>

<ul>
<li>Version: <?php echo lwr_version_linux();?></li>
<li>Date of&#160;release: <?php echo lwr_release_date_linux_en();?></li>
<li>Target platform: GNU/Linux (any distribution)</li>
</ul>

<h2>See&#160;also</h2>

<ul>
<li><a href="<?php echo luwrain_link('/doc/user/installation/linux/');?>">Installation on&#160;GNU/Linux</a>
<ul>
<li><a href="<?php echo luwrain_link('/doc/user/start');?>">Getting started</a></li>
</ul></li>
</ul>
<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
<h1>Дистрибутив для&#160;GNU/Linux</h1>

<p>Ниже приведены версии LUWRAIN, которые мы рекомендуем для&#160;запуска в&#160;GNU/Linux. 
Они включают в&#160;себя  Java Runtime Environment (JRE),
речевой синтезатор
и поддерживают русский и английский языки.
Версии LUWRAIN для&#160;GNU/Linux различаются архитектурой системы,
в&#160;которой они могут быть запущены.
Пожалуйста, обратите внимание, что возможны проблемы совместимости с&#160;дистрибутивом GNU/Linux, который вы используете,
хотя мы надеемся, что наши релизы подходят для большинства современных систем.</p>

<p>Выберите архитектуру системы для&#160;начала загрузки файла:</p>

<ul>
<li>Для&#160;64-битных систем (рекомендуется): <a href="http://download.luwrain.org/binary/<?php echo lwr_version_linux();?>/linux/luwrain-linux-64bit-<?php echo lwr_version_linux();?>.tar.gz">luwrain-linux-64bit-<?php echo lwr_version_linux();?>.tar.gz</a></li>
<li>Для&#160;32-битных систем: <a href="http://download.luwrain.org/binary/<?php echo lwr_version_linux();?>/linux/luwrain-linux-32bit-<?php echo lwr_version_linux();?>.tar.gz">luwrain-linux-32bit-<?php echo lwr_version_linux();?>.tar.gz</a></li>
</ul>

<p>Общая информация о&#160;релизе:</p>

<ul>
<li>Версия LUWRAIN: <?php echo lwr_version_windows();?></li>
<li>Дата релиза: <?php echo lwr_release_date_linux_ru();?></li>
<li>ОС: GNU/Linux (без&#160;привязки к&#160;дистрибутиву)</li>
</ul>

<h2>См.&#160;также</h2>

<ul>
<li><a href="<?php echo luwrain_link('/doc/user/installation/linux/');?>">Установка на&#160;GNU/Linux</a>
<ul>
<li><a href="<?php echo luwrain_link('/doc/user/start');?>">С&#160;чего начать?</a></li>
</ul></li>
</ul>
<?php }?>
<?php luwrain_end_page('/download/linux/index.php');?>
