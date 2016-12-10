<?php include "../../functions.php"; luwrain_begin_page('/doc/faq/index.php', luwrain_current_lang() == 'ru'?'Часто задаваемые вопросы':'Frequently asked questions');?>
<?php if (luwrain_current_lang() == 'en') {?>
<h1>Frequently asked questions  =</h1>

<p>== Who can be a&#160;user of&#160;LUWRAIN? ==</p>

<p>We consider three groups of&#160;potential users:</p>

<ul>
<li><p>blind or visually-impaired people, 
who is&#160;still unable to&#160;work on&#160;PC's
(due&#160;to&#160;insufficient level of&#160;experience,
due&#160;to&#160;lack of&#160;understanding of&#160;GUI nature,
due&#160;to&#160;financial circumstances, etc),
including children born blind and seniors </p></li>
<li><p>experienced users with eyesight problems,
who is looking for&#160;a&#160;comfortable and speedy-efficient tool for&#160;a&#160;number 
of&#160;highly demanded tasks </p></li>
<li><p>software developers, who would like to&#160;create application well-recognizable by&#160;blind people
but don't have enough  experience in&#160;this area</p></li>
</ul>

<p>== Is LUWRAIN a&#160;competitor for&#160;screen readers? ==</p>

<p>No, LUWRAIN develops the&#160;idea of&#160;an&#160;audio desktop,
which is&#160;supposed to&#160;be an&#160;environment "in&#160;itself".
It&#160;is independent from&#160;the&#160;most of&#160;screen readers.
We sure that blind people get the&#160;highest level  of&#160;freedom and independence 
only in&#160;case of&#160;equal development and availability of&#160;these both approaches
(screen readers and audio desktops. are developed and available equally).
Screen readers {guarantee} the&#160;accessibility of&#160;any&#160;arbitrary functionality in&#160;{any} form which&#160;is possible;
meantime, environments "in&#160;itself" take care that some number of&#160;everyday tasks 
are&#160;accessible in&#160;{most suitable} for&#160;the&#160;perception of&#160;blind people form.</p>

<p>== Should LUWRAIN users refuse the&#160;accessibility technologies they used&#160;to work with previously? ==</p>

<p>No, because LUWRAIN can be installed as&#160;an&#160;application on&#160;the&#160;operating system the&#160;user already has.
It doesn't cause any problems with having screen readers installed simultaneously.
No&#160;problems to&#160;switch to&#160;LUWRAIN only for&#160;tasks the&#160;user wants,
continuing to&#160;use screen readers   for&#160;other purposes.
In&#160;addition, the&#160;already installed operating system could be needed by&#160;colleagues or other members of&#160;a&#160;family
if they share the&#160;same machine with disabled person.</p>

<p>== Why the&#160;LUWRAIN UI is more&#160;suitable for&#160;blind users? ==</p>

<p>People without the&#160;problems of&#160;eyesight use graphical user interface (GUI).
Usually it is Microsoft Windows, Apple Moc&#160;OS&#160;X or different desktops for&#160;GNU/Linux.
The&#160;GUI developers initially have designed their technology 
to&#160;get highest efficiency with&#160;the&#160;mouse as&#160;a&#160;main method of&#160;control.
Meantime, the&#160;mouse is&#160;inaccessible for&#160;handicapped people and that  restricts their speed of&#160;work and level of&#160;comfort.
LUWRAIN brings working objects to&#160;users
in&#160;a&#160;way that is&#160;adjusted to&#160;the&#160;perception of&#160;blind people  as&#160;best as&#160;possible.
We have spent a&#160;lot of&#160;time to&#160;get necessary experience and understanding how to&#160;do&#160;that.
You can read more about exact differences of&#160;LUWRAIN on&#160;[local:/doc/difference/ the&#160;corresponding page] of&#160;this website.</p>

<p>== May I create my own application for&#160;LUWRAIN? ==</p>

<p>Of&#160;cource, and we highly encourage everybody to&#160;create any third party applications for&#160;LUWRAIN.
Any&#160;new functionality can be&#160;easily implemented on&#160;Java.
You can read more about this on&#160;[local:/doc/ext/ the&#160;corresponding page].</p>

<p>== Is monitor empty during the&#160;work  in&#160;LUWRAIN? ==</p>

<p>No, we use the&#160;screen as an&#160;additional method to&#160;bring information for&#160;users with&#160;low&#160;vision.
It&#160;plays a&#160;supplementary role but remains very important.</p>

<p>== What kind of&#160;PC is the&#160;most suitable for&#160;LUWRAIN? ==</p>

<p>We are trying to&#160;support using LUWRAIN both on&#160;mobile and desktop PC's.
For&#160;mobile computers, it&#160;is better to&#160;use LUWRAIN as&#160;a&#160;stand-alone OS 
because it&#160;tries to&#160;use all&#160;possible ways of&#160;control, including touchpad,
and this makes a&#160;laptop a&#160;elegant accessory for&#160;blind people.
On&#160;desktop computers, more likely, you would prefer LUWRAIN as&#160;an&#160;application,
although installation as&#160;an&#160;stand-alone operating system remains still possible. </p>

<p>== What is the&#160;current state of&#160;LUWRAIN development process? ==</p>

<p>As&#160;for&#160;today, we continue work on&#160;our beta versions.
Current plan implies completing first stable version 1.0.0 until &#160;the&#160;end of&#160;2015.</p>

<p>== Should LUWRAIN users pay anything for&#160;Luwrain? ==</p>

<p>No,
LUWRAIN is fully Open Source with&#160;GPL&#160;v.3 license.
All&#160;materials are freely accessible publicly
and everybody is&#160;welcomed to&#160;use them or share with&#160;other community members.</p>

<p>== Can I create my custom LUWRAIN build? ==</p>

<p>Yes,
 but if you would like to&#160;make any substantial modifications
we&#160;will kindly ask you to&#160;take any another name for&#160;your version to&#160;prevent confusing. 
Please take a&#160;look at&#160;our&#160;page with&#160;[local:/doc/legal/ legal notes].</p>

<p>== How do the&#160;web-browser function in&#160;LUWRAIN? ==</p>

<p>We are about to&#160;use [[https://docs.oracle.com/javafx/2/api/javafx/scene/web/WebEngine.html javafx.scene.web.WebEngine]] component
as it&#160;supports Java&#160;Script and allows access to&#160;the&#160;DOM structure of&#160;the&#160;site being observed.
In&#160;addition, LUWRAIN as&#160;a&#160;stand-alone OS  should get&#160;AT-SPI-based support of&#160;Mozilla Firefox
but JavaFX-based approach is&#160;more preferable.</p>

<p>== Is it impossible to&#160;launch external application in&#160;LUWRAIN as&#160;a&#160;stand-alone OS? ==</p>

<p>We work on&#160;the&#160;special component called GuideCraft which  is&#160;purposed to&#160;be a&#160;lightweight 
screen reader based on&#160;AT-SPI.
Roughly speaking, it must replace Orca for&#160;the&#160;environment without GNOME.
This component is very important because 
it allows to&#160;run Skype and Firefox used by many people.
This component slightly goes out of&#160;our conception of&#160;text interface 
but we think that there wouldn't be any losses if we would do this step.
Besides that, all command line utilities remain fully available 
with the&#160;terminal embedded in&#160;LUWRAIN.</p>

<p>== I heard  that publishing systems TeX and Lilypond are very useful for&#160;blind people, what about them? ==</p>

<p>Nobody should worry about any applications available in&#160;Linux repositories
because LUWRAIN remains a&#160;usual Gnu/Linux distro.
You may install any software you would like, including Latex and Lilypond.
Latex, Metapost, Lilypond and Gnuplot are really very useful for&#160;blind people ,
so we will take care of&#160;them.</p>

<p>== Are blind people able to&#160;install LUWRAIN on&#160;hard drive without any external sighted assistance? ==</p>

<p>Yes, we have prepared an&#160;installation utility ,
which clones LiveCD environment to&#160;hard drive.
This approach is rather simple, very effective 
and, what is the&#160;most important, accessible for&#160;blind users.</p>

<p>== May I participate in&#160;LUWRAIN project and contribute to&#160;it? ==</p>

<p>Of&#160;course, we are a&#160;completely open project and everybody is&#160;welcomed to&#160;participate 
in&#160;our community and contribute to&#160;our sources.
Take a&#160;look at&#160;our&#160;[local:/download/git/ Git repositories]
to&#160;learn more about our&#160;sources organization.</p>
<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
<h1>Часто задаваемые вопросы</h1>

<h2>Почему LUWRAIN предлагается для образования, хотя разумнее учить тем системам, которыми пользуются все?</h2>

<p>Разумнее учить навыкам быстро приспосабливаться к&#160;любой системе, с&#160;которой появилась необходимость начать работать.
Пользовательских интерфейсов много уже сейчас, в&#160;будущем будет ещё больше. 
LUWRAIN позволяет решать некоторые задачи проще и эффективнее, в&#160;том числе и в&#160;сфере образования.</p>

<h2>Как работает браузер в&#160;LUWRAIN?</h2>

<p>Мы используем компонент (javafx.scene.web.WebEngine)[https://docs.oracle.com/javafx/2/api/javafx/scene/web/WebEngine.html] из&#160;состава JavaFX,
поскольку он поддерживает Java&#160;Script и предоставляет доступ к&#160;структуре DOM  загруженной страницы.
Этот компонент основан на&#160;движке (WebKit)[https://ru.wikipedia.org/wiki/WebKit],
который является базой некоторых распространённых браузеров, например, (Google Chrome)[https://ru.wikipedia.org/wiki/Google_Chrome].
Включение этого движка в&#160;стандартную поставку JRE &#x2014; большая удача!</p>

<h2>Может&#160;ли LUWRAIN быть запущен на&#160;устройствах с&#160;сенсорным экраном?</h2>

<p>Мы работаем над&#160;этим. 
Прямо сейчас нет.</p>

<h2>Подходит&#160;ли LUWRAIN для&#160;слепоглухих пользователей?</h2>

<p>Мы уделяем большое внимание поддержки брайля в&#160;нашей системе. 
Это позволяет слепоглухим пользователям получить доступ к&#160;LUWRAIN.
Простота нашего интерфейса как нельзя лучше подходит для&#160;особенностей восприятия слепоглухих пользователей.</p>

<h2>Должны&#160;ли пользователи что-либо платить за&#160;LUWRAIN?</h2>

<p>Нет, LUWRAIN &#x2014; это свободное ПО.
Все материалы и результаты проекта находятся в&#160;открытом доступе и распространяются бесплатно.</p>

<h2>Могу&#160;ли я сделать собственную версию LUWRAIN?</h2>

<p>Да, но если отличия от&#160;нашей официальной версии достаточно существенные,
мы попросим вас  для&#160;вашей сборки  выбрать другое название.
Вы можете найти более подробную информацию о&#160;правовом статусе на&#160;(этой странице)[local:/doc/legal/].
Товарный знак "LUWRAIN" подан на&#160;регистрацию на&#160;территории Российской Федерации,
и мы можем выполнять преследование лиц, недобросовестно его&#160;использующих, в&#160;том числе в&#160;судебном порядке.
Помимо этого, опубликованные исходные тексты не&#160;включают в&#160;себя ключи регистрации приложений в&#160;некоторых сервисах,
таких&#160;как Twitter и Telegram. 
При&#160;самостоятельной компиляции этих текстов вы должны зарегистрировать собственные приложения в&#160;нужных сервисах и получить ваши собственные ключи.</p>

<h2>Возможно&#160;ли включение в&#160;состав LUWRAIN закрытых компонентов?</h2>

<p>Нет, но мы можем опубликовах их на&#160;нашем сайте как закрытые расширения для&#160;удобства пользователей,
если правообладатель позволит это&#160;сделать.</p>

<h2>Я слышал, что для&#160;незрячих людей могут быть очень полезны издательские  системы TeX и Lilypond, что с&#160;ними?</h2>

<p>LUWRAIN в&#160;виде самостоятельной операционной системы продолжает оставаться 
обычным дистрибутивом GNU/Linux.
Это означает, что из&#160;доступных репозиториев можно установить любой пакет или приложение,
которое окажется полезным, включая TeX и Lilypond.
Это по-настоящему мощные пакеты, которые открывают незрячим людям множество возможностей в&#160;плане подготовки печатных материалов,
а&#160;также презентации для&#160;публичных выступлений.
Мы активно поддерживаем их&#160;использование.  </p>

<h2>Могут&#160;ли незрячие люди установить LUWRAIN на&#160;жёсткий диск самостоятельно?</h2>

<p>Да, у&#160;нас есть доступная программа установки,
но необходимо помнить, что выбор загрузочного устройства в&#160;настройках BIOS обычно невозможен без&#160;помощи зрячего человека. </p>

<h2>Могу&#160;ли я присоединиться к&#160;проекту и внести свой вклад?</h2>

<p>Конечно, LUWRAIN &#x2014; это открытый проект, и все желающие могут к&#160;нему присоединиться.
Мы активно поддерживаем создание [local:/community/ сообщества] вокруг нашего проекта.</p>
<?php }?>
<?php luwrain_end_page('/doc/faq/index.php');?>
