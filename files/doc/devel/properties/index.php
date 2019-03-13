<?php include "../../../functions.php"; luwrain_begin_page('/doc/devel/properties/index.php', luwrain_current_lang() == 'ru'?'Список системных свойств':'System properties');?>
<?php if (luwrain_current_lang() == 'en') {?>
<h1>System properties</h1>
<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
<h1>Список системных свойств</h1>

<p>luwrain.standalone.enabled
luwrain.registry.version
luwrain.class.interaction
luwrain.clas.os</p>
<?php }?>
<?php luwrain_end_page('/doc/devel/properties/index.php');?>
