<?php include "../functions.php"; luwrain_begin_page('/community/index.php', luwrain_current_lang() == 'ru'?'Интересное':'Interesting');?>
<?php if (luwrain_current_lang() == 'en') {?>
<h1>Interesting resources related to&#160;our&#160;work</h1>

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

<h2>Public initiatives</h2>

<ul>
<li><a href="<?php echo luwrain_link('f123e.php');?>">Introducing F123e</a></li>
</ul>
<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
<h1>Интересные ресурсы о&#160;нашей работе</h1>

<p>В&#160;этом разделе мы собираем различные материалы, 
которые помогают больше узнать как о&#160;нашей работе, так и о&#160;тех проблемах,
на&#160;решение которых нацелен LUWRAIN..
Мы стараемся рассказывать обо всём так, чтобы это оказалось информативно и понятно людям,
даже предельно далёким от&#160;ИТ и от&#160;особенностей доступа к&#160;ним для&#160;людей с&#160;нарушениями зрения.</p>

<ul>
<li><a href="<?php echo luwrain_link('video/');?>">Видео на&#160;YouTube</a></li>
<li><a href="<?php echo luwrain_link('album/');?>">Наш фотоальбом</a></li>
<li><a href="<?php echo luwrain_link('podcasts/');?>">Подкасты</a></li>
<li><a href="<?php echo luwrain_link('massmedia/');?>">Пресса о&#160;нас</a></li>
<li><a href="http://twitter.com/luwrain">Мы в Твиттере</a></li>
<li><a href="<?php echo luwrain_link('publications/');?>">Публикации о&#160;нас</a></li>
<li><a href="http://wiki.luwrain.org">Наш вики</a></li>
<li><a href="<?php echo luwrain_link('mailing-lists');?>">Наши списки рассылок</a></li>
</ul>

<h2>Общественные инициативы</h2>

<ul>
<li><a href="<?php echo luwrain_link('f123e.php');?>">Представляем F123e</a></li>
</ul>

<h2>О&#160;проекте</h2>

<ul>
<li><a href="<?php echo luwrain_link('/doc/about/');?>">Что&#160;такое LUWRAIN, и почему мы считаем, что незрячие люди нуждаются в&#160;нём?</a></li>
<li><a href="<?php echo luwrain_link('/doc/faq/');?>">Часто задаваемые вопросы</a></li>
<li><a href="<?php echo luwrain_link('/doc/difference/');?>">Чем LUWRAIN отличается от&#160;других вспомогательных технологий?</a></li>
<li><a href="<?php echo luwrain_link('/doc/legal/');?>">Правовой статус проекта</a></li>
<li><a href="<?php echo luwrain_link('/doc/authors/');?>">Авторы проекта</a></li>
</ul>
<?php }?>
<?php luwrain_end_page('/community/index.php');?>
