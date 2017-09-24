<?php include "../../../functions.php"; luwrain_begin_page('/doc/devel/nightly/index.php', luwrain_current_lang() == 'ru'?'Структура nightly-релизов':'Structure of nightly releases');?>
<?php if (luwrain_current_lang() == 'en') {?>
<h1>Structure of&#160;nightly releases</h1>
<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
<h1>Структура nightly-релизов</h1>

<p>См.&#160;также:</p>

<ul>
<li><a href="<?php echo luwrain_link('compilation/');?>">Сборка nightly-релизов из&#160;исходных текстов</a></li>
</ul>

<p>Мы публикуем nightly-релизы в&#160;качестве некоторого среза состояния нашего процесса разработки для&#160;удобного отслеживания изменений.
Несмотря на&#160;своё название, эти&#160;сборки  не&#160;являются строго ежедневными.
В&#160;какие-то периоды времени выпуск может пропускаться,
а&#160; их&#160;количество, хранимое на&#160;сайте, определяется свободным дисковым пространством на&#160;сервере.</p>

<p>История текущих nightly-релизов доступна по&#160;этой ссылке:</p>

<ul>
<li><a href="http://download.luwrian.org/nightly/">http://download.luwrian.org/nightly/</a></li>
</ul>

<p>Один из&#160;подкаталогов всегда указывает на&#160;самую свежую сборку:</p>

<ul>
<li><a href="http://download.luwrain.org/nightly/latest/">http://download.luwrain.org/nightly/latest/</a></li>
</ul>
<?php }?>
<?php luwrain_end_page('/doc/devel/nightly/index.php');?>
