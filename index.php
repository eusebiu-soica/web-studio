<?Php session_start();
Echo'
<html>
<head>
<title>WEB Studio</title>
<meta name="author" content="Eusebiu Soica">
<meta name="author" content="Eusebiu Soica">
<meta name="viewport" content="width=device-width initial-scale=1.0">
<link rel="shortcut icon" type="image/php" href="resurse/logo/logo.png">
<link rel="stylesheet" type="text/css" href="resurse/css/index/index.css">
</head>
<body>
<script src="resurse/js/index/new-project.js"></script>
<!---------New Project------->

<div id="new-project" style=" background: linear-gradient(to left, #ff66b3 0%,#33ccff 135%);">

<center>

<div id="box" style="z-index: 3;
	margin-top: 11%;
	width: 50%;
	height: 45%;
	background-color: white;
	border-radius: 10px;
	box-shadow: 0 12px 14px 0 rgba(0,0,0,0.2);">
	<h1 style="font-family: candara; color:#00bfff; padding-top: 10%; "><b>Proiect nou</b></h1>
<form method="post" action="create.php">
<input type="text" placeholder="nume_fisier.html" style="margin-top: 5%;
	width: 76%;
	font-family: verdana;
	height: 14%;
	padding-left: 3%;
	border:3px solid #eae6e6;
	background-color: #f2f2f2;
	border-radius: 5px;" name="fi"></input>
<br>
<input type="submit" value="Creaza fisierul" style="
	margin-top: 5%;
	padding: 15px;
	width: 30%;
	background-color: #00bfff;
	border: none;
	border-radius: 5px;
	color: white;
	font-family: consolas;
	cursor: pointer;
	font-size: 15px;
	float: right;
	margin-right: 23%;"></input>
</form>
<button  onclick="closeproject()" style="float: left;margin-top: 5%;padding: 15px;width: 20%;background-color: red;border: none;border-radius: 5px;color: white;font-family: consolas;cursor: pointer;font-size: 15px; margin-left: 23%">Anuleaza</button>

</div>
</center>

<h3 style="text-align: center;
	margin-top: 15%;
	color: #d8d3d3;
	font-family: consolas;">&copy2019 WEB Studio. All rights reserved!</h3>
</div>
<!---------/New Project------->

<header>
<script src="resurse/js/index/show-modal-new-project.js"></script>
<script src="resurse/js/index/editor-open.js"></script>
<img src="resurse/logo/bener2.png" draggable="false" id="bener">
<script>
function account(){
my=window.open("account.php","_self");
}
</script>
<table border="0" id="table1">
<tr>
<td><button style="margin-right: 12%" id="button" onclick="account()"><img src="resurse/logo/account.png" draggable="false" id="header-button" title="Accesati contul dumneavoastra"></button></td>
</tr>
<tr>
<td id="td1">Contul meu</td>
</tr>
</table>

<table border="0" id="table3">
<tr>
<td><button onclick="newproject()" style="margin-right: 16%;" id="button"><img src="resurse/logo/new.png" draggable="false" id="header-button" style="transform: scale(0.8); " title="Creaza un fisier html nou"></button></td>
</tr>
<tr>
<td id="td1">Proiect nou</td>
</tr>
</table>
</header>';
$server='localhost';
$username='root';
$pas='';
$dat='web studio database';

$con=mysqli_connect($server,$username,$pas,$dat);
if(!$con){
	echo'Eroare la afisarea fisierelor';
}else{
	echo'<h2 style="margin-top: 14.5px; margin-left: 170px; font-family: consolas; background-color: white; color:#00bfff; background-color: white; z-index: 1; position: fixed; padding: 5px" title="Nume folder si baza de date client">'.$_SESSION['tabel'].'</h2>';
	echo"<div style=' border: 3px solid #d8d3d3; width: 1100px; margin-left: 90px; margin-top: 34px; height: 465px; border-radius: 10px; overflow: auto;'>";
	echo'<br>';
	$fisi=$_SESSION['tabel'];
	$sql="SELECT fisiere FROM $fisi ORDER BY fisiere ASC";
	$result=mysqli_query($con,$sql);
	if(mysqli_num_rows($result)>0){
	while($row=mysqli_fetch_assoc($result)){
	echo"<div style='width: 94%;
	height: 65px;
	background-color: #f2f2f2;
	border-radius: 10px;
	margin-left: 3%;
	margin-top: 1%;'>";
	echo'<div style="padding-top: 1.9%;">';
	echo '<a target="_black" title="Deschide pagina web intr-o fila noua" style="text-decoration: none; margin-left: 3%; font-family: consolas; color: black; font-size: 20px;" href="'.$_SESSION['tabel'].'/'.$row['fisiere'].'">'.$row['fisiere'].'</a>';
	echo'</div>';
	echo'
	<form method="post" action="edit.php">
	<input name="hid" type="hidden" value='.$row['fisiere'].'>
	<input style="float: right; margin-right: 2%; margin-top: -2.8%; padding:12px;background-color: #00bfff;border:none; width: 100px; font-family: consolas; color: white; cursor: pointer; border-radius: 10px;" type="submit" value="Editeaza" title="Deschide in editor">
	</form>';
	echo'</div>';
	
	
	echo'
	<form method="post" action="delete.php">
	<input name="del" type="hidden" value='.$row['fisiere'].'>
	<input style="float: right; margin-right: 15.5%; margin-top: -4.6%; padding:12px;background-color: #ca1616;border:none; width: 100px; font-family: consolas; color: white; cursor: pointer; border-radius: 10px;" type="submit" value="Sterge" title="Sterge acest fisier">
	</form>';
	
	}
		echo'</div>';
		echo'<h3 style="text-align: center;
	margin-top: 1.5%;
	color: #d8d3d3;
	font-family: consolas;">&copy2019 WEB Studio. All rights reserved!</h3>';
	}elseif(mysqli_num_rows($result)===0){
		Echo'
		<div style="margin-top: -3%"><img src="resurse/logo/null.png" style="margin-left: 42%; width: 95px; height: 95px; margin-top: 140px;" draggable="false"><h1 style="text-align: center; margin-left: 110px; margin-top: -70px; font-family:consolas; color: #00bfff;">Hopa!</h1>
		<p style="text-align: center; font-family: consolas; font-size: 20px;margin-top: 5%; color:#00bfff;">Se pare ca nu aveti niciun fisier in baza de date!</p></div>
		<button onclick="newproject()" title="Creaza un fisier nou" style="margin-top: 7%;
	padding: 17px;
	width: 30%;
	background-color: #00bfff;
	border: none;
	border-radius: 5px;
	color: white;
	font-family: consolas;
	cursor: pointer;
	font-size: 15px;
	margin-left: 34%;">Proiect nou</button>
	'
	;}
		echo'
		</body>
		</html>';
}
?>
		
		
			