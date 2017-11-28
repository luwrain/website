<?php
  include 'versions.php';

function luwrain_current_lang()
{
    return array_key_exists('lang', $_GET)?$_GET['lang']:'ru';
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

function lwr_title($value)
{
if ($value == '')
return 'LUWRAIN';
return $value.' &#x2014; LUWRAIN';
}

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
            <a href="<?php echo luwrain_link('/community/video/');?>">YouTube</a>
                </li>
                <li>
            <a href="http://twitter.com/luwrain"><?php echo luwrain_current_lang() == 'ru'?'Твиттер':'Twitter';?></a>
                </li>
                <li>
            <a href="https://github.com/luwrain/">Github</a>
                </li>
                <li>
            <a href="http://wiki.luwrain.org"><?php echo luwrain_current_lang() == 'ru'?'Вики':'Wiki';?></a>
                </li>
                <li>
            <a href="<?php echo luwrain_link('/community/mailing-lists/');?>"><?php echo luwrain_current_lang() == 'ru'?'Списки рассылок':'Mailing lists';?></a>
                </li>
                <li>
            <a href="<?php echo luwrain_link('/resources/');?>"><?php echo luwrain_current_lang() == 'ru'?'...ещё':'...more';?></a>
                </li>
            </ul>
        </div>
        <div class="col-md-4">
            <a href="<?php echo luwrain_link('/products/education/');?>"><?php echo luwrain_current_lang() == 'ru'?'Для образования':'For education';?></a>
            <a href="<?php echo luwrain_link('/community/mailing-lists/');?>"><?php echo luwrain_current_lang() == 'ru'?'Для коммерческих компаний':'For business';?></a>
                        <a href="<?php echo luwrain_link('/doc/legal/');?>"><?php echo luwrain_current_lang() == 'ru'?'Правовой статус':'Legal notice';?></a>
        </div>
        <div class="col-md-4">
<a href="<?php echo luwrain_link('/community/massmedia/');?>"><?php echo luwrain_current_lang() == 'ru'?'Пресса о нас':'Mass media about us';?></a>
            <a href="<?php echo luwrain_link('/community/album/');?>"><?php echo luwrain_current_lang() == 'ru'?'Фотоальбом':'Album';?></a>
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
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <?php
        echo '    <title>'.lwr_title($title).'</title>'."\n";
    ?>
</head>
<body>
    <b><a href="<?php echo luwrain_link('/products/');?>"><?php echo luwrain_current_lang() == 'ru'?'Продукты':'Products';?></a></b> |
    <b><a href="<?php echo luwrain_link('/doc/');?>"><?php echo luwrain_current_lang() == 'ru'?'Документация':'Documentation';?></a></b> |
    <b><a href="<?php echo luwrain_link('/community/');?>"><?php echo luwrain_current_lang() == 'ru'?'Интересное':'Interesting';?></a></b> |
    <a href="<?php echo luwrain_link_ext1($path, luwrain_current_lang(), 'normal');?>"><?php echo luwrain_current_lang() == 'ru'?'Полная версия':'Normal version';?></a><br />
    <hr />
    <a href="<?php echo luwrain_link_ext1($path, 'en', luwrain_current_mode());?>">EN</a> |
    <a href="<?php echo luwrain_link_ext1($path, 'ru', luwrain_current_mode());?>">RU</a><br />
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
            <script type="text/javascript" src="<?php if (luwrain_current_lang() == 'en') echo 'Scripts/index-en.js'; if (luwrain_current_lang() == 'ru') echo 'js/frames-ru.js'; ?>"></script>
            <script type="text/javascript" src="/Scripts/core.js"></script>
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
                                    <a href="#" class="font14" id="selectedLanguageName"><?php echo luwrain_current_lang() == 'ru'?'Русский':'English';?> &#9662;</a>
                                </div>
                            </li>
                            <li class="linkMenu">
                                <a href="#" class="font14 languageMenuItem hidden-not-important" id="closeLanguageMenu"><?php echo luwrain_current_lang() == 'ru'?'Закрыть':'Close'?> &#9652;</a>
                            </li>
                            <li class="linkMenu">
                                <a class="languageMenuItem hidden-not-important" href="<?php echo luwrain_link_ext1($path, 'en', luwrain_current_mode());?>" id="engLang">English</a>
                            </li>
                            <li class="linkMenu">
                                <a class="languageMenuItem hidden-not-important" href="<?php echo luwrain_link_ext1($path, 'ru', luwrain_current_mode());?>" id="russianLang">Russian</a>
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
</body>
</html>
<?php

return; }?>
		</div>
		
    <div class="row" id="footerPart">
      <div class="col-md-4"><span class="font14"><?php echo luwrain_current_lang() == 'ru'?'&#169; 2012&#x2013;2017 Разработчики LUWRAIN':'&#169; 2012&#x2013;2017 LUWRAIN developers'?></span></div>
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

function luwrain_adapted_main_page()
{
        ?>
        <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
        <html>
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
            <title><?php echo lwr_title('');?></title>
        </head>
        <body>
            <b><a href="<?php echo luwrain_link('/products/');?>"><?php echo luwrain_current_lang() == 'ru'?'Продукты':'Products';?></a></b> |
    <b><a href="<?php echo luwrain_link('/doc/');?>"><?php echo luwrain_current_lang() == 'ru'?'Документация':'Documentation';?></a></b> |
    <b><a href="<?php echo luwrain_link('/community/');?>"><?php echo luwrain_current_lang() == 'ru'?'Сообщество':'Community';?></a></b> |
    <a href="<?php echo luwrain_link_ext1($path, luwrain_current_lang(), 'normal');?>"><?php echo luwrain_current_lang() == 'ru'?'Полная версия':'Normal version';?></a><br />
            <hr />
            <a href="<?php echo luwrain_link_ext1('/index.php', 'en', luwrain_current_mode());?>">EN</a> |
    <a href="<?php echo luwrain_link_ext1('/index.php', 'ru', luwrain_current_mode());?>">RU</a><br />
            <div style="height: 16px;"></div>
            <?php if (luwrain_current_lang() == 'en') {?>
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
            <?php }?>
            <?php if (luwrain_current_lang() == 'ru') {?>
            <h1>Платформа невизуальных приложений</h1>
            <p>
                При помощи рабочего окружения LUWRAIN люди с нарушениями зрения могут расширить границы
      своего доступа к&#160;грандиозному миру информационных технологий. LUWRAIN не требует много
      времени для освоения и будет одинаково полезен на мобильных и настольных компьютерах. Мы
      хотим, чтобы наш проект стал новым решением для всех, кто нуждается в надёжном и доступном
      инструменте, пригодном для решения различных задач. Он проектируется как платформа для
      создания речевых приложений с набором стандартных утилит, предназначенных для доступа к
      веб, электронной почте, новостным ресурсам и т. д.
            </p>
            <p>
                LUWRAIN предлагает набор программных компонентов Java для построения особого типа невизуального
      интерфейса. В отличие от экранных чтецов, функционирующих в оконном окружении, ориентированного
      на работу при помощи мыши, LUWRAIN представляет информацию в виде, адаптированном для восприятия
      незрячих людей. Это означает, что на работу в LUWRAIN пользователю требуется времени существенно
      меньше, чем в озвученном оконном интерфейсе. Мы создаём нашу систему для тех, кто ведёт
      активный образ жизни и ценит экономию времени.
            </p>
            <p>
                LUWRAIN будет с вами всегда! Вариант поставки в виде самостоятельной операционной системы
      на ядре Linux превратит любой ноутбук в элегантный аксессуар для незрячего человека. Если
      вы, ваши коллеги или члены вашей семьи используют в своей работе операционную систему,
      которая уже установлена, вы можете запустить LUWRAIN просто как приложение. LUWRAIN не
      потребует от&#160;вас отказа от утилит, которые вы использовали ранее, и может быть платформой
      для создания адаптированных приложений, даже если у вас нет абсолютно никакого опыта в
      этой сфере.
            </p>
            <p>
                LUWRAIN &#x2014; это полностью свободный проект. Использование LUWRAIN не подразумевает
      оплаты и может выполняться без&#160;ограничений, если это не&#160;нарушает требований GNU&#160;Public
      License версии&#160;3. Авторы проекта были бы очень рады установлению новых рабочих контактов,
      поскольку это может помочь шире представить LUWRAIN среди мировых общественных организаций.
      <a href="<?php echo luwrain_link('/doc/about/');?>">Читать далее...</a>
            </p>
            <h2>Выберите интересующий вас раздел:</h2>
            <ul>
                <li><a href="<?php echo luwrain_link('/doc/user/start/');?>">С чего начать?</a></li>
                <li><a href="<?php echo luwrain_link('/doc/user/manual/');?>">Руководство пользователя</a></li>
                <li><a href="<?php echo luwrain_link('/community/mailing-lists/');?>">Подписаться на&#160;списки рассылок</a></li>
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

