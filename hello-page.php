<?php
session_start();
try
{
	$bdd=new PDO("mysql:host=localhost;dbname=facesitedbd","root","");
	
}
catch(exception $e){
	die('erreur   :'.$e -> getMessage());
}
echo "hello word";
if(isset($_GET['submit'])){

	if(isset($_FILES['image']) AND ($_FILES['image']['erreur']== 0)){

		include('hello-page.php');
$reqinsertion=$bd->prepare('INSERT INTO image (nom , taille , type , bin) VALUES (1,? , ? , ? ,? , 2)');
$reqinsertion-> execute(array($_FILES['image']['name'], $_FILES['image']['size'] , $_FILES['image']['type'] , File_get_contents($_FILES['image']['tmp_name'])));
	
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>hello-page</title>
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
			border-style: solid;
			width: 100%;
			height: 150px;
			position: relative;
			background-color: rgb(15,135,255);
			border-color: white;
		}
		.ddiv img{
			position: absolute;
			left: 0;
			top: 0;
			height: 150px;
			width: 150px;
		}
		.ddiv p{
			position: absolute;
			left: 250px;
			top: 60px;
			width: 200px;

		}
		.ajouter{
			position: absolute;
			right: 100px;
			top: 60px;
			width: 120px;
			background-color: blue;
			text-transform: capitalize;
			color: white;
		}
		.pspan{
			width: 30px;
			height: 30px;
			background-color: red;
			color: black;
			text-decoration: none;

		}
	</style>
</head>
<body>
<div class="pdiv">
	<p>ajouter des amies</p>
	<a href="page-principal.php">suivant</a>
</div>
<?php
if(isset($_GET['page'])){
	$page=$_GET['page'];
}
else{
	$page=1;
}
$perpage=3;
$debut=$perpage * $page -$perpage;
$req=$bdd->query('SELECT * FROM comptee LIMIT '.$debut.','.$perpage);

while ($reponse= $req-> fetch()) {
	?>
	<div class="ddiv">
		<img src="covid19.jpg">
		<p><?php echo $reponse["nomutilis"]; ?> </p>
		
		<form action="hello-page.php" action="get" name="f">
						
			<input type="submit" name="submit" value="ajouter" class="ajouter">
			<input type="hidden" name="personne" value=<?php echo $reponse['nomutilis'] ; ?>>

		</form>
	</div>
	<?php
}
if(isset($_GET['submit'])){
	
	$personne=$_GET['personne'];
	echo 'ceci est le champ hidden   '.$personne;
	
}

$req2=$bdd-> query('SELECT COUNT(*) FROM comptee ');
$nombretotal=$req2-> fetchcolumn();
$nbpage=floor($nombretotal / $perpage);
for($i=1;$i<=$nbpage; $i++){
	?>
	<span class="pspan"><a href="hello-page.php?page=<?php echo $i; ?>"><?php echo $i;?></a></span>
	<?php
}
?>
</body>
</html>