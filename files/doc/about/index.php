<?php include "../../functions.php"; luwrain_begin_page('/doc/about/index.php', luwrain_current_lang() == 'ru'?'О проекте':'About the project');?>
<?php if (luwrain_current_lang() == 'en') {?>
<h1>About the project  =</h1>

<p>See also</p>

<ul>
<li><a href="<?php echo luwrain_link('/doc/authors/');?>">Who we are</a></li>
<li><a href="<?php echo luwrain_link('/community/publications/');?>">Our&#160;publications and press about us</a></li>
<li><a href="<?php echo luwrain_link('/doc/difference/');?>">Why is LUWRAIN different than other accessible solutions?</a></li>
</ul>

<p>We want all&#160;blind to be able to participate in all&#160;parts of&#160;the&#160;society, 
which revolve around information technologies.
There&#160;are some technical barriers making this still very difficult
and our development is&#160;carried&#160;out with&#160;the&#160;aim of&#160;eliminating these barriers.</p>

<ul>
<li><p>LUWRAIN tries to&#160;bring information from&#160;PC's to&#160;the&#160;users
in&#160;a&#160;way adjusted to&#160;the&#160;perception
of&#160;the&#160;blind as&#160;best as&#160;possible</p></li>
<li><p>Luwrrain allows creating and distributing applications
specially  designed  for&#160;the&#160;blind</p></li>
<li><p>LUWRAIN guarantees solving the&#160;number of&#160;popular everyday tasks
regardless what experience the&#160;user has
or his/her financial circumstances</p></li>
</ul>

<p>As&#160;for&#160;today, we&#160;think that there are no suitable solutions to&#160;this&#160;problems
widely known over the&#160;world.</p>

<h2>The&#160;UI designed for&#160;blind people</h2>

<p>The&#160;screen reading utilities for&#160;graphical user interface (GUI),
the&#160;most popular current approach to&#160;assistive technologies for&#160;blind,
doesn't take care of&#160;providing information in&#160;the&#160;form, suitable for&#160;user perception,
and it is their the&#160;most noticeable disadvantage.
Without using a&#160;mouse,
which is supposed to be&#160;inaccessible for&#160;the&#160;blind,
GUI is totally ineffective.
The&#160;level of&#160;comfort and speed of&#160;work equal to&#160;sighted people
remains still unreachable for&#160;blind users.
If the&#160;user doesn't have any prior experience of&#160;using GUI with&#160;eyesight,
how he/she could get a&#160;clew to&#160;understanding its nature?</p>

<p>In&#160;order to&#160;replace inaccessible screen, the&#160;blind user always keeps the&#160;picture of&#160;its working space in&#160;mind,
and our main strategy is&#160;to&#160;make this picture in&#160;imagination
<strong>as&#160;simple as&#160;it&#160;could be&#160;possible</strong>.
This helps users to&#160;concentrate on&#160;their work deeper and more&#160;effectively.</p>

<p>In&#160;case of&#160;screen readers, the&#160;user has&#160;to keep in&#160;mind the&#160;whole look of&#160;the&#160;desktop
(what, actually, is&#160;impossible, regardless which tools are involved)
and that destracts him/her from the&#160;work itself.
According to&#160;our&#160;experience,
it&#160;is <strong>really possible</strong> to&#160;create this&#160; new&#160;type of&#160;UI
with the&#160;same features as&#160;in&#160;usual GUI.
We are&#160;speaking, apparently, only about the&#160;tasks,
which are potentially accessible for&#160;blind;
for&#160;instance, photo editing is&#160;inaccessible at&#160;all due&#160;to&#160;its nature.</p>

<p>At&#160;a&#160;first glance, it&#160;looks that we&#160;~are presenting some kind of&#160;fiction, generally impossible technology,
but it&#160;isn't the&#160;case.
Everybody knows that the&#160;text editing is the&#160;most understandable operation for&#160;the&#160;blind on&#160;pc.
The&#160;only thing we should do is to&#160;make the&#160;solving of&#160;all tasks
in&#160;the&#160;same way as&#160;the&#160;text editing.
How we achieve that,  <a href="<?php echo luwrain_link('/doc/user/start/');?>">find&#160;out with&#160;LUWRAIN</a>.</p>

<p>Besides mentioned advantages,
our&#160;conception has some additional features
making work easier:</p>

<ul>
<li><p>Searching a&#160;substring in&#160;any object regardless of&#160;its nature</p></li>
<li><p>Copying an&#160;arbitrary substring to&#160;the&#160;clipboard</p></li>
<li><p>The unified way of&#160;supplementing speech or braille output
with the&#160;picture on&#160;the&#160;screen for users with&#160;low&#160;vision,
including features to&#160;adjust the&#160;preferable font size and the&#160;preferable color scheme</p></li>
</ul>

<h2>Creating and distributing the&#160;accessible applications</h2>

<p>We witness a&#160;shift of&#160;solutions from&#160;web-browsers/desktop computers  to&#160;mobile platforms.
In&#160;fact, it&#160;is a&#160;truely convenient idea,
even if the mobile platforms cannot be&#160;a&#160;fully-functional replacement
neither for&#160;web-browsers, nor&#160;for&#160;desktop computers in&#160;whole.
Such OS as&#160;Google Android or Apple&#160;iOS plays a&#160;role of&#160;a&#160;platform,
which aims to&#160;be with the&#160;user everywhere.</p>

<p>The&#160;blind has nothing like this.
There is no&#160;platform, which allows creating of&#160;the&#160;applications specially designed for&#160;them.
LUWRAIN offers the&#160;full <a href="<?php echo luwrain_link('/doc/ext/');?>">SDK</a>
for&#160;creating the&#160;applications for&#160;blind people.
The&#160;main advantage of&#160;this approach is that it doesn't require
the&#160;developer to&#160;have any&#160;experience in&#160;the&#160;area of&#160;accessibility technologies.
Any&#160;company can create a&#160;client for&#160;its service
just by&#160;using <a href="/api/">our Java API</a>,
and We will take care of&#160;proper understanding of&#160;created applications by&#160;the&#160;blind.</p>

<h2>Accessibility for&#160;everybody</h2>

<p>LUWRAIN is&#160;supposed to&#160;be accessible for&#160;<strong>everybody who could be&#160;interested in&#160;it</strong>:</p>

<ul>
<li><p><strong>LUWRAIN is&#160;an&#160;Open source project</strong>:
end-user may use it completely free of&#160;charge</p></li>
<li><p><strong>LUWRAIN  is&#160;based on&#160;Java</strong>:
end-user may run it&#160;on&#160;any computers with&#160;proper Java&#160;1.8 support
(roughly speaking, nearly on&#160;all&#160;PC's)</p></li>
<li><p><strong>LUWRAIN has a&#160;distribution in&#160;form of&#160;bootable ISO-image</strong>:
even if&#160;end-user doesn't have any OS installed on&#160;his/her hard drive
he/she may run LUWRAIN considering our ISO-image based on&#160;GNU/Linux</p></li>
<li><p><strong>LUWRAIN has easily recognizable UI</strong>:
end-user shouldn't worry that he/she has a&#160;lack of&#160;experience for&#160;work in&#160;Luwrain
because we take care of&#160;keeping LUWRAIN environment as&#160;simple as&#160;it is possible</p></li>
</ul>
<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
<h1>О&#160;нашем проекте</h1>

<p>См.&#160;также:</p>

<ul>
<li><a href="<?php echo luwrain_link('/doc/authors/');?>">Авторы проекта</a></li>
<li><a href="<?php echo luwrain_link('/community/publications/');?>">Наши публикации и пресса о&#160;нас</a></li>
<li><a href="<?php echo luwrain_link('/doc/difference/');?>">Чем LUWRAIN отличается от&#160;других вспомогательных технологий?</a></li>
</ul>

<p>Команда LUWRAIN работает над&#160;реализацией пользовательского интерфейса, который предоставляет максимальный уровень комфорта 
для&#160;людей с&#160;нарушениями зрения любой степени ограничений (в&#160;том&#160;числе слепоглухих).
Полученный опыт мы оформляем в&#160;виде библиотеки на&#160;языке Java, свободно распространяемой под&#160;лицензией GPL&#160;v.3.</p>

<p>Решение этой&#160;задачи позволяет открыть новые ранее недоступные возможности.
Появление единого и переносимого механизма доставки невизуальных приложений значительно упрощает информационное обеспечение образовательного процесса,
в&#160;который вовлечены учащиеся с&#160;нарушениями зрения.
LUWRAIN предоставляет простой в&#160;освоении и удобный в&#160;работе способ чтения образовательных материалов и,
дающий одинаковое восприятие в&#160;любой ОС.
Другими словами, даже если в&#160;школе или ВУЗе преподавание ведётся на&#160;GNU/Linux,
а&#160;дома у&#160;учеников Microsoft Windows, они всё равно будут получать один и&#160;тот&#160;же&#160;продукт с&#160;одним&#160;и&#160;тем&#160;же поведением.
Аналогичное верно и&#160;для&#160;приложения, при&#160;помощи которого учащиеся могут выполнять контрольные работы или самопроверки.
Руководство образовательного учреждения способно изготовить индивидуальный загрузочный образ, записанный на&#160;флэш-носитель, для&#160;некоторой группы учеников,
в&#160;который будет собрано всё, что им может понадобиться в&#160;настоящий момент.
Такой флэш-носитель позволит им выполнить загрузку в&#160;режиме live&#160;CD на&#160;любом подходящем компьютере, а&#160;также при&#160;необходимости перенести систему на&#160;жёсткий диск, причём самостоятельно.
См.&#160;подробнее про&#160;<a href="<?php echo luwrain_link('/products/education/');?>">наши продукты для образования</a>.</p>

<p>И&#160;всё-таки в&#160;центре нашей деятельности находится сам&#160;наш&#160;основной дистрибутив LUWRAIN.
Он доступен для&#160;<a href="<?php echo luwrain_link('/download/');?>">свободной загрузки</a> с&#160;нашего сайта,
и поможет каждому незрячему  (в&#160;том&#160;числе слепоглухому) получить инструмент, обеспечивающий решение наиболее востребованных повседневных задач.
Если для&#160;каких-то задач наш продукт окажется не&#160;в&#160;состоянии предложить решение,
за&#160;счёт его&#160;гибкости пользователь всегда сможет сочетать его с&#160;существующими приложениями экранного доступа. </p>

<p>Ключевые характеристики нашего&#160;продукта следующие</p>

<ol>
<li><p><strong>LUWRAIN имеет предельно упрощенный и понятный интерфейс для&#160;незрячего человека.</strong>
Пользователь может не&#160;опасаться, что ему не&#160;хватит опыта работы на&#160;ПК для&#160;эксплуатации LUWRAIN.
Несколько простых примеров для&#160;первого знакомства окажутся достаточными,
чтобы быстро начать работу.
У&#160;нас нет&#160;сомнений, что&#160;LUWRAIN подойдёт для любой категории пользователей:детей, незрячих от&#160;рождения,
пожилых людей,
слепоглухих 
и&#160;т.&#160;д.</p></li>
<li><p><strong>LUWRAIN  создан на&#160;основе технологий Java.</strong>
Пользоваться LUWRAIN можно на&#160;любом компьютере и в&#160;любой ОС,
для&#160;которых есть виртуальная машина Java не&#160;ниже версии 1.8,
а она есть практически для&#160;любой современной ОС.</p></li>
<li><p><strong>LUWRAIN &#x2014; очень технологичное решение.</strong>
Наша команда старается применять как&#160;можно более современные технологие, 
которые с&#160;наибольшей вероятностью будут востребованы в&#160;будущем.
К&#160;примеру, наш браузер основан на актуальном движке <a href="https://ru.wikipedia.org/wiki/WebKit">WebKit</a>,
а&#160;благодаря хорошей интеграции GNU/Linux во&#160;встраиваемые системы мы исследуем возможность развития LUWRAIN 
в&#160;рамках современного направления <a href="https://ru.wikipedia.org/wiki/%D0%98%D0%BD%D1%82%D0%B5%D1%80%D0%BD%D0%B5%D1%82_%D0%B2%D0%B5%D1%89%D0%B5%D0%B9">"интернета вещей"</a>.</p></li>
<li><p><strong>LUWRAIN &#x2014; свободное ПО.</strong>
Его&#160;использование всегда бесплатно для&#160;конечного пользователя.
Лицензия GPL&#160;v.3 гарантирует, что пользователь никогда не&#160;лишиться инструмента, к&#160;которому он&#160;привык,
равно как&#160;и&#160;любая компания, подготовившая на&#160;основе LUWRAIN свой&#160;продукт.</p></li>
<li><p><strong>LUWRAIN имеет сборку в&#160;виде ISO-образа на&#160;ядре Linux.</strong>
Даже если у&#160;пользователя нет&#160;вообще никакой возможности приобрести или установить какую-либо ОС,
т.&#160;е. у&#160;него есть только компьютер с&#160;пустым жёстким диском,
он всё&#160;равно может пользоваться LUWRAIN,
если выберет вариант в&#160;виде <a href="<?php echo luwrain_link('/download/iso/');?>">загрузочного ISO-образа</a>.</p></li>
</ol>

<h2>Интерфейс специально для&#160;незрячих людей</h2>

<p>Неспособность представить информацию в&#160;подготовленном виде &#x2014; один из&#160;главных недостатков  самого распространённого решения,
основанного на&#160;утилитах экранного доступа,
работающих в&#160;оконном интерфейсе.
Без&#160;использования мыши, недоступной незрячим пользователям,  этот тип интерфейса неудобен.
Он плохо подходит для&#160;выполнения повседневных задач,
требующих предельного уровня скорости и комфорта.
Более того,  если у&#160;пользователя отсутствует предшествующий опыт визуальной работы с&#160;оконным интерфейсом,
процесс знакомства с&#160;ним и объяснение его&#160;природы может быть очень сложным.</p>

<p>Незрячий пользователь всегда хранит образ своего рабочего окружения в&#160;голове,
получая от&#160;компьютера информацию  о&#160;любых изменениях.
Наша задача состоит в&#160;том,
чтобы сделать воображаемое рабочее пространство <strong>предельно простым</strong>.
Чем оно проще, тем больше у&#160;пользователя окажется возможности  сосредоточится на&#160;своей работе.
заметим, что при&#160;использовании утилит экранного доступа пользователь вынужден хранить в&#160;памяти  полный вид рабочего стола и расположения объектов,
хотя это невозможно в&#160;принципе,
какими&#160;бы совершенными утилиты экранного доступа ни&#160;были.
Наш опыт показывает,
что создание нового интерфейса,
который не&#160;уступал&#160;бы возможностям оконного окружения,
вполне <strong>реально</strong>,
если, конечно, речь идёт о&#160;задачах,
в&#160;принципе доступных незрячему человеку.
(к&#160;примеру, редактирование фотографий незрячему человеку недоступно).</p>

<p>На&#160;первый взгляд, наверно, наши намерения кажутся фантастическими,
но на&#160;деле здесь нет никакой фантастики.
Не&#160;секрет, что редактирование текста &#x2014; самая доступная и понятная операция для&#160;незрячего пользователя на&#160;компьютере.
Остаётся только сделать так, чтобы в&#160;таком виде решались&#160;бы все необходимые задачи.
Как мы это делаем, <a href="<?php echo luwrain_link('/doc/user/start/');?>">проверьте в&#160;LUWRAIN</a>.
Помимо указанных особенностей,
наша концепция интерфейса имеет ряд дополнительных возможностей,
ускоряющих и упрощающих работу:</p>

<ul>
<li><p>возможность произвести поиск текстовой строки в&#160;текущем рабочем объекте;</p></li>
<li><p>возможность скопировать в&#160;буфер обмена произвольный фрагмент информации,
какой&#160;бы ни&#160;был рабочий объект;</p></li>
<li><p>возможность единообразного вывода изображения на&#160;экран,
с&#160;целью дополнения речевого вывода для&#160;слабовидящих пользователей
с&#160;гибкими возможностями его&#160;настройки для&#160;учёта индивидуальных особенностей.</p></li>
</ul>
<?php }?>
<?php luwrain_end_page('/doc/about/index.php');?>
