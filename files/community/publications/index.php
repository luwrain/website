<?php include "../../functions.php"; luwrain_begin_page('/community/publications/index.php', luwrain_current_lang() == 'ru'?'Публикации':'Publications');?>
<?php if (luwrain_current_lang() == 'en') {?>
                <h1>Luwrain publications</h1>
                <p>
                  This page contains the&#160;list of&#160;publications dedicated to&#160;Luwrain. We put
                  here only materials which were published on&#160;English language or which has the&#160;English
                  translation.
                </p>
                <ol>
                  <li>
                    <a href="<?echo luwrain_link('LuwrainTextBasedOsForBlindPersons');?>">Luwrain: text-based OS for blind persons</a>
                    (September, 2013)
                  </li>
                  <li>
                    <a href="<?echo luwrain_link('MinimalisticUserInterfacesTheCaseForBlindPersons');?>">Minimalistic user interfaces:
                    the&#160;case for&#160;blind persons</a> (September, 2013)
                  </li>
                  <li>
                    <a href="<?echo luwrain_link('TheTextBasedEnvironmentForBlindPersonsConceptionAndOperatingSystemDesign');?>">The&#160;text-based
                    environment for&#160;blind persons: conception and operating system design</a> (February,
                    2013)
                  </li>
                </ol>
<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>

                <h1>Публикации о&#160;Luwrain</h1>
                <p>
                  На&#160;этой странице Вы можете найти список публикаций, посвящённых Luwrain. Мы размещаем
                  здесь только материалы, которые были опубликованы на&#160;английском языке или имеют перевод
                  на&#160;английский язык.
                </p>
                <ol>
                  <li>
                    <a href="<?echo luwrain_link('LuwrainTextBasedOsForBlindPersons');?>">Luwrain: text-based OS for blind persons</a>
                    (сентябрь 2013)
                  </li>
                  <li>
                    <a href="<?echo luwrain_link('MinimalisticUserInterfacesTheCaseForBlindPersons');?>">Minimalistic user interfaces:
                    the&#160;case for&#160;blind persons</a> (сентябрь 2013)
                  </li>
                  <li>
                    <a href="<?echo luwrain_link('TheTextBasedEnvironmentForBlindPersonsConceptionAndOperatingSystemDesign');?>">The&#160;text-based
                    environment for&#160;blind persons: conception and operating system design</a> (февраль
                    2013)
                  </li>
                </ol>
<?php }?>
<?php luwrain_end_page('/community/publications/index.php');?>
