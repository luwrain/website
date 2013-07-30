<?php include "../functions.php"; luwrain_begin_page('/doc/index.php', luwrain_current_lang() == 'ru'?'Документация':'Documentation');?>

<?php if (luwrain_current_lang() == 'en') {?>
                  <h1>Documentation</h1>
                  <p>
                    We have documentation sections on this website divided onto several groups. First of all
                    there are the links to the pages with material covering various technical details of Luwrain
                    environment. All of them are purposed for real or coming users as well as for developers
                    of any kind. If you would like to read developer documentation you may want to read sections
                    about developing of Luwrain environment itself or about creating new application for it.
                    In addition we have one more group below dedicated to Luwrain developing process fundamentals.
                  </p>
                  <p>Choose technical documentation section you need:</p>
                  <ul>
                    <li>
                      <a href="<?echo luwrain_link('user/');?>">Luwrain users documentation</a>
                    <ul>
                      <li>
                        <a href="<?echo luwrain_link('user/try/');?>">Try it now: what should you do if you want to get Luwrain and
                        launch it?</a>
                      </li>
                      <li>
                        <a href="<?echo luwrain_link('user/start/');?>">First steps: what should you do if you already have Luwrain
                        started and want more information about basic functions?</a>
                      </li>
                      <li><a href="<?echo luwrain_link('/community/bugs/');?>">How to report a bug?</a></li>
                    </ul>
                    </li>
                    <li><a href="<?echo luwrain_link('devel/');?>">Luwrain environment developers documentation</a></li>
                    <li><a href="<?echo luwrain_link('apps/');?>">Luwrain applications creation documentation</a></li>
                  </ul>
                  <p>
                    Luwrain fundamentals describes its legal status, offers information about the authors and some
                    collaboration invitations. You can also read these pages if you would like to get complete
                    project overview at a glance.
                  </p>
                  <ul>
                    <li>
                      <a href="<?echo luwrain_link('about/');?>">The free story what is Luwrain and why do we think blind users need
                      it?</a>
                    </li>
                    <li><a href="<?echo luwrain_link('legal/');?>">Legal notes</a></li>
                    <li><a href="<?echo luwrain_link('faq/');?>">Frequently asked questions</a></li>
                    <li><a href="<?echo luwrain_link('hardware/');?>">Hardware support policy</a></li>
                    <li><a href="<?echo luwrain_link('partners/');?>">Be our partner and let do something together</a></li>
                    <li><a href="<?echo luwrain_link('sponsors/');?>">Be our sponsor and support our work</a></li>
                  </ul>
<?php }?>

<?php if (luwrain_current_lang() == 'ru') {?>
                  <h1>Документация</h1>
                  <p>
                    Ниже приведены ссылки на доступные разделы документации Luwrain. ДокументацияLuwrain охватывает
                    различные технические детали, которые необходимо знать пользователям и разработчикам
                    проекта. Разработчики могут ознакомиться как с вопросами развития самой среды Luwrain,
                    так и с сведениями, необходимыми для создания собственных доступных приложений. Помимо
                    этого, предлагаются некоторые дополнительные документы, описывающие фундаментальные особенности
                    процесса разработки Luwrain, но не связанные напрямую с техническими вопросами.
                  </p>
                  <p>Выберите интересующий Вас раздел:</p>
                  <ul>
                    <li>
                      <a href="<?echo luwrain_link('user/');?>">Для пользователей Luwrain</a>
                    <ul>
                      <li><a href="<?echo luwrain_link('user/try/');?>">Начать работу: что нужно знать, чтобы загрузить и запустить Luwrain?</a></li>
                      <li>
                        <a href="<?echo luwrain_link('user/start/');?>">Первые шаги: какие базовые возможности нужно знать, если Luwrain
                        уже готов к работе?</a>
                      </li>
                      <li><a href="<?echo luwrain_link('/community/bugs/');?>">Как сообщить об ошибке?</a></li>
                    </ul>
                    </li>
                    <li><a href="<?echo luwrain_link('devel/');?>">Для разработчиков среды Luwrain</a></li>
                    <li><a href="<?echo luwrain_link('apps/');?>">Для разработчиков приложений Luwrain</a></li>
                  </ul>
                  <p>
                    Ниже Вы можете ознакомиться с правовым статусом разработки Luwrain, с информацией об авторах
                    и узнать о имеющихся возможностях для сотрудничества. Эти страницы позволяют быстро получить
                    представление о самых главных особенностях проекта.
                  </p>
                  <ul>
                    <li>
                      <a href="<?echo luwrain_link('about/');?>">Что такое Luwrain, и почему мы думаем, что незрячие люди нуждаются
                      в нём?</a>
                    </li>
                    <li><a href="<?echo luwrain_link('legal/');?>">Правовой статус проекта</a></li>
                    <li><a href="<?echo luwrain_link('faq/');?>">Часто задаваемые вопросы</a></li>
                    <li><a href="<?echo luwrain_link('hardware/');?>">Правила выбора поддерживаемого оборудования</a></li>
                    <li><a href="<?echo luwrain_link('partners/');?>">Приглашение для партнёров</a></li>
                    <li><a href="<?echo luwrain_link('sponsors/');?>">Приглашение для спонсоров</a></li>
                  </ul>
<?php }?>

<?php luwrain_end_page('/doc/index.php');?>
