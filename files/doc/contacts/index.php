<?php include "../../functions.php"; luwrain_begin_page('/doc/contacts/index.php', luwrain_current_lang() == 'ru'?'Контакты':'Contact us');?>
<?php if (luwrain_current_lang() == 'en') {?>
<h1>Contact us</h1>

<p>See also:</p>

<ul>
<li><a href="<?php echo luwrain_link('/doc/authors/');?>">Project authors</a></li>
</ul>

<p>Our project is going through a phase of its setup 
and the channels for the feedback are not properly established yet.
During this phase you can use the&#160;e-mail mentioned below for 
any&#160;questions and suggestions you have.
But please do not treat it as&#160;a&#160;main way to&#160;communicate,
it is just a&#160;temporary measure. 
Thank&#160;you!</p>

<p>The&#160;e-mail for&#160;contacts: luwrain <em>(at)</em> gmail <em>(dot)</em> com</p>
<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
<h1>Контакты</h1>

<p>См.&#160;также:</p>

<ul>
<li><a href="<?php echo luwrain_link('/doc/authors/');?>">Авторы проекта</a></li>
</ul>

<p>Наш&#160;проект проходит период становления,
поэтому  пути обратной связи с&#160;нами ещё не&#160;выбраны окончательно.
Если у&#160;Вас есть какие-либо вопросы и предложения,
Вы можете использовать электронный адрес, указанный ниже,
но, пожалуйста, смотрите на&#160;него только как на&#160;временную меру. 
Спасибо!</p>

<p>Электронный адрес для&#160;обратной связи: luwrain <em>(собачка)</em> gmail <em>(точка)</em> com</p>
<?php }?>
<?php luwrain_end_page('/doc/contacts/index.php');?>
