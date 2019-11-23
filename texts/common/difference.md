
ENTITLE='Why is LUWRAIN different than other accessible solutions?'
RUTITLE='Чем LUWRAIN отличается от~других вспомогательных технологий?'
TARGET=doc/difference/index.php

luwrain-page-en

# Why is LUWRAIN different than other accessibility solutions?

See~also:

* [Main concepts](local:/doc/user/manual/intro/)

The~major difference between LUWRAIN and other software which at~first approach does the~same things 
is that LUWRAIN __is~not a~screen reading utility__;
LUWRAIN is __a~platform__ for~the~creation of~apps which aren't supposed to~be~controlled visually
(including the~applications in~the~area of~"Internet Of~Things"),
although support of~blind indeed is  one of~the~most important goals of~our~project.

The~nature of~a~platform makes possible the~creation and distribution of~apps which were absent previously;
with~LUWRAIN everybody can do this in~a~very cheap way.
For~example, in~education tasks  it~is~better to~have a~solution flexibly adjustable  for~current and future requirements
than  to~adjust the~education process itself to~permanently changing and very unstable screen reading software
without any~guarantee that tomorrow you will~not get new~tasks incompatible with~usual accessibility utilities.
With~LUWRAIN, commercial companies can create and offer the~clients for~the~access to~their services which will be easily understandable by~the~blind,
and LUWRAIN  takes care that~these apps will be
not only understandable, but comfortable as~well for~the~users.

becides that,  developing a~platform we~get a~possibility to~research
the~better ways of~the~interaction without involving an~eyesight  and the~corresponding applications of~a~design.
We think of~a~design  as~of~ways  to~get maximum  efficiency of~interaction with~PCs;
its roots  can be~found in~representation of~information  in~form highly adapted for~the~perception without an~eyesight.


luwrain-page-ru

# Чем LUWRAIN отличается от~других вспомогательных технологий?

LUWRAIN~--- это гибкая __платформа__ для~разработки невизуальных приложений,
только на~первый взгляд похожая по~своим функциям на~утилиту экранного доступа.
С~точки зрения пользовательского восприятия LUWRAIN намного удобнее и универсальней утилит экранного доступа
(про~это подробно рассказано [здесь](local:/doc/about/)).
Ниже мы остановимся на~некоторых отличиях,
на~которые особенно хотели~бы обратить внимание.

1. __Безопасность.__
LUWRAIN не~требует для~своей работы повышенных системных привилегий,
поэтому не~повышает уязвимость системы.
С тем, как злоумышленники могут использовать утилиты экранного доступа для~взлома компьютеров пользователей, [можно ознакомиться в~материале CNEWS](https://www.cnews.ru/news/top/2019-09-27_tainstvennye_zloumyshlenniki_1).
1. __Легальный правовой статус.__
LUWRAIN способен предложить доступ к~персональному компьютеру для~людей с~нарушениями зрения  без~каких-либо расходов на~оплату программного обеспечения.
К~сожалению, мы не~можем принять во~внимание какие-либо преимущества  утилит экранного доступа
без~учёта их~стоимости для~потребителей.
Даже бесплатные их~варианты не~предоставляют каких-либо полезных функций без~необходимости покупки лицензии на~использование операционной системы или комплекта офисных приложений.
Про~вопросы легальности говорить не~принято,
большинство материалов по~вспомогательным технологиям обходят эту~тему стороной,
хотя её~игнорирование ещё больше десоциализирует людей с~нарушениями зрения и переводит их в~полулегальную сферу экономики.
* __Кроссплатформенность.__
LUWRAIN предлагает единый уровень доступа к~нескольким операционным системам.
Мы активно поддерживаем работу в~Microsoft Windows и в~GNU/Linux,
хотя LUWRAIN может быть перенесён на~любую платформу, где запускается виртуальная машина Java.
GNU/Linux может быть намного эффективнее Microsoft Windows, например,
в~задачах разработки ПО или при~использовании малогабаритных ноутбуков.
* __Специализированный функционал.__
Невизуальная работа на ПК требует наличия ряда специализированных приложений, необходимых в~работе людей с~нарушениями зрения.
Наиболее остро такая необходимость наблюдается в~инструментах для~чтения литературы.
Существующие приложения нередко всё~равно реализуют концепцию самоозвученных интерфейсов,
среди них, например, Max-Reader или  [AMIS](https://daisy.org/info-help/document-archive/archived-projects/amis/download-and-installation/) (плеер изданий в~формате Daisy).
LUWRAIN может быть универсальным инструментом, упрощающим  создание подобных приложений,
сразу делая их~кроссплатформенными и интегрированными в~сетевые сервисы.
Другая проблема, которая нам кажется очень острой,~--- наличие удобных и кроссплатформенных невизуальных редакторов
для~работы с~[TeX](https://ru.wikipedia.org/wiki/TeX)
и~[Lilypond](https://ru.wikipedia.org/wiki/LilyPond).
* __Доступ к~сервисам в~Интернете.__
Интернет всё~больше развивается в~направлении предоставления доступа к~сетевым сервисам в~безбраузерном режиме посредством создания открытых API
(хотя сохраняющуюся острую необходимость наличия качественного браузера никто не~отрицает).
Наиболее наглядным примером этого движения может служить ожидание массового открытия API банками и другими кредитными организациями
(о~чём писал, к~примеру, [Коммерсантъ](https://www.kommersant.ru/doc/4060395)
и
[Тадвайзер](http://www.tadviser.ru/index.php/%D0%A1%D1%82%D0%B0%D1%82%D1%8C%D1%8F:%D0%92_%D0%B1%D0%B0%D0%BD%D0%BA%D0%BE%D0%B2%D1%81%D0%BA%D0%BE%D0%BC_%D1%81%D0%B5%D0%BA%D1%82%D0%BE%D1%80%D0%B5_%D0%A0%D0%BE%D1%81%D1%81%D0%B8%D0%B8_%D0%BD%D0%B0%D1%87%D0%B8%D0%BD%D0%B0%D0%B5%D1%82%D1%81%D1%8F_API-%D1%82%D1%80%D0%B0%D0%BD%D1%81%D1%84%D0%BE%D1%80%D0%BC%D0%B0%D1%86%D0%B8%D1%8F)).
Обратите внимание, что в~случае операций с~банками вопрос обеспечения безопасности,
который мы уже рассматривали,
становится одним из~ключевых.
Инструментов, кроме LUWRAIN, для~создания кроссплатформенных невизуальных клиентов  для~использования открытых API не~существует. 

Первые три~аргумента, возможно, у~многих людей вызовут улыбку,
потому что правовые вопросы использования программного обеспечения,
интерес к~GNU/Linux и, в~особенности,  собственная цифровая безопасность, действительно,
чаще всего находятся за~пределами постоянного пристального внимания.
Тем не~менее, они в~сумме вносят существенный вклад в~облик современного человека с~нарушениями зрения,
делая его неизбежно уязвимым и вынужденным всегда находиться в~"серой" зоне экономики.
