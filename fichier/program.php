<!DOCTYPE html>
<html>
<head>
	<title>fichier</title>
	<meta charset="utf-8">
	<style type="text/css">
.pelement{
	color: red;

}
</style>
</head>
<body>
<script type="text/javascript"></script>

<textarea cols="180" rows="5" id="contenu"></textarea>
<script type="text/javascript">
	var contenu=document.getElementById('contenu');
	contenu.value="<?php
$fichier=fopen("voyelle.txt", "r");
$n=filesize('voyelle.txt');

echo($n);
echo(fgets($fichier, 50));
echo("<br>");

echo(fgets($fichier, 10));

//echo (fread($fichier , $n));

//$cara=fgets($fichier , 108);
//echo($cara);




?>";
var longueur=contenu.value.length;
var ch=contenu.value;
var na=0;
var ne=0;
var nu=0;
var ni=0;
var no=0;
var ny=0;
for(var i=0;i<=longueur;i++){
	switch(ch[i]){
		case 'a': na++;
		break;
		case 'e': ne++;
		break;
		case 'u': nu++;
		break;
		case 'i': ni++;
		break;
		case 'o': no++;
		break;
		case 'y': ny++;
		break;
	}
	
}
var np=document.createElement('p');
np.className="pelement";
np.textContent="nombre de a est egale a "+na+" le nombre de e est egale a "+ne+" le nombre de u est egale a "+nu+" le nombre de i est egale a "+ni+" le nombre de o est egale a "+no+" le nombre de y est egale a y "+ny+"";
document.body.appendChild(np);
function getinfo(){
	var nom=document.getElementById('fichier').files[0].name;
	var size=document.getElementById('fichier').files[0].size;
	var typ=document.getElementById('fichier').files[0].type;
	var date=document.getElementById('fichier').files[0].lastModifiedDate;
	alert(nom);
	alert(size);
	alert(typ);
	alert(date);
}
function copier(){
	var fich=document.getElementById('frame');
	frame.contentWindow.focus();
	frame.contentWindow.print();
}
function copierd(pdf){
	var frame=document.createElement('iframe');
	frame.style.visibility="hidden";
	frame.src=pdf;
	document.body.appendChild(frame);
	frame.contentWindow.focus();
	frame.contentWindow.print();
}
function isMobileDevice() { 
 if( navigator.userAgent.match(/iPhone/i)
 || navigator.userAgent.match(/webOS/i)
 || navigator.userAgent.match(/Android/i)
 || navigator.userAgent.match(/iPad/i)
 || navigator.userAgent.match(/iPod/i)
 || navigator.userAgent.match(/BlackBerry/i)
 || navigator.userAgent.match(/Windows Phone/i)
 ){
    return true;
  }
 else {
 	alert('pc');
    return false;
  }
}
alert(window.navigator.userAgent);
alert(window.navigator.localization);
function couleur(){
setTimeout((function(){
	var d=document.body;
	d.style.backgroundColor="red";
}),200);
setTimeout((function(){
	var d=document.body;
	d.style.backgroundColor="green";
}),400);
}
alert(window.self.search);
</script>
<input type="file" name="fichier" id="fichier" onchange="getinfo()">
<br>
<br>
<iframe src="cours.pdf" width="400" height="400" id="frame"></iframe>
<button onclick="copier()">imprimer le pdf</button>
<button onclick="copierd('cours.pdf')">copier dynamiquement</button>
<button onclick="isMobileDevice()">mobile</button>
<button onclick="couleur()">couleur</button>
</body>
</html>