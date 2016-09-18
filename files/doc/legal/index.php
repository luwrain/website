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
(meaning, nothing what is covered by <a href="/api/">Javadoc API documentation</a> is changed)</li>
</ol>

<p>Otherwise, you may not use LUWRAIN name any&#160;more and have&#160;to consider some another designation.
The&#160;"LUWRAIN" trademark is&#160;applied for&#160;registration on&#160;the&#160;territory of&#160;Russian Federation.</p>

<p>Thank&#160;you!</p>
<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
<h1>Правовой статус</h1>

<p>Все исходные тексты LUWRAIN, созданные членами нашей команды,  распространяются на&#160;основе GNU&#160;Public License версии&#160;3.
Любое действие с&#160;ними, не&#160;нарушающее требований этой лицензии и не&#160;нарушающее ограничений, наложенных на&#160;имя проекта, разрешено и может быть выполнено без&#160;предварительного согласия разработчиков.
Дистрибутив LUWRAIN в&#160;виде загрузочного ISO-образа содержит множество компонентов от&#160;большого количества сторонних проектов, 
каждый из&#160;которых может распространяться на&#160;основе собственной лицензии,
но обязательно с&#160;предоставлением свободного права на&#160;коммерческое и некоммерческое использование.
Программное обеспечение, не&#160;предоставляющее такого права, в&#160;составе дистрибутива LUWRAIN распространяться не&#160;может,
но мы можем опубликовать такие продукты отдельно на&#160;нашем сайте. 
Возможны исключения, в&#160;рамках которых отладочные образы LUWRAIN будут содержать приложения, разрешающие только некоммерческое использование.</p>

<p>Мы ограничиваем право использования названия "LUWRAIN".
Это&#160;необходимо для предотвращения введения в&#160;заблуждение пользователей 
в&#160;случае создания сторонних сборок LUWRAIN.
Если Вы внесли некоторые изменения в&#160;исходный код базового пакета LUWRAIN,
Вы можете сохранить название "LUWRAIN" при&#160;соблюдении следующих требований:</p>

<ol>
<li>Необходимо сделать пометку в&#160;названии, позволяющую определить, что это ваша стороняя версия, которая не&#160;является официальным релизом.</li>
<li>Не&#160;менее 90% файлов должны остаться нетронутыми
(в&#160;нашем основном Git-репозитории должен существовать коммит, в&#160;котором не&#160;менее 90% файлов совпадают с&#160;Вашей версией).</li>
<li>Ваши изменения не&#160;должны влиять на&#160;LUWRAIN&#160;API,
т.&#160;е. интерфейс, фиксируемой нашей&#160;<a href="/api/">документацией Javadoc для&#160;LUWRAIN&#160;API</a>, не&#160;должен измениться.</li>
</ol>

<p>В&#160;противном случае мы просим не&#160;называть разработку "LUWRAIN" и выбрать другое имя.
Торговая марка "LUWRAIN" подана на&#160;регистрацию на&#160;территории Российской Федерации.</p>
<?php }?>
<?php luwrain_end_page('/doc/legal/index.php');?>
