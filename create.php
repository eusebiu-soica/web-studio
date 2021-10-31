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
	$fil=$_POST['fi'];
	$f=fopen($_SESSION['tabel'].'/'.$fil,'w+');
	fclose($f);
	$n=$_SESSION['tabel'];
	$_SESSION['fisier']=$fil;
	$sql="INSERT INTO $n (fisiere) VALUES('$fil')";
	$sql2="UPDATE $n SET editare='$fil' WHERE id=1";
	if(mysqli_query($con,$sql)){
		if(mysqli_query($con,$sql2)){
		header('location: editor.php');
	}else{ echo'nu'.mysqli_error($con);}
}
}

?>