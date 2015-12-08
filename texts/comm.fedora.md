
ENTITLE='Installation on Fedora'
RUTITLE='Установка на Fedora'
TARGET=community/fedora.php

luwrain-page-en

# Installation on Fedora 

Sorry, this page is available in Russian language only.

luwrain-page-ru


# Описание установки LUWRAIN в дистрибутив Fedora 

Автор: Андрей Ампилов

Дата: 16 ноября 2015 г.

## Подготовка

Для правильной работы LUWRAIN необходимо  наличие речевого синтезатора.
Одним из самых простых и доступных решений для вывода речи на русском языке является синтезатор _RHVoice_.

Для установки _RHVoice_ необходимо наличие следующих пакетов:

* gcc-c++;
* scons;
* libao;
* libao-devel;
* pulseaudio-libs-devel;
* libglibmm24-devel;
* portaudio-devel.

После этого синтезатор может быть установлен и собран обычным способом. 
Напоминаем, что его исходные тексты хранятся [здесь](https://github.com/olga-yakovleva/rhvoice).

После установки RHVoice необходимо установить Java.
Для этого устанавливаем: 

* java-1.8.0-openjdk;
* java-1.8.0-openjdk-devel.

После всех манипуляций все необходимые каталоги и файлы появляются таким образом,
что _Makefile_, входящий в JNI-часть LUWRAIN, править не нужно.

## Сборка LUWRAIN

Сборку LUWRAIN выполняем обычным способом:

```
cd \~/luwrain  
./setup.sh
```

