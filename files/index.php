<?php

include "functions.php";

luwrain_begin_page('index.php', luwrain_current_lang() == 'ru'?'Главная страница':'Main page', true);
if (lwr_current_mode() == 'adapted')
{
  lwr_main_page_adapted();
}else
{
?>

<script>
  jQuery(document).ready(function () {
    OnReady();
        OnReadyIndex();
  });
</script>

<input class="hidden-not-important" id="hiddenPartNumber">
<div id="accEnvir">
  <?php echo lwr_current_lang() == 'ru'?'Информационное общество &#x2014; доступное общество':'Information technologies for the blind';?>
</div>
<div id="picContent">
  <div id="arrowLeft"></div>
  <div id="part1more" class="">
    <div id="accPlatform"></div>
    <div id="text1more" class="darkGrey"></div>
  </div>
  <div id="arrowRight"></div>
</div>
<div id="buttonContent">
  <div class="row">
    <div class="col-md-5"><button class="twoButton heavyButton" id="firstButton"></button></div>
    <div class="col-md-2"><div id="orLi"><?php echo luwrain_current_lang() == 'ru'?'или':'or';?></div></div>
    <div class="col-md-5"><button class="twoButton lightButton" id="secondButton" onclick="SecondButtonOnClick();"><span></span></button></div>
  </div>
  <div class="clearfix"></div>
</div>
<div id="navigation">
  <ul>
    <li>
      <a href="#" class="blueColor font40" id="nav1">•</a>
    </li>
    <li>
      <a href="#" class="lightGrey font40" id="nav2">•</a>
    </li>
    <li>
      <a href="#" class="lightGrey font40" id="nav3">•</a>
    </li>
    <li>
      <a href="#" class="lightGrey font40" id="nav4">•</a>
    </li>
  </ul>
</div>

<?php

}
luwrain_end_page('index.php');

?>
