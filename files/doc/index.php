<?php include "../functions.php"; luwrain_begin_page('/doc/index.php', luwrain_current_lang() == 'ru'?'Документация':'Documentation');?>
<?php if (luwrain_current_lang() == 'en') {?>
                <h1>Luwrain documentation</h1>
                <p>Choose the&#160;section you need:</p>
                <ul>
                  <li>
                    <a href="<?php echo luwrain_link('user/');?>">Users documentation</a>
                  <ul>
                    <li>
                      <a href="<?php echo luwrain_link('user/installation/');?>">Installation instructions: what should you do if you&#x27;d
                      like to&#160;install Luwrain on&#160;your computer?</a>
                    </li>
                    <li><a href="<?php echo luwrain_link('user/manual/');?>">User manual: a&#160;complete guide to&#160;work in&#160;Luwrain</a></li>
                    <li>
                      <a href="<?php echo luwrain_link('user/try/');?>">Try now: running Luwrain for&#160;demonstration without installing
                      on&#160;your computer</a>
                    </li>
                    <li>
                      <a href="<?php echo luwrain_link('user/start/');?>">Getting started: speedy instructions how to&#160;begin the&#160;work
                      right now</a>
                    </li>
                    <li><a href="<?php echo luwrain_link('/community/bugs/');?>">How to&#160;report a&#160;bug?</a></li>
                  </ul>
                  </li>
                  <li><a href="<?php echo luwrain_link('new-app/');?>">How&#160;to create your own application for&#160;Luwrain?</a></li>
                  <li>
                    <a href="<?php echo luwrain_link('devel/');?>">Environment developers documentation: how to&#160;work on&#160;Luwrain
                    itself?</a>
                  </li>
                </ul>
                <h2>About the&#160;project</h2>
                <ul>
                  <li>
                    <a href="<?php echo luwrain_link('about/');?>">The&#160;free story what Luwrain is and why do we think blind users
                    need it?</a>
                  </li>
                  <li><a href="<?php echo luwrain_link('difference/');?>">Why is Luwrain different than other accessible solutions?</a></li>
                  <li><a href="<?php echo luwrain_link('authors/');?>">The project authors</a></li>
                  <li><a href="<?php echo luwrain_link('legal/');?>">Legal notes</a></li>
                  <li><a href="<?php echo luwrain_link('faq/');?>">Frequently asked questions</a></li>
                  <li><a href="<?php echo luwrain_link('roadmap/');?>">The&#160;roadmap</a></li>
                  <li><a href="<?php echo luwrain_link('partners/');?>">Be our partner and let do something together</a></li>
                  <li><a href="<?php echo luwrain_link('sponsors/');?>">Be our sponsor and support our work</a></li>
                </ul>

<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
                <h1>Документация Luwrain</h1>
                <p>Выберите интересующий вас раздел:</p>
                <ul>
                  <li>
                    <a href="<?php echo luwrain_link('user/');?>">Документация для&#160;пользователей</a>
                  <ul>
                    <li>
                      <a href="<?php echo luwrain_link('user/installation/');?>">Инструкция по&#160;установке: как установить систему
                      на&#160;жёсткий диск?</a>
                    </li>
                    <li>
                      <a href="<?php echo luwrain_link('user/manual/');?>">Руководство пользователя: полное описание правил работы в&#160;нашей
                      среде</a>
                    </li>
                    <li>
                      <a href="<?php echo luwrain_link('user/try/');?>">Пробный запуск: как&#160;познакомиться с&#160;системой без&#160;установки
                      на&#160;жёсткий диск?</a>
                    </li>
                    <li>
                      <a href="<?php echo luwrain_link('user/start/');?>">Быстрый старт: минимальное описание необходимых действий для&#160;быстрой
                      установки системы на&#160;жёсткий диск и начала работы</a>
                    </li>
                    <li><a href="<?php echo luwrain_link('/community/bugs/');?>">Как сообщить об&#160;ошибке?</a></li>
                  </ul>
                  </li>
                  <li><a href="<?php echo luwrain_link('new-app/');?>">Документация для&#160;разработчиков собственных приложений</a></li>
                  <li><a href="<?php echo luwrain_link('devel/');?>">Документация для&#160;разработчиков нашей среды</a></li>
                </ul>
                <h2>О&#160;проекте</h2>
                <ul>
                  <li>
                    <a href="<?php echo luwrain_link('about/');?>">Что&#160;такое Luwrain, и почему мы думаем, что незрячие люди нуждаются
                    в&#160;нём?</a>
                  </li>
                  <li><a href="<?php echo luwrain_link('difference/');?>">Чем Luwrain отличается от&#160;других доступных решений?</a></li>
                  <li><a href="<?php echo luwrain_link('authors/');?>">Авторы проекта</a></li>
                  <li><a href="<?php echo luwrain_link('legal/');?>">Правовой статус проекта</a></li>
                  <li><a href="<?php echo luwrain_link('faq/');?>">Часто задаваемые вопросы</a></li>
                  <li><a href="<?php echo luwrain_link('roadmap/');?>">Дорожная карта</a></li>
                  <li><a href="<?php echo luwrain_link('partners/');?>">Приглашение для&#160;партнёров</a></li>
                  <li><a href="<?php echo luwrain_link('sponsors/');?>">Приглашение для&#160;спонсоров</a></li>
                </ul>

<?php }?>
<?php luwrain_end_page('/doc/index.php');?>
