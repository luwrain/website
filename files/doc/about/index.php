<?php include "../../functions.php"; luwrain_begin_page('/doc/about/index.php', luwrain_current_lang() == 'ru'?'О проекте':'About the project');?>
<?php if (luwrain_current_lang() == 'en') {?>
                <h1>About the project</h1>
                <p>See also</p>
                <ul>
                  <li><a href="<?php echo luwrain_link('/doc/difference/');?>">Why is LUWRAIN different than other accessible solutions?</a></li>
                  <li><a href="<?php echo luwrain_link('/doc/faq/');?>">Frequently asked questions</a></li>
                </ul>
                <h2>What are we working on?</h2>
                <p>
                  We want all&#160;blind people to be able to participate in all social aspects, which revolve
                  around information technologies. There&#160;are some technical barriers making this still
                  very difficult and our development is&#160;carried&#160;out with&#160;the&#160;aim of&#160;eliminating
                  them.
                </p>
                <ul>
                  <li>
                    LUWRAIN tries to&#160;bring information from&#160;PC&#x27;s to&#160;users in&#160;a&#160;way
                    adjusted to&#160;the&#160;perception of&#160;blind people as&#160;best as&#160;possible
                  </li>
                  <li>
                    Luwrrain allows creating and distributing of&#160;applications specially designed for&#160;blind
                    people
                  </li>
                  <li>
                    LUWRAIN guarantees solving of&#160;a&#160;number of&#160;popular everyday tasks regardless
                    what experience the&#160;user has or his/her financial circumstances
                  </li>
                </ul>
                <p>
                  As&#160;for&#160;today, we&#160;think that there are no suitable solutions to&#160;this&#160;problems
                  widely known over the&#160;world.
                </p>
                <h2>The&#160;UI designed for&#160;blind people</h2>
                <p>
                  The&#160;screen reading utilities for&#160;graphical user interface (GUI), the&#160;most
                  popular current approach to&#160;assistive technologies for&#160;blind people, doesn&#x27;t
                  take care of&#160;providing information in&#160;the&#160;form suitable for&#160; the&#160;user
                  perception, what is the&#160;most noticeable disadvantage. Without using a&#160;mouse,
                  which is inaccessible for&#160;blind people, this conception is totally ineffective. The&#160;level
                  of&#160;comfort and speed of&#160;work equal to&#160;the&#160;level of&#160;sighted people
                  remains unreachable for&#160;blind users. Even more, if the&#160;user doesn&#x27;t have
                  any prior experience of&#160;using GUI as&#160;a&#160;sighted user, how he/she could get
                  a&#160;clew to&#160;understand its nature?
                </p>
                <p>
                  The&#160;blind user always keeps the&#160;picture of&#160;its working space in&#160;mind
                  and Our goal is&#160;making this picture in&#160;imagination <b>as&#160;simple as&#160;it&#160;could
                  be&#160;possible</b>. This would allow &#160;user to&#160;concentrate on&#160;its work
                  more effectively. In&#160;case of&#160;screen readers, the&#160;user is&#160;forced to&#160;keep
                  in&#160;mind the&#160;whole look of&#160;the&#160;desktop (what actually is&#160;impossible,
                  regardless which tools are involved) and that destracts him/she from the&#160;work itself.
                  According to&#160;our&#160;experience, it&#160;is <b>really possible</b> to&#160;create
                  this&#160; new&#160;type of&#160;UI with the&#160;same features as&#160;usual GUI (of&#160;cource,
                  if&#160;we&#160;are speaking about the&#160;tasks which are potentially accessible for&#160;blind
                  people; for&#160;instance, photo editing is&#160;inaccessible at&#160;all due&#160;to&#160;its
                  nature).
                </p>
                <p>
                  At&#160;a&#160;glance, it&#160;looks that we&#160;&#160;are presenting some kind of&#160;fiction,
                  some generally impossible technology, but it&#160;isn&#x27;t the&#160;case. Everybody knows
                  that text editing is the&#160;most understandable operation for&#160;blind people on&#160;pc.
                  The&#160;only thing we should do is to&#160;make solving of&#160;all tasks in&#160;the&#160;same
                  way as&#160;text editing. How we achieve that, <a href="<?php echo luwrain_link('/doc/user/start/');?>">see in&#160;LUWRAIN</a>.
                </p>
                <p>
                  Besides mentioned advantages, our&#160;conception has some additional features which make
                  work easier:
                </p>
                <ul>
                  <li>
                    A&#160;search of&#160;the&#160;substring in&#160;any object of&#160;work regardless of&#160;its
                    nature
                  </li>
                  <li>Copying of&#160;the&#160;arbitrary substring to&#160;the&#160;clipboard</li>
                  <li>
                    The unified way of&#160;supplementing speech or braille output with the&#160;picture on&#160;the&#160;screen
                    for users with&#160;low&#160;vision, including features to&#160;adjust the&#160;preferable
                    font size and the&#160;preferable color scheme
                  </li>
                </ul>
                <h2>Creating and distributing of&#160;accessible applications</h2>
                <p>
                  We may witness a&#160;shift of&#160;solutions from&#160;web-browsers and desktop computers
                  to&#160;mobile platforms. In&#160;fact, it&#160;is a&#160;really convenient approach, even
                  if the mobile platforms cannot be&#160;a&#160;fully-functional replacement neither for&#160;web-browsers,
                  nor&#160;for&#160;desktop computers in&#160;whole. Such OS as&#160;Google Android or Apple&#160;iOS
                  plays a&#160;role of&#160;a&#160;platform which aims to&#160;be with the&#160;user everywhere.
                </p>
                <p>
                  Blind people has nothing like this. There is no&#160;platform which allows creating of&#160;the&#160;applications
                  specially designed for&#160;them. LUWRAIN offers the&#160;full <a href="<?php echo luwrain_link('/doc/new-app/');?>">SDK</a>
                  for&#160;creating of&#160;applications for&#160;blind people. The&#160;main advantage of&#160;this
                  approach is that it doesn&#x27;t require the&#160;developer to&#160;have any&#160;experience
                  in&#160;the&#160;area of&#160;accessibility technologies. Any&#160;company can create a&#160;client
                  for&#160;its service just by&#160;using <a href="/api/">our Java API</a> and We will take
                  care of&#160;proper understanding of&#160;created applications by&#160;blind people.
                </p>
                <h2>Accessibility for&#160;everybody</h2>
                <p>
                  LUWRAIN is constructed to&#160;be accessible for&#160;<b>everybody who could be&#160;interested
                  in&#160;it</b>:
                </p>
                <ul>
                  <li>
                    <b>LUWRAIN is&#160;an&#160;Open source project</b>: end-user may use it completely free
                    of&#160;charge, as&#160;well as&#160;any other software based on&#160;LUWRAIN and created
                    by&#160;third-party developers
                  </li>
                  <li>
                    <b>LUWRAIN is&#160;based on&#160;Java</b>: end-user may run it&#160;on&#160;any computers
                    with&#160;proper Java&#160;1.7 support (roughly speaking, nearly on&#160;all&#160;PC&#x27;s)
                  </li>
                  <li>
                    <b>LUWRAIN has a&#160;distribution in&#160;form of&#160;bootable ISO-image</b>: even if&#160;end-user
                    doesn&#x27;t have any OS installed on&#160;his/her hard drive he/she may run LUWRAIN choosing
                    our ISO-image based on&#160;GNU/Linux
                  </li>
                  <li>
                    <b>LUWRAIN has easily recognizable UI</b>: end-user shouldn&#x27;t worry that he/she has
                    insufficient experience for&#160;work in&#160;Luwrain because we take care of&#160;keeping
                    LUWRAIN environment as&#160;simple as&#160;it is possible
                  </li>
                </ul>
                <h2>By the author</h2>
                <p>
                  At&#160;the end of&#160;this little story what LUWRAIN is, I would like to write a&#160;few
                  words as&#160;some kind of&#160;personal notes. I had&#160;to use screen readers since
                  2002 and never from this moment was satisfied with them. However, I am strongly convinced
                  that they are a&#160;great achievement and LUWRAIN isn&#x27;t a&#160;competitor disputing
                  their value. It&#160;would be&#160;nice if everybody will take LUWRAIN as&#160;the&#160;project
                  creating something completely different, interesting and useful in&#160;areas previously
                  left without enough attention.
                </p>
                <p>
                  Besides that, I am very thankful to&#160;all <a target="_blank" href="http://emacspeak.sourceforge.net">emacspeak</a>
                  authors as&#160;this software can be&#160;not only a&#160;reliable tool but and a&#160;origin
                  of&#160;inspiration as&#160;well!
                </p>
                <p>With best wishes, <a target="_blank" href="http://marigostra.com/">Michael Pozhidaev</a>.</p>

<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
                <h1>О&#160;нашем проекте</h1>
                <p>См.&#160;также</p>
                <ul>
                  <li><a href="<?php echo luwrain_link('difference/');?>">Чем LUWRAIN отличается от&#160;других вспомогательных технологий?</a></li>
                  <li><a href="<?php echo luwrain_link('faq/');?>">Часто задаваемые вопросы</a></li>
                  <li>
                    <a target="_blank" href="http://marigostra.ru/projects/luwrain/">Неформальный манифест
                    от&#160;авторов проекта</a>
                  </li>
                </ul>
                <p>
                  С&#160;самого начала развитие LUWRAIN ведётся в&#160;направлении сегментов вспомогательных
                  технологий, в&#160;которых отсутствуют решения:
                </p>
                <ol>
                  <li>
                    LUWRAIN предоставляет пользователю информацию в&#160;виде, предельно адаптированном для
                    восприятия человеком с&#160;нарушениями зрения.
                  </li>
                  <li>
                    LUWRAIN предоставляет возможности для&#160;создания и распространения приложений, специально
                    созданных для&#160;людей с&#160;нарушениями зрения.
                  </li>
                  <li>
                    LUWRAIN предоставляет гарантированную функциональность для&#160;решения распространённых
                    задач, которая доступна любому человеку с&#160;нарушениями зрения, вне&#160;зависимости
                    от&#160;его финансового положения и вне&#160;зависимости от&#160;его опыта работы на&#160;ПК.
                  </li>
                </ol>
                <p>Мы считаем, что в&#160;настоящий момент решения для&#160;перечисленных задач отсутствуют.</p>
                <h2>Интерфейс специально для&#160;незрячих людей</h2>
                <p>
                  Неспособность представить информацию в&#160;подготовленном виде &#x2014; один из&#160;главных
                  недостатков самого распространённого решения, основанного на&#160;утилитах экранного доступа,
                  работающих в&#160;оконном интерфейсе. Без&#160;использования мыши, недоступной незрячим
                  пользователям, этот тип интерфейса не&#160;может быть удобен, следовательно, он плохо подходит
                  для&#160;выполнения повседневных задач, требующих предельного уровня скорости и комфорта.
                  Более того, если у&#160;пользователя отсутствует предшествующий опыт визуальной работы
                  с&#160;оконным интерфейсом, процесс знакомства с&#160;ним и объяснение его&#160;природы
                  может быть очень сложным.
                </p>
                <p>
                  Незрячий пользователь всегда хранит образ своего рабочего окружения в&#160;голове, получая
                  от&#160;компьютера информацию о&#160;любых изменениях. Наша задача состоит в&#160;том,
                  чтобы сделать воображаемое рабочее пространство <b>предельно простым</b>. Чем оно проще,
                  тем больше у&#160;пользователя окажется возможности сосредоточится на&#160;своей работе.
                  Возвращаясь к&#160;упоминаниям утилит экранного доступа в&#160;оконных системах, заметим,
                  что при&#160;работе с&#160;ними пользователь вынужден хранить в&#160;памяти полный вид
                  рабочего стола и расположения объектов, хотя это невозможно в&#160;принципе, какими&#160;бы
                  совершенными утилиты экранного доступа ни&#160;были. Наш опыт показывает, что создание
                  такого типа интерфейса, который не&#160;уступал&#160;бы возможностям оконного окружения,
                  вполне <b>реально</b>, если, конечно, речь идёт о&#160;задачах, в&#160;принципе доступных
                  незрячему человеку (к&#160;примеру, редактирование фотографий незрячему человеку недоступно).
                </p>
                <p>
                  На&#160;первый взгляд, наверно, наши намерения кажутся фантастическими, но на&#160;деле
                  здесь нет никакой фантастики. Не&#160;секрет, что редактирование текста &#x2014; самая доступная
                  и понятная операция для&#160;незрячего пользователя на&#160;компьютере. Остаётся только
                  сделать так, чтобы в&#160;таком виде решались&#160;бы все необходимые задачи. Как мы это
                  делаем, <a href="<?php echo luwrain_link('/doc/user/start/');?>">проверьте в&#160;LUWRAIN</a>. Помимо указанных
                  особенностей, наша концепция интерфейса имеет ряд дополнительных возможностей, ускоряющих
                  и упрощяющих работу:
                </p>
                <ul>
                  <li>возможность произвести поиск текстовой строки в&#160;текущем рабочем объекте;</li>
                  <li>
                    возможность скопировать в&#160;буфер обмена произвольный фрагмент информации, какой&#160;бы
                    ни&#160;был рабочий объект;
                  </li>
                  <li>
                    возможность единообразного вывода изображения на&#160;экран, с&#160;целью дополнения речевого
                    вывода для&#160;слабовидящих пользователей с&#160;гибкими возможностями его&#160;настройки
                    для&#160;учёта индивидуальных особенностей.
                  </li>
                </ul>
                <h2>Создание и дистрибуция приложений для&#160;незрячих людей</h2>
                <p>
                  В&#160;наше время наблюдается тренд переноса функционала из&#160;веб-браузера или настольного
                  ПК в&#160;мобильные устройства. Это очень удобно, несмотря на&#160;то, что большинство
                  мобильных устройств не&#160;могут считаться полноценной заменой ни&#160;веб-браузеру, ни
                  &#160;настольному ПК. Такие ОС, как Google&#160;Android и Apple&#160;iOS, выступают как&#160;мобильные
                  платформы, при&#160;помощи которых люди получают предельно удобный и комфортный доступ
                  к&#160;тем службам и сервисам, которые должны постоянно находиться под&#160;рукой.
                </p>
                <p>
                  Незрячие люди абсолютно не&#160;имеют никакой платформы, которая позволяла&#160;бы создавать
                  подобные приложения специально для&#160;них. Решение этой сложной задачи &#x2014; одна из&#160;целей
                  проекта LUWRAIN. LUWRAIN предлагает полноценный <a href="<?php echo luwrain_link('/doc/new-app/');?>">интерфейс
                  для&#160;создания приложений</a>, адаптированных для&#160;людей с&#160;нарушениями зрения.
                  Сильная сторона нашей идеи в&#160;том, что создание приложений при&#160;помощи LUWRAIN
                  <b>не&#160;требует от&#160;разработчиков наличия опыта в&#160;сфере вспомогательных технологий</b>.
                  Любая компания может создать клиента для&#160;своего сервиса в&#160;сети, просто использовав
                  нашу <a href="/api/">библиотеку классов на&#160;языке Java</a>; мы позаботимся о&#160;том,
                  чтобы незрячие люди легко ориентировались в&#160;том, как этим приложением пользоваться.
                </p>
                <h2>Доступность для&#160;каждого</h2>
                <p>
                  LUWRAIN сконструирован таким образом, чтобы каждый человек, которому он может оказаться
                  полезен, имел&#160;бы возможность работать в&#160;нём.
                </p>
                <ol>
                  <li>
                    <b>LUWRAIN &#x2014; свободное ПО.</b> Его&#160;использование всегда бесплатно для&#160;конечного
                    пользователя, как и использование любых продуктов, созданных третьими лицами на&#160;основе
                    LUWRAIN.
                  </li>
                  <li>
                    <b>LUWRAIN создан на&#160;основе технологий Java.</b> Пользоваться LUWRAIN можно на&#160;любом
                    компьютере и в&#160;любой ОС, для&#160;которых есть виртуальная машина Java не&#160;ниже
                    версии 1.7, а она есть практически для&#160;любой современной ОС.
                  </li>
                  <li>
                    <b>LUWRAIN имеет сборку в&#160;виде ISO-образа на&#160;ядре Linux.</b> Даже если у&#160;пользователя
                    нет&#160;вообще никакой возможности приобрести или установить какую-либо ОС, т.&#160;е.
                    у&#160;него есть только компьютер с&#160;пустым жёстким диском, он всё&#160;равно может
                    пользоваться LUWRAIN, если выберет вариант в&#160;виде <a href="<?php echo luwrain_link('/download/iso/');?>">загрузочного
                    ISO-образа</a>.
                  </li>
                  <li>
                    <b>LUWRAIN имеет предельно упрощенный и понятный интерфейс для&#160;незрячего человека.</b>
                    Пользователь может не&#160;опасаться, что ему не&#160;хватит опыта работы на&#160;ПК для&#160;эксплуатации
                    LUWRAIN. Несколько простых примеров для&#160;первого знакомства окажутся достаточными,
                    чтобы быстро начать работу.
                  </li>
                </ol>
                <h2>От&#160;автора</h2>
                <p>
                  В&#160;заключение этого небольшого рассказа о&#160;Luwrain хочу написать несколько слов
                  от&#160;себя. Мне приходится использовать вспомогательные технологии с&#160;2002&#160;г.,
                  но никогда с&#160;этого момента их&#160;работа не&#160;удовлетворяла меня полностью. Тем&#160;не&#160;менее,
                  искренне уверен, что любые примеры утилит экранного доступа, которые критикуются на&#160;этой
                  странице, являются колоссальным достижением в&#160;развитии доступности, и LUWRAIN не&#160;пытается
                  оспаривать их&#160;значимость. Буду очень рад, если все будут воспринимать LUWRAIN как
                  попытку создать нечто нестандартное, способное стать более эффективным в&#160;тех сферах,
                  которым раньше уделялось мало внимания.
                </p>
                <p>
                  Помимо всего, очень благодарен авторам <a target="_blank" href="http://emacspeak.sourceforge.net">emacspeak</a>,
                  поскольку плоды их&#160;работы не&#160;только дали мне надёжный инструмент, но и стали
                  отправной точкой для&#160;интересного поиска!
                </p>
                <p>С&#160;наилучшими пожеланиями, <a target="_blank" href="http://marigostra.ru">Михаил Пожидаев</a>.</p>

<?php }?>
<?php luwrain_end_page('/doc/about/index.php');?>
