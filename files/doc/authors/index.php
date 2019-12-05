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
<h1>Авторы проекта</h1>

<p>См.&#160;также:</p>

<ul>
<li><a href="<?php echo luwrain_link('/doc/contacts/');?>">Наши контакты</a></li>
</ul>

<p>В&#160;основную группу разработчиков входят (в&#160;алфавитном порядке):</p>

<p>Алексей Голошумов<br>
Кандидат педагогических наук, инженер-программист</p>

<p><img src="michael.jpg" alt="Фотография лица молодого человека" style="margin: 20px 10px 5px 0; width: 200px; height: 200px;"/><br>
<a href="http://marigostra.ru">Михаил Пожидаев</a><br>
Кандидат технических наук, инженер-программист<br>
E-mail: msp <em>(at)</em> luwrain.org</p>

<p><img src="elena.jpg" alt="Фотография лица девушки" style="margin: 20px 10px 5px 0; width: 200px; height: 200px;"/><br>
Елена Теплых<br>
Психолог<br>
E-mail: elena <em>(at)</em> luwrain.org</p>

<h2>Партнёры проекта</h2>

<ul>
<li><a href="http://tsu.ru">Национальный исследовательский Томский государственный университет</a></li>
<li><a href="http://www.tspu.edu.ru">Томский государственный педагогический университет</a></li>
</ul>
<?php }?>
<?php luwrain_end_page('/doc/authors/index.php');?>
