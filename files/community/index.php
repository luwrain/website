<?php include "../functions.php"; luwrain_begin_page('/community/index.php', luwrain_current_lang() == 'ru'?'Сообщество':'Community');?>
<?php if (luwrain_current_lang() == 'en') {?>
                <h1>Luwrain community</h1>
                <p>
                  Everybody who is&#160;curious about Luwrain is&#160;invited to&#160;be a&#160;member of&#160;our
                  community! The&#160;community is very important because it can help us know your opinion
                  and suggestions on&#160;all things we do. With valuable feedback we are&#160;able to make
                  corresponding improvements and track known issues.
                </p>
                <p>Choose the&#160;option you are interested&#160;in:</p>
                <ul>
                  <li><a href="<?echo luwrain_link('mailing-lists');?>">Our&#160;mailing list</a></li>
                  <li><a target="_blank" href="http://twitter.com/luwrain">Follow&#160;us on&#160;Twitter</a></li>
                  <li><a href="<?echo luwrain_link('publications');?>">Our&#160;publications</a></li>
                  <li><a href="<?echo luwrain_link('extensions');?>">The&#160;list of&#160;extensions</a></li>
                  <li><a href="<?echo luwrain_link('bugs');?>">Reporting a&#160;bug</a></li>
                </ul>

<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
                <h1>Сообщество Luwrain</h1>
                <p>
                  Мы приглашаем всех, кому интересно обсуждать вопросы использования и разработки Luwrain,
                  стать членом нашего сообщества! Сообщество является очень важной частью Luwrain, поскольку
                  позволяет нам знать ваше мнение о&#160;нашей работе. Только при&#160;наличии надёжной обратной
                  связи мы можем вносить в&#160;Luwrain качественные улучшения.
                </p>
                <p>Сообщество Luwrain состоит из&#160;следующих ресурсов:</p>
                <ul>
                  <li><a href="<?echo luwrain_link('mailing-lists');?>">Список рассылки для&#160;обсуждений</a></li>
                  <li><a href="http://twitter.com/luwrain">Лента новостей на&#160;Twitter</a></li>
                  <li><a href="<?echo luwrain_link('publications');?>">Наши публикации</a></li>
                  <li><a href="<?echo luwrain_link('extensions');?>">Расширения Luwrain</a></li>
                  <li><a href="<?echo luwrain_link('bugs');?>">Сообщения об&#160;ошибках</a></li>
                </ul>

<?php }?>
<?php luwrain_end_page('/community/index.php');?>
