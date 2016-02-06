<?php include "../../../functions.php"; luwrain_begin_page('/doc/user/installation/index.php', luwrain_current_lang() == 'ru'?'Установка на жёсткий диск':'Installation instructions');?>
<?php if (luwrain_current_lang() == 'en') {?>
<h1>Installation instructions</h1>

<p>The&#160;installation of&#160;LUWRAIN on&#160;your PC can be&#160;performed in&#160;several ways.
It&#160;depends on&#160;whether you'd like to&#160;have LUWRAIN as&#160;a&#160;stand-alone OS or as&#160;an&#160;application.
In&#160;second case it&#160;also depends on&#160;the&#160;type of&#160;OS 
you have already installed on&#160;your PC.</p>

<h2>Select the&#160;type of&#160;installation you would like to&#160;continue with:</h2>

<ul>
<li><a href="<?php echo luwrain_link('iso/');?>">Install LUWRAIN as&#160;a&#160;stand-alone OS</a></li>
<li>Install LUWRAIN as&#160;an&#160;application for:
<ul>
<li>Microsoft Windows</li>
<li><a href="<?php echo luwrain_link('linux/');?>">GNU/Linux</a></li>
</ul></li>
</ul>

<h2>See&#160;also</h2>

<ul>
<li><a href="<?php echo luwrain_link('/download/iso/');?>">Download the&#160;ISO-image</a></li>
<li><a href="<?php echo luwrain_link('/doc/user/manual/');?>">User manual</a></li>
</ul>
<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
<h1>Установка на&#160;жёсткий диск</h1>

<p>Установка LUWRAIN на&#160;жёсткий диск для&#160;постоянной работы может осуществляться несколькими способами.
Точное описание зависит от&#160;того, желаете&#160;ли вы установить LUWRAIN 
как&#160;самостоятельную ОС или как&#160;приложение для&#160;ОС,
которая у&#160;вас уже установлена.</p>

<h2>Выберите подходящий для&#160;вас вариант:</h2>

<ul>
<li><a href="<?php echo luwrain_link('iso/');?>">Установка LUWRAIN на&#160;компьютер в&#160;виде самостоятельной ОС</a></li>
<li>Установка LUWRAIN на&#160;компьютер в&#160;виде приложения для:
<ul>
<li>Microsoft Windows</li>
<li><a href="<?php echo luwrain_link('linux');?>">GNU/Linux</a> </li>
</ul></li>
</ul>

<h2>См.&#160;также</h2>

<ul>
<li><a href="<?php echo luwrain_link('/download/iso/');?>">Загрузка ISO-образа</a></li>
<li><a href="<?php echo luwrain_link('/doc/user/manual/');?>">Руководство пользователя</a></li>
</ul>
<?php }?>
<?php luwrain_end_page('/doc/user/installation/index.php');?>
