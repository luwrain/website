<?php
  include "../../functions.php";
  include "content.php";
  luwrain_begin_page('/community/album/index.php', luwrain_current_lang() == 'ru'?'Наш фотоальбом':'Our pictures');
  $frame = array_key_exists('id', $_GET)?$_GET['id']:1;
  $total = count($usual);
  $index = $total - $frame;
  if ($index < 0)
    $index = 0;
  $filename = $usual[$index];
  $comment = $comments[$filename];
  echo '      <h1>'.(luwrain_current_lang() == 'ru'?'Наш альбом: фотография ':'Our pictures: image').' '.$frame.(luwrain_current_lang() == 'ru'?' из ':'/').$total."</h1>\n";
?>
        <center>
          <p style="font-size: 20px;">
<?php
  if ($frame > 1)
    echo '            <a href="index.php?id='.($frame - 1).'">&lt;&lt;</a>'."\n"; else
    echo '            &lt;&lt;'."\n";
  if ($frame < $total)
    echo '            <a href="index.php?id='.($frame + 1).'"><img src="'.$filename.'" hspace="32px" align="middle" alt="'.$comment.'"></a>'."\n"; else
    echo '            <img src="'.$filename.'" hspace="32px" align="middle" alt="'.$comment.'">'."\n";
  if ($frame < $total)
    echo '            <a href="index.php?id='.($frame + 1).'">&gt;&gt;</a>'."\n"; else
    echo '            &gt;&gt;'."\n";
?>
          </p>
        </center>
<?php luwrain_end_page('/community/album/index.php');?>
