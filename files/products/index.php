<?php include "../functions.php"; luwrain_begin_page('/products/index.php', luwrain_current_lang() == 'ru'?'Продукты':'Products');?>
<?php if (luwrain_current_lang() == 'en') {?>
<h1>Our products and services</h1>

<ul>
<li><a href="<?php echo luwrain_link('/download/');?>">All releases including materials for developers</a>
<ul>
<li><a href="<?php echo luwrain_link('/download/windows/');?>">LUWRAIN for&#160;Microsoft Windows</a></li>
<li><a href="<?php echo luwrain_link('/download/linux/');?>">LUWRAIN for&#160;GNU/Linux</a></li>
<li><a href="<?php echo luwrain_link('/download/iso/');?>">Distribution as&#160;a&#160;Linux-based operating system</a></li>
</ul></li>
</ul>

<h2>See&#160;also</h2>

<ul>
<li><a href="<?php echo luwrain_link('/doc/user/start/');?>">Getting started</a></li>
</ul>

<h2>About the&#160;project</h2>

<ul>
<li><a href="<?php echo luwrain_link('/doc/about/');?>">The&#160;free story what LUWRAIN is, and why do we think blind users need it?</a></li>
<li><a href="<?php echo luwrain_link('/doc/faq/');?>">Frequently asked questions</a></li>
<li><a href="<?php echo luwrain_link('/doc/difference/');?>">Why is LUWRAIN different than other accessible solutions?</a></li>
<li><a href="<?php echo luwrain_link('/doc/legal/');?>">Legal notes</a></li>
<li><a href="<?php echo luwrain_link('/doc/authors/');?>">The project authors</a></li>
</ul>
<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
<h1>Наши продукты</h1>

<p>Платформа LUWRAIN&#160;&#x2014; наш центральный продукт, развиваемый совместно с&#160;сообществом активных пользователей.
Она предназначена как для&#160;разработки самостоятельных невизуальных приложений,
так и для&#160;создания целостного невизуального окружения на&#160;базе различных операционных систем.</p>

<ul>
<li><a href="<?php echo luwrain_link('/download/');?>">Все релизы, включая материалы для разработчиков</a>
<ul>
<li><a href="<?php echo luwrain_link('/download/windows/');?>">Дистрибутив для Microsoft Windows</a></li>
<li><a href="<?php echo luwrain_link('/download/linux/');?>">Дистрибутив для GNU/Linux</a></li>
<li><a href="<?php echo luwrain_link('/download/iso/');?>">Дистрибутив в виде операционной системы на&#160;ядре Linux</a></li>
</ul></li>
</ul>

<h2>О&#160;проекте</h2>

<ul>
<li><a href="<?php echo luwrain_link('/doc/about/');?>">Что&#160;такое LUWRAIN?</a></li>
<li><a href="<?php echo luwrain_link('/doc/difference/');?>">Чем LUWRAIN отличается от&#160;других вспомогательных технологий?</a></li>
<li><a href="<?php echo luwrain_link('/doc/faq/');?>">Часто задаваемые вопросы</a></li>
<li><a href="<?php echo luwrain_link('/doc/legal/');?>">Правовой статус</a></li>
<li><a href="<?php echo luwrain_link('/doc/authors/');?>">Авторы проекта</a></li>
</ul>
<?php }?>
<?php luwrain_end_page('/products/index.php');?>
