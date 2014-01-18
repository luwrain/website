<?php
  function luwrain_current_lang()
{
    return array_key_exists('lang', $_GET)?$_GET['lang']:'en';
}

  function luwrain_current_mode()
{
    return array_key_exists('mode', $_GET)?$_GET['mode']:'normal';
}

function luwrain_link_ext1($path, $lang, $mode)
  {
    return $path.'?lang='.$lang.'&mode='.$mode;
  }

function luwrain_link($path)
  {
    return luwrain_link_ext1($path, luwrain_current_lang(), luwrain_current_mode());
  }

  function luwrain_top_menu()
  {
    if (luwrain_current_lang() == 'ru')
    {
?>
	<div id = "topPart">
	  <ul class="topMenu">
	    <li class="sectionMenu">
	      <div>
		<ul class="subMenu">
		  <li class="linkMenu">
		    <a href="<?php echo luwrain_link('/doc/user/try/');?>">С чего начать?</a>
		  </li>
		  <li class="linkMenu">
		    <a href="<?php echo luwrain_link('/doc/faq/');?>">FAQ</a>
		  </li>
		  <li class="linkMenuLast">
		    <a href="<?php echo luwrain_link('/doc/resources/');?>">Материалы</a>
		  </li>
		  <li class="">
		    <ul class="subMenuSmall">
		      <li>
			<a href="/api/">API</a>
		      </li>
		      <li>
			<a href="<?php echo luwrain_link('/community/mailing-list/');?>">Дискуссионный лист</a>
		      </li>
		      <li>
			<a href="<?php echo luwrain_link('/community/bugs/');?>">Сообщить об ошибке</a>
		      </li>
		      <li>
			<a href="<?php echo luwrain_link('/download/sources/');?>">Исходный код</a>
		      </li>
		      <li>
			<a href="<?php echo luwrain_link('/doc/new-app/');?>">Создать новое приложение</a>
		      </li>
		    </ul>
		  </li>
		</ul>
	      </div>
	    </li>
	    <li class="sectionMenu">
	      <div>
		<ul class="subMenu">
		  <li class="linkMenu">
		    <a href="<?php echo luwrain_link('/doc/partners/');?>">Для партнёров</a>
		  </li>
		  <li class="linkMenu">
		    <a href="<?php echo luwrain_link('/doc/sponsors/');?>">Для спонсоров</a>
		  </li>
		  <li class="linkMenu">
		    <a href="<?php echo luwrain_link('/doc/legal/');?>">Лицензия</a>
		  </li>
		</ul>
	      </div>
	    </li>
	    <li class="sectionMenu">
	      <div>
		<ul class="subMenu">
		  <li class="linkMenu">
		    <a href="<?php echo luwrain_link('/doc/about/');?>">О проекте</a>
		  </li>
		  <li class="linkMenu">
		    <a href="<?php echo luwrain_link('/doc/authors/');?>">Авторы</a>
		  </li>
		  <li class="linkMenu">
		    <a href="<?php echo luwrain_link('/doc/contacts/');?>">Контакты</a>
		  </li>
		</ul>
	      </div>
	    </li>
	  </ul>
	</div>
<?php
      return;
    }
?>
	<div id = "topPart">
	  <ul class="topMenu">
	    <li class="sectionMenu">
	      <div>
		<ul class="subMenu">
		  <li class="linkMenu">
		    <a href="<?php echo luwrain_link('/doc/user/try/');?>">Getting started</a>
		  </li>
		  <li class="linkMenu">
		    <a href="<?php echo luwrain_link('/doc/faq/');?>">FAQ</a>
		  </li>
		  <li class="linkMenuLast">
		    <a href="<?php echo luwrain_link('/doc/resources/');?>">Resources</a>
		  </li>
		  <li class="">
		    <ul class="subMenuSmall">
		      <li>
			<a href="/api/">API</a>
		      </li>
		      <li>
			<a href="<?php echo luwrain_link('/community/mailing-list/');?>">Mailing list</a>
		      </li>
		      <li>
			<a href="<?php echo luwrain_link('/community/bugs/');?>">Report a bug</a>
		      </li>
		      <li>
			<a href="<?php echo luwrain_link('/download/sources/');?>">Source code</a>
		      </li>
		      <li>
			<a href="<?php echo luwrain_link('/doc/new-app/');?>">Your own application</a>
		      </li>
		    </ul>
		  </li>
		</ul>
	      </div>
	    </li>
	    <li class="sectionMenu">
	      <div>
		<ul class="subMenu">
		  <li class="linkMenu">
		    <a href="<?php echo luwrain_link('/doc/partners/');?>">Be a partner</a>
		  </li>
		  <li class="linkMenu">
		    <a href="<?php echo luwrain_link('/doc/sponsors/');?>">Be a sponsor</a>
		  </li>
		  <li class="linkMenu">
		    <a href="<?php echo luwrain_link('/doc/legal/');?>">Legal notes</a>
		  </li>
		</ul>
	      </div>
	    </li>
	    <li class="sectionMenu">
	      <div>
		<ul class="subMenu">
		  <li class="linkMenu">
		    <a href="<?php echo luwrain_link('/doc/about/');?>">About the project</a>
		  </li>
		  <li class="linkMenu">
		    <a href="<?php echo luwrain_link('/doc/authors/');?>">Authors</a>
		  </li>
		  <li class="linkMenu">
		    <a href="<?php echo luwrain_link('/doc/contacts/');?>">Contact us</a>
		  </li>
		</ul>
	      </div>
	    </li>
	  </ul>
	</div>
<?php
  }

  function luwrain_begin_page($path, $title)
  {	   
  if (luwrain_current_mode() == 'adapted')
    {
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
    echo '    <title>'.$title.' - The accessible environment Luwrain</title>'."\n";
?>
  </head>
  <body>
    <b><a href="<?php echo luwrain_link('/download/');?>"><?php echo luwrain_current_lang() == 'ru'?'Загрузить':'Download';?></a></b> |
    <b><a href="<?php echo luwrain_link('/doc/');?>"><?php echo luwrain_current_lang() == 'ru'?'Документация':'Documentation';?></a></b> |
    <b><a href="<?php echo luwrain_link('/community/');?>"><?php echo luwrain_current_lang() == 'ru'?'Сообщество':'Community';?></a></b> |
    <a href="<?php echo luwrain_link_ext1($path, luwrain_current_lang(), 'normal');?>"><?php echo luwrain_current_lang() == 'ru'?'Полная версия':'Normal version';?></a><br/>
    <hr/>
    <a href="<?php echo luwrain_link_ext1($path, 'en', luwrain_current_mode());?>">EN</a> |
    <a href="<?php echo luwrain_link_ext1($path, 'ru', luwrain_current_mode());?>">RU</a><br/>
    <div style="height: 16px;"></div>
<?php
      return;
    }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta property="og:title" content="Luwrain" />
    <meta property="og:description" content="Luwrain" />
    <meta property="og:type" content="company" />
    <meta property="og:url" content="http://www.luwrain.com"/>
<?php
    echo '    <title>'.$title.' - The accessible environment Luwrain</title>'."\n";
?>
    <link type="image/x-icon" href="/Images/favicon.ico" rel="icon"/>
    <link media="all" rel="stylesheet" type="text/css" href="/Content/luwrain.css" />
    <script type="text/javascript" src="/Scripts/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="/Scripts/index.js"></script>
    <script type="text/javascript" src="/Scripts/core.js"></script>
    <script type="text/javascript">
      jQuery(document).ready(function () {
      OnReady();
      $('#docsLink').addClass("lightBlueColor");
      });
    </script>
  </head>
  <body>
    <div id ="wrapper">
      <div id="main">
<?php
    luwrain_top_menu();
?>
	<div id="menuSwitch">
	  <div id = "openMenu" class = "menuButton">
	    <a href="#"><?php echo luwrain_current_lang() == 'ru'?'МЕНЮ':'MENU';?> &#9652;</a>
	  </div>
	  <div id = "closeMenu" class = "menuButton">
	    <a href="#"><?php echo luwrain_current_lang() == 'ru'?'ЗАКРЫТЬ':'CLOSE';?> &#9662;</a>
	  </div>
	</div>
	<div id = "headerPart">		
	  <ul class="headerList">
	    <li class="sectionHeader">
	      <div id = "leftMenu">
		<ul class="subMenu">
		  <li class="linkMenu">
<?php
    echo '		    <a href="'.luwrain_link_ext1($path, luwrain_current_lang(), 'adapted').'">'.(luwrain_current_lang() == 'ru'?'Версия для слабовидящих':'Adapted/mobile version')."</a>\n";
?>
		  </li>
		  <li class="linkMenu">
		    <div id = "languageSelected">
		      <a href="#" class="font14" id = "selectedLanguageName"><?php echo luwrain_current_lang() == 'ru'?'Русский':'English';?> &#9662;</a>
		    </div>
		  </li>
		  <li class="linkMenu">
		    <a href="#" class="font14 languageMenuItem hidden" id = "closeLanguageMenu"><?php echo luwrain_current_lang() == 'ru'?'Закрыть':'Close'?> &#9652;</a>
		  </li>
		  <li class="linkMenu">
		    <a class="languageMenuItem hidden" href="<?php echo luwrain_link_ext1($path, 'en', luwrain_current_mode());?>" id="engLang">English</a>
		  </li>
		  <li class="linkMenu">
		    <a class="languageMenuItem hidden" href="<?php echo luwrain_link_ext1($path, 'ru', luwrain_current_mode());?>" id="russianLang">Russian</a>
		  </li>
		</ul>
	      </div>
	      <div id = "leftArrow">
	      </div>
	    </li>
	    <li class="sectionHeader">
	      <div id = "logo">
		<div onclick = "document.location = '<?php echo Luwrain_link('/index.php');?>';" id = "logoLink">
		  <ul class="subMenu" id = "logoLinkUl">
		    <li>
		      <span class="font30 bold">LUWRAIN</span>
		    </li>
		    <li>
		      <span class="italic font14"><?php echo luwrain_current_lang() == 'ru'?'Мир доступных технологий!':'The territory';?></span>
		    </li>
		    <li>
		      <span class="italic font14"><?php if (luwrain_current_lang() == 'en') echo 'of a compelling accessibility';?></span>
		    </li>
		  </ul>
		</div>
	      </div>
	      <div id = "mainPart">
		<div id = "insidePageText">
<?php
  }

  function luwrain_end_page($path)
  { 
    if (luwrain_current_mode() == 'adapted')
    {
?>
  <body>
<html>
<?php
      return;
    }
?>
		</div>
		<!--fixme-->
	      </div>
	    </li>
	    <li class="sectionHeader">
	      <div id="mainMenu">
		<div id="mainMenuBorder">
		  <ul class="subMenu" id="mainMenuList">
		    <li class="linkMenu">
		      <a id = "downLoadLink" href="<?php echo luwrain_link('/download/');?>" class="bold font18"><?php echo luwrain_current_lang() == 'ru'?'Загрузить':'Download';?></a>
		    </li>
		    <li class="linkMenu">
		      <a id = "docsLink" href="<?php echo luwrain_link('/doc/');?>"><?php echo luwrain_current_lang() == 'ru'?'Документация':'Documentation';?></a>
		    </li>
		    <li class="linkMenu">
		      <a href="<?php echo luwrain_link('/community/');?>"><?php echo luwrain_current_lang() == 'ru'?'Сообщество':'Community';?></a>
		    </li>
		  </ul>
		</div>
	      </div>
	      <div id="rightArrow">
	      </div>
	    </li>
	  </ul>
	</div>
	<div class="clearBoth"></div>
	<div id = "footerPart">
	  <ul class="footerList">
	    <li class="sectionFooter">
	      <div id = "footer1">
		<span class="font16"><?php echo luwrain_current_lang() == 'ru'?'Сайт находится в разработке':'This website is still under construction';?></span>
	      </div>
	    </li>
	    <li class="sectionFooter">
	      <div id = "footer2" class="blueColor">
				<?php echo luwrain_current_lang() == 'ru'?'Пишите нам! E-mail: luwrain (собачка) gmail (точка) com':'Waiting your messages! E-mail: luwrain (at) gmail (dot) com';?>
	      </div>
	    </li>
	    <li class="sectionFooter">
	      <div id="design">
		<?php echo luwrain_current_lang() == 'ru'?'Дизайн от':'Design by';?> <a href="http://strash.ru"><span class="blueColor">Strash</span></a>
	      </div>
	    </li>
	  </ul>
	</div>
      </div>
    </div>
  </body>
</html>
<?php
  }

  function luwrain_adapted_main_page()
  {
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>The accessible environment  Luwrain</title>
  </head>
  <body>
    <b><a href="<?php echo luwrain_link('/download/');?>"><?php echo luwrain_current_lang() == 'ru'?'Загрузить':'Download';?></a></b> |
    <b><a href="<?php echo luwrain_link('/doc/');?>"><?php echo luwrain_current_lang() == 'ru'?'Документация':'Documentation';?></a></b> |
    <b><a href="<?php echo luwrain_link('/community/');?>"><?php echo luwrain_current_lang() == 'ru'?'Сообщество':'Community';?></a></b> |
    <a href="<?php echo luwrain_link_ext1($path, luwrain_current_lang(), 'normal');?>"><?php echo luwrain_current_lang() == 'ru'?'Полная версия':'Normal version';?></a><br/>
    <hr/>
    <a href="<?php echo luwrain_link_ext1('/index.php', 'en', luwrain_current_mode());?>">EN</a> |
    <a href="<?php echo luwrain_link_ext1('/index.php', 'ru', luwrain_current_mode());?>">RU</a><br/>
    <div style="height: 16px;"></div>
<?php if (luwrain_current_lang() == 'en') {?>
    <p>
      With&#160;accessible OS Luwrain the&#160;blind and visually-impaired persons get the&#160;new&#160;way
      to&#160;be&#160;involved in&#160;the&#160;incredible world of&#160;information technologies.
      Luwrain doesn&#x27;t take a lot of time to&#160;study and aims to&#160;be&#160;useful on&#160;
      laptops, as&#160;well as&#160;on&#160;usual desktop computers. You can treat our new&#160;idea
      as&#160;one more solution for everybody, who needs a&#160;reliable and accessible companion
      for various types of&#160;work. The&#160;product is designed as the new platform for creating
      speech-enabled applications with set of&#160;standard tools for easy web access, mail and
      news reading etc.
    </p>
    <p>
      Luwrain is a&#160;linux-based system with special type of&#160;user interface constructed
      on&#160;Java technologies. In&#160;contrast with widely popular screen reading solutions
      for graphical desktops, which actually are designed for a&#160;control basically through
      a mouse and other pointing devices, Luwrain follows the special conception, offering representation
      of every working object in the text form from scratch. That means, with&#160;Luwrain user
      will always spend significantly less time than in an&#160;adapted GUI. We have created
      our environment for people, who enjoy working effectively and appreciate time economy.
    </p>
    <p>
      In&#160;Luwrain the&#160;Java user space covers a&#160;number of&#160;system services,
      which are able to&#160;provide a&#160;flexible core and good level of compatibility. The&#160;information
      exchanging between them is performed mostly through a&#160;D-Bus activity. It brings to
      user the&#160;information about network structure from Network Manager and transmits commands
      to a&#160;speech server, purposed for control over a&#160;set of&#160;Text-To-Speech engines.
      The personal user data can be stored in OpenLDAP or in any choice of the SQL server which
      has the proper JDBC interface. For low-vision users Luwrain opens the full-screen window
      with all corresponding textual data written in contrast colours. That window is drawn by
      X.org server using special window manager, created as an&#160;additional part of Luwrain
      project.
    </p>
    <p>
      Luwrain is a&#160;completely Free Software project, no fee is implied, no restrictions
      of using and distribution are present, except&#160;of cases explicitly violating the terms
      of the&#160;GNU Public License ver.&#160;3, as it was published by the&#160;Free Software
      Foundation. However, money donations are still required to&#160;help us present our product
      widely over the&#160;world and introduce it to related social and distribution organizations.
      The team of developers hopes that Luwrain can increase the integration of disabled persons
      into social life.
    </p>
<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
    <p>
      При&#160;помощи операционной системы Luwrain люди с&#160;нарушениями зрения могут расширить
      границы своего&#160;доступа к&#160;невероятному миру информационных технологий. Luwrain
      не&#160;требует много времени для освоения и будет одинаково полезной на&#160;мобильных
      и настольных компьютерах. Мы хотели&#160;бы, чтобы наш проект стал ещё одним решением для&#160;всех,
      кто нуждается в&#160;надёжном и доступном инструменте, пригодном для&#160;решения различных
      задач. Он проектируется как платформа для&#160;создания речевых приложений с&#160;набором
      стандартных утилит, предназначенных для&#160;доступа к веб, электронной почте, новостным
      ресурсам и&#160;т.&#160;д.
    </p>
    <p>
      Luwrain использует ядро Linux и основан на&#160;специальном типе пользовательского интерфейса,
      созданного с&#160;применением инструментов Java. В&#160;отличие от&#160;экранных чтецов,
      функционирующихв&#160;оконном окружении, ориентированного на&#160;работу при&#160;помощи
      мыши, Luwrain придерживается метода изначального представления всех&#160;рабочих объектов
      в&#160;текстовой форме. Это&#160;означает, что на&#160;работу в&#160;Luwrain пользователю
      требуется времени существенно меньше, чем в&#160;озвученном оконном интерфейсе. Мы&#160;создаём
      нашу&#160;систему для&#160;тех, кто ведёт активный образ жизни и способен оценить экономию
      времени.
    </p>
    <p>
      В&#160;Luwrain интерфейс пользователя, работающий внутри виртуальной машины Java, функционирует
      поверх ряда системных сервисов, призванных обеспечить необходимый уровень надёжности и
      гибкости. Передача информации между ними осуществляется преимущественнопри&#160;помощи
      шин D-Bus. D-Bus предоставляет доступ всем приложениям Java к&#160;информации о&#160;сетевых
      подключениях, полученной от&#160;Network manager, передаёт команды в&#160;службу вывода
      речи и&#160;т.&#160;д. Персональные данные пользователей могут храниться в&#160;сервере
      OpenLDAP или любой реляционнйо СУБД, для&#160;которой подготовлен JDBC-интерфейс. Для&#160;слабовидящих
      людей Luwrain выводит текстовую информацию контрастным шрифтом в&#160;окне, отображаемом
      на&#160;экране при&#160;помощи сервера X.org и легковесного оконного менеджера.
    </p>
    <p>
      Luwrain &#x2014; это полностью свободный проект. Использование Luwrain не&#160;подразумевает
      оплаты и может выполняться без&#160;ограничений, если это не&#160;нарушает требований GNU&#160;Public
      Licenseверсии&#160;3. Тем&#160;не&#160;менее, авторы проекта были&#160;бы очень рады любой
      финансовой поддержке, поскольку она может помочь шире представить Luwrain среди мировых
      общественных организаций.
    </p>
<?php }?>
  </body>
</html>
<?php
  }

  function luwrain_content_not_written()
  {
    if (luwrain_current_lang() == 'en')
      echo '                  <p>We apologize, but this page does not have any content yet. Please, try visit it later.</p>'."\n";
    if (luwrain_current_lang() == 'ru')
      echo '                  <p>Мы приносим свои извинения, но текст этой страницы в настоящий момент не подготовлен.</p>'."\n";
  }
?>
