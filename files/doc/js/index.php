<?php include "../../functions.php"; luwrain_begin_page('/doc/js/index.php', luwrain_current_lang() == 'ru'?'Расширения JavaScript':'JavaScript extensions');?>
<?php if (luwrain_current_lang() == 'en') {?>
<h1>JavaScript extensions</h1>

<p>LUWRAIN supports the&#160;creation  of&#160;extensions on&#160;JavaScript.
The&#160;JavaScript interpreter is&#160;included in&#160;all our&#160;distributions
and doesn't depend on&#160;any external components.
JavaScript allows everybody  to&#160;add new features to&#160;the&#160;system,
as&#160;well as&#160;modify the&#160;behaviour any of&#160;the&#160;existing.
As you can see in its&#160;name,
It is a&#160;scripting language,
so you do&#160;not need a&#160;compiler for&#160;it or any other development tools.</p>
<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
<h1>Расширения JavaScript</h1>

<p>Возможность лёгкого создания расширений на&#160;языке <a href="https://ru.wikipedia.org/wiki/JavaScript">JavaScript</a>&#160;&#x2014;  одна из&#160;ключевых функций LUWRAIN.
Интерпретатор JavaScript, основанный на&#160;движке <a href="https://ru.wikipedia.org/wiki/Nashorn_%28%D0%B4%D0%B2%D0%B8%D0%B6%D0%BE%D0%BA_JavaScript%29">Nashorn</a>,
включён во&#160;все наши&#160;дистрибутивы и не&#160;требует установки каких-либо внешних компонентов.
Все желающие могут как добавить новую функцию в&#160;систему,
так и модифицировать поведение  уже&#160;существующих.</p>

<p>JavaScript, как следует из&#160;названия, является скриптовым языком,
и создание программ на&#160;нём не&#160;требует установки компилятора или каких-либо других средств разработки.</p>

<p>Выберите интересующий вас раздел:</p>

<ul>
<li><a href="<?php echo luwrain_link('ext/');?>">Создание расширения на&#160;JavaScript</a></li>
<li><a href="<?php echo luwrain_link('hooks');?>">Список событий JavaScript</a></li>
<li><a href="<?php echo luwrain_link('mainobj/');?>">Основной интерфейс LUWRAIN для&#160;программ на&#160;JavaScript</a></li>
</ul>
<?php }?>
<?php luwrain_end_page('/doc/js/index.php');?>
