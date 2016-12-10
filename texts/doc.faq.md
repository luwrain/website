
ENTITLE='Frequently asked questions'
RUTITLE='Часто задаваемые вопросы'
TARGET=doc/faq/index.php

luwrain-page-en

# Frequently asked questions  =

== Who can be a~user of~LUWRAIN? ==

We consider three groups of~potential users:

* blind or visually-impaired people, 
who is~still unable to~work on~PC's
(due~to~insufficient level of~experience,
due~to~lack of~understanding of~GUI nature,
due~to~financial circumstances, etc),
including children born blind and seniors 

* experienced users with eyesight problems,
who is looking for~a~comfortable and speedy-efficient tool for~a~number 
of~highly demanded tasks 

* software developers, who would like to~create application well-recognizable by~blind people
but don't have enough  experience in~this area

== Is LUWRAIN a~competitor for~screen readers? ==

No, LUWRAIN develops the~idea of~an~audio desktop,
which is~supposed to~be an~environment "in~itself".
It~is independent from~the~most of~screen readers.
We sure that blind people get the~highest level  of~freedom and independence 
only in~case of~equal development and availability of~these both approaches
(screen readers and audio desktops. are developed and available equally).
Screen readers {guarantee} the~accessibility of~any~arbitrary functionality in~{any} form which~is possible;
meantime, environments "in~itself" take care that some number of~everyday tasks 
are~accessible in~{most suitable} for~the~perception of~blind people form.

== Should LUWRAIN users refuse the~accessibility technologies they used~to work with previously? ==

No, because LUWRAIN can be installed as~an~application on~the~operating system the~user already has.
It doesn't cause any problems with having screen readers installed simultaneously.
No~problems to~switch to~LUWRAIN only for~tasks the~user wants,
continuing to~use screen readers   for~other purposes.
In~addition, the~already installed operating system could be needed by~colleagues or other members of~a~family
if they share the~same machine with disabled person.

== Why the~LUWRAIN UI is more~suitable for~blind users? ==

People without the~problems of~eyesight use graphical user interface (GUI).
Usually it is Microsoft Windows, Apple Moc~OS~X or different desktops for~GNU/Linux.
The~GUI developers initially have designed their technology 
to~get highest efficiency with~the~mouse as~a~main method of~control.
Meantime, the~mouse is~inaccessible for~handicapped people and that  restricts their speed of~work and level of~comfort.
LUWRAIN brings working objects to~users
in~a~way that is~adjusted to~the~perception of~blind people  as~best as~possible.
We have spent a~lot of~time to~get necessary experience and understanding how to~do~that.
You can read more about exact differences of~LUWRAIN on~[local:/doc/difference/ the~corresponding page] of~this website.

== May I create my own application for~LUWRAIN? ==

Of~cource, and we highly encourage everybody to~create any third party applications for~LUWRAIN.
Any~new functionality can be~easily implemented on~Java.
You can read more about this on~[local:/doc/ext/ the~corresponding page].

== Is monitor empty during the~work  in~LUWRAIN? ==

No, we use the~screen as an~additional method to~bring information for~users with~low~vision.
It~plays a~supplementary role but remains very important.

== What kind of~PC is the~most suitable for~LUWRAIN? ==

We are trying to~support using LUWRAIN both on~mobile and desktop PC's.
For~mobile computers, it~is better to~use LUWRAIN as~a~stand-alone OS 
because it~tries to~use all~possible ways of~control, including touchpad,
and this makes a~laptop a~elegant accessory for~blind people.
On~desktop computers, more likely, you would prefer LUWRAIN as~an~application,
although installation as~an~stand-alone operating system remains still possible. 

== What is the~current state of~LUWRAIN development process? ==

As~for~today, we continue work on~our beta versions.
Current plan implies completing first stable version 1.0.0 until ~the~end of~2015.

== Should LUWRAIN users pay anything for~Luwrain? ==

No,
LUWRAIN is fully Open Source with~GPL~v.3 license.
All~materials are freely accessible publicly
and everybody is~welcomed to~use them or share with~other community members.

== Can I create my custom LUWRAIN build? ==

Yes,
 but if you would like to~make any substantial modifications
we~will kindly ask you to~take any another name for~your version to~prevent confusing. 
Please take a~look at~our~page with~[local:/doc/legal/ legal notes].

== How do the~web-browser function in~LUWRAIN? ==

We are about to~use [[https://docs.oracle.com/javafx/2/api/javafx/scene/web/WebEngine.html javafx.scene.web.WebEngine]] component
as it~supports Java~Script and allows access to~the~DOM structure of~the~site being observed.
In~addition, LUWRAIN as~a~stand-alone OS  should get~AT-SPI-based support of~Mozilla Firefox
but JavaFX-based approach is~more preferable.

== Is it impossible to~launch external application in~LUWRAIN as~a~stand-alone OS? ==

We work on~the~special component called GuideCraft which  is~purposed to~be a~lightweight 
screen reader based on~AT-SPI.
Roughly speaking, it must replace Orca for~the~environment without GNOME.
This component is very important because 
it allows to~run Skype and Firefox used by many people.
This component slightly goes out of~our conception of~text interface 
but we think that there wouldn't be any losses if we would do this step.
Besides that, all command line utilities remain fully available 
with the~terminal embedded in~LUWRAIN.

== I heard  that publishing systems TeX and Lilypond are very useful for~blind people, what about them? ==

Nobody should worry about any applications available in~Linux repositories
because LUWRAIN remains a~usual Gnu/Linux distro.
You may install any software you would like, including Latex and Lilypond.
Latex, Metapost, Lilypond and Gnuplot are really very useful for~blind people ,
so we will take care of~them.

== Are blind people able to~install LUWRAIN on~hard drive without any external sighted assistance? ==

Yes, we have prepared an~installation utility ,
which clones LiveCD environment to~hard drive.
This approach is rather simple, very effective 
and, what is the~most important, accessible for~blind users.

== May I participate in~LUWRAIN project and contribute to~it? ==

Of~course, we are a~completely open project and everybody is~welcomed to~participate 
in~our community and contribute to~our sources.
Take a~look at~our~[local:/download/git/ Git repositories]
to~learn more about our~sources organization.


luwrain-page-ru

# Часто задаваемые вопросы

## Почему LUWRAIN предлагается для образования, хотя разумнее учить тем системам, которыми пользуются все?

Разумнее учить навыкам быстро приспосабливаться к~любой системе, с~которой появилась необходимость начать работать.
Пользовательских интерфейсов много уже сейчас, в~будущем будет ещё больше. 
LUWRAIN позволяет решать некоторые задачи проще и эффективнее, в~том числе и в~сфере образования.

## Как работает браузер в~LUWRAIN?

Мы используем компонент (javafx.scene.web.WebEngine)[https://docs.oracle.com/javafx/2/api/javafx/scene/web/WebEngine.html] из~состава JavaFX,
поскольку он поддерживает Java~Script и предоставляет доступ к~структуре DOM  загруженной страницы.
Этот компонент основан на~движке (WebKit)[https://ru.wikipedia.org/wiki/WebKit],
который является базой некоторых распространённых браузеров, например, (Google Chrome)[https://ru.wikipedia.org/wiki/Google_Chrome].
Включение этого движка в~стандартную поставку JRE --- большая удача!

## Может~ли LUWRAIN быть запущен на~устройствах с~сенсорным экраном?

Мы работаем над~этим. 
Прямо сейчас нет.

## Подходит~ли LUWRAIN для~слепоглухих пользователей?

Мы уделяем большое внимание поддержки брайля в~нашей системе. 
Это позволяет слепоглухим пользователям получить доступ к~LUWRAIN.
Простота нашего интерфейса как нельзя лучше подходит для~особенностей восприятия слепоглухих пользователей.

## Должны~ли пользователи что-либо платить за~LUWRAIN?

Нет, LUWRAIN --- это свободное ПО.
Все материалы и результаты проекта находятся в~открытом доступе и распространяются бесплатно.

## Могу~ли я сделать собственную версию LUWRAIN?

Да, но если отличия от~нашей официальной версии достаточно существенные,
мы попросим вас  для~вашей сборки  выбрать другое название.
Вы можете найти более подробную информацию о~правовом статусе на~(этой странице)[local:/doc/legal/].
Товарный знак "LUWRAIN" подан на~регистрацию на~территории Российской Федерации,
и мы можем выполнять преследование лиц, недобросовестно его~использующих, в~том числе в~судебном порядке.
Помимо этого, опубликованные исходные тексты не~включают в~себя ключи регистрации приложений в~некоторых сервисах,
таких~как Twitter и Telegram. 
При~самостоятельной компиляции этих текстов вы должны зарегистрировать собственные приложения в~нужных сервисах и получить ваши собственные ключи.

## Возможно~ли включение в~состав LUWRAIN закрытых компонентов?

Нет, но мы можем опубликовах их на~нашем сайте как закрытые расширения для~удобства пользователей,
если правообладатель позволит это~сделать.

## Я слышал, что для~незрячих людей могут быть очень полезны издательские  системы TeX и Lilypond, что с~ними?

LUWRAIN в~виде самостоятельной операционной системы продолжает оставаться 
обычным дистрибутивом GNU/Linux.
Это означает, что из~доступных репозиториев можно установить любой пакет или приложение,
которое окажется полезным, включая TeX и Lilypond.
Это по-настоящему мощные пакеты, которые открывают незрячим людям множество возможностей в~плане подготовки печатных материалов,
а~также презентации для~публичных выступлений.
Мы активно поддерживаем их~использование.  

## Могут~ли незрячие люди установить LUWRAIN на~жёсткий диск самостоятельно?

Да, у~нас есть доступная программа установки,
но необходимо помнить, что выбор загрузочного устройства в~настройках BIOS обычно невозможен без~помощи зрячего человека. 

## Могу~ли я присоединиться к~проекту и внести свой вклад?

Конечно, LUWRAIN --- это открытый проект, и все желающие могут к~нему присоединиться.
Мы активно поддерживаем создание [local:/community/ сообщества] вокруг нашего проекта.
