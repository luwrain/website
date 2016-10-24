
ENTITLE='About the project'
RUTITLE='О проекте'
TARGET=doc/about/index.php

luwrain-page-en

# About the project  =

See also

* [Who we are](local:/doc/authors/)
* [Our~publications and press about us](local:/community/publications/)
* [Why is LUWRAIN different than other accessible solutions?](local:/doc/difference/)

We want all~blind to be able to participate in all~parts of~the~society, 
which revolve around information technologies.
There~are some technical barriers making this still very difficult
and our development is~carried~out with~the~aim of~eliminating these barriers.

* LUWRAIN tries to~bring information from~PC's to~the~users
in~a~way adjusted to~the~perception
of~the~blind as~best as~possible

* Luwrrain allows creating and distributing applications
specially  designed  for~the~blind

* LUWRAIN guarantees solving the~number of~popular everyday tasks
regardless what experience the~user has
or his/her financial circumstances

As~for~today, we~think that there are no suitable solutions to~this~problems
widely known over the~world.

## The~UI designed for~blind people

The~screen reading utilities for~graphical user interface (GUI),
the~most popular current approach to~assistive technologies for~blind,
doesn't take care of~providing information in~the~form, suitable for~user perception,
and it is their the~most noticeable disadvantage.
Without using a~mouse,
which is supposed to be~inaccessible for~the~blind,
GUI is totally ineffective.
The~level of~comfort and speed of~work equal to~sighted people
remains still unreachable for~blind users.
If the~user doesn't have any prior experience of~using GUI with~eyesight,
how he/she could get a~clew to~understanding its nature?

In~order to~replace inaccessible screen, the~blind user always keeps the~picture of~its working space in~mind,
and our main strategy is~to~make this picture in~imagination
**as~simple as~it~could be~possible**.
This helps users to~concentrate on~their work deeper and more~effectively.

In~case of~screen readers, the~user has~to keep in~mind the~whole look of~the~desktop
(what, actually, is~impossible, regardless which tools are involved)
and that destracts him/her from the~work itself.
According to~our~experience,
it~is **really possible** to~create this~ new~type of~UI
with the~same features as~in~usual GUI.
We are~speaking, apparently, only about the~tasks,
which are potentially accessible for~blind;
for~instance, photo editing is~inaccessible at~all due~to~its nature.

At~a~first glance, it~looks that we~~are presenting some kind of~fiction, generally impossible technology,
but it~isn't the~case.
Everybody knows that the~text editing is the~most understandable operation for~the~blind on~pc.
The~only thing we should do is to~make the~solving of~all tasks
in~the~same way as~the~text editing.
How we achieve that,  [find~out with~LUWRAIN](local:/doc/user/start/).

Besides mentioned advantages,
our~conception has some additional features
making work easier:

* Searching a~substring in~any object regardless of~its nature

* Copying an~arbitrary substring to~the~clipboard

* The unified way of~supplementing speech or braille output
with the~picture on~the~screen for users with~low~vision,
including features to~adjust the~preferable font size and the~preferable color scheme

## Creating and distributing the~accessible applications

We witness a~shift of~solutions from~web-browsers/desktop computers  to~mobile platforms.
In~fact, it~is a~truely convenient idea,
even if the mobile platforms cannot be~a~fully-functional replacement
neither for~web-browsers, nor~for~desktop computers in~whole.
Such OS as~Google Android or Apple~iOS plays a~role of~a~platform,
which aims to~be with the~user everywhere.

The~blind has nothing like this.
There is no~platform, which allows creating of~the~applications specially designed for~them.
LUWRAIN offers the~full [SDK](local:/doc/ext/)
for~creating the~applications for~blind people.
The~main advantage of~this approach is that it doesn't require
the~developer to~have any~experience in~the~area of~accessibility technologies.
Any~company can create a~client for~its service
just by~using [our Java API](/api/),
and We will take care of~proper understanding of~created applications by~the~blind.

## Accessibility for~everybody

LUWRAIN is~supposed to~be accessible for~**everybody who could be~interested in~it**:

* **LUWRAIN is~an~Open source project**:
end-user may use it completely free of~charge

* **LUWRAIN  is~based on~Java**:
end-user may run it~on~any computers with~proper Java~1.8 support
(roughly speaking, nearly on~all~PC's)

* **LUWRAIN has a~distribution in~form of~bootable ISO-image**:
even if~end-user doesn't have any OS installed on~his/her hard drive
he/she may run LUWRAIN considering our ISO-image based on~GNU/Linux

* **LUWRAIN has easily recognizable UI**:
end-user shouldn't worry that he/she has a~lack of~experience for~work in~Luwrain
because we take care of~keeping LUWRAIN environment as~simple as~it is possible

luwrain-page-ru

# О~нашем проекте

См.~также:

* [Авторы проекта](local:/doc/authors/)
* [Наши публикации и пресса о~нас](local:/community/publications/)
* [Чем LUWRAIN отличается от~других вспомогательных технологий?](local:/doc/difference/ )

Команда LUWRAIN работает над~реализацией пользовательского интерфейса, который предоставляет максимальный уровень комфорта 
для~людей с~нарушениями зрения любой степени ограничений (в~том~числе слепоглухих).
Полученный опыт мы оформляем в~виде библиотеки на~языке Java, свободно распространяемой под~лицензией GPL~v.3.

Решение этой~задачи позволяет открыть новые ранее недоступные возможности.
Появление единого и переносимого механизма доставки невизуальных приложений значительно упрощает информационное обеспечение образовательного процесса,
в~который вовлечены учащиеся с~нарушениями зрения.
LUWRAIN предоставляет простой в~освоении и удобный в~работе способ чтения образовательных материалов и,
дающий одинаковое восприятие в~любой ОС.
Другими словами, даже если в~школе или ВУЗе преподавание ведётся на~GNU/Linux,
а~дома у~учеников Microsoft Windows, они всё равно будут получать один и~тот~же~продукт с~одним~и~тем~же поведением.
Аналогичное верно и~для~приложения, при~помощи которого учащиеся могут выполнять контрольные работы или самопроверки.
Руководство образовательного учреждения способно изготовить индивидуальный загрузочный образ, записанный на~флэш-носитель, для~некоторой группы учеников,
в~который будет собрано всё, что им может понадобиться в~настоящий момент.
Такой флэш-носитель позволит им выполнить загрузку в~режиме live~CD на~любом подходящем компьютере, а~также при~необходимости перенести систему на~жёсткий диск, причём самостоятельно.
См.~подробнее про~[наши продукты для образования](local:/products/education/).

И~всё-таки в~центре нашей деятельности находится сам~наш~основной дистрибутив LUWRAIN.
Он доступен для~[свободной загрузки](local:/download/) с~нашего сайта,
и поможет каждому незрячему  (в~том~числе слепоглухому) получить инструмент, обеспечивающий решение наиболее востребованных повседневных задач.
Если для~каких-то задач наш продукт окажется не~в~состоянии предложить решение,
за~счёт его~гибкости пользователь всегда сможет сочетать его с~существующими приложениями экранного доступа. 

Ключевые характеристики нашего~продукта следующие

1. **LUWRAIN имеет предельно упрощенный и понятный интерфейс для~незрячего человека.**
Пользователь может не~опасаться, что ему не~хватит опыта работы на~ПК для~эксплуатации LUWRAIN.
Несколько простых примеров для~первого знакомства окажутся достаточными,
чтобы быстро начать работу.
У~нас нет~сомнений, что~LUWRAIN подойдёт для любой категории пользователей:детей, незрячих от~рождения,
пожилых людей,
слепоглухих 
и~т.~д.

2. **LUWRAIN  создан на~основе технологий Java.**
Пользоваться LUWRAIN можно на~любом компьютере и в~любой ОС,
для~которых есть виртуальная машина Java не~ниже версии 1.8,
а она есть практически для~любой современной ОС.

3. **LUWRAIN --- очень технологичное решение.**
Наша команда старается применять как~можно более современные технологие, 
которые с~наибольшей вероятностью будут востребованы в~будущем.
К~примеру, наш браузер основан на актуальном движке [WebKit](https://ru.wikipedia.org/wiki/WebKit),
а~благодаря хорошей интеграции GNU/Linux во~встраиваемые системы мы исследуем возможность развития LUWRAIN 
в~рамках современного направления ["интернета вещей"](https://ru.wikipedia.org/wiki/%D0%98%D0%BD%D1%82%D0%B5%D1%80%D0%BD%D0%B5%D1%82_%D0%B2%D0%B5%D1%89%D0%B5%D0%B9).

4. **LUWRAIN --- свободное ПО.**
Его~использование всегда бесплатно для~конечного пользователя.
Лицензия GPL~v.3 гарантирует, что пользователь никогда не~лишиться инструмента, к~которому он~привык,
равно как~и~любая компания, подготовившая на~основе LUWRAIN свой~продукт.

5. **LUWRAIN имеет сборку в~виде ISO-образа на~ядре Linux.**
Даже если у~пользователя нет~вообще никакой возможности приобрести или установить какую-либо ОС,
т.~е. у~него есть только компьютер с~пустым жёстким диском,
он всё~равно может пользоваться LUWRAIN,
если выберет вариант в~виде [загрузочного ISO-образа](local:/download/iso/).




## Интерфейс специально для~незрячих людей

Неспособность представить информацию в~подготовленном виде --- один из~главных недостатков  самого распространённого решения,
основанного на~утилитах экранного доступа,
работающих в~оконном интерфейсе.
Без~использования мыши, недоступной незрячим пользователям,  этот тип интерфейса неудобен.
Он плохо подходит для~выполнения повседневных задач,
требующих предельного уровня скорости и комфорта.
Более того,  если у~пользователя отсутствует предшествующий опыт визуальной работы с~оконным интерфейсом,
процесс знакомства с~ним и объяснение его~природы может быть очень сложным.

Незрячий пользователь всегда хранит образ своего рабочего окружения в~голове,
получая от~компьютера информацию  о~любых изменениях.
Наша задача состоит в~том,
чтобы сделать воображаемое рабочее пространство **предельно простым**.
Чем оно проще, тем больше у~пользователя окажется возможности  сосредоточится на~своей работе.
заметим, что при~использовании утилит экранного доступа пользователь вынужден хранить в~памяти  полный вид рабочего стола и расположения объектов,
хотя это невозможно в~принципе,
какими~бы совершенными утилиты экранного доступа ни~были.
Наш опыт показывает,
что создание нового интерфейса,
который не~уступал~бы возможностям оконного окружения,
вполне **реально**,
если, конечно, речь идёт о~задачах,
в~принципе доступных незрячему человеку.
(к~примеру, редактирование фотографий незрячему человеку недоступно).

На~первый взгляд, наверно, наши намерения кажутся фантастическими,
но на~деле здесь нет никакой фантастики.
Не~секрет, что редактирование текста --- самая доступная и понятная операция для~незрячего пользователя на~компьютере.
Остаётся только сделать так, чтобы в~таком виде решались~бы все необходимые задачи.
Как мы это делаем, [проверьте в~LUWRAIN](local:/doc/user/start/ ).
Помимо указанных особенностей,
наша концепция интерфейса имеет ряд дополнительных возможностей,
ускоряющих и упрощающих работу:

* возможность произвести поиск текстовой строки в~текущем рабочем объекте;

* возможность скопировать в~буфер обмена произвольный фрагмент информации,
какой~бы ни~был рабочий объект;

* возможность единообразного вывода изображения на~экран,
с~целью дополнения речевого вывода для~слабовидящих пользователей
с~гибкими возможностями его~настройки для~учёта индивидуальных особенностей.

