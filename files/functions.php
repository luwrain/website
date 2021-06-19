<?php
// Copyright 2012-2021 Michael Pozhidaev <msp@luwrain.org>
// The LUWRAIN Project, GPL v.3

include 'versions.php';
  include 'base.php';
  include "adapted.php";

function luwrain_top_menu() {
?>
      <div id="topPart">
        <div class="row top-part-content">
          <div class="col-md-4">
            <a href="<?php echo luwrain_link('/doc/user/start/');?>"><?php echo lwr_lang() == 'ru'?'С чего начать?':'Getting started';?></a>
            <a href="<?php echo luwrain_link('/download/');?>"><?php echo lwr_lang() == 'ru'?'Загрузить':'Downloads';?></a>
            <a href="<?php echo lwr_link('/community/');?>"><?php echo lwr_lang() == 'ru'?'Сообщество и материалы:':'Community and materials:';?></a>
            <ul class="subMenuSmall">
              <li>
                <a href="<?php echo luwrain_link('/community/massmedia/');?>"><?php echo lwr_lang() == 'ru'?'Статьи и беседы':'Media and talks';?></a>
              </li>
              <li>
                <a href="<?php echo luwrain_link('/community/events/');?>"><?php echo lwr_lang() == 'ru'?'Презентации и мероприятия':'Presentations and events';?></a>
              </li>
              <li>
                <a href="<?php echo luwrain_link('/community/mailing-lists/');?>"><?php echo lwr_lang() == 'ru'?'Списки рассылок':'Mailing lists';?></a>
              </li>
              <li>
                <a href="http://wiki.luwrain.org/"><?php echo lwr_lang() == 'ru'?'Вики':'Wiki';?></a>
              </li>
              <li>
                <a href="https://luwrain.org/javadoc/">Javadoc</a>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <a href="https://twitter.com/luwrain"><?php echo lwr_lang() == 'ru'?'Твиттер':'Twitter';?></a>
            <a href="https://www.youtube.com/channel/UCY2ZRqeBTH4nhdPG1Vjl-6g">YouTube</a>
            <a href="https://github.com/luwrain/">GitHub</a>
          </div>
          <div class="col-md-4">
            <a href="<?php echo lwr_link('/doc/faq/');?>"><?php echo lwr_lang() == 'ru'?'Часто задаваемые вопросы':'FAQ';?></a>
            <a href="<?php echo luwrain_link('/doc/legal/');?>"><?php echo lwr_lang() == 'ru'?'Правовой статус':'Legal notes';?></a>
            <a href="<?php echo luwrain_link('/doc/contacts/');?>"><?php echo lwr_lang() == 'ru'?'Контакты':'Contact us';?></a>
          </div>
        </div>
        <div id="menuSwitch">
          <div id="openMenu" class="menuButton">
            <a href="#"><?php echo lwr_lang() == 'ru'?'МЕНЮ':'MENU';?> &#9652;</a>
          </div>
          <div id="closeMenu" class="menuButton">
            <a href="#"><?php echo lwr_lang() == 'ru'?'ЗАКРЫТЬ':'CLOSE';?> &#9662;</a>
          </div>
        </div>
      </div>
<?php
}

function luwrain_begin_page($path, $title, $isMainPage)
{	   
  if (lwr_mode() == 'adapted') {
    lwr_begin_page_adapted($path, $title);
    return;
  }
?>
<!DOCTYPE html>
<html lang="<?php echo lwr_lang();?>">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="<?php echo lwr_keywords();?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<?php
      echo '    <title>'.lwr_title($title).'</title>'."\n";
?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link type="image/x-icon" href="/Images/favicon.ico" rel="icon" />
    <link media="all" rel="stylesheet" type="text/css" href="/Content/luwrain.css" />
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
    <script src="<?php if (lwr_lang() == 'en') echo 'js/frames-en.js'; if (lwr_lang() == 'ru') echo 'js/frames-ru.js'; ?>"></script>
    <script src="/js/core.js"></script>
    <script>
      jQuery(document).ready(function () {
        OnReady();
        $('#docsLink').addClass("lightBlueColor");
      });
    </script>
  </head>
  <body>
    <div class="container">
<?php luwrain_top_menu(); ?>
      <div id="headerPart" class="row">
        <div class="col-md-3">
          <ul class="subMenu">
            <li class="linkMenu">
<?php echo '              <a href="'.luwrain_link_ext1($path, lwr_lang(), 'adapted').'">'.(lwr_lang() == 'ru'?'Версия для слабовидящих':'Adapted/mobile version')."</a>\n"; ?>
            </li>
            <li class="linkMenu">
              <div id="languageSelected">
                <a href="<?php echo luwrain_link_ext1($path, lwr_lang() == 'ru'?'en':'ru', 'normal');?>" class="font14" id="selectedLanguageName"><?php echo lwr_lang() == 'ru'?'English':'Russian';?></a>
              </div>
            </li>
          </ul>
        </div>
        <div class="col-md-6">
          <div id="logo">
            <div onclick = "document.location = '<?php echo Luwrain_link('/index.php');?>';" id = "logoLink">
              <ul class="subMenu" id="logoLinkUl">
                <li>
                  <span class="font30 bold">LUWRAIN</span>
                </li>
                <li>
                  <span class="italic font14"><?php echo lwr_lang() == 'ru'?'Платформа невизуальных приложений':'A platform for the creation of apps';?></span>
                </li>
                <li>
                  <span class="italic font14"><?php if (lwr_lang() == 'en') echo ' for the blind and partially-sighted';?></span>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div id="mainMenu">
            <div id="mainMenuBorder">
              <ul class="subMenu" id="mainMenuList">
                <li class="linkMenu">
                  <a id = "downLoadLink" href="<?php echo luwrain_link('/products/');?>" class="bold font18"><?php echo lwr_lang() == 'ru'?'Продукты':'Products';?></a>
                </li>
                <li class="linkMenu">
                  <a id = "docsLink" href="<?php echo luwrain_link('/doc/');?>"><?php echo lwr_lang() == 'ru'?'Документация':'Documentation';?></a>
                </li>
                <li class="linkMenu">
                  <a href="<?php echo luwrain_link('/community/');?>"><?php echo lwr_lang() == 'ru'?'Интересное':'Interesting';?></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div id="mainPart">
<?php

if(!$isMainPage)
{

?>
        <div id="insidePageText">
<?php

		}
}

function luwrain_end_page($path, $isMainPage) {
  if (lwr_mode() == 'adapted') { 
    lwr_end_page_adapted($path);
    return;
  }

if (!$isMainPage) {
?>
        </div>
<?php
}

?>
      </div>
      <div class="row" id="footerPart">
        <div class="col-md-4"><span class="font14"><?php echo lwr_lang() == 'ru'?'&#169; 2012&#x2013;2021 Проект?&#160;LUWRAIN':'&#169; 2012&#x2013;2021 The&#160;LUWRAIN project'?></span></div>
        <div class="col-md-4"><a class="blueColor" href="<?php echo htmlspecialchars('https://validator.w3.org/nu/?doc='.urlencode('https://luwrain.org'.(strlen($path) == 0 || $path[0] != '/'?'/':'').$path.'?mode=normal&lang='.lwr_lang())); ?>"><?php echo lwr_lang() == 'ru'?'Проверить при помощи w3.org':'Verify with w3.org';?></a></div>
        <div class="col-md-4"><?php echo lwr_lang() == 'ru'?'Дизайн от':'Design by';?> <a href="http://strash.ru"><span class="blueColor">Strash</span></a></div>
      </div>
    </div>
  </body>
</html>
<?php
}

function lwr_begin_page($path, $title)
{
return luwrain_begin_page($path, $title, false);
}


function lwr_end_page($path)
{
return luwrain_end_page($path, false);
}

function luwrain_content_not_written()
{
    if (lwr_lang() == 'en')
        echo '                  <p>We apologize, but this page does not have any content yet. Please, try visit it later.</p>'."\n";
    if (lwr_lang() == 'ru')
        echo '                  <p>Мы приносим свои извинения, но текст этой страницы в настоящий момент не подготовлен.</p>'."\n";
}

function luwrain_content_being_written()
{
    if (lwr_lang() == 'en')
        echo '                  <p><b>ATTENTION:</b> This page is still in work and may provide an incorrect or incomplete information.</p>'."\n";
    if (lwr_lang() == 'ru')
        echo '                  <p><b>ВНИМАНИЕ:</b> Эта страница находится в разработке и может предоставлять некорректную или неполную информацию.</p>'."\n";
}
?>
