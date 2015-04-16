<?php include "../../functions.php"; luwrain_begin_page('/community/publications/index.php', luwrain_current_lang() == 'ru'?'Публикации':'Publications');?>
<?php if (luwrain_current_lang() == 'en') {?>
                <h1>Publications</h1>
                <h2>About the&#160;project</h2>
                <ul>
                  <li>
                    <a href="<?php echo luwrain_link('BelyeBukvyNaChernomEkrane/');?>">Белые буквы на&#160;чёрном экране</a> («Кот
                    Шрёдингера», №1&#x2013;2, Svetlana Sokolova, January&#x2013;February, 2015, Russian language)
                  </li>
                  <li>
                    <a target="_blank" href="http://www.youtube.com/watch?v=m-HOWJCRn7g3">Идея фикс. Компьютер
                    для незрячих</a> («Живое ТВ», Svetlana Glazyrina, Youtube, October 3, 2014, Russian language)
                  </li>
                </ul>

<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
                <h1>Публикации</h1>
                <h2>О&#160;проекте</h2>
                <ul>
                  <li>
                    <a href="<?php echo luwrain_link('BelyeBukvyNaChernomEkrane/');?>">Белые буквы на&#160;чёрном экране</a> («Кот
                    Шрёдингера», №1&#x2013;2, Светлана Соколова, январь-февраль 2015&#160;г., рус.&#160;яз.)
                  </li>
                  <li>
                    <a target="_blank" href="http://www.youtube.com/watch?v=m-HOWJCRn7g3">Идея фикс. Компьютер
                    для незрячих</a> («Живое ТВ», Светлана Глазырина, Youtube, 3 октября 2014 г., рус.&#160;яз.)
                  </li>
                </ul>

<?php }?>
<?php luwrain_end_page('/community/publications/index.php');?>
