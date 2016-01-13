<?php include "../functions.php"; luwrain_begin_page('/community/sonar.php', luwrain_current_lang() == 'ru'?'Установка на Sonar':'Installation on Sonar');?>
<?php if (luwrain_current_lang() == 'en') {?>
                <h1>Installation on Sonar</h1>
                <p>Sorry, this page is available in&#160;Russian language only.</p>

<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
                <h1>Установка на Sonar</h1>
                <p>
                  Приведённая ниже информация была опробирована участниками сообщества LUWRAIN Андреем Ампиловым
                  и Максимом Белаком. Предполагается, что пользователь уже загрузил и распаковал каталог
                  <i>~/luwrain</i>, это можно сделать используя <a href="<?php echo luwrain_link('/download/linux/');?>">соответствующий
                  раздел на&#160;этом сайте</a> или <a href="http://download.luwrain.org/nightly/">наши nightly-сборки</a>.
                </p>
                <p>
                  Протестировано на&#160;дистрибутиве <i>sonar_test_gnome_2015_3</i>. Для&#160;запуска LUWRAIN
                  нужно выполнить следующие дополнительные действия:
                </p>
                <ol>
                  <li>Установить Java из&#160;пакета jre-8-openjdk.</li>
                  <li>
                    В&#160;дистрибутиве Sonar файл <i>jni.h</i> расположен в&#160;каталоге <i>/usr/lib/jvm/java-8-openjdk/include</i>.
                    Следовательно, этот каталог нужно добавить в&#160;список <i>includes</i> в&#160;файле <i>~/luwrain/jni/Makefile</i>.
                  </li>
                  <li>
                    Необходимо удалить пакет <i>java-atk-wrapper</i> для&#160;того, чтобы отключить стандартные
                    функции accessibility в&#160;Java.
                  </li>
                </ol>

<?php }?>
<?php luwrain_end_page('/community/sonar.php');?>
