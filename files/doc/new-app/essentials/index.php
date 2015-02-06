<?php include "../../../functions.php"; luwrain_begin_page('/doc/new-app/essentials/index.php', luwrain_current_lang() == 'ru'?'Основные понятия приложений':'Application essentials');?>
<?php if (luwrain_current_lang() == 'en') {?>
                <h1>Application essentials</h1>

<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
                <h1>Основные понятия приложений</h1>
                <p>
                  На&#160;этой странице перечислены основные понятия, которые необходимо знать для&#160;построения
                  интерфейса приложения Luwrain. Они все представлены классами или интерфейсами, входящими
                  в&#160;Luwrain&#160;API на&#160;языке Java. Для&#160;вашего удобства мы снабдили описания
                  ссылками на&#160;соответствующие страницы документации javadoc для&#160;Luwrain&#160;API.
                </p>
                <h2>Экземпляр приложения (<i>Application</i>)</h2>
                <p>См.&#160;также:</p>
                <ul>
                  <li>
                    <a href="/api/org/luwrain/core/Application.html">страница <i>org.luwrain.core.Application</i>
                    в&#160;Luwrain&#160;API</a>.
                  </li>
                </ul>
                <p>
                  Это самое главное понятие, которое охватывает всё, что относится к&#160;некоторому конкретному
                  экземпляру приложения. экземпляр приложения должен удовлетворять интерфейсу <i>org.luwrain.core.Application</i>.
                  Допускается одновременный запуск множественных экземпляров одного и того&#160;же приложения.
                  Каждый экземпляр имеет имя, которое некоторым образом идентифицирует его для&#160;пользователя.
                  Никаких ограничений на&#160;имя не&#160;накладывается: оно может никак не&#160;описывать,
                  экземпляр какого приложения оно обозначает, и допускается присутствие в&#160;системе нескольких
                  экземпляров с&#160;одинаковым именем (что, очевидно, порождает неудобство для&#160;пользователя
                  и не&#160;рекомендуется).
                </p>
                <p>Экземпляр приложения должен выполнять две&#160;основные операции:</p>
                <ul>
                  <li>произвести инициализацию (путём вызова средой метода <i>onLaunch()</i>);</li>
                  <li>предоставить набор областей с&#160;информацией об&#160;их расположении (см.&#160;ниже).</li>
                </ul>
                <p>
                  Во&#160;время инициализации экземпляру передаётся объект <i>Luwrain</i>, который используется
                  для&#160;идентификации и организации взаимодействия с&#160;основной средой. Его&#160;назначение
                  подробно описано на&#160;<a href="<?php echo luwrain_link('/doc/new-app/luwrain/');?>">этой&#160;странице</a>.
                </p>
                <h2>Область (<i>Area</i>)</h2>
                <p>См.&#160;также:</p>
                <ul>
                  <li><a href="/api/org/luwrain/core/Area.html">страница <i>org.luwrain.core.Area</i> в&#160;Luwrain&#160;API</a>.</li>
                </ul>
                <p>
                  область &#x2014; основной элемент построения доступного интерфейса в&#160;традициях Luwrain.
                  Каждая область должна удовлетворять интерфейсу <i>org.luwrain.core.Area</i>. Области представляют
                  собой некоторый рабочий объект, с&#160;которым взаимодействует пользователь. Они могут
                  являться как&#160;некоторым одним элементом управления (список, редактирование&#160;текста,
                  таблица, дерево и&#160;т.&#160;д.), так и сборным (например, формой с&#160;несколькими
                  элементами управления).
                </p>
                <p>Область имеет следующие ключевые особенности:</p>
                <ul>
                  <li>
                    предоставляет некоторое текстовое представление своего содержимого, которое выводится на&#160;экран
                    для&#160;дополнения речевого вывода, облегчающего работу слабовидящим пользователям;
                  </li>
                  <li>
                    имеет так&#160;называемую &#x22;горячую точку&#x22; (<i>Hot point</i>), т.&#160;е. координаты
                    отметки, ассоциированной с&#160;текущим положением в&#160;текстовом представлении (для&#160;простоты
                    можно считать это обобщением понятия курсора);
                  </li>
                  <li>выступает получателем событий для&#160;различных оповещений среды;</li>
                  <li>имеет имя.</li>
                </ul>
                <p>
                  Обратите внимание, что области не&#160;имеют единого механизма предоставления речевого
                  описания их&#160;содержимого. Речевой вывод синтезируется отдельно в&#160;рамках обработки
                  событий среды, которые включают в&#160;себя в&#160;том числе и команды пользователя.
                </p>
                <p>
                  Текстовое описание предоставляется массивом строк, который <b>не&#160;может иметь нулевую
                  длину</b> (пустое описание &#x2014; массив с&#160;одной пустой строкой). Развёрнутое описание
                  событий среды доступно на&#160;<a href="<?php echo luwrain_link('/doc/new-app/events/');?>">этой&#160;странице</a>.
                </p>
                <h2>Всплывающая область (<i>Popup</i>)</h2>
                <p>См.&#160;также:</p>
                <ul>
                  <li><a href="/api/org/luwrain/core/Popup.html">страница <i>org.luwrain.core.Popup</i> в&#160;Luwrain&#160;API</a>.</li>
                </ul>
                <p>Каждая всплывающая область должна удовлетворять интерфейсу <i>org.luwrain.core.Popup</i>.</p>
                <h2>Расположение областей (<i>AreaLayout</i>)</h2>
                <p>См.&#160;также:</p>
                <ul>
                  <li>
                    <a href="/api/org/luwrain/core/AreaLayout.html">страница <i>org.luwrain.core.AreaLayout</i>
                    в&#160;Luwrain&#160;API</a>.
                  </li>
                </ul>
                <p>Расположения областей должны удовлетворять интерфейсу <i>org.luwrain.core.AreaLayout</i>.</p>
                <h2>Команда (<i>Command</i>)</h2>
                <p>См.&#160;также:</p>
                <ul>
                  <li><a href="/api/org/luwrain/core/Command.html">страница <i>org.luwrain.core.Command</i> в&#160;Luwrain&#160;API</a>.</li>
                </ul>
                <p>Команды должны удовлетворять интерфейсу <i>org.luwrain.core.Command</i>.</p>
                <h2>Ярлык (<i>Shortcut</i>)</h2>
                <p>См.&#160;также:</p>
                <ul>
                  <li>
                    <a href="/api/org/luwrain/core/Shortcut.html">страница <i>org.luwrain.core.Shortcut</i>
                    в&#160;Luwrain&#160;API</a>.
                  </li>
                </ul>
                <p>Ярлыки должны удовлетворять интерфейсу <i>org.luwrain.core.Shortcut</i>.</p>
                <h2>Реестр (<i>Registry</i>)</h2>
                <p>См.&#160;также:</p>
                <ul>
                  <li>
                    <a href="/api/org/luwrain/core/Registry.html">страница <i>org.luwrain.core.Registry</i>
                    в&#160;Luwrain&#160;API</a>.
                  </li>
                </ul>

<?php }?>
<?php luwrain_end_page('/doc/new-app/essentials/index.php');?>