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
With&#160;LUWRAIN, commercial companies can create and offer the&#160;clients for&#160;the&#160;access to&#160;their services which will be easily understandable by&#160;the&#160;blind,
and LUWRAIN  takes care that&#160;these apps will be
not only understandable, but comfortable as&#160;well for&#160;the&#160;users.</p>

<p>becides that,  developing a&#160;platform we&#160;get a&#160;possibility to&#160;research
the&#160;better ways of&#160;the&#160;interaction without involving an&#160;eyesight  and the&#160;corresponding applications of&#160;a&#160;design.
We think of&#160;a&#160;design  as&#160;of&#160;ways  to&#160;get maximum  efficiency of&#160;interaction with&#160;PCs;
its roots  can be&#160;found in&#160;representation of&#160;information  in&#160;form highly adapted for&#160;the&#160;perception without an&#160;eyesight.</p>
<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
<h1>Чем LUWRAIN отличается от&#160;других вспомогательных технологий?</h1>

<p>LUWRAIN&#160;&#x2014; это гибкая <strong>платформа</strong> для&#160;разработки невизуальных приложений,
только на&#160;первый взгляд похожая по&#160;своим функциям на&#160;утилиту экранного доступа.
С&#160;точки зрения пользовательского восприятия LUWRAIN намного удобнее и универсальней утилит экранного доступа
(про&#160;это подробно рассказано <a href="<?php echo luwrain_link('/doc/about/');?>">здесь</a>).
Ниже мы остановимся на&#160;некоторых отличиях,
на&#160;которые особенно хотели&#160;бы обратить внимание.</p>

<ol>
<li><strong>Безопасность.</strong>
LUWRAIN не&#160;требует для&#160;своей работы повышенных системных привилегий,
поэтому не&#160;повышает уязвимость системы.
С тем, как злоумышленники могут использовать утилиты экранного доступа для&#160;взлома компьютеров пользователей, <a href="https://www.cnews.ru/news/top/2019-09-27_tainstvennye_zloumyshlenniki_1">можно ознакомиться в&#160;материале CNEWS</a>.</li>
<li><strong>Легальный правовой статус.</strong>
LUWRAIN способен предложить доступ к&#160;персональному компьютеру для&#160;людей с&#160;нарушениями зрения  без&#160;каких-либо расходов на&#160;оплату программного обеспечения.
К&#160;сожалению, мы не&#160;можем принять во&#160;внимание какие-либо преимущества  утилит экранного доступа
без&#160;учёта их&#160;стоимости для&#160;потребителей.
Даже бесплатные их&#160;варианты не&#160;предоставляют каких-либо полезных функций без&#160;необходимости покупки лицензии на&#160;использование операционной системы или комплекта офисных приложений.
Про&#160;вопросы легальности говорить не&#160;принято,
большинство материалов по&#160;вспомогательным технологиям обходят эту&#160;тему стороной,
хотя её&#160;игнорирование ещё больше десоциализирует людей с&#160;нарушениями зрения и переводит их в&#160;полулегальную сферу экономики.</li>
<li><strong>Кроссплатформенность.</strong>
LUWRAIN предлагает единый уровень доступа к&#160;нескольким операционным системам.
Мы активно поддерживаем работу в&#160;Microsoft Windows и в&#160;GNU/Linux,
хотя LUWRAIN может быть перенесён на&#160;любую платформу, где запускается виртуальная машина Java.
GNU/Linux может быть намного эффективнее Microsoft Windows, например,
в&#160;задачах разработки ПО или при&#160;использовании малогабаритных ноутбуков.</li>
<li><strong>Специализированный функционал.</strong>
Невизуальная работа на ПК требует наличия ряда специализированных приложений, необходимых в&#160;работе людей с&#160;нарушениями зрения.
Наиболее остро такая необходимость наблюдается в&#160;инструментах для&#160;чтения литературы.
Существующие приложения нередко всё&#160;равно реализуют концепцию самоозвученных интерфейсов,
среди них, например, Max-Reader или  <a href="https://daisy.org/info-help/document-archive/archived-projects/amis/download-and-installation/">AMIS</a> (плеер изданий в&#160;формате Daisy).
LUWRAIN может быть универсальным инструментом, упрощающим  создание подобных приложений,
сразу делая их&#160;кроссплатформенными и интегрированными в&#160;сетевые сервисы.
Другая проблема, которая нам кажется очень острой,&#160;&#x2014; наличие удобных и кроссплатформенных невизуальных редакторов
для&#160;работы с&#160;<a href="https://ru.wikipedia.org/wiki/TeX">TeX</a>
и&#160;<a href="https://ru.wikipedia.org/wiki/LilyPond">Lilypond</a>.</li>
<li><strong>Доступ к&#160;сервисам в&#160;Интернете.</strong>
Интернет всё&#160;больше развивается в&#160;направлении предоставления доступа к&#160;сетевым сервисам в&#160;безбраузерном режиме посредством создания открытых API
(хотя сохраняющуюся острую необходимость наличия качественного браузера никто не&#160;отрицает).
Наиболее наглядным примером этого движения может служить ожидание массового открытия API банками и другими кредитными организациями
(о&#160;чём писал, к&#160;примеру, <a href="https://www.kommersant.ru/doc/4060395">Коммерсантъ</a>
и
<a href="http://www.tadviser.ru/index.php/%D0%A1%D1%82%D0%B0%D1%82%D1%8C%D1%8F:%D0%92_%D0%B1%D0%B0%D0%BD%D0%BA%D0%BE%D0%B2%D1%81%D0%BA%D0%BE%D0%BC_%D1%81%D0%B5%D0%BA%D1%82%D0%BE%D1%80%D0%B5_%D0%A0%D0%BE%D1%81%D1%81%D0%B8%D0%B8_%D0%BD%D0%B0%D1%87%D0%B8%D0%BD%D0%B0%D0%B5%D1%82%D1%81%D1%8F_API-%D1%82%D1%80%D0%B0%D0%BD%D1%81%D1%84%D0%BE%D1%80%D0%BC%D0%B0%D1%86%D0%B8%D1%8F">Тадвайзер</a>).
Обратите внимание, что в&#160;случае операций с&#160;банками вопрос обеспечения безопасности,
который мы уже рассматривали,
становится одним из&#160;ключевых.
Инструментов, кроме LUWRAIN, для&#160;создания кроссплатформенных невизуальных клиентов  для&#160;использования открытых API не&#160;существует. </li>
</ol>

<p>Первые три&#160;аргумента, возможно, у&#160;многих людей вызовут улыбку,
потому что правовые вопросы использования программного обеспечения,
интерес к&#160;GNU/Linux и, в&#160;особенности,  собственная цифровая безопасность, действительно,
чаще всего находятся за&#160;пределами постоянного пристального внимания.
Тем не&#160;менее, они в&#160;сумме вносят существенный вклад в&#160;облик современного человека с&#160;нарушениями зрения,
делая его неизбежно уязвимым и вынужденным всегда находиться в&#160;"серой" зоне экономики.</p>
<?php }?>
<?php luwrain_end_page('/doc/difference/index.php');?>
