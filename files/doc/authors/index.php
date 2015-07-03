<?php include "../../functions.php"; luwrain_begin_page('/doc/authors/index.php', luwrain_current_lang() == 'ru'?'Авторы':'About Authors');?>
<?php if (luwrain_current_lang() == 'en') {?>
                <h1>LUWRAIN authors</h1>
                <p>
                  There is the&#160;list of&#160;people who participated in&#160;LUWRAIN project (in&#160;alphabetical
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
                  <li>
                    <b>Alexander Ustinov</b> (porting LUWRAIN to&#160;Microsoft Windows and building system
                    support)
                  </li>
                </ul>
                <p>The&#160;following companies and organizations support the&#160;project:</p>
                <ul>
                  <li>
                    <a target="_blank" href="http://www.bf-osyazanie.ru/">Charitable Fund for&#160;support
                    of&#160;blind and visually impaired people &#x22;Osyazanie&#x22;</a>
                  </li>
                  <li><a target="_blank" href="http://altlinux.com/">ALT&#160;Linux company</a></li>
                </ul>
                <p>
                  Especially LUWRAIN project is&#160;thankful to&#160;Olga Yakovleva who makes possible the&#160;free
                  Russian text-to-speech engine (<a target="_blank" href="http://github.com/Olga-Yakovleva/RHVoice">RHVoice
                  speech synthesizer</a>).
                </p>
                <p>
                  All coordination tasks are maintained by&#160;<a target="_blank" href="http://marigostra.com/">Michael
                  Pozhidaev</a>.
                </p>

<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
                <h1>Авторы проекта</h1>
                <p>Ниже приводится список всех&#160;участников проекта (в&#160;алфавитном порядке):</p>
                <ul>
                  <li><b>Андрей Ампилов</b> (музыкальные оформление и звуковые эффекты);</li>
                  <li><b>Джошуа Айверсон</b> (английский мужской голос в&#160;записи приветствия);</li>
                  <li>
                    <b>Кэтрин Браун</b> (редактирование английской версии приветствия на&#160;главной странице
                    сайта);
                  </li>
                  <li><b>Анастасия Гапоненко</b> (русский женский голос в&#160;первой записи приветствия);</li>
                  <li><b>Светлана Глазырина</b> (русский женский голос в&#160;второй записи приветствия);</li>
                  <li><b>Юрий Князев</b> (музыкальные оформление и звуковые эффекты);</li>
                  <li><b>Александр Липатов</b> (обработка аудио-записей);</li>
                  <li>
                    <b>Алексей Лубкин</b> (расчёт параметров фильтра Блюма для&#160;алгоритма синхронизации
                    файлов);
                  </li>
                  <li><b>Рената Пожидаева</b> (разработка веб-сайта);</li>
                  <li><b>Никита Пряничников</b> (поддержка работы LUWRAIN на&#160;MacOS-X);</li>
                  <li><b>Mgr. Janusz Chmiel</b> (чешский перевод)</li>
                  <li>
                    <b>Александр Устинов</b> (поддержка работы LUWRAIN на&#160;Microsoft Windows и доработка
                    сборочных систем);
                  </li>
                  <li><b>Степан Швец</b> (музыкальные оформление и звуковые эффекты).</li>
                </ul>
                <p>Поддержку проекта оказывают следующие компании и организации:</p>
                <ul>
                  <li>
                    <a target="_blank" href="http://www.bf-osyazanie.ru/">Благотворительный фонд помощи слабовидящим
                    и незрячим «Осязание»</a>;
                  </li>
                  <li><a target="_blank" href="http://altlinux.ru">компания «Альт&#160;Линукс»</a>.</li>
                </ul>
                <p>
                  Проект особенно ценит работу Ольги Яковлевой, которая сделала возможным русскоязычный свободный
                  синтезатор речи <a target="_blank" href="http://github.com/Olga-Yakovleva/RHVoice">RHVoice</a>.
                </p>
                <p>Координацию проекта выполняет <a target="_blank" href="http://marigostra.ru/">Михаил Пожидаев</a>.</p>

<?php }?>
<?php luwrain_end_page('/doc/authors/index.php');?>
