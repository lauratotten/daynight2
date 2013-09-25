
<?php

date_default_timezone_set("America/New_York");

$hour=date("G");
$time=date("g:ia");

if ($hour > 8 AND $hour <= 19)
  {
  $time_of_day = "day";
  $background_color = "#81c4e6"; 
  $text_color = "#000000";
  }
else
  {
  $time_of_day = "night";
  $background_color = "#000000"; 
  $text_color = "#FFFFFF";
  }
  
?>

