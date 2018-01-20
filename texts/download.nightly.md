
ENTITLE='Nightly'
RUTITLE='Nightly'
TARGET=download/nightly/index.php

luwrain-page-en

# Nightly builds

Quick access:

* [Current JUnit testing report](http://download.luwrain.org/nightly/latest/junit-report.html)
* <a href="http://download.luwrain.org/nightly/latest/luwrain-windows-app-nightly-<?php echo lwr_nightly_latest_date();?>.zip">Current build as an~application for~Microsoft Windows</a>

In~order to~make our~development process more transparent and smooth,
we support publishing of~the~nightly builds.
You can find them at~the~following addresses: 

* Entire history of~available nightly builds: [http://download.luwrain.org/nightly/](http://download.luwrain.org/nightly/)
* The~most recent nightly build: [http://download.luwrain.org/nightly/latest/](http://download.luwrain.org/nightly/latest/)

## Structure of~our~nightly builds

Each nightly release consists of~several components;
you can find their descriptions below
with~the~direct links to~the~corresponding  files in~the~most recent build:

* <a href="http://download.luwrain.org/nightly/latest/luwrain-nightly-<?php echo lwr_nightly_latest_date();?>.tar.gz">luwrain-nightly</a>: the~source code used during the~compilation
* <a href="http://download.luwrain.org/nightly/latest/luwrain-windows-app-nightly-<?php echo lwr_nightly_latest_date();?>.zip">luwrain-windows-app</a>: the~application for~Microsoft Windows prepared for~immediate launch
* <a href="http://download.luwrain.org/nightly/latest/luwrain-windows-pkg-nightly-<?php echo lwr_nightly_latest_date();?>.zip">luwrain-windows-pkg</a>: the~build for~creation of~JavaFXPackager distribution for~Microsoft Windows
* <a href="http://download.luwrain.org/nightly/latest/luwrain-windows-nojre-nightly-<?php echo lwr_nightly_latest_date();?>.zip">luwrain-windows-nojre</a>: the~build for~Microsoft Windows prepared for~launch with~external Java virtual machine (no JRE inside)
* <a href="http://download.luwrain.org/nightly/latest/luwrain-linux-pkg-nightly-<?php echo lwr_nightly_latest_date();?>.tar.gz">luwrain-linux-pkg</a>:  the~build for~creation of~JavaFXPackager distribution for~GNU/Linux
* <a href="http://download.luwrain.org/nightly/latest/luwrain-linux-nojre-nightly-<?php echo lwr_nightly_latest_date();?>.tar.gz">luwrain-linux-nojre</a>: the~build for~GNU/Linux prepared for~launch with~external Java virtual machine (no JRE inside)
* <a href="http://download.luwrain.org/nightly/latest/luwrain-sdk-nightly-<?php echo lwr_nightly_latest_date();?>.zip">luwrain-sdk</a>: LUWRAIN~SDK (with~Javadoc documentation);
* <a href="http://download.luwrain.org/nightly/latest/luwrain-iso-nightly-<?php echo lwr_nightly_latest_date();?>.tar.gz">luwrain-iso</a>: the~build for~creation of~ISO-images based on~Ubuntu Linux

You can also download the~files checksums in~the~following formats:

* [SHA1](http://download.luwrain.org/nightly/latest/sha1sum.txt)
* [MD5](http://download.luwrain.org/nightly/latest/md5sum.txt)

Although we call them nightly,
this doesn't mean that  releases must be necessarily once a~day.
Sometimes we take pauses, especially if having a~work affecting deep design of~LUWRAIN.
Outdated versions  are deleted from this directory,
so these releases are usually   available within a~couple  of~months.

luwrain-page-ru

# Nightly-сборки

Быстрый доступ:

* [Текущий отчёт JUnit-тестирования](http://download.luwrain.org/nightly/latest/junit-report.html)
* <a href="http://download.luwrain.org/nightly/latest/luwrain-windows-32bit-nightly-<?php echo lwr_nightly_latest_date();?>.zip">Текущая сборка в~виде приложения для~Microsoft Windows</a>

Для~того, чтобы сделать наш процесс разработки более прозрачным и управляемым, 
мы поддерживаем выпуск nightly-сборок.
Они доступны по~этим ссылкам:

* Общий каталог с~текущей историей nightly-сборок: [http://download.luwrain.org/nightly/](http://download.luwrain.org/nightly/)
* Самая свежая nightly-сборка: [http://download.luwrain.org/nightly/latest/](http://download.luwrain.org/nightly/latest/)

__ВНИМАНИЕ:__
Для~полностью правильного  тестирования nightly-сборки убедитесь,
что у вас не~осталось файлов каких-либо предыдущих релизов.

## Структура nightly-релизов

Каждый nightly-релиз состоит из~нескольких файлов,
Ниже приведён их~перечень с~соответствующими прямыми ссылками на~самую свежую сборку:

* <a href="http://download.luwrain.org/nightly/latest/luwrain-nightly-<?php echo lwr_nightly_latest_date();?>.tar.gz">luwrain-nightly</a>: исходные тексты LUWRAIN, использованные в~ходе сборки;
* <a href="http://download.luwrain.org/nightly/latest/luwrain-windows-32bit-nightly-<?php echo lwr_nightly_latest_date();?>.zip">luwrain-windows-32bit</a>: 32-битная версия для~Microsoft Windows, готовое к~запуску;
* <a href="http://download.luwrain.org/nightly/latest/luwrain-linux-32bit-nightly-<?php echo lwr_nightly_latest_date();?>.tar.gz">luwrain-linux-32bit</a>: 32-битная версия для~GNU/Linux (для~запуска требуется Java~SE Runtime Environment);
* <a href="http://download.luwrain.org/nightly/latest/luwrain-linux-64bit-nightly-<?php echo lwr_nightly_latest_date();?>.tar.gz">luwrain-linux-32bit</a>: 64-битная версия для~GNU/Linux (для~запуска требуется Java~SE Runtime Environment);
* <a href="http://download.luwrain.org/nightly/latest/luwrain-sdk-nightly-<?php echo lwr_nightly_latest_date();?>.zip">luwrain-sdk</a>: сборка LUWRAIN~SDK (включает документацию Javadoc);

Вы также можете [загрузить контрольные суммы](http://download.luwrain.org/nightly/latest/sha1sum.txt) упомянутых выше файлов в~aформате SHA1.

Несмотря на~то, что мы называем эти~релизы  nightly,
это не~означает, что они обновляются строго ежедневно.
Периодически мы делаем паузы, особенно, если вносим изменения,
затрагивающие ядро системы.
Устаревшие версии удаляются,
поэтому каждый релиз доступен обычно в~течение двух-трёх месяцев.

