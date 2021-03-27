<?php
$db='C:\wamp64\www\facesite\facesitedb.accdb';
if (!file_exists($db)) {
	# code...
	die('erreur de trouver sa');
}
else{
	echo "succes";
}
?>