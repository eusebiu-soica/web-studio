<?php
session_start();
$server='localhost';
$username='root';
$pas='';
$dat='web studio database';

$con=mysqli_connect($server,$username,$pas,$dat);
if(!$con){
	echo'Eroare la crearea fisierului';
}else{
	$nume=$_POST['nume'];
	$email=$_POST['email'];
	$pass=$_POST['parola'];
	$n=$_SESSION['tabel'];
	$sql="UPDATE utilizatori SET NumePrenume='$nume',Email='$email',Parola='$pass' WHERE tabel='$n'";
	if(mysqli_query($con,$sql)){
		header("Location: index.php");
	}else{
		echo"Eroare".mysqli_connect_error();
	}
}
?>