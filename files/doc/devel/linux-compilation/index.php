<?php include "../../../functions.php"; luwrain_begin_page('/doc/devel/linux-compilation/index.php', luwrain_current_lang() == 'ru'?'Компиляция в GNU/Linux':'Compilation in GNU/Linux');?>
<?php if (luwrain_current_lang() == 'en') {?>
                <h1>Compilation in&#160;GNU/Linux</h1>
                <p>
                  In&#160;order to&#160;get Luwrain compiled and ready to&#160;launch, you should have on&#160;your
                  machine the&#160;following software:
                </p>
                <ul>
                  <li>Java&#160;SE 1.7 or higher</li>
                  <li>g++</li>
                  <li>ant</li>
                  <li>make</li>
                  <li>git</li>
                  <li>wget</li>
                  <li>unzip</li>
                </ul>
                <p>And, of&#160;course, some TTS-engines (espeak, likely, the&#160;most preferable choice).</p>

<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
                <h1>Компиляция в&#160;GNU/Linux</h1>

<?php }?>
<?php luwrain_end_page('/doc/devel/linux-compilation/index.php');?>
