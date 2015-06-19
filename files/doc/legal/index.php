<?php include "../../functions.php"; luwrain_begin_page('/doc/legal/index.php', luwrain_current_lang() == 'ru'?'Правовой статус':'Legal notes');?>
<?php if (luwrain_current_lang() == 'en') {?>
                <h1>Legal notes</h1>
                <p>
                  The&#160;code of&#160;Luwrain core, as&#160;well as&#160;the&#160;most of&#160;its&#160;libraries
                  and applications, is&#160;distributed under the&#160;terms of&#160;<a href="https://en.wikipedia.org/wiki/GNU_General_Public_License">GNU&#160;General
                  Public License ver.&#160;3</a>. Any&#160;actions not violating the&#160;requirements of&#160;this
                  license are&#160;freely permitted and may&#160;be&#160;carried&#160;out without any&#160;prior
                  permission. Luwrain distribution (especially in&#160;a&#160;form of&#160;bootable ISO-image)
                  contains a&#160;bundle of&#160;various libraries and applications provided by&#160;various
                  software projects. For&#160;any detailed information about their license agreements please
                  refer to&#160;original packages, but Usually all of&#160;them permit free commercial and
                  non-commercial usage. Any software, which prohibits free commercial and non-commercial
                  usage, may not be shipped with Luwrain distribution. Debug releases may have some exceptions
                  providing components only for&#160;non-commercial purposes.
                </p>
                <p>
                  we would like to&#160;impose some restrictions on&#160;a&#160;name of&#160;our project.
                  That is&#160;needed to&#160;prevent users confusion by&#160;builds from third-part developers.
                  If you have proposed some changes in&#160;Luwrain core and more than 90% of&#160;source
                  files remain untouched (meaning, there is any commit in&#160;<a href="https://github.com/luwrain/luwrain.git">the&#160;main
                  Git repository</a> with more than 90% of same files as in&#160;your custom version) we
                  encourage you to add some suffix to your release, designating that it&#160;is not an&#160;original
                  Luwrain version, but you still may title your project as&#160;&#x22;Luwrain&#x22;. Otherwise,
                  you may not use Luwrain name any&#160;more and must choose any other designation.
                </p>
                <p>Thank&#160;you!</p>

<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
                <h1>Правовой статус</h1>
                <p>
                  Все исходные тексты базового пакета Luwrain распространяются на&#160;основе GNU&#160;Public
                  License версии&#160;3. Любое действие с&#160;ними, не&#160;нарушающее требований этой лицензии,
                  разрешено и может быть выполнено без&#160;предварительного согласия разработчиков. Дистрибутив
                  Luwrain в&#160;виде загрузочного ISO-образа содержит множество приложений от&#160;большого
                  количества проектов, каждый из&#160;которых может распространяться на&#160;основе собственной
                  лицензии, но обязательно с&#160;предоставлением свободного права на&#160;коммерческое и
                  некоммерческое использование. Программное обеспечение, не&#160;предоставляющее такого права,
                  в&#160;составе дистрибутива Luwrain распространяться не&#160;может. Возможны исключения,
                  в&#160;рамках которых отладочные образы Luwrain будут содержать приложения, разрешающие
                  только некоммерческое использование.
                </p>
                <p>
                  Мы&#160;хотели&#160;бы ограничить право использования названия проекта Luwrain. Это&#160;необходимо
                  для предотвращения введения в&#160;заблуждение пользователей в&#160;случае создания сторонних
                  сборок Luwrain. Если Вы внесли некоторые изменения в&#160;исходный код базового пакета
                  Luwrain, но не&#160;менее 90% файлов остались нетронутыми (в&#160;нашем <a href="<?php echo luwrain_link('/download/sources/');?>">основном
                  git-репозитории</a> существует коммит, в&#160;котором не&#160;менее 90% файлов совпадают
                  с&#160;Вашей версией), Вы можете сохранить название Luwrain, но с обязательной пометкой,
                  что это Ваша сторонняя версия. В&#160;противном случае мы просим не&#160;называть разработку
                  Luwrain и выбрать другое имя.
                </p>

<?php }?>
<?php luwrain_end_page('/doc/legal/index.php');?>
