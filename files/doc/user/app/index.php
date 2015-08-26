<?php include "../../../functions.php"; luwrain_begin_page('/doc/user/app/index.php', luwrain_current_lang() == 'ru'?'Приложения':'Applications');?>
<?php if (luwrain_current_lang() == 'en') {?>
                <h1>Applications</h1>
                <p>Sorry, this page is still available in&#160;Russian language only. Please, try later.</p>

<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
                <h1>Приложения</h1>
                <p>В&#160;состав LUWRAIN входят следующие приложения:</p>
                <ul>
                  <li>
                    Интернет:
                  <ul>
                    <li>Веб-браузер</li>
                    <li>Электронная почта</li>
                    <li>Чтение новостей</li>
                    <li>Загрузка файлов</li>
                    <li>Клиент для&#160;Twitter</li>
                  </ul>
                  </li>
                  <li>
                    Документы и книги:
                  <ul>
                    <li>Работа с&#160;документами и текстовыми книгами (просмотр и прослушивание)</li>
                    <li>Среда разработки для проектов с&#160;текстовыми файлами (TeX, Lilypond и языки программирования)</li>
                    <li>Редактор документов в&#160; формате Docx</li>
                  </ul>
                  </li>
                  <li>
                    Файлы и папки:
                  <ul>
                    <li>Файловый менеджер</li>
                  </ul>
                  </li>
                  <li>
                    Мультимедия:
                  <ul>
                    <li>Проигрыватель музыкальных файлов и &#x22;говорящих книг&#x22;</li>
                    <li>Клиент для Youtube</li>
                  </ul>
                  </li>
                  <li>
                    Персональная информация:
                  <ul>
                    <li>Адресная книга</li>
                    <li>Дневник и личный планировщик</li>
                    <li>Календарь</li>
                    <li>Управление личными задачами</li>
                  </ul>
                  </li>
                  <li>
                    Управление и аксессуары:
                  <ul>
                    <li>Блокнот</li>
                    <li>Калькулятор</li>
                    <li>Командная строка</li>
                    <li>Поиск файлов и объектов в системе</li>
                    <li>Управление подключениями Wi-Fi</li>
                    <li>Панель управления</li>
                    <li>Редактор реестра</li>
                  </ul>
                  </li>
                </ul>

<?php }?>
<?php luwrain_end_page('/doc/user/app/index.php');?>
