
ENTITLE='Customizing Notepad'
RUTITLE='Пользовательские функции в приложении Блокнот'
TARGET=doc/devel/notepad-customizing/index.php

luwrain-page-en

# Customizing Notepad

luwrain-page-ru

# Создание пользовательских функций в~приложении Блокнот

См.~также:

* [Стандартный набор скриптов для~приложения Блокнот в~дистрибутивах LUWRAIN](https://github.com/luwrain/extensions/blob/master/js/notepad.js)

Приложение Блокнот, предлагающее основные функции редактирования текста,
позволяет расширять свою функциональность за~счёт пользовательских функций,
которые можно самостоятельно создать на~языке JavaScript.

Существуют следующие основные типы подобных функций:

1. Создание операции редактирования текста с~возможностью её вызова из~контекстного меню.
1. Создание обработчика, дополняющего действия пользователя в~процессе редактирования текста.

## Дополнение действий пользователя в~процессе редактирования текста

Приложение Блокнот может предлагать возможности редактирования текста в~одном из~трёх режимов:

* нейтральный режим;
* режим естественного языка;
* режим редактирования исходных текстов программ и конфигурационных файлов.

В~каждом из~режимов используются разные наборы событий,
вызываемых в~процессе редактирования текста.
С~точки зрения реализации этого механизма приложение Блокнот создаёт по~отдельному экземпляру класса [DirectScriptMultilineEditCorrector](http://luwrain.org/javadoc/org/luwrain/controls/DirectScriptMultilineEditCorrector.html) для~каждого из~режимов.
Согласно общей логике работы этого класса, например, для~нейтрального  режима вызываются следующие события:

* luwrain.notepad.mode.none.delete.char.pre
* luwrain.notepad.mode.none.delete.char.post
* luwrain.notepad.mode.none.delete.region.pre
* luwrain.notepad.mode.none.delete.region.post
* luwrain.notepad.mode.none.insert.region.pre
* luwrain.notepad.mode.none.insert.region.post
* luwrain.notepad.mode.none.insert.chars.pre
* luwrain.notepad.mode.none.insert.chars.post
* luwrain.notepad.mode.none.merge.lines.pre
* luwrain.notepad.mode.none.merge.lines.post
* luwrain.notepad.mode.none.split.lines.pre
* luwrain.notepad.mode.none.split.lines.post

Для режима естественного языка  и режима редактирования исходных текстов программ префиксы событий должны быть заменены, соответственно,
на~_дluwrain.mode.natural_ и
_luwrain.mode.programming_.
События, оканчивающиеся на~_.pre_, вызываются до~основного обработчика операции редактирования,
а~события, оканчивающиеся на~_.post_, в~свою очередь, вызываются после выполнения основной операции редактирования.
События до~операции редактирования могут вернуть значение _false_? и это будет подразумевать отмену всей операции,
но необходимо иметь в~виду, что обработчиков может быть несколько,
и каждый из~них может не~быть первым в~списке,
следовательно, в~случае отмены операции к~этому моменту уже могут быть выполнены изменения предшествующих обработчиков.