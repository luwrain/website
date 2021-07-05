<?php
// Copyright 2012-2021 Michael Pozhidaev <msp@luwrain.org>
// The LUWRAIN Project, GPL v.3

function lwr_begin_page_adapted($path, $title)
{
?>
<!DOCTYPE html>
<html lang="<?php echo lwr_lang();?>">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="<?php echo lwr_keywords();?>">
<?php
        echo '    <title>'.lwr_title($title).'</title>'."\n";
?>
  </head>
  <body>
    <div>
      <b><a href="<?php echo luwrain_link('/products/');?>"><?php echo lwr_lang() == 'ru'?'ПРОДУКТЫ':'PRODUCTS';?></a></b> |
      <b><a href="<?php echo luwrain_link('/doc/');?>"><?php echo lwr_lang() == 'ru'?'ДОКУМЕНТАЦИЯ':'DOCUMENTATION';?></a></b> |
      <b><a href="<?php echo luwrain_link('/community/');?>"><?php echo lwr_lang() == 'ru'?'ИНТЕРЕСНОЕ':'INTERESTING';?></a></b><br>
      <hr>
      <a href="<?php echo luwrain_link_ext1($path, 'en', lwr_mode());?>">EN</a> |
      <a href="<?php echo luwrain_link_ext1($path, 'ru', luwrain_current_mode());?>">RU</a> |
      <a href="<?php echo luwrain_link_ext1($path, luwrain_current_lang(), 'normal');?>"><?php echo luwrain_current_lang() == 'ru'?'ГРАФИЧЕСКАЯ ВЕРСИЯ':'GRAPHICAL VERSION';?></a><br /><br>
      <div style="height: 16px;"></div>
<?php
}

function lwr_end_page_adapted($path) {
?>
      <hr>
      <?php echo lwr_lang() == 'ru'?'&#169; 2012&#x2013;2021 Проект&#160;LUWRAIN':'&#169; 2012&#x2013;2021 The&#160;LUWRAIN&#160;project'?><br>
      <a href="<?php echo htmlspecialchars('https://validator.w3.org/nu/?doc='.urlencode('https://luwrain.org'.(strlen($path) == 0 || $path[0] != '/'?'/':'').$path.'?mode=adapted&lang='.lwr_lang())); ?>"><?php echo lwr_lang() == 'ru'?'Проверить при помощи w3.org':'Verify with w3.org';?></a><br>
          </div>
  </body>
</html>
<?php
}

function lwr_main_page_adapted()
{
  if (lwr_lang() == 'en') {
?>
      <h1>The LUWRAIN project</h1>

      <ul>
        <li>Follow&#160;us <a href="http://twitter.com/luwrain">on&#160;Twitter</a> and <a href="https://www.youtube.com/channel/UCY2ZRqeBTH4nhdPG1Vjl-6g">on&#160;YouTube</a>
        <li><a href="<?php echo luwrain_link('/community/mailing-lists/');?>">Subscribe to&#160;our mailing lists</a></li>
      </ul>
      <p>LUWRAIN develops technologies which improve the&#160;accessibility of&#160;internet services and digital materials to&#160;people with&#160;eyesight problems.
        We are designing a&#160;new speech-enabled user interface and
        are researching new methods of&#160;adapting materials for&#160;blind people with the&#160;help of machine learning.</p>
      <p>The&#160;cloud service <a href="https://books.luwrain.org/?lang=en&amp;mode=adapted">LUWRAIN Books</a> creates audiobooks of&#160;uploaded texts utilizing commercial text-to-speech engines
        and with&#160;the support of&#160;the DAISY format.
        This innovation was based on&#160;considerable research into the&#160;areas of&#160;natural language processing,
        parsing of&#160;source materials, and layout generation.
        LUWRAIN Books also takes care of&#160;delivering its audiobooks to&#160;readers in&#160;a&#160;way which helps them to&#160;manage bookmarks.</p>
      <p>The&#160;core of&#160;the&#160;LUWRAIN project is&#160;a&#160;platform for&#160;the&#160;creation of&#160;apps for&#160;the&#160;blind and partially-sighted.
        It brings a&#160;new user experience designed to&#160;achieve maximum efficiency.
        The&#160;LUWRAIN platform provides an&#160;open API on&#160;top of&#160;Java language,
        which helps to&#160;build accessible apps in&#160;a&#160;portable way.
        LUWRAIN, together with&#160;a&#160;set of&#160;standard utilities, can be launched as&#160;a&#160;standalone operating system on&#160;the&#160;Linux kernel.
        It is the&#160;most advanced approach to&#160;making Raspberry&#160;Pi accessible to&#160;the&#160;blind.</p>
      <p>We are constantly looking for&#160;technical solutions, commercial models and new approaches to&#160;education which in&#160;conjunction with&#160;the&#160;LUWRAIN platform
        can improve the&#160;lives of&#160;people with&#160;eyesight disability.
        We invite everybody to&#160;collaborate with us on&#160;learning about blind software engineering, adapting publishing systems such&#160;as&#160;TeX and Lilypond, and many other things.</p>
      <ul>
        <li><a href="<?php echo luwrain_link('/doc/user/start/');?>">Getting started</a></li>
        <li>Distributions: <a href="<?php echo luwrain_link('/download/windows');?>">for&#160;Microsoft Windows</a>, <a href="<?php echo luwrain_link('/download/linux/');?>">for&#160;GNU/Linux</a></li>
        <li><a href="<?php echo luwrain_link('/doc/advantages/');?>">Why is LUWRAIN different than other accessibility solutions?</a></li>
        <li><a href="<?php echo luwrain_link('/doc/faq/');?>">Frequently asked questions</a></li>
      </ul>
<?php
  }
  if (lwr_lang() == 'ru')
  {
?>
      <h1>Платформа невизуальных приложений LUWRAIN</h1>
      <ul>
        <li>Следите за&#160;нашими&#160;новостями <a href="http://twitter.com/luwrain">в&#160;Твиттере</a> и <a href="https://www.youtube.com/channel/UCY2ZRqeBTH4nhdPG1Vjl-6g">на&#160;YouTube</a>
        <li><a href="<?php echo luwrain_link('/community/mailing-lists/');?>">Подпишитесь на&#160;наши&#160;списки рассылок</a></li>
      </ul>
      <h2>Технологии без&#160;пикселей</h2>
      <p>LUWRAIN развивает инструменты доступа к&#160;информационным технологиям в&#160;невизуальной форме.
        Сфера наших интересов включает в&#160;себя как проектирование новых человеко-машинных интерфейсов,
        построенных на&#160;основе речевого вывода,
        так и исследование автоматизированных методов адаптации материалов для&#160;восприятия без&#160;зрительного контроля.
        Особую роль в&#160;нашей работе играет поддержка людей с&#160;нарушениями зрения,
        для&#160;которых мы ведём активную разработку программных продуктов, охватывающих решение разнообразных задач.</p>
      <h2>Книги и DAISY в&#160;облаке</h2>
      <p>Облачный сервис <a href="<?php echo lwr_link('http://books.luwrain.org/');?>">LUWRAIN Books</a> предназначен для&#160;обработки массивов текстов и создания на&#160;их&#160;основе аудиокниг,
        включая поддержку формата DAISY.
        Для&#160;этого используются результаты наших исследований в&#160;области компьютерной лингвистики,
        обработки исходных материалов и построения навигационной структуры изданий.
        LUWRAIN Books позволяет не&#160;только создавать аудиокниги, но и доставляет их читателям, управляя каталогами и закладками,
        ориентируясь на&#160;круг задач издательств, тифлопедагогов и библиотек.</p>
      <h2>Открытая вселенная Java</h2>
      <p>Для&#160;построения невизуальных интерфейсов мы развиваем <a href="<?php echo lwr_link('/download/');?>">платформу LUWRAIN</a>.
        Она создаёт новый пользовательский опыт, отвечающий строгим требованиям функциональной эффективности,
        и предлагает открытый API на&#160;языке Java,
        обеспечивающий возможность разработки кроссплатформенных приложений с&#160;интеграцией в&#160;сетевые сервисы.
        LUWRAIN с&#160;комплектом стандартных программ может быть запущен как операционная система на&#160;ядре Linux,
        превращая портативные ПК и Raspberry&#160;Pi в&#160;удобные инструменты для незрячих людей.</p>
      <h2>Только все вместе</h2>
        <p>Наш коллектив постоянно следит за&#160;техническими средствами, коммерческими моделями и новыми подходами к&#160;образованию,
        для&#160;которых применение платформы LUWRAIN способно сделать существенный вклад в&#160;развитие людей с&#160;нарушениями зрения.
        Разработка методики обучения незрячих программистов и системных администраторов,
        популяризация невизуального использования издательских систем TeX и Lilypond,
        снижение числа незрячих людей, которые не&#160;смогли начать использование ПК,&#160;&#x2014; далеко не весь круг интересных нам проблем.
        <a href="<?php echo luwrain_link('/doc/about/');?>">Читать далее...</a></p>
      <ul>
        <li><a href="<?php echo luwrain_link('/doc/user/start/');?>">С&#160;чего начать?</a></li>
        <li>Дистрибутивы: <a href="<?php echo luwrain_link('/download/windows');?>">для&#160;Microsoft Windows</a>, <a href="<?php echo luwrain_link('/download/linux/');?>">для&#160;GNU/Linux</a></li>
        <li><a href="<?php echo luwrain_link('/doc/advantages/');?>">Чем LUWRAIN отличается от&#160;других вспомогательных технологий?</a></li>
        <li><a href="<?php echo luwrain_link('/doc/faq/');?>">Часто задаваемые вопросы</a></li>
      </ul>
<?php

}
}

  ?>
