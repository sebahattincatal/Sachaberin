<?php
/**
 * Presented by @sebahattincatal
 */

$prefix = "adgetcrm_";
$vt_kullanici=$prefix."user";
$vt_parola="12022133";
$vt_isim=$prefix."db";
$vt_sunucu="localhost";


$db_conn = mysqli_connect($vt_sunucu, $vt_kullanici, $vt_parola, $vt_isim);

//var_dump($db_conn);exit;

//mysql_select_db($vt_isim, $db_conn);

?>