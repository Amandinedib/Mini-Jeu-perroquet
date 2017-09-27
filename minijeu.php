<!DOCTYPE html>
<html>
<head>
	<title>Mini jeu</title>
	<style type="text/css">
	body{text-align: center;}
		form{
			width: 450px;
			height: 290px;
			background-color: olive;
			margin-right: auto;
			margin-left: auto;
			border-radius: 10px 10px 0px 0px;
			margin-top:-3px;
		}
		.nouvellePartie{
			width: 450px;
			height: 50px;
			background-color: olive;
			font-family: tahoma;
			color: olive;
			text-decoration: none;
			font-weight: bold;
			margin-right: auto;
			margin-left: auto;
			border-radius: 0px 0px 10px 10px;
		}
		.nouvellePartie a{
			color: olive;
			text-decoration: none;
			background-color: white;
			padding: 11px;
			border-radius: 5px;
		}
		.leNombre{
			font-family: tahoma;
			font-size: 20px;
			color: white;
			font-weight: bold;
			padding-top: 20px;
			margin-bottom: 10px;
		}
		.form{
			color: white;
			font-family: tahoma;
		}
		label{
			padding-bottom: 10px;
		}
		#blabla{
			width: 450px;
			margin: 20px;
			background-color: lightgreen;
			

		}
		img{
			width: 130px;
    		margin-top: 24px;
			margin-left: auto;
			margin-right: auto;
		}
		.bouton{
			background-color: white;
			border: none;
			color: olive;
			border-radius: 5px;
			padding: 7px;
		}
		.saisie{
			border: none;
			border-radius: 5px;
			padding: 7px;
			color: olive;
		}
		.resultat{
			width: 350px;
			background-color:#b7b79a; 
			margin-right: auto;
			margin-left: auto;
			border: 3px solid olive;
			border-radius: 10px ;
		}
		.jungle img{
			width: 447px;
			margin-right: auto;
			margin-left: auto;
			margin-bottom: -350px;
		}

	</style>
</head>
<body>

<div class="resultat">
	<?php
	session_start();


	//HISTORIQUE DU JEU
if(isset($_SESSION) && !isset($_SESSION['nb'])){
	$_SESSION['nb'] = rand(0,50);
	$_SESSION['historique']='';
}



// VERIFICATION DE SAISIE EN SESSION
if (isset($_POST['saisie']) && $_POST['saisie'] != '') {
	if ($_SESSION['nb'] > $_POST['saisie']) {
	echo "nombre trop petit <br>";
	$_SESSION['historique'].=$_POST['saisie'] . ": nombre trop petit! <br>";

	}elseif ($_SESSION['nb'] < $_POST['saisie']) {
		echo "nombre trop grand <br>";
		$_SESSION['historique'].=$_POST['saisie'] . ": nombre trop grand! <br>";
	}else
		echo "<strong>Woop Woop ! Tu as trouvé !</strong><br>";
	}else
		echo "Tu dois écrire un nombre !<br>";	

	echo $_SESSION['historique'];
	



	?>

</div>
	<div class="jungle">
		<img src="jungle.png">
	</div>
	<form action="" class="formulaire" method="POST">
	<div class="form">
	<div class="leNombre">
	<?php
	echo $_SESSION['nb'];
	echo '<br>';
	?>
	</div>
		<label>Saisissez un nombre<br></label>
		<br>
		<input type="text" name="saisie" class="saisie" placeholder=" exemple: 125" value="">
		<input class="bouton" type="submit" value="Valider">
	</div>
	<img  class="perroquet" src="perroquet1.png">
	</form>
<div class="nouvellePartie">
<a class="partie" href="decominijeu.php">Nouvelle partie</a>
</div>


</body>
</html>