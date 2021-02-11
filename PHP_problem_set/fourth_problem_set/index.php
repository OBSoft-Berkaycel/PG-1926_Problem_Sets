<?php 

require_once('controller.php');


if (isset($_POST["calculate"])) {
	
	checkMoney($_POST["valueInput"]);
} else {
	 ?>

 
 <html>
 <head>
 	<title>TL Hesabı</title>
 	<meta charset="utf-8">
 	<link rel="stylesheet" type="text/css" href="style.css">
 </head>
 <body>
 
 	<form action="?" method="post">
 		<input type="text" name="valueInput" autocomplete="off" placeholder="Bir sayi giriniz(Ör: 1,2.53)" class="input">
 		<button type="submit" name="calculate" class="button">Check Money</button>
 	</form>
<?php } ?>

 </body>
 </html>