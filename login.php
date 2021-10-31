<?php 
session_start();
$server='localhost';
$username='root';
$pas='';
$dat='web studio database';

$con=mysqli_connect($server,$username,$pas,$dat);
if(!$con){
	echo'Eroare la accesarea contului'.mysqli_connect_error();
}else{
	$email=$_POST['email'];
	$parola=$_POST['parola'];
	$sql="SELECT Email,Parola FROM utilizatori WHERE Email='$email' AND Parola='$parola'";
	$rezultat=mysqli_query($con,$sql);
	$count=mysqli_num_rows($rezultat);
	if($count==1){
		$_SESSION['tabel']=$_POST['folder'];
		$_SESSION['email']=$_POST['email'];
		$_SESSION['parola']=$_POST['parola'];
	 header('Location: index.php');
	}
}
mysqli_close($con);
?>