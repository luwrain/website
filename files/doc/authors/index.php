<?php include "../../functions.php"; luwrain_begin_page('/doc/authors/index.php', luwrain_current_lang() == 'ru'?'Авторы проекта':'Authors');?>
<?php if (luwrain_current_lang() == 'en') {?>

                <h1>Luwrain authors</h1>
                <p>
                  There is the&#160;list of&#160;people who participated in&#160;Luwrain project (in&#160;alphabetical
                  order):
                </p>
                <ul>
                  <li><b>Catherine Brown</b> (editing the&#160;English greeting on&#160;the&#160;main page)</li>
                  <li><b>Anastasia Gaponenko</b> (Russian female voice in greeting recording)</li>
                  <li><b>Joshua Iverson</b> (English male voice in greeting recording)</li>
                  <li><b>Alexander Lipatov</b> (sound editing)</li>
                  <li>
                    <b>Alexey Lubkin</b> (calculation of&#160;Bloom filter parameters needed for&#160;Luwrain
                    files synchronization algorithm)
                  </li>
                  <li><b>Renata Pozhidaeva</b> (website construction)</li>
                  <li><b>Stepan Shvets</b> (music decoration and sound effects)</li>
                </ul>
                <p>
                  A&#160;lot&#160;of other people helped Luwrain indirectly (in&#160;most cases through their
                  participating in&#160;ALT&#160;Linux Team). Luwrain is very grateful to Olga Yakovleva
                  who makes possible the&#160;free Russian text-to-speech engine (RHVoice speech synthesizer).
                </p>
                <p>
                  All coordination tasks maintained by&#160;<a target="_blank" href="http://marigostra.com/">Michael
                  Pozhidaev</a>.
                </p>
<?} ?>
<?php if (luwrain_current_lang() == 'ru') {?>
                <h1>Авторы проекта</h1>
                <p>Ниже приводится список всех&#160;участников проекта (в&#160;алфавитном порядке):</p>
                <ul>
                  <li><b>Джошуа Айверсон</b> (английский мужской голос в&#160;записи приветствия)</li>
                  <li>
                    <b>Кэтрин Браун</b> (редактирование английской версии приветствия на&#160;главной странице
                    сайта)
                  </li>
                  <li><b>Анастасия Гапоненко</b> (русский женский голос в&#160;записи приветствия)</li>
                  <li><b>Александр Липатов</b> (обработка аудио-записей)</li>
                  <li>
                    <b>Алексей Лубкин</b> (расчёт параметров фильтра Блюма для&#160;алгоритма синхронизации
                    файлов)
                  </li>
                  <li><b>Рената Пожидаева</b> (разработка веб-сайта)</li>
                  <li><b>Степан Швец</b> (музыкальные оформление и звуковые эффекты)</li>
                </ul>
                <p>
                  Существенную помощь проекту оказали разработчики, принимающие участие в&#160;команде ALT&#160;Linux.
                  Особенно Luwrain благодарит Ольгу Яковлеву, которая сделала возможным свободный синтезатор
                  речи для&#160;русского языка.
                </p>
                <p>Координацию проекта выполняет <a target="_blank" href="http://marigostra.ru/">Михаил Пожидаев</a>.</p>
<?php }?>
<?php luwrain_end_page('/doc/authors/index.php');?>
