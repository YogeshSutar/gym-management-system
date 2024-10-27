<?php
session_start();
$form_time1=date('Y-m-d H:i:s');
$to_time1=$_SESSION["end_time"];

$timefirst=strtotime($form_time1);
$timesecond=strtotime($to_time1);

$differenceinsecond =$timesecond-$timefirst;
echo gmdate("H:i:s",$differenceinsecond);
?>