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
<h1>Добро пожаловать в&#160;LUWRAIN!</h1>

<p>LUWRAIN&#160;&#x2014; очень  многогранный и комплексный продукт.
В&#160;зависимости от&#160;ваших задач и вашей деятельности 
он может быть вам полезен в&#160;разном качестве.
Мы выделяем три&#160;группы потенциальных пользователей,
для&#160;которых предлагаем различные материалы, 
помогающие познакомиться с&#160;нашей системой и  понять её лучше.
Перейдите, пожалуйста, по&#160;одной из&#160;ссылок ниже:</p>

<ol>
<li><a href="<?php echo luwrain_link('personal/');?>"><strong>LUWRAIN для&#160;персонального использования:</strong>
если вам необходимо установить LUWRAIN для&#160;личного применения в&#160;виде самостоятельной ОС 
или в&#160;виде приложения,
то необходимые вам материалы находятся в&#160;этом разделе.</a></li>
<li><a href="<?php echo luwrain_link('organizations/');?>"><strong>LUWRAIN для&#160;организаций:</strong>
если вы являетесь коммерческой компанией, образовательным учреждением или иной&#160;организацией,
и в&#160;вашей работе существует проблема подготовки рабочего места для&#160;профессиональной деятельности или обучения людей с&#160;нарушениями зрения,
то необходимые вам материалы находятся в&#160;этом разделе.</a>]</li>
<li><a href="<?php echo luwrain_link('developers/');?>"><strong>LUWRAIN для&#160;разработчиков собственных невизуальных приложений:</strong>
если вам требуется создать собственное приложение, способное функционировать в&#160;LUWRAIN,
то необходимые вам материалы находятся в&#160;этом разделе.</a></li>
</ol>

<p>См.&#160;также:</p>

<ul>
<li><a href="<?php echo luwrain_link('/download/');?>">Главная страница загрузки дистрибутивов</a></li>
<li><a href="<?php echo luwrain_link('/community/mailing-lists/');?>">Наши списки рассылок</a></li>
</ul>
<?php }?>
<?php luwrain_end_page('/doc/user/start/index.php');?>
