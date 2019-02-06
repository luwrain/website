
ENTITLE='Git repositories'
RUTITLE='РепозиторииGit'
TARGET=download/git/index.php

luwrain-page-en

# Git repositories

See~also

* [Compiling our nightly releases](local:/doc/devel/nightly/)

Our~source code is easily accessible through ~a~set of~Git repositories on~[github.com](http://github.com/luwrain/).
All of~these repositories are~listed here in~several categories 
with~brief comments.
Please note that there is the~*lwr-checkout* script in~[base.git](https://github.com/luwrain/base.git)
which clones all~repositories necessary to~compile our~distribution.

All~repositories are divided onto several categories,
belonging to~the~particular category  is dependnt on  the~visibility rules for~the~classes inside.
The~classes in~the~repositories of~the~category  "Major components"
are exported to~all~applications  and to~the~implementation of~the~national standards.
The~classes of~system-dependent repositories are not~accessible,
except of~the~implementation of~national standards.
The~classes of~the~central repositories
[luwrain.git](https://github.com/luwrain/luwrain.git)
and
[base.git](https://github.com/base.git)
are accessible in~any extension, application and component.
The~code of the~repository
[interaction-javafx](https://github.com/luwrain/interaction-javafx.git)
is loaded by~the~LUWRAIN core and not~available elsewhere at~all.

## Core repositories 

* [https://github.com/luwrain/luwrain.git](https://github.com/luwrain/luwrain.git) ---
the system core, standard controls, extensions manager 
* [https://github.com/luwrain/base.git](https://github.com/luwrain/base.git) ---
a~set of~basic interfaces which supposed to be~available in all~extensions and OS-dependent functions
* [https://github.com/luwrain/interaction-javafx.git](https://github.com/luwrain/interaction-javafx.git) ---
user interaction functions implemented on~JavaFX
* [https://github.com/luwrain/doctree.git](https://github.com/luwrain/doctree.git) ---
structured documents processing and filters for~documents reading (DOC, FB2, HTML etc)
* [https://github.com/luwrain/pim.git](https://github.com/luwrain/pim.git) ---
personal information manager
* [https://github.com/luwrain/network.git](https://github.com/luwrain/network.git) ---
network management (for GNU/Linux only)

## Main applications

* [https://github.com/luwrain/app-browser.git](https://github.com/luwrain/app-browser.git) ---
web browser (also has Javadoc [here](http://luwrain.org/api-browser))
* [https://github.com/luwrain/app-commander.git](https://github.com/luwrain/app-commander.git) ---
double-panel commander for operations on~files and directories
* [https://github.com/luwrain/app-mail.git](https://github.com/luwrain/app-mail.git) ---
mail reading
* [https://github.com/luwrain/app-message.git](https://github.com/luwrain/app-message.git) ---
mail messages composing
* [https://github.com/luwrain/app-reader.git](https://github.com/luwrain/app-reader.git) ---
documents and texts preview
* [https://github.com/luwrain/app-player.git](https://github.com/luwrain/app-player.git) ---
multimedia player

## Auxiliary repositories

* [https://github.com/luwrain/extensions.git](https://github.com/luwrain/extensions.git) ---
a~set of~standard extensions
* [https://github.com/luwrain/i18n.git](https://github.com/luwrain/i18n.git) ---
support of~national languages and standards
* [https://github.com/luwrain/registry.git](https://github.com/luwrain/registry.git) ---
registry data

## Other applications

* [https://github.com/luwrain/app-calc.git](https://github.com/luwrain/app-calc.git) ---
calculator
* [https://github.com/luwrain/app-calendar.git](https://github.com/luwrain/app-calendar.git) ---
calendar
* [https://github.com/luwrain/app-diary.git](https://github.com/luwrain/app-diary.git) ---
personal diary
* [https://github.com/luwrain/app-fetch.git](https://github.com/luwrain/app-fetch.git) ---
fetching of mail and news
* [https://github.com/luwrain/app-news.git](https://github.com/luwrain/app-news.git) ---
news reading
* [https://github.com/luwrain/app-notepad.git](https://github.com/luwrain/app-notepad.git) ---
simple text editor
* [https://github.com/luwrain/app-term.git](https://github.com/luwrain/app-term.git) ---
terminal (GNU/Linux only)
* [https://github.com/luwrain/app-twitter.git](https://github.com/luwrain/app-twitter.git) ---
Twitter client
* [https://github.com/luwrain/app-writer.git](https://github.com/luwrain/app-writer.git)
documents editor
* [https://github.com/luwrain/app-contacts.git](https://github.com/luwrain/app-contacts.git)
personal address book
* [https://github.com/luwrain/app-contacts.git](https://github.com/luwrain/app-fb.git)
Facebook client
* [https://github.com/luwrain/app-contacts.git](https://github.com/luwrain/app-char.git)
messenger

## OS-dependent code

* [https://github.com/luwrain/linux.git](https://github.com/luwrain/linux.git) ---
for~GNU/Linux
* [https://github.com/luwrain/windows.git](https://github.com/luwrain/windows.git) ---
for~Microsoft Windows
* [https://github.com/luwrain/macos.git](https://github.com/luwrain/macos.git) ---
for~Mac~OS~X (currently unmaintained)

## System services

We have these repositories, but in~fact almost don't work on~them at~the~moment.
Only VoiceMan goes to~our~ISO images as~a~speech server,
all other repositories are listed here mostly for~discussions

* [https://github.com/luwrain/voiceman.git](https://github.com/luwrain/voiceman.git) ---
our speech server
* [https://github.com/luwrain/libdbusspeech.git](https://github.com/luwrain/libdbusspeech.git) ---
 speech interface based on~D-Bus
* [https://github.com/luwrain/guidecraft.git](https://github.com/luwrain/guidecraft.git) ---
AT-SPI client and the window manager
* [https://github.com/luwrain/pointvox.git](https://github.com/luwrain/pointvox.git) ---
    TTS manager
* [https://github.com/luwrain/musitorius.git](https://github.com/luwrain/musitorius.git) ---
multimedia player control

luwrain-page-ru

# репозитории Git

См.~также:

* [Компиляция наших nightly-сборок](local:/doc/devel/nightly/)

Наш исходный код опубликован в~виде серии репозиториев Git по~адресу [https://github.com/luwrain/](http://github.com/luwrain/).
Они перечислены ниже с~краткими комментариями об~их~назначении.
Пожалуйста, обратите внимание, что в~репозитории [base.git](https://github.com/luwrain/base.git) присутствует скрипт __lwr-checkout__,
который выполняет автоматическое клонирование всех репозиториев, необходимых для~сборки дистрибутива LUWRAIN.

Репозитории разбиты на~несколько категорий,
которые определяют видимость классов.
Классы в~репозиториях  в~категории "Ключевые компоненты" экспортируются во~все приложения и в~код для~поддержки национальных языков и стандартов.
Классы системнозависимых компонентов и приложений не~экспортируются,
кроме кода для~поддержки национальных языков и стандартов.
Классы в~центральных репозиториях
[luwrain.git](https://github.com/luwrain/luwrain.git)
и
[base.git](https://github.com/base.git)
доступны во~всех компонентах, приложениях и расширениях.
Код в~репозитории
[interaction-javafx](https://github.com/luwrain/interaction-javafx.git)
загружается ядром системы и не~доступен для~кода в~других репозиториях.

## Ядро системы

* [https://github.com/luwrain/luwrain.git](https://github.com/luwrain/luwrain.git):
ядро системы, стандартные элементы управления, менеджер расширений
* [https://github.com/luwrain/base.git](https://github.com/luwrain/base.git):
набор интерфейсов, доступных всем расширениям
* [https://github.com/luwrain/interaction-javafx.git](https://github.com/luwrain/interaction-javafx.git):
основанный на JavaFX механизм взаимодействия с~пользователем
* [https://github.com/luwrain/extensions.git](https://github.com/luwrain/extensions.git):
набор стандартных расширений
* [https://github.com/luwrain/i18n.git](https://github.com/luwrain/i18n.git):
поддержка национальных языков и стандартов
* [https://github.com/luwrain/registry.git](https://github.com/luwrain/registry.git):
данные реестра

## Ключевые компоненты

* [https://github.com/luwrain/app-browser.git](https://github.com/luwrain/app-browser.git):
веб-браузер, основанный на~движке WebKit
* [https://github.com/luwrain/pim.git](https://github.com/luwrain/pim.git):
менеджер личной информации
* [https://github.com/luwrain/player.git](https://github.com/luwrain/player.git):
плеер медиафайлов
* [https://github.com/luwrain/reader.git](https://github.com/luwrain/reader.git):
работа со~структурированными документами
* [https://github.com/luwrain/studio.git](https://github.com/luwrain/studio.git):
работа со~структурированными документами

## Приложения

* [https://github.com/luwrain/app-contacts.git](https://github.com/luwrain/app-contacts.git):
персональная адресная книга
* [https://github.com/luwrain/app-commander.git](https://github.com/luwrain/app-commander.git):
двухпанельный файловый менеджер для~операций над~файлами и каталогами
* [https://github.com/luwrain/app-mail.git](https://github.com/luwrain/app-mail.git):
почтовый клиент
* [https://github.com/luwrain/app-news.git](https://github.com/luwrain/app-news.git):
чтение новостей при~помощи RSS-лент
* [https://github.com/luwrain/app-notepad.git](https://github.com/luwrain/app-notepad.git):
простейший текстовый редактор
* [https://github.com/luwrain/app-twitter.git](https://github.com/luwrain/app-twitter.git):
клиент для~Твиттера
* [https://github.com/luwrain/app-vk.git](https://github.com/luwrain/app-vk.git):
клиент для~социальной сети ВКонтакте

## Системнозависимые компоненты

* [https://github.com/luwrain/linux.git](https://github.com/luwrain/linux.git):
для~GNU/Linux
* [https://github.com/luwrain/windows.git](https://github.com/luwrain/windows.git):
для~Microsoft Windows

