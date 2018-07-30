<?php include "../../../../functions.php"; luwrain_begin_page('/doc/user/manual/calc/index.php', luwrain_current_lang() == 'ru'?'Калькулятор':'Calculator');?>
<?php if (luwrain_current_lang() == 'en') {?>
<h1>Using a&#160;calculator</h1>
<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
<h1>Вычисления на&#160;калькуляторе</h1>

<ul>
<li><strong>abs(x)</strong></li>
<li><strong>acos(x)</strong></li>
<li><strong>asin(x)</strong></li>
<li><strong>atan(x)</strong></li>
<li><strong>cos(x)</strong></li>
<li><strong>cosh(x)</strong></li>
<li><strong>exp(x)</strong></li>
<li><strong>floor(x)</strong></li>
<li><strong>log(x)</strong></li>
<li><strong>log10(x)</strong></li>
<li><strong>max(x, y)</strong></li>
<li><strong>min(x, y)</strong></li>
<li><strong>pow(x, y)</strong></li>
<li><strong>random()</strong></li>
<li><strong>round(x)</strong></li>
<li><strong>sin(x)</strong></li>
<li><strong>sinh((x)</strong></li>
<li><strong>sqrt(x)</strong></li>
<li><strong>tan(x)</strong></li>
<li><strong>toDegrees(x)</strong></li>
<li><strong>toRadians(x)</strong></li>
</ul>
<?php }?>
<?php luwrain_end_page('/doc/user/manual/calc/index.php');?>
