<?php

if (isset($_POST['button'])){
	$email = htmlspecialchars(trim($_POST['email']));
	$motdepasse = htmlspecialchars(trim($_POST['mdp']));
	

	if ($email&&$motdepasse) {


		# code...
	}else echo "veuillez saisir tous les champs svp  ";
}

?>



<ul>


</ul>