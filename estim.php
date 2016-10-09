<?php

if( isset($_POST['estimer'])){


  $nom_client_est=htmlspecialchars($_POST['nom']);
  $prenom_client_est=htmlspecialchars($_POST['prenom']);
  $email_client_est = htmlspecialchars(trim($_POST['email']));
  $telephone_client_est = htmlspecialchars(trim($_POST['telephone']));
   $type_bien_est = htmlspecialchars(trim($_POST['type_bien']));
   $surface_bien_est= htmlspecialchars(trim($_POST['surface']));
   $nbpiece_bien_est= htmlspecialchars(trim($_POST['nbpiece']));
    $loc_bien_est= htmlspecialchars(trim($_POST['loc']));
     $msg_bien_est= htmlspecialchars(trim($_POST['msg']));

  
 // if ($nom_client_est&&$prenom_clien_est&&$email_client_est&&$telephone_client_est&&$type_bien_est&&$surface_bien_est&&$nbpiece_bien_est&&$loc_bien_est&&$msg_bien_est) {
    
  $connect = mysql_connect('localhost','root','');
  mysql_select_db('immobilier');
  $requete=mysql_query("INSERT INTO estimation VALUES('','$nom_client_est','$prenom_clien_est','$email_client_est','$telephone_client_est','$type_bien_est','$surface_bien_est','$nbpiece_bien_est','$loc_bien_est','$msg_bien_est')");


    
// $id_client=$resul['id_client'];
 

 // $requ=mysql_query("INSERT INTO message VALUES('','$message','$id_client', '$email_client','$id_proprio','$id_bien')");

  
$f='location:estimation.php?success=envoyer';
  header($f);
  $header="MIME-Version: 1.0\r\n";
            $header.='From:"PrimFx.com"<support@primfx.com>'."\n";
            $header.='Content-type:text/html; charset="utf-8"'."\n";
            $header.='Content-transfer-Encoding: 8bit';

            $message='
            <html>
             <body>
             <div align="center">
             VOtre demande d\'estimation a bien ete envoye a l\'agence <br>
             Une estimation vous sera donnée sous peu..

             <br />




             </div>

             </body>

             </html>

            ';
            mail($email_client_est,"accusé de reception",$message,$header);

}else{
  $t='location:estimation.php?error=1';
  header($t);
}




  ?>