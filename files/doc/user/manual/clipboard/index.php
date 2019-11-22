<?php include "../../../../functions.php"; luwrain_begin_page('/doc/user/manual/clipboard/index.php', luwrain_current_lang() == 'ru'?'Операции копирования-вставки':'Clipboard operations');?>
<?php if (luwrain_current_lang() == 'en') {?>
<h1>Clipboard operations</h1>
<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
<h1>Операции копирования вставки</h1>

<p>Операциями копирования-вставки мы называем действия,
которые позволяют выполнять обмен данными между приложениями внутри LUWRAIN через задействование буфера обмена.</p>

<p>LUWRAIN воспринимает несколько команд, связанных с копированием-вставкой
(в&#160;скобках указано, на&#160;какие горячие клавиши назначена команда по&#160;умолчанию):</p>

<ul>
<li><strong>region-point</strong> (Ctrl+пробел);</li>
<li><strong>copy</strong> (Ctrl+C);</li>
<li><strong>copy-all</strong> (Ctrl+A);</li>
<li><strong>cut</strong> (Ctrl+X);</li>
<li><strong>paste</strong> (Ctrl+V);</li>
<li><strong>clear</strong> (Ctrl+delete);</li>
<li><strong>clear-region</strong> (Shift+delete).</li>
</ul>

<p>В&#160;подавляющем большинстве случаев работа в&#160;LUWRAIN сводится либо к&#160;манипуляции с&#160;объектами,
либо к&#160;редактированию текста.
Операции копирования-вставки унифицированы для решения этих двух больших задач.</p>

<h2>Операции копирования-вставки при&#160;редактировании текста</h2>

<p>При&#160;редактировании текста операция <strong>copy-all</strong> копирует в&#160;буфер обмена весь&#160;текст.
Команда <strong>clear</strong> в&#160;некоторых ситуациях полностью очищает введённое содержимое области редактирования.
Она не&#160;работает в&#160;текстовых документах,
поскольку это позволяет неосторожным нажатием удалить результат длительной работы.
Команда <strong>clear</strong> удобна в&#160;диалоговых областях и в&#160;однострочных полях,
где с&#160;её помощью можно быстро очистить содержимое.</p>

<p>Остальные операции привязаны к&#160;точке региона (region-point). Она
устанавливается через Ctrl+пробел (взято, естественно, из emacs) и
отмечает область относительно текущего положения курсора. Если точка не
установлена или курсор находится на том же месте, что и точка, то
операции не выполняются. Сами операции вполне очевидны,: копирование,
вырезание и удаление без копирования в буфер обмена (clear-region).</p>

<p>С текстом всё более-менее понятно. Заглянем внутрь. Буфер обмена luwrain
хранит два массива: массив строк и массив объектов. Отвечает за это
класс org.luwrain.core.Clipboard, задокументированный здесь: </p>

<p>http://luwrain.org/javadoc/org/luwrain/core/Clipboard.html</p>

<p>Основная роль принадлежит массиву объектов, но их источник может
предоставить правильное строковое представление, если пользователь
захочет вставить всё туда, куда объекты вставлять нельзя. В блокнот,
например. Особенно полезно хранить объекты стандартных классов вроде
java.net.URL или java.io.File. Коммандер при копировании своих элементов
отправляет в буфер обмена именно java.io.File. При вставке (например, на
рабочий стол) вставляется запись соответствующего типа. Если скопировать
файл в Коммандере, а вставить на рабочий стол, то вставится именно
ссылка на файл, которая будет адекватно реагировать на нажатие
enter. Если вставить в Блокнот, то вставится уже имя файла.</p>

<p>Как ведут себя перечисления объектов. copy-all копирует все
объекты. Если источник не предоставил детальной информации, копируется
текст объектов. clear для списков не работает всё по той же причине, что
легко убить много элементов.</p>

<p>Если точка региона не установлена или текущее положение курсора
совпадает с ней, то операция производится над текущим элементом (что
отличает поведение от редактирования текста, где операция блокируется в
такой ситуации). Если в списке копируется фрагмент на одной строке
(текущее положение совпадает с точкой региона), то копируется просто
фрагмент текста. Сам объект в буфер обмена не попадает. Чтобы попал
объект, курсор должен быть смещён вверх или вниз. По этой причине у нас
в списках за редким исключением есть пустая строка вверху или внизу.</p>

<p>Ещё у нас есть клавиша delete, которая что-то должна делать. При
редактировании текста delete удаляет всегда одну букву, никогда не
трогая регион. Это очень освобождает мысли, чтобы не думать, есть какое
выделение или нет. В списках delete привязан к выполнению clear-region,
но может делать что-нибудь своё в зависимости от назначения объекта.</p>

<p>Есть особый случай - списки с отметками. Тот же Коммандер,
например. Если ставится хотя бы одна отметка, автоматически сбрасывается
точка региона и наоборот: попытка поставить точку региона всегда
сбрасывает все отметки. Операция производится в зависимости от того,
установлена ли точка региона или установлена ли хотя бы одна
отметка. Если ни того, ни другого нет, то операция выполняется над
текущим объектом.</p>

<p>Ядро системы, скрипты и расширения могут запросить текст активной
области относительно точки региона. Доступ возможен только для
текстового представления, информация об объектах не предоставляется
никогда. Это сделано для написания различных ассистентов, таких как
доступ к словарю или переводчику. Клиент для Яндекс.Переводчика, ещё раз
обращаю внимание, сейчас полностью переписан на JavaScript и может быть
всячески модифицирован на стороне пользователя. Поведение механизма
запроса текста полностью повторяет поведение операций
копирования-вставки в редактировании текста.</p>

<p>Ещё обратите внимание, что нажатие Ctrl+l (команда listen) читает
последовательно текущую область.</p>
<?php }?>
<?php luwrain_end_page('/doc/user/manual/clipboard/index.php');?>
