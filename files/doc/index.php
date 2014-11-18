<?php include "../functions.php"; luwrain_begin_page('/doc/index.php', luwrain_current_lang() == 'ru'?'Документация':'Documentation');?>
<?php if (luwrain_current_lang() == 'en') {?>
                <h1>Luwrain documentation</h1>
                <p>
                  We have documentation sections divided onto several groups. First of&#160;all, there are
                  the&#160;links to&#160;the&#160;pages with materials covering various technical details
                  of&#160;the&#160;Luwrain environment. All of&#160;them are purposed for&#160;users or developers
                  of&#160;any&#160;kind. If you&#x27;d like to read the&#160;documentation for&#160;developers
                  you may want to&#160;read either the&#160;sections about developing of&#160;the&#160;Luwrain
                  environment itself or about creating a&#160;new application for&#160;it. For&#160;Luwrain
                  developing process fundamentals see the&#160;addition group below.
                </p>
                <p>Choose the&#160;technical documentation section you need:</p>
                <ul>
                  <li>
                    <a href="<?echo luwrain_link('user/');?>">Luwrain users documentation</a>
                  <ul>
                    <li>
                      <a href="<?echo luwrain_link('user/installation/');?>">Installation instructions: what should you do if you&#x27;d
                      like to&#160;install Luwrain on&#160;your computer?</a>
                    </li>
                    <li><a href="<?echo luwrain_link('user/manual/');?>">User manual: a&#160;complete guide how to&#160;work in&#160;Luwrain</a></li>
                    <li>
                      <a href="<?echo luwrain_link('user/try/');?>">Try now: running Luwrain for&#160;demonstration without installing
                      on&#160;your computer</a>
                    </li>
                    <li>
                      <a href="<?echo luwrain_link('user/start/');?>">Getting started: speedy instructions how to&#160;begin work
                      in&#160;Luwrain now</a>
                    </li>
                    <li><a href="<?echo luwrain_link('/community/bugs/');?>">How to&#160;report a&#160;bug?</a></li>
                  </ul>
                  </li>
                  <li><a href="<?echo luwrain_link('new-app/');?>">How&#160;to create a&#160;new application for&#160;Luwrain?</a></li>
                  <li><a href="<?echo luwrain_link('devel/');?>">Luwrain environment developers documentation</a></li>
                </ul>
                <p>
                  The&#160;Luwrain fundamentals describe legal status, invite to&#160;collaboration in&#160;various
                  ways and contain information about the&#160;authors. Read these pages if you&#x27;d like
                  to&#160;get project overview at&#160;a&#160;glance.
                </p>
                <ul>
                  <li>
                    <a href="<?echo luwrain_link('about/');?>">The&#160;free story what is Luwrain and why do we think blind users
                    need it?</a>
                  </li>
                  <li><a href="<?echo luwrain_link('difference/');?>">Why is Luwrain different than other accessible solutions?</a></li>
                  <li><a href="<?echo luwrain_link('authors/');?>">The project authors</a></li>
                  <li><a href="<?echo luwrain_link('legal/');?>">Legal notes</a></li>
                  <li><a href="<?echo luwrain_link('faq/');?>">Frequently asked questions</a></li>
                  <li><a href="<?echo luwrain_link('hardware/');?>">Hardware support policy</a></li>
                  <li><a href="<?echo luwrain_link('partners/');?>">Be our partner and let do something together</a></li>
                  <li><a href="<?echo luwrain_link('sponsors/');?>">Be our sponsor and support our work</a></li>
                </ul>

<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
                <h1>Документация Luwrain</h1>
                <p>
                  Ниже приведены ссылки на&#160;доступные разделы документации Luwrain. Она охватывает различные
                  технические детали, которые необходимо знать пользователям и разработчикам окружения. Разработчики
                  могут ознакомиться как с&#160;вопросами развития самой среды Luwrain, так и с&#160;сведениями,
                  необходимыми для&#160;создания собственных доступных приложений. Помимо этого предлагаются
                  некоторые дополнительные материалы, описывающие фундаментальные особенности процесса разработки
                  Luwrain, но не&#160;связанные с&#160;техническими вопросами напрямую.
                </p>
                <p>Выберите интересующий вас раздел:</p>
                <ul>
                  <li>
                    <a href="<?echo luwrain_link('user/');?>">Документация для&#160;пользователей</a>
                  <ul>
                    <li>
                      <a href="<?echo luwrain_link('user/installation/');?>">Инструкция по&#160;установке: как установить Luwrain
                      на&#160;жёсткий диск?</a>
                    </li>
                    <li>
                      <a href="<?echo luwrain_link('user/manual/');?>">Руководство пользователя: полное описание правил работы в&#160;среде
                      Luwrain</a>
                    </li>
                    <li>
                      <a href="<?echo luwrain_link('user/try/');?>">Пробный запуск: как&#160;познакомиться с&#160;Luwrain без&#160;установки
                      на&#160;жёсткий диск?</a>
                    </li>
                    <li>
                      <a href="<?echo luwrain_link('user/start/');?>">Быстрый старт: минимальное описание необходимых действий для&#160;установки
                      Luwrain на&#160;жёсткий диск и начала работы</a>
                    </li>
                    <li><a href="<?echo luwrain_link('/community/bugs/');?>">Как сообщить об&#160;ошибке?</a></li>
                  </ul>
                  </li>
                  <li><a href="<?echo luwrain_link('new-app/');?>">Документация для&#160;разработчиков собственных приложений Luwrain</a></li>
                  <li><a href="<?echo luwrain_link('devel/');?>">Документация для&#160;разработчиков рабочего окружения</a></li>
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
                  <li><a href="<?echo luwrain_link('difference/');?>">Чем Luwrain отличается от&#160;других доступных решений?</a></li>
                  <li><a href="<?echo luwrain_link('authors/');?>">Авторы проекта</a></li>
                  <li><a href="<?echo luwrain_link('legal/');?>">Правовой статус проекта</a></li>
                  <li><a href="<?echo luwrain_link('faq/');?>">Часто задаваемые вопросы</a></li>
                  <li><a href="<?echo luwrain_link('hardware/');?>">Правила выбора поддерживаемого оборудования</a></li>
                  <li><a href="<?echo luwrain_link('partners/');?>">Приглашение для&#160;партнёров</a></li>
                  <li><a href="<?echo luwrain_link('sponsors/');?>">Приглашение для&#160;спонсоров</a></li>
                </ul>

<?php }?>
<?php luwrain_end_page('/doc/index.php');?>
