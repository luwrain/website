<?php
  include 'versions.php';
    include 'base.php';

function luwrain_top_menu()
{
?>
<div id="topPart">
    <div class="row top-part-content">
        <div class="col-md-4">
            <a href="<?php echo luwrain_link('/doc/user/start/');?>"><?php echo luwrain_current_lang() == 'ru'?'С чего начать?':'Getting started';?></a>
            <a href="<?php echo luwrain_link('/doc/user/manual/');?>"><?php echo luwrain_current_lang() == 'ru'?'Руководство пользователя':'User manual';?></a>
            <a href="<?php echo luwrain_link('/doc/about/');?>"><?php echo luwrain_current_lang() == 'ru'?'Всё о нас':'All about us';?></a>
            <ul class="subMenuSmall">
                <li>
            <a href="https://www.youtube.com/channel/UCY2ZRqeBTH4nhdPG1Vjl-6g">YouTube</a>
                </li>
                <li>
            <a href="http://twitter.com/luwrain">Twitter</a>
                </li>
                <li>
            <a href="https://www.instagram.com/luwrain/">Instagram</a>
                </li>
                <li>
            <a href="<?php echo luwrain_link('/resources/');?>"><?php echo luwrain_current_lang() == 'ru'?'...ещё':'...more';?></a>
                </li>
            </ul>
        </div>
        <div class="col-md-4">
            <a href="<?php echo luwrain_link('/community/mailing-lists/');?>"><?php echo luwrain_current_lang() == 'ru'?'Списки рассылок':'Mailing lists';?></a>
            <a href="<?php echo luwrain_link('/doc/faq/');?>">FAQ</a>
                        <a href="<?php echo luwrain_link('/doc/legal/');?>"><?php echo luwrain_current_lang() == 'ru'?'Правовой статус':'Legal notice';?></a>
        </div>
        <div class="col-md-4">
<a href="<?php echo luwrain_link('/community/massmedia/');?>"><?php echo luwrain_current_lang() == 'ru'?'Пресса о нас':'Mass media about us';?></a>
            <a href="<?php echo luwrain_link('/community/publications/');?>"><?php echo luwrain_current_lang() == 'ru'?'Публикации':'Publications';?></a>
                    <a href="<?php echo luwrain_link('/doc/contacts/');?>"><?php echo luwrain_current_lang() == 'ru'?'Контакты':'Contact us';?></a>
        </div>
    </div>
    <div id="menuSwitch">
        <div id="openMenu" class="menuButton">
            <a href="#"><?php echo luwrain_current_lang() == 'ru'?'МЕНЮ':'MENU';?> &#9652;</a>
        </div>
        <div id="closeMenu" class="menuButton">
            <a href="#"><?php echo luwrain_current_lang() == 'ru'?'ЗАКРЫТЬ':'CLOSE';?> &#9662;</a>
        </div>
    </div>
</div>
<?php
}

function luwrain_begin_page($path, $title, $isMainPage)
{	   
    if (luwrain_current_mode() == 'adapted')
    {
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="<?php echo luwrain_current_lang();?>">
  <head>
    <!-- <meta charset="utf-8">-->
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
        return;
    }
        ?>
        <!DOCTYPE html>
        <html lang="<?php echo luwrain_current_lang();?>">
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <?php
    echo '    <title>'.lwr_title($title).'</title>'."\n";
            ?>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
            <link type="image/x-icon" href="/Images/favicon.ico" rel="icon" />
            <link media="all" rel="stylesheet" type="text/css" href="/Content/luwrain.css" />
            <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
            <script type="text/javascript" src="<?php if (luwrain_current_lang() == 'en') echo 'js/frames-en.js'; if (luwrain_current_lang() == 'ru') echo 'js/frames-ru.js'; ?>"></script>
            <script type="text/javascript" src="/js/core.js"></script>
            <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>-->
            <script type="text/javascript">
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
                                <?php  echo ' <a href="'.luwrain_link_ext1($path, luwrain_current_lang(), 'adapted').'">'.(luwrain_current_lang() == 'ru'?'Версия для слабовидящих':'Adapted/mobile version')."</a>\n"; ?>
                            </li>
                            <li class="linkMenu">
                                <div id="languageSelected">
                                    <a href="<?php echo luwrain_link_ext1($path, luwrain_current_lang() == 'ru'?'en':'ru', 'normal');?>" class="font14" id="selectedLanguageName"><?php echo luwrain_current_lang() == 'ru'?'English':'Russian';?></a>
                                </div>
				                            </li>
<!--
                            <li class="linkMenu">
                                <a href="#" class="font14 languageMenuItem hidden-not-important" id="closeLanguageMenu"><?php echo luwrain_current_lang() == 'ru'?'Закрыть':'Close'?> &#9652;</a>
                            </li>
                            <li class="linkMenu">
                                <a class="languageMenuItem hidden-not-important" href="<?php echo luwrain_link_ext1($path, 'en', luwrain_current_mode());?>" id="engLang">English</a>
                            </li>
                            <li class="linkMenu">
                                <a class="languageMenuItem hidden-not-important" href="<?php echo luwrain_link_ext1($path, 'ru', luwrain_current_mode());?>" id="russianLang">Russian</a>
                            </li>
			    -->
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
                                        <span class="italic font14"><?php echo luwrain_current_lang() == 'ru'?'Платформа невизуальных приложений':'A platform for the creation of apps';?></span>
                                    </li>
                                    <li>
                                        <span class="italic font14"><?php if (luwrain_current_lang() == 'en') echo ' for the blind and partially-sighted';?></span>
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
                                            <a id = "downLoadLink" href="<?php echo luwrain_link('/products/');?>" class="bold font18"><?php echo luwrain_current_lang() == 'ru'?'Продукты':'Products';?></a>
                                        </li>
                                        <li class="linkMenu">
                                            <a id = "docsLink" href="<?php echo luwrain_link('/doc/');?>"><?php echo luwrain_current_lang() == 'ru'?'Документация':'Documentation';?></a>
                                        </li>
                                        <li class="linkMenu">
                                            <a href="<?php echo luwrain_link('/community/');?>"><?php echo luwrain_current_lang() == 'ru'?'Интересное':'Interesting';?></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                    </div>
                </div>
                <div id="mainPart">
                <?php if(!$isMainPage){ ?>
                    <div id="insidePageText">
                <?php }?>
        <?php
}

function luwrain_end_page($path, $isMainPage)
{ 
    if (luwrain_current_mode() == 'adapted') { 
?>
    <hr/>
    <?php echo luwrain_current_lang() == 'ru'?'&#169; 2012&#x2013;2019 Разработчики LUWRAIN':'&#169; 2012&#x2013;2019 LUWRAIN developers'?><br/>
        <a href="http://validator.w3.org/check?uri=referer">Проверить при помощи w3.org</a><br/>
  </body>
</html>
<?php
return; }
?>
		</div>
		
    <div class="row" id="footerPart">
      <div class="col-md-4"><span class="font14"><?php echo luwrain_current_lang() == 'ru'?'&#169; 2012&#x2013;2019 Разработчики LUWRAIN':'&#169; 2012&#x2013;2019 LUWRAIN developers'?></span></div>
      <div class="col-md-4"><a class="blueColor" href="http://validator.w3.org/check?uri=referer"><?php echo luwrain_current_lang() == 'ru'?'Проверить при помощи w3.org':'Verify with w3.org';?></a></div>
      <div class="col-md-4"><?php echo luwrain_current_lang() == 'ru'?'Дизайн от':'Design by';?> <a href="http://strash.ru"><span class="blueColor">Strash</span></a></div>
    </div>
    </div>
    <?php if(!$isMainPage){ ?>
        </div>
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
