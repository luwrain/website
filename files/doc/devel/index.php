<?php include "../../functions.php"; luwrain_begin_page('/doc/devel/index.php', luwrain_current_lang() == 'ru'?'Документация для нашей команды разработчиков':'Document for members of our team');?>
<?php if (luwrain_current_lang() == 'en') {?>
<h1>Document for members of our team</h1>

<p>It is a&#160;documentation covering our development process.
Links on&#160;this page can help you better understand 
ideas and agreements accepted in&#160;our&#160;work.
We add information to&#160;this section when get new details,
which should be well-known to all participants of&#160;our&#160;project.</p>

<h2>Choose the&#160;section you need:</h2>

<ul>
<li><a href="<?php echo luwrain_link('rules/');?>">Rules of our development process</a></li>
<li><a href="<?php echo luwrain_link('compilation/');?>">Compilation of&#160;the&#160;source code</a></li>
<li><a href="<?php echo luwrain_link('iso/');?>">Compilation of&#160;the&#160;ISO-image</a></li>
<li><a href="<?php echo luwrain_link('i18n/');?>">International collaboration</a></li>
<li><a href="<?php echo luwrain_link('txt-reading/');?>">Requirements to&#160;the&#160;text reading utility</a></li>
</ul>
<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
<h1>Документация для нашей команды разработчиков</h1>

<p>Настоящий раздел содержит документацию для&#160;разработчиков,
непосредственно принимающих участие в&#160;развитии наших компонентов.
Ссылки на&#160;этой странице могут помочь вам лучше понять идеи и принципы, 
принятые в&#160;команде  LUWRAIN.
Мы добавляем сюда новые материалы, когда появляются вещи,
необходимые для&#160;знания всем участникам проекта.</p>

<h2>Выберите интересующий вас раздел:</h2>

<ul>
<li><a href="<?php echo luwrain_link('rules/');?>">Правила нашего процесса разработки</a></li>
<li><a href="<?php echo luwrain_link('compilation/');?>">Сборка исходного кода</a></li>
<li><a href="<?php echo luwrain_link('iso/');?>">Сборка ISO-образа</a></li>
<li><a href="<?php echo luwrain_link('i18n/');?>">Международное сотрудничество</a></li>
<li><a href="<?php echo luwrain_link('txt-reading/');?>">Требования к&#160;приложению для&#160;чтения больших текстов</a></li>
</ul>
<?php }?>
<?php luwrain_end_page('/doc/devel/index.php');?>
