<?php 
session_start();
	$tex=$_POST['t'];
	$fisier=$_SESSION['fisier'];
	$content=file_get_contents($_SESSION['tabel'].'/'.$fisier);
	$_SESSION['content']=$content;
	$fil=fopen($_SESSION['tabel'].'/'.$fisier,'w+');
	fwrite($fil,$tex);
	fclose($fil);
	header('location: editor.php');
?>