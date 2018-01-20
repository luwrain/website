<?php include "../../functions.php"; luwrain_begin_page('/download/nightly/index.php', luwrain_current_lang() == 'ru'?'Nightly':'Nightly');?>
<?php if (luwrain_current_lang() == 'en') {?>
<h1>Nightly builds</h1>

<p>Quick access:</p>

<ul>
<li><a href="http://download.luwrain.org/nightly/latest/junit-report.html">Current JUnit testing report</a></li>
<li><a href="http://download.luwrain.org/nightly/latest/luwrain-windows-app-nightly-<?php echo lwr_nightly_latest_date();?>.zip">Current build as an&#160;application for&#160;Microsoft Windows</a></li>
</ul>

<p>In&#160;order to&#160;make our&#160;development process more transparent and smooth,
we support publishing of&#160;the&#160;nightly builds.
You can find them at&#160;the&#160;following addresses: </p>

<ul>
<li>Entire history of&#160;available nightly builds: <a href="http://download.luwrain.org/nightly/">http://download.luwrain.org/nightly/</a></li>
<li>The&#160;most recent nightly build: <a href="http://download.luwrain.org/nightly/latest/">http://download.luwrain.org/nightly/latest/</a></li>
</ul>

<h2>Structure of&#160;our&#160;nightly builds</h2>

<p>Each nightly release consists of&#160;several components;
you can find their descriptions below
with&#160;the&#160;direct links to&#160;the&#160;corresponding  files in&#160;the&#160;most recent build:</p>

<ul>
<li><a href="http://download.luwrain.org/nightly/latest/luwrain-nightly-<?php echo lwr_nightly_latest_date();?>.tar.gz">luwrain-nightly</a>: the&#160;source code used during the&#160;compilation</li>
<li><a href="http://download.luwrain.org/nightly/latest/luwrain-windows-app-nightly-<?php echo lwr_nightly_latest_date();?>.zip">luwrain-windows-app</a>: the&#160;application for&#160;Microsoft Windows prepared for&#160;immediate launch</li>
<li><a href="http://download.luwrain.org/nightly/latest/luwrain-windows-pkg-nightly-<?php echo lwr_nightly_latest_date();?>.zip">luwrain-windows-pkg</a>: the&#160;build for&#160;creation of&#160;JavaFXPackager distribution for&#160;Microsoft Windows</li>
<li><a href="http://download.luwrain.org/nightly/latest/luwrain-windows-nojre-nightly-<?php echo lwr_nightly_latest_date();?>.zip">luwrain-windows-nojre</a>: the&#160;build for&#160;Microsoft Windows prepared for&#160;launch with&#160;external Java virtual machine (no JRE inside)</li>
<li><a href="http://download.luwrain.org/nightly/latest/luwrain-linux-pkg-nightly-<?php echo lwr_nightly_latest_date();?>.tar.gz">luwrain-linux-pkg</a>:  the&#160;build for&#160;creation of&#160;JavaFXPackager distribution for&#160;GNU/Linux</li>
<li><a href="http://download.luwrain.org/nightly/latest/luwrain-linux-nojre-nightly-<?php echo lwr_nightly_latest_date();?>.tar.gz">luwrain-linux-nojre</a>: the&#160;build for&#160;GNU/Linux prepared for&#160;launch with&#160;external Java virtual machine (no JRE inside)</li>
<li><a href="http://download.luwrain.org/nightly/latest/luwrain-sdk-nightly-<?php echo lwr_nightly_latest_date();?>.zip">luwrain-sdk</a>: LUWRAIN&#160;SDK (with&#160;Javadoc documentation);</li>
<li><a href="http://download.luwrain.org/nightly/latest/luwrain-iso-nightly-<?php echo lwr_nightly_latest_date();?>.tar.gz">luwrain-iso</a>: the&#160;build for&#160;creation of&#160;ISO-images based on&#160;Ubuntu Linux</li>
</ul>

<p>You can also download the&#160;files checksums in&#160;the&#160;following formats:</p>

<ul>
<li><a href="http://download.luwrain.org/nightly/latest/sha1sum.txt">SHA1</a></li>
<li><a href="http://download.luwrain.org/nightly/latest/md5sum.txt">MD5</a></li>
</ul>

<p>Although we call them nightly,
this doesn't mean that  releases must be necessarily once a&#160;day.
Sometimes we take pauses, especially if having a&#160;work affecting deep design of&#160;LUWRAIN.
Outdated versions  are deleted from this directory,
so these releases are usually   available within a&#160;couple  of&#160;months.</p>
<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
<h1>Nightly-сборки</h1>

<p>Быстрый доступ:</p>

<ul>
<li><a href="http://download.luwrain.org/nightly/latest/junit-report.html">Текущий отчёт JUnit-тестирования</a></li>
<li><a href="http://download.luwrain.org/nightly/latest/luwrain-windows-32bit-nightly-<?php echo lwr_nightly_latest_date();?>.zip">Текущая сборка в&#160;виде приложения для&#160;Microsoft Windows</a></li>
</ul>

<p>Для&#160;того, чтобы сделать наш процесс разработки более прозрачным и управляемым, 
мы поддерживаем выпуск nightly-сборок.
Они доступны по&#160;этим ссылкам:</p>

<ul>
<li>Общий каталог с&#160;текущей историей nightly-сборок: <a href="http://download.luwrain.org/nightly/">http://download.luwrain.org/nightly/</a></li>
<li>Самая свежая nightly-сборка: <a href="http://download.luwrain.org/nightly/latest/">http://download.luwrain.org/nightly/latest/</a></li>
</ul>

<p><strong>ВНИМАНИЕ:</strong>
Для&#160;полностью правильного  тестирования nightly-сборки убедитесь,
что у вас не&#160;осталось файлов каких-либо предыдущих релизов.</p>

<h2>Структура nightly-релизов</h2>

<p>Каждый nightly-релиз состоит из&#160;нескольких файлов,
Ниже приведён их&#160;перечень с&#160;соответствующими прямыми ссылками на&#160;самую свежую сборку:</p>

<ul>
<li><a href="http://download.luwrain.org/nightly/latest/luwrain-nightly-<?php echo lwr_nightly_latest_date();?>.tar.gz">luwrain-nightly</a>: исходные тексты LUWRAIN, использованные в&#160;ходе сборки;</li>
<li><a href="http://download.luwrain.org/nightly/latest/luwrain-windows-32bit-nightly-<?php echo lwr_nightly_latest_date();?>.zip">luwrain-windows-32bit</a>: 32-битная версия для&#160;Microsoft Windows, готовое к&#160;запуску;</li>
<li><a href="http://download.luwrain.org/nightly/latest/luwrain-linux-32bit-nightly-<?php echo lwr_nightly_latest_date();?>.tar.gz">luwrain-linux-32bit</a>: 32-битная версия для&#160;GNU/Linux (для&#160;запуска требуется Java&#160;SE Runtime Environment);</li>
<li><a href="http://download.luwrain.org/nightly/latest/luwrain-linux-64bit-nightly-<?php echo lwr_nightly_latest_date();?>.tar.gz">luwrain-linux-32bit</a>: 64-битная версия для&#160;GNU/Linux (для&#160;запуска требуется Java&#160;SE Runtime Environment);</li>
<li><a href="http://download.luwrain.org/nightly/latest/luwrain-sdk-nightly-<?php echo lwr_nightly_latest_date();?>.zip">luwrain-sdk</a>: сборка LUWRAIN&#160;SDK (включает документацию Javadoc);</li>
</ul>

<p>Вы также можете <a href="http://download.luwrain.org/nightly/latest/sha1sum.txt">загрузить контрольные суммы</a> упомянутых выше файлов в&#160;aформате SHA1.</p>

<p>Несмотря на&#160;то, что мы называем эти&#160;релизы  nightly,
это не&#160;означает, что они обновляются строго ежедневно.
Периодически мы делаем паузы, особенно, если вносим изменения,
затрагивающие ядро системы.
Устаревшие версии удаляются,
поэтому каждый релиз доступен обычно в&#160;течение двух-трёх месяцев.</p>
<?php }?>
<?php luwrain_end_page('/download/nightly/index.php');?>
