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
    return $path.'?lang='.$lang.'&amp;mode='.$mode;
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
		    <a href="<?php echo luwrain_link('/doc/user/start/');?>">С чего начать?</a>
		  </li>
		  <li class="linkMenu">
		    <a href="<?php echo luwrain_link('/community/bugs/');?>">Сообщить об ошибке</a>
		  </li>
		  <li class="linkMenuLast">
		    <a href="<?php echo luwrain_link('/resources/');?>">Все материалы</a>
		  </li>
		  <li class="">
		    <ul class="subMenuSmall">
		      <li>
			<a href="/community/mailing-lists/">Список рассылки</a>
		      </li>
		      <li>
			<a href="http://twitter.com/luwrain">Twitter</a>
		      </li>
		      <li>
			<a href="<?php echo luwrain_link('/community/publications/');?>">Публикации</a>
		      </li>
		      <li>
			<a href="<?php echo luwrain_link('/download/sources/');?>">Исходный код</a>
		      </li>
		      <li>
			<a href="<?php echo luwrain_link('/api/');?>">API</a>
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
		    <a href="<?php echo luwrain_link('/doc/new-app/');?>">Создать новое приложение</a>
		  </li>
		  <li class="linkMenu">
		    <a href="<?php echo luwrain_link('/doc/user/installed-os/');?>">Для на Mac или Windows</a>
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
		    <a href="<?php echo luwrain_link('/doc/user/start/');?>">Getting started</a>
		  </li>
		  <li class="linkMenu">
		    <a href="<?php echo luwrain_link('/community/bugs/');?>">Report a bug</a>
		  </li>
		  <li class="linkMenuLast">
		    <a href="<?php echo luwrain_link('/resources/');?>">All resources</a>
		  </li>
		  <li class="">
		    <ul class="subMenuSmall">
		      <li>
			<a href="/community/mailing-lists/">Mailing list</a>
		      </li>
		      <li>
			<a href="http://twitter.com/luwrain">Twitter</a>
		      </li>
		      <li>
			<a href="<?php echo luwrain_link('/community/publications/');?>">Publications</a>
		      </li>
		      <li>
			<a href="<?php echo luwrain_link('/download/sources/');?>">Source code</a>
		      </li>
		      <li>
			<a href="<?php echo luwrain_link('/api/');?>">API</a>
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
		    <a href="<?php echo luwrain_link('/doc/new-app/');?>">Your own application</a>
		  </li>
		  <li class="linkMenu">
		    <a href="<?php echo luwrain_link('/doc/user/installed-os/');?>">Run on Mac or Windows</a>
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
    <!--<meta property="og:title" content="Luwrain" />-->
    <!--<meta property="og:description" content="Luwrain" />-->
    <!--<meta property="og:type" content="company" />-->
    <!--<meta property="og:url" content="http://www.luwrain.com"/>-->
<?php
    echo '    <title>'.$title.' - Luwrain</title>'."\n";
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
		<span class="font16"><?php echo luwrain_current_lang() == 'ru'?'&#169; 2012&#x2013;2015 Разработчики Luwrain':'&#169; 2012&#x2013;2015 Luwrain developers'?></span>
	      </div>
	    </li>
	    <li class="sectionFooter">
	      <div id = "footer2" class="blueColor">
				<a href="http://validator.w3.org/check?uri=referer"><?php echo luwrain_current_lang() == 'ru'?'Проверить при помощи w3.org':'Verify with w3.org';?></a>
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
    <h1>&#x22;The territory of a compelling accessibility&#x22;</h1>
    <p>
      With&#160;accessible OS Luwrain, blind and visually-impaired people have a&#160;new way
      to be&#160;involved in the&#160;incredible world of information technologies. Luwrain doesn&#x27;t
      take a&#160;lot&#160;of time to&#160;learn, and aims to be&#160;useable on laptops, as&#160;well
      as&#160;desktop computers. You can treat our new idea as one more solution for&#160;everyone
      who needs a&#160;reliable and accessible companion for&#160;various types of&#160;work.
      The&#160;product is designed as&#160;a&#160;new platform for&#160;creating speech-enabled
      applications with&#160;a&#160;set of&#160;standard tools for&#160;easy web&#160;access,
      mail, news reading,&#160;etc.
    </p>
    <p>
      Luwrain is a&#160;linux-based system with a&#160;special type of user interface constructed
      on&#160;Java technologies. In&#160;contrast with widely popular screen reading solutions
      for&#160;graphical desktops, which actually are&#160;designed for control through a mouse
      and other pointing devices useful only for&#160;sighted users, Luwrain offers representation
      of every working object in&#160;the&#160;text form from scratch. That means that the&#160;Luwrain
      user will always spend significantly less time than in&#160;an&#160;adapted GUI. We have
      created our environment for&#160;people who enjoy working effectively and time-efficiently.
    </p>
    <p>
      In&#160;Luwrain the&#160;Java user space covers a&#160;number of&#160;system services,
      which are&#160;able to provide a&#160;flexible core and a&#160;high level of compatibility.
      The&#160;information exchange between them is performed mostly through a&#160;D-Bus activity.
      It&#160;brings to&#160;the&#160;user the&#160;information about network structure from&#160;Network
      Manager, and transmits commands to&#160;a&#160;speech server, designed for&#160;control
      over a&#160;set of Text-To-Speech engines. The&#160;personal user data can be&#160;stored
      in&#160;OpenLDAP or&#160;in&#160;any choice of&#160;the&#160;SQL server which has the&#160;proper
      JDBC interface. For&#160;low-vision users Luwrain opens the&#160;full-screen window with&#160;all
      corresponding textual data written in contrasting colours. That window is&#160;drawn by&#160;X.org
      server using special window manager, created as&#160;an&#160;additional part of&#160;Luwrain
      project.
    </p>
    <p>
      Luwrain is&#160;a&#160;completely Free Software project, no&#160;fee is&#160;involved,
      and no&#160;restrictions of&#160;use and distribution exist, except in&#160;cases explicitly
      violating the&#160;terms of&#160;the GNU Public License&#160;ver.&#160;3, as&#160;it&#160;was
      published by&#160;the&#160;Free Software Foundation. However, financial donations are&#160;still
      required to&#160;help us present our product across the&#160;world, and to&#160;introduce
      it to&#160;related social and distribution organizations. The&#160;team of developers hopes
      that Luwrain can increase the&#160;integration of&#160;disabled people into social life.
    </p>
    <p>Choose the&#160;section to&#160;read next:</p>
    <ul>
      <li><a href="<?echo luwrain_link('/doc/about/');?>">More about our project</a></li>
      <li><a href="<?echo luwrain_link('/doc/user/start/');?>">Getting started</a></li>
      <li><a href="<?echo luwrain_link('/download/distr/');?>">Download bootable ISO-image</a></li>
      <li><a href="<?echo luwrain_link('/community/mailing-lists/');?>">Mailing list</a></li>
      <li><a href="<?echo luwrain_link('/doc/contacts/');?>">Contact us</a></li>
    </ul>
<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
    <h1>&#x22;Мир доступных технологий!&#x22;</h1>
    <p>
      При &#160;помощи операционной системы Luwrain люди с&#160;нарушениями зрения могут расширить
      границы своего доступа к&#160;невероятному миру информационных технологий. Luwrain не&#160;требует
      много времени для&#160;освоения и будет одинаково полезной на&#160;мобильных и настольных
      компьютерах. Мы хотим, чтобы наш&#160;проект стал ещё одним решением для&#160;всех, кто
      нуждается в&#160;надёжном и доступном инструменте, пригодном для&#160;решения различных
      задач. Он проектируется как&#160;платформа для создания речевых приложений с&#160;набором
      стандартных утилит, предназначенных для&#160;доступа к&#160;веб, электронной почте, новостным
      ресурсам и&#160;т.&#160;д.
    </p>
    <p>
      Luwrain использует ядро Linux и основан на&#160;специальном типе пользовательского интерфейса,
      созданного с&#160;применением инструментов Java. В&#160;отличие от&#160;экранных чтецов,
      функционирующих в&#160;оконном окружении, ориентированного на&#160;работу при&#160;помощи
      мыши, Luwrain придерживается метода изначального представления всех рабочих объектов в&#160;текстовом
      виде. Это означает, что на&#160;работу в Luwrain пользователю требуется времени существенно
      меньше, чем в&#160;озвученном оконном интерфейсе. Мы создаём нашу систему для&#160;тех,
      кто ведёт активный образ жизни и способен оценить экономию времени.
    </p>
    <p>
      В&#160;Luwrain интерфейс пользователя, работающий внутри виртуальной машины Java, функционирует
      поверх ряда системных сервисов, призванных обеспечить необходимый уровень надёжности и
      гибкости. Передача информации между ними осуществляется преимущественно при&#160;помощи
      шин D-Bus. D-Bus предоставляет доступ всем приложениям Java к&#160;информации о&#160;сетевых
      подключениях, полученной от&#160;Network manager, передаёт команды в&#160; службу вывода
      речи и&#160;т.&#160;д. Персональные данные пользователей могут храниться в&#160;сервере
      OpenLDAP или в&#160;любой реляционной СУБД, для&#160;которой подготовлен JDBC-интерфейс. Для&#160;слабовидящих
      людей Luwrain выводит текстовую информацию контрастным шрифтом в&#160;окне, отображаемом
      на&#160;экране при&#160;помощи сервера X.org и легковесного оконного менеджера.
    </p>
    <p>
      Luwrain &#x2014; это полностью свободный проект. Использование Luwrain не&#160;подразумевает
      оплаты и может выполняться без&#160;ограничений, если это не&#160;нарушает требований GNU&#160;Public
      License версии&#160;3. Тем&#160;не&#160;менее, авторы проекта были&#160;бы очень рады любой
      финансовой поддержке, поскольку она может помочь шире представить Luwrain среди мировых
      общественных организаций.
    </p>
    <p>Выберите раздел для продолжения чтения:</p>
    <ul>
      <li><a href="<?echo luwrain_link('/doc/about/');?>">Подробнее о проекте</a></li>
      <li><a href="<?echo luwrain_link('/doc/user/start/');?>">С чего начать?</a></li>
      <li><a href="<?echo luwrain_link('/download/distr/');?>">Загрузить ISO-образ</a></li>
      <li><a href="<?echo luwrain_link('/community/mailing-lists/');?>">Список рассылки</a></li>
      <li><a href="<?echo luwrain_link('/doc/contacts/');?>">Контакты</a></li>
    </ul>
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
