<?php include "../../functions.php"; luwrain_begin_page('/doc/devel/index.php', luwrain_current_lang() == 'ru'?'Документация для нашей команды разработчиков':'Document for members of our team');?>
<?php if (luwrain_current_lang() == 'en') {?>
<h1>Documentation for&#160;LUWRAIN developers</h1>

<p>We believe that software is something alive and
are always trying to&#160;maintain a&#160;smooth and persistent development process.
In&#160;conjunction with&#160;<a href="<?php echo luwrain_link('/doc/legal/');?>">the&#160;free license we use</a>,
this makes possible for everybody to&#160;participate in&#160;LUWRAIN development.</p>

<p>See&#160;also:</p>

<ul>
<li><a href="<?php echo luwrain_link('/download/nightly/');?>">Our nightly builds</a></li>
<li><a href="/api/">LUWRAIN API Javadoc</a></li>
</ul>

<h2>Choose the&#160;section you need:</h2>

<ul>
<li><a href="<?php echo luwrain_link('rules/');?>">Rules of our development process</a></li>
<li><a href="<?php echo luwrain_link('compilation/');?>">Compiling our&#160;source code</a></li>
<li><a href="<?php echo luwrain_link('nightly');?>">Compiling our nightly build</a></li>
<li><a href="<?php echo luwrain_link('iso/');?>">Compiling ISO-images</a></li>
</ul>
<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
<h1>Документация для&#160;разработчиков</h1>

<p>Настоящий раздел содержит документацию для&#160;разработчиков,
принимающих участие в&#160;развитии непосредственно нашей платформы.
Ссылки на&#160;этой странице могут помочь вам лучше понять идеи и принципы, 
принятые в&#160;команде  LUWRAIN.</p>

<p>См.&#160;также:</p>

<ul>
<li><a href="<?php echo luwrain_link('/download/nightly/');?>">Наши nightly-сборки</a></li>
<li><a href="/api/">LUWRAIN API Javadoc</a></li>
</ul>

<h2>Выберите интересующий вас раздел:</h2>

<ul>
<li><a href="<?php echo luwrain_link('rules/');?>">Правила нашего процесса разработки</a></li>
<li>Разработка расширений на JavaScript:</li>
<li><a href="<?php echo luwrain_link('js/mainobj/');?>">Основной интерфейс LUWRAIN для&#160;расширений на&#160;JavaScript</a></li>
<li>Работа с основным исходным кодом:
<ul>
<li><a href="<?php echo luwrain_link('compilation/');?>">Сборка исходного кода</a></li>
<li><a href="<?php echo luwrain_link('nightly/compilation/');?>">Сборка nightly-релиза из&#160;исходных текстов</a></li>
<li><a href="<?php echo luwrain_link('iso/');?>">Сборка ISO-образа</a></li>
</ul></li>
</ul>

<h2>См.&#160;также</h2>

<ul>
<li><a href="http://habrahabr.ru/post/258413/">Никита Цейковец на&#160;Хабрахабр о&#160;разработке приложений для&#160;LUWRAIN</a></li>
</ul>
<?php }?>
<?php luwrain_end_page('/doc/devel/index.php');?>
