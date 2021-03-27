
<!DOCTYPE html>
<html>
<head>

	<title>acceil</title>
	<meta charset="utf-8">
	<style type="text/css">
		body{
			margin: 0;
		}
		.pdiv {
			
			position: relative;
			left: 15%;
			width: 70%;
			height: 330px;
			
			background-image: url("covid19.jpg");
		}
		@media (max-width: 679px){
			.pdiv{
				width: 100%;
				height: 200px;
				left: 0;
			}
		}
		.pdiv #bchange{
			width: 230px;
			height: 20px;
			position: absolute;
			right: 7%;
			bottom: 50px;
			background-color: rgb(130,130,130);
			color: black;
			font-weight: bold;
		}
		@media (max-width: 679px){
			.pdiv #bchange{
				width: 180px;
				height: 40px;
				bottom: 30px;
				right: 1%;
			}
		}
		.ppdiv{
			background-image: url("woman_child_window.jpg");
			width: 150px;
			height: 150px;
			position: absolute;
			bottom: 0;
			left: 41%;
			border-radius: 50%;


		}
		@media (max-width: 679px){
			.ppdiv{
				
				left: 30%;
			}
		}
		.nom{
			text-align: center;
			font-weight: bold;

		}
		.bio{
			text-align: center;
			font-size: medium;

		}
		.bio a{
			text-decoration: none;
			color: blue;
		}
		.phr{
			width: 70%;
			left: 15%;
		}
		@media (max-width: 679px){
			.phr{
				width: 100%;
				left: 0;
			}
		}
		table{
			width: 70%;
			position: relative;
			left: 15%;
		}
		@media (max-width: 679px){
			table{
				left: 0;
				width: 100%;
			}
		}
		table tr td a{
			text-decoration: none;
			color: rgb(100,100,100);

		}
		.dhr{
			width: 70%;
			left: 15%;

		}
		@media (max-width: 679px){
			.dhr{
				width: 100%;
				left: 0;
			}
		}
		.actualite{
			background-color: white;
			height: 100px;
			width: 34%;
			position: absolute;
			left: 	49%;
			border-style: solid;
			border-color: rgb(120,120,120);
			border-width: 0.3px;
			border-radius: 5%;


		}
		@media (max-width: 679px){
			.actualite{
				display: none;
			}
		}
		.acthr{
			width: 100%;
			position: absolute;
			top: 44px;
		}
		.actble{
			width: 450px;
			position: absolute;
			left: 3px;
			top: 55px;
		}
		.actble tr td {
			
			background-color: rgb(122,122,122);
			color: white;
			font-weight: bold;
			text-transform: capitalize;
			letter-spacing: 0.2px;
			word-spacing: 0.5px;
			text-align: center;
		}
		.actage{
			width: 50px;
			height: 50px;
			background-color: red;top: 2px;
			left: 3px;
			position: absolute;
			border-radius: 50%;


		}
		.filact{
			width: 380px;
			height: 25px;
			position: absolute;
			right: 11px;
			top: 12px;
			border-style: solid;
			border-width: 0.1px;
			border-radius: 8%;
			color: rgb(80,80,80);
			letter-spacing: 0.2px;
			text-transform: capitalize;
			font-weight: bold;
			background-color: rgb(150,150,150);
		}
		#mod{background-color: rgb(200,200,200);border-radius: 8%;border-style: solid; border-color: black; padding-left: 8px;}
		#rech{background-color: rgb(200,200,200);border-radius: 8%;border-style: solid; border-color: black; padding-left: 8px;}
		#der{background-color: rgb(200,200,200);border-radius: 8%;border-style: solid; border-color: black; padding-left: 8px;}
		#views{background-color: rgb(200,200,200);border-radius: 8%;border-style: solid; border-color: black; padding-left: 8px;}
		.intro{
			width: 32%;
			height: 220px;
			position: absolute;
			left: 15%;
			background-color: white;
			border-radius: 8%;
			border-color: rgb(100,100,100);
			border-style: solid;
			border-width: 0.1px;

		}
		@media (max-width: 679px){
			.intro{
				width: 90%;
				left: 5%;
			}
		}
		.pagepub{
			width: 100%;
			height: 1000px;
			position: relative;
		}
		.titro{
			color: rgb(0,0,0);
			font-weight: bold;
			font-size: 30px;
			letter-spacing: 0.2px;
			height: 12px;

		}
		.pos{
			font-size: 18px;
			letter-spacing: 0.1px;
			height: 12px;
			margin-left: 20px;
		}
		.modinfo{
			width: 300px;
			margin-left: 60px;
			color: black;
			background-color: rgb(200,200,200);
			text-transform: capitalize;
			text-align: center;
			font-size: medium;
			font-weight: bold;

		}
		.ajosir{
			width: 300px;
			margin-left: 60px;
			color: black;
			background-color: rgb(200,200,200);
			text-transform: capitalize;
			text-align: center;
			font-size: medium;
			font-weight: bold;
		}
		.modune{
			width: 300px;
			margin-left: 60px;
			color: black;
			background-color: rgb(200,200,200);
			text-transform: capitalize;
			text-align: center;
			font-size: medium;
			font-weight: bold;
		}
		.publication {
			position: absolute;
			top: 130px;
			left: 49%;
			width: 34%;
			height: 90px;
			background-color: white;
		}
		@media (max-width: 679px){
			.publication{
				width: 90%;
				left: 5%;
				top: 540px;
			}
		}
		.publication .titre{
			text-transform: capitalize;
			font-size: x-large;
			font-weight: bold;
			letter-spacing: 0.2px;

		}
		.publication .glp{
			position: absolute;
			right: 2px;
			top: 10px;
			width: 150px;
			height: 20px;
			background-color: rgb(200,200,200);
			text-transform: capitalize;
			font-weight: bold;
			font-size: x-small;

		}
		.publication .filtre{
			position: absolute;
			right: 160px;
			top: 10px;
			width: 70px;
			height: 20px;
			background-color: rgb(200,200,200);
			text-transform: capitalize;
			font-weight: bold;
			font-size: x-small;

		}
		.publication .vul{
			height: 30px;
			width: 220px;
			margin-left: 4px;
			color: blue;
			font-size: medium;
			font-weight: bold;
			letter-spacing: 0.1px;
			background-color: white;

		}
		.publication .vug{
			height: 30px;
			width: 220px;
			color: blue;
			font-size: medium;
			font-weight: bold;
			letter-spacing: 0.1px;
			background-color: white;
		}
		.photo{
			width: 32%;
			height: 100px;
			background-color: white;
			position: absolute;
			left: 15%;
			top: 250px;
			border :0.2px solid rgb(100,100,100);
			border-radius: 8%;
		}
		@media (max-width: 679px){
			.photo{
				width: 90%;
				left:5%;

			}
		}
		.photo .titrephoto{
			font-weight: bold;
			font-size: x-large;
			letter-spacing: 0.1px;

		}
		.photo .glph{
			font-weight: bold;
			font-size: x-large;
			letter-spacing: 0.1px;
			position: absolute;
			right: 2px;
			color: rgb(80,80,80);

			
		}
		.amie{
			width: 32%;
			height: 100px;
			background-color: white;
			position: absolute;
			left: 15%;
			top: 380px;
			border :0.2px solid rgb(100,100,100);
			border-radius: 8%;
		}
		@media (max-width: 679px){
			.amie{
				width: 90%;
				left: 5%;
			}
		}
		.amie .titreami{
			font-weight: bold;
			font-size: x-large;
			letter-spacing: 0.1px;

		}
		.amie .glamie{
			font-weight: bold;
			font-size: x-large;
			letter-spacing: 0.1px;
			position: absolute;
			right: 2px;
			color: rgb(80,80,80);

			
		}
		.statu{
			position: absolute;
			top: 255px;
			left: 49%;
			width: 34%;
			height: 280px;
			background-color: rgb(159,255,255);
			border-style: solid;
			border-width: 0.2px;
			border-radius: 4%;
			

		}
		@media (max-width: 679px){
			.statu{
				width: 90%;
				left: 5%;
				top: 660px;
			}
		}
		.statu .ssimg{
			position: absolute;
			top: 1px;
			left: 1px;
			width: 60px;
			height: 60px;
			border-radius: 50%;
			background-color: blue;
		}
		.statu .nom{
			position: absolute;
			left: 65px;
			top: 18px;
			font-weight: bold;
			font-size: 18px;

		}
		.statu .date{
			position: absolute;
			left: 63px;
			top: 32px;
		}
		.statu .pbu{
			position: absolute;
			right: 5px;
			top: 18px;
			text-align: center;
			font-weight: bold;
			padding-bottom: 3px;
		}
		.statu .phrs{
			position: absolute;
			top: 60px;
			width: 100%;
			

		}
		.statu .dhrs{
			position: absolute;
			top: 225px;
			width: 100%;
			

		}
		

		
		.statu article{
			position: absolute;
			top: 75px;
			left: 10%;
			width: 80%;
			background-color: rgb(124,124,190);
			height: 150px;
			text-transform: capitalize;
			padding: 2px;
			font-size: medium;
			font-weight: bold;
			text-indent: 5px;
			text-align: justify;

		}
		.statu .jaime{
			position: absolute;
			left: 10px;
			top: 240px;
			width: 60px;
			height: 30px;
			background-color: rgb(106,106,255);
			text-align: center;
			text-transform: capitalize;
			font-size: medium;
			font-weight: bold;
			padding-top: 5px;
		}
		.statu .commentaire{
			position: absolute;
			left: 160px;
			top: 240px;
			width: 100px;
			height: 30px;
			background-color: rgb(106,106,255);
			text-align: center;
			text-transform: capitalize;
			font-size: medium;
			font-weight: bold;
			padding-top: 5px;
		}
		.statu .partage{
			position: absolute;
			right: 10px;
			top: 240px;
			width: 100px;
			height: 30px;
			background-color: rgb(106,106,255);
			text-align: center;
			text-transform: capitalize;
			font-size: medium;
			font-weight: bold;
			padding-top: 5px;
		}
		#filactualite{
			position: absolute;
			top: 544px;
			left: 49%;
			width: 34%;
			background-color: rgb(122,122,122);
			border-width: 0.1px;
			border-color: blue;
			color: white;
			text-transform: uppercase;
			font-weight: bold;

		}
		@media (max-width: 679px){
			#filactualite{
				width: 90%;
				top: 970px;
				
				left: 5%;
			}
		}
	</style>
</head>
<body >
	
<?php


try
{
	$bdd=new PDO("mysql:host=localhost;dbname=facesitedbd","root","");
	
}
catch(exception $e){
	die('erreur   :'.$e -> getMessage());
}

if((isset($_GET['submit'])) AND (isset($_GET['email'])) AND (isset($_GET['motdepasse']))){
	$email = $_GET['email'];
	$motdepasse=$_GET['motdepasse'];
}
$req=$bdd->prepare('SELECT * FROM comptee Where email=?');
$req-> execute(array($email));
$resultat=$req->fetch();
?>
<div class="pdiv" id="pdiv">

	<button id="bchange">changer la photo de couverture</button>
	<div class="ppdiv"></div>
</div>
<p class="nom"><?php echo $resultat["nomutilis"];?></p>
<p class="bio"><a href=""><?php echo $resultat["biografi"];?></a></p>
<hr class="phr">
<table>
	<tr>
		<td ><a href="" onmouseover="reaction(this)" onmouseout="reactioni(this)" target="divni">publication</a></td>
		<td ><a href="" onmouseover="reaction(this)" onmouseout="reactioni(this)" id="dezbouton">à propos</a></td>
		<td><a href="" onmouseover="reaction(this)" onmouseout="reactioni(this)">amis</a></td>
		<td><a href="" onmouseover="reaction(this)" onmouseout="reactioni(this)">photos</a></td>
		<td><a href="" onmouseover="reaction(this)" onmouseout="reactioni(this)">plus</a></td>
		<td id="mod"><a href="" onmouseover="reaction(this)" onmouseout="reactioni(this)">modifier le profil</a></td>
		
		<td id="views"><a href="" onmouseover="reaction(this)" onmouseout="reactioni(this)">views</a></td>
		<td id="rech"><a href="" onmouseover="reaction(this)" onmouseout="reactioni(this)">rech</a></td>
		<td id="der"><a href="" onmouseover="reaction(this)" onmouseout="reactioni(this)">...</a></td>
	</tr>

</table>
<script type="text/javascript">
	function reaction(e) {

		e.style.borderBottomStyle="solid";
		e.style.borderBottomWidth="3px";
		e.style.borderBottomColor="blue";

	}
	function reactioni(e) {

		e.style.borderBottomStyle="none";
		

	}

	
	

</script>
<hr class="dhr"></hr>
<div class="pagepub" id="pagepub">
<div class="actualite" >
<div class="actage"></div>
<input type="text" name="act" class="filact" placeholder="que-voulez-vous-dire-?">
<hr class="acthr">	
<table class="actble">
	<tr>
		<td>diffuser en direct</td>
		<td>photos/video      kjz</td>
	</tr>
</table>
</div>
<div class="intro">
	<p class="titro">intro</p>
	<span class="pos">de  <?php echo $resultat["natinalite"];?></span>
	<br>
	<br>
	<button class="modinfo">modifier les infos</button>
	<br>
	<br>
	<button class="ajosir">ajouter des loisirs</button>
	<br>
	<br>
	<button class="modune">modifier la une</button>
</div>
<div class="publication">
	<span class="titre">publication</span>
	<button class="filtre">filtre</button>
	<button class="glp">gerer les publication</button>
	<br>
	<hr>
	<button class="vul">vue liste</button>
	<button class="vug">vue de grille</button>


</div>
<div class="photo">
	<span class="titrephoto">photos</span>
	<span class="glph">gerer les photos</span>
	<img src="" id="mimage">

</div>
<div class="amie">
	<span class="titreami">amie</span>
	<span class="glamie">voir tous</span>
	

</div>
<div class="statu" id="statu" onmouseover="effetstatu(this)" onmouseout="effetstatuinverse(this)">
	<span class="ssimg"></span>
	<span class="nom">raauf abidi</span>
	<span class="date">date jj/mm/aaaa</span>
	<button class="pbu">...</button>
	<br>
	<hr class="phrs">
	<article >l'article va rediger ici</article>
	<hr class="dhrs">
	<span class="jaime">jaime</span>
	<span class="commentaire">commentaire</span>
	<span class="partage">partage</span>
	
	
</div>
<button id="filactualite">fil d'actualité</button>
<script type="text/javascript">
	var filactualite=document.getElementById('filactualite');
	var statu=document.getElementById('statu');
	
	var pagepub=document.getElementById('pagepub');
	var largeursxren=document.body.clientWidth;
	
	if(largeursxren>=1300){
	var j=240;
	var i=280;
}
else{
	var j=640;
	var i=680;
}
	filactualite.addEventListener('click',nouvelle);
	function nouvelle(){
		for(var k=0;k<5;k++){
		var nstatu=statu.cloneNode(true);
		nstatu.style.top=280+i+"px"	;
		pagepub.appendChild(nstatu);
		
		
		i=i+300;
		j=j+310;
	}
		filactualite.style.top=290+j+"px";
		j=j-50;
	}
	function effetstatu(e){
		e.style.backgroundColor="rgb(180,180,180)";
		e.style.borderColor="rgb(80,80,80)";
		e.style.borderWidth="2px";
	}
	function effetstatuinverse(e){
		e.style.backgroundColor="rgb(159,255,255)";
		e.style.borderColor="black";
		e.style.borderWidth="0.2px";
	}
var dezbouton=document.getElementById('dezbouton');
var pagepub=document.getElementById('pagepub');
dezbouton.addEventListener('click',trans);
function trans(){
	pagepub.style.visibility="hidden";
}
</script>

</div>
<div class="apropos">
	<div class="papropos">
		<p>a propos</p>
		<ul>
			<li>vue d'ensemble</li>
			<li>emploi et scolaritée</li>
			<li>lieux de résidence</li>
			<li>information generales et coordonnée</li>
			<li>familles et relations </li>
			<li>détails sur vous</li>
			<li>événements marquants</li>
		</ul>
	</div>
</div>
</body>
</html>