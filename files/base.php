<?php
function lwr_month_en($month)
{
  $months = array(
    'January',
    'February',
    'March',
    'April',
    'May',
    'June',
    'July',
    'August',
    'September',
    'October',
    'November',
    'December',
  );
  return $months[$month - 1];
}

function luwrain_current_lang()
{
    return array_key_exists('lang', $_GET)?$_GET['lang']:'ru';
}

function luwrain_current_mode()
{
    return array_key_exists('mode', $_GET)?$_GET['mode']:'normal';
}

function luwrain_link_ext1($path, $lang, $mode)
{
    return $path.'?lang='.$lang.'&amp;mode='.$mode;
}

function luwrain_link($path)
{
    return luwrain_link_ext1($path, luwrain_current_lang(), luwrain_current_mode());
    }

function lwr_title($value)
{
if ($value == '')
return 'LUWRAIN';
return $value.' &#x2014; LUWRAIN';
}
?>
