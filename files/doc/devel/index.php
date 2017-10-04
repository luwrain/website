<?php include "../../functions.php"; luwrain_begin_page('/doc/devel/index.php', luwrain_current_lang() == 'ru'?'Документация для нашей команды разработчиков':'Document for members of our team');?>
<?php if (luwrain_current_lang() == 'en') {?>
<h1>Documents for LUWRAIN developers</h1>

<p>We believe that software is an&#160;alive thing and 
maintain smooth and persistent development process.
In&#160;conjunction with&#160;our free&#160;license, <br />
this makes possible for everybody to&#160;easily   compile 
either our nightly build
or our ISO-image
or any our&#160;application  from up-to-date sources.
Of&#160;cource, everybody can do this with his/her  modifications,
if them don't violate <a href="<?php echo luwrain_link('/doc/legal');?>">our&#160;legal notes</a>.
This&#160;section covers all&#160;of&#160;these things 
and is purposed for&#160;everybody who would like to know what our development process looks like or even participate in&#160;it.</p>

<h2>Choose the&#160;section you need:</h2>

<ul>
<li><a href="<?php echo luwrain_link('rules/');?>">Rules of our development process</a></li>
<li><a href="<?php echo luwrain_link('compilation/');?>">Compiling our&#160;source code</a></li>
<li><a href="<?php echo luwrain_link('nightly');?>">Compiling our nightly build</a></li>
<li><a href="<?php echo luwrain_link('iso/');?>">Compiling ISO-images</a></li>
</ul>

<h2>See also</h2>

<ul>
<li><a href="/api/">LUWRAIN API Javadoc</a></li>
</ul>
<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
<h1>Документация для&#160;разработчиков</h1>

<p>Настоящий раздел содержит документацию для&#160;разработчиков,
непосредственно принимающих участие в&#160;развитии наших компонентов.
Ссылки на&#160;этой странице могут помочь вам лучше понять идеи и принципы, 
принятые в&#160;команде  LUWRAIN.</p>

<h2>Выберите интересующий вас раздел:</h2>

<ul>
<li><a href="<?php echo luwrain_link('rules/');?>">Правила нашего процесса разработки</a></li>
<li><a href="<?php echo luwrain_link('compilation/');?>">Сборка исходного кода</a></li>
<li><a href="<?php echo luwrain_link('iso/');?>">Сборка ISO-образа</a></li>
<li><a href="<?php echo luwrain_link('nightly/');?>">Структура nightly-релизов</a>
<ul>
<li><a href="<?php echo luwrain_link('nightly/compilation/');?>">Сборка nightly-релиза из&#160;исходных текстов</a></li>
</ul></li>
</ul>

<h2>См.&#160;также</h2>

<ul>
<li><a href="/api/">LUWRAIN API Javadoc</a></li>
</ul>
<?php }?>
<?php luwrain_end_page('/doc/devel/index.php');?>
