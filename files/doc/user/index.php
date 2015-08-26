<?php include "../../functions.php"; luwrain_begin_page('/doc/user/index.php', luwrain_current_lang() == 'ru'?'Документация для пользователей':'Documentation for users');?>
<?php if (luwrain_current_lang() == 'en') {?>
                <h1>Documentation for&#160;users</h1>
                <p>Sorry, this page is still available in&#160;Russian language only. Please, try later.</p>

<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
                <h1>Документация для&#160;пользователей</h1>
                <p>
                  Это основные разделы нашей документации для&#160;пользователей, справочной информации и
                  других дополнительных материалов.
                </p>
                <h2>Основные разделы</h2>
                <ul>
                  <li>
                    <a href="<?php echo luwrain_link('installation/');?>">Инструкция по&#160;установке и настройке системы для&#160;начала
                    работы</a>
                  </li>
                  <li><a href="<?php echo luwrain_link('manual/');?>">Руководство пользователя системы, если она установлена и настроена</a></li>
                  <li><a href="<?php echo luwrain_link('app/');?>">Описание работы в&#160;наших приложениях</a></li>
                </ul>
                <h2>Дополнительные разделы</h2>
                <ul>
                  <li>
                    <a href="<?php echo luwrain_link('try/');?>">Как&#160;познакомиться с&#160;системой без&#160;установки на&#160;жёсткий
                    диск?</a>
                  </li>
                  <li>
                    <a href="start/">Минимальное описание необходимых действий для&#160;быстрой установки системы
                    на&#160;жёсткий диск и начала работы</a>
                  </li>
                </ul>
                <h2>Справочная информация</h2>
                <ul>
                  <li><a href="<?php echo luwrain_link('hotkeys/');?>">Список комбинаций горячих клавиш</a></li>
                </ul>
                <h2>См.&#160;также</h2>
                <ul>
                  <li><a href="<?php echo luwrain_link('/community/bugs/');?>">Как сообщить об&#160;ошибке?</a></li>
                </ul>

<?php }?>
<?php luwrain_end_page('/doc/user/index.php');?>
