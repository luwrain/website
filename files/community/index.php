<?php include "../functions.php"; luwrain_begin_page('/community/index.php', luwrain_current_lang() == 'ru'?'Сообщество':'Community');?>

<?php if (luwrain_current_lang() == 'en') {?>
                  <h1>Luwrain community</h1>
                  <p>
                    We invide everybody who is&#160;interested in&#160;Luwrain using or developing to&#160;be
                    a&#160;member of&#160;our community. Even if you want just to&#160;chat about assistive
                    technologies or to&#160;suggest any new ideas fill free to&#160;subscribe to&#160;our mailing
                    list and discuss that there.
                  </p>
                  <p>
                    The&#160;main purpose of&#160;the&#160;community is an&#160;exchanging of&#160;users experience.
                    It&#160;is very important thing as&#160;we&#160;need to&#160;know any&#160;valuable feedback
                    about our&#160;product. It allows us make corresponding improvements in&#160;our future
                    releases and track known issues. However, this community is&#160;also a&#160;proper place
                    for&#160;everybody who has intentions to&#160;participate in&#160;Luwrain developing. Generally, community
                    help in&#160;the&#160;following tasks will be definitely appreciated:
                  </p>
                  <ul>
                    <li><a href="<?echo luwrain_link('bugs');?>">Bugs reporting </a> (provided patch makes fix noticeably quick)</li>
                    <li>
                      Testing Luwrain on various hardware to&#160;build list of supported and recommended PC
                      models
                    </li>
                    <li>
                      Implementing interaction with other projects for easy access (especially with numerous
                      web services)
                    </li>
                  </ul>
                  <p>
                    If you are interested in&#160;more serious developing with&#160;Luwrain, please, visit our
                    <a href="<?echo luwrain_link('/doc/devel/');?>">resources for&#160;developers</a>.
                  </p>
                  <p>
                    Every community in&#160;the&#160;Internet is a&#160;place gathering together large number
                    of people so everybody is&#160;urged to be&#160;polite and respect other members. You can
                    subscribe to&#160;our mailing list or simply provide a&#160;technical report with the following links:
                  </p>
                  <ul>
                    <li><a href="<?echo luwrain_link('mailing-list/');?>">Luwrain mailing list information</a></li>
                    <li><a href="<?echo luwrain_link('bugs');?>">Provide a&#160;technical report about a&#160;bug in&#160;Luwrain</a></li>
                  </ul>

<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>

                  <h1>Сообщество Luwrain</h1>
                  <p>
                    Мы приглашаем всех, кто заинтересован в&#160;использовании или разработке Luwrain, присоединиться
                    к&#160;нашему сообществу. Даже если Вы намерены просто пообщаться на&#160;темы вспомогательных
                    технологий или предложить какие-то свои идеи, то нет&#160;никаких возражений против того,
                    чтобы делать это в&#160;нашем списке рассылки.
                  </p>
                  <p>
                    Наше сообщество создано для того, чтобы обеспечить пользователям возможность обмениваться
                    своим опытом. Это очень важно, поскольку нам необходимо знать мнение наших пользователей.
                    С&#160;их помощью мы сможем вносить улучшения в&#160;будущие версии и отслеживать появившиеся
                    ошибки. Тем&#160;не&#160;менее, сообщество также хорошо подходит и для&#160;обсуждения
                    всех вопросов, связанных с&#160;непосредственным участием в&#160;процессе разработки Luwrain.
                    Участие сообщества особенно важно при&#160;решении следующих задач:
                  </p>
                  <ul>
                    <li>
                      <a href="<?echo luwrain_link('bugs');?>">предоставление отчётов об&#160;ошибках</a> (подготовка патча заметно
                      ускоряет их&#160;устранение);
                    </li>
                    <li>
                      тестирование Luwrain на&#160;различном оборудовании для&#160;составления перечня подходящих
                      и рекомендуемых моделей компьютеров;
                    </li>
                    <li>
                      реализация взаимодействия с&#160;возможностями других проектов для&#160;облегчения их&#160;использования
                      (особенно с&#160;веб-сервисами).
                    </li>
                  </ul>
                  <p>
                    Если Вы хотели&#160;бы принять более серьёзное участие в&#160;разработке Luwrain, то посетите
                    наш&#160;<a href="<?echo luwrain_link('/doc/devel/');?>">раздел с&#160;ресурсами для&#160;разработчиков</a>.
                  </p>
                  <p>
                    Любое сообщество в&#160;Интернете &#x2014; это место, где встречаются вместе большое количество
                    людей, поэтому убедительная просьба во&#160;всех обсуждениях придерживаться правил вежливости
                    и уважения, чтобы дискуссии были&#160;бы приятны для&#160;всех. Подписывайтесь на&#160;наш
                    список!
                  </p>
                  <ol>
                    <li><a href="<?echo luwrain_link('mailing-list/');?>">Информация о&#160;списке рассылки Luwrain</a>.</li>
                    <li><a href="<?echo luwrain_link('bugs');?>">Сообщить о&#160;найденной ошибке</a>.</li>
                  </ol>

<?php }?>

<?php luwrain_end_page('/community/index.php');?>
