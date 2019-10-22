<?php include "../functions.php"; luwrain_begin_page('/community/index.php', luwrain_current_lang() == 'ru'?'Интересное':'Interesting');?>
<?php if (luwrain_current_lang() == 'en') {?>
<h1>Interesting resources related to&#160;our&#160;work</h1>

<ul>
<li><a href="<?php echo luwrain_link('massmedia/');?>">Mass&#160;media and publications</a></li>
<li><a href="<?php echo luwrain_link('events/');?>">Presentations and events</a></li>
<li><a href="https://twitter.com/luwrain">Twitter</a>; <a href="https://www.youtube.com/channel/UCY2ZRqeBTH4nhdPG1Vjl-6g">YouTube</a>; <a href="https://github.com/luwrain/">GitHub</a></li>
<li><a href="http://wiki.luwrain.org">Our wiki (mostly in&#160;Russian)</a>, </li>
<li><a href="<?php echo luwrain_link('mailing-lists');?>">Mailing lists</a>;</li>
</ul>

<p>Everybody who is curious about LUWRAIN is&#160;invited to&#160;be a&#160;member of&#160;our community!
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
<h1>Интересные ресурсы и материалы</h1>

<ul>
<li><a href="<?php echo luwrain_link('massmedia/');?>">СМИ и публикации</a></li>
<li><a href="<?php echo luwrain_link('events/');?>">Презентации и мероприятия</a></li>
<li><a href="https://twitter.com/luwrain">Twitter</a>; <a href="https://www.youtube.com/channel/UCY2ZRqeBTH4nhdPG1Vjl-6g">YouTube</a>; <a href="https://github.com/luwrain/">GitHub</a></li>
<li><a href="http://wiki.luwrain.org">Наш&#160;вики</a>, </li>
<li><a href="<?php echo luwrain_link('mailing-lists');?>">списки рассылок</a>;</li>
</ul>

<p>Разработку информационных технологий невозможно вести без&#160;построения долгосрочной стратегии развития
или без&#160;постоянного контакта с&#160;сообществами пользователей и специалистов в&#160;смежных отраслях.
В&#160;этом разделе мы собираем все&#160;материалы,
отражающих наши представления о&#160;путях поддержки людей с&#160;нарушениями зрения и о&#160;роли технических средств в&#160;их&#160;жизни.</p>

<h2>Материалы СМИ</h2>

<ul>
<li><a href="https://www.kommersant.ru/doc/4060395">Коммерсантъ: ЦБРФ открывает банки</a></li>
<li><a href="http://www.tadviser.ru/index.php/%D0%A1%D1%82%D0%B0%D1%82%D1%8C%D1%8F:%D0%92_%D0%B1%D0%B0%D0%BD%D0%BA%D0%BE%D0%B2%D1%81%D0%BA%D0%BE%D0%BC_%D1%81%D0%B5%D0%BA%D1%82%D0%BE%D1%80%D0%B5_%D0%A0%D0%BE%D1%81%D1%81%D0%B8%D0%B8_%D0%BD%D0%B0%D1%87%D0%B8%D0%BD%D0%B0%D0%B5%D1%82%D1%81%D1%8F_API-%D1%82%D1%80%D0%B0%D0%BD%D1%81%D1%84%D0%BE%D1%80%D0%BC%D0%B0%D1%86%D0%B8%D1%8F">Тадвайзер: В&#160;банковском секторе России начинается API-трансформация</a></li>
<li><a href="https://www.cnews.ru/news/top/2019-09-27_tainstvennye_zloumyshlenniki_1">CNEWS: Таинственные злоумышленники проделали в Windows «общедоступную дыру» для захвата чужих ПК</a></li>
<li><a href="<?php echo luwrain_link('f123e.php');?>">Представляем F123e</a></li>
</ul>

<h2>См.&#160;также</h2>

<ul>
<li><a href="http://download.luwrain.org/media/greeting/langs/">Записи приветствия системы на&#160;разных языках</a></li>
</ul>
<?php }?>
<?php luwrain_end_page('/community/index.php');?>
