<!DOCTYPE html>
<html>
<head>
	<title>fenetre-inscri</title>
	<meta charset="utf-8">
	<style type="text/css">
		.ddiv {
			width: 100%;
			position: relative;
			height: 630px;
			background-color: rgb(187,187,255);
		}
		.ddiv form{
			position: absolute;
			left: 35%;
			width: 50%;
		}
		.ddiv .ddpp{
			font-size: 35px;
			font-weight: bold;
			letter-spacing: 0.2px;
			word-spacing: 1px;
			text-indent: 3px;
			margin-top: 3px;
			height: 20px;
			text-transform: capitalize;

		}
		.ddiv .dddp{
			font-size: 25px;
			font-weight: bold;
			letter-spacing: 0.2px;
			word-spacing: 1px;
			color: rgb(92,92,92);
			margin-top: 12px;
		}
		.ddiv input{
			height: 33px;
			border-style: solid;
			border-width: 0.3px;
			border-color: rgb(122,122,122);
			color: rgb(112,112,112);
			text-transform: capitalize;
			font-size: x-large;
			text-indent: 3px;
		}
		#pin{
			width: 220px;
		}
		#din{
			width: 220px;
		}
		#tin{
			width: 450px;
		}
		#kin{
			width: 450px;
		}
		.ddn{
			font-weight: bold;
			font-size: medium;
			color: rgb(112,112,112);
			text-transform: capitalize;
		}
	.qspan{
		background-color:  rgb(112,112,112);
		color: white;
		width: 20px;
		height: 20px;
		position: absolute;
		right: 60%;
		text-align: center;
		border-radius: 50%;
	}
	.genre{
		font-weight: bold;
		font-size: medium;
		color: rgb(112,112,112);
		text-transform: capitalize;


	}
	.politique{
		width: 60%;
		color: rgb(61,61,61);
	}
	.submit{
		background-color: rgba(0,81,0,0.9);
		width: 30%;
		height: 60px;
		border-style: none;
		border-radius: 4%;
		color: rgb(255,255,255);
		text-transform: capitalize;

	}
	#retour{
		text-decoration: none;
		color: white;
	}
	.politique a{
		text-decoration: none;
		color: blue;
	}
	.tdiv ul {
	column-count: 9;
	list-style-type: none;
	width: 90%;
	column-width: 30px;
}
.tdiv ul li a{
	text-decoration: none;
	color: rgb(144,144,144);

}
.tdiv ul li button{
	background-color: rgb(0,236,60);
	border-style: none;
}
.nomspan{
	position: absolute;
	left: 20%;
	top: 18%;
	height: 30px;
	background-color: rgb(255,121,121);
	width: 180px;
	border-color: red;
	font-weight: bold;
	text-indent: 4px;
	padding-top: 6px;
	color: red;


}
.prenomspan{
	position: absolute;
	left: 70%;
	top: 18%;
	background-color: rgb(255,121,121);
	width: 220px;
	border-color: red;
	font-weight: bold;
	height: 30px;
	padding-top: 6px;
	color: red;
	
}
.emailspan{
	position: absolute;
	left: 20%;
	top: 27%;
	background-color: rgb(255,121,121);
	width: 180px;
	border-color: red;
	font-weight: bold;
	height: 30px;
	padding-top: 6px;
	color: red;
	

}
.pswdspan{
	position: absolute;
	left: 20%;
	top: 36%;
	background-color: rgb(255,121,121);
	width: 180px;
	border-color: red;
	font-weight: bold;
	height: 30px;
	padding-top: 6px;
	color: red;

}
.ddnspan{
	position: absolute;
	left: 20%;
	top: 49%;
	background-color: rgb(255,121,121);
	width: 180px;
	border-color: red;
	font-weight: bold;
	height: 26px;
	padding-top: 3px;
	color: red;

}
.genrespan{
	position: absolute;
	left: 20%;
	top: 60%;
	background-color: rgb(255,121,121);
	width: 180px;
	border-color: red;
	font-weight: bold;
	height: 26px;
	padding-top: 3px;
	color: red;

}
#tableexist{
	position: absolute;
	right: 25%;
	top: 30px;
	color: white;
	font-weight: bold;


}
#submitexist{
	position: absolute;
	top: 55px;
	right: 15%;
	color: white;
	font-weight: bold;
	background-color: rgb(63,72,204);
}

	</style>
</head>
<body onload="jour() , annee() , mois() , depart() , spanhide()">
	<script type="text/javascript" src="C:\Users\mohamed\Desktop\jeu\portfolio\java script\jquery.js"></script>
	<script type="text/javascript">
		
		function depart(){
			var tableexist=document.getElementById('tableexist');
		var submitexist=document.getElementById('submitexist');
			tableexist.style.display="none";
			submitexist.style.display="none";
		}
		function show(){
			var tableexist=document.getElementById('tableexist');
		var submitexist=document.getElementById('submitexist');
		var pbouton=document.getElementById('pbouton');
			tableexist.style.display="";
			submitexist.style.display="";
			pbouton.style.display="none";
		}
		
	</script>
	<script type="text/javascript">
		alert(f.c[0].checked);
		
		var pbouton=document.getElementById('pbouton');
		
		function transform(e){
			
			e.style.backgroundColor="rgb(0,0,70)";
			e.style.boxShadow="2px , 2px, 1px";
		}
		
		pbouton.addEventListener('mouseout',transformm);
		function transformm(e){
			e.style.backgroundColor="rgb(0,0,240)";
			e.style.boxShadow="none";
		}
		function inscri(e){
			e.style.backgroundColor="rgb(0,43,0)";
		}
		function disinscri(e){
			e.style.backgroundColor="rgba(0,81,0,0.9)";
		}
	</script>
<div class="ddiv">
	<span class="nomspan" id="nomspan"></span>
	<span class="prenomspan" id="prenomspan"></span>
	<span class="emailspan" id="emailspan"></span>
	<span class="pswdspan" id="pswdspan"></span>
	<span class="ddnspan" id="ddnspan"></span>
	<span class="genrespan" id="genrespan"></span>
	<form name="f" action="" method="get">
	<p class="ddpp">créer un compte</p>
	<p class="dddp">c'est rapide et facile</p>
	<input type="text" name="prenom" placeholder="prénom" id="pin">
	<input type="text" name="nomdefamille" placeholder="nom de famille" id="din">

	<br>
	<br>
	<input type="text" name="email" placeholder="numero de mobile ou email" id="tin">
	<br>
	<br>
	<input type="password" name="pswd" placeholder="nouveau mot de passe" id="kin">
	<p class="ddn">date de naissance</p>
	<select id="jour">
		
	</select>
	<select id="mois" >
		
	</select>
	<select id="annee" >
		
	</select>      <span class="qspan">  ? </span>
	<p class="genre">genre</p>
	<input type="radio" name="r" value="femme" >femme
	<input type="radio" name="r" value="femme">homme
	<input type="radio" name="r" value="personalise">personalise         <span class="qspan">  ? </span>
	<p class="politique" >En appuyant sur S’inscrire, vous acceptez nos <a href="" id="politique" onmouseover="trans(this)" onmouseout="transi(this)">Conditions générales</a>, notre <a href="" id="politique" onmouseover="trans(this)" onmouseout="transi(this)">Politique d’utilisation des données</a> et notre <a href="" id="politique" onmouseover="trans(this)" onmouseout="transi(this)">Politique d’utilisation des cookies</a>. Vous recevrez peut-être des notifications par texto de notre part et vous pouvez à tout moment vous désabonner.</p>
	<br>
	
	
	<input type="submit" name="submit" value="s'inscrire" class="submit" id="boutonenvoi" onmouseover="inscri(this)" onmouseout="disinscri(this)">
	</form>
</div>
<script type="text/javascript">
	function jour(){
	var jour=document.getElementById('jour');
	var date=new Date();
	var jouractuel=date.getDate();
	
	for(var i=1 ; i<=31;i++){
		var ne=document.createElement('option');
		ne.value=i;
		ne.textContent=i;
		jour.appendChild(ne);
	}
	jour.selectedIndex=jouractuel;
}

function mois(){

	var mois=document.getElementById('mois');
		
	var tab=['janvier','fevrier','mars','avril','may','juin','juiliet','out','septembre','october','november','december'];
	var date=new Date();
	var moisactuel=date.getMonth();


	for(var i=0;i<12;i++){

		var ne=document.createElement('option');
		ne.value=tab[i];
		ne.textContent=tab[i];
		mois.appendChild(ne);

	}
	mois.selectedIndex=moisactuel;
}
function annee(){
	var annee=document.getElementById('annee');
	var date=new Date();
	var anneactuel=date.getFullYear();
	for(var i=1986 ; i<=anneactuel;i++){
		var nee=document.createElement('option');
		nee.value=i;
		nee.textContent=i;
		annee.appendChild(nee);
		if(i==anneactuel){
			annee.selectedIndex=anneactuel-1986;
		}
	}
	
}


var boutonenvoi=document.getElementById('boutonenvoi');
var pin=document.getElementById('pin');
var din=document.getElementById('din');
var tin=document.getElementById('tin');
var kin=document.getElementById('kin');
var nomspan=document.getElementById('nomspan');
	var prenomspan=document.getElementById('prenomspan');
	var emailspan=document.getElementById('emailspan');
	var pswdspan=document.getElementById('pswdspan');
	var ddnspan=document.getElementById('ddnspan');
	var genrespan=document.getElementById('genrespan');
boutonenvoi.addEventListener('click',validation);
function validation(){
	if (pin.value.length==0) {
		
		event.preventDefault();
		nomspan.textContent="inserer votre nom";
		pin.style.borderColor="red";
		nomspan.style.display="";
	}
	else{
		nomspan.textContent="";
		nomspan.style.display="none";
	}
	if (din.value.length==0) {
		
		event.preventDefault();
		prenomspan.textContent="inserer votre nom de famille";
		din.style.borderColor="red";
		prenomspan.style.display="";
	}
	else{
		prenomspan.textContent="";
		prenomspan.style.display="none";
	}
	if (tin.value.length==0) {
		
		event.preventDefault();
		emailspan.textContent="inserer votre email";
		tin.style.borderColor="red";
		emailspan.style.display="";
	}
	else{
		emailspan.textContent="";
		emailspan.style.display="none";
	}
	if (kin.value.length==0) {
		
		event.preventDefault();
		pswdspan.textContent="inserer votre mot de passe";
		kin.style.borderColor="red";
		pswdspan.style.display="";
	}
	else{
		pswdspan.textContent="";
		pswdspan.style.display="none";
	}

	
	
}
alert(r['homme']);
function spanhide(){
	var nomspan=document.getElementById('nomspan');
	var prenomspan=document.getElementById('prenomspan');
	var emailspan=document.getElementById('emailspan');
	var pswdspan=document.getElementById('pswdspan');
	var ddnspan=document.getElementById('ddnspan');
	var genrespan=document.getElementById('genrespan');
	nomspan.style.display="none";
	prenomspan.style.display="none";
	emailspan.style.display="none";
	pswdspan.style.display="none";
	ddnspan.style.display="none";
	genrespan.style.display="none";

}
</script>
</body>
</html>