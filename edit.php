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
	$fil=$_POST['hid'];
	$sql="UPDATE $n SET editare='$fil' WHERE id=1";
		if(mysqli_query($con,$sql)){
			$_SESSION['fisier']=$fil;
		header('location: editor.php');
		}
}
?>