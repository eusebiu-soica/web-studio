<?Php session_start();
Echo'
<html>
<head>
<title>Contul meu</title>
<meta name="author" content="Eusebiu Soica">
<meta name="author" content="Eusebiu Soica">
<meta name="viewport" content="width=device-width initial-scale=1.0">
<link rel="shortcut icon" type="image/php" href="resurse/logo/account.png">
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
<td><button style="margin-right: 12%" id="button" onclick="account()"><img src="resurse/logo/account.png" draggable="false" id="header-button"></button></td>
</tr>
<tr>
<td id="td1">Contul meu</td>
</tr>
</table>

<table border="0" id="table3">
<tr>
<td><button onclick="newproject()" style="margin-right: 16%;" id="button"><img src="resurse/logo/new.png" draggable="false" id="header-button" style="transform: scale(0.8); "></button></td>
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
echo' Eroare la accesarea contului';
}else{
echo"<div style=' border: 3px solid #d8d3d3; width: 1100px; margin-left: 90px; margin-top: 34px; height: 500px; border-radius: 10px; overflow: auto;'>";

	$fisi=$_SESSION['tabel'];
	$sql="SELECT * FROM utilizatori WHERE tabel='$fisi'";
	$result=mysqli_query($con,$sql);
	if(mysqli_num_rows($result)>0){
	while($row=mysqli_fetch_assoc($result)){
		echo'<h2 style="font-family: verdana; margin-top: 7%; text-align: center;">Bun venit,<span style="color:#00bfff"> '.$row['Prenume'].'</span></h2>';
	echo'<center>';
	echo'<form method="post" action="r.php">
<div style="padding-top:7%;">
<input type="text" name="nume" placeholder="Nume si Prenume" value="'.$row['Prenume'].'" style="width: 60%;
	font-family: verdana;
	height: 13%;
	padding-left: 2%;
	border:3px solid #eae6e6;
	background-color: #f2f2f2;
	border-radius: 5px;
	margin-top: 1%;"></input>
<br>
<input type="text" name="email" placeholder="Adresa de email" value="'.$row['Email'].'" style="width: 30%;
	font-family: verdana;
	height: 13%;
	padding-left: 2%;
	border:3px solid #eae6e6;
	background-color: #f2f2f2;
	border-radius: 5px;
	margin-top: 1%;"></input>
	
<input type="text" name="parola" placeholder="Parola" value="'.$row['Parola'].'"style="width: 30%;
	font-family: verdana;
	height: 13%;
	padding-left: 2%;
	border:3px solid #eae6e6;
	background-color: #f2f2f2;
	border-radius: 5px;
	margin-top: 1%;"></input>
<br>
<input type="submit" value="Actualizeaza datele" style="margin-top: 3%;
	padding: 17px;
	width: 25%;
	margin-left: 28%;
	background-color: #00bfff;
	border: none;
	border-radius: 5px;
	color: white;
	font-family: consolas;
	cursor: pointer;
	font-size: 15px;"></input><br>';
	echo'</center>';
	echo'</form>';
	}
	
	}

	echo'<form action="renamename.php" method="post">';
	echo'<input type="submit" value="Sterge contul" style="margin-top: -4.7%;
	padding: 17px;
	width: 25%;
	background-color: #ca1616;
	border: none;
	border-radius: 5px;
	color: white;
	font-family: consolas;
	cursor: pointer;
	font-size: 15px;
	margin-left:23%;"></input>';
	echo'</form>';

echo'</div>';
echo"</div>";
echo'<h3 style="text-align: center;
	margin-top: 1.5%;
	color: #d8d3d3;
	font-family: consolas;">&copy2019 WEB Studio. All rights reserved!</h3>';
	
	echo'</body>';
	echo'</html>';
}
?>