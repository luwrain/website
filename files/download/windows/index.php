<?php include "../../functions.php"; luwrain_begin_page('/download/windows/index.php', luwrain_current_lang() == 'ru'?'Дистрибутив для Microsoft Windows':'Distribution for Microsoft Windows');?>
<?php luwrain_content_being_written();?>
<?php if (luwrain_current_lang() == 'en') {?>
                <h1>Distribution for&#160;Microsoft Windows</h1>
                <p>Clik on&#160;the&#160;direct link below to&#160;start  downloading.</p>
                <p><b>Version:</b> <?php echo luwrain_version_windows();?></p>
                <p><b>Date of&#160;release:</b> <?php echo luwrain_release_date_windows_en();?></p>
                <p><b>Target platform:</b> Microsoft Windows XP/Vista/7/8/8.1</p>
                <ul>
                  <li>luwrain-<?php echo luwrain_version_windows();?>-win.exe</li>
                </ul>
                <h2>See&#160;also</h2>
                <ul>
                  <li>
                    <a href="<?php echo luwrain_link('/doc/user/installation/windows/');?>">Installation instructions for&#160;Microsoft
                    Windows</a>
                  </li>
                  <li><a href="<?php echo luwrain_link('/community/');?>">Our&#160;community</a></li>
                  <li><a href="<?php echo luwrain_link('/community/bugs/');?>">Report a&#160;bug</a></li>
                </ul>
<?php } ?>
<?php if (luwrain_current_lang() == 'en') {?>
<?php } ?>
<?php if (luwrain_current_lang() == 'ru') {?>
                <h1>Дистрибутив для&#160;Microsoft Windows</h1>
                <p>Используйте прямую ссылку ниже, чтобы начать загрузку.</p>
                <p><b>Версия системы:</b> <?php echo luwrain_version_windows();?></p>
                <p><b>Дата релиза:</b> <?php echo luwrain_release_date_windows_ru();?></p>
                <p><b>Платформа:</b> Microsoft Windows XP/Vista/7/8/8.1</p>
                <ul>
                  <li>luwrain-<?php echo luwrain_version_windows();?>-win.exe</li>
                </ul>
                <h2>См.&#160;также</h2>
                <ul>
                  <li>
                    <a href="<?php echo luwrain_link('/doc/user/installation/windows/');?>">Инструкция по&#160;установке Luwrain на&#160;Microsoft
                    Windows</a>
                  </li>
                  <li><a href="<?php echo luwrain_link('/community/');?>">Наше&#160;сообщество</a></li>
                  <li><a href="<?php echo luwrain_link('/community/bugs/');?>">Сообщить об&#160;ошибке</a></li>
                </ul>
<?php } ?>
<?php luwrain_end_page('/download/windows/index.php');?>
