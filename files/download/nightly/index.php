<?php include "../../functions.php"; luwrain_begin_page('/download/nightly/index.php', luwrain_current_lang() == 'ru'?'Nightly-релизы':'Nightly releases');?>
<?php if (luwrain_current_lang() == 'en') {?>
<h1>Nightly releases</h1>

<p>Quick access:</p>

<ul>
<li><a href="http://download.luwrain.org/nightly/latest/junit-report.html">Current JUnit testing report</a></li>
<li><a href="http://download.luwrain.org/nightly/latest/luwrain-windows-32bit-nightly-<?php echo lwr_nightly_latest_date();?>.zip">The&#160;current nightly release as an&#160;32-bit application for&#160;Microsoft Windows</a></li>
</ul>

<p>In&#160;order to&#160;make our&#160;development process more transparent and smooth,
we support publishing of&#160;the&#160;nightly releases.
You can find them at&#160;the&#160;following addresses: </p>

<ul>
<li>Entire history of&#160;available nightly releases: <a href="http://download.luwrain.org/nightly/">http://download.luwrain.org/nightly/</a></li>
<li>The&#160;most recent nightly release: <a href="http://download.luwrain.org/nightly/latest/">http://download.luwrain.org/nightly/latest/</a></li>
</ul>

<h2>Structure of&#160;our&#160;nightly releases</h2>

<p>Each nightly release consists of&#160;several components;
you can find their descriptions below
with&#160;the&#160;direct links to&#160;the&#160;corresponding  files in&#160;the&#160;most recent version:</p>

<ul>
<li><a href="http://download.luwrain.org/nightly/latest/luwrain-nightly-<?php echo lwr_nightly_latest_date();?>.tar.gz">luwrain-nightly</a>: the&#160;source code used for&#160;the&#160;release</li>
<li><a href="http://download.luwrain.org/nightly/latest/luwrain-windows-32bit-nightly-<?php echo lwr_nightly_latest_date();?>.zip">luwrain-windows-32bit</a>: a&#160;32-bit application for&#160;Microsoft Windows suitable for&#160;immediate launching</li>
<li><a href="http://download.luwrain.org/nightly/latest/luwrain-linux-32bit-nightly-<?php echo lwr_nightly_latest_date();?>.tar.gz">luwrain-linux-32bit</a>: a&#160;32-bit build for&#160;Gnu/Linux (requires installed Java&#160;SE Runtime Environment)</li>
<li><a href="http://download.luwrain.org/nightly/latest/luwrain-linux-64bit-nightly-<?php echo lwr_nightly_latest_date();?>.tar.gz">luwrain-linux-64bit</a>:  a&#160;64-bit build for&#160;Gnu/Linux (requires installed Java&#160;SE Runtime Environment)</li>
<li><a href="http://download.luwrain.org/nightly/latest/luwrain-sdk-nightly-<?php echo lwr_nightly_latest_date();?>.zip">luwrain-sdk</a>: the&#160;LUWRAIN SDK</li>
</ul>

<p>You can also <a href="http://download.luwrain.org/nightly/latest/sha1sum.txt">download the&#160;files checksums</a> in&#160;SHA1 format.</p>

<p>Although we call them nightly,
this doesn't mean that  releases must be necessarily once a&#160;day.
Sometimes we take pauses, especially if having a&#160;work affecting deep design of&#160;LUWRAIN.
Outdated versions  are deleted from this directory,
so these releases are usually   available within a&#160;couple  of&#160;months.</p>
<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
<h1>Nightly-релизы</h1>

<p>Быстрый доступ:</p>

<ul>
<li><a href="http://download.luwrain.org/nightly/latest/junit-report.html">Текущий отчёт JUnit-тестирования</a></li>
<li><a href="http://download.luwrain.org/nightly/latest/luwrain-windows-32bit-nightly-<?php echo lwr_nightly_latest_date();?>.zip">Текущий релиз в&#160;виде приложения для&#160;Microsoft Windows</a></li>
</ul>

<p>Для&#160;того, чтобы сделать наш процесс разработки более прозрачным и управляемым, 
мы поддерживаем выпуск nightly-релизов.
Они доступны по&#160;этим ссылкам:</p>

<ul>
<li>Общий каталог с&#160;текущей историей nightly-релизов: <a href="http://download.luwrain.org/nightly/">http://download.luwrain.org/nightly/</a></li>
<li>Самый свежий nightly-релиз: <a href="http://download.luwrain.org/nightly/latest/">http://download.luwrain.org/nightly/latest/</a></li>
</ul>

<p><strong>ВНИМАНИЕ:</strong>
Для&#160;правильного  тестирования nightly-релиза убедитесь,
что в&#160;вашей системе не&#160;осталось файлов предыдущих запусков.</p>

<h2>Структура nightly-релизов</h2>

<p>Каждый nightly-релиз состоит из&#160;нескольких файлов.
Ниже приведён их&#160;перечень с&#160;соответствующими прямыми ссылками на&#160;самую свежую версию:</p>

<ul>
<li><a href="http://download.luwrain.org/nightly/latest/luwrain-nightly-<?php echo lwr_nightly_latest_date();?>.tar.gz">luwrain-nightly</a>: исходные тексты LUWRAIN, использованные в&#160;ходе сборки;</li>
<li><a href="http://download.luwrain.org/nightly/latest/luwrain-windows-32bit-nightly-<?php echo lwr_nightly_latest_date();?>.zip">luwrain-windows-32bit</a>: 32-битная версия для&#160;Microsoft Windows, готовая к&#160;запуску;</li>
<li><a href="http://download.luwrain.org/nightly/latest/luwrain-linux-32bit-nightly-<?php echo lwr_nightly_latest_date();?>.tar.gz">luwrain-linux-32bit</a>: 32-битная версия для&#160;GNU/Linux (требует Java&#160;SE Runtime Environment);</li>
<li><a href="http://download.luwrain.org/nightly/latest/luwrain-linux-64bit-nightly-<?php echo lwr_nightly_latest_date();?>.tar.gz">luwrain-linux-64bit</a>: 64-битная версия для&#160;GNU/Linux (требует Java&#160;SE Runtime Environment);</li>
<li><a href="http://download.luwrain.org/nightly/latest/luwrain-sdk-nightly-<?php echo lwr_nightly_latest_date();?>.zip">luwrain-sdk</a>: сборка LUWRAIN&#160;SDK (включает документацию Javadoc);</li>
</ul>

<p>Вы также можете <a href="http://download.luwrain.org/nightly/latest/sha1sum.txt">загрузить контрольные суммы</a> упомянутых выше файлов в&#160;формате SHA1.</p>

<p>Несмотря на&#160;то, что мы называем эти&#160;релизы  nightly,
их обновление необязательно происходит ежедневно.
Периодически мы делаем паузы, особенно, если вносим изменения,
затрагивающие ядро системы.
Устаревшие версии удаляются,
поэтому каждый релиз доступен обычно в&#160;течение двух-трёх месяцев.</p>
<?php }?>
<?php luwrain_end_page('/download/nightly/index.php');?>
