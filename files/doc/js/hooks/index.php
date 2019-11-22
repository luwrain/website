<?php include "../../../functions.php"; luwrain_begin_page('/doc/js/hooks/index.php', luwrain_current_lang() == 'ru'?'События JavaScript':'JavaScript hooks');?>
<?php if (luwrain_current_lang() == 'en') {?>
<h1>JavaScript hooks</h1>

<ul>
<li><a href="<?php echo luwrain_link('luwrain.announcement/');?>">luwrain.announcement</a></li>
<li><a href="<?php echo luwrain_link('luwrain.app.player.areas.albums.input/');?>">luwrain.app.player.areas.albums.input</a></li>
<li><a href="<?php echo luwrain_link('luwrain.app.player.areas.control.input/');?>">luwrain.app.player.areas.control.input</a></li>
<li><a href="<?php echo luwrain_link('luwrain.app.player.areas.playlist.input/');?>">luwrain.app.player.areas.playlist.input</a></li>
<li><a href="<?php echo luwrain_link('luwrain.area.clear/');?>">luwrain.area.clear</a></li>
<li><a href="<?php echo luwrain_link('luwrain.area.region.point.set/');?>">luwrain.area.region.point.set</a></li>
<li><a href="<?php echo luwrain_link('luwrain.clipboard.copy.all/');?>">luwrain.clipboard.copy.all</a></li>
<li><a href="<?php echo luwrain_link('luwrain.commander.info.local/');?>">luwrain.commander.info.local</a></li>
<li><a href="<?php echo luwrain_link('luwrain.commander.preview.local.default/');?>">luwrain.commander.preview.local.default</a></li>
<li><a href="<?php echo luwrain_link('luwrain.commander.size.local/');?>">luwrain.commander.size.local</a></li>
<li><a href="<?php echo luwrain_link('luwrain.edit.multiline.input/');?>">luwrain.edit.multiline.input</a></li>
<li><a href="<?php echo luwrain_link('luwrain.i18n.ru.speakable.natural/');?>">luwrain.i18n.ru.speakable.natural</a></li>
<li><a href="<?php echo luwrain_link('luwrain.i18n.ru.speakable.natural.pre/');?>">luwrain.i18n.ru.speakable.natural.pre</a></li>
<li><a href="<?php echo luwrain_link('luwrain.notepad.action/');?>">luwrain.notepad.action</a></li>
<li><a href="<?php echo luwrain_link('luwrain.notepad.actions/');?>">luwrain.notepad.actions</a></li>
<li><a href="<?php echo luwrain_link('luwrain.notepad.properties.basic/');?>">luwrain.notepad.properties.basic</a></li>
<li><a href="<?php echo luwrain_link('luwrain.player.album.play/');?>">luwrain.player.album.play</a></li>
<li><a href="<?php echo luwrain_link('luwrain.popups.disks.click/');?>">luwrain.popups.disks.click</a></li>
<li><a href="<?php echo luwrain_link('luwrain.popups.disks.list/');?>">luwrain.popups.disks.list</a></li>
<li><a href="<?php echo luwrain_link('luwrain.prop.player.track.index/');?>">luwrain.prop.player.track.index</a></li>
<li><a href="<?php echo luwrain_link('luwrain.prop.player.track.sec/');?>">luwrain.prop.player.track.sec</a></li>
<li><a href="<?php echo luwrain_link('luwrain.prop.player.track.url/');?>">luwrain.prop.player.track.url</a></li>
<li><a href="<?php echo luwrain_link('luwrain.reader.doc.builder/');?>">luwrain.reader.doc.builder</a></li>
<li><a href="<?php echo luwrain_link('luwrain.reader.doc.error/');?>">luwrain.reader.doc.error</a></li>
<li><a href="<?php echo luwrain_link('luwrain.speech.text.regular/');?>">luwrain.speech.text.regular</a>: transformes the&#160;text supposed to&#160;be&#160;spoken</li>
<li><a href="<?php echo luwrain_link('luwrain.startup/');?>">luwrain.startup</a></li>
<li><a href="<?php echo luwrain_link('luwrain.studio.project.types/');?>">luwrain.studio.project.types</a></li>
<li><a href="<?php echo luwrain_link('luwrain.url.open.default/');?>">luwrain.url.open.default</a></li>
<li><a href="<?php echo luwrain_link('luwrain.web.open/');?>">luwrain.web.open</a></li>
<li><a href="<?php echo luwrain_link('luwrain.web.search/');?>">luwrain.web.search</a></li>
<li><a href="<?php echo luwrain_link('luwrain.wiki.search/');?>">luwrain.wiki.search</a></li>
</ul>
<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
<h1>События JavaScript</h1>

<ul>
<li><a href="<?php echo luwrain_link('luwrain.announcement/');?>">luwrain.announcement</a></li>
<li><a href="<?php echo luwrain_link('luwrain.app.player.areas.albums.input/');?>">luwrain.app.player.areas.albums.input</a></li>
<li><a href="<?php echo luwrain_link('luwrain.app.player.areas.control.input/');?>">luwrain.app.player.areas.control.input</a></li>
<li><a href="<?php echo luwrain_link('luwrain.app.player.areas.playlist.input/');?>">luwrain.app.player.areas.playlist.input</a></li>
<li><a href="<?php echo luwrain_link('luwrain.area.clear/');?>">luwrain.area.clear</a></li>
<li><a href="<?php echo luwrain_link('luwrain.area.region.point.set/');?>">luwrain.area.region.point.set</a></li>
<li><a href="<?php echo luwrain_link('luwrain.clipboard.copy.all/');?>">luwrain.clipboard.copy.all</a></li>
<li><a href="<?php echo luwrain_link('luwrain.commander.info.local/');?>">luwrain.commander.info.local</a></li>
<li><a href="<?php echo luwrain_link('luwrain.commander.preview.local.default/');?>">luwrain.commander.preview.local.default</a></li>
<li><a href="<?php echo luwrain_link('luwrain.commander.size.local/');?>">luwrain.commander.size.local</a></li>
<li><a href="<?php echo luwrain_link('luwrain.edit.multiline.input/');?>">luwrain.edit.multiline.input</a></li>
<li><a href="<?php echo luwrain_link('luwrain.i18n.ru.speakable.natural/');?>">luwrain.i18n.ru.speakable.natural</a></li>
<li><a href="<?php echo luwrain_link('luwrain.i18n.ru.speakable.natural.pre/');?>">luwrain.i18n.ru.speakable.natural.pre</a></li>
<li><a href="<?php echo luwrain_link('luwrain.notepad.action/');?>">luwrain.notepad.action</a></li>
<li><a href="<?php echo luwrain_link('luwrain.notepad.actions/');?>">luwrain.notepad.actions</a></li>
<li><a href="<?php echo luwrain_link('luwrain.notepad.properties.basic/');?>">luwrain.notepad.properties.basic</a></li>
<li><a href="<?php echo luwrain_link('luwrain.player.album.play/');?>">luwrain.player.album.play</a></li>
<li><a href="<?php echo luwrain_link('luwrain.popups.disks.click/');?>">luwrain.popups.disks.click</a></li>
<li><a href="<?php echo luwrain_link('luwrain.popups.disks.list/');?>">luwrain.popups.disks.list</a></li>
<li><a href="<?php echo luwrain_link('luwrain.prop.player.track.index/');?>">luwrain.prop.player.track.index</a></li>
<li><a href="<?php echo luwrain_link('luwrain.prop.player.track.sec/');?>">luwrain.prop.player.track.sec</a></li>
<li><a href="<?php echo luwrain_link('luwrain.prop.player.track.url/');?>">luwrain.prop.player.track.url</a></li>
<li><a href="<?php echo luwrain_link('luwrain.reader.doc.builder/');?>">luwrain.reader.doc.builder</a></li>
<li><a href="<?php echo luwrain_link('luwrain.reader.doc.error/');?>">luwrain.reader.doc.error</a></li>
<li><a href="<?php echo luwrain_link('luwrain.speech.text.regular/');?>">luwrain.speech.text.regular</a>: обрабатывает текст, предназначенный для&#160;произношения текущим синтезатором речи</li>
<li><a href="<?php echo luwrain_link('luwrain.startup/');?>">luwrain.startup</a></li>
<li><a href="<?php echo luwrain_link('luwrain.studio.project.types/');?>">luwrain.studio.project.types</a></li>
<li><a href="<?php echo luwrain_link('luwrain.url.open.default/');?>">luwrain.url.open.default</a></li>
<li><a href="<?php echo luwrain_link('luwrain.web.open/');?>">luwrain.web.open</a></li>
<li><a href="<?php echo luwrain_link('luwrain.web.search/');?>">luwrain.web.search</a></li>
<li><a href="<?php echo luwrain_link('luwrain.wiki.search/');?>">luwrain.wiki.search</a></li>
</ul>
<?php }?>
<?php luwrain_end_page('/doc/js/hooks/index.php');?>
