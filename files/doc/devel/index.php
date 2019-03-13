<?php include "../../functions.php"; luwrain_begin_page('/doc/devel/index.php', luwrain_current_lang() == 'ru'?'Документация для разработчиков':'Documentation for developers');?>
<?php if (luwrain_current_lang() == 'en') {?>
<h1>Documentation for&#160;developers</h1>

<p>We&#160;are always trying to&#160;maintain a&#160;smooth and persistent development process.
<a href="<?php echo luwrain_link('/doc/legal/');?>">The&#160;free license we use</a> makes possible for&#160;everybody to&#160;contribute to&#160;our project.
In&#160;this section you can find various documentation describing how to&#160;work on&#160;LUWRAIN source code and compile it.</p>

<p>See&#160;also:</p>

<ul>
<li><a href="<?php echo luwrain_link('/download/nightly/');?>">Our nightly releases</a></li>
<li><a href="/api/">LUWRAIN API Javadoc</a></li>
</ul>

<h2>Choose the&#160;section you need:</h2>

<ul>
<li><a href="<?php echo luwrain_link('rules/');?>">Rules of our development process</a></li>
<li><a href="<?php echo luwrain_link('i18n/');?>">National languages and standards support</a></li>
<li><a href="<?php echo luwrain_link('properties/');?>">System properties</a></li>
<li><a href="<?php echo luwrain_link('standalone/');?>">Standalone mode</a></li>
<li>Compilation rules:
<ul>
<li><a href="<?php echo luwrain_link('compilation/');?>">Compiling our&#160;source code</a></li>
<li><a href="<?php echo luwrain_link('wininstaller/');?>">Building the&#160;installer for&#160;Microsoft Windows</a></li>
<li><a href="<?php echo luwrain_link('nightly');?>">Compiling nightly releases</a></li>
<li><a href="<?php echo luwrain_link('iso/');?>">Compiling ISO-images</a></li>
</ul></li>
</ul>
<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
<h1>Документация для&#160;разработчиков</h1>

<p>Страницы в&#160;этом  разделе освещают различные вопросы разработки LUWRAIN.
Они могут помочь вам лучше понять идеи и принципы, 
принятые в&#160;нашей команде .</p>

<p>См.&#160;также:</p>

<ul>
<li><a href="<?php echo luwrain_link('/download/nightly/');?>">Nightly-релизы</a></li>
<li><a href="/api/">LUWRAIN API Javadoc</a></li>
</ul>

<h2>Выберите интересующий вас раздел:</h2>

<ul>
<li><a href="<?php echo luwrain_link('rules/');?>">Правила нашего процесса разработки</a></li>
<li><a href="<?php echo luwrain_link('i18n/');?>">Реализация поддержки национальных языков и стандартов</a></li>
<li><a href="<?php echo luwrain_link('properties/');?>">Список системных свойств</a></li>
<li><a href="<?php echo luwrain_link('standalone/');?>">Автономный режим работы</a></li>
<li>Описание правил компиляции:
<ul>
<li><a href="<?php echo luwrain_link('compilation/');?>">Компиляция исходного кода</a></li>
<li><a href="<?php echo luwrain_link('wininstaller/');?>">Сборка  инсталлятора для Microsoft Windows</a></li>
<li><a href="<?php echo luwrain_link('nightly/');?>">Компиляция nightly-релиза</a></li>
<li><a href="<?php echo luwrain_link('iso/');?>">Сборка ISO-образа</a></li>
</ul></li>
</ul>
<?php }?>
<?php luwrain_end_page('/doc/devel/index.php');?>
