<?php include "../../../functions.php"; luwrain_begin_page('/doc/new-app/intro/index.php', luwrain_current_lang() == 'ru'?'Введение в создание приложений':'Introduction to creating new application');?>
<?php if (luwrain_current_lang() == 'en') {?>
                <h1>Introduction to creating new applications</h1>
                <p>This page is available in Russian language only.</p>

<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
                <h1>Введение в&#160;создание новых приложений</h1>
                <p>
                  Создание новых приложений &#x2014; крайне важный механизм расширения функциональности Luwrain.
                  Наша среда позволяет это делать при&#160;помощи предельно простых инструментов, используя
                  возможности языка Java, который является основным языком как для&#160;разработки самого
                  Luwrain, так и для&#160;разработки новых сторонних приложений для&#160;него. Прежде всего
                  необходимо обратить внимание, что несмотря на&#160;использование термина &#x22;приложение&#x22;,
                  расширения Luwrain не&#160;являются полноценными приложениями в&#160;полном смысле этого
                  слова, поскольку они не&#160;запускаются в&#160;отдельном процессе и разделяют своё адресное
                  пространство с&#160;адресным пространством самой среды. Это позволяет значительно повысить
                  производительность системы, хотя мы и ведём исследование путей запуска приложений в&#160;сторонних
                  виртуальных машинах Java для&#160;обеспечения достаточного уровня безопасности.
                </p>
                <p>
                  Документация этого раздела не&#160;охватывает основы программирования на&#160;Java, мы
                  полагаем, что у&#160;вас уже есть опыт разработки на&#160;этом языке. Тем не&#160;менее,
                  наш инструментарий подготовлен таким образом, чтобы им могли пользоваться люди <b>без&#160;опыта
                  в&#160;сфере вспомогательных технологий</b>. Это крайне важно, поскольку сфера вспомогательных
                  технологий довольно сложна, и большинство разработчиков обычно не&#160;имеют достаточного
                  опыта и знаний в&#160;ней.
                </p>
                <p>Для&#160;разработки приложения Luwrain вам потребуется:</p>
                <ol>
                  <li>Иметь установленную Java&#160;SE SDK не&#160;ниже версии 1.7.</li>
                  <li>Загрузить и установить <a href="<?php echo luwrain_link('/download/sdk');?>">Luwrain&#160;SDK</a>.</li>
                  <li>Иметь установленный Luwrain в&#160;любом виде для&#160;запуска результатов вашей работы.</li>
                </ol>
                <p>
                  Приложения Luwrain оформляются в&#160;виде jar-файлов, которые помещаются в&#160;список
                  classpath. В&#160;наших традициях предполагается, что приложение должно предоставлять одну
                  или несколько так&#160;называемых &#x22;команд&#x22; (<i>command</i>) и один или несколько
                  &#x22;ярлыков&#x22; (<i>shortcut</i>), которые облегчают запуск приложений пользователем.
                  Описание этих понятий доступно вместе с&#160;<a href="<?php echo luwrain_link('/doc/new-app/essentials/');?>">описанием
                  основных элементов</a>, из&#160;которых строится интерфейс приложений Luwrain.
                </p>
                <h2>Читать далее</h2>
                <ul>
                  <li><a href="<?php echo luwrain_link('/doc/new-app/essentials/');?>">Основные понятия приложений Luwrain</a></li>
                </ul>

<?php }?>
<?php luwrain_end_page('/doc/new-app/intro/index.php');?>