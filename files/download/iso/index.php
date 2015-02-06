<?php include "../../functions.php"; luwrain_begin_page('/download/iso/index.php', luwrain_current_lang() == 'ru'?'Загрузочные образы':'Bootable images');?>
<?php if (luwrain_current_lang() == 'en') {?>
                <h1>Luwrain bootable images</h1>
                <p>
                  This section contains direct links to&#160;the&#160;bootable ISO-images which can be useful
                  if you&#x27;d like to try Luwrain environment on&#160;your own computer. Please keep mind
                  on the&#160;fact that Luwrain is&#160;currently at&#160;early phase of&#160;its development
                  and any published materials are purposed for&#160;demonstration only. Meantime, we very
                  appreciate <a href="<?echo luwrain_link('/community/');?>">your feedback</a> on&#160;all things you have tried.
                </p>
                <p>Luwrain version: <b>0.3.0</b> (published on&#160;October 7, 2014)</p>
                <p>
                  <b>NOTE!</b> As&#160;a&#160;demonstration release these images are licensed only for non-commercial
                  purposes.
                </p>
                <p>
                  Currently Luwrain is presented in&#160;two languages (English and Russian) and for&#160;two
                  CPU architectures (i586 and x86_64). Please, choose one of the&#160;links below which better
                  suits your requirements:
                </p>
                <h2>English language</h2>
                <ul>
                  <li><a href="http://download.luwrain.org/iso/luwrain-0.3.0-i586-en.iso">(i586.iso)</a></li>
                  <li><a href="http://download.luwrain.org/iso/luwrain-0.3.0-x86_64-en.iso">(x86_64.iso)</a></li>
                </ul>
                <h2>Russian language</h2>
                <ul>
                  <li><a href="http://download.luwrain.org/iso/luwrain-0.3.0-i586-ru.iso">(i586.iso)</a></li>
                  <li><a href="http://download.luwrain.org/iso/luwrain-0.3.0-x86_64-ru.iso">(x86_64.iso)</a></li>
                </ul>

<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
                <h1>Загрузочные образы Luwrain</h1>
                <p>
                  На&#160;этой странице приведены прямые ссылки на&#160;загрузочные ISO-образы, при&#160;помощи
                  которых Вы можете запустить Luwrain на&#160;Вашем компьютере. Необходимо помнить, что в&#160;настоящий
                  момент Luwrain проходит раннюю фазу своего развития, поэтому любые опубликованные материалы
                  служат прежде всего целям отладки и демонстрации. Мы были&#160;бы рады услышать <a href="<?echo luwrain_link('/community/');?>">Ваше
                  мнение</a> о&#160;любом успешном и неуспешном опыте запуска Luwrain и работы в&#160;нём.
                </p>
                <p>Версия Luwrain: <b>0.3.0</b> (представлена 7 октября 2014&#160;г.)</p>
                <p>
                  <b>ВНИМАНИЕ!</b> Представленные образы разрешается использовать строго только в&#160;некоммерческих
                  целях, поскольку это демонстрационный релиз.
                </p>
                <p>
                  Luwrain представлен для&#160;двух языков (русского и английского) и для&#160;двух программных
                  архитектур (i586 и x86_64). Выберите наиболее подходящий для&#160;Вас вариант из&#160;списка
                  ниже:
                </p>
                <h2>Русская версия</h2>
                <ul>
                  <li><a href="http://download.luwrain.org/iso/luwrain-0.3.0-i586-ru.iso">(i586.iso)</a></li>
                  <li><a href="http://download.luwrain.org/iso/luwrain-0.3.0-x86_64-ru.iso">(x86_64.iso)</a></li>
                </ul>
                <h2>Английская версия</h2>
                <ul>
                  <li><a href="http://download.luwrain.org/iso/luwrain-0.3.0-i586-en.iso">(i586.iso)</a></li>
                  <li><a href="http://download.luwrain.org/iso/luwrain-0.3.0-x86_64-en.iso">(x86_64.iso)</a></li>
                </ul>

<?php }?>
<?php luwrain_end_page('/download/iso/index.php');?>
