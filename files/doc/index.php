<?php include "../functions.php"; luwrain_begin_page('/doc/index.php', luwrain_current_lang() == 'ru'?'Документация':'Documentation');?>

<?php if (luwrain_current_lang() == 'en') {?>

                  <h1>Luwrain documentation</h1>
                  <p>
                    We have documentation sections on&#160;this website divided onto several groups. First
                    of&#160;all there are the&#160;links to&#160;the&#160;pages with material covering various
                    technical details of&#160;Luwrain environment. All of&#160;them are purposed for real or
                    coming users as&#160;well as&#160;for&#160;developers of&#160;any&#160;kind. If you would
                    like to read developer documentation you may want to read sections about developing of&#160;Luwrain
                    environment itself or about creating new application for&#160;it. In&#160;addition we have
                    one&#160;more group below dedicated to&#160;Luwrain developing process fundamentals.
                  </p>
                  <p>Choose technical documentation section you need:</p>
                  <ul>
                    <li>
                      <a href="<?echo luwrain_link('user/');?>">Luwrain users documentation</a>
                    <ul>
                      <li>
                        <a href="<?echo luwrain_link('user/try/');?>">Try it&#160;now: what should you do if you want to&#160;get Luwrain
                        and launch it?</a>
                      </li>
                      <li>
                        <a href="<?echo luwrain_link('user/start/');?>">First steps: what should you do if you already have Luwrain
                        started and want more information about basic functions?</a>
                      </li>
                      <li><a href="<?echo luwrain_link('/community/bugs/');?>">How to&#160;report a&#160;bug?</a></li>
                    </ul>
                    </li>
                    <li><a href="<?echo luwrain_link('devel/');?>">Luwrain environment developers documentation</a></li>
                    <li><a href="<?echo luwrain_link('apps/');?>">How&#160;to create new application for&#160;Luwrain?</a></li>
                  </ul>
                  <p>
                    Luwrain fundamentals describes its legal status, offers information about the&#160;authors
                    and some collaboration invitations. You can also read these pages if you would like to&#160;get
                    complete project overview at&#160;a&#160;glance.
                  </p>
                  <ul>
                    <li>
                      <a href="<?echo luwrain_link('about/');?>">The&#160;free story what is Luwrain and why do we think blind users
                      need it?</a>
                    </li>
                    <li><a href="<?echo luwrain_link('authors/');?>">Project authors</a></li>
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
                    Ниже приведены ссылки на&#160;доступные разделы документации Luwrain. Она охватывает различные
                    технические детали, которые необходимо знать пользователям и разработчикам проекта. Разработчики
                    могут ознакомиться как с&#160;вопросами развития самой среды Luwrain, так и с&#160;сведениями,
                    необходимыми для&#160;создания собственных доступных приложений. Помимо этого предлагаются
                    некоторые дополнительные материалы, описывающие фундаментальные особенности процесса разработки
                    Luwrain, но не&#160;связанные с&#160;техническими вопросами напрямую.
                  </p>
                  <p>Выберите интересующий Вас раздел:</p>
                  <ul>
                    <li>
                      <a href="<?echo luwrain_link('user/');?>">Документация для&#160;пользователей Luwrain</a>
                    <ul>
                      <li><a href="<?echo luwrain_link('user/try/');?>">Начать работу: что нужно знать, чтобы загрузить и запустить Luwrain?</a></li>
                      <li>
                        <a href="<?echo luwrain_link('user/start/');?>">Первые шаги: какие базовые возможности нужно знать, если Luwrain
                        уже&#160;готов к&#160;работе?</a>
                      </li>
                      <li><a href="<?echo luwrain_link('/community/bugs/');?>">Как сообщить об&#160;ошибке?</a></li>
                    </ul>
                    </li>
                    <li><a href="<?echo luwrain_link('devel/');?>">Документация для&#160;разработчиков среды Luwrain</a></li>
                    <li><a href="<?echo luwrain_link('apps/');?>">Документация для&#160;разработчиков приложений Luwrain</a></li>
                  </ul>
                  <p>
                    Ниже Вы можете ознакомиться с&#160;правовым статусом разработки Luwrain, с&#160;информацией
                    об&#160;авторах и узнать о&#160;имеющихся возможностях для&#160;совместной работы.
                  </p>
                  <ul>
                    <li>
                      <a href="<?echo luwrain_link('about/');?>">Что&#160;такое Luwrain, и почему мы думаем, что незрячие люди нуждаются
                      в&#160;нём?</a>
                    </li>
                    <li><a href="<?echo luwrain_link('authors/');?>">Авторы проекта</a></li>
                    <li><a href="<?echo luwrain_link('legal/');?>">Правовой статус проекта</a></li>
                    <li><a href="<?echo luwrain_link('faq/');?>">Часто задаваемые вопросы</a></li>
                    <li><a href="<?echo luwrain_link('hardware/');?>">Правила выбора поддерживаемого оборудования</a></li>
                    <li><a href="<?echo luwrain_link('partners/');?>">Приглашение для&#160;партнёров</a></li>
                    <li><a href="<?echo luwrain_link('sponsors/');?>">Приглашение для&#160;спонсоров</a></li>
                  </ul>


<?php }?>
<?php luwrain_end_page('/doc/index.php');?>
