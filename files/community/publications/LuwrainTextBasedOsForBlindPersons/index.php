<?php include "../../../functions.php"; luwrain_begin_page('/community/publications/LuwrainTextBasedOsForBlindPersons/index.php', 'Text-based OS for blind persons');?>


<?php if (luwrain_current_lang() == 'en') {?>
                  <h1>Luwrain: text-based OS for blind persons</h1>
                  <p><b>Author:</b> Michael Pozhidaev</p>
                  <p><b>Published:</b> Proceedings of the&#160;10th conference of FOSS-developers (Kaluga, Russia)</p>
                  <p><b>Date:</b> September 21, 2013</p>
                  <p>Materials for&#160;download:</p>
                  <ul>
                    <li><a href="luwrain-kaluga-2013-09-21-en.pdf">Printable version in&#160;pdf-format</a></li>
                    <li>
                      <a href="presentation-luwrain-kaluga-2013-09-21.pdf">Presentation in&#160;pdf-format (Russian
                      language)</a>
                    </li>
                    <li>
                      <a href="ftp://ftp.altlinux.org/pub/people/msp/media/kaluga2013-luwrain.avi">Video recording
                      (502M, Russian language)</a>
                    </li>
                  </ul>
                  <p>
                    Luwrain is an&#160;operating system designed for&#160;blind and visually impaired persons.
                    It&#160;uses <b>Linux</b> kernel and offers special type of user environment based on representation
                    of objects in text form only in&#160;contrast to&#160;widely popular graphical user interface
                    (<b>GUI</b>). <b>GUI</b> is a standard modern way to&#160;bring information to&#160;user,
                    but interaction is&#160;performed mostly through a&#160;mouse, usually not used by blind
                    persons. That makes GUI rather inconvenient for&#160;this group of information technologies
                    consumers.
                  </p>
                  <p>
                    Although Luwrain design in general is very close to the&#160;<b>Android</b> ideas (<b>Java</b>
                    on <b>Linux</b> kernel) it isn&#x27;t based on&#160;<b>Android</b>. Even in&#160;case of&#160;some
                    benefits, multiple <b>Android</b> vulnerabilities cause a&#160;lot of&#160;security concerns.
                    Very likely known <b>Android</b> security issues are a&#160;consequence of&#160;deep modification
                    of&#160;basic components: <b>glibc</b>, <b>Java virtual machine</b> etc. Luwrain uses standard
                    components as they are provided by&#160;<b>GNU/Linux</b> distributions including <b>Linux</b>
                    kernel, <b>Java&#160;SE</b>, <b>glibc</b> and so on. This&#160;decision by&#160;the&#160;way
                    allows consider Luwrain as&#160;universal platform without any&#160;bias towards&#160;any
                    known computer type: desktop, laptop, tablet. As device evolution goes quickly and mostly
                    unpredictable, this fact plays significant role.
                  </p>
                  <p>
                    There&#160;are three valuable components in&#160;Luwrain design: <b>Linux</b> kernel, system
                    services and user environment based on&#160;<b>Java</b> as it&#160;was mentioned above.
                    All&#160;necessary interaction with&#160;system services is&#160;performed through a&#160;<b>D-Bus</b>
                    activity. Luwrain intents to&#160;use <b>udisks</b> for removable media management, <b>Network
                    Manager</b> for network interfaces operations and so on. Generally we would like to&#160;respect
                    as&#160;many relevant <b>freedesktop.org</b> recommendations as it&#160;is possible, making
                    Luwrain compatible with usual <b>Gnu/Linux</b> desktop.
                  </p>
                  <p>
                    User interface approach is&#160;the most important part of&#160;the&#160;project. It&#160;is&#160;inspired
                    by&#160;<b>emacspeak</b> package, widely known in&#160;community of&#160;blind users of&#160;<b>GNU/Linux</b>.
                    Its main advantage is a&#160;very high speed of&#160;work, usually unapproachable with
                    <b>GUI</b>-based systems in&#160;conjunction with screen reading software. We would like
                    to&#160;save all positive parts of&#160;<b>emacspeak</b> experience eliminating its disadvantages.
                    In&#160;Luwrain user interacts with several areas placed on&#160;a&#160;screen as&#160;tiles.
                    Each of&#160;them always has rectangular form and filled with text written using monospaced
                    font. Font size, font color and background color are defined globally and can be easily
                    changed to be&#160;suitable for needs of&#160;a&#160;particular user. All areas are associated
                    with launched applications and not all of&#160;them should be visible on&#160;the&#160;screen.
                    User has convenient methods for&#160;quick applications and areas switching and that makes
                    Luwrain different than <b>emacspeak</b> which has no applications at all. In&#160;addition
                    Luwrain offers special type of areas called a&#160;popup areas and designed for dialogs
                    with a&#160;user. Their main difference is that they can be opened as single method call
                    which does not return until popup area is closed. A&#160;couple of popup areas have system-wide
                    meaning: main menu and command line prompt. The&#160;idea to&#160;offer easily accessible
                    command line evidently was adopted from <b>emacspeak</b> but there it has slightly different
                    behaviour. It provides the&#160;access only to commands with execution not related to&#160;a&#160;particular
                    area. Commands invocation can be done in&#160;any&#160;time and yields the&#160;same result
                    without dependence what applications are currently opened.
                  </p>
                  <p>
                    The&#160;standard set of&#160;applications includes file manager, mail and news reading
                    applications, documents reading, text editor, address book, calendar and so on. Each of
                    this tasks usually implies only creation of&#160;proper interface in&#160;terms of&#160;Luwrain
                    as real back-ends for&#160;them mostly are already available as&#160;various libraries
                    for&#160;<b>Java</b>. This&#160;fact played nearly crucial role at&#160;language choosing
                    decision.
                  </p>
                  <p>
                    But there are some exceptions from the&#160;strategy described above. Web browser cannot
                    be implemented as&#160;text-based application so it should be available as&#160;a&#160;separate
                    applications executed outside of&#160;<b>Java</b> environment. There are two possible alternatives
                    for that:
                  </p>
                  <ul>
                    <li>
                      Implement <b>AT-SPI</b>-based light screen reader and let users launch <b>Firefox</b>,
                      as it has proper AT-SPI support.
                    </li>
                    <li>Include <b>Chromium</b> with <b>ChromeVox</b> add-on.</li>
                  </ul>
                  <p>
                    The&#160;former choice is more difficult since creation of <b>libatspi</b> client requires
                    significant efforts but actually is more preferable, because it allows collecting web-page
                    contents in&#160;<b>Java</b> environment for copy-paste operations. In&#160;addition, available
                    <b>libatspi</b> client also gives a&#160;way for&#160;launching of some closed applications,
                    like <b>Skype</b>.
                  </p>
                  <p>
                    Luwrain installation program is&#160;based on the&#160;installation program previously
                    developed as&#160;a&#160;part of&#160;<b>ALT&#160;Linux Homeros</b> project. It&#160;uses
                    livecd-cloning technique and can be done by&#160;blind user without any&#160;additional
                    sighted help.
                  </p>
<?php }?>

<?php if (luwrain_current_lang() == 'ru') {?>
                  <h1>Luwrain: ОС для&#160;людей с&#160;проблемами зрения</h1>
                  <p><b>Автор:</b> Михаил Пожидаев</p>
                  <p><b>Опубликовано:</b> материалы десятой конференции разработчиков СПО (Калуга)</p>
                  <p><b>Дата:</b> 21 сентября 2013&#160;г.</p>
                  <p>Материалы для&#160;загрузки:</p>
                  <ul>
                    <li><a href="luwrain-kaluga-2013-09-21-ru.pdf">версия для&#160;печати в&#160;pdf-формате;</a></li>
                    <li>
                      <a href="presentation-luwrain-kaluga-2013-09-21.pdf">презентация в&#160;pdf-формате (русский язык);</a>
                    </li>
                    <li>
                      <a href="ftp://ftp.altlinux.org/pub/people/msp/media/kaluga2013-luwrain.avi">видеозапись выступления (502M, русский язык).</a>
                    </li>
                  </ul>
                  <p>
                    Luwrain &#x2014; это&#160;операционная система (ОС), специально подготовленная для&#160;людей
                    с&#160;проблемами зрения. Она основана на&#160;ядре <b>Linux</b> и предлагает пользовательское
                    окружение, которое представляет все&#160;рабочие объекты в&#160;текстовом виде. Это существенно
                    отличает Luwrain от&#160;ОС с&#160;графическим интерфейсом (<b>GUI</b>). <b>GUI</b> &#x2014;
                    это один из&#160;самых популярных вариантов пользовательской среды, но взаимодействие с&#160;ней
                    осуществляется преимущественно при&#160;помощи мыши, практически полностью недоступной
                    незрячему человеку. Это делает <b>GUI</b> крайне неудобной для&#160;работы при&#160;помощи
                    речевого вывода.
                  </p>
                  <p>
                    Luwrain очень близка по&#160;своей архитектуре к&#160;<b>Android</b> (<b>Java</b> поверх
                    ядра <b>Linux</b>), но она не&#160;основана на&#160;<b>Android</b> из-за большого количества
                    уязвимостей, несмотря на&#160;некоторые преимущества. Вероятно, известные проблемы безопасности
                    вызваны глубокой модификацией важных компонентов, таких&#160;как <b>glibc</b>, виртуальная
                    машина <b>Java</b> и&#160;т.&#160;д. Luwrain использует все&#160;базовые пакеты такими,
                    как их предлагают основные дистрибутивы <b>GNU/Linux</b>. Помимо прочего, этот подход позволяет
                    рассматривать Luwrain как&#160;универсальную платформу без&#160;какой-либо ориентировки
                    на&#160;конкретный тип компьютера: настольный компьютер, мобильный компьютер, планшет и&#160;т.&#160;д.
                    Развитие информационных технологий идёт очень быстрыми темпами, и в&#160;таких условиях
                    подобная универсальность позволяет обезопасить проект от&#160;потери актуальности из-за
                    утраты интереса аудитории к&#160;некоторому типу устройства.
                  </p>
                  <p>
                    В&#160;архитектуре Luwrain есть три&#160;базовых компонента: ядро <b>Linux</b>, системные
                    службы и пользовательский интерфейс на&#160;основе <b>Java</b>. Всё&#160;взаимодействие
                    с&#160;необходимыми службами выполняется при&#160;помощи <b>D-Bus</b>. По&#160;этой причине
                    предпочтение отдаётся тем из&#160;них, которые <b>D-Bus</b> поддерживают: <b>udisks</b>,
                    <b>network-manager</b> и&#160;т.&#160;д. Для&#160;максимальной совместимости системы с&#160;другими
                    дистрибутивами <b>GNU/Linux</b> все&#160;стандарты <b>Free&#160;Desktop</b> по&#160;мере
                    возможности соблюдаются.
                  </p>
                  <p>
                    Реализация пользовательского окружения является одной из&#160;самых существенных задач
                    в&#160;проекте. Она в&#160;значительной мере наследует традиции окружения <b>emacspeak</b>,
                    широко известного в&#160;сообществе незрячих пользователей <b>GNU/Linux</b>. Главное преимущество,
                    предлагаемое <b>emacspeak</b>, заключается в&#160;высокой скорости работы, которая обычно
                    недостижима при&#160;использовании <b>GUI</b> в&#160;сочетании с&#160;программами экранного
                    доступа. Luwrain старается сохранить весь&#160;положительный опыт <b>emacspeak</b>, устранив
                    главные недостатки. Пользователь взаимодействует с&#160;несколькими прямоугольными текстовыми
                    областями, отображаемыми на&#160;экране в&#160;виде тайлов. Текст выводится моноширинным
                    шрифтом. Его размер и цвет, а&#160;также цвет фона устанавливаются общесистемно для&#160;всех
                    областей по&#160;желанию пользователя. Каждая область связана с&#160;одним из&#160;запущенных
                    приложений, и не&#160;все из&#160;них должны обязательно быть видимыми на&#160;экране.
                    Пользователь может свободно и быстро переключаться между приложениями и областями, что
                    качественно отличает Luwrain от&#160;<b>emacspeak</b>, который вовсе не&#160;имеет понятия
                    приложения. Предусмотрен особый тип областей &#x2014; так&#160;называемые всплывающие области,
                    которые используются для&#160;организации диалога с&#160;пользователем. Их&#160;особенность
                    заключается в&#160;том, что они могут быть показаны как один вызов метода в&#160;программном
                    коде, который не&#160;возвращает управление до&#160;тех&#160;пор, пока область не&#160;будет
                    закрыта. Две подобных всплывающих области имеют общесистемное значение &#x2014; это&#160;главное
                    меню и командная строка. Идея командной строки была унаследована от&#160;<b>emacspeak</b>,
                    но в&#160;новом виде её поведение несколько отличается. С&#160;её&#160;помощью могут быть
                    вызваны только команды, которые имеют общесистемное значение, и поведение которых не&#160;привязано
                    к&#160;конкретной открытой области.
                  </p>
                  <p>
                    Стандартный набор приложений включает в&#160;себя файловый менеджер, утилиты для&#160;чтения
                    почты, новостей, просмотра документов, текстовый редактор, календарь и&#160;т.&#160;д.
                    Почти все из&#160;них подразумевают создание только оболочки в&#160;традициях Luwrain,
                    поскольку полезный функционал большей частью уже доступен в&#160;виде библиотек. Эта возможность
                    играла ключевую роль при&#160;выборе языка <b>Java</b>.
                  </p>
                  <p>
                    Есть некоторые вещи, которые не&#160;удовлетворяют концепции, изложенной нами. Функционально
                    богатый веб-браузер не&#160;может быть представлен в&#160;терминах текстового интерфейса,
                    поэтому он должен поставляться как&#160;внешнее приложение, работающее вне&#160;виртуальной
                    машины <b>Java</b>. Существуют два&#160;возможных подхода к&#160;выбору веб-браузера:
                  </p>
                  <ul>
                    <li>
                      реализовать легковесный экранный чтец для <b>AT-SPI</b> и использовать в&#160;качестве
                      веб-браузера <b>Firefox</b>, который имеет поддержку <b>AT-SPI</b>;
                    </li>
                    <li>использовать <b>Chromium</b> с&#160;включённым дополнением <b>ChromeVox</b>.</li>
                  </ul>
                  <p>
                    Первый вариант несколько сложнее, т.&#160;к. реализация чтеца для&#160;<b>AT-SPI</b> требует
                    существенных усилий, но является более предпочтительным, поскольку позволяет получить содержимое
                    веб-страниц внутри виртуальной машины <b>Java</b> в&#160;доступном для&#160;операций копирования/вставки
                    виде. Также это сделает доступными некоторые закрытые приложения, такие&#160;как, например,
                    <b>Skype</b>.
                  </p>
                  <p>
                    Установку Luwrain незрячий пользователь может выполнять самостоятельно. Утилита для&#160;этого
                    была подготовлена в&#160;рамках проекта <b>ALT&#160;Linux Homeros</b> и основана на&#160;технологии
                    клонирования <b>LiveCD</b>.
                  </p>
<?php }?>

<?php luwrain_end_page('/community/publications/LuwrainTextBasedOsForBlindPersons/index.php');?>
