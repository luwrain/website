
ENTITLE='Clipboard operations'
RUTITLE='Операции копирования-вставки'
TARGET=doc/user/manual/clipboard/index.php

luwrain-page-en

# Clipboard operations

luwrain-page-ru

# Операции копирования вставки

Операциями копирования-вставки мы называем действия,
которые позволяют выполнять обмен данными между приложениями внутри LUWRAIN через задействование буфера обмена.

LUWRAIN воспринимает несколько команд, связанных с копированием-вставкой
(в~скобках указано, на~какие горячие клавиши назначена команда по~умолчанию):

* __region-point__ (Ctrl+пробел);
* __copy__ (Ctrl+C);
* __copy-all__ (Ctrl+A);
* __cut__ (Ctrl+X);
* __paste__ (Ctrl+V);
* __clear__ (Ctrl+delete);
* __clear-region__ (Shift+delete).

В~подавляющем большинстве случаев работа в~LUWRAIN сводится либо к~манипуляции с~объектами,
либо к~редактированию текста.
Операции копирования-вставки унифицированы для решения этих двух больших задач.

## Операции копирования-вставки при~редактировании текста 

При~редактировании текста операция __copy-all__ копирует в~буфер обмена весь~текст.
Команда __clear__ в~некоторых ситуациях полностью очищает введённое содержимое области редактирования.
Она не~работает в~текстовых документах,
поскольку это позволяет неосторожным нажатием удалить результат длительной работы.
Команда __clear__ удобна в~диалоговых областях и в~однострочных полях,
где с~её помощью можно быстро очистить содержимое.

Остальные операции привязаны к~точке региона (region-point). Она
устанавливается через Ctrl+пробел (взято, естественно, из emacs) и
отмечает область относительно текущего положения курсора. Если точка не
установлена или курсор находится на том же месте, что и точка, то
операции не выполняются. Сами операции вполне очевидны,: копирование,
вырезание и удаление без копирования в буфер обмена (clear-region).

С текстом всё более-менее понятно. Заглянем внутрь. Буфер обмена luwrain
хранит два массива: массив строк и массив объектов. Отвечает за это
класс org.luwrain.core.Clipboard, задокументированный здесь: 

http://luwrain.org/api/org/luwrain/core/Clipboard.html

Основная роль принадлежит массиву объектов, но их источник может
предоставить правильное строковое представление, если пользователь
захочет вставить всё туда, куда объекты вставлять нельзя. В блокнот,
например. Особенно полезно хранить объекты стандартных классов вроде
java.net.URL или java.io.File. Коммандер при копировании своих элементов
отправляет в буфер обмена именно java.io.File. При вставке (например, на
рабочий стол) вставляется запись соответствующего типа. Если скопировать
файл в Коммандере, а вставить на рабочий стол, то вставится именно
ссылка на файл, которая будет адекватно реагировать на нажатие
enter. Если вставить в Блокнот, то вставится уже имя файла.

Как ведут себя перечисления объектов. copy-all копирует все
объекты. Если источник не предоставил детальной информации, копируется
текст объектов. clear для списков не работает всё по той же причине, что
легко убить много элементов.

Если точка региона не установлена или текущее положение курсора
совпадает с ней, то операция производится над текущим элементом (что
отличает поведение от редактирования текста, где операция блокируется в
такой ситуации). Если в списке копируется фрагмент на одной строке
(текущее положение совпадает с точкой региона), то копируется просто
фрагмент текста. Сам объект в буфер обмена не попадает. Чтобы попал
объект, курсор должен быть смещён вверх или вниз. По этой причине у нас
в списках за редким исключением есть пустая строка вверху или внизу.

Ещё у нас есть клавиша delete, которая что-то должна делать. При
редактировании текста delete удаляет всегда одну букву, никогда не
трогая регион. Это очень освобождает мысли, чтобы не думать, есть какое
выделение или нет. В списках delete привязан к выполнению clear-region,
но может делать что-нибудь своё в зависимости от назначения объекта.

Есть особый случай - списки с отметками. Тот же Коммандер,
например. Если ставится хотя бы одна отметка, автоматически сбрасывается
точка региона и наоборот: попытка поставить точку региона всегда
сбрасывает все отметки. Операция производится в зависимости от того,
установлена ли точка региона или установлена ли хотя бы одна
отметка. Если ни того, ни другого нет, то операция выполняется над
текущим объектом.

Ядро системы, скрипты и расширения могут запросить текст активной
области относительно точки региона. Доступ возможен только для
текстового представления, информация об объектах не предоставляется
никогда. Это сделано для написания различных ассистентов, таких как
доступ к словарю или переводчику. Клиент для Яндекс.Переводчика, ещё раз
обращаю внимание, сейчас полностью переписан на JavaScript и может быть
всячески модифицирован на стороне пользователя. Поведение механизма
запроса текста полностью повторяет поведение операций
копирования-вставки в редактировании текста.

Ещё обратите внимание, что нажатие Ctrl+l (команда listen) читает
последовательно текущую область.