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
$req=$bdd -> prepare('SELECT COUNT(*) FROM comptee WHERE email = ? AND motdepasse = ?');
$req ->execute(array($email , $motdepasse));

//$reponse=$req->fetch();
$number=$req -> fetchcolumn();
//if(($reponse['email'] == $email) AND ($reponse['motdepasse'] == $motdepasse)){
if($number > 0){
	include('acceil.php');

}
else{
	include('authentif.php');
}

/*$db='C:\wamp64\www\facesite\facesitedb.mdb';
if (!file_exists($db)) {
	# code...
	die('erreur de trouver sa');
}
else{
	echo "suuccess";
}
$db=new PDO("odbc: DRIVER={Microsoft Access Driver (*.mdb)}; Dbq=$db;");
/*
echo "hell word";
$connection = odbc_connect('facesitedb', "raouf","raouf" );

if(!$connection){
	echo "erreur";
}*/
?>