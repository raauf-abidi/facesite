
<!DOCTYPE html>
<html>
<head>
	<title>authentif</title>
	<meta charset="utf-8">
	<style type="text/css">
body	{
	margin: 0;
}	
		.pdiv{
	width: 100%;
	height: 600px;
	position: relative;
	background-color: rgb(228,228,228);
}

.pdiv .pddiv{
	width: 25%;
	height: 300px;
	position: absolute;
	left: 38%;
	top: 150px;
	background-color: white;
	border-radius: 4px;
}
@media (max-width: 679px){
	.pdiv .pddiv{
		width: 99%;
		height: 300px;
		position: absolute;
		top: 33px;
		left: 1px;
		
		border-radius: 0;
	}
}
.pdiv .pddiv form input{
	width: 300px;
	height: 40px;
	margin-left: 17px;
	border-radius: 2px;
	border-width: 0.2px;
	border-color: rgb(228,228,228);
	text-transform: capitalize;
	word-spacing: 1px;
	font-size: 16px;
}
@media (max-width: 679px){
	.pdiv .pddiv form input{
		width: 70%;
		
		
		font-size: 12px;
		word-spacing: 0.2px;
	}
}
.pdiv .pddiv p a{
	color: blue;
	margin-left: 30%;
}
.pdiv .pddiv button {
	position: absolute;
	left: 30%;
	bottom:  10px;
	background-color: rgb(0,236,60);
	height: 40px;
	border-style: none;
	width: 140px;
	text-transform: capitalize;
	font-size: 14px;
	color: white;
	font-weight: bold;

}
.enreg{
	background-color: rgb(0,128,192);
	font-size: 20px;
	font-weight: bold;
	color: white;
	text-transform: capitalize;
}
.pdiv .pp{
	position: absolute;
	left: 37%;
	bottom: 50px;
	text-transform: capitalize;
	font-size: 12px;
	font-weight: bold;
	width: 25%;
	word-spacing: 3px;
	text-align: center;
}
@media (max-width: 679px){
	.pdiv .pp{
		position: absolute;
		left: 20%;
		bottom: 20%;
		width: 60%;
	}
}
.pp a{
	font-size:18px; 
}
.ddiv ul {
	column-count: 9;
	list-style-type: none;
	width: 90%;
	column-width: 30px;
}
@media (max-width: 679px){
	.ddiv ul{
		column-count: 4;
	}
}
.ddiv ul li a{
	text-decoration: none;
	color: rgb(144,144,144);

}
.ddiv ul li button{
	background-color: rgb(0,236,60);
	border-style: none;
}
	</style>
</head>
<body onload="pdesign()">

<div class="pdiv">
	
	<div class="pddiv" id="pddiv">
		<form  method="GET" name="f" id="fromm">
			<input type="text" name="email" placeholder="adresse e-mail ou numéro de tél" id="email" required onmousemove ="edesign(this)" onmouseout ="invdesign(this)">
			<br>
			<span id="espan"></span>
			<br>
			<br>
			<input type="password" name="motdepasse" placeholder="mot de passe" id="motdepasse" required onmousemove ="edesign(this)" onmouseout ="invdesign(this)">
			<span id="mspan"></span>

			<br>
			<br>
			<input type="submit" name="inscri" value="connexion" class="enreg" id="boutonenvoie" onmouseover="dbutton(this)" onmouseout="fbutton(this)">
			</form>
			<p><a href="" id="pl" onmouseover="dpl(this)" onmouseout="fpl(this)">mot de passe oublier?</a></p>
			<br>
			<hr>
			<br>
			<br>
			<button onmouseover="dinscri(this)" onmouseout="finscri(this)">créer un compte</button>

			
		
	</div>

	<p class="pp"> <a href="" id="dl" onmouseover="dpl(this)" onmouseout="fpl(this)">Créer une Page</a> pour une célébrité, un groupe ou une entreprise.</p>
</div>
<div class="ddiv">
	<ul>
		<li>Francais (France)</li>
		<li><a href="" onmouseover="dlist(this)" onmouseout="flist(this)">arabe</a></li>
		<li><a href="" onmouseover="dlist(this)" onmouseout="flist(this)">English(US)</a></li>
		<li><a href="" onmouseover="dlist(this)" onmouseout="flist(this)">italiano</a></li>
		<li><a href="" onmouseover="dlist(this)" onmouseout="flist(this)">Deutsh</a></li>
		<li><a href="" onmouseover="dlist(this)" onmouseout="flist(this)">Espanol</a></li>
		<li><a href="" onmouseover="dlist(this)" onmouseout="flist(this)">Portuges(Brasil)</a></li>
		<li><a href="" onmouseover="dlist(this)" onmouseout="flist(this)">chine(China)</a></li>
		<li><button onmouseover="dlistb(this)" onmouseout="flistb(this)">plus</button></li>

	</ul>
	<hr>
</div>
	<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">
	var email=document.getElementById('email');
	var motdepasse=document.getElementById('motdepasse');
	var espan=document.getElementById('espan');
	var mspan=document.getElementById('mspan');
	var boutonenvoie=document.getElementById('boutonenvoie');
	boutonenvoie.addEventListener('click',valide);
	function valide(){
		if(email.validity.valueMissing){
			event.preventDefault();
			espan.textContent="inserer votre email";
			espan.style.color="red";
			$(document).ready(function(){
				$('#email').trigger('focus');
			});
		}
		else{
			espan.textContent="";
			espan.style.color="white";
		}
		if(motdepasse.validity.valueMissing){
			event.preventDefault();
			mspan.textContent="inserer votre mot de passe";
			mspan.style.color="red";
			$(document).ready(function(){
				$('#motdepasse').trigger('focus');
			});
		}
		else{
			mspan.textContent="";
			mspan.style.color="white";
		}
	}

	function pdesign(){
	var pddiv=document.getElementById('pddiv');
	var pl=document.getElementById('pl');
	var dl=document.getElementById('dl');
	pddiv.style.boxShadow="2px 2px 2px rgb(120,120,120)";
	pl.style.textDecoration ="none";
	pl.style.textTransform ="capitalize";
	pl.style.fontVariant="small-caps";
	dl.style.textDecoration ="none";
}
function edesign(e){
	e.style.borderColor="rgb(0,128,255)";
}
function invdesign(e){
	e.style.borderColor="black";
}
function dbutton(e){
	e.style.backgroundColor="rgb(0,102,151)";
}
function fbutton(e){
	e.style.backgroundColor="rgb(0,128,192)";
}
function dpl(e){
	e.style.textDecoration ="underline";
}
function fpl(e){
	e.style.textDecoration ="none";
}
function dinscri(e){
	e.style.backgroundColor="rgb(0,185,47)";
}
function finscri(e){
	e.style.backgroundColor="rgb(0,236,60)";
}
function dlist(e){
	e.style.textDecoration ="underline";
}
function flist(e){
	e.style.textDecoration ="none";
}
function dlistb(e){
	e.style.backgroundColor="rgb(0,185,47)";
}
function flistb(e){
	e.style.backgroundColor="rgb(0,236,60)";
}
</script>
<?php
try{
$bdd=new PDO("mysql:host=localhost;dbname=facesitedbd","root","");

}
catch(exception $e)
{
	die("erreur   :".$e -> getMessage());
}
if((isset($_GET['inscri'])) AND (isset($_GET['email'])) AND (isset($_GET['motdepasse']))){
	$email=$_GET['email'];
	$motdepasse=$_GET['motdepasse'];
	

}
$req=$bdd -> prepare('SELECT COUNT(*) FROM comptee WHERE email = ? ');
$req ->execute(array($email ));
$existemail=$req -> fetchcolumn();
$req1=$bdd -> prepare('SELECT COUNT(*) FROM comptee WHERE motdepasse = ? ');
$req1 ->execute(array($motdepasse ));
$existpasse=$req1 -> fetchcolumn();
if(($existemail > 0) AND ($existpasse > 0)){
	?>
	<script type="text/javascript">
		var from=document.getElementById('fromm');
		from.action ='acceil.php';
	</script>
	<?php
}
elseif(($existemail > 0) AND ($existpasse == 0)){
	?>
	<script type="text/javascript">
		var mspan=document.getElementById('mspan');
		var motdepasse=document.getElementById('motdepasse');
		mspan.textContent='veiller verifier votre mot de passe ';
		mspan.style.color="red";
		motdepasse.style.borderColor="red";
	</script>
	<?php
}
elseif (($existemail == 0) AND ($existpasse > 0)) {
	?>
	<script type="text/javascript">
		var nea=document.createElement('a');
		nea.href="formulaire-dinscri-facebook.php";
		nea.id="lienid"
		nea.textContent="veiller creer un compte"
		nea.style.color="red";
		nea.style.textDecoration="none";
		nea.style.fontWeight="bold";

		var espan=document.getElementById('espan');
		var email=document.getElementById('email');
		espan.textContent='veiller verifier votre email  ';
		espan.append(nea);
		espan.style.color="red";
		email.style.borderColor="red";
		$(document).ready(function(){
			$('#lienid').mouseover(function(){
				this.css('textDecoration','underline');
			});
		});
	</script>
	<?php
}
else{
	?>
	<script type="text/javascript">
		var espan=document.getElementById('espan');
		var email=document.getElementById('email');
		espan.textContent='veiller verifier votre email';
		espan.style.color="red";
		email.style.borderColor="red";
		var mspan=document.getElementById('mspan');
		var motdepasse=document.getElementById('motdepasse');
		mspan.textContent='veiller verifier votre mot de passe';
		mspan.style.color="red";
		motdepasse.style.borderColor="red";
	</script>
	<?php
}



?>
</body>
</html>

