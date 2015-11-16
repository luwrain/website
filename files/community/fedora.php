<?php include "../functions.php"; luwrain_begin_page('/community/fedora.php', luwrain_current_lang() == 'ru'?'Установка на Fedora':'Installation on Fedora');?>
<?php if (luwrain_current_lang() == 'en') {?>
<h1>Installation on Fedora</h1>

<p>Sorry, this page is available in Russian language only.</p>
<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
<h1>Описание установки LUWRAIN в дистрибутив Fedora</h1>

<p>Автор: Андрей Ампилов</p>

<p>Дата: 16 ноября 2015 г.</p>

<h2>Подготовка</h2>

<p>Для правильной работы LUWRAIN неоьбходимо  наличие речевого синтезатора.
Одним из самых простых и доступных решений для вывода речи на русском языке является синтезатор <em>RHVoice</em>.</p>

<p>Для установки <em>RHVoice</em> необходимо наличие следующих пакетов:</p>

<ul>
<li>gcc-c++;</li>
<li>scons;</li>
<li>libao;</li>
<li>libao-devel;</li>
<li>pulseaudio-libs-devel;</li>
<li>libglibmm24-devel;</li>
<li>portaudio-devel.</li>
</ul>

<p>После этого синтезатор может быть установлен и собран обычным способом.
Напоминаем, что его исходные тексты храняться <a href="https://github.com/olga-yakovleva/rhvoice">здесь</a>.</p>

<p>После установки RHVoice необходимо установить Java.
Для этого устанавливаем:</p>

<ul>
<li>java-1.8.0-openjdk;</li>
<li>java-1.8.0-openjdk-devel.</li>
</ul>

<p>После всех манипуляций все необходимые каталоги и файлы появляются таким образом,
что <em>Makefile</em>, входящий в JNI-часть LUWRAIN, править не нужно.</p>

<h2>Сборка LUWRAIN</h2>

<p>Сборку LUWRAIN выполняем обычным способом:</p>

<p><code>
cd ~/luwrain
./setup.sh
</code></p>
<?php }?>
<?php luwrain_end_page('/community/fedora.php');?>
