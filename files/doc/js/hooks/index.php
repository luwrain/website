<?php include "../../../functions.php"; luwrain_begin_page('/doc/js/hooks/index.php', luwrain_current_lang() == 'ru'?'Список событий JavaScript':'List of JavaScript hooks');?>
<?php if (luwrain_current_lang() == 'en') {?>
<h1>List of JavaScript hooks</h1>
<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
<h1>Список событий JavaScript</h1>

<h2>Ядро системы</h2>

<ul>
<li>luwrain.startup</li>
<li>luwrain.desktop.announce</li>
<li>luwrain.speech.text.regular</li>
<li>luwrain.i18n.ru.speech.natural.pre</li>
<li>luwrain.i18n.ru.speech.programming</li>
</ul>

<h1>Просмотр документов</h1>

<ul>
<li>luwrain.reader.doc.builder
<ul>
<li>contentType</li>
<li>свойства</li>
<li>g пусть к файлу</li>
<li>luwrain.reader.doc.error</li>
<li>свойства</li>
<li>исключение</li>
</ul></li>
</ul>

<h2>Менеджер персональной информации (PIM)</h2>

<p>luwrain.pim.message.new.save</p>

<h2>Фоновый сервис воспроизведеняи медиафайлов</h2>

<ul>
<li>luwrain.player.album.play</li>
<li>luwrain.prop.player.track.sec</li>
</ul>

<h2>Медиацентр</h2>

<ul>
<li>luwrain.app.player.areas.albums.input</li>
<li>luwrain.app.player.areas.playlist.input</li>
<li>luwrain.app.player.areas.control.input
<ul>
<li>событие</li>
<li>альбом</li>
</ul></li>
</ul>

<h2>Электронная почта</h2>

<ul>
<li>luwrain.mail.summary.organize</li>
</ul>

<h2>Коммандер</h2>

<ul>
<li>luwrain.app.commander.preview.local.custom</li>
<li>luwrain.app.commander.preview.local.default
передаётся файл</li>
</ul>
<?php }?>
<?php luwrain_end_page('/doc/js/hooks/index.php');?>
