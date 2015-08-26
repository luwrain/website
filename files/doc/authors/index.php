<?php include "../../functions.php"; luwrain_begin_page('/doc/authors/index.php', luwrain_current_lang() == 'ru'?'Авторы':'Authors');?>
<?php if (luwrain_current_lang() == 'en') {?>
                <h1>Project authors</h1>
                <p>
                  LUWRAIN development is under&#160;way in&#160;<a href="http://e-moskva.ru/">&#x22;Electronic
                  Moscow&#x22;</a>. Our main team includes (in&#160;alphabetical order):
                </p>
                <ul>
                  <li>Alexey Goloshumov</li>
                  <li><a href="http://marigostra.com">Michael Pozhidaev</a></li>
                  <li>Roman Volovodov</li>
                </ul>
                <p>
                  There is the&#160;list of&#160;people who participated in&#160;our project (in&#160;alphabetical
                  order):
                </p>
                <ul>
                  <li><b>Andrey Ampilov</b> (music decoration and sound effects)</li>
                  <li><b>Catherine Brown</b> (editing the&#160;English greeting on&#160;the&#160;main page)</li>
                  <li><b>Anastasia Gaponenko</b> (Russian female voice in the first greeting recording)</li>
                  <li><b>Svetlana Glazyrina</b> (Russian female voice in the second greeting recording)</li>
                  <li><b>Joshua Iverson</b> (English male voice in greeting recording)</li>
                  <li><b>Yuriy Knyazev</b> (music decoration and sound effects)</li>
                  <li><b>Alexander Lipatov</b> (sound editing)</li>
                  <li>
                    <b>Alexey Lubkin</b> (calculation of&#160;Bloom filter parameters needed for&#160;the&#160;LUWRAIN
                    files synchronization algorithm)
                  </li>
                  <li><b>Renata Pozhidaeva</b> (the&#160;&#160;website construction)</li>
                  <li><b>Nikita Prianichnikov</b> (porting LUWRAIN to&#160;MacOS-X)</li>
                  <li><b>Mgr. Janusz Chmiel</b> (Czech translation)</li>
                  <li><b>Stepan Shvets</b> (music decoration and sound effects)</li>
                  <li><b>Nikita Tseikovets</b> (information support)</li>
                  <li>
                    <b>Alexander Ustinov</b> (porting LUWRAIN to&#160;Microsoft Windows and building system
                    support)
                  </li>
                </ul>
                <p>We are very thankful to&#160;the&#160;following people and organizations:</p>
                <ul>
                  <li>
                    <a target="_blank" href="http://www.bf-osyazanie.ru/">Charitable Fund for&#160;support
                    of&#160;blind and visually impaired people &#x22;Osyazanie&#x22;</a>
                  </li>
                  <li><a target="_blank" href="http://altlinux.com/">ALT&#160;Linux company</a></li>
                  <li>
                    Olga Yakovleva who makes possible the&#160;free Russian text-to-speech engine, <a href="http://github.com/Olga-Yakovleva/RHVoice">RHVoice
                    speech synthesizer</a>
                  </li>
                </ul>

<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
                <h1>Авторы проекта</h1>
                <p>
                  Разработка LUWRAIN выполняется компанией <a href="http://e-moskva.ru">&lt;&lt;Электронная
                  Москва&gt;&gt;</a>. В&#160;основную группу разработчиков входят (в&#160;алфавитном порядке):
                </p>
                <ul>
                  <li>Роман Воловодов</li>
                  <li>Алексей Голошумов</li>
                  <li><a href="http://marigostra.ru">Михаил Пожидаев</a></li>
                </ul>
                <p>Проекту помогали (в&#160;алфавитном порядке):</p>
                <ul>
                  <li><b>Андрей Ампилов</b> (музыкальные оформление и звуковые эффекты)</li>
                  <li><b>Джошуа Айверсон</b> (английский мужской голос в&#160;записи приветствия)</li>
                  <li>
                    <b>Кэтрин Браун</b> (редактирование английской версии приветствия на&#160;главной странице
                    сайта)
                  </li>
                  <li><b>Анастасия Гапоненко</b> (русский женский голос в&#160;первой записи приветствия)</li>
                  <li><b>Светлана Глазырина</b> (русский женский голос в&#160;второй записи приветствия)</li>
                  <li><b>Юрий Князев</b> (музыкальные оформление и звуковые эффекты)</li>
                  <li><b>Александр Липатов</b> (обработка аудио-записей)</li>
                  <li>
                    <b>Алексей Лубкин</b> (расчёт параметров фильтра Блюма для&#160;алгоритма синхронизации
                    файлов)
                  </li>
                  <li><b>Рената Пожидаева</b> (разработка веб-сайта)</li>
                  <li><b>Никита Пряничников</b> (поддержка работы LUWRAIN на&#160;MacOS-X)</li>
                  <li><b>Mgr. Janusz Chmiel</b> (чешский перевод)</li>
                  <li>
                    <b>Александр Устинов</b> (поддержка работы LUWRAIN на&#160;Microsoft Windows и доработка
                    сборочных систем)
                  </li>
                  <li><b>Никита Цейковец</b> (информационная поддержка проекта)</li>
                  <li><b>Степан Швец</b> (музыкальные оформление и звуковые эффекты)</li>
                </ul>
                <p>Мы очень благодарны этим&#160;людям и организациям:</p>
                <ul>
                  <li>
                    <a target="_blank" href="http://www.bf-osyazanie.ru/">благотворительному фонду помощи слабовидящим
                    и незрячим «Осязание»</a>;
                  </li>
                  <li><a target="_blank" href="http://altlinux.ru">компании «Альт&#160;Линукс»</a>;</li>
                  <li>Ольге Яковлевой за&#160;превосходный русский синтезатор речи <a href="http://github.com/Olga-Yakovleva/RHVoice">RHVoice</a>.</li>
                </ul>

<?php }?>
<?php luwrain_end_page('/doc/authors/index.php');?>
