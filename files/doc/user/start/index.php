<?php include "../../../functions.php"; luwrain_begin_page('/doc/user/start/index.php', luwrain_current_lang() == 'ru'?'С чего начать?':'Getting started');?>
<?php if (luwrain_current_lang() == 'en') {?>
<h1>Getting started</h1>

<p>LUWRAIN is a&#160;very complicated product.
Depending on&#160;your tasks,
it&#160;can be&#160;useful for&#160;you in&#160;various ways.
Usually we consider three groups of&#160;our&#160;consumers,
providing  different starting materials to&#160;each of&#160;them.
Choose the&#160;category  which suits your&#160;requirements the&#160;most:</p>

<ol>
<li><a href="<?php echo luwrain_link('personal/');?>"><strong>LUWRAIN for&#160;personal using:</strong>
if you need LUWRAIN just to&#160;install as&#160;Linux-based an&#160;operating system   or&#160;as&#160;an&#160;application for&#160;your personal work,
please choose this&#160;option.</a></li>
<li><a href="<?php echo luwrain_link('organizations/');?>"><strong>LUWRAIN for&#160;organizations:</strong>
if you are a&#160;commercial company or&#160;an&#160;organization of&#160;any&#160;kind  and
you need to&#160;prepare a&#160;place for&#160;work or education  of&#160;the&#160;blind,
please choose this option.</a></li>
<li><a href="<?php echo luwrain_link('developers/');?>"><strong>LUWRAIN for&#160;developers of&#160;application:</strong>
if you  would like to&#160;create your own application suitable for&#160;running with&#160;LUWRAIN,
please choose this option.</a></li>
</ol>

<p>See&#160;also:</p>

<ul>
<li><a href="<?php echo luwrain_link('/download/');?>">Our downloads</a></li>
<li><a href="<?php echo luwrain_link('/community/mailing-lists/');?>">Our mailing lists</a></li>
</ul>
<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
<h1>Добро пожаловать!</h1>

<p>Платформа LUWRAIN&#160;&#x2014; это открытый и высокотехнологичный проект.
Мы приглашаем присоединиться к&#160;нему как&#160;пользователей,
интересующихся новыми инструментами невизуального доступа к&#160;ИТ,
так и разработчиков любого уровня,
которые смогут познакомиться с&#160;профессиональными и интересными технологиями и внести свой вклад в&#160;повышение независимости людей с&#160;нарушениями зрения.</p>

<p>Мы также очень интересуемся вопросами применения ИТ в тифлопедагогике и других сферах,
соприкасающихся с&#160;образованием и социализацией людей с&#160;нарушениями зрения.
Обычно все они тем или иным образом связаны  с&#160;задачами адаптации материалов для&#160;представления и восприятия в&#160;невизуальной форме.
Для&#160;их&#160;решения мы исследуем способы упрощения выпуска изданий в&#160;<a href="https://ru.wikipedia.org/wiki/DAISY">формате Daisy</a>  и создания интерактивных тифлоприложений.
Технологии, необходимые для&#160;этого, находятся в&#160;большей мере в&#160;сфере автоматизации обработки информации, включая машинное обучение и обработку сигналов,
нежели  в&#160;сфере построения невизуальных интерфейсов,
поэтому мы выделяем эту&#160;работу в&#160;отдельное направление.</p>

<p>Если вы желаете присоединиться к&#160;нам, выберите пункт,
наиболее точно описывающий ваши интересы:</p>

<ol>
<li><a href="<?php echo luwrain_link('personal/');?>"><strong>Для&#160;пользователей:</strong> вы желаете установить LUWRAIN для&#160;личной работы.</a></li>
<li><a href="<?php echo luwrain_link('developers/');?>"><strong>Для&#160;разработчиков:</strong> вы желаете познакомиться с&#160;принципами разработки LUWRAIN и внести свой вклад.</a></li>
<li><a href="<?php echo luwrain_link('organizations/');?>"><strong>Для&#160;организаций:</strong> вы интересуетесь вопросами адаптации  и чтения материалов в&#160;невизуальной форме.</a>]</li>
</ol>

<p>См.&#160;также:</p>

<ul>
<li><a href="<?php echo luwrain_link('/doc/difference/');?>">Чем LUWRAIN отличается от&#160;других вспомогательных технологий?</a></li>
<li><a href="<?php echo luwrain_link('/community/mailing-lists/');?>">Списки рассылок</a></li>
<li><a href="<?php echo luwrain_link('/download/');?>">Загрузка дистрибутивов</a></li>
<li><a href="<?php echo luwrain_link('/doc/legal/');?>">Правовой статус</a></li>
</ul>
<?php }?>
<?php luwrain_end_page('/doc/user/start/index.php');?>
