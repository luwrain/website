<?php
  include 'versions.php';

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
		    <a href="<?php echo luwrain_link('/doc/user/manual/');?>">Руководство пользователя</a>
		  </li>
		  <li class="linkMenuLast">
		    <a href="<?php echo luwrain_link('/doc/about/');?>">О проекте</a>
		  </li>
		  <li class="">
		    <ul class="subMenuSmall">
		      <li>
			<a href="<?php echo luwrain_link('/doc/faq/');?>">Часто задаваемые вопросы</a>
		      </li>
		      <li>
			<a href="<?php echo luwrain_link('/doc/legal/');?>">Правовой статус</a>
		      </li>
		      <li>
			<a href="<?php echo luwrain_link('/doc/roadmap/');?>">Дорожная карта</a>
		      </li>
		      <li>
			<a href="<?php echo luwrain_link('/doc/contacts/');?>">Контакты</a>
		      </li>
		      <li>
			<a href="<?php echo luwrain_link('/doc/authors/');?>">Авторы</a>
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
		    <a href="http://twitter.com/luwrain">Twitter</a>
		  </li>
		  <li class="linkMenu">
		    <a href="<?php echo luwrain_link('/community/mailing-lists/');?>">Списки рассылки</a>
		  </li>
		  <li class="linkMenu">
		    <a href="<?php echo luwrain_link('/community/publications/');?>">Публикации</a>
		  </li>
		</ul>
	      </div>
	    </li>
	    <li class="sectionMenu">
	      <div>
		<ul class="subMenu">
		  <li class="linkMenu">
		    <a href="<?php echo luwrain_link('/doc/new-app/');?>">Создание приложений</a>
		  </li>
		  <li class="linkMenu">
		    <a href="/api/">Luwrain API</a>
		  </li>
		  <li class="linkMenu">
		    <a href="<?php echo luwrain_link('/download/git/');?>">Git репозитории</a>
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
		    <a href="<?php echo luwrain_link('/doc/user/manual/');?>">User manual</a>
		  </li>
		  <li class="linkMenuLast">
		    <a href="<?php echo luwrain_link('/doc/about/');?>">About the project</a>
		  </li>
		  <li class="">
		    <ul class="subMenuSmall">
		      <li>
			<a href="<?php echo luwrain_link('/doc/faq/');?>">FAQ</a>
		      </li>
		      <li>
			<a href="<?php echo luwrain_link('/doc/legal/');?>">Legal notes</a>
		      </li>
		      <li>
			<a href="<?php echo luwrain_link('/doc/roadmap/');?>">Roadmap</a>
		      </li>
		      <li>
			<a href="<?php echo luwrain_link('/doc/contacts/');?>">Contact us</a>
		      </li>
		      <li>
			<a href="<?php echo luwrain_link('/doc/authors/');?>">Authors</a>
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
		    <a href="http://twitter.com/luwrain">Twitter</a>
		  </li>
		  <li class="linkMenu">
		    <a href="<?php echo luwrain_link('/community/mailing-lists/');?>">Mailing lists</a>
		  </li>
		  <li class="linkMenu">
		    <a href="<?php echo luwrain_link('/community/publications/');?>">Publications</a>
		  </li>
		</ul>
	      </div>
	    </li>
	    <li class="sectionMenu">
	      <div>
		<ul class="subMenu">
		  <li class="linkMenu">
		    <a href="<?php echo luwrain_link('/doc/new-app/');?>">Create an application</a>
		  </li>
		  <li class="linkMenu">
		    <a href="/api/">Luwrain API</a>
		  </li>
		  <li class="linkMenu">
		    <a href="<?php echo luwrain_link('/download/git/');?>">Git repositories</a>
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
		<span class="font14"><?php echo luwrain_current_lang() == 'ru'?'&#169; 2012&#x2013;2015 Разработчики Luwrain':'&#169; 2012&#x2013;2015 Luwrain developers'?></span>
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
      With accessible toolkit Luwrain, blind and visually-impaired people have a new way to be
      involved in the incredible world of information technologies. Luwrain doesn&#x27;t take
      a lot of time to learn, and aims to be useable on laptops, as well as desktop computers.
      You can treat our new idea as one more solution for everyone who needs a reliable and accessible
      companion for various types of work. The product is designed as a new platform for creating
      speech-enabled applications with a set of standard tools for easy access to web services,
      mail, news reading, etc.
    </p>
    <p>
      Luwrain is a set of software components on Java for accessible user interface construction.
      In contrast with widely popular screen reading solutions for graphical desktops, which
      actually are designed for control through a mouse and other pointing devices useful only
      for sighted users, Luwrain brings the information in the most suitable for the perception of
      blind people form. That means that the Luwrain user will always spend significantly less
      time than in an adapted GUI. We have created our environment for people who enjoy working
      effectively and time-efficiently.
    </p>
    <p>
      Luwrain can be with you everywhere! You may take it as a stand-alone operating system on
      Linux kernel and it will turn a laptop into elegant accessory for blind people. If you,
      your colleagues or members of your family need the operating system being already installed
      on your PC, you may take Luwrain just as an application. Luwrain will not require you to
      forbid the tools you used to work with previously and you can use it as a platform for
      creating and distributing accessible applications, even if you havn&#x27;t any experience
      in this area.
    </p>
    <p>
      Luwrain is a completely Free Software project, no fee is involved, and no restrictions
      of use and distribution exist, except in cases explicitly violating the terms of the GNU
      Public License ver. 3, as it was published by the Free Software Foundation. However, financial
      donations are still required to help us present our product across the world, and to introduce
      it to related social and distribution organizations. The team of developers hopes that
      Luwrain can increase the integration of disabled people into social life. <a href="<?php echo luwrain_link('/doc/about/');?>">Read
      more...</a>
    </p>
    <h2>Choose the&#160;section you want:</h2>
    <ul>
      <li><a href="<?php echo luwrain_link('/doc/user/manual/');?>">User manual</a></li>
      <li><a href="<?php echo luwrain_link('/community/mailing-lists/');?>">Subscribe to&#160;our mailing lists</a></li>
      <li><a href="<?php echo luwrain_link('/download/iso/');?>">Bootable ISO-images</a></li>
      <li>Distributions: <a href="<?php echo luwrain_link('/download/windows');?>">for&#160;Microsoft Windows</a>, <a href="<?php echo luwrain_link('/download/linux/');?>">for&#160;GNU/Linux</a></li>
      <li><a href="<?php echo luwrain_link('/doc/contacts/');?>">Our&#160;contacts</a></li>
    </ul>
<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
    <h1>&#x22;Мир доступных технологий!&#x22;</h1>
    <p>
      При помощи рабочего окружения Luwrain люди с нарушениями зрения могут расширить границы
      своего доступа к&#160;грандиозному миру информационных технологий. Luwrain не требует много
      времени для освоения и будет одинаково полезен на мобильных и настольных компьютерах. Мы
      хотим, чтобы наш проект стал новым решением для всех, кто нуждается в надёжном и доступном
      инструменте, пригодном для решения различных задач. Он проектируется как платформа для
      создания речевых приложений с набором стандартных утилит, предназначенных для доступа к
      веб, электронной почте, новостным ресурсам и т. д.
    </p>
    <p>
      Luwrain предлагает набор программных компонентов Java для построения особого типа невизуального
      интерфейса. В отличие от экранных чтецов, функционирующих в оконном окружении, ориентированного
      на работу при помощи мыши, Luwrain представляет информацию в виде, адаптированном для восприятия
      незрячих людей. Это означает, что на работу в Luwrain пользователю требуется времени существенно
      меньше, чем в озвученном оконном интерфейсе. Мы создаём нашу систему для тех, кто ведёт
      активный образ жизни и ценит экономию времени.
    </p>
    <p>
      Luwrain будет с вами всегда! Вариант поставки в виде самостоятельной операционной системы
      на ядре Linux превратит любой ноутбук в элегантный аксессуар для незрячего человека. Если
      вы, ваши коллеги или члены вашей семьи используют в своей работе операционную систему,
      которая уже установлена, вы можете запустить Luwrain просто как приложение. Luwrain не
      потребует от&#160;вас отказа от утилит, которые вы использовали ранее, и может быть платформой
      для создания адаптированных приложений, даже если у вас нет абсолютно никакого опыта в
      этой сфере.
    </p>
    <p>
      Luwrain &#x2014; это полностью свободный проект. Использование Luwrain не подразумевает
      оплаты и может выполняться без&#160;ограничений, если это не&#160;нарушает требований GNU&#160;Public
      License версии&#160;3. Авторы проекта были бы очень рады установлению новых рабочих контактов,
      поскольку это может помочь шире представить Luwrain среди мировых общественных организаций.
      <a href="<?php echo luwrain_link('/doc/about/');?>">Читать далее...</a>
    </p>
    <h2>Выберите интересующий Вас раздел:</h2>
    <ul>
      <li><a href="<?php echo luwrain_link('/doc/user/manual/');?>">Руководство пользователя</a></li>
      <li><a href="<?php echo luwrain_link('/community/mailing-lists/');?>">Подписаться на&#160;списки рассылки</a></li>
      <li><a href="<?php echo luwrain_link('/download/iso/');?>">Загрузочные ISO-образы</a></li>
      <li>Дистрибутивы: <a href="<?php echo luwrain_link('/download/windows');?>">для&#160;Microsoft Windows</a>, <a href="<?php echo luwrain_link('/download/linux/');?>">для&#160;GNU/Linux</a></li>
      <li><a href="<?php echo luwrain_link('/doc/contacts/');?>">Наши&#160;контакты</a></li>
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

  function luwrain_content_being_written()
  {
    if (luwrain_current_lang() == 'en')
      echo '                  <p><b>ATTENTION:</b> This page is still in work and may provide an incorrect or incomplete information.</p>'."\n";
    if (luwrain_current_lang() == 'ru')
      echo '                  <p><b>ВНИМАНИЕ:</b> Эта страница находится в разработке и может предоставлять некорректную или неполную информацию.</p>'."\n";
  }
?>

