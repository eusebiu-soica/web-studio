<?php 
session_start();
?>
<html>
<head>
<title><?php echo $_SESSION['fisier'];?></title>
<link rel='stylesheet' type='text/css' href='resurse/css/editor/editor.css'>
<link rel='stylesheet' type='text/css' href='resurse/css/editor/color.css'>

<link rel='sgortcut icon' type='text/css' href='resurse/logo/editor-logo.png'>
</head>

<body>
<script src='resurse/js/editor/function.js'>
</script>
<!-----COLOR---->
<div id='cover'>
</div>

<div id='color-box' style="margin-top: 128px; margin-left: 420px;">
<button onclick='closecolor()' id='close-button' style="margin-right: -55px;" title='Inchide'>×</button>
<iframe src='resurse/html/color.html' frameborder='0'></iframe>
</div>







<!------HEADER----->

<header><img src='resurse/logo/bener2.png' draggable='false' id='bener'>
<table border='0' id='table4'>
<tr>
<td><button id='button2' style='margin-left:90%;'><a href="index.php"><img src='resurse/logo/panou.png' id='instrumente' draggable='false' style='width: 50px;height:50px;'></a></button></td>
</tr>
<tr>
<td style='font-size: 14px; padding-left: 94%;'>Acasa</td>
</tr>
</table>

<table border='0' id='table1'>
<tr>
<td><button id='button2' style='margin-left: 3%' onclick='opencolor()'><img src='resurse/logo/color.png' id='instrumente' draggable='false'></button></td>
</tr>
<tr>
<td>Culori</td>
</tr>
</table>




<script>
function see(){
	my=window.open("<?php echo $_SESSION['tabel'].'/'.$_SESSION['fisier'];?>",'_black');
}


</script>


<button id='button' onclick='see()'>Vizualizare</button>
<form method="post" action="salvare.php">
<input type="submit" value="Salvare" id='button' style="margin-right: 16%; margin-top: -5.2%;"></input>
</header>

<!----------/HEADER----->

<!----TEXTAREA---->

<textarea name='t'>
<?php
$server='localhost';
$username='root';
$pas='';
$dat='web studio database';

$con=mysqli_connect($server,$username,$pas,$dat);
if(!$con){
	echo'Eroare afisarea fisierelor';
}else{
	$fisi=$_SESSION['tabel'];
	$sql="SELECT fisiere FROM $fisi";
	$result=mysqli_query($con,$sql);
	if(mysqli_num_rows($result)>0){
		$fisier=$_SESSION['fisier'];
	$content=file_get_contents($_SESSION['tabel'].'/'.$fisier);
	echo $content;
	}
}
?>
</textarea>
</form>
<!----/TEXTAREA---->

</body>
</html>