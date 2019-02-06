<?php include "../../functions.php"; luwrain_begin_page('/download/git/index.php', luwrain_current_lang() == 'ru'?'РепозиторииGit':'Git repositories');?>
<?php if (luwrain_current_lang() == 'en') {?>
<h1>Git repositories</h1>

<p>See&#160;also</p>

<ul>
<li><a href="<?php echo luwrain_link('/doc/devel/nightly/');?>">Compiling our nightly releases</a></li>
</ul>

<p>Our&#160;source code is easily accessible through &#160;a&#160;set of&#160;Git repositories on&#160;<a href="http://github.com/luwrain/">github.com</a>.
All of&#160;these repositories are&#160;listed here in&#160;several categories 
with&#160;brief comments.
Please note that there is the&#160;<em>lwr-checkout</em> script in&#160;<a href="https://github.com/luwrain/base.git">base.git</a>
which clones all&#160;repositories necessary to&#160;compile our&#160;distribution.</p>

<h2>Core repositories</h2>

<ul>
<li><a href="https://github.com/luwrain/luwrain.git">https://github.com/luwrain/luwrain.git</a> &#x2014;
the system core, standard controls, extensions manager </li>
<li><a href="https://github.com/luwrain/base.git">https://github.com/luwrain/base.git</a> &#x2014;
a&#160;set of&#160;basic interfaces which supposed to be&#160;available in all&#160;extensions and OS-dependent functions</li>
<li><a href="https://github.com/luwrain/interaction-javafx.git">https://github.com/luwrain/interaction-javafx.git</a> &#x2014;
user interaction functions implemented on&#160;JavaFX</li>
<li><a href="https://github.com/luwrain/doctree.git">https://github.com/luwrain/doctree.git</a> &#x2014;
structured documents processing and filters for&#160;documents reading (DOC, FB2, HTML etc)</li>
<li><a href="https://github.com/luwrain/pim.git">https://github.com/luwrain/pim.git</a> &#x2014;
personal information manager</li>
<li><a href="https://github.com/luwrain/network.git">https://github.com/luwrain/network.git</a> &#x2014;
network management (for GNU/Linux only)</li>
</ul>

<h2>Main applications</h2>

<ul>
<li><a href="https://github.com/luwrain/app-browser.git">https://github.com/luwrain/app-browser.git</a> &#x2014;
web browser (also has Javadoc <a href="http://luwrain.org/api-browser">here</a>)</li>
<li><a href="https://github.com/luwrain/app-commander.git">https://github.com/luwrain/app-commander.git</a> &#x2014;
double-panel commander for operations on&#160;files and directories</li>
<li><a href="https://github.com/luwrain/app-mail.git">https://github.com/luwrain/app-mail.git</a> &#x2014;
mail reading</li>
<li><a href="https://github.com/luwrain/app-message.git">https://github.com/luwrain/app-message.git</a> &#x2014;
mail messages composing</li>
<li><a href="https://github.com/luwrain/app-reader.git">https://github.com/luwrain/app-reader.git</a> &#x2014;
documents and texts preview</li>
<li><a href="https://github.com/luwrain/app-player.git">https://github.com/luwrain/app-player.git</a> &#x2014;
multimedia player</li>
</ul>

<h2>Auxiliary repositories</h2>

<ul>
<li><a href="https://github.com/luwrain/extensions.git">https://github.com/luwrain/extensions.git</a> &#x2014;
a&#160;set of&#160;standard extensions</li>
<li><a href="https://github.com/luwrain/i18n.git">https://github.com/luwrain/i18n.git</a> &#x2014;
support of&#160;national languages and standards</li>
<li><a href="https://github.com/luwrain/registry.git">https://github.com/luwrain/registry.git</a> &#x2014;
registry data</li>
</ul>

<h2>Other applications</h2>

<ul>
<li><a href="https://github.com/luwrain/app-calc.git">https://github.com/luwrain/app-calc.git</a> &#x2014;
calculator</li>
<li><a href="https://github.com/luwrain/app-calendar.git">https://github.com/luwrain/app-calendar.git</a> &#x2014;
calendar</li>
<li><a href="https://github.com/luwrain/app-diary.git">https://github.com/luwrain/app-diary.git</a> &#x2014;
personal diary</li>
<li><a href="https://github.com/luwrain/app-fetch.git">https://github.com/luwrain/app-fetch.git</a> &#x2014;
fetching of mail and news</li>
<li><a href="https://github.com/luwrain/app-news.git">https://github.com/luwrain/app-news.git</a> &#x2014;
news reading</li>
<li><a href="https://github.com/luwrain/app-notepad.git">https://github.com/luwrain/app-notepad.git</a> &#x2014;
simple text editor</li>
<li><a href="https://github.com/luwrain/app-term.git">https://github.com/luwrain/app-term.git</a> &#x2014;
terminal (GNU/Linux only)</li>
<li><a href="https://github.com/luwrain/app-twitter.git">https://github.com/luwrain/app-twitter.git</a> &#x2014;
Twitter client</li>
<li><a href="https://github.com/luwrain/app-writer.git">https://github.com/luwrain/app-writer.git</a>
documents editor</li>
<li><a href="https://github.com/luwrain/app-contacts.git">https://github.com/luwrain/app-contacts.git</a>
personal address book</li>
<li><a href="https://github.com/luwrain/app-fb.git">https://github.com/luwrain/app-contacts.git</a>
Facebook client</li>
<li><a href="https://github.com/luwrain/app-char.git">https://github.com/luwrain/app-contacts.git</a>
messenger</li>
</ul>

<h2>OS-dependent code</h2>

<ul>
<li><a href="https://github.com/luwrain/linux.git">https://github.com/luwrain/linux.git</a> &#x2014;
for&#160;GNU/Linux</li>
<li><a href="https://github.com/luwrain/windows.git">https://github.com/luwrain/windows.git</a> &#x2014;
for&#160;Microsoft Windows</li>
<li><a href="https://github.com/luwrain/macos.git">https://github.com/luwrain/macos.git</a> &#x2014;
for&#160;Mac&#160;OS&#160;X (currently unmaintained)</li>
</ul>

<h2>System services</h2>

<p>We have these repositories, but in&#160;fact almost don't work on&#160;them at&#160;the&#160;moment.
Only VoiceMan goes to&#160;our&#160;ISO images as&#160;a&#160;speech server,
all other repositories are listed here mostly for&#160;discussions</p>

<ul>
<li><a href="https://github.com/luwrain/voiceman.git">https://github.com/luwrain/voiceman.git</a> &#x2014;
our speech server</li>
<li><a href="https://github.com/luwrain/libdbusspeech.git">https://github.com/luwrain/libdbusspeech.git</a> &#x2014;
speech interface based on&#160;D-Bus</li>
<li><a href="https://github.com/luwrain/guidecraft.git">https://github.com/luwrain/guidecraft.git</a> &#x2014;
AT-SPI client and the window manager</li>
<li><a href="https://github.com/luwrain/pointvox.git">https://github.com/luwrain/pointvox.git</a> &#x2014;
TTS manager</li>
<li><a href="https://github.com/luwrain/musitorius.git">https://github.com/luwrain/musitorius.git</a> &#x2014;
multimedia player control</li>
</ul>
<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
<h1>репозитории Git</h1>

<p>См.&#160;также:</p>

<ul>
<li><a href="<?php echo luwrain_link('/doc/devel/nightly/');?>">Компиляция наших nightly-сборок</a></li>
</ul>

<p>Наш исходный код опубликован в&#160;виде серии репозиториев Git по&#160;адресу <a href="http://github.com/luwrain/">https://github.com/luwrain/</a>.
Они перечислены ниже с&#160;краткими комментариями об&#160;их&#160;назначении.
Пожалуйста, обратите внимание, что в&#160;репозитории <a href="https://github.com/luwrain/base.git">base.git</a> присутствует скрипт <strong>lwr-checkout</strong>,
который выполняет автоматическое клонирование всех репозиториев, необходимых для&#160;сборки нашего дистрибутива.</p>

<p>Репозитории разбиты на&#160;несколько категорий,
которые определяют видимость классов в&#160;них.
Классы в&#160;репозиториях  в&#160;категории "Ключевые компоненты" экспортируются во&#160;все приложения и в&#160;код для&#160;поддержки национальных языков и стандартов.
Классы системнозависимых компонентов и приложений не&#160;экспортируются,
кроме кода для&#160;поддержки национальных языков и стандартов.
Классы в&#160;центральных репозиториях
<a href="https://github.com/luwrain/luwrain.git">luwrain.git</a>
и
<a href="https://github.com/base.git">base.git</a>.
доступны во&#160;всех компонентах, приложениях и расширениях.
Код в&#160;репозитории
<a href="https://github.com/luwrain/interaction-javafx.git">interaction-javafx</a>
загружается ядром системы и не&#160;доступен для&#160;кода в&#160;других репозиториях.</p>

<h2>Ядро системы</h2>

<ul>
<li><a href="https://github.com/luwrain/luwrain.git">https://github.com/luwrain/luwrain.git</a>:
ядро системы, стандартные элементы управления, менеджер расширений</li>
<li><a href="https://github.com/luwrain/base.git">https://github.com/luwrain/base.git</a>:
набор интерфейсов, доступных всем расширениям</li>
<li><a href="https://github.com/luwrain/interaction-javafx.git">https://github.com/luwrain/interaction-javafx.git</a>:
основанный на JavaFX механизм взаимодействия с&#160;пользователем</li>
<li><a href="https://github.com/luwrain/extensions.git">https://github.com/luwrain/extensions.git</a>:
набор стандартных расширений</li>
<li><a href="https://github.com/luwrain/i18n.git">https://github.com/luwrain/i18n.git</a>:
поддержка национальных языков и стандартов</li>
<li><a href="https://github.com/luwrain/registry.git">https://github.com/luwrain/registry.git</a>:
данные реестра</li>
</ul>

<h2>Ключевые компоненты</h2>

<ul>
<li><a href="https://github.com/luwrain/app-browser.git">https://github.com/luwrain/app-browser.git</a>:
веб-браузер, основанный на&#160;движке WebKit</li>
<li><a href="https://github.com/luwrain/pim.git">https://github.com/luwrain/pim.git</a>:
менеджер личной информации</li>
<li><a href="https://github.com/luwrain/player.git">https://github.com/luwrain/player.git</a>:
плеер медиафайлов</li>
<li><a href="https://github.com/luwrain/reader.git">https://github.com/luwrain/reader.git</a>:
работа со&#160;структурированными документами</li>
<li><a href="https://github.com/luwrain/studio.git">https://github.com/luwrain/studio.git</a>:
работа со&#160;структурированными документами</li>
</ul>

<h2>Приложения</h2>

<ul>
<li><a href="https://github.com/luwrain/app-contacts.git">https://github.com/luwrain/app-contacts.git</a>:
персональная адресная книга</li>
<li><a href="https://github.com/luwrain/app-commander.git">https://github.com/luwrain/app-commander.git</a>:
двухпанельный файловый менеджер для&#160;операций над&#160;файлами и каталогами</li>
<li><a href="https://github.com/luwrain/app-mail.git">https://github.com/luwrain/app-mail.git</a>:
почтовый клиент</li>
<li><a href="https://github.com/luwrain/app-news.git">https://github.com/luwrain/app-news.git</a>:
чтение новостей при&#160;помощи RSS-лент</li>
<li><a href="https://github.com/luwrain/app-notepad.git">https://github.com/luwrain/app-notepad.git</a>:
простейший текстовый редактор</li>
<li><a href="https://github.com/luwrain/app-twitter.git">https://github.com/luwrain/app-twitter.git</a>:
клиент для&#160;Твиттера</li>
<li><a href="https://github.com/luwrain/app-vk.git">https://github.com/luwrain/app-vk.git</a>:
клиент для&#160;социальной сети ВКонтакте</li>
</ul>

<h2>Системнозависимые компоненты</h2>

<ul>
<li><a href="https://github.com/luwrain/linux.git">https://github.com/luwrain/linux.git</a>:
для&#160;GNU/Linux</li>
<li><a href="https://github.com/luwrain/windows.git">https://github.com/luwrain/windows.git</a>:
для&#160;Microsoft Windows</li>
</ul>
<?php }?>
<?php luwrain_end_page('/download/git/index.php');?>
