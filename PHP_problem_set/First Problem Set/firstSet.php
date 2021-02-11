<?php 

$clockSix = date("06:00:00");
$clockTen = date("10:00:00");
$clockFive = date("17:00:00");
$clockEight = date("20:00:00");
$clockMidnight = date("00:00:00");
$datenow = date("H:i:s");


if ($datenow >= $clockSix && $datenow <= $clockTen) {
	echo 'Günaydın...';
} else if($datenow > $clockTen && $datenow <= $clockFive){
	echo 'İyi Günler...';
}else if($datenow > $clockFive && $datenow <= $clockEight){
	echo 'İyi Akşamlar...';
}else if($datenow > $clockEight && $datenow <= $clockMidnight){
echo 'İyi Geceler...';
}else{
	echo 'Esenlikler Dilerim...';
}
echo '<br>'.$datenow;

 ?>