<?php include "../../../../functions.php"; luwrain_begin_page('/doc/devel/hooks/luwrain.speech.text.regular/index.php', luwrain_current_lang() == 'ru'?'luwrain.speech.text.regular':'luwrain.speech.text.regular');?>
<?php if (luwrain_current_lang() == 'en') {?>
<h1>luwrain.speech.text.regular</h1>

<p><strong>Description:</strong>
transformes the&#160;text supposed to&#160;be&#160;spoken by&#160;the&#160;active text-to-speech engine.</p>

<p><strong>Strategy:</strong>
transforming.</p>

<p><strong>Arguments:</strong></p>

<ul>
<li><em>text</em>&#160;&#x2014; the&#160;text to&#160;transform for&#160;speaking</li>
</ul>

<p><strong>Return value:</strong>
the&#160;text after the&#160;transforming.</p>

<p>LUWRAIN runs all&#160;handlers of&#160;~this hook in&#160;arbitrary order providing the&#160;text to&#160;be&#160;spoken to&#160;the&#160;first handler,
the&#160;text returned back by&#160;the&#160;first handler goes to&#160;the&#160;next handler and so&#160;on.
The&#160;text returned by&#160;the&#160;last handler will be&#160;send to&#160;the&#160;active TTS-engine.
None of&#160;the&#160;handlers may return null.</p>

<p>This&#160;hook is used during regular interaction only.
For&#160;messages and listening there are corresponding similar hooks.</p>
<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
<h1>luwrain.speech.text.regular</h1>

<p><strong>Описание:</strong>
обрабатывает текст, предназначенный для&#160;произношения текущим синтезатором речи.</p>

<p><strong>Стратегия:</strong>
transforming.</p>

<p><strong>Аргументы:</strong></p>

<ul>
<li><em>text</em>&#160;&#x2014; текст, подлежащий обработке.</li>
</ul>

<p><strong>Возвращаемое значение:</strong>
обработанный текст.</p>

<p>LUWRAIN последовательно вызывает все&#160;обработчики этого&#160;события в&#160;произвольным порядке.
Начальное значение передаётся первому обработчикку.
Значение, полученное от&#160;первого обработчика, передаётся второму обработчику и&#160;т.&#160;д.
Значение, полученное от&#160;последнего обработчика, передаётся синтезатору для&#160;произношения.
Ни&#160;один из&#160;обработчиков не&#160;может возвращать значение null.</p>

<p>Это&#160;событие используется только для&#160;обычного взаимодействия пользователя.
Для&#160;произношения текста сообщений и для&#160;последовательного прослушивания  текста используются другие аналогичные события.</p>
<?php }?>
<?php luwrain_end_page('/doc/devel/hooks/luwrain.speech.text.regular/index.php');?>
