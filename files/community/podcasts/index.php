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

<ul>
<li><a href="http://sdcast.ksdaemon.ru/2015/01/sdcast-17/">"в&#160;гостях Михаил Пожидаев"</a>
("SDCast &#x2014; Подкаст о&#160;разработке ПО и его окрестностях", Константин Буркалёв, 27 января 2015&#160;г., рус.&#160;яз.)</li>
<li><a href="http://download.luwrain.org/chats/EchoOfMoscowTomsk-2014-09-19.mp3">"Сделано в&#160;Томске"</a>
("Эхо&#160;Москвы &#x2014; Томск", Светлана Глазырина, 19 сентября 2014&#160;г., рус.&#160;яз.)</li>
<li>Беседа в&#160;подкасте "Доступность XXI&#160;век"
("Радио ВОС" и портал <a href="http://tiflocomp.ru">tiflocomp.ru</a>, Владимир Довыденков и Анатолий Попко, рус.&#160;яз.)
<ul>
<li><a href="http://download.luwrain.org/chats/a11y21c-2014-08-30.mp3">Часть&#160;1</a> (30&#160;августа 2014&#160;г.)</li>
<li><a href="http://download.luwrain.org/chats/a11y21c-2014-09-17.mp3">Часть&#160;2</a> (17&#160;сентября 2014&#160;г.)</li>
</ul></li>
</ul>

<p>См.&#160;также:</p>

<ul>
<li><a href="<?php echo luwrain_link('/community/publications/');?>">Наши публикации и презентации</a></li>
<li><a href="<?php echo luwrain_link('/community/video/');?>">Видео на YouTube</a></li>
<li><a href="<?php echo luwrain_link('/community/massmedia/');?>">Пресса о&#160;нас</a></li>
</ul>
<?php }?>
<?php luwrain_end_page('/community/podcasts/index.php');?>
