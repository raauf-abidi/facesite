<?php
if(isset(($_GET["fichier"]))){

	$fich=$_GET["fichier"];
			$na=0;
			$ne=0;
			$ny=0;
			$nu=0;
			$ni=0;
			$no=0;
			$fichier=fopen($fich,"r+");
			while (!(feof($fichier))) {
				$caractere=fgetc($fichier);
				switch ($caractere) {
					case 'a':
						$na++;
						break;
					case 'e':
						$ne++;
						break;
					case 'y':
						$ny++;
						break;
					case 'u':
						$nu++;
						break;	
					case 'i':
						$ni++;
						break;	
					case 'o':
						$no++;
						break;
				}

			}
			echo "<br>";
			echo $na;
			echo "<br>";
			echo $ne;
			echo "<br>";
			echo $ny;
			echo "<br>";
			echo $nu;
			echo "<br>";
			echo $ni;
			echo "<br>";
			echo $no;
		}
			else{
				echo "erreur";
			}
			?>