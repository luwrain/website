
ENTITLE='luwrain.speech.text.regular'
RUTITLE='luwrain.speech.text.regular'
TARGET=doc/js/hooks/luwrain.speech.text.regular/index.php

luwrain-page-en

# luwrain.speech.text.regular

__Description:__
transformes the~text supposed to~be~spoken by~the~active text-to-speech engine.

__Strategy:__
transforming.

__Arguments:__

* _text_~--- the~text to~transform for~speaking

__Return value:__
the~text after the~transforming.

LUWRAIN runs all~handlers of~~this hook in~arbitrary order providing the~text to~be~spoken to~the~first handler,
the~text returned back by~the~first handler goes to~the~next handler and so~on.
The~text returned by~the~last handler will be~send to~the~active TTS-engine.
None of~the~handlers may return null.

This~hook is used during regular interaction only.
For~messages and listening there are corresponding similar hooks.

luwrain-page-ru

# luwrain.speech.text.regular 

__Описание:__
обрабатывает текст, предназначенный для~произношения текущим синтезатором речи.

__Стратегия:__
transforming.

__Аргументы:__

* _text_~--- текст, подлежащий обработке.

__Возвращаемое значение:__
обработанный текст.


LUWRAIN последовательно вызывает все~обработчики этого~события в~произвольным порядке.
Начальное значение передаётся первому обработчикку.
Значение, полученное от~первого обработчика, передаётся второму обработчику и~т.~д.
Значение, полученное от~последнего обработчика, передаётся синтезатору для~произношения.
Ни~один из~обработчиков не~может возвращать значение null.

Это~событие используется только для~обычного взаимодействия пользователя.
Для~произношения текста сообщений и для~последовательного прослушивания  текста используются другие аналогичные события.