<?php include "../../../../functions.php"; luwrain_begin_page('/doc/user/installation/windows/index.php', luwrain_current_lang() == 'ru'?'Установка на Microsoft Windows':'Installation on Microsoft Windows');?>
<?php if (luwrain_current_lang() == 'en') {?>

<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
<h1>Установка на&#160;Microsoft Windows</h1>

<p>Самый простой способ установить LUWRAIN в&#160;Microsoft Windows &#x2014; воспользоваться подготовленным самораспаковывающимся  архивом,
содержащим все необходимое компоненты, включая виртуальную машину Java и речевой синтезатор.
Его можно загрузить <a href="<?php echo luwrain_link('/download/windows/');?>">с&#160;соответствующей страницы загрузок</a>.
Обратите, пожалуйста, внимание, что дистрибутивы подготавливаются как для&#160;32-битных систем, так и для&#160;64-битных.
32-битный дистрибутив способен работать в&#160;любом окружении, в&#160;то&#160;время как&#160;64-битный только в&#160;64-битном.</p>

<p>Если вы выбрали 32-битный дистрибутив, то на&#160;странице загрузок можно щёлкнуть на ссылке <em>luwrain-windows-32bit-&lt;версия>.exe</em>.
Перед началом работы желательно деактивировать запущенные антивирусные программы.
После непродолжительной  паузы, необходимой для&#160;доставки дистрибутива на&#160;ваш компьютер, 
появится значок с&#160;чашкой кофе на&#160;сером фоне. 
Щёлкните на&#160;него, после чего может появиться предупреждение системы безопасности о&#160;том,
что невозможно проверить издателя.
В&#160;этом случае подтвердите своё намерение запустить программу.</p>

<p>После окончания установки все  окна будут заркрыты автоматически.
LUWRAIN добавляет ярлык для запуска в&#160;главное меню  в&#160;раздел "Все программы".
При&#160;его выборе после непродолжительной паузы должны проиграться звук приветствия и первая речевая фраза, 
указывающая, что вы находитесь на&#160;рабочем столе.</p>

<p>Обратите внимание, что:</p>

<ol>
<li>Завершить работу в&#160;системе можно нажатием <em>Escape</em> на&#160;рабочем столе или  при&#160;помощи комбинации клавиш <em>Alt+Q</em>.</li>
<li>Если при&#160;запуске система не&#160;реагирует на&#160;нажатия клавиш, возможно, окно неактивно. 
В&#160;этом случае нажмите <em>Alt+Tab</em> для&#160;выбора окна или щёлкните на&#160;нём мышкой.</li>
<li>LUWRAIN имеет своё собственное главное меню, которое открывается при&#160;помощи нажатия клавиш <em>Alt+Z</em>.</li>
</ol>

<p>См.&#160;также:</p>

<ul>
<li><a href="<?php echo luwrain_link('/doc/user/manual/');?>">Руководство пользователя</a></li>
</ul>
<?php }?>
<?php luwrain_end_page('/doc/user/installation/windows/index.php');?>
