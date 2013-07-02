<?php include "../functions.php"; luwrain_begin_page('/doc/index.php', luwrain_current_lang() == 'ru'?'Документация':'Documentation');?>

                  <h1>Documentation</h1>

                  <p>
                    We have documentation sections on this website divided onto several groups. First of all
                    there are the links to the pages with material covering various technical details of Luwrain
                    environment. All of them are purposed for real or coming users as well as for developers
                    of any kind. If you would like to read developer documentation you may want to read sections
                    about developing of Luwrain environment itself or about creating new application for it.
                    In addition we have one more group below dedicated to Luwrain developing process fundamentals.
                  </p>
                  <p>Choose technical documentation section you need:</p>
                  <ul>
                    <li><a href="<?echo luwrain_link('users/');?>">Luwrain users documentation</a></li>
                    <li><a href="<?echo luwrain_link('devel/');?>">Luwrain developing documentation</a></li>
                    <li><a href="<?echo luwrain_link('apps/');?>">Luwrain applications creation documentation</a></li>
                  </ul>
                  <p>
                    Luwrain fundamentals describes its legal status, general design essentials and some collaboration
                    invitations. You can also read these pages if you would like to get complete project overview
                    at a glance.
                  </p>
                  <ul>
                    <li>
                      <a href="<?echo luwrain_link('about/');?>">The free story what is Luwrain and why do we think blind users need
                      it?</a>
                    </li>
                    <li><a href="<?echo luwrain_link('legal/');?>">Legal notes</a></li>
                    <li><a href="<?echo luwrain_link('faq/');?>">Frequently asked questions</a></li>
                    <li><a href="<?echo luwrain_link('hardware/');?>">Hardware support policy</a></li>
                    <li><a href="<?echo luwrain_link('partners/');?>">Be our partner and let do something together</a></li>
                    <li><a href="<?echo luwrain_link('sponsors/');?>">Be our sponsor and support our work</a></li>
                  </ul>



<?php luwrain_end_page();?>
