<?php include "../../functions.php"; luwrain_begin_page('/download/tarball/index.php', luwrain_current_lang() == 'ru'?'Tar-архивы':'Tarballs');?>
<?php if (luwrain_current_lang() == 'en') {?>
                <h1>Luwrain tarballs</h1>
                <p>
                  Whether you want to&#160;get Luwrain in&#160;form of binary files or in&#160;form of&#160;source
                  code, you can download it as&#160;single tarballs. Please be aware that binary and source
                  archives are not equal; binary version includes some files (e.g. multimedia materials),
                  not&#160;shipped with&#160;source code. If you&#x27;re interested in&#160;tracking the&#160;changes
                  in&#160;Luwrain source code tree it is more preferable to&#160;use <a href="<?echo luwrain_link('/download/git/');?>">Git
                  repositories</a> instead.
                </p>
                <p>Latest Luwrain version: <b>0.3.0</b> (published on&#160;October 7, 2014)</p>
                <p>Use this link to&#160;download Luwrain source code:</p>
                <ul>
                  <li><a href="ftp://ftp.altlinux.org/pub/people/msp/src/luwrain/0.x.x/luwrain-0.3.0.tar.gz">luwrain-0.3.0.tar.gz</a></li>
                </ul>
                <p>Use this link to&#160;download Luwrain binary files:</p>
                <ul>
                  <li><a href="http://download.luwrain.org/binary/luwrain-0.3.0-bin.tar.gz">luwrain-0.3.0-bin.tar.gz</a></li>
                </ul>

<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
                <h1>Tar-архивы Luwrain</h1>
                <p>
                  Luwrain может быть загружен как в&#160;виде исходных текстов, так и в&#160;виде откомпилированных
                  бинарных файлов. Обратите, пожалуйста, внимание, что эти&#160;архивы не&#160;равнозначны
                  &#x2014; бинарная версия может содержать файлы, отсутствующие в&#160;исходных текстах (например,
                  мультимедиа материалы). Если Вас интересует отслеживание изменений в&#160;исходных текстах,
                  вероятно, Вам будет удобнее пользоваться <a href="<?echo luwrain_link('/download/git/');?>">нашими Git репозиториями</a>.
                </p>
                <p>Последняя версия Luwrain: <b>0.3.0</b> (представлена 7&#160;октября 2014&#160;г.)</p>
                <p>По&#160;этой ссылке Вы можете загрузить исходные тексты Luwrain:</p>
                <ul>
                  <li><a href="ftp://ftp.altlinux.org/pub/people/msp/src/luwrain/0.x.x/luwrain-0.3.0.tar.gz">luwrain-0.3.0.tar.gz</a></li>
                </ul>
                <p>По&#160;этой ссылке Вы можете загрузить Luwrain в&#160;виде бинарных файлов::</p>
                <ul>
                  <li><a href="http://download.luwrain.org/binary/luwrain-0.3.0-bin.tar.gz">luwrain-0.3.0-bin.tar.gz</a></li>
                </ul>

<?php }?>
<?php luwrain_end_page('/download/tarball/index.php');?>
