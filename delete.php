<?php
session_start();
$server='localhost';
$username='root';
$pas='';
$dat='web studio database';

$con=mysqli_connect($server,$username,$pas,$dat);
if(!$con){
	echo'Eroare afisarea fisierelor';
}else{
	$n=$_SESSION['tabel'];
	$fiss=$_POST['del'];
	$sql="DELETE FROM $n WHERE fisiere='$fiss'";
	if(mysqli_query($con,$sql)){
		if(unlink($_SESSION['tabel'].'/'.$fiss)){
		header("location: index.php");
	}
	}
}
?>