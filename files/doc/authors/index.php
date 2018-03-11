<?php include "../../functions.php"; luwrain_begin_page('/doc/authors/index.php', luwrain_current_lang() == 'ru'?'Авторы':'Authors');?>
<?php if (luwrain_current_lang() == 'en') {?>
<h1>Who we are</h1>

<p>see&#160;also:</p>

<ul>
<li><a href="<?php echo luwrain_link('/community/album/');?>">Our pictures</a></li>
<li><a href="http://download.luwrain.org/media/greeting/langs/">Recorded greetings in various languages</a></li>
</ul>

<p>Our main team includes (in&#160;alphabetical order)</p>

<ul>
<li>Alexey Goloshumov</li>
<li><a href="http://marigostra.com">Michael Pozhidaev</a></li>
<li>Helen Teplykh</li>
</ul>
<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
<h1>Авторы LUWRAIN</h1>

<p>См.&#160;также:</p>

<ul>
<li><a href="<?php echo luwrain_link('/community/album/');?>">Наш фотоальбом</a></li>
<li><a href="http://download.luwrain.org/media/greeting/langs/">Записанные приветствия на&#160;разных языках</a></li>
</ul>

<p>В&#160;основную группу разработчиков LUWRAIN входят (в&#160;алфавитном порядке):</p>

<ul>
<li>Алексей Голошумов</li>
<li><a href="http://marigostra.ru">Михаил Пожидаев</a></li>
<li>Елена Теплых</li>
</ul>
<?php }?>
<?php luwrain_end_page('/doc/authors/index.php');?>
