<?php include "../../functions.php"; luwrain_begin_page('/doc/authors/index.php', luwrain_current_lang() == 'ru'?'Авторы':'Authors');?>
<?php if (luwrain_current_lang() == 'en') {?>
<h1>Who we are</h1>

<p>see&#160;also:</p>

<ul>
<li><a href="<?php echo luwrain_link('/doc/contacts/');?>">Contact us</a></li>
</ul>

<p>Our main team includes (in&#160;alphabetical order)</p>

<ul>
<li>Alexey Goloshumov</li>
<li><a href="http://marigostra.com">Michael Pozhidaev</a></li>
<li>Helen Teplykh</li>
</ul>

<p>Our premium partners:</p>

<ul>
<li><a href="http://tsu.ru">National Research Tomsk State University</a></li>
<li><a href="http://www.tspu.edu.ru">Tomsk State Pedagogical University</a></li>
<li><a href="http://schisv1.mskobr.ru/info_edu/basics/">Moscow school for the blind</a></li>
</ul>
<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
<h1>Авторы LUWRAIN</h1>

<p>См.&#160;также:</p>

<ul>
<li><a href="<?php echo luwrain_link('/doc/contacts/');?>">Наши контакты</a></li>
</ul>

<p>В&#160;основную группу разработчиков LUWRAIN входят (в&#160;алфавитном порядке):</p>

<ul>
<li>Алексей Голошумов</li>
<li><a href="http://marigostra.ru">Михаил Пожидаев</a></li>
<li>Елена Теплых</li>
</ul>

<p>Наши стратегические партнёры:</p>

<ul>
<li><a href="http://tsu.ru">Национальный исследовательский Томский государственный университет</a></li>
<li><a href="http://www.tspu.edu.ru">Томский государственный педагогический университет</a></li>
<li><a href="http://schisv1.mskobr.ru/info_edu/basics/">Школа-интернат № 1 для обучения и реабилитации слепых (г.&#160;Москва)</a></li>
</ul>
<?php }?>
<?php luwrain_end_page('/doc/authors/index.php');?>
