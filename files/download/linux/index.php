<?php include "../../functions.php"; luwrain_begin_page('/download/linux/index.php', luwrain_current_lang() == 'ru'?'Дистрибутив для GNU/Linux':'Distribution for GNU/Linux');?>
<?php if (luwrain_current_lang() == 'en') {?>
                <h1>Distribution for&#160;GNU/Linux</h1>
                <p>Clik on&#160;the&#160;direct link below to&#160;start  downloading.</p>
                <p><b>Version:</b> <?php echo luwrain_version_linux();?></p>
                <p><b>Date of&#160;release:</b> <?php echo luwrain_release_date_linux_en();?></p>
                <p><b>Target platform:</b> GNU/Linux</p>
                <ul>
                  <li><a href="http://download.luwrain.org/binary/<?php echo luwrain_version_linux();?>/linux/luwrain-linux-<?php echo luwrain_version_linux();?>.tar.gz">luwrain-linux-<?php echo luwrain_version_linux();?>.tar.gz</a></li>
                </ul>
                <h2>See&#160;also</h2>
                <ul>
                  <li>
                    <a href="<?php echo luwrain_link('/doc/user/installation/linux/');?>">Installation instructions for&#160;GNU/Linux</a>
                  </li>
                  <li><a href="<?php echo luwrain_link('/community/');?>">Our&#160;community</a></li>
                  <li><a href="<?php echo luwrain_link('/community/bugs/');?>">Report a&#160;bug</a></li>
                </ul>
<?php } ?>
<?php if (luwrain_current_lang() == 'en') {?>
<?php } ?>
<?php if (luwrain_current_lang() == 'ru') {?>
                <h1>Дистрибутив для&#160;GNU/Linux</h1>
                <p>Используйте прямую ссылку ниже, чтобы начать загрузку.</p>
                <p><b>Версия системы:</b> <?php echo luwrain_version_linux();?></p>
                <p><b>Дата релиза:</b> <?php echo luwrain_release_date_linux_ru();?></p>
                <p><b>Платформа:</b> GNU/Linux</p>
                <ul>
                  <li><a href="http://download.luwrain.org/binary/<?php echo luwrain_version_linux();?>/linux/luwrain-linux-<?php echo luwrain_version_linux();?>.tar.gz">luwrain-linux-<?php echo luwrain_version_linux();?>.tar.gz</a></li>
                </ul>
                <h2>См.&#160;также</h2>
                <ul>
                  <li>
                    <a href="<?php echo luwrain_link('/doc/user/installation/linux/');?>">Инструкция по&#160;установке LUWRAIN в&#160;GNU/Linux</a>
                  </li>
                  <li><a href="<?php echo luwrain_link('/community/');?>">Наше&#160;сообщество</a></li>
                  <li><a href="<?php echo luwrain_link('/community/bugs/');?>">Сообщить об&#160;ошибке</a></li>
                </ul>
<?php } ?>
<?php luwrain_end_page('/download/linux/index.php');?>
