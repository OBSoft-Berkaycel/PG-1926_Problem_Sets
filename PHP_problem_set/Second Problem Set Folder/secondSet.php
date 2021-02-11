


<html>
<head>
	<title>Excellent Number Calculator</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<form action="secondSet.php" method="post">
			<input type="text" name="input" class="input">
			<input type="submit" class="button" name="check" value="calculate">	
		</form>
		<div class="block">
			
		</div>
</body>
</html>



<?php 
session_start();

if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['check']))
    {
        checkTheExcellentNumber($_POST['input']);
    }

function checkTheExcellentNumber($num){
		$result = 0;
for ($i = 1; $i < $num ; $i++) {
	if($num%$i == 0){
		$result += $i;
		echo "One of the divison of the number : ".$i.'<br>';
	}
}
if($result == $num){
	echo $num.' is an excellent number!!!';
}else {
	echo $num.' is not an excellent number!!!';
}
}


 ?>