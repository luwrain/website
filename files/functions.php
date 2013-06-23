<?php

  function luwrain_top_menu()
  {
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
	    <a href="#">MENU &#9652;</a>
	  </div>
	  <div id = "closeMenu" class = "menuButton">
	    <a href="#">CLOSE &#9662;</a>
	  </div>
	</div>
	<div id = "headerPart">		
	  <ul class="headerList">
	    <li class="sectionHeader">
	      <div id = "leftMenu">
		<ul class="subMenu">
		  <li class="linkMenu">
		    <a href="#">Adapted version</a>
		  </li>
		  <li class="linkMenu">
		    <div id = "languageSelected">
		      <a href="#" class="font14" id = "selectedLanguageName">English &#9662;</a>
		    </div>
		  </li>
		  <li class="linkMenu">
		    <a href="#" class="font14 languageMenuItem hidden" id = "closeLanguageMenu">Close &#9652;</a>
		  </li>
		  <li class="linkMenu">
		    <a class="languageMenuItem hidden" href="#" id="russianLang">Русский</a>
		  </li>
		  <li class="linkMenu">
		    <a class="languageMenuItem hidden" href="#" id="engLang">English</a>
		  </li>
		  <li class="linkMenu">
		    <a class="languageMenuItem hidden" href="#" id="deutschLang">Deutsch</a>
		  </li>
		  <li class="linkMenu">
		    <a class="languageMenuItem hidden" href="#" id="franceLang">Français</a>
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
<?php
  }

  function luwrain_end_page()
  { 
?>
		  <h1>Documentation. H1</h1>
		</div>
		<!--fixme-->
	      </div>
	    </li>
	    <li class="sectionHeader">
	      <div id="mainMenu">
		<div id="mainMenuBorder">
		  <ul class="subMenu" id="mainMenuList">
		    <li class="linkMenu">
		      <a id = "downLoadLink" href="#" class="bold font18">DOWNLOAD</a>
		    </li>
		    <li class="linkMenu">
		      <a id = "docsLink" href="docs.xhtml">Documentation</a>
		    </li>
		    <li class="linkMenu">
		      <a href="#">Community</a>
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
		Design by <a href="#"><span class="blueColor">Strash</span></a>
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
