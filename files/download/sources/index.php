<?php include "../../functions.php"; luwrain_begin_page('/download/sources/index.php', luwrain_current_lang() == 'ru'?'Исходный код':'Source code');?>
<?php if (luwrain_current_lang() == 'en') {?>
                  <h1>Luwrain source code</h1>
                  <p>
                    Luwrain source code is published in&#160;form of&#160;tarball archive and accessible through
                    the&#160;git-repository on&#160;<a target="_blank" href="http://github.com/luwrain/">github.com
                    service</a>. All materials are provided under the&#160;legal terms described on&#160;the&#160;<a href="<?echo luwrain_link('/doc/legal/');?>">corresponding
                    page</a> of&#160;our website. The&#160;current section contains links only to&#160;source
                    materials of&#160;Luwrain environment itself but there is also <a href="<?echo luwrain_link('/community/extensions/');?>">a&#160;set
                    of&#160;extensions</a> which we consider as&#160;a&#160;part of our&#160;community in&#160;the&#160;hope
                    to&#160;attract more attention of&#160;our&#160;users to&#160;them.
                  </p>
                  <p>Latest Luwrain version: <b>0.2.3</b> (published on&#160;February 28, 2014)</p>
                  <h2>Sources tarball</h2>
                  <p>
                    Use the&#160;link below to&#160;get main Luwrain sources tarball. Please be&#160;aware
                    that This package doesn&#x27;t include auxiliary libraries needed for&#160;compilation
                    neither in&#160;source nor&#160;in&#160;binary form. You can get them using <a href="<?echo luwrain_link('/download/binary');?>">the&#160;page
                    with binary files</a>.
                  </p>
                  <ul>
                    <li><a href="ftp://ftp.altlinux.org/pub/people/msp/src/luwrain/0.x.x/luwrain-0.2.3.tar.gz">luwrain-0.2.3.tar.gz</a></li>
                  </ul>
                  <h2>Luwrain GIT repository</h2>
                  <p>Our main git repository is:</p>
                  <ul>
                    <li><a target="_blank" href="http://github.com/luwrain/luwrain.git">git://github.com/luwrain/luwrain.git</a></li>
                  </ul>
                  <p>
                    This repository contains main source code tree of&#160;Luwrain environment. It includes
                    Luwrain core as&#160;well&#160;as&#160;a&#160;set of&#160;standard applications. These
                    materials are sufficient to&#160;compile main <i>luwrain.jar</i> file but you need a&#160;number
                    of&#160;libraries involved in&#160;our development process. As&#160;it&#160; was mentioned
                    above we have them gathered in&#160;one additional archive available on&#160;the&#160;<a href="<?echo luwrain_link('/download/binary');?>">page
                    with binary data</a>.
                  </p>
<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
                  <h1>Исходный код Luwrain</h1>
                  <p>
                    Исходный код Luwrain публикуется в&#160;виде tar-архива и доступен через основной git-репозиторий
                    проекта на&#160;<a target="_blank" href="http://github.com/luwrain/">github.com</a>. Все
                    материалы предоставляются на&#160;основе правовых требований, указанных на&#160;<a href="<?echo luwrain_link('/doc/legal/');?>">соответствующей
                    странице</a> нашего сайта. Настоящая страница предоставляет ссылки только на&#160;исходный
                    код самого окружения Luwrain, но помимо этого мы публикуем <a href="<?echo luwrain_link('/community/extensions/');?>">код
                    расширений Luwrain</a>, которые рассматриваем как часть нашего сообщества, желая обратить
                    на&#160;их&#160;развитие больше внимания аудитории пользователей.
                  </p>
                  <p>Последняя версия Luwrain: <b>0.2.3</b> (представлена 28&#160;февраля 2014&#160;г.)</p>
                  <h2>Tar-архив Luwrain</h2>
                  <p>
                    При&#160;помощи прямой ссылки ниже Вы можете загрузить наш главный tar-архив с&#160;исходным
                    кодом. Пожалуйста, обратите внимание, что этот архив не&#160;содержит вспомогательных библиотек
                    ни в&#160;двоичном виде, ни в&#160;виде исходного кода. Вы можете их&#160;найти на&#160;<a href="<?echo luwrain_link('/download/binary');?>">странице
                    для&#160;загрузки двоичных файлов</a>.
                  </p>
                  <ul>
                    <li><a href="ftp://ftp.altlinux.org/pub/people/msp/src/luwrain/0.x.x/luwrain-0.2.3.tar.gz">luwrain-0.2.3.tar.gz</a></li>
                  </ul>
                  <h2>Git-репозиторий Luwrain</h2>
                  <p>Наш основной git-репозиторий расположен по&#160;адресу:</p>
                  <ul>
                    <li><a target="_blank" href="http://github.com/luwrain/luwrain.git">git://github.com/luwrain/luwrain.git</a></li>
                  </ul>
                  <p>
                    Этот репозиторий хранит весь код окружения Luwrain, включая набор стандартных приложений.
                    Его достаточно, чтобы произвести компиляцию главного запускаемого файла <i>luwrain.jar</i>,
                    но для&#160;этого должен быть доступен набор вспомогательных библиотек. Как говорилось
                    выше, библиотеки Вы можете загрузить со&#160;<a href="<?echo luwrain_link('/download/binary');?>">страницы
                    для&#160;загрузки двоичных файлов</a>.
                  </p>
<?php }?>
<?php luwrain_end_page('/download/sources/index.php');?>
