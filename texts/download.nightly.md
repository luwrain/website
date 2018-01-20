
ENTITLE='Nightly releases'
RUTITLE='Nightly-релизы'
TARGET=download/nightly/index.php

luwrain-page-en

# Nightly releases

Quick access:

* [Current JUnit testing report](http://download.luwrain.org/nightly/latest/junit-report.html)
* <a href="http://download.luwrain.org/nightly/latest/luwrain-windows-32bit-nightly-<?php echo lwr_nightly_latest_date();?>.zip">The~current nightly release as an~32-bit application for~Microsoft Windows</a>

In~order to~make our~development process more transparent and smooth,
we support publishing of~the~nightly releases.
You can find them at~the~following addresses: 

* Entire history of~available nightly releases: [http://download.luwrain.org/nightly/](http://download.luwrain.org/nightly/)
* The~most recent nightly release: [http://download.luwrain.org/nightly/latest/](http://download.luwrain.org/nightly/latest/)

## Structure of~our~nightly releases

Each nightly release consists of~several components;
you can find their descriptions below
with~the~direct links to~the~corresponding  files in~the~most recent version:


* <a href="http://download.luwrain.org/nightly/latest/luwrain-nightly-<?php echo lwr_nightly_latest_date();?>.tar.gz">luwrain-nightly</a>: the~source code used for~the~release
* <a href="http://download.luwrain.org/nightly/latest/luwrain-windows-32bit-nightly-<?php echo lwr_nightly_latest_date();?>.zip">luwrain-windows-32bit</a>: a~32-bit application for~Microsoft Windows suitable for~immediate launching
* <a href="http://download.luwrain.org/nightly/latest/luwrain-linux-32bit-nightly-<?php echo lwr_nightly_latest_date();?>.tar.gz">luwrain-linux-32bit</a>: a~32-bit build for~Gnu/Linux (requires installed Java~SE Runtime Environment)
* <a href="http://download.luwrain.org/nightly/latest/luwrain-linux-64bit-nightly-<?php echo lwr_nightly_latest_date();?>.tar.gz">luwrain-linux-64bit</a>:  a~64-bit build for~Gnu/Linux (requires installed Java~SE Runtime Environment)
* <a href="http://download.luwrain.org/nightly/latest/luwrain-sdk-nightly-<?php echo lwr_nightly_latest_date();?>.zip">luwrain-sdk</a>: the~LUWRAIN SDK

You can also [download the~files checksums](http://download.luwrain.org/nightly/latest/sha1sum.txt) in~SHA1 format.

Although we call them nightly,
this doesn't mean that  releases must be necessarily once a~day.
Sometimes we take pauses, especially if having a~work affecting deep design of~LUWRAIN.
Outdated versions  are deleted from this directory,
so these releases are usually   available within a~couple  of~months.

luwrain-page-ru

# Nightly-релизы

Быстрый доступ:

* [Текущий отчёт JUnit-тестирования](http://download.luwrain.org/nightly/latest/junit-report.html)
* <a href="http://download.luwrain.org/nightly/latest/luwrain-windows-32bit-nightly-<?php echo lwr_nightly_latest_date();?>.zip">Текущий релиз в~виде приложения для~Microsoft Windows</a>

Для~того, чтобы сделать наш процесс разработки более прозрачным и управляемым, 
мы поддерживаем выпуск nightly-релизов.
Они доступны по~этим ссылкам:

* Общий каталог с~текущей историей nightly-релизов: [http://download.luwrain.org/nightly/](http://download.luwrain.org/nightly/)
* Самый свежий nightly-релиз: [http://download.luwrain.org/nightly/latest/](http://download.luwrain.org/nightly/latest/)

__ВНИМАНИЕ:__
Для~правильного  тестирования nightly-релиза убедитесь,
что в~вашей системе не~осталось файлов предыдущих запусков.

## Структура nightly-релизов

Каждый nightly-релиз состоит из~нескольких файлов.
Ниже приведён их~перечень с~соответствующими прямыми ссылками на~самую свежую версию:

* <a href="http://download.luwrain.org/nightly/latest/luwrain-nightly-<?php echo lwr_nightly_latest_date();?>.tar.gz">luwrain-nightly</a>: исходные тексты LUWRAIN, использованные в~ходе сборки;
* <a href="http://download.luwrain.org/nightly/latest/luwrain-windows-32bit-nightly-<?php echo lwr_nightly_latest_date();?>.zip">luwrain-windows-32bit</a>: 32-битная версия для~Microsoft Windows, готовое к~запуску;
* <a href="http://download.luwrain.org/nightly/latest/luwrain-linux-32bit-nightly-<?php echo lwr_nightly_latest_date();?>.tar.gz">luwrain-linux-32bit</a>: 32-битная версия для~GNU/Linux (для~запуска требуется Java~SE Runtime Environment);
* <a href="http://download.luwrain.org/nightly/latest/luwrain-linux-64bit-nightly-<?php echo lwr_nightly_latest_date();?>.tar.gz">luwrain-linux-64bit</a>: 64-битная версия для~GNU/Linux (для~запуска требуется Java~SE Runtime Environment);
* <a href="http://download.luwrain.org/nightly/latest/luwrain-sdk-nightly-<?php echo lwr_nightly_latest_date();?>.zip">luwrain-sdk</a>: сборка LUWRAIN~SDK (включает документацию Javadoc);

Вы также можете [загрузить контрольные суммы](http://download.luwrain.org/nightly/latest/sha1sum.txt) упомянутых выше файлов в~aформате SHA1.

Несмотря на~то, что мы называем эти~релизы  nightly,
их обновление необязательно происходит ежедневно.
Периодически мы делаем паузы, особенно, если вносим изменения,
затрагивающие ядро системы.
Устаревшие версии удаляются,
поэтому каждый релиз доступен обычно в~течение двух-трёх месяцев.
