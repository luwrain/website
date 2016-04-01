<?php include "../../../functions.php"; luwrain_begin_page('/doc/user/app/index.php', luwrain_current_lang() == 'ru'?'Приложения':'Applications');?>
<?php if (luwrain_current_lang() == 'en') {?>
<h1>Applications</h1>

<p>Sorry, this page is still available in&#160;Russian language only. Please, try later.</p>
<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
<h1>Приложения</h1>

<p>В&#160;состав LUWRAIN входят следующие приложения:</p>

<ul>
<li>Интернет:
<ul>
<li>Веб-браузер</li>
<li><a href="<?php echo luwrain_link('mail/');?>">Электронная почта</a></li>
<li><a href="<?php echo luwrain_link('/news/');?>">Чтение новостей</a></li>
<li>Загрузка файлов</li>
<li><a href="<?php echo luwrain_link('twitter/');?>">Клиент для&#160;Twitter</a></li>
</ul></li>
<li>Документы и книги:
<ul>
<li>Работа с&#160;документами и текстовыми книгами (просмотр и прослушивание)</li>
<li>Среда разработки для проектов с&#160;текстовыми файлами (TeX, Lilypond и языки программирования)</li>
<li>Редактор документов в&#160; формате Docx</li>
</ul></li>
<li>Файлы и папки:
<ul>
<li><a href="<?php echo luwrain_link('/commander/');?>">Файловый менеджер</a></li>
</ul></li>
<li>Мультимедия:
<ul>
<li>Проигрыватель музыкальных файлов и "говорящих книг"</li>
<li>Клиент для Youtube</li>
</ul></li>
<li>Персональная информация:
<ul>
<li><a href="<?php echo luwrain_link('contacts/');?>">Адресная книга</a></li>
<li>Дневник и личный планировщик</li>
<li>Календарь</li>
<li>Управление личными задачами</li>
</ul></li>
<li>Управление и аксессуары:
<ul>
<li><a href="<?php echo luwrain_link('notepad/');?>">Блокнот</a></li>
<li>Калькулятор</li>
<li>Командная строка</li>
<li>Поиск файлов и объектов в системе</li>
<li>Управление подключениями Wi-Fi</li>
<li>Панель управления </li>
<li>Редактор реестра</li>
</ul></li>
</ul>
<?php }?>
<?php luwrain_end_page('/doc/user/app/index.php');?>
