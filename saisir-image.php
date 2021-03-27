<?php
session_start();
$prenom=$_SESSION['prenom'];
try{
$bd=new PDO('mysql:host=localhost;dbname=facesitedbd',"root","");

}
catch(exception $e){
	die("erreur".$e -> getmessage() );
}

if(isset($_GET['submit'])){
	
	if(isset($_FILES['image']) AND ($_FILES['image']['erreur']== 0)){

		echo "hello ";
$reqinsertion=$bd->prepare('INSERT INTO image (id , nom , taille , type , bin) VALUES (2 , ? , ? , ? ,? )');
$reqinsertion-> execute(array($_FILES['image']['name'], $_FILES['image']['size'] , $_FILES['image']['type'] , File_get_contents($_FILES['image']['tmp_name'])));

}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>saisir-image</title>
	<meta charset="utf-8">
	<style type="text/css">
		body{
			margin: 0;
		}
		.pdiv{
			background-color: blue;
			width: 100%;
			height: 100px;
			position: relative;
			top: 0;

		}
		.pdiv p{
			text-transform: capitalize;
			position: absolute;
			left: 5px;
			color: white;
			width: 35%;
			text-align: center;
			font-size: medium;
			letter-spacing: 1px;
			word-spacing: 2px;
			margin-top: 40px;

		}
		.pdiv a{
			position: absolute;
			right: 12px;
			margin-top: 40px;
			color: white;
			text-transform: capitalize;
			letter-spacing: 0.5px;
			text-decoration: none;
		}
		.ddiv{
			position: relative;
			width: 100%;
			height: 300px;

		}
		.pp{
			text-transform: capitalize;
			letter-spacing: 0.2px;
			word-spacing: 1px;
			font-size: x-large;
			text-align: center;
			position: absolute;
			width: 70%;
			left: 15%;
		}
		.ddiv form{
			position: absolute;
			top: 150px;
			width: 50%;
			left: 25%;
		}
		.submit{
			width: 380px;
			background-color: blue;
			color: white;
			text-align: center;
			text-transform: capitalize;
			height: 30px;
		}
		.pspan{
			color: black;
			font-size: x-large;

		}


	</style>
	
</head>
<body>
<div class="pdiv">
	<p>ajouter un photo</p>
	<a href="hello-page.php">suivant</a>
</div>
<div class="ddiv">
	<p class="pp">il y a plus de <i><?php

	$req=$bd->prepare('SELECT COUNT(*) FROM comptee WHERE nomutilis=?');
	$req->execute(array($prenom));
	
	$nombrenom=$req-> fetchcolumn();
	echo "$nombrenom";?></i>
	<i><?php echo $prenom;?></i>
	sur facebook . ajouter une photo de profil pour aider vos amis a vous reconnaaitre.

	</p>
	<form method="get" action="" name="f" enctype="multipart/form-data" onchange="type()">
		<input type="file" name="image" id="fichier" >
	
	<br>
	<br>
	<input type="submit" name="submit" value="ajouter un photo" class="submit">
	<br>
	<span class="pspan">la photo de profil est toujours publiques</span>
	</form>
</div>
<script type="text/javascript">
	
	function type(){
		
	var typ=document.getElementById('fichier').files[0].type;
	alert(typ);
}
</script>
</body>
<?php
if(isset($_FILES['fichier']) AND $_FILES['fichier']['error'] == 0)
{
	if ($_FILES['fichier']['size'] <= 1000000) {
		$information = pathinfo ($_FILES['fichier']['name']);
		$extensi = $information['extension'];
		$exautaurise=  array('png' ,'jpg' );
		if (in_array($extensi, $exautaurise)) {
			move_uploaded_file($_FILES['fichier']['tmp_name'], 'uploads/' .basename($_FILES['fichier']['name']));
			echo "image enregistrer avec succe";
		}
	}
}
?>
</html>