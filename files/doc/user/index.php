<?php include "../../functions.php"; luwrain_begin_page('/doc/user/index.php', luwrain_current_lang() == 'ru'?'Документация для пользователей':'Documentation for users');?>
<?php if (luwrain_current_lang() == 'en') {?>
<h1>Documentation for&#160;users</h1>

<p>Sorry, this page is still available in&#160;Russian language only. Please, try later.</p>
<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
<h1>Документация для&#160;пользователей</h1>

<p>Документация для&#160;пользователей LUWRAIN разделена на&#160;два&#160;основных раздела:
как установить LUWRAIN на&#160;ваш&#160;компьютер
и как работать в&#160;LUWRAIN, если  он уже установлен.</p>

<p>В&#160;своём основном объёме документация предназначена для&#160;чтения пользователями
с&#160;элементарными знаниями принципов работы на&#160;ПК.
Если у&#160;вас по&#160;мере чтения этих документов возникают вопросы,
не&#160;стесняйтесь их&#160;задавать в&#160;наших <a href="<?php echo luwrain_link('/community/mailing-lists/');?>">списках рассылок</a>.</p>

<p>Выберите интересующий вас раздел:</p>

<ul>
<li><a href="<?php echo luwrain_link('manual/');?>">Руководство пользователя</a></li>
<li><a href="<?php echo luwrain_link('installation/');?>">Инструкция по&#160;установке</a></li>
</ul>
<?php }?>
<?php luwrain_end_page('/doc/user/index.php');?>
