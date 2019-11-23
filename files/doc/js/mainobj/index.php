<?php include "../../../functions.php"; luwrain_begin_page('/doc/js/mainobj/index.php', luwrain_current_lang() == 'ru'?'Основной интерфейс LUWRAIN для программ на JavaScript':'The main interface of LUWRAIN for JavaScript extension');?>
<?php if (luwrain_current_lang() == 'en') {?>
<h1>The&#160;main interface of&#160; LUWRAIN for&#160;JavaScript extension</h1>
<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
<h1>Основной интерфейс LUWRAIN для&#160;программ на&#160;JavaScript</h1>

<p>Во&#160;время исполнения сценариев JavaScript в&#160;ДLUWRAIN всегда доступен глобальный объек <em>LUWRAIN</em>,
который обеспечивает взаимодействие с&#160;ядром системы.
Он предоставляет доступ к&#160;некоторым функциям интерфейса <em><a href="http://luwrain.org/javadoc/org/luwrain/core/Luwrain.html">org.luwrain.core.Luwrain</a></em>.
На&#160;этой странице приведён список  доступных элементов объекта <em>LUWRAIN</em>.
Если в&#160;конце названия присутствуют пустые круглые скобки,
то соответствующий элемент является функцией.
В&#160;противном случае это&#160;дочерний объект.</p>

<ul>
<li><a href="<?php echo luwrain_link('addApp/');?>">addApp()</a>:</li>
<li><a href="<?php echo luwrain_link('addCommand/');?>">addCommand()</a>:</li>
<li><a href="<?php echo luwrain_link('addHook/');?>">addHook()</a>:</li>
<li><a href="<?php echo luwrain_link('addShortcut/');?>">addShortcut()</a>:</li>
<li><a href="<?php echo luwrain_link('addWorker/');?>">addWorker()</a>:</li>
<li><a href="<?php echo luwrain_link('createPropertyHook/');?>">createPropertyHook()</a>:</li>
<li><a href="<?php echo luwrain_link('getActiveAreaText/');?>">getActiveAreaText()</a>:</li>
<li><a href="<?php echo luwrain_link('i18n/');?>">i18n</a>:</li>
<li><a href="<?php echo luwrain_link('launchApp/');?>">launchApp()</a>:</li>
<li><a href="<?php echo luwrain_link('message/');?>">message()</a>:</li>
<li><a href="<?php echo luwrain_link('openUrl/');?>">openUrl()</a>:</li>
<li><a href="<?php echo luwrain_link('os/');?>">os</a>:</li>
<li><a href="<?php echo luwrain_link('player/');?>">player</a>:</li>
<li><a href="<?php echo luwrain_link('popups/');?>">popups</a>:</li>
<li><a href="<?php echo luwrain_link('prop/');?>">prop</a>:</li>
<li><a href="<?php echo luwrain_link('quit/');?>">quit()</a>:</li>
<li><a href="<?php echo luwrain_link('registry/');?>">registry</a>:</li>
<li><a href="<?php echo luwrain_link('runBkg/');?>">runBkg()</a>:</li>
<li><a href="<?php echo luwrain_link('runWorker/');?>">runWorker()</a>:</li>
<li><a href="<?php echo luwrain_link('sounds/');?>">sounds</a>:</li>
<li><a href="<?php echo luwrain_link('speak/');?>">speak()</a>:</li>
<li><a href="<?php echo luwrain_link('spokenText/');?>">spokenText</a>:</li>
</ul>
<?php }?>
<?php luwrain_end_page('/doc/js/mainobj/index.php');?>
