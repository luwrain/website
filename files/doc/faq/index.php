<?php include "../../functions.php"; luwrain_begin_page('/doc/faq/index.php', luwrain_current_lang() == 'ru'?'Часто задаваемые вопросы':'Frequently asked questions');?>
<?php if (luwrain_current_lang() == 'en') {?>
                  <h1>Frequently asked questions</h1>
                  <h2>Why do you work on isolated environment although you know that restricts a&#160;user?</h2>
                  <p>
                    We could talk about any restrictions only in&#160;case of using Luwrain instead of&#160;any
                    other operating system but mostly it&#160;is not&#160;the&#160;case. very likely the&#160;best
                    role Luwrain can play is&#160;to&#160;be a&#160;operating system for&#160;various supplementary
                    devices including laptops now or light ARM computers later. Meantime The Pareto rule states
                    only 20% features are needed to cover 80% user needs and this fact is applicable here,
                    so we can believe Luwrain will be very useful for wide range of users even on&#160;supplementary
                    machines. If Luwrain functions are insufficient a&#160;user can easily have main desktop
                    PC with fully functional operating system such as Microsoft Windows and use it for&#160;main
                    work he&#160;needs.
                  </p>
                  <h2>Is it Linux?</h2>
                  <p>
                    Yes, it is Linux. Luwrain uses Linux kernel with wide range of&#160;GNU utilities. However,
                    the word &#x22;Linux&#x22; is not present in the title of our project. That means Luwrain
                    is not&#160;a&#160;one more GNU/Linux distribution inits&#160;&#160;usual sense. Normally
                    in&#160;Luwrain user do&#160;not need to&#160;deal with any Linux specific features or
                    configuration tasks. Our user interface tries to&#160;obscure them every time it&#160;is
                    possible.
                  </p>
                  <h2>Can I run it on&#160;Microsoft WIndows?</h2>
                  <p>
                    Yes in&#160;general but in&#160;practice our code needs some additional features for&#160;launch
                    on&#160;Microsoft Windows and we do&#160;not plan to&#160;do&#160;it ourselves. Luwrain
                    environment is&#160;written on&#160;Java and that allows easy porting to&#160;other operating
                    system which has Java virtual machine including Microsoft Windows. But it also has some
                    platform specific code for interaction with system services and they should be&#160;disabled
                    or modified to&#160;be capable with Microsoft Windows.
                  </p>
                  <h2>May I create my custom version?</h2>
                  <p>
                    Yes, no problems. All necessary materials for that are opened and accessible publicly.
                    Any additional information can be provided through our <a href="<?echo luwrain_link('/community/');?>">community</a>.
                    Also be&#160;aware of&#160;<a href="<?echo luwrain_link('/doc/legal/');?>">legal notes</a> of&#160;Luwrain
                    project and of&#160;any projects derived from Luwrain.
                  </p>
                  <h2>Is it a commercial project?</h2>
                  <p>
                    No, Luwrain is a&#160;non-profitable project. We would like to&#160;create long-term platform
                    resistant to world financial climate as&#160;GNU/Linux itself is. However, some commercial
                    activity remains still possible by&#160;Luwrain authors as&#160;well as&#160; any third-part
                    companies.
                  </p>
<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
                  <h1>Часто задаваемые вопросы</h1>
                  <h2>
                    Почему вы разрабатываете изолированную среду, хотя должны знать, что это ограничивает возможности
                    пользователей?
                  </h2>
                  <p>
                    Ограничения возможны только в&#160;том случае, если речь идёт об&#160;использовании Luwrain
                    взамен всех других операционных систем, хотя в&#160;большинстве случаев это&#160;не&#160;так.
                    Наиболее вероятно, что в&#160;основном Luwrain будет полезна пользователям как&#160;система
                    на&#160;различных дополнительных устройствах, таких&#160;как&#160;мобильные компьютеры
                    в&#160;наши дни или компактные ARM-системы в&#160;будущем. Помимо этого, правило Парето
                    утверждает, что 80% задач пользователей может быть решено при&#160;помощи 20% возможностей
                    системы, так что даже на&#160;дополнительных вспомогательных устройствах Luwrain может
                    быть очень полезна. Если возможностей Luwrain окажется недостаточно, каждый пользователь
                    может по-прежнему работать на&#160;своём основном настольном компьютере в&#160;другой операционной
                    системе, например, в&#160;Microsoft Windows.
                  </p>
                  <h2>Luwrain &#x2014; это Linux?</h2>
                  <p>
                    Да, это Linux. Luwrain использует ядро Linux и большое количество утилит GNU. Тем&#160;не&#160;менее,
                    слово &#x22;Linux отсутствует в&#160;названии нашего проекта. Это объясняется тем, что
                    Luwrain не&#160;является дистрибутивом Linux в&#160;привычном смысле этого слова. При&#160;стандартной
                    работе пользователю нет&#160;необходимости иметь дело с&#160;особенностями ядра Linux.
                    Предложенное окружение пользователя максимально скрывает все&#160;технические детали внутренней
                    реализации.
                  </p>
                  <h2>Могу&#160;ли я запустить Luwrain на&#160;Microsoft Windows?</h2>
                  <p>
                    Да в&#160;теории, но на&#160;практике код Luwrain требует некоторой доработки для&#160;запуска
                    поверх Microsoft Windows, и мы не&#160;планируем делать эту&#160;работу самостоятельно.
                    Основная часть Luwrain реализована на&#160;Java, что обеспечивает лёгкую переносимость
                    на&#160;любую другую операционную систему, для&#160;которой доступна виртуальная машина
                    Java, включая Microsoft Windows. При&#160;этом в&#160;реализации задействованы некоторые
                    системнозависимые возможности, которые должны быть либо отключены, либо переработаны для&#160;запуска
                    в&#160;Microsoft Windows.
                  </p>
                  <h2>Могу&#160;ли я сделать мою собственную модификацию Luwrain?</h2>
                  <p>
                    Да, пожалуйста. Все&#160;необходимые материалы для&#160;этого открыты и находятся в&#160;публичном
                    доступе. По&#160;всем дополнительным вопросам Вы можете обращаться в&#160;наше <a href="<?echo luwrain_link('/community/');?>">сообщество</a>.
                    Также необходимо ознакомиться с&#160;<a href="<?echo luwrain_link('/doc/legal/');?>">правовым статусом</a>
                    Luwrain и продуктов на&#160;его основе.
                  </p>
                  <h2>Luwrain &#x2014; это коммерческий проект?</h2>
                  <p>
                    Нет, разработка Luwrain ведётся без&#160;цели получения прибыли. Мы хотели&#160;бы создать
                    долгосрочную платформу, развитие которой велось&#160;бы без&#160;влияния мирового финансового
                    климата. Тем&#160;не&#160;менее, некоторая коммерческая деятельность остаётся возможной
                    как&#160;со&#160;стороны авторов проекта, так и со&#160;стороны других компаний.
                  </p>
<?php }?>
<?php luwrain_end_page('/doc/faq/index.php');?>
