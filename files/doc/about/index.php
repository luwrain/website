<?php include "../../functions.php"; luwrain_begin_page('/doc/about/index.php', luwrain_current_lang() == 'ru'?'О проекте':'About the project');?>
<?php if (luwrain_current_lang() == 'en') {?>
                <h1>About the project</h1>
                <p>See also:</p>
                <ul>
                  <li><a href="<?echo luwrain_link('difference/');?>">Why is Luwrain different than other accessible solutions?</a></li>
                  <li><a href="<?echo luwrain_link('faq/');?>">Frequently asked questions</a></li>
                </ul>
                <h2>What are we working on?</h2>
                <p>
                  It&#160;is definitely right if you are&#160;thinking of&#160;Luwrain primarily as&#160;of&#160;a&#160;special
                  conception for&#160;interaction for&#160;blind people with&#160;personal computers. This&#160;approach,
                  which we&#160;called &#x22;text-based interface&#x22;, in&#160;conjunction with&#160;technologies
                  chosen for&#160;implementation, gives really new&#160;chances to&#160;improve lifes of&#160;handicapped
                  people. Arguably, the&#160;navigation over a&#160;text file is the&#160;most comfortable
                  and understandable way of&#160;doing anything on PC&#x27;s with&#160;assistive technologies
                  and Luwrain&#x27;s idea is to&#160;spread this simple finding everywhere. That doesn&#x27;t
                  mean that Luwrain hasn&#x27;t any elements similar to&#160;GUI items at all totally (e.g.
                  forms or menus) but all of them should be reconsidered in&#160;new&#160;way. Just imagine:
                </p>
                <ul>
                  <li>
                    No&#160;potentially inaccessible objects in&#160;working area, user is always sure that
                    there is nothing unknown to him/her
                  </li>
                  <li>Every object can be explored letter-by-letter quickly and easily</li>
                  <li>
                    In&#160;any place user can do a&#160;search for&#160;a&#160;particular substring regardless
                    what structure the&#160;current object has, whether it is a&#160;file&#160;manager panel,
                    a&#160;message&#160;composer, an&#160;address book entry or a&#160;media player control
                  </li>
                  <li>
                    Any&#160;fragment of&#160;working space can be&#160;copied to&#160;clipboard and pasted
                    as&#160;text, say, for&#160;sending as&#160;a&#160;message to&#160;friend
                  </li>
                </ul>
                <p>
                  Do&#160;not&#160;suspect Luwrain of&#160;being one&#160;more sophisticated text editor,
                  it&#160;is&#160;not the&#160;case. Luwrain offers the&#160;text navigation only just as&#160;some
                  sort of&#160;logical level, there can be as&#160;complex structure behind it as&#160;you
                  want. In&#160;contrast to&#160;GNU&#160;Emacs (which could be fairly considered as&#160;an&#160;origin
                  of&#160;inspiration for&#160;us) Luwrain doesn&#x27;t store the&#160;real text as&#160;a&#160;single
                  solid buffer.
                </p>
                <p>
                  The&#160;Luwrain environment tries to&#160;develop proposed text-based approach making
                  it really complete and useful. User navigation commands are announced with&#160;special
                  comments describing what he/she has under the&#160;current cursor position. All&#160;object
                  are&#160;gathered in&#160;applications which user is&#160;able to&#160;launch as&#160;many
                  as&#160;his/her computer can. Their standard set includes file&#160;manager, media player,
                  text&#160;editor with&#160;office documents filters, mail client, news reader, personal
                  address book and scheduler, command line terminal etc.
                </p>
                <h2>Hm, what can we do with that?</h2>
                <p>
                  The&#160;idea suggested above is&#160;implemented using Java. That makes Luwrain potentially
                  available on&#160;any&#160;operating system which has a&#160;proper Java&#160;SE support.
                  It is true enough but Luwrain shows its best primarily on&#160;GNU/Linux, which it has
                  been initially designed for. The&#160;original Luwrain distribution is&#160;provided as&#160;a&#160;stand-alone
                  <a href="<?echo luwrain_link('/download/distr/');?>">bootable ISO-image</a> for&#160;using completely free&#160;of&#160;charge
                  and capable of&#160;installation without any sighted help.
                </p>
                <p>
                  All&#160;of&#160;that makes Luwrain a&#160;solution which could be&#160;suitable for&#160;doing
                  most&#160;of&#160;popular tasks for&#160;various groups of&#160;users. Experienced users,
                  perhaps, could find it&#160;better than usual screen readers because Luwrain let doing
                  some tasks more quickly and more&#160;comfortable. Inexperienced users, including seniors,
                  get&#160;access to&#160;information technologies without long prior learning; at&#160;most
                  they should to&#160;pass through a&#160;short system guide offered on&#160;launch of&#160;Luwrain
                  LiveCD.
                </p>
                <p>
                  We&#160;take these benefits as&#160;quite sufficient to&#160;do our work but returning
                  to&#160;Luwrain portability it is&#160;possible to&#160;discover new areas previously
                  left mostly untouched. Luwrain can be&#160;used as&#160;<a href="<?echo luwrain_link('/doc/new-app/');?>">a&#160;framework
                  for&#160;creating the&#160;applications</a> designed specially for&#160;blind people. Luwrain
                  promises that these applications will be&#160;understandable for&#160;disabled persons
                  and available for&#160;them due to&#160;presence of&#160;Java on&#160;most of&#160;popular
                  platforms. Meantime, authors of&#160;applications for&#160;Luwrain may know nothing about
                  assistive technologies, they should just take a&#160;set of&#160;Luwrain classes.
                </p>
                <h2>By the author</h2>
                <p>
                  At&#160;the end of&#160;this little free story what Luwrain is, me would like to write
                  a&#160;few words as&#160;some kind of&#160;personal notes. I had&#160;to use screen readers
                  since 2001 and never from that moment was satisfied with them. However, me strongly convinced
                  that they are a&#160;great achievement and Luwrain will never try to&#160;dispute their
                  value. It&#160;would be&#160;nice if everybody will consider Luwrain just as&#160;an&#160;attempt
                  to&#160;create something new, hopefully, interesting and useful in&#160;areas, which previously
                  didn&#x27;t get enough attention. Besides that, me is very grateful to&#160;all <a target="_blank" href="http://emacspeak.sourceforge.net">emacspeak</a>
                  authors because the&#160;results of&#160;their work gave me a&#160;reliable tool and a&#160;lot
                  of&#160;useful thoughts!
                </p>
                <p>With best wishes, <a target="_blank" href="http://marigostra.com/">Michael Pozhidaev</a>.</p>

<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
                <h1>Над чем мы работаем</h1>
                <p>
                  Luwrain &#x2014; это прежде всего новый подход к&#160;взаимодействию незрячего человека
                  с&#160;персональным компьютером, основанный на&#160;представление любых документов и структур
                  в&#160;текстовой форме. В&#160;сочетании с&#160;технологиями, выбранными для&#160;реализации,
                  это даёт нам шанс решить некоторые проблемы из&#160;мира вспомогательных тсредств, которым
                  ранее уделялось мало внимания. Навигация внутри текстового файла, возможно, является самой
                  понятной и удобной операцией для&#160;людей с&#160;нарушениями зрения. Luwrain старается
                  распространить её на&#160;всё, что делает человек на&#160;компьютере. Тем&#160;не&#160;менее,
                  это не&#160;означает, что в&#160;Luwrain вовсе нет&#160;объектов, близких по&#160;назначению
                  к&#160;элементам GUI (например, меню или формам), просто процесс работы в&#160;них переосмыслен
                  с&#160;точки зрения новой концепции. Представьте:
                </p>
                <ul>
                  <li>
                    в&#160;рабочем пространстве нет&#160;недоступных объектов, и пользователь всегда уверен,
                    что он знает всё, что находится в&#160;его окружении;
                  </li>
                  <li>любой объект может быть быстро исследован буква за буквой;</li>
                  <li>
                    в&#160;любом месте пользователь может произвести поиск некоторой текстовой строки вне&#160;зависимости
                    от&#160;того, с&#160;объектом какого типа он&#160;ведёт работу: со&#160;списком файлов,
                    в&#160;редакторе электронных писем, в&#160;адресной книге или в&#160;панели управления
                    медиа-проигрывателем;
                  </li>
                  <li>
                    любой фрагмент текста может быть скопирован в&#160;буфер обмена для&#160;того, чтобы, скажем,
                    отправить другу в&#160;виде электронного сообщения.
                  </li>
                </ul>
                <p>
                  Не&#160;стоит считать Luwrain ещё одним развитым текстовым редактором, это вовсе не&#160;так.
                  Luwrain предлагает навигацию в&#160;текстовом стиле только как некоторый промежуточный
                  логический уровень, который скрывает структуры произвольной сложности. В&#160;отличие от&#160;GNU&#160;Emacs
                  (который, впрочем, может по&#160;праву считаться источником вдохновения для&#160;нас),
                  Luwrain не&#160;хранит текст в&#160;виде единого буфера в&#160;памяти. Окружение Luwrain
                  пытается предельно развить этот подход и&#160;сделать его по-настоящему удобным и практичным.
                  Все&#160;действия пользователя дополняются специальными комментариями, описывающими объекты,
                  находящиеся под&#160;текущим положением курсора. Элементы управления группируются в&#160;приложения,
                  которые могут быть запущены в&#160;количестве, ограниченном только возможностями компьютера.
                  Стандартный набор приложений Luwrain включает в&#160;себя файловый менеджер, медиа-проигрыватель,
                  текстовый редактор с&#160;поддержкой форматов офисных документов, почтовый клиент, новостной
                  клиент, персональные адресную книгу, личный планировщик, командную строку и&#160;т.&#160;д.
                </p>
                <h2>Что&#160;же это нам даёт?</h2>
                <p>
                  Предложенная выше идея реализуется на&#160;языке Java и может быть запущена практически
                  на&#160;любой платформе, которая имеет полноценную поддержку Java&#160;SE. Тем&#160;не&#160;менее,
                  с&#160;самой лучшей стороны Luwrain показывает себя прежде всего на&#160;GNU/Linux, для&#160;которой
                  первоначально и задумывался. Полная поставка Luwrain предлагается в&#160;виде <a href="<?echo luwrain_link('/download/distr/');?>">загрузочного
                  ISO-образа</a>, доступного для&#160;самостоятельной установки на&#160;жёсткий диск и полностью
                  бесплатного для&#160;использования. Это делает LUwrain решением, подходящим для&#160;многих
                  распространённых задач, возникающих у&#160;большого числа пользователей с&#160;ограниченными
                  возможностями. Опытные пользователи, возможно, найдут Luwrain в&#160;некоторых ситуациях
                  более удобным и эффективным, чем обычные экранные чтецы. Начинающие пользователи, включая
                  людей пожилого возраста, в&#160;свою очередь, смогут получить доступ к&#160;информационным
                  технологиям, которого у&#160;них не&#160;было до&#160;этого. Дпозволяет начать работу после
                  ознакомления с&#160;краткими инструкциями, предлагаемыми при&#160;запуске LiveCD, минуя
                  длительную процедуру обучения.
                </p>
                <p>
                  На&#160;наш взгляд, упомянутые преимущества уже могли&#160;бы быть достаточными, чтобы
                  вести подобную работу, но вместе с&#160;тем переносимость Luwrain позволяет затронуть некоторые
                  новые области, которым до&#160;текущего момента уделялось относительно мало внимания. Luwrain
                  может быть использован как&#160;<a href="<?echo luwrain_link('/doc/new-app/');?>">инструментарий для&#160;создания
                  доступных приложений</a>, адаптированных специально для&#160;людей с&#160;нарушениями зрения.
                  Luwrain обещает разработчикам приложений, что созданные продукты будут понятны пользователям
                  с&#160;ограниченными возможностями и будут им доступны на&#160;всех платформах, на&#160;которых
                  возможна установка виртуальной машины Java. Авторы приложений могут не&#160;иметь абсолютно
                  никакого опыта в&#160;сфере вспомогательных технологий. Всё, что им требуется, &#x2014;
                  это задействовать библиотеку классов Luwrain.
                </p>
                <h2>От&#160;автора</h2>
                <p>
                  В&#160;заключение этого небольшого рассказа о&#160;Luwrain я хотел&#160;бы написать несколько
                  слов от&#160;себя. Мне приходится использовать программы экранного доступа с&#160;2001&#160;г.,
                  но никогда с&#160;этого момента не&#160;был полностью удовлетворён их&#160;работой. Тем&#160;не&#160;менее,
                  искренне уверен, что они являются колоссальным достижением в&#160;развитии доступности,
                  и Luwrain не&#160;пытается оспаривать их&#160;значимость. Был&#160;бы очень рад, если все
                  воспринимали Luwrain как попытку создать нечто нестандартное, способное оказаться эффективнее
                  в&#160;тех сферах, которым раньше уделялось мало внимания. Помимо всего, очень благодарен
                  авторам <a target="_blank" href="http://emacspeak.sourceforge.net">emacspeak</a>, поскольку
                  плоды их&#160;работы не&#160;только дали мне надёжный инструмент, но и стали отправной
                  точкой для&#160;интересного поиска.
                </p>
                <p>С&#160;наилучшими пожеланиями, <a target="_blank" href="http://marigostra.ru">Михаил Пожидаев</a>.</p>

<?php }?>
<?php luwrain_end_page('/doc/about/index.php');?>
