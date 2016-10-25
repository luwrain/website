<?php include "../../functions.php"; luwrain_begin_page('/doc/difference/index.php', luwrain_current_lang() == 'ru'?'Чем LUWRAIN отличается от~других вспомогательных технологий?':'Why is LUWRAIN different than other accessible solutions?');?>
<?php if (luwrain_current_lang() == 'en') {?>
<h1>Why is LUWRAIN different than other accessible solutions?</h1>

<p>We consider three projects as&#160;something close to&#160;the&#160;things 
we are creating. 
They are 
[[http://emacspeak.sourceforge.net/ Emacspeak]],
[[http://www.knopper.net/knoppix-adriane/index-en.html Adriane]] and
[[http://www.yourdolphin.com/productdetail.asp?id=30 Dolphin Guide]].
LUWRAIN has noticeable differences with all&#160;of&#160;them
and let take a&#160;closer look what these difference are.</p>

<h2>Emacspeak</h2>

<p>Emacspeak can be fairly taken as&#160;an&#160;origin of&#160;our inspiration.
A&#160;lot of&#160;ideas came exactly from&#160;Emacspeak 
but significant number of&#160;its disadvantages don't allow to use it as&#160;a&#160;main-stream platform for&#160;blind people
(we&#160;think that Emacspeak's authors didn't plan it to&#160;be anything like this). 
There&#160;is&#160;a&#160;list of&#160;main points why Emacspeak doesn't suit:</p>

<ul>
<li>Emacspeak doesn't have a&#160;proper entity of&#160;application
and we may not use it as&#160;a&#160;platform for&#160;creating and distributing of&#160;accessible applications</li>
<li>Emacspeak doesn't have any i18n support</li>
<li>GNU&#160;Emacs basically  is a&#160;text editor 
and it isn't a&#160;platform which constructed for&#160;blind people completely </li>
<li>Emacspeak doesn't have enough protection agains improper user actions</li>
<li>Although GNU&#160;Emacs itself is a&#160;cross-platform software,
Emacspeak purposed typically for&#160;launch on&#160;GNU/Linux</li>
</ul>

<h2>Adriane</h2>

<p>Adriane is a&#160;very interesting experience but has some substantial disadvantages as&#160;well:</p>

<ul>
<li>Adriane is&#160;a&#160;GNU/Linux distro 
but we need an&#160;environment capable of&#160;running on&#160;systems different than GNU/Linux</li>
<li>Adriane may not be used as&#160;a&#160;platform for&#160;creating and distributing accessible applications 
because doesn't have any API for&#160;it</li>
<li>We don't know how to&#160;enhance Adriane and how to&#160;add a&#160;proper i18n support to it</li>
</ul>

<h2>Dolphin Guide</h2>

<p>The&#160;main problem with&#160;Dolphin Guide is that it is a&#160;proprietary software. 
It is proprietary itself and can be launch only on&#160;Microsoft Windows, which is proprietary as&#160;well. 
Some of&#160;the&#160;disadvantages mentioned for&#160;Emacspeak and for&#160;Adriane are actual for&#160;Dolphin&#160;Guide too 
but we don't list them once again because the&#160;main reason 
 of&#160;rejecting Dolphin Guide is its legal status.</p>

<h2>Other approaches</h2>

<p>The&#160;most popular solution to&#160;the&#160;problem of&#160;accessible work on&#160;PC remains 
using of&#160;screen reading software in&#160;GUI.
Since difference with  this approach is widely analyzed on&#160;other pages of&#160;this website, 
let skip it here and notice one more important thing. </p>

<p>As we&#160;think, there is no&#160;any solution in&#160;the&#160;world which can be used 
for&#160;creating a&#160;fully functional device for&#160;blind people.
We are speaking not about creating a&#160;new device from&#160;scratch,
what evidently is very expensive,
 but about a&#160;way for&#160;turning existing laptops and embedded PC's into elegant and reliable accessory for&#160;blind people.</p>

<p>We need a&#160;completely new way of&#160;interaction and a&#160;completely new way for&#160;offering  the&#160;information to&#160;the&#160;user.
The&#160;former thing is&#160;needed because we should have a&#160;method for&#160;using touch pads 
and LUWRAIN is quite suitable for&#160;adding a&#160;support of&#160;interaction with touch pads .
The&#160;second thing  is needed because all laptops have a&#160;screen and  it should be used for&#160;people with low vision.
LUWRAIN potentially has all of&#160;this  and keeping the&#160;developing of&#160;this ideas we 
could be able to&#160;adjust a&#160;lot&#160;of hardware for&#160;using by&#160;blind people, including tablets. 
According to&#160;our experience, none of&#160;the existing solutions can be suitable to this. </p>
<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
<h1>Чем LUWRAIN отличается от&#160;других вспомогательных технологий?</h1>

<p>По&#160;сравнению с&#160;наиболее распространённой технологией на&#160;основе экранных чтецов LUWRAIN обладает рядом&#160;преимуществ.
Рассмотрим их, хотя мы всегда обращаем внимание, что LUWRAIN и экранные чтецы не&#160;являются конкурентами &#x2014;
круг решаемых задачь различается значительно.</p>

<ol>
<li><strong>LUWRAIN предлагает специализированные приложения, охватывающие потребности  незрячих людей.</strong> 
Круг задач незрячего человека отличается от&#160;круга задач зрячего.
В&#160;обычных ОС нет&#160;приложений, например, для&#160;комфортного чтения электронных книг, 
что очень важно в&#160;техническом оснащении образовательного процесса.
LUWRAIN имеет такой функционал, включая поддержку специализированных форматов, например, Daisy.</li>
<li><strong>LUWRAIN единственная в&#160;мире платформа для&#160;разработки приложений, адаптированных для&#160;восприятия незрячих людей.</strong>
Используя LUWRAIN компании и организации могут обеспечить доступ к&#160;своим сервисам людям с&#160;нарушениями зрения,
не&#160;имея дополнительного опыта в&#160;сфере вспомогательных технологий.
Приложения экранного доступа такого обеспечить не&#160;могут.</li>
<li><strong>LUWRAIN лучше подходит для&#160;особенности работы слепоглухих людей.</strong>
Слепоглухие люди работают только со&#160;строкой брайля, не&#160;получая никакой иной информации.
В&#160;таких условиях навигация и ориентирование внутри графического оконного интерфейса (GUI) 
требует существенно более длительной подготовки и более долгого обучения.
LUWRAIN предоставляет функциональность только в&#160;текстовом виде, 
что значительно упрощает работу слепоглухого человека.</li>
<li><strong>LUWRAIN гарантирует единообразное поведение системы, облегчает доставку приложений и их&#160;переносимость.</strong>
Наша система не&#160;использует стандартных функций вспомогательных технологий ОС, на&#160;которых она&#160;запускается,
таким образом, поведение будет одинаковым как на&#160;Microsoft Windows, так и на &#160;GNU/Linux (хотя могут отличаться комбинации горячих клавиш).
Компания, предоставившая доступ к&#160;своему сервису на&#160;базе LUWRAIN,
получает возможность подготовить единую документацию и инструкции для&#160;отдела технической поддержки
с&#160;указаниями, как будет осуществляться доступ к&#160;сервису для&#160;незрячих людей. 
С&#160;точки зрения переносимости вспомогательных технологий LUWRAIN является единственным в&#160;мире решением, предоставляющим подобную возможность.
Причём в&#160;случае дистрибутива на&#160;основе GNU/Linux оно состоит только из&#160;свободных компонентов (СПО).
Технологии Java, такие&#160;как <a href="https://ru.wikipedia.org/wiki/Java_Web_Start">Java Web Start</a> позволяют сделать доставку  приложений и их&#160;поддержку в&#160;актуальном состоянии предельно простой и дешёвой.</li>
<li><strong>LUWRAIN предоставляет широкие возможности кастомизации.</strong>
Наша технологическая платформа позволяет выпускать версии, модифицированные под&#160;конкретные нужды различных пользователей.
В&#160;том числе и в&#160;виде загрузочных ISO-образов.
Скажем, руководство образовательного учреждения способно выпустить версию системы, записанную на&#160;флэш-накопители,
в&#160;которую включено всё&#160;необходимое для&#160;некоторой группы учащихся.
При&#160;этом напоминаем, что установку LUWRAIN с&#160;загрузочного ISO-образа незрячий человек способен выполнить самостоятельно без&#160;помощи зрячих помощников. 
Команда наших разработчиков публикует все необходимые для&#160;этого материалы, 
но готова выполнить подобную кастомизацию и самостоятельно в&#160;рамках наших платных услуг.</li>
</ol>

<p><strong>Но самая главная особенность LUWRAIN &#x2014; высокая скорость работы и простота!</strong> 
Действительно, мы начинали нашу разработку прежде всего с&#160;намерением предельно упростить использование ПК,
максимально задействуя современные технологии. 
Только уже в&#160;ходе исследований нам стало ясно, что найденное сочетание решений обеспечивает множество организационных преимуществ, описанных выше.</p>

<h2>Другие текстовые окружения</h2>

<p>В&#160;мире известно три&#160;других проекта, 
которые развивают направление невизуальной работы на&#160;ПК с&#160;исключением понятий графического пользовательского интерфейса (GUI).
К&#160;ним относятся:</p>

<ol>
<li><a href="http://www.yourdolphin.com/productdetail.asp?id=30">Dolphin Guide.</a> 
Dolphin Guide делает работу на&#160;компьютере существенно проще,
но по&#160;существу является только оболочкой поверх всё того&#160;же графического пользовательского интерфейса (GUI).
Никаких возможностей переносимости, кастомизации или для&#160;разработки адаптированных приложений он не&#160;предлагает.</li>
<li><a href="http://emacspeak.sourceforge.net">Emacspeak.</a>
Это одно из&#160;самых интересных решений, у&#160;которого LUWRAIN унаследовал очень много полезных идей,
но оно удобно только для&#160;опытных пользователей, занимающихся преимущественно задачами разработки ПО.
Emacspeak очень трудно перенести на&#160;Microsoft Windows,
и он не&#160;предлагает никаких дополнительных специализированных приложений.
Помимо этого Emacspeak не&#160;предлагает полноценного веб-браузер  с&#160;поддержкой JavaScript.</li>
<li><a href="http://www.knopper.net/knoppix-adriane/index-en.html">Adriane</a>.
Эта&#160;система очень близка по&#160;замыслу, но&#160;в&#160;последнее время практически не&#160;развивается.
Она использует самые простые средства GNU/Linux,
что существенно ограничивает масштабирование решений на&#160;её&#160;основе.</li>
</ol>
<?php }?>
<?php luwrain_end_page('/doc/difference/index.php');?>
