<?php include "../functions.php"; luwrain_begin_page('/community/index.php', luwrain_current_lang() == 'ru'?'Сообщество':'Community');?>
<?php if (luwrain_current_lang() == 'en') {?>
                <h1>Luwrain community</h1>
                <p>
                  Everybody who is&#160;curious about Luwrain is&#160;invited to&#160;be a&#160;member of&#160;our
                  community! The&#160;community is very important because it can help us know your comments
                  and opinion on&#160;all things we do. With valuable feedback we are&#160;able to make
                  corresponding improvements and track known issues. but please be&#160;aware that we are
                  still working on&#160;building&#160;up effective interaction with&#160;users and developers.
                  not&#160;all parts of&#160;this section are&#160;already fully available.
                </p>
                <p>With&#160;Luwrain community you may be interested&#160;in:</p>
                <ul>
                  <li><a href="<?echo luwrain_link('mailing-lists');?>">The&#160;Luwrain mailing lists</a></li>
                  <li><a href="<?echo luwrain_link('twitter');?>">Following us on&#160;Twitter</a></li>
                  <li><a href="<?echo luwrain_link('publications');?>">The&#160;publications dedicated to&#160;Luwrain</a></li>
                  <li><a href="<?echo luwrain_link('extensions');?>">Luwrain extensions</a></li>
                  <li><a href="<?echo luwrain_link('bugs');?>">Reporting a&#160;bug</a></li>
                </ul>
<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
                <h1>Сообщество Luwrain</h1>
                <p>
                  Мы приглашаем всех, кому интересно обсуждать вопросы использования и разработки Luwrain,
                  стать членом нашего сообщества. Сообщество является очень важной частью Luwrain, поскольку
                  позволяет нам знать Ваше мнение о&#160;нашей работе. Только при&#160;наличии надёжной обратной
                  связи мы можем вносить в&#160;Luwrain качественные улучшения.
                </p>
                <p>
                  Пожалуйста, обратите внимание, что наше сообщество пока находится в&#160;стадии становления,
                  и не&#160;все ресурсы доступны. Приносим извинения за&#160;временные неудобства.
                </p>
                <p>Сообщество Luwrain состоит из&#160;следующих ресурсов:</p>
                <ul>
                  <li><a href="<?echo luwrain_link('mailing-lists');?>">списки подписки для&#160;обсуждений Luwrain;</a></li>
                  <li><a href="<?echo luwrain_link('twitter');?>">лента сообщений на&#160;Twitter;</a></li>
                  <li><a href="<?echo luwrain_link('publications');?>">публикации о&#160;Luwrain;</a></li>
                  <li><a href="<?echo luwrain_link('extensions');?>">расширения Luwrain;</a></li>
                  <li><a href="<?echo luwrain_link('bugs');?>">сообщения об&#160;ошибках.</a></li>
                </ul>
<?php }?>
<?php luwrain_end_page('/community/index.php');?>
