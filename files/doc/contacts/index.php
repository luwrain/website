<?php include "../../functions.php"; luwrain_begin_page('/doc/contacts/index.php', luwrain_current_lang() == 'ru'?'Контакты':'Contact us');?>
<?php if (luwrain_current_lang() == 'en') {?>
<h1>Contact us</h1>

<p>See also:</p>

<ul>
<li><a href="<?php echo luwrain_link('/doc/authors/');?>">Project authors</a></li>
</ul>

<p>In&#160;order to&#160;contact&#160;us, please send any messages to&#160;the&#160;following address:</p>

<ul>
<li>info <em>(at)</em> luwrain <em>(dot)</em> org</li>
</ul>

<p>Thank&#160;you!</p>
<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
<h1>Контакты</h1>

<p>См.&#160;также:</p>

<ul>
<li><a href="<?php echo luwrain_link('/doc/authors/');?>">Авторы проекта</a></li>
</ul>

<p>Для&#160;того, чтобы связаться с&#160;нами, пожалуйста, используйте этот адрес электронной почты:</p>

<ul>
<li>info <em>(собачка)</em> luwrain <em>(точка)</em> org</li>
</ul>

<p>Спасибо!</p>
<?php }?>
<?php luwrain_end_page('/doc/contacts/index.php');?>
