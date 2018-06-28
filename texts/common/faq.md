
ENTITLE='Frequently asked questions'
RUTITLE='Часто задаваемые вопросы'
TARGET=doc/faq/index.php

luwrain-page-en

# Frequently asked questions

See~also:

* [Why is~LUWRAIN different than other accessible solutions?](local:/doc/difference/ )
* [Legal notes](local:/doc/legal/)
* [Who we are?](local:/doc/authors/)

## Why do you do~all of~this while there are so many screen reading software?

The~solutions based on~popular screen reading utilities  indeed are  very old  and deeply researched,
meantime, the~fraction of~the~blind who feel themselves  absolutely confident with~information technologies   isn't very high.
In~Russia this~ ~group has around 1% of~the~blind people of~the~country,
whereas   the~group of~people who use the~Internet  constantly is~estimated  as~70%.
We develop the~technology which is~supposed to~be more  comfortable and more~understandable than the~screen readers,
which will remain available  regardless what we~do.

## Why is~LUWRAIN suggested for~education, if, apparently, it's rational to~learn the~widely  popular systems?

It's rational  to~learn how~ understand any~new system  which  the~user is~required to~start work~on.
We can see a~lot of~user interfaces at~the~moment,
it'~s reasonable to~expect more of~them in~the~close future.
When the~student graduates the~university,
the~version of~Microsoft Windows which he or she is used to~work on   will get already outdated.

## How does  the~browser in~LUWRAIN work?

We use JavaFX component [javafx.scene.web.WebEngine](https://docs.oracle.com/javafx/2/api/javafx/scene/web/WebEngine.html), 
which supports JavaScript and gives access to~the~DOM~structure  of~the~loaded page.
This component is~based on~[the~WebKit~engine](https://en.wikipedia.org/wiki/WebKit).
WebKit goes as~an~engine for~some popular browsers, for~example for~[Google Chrome](https://en.wikipedia.org/wiki/Google_Chrome).
We~are very lucky that this component is now a~part  of~JavaFX.

## What do~you take into account on~decisions what services will be~included in~LUWRAIN?

First of~all, we take the~services with good  libraries on~Java for~access to~them.
Some of~the~services  are highly demanded,
so we can start  implementing  access to~them even if there is no~suitable library on~Java.
In~this~case it~would be very fortunate, if we can get a~contact with the~authors of~~the~service.

## Must LUWRAIN users pay anything forr~LUWRAIN?

NNo, the~basic LUWRAIN distribution is~Open Source
and we promise that the~distribution covering basic everyday tasks  will remain free.
meantime, there can be~some  proprietary components,
if they are purposed for~solving some specific tasks or are~created for~commercial companies.

## Can the~blind install LUWRAIN on~their hard~drive without sighted help?

Yes, LUWRAIN has an~accessible installation utility,
but it's necessary to~keep in~mind that the~selection of~the~bootable media is~usually inaccessible  .



luwrain-page-ru

# Часто задаваемые вопросы

См.~также:

* [Чем LUWRAIN отличается от~других вспомогательных технологий?](local:/doc/difference/ )
* [Правовой статус](local:/doc/legal/)
* [Авторы проекта](local:/doc/authors/)

## Существует~же проверенный подход к~решению задач доступности на~основе экранных чтецов, зачем ещё что-то ещё?

Подход на~основе экранных чтецов, действительно, старый и проверенный,
но, несмотря на~всё, доля людей с~нарушениями зрения, активно использующих ПК, остаётся очень невысокой.
В~России эта~оценка колеблется в~районе 1%,
хотя оценка доли пользователей интернета приближается к~70%.
Мы развиваем технологию, которая будет намного понятней, удобней и быстрей в~работе,
чем утилиты экранного доступа,
которые и так никто не~отберёт.

## Почему LUWRAIN предлагается для образования, хотя разумнее обучать работе на~тех системах, которыми пользуются все?

Разумнее учить навыкам быстро приспосабливаться к~любой системе, с~которой появилась необходимость начать работать.
Пользовательских интерфейсов много уже сейчас, в~будущем будет ещё больше.
Когда ученик закончит школу и ВУЗ, с~большой вероятностью версия Microsoft Windows,
на~которой его учили работать на~ПК, уже всё~равно устареет.

## Как работает браузер в~LUWRAIN?

Мы используем компонент [javafx.scene.web.WebEngine](https://docs.oracle.com/javafx/2/api/javafx/scene/web/WebEngine.html) из~состава JavaFX,
поскольку он поддерживает JavaScript и предоставляет доступ к~структуре DOM  загруженной страницы.
Этот компонент основан на~движке [WebKit](https://ru.wikipedia.org/wiki/WebKit),
который является базой некоторых распространённых браузеров, например, [Google Chrome](https://ru.wikipedia.org/wiki/Google_Chrome).
Включение этого движка в~стандартную поставку JRE --- большая удача!

## На~основе каких критериев вы выбираете сервисы для~поддержки в~LUWRAIN?

В~первую очередь мы добавляем поддержку тех~сервисов, для~которых существуют клиентские библиотеки на~Java.
Некоторые сервисы являются критически значимыми, и даже если готовой библиотеки нет, 
мы предпринимаем попытку установить контакт с~авторами, чтобы найти решение.

## Должны~ли пользователи что-либо платить за~LUWRAIN?

Нет, базовая поставка LUWRAIN~--- это свободное ПО.
Мы обещаем, что дистрибутив, обеспечивающий решение основных задач пользователей с~нарушениями зрения, будет оставаться таковым.
Но среди наших продуктов могут быть и закрытые компоненты,
если это специализированные решения или решения для~коммерческих компаний.

## Могут~ли незрячие люди установить LUWRAIN на~жёсткий диск самостоятельно?

Да, у~нас есть доступная программа установки,
но необходимо помнить, что выбор загрузочного устройства в~настройках BIOS обычно невозможен без~помощи зрячего человека. 

