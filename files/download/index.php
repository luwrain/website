<?php include "../functions.php"; luwrain_begin_page('/download/index.php', luwrain_current_lang() == 'ru'?'Загрузка':'downloads');?>
<?php if (luwrain_current_lang() == 'en') {?>
                <h1>LUWRAIN downloads</h1>
                <h2>For&#160;end&#160;users</h2>
                <p>
                  These options are purposed for&#160;everybody who would like to&#160;use LUWRAIN just for&#160;the&#160;work.
                  The&#160;only difference between them is the&#160;operating system they can be&#160;launched
                  on (or&#160;without operating system at&#160;all as&#160;in&#160;the&#160;case of&#160;bootable
                  ISO-images).
                </p>
                <p>Choose the&#160;most suitable form of&#160;LUWRAIN distribution you need:</p>
                <ul>
                  <li><a href="<?php echo luwrain_link('iso/');?>">Bootable ISO-images</a> (installed operating system isn&#x27;t needed)</li>
                  <li><a href="<?php echo luwrain_link('windows/');?>">For&#160;Microsoft Windows</a></li>
                  <li><a href="<?php echo luwrain_link('linux/');?>">For&#160;GNU/Linux</a></li>
                  <li><a href="<?php echo luwrain_link('mac/');?>">For&#160;Apple Mac&#160;OS&#160;X</a></li>
                </ul>
                <h2>For&#160;developers</h2>
                <p>
                  The&#160;first option of&#160;this list is purposed for&#160;the&#160;developers of&#160;applications
                  for&#160;LUWRAIN. Others can be&#160;useful only for&#160;developers who would like to&#160;improve
                  LUWRAIN itself.
                </p>
                <ul>
                  <li>
                    <a href="<?php echo luwrain_link('sdk/');?>">LUWRAIN&#160;SDK</a> (needed for&#160;building your own applications
                    for&#160;LUWRAIN)
                  </li>
                  <li>
                    <a href="<?php echo luwrain_link('git/');?>">Git&#160;repositories</a> (the&#160;entire set of&#160;version tracking
                    repositories with source code of&#160;our project)
                  </li>
                  <li>
                    <a href="tarball/">The&#160;tarballs with source materials</a> (published basically to&#160;make
                    LUWRAIN sources downloadable in&#160;single click but there is a&#160;tarball with&#160;media
                    files which aren&#x27;t present in&#160;Git repositories)
                  </li>
                </ul>
                <p>
                  <b>NOTE!</b> You may always use the&#160;host <a href="http://download.luwrain.org">download.luwrain.org</a>
                  directly as&#160;a&#160;single, easily observable place gathering all of&#160;our&#160;materials
                  for&#160;download.
                </p>

<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
                <h1>Загрузка LUWRAIN</h1>
                <h2>Для&#160;пользователей</h2>
                <p>
                  В&#160;этом разделе варианты загрузки предназначены для&#160;людей, кому LUWRAIN требуется
                  непосредственно только для&#160;работы. Единственное различие между ними &#x2014; операционная
                  система, на&#160;которой они могут быть запущены (в&#160;случае загрузочных ISO-образов
                  операционная система не&#160;требуется вовсе).
                </p>
                <p>Выберите наиболее подходящий для&#160;вас вариант поставки:</p>
                <ol>
                  <li>
                    <a href="<?php echo luwrain_link('iso/');?>">В&#160;виде загрузочного ISO-образа</a> (какая-либо установленная
                    операционная система не&#160;требуется)
                  </li>
                  <li><a href="<?php echo luwrain_link('windows/');?>">Версия для&#160;Microsoft Windows</a></li>
                  <li><a href="<?php echo luwrain_link('linux/');?>">Версия для&#160;GNU/Linux</a></li>
                  <li><a href="<?php echo luwrain_link('mac/');?>">Версия для&#160;Apple Mac&#160;OS&#160;X</a></li>
                </ol>
                <h2>Для&#160;разработчиков</h2>
                <p>
                  Первый вариант в&#160;списке ниже предназначен для&#160;разработчиков собственных приложений.
                  Остальные элементы требуются людям, желающим принять участие в&#160;работе над&#160;нашей
                  средой самой по&#160;себе.
                </p>
                <ol>
                  <li>
                    <a href="<?php echo luwrain_link('sdk/');?>">LUWRAIN&#160;SDK</a> (требуется для&#160;разработки ваших собственных
                    приложений)
                  </li>
                  <li>
                    <a href="<?php echo luwrain_link('git/');?>">Репозитории Git</a> (полный перечень репозиториев для&#160;отслеживания
                    изменений в&#160;наших исходных текстах)
                  </li>
                  <li>
                    <a href="tarball/">Архивы с&#160;материалами проекта</a> (предоставляются в&#160;основном
                    для&#160;упрощения загрузки LUWRAIN, но помимо исходных текстов содержат также звуковые
                    файлы, отсутствующие в&#160;репозиториях Git)
                  </li>
                </ol>
                <p>
                  <b>ВНИМАНИЕ!</b> Вы можете работать напрямую с&#160;узлом <a href="http://download.luwrain.org">download.luwrain.org</a>,
                  просматривая доступные файлы и каталоге при&#160;помощи автоматически сгенерированных индексов.
                </p>

<?php }?>
<?php luwrain_end_page('/download/index.php');?>
