<?php include "../../functions.php"; luwrain_begin_page('/doc/faq/index.php', luwrain_current_lang() == 'ru'?'Часто задаваемые вопросы':'Frequently asked questions');?>
<?php if (luwrain_current_lang() == 'en') {?>
<h1>Frequently asked questions</h1>

<p>See&#160;also:</p>

<ul>
<li><a href="<?php echo luwrain_link('/doc/difference/');?>">Why is&#160;LUWRAIN different than other accessible solutions?</a></li>
<li><a href="<?php echo luwrain_link('/doc/legal/');?>">Legal notes</a></li>
<li><a href="<?php echo luwrain_link('/doc/authors/');?>">Who we are?</a></li>
</ul>

<h2>Why do you do&#160;all of&#160;this while there are so many screen reading software?</h2>

<p>The&#160;solutions based on&#160;popular screen reading utilities  indeed are  very old  and deeply researched,
meantime, the&#160;fraction of&#160;the&#160;blind who feel themselves  absolutely confident with&#160;information technologies   isn't very high.
In&#160;Russia this&#160; &#160;group has around 1% of&#160;the&#160;blind people of&#160;the&#160;country,
whereas   the&#160;group of&#160;people who use the&#160;Internet  constantly is&#160;estimated  as&#160;70%.
We develop the&#160;technology which is&#160;supposed to&#160;be more  comfortable and more&#160;understandable than the&#160;screen readers,
which will remain available  regardless what we&#160;do.</p>

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
WebKit goes as&#160;an&#160;engine for&#160;some popular browsers, for&#160;example for&#160;<a href="https://en.wikipedia.org/wiki/Google_Chrome">Google Chrome</a>.
We&#160;are very lucky that this component is now a&#160;part  of&#160;JavaFX.</p>

<h2>What do&#160;you take into account on&#160;decisions what services will be&#160;included in&#160;LUWRAIN?</h2>

<p>First of&#160;all, we take the&#160;services with good  libraries on&#160;Java for&#160;access to&#160;them.
Some of&#160;the&#160;services  are highly demanded,
so we can start  implementing  access to&#160;them even if there is no&#160;suitable library on&#160;Java.
In&#160;this&#160;case it&#160;would be very fortunate, if we can get a&#160;contact with the&#160;authors of&#160;~the&#160;service.</p>

<h2>Must LUWRAIN users pay anything forr&#160;LUWRAIN?</h2>

<p>NNo, the&#160;basic LUWRAIN distribution is&#160;Open Source
and we promise that the&#160;distribution covering basic everyday tasks  will remain free.
meantime, there can be&#160;some  proprietary components,
if they are purposed for&#160;solving some specific tasks or are&#160;created for&#160;commercial companies.</p>

<h2>Can the&#160;blind install LUWRAIN on&#160;their hard&#160;drive without sighted help?</h2>

<p>Yes, LUWRAIN has an&#160;accessible installation utility,
but it's necessary to&#160;keep in&#160;mind that the&#160;selection of&#160;the&#160;bootable media is&#160;usually inaccessible  .</p>
<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
<h1>Часто задаваемые вопросы</h1>

<p>См.&#160;также:</p>

<ul>
<li><a href="<?php echo luwrain_link('/doc/difference/');?>">Чем LUWRAIN отличается от&#160;других вспомогательных технологий?</a></li>
<li><a href="<?php echo luwrain_link('/doc/legal/');?>">Правовой статус</a></li>
<li><a href="<?php echo luwrain_link('/doc/authors/');?>">Авторы проекта</a></li>
</ul>

<h2>Существует&#160;же проверенный подход к&#160;решению задач доступности на&#160;основе экранных чтецов, зачем ещё что-то ещё?</h2>

<p>Подход на&#160;основе экранных чтецов, действительно, старый и проверенный,
но, несмотря на&#160;всё, доля людей с&#160;нарушениями зрения, активно использующих ПК, остаётся очень невысокой.
В&#160;России эта&#160;оценка колеблется в&#160;районе 1%,
хотя оценка доли пользователей интернета приближается к&#160;70%.
Мы развиваем технологию, которая будет намного понятней, удобней и быстрей в&#160;работе,
чем утилиты экранного доступа,
которые и так никто не&#160;отберёт.</p>

<h2>Почему LUWRAIN предлагается для образования, хотя разумнее обучать работе на&#160;тех системах, которыми пользуются все?</h2>

<p>Разумнее учить навыкам быстро приспосабливаться к&#160;любой системе, с&#160;которой появилась необходимость начать работать.
Пользовательских интерфейсов много уже сейчас, в&#160;будущем будет ещё больше.
Когда ученик закончит школу и ВУЗ, с&#160;большой вероятностью версия Microsoft Windows,
на&#160;которой его учили работать на&#160;ПК, уже всё&#160;равно устареет.</p>

<h2>Как работает браузер в&#160;LUWRAIN?</h2>

<p>Мы используем компонент <a href="https://docs.oracle.com/javafx/2/api/javafx/scene/web/WebEngine.html">javafx.scene.web.WebEngine</a> из&#160;состава JavaFX,
поскольку он поддерживает JavaScript и предоставляет доступ к&#160;структуре DOM  загруженной страницы.
Этот компонент основан на&#160;движке <a href="https://ru.wikipedia.org/wiki/WebKit">WebKit</a>,
который является базой некоторых распространённых браузеров, например, <a href="https://ru.wikipedia.org/wiki/Google_Chrome">Google Chrome</a>.
Включение этого движка в&#160;стандартную поставку JRE &#x2014; большая удача!</p>

<h2>На&#160;основе каких критериев вы выбираете сервисы для&#160;поддержки в&#160;LUWRAIN?</h2>

<p>В&#160;первую очередь мы добавляем поддержку тех&#160;сервисов, для&#160;которых существуют клиентские библиотеки на&#160;Java.
Некоторые сервисы являются критически значимыми, и даже если готовой библиотеки нет, 
мы предпринимаем попытку установить контакт с&#160;авторами, чтобы найти решение.</p>

<h2>Должны&#160;ли пользователи что-либо платить за&#160;LUWRAIN?</h2>

<p>Нет, базовая поставка LUWRAIN&#160;&#x2014; это свободное ПО.
Мы обещаем, что дистрибутив, обеспечивающий решение основных задач пользователей с&#160;нарушениями зрения, будет оставаться таковым.
Но среди наших продуктов могут быть и закрытые компоненты,
если это специализированные решения или решения для&#160;коммерческих компаний.</p>

<h2>Могут&#160;ли незрячие люди установить LUWRAIN на&#160;жёсткий диск самостоятельно?</h2>

<p>Да, у&#160;нас есть доступная программа установки,
но необходимо помнить, что выбор загрузочного устройства в&#160;настройках BIOS обычно невозможен без&#160;помощи зрячего человека. </p>
<?php }?>
<?php luwrain_end_page('/doc/faq/index.php');?>
