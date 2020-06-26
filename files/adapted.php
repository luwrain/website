<?php

function lwr_begin_page_adapted($path, $title)
{
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="<?php echo luwrain_current_lang();?>">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<?php
        echo '    <title>'.lwr_title($title).'</title>'."\n";
?>
  </head>
  <body>
    <b><a href="<?php echo luwrain_link('/products/');?>"><?php echo luwrain_current_lang() == 'ru'?'Продукты':'Products';?></a></b> |
    <b><a href="<?php echo luwrain_link('/doc/');?>"><?php echo luwrain_current_lang() == 'ru'?'Документация':'Documentation';?></a></b> |
    <b><a href="<?php echo luwrain_link('/community/');?>"><?php echo luwrain_current_lang() == 'ru'?'Интересное':'Interesting';?></a></b><br>
    <hr/>
    <a href="<?php echo luwrain_link_ext1($path, 'en', luwrain_current_mode());?>">EN</a> |
    <a href="<?php echo luwrain_link_ext1($path, 'ru', luwrain_current_mode());?>">RU</a> |
    <a href="<?php echo luwrain_link_ext1($path, luwrain_current_lang(), 'normal');?>"><?php echo luwrain_current_lang() == 'ru'?'Полная версия':'Normal version';?></a><br /><br/>
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

    <h1>Платформа невизуальных приложений</h1>

    <ul>
      <li><a href="<?php echo luwrain_link('/doc/user/start/');?>">С чего начать?</a></li>
      <li>Дистрибутивы: <a href="<?php echo luwrain_link('/download/windows');?>">для&#160;Microsoft Windows</a>, <a href="<?php echo luwrain_link('/download/linux/');?>">для&#160;GNU/Linux</a> и <a href="<?php echo luwrain_link('/download/iso/');?>">в&#160;виде ISO-образов</a></li>
      <li>Следите за&#160;нашими&#160;новостями: <a href="http://twitter.com/luwrain">в&#160;Твиттере</a>, <a href="https://www.youtube.com/channel/UCY2ZRqeBTH4nhdPG1Vjl-6g">на&#160;YouTube</a> и <a href="https://www.instagram.com/luwrain/">в&#160;Инстаграм</a></li>
      <li><a href="<?php echo luwrain_link('/community/mailing-lists/');?>">Наши списки рассылок</a></li>
    </ul>
    <h2>Технологии без&#160;пикселей</h2>
    <p>Команда LUWRAIN развивает инструменты доступа к&#160;информационным технологиям в&#160;невизуальной форме.
      Наша&#160;компетенция включает в&#160;себя как&#160;решение социальных задач,
      так&#160;и&#160;проектирование новых человеко-машинных интерфейсов для&#160;взаимодействия при помощи речевого вывода.
      Особую роль в&#160;нашей работе играет поддержка людей с&#160;нарушениями зрения,
      для&#160;которых мы ведём активную разработку программных продуктов и методов адаптаций материалов.</p>
    <h2>Невизуальный дизайн</h2>
    <p>В&#160;отличие от&#160;экранных чтецов, функционирующих в&#160;оконном режиме,
      LUWRAIN обеспечивает доступ к&#160;информации в&#160;виде, изначально адаптированном для&#160;восприятия людей с&#160;нарушениями зрения.
      Свобода  от&#160;визуальных концепций позволяет нам предлагать новый пользовательский опыт,
      который мы создаём, исходя из&#160;требований функциональной эффективности.
      Развитие  этой идеи максимально приближает нас к&#160;созданию нового направления в&#160;дизайне,
      которое мы называем невизуальным дизайном.</p>
    <h2>Первый шаг</h2>
    <p>Никакие вспомогательные технологии для&#160;людей с&#160;нарушениями зрения  в&#160;прошлом  не&#160;могли предложить уровень дистрибутивности, которым обладает LUWRAIN.
      LUWRAIN не&#160;имеет никаких внешних зависимостей  и устанавливается максимально быстро как в&#160;Microsoft Windows, так и в&#160;GNU/Linux.
      Для&#160;пользователей, у&#160;которых нет&#160;установленной операционной системы, мы предлагаем дистрибутив в&#160;виде загрузочного ISO-образа,
      который может быть развёрнут на&#160;жёстком диске без&#160;посторонней помощи зрячих людей.</p>
    <h2>Java и JavaScript</h2>
    <p>Компоненты LUWRAIN великолепно интегрируются в&#160;Интернет-сервисы,
      формируя   целостное пользовательское пространство для&#160;комфортного присутствия в&#160;современном цифровом мире.
      На&#160;основе виртуальной машины Java  мы разрабатываем открытую платформу для&#160;создания любых невизуальных приложений,
      в&#160;том числе с&#160;использованием сценариев на&#160;языке JavaScript.
      Все желающие могут ей воспользоваться для&#160;предоставления доступа к&#160;любым своим продуктам,
      поскольку LUWRAIN является свободным ПО с&#160;открытым исходным кодом.
      <a href="<?php echo luwrain_link('/doc/about/');?>">Читать далее...</a></p>
<?php
  }
  }
  ?>
