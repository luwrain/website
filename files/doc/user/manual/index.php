<?php include "../../../functions.php"; luwrain_begin_page('/doc/user/manual/index.php', luwrain_current_lang() == 'ru'?'Руководство пользователя':'User manual');?>
<?php if (luwrain_current_lang() == 'en') {?>
<p>Sorry, this page is available in Russian only.</p>
<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
<h1>Руководство пользователя</h1>

<p>Страницы в&#160;этом разделе помогут вам понять основные принципы использования LUWRAIN.
Для&#160;работы вам потребуется LUWRAIN,
установленный на&#160;ваш компьютер.
Если вам нужна помощь с&#160;подготовкой LUWRAIN к&#160;работе,
перейдите в&#160;<a href="<?php echo luwrain_link('/doc/user/installation/');?>">соответствующий раздел документации</a>.</p>

<h2>Выберите интересующий вас раздел:</h2>

<ul>
<li>Общие принципы работы:
<ul>
<li><a href="<?php echo luwrain_link('intro/');?>">Ключевые особенности</a></li>
<li><a href="<?php echo luwrain_link('ext/');?>">Работа с&#160;расширениями</a></li>
<li><a href="<?php echo luwrain_link('web-search/');?>">Единый поиск в&#160;Интернете</a></li>
<li><a href="<?php echo luwrain_link('announcements/');?>">Управление уведомлениями</a></li>
<li><a href="<?php echo luwrain_link('clipboard/');?>">Операции копирования-вставки</a></li>
<li><a href="<?php echo luwrain_link('popups/');?>">Всплывающие окна</a></li>
<li><a href="<?php echo luwrain_link('speakable-text/');?>">Режимы предобработки речи</a></li>
<li><a href="<?php echo luwrain_link('hotkeys/');?>">Горячие клавиши</a></li>
</ul></li>
<li>Работа с&#160;приложениями:
<ul>
<li><a href="<?php echo luwrain_link('reader/');?>">Просмотр документов</a></li>
<li><a href="<?php echo luwrain_link('reader/daisy/');?>">Чтение книг в&#160;формате DAISY</a></li>
<li><a href="<?php echo luwrain_link('studio/');?>">Работа с&#160;текстовыми материалами при помощи приложения Студия</a></li>
<li><a href="<?php echo luwrain_link('studio/tex/');?>">Создание статей, книг и презентаций в&#160;формате TeX</a></li>
<li><a href="<?php echo luwrain_link('studio/ly/');?>">Создание нотных партитур в&#160;формате Lilypond</a></li>
<li><a href="<?php echo luwrain_link('mail/');?>">Чтение электронной почты</a></li>
<li><a href="<?php echo luwrain_link('mail/message/');?>">Составление сообщений электронной почты</a></li>
<li><a href="<?php echo luwrain_link('publisher/');?>">Создание книг в&#160;формате DAISY при&#160;помощи приложения Издатель</a></li>
<li><a href="<?php echo luwrain_link('player/');?>">Прослушивание музыки, радио и аудиокниг</a></li>
<li><a href="<?php echo luwrain_link('notepad/');?>">Редактирование текстовых файлов при&#160;помощи приложения Блокнот</a></li>
<li><a href="<?php echo luwrain_link('notepad/narrating');?>">Создание звуковых файлов на&#160;основе текстов</a></li>
<li><a href="<?php echo luwrain_link('calc/');?>">Вычисления на&#160;калькуляторе</a></li>
</ul></li>
<li>Конфигурирование системы:
<ul>
<li><a href="<?php echo luwrain_link('speech/');?>">Настройка вывода речи</a></li>
<li>Особенности работы в&#160;различных операционных системах:</li>
</ul></li>
<li>Особенности использования в&#160;GNU/Linux
<ul>
<li><a href="<?php echo luwrain_link('linux/ubuntu-repo');?>">Подключение репозитория для&#160;Ubuntu Linux</a></li>
</ul></li>
</ul>
<?php }?>
<?php luwrain_end_page('/doc/user/manual/index.php');?>
