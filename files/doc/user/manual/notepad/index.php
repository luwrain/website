<?php include "../../../../functions.php"; luwrain_begin_page('/doc/user/manual/notepad/index.php', luwrain_current_lang() == 'ru'?'Блокнот':'Notepad');?>
<?php if (luwrain_current_lang() == 'en') {?>
<h1>Notepad</h1>
<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
<h1>Редактирование текстовых файлов в&#160;Блокноте</h1>

<p>Приложение Блокнот позволяет редактировать файлы, содержащие текст без&#160;использования каких-либо специальных форматов документов.
Обычно подобные файлы имеют расширение *.txt.
К&#160;числу основных возможностей приложения относятся:</p>

<ul>
<li>чтение и запись текстовых файлов в&#160;различных кодировках и с&#160;использованием различных способов разбиения строк;</li>
<li>озвучивание процесса редактирования в&#160;режимах для естественного языка и для&#160;языка программирования;</li>
<li>получение базовой информации о&#160;файле;</li>
<li>перевод текста в&#160;речевую форму с&#160;сохранением результата в&#160;виде множества звуковых файлов.</li>
</ul>

<p>Подобно любому приложению LUWRAIN, Блокнот имеет поддержку пользовательских расширений на&#160;языке JavaScript,
о чём рассказывается ниже.
Также в&#160;Блокноте досступны все&#160;дополнительные команды, дополняющие обработку текста.</p>

<p>Функциональность перевода текста в&#160;речевую форму была добавлена в&#160;Блокнот,
поскольку подобная задача часто связана с&#160;операцией предварительного редактирования текста.</p>

<h2>Операции работы с&#160;файлами и редактирования текста</h2>

<p>Приложение Блокнот используется по&#160;умолчанию для&#160;открытия файла,
если в&#160;системе не&#160;зарегистрировано какое-либо специальное приложение,
предназначенное для&#160;работы с&#160;файлами отдельного типа.
Файл открывается с&#160;использованием текущей системной кодировки (в&#160;подавляющем большинстве случаев используется UTF-8)
и с&#160;автоматической обработкой любого стиля разбиения файла на&#160;строки
(текстовый файл как в&#160;стиле Microsoft Windows, так и в&#160;стиле UNIX или в&#160;стиле Macintosh должен открываться корректно вне&#160;зависимости от&#160;платформы,, на&#160;которой LUWRAIN запущен).</p>

<p>После того, как приложение запущено, пользователь имеет возможность открыть новый файл, сохранить имейющийся под&#160;назначенным именем или под&#160;любым новым именем.
За&#160;эти операции отвечают следующие горячие клавиши:</p>

<ul>
<li>Shift+F3&#160;&#x2014; открыть новый файл;</li>
<li>F2&#160;&#x2014; сохранить файл под&#160;назначенным именем;</li>
<li>Shift+F2&#160;&#x2014; сохранить файл под&#160;другим именем (аналог операции "Сохранить&#160;как" в&#160;Microsoft Word).</li>
</ul>

<p>Если при&#160;открытии нового файла существуют несохранённые изменения, пользователю будет предложено их сохранить.
Также пользователю будет предложено сохранить изменения при&#160;закрытии приложения, если в&#160;этом случае может произойти потеря изменений.
Если пользователь пытается сохранить файл,
но имя файла не&#160;назначено,
то будет предложено выбрать имя файла для&#160;сохранения.
Эти&#160;операции доступны при&#160;помощи контекстного меню.
Обратите внимание, что горячие клавиши в&#160;контекстном меню указываются только в&#160;том случае,
если для операции нет&#160;общесистемных команд
(по&#160;этой причине клавиша F2 не&#160;указана в&#160;меню для операции "Сохранить").</p>

<p>Изменение кодировки возможно произвести при&#160;помощи горячей клавиши F9.
После сменны кодировки операции открытия файла и сохранения файла будут производиться с&#160;использованием нового значения.
Таким образом, если пользователь после открытия файла обнаружил, что кодировка выбрана ошибочна,
ему необходимо изменить кодировку при&#160;помощи клавиши F9 и повторить операцию открытия
(в&#160;некоторых случаях приложение само предложит перечитать файл после смены кодировки).</p>

<p>Различная информация о&#160;файле доступна в&#160;окне свойств,
открываемом при&#160;помощи комбинации клавиш Shift+Enter.
В&#160;этом окне пользователю будет предложена различная информация о&#160;файле:
его&#160;имя,
текущая кодировка,
количество строк, символов, количество непробельных символов и&#160;т.&#160;д.</p>

<h3>Базовые операции</h3>

<h3>Для всех элементов редактирования многострочного текста</h3>

<ul>
<li>Alt+Home &#x2014; удалить фрагмент строки от начала и до текущего положения курсора</li>
<li>Alt+End &#x2014; удалить фрагмент строки от текущего положения курсора и до конца</li>
<li>Shift+Home &#x2014; установить курсор на первый непробельный символ строки</li>
<li>Shift+End &#x2014; установить курсор на последней непробельный символ строки</li>
<li>Ctrl+Alt+End &#x2014; разбить длинную строку по пробелам </li>
</ul>

<h3>Операции приложения Блокнот</h3>

<h2>Режимы работы</h2>

<p>Три режима</p>

<ol>
<li>Нейтральный режим.</li>
<li>Режим текста на&#160;естественном языке.</li>
<li>Режим текста на&#160;языке программирования.</li>
</ol>

<h2>Сохранение текста в звуковые файлы</h2>

<h3>Поддержка Яндекс.SpeechKit</h3>

<p>Для&#160;пользователей GNU/Linux существует возможность преобразовать текст в&#160;набор звуковых файлов с&#160;использованием  <a href="https://cloud.yandex.ru/services/speechkit">Яндекс.SpeechKit</a>.
Это&#160;позволяет получить результат очень высокого качества, но использование сервиса является платной услугой компании Яндекс, требующей прохождения процедуры регистрации в&#160;качестве пользователя  <a href="https://cloud.yandex.ru">Яндекс.Облака</a>.
Мы рассматриваем эту возможность как востребованную только опытными пользователями ,
поэтому поддерживаем её&#160;работу на&#160;уровне пользовательских скриптов JavaScript,
которые в&#160;настоящий момент используют утилиты GNU/Linux для&#160;декодирования аудиопотока в&#160;формате <a href="https://ru.wikipedia.org/wiki/Opus_%28%D0%BA%D0%BE%D0%B4%D0%B5%D0%BA%29">Opus</a>.</p>

<p>Для&#160;синтезирования говорящих книг при&#160;помощи Яндекс.SpeechKit необходимо получить так&#160;называемый IAM-токен и индентификатор облачного каталога.
Если эти&#160;значения имеются, то необходимо отредактировать файл yandex.js в&#160;каталоге со&#160;скриптами   JavaScript используемого дистрибутива LUWRAIN (обычно расположен как data/js/ или app/data/js/).
В&#160;указанном файле необходимо раскомментировать тело соответствующего обработчика события <em>luwrain.notepad.narrating.tts</em>,
помеченного строкой с&#160;информацией, что функция используется для&#160;доступа к&#160;Яндекс.SpeechKit.
В&#160;начале тела обработчика необходимо записать IAM-токен в&#160;заготовленную переменную <em>IAM</em>TOKEN<em>,
а идентификатор каталога в&#160;переменную _FOLDER</em>ID_.
После перезапуска LUWRAIN попытка создания серии звуковых файлов должна задействовать функции сервиса Яндекс.SpeechKit.</p>

<h2>Расширение возможностей при помощи скриптов</h2>

<p>luwrain.notepad.actions
luwrain.notepad.action
luwrain.notepad.properties.basic
luwrain.notepad.properties</p>
<?php }?>
<?php luwrain_end_page('/doc/user/manual/notepad/index.php');?>
