<?php include "../../functions.php"; luwrain_begin_page('/doc/difference/index.php', luwrain_current_lang() == 'ru'?'Чем LUWRAIN отличается от~других вспомогательных технологий?':'Why is LUWRAIN different than other accessible solutions?');?>
<?php if (luwrain_current_lang() == 'en') {?>
<h1>Why is LUWRAIN different than other accessibility solutions?</h1>

<p>See&#160;also:</p>

<ul>
<li><a href="<?php echo luwrain_link('/doc/user/manual/intro/');?>">Main concepts</a></li>
</ul>

<p>The&#160;major difference between LUWRAIN and other software which at&#160;first approach does the&#160;same things 
is that LUWRAIN <strong>is&#160;not a&#160;screen reading utility</strong>;
LUWRAIN is <strong>a&#160;platform</strong> for&#160;the&#160;creation of&#160;apps which aren't supposed to&#160;be&#160;controlled visually
(including the&#160;applications in&#160;the&#160;area of&#160;"Internet Of&#160;Things"),
although support of&#160;blind indeed is  one of&#160;the&#160;most important goals of&#160;our&#160;project.</p>

<p>The&#160;nature of&#160;a&#160;platform makes possible the&#160;creation and distribution of&#160;apps which were absent previously;
with&#160;LUWRAIN everybody can do this in&#160;a&#160;very cheap way.
For&#160;example, in&#160;education tasks  it&#160;is&#160;better to&#160;have a&#160;solution flexibly adjustable  for&#160;current and future requirements
than  to&#160;adjust the&#160;education process itself to&#160;permanently changing and very unstable screen reading software
without any&#160;guarantee that tomorrow you will&#160;not get new&#160;tasks incompatible with&#160;usual accessibility utilities.
With&#160;LUWRAIN, commercial companies can create and offer the&#160;clients for&#160;the&#160;access to&#160;their services which will be easily understandable by&#160;the&#160;blind ,
and LUWRAIN  takes care that&#160;these apps will be
not only understandable, but comfortable as&#160;well for&#160;the&#160;users.</p>

<p>becides that,  developing a&#160;platform we&#160;get a&#160;possibility to&#160;research
the&#160;better ways of&#160;the&#160;interaction without involving an&#160;eyesight  and the&#160;corresponding applications of&#160;a&#160;design.
We think of&#160;a&#160;design  as&#160;of&#160;ways  to&#160;get maximum  efficiency of&#160;interaction with&#160;PCs;
its roots  can be&#160;found in&#160;representation of&#160;information  in&#160;form highly adapted for&#160;the&#160;perception without an&#160;eyesight.</p>
<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
<h1>Чем LUWRAIN отличается от&#160;других вспомогательных технологий?</h1>

<p>См.&#160;также:</p>

<ul>
<li><a href="<?php echo luwrain_link('/doc/user/manual/intro/');?>">Ключевые особенности системы</a></li>
</ul>

<p>LUWRAIN&#160;&#x2014; это гибкая <strong>платформа</strong>,
которая предоставляет набор компонентов для&#160;построения невизуального  интерфейса
с&#160;возможностью их&#160;использования в&#160;программах на&#160;языках
<a href="https://ru.wikipedia.org/wiki/Java">Java</a>
и
<a href="https://ru.wikipedia.org/wiki/JavaScript">JavaScript</a>.
Другими словами, LUWRAIN&#160;&#x2014; это <strong>не программа экранного доступа</strong>.
Мы не&#160; занимаемся озвучиванием сторонних приложений,
хотя уделяем много внимания взаимодействию с&#160;сетевыми сервисами и адаптации материалов в&#160;различных форматах.</p>

<p>Построение приложений на&#160;нашей платформе открывает такие новые возможности:</p>

<ol>
<li><strong>Представление информации в&#160;виде, максимально адаптированном для&#160;восприятия людьми с&#160;нарушениями зррения:</strong>
наш интерфейс пользователя построен изначально невизуальным
и
позволяет существенно увеличить скорость работы
и предлагает новые возможности,
которые недоступны при&#160;использовании программ экранного доступа.</li>
<li><strong>Предельно лёгкая дистрибутивность:</strong>
LUWRAIN подготавливается к&#160;работе за&#160;считанные минуты, включает в&#160;себя все&#160;основные компоненты и предоставляет доступ  как к&#160;Microsoft Windows,
так и к&#160;GNU/Linux.</li>
<li><strong>Кроссплатформенность:</strong>
LUWRAIN на&#160;всех&#160;операционных системах реализует единые поведение
и единое восприятие для&#160;человека с&#160;нарушениями зрения.
Только при&#160;помощи LUWRAIN возможно подготовить универсальную инструкцию пользователя для&#160;взаимодействия с&#160;некоторым информационным ресурсом,
которая сохраняла&#160;бы свою корректность на&#160;различных платформах.</li>
</ol>

<p>Для&#160;развития удобного невизуального интерфейса
мы приглашаем к&#160;сотрудничеству всех&#160;специалистов
в&#160;областях когнитивной психологии, дефектологии и тифлопедагогики.
Гибкость нашего подхода даёт возможность исследовать вопросы невизуального дизайна.
Дизайн&#160;&#x2014; это прежде всего <strong>предельная функциональная эффективность</strong>,
и мы верим, что на&#160;сферу вспомогательных технологий это&#160;утверждение
распространяется как&#160;на&#160;любую другую область человеческой деятельности.</p>

<p>Говоря о&#160;утилитах экранного доступа, мы хотим заметить, что они раскрывают людям с&#160;нарушениями зрения
очень небольшую часть возможностей современных ИТ.
К&#160;примеру, незаслуженно мало внимания привлекают такие программные инструменты как
<a href="https://ru.wikipedia.org/wiki/TeX">TeX</a>
и
<a href="https://ru.wikipedia.org/wiki/LilyPond">Lilypond</a>.</p>
<?php }?>
<?php luwrain_end_page('/doc/difference/index.php');?>
