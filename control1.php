<?php





if( isset($_POST['envoyer'])){


  $nom=htmlspecialchars($_POST['nom']);
  $prenom=htmlspecialchars($_POST['prenom']);
  $email = htmlspecialchars(trim($_POST['email']));
  $telephone = htmlspecialchars(trim($_POST['telephone']));
   $msg = htmlspecialchars(trim($_POST['msg']));
  

  
//  if ($nom&&$prenom&&$email&&$telephone&&$msg) {
    
  $connect = mysql_connect('localhost','root','');
  mysql_select_db('immobilier');
  $requete=mysql_query("INSERT INTO client VALUES('','$nom','$prenom','$email','$telephone')");
 $requ=mysql_query("INSERT INTO msg_agence VALUES('','$msg','$email')");


$f='location:contact.html?success=envoyer';
  header($f);


   $header="MIME-Version: 1.0\r\n";
            $header.='From:"PrimFx.com"<support@primfx.com>'."\n";
            $header.='Content-type:text/html; charset="utf-8"'."\n";
            $header.='Content-transfer-Encoding: 8bit';

            $message='
            <html>
             <body>
             <div align="center">
             VOtre message a bien ete envoyé a l\'agence SENimmobilier !!!

             <br />




             </div>

             </body>

             </html>

            ';
            mail($email,"accusé de reception",$message,$header);

   
     $header="MIME-Version: 1.0\r\n";
            $header.='From:"PrimFx.com"<support@primfx.com>'."\n";
            $header.='Content-type:text/html; charset="utf-8"'."\n";
            $header.='Content-transfer-Encoding: 8bit';

            $mess='
            <html>
             <body>
             <div >
             Bonjour  , un internaute vous a laisse un message <br>
            vous pouvez le lire dans VOtre espace personnel..
             d\'informations...<br>
             cliquer  <a href="http://localhost/immobilier/vendre.php/">ici</a> pour vous connecter

             <br />

             




             </div>

             </body>

             </html>

            ';
            mail($resultat['email'],"accusé de reception",$mess,$header);

    





 }else {
 $t='location:contact.html?error=1';
  header($t);
}






  ?>
