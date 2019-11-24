<?php include "../../../functions.php"; luwrain_begin_page('/doc/js/mainobj/index.php', luwrain_current_lang() == 'ru'?'Основной интерфейс LUWRAIN для программ на JavaScript':'The main interface of LUWRAIN for JavaScript extension');?>
<?php if (luwrain_current_lang() == 'en') {?>
<h1>The&#160;main interface of&#160; LUWRAIN for&#160;JavaScript extension</h1>
<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
<h1>Основной интерфейс LUWRAIN для&#160;программ на&#160;JavaScript</h1>

<p>Во&#160;время исполнения сценариев JavaScript в&#160;LUWRAIN всегда доступен глобальный объек <em>LUWRAIN</em>,
который обеспечивает взаимодействие с&#160;ядром системы.
Он предоставляет доступ к&#160;некоторым функциям интерфейса <em><a href="http://luwrain.org/javadoc/org/luwrain/core/Luwrain.html">org.luwrain.core.Luwrain</a></em>.
На&#160;этой странице приведён список  доступных элементов объекта <em>LUWRAIN</em>.
Если в&#160;конце названия присутствуют пустые круглые скобки,
то соответствующий элемент является функцией.
В&#160;противном случае это&#160;дочерний объект.</p>

<ul>
<li><a href="<?php echo luwrain_link('addApp/');?>">addApp()</a>:
регистрирует новый объект-приложенеи в системе (синоним для&#160;<em>addShortcut()</em>)</li>
<li><a href="<?php echo luwrain_link('addCommand/');?>">addCommand()</a>:
регистрирует новую команду в&#160;системе</li>
<li><a href="<?php echo luwrain_link('addHook/');?>">addHook()</a>:
регистрирует новый обработчик события</li>
<li><a href="<?php echo luwrain_link('addShortcut/');?>">addShortcut()</a>:
регистрирует новый объект-приложенеи в системе (синоним для&#160;<em>addApp()</em>)</li>
<li><a href="<?php echo luwrain_link('addWorker/');?>">addWorker()</a>:
регистрирует функцию с&#160;автоматическим переодическим запуском</li>
<li><a href="<?php echo luwrain_link('createPropertyHook/');?>">createPropertyHook()</a>:
создаёт новое событие на&#160;изменение системного свойства</li>
<li><a href="<?php echo luwrain_link('getActiveAreaText/');?>">getActiveAreaText()</a>:
возвращает текстовый фрагмент активной области</li>
<li><a href="<?php echo luwrain_link('i18n/');?>">i18n</a>:
предоставляет доступ к&#160;функциям поддержки национальных языков и стандартов</li>
<li><a href="<?php echo luwrain_link('launchApp/');?>">launchApp()</a>:
запускает приложение</li>
<li><a href="<?php echo luwrain_link('message/');?>">message()</a>:
показывает сообщение пользователю</li>
<li><a href="<?php echo luwrain_link('openUrl/');?>">openUrl()</a>:
открывает гиперссылку с&#160;автоматическим выбором обработчика на&#160;основе её типа</li>
<li><a href="<?php echo luwrain_link('os/');?>">os</a>:
предоставляет доступ к&#160;функциям операционной системы</li>
<li><a href="<?php echo luwrain_link('player/');?>">player</a>:
предоставляет доступ к&#160;управлению системным медиаплеером</li>
<li><a href="<?php echo luwrain_link('popups/');?>">popups</a>:
показывает всплывающее окно из&#160;коллекции стандартных типов</li>
<li><a href="<?php echo luwrain_link('prop/');?>">prop</a>:
предоставляет доступ к&#160;системным свойствам</li>
<li><a href="<?php echo luwrain_link('quit/');?>">quit()</a>:
завершает работу в&#160;системе</li>
<li><a href="<?php echo luwrain_link('registry/');?>">registry</a>:
ппредоставляет доступ к&#160;данным реестра</li>
<li><a href="<?php echo luwrain_link('runBkg/');?>">runBkg()</a>:
выполняет действие в&#160;фоновом режиме</li>
<li><a href="<?php echo luwrain_link('runWorker/');?>">runWorker()</a>:
производит явный запуск выполнения регулярной автоматической функции</li>
<li><a href="<?php echo luwrain_link('sounds/');?>">sounds</a>:
воспроизводит один из&#160;системных звуков</li>
<li><a href="<?php echo luwrain_link('speak/');?>">speak()</a>:
произносит текстовый фрагмент речевым синтезатором</li>
<li><a href="<?php echo luwrain_link('spokenText/');?>">spokenText</a>:
производит предообработку текста для&#160;~последующего прочтения пользователю</li>
</ul>
<?php }?>
<?php luwrain_end_page('/doc/js/mainobj/index.php');?>
