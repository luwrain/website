<?php include "../../functions.php"; luwrain_begin_page('/doc/legal/index.php', luwrain_current_lang() == 'ru'?'Правовой статус':'Legal notes');?>
<?php if (luwrain_current_lang() == 'en') {?>
<h1>Legal notes</h1>

<p>The&#160;code published by&#160;members of&#160;the&#160;LUWRAIN Team
is&#160;distributed under the&#160;terms of&#160;<a href="https://en.wikipedia.org/wiki/GNU_General_Public_License">GNU&#160;General Public License ver.&#160;3</a>.
Any&#160;actions not violating the&#160;requirements of&#160;this license and not&#160;violating restrictions imposed on&#160;the&#160;name of&#160;the&#160;project are&#160;freely permitted 
and may&#160;be&#160;carried&#160;out without any&#160;prior permission.
LUWRAIN distribution (especially in&#160;a&#160;form of&#160;bootable ISO-image)
contains a&#160;bundle of&#160;various libraries and applications provided by&#160;various software projects.
For&#160;any detailed information about their license agreements please refer to&#160;original packages,
but Usually all of&#160;them permit   free commercial and non-commercial usage.
Any software, which prohibits free commercial and non-commercial usage, may not be shipped with LUWRAIN distribution,
but we can consider publishing it on&#160;our website.
Debug releases may have some exceptions providing components only for&#160;non-commercial purposes. </p>

<p>we would like to&#160;impose some restrictions on&#160;a&#160;name of&#160;our project.
That is&#160;needed to&#160;prevent users confusion by&#160;builds from third-party developers.
If you have  proposed some changes to&#160;LUWRAIN core,
you still may title your project as&#160;"LUWRAIN" in&#160;the&#160;case you keep  the&#160;following conditions:</p>

<ol>
<li>You have&#160;to add some suffix to&#160;your&#160;release, making easy to&#160;understand that it isn't an&#160;official release</li>
<li>More than 90% of&#160;source files remain untouched 
(meaning, there is a&#160;commit in&#160;<a href="https://github.com/luwrain/luwrain.git">the&#160;main Git repository</a> with more than 90% of same files as in&#160;your custom version) </li>
<li>LUWRAIN API remains untouched 
(meaning, nothing what is covered by <a href="/javadoc/">Javadoc API documentation</a> is changed)</li>
</ol>

<p>Otherwise, you may not use LUWRAIN name any&#160;more and have&#160;to consider some another designation.
The&#160;"LUWRAIN" trademark is&#160;applied for&#160;registration on&#160;the&#160;territory of&#160;Russian Federation.</p>

<p>Thank&#160;you!</p>
<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
<h1>Правовой статус</h1>

<p>Проект LUWRAIN защищает идею гарантированного и бесплатного права людей с&#160;нарушениями зрения на&#160;получение инструментов для&#160;работы на&#160;ПК.
Все&#160;исходные тексты, созданные членами нашей команды и опубликованные на&#160;нашем сайте,
распространяются на&#160;основе требований <a href="https://ru.wikipedia.org/wiki/GNU_General_Public_License">GNU&#160;Public License версии&#160;3</a>.
Мы также просим относиться с&#160;пониманием и соблюдать следующие  наши требования:</p>

<ol>
<li><strong>Товарный знак.</strong>
Товарный знак "LUWRAIN" зарегистрирован на&#160;территории Российской Федерации.
Мы просим не&#160;распространять коммерческие продукты и не&#160;оказывать на&#160;возмездной основе услуги от&#160;имени проекта LUWRAIN и с&#160;наличием слова "LUWRAIN" в&#160;их&#160;названии.</li>
<li><strong>Закрытые компоненты.</strong>
В&#160;составе дистрибутивов LUWRAIN есть небольшое количество нашего кода,
для&#160;которого мы не&#160;публикуем исходные тексты.
Это&#160;преимущественно компоненты, созданные в&#160;рамках сотрудничества с&#160;другими организациями.
Их очень немного, и их&#160;наличие не&#160;накладывает никаких дополнительных ограничений на&#160;возможность коммерческого и некоммерческого использования LUWRAIN.</li>
<li><strong>Совместимость с&#160;законодательством России.</strong>
Как известно, GPL&#160;v.3 не&#160;является полностью легитимной лицензией на&#160;территории России,
её статус  не&#160;урегулирован, и мы не&#160;знаем,
когда вопрос о&#160;её легитимности будет полностью решён.
Таким образом, просьба о&#160;соблюдение наших требований является  больше идейной,
нежели во&#160;всех смыслах правовой.</li>
<li><strong>Сторонние библиотеки.</strong>
В&#160;состав дистрибутивов LUWRAIN включен ряд&#160;сторонних библиотек,
каждая из&#160;которых может иметь свою собственную лицензию.
Мы не&#160;включаем компоненты, для&#160;которых не&#160;разрешено коммерческое и некоммерческое использование с&#160;публикацией полных исходных текстов.</li>
<li><strong>Виртуальная машина Java.</strong>
Часть дистрибутивов содержит в&#160;своём составе Java&#160;SE Runtime Environment.
Мы включаем этот компонент, ссылаясь на&#160;следующее разрешение компании Oracle:</li>
</ol>

<p><em>To run your application, a user needs the Java&#160;SE Runtime Environment, which is freely available from Oracle. Or, you can redistribute
the Java&#160;SE Runtime Environment for free with your application, according to the terms of the Oracle Binary Code License Agreement for
the Java&#160;SE Platform Products.</em></p>

<p><a href="http://www.oracle.com/technetwork/java/javase/jre-8-readme-2095710.html">http://www.oracle.com/technetwork/java/javase/jre-8-readme-2095710.html</a></p>
<?php }?>
<?php luwrain_end_page('/doc/legal/index.php');?>
