<?php include "../../../functions.php"; luwrain_begin_page('/doc/user/app/index.php', luwrain_current_lang() == 'ru'?'Приложения':'Applications');?>
<?php if (luwrain_current_lang() == 'en') {?>
<h1>Applications</h1>

<p>Sorry, this page is still available in&#160;Russian language only. Please, try later.</p>
<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
<h1>Приложения</h1>

<p>В&#160;состав LUWRAIN входят следующие приложения:</p>

<ul>
<li>Интернет:</li>
</ul>

<p><em>* Веб-браузер
*</em> <a href="<?php echo luwrain_link('mail/');?>">Электронная почта</a>
<em>* [Чтение новостей]{local:/news/}
*</em> Загрузка файлов
** <a href="<?php echo luwrain_link('twitter/');?>">Клиент для&#160;Twitter</a></p>

<ul>
<li>Документы и книги:</li>
</ul>

<p><em>* Работа с&#160;документами и текстовыми книгами (просмотр и прослушивание)
*</em> Среда разработки для проектов с&#160;текстовыми файлами (TeX, Lilypond и языки программирования)
** Редактор документов в&#160; формате Docx</p>

<ul>
<li>Файлы и папки:</li>
</ul>

<p>** <a href="<?php echo luwrain_link('/commander/');?>">Файловый менеджер</a></p>

<ul>
<li>Мультимедия:</li>
</ul>

<p><em>* Проигрыватель музыкальных файлов и "говорящих книг"
*</em> Клиент для Youtube</p>

<ul>
<li>Персональная информация:</li>
</ul>

<p><em>* <a href="<?php echo luwrain_link('contacts/');?>">Адресная книга</a>
*</em> Дневник и личный планировщик
<em>* Календарь
*</em> Управление личными задачами</p>

<p>*Управление и аксессуары:</p>

<p><em>* <a href="<?php echo luwrain_link('notepad/');?>">Блокнот</a>
*</em> Калькулятор
<em>* Командная строка
*</em> Поиск файлов и объектов в системе
<em>* Управление подключениями Wi-Fi
*</em> Панель управления 
** Редактор реестра</p>
<?php }?>
<?php luwrain_end_page('/doc/user/app/index.php');?>
