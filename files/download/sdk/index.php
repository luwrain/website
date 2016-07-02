<?php include "../../functions.php"; luwrain_begin_page('/download/sdk/index.php', luwrain_current_lang() == 'ru'?'SDK':'SDK');?>
<?php if (luwrain_current_lang() == 'en') {?>
<h1>LUWRAIN&#160;SDK</h1>

<p>Our&#160;SDK is useful if you would like to&#160;create your own application for&#160;LUWRAIN.
It&#160;is&#160;prepared for&#160;Java developers and provides necessary jar's, javadoc files, etc.</p>

<p>Version: <?php echo lwr_version_sdk();?></p>

<p>Date of&#160;release: <?php echo lwr_release_date_sdk_en();?></p>

<p>You can download LUWRAIN&#160;SDK by&#160;the&#160;following link:</p>

<ul>
<li>luwrain-sdk-<?php echo lwr_version_sdk();?>.zip </li>
</ul>

<h2>See also</h2>

<ul>
<li><a href="<?php echo luwrain_link('/doc/ext/');?>">How to&#160;create your own application for&#160;LUWRAIN?</a></li>
</ul>
<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
<h1>LUWRAIN&#160;SDK</h1>

<p>Наш SDK призван обеспечить возможность создания ваших собственных приложений для&#160;LUWRAIN.
Он подготовлен для&#160;Java-разработчиков и содержит необходимые jar-файлы, javadoc-документацию и&#160;т.&#160;д.</p>

<p>Версия: <?php echo lwr_version_sdk();?></p>

<p>Дата релиза: <?php echo lwr_release_date_sdk_ru();?></p>

<p>Вы можете загрузить LUWRAIN&#160;SDK по&#160;этой ссылке:</p>

<ul>
<li>luwrain-sdk-<?php echo lwr_version_sdk();?>.zip </li>
</ul>

<h2>См.&#160;также</h2>

<ul>
<li><a href="<?php echo luwrain_link('/doc/ext/');?>">Как создать ваше собственное приложение для&#160;LUWRAIN?</a></li>
</ul>
<?php }?>
<?php luwrain_end_page('/download/sdk/index.php');?>
