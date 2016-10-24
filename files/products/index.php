<?php include "../functions.php"; luwrain_begin_page('/products/index.php', luwrain_current_lang() == 'ru'?'Продукты':'Products');?>
<?php if (luwrain_current_lang() == 'en') {?>
<h1>Our products</h1>

<p>The&#160;entire set of&#160;our products and services is&#160;concentrated around our&#160;user environment called LUWRAIN as&#160;the&#160;project itself.
With LUWRAIN environment, the&#160;blind users are able to&#160;do usual  everyday tasks in&#160;the&#160;most comfortable and easy way.
In&#160;addition it&#160;offers some&#160;specialized applications purposed for&#160;education of&#160;the&#160;blind and other important things.
The&#160;main distributions of&#160;LUWRAIN are&#160;free for&#160;use for&#160;everybody, since they are licensed under the&#160;terms of&#160;GPL&#160;v.3.
You can download it&#160;from our website in&#160;one&#160;of&#160;the&#160;several forms:</p>

<ul>
<li><a href="<?php echo luwrain_link('/download/iso/');?>">As a&#160;bootable ISO image suitable for launch in&#160;live&#160;CD mode and for installation on&#160;hard drive (without sighted help, except of choosing bootable device)</a></li>
<li>As&#160;~an&#160;application <a href="<?php echo luwrain_link('/download/windows/');?>">for&#160;Microsoft Windows</a> or <a href="дlocal:/download/linux/">for&#160;GNU/Linux</a>.</li>
</ul>

<h2>For&#160;education</h2>

<p>Our&#160;team provides several tools helpful for&#160;organizations which carry&#160;out education of&#160;blind people.
These tools are:</p>

<ul>
<li>The Daisy books reader capable of quick hypertext text navigation</li>
<li>A&#160;set of&#160;applications for&#160;exams completely accessible to&#160;the&#160;blind</li>
<li>Producing of&#160;education materials in&#160;Daisy format</li>
</ul>

<p><a href="<?php echo luwrain_link('/products/education/');?>">Click here to&#160;learn more about our products and services for&#160;education</a></p>

<h2>For&#160;business</h2>

<p><a href="<?php echo luwrain_link('/products/business/');?>">Click here to&#160;learn more about our products and services for&#160;education</a></p>
<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
<h1>Наши продукты</h1>

<p>Всё множество продуктов и услуг, которые предоставляются командой LUWRAIN, сосредоточено вокруг нашей одноимённой рабочей среды.
Она представляет из&#160;себя пользовательское окружение, 
охватывающее решение распространённых повседневных  задач,
а&#160;также предлагает  некоторые специализированные приложения, которые требуются людям с&#160;нарушениями зрения. 
Среда LUWRAIN распространяется бесплатно, поскольку является свободным ПО. 
Каждый человек или организация имеют возможность бесплатно загрузить её с&#160;нашего сайта в&#160;одной из&#160;нескольких форм:</p>

<ul>
<li>в виде операционной системы,  приспособленной для работы как в&#160;режиме live&#160;CD, 
так и с&#160;возможностью установки на&#160;жёсткий диск (незрячий человек способен взаимодействовать с программой установки без&#160;посторонней помощи);</li>
<li>в&#160;виде приложения для&#160;Microsoft Windows или для&#160;GNU/Linux. </li>
</ul>

<p><a href="<?php echo luwrain_link('/download/');?>">Щёлкните на&#160;этой ссылке, если вы хотите загрузить дистрибутив LUWRAIN с&#160;нашего сайта</a></p>

<h2>Для&#160;образования</h2>

<p>Наша команда предоставляет ряд продуктов и услуг для&#160;образовательных учреждений, 
занимающихся обучением людей с&#160;нарушениями зрения, включая слепоглухих. 
К&#160;их&#160;числу относятся:</p>

<ol>
<li>Приложения для&#160;чтения образовательных материалов в&#160;формате Daisy 
с&#160;возможностью быстрой и удобной гипертекстовой навигации.</li>
<li>Комплект приложений для&#160;проведения контрольных работ и самопроверок, 
полностью доступных для&#160;пользователей с&#160;нарушениями зрения (как&#160;учеников, так и преподавателей).</li>
<li>Создание синхронизированных обучающих материалов в&#160;формате Daisy.</li>
</ol>

<p><a href="<?php echo luwrain_link('/products/education/');?>">Щёлкните на&#160;этой ссылке, если вы хотите прочитать подробнее про&#160;наши продукты и услуги для&#160;образования</a></p>

<h2>Для&#160;коммерческих компаний</h2>

<p><a href="<?php echo luwrain_link('/products/business/');?>">Щёлкните на&#160;этой ссылке, если вы хотите прочитать подробнее про&#160;наши продукты и услуги для&#160;коммерческих компаний</a></p>
<?php }?>
<?php luwrain_end_page('/products/index.php');?>
