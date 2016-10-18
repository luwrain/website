<?php include "../../functions.php"; luwrain_begin_page('/download/git/index.php', luwrain_current_lang() == 'ru'?'РепозиторииGit':'Git repositories');?>
<?php if (luwrain_current_lang() == 'en') {?>
<h1>Git repositories</h1>

<p>Our&#160;source code is easily accessible as&#160;a&#160;set of&#160;Git repositories on&#160;<a href="http://github.com/luwrain/">github.com</a>.
All of&#160;these repositories are&#160;listed here in&#160;several categories 
with&#160;brief comments.
Please note that there is the&#160;<em>lwr-checkout</em> script in&#160;<a href="https://github.com/luwrain/base.git">base.git</a>
which clones all&#160;repositories necessary to&#160;compile our&#160;distribution.</p>

<h2>Core repositories</h2>

<ul>
<li><a href="https://github.com/luwrain/luwrain.git">https://github.com/luwrain/luwrain.git</a> &#x2014;
the system core, standard controls, extensions manager </li>
<li><a href="https://github.com/luwrain/base.git">https://github.com/luwrain/base.git</a> &#x2014;
a&#160;set of&#160;basic interfaces which supposed to be&#160;available in all&#160;extensions and OS-dependent functions</li>
<li><a href="https://github.com/luwrain/interaction-javafx.git">https://github.com/luwrain/interaction-javafx.git</a> &#x2014;
user interaction implemented on&#160;JavaFX</li>
<li><a href="https://github.com/luwrain/doctree.git">https://github.com/luwrain/doctree.git</a> &#x2014;
structured documents processing and filters for&#160;documents reading (DOC, FB2, HTML etc)</li>
<li><a href="https://github.com/luwrain/pim.git">https://github.com/luwrain/pim.git</a> &#x2014;
personal information manager</li>
<li><a href="https://github.com/luwrain/network.git">https://github.com/luwrain/network.git</a> &#x2014;
network management (for GNU/Linux only)</li>
</ul>

<h2>Main applications</h2>

<ul>
<li><a href="https://github.com/luwrain/app-browser.git">https://github.com/luwrain/app-browser.git</a> &#x2014;
web browser (also has Javadoc <a href="http://luwrain.org/api-browser">here</a>)</li>
<li><a href="https://github.com/luwrain/app-commander.git">https://github.com/luwrain/app-commander.git</a> &#x2014;
double-panel commander for operations on&#160;files and directories</li>
<li><a href="https://github.com/luwrain/app-mail.git">https://github.com/luwrain/app-mail.git</a> &#x2014;
mail reading</li>
<li><p><a href="https://github.com/luwrain/app-message.git">https://github.com/luwrain/app-message.git</a> &#x2014;
mail messages composing</p></li>
<li><p><a href="https://github.com/luwrain/app-reader.git">https://github.com/luwrain/app-reader.git</a> &#x2014;
documents and texts preview</p></li>
<li><a href="https://github.com/luwrain/app-player.git">https://github.com/luwrain/app-player.git</a> &#x2014;
multimedia player</li>
</ul>

<h2>Auxiliary repositories</h2>

<ul>
<li><a href="https://github.com/luwrain/extensions.git">https://github.com/luwrain/extensions.git</a> &#x2014;
a&#160;set of&#160;standard extensions</li>
<li><a href="https://github.com/luwrain/i18n.git">https://github.com/luwrain/i18n.git</a> &#x2014;
support of&#160;national languages and standards</li>
<li><a href="https://github.com/luwrain/registry.git">https://github.com/luwrain/registry.git</a> &#x2014;
registry data</li>
</ul>

<h2>Other applications</h2>

<ul>
<li><a href="https://github.com/luwrain/app-calc.git">https://github.com/luwrain/app-calc.git</a> &#x2014;
calculator</li>
<li><a href="https://github.com/luwrain/app-calendar.git">https://github.com/luwrain/app-calendar.git</a> &#x2014;
calendar</li>
<li><a href="https://github.com/luwrain/app-diary.git">https://github.com/luwrain/app-diary.git</a> &#x2014;
personal diary</li>
<li><a href="https://github.com/luwrain/app-fetch.git">https://github.com/luwrain/app-fetch.git</a> &#x2014;
fetching of mail and news</li>
<li><a href="https://github.com/luwrain/app-news.git">https://github.com/luwrain/app-news.git</a> &#x2014;
news reading</li>
<li><a href="https://github.com/luwrain/app-notepad.git">https://github.com/luwrain/app-notepad.git</a> &#x2014;
simple text editor</li>
<li><a href="https://github.com/luwrain/app-term.git">https://github.com/luwrain/app-term.git</a> &#x2014;
terminal (GNU/Linux only)</li>
<li><a href="https://github.com/luwrain/app-twitter.git">https://github.com/luwrain/app-twitter.git</a> &#x2014;
Twitter client</li>
<li><a href="https://github.com/luwrain/app-writer.git">https://github.com/luwrain/app-writer.git</a>
document editor</li>
<li><a href="https://github.com/luwrain/app-contacts.git">https://github.com/luwrain/app-contacts.git</a>
personal address book</li>
</ul>

<h2>OS-dependent code</h2>

<ul>
<li><a href="https://github.com/luwrain/linux.git">https://github.com/luwrain/linux.git</a> &#x2014;
for&#160;GNU/Linux</li>
<li><a href="https://github.com/luwrain/macos.git">https://github.com/luwrain/macos.git</a> &#x2014;
for&#160;Mac&#160;OS&#160;X (currently unmaintained)</li>
<li><a href="https://github.com/luwrain/windows.git">https://github.com/luwrain/windows.git</a> &#x2014;
for&#160;Microsoft Windows</li>
</ul>

<h2>System services</h2>

<p>We have these repositories, but in&#160;fact we almost don't work work on&#160;them at&#160;the&#160;moment.
Only VoiceMan goes to&#160;our&#160;ISO images as&#160;a&#160;speech server,
all other repositories are listed here mostly for&#160;discussions</p>

<ul>
<li><a href="https://github.com/luwrain/libdbusspeech.git">https://github.com/luwrain/libdbusspeech.git</a> &#x2014;
speech interface based on&#160;D-Bus</li>
<li><a href="https://github.com/luwrain/guidecraft.git">https://github.com/luwrain/guidecraft.git</a> &#x2014;
AT-SPI client and the window manager</li>
<li><a href="https://github.com/luwrain/voiceman.git">https://github.com/luwrain/voiceman.git</a> &#x2014;
our speech server</li>
<li><a href="https://github.com/luwrain/pointvox.git">https://github.com/luwrain/pointvox.git</a> &#x2014;
TTS manager</li>
<li><a href="https://github.com/luwrain/musitorius.git">https://github.com/luwrain/musitorius.git</a> &#x2014;
multimedia player control</li>
</ul>
<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
<h1>репозитории Git</h1>
<?php }?>
<?php luwrain_end_page('/download/git/index.php');?>
