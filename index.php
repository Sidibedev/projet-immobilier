
<?php 

session_start();

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>SENimmobilier</title>

    <!-- Bootstrap -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="dist/sweetalert.css">
    <script src="dist/sweetalert.min.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style type="text/css">
    .marketing {
    	text-align: center;
    	margin-bottom: 20px;
    }
    .divider{
    	margin: 80px 0px;
    }
    hr{
    	border: solid 1px #eee
    }
    nav{
    	margin:0px ;
    }
    /* Sticky footer styles
-------------------------------------------------- */
html {
  position: relative;
  min-height: 100%;
}
body {
  /* Margin bottom by footer height */
  margin-bottom: 60px;
}
.footer {
  position: absolute;
  bottom: 0;
  width: 100%;
  /* Set the fixed height of the footer here */
  height: 60px;
  background-color: black;
}





    </style>
  </head>
  <body>
    <!-- header -->
    <nav class="navbar navbar-default navbar-inverse " style="border-radius:0px !importa;margin-bottom=0px;">
    <div class="container-fluid ">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header ">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">SEN<em><small class="text-primary">immobilier <span class="glyphicon glyphicon-home"></span></small></em></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1 text-right">
      <ul class="nav navbar-nav navbar-right">
        <li class="active" text-primary><a href="index.php"> <span class="sr-only glyphicon glyphicon-home"></span>ACCEUIL</a></li>
        <li><a href="achat.php">ACHETER ou LOUER</a></li>
        
        <li><a href="vendre.php">VENDRE</a></li>
        <li><a href="nous.html">NOTRE AGENCE</a></li>
         <li><a href="estimation.php">ESTIMATION</a></li>
        <li><a href="contact.html">CONTACTEZ NOUS</a></li>
        <!--
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
    -->

      </ul>
      
      
     </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>


    <!-- /header -->

    <!-- slide show-->
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="dist/image/1.jpg" alt="im1" class="img-responsive">
      <div class="carousel-caption">
      	

        ...
      </div>
    </div>
    <div class="item">
      <img src="dist/image/7_bon.jpg" alt="img2">
      <div class="carousel-caption">
      
        ...
      </div>
    </div>
     <div class="item ">
      <img src="dist/image/new_54.jpg" alt="im3">
      <div class="carousel-caption">
      

        ...
      </div>
    </div>
    ...
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div class="clearfix" style="margin-bottom=20px;"></div>

	
<br> <br> <br>
 
  

    <!-- slide show -->

    <!--marketing -->
  
<?php 
  if (isset($_SESSION['id'])){ ?> 
<div align="right">
 <a  href="client.php" class="btn btn-success"><span class="glyphicon glyphicon-user" >MON COMPTE </span></a>
</div>
<?php } else {?>
<div align="right">
  <button class="btn btn-success" btn-lg data-toggle="modal" data-target="#connexion"><spang class="glyphicon glyphicon-user" >MON COMPTE </span></button>
</div>
<?php } ?>

        <div class="col-md-12" id="recherche">

     <h2 class="text-primary"><u>Faites une recherche detaillee</u></h2>   

    
     <h4 class="text-muted">Vous recherchez un bien particulier , vous pouvez le trouvez en nous decrivant ce bien,Remplissez le formulaire ci dessous.</h4>
</div>


<a name="targetContactForm2"></a>
 <?php if (isset($_GET['error']))
            echo "<h3 class=text-danger>veuillez remplir au moins un champ<h3><br><br> ";
            if (isset($_GET['rien']))
            echo "<h4 class=text-muted>Nous n'avons pas d'offres correspondant à votre recherche,Nous avons d'autres offres s'approchant de vos critères de recherche : relancer votre recherche en modifiant un critère.<br><br>
            En créant une alerte mail , vous serez informé à tout moment de nouvelles offres correspondant à vos attentes.Pour creer une alerte mail vous devez etre un abonne..Inscrivez vous et connectez vous d'abord<br><br>
           

Vous pouvez modifier vos critères de recherche dans le moteur de recherche. <h4> ";

          $connect=mysql_connect('localhost','root','');
      mysql_select_db('immobilier');
      $req=mysql_query("SELECT * FROM bien");

             ?>  

  <form method="get" action="recherche1.php"
  id="formcontac" class="text-center">
        <div class="infoPerso bienEstim text-center">
          <div class="col-md-6">
             <select class="form-control" id="" name="localite">
                                      <option value="">----entrer la localite----</option>
                                <?php
                                   
                                   $req1 = mysql_query("SELECT DISTINCT localisation FROM bien ") or die(mysql_error());

                                   if (mysql_num_rows($req1)>0){
                                    while ($result=mysql_fetch_array($req1)) {
                                      echo "<option>".$result['localisation']."</option>";
                                    }
                                    
                                   }
                                   
                                ?>
                              </select><br>
            
         
          </div>
          <div class="col-md-6">
          <select class="form-control" id="" name="type">
                                      <option value="">---entrer le type---</option>
                                <?php
                                   
                                   $req1 = mysql_query("SELECT DISTINCT type_bien FROM bien ") or die(mysql_error());

                                   if (mysql_num_rows($req1)>0){
                                    while ($result=mysql_fetch_array($req1)) {
                                      echo "<option>".$result['type_bien']."</option>";
                                    }
                                    
                                   }
                                   
                                ?>
                              </select><br>
          </div>
          <div class="col-md-6">
          <input type="text" class="form-control c_ required" name="prixmin" placeholder="prix minimum" value="" /><br>
          </div>
          <div class="col-md-6" id="rech4">
          <input type="text" class="form-control c_ required" name="prixmax" placeholder="prix maximum" value="" /><br>
          </div>   
          

         
        </div>
         

       

        </div>
        <div class="linkSend">
            
            <button class="btn btn-success" name="rechercher">Rechercher</button><br><br><br><br>
          </div>

     



       
      </form>
     

       
        



                    
                    


    <!--/marketing -->
    <hr>

    <!-- product thumbnail-->
    <div class="">
    <div class="row">
      <div class=" col-md-6 col-sm-6 col-xs-12">
           <h2 class="text-info text-center"><u><i>Nos offres recentes de vente</i></u> </h2><br>

    
      <?php
      $connect=mysql_connect('localhost','root','');
      mysql_select_db('immobilier');
      $req=mysql_query("SELECT * FROM bien WHERE transaction='A vendre' AND id_bien ORDER BY id_bien DESC");
    

 ?>
  <?php
   while ($donne=mysql_fetch_array($req)) {
    ?>

      
      <div class="col-sm-6 col-md-4">
   
    <div class="thumbnail">
      <img src="<?php echo $donne['lien_image_1']?>" class="img-responsive img-rounded">
      <div class="caption">
        <h3 class="text-warning"><?php echo $donne['type_bien']." : ".$donne['superficie']." m2"?></h3>
        <h4 class="text-muted"><?php echo $donne['localisation']?></h4>
        <a href="detail.php?detailbien=<?php echo $donne['id_bien']?>" class="btn btn-info" role="button" name="detail"><span class="glyphicone glyphicon-edit"></span>voir detail</a> <br><br>
      </div>
    </div>
  </div>
  <?php } ?>
</div>


  
 






      <div class=" col-md-6 col-sm-6 col-xs-12">

     <h2 class="text-info text-center"><u><i>Nos offres recentes de Location</i></u> </h2><br>

      <?php
      $connect=mysql_connect('localhost','root','');
      mysql_select_db('immobilier');
      $req=mysql_query("SELECT * FROM bien WHERE transaction='A louer' ORDER BY id_bien DESC");
    

 ?>
  <?php
   while ($donne=mysql_fetch_array($req)) {
    ?>

      
      <div class="col-sm-6 col-md-4">
   
    <div class="thumbnail">
      <img src="<?php echo $donne['lien_image_1']?>" class="img-responsive img-rounded">
      <div class="caption">
        <h3 class="text-warning"><?php echo $donne['type_bien']." : ".$donne['superficie']." m2"?></h3>
        <h4 class="text-muted"><?php echo $donne['localisation']?></h4>
        <a href="detail.php?detailbien=<?php echo$donne['id_bien']?>" class="btn btn-info" role="button" name="voirdetail"><span class="glyphicone glyphicon-edit"></span>voir detail</a> <br><br>
      </div>
    </div>
  </div>
  <?php } ?>
</div>
      
 



</div>


</div> 

 <div class="modal fade" id="coabonne" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
             <h4 style="color:red;"><span class="glyphicon glyphicon-lock"></span>Vous n'etes pas connecté,Connectez vous d'abord</h4>
        </div>
        <div class="modal-body">
          <form role="form" method="post" action="">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Email</label>
              <input type="Email" class="form-control" id="usrname" placeholder="Entrer votre email" name="email">
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="password" class="form-control" id="psw" placeholder="Entrer password" name="mdp">
            </div>
           
            <button type="submit" class="btn btn-default btn-success btn-block" name="connexion_1"><span class="glyphicon glyphicon-off"></span> Se connecter</button>
          </form>
        </div>
       

        <div class="modal-footer">
          <button type="submit" class="btn btn-default btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
          <button type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#insabonne">m'inscrire</button>
          
        </div>
      </div>
    </div>
  </div>

   <div class="modal fade" id="insabonne" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
     
    
       <h4 style="color:red;"><span class="glyphicon glyphicon-lock"></span>Inscription<br><small>Merci de renseigner vos informations</small>



    


  </div>
        
 
   <div class="modal-body">
  <form role="form" method="post" action="">
      <div class="form-group">

<br>
        <label for="Nom">Nom</label>
        <input type="text" class="form-control" id="nom" placeholder="entrer votre nom" name="nom_ab" >

      </div>
     
      <div class="form-group">
        <label for="Prenom">Prenom</label>
        <input type="text" class="form-control" id="prenom" placeholder="entrer votre prenom" name="prenom_ab">

      </div>
      <div class="form-group">
        <label for="Numere">Telephone</label>
        <input type="text" class="form-control" id="tel" placeholder="entrer votre telephone" name="telephone_ab">

      </div>
      <div class="form-group">
        <label for="adresse">Adresse</label>
        <input type="text" class="form-control" id="adresse" placeholder="entrer votre adresse" name="adresse_ab" >

      </div>

       <div class="form-group">
        <label for="Email">Email</label>
        <input type="Email" class="form-control" id="Email" placeholder="entrer votre Email" name="email_ab">

        </div>
        <div class="form-group">
      <label for="password">Mot de passe</label>
        <input type="password" class="form-control" id="password" placeholder="entrer votre mot de passe" name="mdp_ab" >

     </div>


     <div class="form-group">
     
      <label for="password">verification Mot de passe</label>
        <input type="password" class="form-control" id="password" placeholder="confirmer votre mot de passe" name="confirmmdp_ab" >

     </div>





    



  
    

     

  
  
     
     
  
  
      


  </div><br><br>
   
  



            <button type="submit" class="btn btn-default btn-success btn-block" name="inscription"> S'inscrire</button>
  
 

 
  
</form>
 <div class="modal-footer">
          <button type="submit" class="btn btn-default btn-default pull-left " data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
          
        </div>
        </div>

</div>
</div>

<div class="modal fade" id="connexion" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>




           <?php
          
if (isset($_POST['connexion_1'])) {

  $email = htmlspecialchars($_POST['email']);
  $password = htmlspecialchars($_POST['mdp']);

  session_start();

  if (isset($email) AND !empty($email)  AND isset($password) AND !empty($password)) {
    $password=md5($password);
    $connect = mysql_connect('localhost','root','');
    mysql_select_db('immobilier');
    $log = mysql_query("SELECT * FROM abonne WHERE email_ab='$email' AND mdp_ab='$password'");
    $_SESSION['email_ab']=$email;
    $rows = mysql_num_rows($log);
    if ($rows == 1){
        echo '<body onLoad="alert(\'VOUS Etes Connecté...\')">';

        
        while ($resul=mysql_fetch_array($log)){
            $_SESSION['nom']=$resul['nom_ab'];
             $_SESSION['id']=$resul['id_ab'];
            $_SESSION['prenom']=$resul['prenom_ab'];
            $_SESSION['adresse']=$resul['adresse_ab'];
            $_SESSION['tel']=$resul['telephone_ab'];
            echo $_SESSION['id'];
        }
    }else echo '<body onLoad="alert(\'Membre non reconnu...\')">';


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

$header="MIME-Version: 1.0\r\n";
            $header.='From:"PrimFx.com"<support@primfx.com>'."\n";
            $header.='Content-type:text/html; charset="utf-8"'."\n";
            $header.='Content-transfer-Encoding: 8bit';

            $message='
            <html>
             <body>
             <div align="center">
             VOtre Inscription a ete bien reussie , Si vous voulez acceder a votre espace personnel<a>cliquez ici </a>

             <br />




             </div>

             </body>

             </html>

            ';
            mail("$email","Inscription reussie",$message,$header);
            echo '<body onLoad="alert(\'Inscription reussie Vous Pouvez vous connecter..\')">';





            
?>



<?php


       

      
      # code...
    }else echo "les mots de passe sont pas identiques";
   
      # code...
    



    # code...
  }else echo "veuillez saisir tous les champs svp  ";

 }
 

  ?>




          <?php
         
          if (isset($_POST['connexion_2'])) {


  $email = htmlspecialchars(trim($_POST['email']));
   $password = htmlspecialchars(trim($_POST['mdp']));

    
   
   if ($email&&$password) {
    $password=md5($password);

    $connect = mysql_connect('localhost','root','');
    mysql_select_db('immobilier');
    $log=mysql_query("SELECT * FROM abonne WHERE email_ab='$email' AND mdp_ab='$password'");
    
    $rows = mysql_num_rows($log);
    if ($rows ==1){
       header("location:client.php");
          while ($rows=mysql_fetch_array($log)){
      $_SESSION['email']=$email;
      $_SESSION['id_ab']=$rows['id_ab'];
    
    
       
     ?>
     


    
     
<div class="modal fade" id="connexion" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
     
<?php
  }
    }
else echo "<h4 class=text-danger>email ou mot de passe incorrecte</h4>";
     
   }else echo "remplissez bien";
  }

 


          ?>
          <h4 style="color:red;"><span class="glyphicon glyphicon-lock"></span> Connexion</h4>
        </div>
        <div class="modal-body">
          <form role="form" method="post" action="">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Email</label>
              <input type="Email" class="form-control" id="usrname" placeholder="Entrer votre email" name="email">
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="password" class="form-control" id="psw" placeholder="Entrer password" name="mdp">
            </div>
           
            <button type="submit" class="btn btn-default btn-success btn-block" name="connexion_2"><span class="glyphicon glyphicon-off"></span> Se connecter</button>
          </form>
        </div>
       

        <div class="modal-footer">
          <button type="submit" class="btn btn-default btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
          
        </div>
      </div>
    </div>
  </div>


    	



    <!--/-->
  

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="dist/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="dist/js/bootstrap.min.js"></script>
  </body>
</html>