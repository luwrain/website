<?php include "../../functions.php"; luwrain_begin_page('/community/video/index.php', luwrain_current_lang() == 'ru'?'Видео':'Video');?>
<?php if (luwrain_current_lang() == 'en') {?>
<h1>Video on YouTube</h1>

<p>Click here on&#160;this link to&#160;open our&#160;channel on&#160;YouTube:</p>

<ul>
<li><a href="https://www.youtube.com/channel/UCY2ZRqeBTH4nhdPG1Vjl-6g">https://www.youtube.com/channel/UCY2ZRqeBTH4nhdPG1Vjl-6g</a></li>
</ul>

<p>Our best videos:</p>

<ul>
<li><a href="https://www.youtube.com/watch?v=1Zv8xI6X3uw">"Технологии голосового экранного доступа для&#160;незрячих"</a>
(<a href="http://inva.tv">inva.tv</a>, "Фактор жизни", Vladimir Krupennikov, March&#160;9, 2016, Russian language)</li>
<li><a href="http://www.youtube.com/watch?v=m-HOWJCRn7g3">"Идея фикс. Компьютер для незрячих</a>
("Живое ТВ", Svetlana Glazyrina, October 3, 2014, Russian language)</li>
</ul>

<p>See&#160;also</p>

<ul>
<li><a href="<?php echo luwrain_link('/community/publications/');?>">Our publications and presentations</a></li>
<li><a href="<?php echo luwrain_link('/community/massmedia/');?>">Mass media about us</a></li>
<li><a href="<?php echo luwrain_link('/community/podcasts/');?>">PodCasts</a></li>
</ul>
<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
<h1>Видео на&#160;YouTube</h1>

<p><strong>ВНИМАНИЕ!</strong>
Эта&#160;страница предназначена к&#160;удалению. 
Её&#160;содержимое перенесено <a href="<?php echo luwrain_link('/community/massmedia/');?>">сюда</a>.</p>
<?php }?>
<?php luwrain_end_page('/community/video/index.php');?>
