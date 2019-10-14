<?php include "../../functions.php"; luwrain_begin_page('/community/podcasts/index.php', luwrain_current_lang() == 'ru'?'Подкасты':'PodCasts');?>
<?php if (luwrain_current_lang() == 'en') {?>
<h1>PodCasts</h1>

<ul>
<li><a href="http://sdcast.ksdaemon.ru/podlove/file/55/s/download/SDCast-17.mp3">"В&#160;гостях Михаил Пожидаев"</a>
(mp3 (36M), SDCast &#x2014; Software Development podCAST, Konstantin Burkalev, January 27, 2015, Russian language)</li>
<li><a href="http://download.luwrain.org/chats/EchoOfMoscowTomsk-2014-09-19.mp3">"Сделано в&#160;Томске"</a>
(MP3 (11M), "Эхо&#160;Москвы &#x2014; Томск", Svetlana Glazyrina, September&#160;19, 2014, Russian language)</li>
<li>Talk in&#160;podcast "Accessibility 21st century"
("Радио ВОС" and <a href="http://tiflocomp.ru">tiflocomp.ru</a>, Vladimir Dovydenkov and Anatoliy Popko, Russian language)
<ul>
<li><a href="http://download.luwrain.org/chats/a11y21c-2014-08-30.mp3">Part&#160;1</a> (MP3 (70M), August&#160;30, 2014)</li>
<li><a href="http://download.luwrain.org/chats/a11y21c-2014-09-17.mp3">Part&#160;2</a> (MP3 (84M), September 17, 2014)</li>
</ul></li>
</ul>

<p>See&#160;also:</p>

<ul>
<li><a href="<?php echo luwrain_link('/community/publications/');?>">Our publications and presentations</a></li>
<li><a href="<?php echo luwrain_link('/community/video/');?>">Video on YouTube</a></li>
<li><a href="<?php echo luwrain_link('/community/massmedia/');?>">Mass media about us</a></li>
</ul>
<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
<h1>Подкасты и беседы на&#160;радио</h1>

<p><strong>ВНИМАНИЕ!</strong>
Эта&#160;страница предназначена к&#160;удалению. 
Её&#160;содержимое перенесено <a href="<?php echo luwrain_link('/community/massmedia/');?>">сюда</a>.</p>
<?php }?>
<?php luwrain_end_page('/community/podcasts/index.php');?>
