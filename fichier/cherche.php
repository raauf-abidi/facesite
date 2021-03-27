<!DOCTYPE html>
<html>
<head>
	<title>chercher des voyelle</title>
	<meta charset="utf-8">
	<style type="text/css"></style>
	
</head>
<body>
<form method="get" action="manipulation.php" name="f">	
<input type="file" name="fichier" id="fichier">
<br>
<button id="verif" >verifier</button>
</form>
<script type="text/javascript">
	var fichier=document.getElementById('fichier');
	var verif=document.getElementById('verif');

	
	verif.addEventListener('click',valider);
	function valider(e){
		var type=fichier.files[0].type;
		if((type!="text/plain")||(fichier.)){
			e.preventDefault();
			fichier.style.borderColor="red";
		
		
				}
		
		
		
	}
			</script>

		

<br>
<br>


			
</body>
</html>