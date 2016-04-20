<?php include "../../../functions.php"; luwrain_begin_page('/doc/devel/compilation/index.php', luwrain_current_lang() == 'ru'?'Сборка  нашего исходного кода':'Compilation of our source code');?>
<?php if (luwrain_current_lang() == 'en') {?>
<h1>Compilation of&#160;our source code</h1>

<p>We used to&#160;build LUWRAIN in&#160;GNU/Linux environment,
although in&#160;general it's possible to&#160;get our jars zcompiled on&#160;any machine with&#160;installed JDK&#160;1.8.
In&#160;our <a href="https://github.com/luwrain/base.git">base.git</a> repository there&#160;is a&#160;set of bash-scripts
to&#160;make compilation process simple and smooth.
We&#160;know that these scripts work perfectly in&#160;Ubuntu,
but for&#160;all other systems it's necessary to&#160;check explicitly  whether they give the&#160;same result or not.
Hopefully, they do, but we don't have any exact information on&#160;this.
You can compile LUWRAIN on&#160;Microsoft Windows as&#160;well,
but this will require you to&#160;create libraries directories manually,
what in&#160;itself can be&#160;rather exhaustive.</p>

<h2>Requirements</h2>

<p>In&#160;order to&#160;get LUWRAIN compiled and ready to&#160;launch,
you should have on&#160;your  machine the&#160;following software:</p>

<ul>
<li>Java&#160;SE 1.8 or higher</li>
<li>bash</li>
<li>g++</li>
<li>ant </li>
<li>make</li>
<li>git</li>
<li>wget</li>
<li>unzip</li>
</ul>

<p>Ant takes care about calling javac on&#160;all&#160;our Java files;
bash executes compilation scripts;
git fetches our&#160;source code to&#160;your computer
and, finally, g++ and make   are used for&#160;compilation of&#160;JNI-part.</p>

<h2>Downloading the&#160;source code</h2>

<p>First of&#160;all, you should clone the&#160;repository by&#160;this link:</p>

<ul>
<li>(https://github.com/luwrain/base.git)[https://github.com/luwrain/base.git]</li>
</ul>

<p>The&#160;easiest way to&#160;do that is to&#160;run <em>git</em> command as&#160;follows:</p>

<p><code>
git clone https://github.com/luwrain/base.git
</code></p>

<p>After that, you should go to&#160;<em>base/scripts</em> directory
and run the&#160;<em>lwr-fetch</em> script there:</p>

<p><code>
cd base/scripts
./lwr-fetch
</code></p>

<p>This script will take some time to&#160;fetch the&#160;entire LUWRAIN source code and
all supplementary files to&#160;your machine.
It also fetches some zip-archives with&#160;all third-party libraries and sound files,
extracting them automatically.</p>

<h2>Preparing</h2>
<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
<h1>Сборка нашего исходного кода</h1>
<?php }?>
<?php luwrain_end_page('/doc/devel/compilation/index.php');?>
