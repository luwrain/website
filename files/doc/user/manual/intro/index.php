<?php include "../../../../functions.php"; luwrain_begin_page('/doc/user/manual/intro/index.php', luwrain_current_lang() == 'ru'?'Ключевые особенности':'Main concepts');?>
<?php if (luwrain_current_lang() == 'en') {?>
<h1>Main concepts</h1>
<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
<h1>Ключевые особенности</h1>

<p>Ключевая особенность LUWRAIN заключается в&#160;том, что он предлагает единое поведение
для&#160;всех задач, с&#160;которыми может столкнуться пользователь.
В&#160;среде ИТ-специалистов нечто похожее иногда называют принципом "соглашение прежде конфигурации".
Так делается для&#160;того, чтобы пользователь мог выработать набор единых привычек,
которые подскажут ему наиболее правильное действия в&#160;той или иной ситуации без&#160;лишнего подглядывания в&#160;документацию.
При&#160;достижении некоторого мастерства это значительно повышает скорость работы.
При&#160;невизуальном взаимодействии передача информации от&#160;ПК к&#160;пользователю обходится намного дороже,
нежели традиционным способом,
поэтому для&#160;компенсации этого мы вынуждены проектировать интерфейс таким образом,
чтобы точнее попадать в&#160;интуитивные ожидания пользователя и экономить время на&#160;передачу информации.</p>

<h2>Текст, поиск и прослушивание</h2>

<p>В&#160;рабочем пространстве LUWRAIN нет&#160;кнопок, меню и&#160;т.&#160;п.,
что может выполнять функцию запуска некоторой команды.
присутствует только основной рабочий объект, с&#160;которым ведётся взаимодействие (текстовый документ, перечисление некоторых элементов и&#160;т.&#160;д.).
Причём каким&#160;бы ни&#160;был этот объект к&#160;нему всегда предъявляется требование поддерживать некоторое текстовое  представление,
которое и присутствует на&#160;экране (эту возможность мы сохраняем для&#160;слабовидящих пользователей).
Такие рабочие объекты мы называем областями.</p>

<p>Каждая область  предоставляет возможность выполнения двух важных действий:</p>

<ul>
<li>последовательного прослушивания своего содержимого (осуществляется нажатием комбинации клавиш Ctrl+L);</li>
<li>поиска некоторой текстовой подстроки (осуществляется нажатием комбинации клавиш Ctrl+F).</li>
</ul>

<p>Эти&#160;операции могут быть выполнены повсеместно.
Вследствие этого в&#160;текстовом редакторе LUWRAIN отсутствует отдельная функция поиска текста,
а в&#160;приложении для чтения книг отсутствует  операция последовательного прослушивания.
При&#160;прослушивании текст произносится иным образом, нежели при интерактивном взаимодействии с&#160;рабочим объектом.
Это делается для&#160;того, чтобы лучше удовлетворять ожиданиям пользователя при&#160;восприятии  больших текстов на&#160;слух без&#160;утомления,
в&#160;то&#160;время как при&#160;интерактивном взаимодействии основной упор делается на&#160;точность и детальность передачи  информации.</p>

<p>Расширения LUWRAIN могут запросить некоторый текущий фрагмент текстового представления области
(но никогда не&#160;могут получить доступ к&#160;содержимому объекта целиком, поскольку это привело&#160;бы к&#160;некоторым проблемам безопасности).
К&#160;таким фрагментам относятся:</p>

<ul>
<li>текущий регион, как он задаётся для&#160;<a href="<?php echo luwrain_link('/doc/user/manual/clipboard/');?>">операций копирования-вставки</a>;</li>
<li>текущая строка;</li>
<li>текущее слово и&#160;т&#160;д.</li>
</ul>

<p>Расширения могут использовать эту&#160;информацию для&#160;выполнения некоторых вспомогательных функций.
К&#160;примеру, расширение для&#160;доступа к&#160;Яндекс.Переводчику способно по&#160;команде пользователя выполнять перевод текста в&#160;произвольном местоположении,
а расширения для&#160;доступа к&#160;Википедии способно быстро находить информацию по&#160;слову, на&#160;котором находится курсор.</p>

<h2>Операции копирования-вставки</h2>

<p>Основной раздел: <a href="<?php echo luwrain_link('/doc/user/manual/clipboard/');?>">Операции копирования-вставки</a></p>

<h2>Навигация по&#160;тексту</h2>

<h2>Прочие операции</h2>
<?php }?>
<?php luwrain_end_page('/doc/user/manual/intro/index.php');?>