<?php include "functions.php";?>
<?php if (luwrain_current_mode() == 'adapted') luwrain_adapted_main_page(); else { ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>The accessible environment Luwrain</title>
    <link type="image/x-icon" href="Images/favicon.ico" rel="icon"/>
    <link media="all" rel="stylesheet" type="text/css" href="Content/luwrain.css" />
    <script type="text/javascript" src="Scripts/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="Scripts/<?php if (luwrain_current_lang() == 'en') echo 'index-en.js'; if (luwrain_current_lang() == 'ru') echo 'index-ru.js'; ?>"></script>
    <script type="text/javascript" src="Scripts/core.js"></script>
    <script type="text/javascript">
      jQuery(document).ready(function () {
      OnReady();
      OnReadyIndex();
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
  echo '		    <a href="'.luwrain_link_ext1('/index.php', luwrain_current_lang(), 'adapted').'">'.(luwrain_current_lang() == 'ru'?'Версия для слабовидящих':'Adapted/mobile version')."</a>\n";
?>
		  </li>
		  <li class="linkMenu">
		    <div id = "languageSelected">
		      <a href="#" class="font14" id = "selectedLanguageName"><?php echo luwrain_current_lang() == 'ru'?'Русский':'English';?> &#9662;</a>
		    </div>
		  </li>
		  <li class="linkMenu">
		    <a href="#" class="font14 languageMenuItem hidden" id = "closeLanguageMenu">Close &#9652;</a>
		  </li>
		  <li class="linkMenu">
		    <a class="languageMenuItem hidden" href="<?php echo luwrain_link_ext1('/index.php', 'en', luwrain_current_mode());?>" id="engLang">English</a>
		  </li>
		  <li class="linkMenu">
		    <a class="languageMenuItem hidden" href="<?php echo luwrain_link_ext1('/index.php', 'ru', luwrain_current_mode());?>>" id="russianLang">Russian</a>
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
		<input class="hidden" id="hiddenPartNumber"></input>
		<div id ="accEnvir" class="font20">
		  <?php echo luwrain_current_lang() == 'ru'?'Адаптированная среда Luwrain':'The accessible environment Luwrain';?>
		</div>
		<div id = "picContent">
		  <!--    1    -->
		  <div id = "part1">
		    <div id = "imageDiv">
		    </div>
		    <div id ="textUnderPic"></div>
		  </div> 
		  <!--    1 more   -->
		  <div id = "part1more" class="">
		    <div id ="accPlatform">
		    </div>
		    <div id="text1more" class="darkGrey">
		    </div>
		  </div> 
		</div>
		<div id="buttonContent">
		  <ul>
		    <li>
		      <button class="twoButton heavyButton" id = "firstButton" >
		      </button>
		    </li>
		    <li id = "orLi">
		      <span>or</span>
		    </li>
		    <li>
		      <button class="twoButton lightButton" id = "secondButton" onclick="SecondButtonOnClick();">
			<span></span>
		      </button>
		    </li>
		  </ul>
		</div>
		<div id = "navigation">
		  <ul>
		    <li>
		      <a href="#" class="blueColor font40" id="nav1">•</a>
		    </li>
		    <li>
		      <a href="#" class="lightGrey font40" id="nav2">•</a>
		    </li>
		    <li>
		      <a href="#" class="lightGrey font40" id="nav3">•</a>
		    </li>
		    <li>
		      <a href="#" class="lightGrey font40" id="nav4">•</a>
		    </li>
		  </ul>
		</div>
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
		      <a id = "docsLink" href="<?php echo luwrain_link('/doc/');?>"><?php echo luwrain_current_lang() == 'ru'?'Документация':'Documentation'?></a>
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
?>
