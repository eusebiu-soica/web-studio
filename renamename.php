<?php
session_start();
$server='localhost';
$username='root';
$pas='';
$dat='web studio database';

$con=mysqli_connect($server,$username,$pas,$dat);
if(!$con){
	echo'Nu se poate accesa baza de date';
}else{
	$t=$_SESSION['tabel'];
	$sql="DROP TABLE $t";
	$sql2="DELETE FROM utilizatori WHERE tabel='$t'";
	if(mysqli_query($con,$sql)){
		if(mysqli_query($con,$sql2)){
		rmdir($t);
		header("location: WEB Studio.html");
		}
	
	}
}
?>