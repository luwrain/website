<?php include "../../../functions.php"; luwrain_begin_page('/doc/user/installation/index.php', luwrain_current_lang() == 'ru'?'Установка на жёсткий диск':'Installation instructions');?>
<?php if (luwrain_current_lang() == 'en') {?>
                <h1>Installation instructions</h1>
                <p>
                  The&#160;installation of&#160;LUWRAIN on&#160;your PC can be&#160;performed in&#160;several
                  ways. It&#160;depends on&#160;whether you&#x27;d like to&#160;get LUWRAIN as&#160;a&#160;stand-alone
                  OS or as&#160;an&#160;application. In&#160;second case it&#160;also depends on&#160;the&#160;type
                  of&#160;OS you have installed on&#160;your PC.
                </p>
                <h2>Select the&#160;way you&#x27;d like to&#160;continue with:</h2>
                <ul>
                  <li>Install LUWRAIN as&#160;a&#160;stand-alone OS</li>
                  <li>
                    Install LUWRAIN as&#160;an&#160;application for:
                  <ul>
                    <li>Microsoft Windows</li>
                    <li><a href="<?php echo luwrain_link('linux/');?>">GNU/Linux</a></li>
                  </ul>
                  </li>
                </ul>

<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
                <h1>Установка на&#160;жёсткий диск</h1>
                <p>
                  Установка LUWRAIN на&#160;жёсткий диск для&#160;постоянной работы может осуществляться
                  несколькими разными способами. Точное описание зависит от&#160;того, желаете&#160;ли вы
                  установить LUWRAIN как&#160;самостоятельную ОС или как&#160;приложение. В&#160;последнем
                  случае процедура дополнительно различается в&#160;зависимости от&#160;типа ОС, уже имеющейся
                  на&#160;вашем ПК.
                </p>
                <h2>Выберите подходящий для&#160;вас вариант:</h2>
                <ul>
                  <li>Установка LUWRAIN на&#160;компьютер в&#160;виде самостоятельной ОС</li>
                  <li>
                    Установка LUWRAIN на&#160;компьютер в&#160;виде приложения для:
                  <ul>
                    <li>Microsoft Windows</li>
                    <li><a href="<?php echo luwrain_link('linux');?>">GNU/Linux</a></li>
                  </ul>
                  </li>
                </ul>

<?php }?>
<?php luwrain_end_page('/doc/user/installation/index.php');?>
