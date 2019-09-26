<?php include "../../../functions.php"; luwrain_begin_page('/doc/devel/notepad-customizing/index.php', luwrain_current_lang() == 'ru'?'Пользовательские функции в приложении Блокнот':'Customizing Notepad');?>
<?php if (luwrain_current_lang() == 'en') {?>
<h1>Customizing Notepad</h1>
<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
<h1>Создание пользовательских функций в&#160;приложении Блокнот</h1>

<p>См.&#160;также:</p>

<ul>
<li><a href="https://github.com/luwrain/extensions/blob/master/js/notepad.js">Стандартный набор скриптов для&#160;приложения Блокнот в&#160;дистрибутивах LUWRAIN</a></li>
</ul>

<p>Приложение Блокнот, предлагающее основные функции редактирования текста,
позволяет расширять свою функциональность за&#160;счёт пользовательских функций,
которые можно самостоятельно создать на&#160;языке JavaScript.</p>

<p>Существуют следующие основные типы подобных функций:</p>

<ol>
<li>Создание операции редактирования текста с&#160;возможностью её вызова из&#160;контекстного меню.</li>
<li>Создание обработчика, дополняющего действия пользователя в&#160;процессе редактирования текста.</li>
</ol>

<h2>Дополнение действий пользователя в&#160;процессе редактирования текста</h2>

<p>Приложение Блокнот может предлагать возможности редактирования текста в&#160;одном из&#160;трёх режимов:</p>

<ul>
<li>нейтральный режим;</li>
<li>режим естественного языка;</li>
<li>режим редактирования исходных текстов программ и конфигурационных файлов.</li>
</ul>

<p>В&#160;каждом из&#160;режимов используются разные наборы событий,
вызываемых в&#160;процессе редактирования текста.
С&#160;точки зрения реализации этого механизма приложение Блокнот создаёт по&#160;отдельному экземпляру класса <a href="http://luwrain.org/javadoc/org/luwrain/controls/DirectScriptMultilineEditCorrector.html">DirectScriptMultilineEditCorrector</a> для&#160;каждого из&#160;режимов.
Согласно общей логике работы этого класса, например, для&#160;нейтрального  режима вызываются следующие события:</p>

<ul>
<li>luwrain.notepad.mode.none.delete.char.pre</li>
<li>luwrain.notepad.mode.none.delete.char.post</li>
<li>luwrain.notepad.mode.none.delete.region.pre</li>
<li>luwrain.notepad.mode.none.delete.region.post</li>
<li>luwrain.notepad.mode.none.insert.region.pre</li>
<li>luwrain.notepad.mode.none.insert.region.post</li>
<li>luwrain.notepad.mode.none.insert.chars.pre</li>
<li>luwrain.notepad.mode.none.insert.chars.post</li>
<li>luwrain.notepad.mode.none.merge.lines.pre</li>
<li>luwrain.notepad.mode.none.merge.lines.post</li>
<li>luwrain.notepad.mode.none.split.lines.pre</li>
<li>luwrain.notepad.mode.none.split.lines.post</li>
</ul>

<p>Для режима естественного языка  и режима редактирования исходных текстов программ префиксы событий должны быть заменены, соответственно,
на&#160;<em>дluwrain.mode.natural</em> и
<em>luwrain.mode.programming</em>.
События, оканчивающиеся на&#160;<em>.pre</em>, вызываются до&#160;основного обработчика операции редактирования,
а&#160;события, оканчивающиеся на&#160;<em>.post</em>, в&#160;свою очередь, вызываются после выполнения основной операции редактирования.
События до&#160;операции редактирования могут вернуть значение <em>false</em>? и это будет подразумевать отмену всей операции,
но необходимо иметь в&#160;виду, что обработчиков может быть несколько,
и каждый из&#160;них может не&#160;быть первым в&#160;списке,
следовательно, в&#160;случае отмены операции к&#160;этому моменту уже могут быть выполнены изменения предшествующих обработчиков.</p>
<?php }?>
<?php luwrain_end_page('/doc/devel/notepad-customizing/index.php');?>
