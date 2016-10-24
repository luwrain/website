<?php include "../functions.php"; luwrain_begin_page('/community/f123e.php', luwrain_current_lang() == 'ru'?'Представляем F123e':'Introducing F123e');?>
<?php if (luwrain_current_lang() == 'en') {?>
<h1>Introducing F123e</h1>

<p>F123e is a diverse group which includes both software developers and
non-technical persons who are blind. Since so much of computer-use is
done through graphical user interfaces (GUI), we believe that it is
important to support the technical development of and be able to use
technologies such as the Orca and NVDA screen readers. However, there
are times when we can choose how to use our computers, and for those
times, we must be able to use technology that truly maximizes our
efficiency and effectiveness. Moreover, being extraordinarily
productive should not be a privilege available only to those who are
technically sophisticated, but to everyone who is willing to invest
some time in becoming fluent with their digital tools.</p>

<p>We are impressed with the productivity demonstrated by blind users of
Emacs, the efficiency of the VIM interface design, and with the fact
that these tools have been under constant development for roughly four
decades. Moreover, the evolution of these tools, with recent mutations
such as NeoVIM and Spacemacs, demonstrate that the communities of
developers responsible for them are as vibrant as ever.</p>

<p>However, there is very little awareness of the existence of these
tools among the general blind public, installation procedures are in
some cases inadequate or non-existent, there is no training for
non-technical users that we are aware of, and the choices of keyboard
shortcuts (or key bindings), can be at times unnecessarily
arbitrary. However, we believe that these and other obstacles can be
overcome by our community.</p>

<p>Just like some of the most talented sighted developers in the world
have assumed responsibility for developing, maintaining, and improving
tools that they consider essential for their productivity, so can we,
the blind, take on the challenge of developing and supporting the
adaptations that make such technologies accessible to us. With this in
mind, the informal group we are calling F123e (or F 1 2 3
experimental), will work towards achieving the following objectives:</p>

<ul>
<li>making it extremely easy for both developers and non-technical blind
users to install ARCH Linux and other needed software on virtual or
actual machines in order to test, learn, or use the tools they need to
maximize their productivity.</li>
<li>Automate the installation process for Emacspeak and make sure it can
work with Spacemacs.</li>
<li>Develop content to make it easier for non-technical blind persons to
install, learn, and use these technologies for work, education, or
leisure.</li>
</ul>

<p>We will have an ISO image that will bring all these pieces together,
but most of the automation will rely on BASH scripts, so those
interested in other operating systems can also benefit from this
work. The choice of Spacemacs can be best understood by reading the
description of the project <a href="http://spacemacs.org/">http://spacemacs.org/</a>.</p>

<p>If you too, would like to have tools that maximize your productivity,
please join our group by sending an e-mail message to:
<a href="mailto:F123e+subscribe@groups.io">F123e+subscribe@groups.io</a>.</p>

<p>Getting an ambitious project like this one started is not easy, so we
want to thank everyone who has already joined our list, as well as
Kyle Brouhard, for helping us with our own version of the Talking ARCH
ISO; Travis Hartwell, for exploring the Spacemacs + Emacspeak
challenges; and Michael Pozhidaev, for helping us spread the word
about all this among blind developers. Of course, we are just getting
started. Please help us by sharing this with people you think will be
supportive.</p>

<p>Best regards, Fernando Botelho.</p>
<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
<h1>Представляем F123e</h1>

<p>F123e &#x2014; это коллектив, состоящий как из&#160;разработчиков ПО,
так и из&#160;пользователей, которых объединяют проблемы, связанные с&#160;нарушениями зрения.
Поскольку сейчас слишком много задач на&#160;ПК решается при&#160;помощи графического пользовательского интерфейса (GUI),
несомненно, нам всем важно иметь возможность применять в&#160;своей работе такие решения, как Orca или NVDA,
равно как и поддерживать их развитие.
Тем&#160;не&#160;менее, очень часто бывает, что у&#160;пользователя есть свобода выбора, какими решениями он&#160;может пользоваться,
и&#160;в&#160;этих ситуациях хотелось&#160;бы иметь продукты, которые по-настоящему позволят достичь 
максимальной скорости и эффективности работы.
Более того, высокая производительность труда не&#160;должна быть привилегией технических специалистов.
Каждый, кто готов потратить некоторое время, чтобы познакомиться с&#160;новыми технологиями,
должен быть в&#160;состоянии получить максимальное количество пользы от&#160;существующих разработок.</p>

<p>Мы очень впечатлены той продуктивностью,
которые достигают незрячие пользователи   GNU&#160;Emacs,
эффективностью дизайна интерфейса Vim, 
и тем, что все эти&#160;инструменты находятся в&#160;процессе непрерывного развития на&#160;протяжении уже почти сорока лет.
Их развитие, включая такие модификации как NeoVIM и Spacemacs, показывает,
что разработчики относятся к&#160;своему делу ответственно, как никогда раньше.</p>

<p>К&#160;сожалению, в&#160;сообществе незрячих пользователей относительно мало знаний и информации о&#160;существовании подобных решений;
процедура их&#160;установки зачастую непомерно сложна или даже отсутствует;
обучающих материалов от&#160;опытных специалистов нет;
 и предлагаемые комбинации клавиш для навигации в&#160;приложениях обычно неудачны.
Мы верим, что эти и другие трудности могут быть преодолены нашим сообществом.</p>

<p>Беря пример с&#160;некоторых очень талантливых известных в&#160;мире зрячих разработчиков, которые готовы брать на&#160;себя ответственность
за&#160;развитие, поддержку и улучшение  инструментов, которыми они&#160;пользуются, 
мы, незрячие пользователи,  хотим сделать то&#160;же самое для&#160;развития  и доступности технологий, которыми пользуемся сами.
Учитывая всё это, рабочая группа, которую мы назвали F123e 
(F123 experimental),
намерена начать работу, которая будет преследовать следующие цели:</p>

<ol>
<li>Сделать всё возможное, чтобы для опытных пользователей   и новичков процесс установки ARCH Linux 
и прочего необходимого ПО на&#160;физическое или виртуальное оборудование был&#160;бы как можно проще и доступнее.
Это позволит упростить процедуру тестирования, обучения или начала использования существующих технологий, 
позволяя значительно улучшить свою производительность труда.</li>
<li>Автоматизировать процедуру установки emacspeak и убедиться, что он может работать совместно с&#160;Spacemacs.</li>
<li>Подготовить необходимые материалы, чтобы новички могли&#160;бы начать использование  упомянутых программ 
для&#160;работы, обучения или досуга.</li>
</ol>

<p>Мы намерены подготовить ISO-образ, включающий в&#160;себя всё необходимое, 
но большая часть автоматизации будет произведена при&#160;помощи скриптов bash,
так что люди, интересующиеся другими ОС, тоже смогут получить преимущество от&#160;нашей работы.
Понять причины выбора Spacemacs проще всего, читая  описание проекта на&#160;<a href="http://spacemacs.org/">http://spacemacs.org/</a>.</p>

<p>Если вы также хотите иметь продукты, которые максимально ускорят вашу работу,
пожалуйста, присоединяйтесь к&#160;нашему сообществу, послав письмо в&#160;список рассылки <a href="mailto:F123e+subscribe@groups.io">F123e+subscribe@groups.io</a>.</p>

<p>Работа над&#160;таким амбициозным проектом, как наш, довольно трудна,
так что мы хотим поблагодарить всех, кто уже присоединился к&#160;работе.
В&#160;их число входят :</p>

<ul>
<li>Kyle Brouhard, который помог нам в&#160;подготовке нашей собственной версии Talking ARCH ISO;</li>
<li>Travis Hartwell, который протестировал совместимость Spacemacs + Emacspeak;</li>
<li>Михаила Пожидаева, который помог распространить информацию о&#160;нашей работе в&#160;сообществе незрячих пользователей.</li>
</ul>

<p>Мы только начинаем! Пожалуйста, помогите нам распространить эту информацию среди всех,
кто по&#160;вашему мнению может быть полезен!</p>

<p>С&#160;наилучшими пожеланиями, Fernando Botelho.</p>
<?php }?>
<?php luwrain_end_page('/community/f123e.php');?>
