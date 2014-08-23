<?php include "../../functions.php"; luwrain_begin_page('/download/git/index.php', luwrain_current_lang() == 'ru'?'Git репозитории':'Git repositories');?>
<?php if (luwrain_current_lang() == 'en') {?>
                <h1>Luwrain Git repositories</h1>
                <p>
                  The&#160;source code of&#160;Luwrain can be easily accessed through a&#160;set of&#160;Git
                  repositories hosted on&#160;<a target="_blank" href="http://github.com/">github.com</a>.
                  All of&#160;them listed here with the&#160;short comments to&#160;help you better understand
                  their purpose. Any&#160;information about the&#160;license for&#160;these materials you
                  can find on&#160;<a href="<?echo luwrain_link('/doc/legal/');?>">corresponding page with&#160;legal notes</a>.
                </p>
                <h2>The main Luwrain repository</h2>
                <ul>
                  <li><a target="_blank" href="http://github.com/luwrain/luwrain.git/">git://github.com/luwrain/luwrain.git</a></li>
                </ul>
                <p>
                  The&#160;main Git repository contains the&#160;code of&#160;the&#160;environment core and
                  the&#160;code of&#160;a&#160;set of&#160;standard applications. This code is&#160;supposed
                  to&#160;be completely system-independent, meaning, it may not include any JNI references
                  or be linked with libraries available on&#160;GNU/Linux only.
                </p>
                <h2>Linux-dependent code</h2>
                <ul>
                  <li><a target="_blank" href="http://github.com/luwrain/linux.git/">git://github.com/luwrain/linux.git</a></li>
                </ul>
                <p>
                  This repository contains JNI wrappers for&#160;access to&#160;Linux-specific functions
                  (e.g.&#160;for Linux terminal implementation). It may be linked with any Linux-specific
                  jar&#x27;s (e.g. for&#160;interaction with&#160;D-Bus).
                </p>
                <h2>Luwrain extensions</h2>
                <ul>
                  <li><a target="_blank" href="http://github.com/luwrain/extensions.git/">git://github.com/luwrain/extensions.git</a></li>
                </ul>
                <p>
                  The&#160;extensions library for&#160;Luwrain includes various add-ons not&#160;chosen for&#160;sustained
                  support yet. This&#160;repository gets contributions from&#160;everybody who is&#160;willing
                  to&#160;enhance range of&#160;supported services and technologies.
                </p>
                <h2>The&#160;AT-SPI client and the&#160;window manager</h2>
                <ul>
                  <li><a target="_blank" href="http://github.com/luwrain/guidecraft.git/">git://github.com/luwrain/guidecraft.git</a></li>
                </ul>
                <p>
                  For&#160;the&#160;support of&#160;some closed applications and for&#160;work of&#160;web-browsers
                  Luwrain includes the&#160;AT-SPI client shipped with the&#160;lightweight window manager
                  for&#160;easy control over a&#160;set of&#160;opened windows, including the&#160;main window
                  of&#160;Luwrain itself. This&#160;utility called GuideCraft and in&#160;contrast to&#160;the&#160;code
                  of&#160;Luwrain core and applications, is&#160;written on&#160;C++.
                </p>
                <h2>The&#160;D-Bus interface for&#160;sending speech commands</h2>
                <ul>
                  <li><a target="_blank" href="http://github.com/luwrain/libdbusspeech.git/">git://github.com/luwrain/libdbusspeech.git</a></li>
                </ul>
                <p>
                  This&#160;repository contains C++ library which implements the&#160;behaviour of&#160;&#x22;proxy&#x22;
                  object for&#160;exchanging of&#160;speech&#160;commands. This&#160;library is&#160;being
                  prepared to&#160;simplify implementation of&#160;the&#160;speech servers compatible with&#160;Luwrain
                  on&#160;GNU/Linux.
                </p>

<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
                <h1>Git репозитории Luwrain</h1>
                <p>
                  Исходный код Luwrain может быть загружен из&#160;нескольких Git репозиториев, расположенных
                  на&#160;сервере <a target="_blank" href="http://github.com/">github.com</a>. Они перечислены
                  ниже с&#160;краткими комментариями, которые должны позволить Вам понять их&#160;назначение.
                  Необходимую информацию о&#160;правовой основе этих&#160;материалов Вы можете найти на&#160;<a href="<?echo luwrain_link('/doc/legal/');?>">соответствующей
                  странице</a> этого сайта.
                </p>
                <h2>Основной репозиторий Luwrain</h2>
                <ul>
                  <li><a target="_blank" href="http://github.com/luwrain/luwrain.git/">git://github.com/luwrain/luwrain.git</a></li>
                </ul>
                <p>
                  Основной репозиторий Luwrain содержит код ядра системы и код&#160;нескольких стандартных
                  приложений. Реализация этих&#160;компонентов должна быть полностью переносимой, что запрещает
                  использование JNI-функций и компоновку с&#160;библиотеками, доступными только на&#160;GNU/Linux.
                </p>
                <h2>Функции для&#160;взаимодействия с&#160;GNU/Linux</h2>
                <ul>
                  <li><a target="_blank" href="http://github.com/luwrain/linux.git/">git://github.com/luwrain/linux.git</a></li>
                </ul>
                <p>
                  Этот репозиторий содержит JNI-обёртки для&#160;функций, доступных только на&#160;GNU/Linux
                  (например, для&#160;взаимодействия с&#160;интерфейсом командной оболочки Bash). Помимо
                  этого, докускается использование Java-библиотек, существующих только в&#160;версии для&#160;GNU/Linux,
                  в&#160;частности, для&#160;взаимодействия с&#160;D-Bus.
                </p>
                <h2>Расширения Luwrain</h2>
                <ul>
                  <li><a target="_blank" href="http://github.com/luwrain/extensions.git/">git://github.com/luwrain/extensions.git</a></li>
                </ul>
                <p>
                  Библиотека расширений Luwrain содержит различные дополнения, пока ещё не&#160;принятые
                  для&#160;постоянной поддержки. Этот&#160;репозиторий должен включать все&#160;сторонние
                  модули, предложенные разработчиками из&#160;сообщества Luwrain для&#160;всеобщего обсуждения
                  и тестирования.
                </p>
                <h2>Клиент AT-SPI и оконный менеджер</h2>
                <ul>
                  <li><a target="_blank" href="http://github.com/luwrain/guidecraft.git/">git://github.com/luwrain/guidecraft.git</a></li>
                </ul>
                <p>
                  Для&#160;поддержки некоторых закрытых приложений и веб-браузеров Luwrain включает в&#160;себя
                  клиента AT-SPI, который поставляется вместе с&#160;легковесным оконным менеджером. В&#160;отличие
                  от&#160;кода ядра системы и стандартных приложений, этот компонент реализуется на&#160;языке
                  C++.
                </p>
                <h2>Интерфейс D-Bus для&#160;передачи речевых комманд</h2>
                <ul>
                  <li><a target="_blank" href="http://github.com/luwrain/libdbusspeech.git/">git://github.com/luwrain/libdbusspeech.git</a></li>
                </ul>
                <p>
                  Этот&#160;репозиторий содержит код&#160;библиотеки, реализующей поведение прокси-объекта
                  D-Bus для&#160;передачи речевых команд. Подготовка этой&#160;библиотеки ведётся с&#160;целью
                  упростить создание речевых серверов, совместимых с&#160;Luwrain в&#160;GNU/Linux.
                </p>

<?php }?>
<?php luwrain_end_page('/download/git/index.php');?>
