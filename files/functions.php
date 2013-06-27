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
		    <a href="/doc/start/">С чего начать?</a>
		  </li>
		  <li class="linkMenu">
		    <a href="/doc/faq/">FAQ</a>
		  </li>
		  <li class="linkMenuLast">
		    <a href="/doc/resources/">Материалы</a>
		  </li>
		  <li class="">
		    <ul class="subMenuSmall">
		      <li>
			<a href="/api/">API</a>
		      </li>
		      <li>
			<a href="/community/mailing-list/">Дискуссионный лист</a>
		      </li>
		      <li>
			<a href="/community/bugs/">Сообщить об ошибке</a>
		      </li>
		      <li>
			<a href="/download/sources/">Исходный код</a>
		      </li>
		      <li>
			<a href="/doc/new-app/">Создать новое приложение</a>
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
		    <a href="/doc/partners/">Для партнёров</a>
		  </li>
		  <li class="linkMenu">
		    <a href="/doc/sponsors/">Для спонсоров</a>
		  </li>
		  <li class="linkMenu">
		    <a href="/doc/legal/">Лицензия</a>
		  </li>
		</ul>
	      </div>
	    </li>
	    <li class="sectionMenu">
	      <div>
		<ul class="subMenu">
		  <li class="linkMenu">
		    <a href="/doc/about/">О проекте</a>
		  </li>
		  <li class="linkMenu">
		    <a href="/doc/authors/">Авторы</a>
		  </li>
		  <li class="linkMenu">
		    <a href="/doc/contacts/">Контакты</a>
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
		    <a href="/doc/start/">Getting started</a>
		  </li>
		  <li class="linkMenu">
		    <a href="/doc/faq/">FAQ</a>
		  </li>
		  <li class="linkMenuLast">
		    <a href="/doc/resources/">Resources</a>
		  </li>
		  <li class="">
		    <ul class="subMenuSmall">
		      <li>
			<a href="/api/">API</a>
		      </li>
		      <li>
			<a href="/community/mailing-list/">Mailing list</a>
		      </li>
		      <li>
			<a href="/community/bugs/">Report a bug</a>
		      </li>
		      <li>
			<a href="/download/sources/">Source code</a>
		      </li>
		      <li>
			<a href="/doc/new-app/">Your own application</a>
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
		    <a href="/doc/partners/">Be a partner</a>
		  </li>
		  <li class="linkMenu">
		    <a href="/doc/sponsors/">Be a sponsor</a>
		  </li>
		  <li class="linkMenu">
		    <a href="/doc/legal/">Legal notes</a>
		  </li>
		</ul>
	      </div>
	    </li>
	    <li class="sectionMenu">
	      <div>
		<ul class="subMenu">
		  <li class="linkMenu">
		    <a href="/doc/about/">About</a>
		  </li>
		  <li class="linkMenu">
		    <a href="/doc/authors/">Authors</a>
		  </li>
		  <li class="linkMenu">
		    <a href="/doc/contacts/">Contact us</a>
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
		<div onclick = "document.location = 'index.xhtml';" id = "logoLink">
		  <ul class="subMenu" id = "logoLinkUl">
		    <li>
		      <span class="font30 bold">LUWRAIN</span>
		    </li>
		    <li>
		      <span class="italic font14">The territory</span>
		    </li>
		    <li>
		      <span class="italic font14">of a compelling accessibility</span>
		    </li>
		  </ul>
		</div>
	      </div>
	      <div id = "mainPart">
		<div id = "insidePageText">
<?php
  }

  function luwrain_end_page()
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
	      <div id = "copyright">
		<span class="font16">© Luwrain 2013</span>
	      </div>
	    </li>
	    <li class="sectionFooter">
	      <div id = "terms" class="blueColor">
		<a href="#" class="blueColor">Terms of use</a>
	      </div>
	    </li>
	    <li class="sectionFooter">
	      <div id="design">
		Design by <a href="http://strash.ru"><span class="blueColor">Strash</span></a>
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
    <p>
      With accessible operating system Luwrain blind and visually-impaired persons get one more
      way to be involved in the incredible world of information technologies. Luwrain doesn&apos;t
      take a lot of time to study and aims to be useful on laptops as well as on usual desktop
      computers. You can treat our new idea as one more solution for everybody who needs reliable
      and accessible companion for various types of work. The product is designed as new platform
      for creating speech-enabled applications with set of standard tools for easy web access,
      mail and news reading , etc.
    </p>
    <p>
      Luwrain is a linux-based system with special type of user interface constructed on Java
      technologies. In contrast with widely popular screen reading solutions for graphical desktops
      which actually were designed for control basically by mouse and other pointing devices,
      Luwrain follows special conception offering representation of every working object from
      scratch in text form. That means with Luwrain user will always spend significantly less
      time than in an adapted GUI. We have created our environment for people with active style
      of life who appreciate time economy getting their job done.
    </p>
    <p>
      In Luwrain Java user space gathers together a number of system services taken for providing
      flexible core and good level of compatibility. Information exchanging between them is performed
      mostly through D-Bus activity. It brings to a user information about network structure
      from Network Manager and transmits commands to speech server purposed for Text-To-Speech
      engines manipulating. Personal user data can be stored in OpenLDAP or in any choice of
      SQL server which has proper JDBC interface. For low-vision users Luwrain opens full-screen
      window with all corresponding textual data written in contrast colours. That window is
      drawn by X.org server using special window manager created as an additional part of Luwrain
      project.
    </p>
    <p>
      Luwrain is a completely Free Software project, no fee is implied, no restrictions of using
      and distribution are present, except of cases explicitly violating the terms of GNU Public
      License ver. 3 as it was published by Free Software Foundation. However, money donations
      are still required to help us present our product wider over the world and introduce it
      to related social and distribution organizations. The team of developers hopes Luwrain
      can increase the integration of disabled persons into social life.
    </p>
  </body>
</html>
<?php
  }
?>
