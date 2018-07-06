<?php include "../../../functions.php"; luwrain_begin_page('/doc/user/manual/index.php', luwrain_current_lang() == 'ru'?'Руководство пользователя':'User manual');?>
<?php if (luwrain_current_lang() == 'en') {?>
<p>Sorry, this page is available in Russian only.</p>
<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
<h1>Руководство пользователя</h1>

<p>В&#160;нашем руководстве описаны основные принципы работы.
Мы&#160;полагаем, что система уже установлена
или вы запустили её в&#160;режиме live&#160;CD с&#160;целью ознакомиться без&#160;установки на&#160;жёсткий диск.
Если вам требуются инструкции по&#160;подготовке системы к&#160;работе, вы можете их&#160;найти <a href="<?php echo luwrain_link('/doc/user/installation/');?>">здесь</a>.</p>

<p>Выберите интересующий вас раздел:</p>

<ul>
<li><a href="<?php echo luwrain_link('clipboard/');?>">Операции копирования-вставки</a></li>
</ul>
<?php }?>
<?php luwrain_end_page('/doc/user/manual/index.php');?>
