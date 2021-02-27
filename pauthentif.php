<?php
try
{
	$bdd=new PDO("mysql:host=localhost;dbname=facesitedbd","root","");
	
}
catch(exception $e){
	die('erreur   :'.$e -> getMessage());
}
if((isset($_GET['inscri'])) AND (isset($_GET['email'])) AND (isset($_GET['motdepasse']))){
	$email=$_GET['email'];
	$motdepasse=$_GET['motdepasse'];
	

}
$req=$bdd -> query('SELECT * FROM compte');
$reponse=$req->fetch();
if(($reponse['email'] == $email) AND ($reponse['motdepasse'] == $motdepasse)){
	include('acceil.php');
}
else{
	include('authentif.php');
}
?>