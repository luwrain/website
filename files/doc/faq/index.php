<?php include "../../functions.php"; luwrain_begin_page('/doc/faq/index.php', luwrain_current_lang() == 'ru'?'Часто задаваемые вопросы':'Frequently asked questions');?>
<?php if (luwrain_current_lang() == 'en') {?>
<h1>Frequently asked questions</h1>

<p>See&#160;also:</p>

<ul>
<li><a href="<?php echo luwrain_link('/doc/difference/');?>">Why is&#160;LUWRAIN different than other accessible solutions?</a></li>
<li><a href="<?php echo luwrain_link('/doc/legal/');?>">Legal notes</a></li>
</ul>

<h2>There&#160;are so many screen readers, why do you&#160;do all of this?</h2>

<p>The&#160;solutions based on&#160;screen reading utilities  indeed are  very old  and deeply researched,
meantime, the&#160;fraction of&#160;the&#160;blind who feel themselves  absolutely confident with&#160;information technologies   isn't very high.
In&#160;Russia this&#160;group has around 10% of&#160;the&#160;blind people of&#160;the&#160;country,
whereas   the&#160;group of&#160;people who use the&#160;Internet  constantly is&#160;estimated  as&#160;80%.</p>

<h2>If I install LUWRAIN, must I uninstall the&#160;screen readers I already have?</h2>

<p>No.
LUWRAIN can be nicely used in&#160;conjunction with other screen reading software.</p>

<h2>Is&#160;there LUWRAIN version for mobile phones?</h2>

<p>Not yet, we work on it and appreciate any help.</p>

<h2>Why is&#160;LUWRAIN suggested for&#160;education, if, apparently, it's rational to&#160;learn the&#160;widely  popular systems?</h2>

<p>It's rational  to&#160;learn how&#160; understand any&#160;new system  which  the&#160;user is&#160;required to&#160;start work&#160;on.
We can see a&#160;lot of&#160;user interfaces at&#160;the&#160;moment,
it'&#160;s reasonable to&#160;expect more of&#160;them in&#160;the&#160;close future.
When the&#160;student graduates the&#160;university,
the&#160;version of&#160;Microsoft Windows which he or she is used to&#160;work on   will get already outdated.</p>

<h2>How does  the&#160;browser in&#160;LUWRAIN work?</h2>

<p>We use JavaFX component <a href="https://docs.oracle.com/javafx/2/api/javafx/scene/web/WebEngine.html">javafx.scene.web.WebEngine</a>, 
which supports JavaScript and gives access to&#160;the&#160;DOM&#160;structure  of&#160;the&#160;loaded page.
This component is&#160;based on&#160;<a href="https://en.wikipedia.org/wiki/WebKit">the&#160;WebKit&#160;engine</a>.
WebKit goes as&#160;an&#160;engine for&#160;some popular browsers, for&#160;example for&#160;<a href="https://en.wikipedia.org/wiki/Google_Chrome">Google Chrome</a>.</p>

<h2>Can LUWRAIN users create their own scripts to&#160;customize the&#160;system?</h2>

<p>Yes.
LUWRAIN has the&#160;integrated support of&#160;users extensions on JavaScript.
You can find <a href="<?php echo luwrain_link('/doc/js/');?>">here</a> more information about this.</p>
<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
<h1>Часто задаваемые вопросы</h1>

<p>См.&#160;также:</p>

<ul>
<li><a href="<?php echo luwrain_link('/doc/difference/');?>">Чем LUWRAIN отличается от&#160;других вспомогательных технологий?</a></li>
<li><a href="<?php echo luwrain_link('/doc/legal/');?>">Правовой статус</a></li>
</ul>

<h2>Приведите хоть один конкретный пример, когда LUWRAIN мог&#160;бы сделать вещь, недоступныю при&#160;помощи стандартных инструментов.</h2>

<p>В&#160;<a href="https://yandex.ru/blog/connect/yandeks-obedinyaet-interfeysy-dlya-upravleniya-konnektom-i-pochtoy-dlya-domena">анонсе Яндекс.Коннекта </a> есть комментарий, что служба недоступна для людей с&#160;нарушениями зрения,
если они работают с&#160;ней при&#160;помощи браузера.
Рядом&#160;же упоминается существование API для&#160;Яндекс.Коннекта.
LUWRAIN может быть использован как инструмент для&#160;доступа к&#160;API Интернет-сервисов.
Если&#160;осуществить работу с&#160;Яндекс.Коннектом через API при&#160;помощи LUWRAIN,
то это может компенсировать недоступность веб-версии.
Других развитых инструментов для&#160;создания невизуальных интерфейсов для&#160;работы с&#160;API в&#160;Интернете не&#160;существует.</p>

<h2>Как работает браузер в&#160;LUWRAIN?</h2>

<p>Мы используем компонент <a href="https://docs.oracle.com/javafx/2/api/javafx/scene/web/WebEngine.html">javafx.scene.web.WebEngine</a> из&#160;состава JavaFX,
поскольку он поддерживает JavaScript и предоставляет доступ к&#160;структуре DOM  загруженной страницы.
Этот компонент основан на&#160;движке <a href="https://ru.wikipedia.org/wiki/WebKit">WebKit</a>,
который является базой некоторых распространённых браузеров, например, <a href="https://ru.wikipedia.org/wiki/Google_Chrome">Google Chrome</a>.</p>

<h2>Если я установлю LUWRAIN, должен&#160;ли буду отказаться от&#160;тех программ экранного доступа, которыми пользуюсь сейчас?</h2>

<p>Нет, конечно.
LUWRAIN превосходно сочетается с&#160;другими вспомогательными технологиями.</p>

<h2>Существует&#160;ли LUWRAIN для&#160;мобильных телефонов?</h2>

<p>Пока нет, мы работаем над&#160;этим и очень нуждаемся в&#160;помощи.</p>

<h2>Когда LUWRAIN используется как основа для отдельного приложения, почему бы не делать обычную оконную программу, которая и так прочитается при помощи Jaws for Windows или NVDA?</h2>

<p>Наши аргументы следующие:</p>

<ol>
<li>Приложения на&#160;основе LUWRAIN функционируют независимо от&#160;сторонних компонентов,
в то время как Jaws for Windows или NVDA присутствуют только у людей, уже имеющих опыт невизуальной работы с ПК.
LUWRAIN позволит приступить к работе практически немедленно,
сводя к минимуму организационные расходы на подготовку рабочего места и обучение пользователя, если он новичок.
При этом опытный пользователь не потеряет ничего.</li>
<li>Обычная оконная программа будет просто отдельным приложением,
в то время как LUWRAIN сразу предложит дополнительный доступ к сетевым сервисам,
для получения определения понятий на основе статей из Интернет-энциклопедий или для перевода с одного языка на другой.</li>
<li>Обычное оконное приложение будет функционировать только в одной операционной системе.
Наиболее вероятно, что в Microsoft Windows,
в то время как LUWRAIN сделает приложение сразу доступным и для пользователей GNU/Linux.
Развитых кроссплатформенных инструментов построения невизуальных интерфейсов, кроме LUWRAIN, не существует.
Мы глубоко уверены, что необходимо как можно больше использовать плюсы GNU/Linux для решения задач людей с нарушениями зрения.1. Использование Jaws for Windows подразумевает приобретение коммерческих лицензий,
равно как и использование Microsoft Windows.
Образовательные учреждения не могут закрывать глаза на нелегальные случаи использования программных средств.
Решение на основе LUWRAIN будет легальным в любой ситуации.</li>
<li>Использование решения на основе LUWRAIN не зависит от изменений,
которые в ходе обновлений</li>
</ol>

<p>&#x2014; Постойте, постойте!
Всё, что вы описали, всё равно можно сделать и без LUWRAIN.
В конечном счёте, мы можем сделать самоозвученное приложение на переносимом подмножестве C/C++,
включив в него речевой синтезатор и какие-нибудь клиенты для сетевых сервисов.</p>

<p>&#x2014; Разумеется, но тогда это будет просто новый LUWRAIN.
Зачем нужно это делать, если мы это уже сделали и выложили результаты в общественный доступ на основе свободной лицензии?
Помимо этого нужно помнить, что построить удобный невизуальный интерфейс  не так просто,
мы потратили огромное количество времени на эксперименты и подготовку необходимых компонентов для реализации.</p>

<h2>Почему LUWRAIN предлагается для&#160;образования, хотя разумнее обучать работе на&#160;тех системах, которыми пользуются все?</h2>

<p>Разумнее учить навыкам быстро приспосабливаться к&#160;любой системе, с&#160;которой необходимо работать.
Пользовательских интерфейсов сейчас уже&#160;много, в&#160;будущем будет ещё больше.
Когда ученик закончит школу и ВУЗ, программы, к&#160;которым он привык, с&#160;большой вероятностью изменятся.</p>

<h2>Могут&#160;ли пользователи создавать собственные скрипты для&#160;LUWRAIN?</h2>

<p>Да.
LUWRAIN имеет встроенный механизм расширений на&#160;основе языка JavaScript.
Подробно про&#160;это рассказано <a href="<?php echo luwrain_link('/doc/js/');?>">здесь</a>.</p>

<h2>В чём новизна LUWRAIN? Разве это не идеи, так или иначе известные ранее?</h2>

<p>LUWRAIN  объединяет в одном целостном решении три компонента:</p>

<ol>
<li>Кроссплатформенный интерфейс пользователя, изначально спроектированный невизуальным.</li>
<li>Интеграцию с сетевыми сервисами.</li>
<li>Инструменты расширения на основе скриптовых языков программирования и возможность машинного обучения.</li>
</ol>

<p>emacspeak/</p>
<?php }?>
<?php luwrain_end_page('/doc/faq/index.php');?>
