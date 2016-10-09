     <?php
          session_start();
          if (isset($_POST['connexion'])) {


  $email = htmlspecialchars(trim($_POST['email_ab']));
   $password = htmlspecialchars(trim($_POST['mdp_ab']));

    
   
   if ($email&&$password) {
    $password=md5($password);

    $connect = mysql_connect('localhost','root','');
    mysql_select_db('immobilier');
    $log=mysql_query("SELECT * FROM abonne WHERE email_ab='$email' AND mdp_ab='$password'");
    
    $rows = mysql_num_rows($log);
    if ($rows ==1){
          while ($rows=mysql_fetch_array($log)){
      $_SESSION['email']=$email;
      $_SESSION['id_proprietaire']=$rows['id_proprio'];
      $_SESSION['nom']=$rows['nom_proprio'];
      $_SESSION['prenom']=$rows['prenom_proprio'];
      $_SESSION['adresse']=$rows['adresse'];
      $_SESSION['telephone']=$rows['telephone_proprio'];

      $nom=$_SESSION['nom_proprio'];
      $prenom=$_SESSION['nom_proprio'];
       $adresse=$_SESSION['adresse'];
        $telephone=$_SESSION['telephone_proprio'];
         
    
header("location:proprietaire.php");
     


    
     

     

  }
    }
else echo "<h4 class=text-danger>email ou mot de passe incorrecte</h4>";
     
   }else echo "remplissez bien";
  }




      

if (isset($_POST['inscription'])){
  $email = htmlspecialchars(trim($_POST['email_ab']));
  $motdepasse = htmlspecialchars(trim($_POST['mdp_ab']));
   $confirm_mdp = htmlspecialchars(trim($_POST['confirmmdp_ab']));
   $nom = htmlspecialchars(trim($_POST['nom_ab']));
    $prenom = htmlspecialchars(trim($_POST['prenom_ab']));
     $adresse = htmlspecialchars(trim($_POST['adresse_ab']));
      $telephone= htmlspecialchars(trim($_POST['telephone_ab']));

  

  if ($email&&$motdepasse&&$confirm_mdp&&$nom&&$prenom&&$adresse&&$telephone) {
    if ($motdepasse==$confirm_mdp) {
       
        $motdepasse=md5($motdepasse);
  $confirm_mdp=md5($confirm_mdp);
  $connect = mysql_connect('localhost','root','');
  mysql_select_db('immobilier');
  $requete=mysql_query("INSERT INTO abonne VALUES('','$nom','$prenom','$motdepasse','$confirm_mdp','$email','$adresse','$telephone')");
  die('Inscription reussie vous pouvez vous connecter');





$header="MIME-Version: 1.0\r\n";
            $header.='From:"PrimFx.com"<support@primfx.com>'."\n";
            $header.='Content-type:text/html; charset="utf-8"'."\n";
            $header.='Content-transfer-Encoding: 8bit';

            $message='
            <html>
             <body>
             <div align="center">
             VOtre Inscription a ete bien reussie , Si vous voulez acceder a votre espace personnel <a>cliquez ici </a>

             <br />




             </div>

             </body>

             </html>

            ';
            mail("$email_ab","Inscription reussie",$message,$header);

            



       

      
      # code...
    }else echo "les mots de passe sont pas identiques";
   
      # code...
    



    # code...
  }else echo "veuillez saisir tous les champs svp  ";

 }
 

  ?>