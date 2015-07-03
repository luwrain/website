<?php include "../../functions.php"; luwrain_begin_page('/doc/new-app/index.php', luwrain_current_lang() == 'ru'?'Создание нового приложения':'Creating  the application');?>
<?php if (luwrain_current_lang() == 'en') {?>
                <h1>Creating the&#160;application</h1>
                <p>This page is available in Russian language only.</p>

<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
                <h1>Создание нового приложения</h1>
                <p>
                  LUWRAIN &#x2014; это прежде всего платформа для&#160;создания приложений, предельно адаптированных
                  для&#160;восприятия людей с&#160;нарушениями зрения. Возможность это делать является неотъемлемой
                  частью нашего продукта. Документация настоящего раздела призвана помочь всем желающим получить
                  необходимые сведения, которые требуются для самостоятельной подготовки расширений LUWRAIN.
                  Набор классов Java, необходимых при&#160;разработке приложений, мы&#160;называем LUWRAIN&#160;API,
                  и ему посвящён <a href="/api/">отдельный раздел</a>, состоящий из&#160;автоматически сгенерированной
                  документации Javadoc.
                </p>
                <p>
                  Описание разбито на&#160;несколько секций, перечисленных в&#160;порядке, наиболее подходящем
                  для&#160;последовательного чтения:
                </p>
                <ol>
                  <li><a href="<?php echo luwrain_link('intro/');?>">Введение</a></li>
                  <li><a href="<?php echo luwrain_link('essentials/');?>">Основные понятия приложений</a></li>
                  <li><a href="<?php echo luwrain_link('luwrain/');?>">Класс <i>LUWRAIN</i></a></li>
                  <li><a href="<?php echo luwrain_link('events/');?>">События приложений</a></li>
                  <li><a href="<?php echo luwrain_link('controls/');?>">Библиотека стандартных элементов управления</a></li>
                  <li><a href="<?php echo luwrain_link('custom/');?>">Создание собственных элементов управления</a></li>
                  <li><a href="<?php echo luwrain_link('popups/');?>">Библиотека стандартных всплывающих областей</a></li>
                  <li><a href="<?php echo luwrain_link('multithreading/');?>">Создание многопоточных приложений</a></li>
                  <li><a href="<?php echo luwrain_link('registry/');?>">Работа с&#160;реестром</a></li>
                  <li><a href="<?php echo luwrain_link('compilation/');?>">Сборка вашего приложения</a></li>
                  <li><a href="<?php echo luwrain_link('example/');?>">Пример простейшего приложения</a></li>
                </ol>
                <h2>См.&#160;также</h2>
                <ul>
                  <li>
                    <a href="http://habrahabr.ru/post/258413/">Никита Цейковец на&#160;Хабрахабр о&#160;разработке
                    приложений для&#160;LUWRAIN</a>
                  </li>
                </ul>

<?php }?>
<?php luwrain_end_page('/doc/new-app/index.php');?>
