<?php include "../../functions.php"; luwrain_begin_page('/download/nightly/index.php', luwrain_current_lang() == 'ru'?'Nightly':'Nightly');?>
<?php if (luwrain_current_lang() == 'en') {?>
<h1>Nightly builds</h1>

<p>In&#160;order to&#160;make our&#160;development process more transparent and smooth,
we support publishing of&#160;the&#160;nightly builds.
You can find them at&#160;the&#160;following address: </p>

<ul>
<li><a href="http://download.luwrain.org/nightly/">http://download.luwrain.org/nightly/</a></li>
</ul>

<p>Although we call them nightly,
this doesn't mean that  releases must be necessarily once a&#160;day.
Sometimes we take pauses, especially if having work affecting deep design of&#160;LUWRAIN.
Outdated versions  are deleted from this directory,
so these releases are usually   available within a&#160;couple  of&#160;months.
We do not impose any strict policy on&#160;this&#160;process,
removing files just when consider them not&#160;actual any&#160;more.</p>

<p>For&#160;your convenience we also maintain the&#160;directory with&#160;the&#160;latest nightly build.
You can find it at the&#160;following address:</p>

<ul>
<li><a href="http://download.luwrain.org/nightly/latest/">http://download.luwrain.org/nightly/latest/</a></li>
</ul>

<h2>See&#160;also</h2>

<ul>
<li><a href="<?php echo luwrain_link('/doc/devel/nightly/');?>">Compiling our nightly releases</a> </li>
</ul>
<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
<h1>Nightly-сборки</h1>

<p>Быстрый доступ:</p>

<ul>
<li><a href="http://download.luwrain.org/nightly/latest/junit-report.html">Текущий отчёт JUnit-тестирования</a></li>
<li><a href="http://download.luwrain.org/nightly/latest/luwrain-windows-app-nightly-<?php echo lwr_nightly_latest_date();?>.zip">Текущая сборка в&#160;виде приложения для&#160;Microsoft Windows</a></li>
</ul>

<p>Для&#160;того, чтобы сделать наш процесс разработки более прозрачным и гладким, 
мы поддерживаем выпуск nightly-сборок.
Они доступны по&#160;этим ссылкам:</p>

<ul>
<li>Общий каталог с&#160;текущей историей nightly-сборок: <a href="http://download.luwrain.org/nightly/">http://download.luwrain.org/nightly/</a></li>
<li>Самая свежая nightly-сборка: <a href="http://download.luwrain.org/nightly/latest/">http://download.luwrain.org/nightly/latest/</a></li>
</ul>

<h2>Структура nightly-релизов</h2>

<p>Каждый nightly-релиз состоит из&#160;нескольких компонентов,
упакованных в&#160;отдельный файл.
Ниже приведён их&#160;перечень с&#160;прямыми ссылками на&#160;соответствующие файлы
в&#160;самой свежей сборке:</p>

<ul>
<li><a href="http://download.luwrain.org/nightly/latest/luwrain-nightly-<?php echo lwr_nightly_latest_date();?>.tar.gz">luwrain-nightly</a>: исходные тексты LUWRAIN, использованные в&#160;ходе сборки;</li>
<li><a href="http://download.luwrain.org/nightly/latest/luwrain-windows-app-nightly-<?php echo lwr_nightly_latest_date();?>.zip">luwrain-windows-app</a>: приложение для&#160;Microsoft Windows, готовое к&#160;запуску;</li>
<li><a href="http://download.luwrain.org/nightly/latest/luwrain-windows-pkg-nightly-<?php echo lwr_nightly_latest_date();?>.zip">luwrain-windows-pkg</a>: сборка для&#160;создания инсталлятора для&#160;Microsoft Windows на&#160;основе JavaFXPackager;</li>
<li><a href="http://download.luwrain.org/nightly/latest/luwrain-windows-nojre-nightly-<?php echo lwr_nightly_latest_date();?>.zip">luwrain-windows-nojre</a>: сборка для&#160;Microsoft Windows, предназначенная для&#160;запуска при&#160;помощи внешней виртуальной машины Java (JRE отсутствует в&#160;составе архива);</li>
<li><a href="http://download.luwrain.org/nightly/latest/luwrain-linux-pkg-nightly-<?php echo lwr_nightly_latest_date();?>.tar.gz">luwrain-linux-pkg</a>: сборка для&#160;создания инсталлятора для&#160;GNU/Linux на&#160;основе JavaFXPackager;</li>
<li><a href="http://download.luwrain.org/nightly/latest/luwrain-linux-nojre-nightly-<?php echo lwr_nightly_latest_date();?>.tar.gz">luwrain-linux-nojre</a>: сборка для&#160;GNU/Linux, предназначенная для&#160;запуска при&#160;помощи внешней виртуальной машины Java (JRE отсутствует в&#160;составе архива);</li>
<li><a href="http://download.luwrain.org/nightly/latest/luwrain-sdk-nightly-<?php echo lwr_nightly_latest_date();?>.zip">luwrain-sdk</a>: сборка LUWRAIN&#160;SDK (включает документацию Javadoc);</li>
<li><a href="http://download.luwrain.org/nightly/latest/luwrain-iso-nightly-<?php echo lwr_nightly_latest_date();?>.tar.gz">luwrain-iso</a>: сборка для&#160;создания ISO-образов на&#160;основе Ubuntu Linux.</li>
</ul>

<p>Вы также можете загрузить контрольные суммы упомянутых выше файлов в&#160;следующих форматах:</p>

<ul>
<li><a href="http://download.luwrain.org/nightly/latest/sha1sum.txt">SHA1</a>;</li>
<li><a href="http://download.luwrain.org/nightly/latest/md5sum.txt">MD5</a>.</li>
</ul>

<p>Несмотря на&#160;то, что мы называем эти&#160;релизы  nightly,
это не&#160;означает, что они обновляются строго ежедневно.
Периодически мы делаем паузы, особенно, если вносим изменения,
затрагивающие ядро системы.
Устаревшие версии удаляются,
поэтому каждый релиз доступен обычно в&#160;течение двух-трёх месяцев.</p>
<?php }?>
<?php luwrain_end_page('/download/nightly/index.php');?>
