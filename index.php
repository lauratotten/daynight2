<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Night and Day</title>
	<?php require_once('logic.php'); ?>
	<style type='text/css'>
      	body {
          	background-color:<?=$background_color?>
       	}
       	p {
           	color:<?=$text_color?>
       	}
	</style>
</head>

<body>	
	<p>The time is <?=$time?></p>
	<p>It is <?=$time_of_day?></p>
</body>
</html>