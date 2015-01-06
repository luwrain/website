<?php include "../../functions.php"; luwrain_begin_page('/doc/roadmap/index.php', luwrain_current_lang() == 'ru'?'Дорожная карта':'Roadmap');?>
<?php if (luwrain_current_lang() == 'en') {?>
                <h1>The&#160;project roadmap</h1>
                <p>
                  This&#160;page contains the&#160;list of&#160;tasks considered as&#160;a&#160;roadmap for&#160;Luwrain
                  as it&#160;was accepted on&#160;November 18th, 2014. They are the&#160;most important things
                  for&#160;a&#160;robust Luwrain developing.
                </p>
                <ol>
                  <li>
                    <b>Stabilizing and cleaning the&#160;code of&#160;the&#160;core.</b> The&#160;core still
                    has a&#160;lot of&#160;consequents of&#160;early time of&#160;development. Existence of&#160;the&#160;depricated
                    classes and methods makes the&#160;work difficult. Besides that, some classes should be&#160;renamed
                    (e.&#160;g., &#x22;<i>Action</i>&#x22; to &#x22;<i>Command</i>&#x22; and &#x22;<i>AppWrapper</i>&#x22;
                    to &#x22;<i>Shortcut</i>&#x22;).
                  </li>
                  <li>
                    <b>Rethinking the&#160;registry implementation</b> The&#160;registry at&#160;its current
                    state, evidently, is&#160;very inconvenient and becomes a&#160;serious barrier on&#160;the&#160;deployment
                    attempts. It is necessary to work&#160;out something more felicitous.
                  </li>
                  <li>
                    <b>Specification of&#160;an&#160;application template.</b> The&#160;structure of&#160;the&#160;typical
                    application and its life cycle should be obvious. The&#160;current core state has everything
                    needed to&#160;get that but it&#160;is&#160;necessary to&#160;write additional materials
                    as&#160;an&#160;introduction to&#160;the&#160;application creation.
                  </li>
                  <li>
                    <b>Platform-dependent components for&#160;the&#160;proper portability support.</b> It&#160;is&#160;necessary
                    to&#160;prepare reliable platform-dependent things which allow running on&#160;MacOS-X
                    or Microsoft Windows, including installation tools. It&#160;is needed to&#160;simplify
                    a&#160;deployment on&#160;user machines.
                  </li>
                  <li>
                    <b>Internationalization infrastructure.</b> it&#160;is necessary to&#160;get unified and
                    flexible approach to&#160;foreign languages and national&#160;standards support. That could
                    help to&#160;introduce Luwrain to&#160;the&#160;foreign communities.
                  </li>
                  <li>
                    <b>The documentation.</b> There&#160;is a&#160;lack of&#160;good documentation but we should
                    have it a&#160;lot!
                  </li>
                </ol>

<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
                <h1>Дорожная карта</h1>
                <p>
                  Ниже на&#160;этой странице приведён перечень задач, принятых в&#160;качестве дорожной карты
                  Luwrain на&#160;18&#160;ноября 2014&#160;г. Эти&#160;работы рассматриваются как&#160;наиболее
                  важные для&#160;правильного развития проекта.
                </p>
                <ol>
                  <li>
                    <b>Стабилизация и очистка кода ядра.</b> Ядро содержит много следов ранней стадии развития,
                    и наличие устаревших классов затрудняет разработку новых приложений. Помимо этого, требуется
                    переименование некоторых сущностей (например, &#x22;<i>Action</i>&#x22; в &#x22;<i>Command</i>&#x22;
                    и &#x22;<i>AppWrapper</i>&#x22; в &#x22;<i>Shortcut</i>&#x22;).
                  </li>
                  <li>
                    <b>Пересмотр реализации реестра.</b> Реестр в&#160;его нынешнем виде, очевидно, очень неудобен
                    и становится серьёзным препятствием для&#160;развёртывания системы на&#160;компьютерах
                    пользователей. Следует придумать более удачный подход.
                  </li>
                  <li>
                    <b>Спецификация шаблона приложений.</b> Структура типичного приложения и его&#160;жизненный
                    цикл должны быть предельно прозрачными. Современное состояние системы позволяет чётко понять,
                    какими они должны быть, но требуется наличие дополнительных материалов, которые позволили&#160;бы
                    с&#160;этим познакомиться всем&#160;желающим.
                  </li>
                  <li>
                    <b>Системнозависимые части для&#160;полной поддержки кроссплатформенности.</b> Необходима
                    подготовка функционально полной поддержки MacOS-X и Microsoft Windows, включающей в&#160;себя
                    утилиты-инсталляторы, упрощающие развёртывание системы на&#160;компьютерах пользователей.
                  </li>
                  <li>
                    <b>Подготовка инфраструктуры интернационализации.</b> Требуется выработать единые и удобные
                    механизмы для&#160;реализации поддержки национальных языков и стандартов. Это позволило&#160;бы
                    познакомить с&#160;проектом зарубежные сообщества.
                  </li>
                  <li><b>Документация.</b> Её очень недостаёт, а должно быть много!</li>
                </ol>

<?php }?>
<?php luwrain_end_page('/doc/roadmap/index.php');?>
