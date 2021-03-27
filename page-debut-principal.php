<!DOCTYPE html>
<html>
<head>
	<title>page-debut-principal</title>
	<meta charset="utf-8">
	<style type="text/css">
		body{
			margin: 0;
		}
		.pdiv{

		}
		.pdiv .ppdiv {
			position: fixed;
			left: 0;
			top: 0;
			background-color: rgb(220,220,220);
			width: 100%;
			height: 170px;
			border-bottom-style: solid; 
			border-bottom-color: rgb(102,199,223);
			border-bottom-width: 3px;
			z-index: 1;
		}
		.pdiv .ppdiv .ppdpp{
			font-weight: bolder;
			font-size: xx-large;
			color: blue;
			position: absolute;
			left: 5%;
			top: 15px;
		}
		.pdiv .ppdiv .precherche{
			width: 30px;
			height: 30px;
			border-color: black;
			border-width: 2px;
			border-radius: 50%;
			position: absolute;
			left: 60%;
			top: 15px;
		}
		.pdiv .ppdiv .vpf{
			width: 30px;
			height: 30px;
			border-color: black;
			border-width: 2px;
			border-radius: 50%;
			position: absolute;
			left: 80%;
			top: 15px;
			background-color: green;
			text-transform: capitalize;
			font-weight: bold;
			text-align: center;
		}
		.pdiv .ppdiv .vpf a{
			text-decoration: none;
		}
		.pdiv .ppdiv .vmp{
			width: 30px;
			height: 30px;
			border-color: black;
			border-width: 2px;
			border-radius: 50%;
			position: absolute;
			left: 90%;
			top: 15px;
			background-color: green;
			text-transform: capitalize;
			font-weight: bold;
			text-align: center;
		}
		.pdiv .ppdiv .vmp a{
			text-decoration: none;
		}
		.pdiv .phr{
			position: absolute;
			left: 10%;
			width: 80%;
			top: 60px;
		}
		.pdiv .ppdiv ul{
			column-count: 6;
			list-style-type: none;
			font-size: x-large;
			position: absolute;
			top: 100px;
			left: 0;
			width: 100%;

		}
		.pdiv .ppdiv ul li{
			background-color: rgb(200,200,200);
			border-radius: 30px;
			text-transform: capitalize;
			text-align: center;
		}
		.ddiv{
			position: relative;
			left: 0;
			top: 160px;
			background-color: rgb(240,240,240);
			height: 120px;
		}
		.ddiv .dpspan{
			width: 70px;
			height: 70px;
			border-radius: 50%;
			background-color: grey;
			position: absolute;
			top: 8px;
			left: 2px;
		}
		.ddiv .ddspan{
			text-transform: capitalize;
			font-size: medium;
			font-weight: bold;
			
			position: absolute;
			top: 30px;
			left: 400px;
		}
		.ddiv .ddspan a{
			text-decoration: none;
			color: rgb(180,180,180);
		}
		.ddiv .dtspan{
			text-transform: capitalize;
			font-size: medium;
			font-weight: bold;
			color: black;
			position: absolute;
			left: 90%;
			top: 30px;
		}
		.ddiv .dphr{
			width: 3px;
			height: 60px;
			position: absolute;
			left: 80%;
			top: 10px;
			background-color: black;
			border-style: none;

		}
		.ddiv .ddhr{
			position: relative;
			top: 81px;
			left: 1%;
			height: 1px;
			background-color: black;
			border-style: none;
			width: 80%;
			
			
		}
		.ddiv ul{
			column-count: 3;
			position: absolute;
			top: 77px;
			width: 100%;
			list-style-type: none;
			text-transform: capitalize;
			font-size: medium;
			font-weight: bold;
		}
		.ddiv ul li{
			background-color: rgb(190,190,190);
			border-radius: 30px;
			text-align: center;
			color: blue;
		}
		.ppdiv ul li a {
			text-decoration: none;
			color: black;

		}
		.ddiv ul a{
			text-decoration: none;
		}
		.tdiv{
			position: relative;
			top: 160px;
			background-color: white;
			height: 70px;
			border-top-style: solid;
			border-bottom-style: solid;
			border-top-color: rgb(170,170,170);
			border-bottom-color: rgb(170,170,170);
			border-top-width: 5px;
			border-bottom-width: 5px;
			
		}
		.tdiv .tpspan{
			background-color: blue;
			width: 100px;
			height: 35px;
			border-radius: 30px;
			position: absolute;
			left: 15px;
			top: 8px;
			text-transform: capitalize;
			font-weight: bold;
			text-align: center;
			font-size: 11px;
			padding-top: 15px;
		}
		.tdiv .tdspan{
			background-color: blue;
			width: 60px;
			height: 60px;
			border-radius: 50%;
			position: absolute;
			left: 120px;
			top: 2px;
			
		}
		.dstori{
			background-color: rgb(222,222,222);
			height: 250px;
			width: 100%;
			z-index: 1;
			position: relative;
			top: 160px;


		}
		.dstori .pstori{
			background-color: rgb(170,170,170);
			width: 120px;
			height: 190px;
			position: absolute;
			top: 5px;
			left: 5px;
			border-radius: 30px;
			background-image: url(image/pexels-pixabay-220383.jpg);
			background-position: 0 0;
			background-size: 100% 110px;

		}
		.dstori .pstori p a {
			text-transform: capitalize;
			font-size: 12px;
			font-weight: bold;
			text-decoration: none;
			color: black;
			position: absolute;
			bottom: 0px;
			text-align: center;
			left: 0;
			height: 50px;
			width: 100%;
			background-color: rgb(57,157,238);
			border-radius: 30px;
			padding-top: 30px;
			color: white;
			border-top-right-radius: 0;
			border-top-left-radius: 0;
		}
		.dstori .publicstori{
			background-color: rgb(170,170,170);
			width: 120px;
			height: 190px;
			position: absolute;
			top: 5px;
			left: 140px;
			border-radius: 30px;
			background-image: url(image/pexels-pixabay-33703.jpg);
			background-position: 0 0;
			background-size: 100% 100%;
		}
		.dstori .publicstori .pp{
			text-transform: capitalize;
			font-size: 15px;
			font-weight: bold;
			text-align: center;
			position: absolute;
			bottom: 12px;
			left: 5px;
			color: white;
		}
		.dstori .publicstori .dp{
			font-weight: bold;
			position: absolute;
			top: 10px;
			right: 10px;
			background-color: blue;
			width: 18px;
			height: 15px;
			text-align: center;
			font-size: 11px;
			color: white;
			border-radius: 5px;
		}
		.dstori .ts {
			position: absolute;
			bottom: 10px;
			left: 40%;
			width: 300px;
			height: 30px;
			border-style: solid;
			border-color: blue;
			border-width: 1px;
			font-size: 20px;
			text-transform: capitalize;
			font-weight: bold;

		}
		.dstori .ts a{
			text-decoration: none;
			color: blue;
		}
	</style>
	<script type="text/javascript">
		function effet(e){
			e.style.backgroundColor="rgb(230,230,230)";
		}
		function effeti(e){
			e.style.backgroundColor="rgb(200,200,200)";
		}
	</script>
</head>
<body>
<div class="pdiv">
	<div class="ppdiv">
		<span class="ppdpp">facebook</span>
		<input type="search" name="precherche" class="precherche" id="precherche">
		<span class="vpf"><a href="">pf</a></span>
		<span class="vmp"><a href="">vm</a></span>
<script type="text/javascript">
	var precherche=document.getElementById('precherche');
	precherche.addEventListener('mouseover',transforme);
	function transforme(){
		this.style.width="150px";
		this.style.borderRadius="30px";
	} 
	precherche.addEventListener('mouseout',transformei);
	function transformei(){
		this.style.width="30px";
		this.style.borderRadius="50%";
	} 
	var tdspan=document.getElementById('tdspan');
	var tdiv=document.getElementById('tdiv');
	var ntdspan=tdspan.cloneNode(true);
	alert('hello word');
	
	ntdspan.style.left="300px";
	tdiv.appendChild(ntdspan);
</script>

<ul>
			<li onmouseover="effet(this)" onmouseout="effeti(this)"><a href="">acceil</a></li>
			<li onmouseover="effet(this)" onmouseout="effeti(this)"><a href="">amis</a></li>
			<li onmouseover="effet(this)" onmouseout="effeti(this)"><a href="">message</a></li>
			<li onmouseover="effet(this)" onmouseout="effeti(this)"><a href="">notification</a></li>
			<li onmouseover="effet(this)" onmouseout="effeti(this)"><a href="">video</a></li>
			<li onmouseover="effet(this)" onmouseout="effeti(this)"><a href="">groupe</a></li>
		</ul>
	</div>
	<hr class="phr"></hr>
	
		
	
</div>
<div class="ddiv">
	<span class="dpspan"></span>
	<span class="ddspan"><a href="creer-statu.php">a quoi pensez-vous ?</a></span>
	<hr class="dphr">
	<span class="dtspan">photo</span>
	<hr class="ddhr">
	<ul>
		<li><a href="creer-statu.php">texte</a></li>
		<li><a href="">video en direc</a></li>
		<li><a href="">salon</a></li>
	</ul>

</div>
<div class="tdiv" id="tdiv">
	<span class="tpspan">creer un salon</span>
	<span class="tdspan" id="tdspan"></span>
</div>
<div class="dstori">
	
	<span class="pstori">
		<p><a href="">ajouter à la storie</a></p>
	</span>
	<span class="publicstori">
		<p class="pp">mark ubento</p>
		<p class="dp">1</p>
	</span>
	<button class="ts"><a href="">voir tous les stories</a></button>
</div>
</body>
</html>