<?php
session_start();
$server='localhost';
$username='root';
$pas='';
$dat='web studio database';

$con=mysqli_connect($server,$username,$pas,$dat);
if(!$con){
	echo'Eroare la crearea contului';
}else{
	$nume=$_POST['nume'];
	$prenume=$_POST['prenume'];
	$email=$_POST['email'];
	$parola=$_POST['parola'];
	$tabel=$_POST['tabela'];
	$_SESSION['tabel']=$_POST['tabela'];
	$_SESSION['email']=$_POST['email'];
	$_SESSION['parola']=$_POST['parola'];
	$add="INSERT INTO utilizatori(Nume,Prenume,Email,Parola,tabel) VALUES('$nume','$prenume','$email','$parola','$tabel')";
	$creat="CREATE TABLE $tabel (id INT(11) AUTO_INCREMENT PRIMARY KEY,fisiere TEXT,editare TEXT,data TEXT)";

		IF(mysqli_query($con,$add)){
			if(mysqlI_query($con,$creat)){
			header('location: index.php');
			MKDIR($tabel);
		}else{
			echo 'Eroare la crearea contului'.mysqli_error($con);
		}
		}
		
	}
	mysqli_close($con);

?>
