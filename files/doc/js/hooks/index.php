<?php include "../../../functions.php"; luwrain_begin_page('/doc/js/hooks/index.php', luwrain_current_lang() == 'ru'?'Список событий JavaScript':'List of JavaScript hooks');?>
<?php if (luwrain_current_lang() == 'en') {?>
<h1>List of JavaScript hooks</h1>
<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
<h1>Список событий JavaScript</h1>

<p>luwrain.mail.summary.organize
luwrain.pim.message.new.save</p>

<p>luwrain.speech.text.regular
luwrain.i18n.ru.speech.natural
luwrain.i18n.ru.speech.programming</p>

<p>luwrain.player.album.play
"luwrain.prop.player.track.sec"</p>

<h2>Приложения</h2>

<h3>Плеер</h3>

<p>luwrain.app.player.areas.albums.input
luwrain.app.player.areas.playlist.input
luwrain.app.player.areas.control.input</p>

<p>событие
альбом</p>

<h3>Коммандер</h3>

<p>luwrain.app.commander.preview.local.custom
luwrain.app.commander.preview.local.default
передаётся файл</p>
<?php }?>
<?php luwrain_end_page('/doc/js/hooks/index.php');?>
