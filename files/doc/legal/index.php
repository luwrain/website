<?php include "../../functions.php"; luwrain_begin_page('/doc/legal/index.php', luwrain_current_lang() == 'ru'?'Правовой статус':'Legal notes');?>

<?php if (luwrain_current_lang() == 'en') {?>
                  <h1>Legal notes</h1>
                  <p>
                    All sources of the main Luwrain package are distributed under the terms of GNU Public License
                    ver. 3. Any actions not violating the requirements of this license are permitted and may
                    be done without any prior permission. Luwrain distribution in a form of bootable ISO-image
                    contains a bundle of various applications provided by many software projects. Usually they
                    have their own license agreement but always with permission of free commercial and non-commercial
                    using. Any software prohibiting free commercial and non-commercial using may not be shipped
                    with Luwrain distribution. There possible some exception implying including software only for non-commercial using in debug versions
                    of Luwrain.
                  </p>
                  <p>
                    we would like to apply some restrictions to Luwrain project name. That is needed to prevent
                    users confusion by builds from third-part developers. If you are proposed some
                    changes in Luwrain core and more than 75% of source files left untouched (there is any
                    commit in our <a href="<?echo luwrain_link('/download/sources/');?>">main git-repository</a> with more than
                    75% of same files as in your custom version) we encourage you to add some suffix to your
                    version designating that it is not an original Luwrain version but you still may title
                    your project as Luwrain. Otherwise you may not use Luwrain name any more and should choose
                    any other designation.
                  </p>
<?php }?>

<?php if (luwrain_current_lang() == 'ru') {?>
                  <h1>Правовой статус</h1>
                  <p>
                    Все исходные тексты базового пакета Luwrain распространяются на основе GNU Public License
                    версии 3. Любое действие с ними, не нарушающее требований этой лицензии, разрешено и может
                    быть выполнено без предварительного согласия разработчиков. Дистрибутив Luwrain в виде
                    загрузочного ISO-образа содержит множество приложений от большого количества проектов,
                    каждый из которых может распространяться на основе собственной лицензии, но обязательно
                    с предоставлением свободного права на коммерческое и некоммерческое использование. Программное
                    обеспечение, не предоставляющее такого права, в составе дистрибутива Luwrain распространяться
                    не может. Возможны исключения, в рамках которых отладочные образы Luwrain будут содержать
                    приложения, разрешающие только некоммерческое использование.
                  </p>
                  <p>
                    Мы хотели бы ограничить право использования названия проекта Luwrain. Это необходимо для
                    предотвращения введения в заблуждение пользователей в случае создания сторонних сборок
                    Luwrain. Если Вы внесли некоторые изменения в исходный код базового пакета Luwrain, но
                    не менее 75% файлов остались нетронутыми (в нашем <a href="<?echo luwrain_link('/download/sources/');?>">основном
                    git-репозитории</a> существует коммит, в котором не менее 75% файлов совпадают с Вашей
                    версией), Вы можете сохранить название Luwrain, но с обязательной пометкой, что это Ваша
                    сторонняя версия. В противном случае мы просим не называть разработку Luwrain и выбрать
                    другое имя.
                  </p>
<?php }?>




<?php luwrain_end_page('/doc/legal/index.php');?>
