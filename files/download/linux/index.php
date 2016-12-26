<?php include "../../functions.php"; luwrain_begin_page('/download/linux/index.php', luwrain_current_lang() == 'ru'?'Дистрибутив для GNU/Linux':'Distribution for GNU/Linux');?>
<?php if (luwrain_current_lang() == 'en') {?>
<h1>Distribution for&#160;GNU/Linux</h1>

<p>There&#160;are the&#160;releases which we recommend for&#160;running on&#160;GNU/Linux.
They include Java Runtime Environment (JRE) and a&#160;speech synthesizer inside.
The&#160;releases are prepared with&#160;all&#160;currently supported languages. 
Please be aware that there could be compatibility problems with&#160;the&#160;GNU/Linux system you are running,
though we hope that our&#160;releases are suitable for&#160;the&#160;most of&#160;popular distributions.
In&#160;the&#160;case of&#160;problems, you can try the&#160;version without JRE (see below),
which contains a&#160;minimal set of&#160;system-dependent binary files.
Clik on&#160;the&#160;direct link below to&#160;start  downloading:</p>

<p>Version: <?php echo lwr_version_linux();?></p>

<p>Date of&#160;release: <?php echo lwr_release_date_linux_en();?></p>

<p>Target platform: GNU/Linux (any distribution)</p>

<ul>
<li>For&#160;64-bit systems: <a href="http://download.luwrain.org/binary/<?php echo lwr_version_linux();?>/linux/luwrain-linux-64bit-<?php echo lwr_version_linux();?>beta1.tar.gz">luwrain-linux-64bit-<?php echo lwr_version_linux();?>beta1.tar.gz</a></li>
</ul>

<p>In&#160;addition we provide a&#160;special release for&#160;GNU/Linux containing all&#160;necessary LUWRAIN binary files, but without Java Runtime Environment (JRE).
Choosing of&#160;this version can result in&#160;economy of&#160;your traffic for&#160;downloading, 
but you should take care of&#160;proper preparing  JRE on&#160;your own.
Clik on&#160;the&#160;direct link below to&#160;start  downloading:</p>

<ul>
<li><a href="http://download.luwrain.org/binary/<?php echo lwr_version_linux();?>/linux/luwrain-linux-nojre-<?php echo lwr_version_linux();?>.tar.gz">luwrain-linux-nojre-<?php echo lwr_version_linux();?>.tar.gz</a></li>
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
Они включают в&#160;себя  Java Runtime Environment (JRE) и речевой синтезатор.
Дистрибутивы содержат все&#160;поддерживаемые языки. 
Пожалуйста, обратите внимание, что могут быть проблемы совместимости с&#160;дистрибутивом GNU/Linux, который вы используете,
хотя мы надеемся, что наши релизы подходят для большинства современных систем.
В&#160;случае затруднений совместимости вы можете воспользоваться версией без&#160;JRE (см.&#160;ниже),
которая содержит минимальное количество системнозависимых бинарных файлов.
Щёлкните по&#160;прямой ссылке ниже для&#160;начала загрузки:</p>

<p>Версия LUWRAIN: <?php echo lwr_version_windows();?></p>

<p>Дата релиза: <?php echo lwr_release_date_linux_ru();?></p>

<p>Версия ОС: GNU/Linux (любой дистрибутив)</p>

<ul>
<li>Для&#160;64-битных систем: <a href="http://download.luwrain.org/binary/<?php echo lwr_version_linux();?>/linux/luwrain-linux-64bit-<?php echo lwr_version_linux();?>beta1.tar.gz">luwrain-linux-64bit-<?php echo lwr_version_linux();?>beta1.tar.gz</a></li>
</ul>

<p>Помимо этого мы&#160;предлагаем отдельную версию, которая содержит все необходимые файлы,
но&#160;не&#160;включает в&#160;себя Java Runtime Environment (JRE).
Выбор этой версии поможет сократить размер данных для&#160;загрузки,
но вы должны самостоятельно подготовить JRE для&#160;работы. 
Щёлкните по&#160;прямой ссылке ниже для&#160;начала загрузки:</p>

<ul>
<li><a href="http://download.luwrain.org/binary/<?php echo lwr_version_linux();?>/linux/luwrain-linux-nojre-<?php echo lwr_version_linux();?>.zip">luwrain-linux-nojre-<?php echo lwr_version_linux();?>.tar.gz</a></li>
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
