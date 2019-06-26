
ENTITLE='Frequently asked questions'
RUTITLE='Часто задаваемые вопросы'
TARGET=doc/faq/index.php

luwrain-page-en

# Frequently asked questions

See~also:

* [Why is~LUWRAIN different than other accessible solutions?](local:/doc/difference/ )
* [Legal notes](local:/doc/legal/)

## There~are so many screen readers, why do you~do all of this?

The~solutions based on~screen reading utilities  indeed are  very old  and deeply researched,
meantime, the~fraction of~the~blind who feel themselves  absolutely confident with~information technologies   isn't very high.
In~Russia this~group has around 10% of~the~blind people of~the~country,
whereas   the~group of~people who use the~Internet  constantly is~estimated  as~80%.

## If I install LUWRAIN, must I uninstall the~screen readers I already have?

No.
LUWRAIN can be nicely used in~conjunction with other screen reading software.

## Is~there LUWRAIN version for mobile phones?

Not yet, we work on it and appreciate any help.


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


## Can LUWRAIN users create their own scripts to~customize the~system?

Yes.
LUWRAIN has the~integrated support of~users extensions on JavaScript.
You can find [here](local:/doc/js/) more information about this.

luwrain-page-ru

# Часто задаваемые вопросы

См.~также:

* [Чем LUWRAIN отличается от~других вспомогательных технологий?](local:/doc/difference/ )
* [Правовой статус](local:/doc/legal/)

## Приведите хоть один конкретный пример, когда LUWRAIN мог~бы сделать вещь, недоступныю при~помощи стандартных инструментов.

В~[анонсе Яндекс.Коннекта ](https://yandex.ru/blog/connect/yandeks-obedinyaet-interfeysy-dlya-upravleniya-konnektom-i-pochtoy-dlya-domena) есть комментарий, что служба недоступна для людей с~нарушениями зрения,
если они работают с~ней при~помощи браузера.
Рядом~же упоминается существование API для~Яндекс.Коннекта.
LUWRAIN может быть использован как инструмент для~доступа к~API Интернет-сервисов.
Если~осуществить работу с~Яндекс.Коннектом через API при~помощи LUWRAIN,
то это может компенсировать недоступность веб-версии.
Других развитых инструментов для~создания невизуальных интерфейсов для~работы с~API в~Интернете не~существует.

## Когда LUWRAIN используется как основа для отдельного приложения, почему бы не делать обычную оконную программу, которая и так прочитается при помощи Jaws for Windows или NVDA?

Наши аргументы следующие:

1. Приложения на~основе LUWRAIN функционируют независимо от~сторонних компонентов,
в то время как Jaws for Windows или NVDA присутствуют только у людей, уже имеющих опыт невизуальной работы с ПК.
LUWRAIN позволит приступить к работе практически немедленно,
сводя к минимуму организационные расходы на подготовку рабочего места и обучение пользователя, если он новичок.
При этом опытный пользователь не потеряет ничего.
1. Обычная оконная программа будет просто отдельным приложением,
в то время как LUWRAIN сразу предложит дополнительный доступ к сетевым сервисам,
для получения определения понятий на основе статей из Интернет-энциклопедий или для перевода с одного языка на другой.
1. Обычное оконное приложение будет функционировать только в одной операционной системе.
Наиболее вероятно, что в Microsoft Windows,
в то время как LUWRAIN сделает приложение сразу доступным и для пользователей GNU/Linux.
Развитых кроссплатформенных инструментов построения невизуальных интерфейсов, кроме LUWRAIN, не существует.
Мы глубоко уверены, что необходимо как можно больше использовать плюсы GNU/Linux для решения задач людей с нарушениями зрения.1. Использование Jaws for Windows подразумевает приобретение коммерческих лицензий,
равно как и использование Microsoft Windows.
Образовательные учреждения не могут закрывать глаза на нелегальные случаи использования программных средств.
Решение на основе LUWRAIN будет легальным в любой ситуации.
1. Использование решения на основе LUWRAIN не зависит от изменений,
которые в ходе обновлений

--- Постойте, постойте!
Всё, что вы описали, всё равно можно сделать и без LUWRAIN.
В конечном счёте, мы можем сделать самоозвученное приложение на переносимом подмножестве C/C++,
включив в него речевой синтезатор и какие-нибудь клиенты для сетевых сервисов.

--- Разумеется, но тогда это будет просто новый LUWRAIN.
Зачем нужно это делать, если мы это уже сделали и выложили результаты в общественный доступ на основе свободной лицензии?
Помимо этого нужно помнить, что построить удобный невизуальный интерфейс  не так просто,
мы потратили огромное количество времени на эксперименты и подготовку необходимых компонентов для реализации.

## В чём новизна LUWRAIN? Разве это не идеи, так или иначе известные ранее?

LUWRAIN  объединяет в одном целостном решении три компонента:

1. Кроссплатформенный интерфейс пользователя, изначально спроектированный невизуальным.
1. Интеграцию с сетевыми сервисами.
1. Инструменты расширения на основе скриптовых языков программирования и возможность машинного обучения.

emacspeak/


## Если я установлю LUWRAIN, должен~ли буду отказаться от~тех программ экранного доступа, которыми пользуюсь сейчас?

Нет, конечно.
LUWRAIN превосходно сочетается с~другими вспомогательными технологиями.

## Существует~ли LUWRAIN для~мобильных телефонов?

Пока нет, мы работаем над~этим и очень нуждаемся в~помощи.


## Почему LUWRAIN предлагается для~образования, хотя разумнее обучать работе на~тех системах, которыми пользуются все?

Разумнее учить навыкам быстро приспосабливаться к~любой системе, с~которой необходимо работать.
Пользовательских интерфейсов сейчас уже~много, в~будущем будет ещё больше.
Когда ученик закончит школу и ВУЗ, программы, к~которым он привык, с~большой вероятностью изменятся.

## Как работает браузер в~LUWRAIN?

Мы используем компонент [javafx.scene.web.WebEngine](https://docs.oracle.com/javafx/2/api/javafx/scene/web/WebEngine.html) из~состава JavaFX,
поскольку он поддерживает JavaScript и предоставляет доступ к~структуре DOM  загруженной страницы.
Этот компонент основан на~движке [WebKit](https://ru.wikipedia.org/wiki/WebKit),
который является базой некоторых распространённых браузеров, например, [Google Chrome](https://ru.wikipedia.org/wiki/Google_Chrome).

## Могут~ли пользователи создавать собственные скрипты для~LUWRAIN?

Да.
LUWRAIN имеет встроенный механизм расширений на~основе языка JavaScript.
Подробно про~это рассказано [здесь](local:/doc/js/).

