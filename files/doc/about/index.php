<?php include "../../functions.php"; luwrain_begin_page('/doc/about/index.php', luwrain_current_lang() == 'ru'?'О проекте':'About the project');?>
<?php if (luwrain_current_lang() == 'en') {?>
                <h1>About the project</h1>
                <p>See also</p>
                <ul>
                  <li><a href="<?php echo luwrain_link('difference/');?>">Why is Luwrain different than other accessible solutions?</a></li>
                  <li><a href="<?php echo luwrain_link('faq/');?>">Frequently asked questions</a></li>
                </ul>
                <h2>By the author</h2>
                <p>
                  At&#160;the end of&#160;this little free story what Luwrain is, me would like to write
                  a&#160;few words as&#160;some kind of&#160;personal notes. I had&#160;to use screen readers
                  since 2001 and never from that moment was satisfied with them. However, me strongly convinced
                  that they are a&#160;great achievement and Luwrain will never try to&#160;dispute their
                  value. It&#160;would be&#160;nice if everybody will consider Luwrain just as&#160;an&#160;attempt
                  to&#160;create something new, hopefully, interesting and useful in&#160;areas, which previously
                  didn&#x27;t get enough attention. Besides that, me is very grateful to&#160;all <a target="_blank" href="http://emacspeak.sourceforge.net">emacspeak</a>
                  authors because the&#160;results of&#160;their work gave me a&#160;reliable tool and a&#160;lot
                  of&#160;useful thoughts!
                </p>
                <p>With best wishes, <a target="_blank" href="http://marigostra.com/">Michael Pozhidaev</a>.</p>

<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
                <h1>О&#160;нашем проекте</h1>
                <p>См.&#160;также</p>
                <ul>
                  <li>
                    <a href="<?php echo luwrain_link('difference/');?>">Чем Luwrain отличается от&#160;других вспомогательных средств
                    для&#160;людей с&#160;нарушениями зрения?</a>
                  </li>
                  <li><a href="<?php echo luwrain_link('faq/');?>">Часто задаваемые вопросы</a></li>
                  <li>
                    <a target="_blank" href="http://marigostra.ru/projects/luwrain/">Неформальный манифест
                    от&#160;авторов проекта</a>
                  </li>
                </ul>
                <h2>От&#160;автора</h2>
                <p>
                  В&#160;заключение этого небольшого рассказа о&#160;Luwrain я хотел&#160;бы написать несколько
                  слов от&#160;себя. Мне приходится использовать программы экранного доступа с&#160;2001&#160;г.,
                  но никогда с&#160;этого момента не&#160;был полностью удовлетворён их&#160;работой. Тем&#160;не&#160;менее,
                  искренне уверен, что они являются колоссальным достижением в&#160;развитии доступности,
                  и Luwrain не&#160;пытается оспаривать их&#160;значимость. Был&#160;бы очень рад, если все
                  воспринимали Luwrain как попытку создать нечто нестандартное, способное оказаться эффективнее
                  в&#160;тех сферах, которым раньше уделялось мало внимания. Помимо всего, очень благодарен
                  авторам <a target="_blank" href="http://emacspeak.sourceforge.net">emacspeak</a>, поскольку
                  плоды их&#160;работы не&#160;только дали мне надёжный инструмент, но и стали отправной
                  точкой для&#160;интересного поиска.
                </p>
                <p>С&#160;наилучшими пожеланиями, <a target="_blank" href="http://marigostra.ru">Михаил Пожидаев</a>.</p>

<?php }?>
<?php luwrain_end_page('/doc/about/index.php');?>
