<?php include "../../../functions.php"; luwrain_begin_page('/community/publications/MinimalisticUserInterfacesTheCaseForBlindPersons/index.php', 'Minimalistic user interfaces: the case for blind persons');?>

                <h1>Minimalistic user interfaces: the&nbsp;case for&nbsp;blind persons</h1>

<?php if (luwrain_current_lang() == 'en') {?>
                <p><b>Author:</b> Michael Pozhidaev</p>
                <p>
                  <b>Published:</b> Proceedings of the&nbsp;7th conference &quot;Eastern partnership &mdash;
                  2013&quot; (Przemysl, Poland)
                </p>
                <p><b>Date:</b> September 7&ndash;15, 2013</p>
                <p>Materials for&nbsp;download:</p>
                <ul>
                  <li><a href="luwrain-poland-2013.pdf">Printable version in&nbsp;pdf-format</a></li>
                </ul>
<?php }?>

<?php if (luwrain_current_lang() == 'ru') {?>
                <p><b>Автор:</b> Михаил Пожидаев</p>
                <p>
                  <b>Опубликовано:</b> Материалы седьмой конференции &quot;Восточное партнёрство &mdash;
                  2013&quot; (Пшемысль, Польша)
                </p>
                <p><b>Дата:</b> 7&ndash;15 сентября 2013&nbsp;г.</p>
                <p>Материалы для&nbsp;загрузки:</p>
                <ul>
                  <li><a href="luwrain-poland-2013.pdf">версия для&nbsp;печати в&nbsp;pdf-формате.</a></li>
                </ul>
<?php }?>

                <p>
                  Although widely popular graphical user interface (GUI) provides nearly all features users
                  need for interaction with various types of&nbsp;computers, there&nbsp;are some cases when
                  it is come out that GUI is not really the&nbsp;most suitable approach. Usually it is some
                  kind of remote or embedded systems, terminals and so on, which&nbsp;have to follow some
                  another conception due to performance or communication restrictions. We&apos;d like to&nbsp;
                  consider here one more case: minimalistic user interface designed for&nbsp;blind persons.
                  Speaking in&nbsp;a&nbsp;few words what is a&nbsp;problem with GUI for&nbsp;blind persons,
                  it is enough to&nbsp;mention that on&nbsp;the&nbsp;one hand GUI is designed to&nbsp;be
                  controlled basically through &nbsp;mouse, which remains mostly inaccessible for&nbsp;blind
                  users, and on&nbsp;the&nbsp;other hand GUI brings to&nbsp;user a&nbsp;lot of information
                  usually turned out completely needless for a&nbsp;user without sight, but who still has&nbsp;to
                  handle it during navigation procedures. We have no intentions to&nbsp;prove this statement,
                  since it is quite obvious that GUI interaction takes a&nbsp;lot of&nbsp;extra time for&nbsp;navigation
                  for&nbsp;blind users, and would like to&nbsp;propose real design of&nbsp;a&nbsp;minimalistic
                  environment for&nbsp;blind users, which can be&nbsp;accepted as&nbsp;rather suitable for&nbsp;practice
                  according to&nbsp;our experience and is&nbsp;chosen for&nbsp;implementation in&nbsp;Luwrain
                  project.
                </p>
                <p>
                  First of&nbsp;all, we need to&nbsp;state what real requirements should be&nbsp;taken into
                  account. These requirements could be itself a&nbsp;subject for&nbsp;research since it is&nbsp;not&nbsp;obvious
                  what set of user interface elements is enough to&nbsp;cover all features, which system
                  should provide for&nbsp;sufficient interaction. As it was shown earlier in&nbsp;[1] nearly
                  all work object can be represented strictly in&nbsp;text form: text edit, lists, trees
                  etc. Blind users can navigate over text blocks well, so, roughly speaking, applications
                  should be&nbsp;a&nbsp;set of&nbsp;&quot;areas&quot; suitable for&nbsp;representation of&nbsp;text
                  information. Although blind users gets any feedback through speech output, corresponding
                  the&nbsp;on screen output still should be maintained properly since it is needed by users
                  with partial sight. We describe there basically on screen visual content, implying speech
                  output is also provided.
                </p>
                <p>
                  In&nbsp;the&nbsp;conception we propose entire screen is&nbsp;divided onto several areas
                  shown in&nbsp;tiled mode. We will suggest corresponding structure and algorithm for&nbsp;handling
                  area tiles, but now it is&nbsp;necessary to&nbsp;consider how applications can handle user
                  commands. No problems to&nbsp;use general events approach to&nbsp;translate any user input
                  as it&nbsp;is used in various GUI implementations, but there&nbsp;are special cases needed
                  for&nbsp;user dialogs and undesirable operation interruption. Using the&nbsp;term &quot;user
                  dialog&quot; we mean special text area shown on a screen as one function call which does
                  not return until area is closed. Such dialogs can be used for&nbsp;user confirmations,
                  files selections and so on. The&nbsp;calling procedure waits user decision and continues
                  depending on user answer. Here is the&nbsp;list of&nbsp;all features which we &nbsp;consider
                  enough to&nbsp;construct usual variety of&nbsp;things applications need for:
                </p>
                <ol>
                  <li>
                    User interacts with a&nbsp;set of&nbsp;applications and he should be&nbsp;able to&nbsp;switch
                    between each other quickly.
                  </li>
                  <li>
                    Each of&nbsp;the applications should consist of&nbsp;set of&nbsp;text areas shown on&nbsp;the&nbsp;screen
                    in&nbsp;tiled mode.
                  </li>
                  <li>Applications sshould be able to&nbsp;open dialogs areas as they are defined above.</li>
                  <li>User should be able to&nbsp;interrupt undesirable operation launched by&nbsp;an&nbsp;application.</li>
                  <li>There should be&nbsp;a&nbsp;method for&nbsp;quick information search in&nbsp;opened areas.</li>
                  <li>Applications should be&nbsp;able to&nbsp;operate in&nbsp;multithreaded mode.</li>
                </ol>
                <p>
                  Well, the&nbsp;implementation of&nbsp;several of&nbsp;these requirements is&nbsp;quite
                  obvious, but for&nbsp;others we&nbsp;had&nbsp;to perform additional research and experiments.
                  let take a&nbsp;look how&nbsp;to satisfy them. We should begin from&nbsp;execution threads
                  model. The&nbsp;model of&nbsp;threads is related to&nbsp;events queue essentially. We propose
                  there should be&nbsp;one and only one event queue in&nbsp;any given time as&nbsp;a&nbsp;pivot
                  of&nbsp;a&nbsp;general design. Everything else revolves around it. This queue should accept
                  two types of events: user input events and thread synchronization events. All of&nbsp;them
                  have one common property: destination application or destination area they sent to. Evidently,
                  the&nbsp;events of&nbsp;both types can be&nbsp;collected only in&nbsp;common threads-safe
                  queue. Otherwise there can appear a&nbsp;race condition.
                </p>
                <p>
                  Moreover, input events source (the&nbsp;code for&nbsp;keyboard touching reading) must be&nbsp;executed
                  in&nbsp;a&nbsp;separate thread. That must be&nbsp;done this way because user should have
                  a&nbsp;method to&nbsp;cancel the&nbsp;operation he don&apos;t want to&nbsp;continue anymore.
                  In&nbsp;this case he presses special keys combination to&nbsp;cancel entire the&nbsp;events
                  reading thread and restarts it again.
                </p>
                <p>
                  Actually there&nbsp;is one another problem related to&nbsp;the&nbsp;events reading thread
                  cancelling. Let take a&nbsp;look at&nbsp;user dialogs implementation. As it was mentioned
                  above user dialog area is&nbsp;appeared inside of&nbsp;one special method call, but since
                  events reading and events handling are performed in one single thread (multithread implementation
                  is&nbsp;also possible but rather more complicated and significantly more system resource
                  consuming), until this method is&nbsp;finished none of&nbsp;the&nbsp;other events can be&nbsp;processed.
                  But events handling must be continued as it is needed for interaction with user dialog
                  area itself. This problem can be easily solved by launching one more events reading and
                  dispatching procedure until corresponding area is closed. It can be done with the&nbsp;same
                  thread, no problems with that. But it causes one more difficult situation. Let user has
                  many opened dialogs (and that implies he has many launched but paused procedures for&nbsp;events
                  reading) and with this circumstances user suddenly decides to&nbsp;close one of&nbsp;the
                  application, having opened dialog somewhere in&nbsp;the middle of&nbsp;the call stack.
                  It is impossible as we are not able to remove anything from the&nbsp;call stack unless
                  we cancel entire execution thread for events handling with all opened dialogs. It&nbsp;looks
                  like a&nbsp;rather rough method but actually It is quite appropriate solution, and that
                  gives one more reason to&nbsp;have two&nbsp;threads: one as events origin and another for&nbsp;events
                  dispatching.
                </p>
                <p>
                  We&apos;d like to suggest one more structure with corresponding algorithm for its processing
                  within requirements above. We have mentioned text areas on&nbsp;the&nbsp;screen should
                  be shown in&nbsp;tiled mode but strategy how to&nbsp;obtain exact areas positions and size
                  remains still unclear. Entire tiles structure can be represented in&nbsp;binary tree. Each
                  node of this tree can be one of the&nbsp;two types: nodes for&nbsp;vertical dividing and
                  nodes&nbsp;for&nbsp;horizontal dividing. Each leaf in&nbsp;this tree is an&nbsp;area to&nbsp;show
                  on&nbsp;the&nbsp;screen. Entire screen width and height are given, how&nbsp;to get convenient
                  areas coordinates automatically? We&nbsp;propose the&nbsp;following procedure:
                </p>
                <ol>
                  <li>
                    With each of the nodes (not leaves) special number must be&nbsp;associated: how many leaves
                    are there under this node. These&nbsp;numbers should be&nbsp;calculated by&nbsp;obvious
                    recursive procedure.
                  </li>
                  <li>
                    From&nbsp;the&nbsp;root node let do&nbsp;the&nbsp;following recursive procedure:
                  <ol>
                    <li>
                      On each invocation the&nbsp;procedure receives node and rectangular part of&nbsp;the screen
                      (on initial invocation the&nbsp;entire screen).
                    </li>
                    <li>If received node is a&nbsp;leaf (area) it gets corresponding part of&nbsp;the&nbsp;screen.</li>
                    <li>
                      Otherwise received region is&nbsp;divided horizontally or vertically (according to&nbsp;node
                      type). Portions of&nbsp;the&nbsp;parts after the&nbsp;dividing should be calculated proportionally
                      to&nbsp;the&nbsp;numbers of&nbsp;each branch assigned on&nbsp;the&nbsp;first step of&nbsp;this
                      algorithm. After that both branches must be&nbsp;processed with this procedure recursively.
                    </li>
                  </ol>
                  </li>
                </ol>
                <p>
                  This&nbsp;algorithm yields rather accurate dividing, but it&nbsp;can be&nbsp;improved by&nbsp;adding
                  the&nbsp;processing of&nbsp;dialog areas as&nbsp;a&nbsp;special case.
                </p>
                <h2>References</h2>
                <p>
                  [1] Pozhidaev&nbsp;M. Text-based environment for blind persons: conception and operating
                  system design // International research journal, 2013, issue&nbsp;2, pp.&nbsp;63&ndash;66.
                </p>
<?php luwrain_end_page('/community/publications/MinimalisticUserInterfacesTheCaseForBlindPersons/index.php');?>
