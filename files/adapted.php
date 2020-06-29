<?php

function lwr_begin_page_adapted($path, $title)
{
?>
<!DOCTYPE html>
<html lang="<?php echo lwr_current_lang();?>">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<?php
        echo '    <title>'.lwr_title($title).'</title>'."\n";
?>
  </head>
  <body>
    <div>
      <b><a href="<?php echo luwrain_link('/products/');?>"><?php echo luwrain_current_lang() == 'ru'?'Продукты':'Products';?></a></b> |
      <b><a href="<?php echo luwrain_link('/doc/');?>"><?php echo luwrain_current_lang() == 'ru'?'Документация':'Documentation';?></a></b> |
      <b><a href="<?php echo luwrain_link('/community/');?>"><?php echo luwrain_current_lang() == 'ru'?'Интересное':'Interesting';?></a></b><br>
      <hr>
      <a href="<?php echo luwrain_link_ext1($path, 'en', luwrain_current_mode());?>">EN</a> |
      <a href="<?php echo luwrain_link_ext1($path, 'ru', luwrain_current_mode());?>">RU</a> |
      <a href="<?php echo luwrain_link_ext1($path, luwrain_current_lang(), 'normal');?>"><?php echo luwrain_current_lang() == 'ru'?'Графическая версия':'Normal version';?></a><br /><br/>
      <div style="height: 16px;"></div>
<?php
}

function lwr_main_page_adapted()
{
  if (lwr_current_lang() == 'en') {
?>
            <h1>&#x22;The territory of a compelling accessibility&#x22;</h1>
            <p>
                With accessible toolkit LUWRAIN, blind and visually-impaired people have a new way to be
      involved in the incredible world of information technologies. LUWRAIN doesn&#x27;t take
      a lot of time to learn, and aims to be useable on laptops, as well as desktop computers.
      You can treat our new idea as one more solution for everyone who needs a reliable and accessible
      companion for various types of work. The product is designed as a new platform for creating
      speech-enabled applications with a set of standard tools for easy access to web services,
      mail, news reading, etc.
            </p>
            <p>
                LUWRAIN is a set of software components on Java for accessible user interface construction.
      In contrast with widely popular screen reading solutions for graphical desktops, which
      actually are designed for control through a mouse and other pointing devices useful only
      for sighted users, LUWRAIN brings the information in the most suitable for the perception of
      blind people form. That means that the LUWRAIN user will always spend significantly less
      time than in an adapted GUI. We have created our environment for people who enjoy working
      effectively and time-efficiently.
            </p>
            <p>
                LUWRAIN can be with you everywhere! You may take it as a stand-alone operating system on
      Linux kernel and it will turn a laptop into elegant accessory for blind people. If you,
      your colleagues or members of your family need the operating system being already installed
      on your PC, you may take LUWRAIN just as an application. LUWRAIN will not require you to
      forbid the tools you used to work with previously and you can use it as a platform for
      creating and distributing accessible applications, even if you havn&#x27;t any experience
      in this area.
            </p>
            <p>
                LUWRAIN is a completely Free Software project, no fee is involved, and no restrictions
      of use and distribution exist, except in cases explicitly violating the terms of the GNU
      Public License ver. 3, as it was published by the Free Software Foundation. However, financial
      donations are still required to help us present our product across the world, and to introduce
      it to related social and distribution organizations. The team of developers hopes that
      LUWRAIN can increase the integration of disabled people into social life. <a href="<?php echo luwrain_link('/doc/about/');?>">Read
      more...</a>
            </p>
            <h2>Choose the&#160;section you want:</h2>
            <ul>
                <li><a href="<?php echo luwrain_link('/doc/user/start/');?>">Getting started</a></li>
                <li><a href="<?php echo luwrain_link('/doc/user/manual/');?>">User manual</a></li>
                <li><a href="<?php echo luwrain_link('/community/mailing-lists/');?>">Subscribe to&#160;our mailing lists</a></li>
                <li><a href="<?php echo luwrain_link('/download/iso/');?>">Bootable ISO-images</a></li>
                <li>Distributions: <a href="<?php echo luwrain_link('/download/windows');?>">for&#160;Microsoft Windows</a>, <a href="<?php echo luwrain_link('/download/linux/');?>">for&#160;GNU/Linux</a></li>
                <li><a href="<?php echo luwrain_link('/doc/contacts/');?>">Our&#160;contacts</a></li>
            </ul>
<?php

  }
  if (lwr_current_lang() == 'ru')
  {

?>
      <h1>Платформа невизуальных приложений LUWRAIN</h1>
      <ul>
        <li><a href="<?php echo luwrain_link('/doc/user/start/');?>">С&#160;чего начать?</a></li>
        <li><a href="<?php echo luwrain_link('/doc/authors/');?>">Кто&#160;мы??</a></li>
        <li>Следите за&#160;нашими&#160;новостями <a href="http://twitter.com/luwrain">в&#160;Твиттере</a> и <a href="https://www.youtube.com/channel/UCY2ZRqeBTH4nhdPG1Vjl-6g">на&#160;YouTube</a>
        <li><a href="<?php echo luwrain_link('/community/mailing-lists/');?>">Списки рассылок</a></li>
        <li><a href="http://wiki.luwrain.org">Вики</a></li>
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
        превращая портативные и одноплатные ПК в&#160;удобные инструменты для незрячих людей.</p>
      <h2>Только все вместе</h2>
        <p>Наш коллектив постоянно следит за&#160;техническими средствами, коммерческими моделями и новыми подходами к&#160;образованию,
        для&#160;которых применение платформы LUWRAIN способно сделать существенный вклад в&#160;развитие людей с&#160;нарушениями зрения.
        Разработка методики обучения незрячих программистов и системных администраторов,
        популяризация невизуального использования издательских систем TeX и Lilypond,
        снижение числа незрячих людей, которые не&#160;смогли начать использование ПК,&#160;&#x2014; далеко не весь круг интересных нам проблем.
        <a href="<?php echo luwrain_link('/doc/about/');?>">Читать далее...</a></p>
<?php

}
}

  ?>
