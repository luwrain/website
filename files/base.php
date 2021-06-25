<?php
// Copyright 2012-2021 Michael Pozhidaev <msp@luwrain.org>
// The LUWRAIN Project, GPL v.3

function lwr_keywords()
{
  return 'Java,JavaScript,Linux,API,незрячий,слепой,зрение,accessibility,вспомагательная технология,тифлопедагогика,дефектология,платформа,программирование,пользовательский интерфейс,операционная система,СПО,Open Source,GPL,accessibility,blind,visually-impaired,Raspberry Pi';
}

function lwr_month_en($month) {
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

function lwr_lang() {
    return array_key_exists('lang', $_GET)?$_GET['lang']:'en';
}

//Compatibility function, to be deleted
function lwr_current_lang() { return lwr_lang(); }
function luwrain_current_lang() { return lwr_lang(); }

function lwr_current_mode()
{
    return array_key_exists('mode', $_GET)?$_GET['mode']:'normal';
}

function lwr_mode() {
  return lwr_current_mode();
}

function luwrain_current_mode()
{
return lwr_current_mode();
}

function luwrain_link_ext1($path, $lang, $mode)
{
    return $path.'?lang='.$lang.'&amp;mode='.$mode;
}

function lwr_link($path)
{
    return luwrain_link_ext1($path, lwr_lang(), lwr_current_mode());
    }

//Compatibility function, to be deleted
function luwrain_link($path) { return lwr_link($path); }

function lwr_title($value)
{
if ($value == '')
return 'LUWRAIN';
return $value.' &#x2014; LUWRAIN';
}
?>
