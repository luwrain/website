
ENTITLE='The main interface of LUWRAIN for JavaScript extension'
RUTITLE='Основной интерфейс LUWRAIN для программ на JavaScript'
TARGET=doc/js/mainobj/index.php

luwrain-page-en

# The~main interface of~ LUWRAIN for~JavaScript extension

luwrain-page-ru

# Основной интерфейс LUWRAIN для~программ на~JavaScript

Во~время исполнения сценариев JavaScript в~LUWRAIN всегда доступен глобальный объек _LUWRAIN_,
который обеспечивает взаимодействие с~ядром системы.
Он предоставляет доступ к~некоторым функциям интерфейса _[org.luwrain.core.Luwrain](http://luwrain.org/javadoc/org/luwrain/core/Luwrain.html)_.
На~этой странице приведён список  доступных элементов объекта _LUWRAIN_.
Если в~конце названия присутствуют пустые круглые скобки,
то соответствующий элемент является функцией.
В~противном случае это~дочерний объект.

* [addApp()](local:addApp/):
регистрирует новый объект-приложенеи в системе (синоним для~_addShortcut()_)
* [addCommand()](local:addCommand/):
регистрирует новую команду в~системе
* [addHook()](local:addHook/):
регистрирует новый обработчик события
* [addShortcut()](local:addShortcut/):
регистрирует новый объект-приложенеи в системе (синоним для~_addApp()_)
* [addWorker()](local:addWorker/):
регистрирует функцию с~автоматическим переодическим запуском
* [createPropertyHook()](local:createPropertyHook/):
создаёт новое событие на~изменение системного свойства
* [getActiveAreaText()](local:getActiveAreaText/):
возвращает текстовый фрагмент активной области
* [i18n](local:i18n/):
предоставляет доступ к~функциям поддержки национальных языков и стандартов
* [launchApp()](local:launchApp/):
запускает приложение
* [message()](local:message/):
показывает сообщение пользователю
* [openUrl()](local:openUrl/):
открывает гиперссылку с~автоматическим выбором обработчика на~основе её типа
* [os](local:os/):
предоставляет доступ к~функциям операционной системы
* [player](local:player/):
предоставляет доступ к~управлению системным медиаплеером
* [popups](local:popups/):
показывает всплывающее окно из~коллекции стандартных типов
* [prop](local:prop/):
предоставляет доступ к~системным свойствам
* [quit()](local:quit/):
завершает работу в~системе
* [registry](local:registry/):
ппредоставляет доступ к~данным реестра
* [runBkg()](local:runBkg/):
выполняет действие в~фоновом режиме
* [runWorker()](local:runWorker/):
производит явный запуск выполнения регулярной автоматической функции
* [sounds](local:sounds/):
воспроизводит один из~системных звуков
* [speak()](local:speak/):
произносит текстовый фрагмент речевым синтезатором
* [spokenText](local:spokenText/):
производит предообработку текста для~~последующего прочтения пользователю
