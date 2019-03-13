<?php include "../../../functions.php"; luwrain_begin_page('/doc/js/mainobj/index.php', luwrain_current_lang() == 'ru'?'Основной интерфейс LUWRAIN для программ на JavaScript':'The main interface of LUWRAIN for JavaScript extension');?>
<?php if (luwrain_current_lang() == 'en') {?>
<h1>The&#160;main interface of&#160; LUWRAIN for&#160;JavaScript extension</h1>
<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
<h1>Основной интерфейс LUWRAIN для&#160;программ на&#160;JavaScript</h1>

<p>Во&#160;всех программах JavaScript, исполняемых внутри среды LUWRAIN, всегда доступен для&#160;использования глобальный объект <em>LUWRAIN</em>.
Он используется для&#160;доступа к&#160;функциям ядра системы и по&#160;своей природе представляет собой обёртку к&#160;интерфейсу <a href="http://luwrain.org/api/org/luwrain/core/Luwrain.html">org.luwrain.core.Luwrain</a>.
На&#160;этой странице приведён список  объектов, доступных для&#160;использования через объект <em>LUWRAIN</em>.</p>

<ul>
<li><em>message</em></li>
<li><em>addCommandLineTool</em></li>
<li><em>addApp</em> (то же самое, что и <em>addShortcut</em>)</li>
<li><em>addCommand</em></li>
<li><em>getActiveAreaText</em></li>
<li><em>launchApp</em></li>
<li><em>runBkg</em></li>
</ul>
<?php }?>
<?php luwrain_end_page('/doc/js/mainobj/index.php');?>
