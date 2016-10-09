<?php

session_start();

/*if (isset($_GET['envoyer_msg'])){
	$id_proprio=intval($_GET['envoyer_msg']);
	echo $id_proprio;}*/


if( isset($_POST['envoyer'])){


  $id_proprio=htmlspecialchars($_POST['id_proprietaire']);
  $id_bien=htmlspecialchars($_POST['id_bien']);
  $nom = htmlspecialchars(trim($_POST['nom']));
  $prenom = htmlspecialchars(trim($_POST['prenom']));
   $email_client = htmlspecialchars(trim($_POST['email']));
   $telephone_client = htmlspecialchars(trim($_POST['telephone']));
   $msg= htmlspecialchars(trim($_POST['message']));

  
  if ($nom&&$prenom&&$email_client&&$telephone_client&&$msg) {
    
  $connect = mysql_connect('localhost','root','');
  mysql_select_db('immobilier');
  $requete=mysql_query("INSERT INTO client VALUES('','$nom','$prenom','$email_client','$telephone_client')");
  $req=mysql_query("SELECT id_client FROM client WHERE email='$email_client'");
  $query = mysql_query("SELECT * FROM proprietaire WHERE id_proprio='$id_proprio'");

    while($resul = mysql_fetch_array($req)){
 $id_client=$resul['id_client'];
 

  $requ=mysql_query("INSERT INTO message VALUES('','$msg','$id_client', '$email_client','$id_proprio','$id_bien')");
 while($resultat = mysql_fetch_array($query)){
  
$f='location:detail.php?success=envoyer&detailbien='.$id_bien;
  header($f);
   $header="MIME-Version: 1.0\r\n";
            $header.='From:"PrimFx.com"<support@primfx.com>'."\n";
            $header.='Content-type:text/html; charset="utf-8"'."\n";
            $header.='Content-transfer-Encoding: 8bit';

            $message='
            <html>
             <body>
             <div align="center">
             VOtre message a bien ete envoyé au proprietaire du bien ....Merci 

             <br />




             </div>

             </body>

             </html>

            ';
            
            $mess='
            <html>
             <body>
             <div >
             Bonjour Monsieur , un client s\'interesse <br>
             a un de vos bien,vous pouvez aller dans votre espace personnel pour plus<br>
             d\'informations...<br>
             cliquer  <a href="http://localhost/immobilier/vendre.php/">ici</a> pour vous connecter

             <br />

             




             </div>

             </body>

             </html>

            ';
            mail($email_client,"accusé de reception",$message,$header);
            mail($resultat['email'],"a propos de votre bien",$mess,$header);

    }

}

}
else{
  $t='location:detail.php?error=1&detailbien='.$id_bien;
  header($t);
}
}



  ?>
