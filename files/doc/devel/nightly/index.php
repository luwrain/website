<?php include "../../../functions.php"; luwrain_begin_page('/doc/devel/nightly/index.php', luwrain_current_lang() == 'ru'?'Компиляция наших nightly-сборок':'Compiling our nightly  build');?>
<?php if (luwrain_current_lang() == 'en') {?>
<h1>Compiling our nightly build</h1>

<p>It's very easy to&#160;get our nightly build compiled 
the&#160;same way as&#160;we&#160;do when we&#160;publish <a href="<?php echo luwrain_link('/download/nightly/');?>">them</a>  on&#160;this website.
We always do this on&#160;GNU/Linux system using Java&#160;SE&#160;1.8.
So, if you would like to&#160;get through this&#160;process too,
you need to&#160;have GNU/Linux distro (preferably Ubuntu) with general set of&#160;utilities for&#160;Java development.
Roughly these utilities must include:</p>

<ul>
<li>javac</li>
<li>ant </li>
<li>git</li>
<li>bash</li>
<li>wget</li>
<li>zip</li>
<li>md5sum</li>
<li>sha1sum</li>
</ul>

<p>if you have all&#160;of&#160;this, we can go ahead. 
Just do the&#160;following steps to&#160;do&#160;our&#160;nightly&#160;build:</p>

<ol>
<li>Download our <em>lwr-nightly</em>script by&#160;the&#160;link below</li>
<li>Make it executable</li>
<li>Run it</li>
<li>Find the&#160;files in&#160;the&#160;newly created temporary directory</li>
</ol>

<p>It's all! So, <em>lwr-nightly</em> script is&#160;available here:</p>

<ul>
<li><a href="https://github.com/luwrain/base/raw/master/scripts/lwr-nightly">https://github.com/luwrain/base/raw/master/scripts/lwr-nightly</a></li>
</ul>

<p>Once you get it downloaded, make it executable and run it:</p>

<p><code>
chmod 755 lwr-nightly
</code></p>

<p><code>
./lwr-nightly
</code></p>

<p>On&#160;its&#160;start this script writes the&#160;path to&#160;the&#160;temporary directory,
where it&#160;does all&#160;work and where you can find the&#160;result when everything is&#160;finished.
Tar and Zip archives, as&#160;well as MD5 and SHA1 checksums, probably, are the&#160;files you are expecting to&#160;get!</p>
<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
<h1>Компиляция наших nightly-сборок</h1>
<?php }?>
<?php luwrain_end_page('/doc/devel/nightly/index.php');?>
