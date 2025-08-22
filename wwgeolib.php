<?php
require_once('geoip.class.php');
$geoplugin = new geoPlugin();
$geoplugin->locate();
echo $geoplugin->countryCode;
?>