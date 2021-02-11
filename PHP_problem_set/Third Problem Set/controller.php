<?php 

session_start();

function checkNum($number){
	$counter = 0;
	for ($i = 1; $i <= $number ; $i++) {
		if($number%$i == 0){
				$counter ++;
		}
	}
	if ($counter >2) {
		echo 'Asal Sayı değil';
	}else{
		echo 'Asal sayı';
	}
}


 ?>