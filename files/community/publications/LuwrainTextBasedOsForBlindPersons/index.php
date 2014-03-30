<?php include "../../../functions.php"; luwrain_begin_page('/community/publications/LuwrainTextBasedOsForBlindPersons/index.php', 'Text-based OS for blind persons');?>

                  <h1>Luwrain: text-based OS for blind persons</h1>

<?php if (luwrain_current_lang() == 'en') {?>
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
<?php }?>

<?php if (luwrain_current_lang() == 'ru') {?>
                  <p><b>Автор:</b> Михаил Пожидаев</p>
                  <p><b>Опубликовано:</b> материалы десятой конференции разработчиков СПО (Калуга)</p>
                  <p><b>Дата:</b> 21 сентября 2013&#160;г.</p>
                  <p>Материалы для&#160;загрузки:</p>
                  <ul>
                    <li><a href="luwrain-kaluga-2013-09-21-en.pdf">версия для&#160;печати в&#160;pdf-формате;</a></li>
                    <li>
                      <a href="presentation-luwrain-kaluga-2013-09-21.pdf">презентация в&#160;pdf-формате (русский язык);</a>
                    </li>
                    <li>
                      <a href="ftp://ftp.altlinux.org/pub/people/msp/media/kaluga2013-luwrain.avi">видеозапись выступления (502M, русский язык).</a>
                    </li>
                  </ul>
<?php }?>

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


<?php luwrain_end_page('/community/publications/LuwrainTextBasedOsForBlindPersons/index.php');?>
