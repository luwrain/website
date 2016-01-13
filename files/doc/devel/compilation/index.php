<?php include "../../../functions.php"; luwrain_begin_page('/doc/devel/compilation/index.php', luwrain_current_lang() == 'ru'?'Сборка  нашего исходного кода':'Compilation of our source code');?>
<?php if (luwrain_current_lang() == 'en') {?>
<h1>Compilation of&#160;our source code</h1>

<p>In&#160;order to&#160;get LUWRAIN compiled and ready to&#160;launch,
you should have on&#160;your  machine the&#160;following software:</p>

<ul>
<li>Java&#160;SE 1.7 or higher</li>
<li>g++</li>
<li>ant </li>
<li>make</li>
<li>git</li>
<li>wget</li>
<li>unzip </li>
</ul>
<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
<h1>Сборка нашего исходного кода</h1>
<?php }?>
<?php luwrain_end_page('/doc/devel/compilation/index.php');?>
