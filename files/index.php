<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Luwrain</title>
    <link type="image/x-icon" href="Images/favicon.ico" rel="icon"/>
    <link media="all" rel="stylesheet" type="text/css" href="Content/luwrain.css" />
    <script type="text/javascript" src="Scripts/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="Scripts/index.js"></script>
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
	<div id = "topPart">
	  <ul class="topMenu">
	    <li class="sectionMenu">
	      <div>
		<ul class="subMenu">
		  <li class="linkMenu">
		    <a href="#">Try now</a>
		  </li>
		  <li class="linkMenu">
		    <a href="#">User manual</a>
		  </li>
		  <li class="linkMenuLast">
		    <a href="#">For developers</a>
		  </li>
		  <li class="">
		    <ul class="subMenuSmall">
		      <li>
			<a href="#">Source code</a>
		      </li>
		      <li>
			<a href="#">New application</a>
		      </li>
		      <li>
			<a href="#">Get involved</a>
		      </li>
		      <li>
			<a href="#">Web services support</a>
		      </li>
		      <li>
			<a href="#">API</a>
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
		    <a href="#">Philosophy</a>
		  </li>
		  <li class="linkMenu">
		    <a href="#">Inspiration</a>
		  </li>
		  <li class="linkMenu">
		    <a href="#">FAQ</a>
		  </li>
		</ul>
	      </div>
	    </li>
	    <li class="sectionMenu">
	      <div>
		<ul class="subMenu">
		  <li class="linkMenu">
		    <a href="#">Be a partner</a>
		  </li>
		  <li class="linkMenu">
		    <a href="#">Be a sponsor</a>
		  </li>
		  <li class="linkMenu">
		    <a href="#">Contact us</a>
		  </li>
		</ul>
	      </div>
	    </li>
	  </ul>
	</div>
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
		<input class="hidden" id="hiddenPartNumber"></input>
		<div id ="accEnvir" class="font20">
		  The accessible environment Luwrain
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
