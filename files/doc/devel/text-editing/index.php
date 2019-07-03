<?php include "../../../functions.php"; luwrain_begin_page('/doc/devel/text-editing/index.php', luwrain_current_lang() == 'ru'?'Компоненты для редактирования многострочного текста':'The components for multiline text editing');?>
<?php if (luwrain_current_lang() == 'en') {?>
<h1>The&#160;components for&#160;multiline text editing</h1>
<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
<h1>Компоненты для&#160;редактирования многострочного текста</h1>

<p>Редактирование текста&#160;&#x2014; одна из самых востребованных операций   при работе на ПК,
и это верно не только для случая невизуального  использования ИТ.
Вместе с&#160;тем, когда редактирование текста производится в&#160;невизуальном режиме,
появляются дополнительные требования к&#160;реализации элементов управления, отвечающих за&#160;подобную функциональность.
На&#160;этой странице  мы рассмотрим основные детали и правила внутренней реализации той части LUWRAIN, которая отвечает за&#160;редактирование многострочного текста
(LUWRAIN различает случаи, когда редактируется однострочный и многострочный текст).</p>

<p>Невизуальное редактирование текста&#160;&#x2014; это процесс, состоящий из&#160;последовательности элементарных и комплексных операций,
приводящих к&#160;согласованному изменению состояний двух объектов: линейного массива строк и  курсора, положение которого задаётся парой координат на плоскости.
Реализация соответствующих элементов управления  должна быть достаточно гибкой, чтобы отвечать следующим требованиям:</p>

<ol>
<li>Корректировка каждого действия пользователя должна быть расширяемой,
то есть  должна существовать возможность построить  целостную реакцию, состоящую из некоторого множества отдельных корректировок,
часть из которых активизируется для всех элементов управления в системе,
другая часть только для элементов управления, содержащих некоторый конкретный тип текста (естественный язык, язык программирования и пр.),
третья часть активизируется только для конкретного приложения и т. д.</li>
<li>Добавления новых корректировок должно осуществляться как на низком уровне с использованием Java, являющегося основным языком реализации LUWRAIN,
так и на более высоком уровне с использованием пользовательских скриптов (в случае LUWRAIN на языке JavaScript).</li>
<li>Звуковое анонсирование операции  с использованием речевого вывода и коротких звуковых сигналов должно быть максимально согласовано с характером  произошедших изменений.</li>
<li>Любые задержки реакции на действия пользователя должны быть предельно минимизированы.</li>
</ol>

<p>Существует несколько различных стилей редактирования текста.
Среди них можно выделить стиль GNU&#160;Emacs, стиль Microsoft Word и множество других,
поэтому LUWRAIN не стремиться следовать конкретному из них (даже при том, что GNU&#160;Emacs оказал максимальное влияние на традиции LUWRAIN),
а предлагает как можно более широкие возможности по реализации того стиля редактирования текста, который будет привычен конкретному пользователю.</p>

<p>Классы LUWRAIN, отвечающие за редактирование многострочного текста, организованы в следущую цепочку:</p>

<ol>
<li>Основной элемент управления, получающий команды пользователя (класс <em>org.luwrain.controls.MultilineTextEdit</em>)</li>
<li>Интерфейс модели элемента управления (<em>org.luwrain.controls.MultilineEdit.Model</em>).</li>
<li>Цепочка классов-корректоров (экземпляры классов, реализующих интерфейс <em>org.luwrain.controls.MultilineEditCorrector</em>).</li>
<li>Базовый интерпретатор  операций редактирования (класс <em>org.luwrain.controls.MultilineEditTranslator</em>).</li>
<li>Две базовые структуры , хранящие информацию о тексте: массив строк и положение курсора.</li>
</ol>

<p>Ниже все операции редактирования будут разделяться на элементарные и комплексные.
Все элементарные операции представлены методами интерфейса <em>org.luwrain.controls.MultilineEdit.Model</em>:</p>

<ol>
<li>Вставка одного или нескольких символов (<em>putChars()</em>).</li>
<li>Удаление символа в заданной позиции (<em>deleteChar()</em>).</li>
<li>Вставка фрагмента текста (<em>insertRegion()</em>).</li>
<li>Удаление фрагмента текста между двумя заданными позициями (<em>deleteRegion()</em>).</li>
<li>Объединение двух соседних строк (<em>mergeLines()</em>).</li>
<li>Разбиение строки на две в заданной позиции (<em>splitLine()</em>).</li>
</ol>

<p>Как нетрудно заметить, все элементарные действия пользователя  по редактированию текста сводятся к одной (и строго одной) из вышеперечисленных операций.
Работа с фрагментами предусмотрена для операций копирования-вставки с буфером обмена.
Реализация модели элемента управления должна соответствовать следующим требованиям:</p>

<ol>
<li>Положение курсора модель обновляет самостоятельно.
Выполнение каждой операции может быть запрошено в любой  позиции, и курсор должен получить новое положение автоматически.</li>
<li>Если выполнение операции было подменено любой комбинацией других операций,
то все структуры должны остаться в согласованном состоянии. </li>
</ol>

<p>В списке операций нет каких-либо действий по управлению положением курсора,
поскольку весь интерфейс LUWRAIN построен таким образом, что навигация по пространству  пользователя реализована по типу навигации в тексте.
Создавать отдельные операций только для редактирования текста нет необходимости.
Все методы в качестве результата своего выполнения возвращают объект класса <em>org.luwrain.controls.MultilineEdit.ModificationResult</em>,
но к нему мы вернёмся позже.</p>

<p>Корректорами мы называем классы, которые должны как-либо дополнять или модифицировать действия пользователя при редактировании текста.
Примером корректора может быть класс, который в случае перехода на новую строку автоматически добавляет отступ, как это бывает при редактировании исходников.
Корректоры должны удовлетворять интерфейсу <em>org.lluwrain.controls.MultilineEditCorrector</em>
Этот интерфейс сохраняет все операции <em>org.luwrain.controls.MultilineEdit.Model</em>,
но добавляет к ним возможность выполнения какой-либо комплексной операции редактирования.
Комплексными  мы называем все операции, которые не могут быть сведены к операциям модели без нарушения вышеперечисленных требований к ней.
Примерами таких операций могут быть замена по регулярному выражению, автоматическое выравнивание текста в столбец и др.</p>

<p>Реализация корректора  обычно работает поверх другого корректора или на самом нижнем уровне поверх базового интерпретатора редактирования.
Модификация любой операций производится путём её подмены
на любую комбинацию операций нижележащего корректора.
Возможностью выполнить комплексную операцию для нижележащего корректора не стоит злоупотреблять,
поскольку  это действие будет непрозрачным для всех нижележащих корректоров.
Это следует делать исключительно только в тех случаях, когда операция не может быть разбита на элементарные операции,
разбиение приведёт к неэффективным вычислениям или
в случае преднамеренной  попытки избежать обработки операции со стороны нижележащих  корректоров.</p>

<p>В остальном каждый корректор вправе вносить любую модификацию в поведение нижележащего корректора.
Это основное место для реализации каких-либо частных  процедур, отвечающих за поведение  элемента управления для редактирования многострочного  текста.
Корректоры организуются в цепочку,  в самом конце которой находится базовый интерпретатор операций редактирования,
в свою очередь тоже реализующий интерфейс <em>org.luwrain.controls.MultilineEditCorrector</em>,
т. е. тоже являющийся корректором.
Ядро LUWRAIN способно по запросу приложения  создать общесистемные корректоры,
которые будут работать поверх некоторого заданного корректора.
Приложение имеет возможность отказаться от использования общесистемных корректоров,
но в этом случае не будут работать некоторые операции, которые пользователь пожелал активизировать для всех полей редактирования текста в своей системе.
За создание общесистемных корректоров отвечает метод <em>createSystemwideMultilineEditCorrectors()</em>  объекта <em>org.luwrain.core.Luwrain</em>.
Он принимает в качестве аргумента множество тегов, характеризующих назначение поля ввода.
Примерами таких тегов могут быть "nl" (поле для редактирования текста на естественном языке),
"lang:ru" (поле для текста на русском языке)
и т. д.</p>

<p>Как упоминалось выше, Каждая операция редактирования  возвращает в качестве результата  объект класса <em>org.luwrain.controls.MultilineEdit.ModificationResult</em>.
Такой объект содержит обязательное булево поле,
обозначающее, считается ли операция выполненной или нет,
а также два опциональных поля для сохранения
символьного атрибута (к примеру, для идентификации символа, стёртого пользователем)
и строкового атрибута (какое слово находится в тексте после ввода пробела).
Тем не менее,  объекты-корректоры могут возвращать любые классы, расширяющие <em>ModificationResult</em>,
добавляя в них любые новые атрибуты.</p>

<p>После того, как пользователь совершает некоторую элементарную операцию
и модель обрабатывает её с задействованием существующей цепочки корректоров,
вызывается соответствующий метод объекта-представления,
который формирует  звуковой ответ пользователю,
уведомляющий об успешности операции и характере произведённых изменений.
Объект-представление должен удовлетворять интерфейсу <em>org.luwrain.controls.MultilineEdit.Appearance</em>,
и существует его умолчательная реализация <em>org.luwrain.controls.EditUtils.DefaultMultilineEditAppearance</em>.
Вызываемый метод соответствует назначению выполненной операции,
причём ему передаётся объект класса <em>ModificationResult</em>,
полученный в ходе выполнения.
Это действие совершается в любом случае,
даже если объект <em>ModificationResult</em> имеет сброшенный флаг  успешности.
Предоставляя частную реализацию интерфейса -Appearance_,
которая, очевидно, должна быть так или иначе согласована с особенностями используемой цепочки корректоров,
разработчик может добиться любого желаемого поведения редактора текста.
Анонсирование пользователю комплексных операций всегда выполняет объект,
вызывающий операцию.</p>

<p>Вышеизложенное описание охватывает все вопросы  обработки операций редактирование многострочного текста
в случае разработки на низком уровне, т. е. при программировании на уровне классов Java.</p>
<?php }?>
<?php luwrain_end_page('/doc/devel/text-editing/index.php');?>
