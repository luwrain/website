<?php include "../../functions.php"; luwrain_begin_page('/doc/ext/index.php', luwrain_current_lang() == 'ru'?'Создание нового расширения':'Creating  an extension');?>
<?php if (luwrain_current_lang() == 'en') {?>
<h1>Creating an&#160;extension</h1>
<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
<h1>Создание нового расширения</h1>

<p>LUWRAIN &#x2014; это прежде всего платформа для&#160;создания приложений,
адаптированных для&#160;восприятия людей с&#160;нарушениями зрения.
Эта&#160;возможность существует благодаря механизму  расширений,
предусмотренному в&#160;нашей платформе.
Документация в&#160;этом разделе призвана помочь всем желающим получить необходимые сведения,
которые требуются для самостоятельной подготовки расширений LUWRAIN.
Набор классов Java, необходимых при&#160;разработке расширений, мы&#160;называем LUWRAIN&#160;API,
и ему посвящён <a href="/api/">отдельный раздел</a>,
состоящий из&#160;автоматически сгенерированной  документации Javadoc.
Описание возможности создания расширений разбито на&#160;несколько секций,
перечисленных в&#160;порядке, наиболее подходящем для&#160;последовательного чтения.</p>

<h2>Выберите интересующий вас раздел:</h2>

<ol>
<li><a href="<?php echo luwrain_link('intro/');?>">Введение</a></li>
<li><a href="<?php echo luwrain_link('essentials/');?>">Основные понятия расширений</a></li>
<li><a href="<?php echo luwrain_link('luwrain/');?>">Класс {{LUWRAIN}}</a></li>
<li>Создание приложения:
<ol>
<li><a href="<?php echo luwrain_link('events/');?>">События приложений</a></li>
<li><a href="<?php echo luwrain_link('controls/');?>">Библиотека стандартных элементов управления</a>
3 . <a href="<?php echo luwrain_link('custom/');?>">Создание собственных элементов управления</a></li>
<li><a href="<?php echo luwrain_link('popups/');?>">Библиотека стандартных всплывающих областей</a></li>
<li><a href="<?php echo luwrain_link('multithreading/');?>">Создание многопоточных приложений</a></li>
</ol></li>
<li><a href="<?php echo luwrain_link('registry/');?>">Работа с&#160;реестром</a></li>
<li><a href="<?php echo luwrain_link('compilation/');?>">Сборка вашего  расширения</a></li>
<li><a href="<?php echo luwrain_link('example/');?>">Пример простейшего расширения</a></li>
</ol>

<h2>См.&#160;также</h2>

<ul>
<li><a href="http://habrahabr.ru/post/258413/">Никита Цейковец на&#160;Хабрахабр о&#160;разработке приложений для&#160;LUWRAIN</a></li>
</ul>
<?php }?>
<?php luwrain_end_page('/doc/ext/index.php');?>
