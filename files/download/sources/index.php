<?php include "../../functions.php"; luwrain_begin_page('/download/sources/index.php', 'Sources code');?>

<?php if (luwrain_current_lang() == 'en') {?>

                  <h1>Luwrain source code</h1>
                  <p>
                    Luwrain source code is published in&#160;form of&#160;tarball archives widely popular in&#160;the&#160;world
                    of&#160;GNU/Linux as&#160;well as&#160;it is&#160;accessible through a&#160;set of&#160;git-repositories.
                    The&#160;range of&#160;available data in&#160;archives and in&#160;git is not the&#160;same.
                    Multimedia files are never put in&#160;git but in&#160;opposite Luwrain website sources
                    can be retrieved only through git. All materials are provided under the&#160;legal terms
                    described on&#160;the&#160;<a href="<?echo luwrain_link('/doc/legal/');?>">corresponding page</a> of&#160;this website.
                  </p>
                  <h2>Luwrain GIT repositories</h2>
                  <p>
                    All Luwrain GIT repositories are hosted on&#160;<a target="_blank" href="http://github.com/luwrain/">github.com</a>
                    service. These repositories are:
                  </p>
                  <ul>
                    <li>
                      <a target="_blank" href="http://github.com/luwrain/luwrain.git">git://github.com/luwrain/luwrain.git</a>:
                      main Luwrain GIT repository.
                    </li>
                    <li>
                      <a target="_blank" href="http://github.com/luwrain/extensions.git">git://github.com/luwrain/extensions.git</a>:
                      Luwrain extensions.
                    </li>
                    <li>
                      <a target="_blank" href="http://github.com/luwrain/luwrain-website.git">git://github.com/luwrain/luwrain-website
                      .git</a>: Luwrain website sources.
                    </li>
                  </ul>
                  <h2>Sources tarball</h2>
                  <p>
                    Use the&#160;link below to&#160;get main Luwrain sources tarball. Please, be&#160;aware
                    that This package doesn&#x27;t include auxiliary libraries needed for&#160;compilation
                    neither in&#160;source nor&#160;in&#160;binary form.
                  </p>
                  <ul>
                    <li><a href="ftp://ftp.altlinux.org/pub/people/msp/src/luwrain/0.x.x/luwrain-0.2.0.tar.gz">luwrain-0.2.0.tar.gz</a></li>
                  </ul>
                  <p>Various additional materials for&#160;Luwrain are publicly available on&#160;this ftp-resource:</p>
                  <ul>
                    <li>
                      <a href="ftp://ftp.altlinux.org/pub/people/msp/luwrain/">ftp://ftp.altlinux.org/pub/people/msp/luwrain/
                      </a>
                    </li>
                  </ul>

<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>

                  <h1>Исходные тексты Luwrain</h1>
                  <p>
                    Исходные тексты Luwrain публикуются в&#160;виде tar-архивов, широко распространённых в&#160;мире
                    GNU/Linux, а&#160;также через git-репозитории проекта. Набор материалов, доступных при&#160;помощи
                    архивов и git различается: в&#160;git не&#160;помещаются мультимедийные файлы, а в&#160;виде
                    архива, в&#160;свою очередь, недоступны исходные тексты веб-сайта Luwrain. Правовая основа
                    представленных материалов описана на&#160;<a href="<?echo luwrain_link('/doc/legal/');?>">соответствующей странице</a>
                                      </p>
                  <h2>git-репозитории Luwrain</h2>
                  <p>
                    Все git-репозитории проекта размещены на&#160;сайте <a target="_blank" href="http://github.com/luwrain/">github.com</a>.
                    Ниже приведены ссылки на&#160;них:
                  </p>
                  <ul>
                    <li>
                      <a target="_blank" href="http://github.com/luwrain/luwrain.git">git://github.com/luwrain/luwrain.git</a>:
                      основной репозиторий проекта.
                    </li>
                    <li>
                      <a target="_blank" href="http://github.com/luwrain/extensions.git">git://github.com/luwrain/extensions.git</a>:
                      репозиторий с&#160;исходными текстами расширений.
                    </li>
                    <li>
                      <a target="_blank" href="http://github.com/luwrain/luwrain-website.git">git://github.com/luwrain/luwrain-website
                      .git</a>: исходные текста веб-сайта Luwrain.
                    </li>
                  </ul>
                  <h2>tar-архив</h2>
                  <p>
                    По&#160;ссылке ниже Вы можете загрузить основной архив с&#160;исходными текстами. Пожалуйста,
                    обратите внимание, что он не&#160;включает в&#160;себя вспомогательные библиотеки нив&#160;бинарной
                    форме, нив&#160;форме исходных текстов.
                  </p>
                  <ul>
                    <li><a href="ftp://ftp.altlinux.org/pub/people/msp/src/luwrain/0.x.x/luwrain-0.2.0.tar.gz">luwrain-0.2.0.tar.gz</a></li>
                  </ul>
                  <p>Различные дополнительные материалы доступны на&#160;ftp-ресурсе по&#160;этой ссылке:</p>
                  <ul>
                    <li>
                      <a href="ftp://ftp.altlinux.org/pub/people/msp/luwrain/">ftp://ftp.altlinux.org/pub/people/msp/luwrain/
                      </a>
                    </li>
                  </ul>

<?php }?>

<?php luwrain_end_page('/download/sources/index.php');?>
