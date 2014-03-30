<?php include "../../../functions.php"; luwrain_begin_page('/community/publications/TheTextBasedEnvironmentForBlindPersonsConceptionAndOperatingSystemDesign/index.php', 'The text-based environment for blind persons: conception and operating system design');?>

                <h1>
                  The&#160;text-based environment for&#160;blind persons: conception and operating system
                  design
                </h1>

<?php if (luwrain_current_lang() == 'en') {?>
                <p><b>Author:</b> Michael Pozhidaev</p>
                <p>
                  <b>Published:</b> <a target="_blank" href="http://research-journal.org/">The&#160;international
                  research journal</a>, 2013, issue&#160;2
                </p>
                <p><b>Keywords:</b> accessibility, blind persons, GNU/Linux, Java, operating systems.</p>
                <p>Materials for download:</p>
                <ul>
                  <li><a href="luwrain-ResearchJournal-2013.pdf">Printable version in&#160;pdf-format</a></li>
                </ul>
<?php }?>

<?php if (luwrain_current_lang() == 'ru') {?>
                <p><b>Автор:</b> Михаил Пожидаев</p>
                <p>
                  <b>Опубликовано:</b> <a target="_blank" href="http://research-journal.org/">
                  Международный научно-исследовательский журнал</a>, 2013,&#160;2
                </p>
                <p><b>Ключевые слова:</b> accessibility, blind persons, GNU/Linux, Java, operating systems.</p>
                <p>Материалы для&#160;загрузки:</p>
                <ul>
                  <li><a href="luwrain-ResearchJournal-2013.pdf">версия для&#160;печати в&#160;pdf-формате.</a></li>
                </ul>
<?php }?>

                <h2>Abstract</h2>
                <p>
                  The paper covers conclusions of the attempt to create a prototype of text-based user environment
                  without graphical objects and operating system based on it. The&#160;acquired results prove
                  conception of handy device for wide range of blind users.The&#160;technical details of
                  further research are suggested.
                </p>
                <h2>Introduction</h2>
                <p>
                  Various information technologies became an essential part of social and professional life,
                  but level of their accessibility for blind and visual impaired persons remains still insufficient.
                  Although some results and experience in this area are acquired so&#160;far, blind and visually
                  impaired users are not able to feel themselves completely free using PCs and mobile devices.
                  That fact can be treated as one of the reasons tackling high integration of disabled people
                  into social life.
                </p>
                <p>
                  Currently the popular way is to install some screen reading software, such as Jaws for&#160;Windows
                  by Freedom Scientific [11], VoiceOver by&#160;Apple Inc. [2], as&#160;well as&#160;Orca
                  [15] &#x2014; the&#160;favourite solution of GNU/Linux users. This software takes the information
                  on screen and transforms it into speech form, describing any action user does. Today there&#160;is
                  a&#160;ubiquitous Graphic User Interface (GUI) almost on every computer and it is the most
                  important problem we should take into account here. This type of user interface (UI) was
                  designed to be controlled mostly by mouse, as&#160;well as&#160;other pointing devices.
                  This input method is rather convenient for&#160;sighted users, but for blind persons it
                  is not the&#160;case. They&#160; are enforced to navigate over graphical objects on a screen,
                  such&#160;as window widgets, menus, dialogs by&#160; keyboard only and this way takes a&#160;lot
                  of extra time to&#160;do. The&#160;mentioned way can be considered as appropriate for work
                  at&#160;home or at&#160;office, but in crowded and noisy environment, such&#160; as at
                  international airport, show or conference, it&#160;is turned out completely unacceptable.
                  In&#160; addition, running OS with full GUI takes more hardware resources than it is needed
                  for accessible solution itself. This paper offers an accessible OS of a new design based
                  on GNU/Linux and covers the experience already got by creating preliminary prototypes.
                </p>
                <h2>1. The first prototypes</h2>
                <p>
                  The work on the initial prototype was launched in 2008 as an attempt to create light accessible
                  distribution for blind users [21, 22, 23, 24]. It uses GNU&#160;Emacs [8] as a main user
                  environment with added special extension by T.&#160;V.&#160;Raman from&#160;Google&#160;Inc
                  called Emacspeak [6]. The system is based on the Linux kernel and is applicable for installation
                  without any external sighted help, except of boot device selecting in BIOS setup utility,
                  which does not use any features from external software and evidently is not compatible
                  with any speech-based accessibility. The installation process is performed by copying live-CD
                  environment to a hard drive as it is with several minor fixes. We will not describe this
                  technique in details here, since it is widely popular and well-known approach. The only
                  important thing is that cloning process doesn&#x27;t require any UI and can be done by
                  single command launch with provided set of necessary parameters.
                </p>
                <p>
                  The&#160;environment was enhanced with some additional software developed by the authors
                  as part of work on the system being described. This software includes tools for text books
                  listening with text-to-speech (TTS) engines, main menu plug-in for quick applications
                  launch, media player control service (will be described later), the&#160;set of auxiliary
                  scripts and so&#160;called speech server. The&#160;speech server is needed to manage stream
                  of speech commands in real-time mode and to&#160;prevent simultaneous speech signals overlapping.
                  It&#160; doesn&#x27;t synthesize speech by&#160;itself and uses external TTS engines, in
                  particular, RHVOice [16].
                </p>
                <p>
                  Although this distribution failed as instrument for wide range of users, it&#160; brings
                  important experience, proving the general conception is right. As&#160;known, GNU Emacs
                  aims to be a&#160;flexible text editor but during developing process list of its features
                  went out of editor purposes. Now it contains file manager, mail and news reader, calendar,
                  FTP client and very restricted web browser. The&#160;crucial advantage allowing consider
                  it as an accessible environment is an ability to&#160;bring to&#160;user every working
                  object in&#160;text form. For example, mail message can be easily constructed as text file
                  with recipient address on the first line, the&#160;subject on the second and with message
                  content on all others. Nearly all needed operations could be reorganized this way if they
                  don’t imply graphic materials. GNU&#160;Emacs is&#160;also capable with&#160;showing web-pages
                  in&#160; text form, providing content as one text document and excluding pictures. While
                  user navigates over prepared text object, the&#160;speech extension listens all cursor
                  movements and forwards stream of commands to speech server for&#160;further translation
                  into audio form. If user moves from one text line to another he hears line text under new
                  position and hears new character in case of moving left-right inside of&#160;one line.
                </p>
                <p>
                  This system became a working platform for its developers for several years and it&#160;makes
                  possible to get some conclusions about its advantages and disadvantages. The&#160;main
                  advantage is a a&#160;very high speed of working process. With some user training, speed
                  approaches to speed of usual sighted work. It&#160;can be explained by user interface simplicity,
                  since it doesn&#x27;t have any GUI elements. A&#160;user doesn&#x27;t take care about what
                  objects he&#160;has on &#160;a&#160; screen and how they are organized. Even more, any
                  association between objects and their graphic representation is not required at all. In&#160;addition,
                  light environment yields low system resources consumption and it&#160;makes possible using
                  of cheap mobile devices. One of the installations was performed on ASUS EEE PC 1025C netbook
                  ($330 in Amazon shop) and it was successfully used in travel and during conferences participating.
                  That experience implies tasks successfully done during flights and work inside of crowded
                  and noisy airports, including three the&#160;busiest airports in Europe (London Heathrow,
                  Paris Charles de Gaulle and Frankfurt-am-Main) and three international Moscow airports.
                  The&#160;set of performed tasks covers maintaining wifi-connection for mail and news reading,
                  handy notes, mp3 and text books reading and rarely voice recording.
                </p>
                <p>
                  Actually, a wide range of accessible tasks can be easily explained by large variety of
                  software available among GNU/Linux distributions, but some additional possibilities should
                  be mentioned especially detailly. There are two graphic software packages: Latex [12] and
                  Lilypond [13], capable with&#160;taking input material in form of text files. Latex is&#160;a&#160;publishing
                  system for physics and mathematics books or papers and Lilypond is a music score typesetter.
                  Both of&#160;them gives a very high quality of an output and remains accessible for blind
                  users. Known experience proves they are a real way to create materials even at&#160;scale
                  of thesis. Final sighted checking of an issue is still required but work is done mostly
                  by blind persons on their own. That software is a very special case due to high level of&#160;required
                  user skills but anyway we would like to mention it. Latex can also produce presentations
                  in pdf-format (proved by known experience of blind users), can include graphic figures
                  constructed by text form commands and embed music objects from Lilypond.
                </p>
                <p>
                  We took a look what this system offers, but more important is the set of discovered disadvantages,
                  making prepared system inappropriate to be used widely. The&#160; developers team is about
                  to give up any active work on GNU Emacs approach due to following reasons:
                </p>
                <ol>
                  <li>
                    Weak protection against improper user actions. Even a very easy inaccurate step breaks
                    proper system behaviour. GNU Emacs completely relies on user awareness what he does.
                  </li>
                  <li>
                    The platform is not suitable for developing complex user applications. The GNU Emacs is
                    a Lisp run-time environment purposed for managing a set of text areas. All of such areas
                    called &#x22;buffers&#x22; are linked weakly with each other and any attempt to create
                    an application with more than one buffer gives generally unstable product with a lot of
                    glitches. The system must be capable of quick extensions creating because user needs various
                    add-ons for social networks, blogs reading and access to&#160;other web-services.
                  </li>
                  <li>
                    Web-browser without Java Script support. Web-browsers became something grater than applications
                    for HTML-pages viewing and may be described in turms of a platforms for launching web-applications.
                    GNU&#160;Emacs has a text-mode browser that can be used for HTML-pages parsing but nothing
                    else.
                  </li>
                  <li>
                    User unfriendly interface. The&#160;environment of GNU Emacs can be considered suitable
                    only for professional users with high level of experience in GNU/Linux. No national language
                    support is available.
                  </li>
                  <li>
                    No support for some closed but freely available application such as Skype and maybe some
                    others. Skype has an accessibility support but it cannot be covered by any GNU Emacs utilities.
                  </li>
                  <li>No support for popular office documents formats.</li>
                </ol>
                <p>
                  Since a lot of free and open source software is available publicly it should be involved
                  in new accessible environment creation. In&#160;two sections below we will describe new
                  UI approach and general design of accessible OS free from disadvantages listed above as
                  far as it possible.
                </p>
                <h2>2. The&#160;new user environment</h2>
                <p>New user environment should consist of following items on a screen:</p>
                <ol>
                  <li>A set of tiled working areas.</li>
                  <li>A&#160;easy access command line for a&#160;quick operations launch.</li>
                  <li>A popups support for dialogs and interactions.</li>
                  <li>Main and context menus.</li>
                </ol>
                <p>
                  Nearly all of these things came from GNU Emacs as they are but they should be managed
                  by general application mechanism, which GNU Emacs doesn&#x27;t have. Every text area should
                  be strongly associated with some application and must be closed on application shutdown.
                  All text areas are displayed in tiled mode on the screen and currently active application
                  should decide which of them and how must be shown. User should be allowed to switch from
                  one application to another quickly (for example, by Alt+Tab key combination) with switching
                  of all corresponding visible areas on a screen. One more important feature is a quick text
                  search through text in any visible area without application support.
                </p>
                <p>
                  The term &#x22;text area&#x22; we used here implies rectangular area on the screen filled
                  with some text shown by monospaced font. Text color and size should be available for changing
                  easily by system-wide commands without any application support. On&#160;screen content
                  must be capable of&#160;using by users with low vision (not totally blind). The&#160;low
                  vision users can request a&#160;feature of highlighting with the&#160;easy grey background
                  row and column, where cursor is placed.
                </p>
                <p>
                  A command line support plays highly important role in suggested approach. In&#160; contrast
                  to&#160;widely popular GNU/Linux shell expressions, a&#160;command line, we are describing,
                  should accept short words suitable for quick typing. Inside of noisy room it is easier
                  to press Alt+x on keyboard to invoke command line, type &#x22;news&#x22;, &#x22;mail&#x22;,
                  &#x22;message&#x22; or whatever else user wants to launch, than to look for required item
                  in menus listening speech output. The&#160; keyboard combination Alt+x is taken from GNU
                  Emacs and, surely, it is really convenient way. We consider a&#160;command line here as
                  particular case of &#x22;popup&#x22; area. Popup areas are text areas shown on screen
                  at bottom for a short time and purposed for additional user interactions or conversations.
                  Popup areas can be also applicable for various types of menus.
                </p>
                <p>
                  Java&#160;SE [10] is chosen as the main programming language for developing accessible
                  environment itself, as&#160;well as for all user applications. There&#160;are a lot of
                  well-known Java libraries available publicly, providing various functions needed for user
                  applications. We mean here JavaMail [9] for mail reading, Rome [18] for RSS parsing, Apache
                  POI [1] for office documents filters etc. A user interface layout for each particular
                  application is not described here, since in most cases it is quite obvious. For&#160;example,
                  mail reader should consist of three areas: mail groups, the&#160;list of&#160;mail messages
                  in a group and selected message text. The&#160;file manager looks like usual twin-panel
                  manager with additional area at a bottom of screen for list of active tasks (files copying,
                  moving etc). General user navigation over text objects and whole system can be taken from
                  GNU Emacs and left almost without any changes. It is a very good part of GNU Emacs legacy,
                  except of one thing: spoken text must be constructed by application and it may be different
                  than text on screen. In&#160;GNU Emacs user hears always a text on screen, gathered by&#160;emacspeak.
                </p>
                <h2>3. The system core</h2>
                <p>
                  We should take a close look at system core behind accessible UI. It&#160; consists of&#160;several
                  components listed below:
                </p>
                <ol>
                  <li>An&#160;event queue launched inside of Java virtual machine with &#160;separate thread.</li>
                  <li>An&#160;LDAP interface for flexible user data storing, like address book, calendar etc.</li>
                  <li>D-Bus [7] for&#160;access to a&#160;number of&#160;system services.</li>
                  <li>An&#160;auxiliary service for media player control.</li>
                  <li>A&#160;speech server.</li>
                  <li>A&#160;speech-enabled window manager for X.org.</li>
                  <li>A&#160;small screen reader based on AT-SPI [3] services.</li>
                </ol>
                <p>
                  The&#160;event queue stands here for central dispatcher of events and the most important
                  of them, of course, are user input commands. That queue should be also accessible for
                  an&#160;events exchanging between several applications, being running in the environment.
                  It&#160; is very important thing because this feature is the most proper way for multi-threaded
                  applications synchronization.
                </p>
                <p>
                  Now there is a general moving in GNU/Linux world toward D-Bus system services and that
                  fact makes a lot of things easier for system developing. Using D-Bus, which has good support
                  in Java, we can get a easy control over key system services, like Udisks [19] for removable
                  drives, Network Manager [14] for network connections and others. Systemd service [17]
                  should be mentioned here as an especially hopeful suggestion, but needs more time for&#160;clarification
                  whether Systemd is really able to become a reliable low-level component or not.
                </p>
                <p>
                  Media player service must take care of any user commands to listen music file or &#x22;speaking
                  book&#x22;. It should be controlled also through D-Bus and invoke real media player (very
                  likely VLC [20]). Media player can not be launched directly, since blind user needs some
                  features for&#160;&#x22;speaking books&#x22; (literature recorded by narrator as audio
                  files) including bookmarks managing etc. In&#160;addition there is a special format of
                  books for blind persons called Daisy [5] and it&#160;also should be supported at the level
                  of media player control service.
                </p>
                <h2>4. A&#160;web-browser and the&#160;AT-SPI applications</h2>
                <p>There is a couple of special cases when user has to deal with tradition GUI anyway:</p>
                <ol>
                  <li>A&#160;web-browser.</li>
                  <li>Closed popular applications (e.g., Skype).</li>
                </ol>
                <p>
                  Without these applications support our system can not be considered full. In&#160;case
                  of&#160;web-browser its nature doesn&#x27;t allow express its functionality in any text
                  only form. Skype, due&#160;to its license restrictions, should be taken as a whole binary
                  application. Hence, we have to implement some things, making these application available
                  for blind users, although both of them evidently are exceptions in proposed conception
                  of text only interface. Fortunately, GNU/Linux GUI has additional service called AT-SPI,
                  helping disabled persons operate with GUI applications and it remains still available for
                  us. If we choose Firefox as suitable web-browser we can use it and Skype through AT-SPI
                  functions. Regarding web-browser we should notice, to be fair, there is one more solution
                  &#x2014; ChromeVox add-on [4] for Chrome/Chromium browser, but its less comfortable because
                  it generates speech by itself and doesn&#x27;t expose any data outside of browser.
                </p>
                <p>
                  That means there is no way to pick up browser data from external tools, for example, to
                  be copied into custom buffers, like clipboard. Since we rejected any existing GUI we can
                  not use prepared screen readers used for transforming AT-SPI data into speech and have
                  to implement its replacement.
                </p>
                <p>
                  The last thing, we need to get our design full, is a tiny window manager. Main Java virtual
                  machine we have described in previous sections and additional applications like Firefox
                  or Skype are independent processes with their own windows on a screen controlled by X.org
                  server. A special speech-enabled window manager should be created to link all of them
                  into one whole suite. Java environment could be considered as main application playing
                  predominant role. Other applications became available easily with simple way to switch
                  between them with informative speech notifications. There is no&#160;need to develop such
                  window manager from scratch since there are a lot of simple suitable examples.
                </p>
                <h2>Conclusions</h2>
                <p>
                  The design described here is currently in active development and authors intent to create
                  a prototype suited for illustration what such system could be used for (the project is
                  designated as &#x22;Luwrain&#x22;). Meantime a lot of required components are already
                  created since almost all of the tasks are the widely known problems solved by large variety
                  of FOSS projects. The only thing should be written completely from scratch is the Java
                  user environment and its conception is the main research goal.
                </p>
                <p>
                  A couple of related questions stays undiscussed with these paper. First of them is the
                  braille display support. These theme doesn&#x27;t need any research since Os just has
                  to support corresponding devices. The second is a using of tablet computers. A&#160;tablets
                  are a&#160;big problem, because this sort of devices can be used only through tracking
                  graphical objects position on a screen. Anyway, this area needs a lot of deep research,
                  respecting experience of the projects providing accessibility for multi-touch devices.
                  It is especially important due to threat for low-cost laptops by tablets in current market
                  situation. As&#160;a&#160;matter of fact, some companies are about to prefer tablets production
                  rather low-cost laptops.
                </p>
                <p>
                  However, a lot of cheap embedded computers based on ARM architecture are coming and they
                  should be considered as real companions for wide range of disabled persons. GUI doesn&#x27;t
                  play valuable role in their using and we may expect demand of any text-based solutions.
                </p>
                <h2>References</h2>
                <p>[1] Apache POI - the Java API for Microsoft Documents // <a target="_blank" href="http://poi.apache.org/">http://poi.apache.org/</a></p>
                <p>[2] Apple - Accessibility - VoiceOver - In Depth // <a target="_blank" href="http://www.apple.com/accessibility/voiceover/">http://www.apple.com/accessibility/voiceover/</a></p>
                <p>[3] Assistive Technology Service Provider Interface // <a target="_blank" href="http://www.linuxfoundation.org/collaborate/workgroups/accessibility/atk/at-spi">http://www.linuxfoundation.org/collaborate/workgroups/accessibility/atk/at-spi</a></p>
                <p>[4] ChromeVox // <a target="_blank" href="http://www.chromevox.com/">http://www.chromevox.com/</a></p>
                <p>[5] DAISY Consortium // <a target="_blank" href="http://www.daisy.org/">http://www.daisy.org/</a></p>
                <p>[6] Emacspeak &#x2014; The Complete Audio Desktop // <a target="_blank" href="http://emacspeak.sourceforge.net/">http://emacspeak.sourceforge.net/</a></p>
                <p>[7] freedesktop.org - Software/dbus // <a target="_blank" href="http://www.freedesktop.org/wiki/Software/dbus">http://www.freedesktop.org/wiki/Software/dbus</a></p>
                <p>[8] GNU Emacs // <a target="_blank" href="http://www.gnu.org/software/emacs/">http://www.gnu.org/software/emacs/</a></p>
                <p>[9] JavaMail API // <a target="_blank" href="http://www.oracle.com/technetwork/java/javamail/index.html">http://www.oracle.com/technetwork/java/javamail/index.html</a></p>
                <p>[10] Java Standard Edition // <a target="_blank" href="http://www.oracle.com/technetwork/java/javase/index.html">http://www.oracle.com/technetwork/java/javase/index.html</a></p>
                <p>[11] JAWS Screen Reading Software by Freedom Scientific // <a target="_blank" href="http://www.freedomscientific.com/products/fs/jaws-product-page.asp">http://www.freedomscientific.com/products/fs/jaws-product-page.asp</a></p>
                <p>[12] LaTeX &#x2014; A document preparation system // <a target="_blank" href="http://www.latex-project.org/">http://www.latex-project.org/</a></p>
                <p>[13] Lilypond // <a target="_blank" href="http://www.lilypond.org">http://www.lilypond.org</a></p>
                <p>[14] Network Manager // <a target="_blank" href="http://projects.gnome.org/NetworkManager/">http://projects.gnome.org/NetworkManager/</a></p>
                <p>[15] Orca // <a target="_blank" href="https://live.gnome.org/Orca">https://live.gnome.org/Orca</a></p>
                <p>[16] RHVoice // <a target="_blank" href="https://github.com/Olga-Yakovleva/RHVoice">https://github.com/Olga-Yakovleva/RHVoice</a></p>
                <p>[17] Systemd // <a target="_blank" href="http://freedesktop.org/wiki/Software/systemd/">http://freedesktop.org/wiki/Software/systemd/</a></p>
                <p>[18] The Rome projects // <a target="_blank" href="http://rometools.org/">http://rometools.org/</a></p>
                <p>[19] Udisks // <a target="_blank" href="http://www.freedesktop.org/wiki/Software/udisks">http://www.freedesktop.org/wiki/Software/udisks</a></p>
                <p>[20] VideoLAN - Official page for VLC media player // <a target="_blank" href="http://www.videolan.org/vlc/">http://www.videolan.org/vlc/</a></p>
                <p>
                  [21] Пожидаев М. С. Описание работы по созданию специализированного дистрибутивного решения
                  для незрячих пользователей на основе дистрибутивов ALT Linux// Информационные технологии
                  для инвалидов по зрению в современном мире. Проблемы и перспективы: Материалы 7-ой научно-
                  практической конференции (4 декабря 2008). - М.: 2008. - С. 82-86
                </p>
                <p>
                  [22] Пожидаев М. С., Камынин А. Н. Развитие окружения ALT Linux Homeros лиц с ограничениями
                  по зрению//Седьмая конференция разработчиков свободных программ на Трубеже. Переславль,
                  26-27 июля 2010 г.: Тезисы докладов. - М. : Институт логики, 2010. - С. 78-80
                </p>
                <p>
                  [23] Пожидаев М. С. Дистрибутив со вспомогательными технологиями ALT Linux Homeros Friend:
                  первый опыт // Восьмая конференция разработчиков свободных программ: Тезисы докладов /
                  Обнинск 25-26 июля 2011 г. М.: Альт Линукс, 2011. С. 9-11
                </p>
                <p>
                  [24] Пожидаев М. С. Разработка перспективы развития дистрибутива со вспомогательными технологиями
                  ALT Linux Homeros // Открытые технологии : Сб. материалов Восьмой Международной конференции
                  разработчиков и пользователей программного обеспечения Linux Vacation / Eastern Europe
                  2012, Гродно, 07-10 июня 2012 г. / под общ. ред. Д. А. Костюка. - Брест : Альтернатива.
                  - с. 23-25
                </p>

<?php luwrain_end_page('/community/publications/TheTextBasedEnvironmentForBlindPersonsConceptionAndOperatingSystemDesign/index.php');?>
