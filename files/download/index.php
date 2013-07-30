<?php include "../functions.php"; luwrain_begin_page('/download/index.php', luwrain_current_lang() == 'ru'?'Загрузить':'Download');?>

                  <p>
                    There are three options of downloading you may want to continue with. If you are new to
                    Luwrain or just need a distribution for work very likely you should select the first one.
                    This option provides binary distribution prepared in form of bootable CDs. A couple of
                    others purposed for developer tasks. What exact one of them is suitable for you is dependent
                    on kind of work you are interested in. Source materials usually serve for exploring of
                    software internal implementation or for developing of Luwrain itself. Binary package includes
                    Luwrain main jar-file and all auxiliary libraries for using on various Linux distributions
                    although this way is preferable for experienced users.
                  </p>
                  <p>Choose the exact option you need:</p>
                  <ul>
                    <li><a href="<?echo luwrain_link('distr/');?>">The Luwrain distributions as bootable ISO</a></li>
                    <li><a href="<?echo luwrain_link('sources/');?>">The Luwrain sources</a></li>
                    <li><a href="<?echo luwrain_link('binary/');?>">The Luwrain binary package</a></li>
                  </ul>




<?php luwrain_end_page('/download/index.php');?>
