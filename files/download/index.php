<?php include "../functions.php"; luwrain_begin_page('/download/index.php', luwrain_current_lang() == 'ru'?'Загрузка':'downloads');?>
<?php if (luwrain_current_lang() == 'en') {?>
                <h1>Luwrain downloads</h1>
                <p>
                  There&#160;are three options of&#160;download you may want to&#160;continue with: ISO-images,
                  tarballs and Git. If you are new to&#160;Luwrain or just need a&#160;distribution for work
                  very likely you should take <a href="<?echo luwrain_link('distr/');?>">the&#160;first one</a>. This&#160;option
                  provides binary distribution prepared in&#160;form of&#160;bootable image.
                </p>
                <p>
                  The&#160;tarballs are archives which can be&#160;useful both for&#160;users and developers.
                  They give binary and source code versions for&#160;using Luwrain on&#160;the&#160;operating
                  system, which you have installed on&#160;your machine. Potentially any&#160;OS with proper
                  Java&#160;SE support can be use in&#160;this roled but we&#x27;d like to emphasize that
                  Luwrain show its best primarily on&#160;GNU/Linux. Git repositories can be&#160;useful
                  mostly for&#160;developers who would like to&#160;track the&#160;changes and follow the&#160;developing
                  process.
                </p>
                <p>Please choose the&#160;exact option you need:</p>
                <ul>
                  <li><a href="<?echo luwrain_link('distr/');?>">Luwrain distributions as&#160;bootable ISO-images</a></li>
                  <li><a href="<?echo luwrain_link('tarball/');?>">Luwrain tarballs</a></li>
                  <li><a href="<?echo luwrain_link('git/');?>">Luwrain Git repositories</a></li>
                </ul>
                <p>
                  <b>NOTE!</b> You always can use host <a href="http://download.luwrain.org">download.luwrain.org</a>
                  directly and view all&#160;available files and directories through&#160;automatically generated
                  indices.
                </p>

<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
                <h1>Загрузка Luwrain</h1>
                <p>
                  Существуют три&#160;варианта загрузки Luwrain: ISO-образы, tar-архивы и git-репозитории.
                  Если Вы только начинаете знакомство с&#160;Luwrain или Вам нужен дистрибутив для&#160;работы,
                  то необходимо выбрать <a href="<?echo luwrain_link('distr/');?>">первую опцию</a> из&#160;списка. Она позволяет
                  получить Luwrain в&#160;виде загрузочного ISO-образа, подходящего для&#160;большинства
                  пользователей.
                </p>
                <p>
                  Tar-архивы позволяют получитьLuwrain в&#160;бинарном виде или в&#160;виде исходных текстов
                  для&#160;запуска на&#160;любой операционной системе, которая имеет полноценную поддержку
                  Java&#160;SE, хотя мы обращаем Ваше внимание, что Luwrain лучше всего подходит для&#160;работы
                  преимущественно на&#160;GNU/Linux. Git-репозитории являются удобным инструментом для&#160;тех,
                  кто желает следить за&#160;процессом разработки и сразу&#160;же получать изменения.
                </p>
                <p>Выберите интересующий Вас вариант:</p>
                <ul>
                  <li><a href="<?echo luwrain_link('distr/');?>">загрузочные ISO-образы</a>;</li>
                  <li>
                    <a href="<?echo luwrain_link('tarball/');?>">tar-архивы с&#160;Luwrain в&#160;виде бинарных файлов и в&#160;виде
                    исходных текстов</a>;
                  </li>
                  <li><a href="<?echo luwrain_link('git/');?>">git-репозитории с&#160;исходными текстами Luwrain</a>.</li>
                </ul>
                <p>
                  <b>ВНИМАНИЕ!</b> Вы можете работать напрямую с&#160;узлом <a href="http://download.luwrain.org">download.luwrain.org</a>,
                  просматривая доступные файлы и каталоге при&#160;помощи автоматически сгенерированных индексов.
                </p>

<?php }?>
<?php luwrain_end_page('/download/index.php');?>
