
ENTITLE='Why is LUWRAIN different than other accessible solutions?'
RUTITLE='Чем LUWRAIN отличается от~других вспомогательных технологий?'
TARGET=doc/difference/index.php

luwrain-page-en

# Why is LUWRAIN different than other accessible solutions?

We consider three projects as~something close to~the~things 
we are creating. 
They are 
[[http://emacspeak.sourceforge.net/ Emacspeak]],
[[http://www.knopper.net/knoppix-adriane/index-en.html Adriane]] and
[[http://www.yourdolphin.com/productdetail.asp?id=30 Dolphin Guide]].
LUWRAIN has noticeable differences with all~of~them
and let take a~closer look what these difference are.

## Emacspeak

Emacspeak can be fairly taken as~an~origin of~our inspiration.
A~lot of~ideas came exactly from~Emacspeak 
but significant number of~its disadvantages don't allow to use it as~a~main-stream platform for~blind people
(we~think that Emacspeak's authors didn't plan it to~be anything like this). 
There~is~a~list of~main points why Emacspeak doesn't suit:

* Emacspeak doesn't have a~proper entity of~application
and we may not use it as~a~platform for~creating and distributing of~accessible applications
* Emacspeak doesn't have any i18n support
* GNU~Emacs basically  is a~text editor 
and it isn't a~platform which constructed for~blind people completely 
* Emacspeak doesn't have enough protection agains improper user actions
* Although GNU~Emacs itself is a~cross-platform software,
Emacspeak purposed typically for~launch on~GNU/Linux

## Adriane

Adriane is a~very interesting experience but has some substantial disadvantages as~well:

* Adriane is~a~GNU/Linux distro 
but we need an~environment capable of~running on~systems different than GNU/Linux
* Adriane may not be used as~a~platform for~creating and distributing accessible applications 
because doesn't have any API for~it
* We don't know how to~enhance Adriane and how to~add a~proper i18n support to it

## Dolphin Guide

The~main problem with~Dolphin Guide is that it is a~proprietary software. 
It is proprietary itself and can be launch only on~Microsoft Windows, which is proprietary as~well. 
Some of~the~disadvantages mentioned for~Emacspeak and for~Adriane are actual for~Dolphin~Guide too 
but we don't list them once again because the~main reason 
 of~rejecting Dolphin Guide is its legal status.

## Other approaches

The~most popular solution to~the~problem of~accessible work on~PC remains 
using of~screen reading software in~GUI.
Since difference with  this approach is widely analyzed on~other pages of~this website, 
let skip it here and notice one more important thing. 

As we~think, there is no~any solution in~the~world which can be used 
for~creating a~fully functional device for~blind people.
We are speaking not about creating a~new device from~scratch,
what evidently is very expensive,
 but about a~way for~turning existing laptops and embedded PC's into elegant and reliable accessory for~blind people.

We need a~completely new way of~interaction and a~completely new way for~offering  the~information to~the~user.
The~former thing is~needed because we should have a~method for~using touch pads 
and LUWRAIN is quite suitable for~adding a~support of~interaction with touch pads .
The~second thing  is needed because all laptops have a~screen and  it should be used for~people with low vision.
LUWRAIN potentially has all of~this  and keeping the~developing of~this ideas we 
could be able to~adjust a~lot~of hardware for~using by~blind people, including tablets. 
According to~our experience, none of~the existing solutions can be suitable to this. 

luwrain-page-ru

# Чем LUWRAIN отличается от~других вспомогательных технологий?

По~сравнению с~наиболее распространённой технологией на~основе экранных чтецов LUWRAIN обладает рядом~преимуществ.
Рассмотрим их, хотя мы всегда обращаем внимание, что LUWRAIN и экранные чтецы не~являются конкурентами ---
круг решаемых задачь различается значительно.

1. **LUWRAIN предлагает специализированные приложения, охватывающие потребности  незрячих людей.** 
Круг задач незрячего человека отличается от~круга задач зрячего.
В~обычных ОС нет~приложений, например, для~комфортного чтения электронных книг, 
что очень важно в~техническом оснащении образовательного процесса.
LUWRAIN имеет такой функционал, включая поддержку специализированных форматов, например, Daisy.
2. **LUWRAIN единственная в~мире платформа для~разработки приложений, адаптированных для~восприятия незрячих людей.**
Используя LUWRAIN компании и организации могут обеспечить доступ к~своим сервисам людям с~нарушениями зрения,
не~имея дополнительного опыта в~сфере вспомогательных технологий.
Приложения экранного доступа такого обеспечить не~могут.
3. **LUWRAIN лучше подходит для~особенности работы слепоглухих людей.**
Слепоглухие люди работают только со~строкой брайля, не~получая никакой иной информации.
В~таких условиях навигация и ориентирование внутри графического оконного интерфейса (GUI) 
требует существенно более длительной подготовки и более долгого обучения.
LUWRAIN предоставляет функциональность только в~текстовом виде, 
что значительно упрощает работу слепоглухого человека.
4. **LUWRAIN гарантирует единообразное поведение системы, облегчает доставку приложений и их~переносимость.**
Наша система не~использует стандартных функций вспомогательных технологий ОС, на~которых она~запускается,
таким образом, поведение будет одинаковым как на~Microsoft Windows, так и на ~GNU/Linux (хотя могут отличаться комбинации горячих клавиш).
Компания, предоставившая доступ к~своему сервису на~базе LUWRAIN,
получает возможность подготовить единую документацию и инструкции для~отдела технической поддержки
с~указаниями, как будет осуществляться доступ к~сервису для~незрячих людей. 
С~точки зрения переносимости вспомогательных технологий LUWRAIN является единственным в~мире решением, предоставляющим подобную возможность.
Причём в~случае дистрибутива на~основе GNU/Linux оно состоит только из~свободных компонентов (СПО).
Технологии Java, такие~как [Java Web Start](https://ru.wikipedia.org/wiki/Java_Web_Start) позволяют сделать доставку  приложений и их~поддержку в~актуальном состоянии предельно простой и дешёвой.
5. **LUWRAIN предоставляет широкие возможности кастомизации.**
Наша технологическая платформа позволяет выпускать версии, модифицированные под~конкретные нужды различных пользователей.
В~том числе и в~виде загрузочных ISO-образов.
Скажем, руководство образовательного учреждения способно выпустить версию системы, записанную на~флэш-накопители,
в~которую включено всё~необходимое для~некоторой группы учащихся.
При~этом напоминаем, что установку LUWRAIN с~загрузочного ISO-образа незрячий человек способен выполнить самостоятельно без~помощи зрячих помощников. 
Команда наших разработчиков публикует все необходимые для~этого материалы, 
но готова выполнить подобную кастомизацию и самостоятельно в~рамках наших платных услуг.

__Но самая главная особенность LUWRAIN --- высокая скорость работы и простота!__ 
Действительно, мы начинали нашу разработку прежде всего с~намерением предельно упростить использование ПК,
максимально задействуя современные технологии. 
Только уже в~ходе исследований нам стало ясно, что найденное сочетание решений обеспечивает множество организационных преимуществ, описанных выше.

## Другие текстовые окружения

В~мире известно три~других проекта, 
которые развивают направление невизуальной работы на~ПК с~исключением понятий графического пользовательского интерфейса (GUI).
К~ним относятся:

1. [Dolphin Guide.](http://www.yourdolphin.com/productdetail.asp?id=30) 
Dolphin Guide делает работу на~компьютере существенно проще,
но по~существу является только оболочкой поверх всё того~же графического пользовательского интерфейса (GUI).
Никаких возможностей переносимости, кастомизации или для~разработки адаптированных приложений он не~предлагает.
2. [Emacspeak.](http://emacspeak.sourceforge.net)
Это одно из~самых интересных решений, у~которого LUWRAIN унаследовал очень много полезных идей,
но оно удобно только для~опытных пользователей, занимающихся преимущественно задачами разработки ПО.
Emacspeak очень трудно перенести на~Microsoft Windows,
и он не~предлагает никаких дополнительных специализированных приложений.
Помимо этого Emacspeak не~предлагает полноценного веб-браузер  с~поддержкой JavaScript.
3. [Adriane](http://www.knopper.net/knoppix-adriane/index-en.html).
Эта~система очень близка по~замыслу, но~в~последнее время практически не~развивается.
Она использует самые простые средства GNU/Linux,
что существенно ограничивает масштабирование решений на~её~основе.
