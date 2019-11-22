<?php include "../../../../functions.php"; luwrain_begin_page('/doc/user/manual/web-search/index.php', luwrain_current_lang() == 'ru'?'Единый поиск в Интернете':'Web search');?>
<?php if (luwrain_current_lang() == 'en') {?>
<h1>Web search</h1>
<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
<h1>Единый поиск в&#160;Интернете</h1>

<h2>Правовой статус использования duckduckgo.com</h2>

<p>Поисковая машина <a href="http://duckduckgo.com">duckduckgo.com</a> открыто не&#160;содержит явного позволения подвергать скриптовой обработки свою поисковую выдачу,
но на&#160;форуме присутствует следующий вопрос одного из&#160;пользователей:</p>

<p><em>&#x2014;&#160;Am I allowed to automatically parse duckduckgo search results?</em></p>

<p><em>&#x2014;&#160;Nope; sorry.
We do not have the rights from our sources to let anyone do that.
We do have an API for instant answers, but it does not serve normal results.</em></p>

<p><em>&#x2014;&#160;For personal/non-commercial usage too?</em></p>

<p><em>&#x2014;&#160;Yes, afraid so.
What did you want to do?</em></p>

<p><em>&#x2014;&#160;Implement client-side search personalization tool.
Got an algorithm that reranks search results based on personal search history;
at the moment I'm looking for search result sources to test it.</em></p>

<p><em>&#x2014;&#160;Ah. Feel free to run userscripts on the site, if that works for you.
Beyond that, check out 
http://commoncrawl.org/ and http://yacy.net/</em></p>

<p>Источник:
<a href="https://web.archive.org/web/20180910171034/https://duck.co/forum/thread/5251/am-i-allowed-to-automatically-parse-duckduckgo-sea">https://web.archive.org/web/20180910171034/https://duck.co/forum/thread/5251/am-i-allowed-to-automatically-parse-duckduckgo-sea</a></p>

<p>Мы полагаем, что задача обработки поисковой выдачи в&#160;LUWRAIN не&#160;имеет принципиальных отличий от&#160;задачи,
которая обсуждалась участниками беседы, и на&#160;решение которой пользователь получил явное позволение.</p>
<?php }?>
<?php luwrain_end_page('/doc/user/manual/web-search/index.php');?>
