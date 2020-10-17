<?php
// Copyright 2012-2020 Michael Pozhidaev <msp@luwrain.org>
// The LUWRAIN Project, GPL v.3

include "/www/download/nightly/latest/version.php";

function lwr_version() { return '1.2.1'; }
function lwr_release_date_en() { return 'May 22, 2019'; }
function lwr_release_date_ru() { return '22 мая 2019 г.'; }

//Windows
function lwr_version_windows() { return lwr_version(); }
function lwr_release_date_windows_en() { return lwr_release_date_en(); }
function lwr_release_date_windows_ru() { return lwr_release_date_ru(); }

//Linux
function lwr_version_linux() { return lwr_version(); }
function lwr_release_date_linux_en() { return lwr_release_date_en(); }
function lwr_release_date_linux_ru() { return lwr_release_date_ru(); }

//Mac
function lwr_version_mac() { return lwr_version(); }
function lwr_release_date_mac_en() { return lwr_release_date_en(); }
function lwr_release_date_mac_ru() { return lwr_release_date_ru(); }

//ISO
function lwr_version_iso() { return lwr_version(); }
function lwr_release_date_iso_en() { return lwr_release_date_en(); }
function lwr_release_date_iso_ru() { return lwr_release_date_ru(); }

//SDK
function lwr_version_sdk() { return lwr_version(); }
function lwr_release_date_sdk_en() { return lwr_release_date_en(); }
function lwr_release_date_sdk_ru() { return lwr_release_date_ru(); }

//Sources
function lwr_version_tarball() { return lwr_version(); }
function lwr_release_date_tarball_en() { return lwr_release_date_en(); }
function lwr_release_date_tarball_ru() { return lwr_release_date_ru(); }

?>
