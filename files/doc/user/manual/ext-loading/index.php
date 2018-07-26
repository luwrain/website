<?php include "../../../../functions.php"; luwrain_begin_page('/doc/user/manual/ext-loading/index.php', luwrain_current_lang() == 'ru'?'Порядок загрузки расширений':'Loading of extensions');?>
<?php if (luwrain_current_lang() == 'en') {?>
<h1>Loading of extensions</h1>
<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
<h1>Порядок загрузки расширений</h1>

<p>LUWRAIN поддерживает механизм расширений,
которые позволяют дополнять функциональность системы.
Расширения LUWRAIN бывают трёх типов:</p>

<ol>
<li>Расширения в&#160;виде откомпилированных jar-файлов.</li>
<li>Расширения  на&#160;языке JavaScript.</li>
<li>Текстовые расширения.</li>
</ol>

<p>Расширения (<strong>extensions</strong>) не&#160;следует путать с&#160;пакетами  (<strong>packs</strong>).
Эти&#160;термины тесно связаны, но выполняют различные функции.
Расширение&#160;&#x2014; это специальное понятие ядра LUWRAIN, которое служит задаче загрузке новых структур
(приложений, команд и&#160;пр.).
Пакеты, в&#160;свою очередь,  не&#160;воспринимаются явным образом ядром LUWRAIN,
они являются набором файлов с&#160;дополнительной информацией
и предназначены для&#160;доставки расширений на&#160;компьютер пользователя.
Другими словами, пакеты&#160;&#x2014; это специально оформленные дистрибутивы,
которые  помогают в&#160;понятной форме загружать расширения и удалять их.
Один пакет может содержать несколько расширений, причём разных типов.</p>

<h2>Требования к&#160;расширениям</h2>

<p>Расширения в&#160;виде jar-файлов предоставляют максимальные возможности для&#160;добавления нового функционала в&#160;LUWRAIN.
В&#160;отличие от&#160;расширений на&#160;языке JavaScript и расширений в&#160;виде текстовых файлов,
такие расширения не&#160;могут быть выгружены,
т.&#160;е. не&#160;являются  в&#160;полной мере динамическими.
В&#160;соответствующем jar-файле должен присутствовать класс, который удовлетворяет интерфейсу <a href="http://luwrain.org/api/org/luwrain/core/extensions/Extension.html"><strong>org.luwrain.core.extensions.Extension</strong></a>.
Jar-файл должен содержать манифест, в котором  в&#160;секции <strong>org/luwrain</strong> есть атрибут  <strong>Extensions</strong>, содержащий  имя этого класса-расширения.</p>

<p>Правила написания расширений на&#160;языке JavaScript и в&#160;виде текстовых файлов  приведены в&#160;соответствующих разделах документации:</p>

<ul>
<li><a href="<?php echo luwrain_link('/doc/user/manual/ext-js/');?>">Создание расширения на языке JavaScript</a></li>
<li><a href="<?php echo luwrain_link('/doc/user/manual/ext-text/');?>">Создание текстового расширения</a></li>
</ul>
<?php }?>
<?php luwrain_end_page('/doc/user/manual/ext-loading/index.php');?>
