<?php include "../../../functions.php"; luwrain_begin_page('/doc/devel/libs/index.php', luwrain_current_lang() == 'ru'?'Библиотеки':'Llibraries');?>
<?php if (luwrain_current_lang() == 'en') {?>
<h1>Linked libraries</h1>
<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
<h1>Список задействованных библиотек</h1>

<p>Идея LUWRAIN  в&#160;значительной мере основана на&#160;доступности большого количества открытых библиотек для&#160;языка Java.
Часть из&#160;них играют важнейшую роль в&#160;реализации нашей системы.
Ниже приведён список библиотек, которые мы включаем в&#160;наши дистрибутивы.
Все&#160;библиотеки используются без&#160;внесения модификации в&#160;их&#160;исходные тексты.</p>

<ul>
<li>Системные:
<ul>
<li>SQLite3: SQL-движок для&#160;хранения динамических пользовательских данных</li>
</ul></li>
<li>Редактирование и просмотр текста:
<ul>
<li><a href="https://github.com/languagetool-org/languagetool">languagetool</a>: библиотека проверки правописания, интегрированная в&#160;том числе в&#160;LibreOffice</li>
<li><a href="https://github.com/apache/poi/">Apache POI</a>: библиотека для&#160;работы с&#160;популярными форматами офисных файлов</li>
</ul></li>
<li>Сетевые сервисы:
<ul>
<li>JavaMail: набор утилит для&#160;работы с&#160;электронной почтой, включая поддержку протоколов POP3, IMAP и SMTP</li>
<li>rome: библиотека для&#160;чтения новостных лент в&#160;формате RSS</li>
</ul></li>
<li>Социальные сети:
<ul>
<li><a href="https://github.com/yusuke/twitter4j">Twitter4J</a>: библиотека для&#160;взаимодействия с&#160;API социальной сети Twitter</li>
<li>vk-java-sdk<a href="https://github.com/VKCOM/vk-java-sdk.git"></a>: библиотека для&#160;взаимодействия с&#160;API социальной сети ВКонтакте</li>
</ul></li>
<li>Речевые синтезаторы:
<ul>
<li>RHVoice: синтезатор речи для&#160;русского языка</li>
</ul></li>
<li>Работа со&#160;звуковыми файлами:
<ul>
<li><a href="https://github.com/mpatric/mp3agic/">mp3agic</a>: библиотека для&#160;декодирования файлов в&#160;формате MP3</li>
</ul></li>
</ul>
<?php }?>
<?php luwrain_end_page('/doc/devel/libs/index.php');?>
