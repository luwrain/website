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
                  <li><a href="<?php echo luwrain_link('mailing-lists');?>">Our&#160;mailing lists</a></li>
                  <li><a target="_blank" href="http://twitter.com/luwrain">Follow&#160;us on&#160;Twitter</a></li>
                  <li><a href="<?php echo luwrain_link('publications');?>">Our&#160;publications</a></li>
                  <li><a href="<?php echo luwrain_link('extensions');?>">The&#160;list of&#160;extensions</a></li>
                  <li><a href="<?php echo luwrain_link('bugs');?>">Reporting a&#160;bug</a></li>
                </ul>

<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
                <h1>Наше&#160;сообщество</h1>
                <p>
                  Всех, кому интересно обсуждение вопросов использования и разработки Luwrain, мы приглашаем
                  стать членом нашего сообщества! Поскольку сообщество позволяет разработчикам знать мнение
                  пользователей, оно имеет для&#160;нас очень большое значение. Надёжная обратная связь позволяет
                  вносить в&#160;Luwrain качественные и нужные улучшения.
                </p>
                <p>Сообщество Luwrain состоит из&#160;нескольких ресурсов:</p>
                <ul>
                  <li><a href="<?php echo luwrain_link('mailing-lists');?>">Списки рассылки</a></li>
                  <li><a href="http://twitter.com/luwrain">Лента новостей на&#160;Twitter</a></li>
                  <li><a href="<?php echo luwrain_link('publications');?>">Наши публикации</a></li>
                  <li><a href="<?php echo luwrain_link('extensions');?>">Расширения Luwrain</a></li>
                  <li><a href="<?php echo luwrain_link('bugs');?>">Сообщения об&#160;ошибках</a></li>
                </ul>
                <h2>Свежие материалы</h2>
                <ul>
                  <li>
                    <a href="http://habrahabr.ru/post/258413/">Никита Цейковец на&#160;Хабрахабр о&#160;разработке
                    приложений для&#160;Luwrain</a>
                  </li>
                </ul>

<?php }?>
<?php luwrain_end_page('/community/index.php');?>
