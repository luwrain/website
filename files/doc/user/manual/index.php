<?php include "../../../functions.php"; luwrain_begin_page('/doc/user/manual/index.php', luwrain_current_lang() == 'ru'?'Руководство пользователя':'User manual');?>
<?php if (luwrain_current_lang() == 'en') {?>
                <h1>User manual</h1>

<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
                <h1>Руководство пользователя</h1>
                <p>
                  Этот раздел документации поможет вам получить представление об&#160;основных понятиях и
                  правилах работы в&#160;Luwrain. Предполагается, что система уже установлена и готова к&#160;работе
                  или вы запустили её в&#160;режиме LiveCD, желая ознакомиться без&#160;установки на&#160;жёсткий
                  диск. Если вам требуются инструкции по&#160;подготовке системы к&#160;работе, вы можете
                  их&#160;найти <a href="<?php echo luwrain_link('/doc/user/installation/');?>">здесь</a>.
                </p>
                <p>Выберите интересующий вас раздел:</p>
                <ul>
                  <li><a href="<?php echo luwrain_link('essentials/');?>">Основные понятия</a></li>
                  <li><a href="<?php echo luwrain_link('fundamentals');?>">Основные принципы управления и навигации</a></li>
                </ul>

<?php }?>
<?php luwrain_end_page('/doc/user/manual/index.php');?>
