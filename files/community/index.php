<?php include "../functions.php"; luwrain_begin_page('/community/index.php', luwrain_current_lang() == 'ru'?'Сообщество':'Community');?>
<?php if (luwrain_current_lang() == 'en') {?>
<h1>Our&#160;community</h1>

<p>Everybody curious about LUWRAIN is&#160;invited to&#160;be a&#160;member of&#160;our community!
The&#160;community is very important since it's helpful to&#160;know  your opinion and suggestions on&#160;all things we do.
With valuable feedback, we are&#160;able to make  corresponding improvements and track known issues.</p>

<h2>Choose the&#160;option you are interested&#160;in:</h2>

<ul>
<li><a href="http://wiki.luwrain.org">Our wiki</a></li>
<li><a href="<?php echo luwrain_link('mailing-lists');?>">Our&#160;mailing lists</a></li>
<li><a href="<?php echo luwrain_link('album/');?>">Our photos</a></li>
<li><a href="http://twitter.com/luwrain">Follow&#160;us on&#160;Twitter</a></li>
<li><a href="<?php echo luwrain_link('publications');?>">Publications about our work</a></li>
<li><a href="<?php echo luwrain_link('bugs');?>">Reporting a&#160;bug</a></li>
</ul>
<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
<h1>Наше&#160;сообщество</h1>

<p>Всех, кому интересно общение на&#160;темы использования и разработки LUWRAIN, 
мы приглашаем быть членами нашего сообщества!
Поскольку сообщество позволяет нам знать мнение пользователей,
оно имеет для&#160;нас очень большое значение.
Надёжная обратная связь позволяет вносить в&#160;LUWRAIN качественные и нужные улучшения.</p>

<h2>Сообщество LUWRAIN состоит из&#160;нескольких ресурсов:</h2>

<ul>
<li><a href="http://wiki.luwrain.org">Наше wiki</a></li>
<li><a href="<?php echo luwrain_link('mailing-lists');?>">Наши списки рассылок</a></li>
<li><a href="<?php echo luwrain_link('album/');?>">Наш фотоальбом</a></li>
<li><a href="http://twitter.com/luwrain">Лента новостей  в&#160;Twitter</a></li>
<li><a href="<?php echo luwrain_link('publications/');?>">Публикации о&#160;нашей работе</a></li>
<li><a href="<?php echo luwrain_link('bugs');?>">Сообщения об&#160;ошибках</a></li>
</ul>

<h2>Дополнительные материалы</h2>

<ul>
<li><a href="http://download.luwrain.org/contrib/">Файлы, присланные  членами нашего сообщества</a></li>
<li><a href="http://download.luwrain.org/media/">Звуковые файлы, используемые для оформления LUWRAIN</a></li>
<li><a href="http://habrahabr.ru/post/258413/">Никита Цейковец на&#160;Хабрахабр о&#160;разработке приложений для&#160;LUWRAIN</a></li>
</ul>
<?php }?>
<?php luwrain_end_page('/community/index.php');?>
