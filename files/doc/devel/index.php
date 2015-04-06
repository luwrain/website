<?php include "../../functions.php"; luwrain_begin_page('/doc/devel/index.php', luwrain_current_lang() == 'ru'?'Документация для разработчиков среды':'Documentation for environment developers');?>
<?php if (luwrain_current_lang() == 'en') {?>
                <h1>Documentation for environment developers</h1>
                <ul>
                  <li><a href="<?php echo luwrain_link('speech-backend/');?>">Preparing a&#160;speech back-end</a></li>
                </ul>

<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
                <h1>Документация для&#160;разработчиков среды</h1>
                <ul>
                  <li><a href="<?php echo luwrain_link('speech-backend/');?>">Реализация речевого вывода</a></li>
                  <li><a href="<?php echo luwrain_link('txt-reading/');?>">Требования к&#160;приложению для&#160;чтения больших текстов</a></li>
                </ul>

<?php }?>
<?php luwrain_end_page('/doc/devel/index.php');?>
