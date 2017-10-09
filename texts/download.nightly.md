
ENTITLE='Nightly'
RUTITLE='Nightly'
TARGET=download/nightly/index.php

luwrain-page-en

# Nightly builds 

In~order to~make our~development process more transparent and smooth,
we support publishing of~the~nightly builds.
You can find them at~the~following address: 

* [http://download.luwrain.org/nightly/](http://download.luwrain.org/nightly/)

Although we call them nightly,
this doesn't mean that  releases must be necessarily once a~day.
Sometimes we take pauses, especially if having work affecting deep design of~LUWRAIN.
Outdated versions  are deleted from this directory,
so these releases are usually   available within a~couple  of~months.
We do not impose any strict policy on~this~process,
removing files just when consider them not~actual any~more.

For~your convenience we also maintain the~directory with~the~latest nightly build.
You can find it at the~following address:

* [http://download.luwrain.org/nightly/latest/](http://download.luwrain.org/nightly/latest/)

## See~also

* [Compiling our nightly releases](local:/doc/devel/nightly/) 

luwrain-page-ru

# Nightly-сборки

Быстрый доступ:

* [Текущий отчёт JUnit-тестирования](http://download.luwrain.org/nightly/latest/junit-report.html)
* <a href="http://download.luwrain.org/nightly/latest/luwrain-windows-app-nightly-<?php echo lwr_nightly_latest_date();?>.zip">Текущая сборка в~виде приложения для~Microsoft Windows</a>

Для~того, чтобы сделать наш процесс разработки более прозрачным и гладким, 
мы поддерживаем выпуск nightly-сборок.
Они доступны по~этим ссылкам:

* Общий каталог с~текущей историей nightly-сборок: [http://download.luwrain.org/nightly/](http://download.luwrain.org/nightly/)
* Самая свежая nightly-сборка: [http://download.luwrain.org/nightly/latest/](http://download.luwrain.org/nightly/latest/)

## Структура nightly-релизов

Каждый nightly-релиз состоит из~нескольких компонентов,
упакованных в~отдельный файл.
Ниже приведён их~перечень с~прямыми ссылками на~соответствующие файлы
в~самой свежей сборке:

* <a href="http://download.luwrain.org/nightly/latest/luwrain-nightly-<?php echo lwr_nightly_latest_date();?>.tar.gz">luwrain-nightly</a>: исходные тексты LUWRAIN, использованные в~ходе сборки;
* <a href="http://download.luwrain.org/nightly/latest/luwrain-windows-app-nightly-<?php echo lwr_nightly_latest_date();?>.zip">luwrain-windows-app</a>: приложение для~Microsoft Windows, готовое к~запуску;
* <a href="http://download.luwrain.org/nightly/latest/luwrain-windows-pkg-nightly-<?php echo lwr_nightly_latest_date();?>.zip">luwrain-windows-pkg</a>: сборка для~создания инсталлятора для~Microsoft Windows на~основе JavaFXPackager;
* <a href="http://download.luwrain.org/nightly/latest/luwrain-windows-nojre-nightly-<?php echo lwr_nightly_latest_date();?>.zip">luwrain-windows-nojre</a>: сборка для~Microsoft Windows, предназначенная для~запуска при~помощи внешней виртуальной машины Java (JRE отсутствует в~составе архива);
* <a href="http://download.luwrain.org/nightly/latest/luwrain-linux-pkg-nightly-<?php echo lwr_nightly_latest_date();?>.tar.gz">luwrain-linux-pkg</a>: сборка для~создания инсталлятора для~GNU/Linux на~основе JavaFXPackager;
* <a href="http://download.luwrain.org/nightly/latest/luwrain-linux-nojre-nightly-<?php echo lwr_nightly_latest_date();?>.tar.gz">luwrain-linux-nojre</a>: сборка для~GNU/Linux, предназначенная для~запуска при~помощи внешней виртуальной машины Java (JRE отсутствует в~составе архива);
* <a href="http://download.luwrain.org/nightly/latest/luwrain-sdk-nightly-<?php echo lwr_nightly_latest_date();?>.zip">luwrain-sdk</a>: сборка LUWRAIN~SDK (включает документацию Javadoc);
* <a href="http://download.luwrain.org/nightly/latest/luwrain-iso-nightly-<?php echo lwr_nightly_latest_date();?>.tar.gz">luwrain-iso</a>: сборка для~создания ISO-образов на~основе Ubuntu Linux.

Вы также можете загрузить контрольные суммы упомянутых выше файлов в~следующих форматах:

* [SHA1](http://download.luwrain.org/nightly/latest/sha1sum.txt);
* [MD5](http://download.luwrain.org/nightly/latest/md5sum.txt).

Несмотря на~то, что мы называем эти~релизы  nightly,
это не~означает, что они обновляются строго ежедневно.
Периодически мы делаем паузы, особенно, если вносим изменения,
затрагивающие ядро системы.
Устаревшие версии удаляются,
поэтому каждый релиз доступен обычно в~течение двух-трёх месяцев.

