<?php include "../../../functions.php"; luwrain_begin_page('/doc/user/manual/index.php', luwrain_current_lang() == 'ru'?'Руководство пользователя':'User manual');?>
<?php if (luwrain_current_lang() == 'en') {?>
<p>Sorry, this page is available in Russian only.</p>
<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
<h1>Руководство пользователя</h1>

<p>В&#160;настоящем руководстве описываются основные принципы работы в&#160;нашей системе.
Вся&#160;приведённая здесь информация предназначена для&#160;пользователей,
установивших и запустивших LUWRAIN на&#160;своём компьютере.
Если вам требуются инструкции как подготовить систему к&#160;работе, вы можете найти их <a href="<?php echo luwrain_link('/doc/user/installation/');?>">здесь</a>.</p>

<p>Выберите интересующий вас раздел:</p>

<ul>
<li><a href="<?php echo luwrain_link('intro/');?>">Ключевые особенности</a></li>
<li><a href="<?php echo luwrain_link('clipboard/');?>">Операции копирования-вставки</a></li>
<li><a href="<?php echo luwrain_link('speech/');?>">Настройка вывода речи</a></li>
<li><a href="<?php echo luwrain_link('reader/');?>">Просмотр документов</a></li>
<li><a href="<?php echo luwrain_link('player/');?>">Прослушивание музыки, радио и аудиокниг</a></li>
<li><a href="<?php echo luwrain_link('calc/');?>">Вычисления на&#160;калькуляторе</a></li>
<li><a href="<?php echo luwrain_link('hotkeys/');?>">Горячие клавиши</a></li>
<li>Особенности использования в&#160;GNU/Linux
<ul>
<li><a href="<?php echo luwrain_link('linux/ubuntu-repo');?>">Подключение репозитория для&#160;Ubuntu Linux</a></li>
</ul></li>
</ul>
<?php }?>
<?php luwrain_end_page('/doc/user/manual/index.php');?>
