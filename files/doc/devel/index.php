<?php include "../../functions.php"; luwrain_begin_page('/doc/devel/index.php', luwrain_current_lang() == 'ru'?'Документация для разработчиков':'Documentation for developers');?>
<?php if (luwrain_current_lang() == 'en') {?>
<h1>Documentation for&#160;developers</h1>

<p>We&#160;are always trying to&#160;maintain a&#160;smooth and persistent development process.
<a href="<?php echo luwrain_link('/doc/legal/');?>">The&#160;free license we use</a> makes possible for&#160;everybody to&#160;contribute to&#160;our project.
In&#160;this section you can find various documentation describing how to&#160;work on&#160;LUWRAIN source code and compile it.</p>

<p>See&#160;also:</p>

<ul>
<li><a href="<?php echo luwrain_link('/download/nightly/');?>">Our nightly releases</a></li>
<li><a href="/javadoc/">LUWRAIN API Javadoc</a></li>
</ul>

<p>Choose the&#160;section you need:</p>

<ul>
<li><a href="<?php echo luwrain_link('text-editing/');?>">The components for multiline text editing</a></li>
<li><a href="<?php echo luwrain_link('compilation/');?>">Compiling our&#160;source code</a></li>
<li><a href="<?php echo luwrain_link('nightly');?>">Compiling nightly releases</a></li>
</ul>
<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
<h1>Документация для&#160;разработчиков</h1>

<p>Страницы, перечисленные ниже, освещают различные вопросы разработки LUWRAIN.
Они могут помочь вам лучше понять идеи и принципы, 
принятые в&#160;нашей команде .</p>

<p>См.&#160;также:</p>

<ul>
<li><a href="<?php echo luwrain_link('/download/nightly/');?>">Nightly-релизы</a></li>
<li><a href="/javadoc/">LUWRAIN API Javadoc</a></li>
</ul>

<p>Выберите интересующий вас раздел:</p>

<ul>
<li><a href="<?php echo luwrain_link('text-editing/');?>">Компоненты для редактирования многострочного текста</a></li>
<li><a href="<?php echo luwrain_link('notepad-customizing/');?>">Создание пользовательских функций в&#160;приложении Блокнот</a></li>
<li><a href="<?php echo luwrain_link('compilation/');?>">Компиляция исходного кода</a></li>
<li><a href="<?php echo luwrain_link('nightly/');?>">Компиляция nightly-релиза</a></li>
</ul>
<?php }?>
<?php luwrain_end_page('/doc/devel/index.php');?>
