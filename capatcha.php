<?php
session_start();
if(isset($_GET['submit'])){
	if(!empty($_GET['prenom']) AND !empty($_GET['nomdefamille']) AND !empty($_GET['email']) AND !empty($_GET['pswd'])){
		$prenom=htmlspecialchars($_GET['prenom']);
		$nomdefamille=htmlspecialchars($_GET['nomdefamille']);
		$email=htmlspecialchars($_GET['email']);
		$pswd=htmlspecialchars($_GET['pswd']);
		$_SESSION['prenom']=$prenom;
		$_SESSION['nomdefamille']=$nomdefamille;
		$_SESSION['email']=$email;
		$_SESSION['pswd']=$pswd;

	
}else{
	echo "veiller saisir vos information";
}
}


?>
<!DOCTYPE html>
<html>
<head>
	<title>capatcha</title>
	<meta charset="utf-8">
	<style type="text/css">
		body{
			margin: 0;
		}
		.pp{
			text-transform: capitalize;
			position: relative;
			top: 30px;
			text-align: center;
			font-size: x-large;
			word-spacing: 2px;
		}
		.pdiv{
			width: 80%;
			height: 200px;
			position: relative;
			left: 10%;
			top: 80px;
			background-color: rgb(173,173,173);
		}
		.pdiv .espacetexte{
			position: absolute;
			width: 40%;
			height: 50px;
			left: 30%;
			top: 30px;
			background-color: rgb(200,200,200);
			border-color: black;
			border-style: outset;
			color: blue;
			font-size: x-large;
			letter-spacing: 1px;
			font-weight: bold;
			text-align: center;
			font-style: italic;
			padding-top: 10px;
		}
		.pdiv .resaisir{
			position: absolute;
			width: 80px;
			text-transform: capitalize;
			height: 20px;
			left: 30%;
			top: 90px;
			background-color: rgb(51,200,249);

		}
		.pdiv .repeat{
			position: absolute;
			width: 30%;
			height: 25px;
			left: 30%;
			top: 120px;
			background-color: rgb(222,222,222);
			color: black;
			font-size: medium;
			text-align: center;
		}
		.pdiv .submit{
			position: absolute;
			background-color: rgb(0,198,50);
			width: 80px;
			left: 50%;
			top: 170px;
			text-transform: uppercase;
			letter-spacing: 0.1px;

		}
	</style>
</head>
<body onload="capatcha()">
<p class="pp">pour des raison de sécuritée veiller completer ce capatcha</p>
<div class="pdiv">
	<form method="get" action="saisir-image.php" name="f">
		<textarea class="espacetexte" id="espacetexte"></textarea>
		<br>
		<button class="resaisir" id="resaisir">resaisir</button>
		<br>
		<br>
		<input type="text" name="repeat" class="repeat" id="repeat">
		<br>
		<br>
		<input type="submit" name="submit" id="submit" class="submit">
	</form>
	<script type="text/javascript">
		var espacetexte=document.getElementById('espacetexte');
		function aleatoir(min , max){
			return Math.floor(Math.random()* (max - min +1)) +min;
		}
		
		var resaisir=document.getElementById('resaisir');
		resaisir.addEventListener('click',recapatcha);
		function capatcha(){
			var ch="";
			var number;
			for(var i=0 ;i<5; i++){

				var number=aleatoir(65 , 97);
				sch=String.fromCharCode(number);
				
				ch=ch + sch ;
			}
			espacetexte.textContent=ch;
		}
		var submit=document.getElementById('submit');
		var repeat=document.getElementById('repeat');
		submit.addEventListener('click', verif);
		function verif(e){
			if(repeat.value != espacetexte.value){
				e.preventDefault();
				repeat.style.borderColor="red";
				alert('votre capatcha mal saisissez');
			}
			else{
				repeat.style.borderColor="green";
			}
		}
		function recapatcha(e){
			capatcha();
			e.preventDefault();
		}

	</script>
</div>
</body>
</html>