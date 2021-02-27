<?php
try{
$bdd=new PDO("mysql:host=localhost;dbname=facesitedb","root","");
echo "succes";
}
catch(exception $e)
{
	die("erreur   :".$e -> getMessage());
}
include('index.php');
?>

