<?php include "../../../functions.php"; luwrain_begin_page('/doc/new-app/popups/index.php', luwrain_current_lang() == 'ru'?'Стандартные всплывающие области':'Standard popups');?>
<?php if (luwrain_current_lang() == 'en') {?>
                <h1>Standard popups</h1>
                <p>This page is available in Russian language only.</p>

<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
                <h1>Библиотека стандартных всплывающих областей</h1>
                <p>См.&#160;также:</p>
                <ul>
                  <li><a href="/api/org/luwrain/core/Popup.html">страница <i>org.luwrain.core.Popup</i> в&#160;LUWRAIN&#160;API</a>.</li>
                </ul>
                <p>
                  LUWRAIN имеет библиотеку типовых стандартных всплывающих областей. Всплывающая область
                  предназначена для&#160;организации диалога с&#160;пользователем. Её принципиальное отличие
                  от&#160;обычных областей в&#160;том, что для её показа в&#160;ядре системы запускается
                  дополнительный цикл обработки событий. Это позволяет обрабатывать события внутри некоторого
                  незавершённого внешнего обработчика (например, требуется запросить &#x22;да/нет&#x22; подтверждение
                  внутри обработчика закрытия приложения). Незавершённый обработчик останавливает очередь,
                  и без запусков дополнительных вложенных циклов это приводило&#160;бы к&#160;&#x22;замерзанию&#x22;
                  среды. Всплывающие области должны удовлетворять интерфейсу <a href="/api/org/luwrain/core/Popup.html"><i>org.luwrain.core.Popup</i></a>.
                </p>
                <h2>Выбор файла или папки (<i>FilePopup</i>)</h2>
                <p>См.&#160;также:</p>
                <ul>
                  <li>
                    <a href="/api/org/luwrain/popups/FilePopup.html">страница <i>org.luwrain.popups.FilePopup</i>
                    в&#160;LUWRAIN&#160;API</a>.
                  </li>
                </ul>
                <p>
                  <i>FilePopup</i> может быть использован, когда требуется запросить у&#160;пользователя
                  выбор некоторого файла или каталога на&#160;диске.
                </p>
                <h2>Выбор элемента списка (<i>ListPopup</i>)</h2>
                <p>См.&#160;также:</p>
                <ul>
                  <li>
                    <a href="/api/org/luwrain/popups/ListPopup.html">страница <i>org.luwrain.popups.ListPopup</i>
                    в&#160;LUWRAIN&#160;API</a>.
                  </li>
                </ul>
                <p>
                  <i>ListPopup</b> используется, когда у&#160;пользователя требуется запросить выбор значения
                  из&#160;фиксированного списка.
                </p>
                <h2>Ввод строки (<i>SimpleLinePopup</i>)</h2>
                <p>См.&#160;также:</p>
                <ul>
                  <li>
                    <a href="/api/org/luwrain/popups/SimpleLinePopup.html">страница <i>org.luwrain.popups.SimpleLinePopup</i>
                    в&#160;LUWRAIN&#160;API</a>.
                  </li>
                </ul>
                <p>
                  <i>SimpleLinePopup</i> используется в&#160;ситуациях, когда у&#160;пользователя требуется
                  запросить ввод некоторой текстовой строки.
                </p>
                <h2>Запрос значения &#x22;да/нет&#x22; (<i>YesNoPopup</i>)</h2>
                <p>См.&#160;также:</p>
                <ul>
                  <li>
                    <a href="/api/org/luwrain/popups/YesNoPopup.html">страница <i>org.luwrain.popups.YesNoPopup</i>
                    в&#160;LUWRAIN&#160;API</a>.
                  </li>
                </ul>
                <p>
                  <i>YesNoPopup</i> &#x2014; простейший пример всплывающей области, позволяющей произвести
                  подтверждение некоторого действия.
                </p>
                <h2>Читать далее</h2>
                <ul>
                  <li><a href="<?php echo luwrain_link('/doc/new-app/multithreading/');?>">Создание многопоточных приложений</a></li>
                </ul>

<?php }?>
<?php luwrain_end_page('/doc/new-app/popups/index.php');?>
