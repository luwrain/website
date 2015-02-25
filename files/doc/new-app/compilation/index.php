<?php include "../../../functions.php"; luwrain_begin_page('/doc/new-app/compilation/index.php', luwrain_current_lang() == 'ru'?'Основные понятия приложений':'Сборка вашего  приложения');?>
<?php if (luwrain_current_lang() == 'en') {?>
                <h1>Compilation of applications</h1>

<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
                <h1>Сборка вашего приложения</h1>
                <p>
                  При&#160;компиляции приложений необходимо помнить, что приложения Luwrain &#x2014; это обычные
                  jar-файлы Java. Таким образом, сборка приложений осуществляется точно так&#160;же, как
                  и компиляция любой Java-библиотеки.
                </p>
                <p>
                  Главный вопрос, на&#160;который нужно обратить внимание &#x2014; включение в&#160;classpath
                  дополнительных библиотек, которые составляют Luwrain&#160;SDK. Загрузить эти библиотеки
                  можно с&#160;<a href="<?php echo luwrain_link('/download/sdk/');?>">соответствующей страницы</a> раздела загрузок.
                  Luwrain&#160;SDK состоит из&#160;нескольких библиотек: luwrain.jar и luwrain-base.jar &#x2014;
                  основная часть функций, которая требуется для&#160;всех видов приложений Luwrain; luwrain-pim.jar,
                  luwrain-langs.jar, luwrain-network.jar &#x2014; опциональные расширения, которые должны
                  подключаться по&#160;необходимости, исходя из&#160;назначения разрабатываемого приложения.
                </p>
                <h2>Читать далее</h2>
                <ul>
                  <li><a href="<?php echo luwrain_link('/doc/new-app/example/');?>">Пример простейшего приложения</a></li>
                </ul>

<?php }?>
<?php luwrain_end_page('/doc/new-app/compilation/index.php');?>
