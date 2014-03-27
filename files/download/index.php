<?php include "../functions.php"; luwrain_begin_page('/download/index.php', luwrain_current_lang() == 'ru'?'Загрузить':'Download');?>

<?php if (luwrain_current_lang() == 'en') {?>

                  <h1>Luwrain downloads</h1>
                  <p>
                    There&#160;are three options of&#160;download you may want to&#160;continue with. If you
                    are new to&#160;Luwrain or just need a&#160;distribution for work very likely you should
                    take the&#160;first one. This&#160;option provides binary distribution prepared in&#160;form
                    of&#160;bootable image.
                  </p>
                  <p>
                    A&#160;couple of&#160;other alternatives are purposed for&#160;developing tasks. Which
                    one of&#160;them is suitable for&#160;you is&#160;dependent on&#160;sort of&#160;work you
                    are interested&#160;in. Source materials usually serve for&#160;exploring of&#160;software
                    internal implementation or for&#160;developing of&#160;Luwrain itself. Binary packages includes
                    Luwrain main jar-file and all auxiliary libraries required for&#160;Luwrain applications
                    developing or for&#160;Luwrain launch on&#160;other distributions of&#160;GNU/Linux.
                  </p>
                  <p>Choose the&#160;exact option you need:</p>
                  <ul>
                    <li><a href="<?echo luwrain_link('distr/');?>">The&#160;Luwrain distributions as&#160;bootable ISO</a></li>
                    <li><a href="<?echo luwrain_link('sources/');?>">The&#160;Luwrain sources</a></li>
                    <li><a href="<?echo luwrain_link('binary/');?>">The&#160;Luwrain binary packages</a></li>
                  </ul>

<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>

                  <h1>Загрузка Luwrain</h1>
                  <p>
                    Существуют три&#160;варианта загрузки Luwrain, которые перечислены ниже. Если Вы только
                    начинаете знакомство с&#160;Luwrain или Вам нужен дистрибутив просто для&#160;работы,
                    то необходимо выбрать первую опцию из&#160;списка. Она позволяет получить Luwrain в&#160;виде
                    загрузочного ISO-образа, подходящего для&#160;большинства пользователей.
                  </p>
                  <p>
                    Два&#160;других варианта предназначены для&#160;различных задач разработки. Пакет с&#160;исходными
                    текстами обычно необходим для&#160;разработки самого окружения Luwrain или для&#160;ознакомления
                    со&#160;внутренней реализации. Бинарная сборка Luwrain используется для&#160;разработки
                    сторонних приложений или для&#160;запуска Luwrain на&#160;других дистрибутивах GNU/Linux.
                  </p>
                  <p>Выберите интересующий Вас вариант:</p>
                  <ul>
                    <li><a href="<?echo luwrain_link('distr/');?>">загрузить Luwrain в&#160;виде загрузочного ISO-образа</a>;</li>
                    <li><a href="<?echo luwrain_link('sources/');?>">загрузить Luwrain в&#160;виде исходных текстов</a>;</li>
                    <li><a href="<?echo luwrain_link('binary/');?>">загрузить Luwrain в&#160;виде бинарных файлов</a>.</li>
                  </ul>

<?php }?>

<?php luwrain_end_page('/download/index.php');?>
