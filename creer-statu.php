<!DOCTYPE html>
<html>
<head>
	<title>creer-statu</title>
	<meta charset="utf-8">
	<style type="text/css">
		body{
			margin: 0;
		}
		.pspan{
			text-transform: capitalize;
			font-weight: bold;
			font-size: medium;
			position: relative;
			top: 10px;
			left: 10px;
		}
		.dspan{
			text-transform: capitalize;
			font-weight: bold;
			font-size: medium;
			position: relative;
			top: 10px;
			left: 90%;
		}
		.phr{
			position: relative;
			top: 30px;
		}
		.pdiv{
			
			position: relative;
			top: 30px;
			height: 100px;
		}
		.pdiv .ppspan{
			width: 70px;
			height: 70px;
			border-radius: 50%;
			background-color: grey;
			position: absolute;
			top: 8px;
			left: 2px;
		}
		.pdiv .pdspan{
			text-transform: capitalize;
			font-size: medium;
			font-weight: bold;
			
			position: absolute;
			top: 30px;
			left: 90px;
		}
		.pdiv .pbut{
			position: absolute;
			top: 47px;
			left: 90px;
			width: 50px;
			height: 15px;
			background-color: green;
			border-style: solid;
			border-width: 0.5px;
			border-color: black;
			text-transform: capitalize;
			text-align: center;
			font-weight: bold;
			font-size: 12px;

		}
		.pdiv .pbut a{
			text-decoration: none;
			color: rgb(200,200,200);
		}
		.pdiv .tarea{
			width: 80%;
			height: 100px;
			position: absolute;
			left: 10px;
			top: 80px;
			text-align: justify;
			text-indent: 5px;
			/*background-image: url("image/360_F_339766646_htrJzThAXz6WzBhSJMsrtWuixZJ6ZOF6.jpg");*/
			background-attachment: fixed;
			background-position: 0 0;
			background-size: 100% 100%;
			letter-spacing: 0.3px;
			word-spacing: 1.3px;
			font-weight: bold;
			font-size: medium;
		}
		.pdiv ul{
			column-count: 5;
			
			width: 30%;
			list-style-type: none;
			position: absolute;
			top: 180px;
		}
		.pdiv ul li img{
			width: 20px;
			height: 18px;
		}
		.pdiv ul li{
			width: 80px;
			
			align-items: center;
		}
		.ddiv{
			background-color: blue;
			opacity: 0.5;
			position: relative;
			top: 150px;
		}
		.ddiv ul{
			list-style-type: none;

		}
		.ddiv ul li{
			text-transform: capitalize;
			letter-spacing: 0.3px;
			word-spacing: 1px;
			font-weight: bold;
			font-size: medium;
			color: rgb(180,180,180);
			width: 50%;
			height: 30px;

		}
		.dediv{
			background-color: red;
			position: relative;
			top: 170px;

		}
		.dediv button{
			width: 500px;
			position: absolute;
			left: 30%;
			background-color: blue;
			text-transform: uppercase;
			font-size: x-large;
			font-weight: bold;
			color: white;
		}
		#pspan{
			text-decoration: none;
			color: black;
		}
	</style>
</head>
<body>
<span class="pspan" id="pspan"><a href="page-debut-principal.php" id="pspan">quiter</a></span>
<span class="dspan">publier</span>
<hr class="phr">
<div class="pdiv">
	<span class="ppspan"></span>
	<span class="pdspan">raauf abidi</span>
	<button class="pbut"><a href="">amis</a></button>
	<br>
	<br>
	<br>
	<textarea placeholder="à quoi pensez-vous" class="tarea" id="tarea" >
		
	</textarea>
<br>
<br>
<ul>
	<li><button id="pb">defeult</button></li>
	<li><button><img src="image/pexels-scott-webb-28061.jpg" id="pm"></button></li>
	<li><button><img src="image/360_F_339860262_1eFA8IuZJB8TPhO4UifhEfIwzYvZ9v80.jpg" id="dm"></button></li>
	<li><button><img src="image/360_F_340839618_X9QElsGJbwzqYFwckiFoG8rcwP6hhuY4.jpg" id="tm"></button></li>
	<li><button><img src="image/360_F_339859947_iziagtp8F5ZYpStJOZNKzWO6yFKqEJ4m.jpg" id="km"></button></li>
</ul>
</div>
<div class="ddiv">
	<ul>
		<li>créer un salon </li>
		<li>photos / videos </li>
		<li>identifier des amies </li>
		<li>ajouter un lieu </li>
		<li>humeur /activité </li>
		<li>demander des recommandations </li>
		<li>répondre à une question </li>
		<li>lancer un direct </li>
		<li>vendre quelque chose </li>
		
		

	</ul>
</div>
<div class="dediv">
	<button>publier</button>
</div>
<script type="text/javascript">
	var langue=navigator.language;
	
	var tarea=document.getElementById('tarea');
	//tarea.style.backgroundImage="url('image/360_F_339860262_1eFA8IuZJB8TPhO4UifhEfIwzYvZ9v80.jpg')";
	if(langue=="fr-FR"){
		tarea.dir="ltr";
	}
	else{
		tarea.dir="rtl";
	}
	
	var pb=document.getElementById('pb');
	pb.addEventListener('click',transform);
	function transform(){
		
		tarea.style.backgroundImage="";
		tarea.style.backgroundColor="white";
	}
	var pm=document.getElementById('pm');
	pm.addEventListener('click',transformpm);
	function transformpm(){
		var ch=pm.src;
		
		var longuer=ch.length;
		var pimage=ch.indexOf("image");
		
		
		var sch=ch.substr(pimage,longuer);
		nch='\''+sch+'\'';


		
		tarea.style.backgroundImage="url(nch)";

		
	}
	var pm=document.getElementById('pm');
	
	pm.addEventListener('click',transformpm);
	function transformpm(){
		var ch=pm.src;
		
		var longuer=ch.length;
		var pimage=ch.indexOf("image");
		
		
		var sch=ch.substr(pimage,longuer);
		nch='\''+sch+'\'';
		

		
		tarea.style.backgroundImage="url("+sch+")";
		
	}
	var dm=document.getElementById('dm');
	
	dm.addEventListener('click',transformdm);
	function transformdm(){
		var ch=dm.src;
		
		var longuer=ch.length;
		var pimage=ch.indexOf("image");
		
		
		var sch=ch.substr(pimage,longuer);
		nch='\''+sch+'\'';
		

		
		tarea.style.backgroundImage="url("+sch+")";
		
	}
	var tm=document.getElementById('tm');
	
	tm.addEventListener('click',transformtm);
	function transformtm(){
		var ch=tm.src;
		
		var longuer=ch.length;
		var pimage=ch.indexOf("image");
		
		
		var sch=ch.substr(pimage,longuer);
		nch='\''+sch+'\'';
		

		
		tarea.style.backgroundImage="url("+sch+")";
		
	}
	var km=document.getElementById('km');
	
	km.addEventListener('click',transformkm);
	function transformkm(){
		var ch=km.src;
		
		var longuer=ch.length;
		var pimage=ch.indexOf("image");
		
		
		var sch=ch.substr(pimage,longuer);
		nch='\''+sch+'\'';
	

		
		tarea.style.backgroundImage="url("+sch+")";
		
	}
	
	
</script>
</body>
</html>