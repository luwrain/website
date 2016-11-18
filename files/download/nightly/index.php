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

<p>Для&#160;того, чтобы сделать наш процесс разработки более прозрачным и гладким, 
мы поддерживаем выпуск nightly-сборок.
Они доступны по&#160;этой ссылке:</p>

<ul>
<li><a href="http://download.luwrain.org/nightly/">http://download.luwrain.org/nightly/</a></li>
</ul>

<p>Несмотря на&#160;то, что мы называем эти&#160;релизы  nightly,
это не&#160;означает, что они обновляются строго ежедневно.
Периодически мы делаем паузы, особенно, если вносим изменения,
затрагивающие ядро системы.
Устаревшие версии удаляются,
поэтому каждый релиз доступен обычно в&#160;течение двух-трёх месяцев.
Каких-либо строгих правил, как часто  это делать, у&#160;нас нет,
так что  это происходит, когда  на&#160;наш взгляд выпуски просто теряют  свою актуальность.</p>

<p>Для&#160;вашего удобства мы дополнительно создали каталог "<em>latest</em>",
в&#160;котором всегда доступна последняя nightly-сборка.
Вы можете его найти по&#160;следующей ссылке:</p>

<ul>
<li><a href="http://download.luwrain.org/nightly/latest/">http://download.luwrain.org/nightly/latest/</a></li>
</ul>

<h2>См.&#160;также</h2>

<ul>
<li><a href="<?php echo luwrain_link('/doc/devel/nightly/');?>">Компиляция наших nightly-сборок</a></li>
</ul>
<?php }?>
<?php luwrain_end_page('/download/nightly/index.php');?>
