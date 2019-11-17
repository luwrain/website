
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

## Приведите хоть один конкретный пример, когда LUWRAIN мог~бы сделать вещь, недоступныю при~помощи стандартных инструментов. экранного доступа

В~[анонсе Яндекс.Коннекта ](https://yandex.ru/blog/connect/yandeks-obedinyaet-interfeysy-dlya-upravleniya-konnektom-i-pochtoy-dlya-domena) есть комментарий, что служба недоступна для людей с~нарушениями зрения,
если они работают с~ней при~помощи браузера.
Рядом~же упоминается существование API для~Яндекс.Коннекта.
LUWRAIN может быть использован как инструмент для~доступа к~API Интернет-сервисов.
Если~осуществить работу с~Яндекс.Коннектом через API при~помощи LUWRAIN,
то это может компенсировать недоступность веб-версии.
Других развитых инструментов для~создания невизуальных интерфейсов для~работы с~API Интернет-сервисов не~существует.

## Почему LUWRAIN предлагается для~образования, хотя разумнее обучать работе на~тех системах, которыми пользуются все?

Мы объясняем это следующим образом:

Когда ученик закончит школу и ВУЗ, 1. программы, к~которым он привык, с~большой вероятностью сменятся,
разумнее учить навыкам быстро приспосабливаться к~любой системе, с~которой необходимо работать.
1. В~США в~2018~г. [60% ПК для~школ составляют Google ChromeBook](https://www.cnbc.com/2019/03/20/apple-google-microsoft-are-battling-for-dominance-in-education.html),
не~пользующиеся популярностью в~остальных секторах рынка.
Этот факт не~вызвал каких-либо опасений со~стороны общественности и педагогов.
1. Мы хотим обратить внимание, что основной проблемой тифлопедагогики является отсутствие адаптированных учебных материалов,
а не~выбор тех или иных инструментов для~невизуальной работы на~ПК.

По~этим причинам LUWRAIN развивается в~направлении самого простого способа обеспечения гарантированного доступа к~обучающим материалам,
надёжно решая эту~задачу для~учеников и педагогов.


## Если я установлю LUWRAIN, должен~ли буду отказаться от~тех программ экранного доступа, которыми пользуюсь сейчас?

Нет,
LLUWRAIN превосходно сочетается с~прочими вспомогательными технологиями.

## Существует~ли LUWRAIN для~мобильных телефонов?

Пока нет, мы работаем над~этим и очень нуждаемся в~помощи.

## Когда LUWRAIN используется как основа для отдельного приложения, почему бы не делать обычную оконную программу, которая и так прочитается при помощи Jaws for Windows или NVDA?

Наши аргументы следующие:

1. Приложения на~основе LUWRAIN функционируют независимо от~сторонних компонентов и позволят начать работать всем практически незамедлительно,
в то время как Jaws for Windows или NVDA присутствуют только у людей, уже имеющих опыт невизуальной работы с ПК.
1. LUWRAIN дополнит основную функциональность приложения интеграцией с~интернет сервисами, что существенно повысит удобство работы.
1. Приложение на~основе LUWRAIN будет кроссплатформенным,
в~то~время как обычное оконное приложение будет функционировать только в одной операционной системе.
1. Использование решения на основе LUWRAIN постоянно и единообразно для~всех платформ,
оно не~зависит от~изменений в~утилитах экранного доступа, которые неизбежно будут происходить и влиять на~пользовательское восприятие.

__--- Постойте, постойте!
Всё, что вы описали, всё равно можно сделать и без LUWRAIN.
В конечном счёте, мы можем сделать самоозвученное приложение на переносимом подмножестве C/C++,
включив в него речевой синтезатор и какие-нибудь клиенты для сетевых сервисов.__

--- Разумеется, но тогда это будет просто новый LUWRAIN.
Зачем нужно это делать, если мы это уже сделали и выложили результаты в общественный доступ на основе свободной лицензии?
Помимо этого нужно помнить, что построить удобный невизуальный интерфейс  не так просто,
мы потратили огромное количество времени на эксперименты и подготовку необходимых компонентов.


## Если LUWRAIN целиком предназначен для~невизуальной работы, значит, на~экране ничего нет?

На~экране присутствует текст, дублирующий основное содержание  рабочего пространства с~возможностью выбора размера шрифта.
Эта~возможность крайне необходима для~пользователей с~остаточным зрением.
На~[нашем канале YouTube](https://www.youtube.com/channel/UCY2ZRqeBTH4nhdPG1Vjl-6g)
показано как~выглядит внешне работа в~LUWRAIN.



## Если текст на~экране дублирует текстовое содержание, значит, на~экране никогда не~появляется никакой графики?

Некоторые приложения имеют возможность включить в~LUWRAIN показ графических материалов.
Так делает наш~браузер, который наряду с~текстовой версией страницы может предоставить её~графический вариант.
Графически могут быть показаны PDF-файлы и другие изображения.
несмотря на~приоритет невизуального использования,
показ графических материалов остаётся важной составляющей,
потому что это может помочь в~работе пользователем с~остаточным зрением и для~целей демонстрации.
Скажем, для~показа PDF-презентации на~конференциях и для~показа фотографий друзьям.

## Как работает браузер в~LUWRAIN?

Мы используем компонент [javafx.scene.web.WebEngine](https://docs.oracle.com/javafx/2/api/javafx/scene/web/WebEngine.html) из~состава JavaFX,
поскольку он поддерживает JavaScript и предоставляет доступ к~структуре DOM  загруженной страницы.
Этот компонент основан на~движке [WebKit](https://ru.wikipedia.org/wiki/WebKit),
который является базой некоторых распространённых браузеров, например, [Google Chrome](https://ru.wikipedia.org/wiki/Google_Chrome).


## Могут~ли пользователи создавать собственные скрипты для~LUWRAIN?

Да,
LUWRAIN имеет встроенный механизм расширений на~основе языка JavaScript.
Подробно про~это рассказано [здесь](local:/doc/js/).
