<?php include "../../functions.php"; luwrain_begin_page('/doc/devel/index.php', luwrain_current_lang() == 'ru'?'Документация для разработчиков среды':'Documentation for environment developers');?>
<?php if (luwrain_current_lang() == 'en') {?>
<h1>Documentation for environment developers</h1>

<ul>
<li><a href="<?php echo luwrain_link('rules/');?>">Rules of our development process</a></li>
<li><a href="<?php echo luwrain_link('i18n/');?>">International collaboration</a></li>
<li><a href="<?php echo luwrain_link('compilation/');?>">Compilation of&#160;our source code</a></li>
<li><a href="<?php echo luwrain_link('txt-reading/');?>">Requirements for&#160;the&#160;text reading utility</a></li>
</ul>
<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
<h1>Документация для&#160;разработчиков среды</h1>

<ul>
<li><a href="<?php echo luwrain_link('rules/');?>">Правила нашего процесса разработки</a></li>
<li><a href="<?php echo luwrain_link('i18n/');?>">Международное сотрудничество</a></li>
<li><a href="<?php echo luwrain_link('compilation/');?>">Сборка нашего исходного кода</a></li>
<li><a href="<?php echo luwrain_link('txt-reading/');?>">Требования к&#160;приложению для&#160;чтения больших текстов</a></li>
</ul>
<?php }?>
<?php luwrain_end_page('/doc/devel/index.php');?>
