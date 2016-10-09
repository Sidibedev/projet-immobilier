

   
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>SENimmobilier</title>

    <!-- Bootstrap -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

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
    hr{q
      border: solid 1px #eee
    }
    nav{
      margin:  0px;
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
    #co{
      background-color:grey;
    }



    </style>
  </head>
  <body>


  
<html lang="en">
<head>
  <title>vente</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
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
        <li  text-primary><a href="index.php"> <span class="sr-only glyphicon glyphicon-home"></span>ACCEUIL</a></li>
        <li><a href="achat.php">ACHETER ou LOUER</a></li>
        
        <li class="active"><a href="vendre.php">VENDRE</a></li>
        <li><a href="nous.html">NOTRE AGENCE</a></li>
         <li><a href="estimation.html">ESTIMATION</a></li>
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
      <img src="dist/image/new_img.jpg" alt="im1" class="img-responsive">
      <div class="carousel-caption">
        

        ...
      </div>
    </div>
    <div class="item">
      <img src="dist/image/new_img.jpg" alt="img2">
      <div class="carousel-caption">
      
        ...
      </div>
    </div>
     <div class="item ">
      <img src="dist/image/new_img.jpg" alt="im3">
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

<div class="container">
  
  
  <!-- Trigger the modal with a button -->
  <div class="text-center well" id="co">
    <h3 style="color:black">Notre agence vous donne la possibilite de vendre vos biens en les mettant en ligne..Pour cela vous devez disposer d'un compte...Si vous en disposez pas encore inscrivez vous ! Une fois l'inscription finie connectez vous..</h3><br> <br> <br>
  <button type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#connexion">Se Connecter</button><br> <br><br>
    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#inscription">S'inscrire</button>
    </div>
    


  <!-- Modal -->
  <div class="modal fade" id="connexion" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <?php
          session_start();
          if (isset($_POST['connexion'])) {


  $email = htmlspecialchars(trim($_POST['email']));
   $password = htmlspecialchars(trim($_POST['mdp']));

    
   
   if ($email&&$password) {
    $password=md5($password);

    $connect = mysql_connect('localhost','root','');
    mysql_select_db('immobilier');
    $log=mysql_query("SELECT * FROM proprietaire WHERE email='$email' AND password='$password'");
    
    $rows = mysql_num_rows($log);
    if ($rows ==1){
          while ($rows=mysql_fetch_array($log)){
      $_SESSION['email']=$email;
      $_SESSION['id_proprietaire']=$rows['id_proprio'];
    
     header("location:proprietaire.php");
     


    
     

     

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
           
            <button type="submit" class="btn btn-default btn-success btn-block" name="connexion"><span class="glyphicon glyphicon-off"></span> Se connecter</button>
          </form>
        </div>
       

        <div class="modal-footer">
          <button type="submit" class="btn btn-default btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
          
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="inscription" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
     
    
       <h4 style="color:red;"><span class="glyphicon glyphicon-lock"></span>Inscription<br><small>Merci de renseigner vos informations</small>



    


  </div>
        
 
   <div class="modal-body">
  <form role="form" method="post" action="vendre.php">
      <div class="form-group">
        <?php
      

if (isset($_POST['inscription'])){
  $email = htmlspecialchars(trim($_POST['email']));
  $motdepasse = htmlspecialchars(trim($_POST['motdepasse']));
   $confirm_mdp = htmlspecialchars(trim($_POST['confirm_mdp']));
   $nom = htmlspecialchars(trim($_POST['nom']));
    $prenom = htmlspecialchars(trim($_POST['prenom']));
     $adresse = htmlspecialchars(trim($_POST['adresse']));
      $telephone= htmlspecialchars(trim($_POST['telephone']));

  

  if ($email&&$motdepasse&&$confirm_mdp&&$nom&&$prenom&&$adresse&&$telephone) {
    if ($motdepasse==$confirm_mdp) {
       
        $motdepasse=md5($motdepasse);
  $confirm_mdp=md5($confirm_mdp);
  $connect = mysql_connect('localhost','root','');
  mysql_select_db('immobilier');
  $requete=mysql_query("INSERT INTO proprietaire VALUES('','$nom','$prenom','$telephone','$adresse','$motdepasse','$confirm_mdp','$email')");
  die('Inscription reussie vous pouvez vous connecter');

   echo '<body onLoad="alert(\'Inscription reussie vous pouvez vous connecter...\')">';





       

      
      # code...
    }else echo "les mots de passe sont pas identiques";
   
      # code...
    



    # code...
  }else echo "veuillez saisir tous les champs svp  ";

 }
 

  ?>


<br>
        <label for="Nom">Nom</label>
        <input type="text" class="form-control" id="nom" placeholder="entrer votre nom" name="nom" >

      </div>
     
      <div class="form-group">
        <label for="Prenom">Prenom</label>
        <input type="text" class="form-control" id="prenom" placeholder="entrer votre prenom" name="prenom">

      </div>
      <div class="form-group">
        <label for="Numere">Telephone</label>
        <input type="text" class="form-control" id="tel" placeholder="entrer votre telephone" name="telephone">

      </div>
      <div class="form-group">
        <label for="adresse">Adresse</label>
        <input type="text" class="form-control" id="adresse" placeholder="entrer votre adresse" name="adresse" >

      </div>

       <div class="form-group">
        <label for="Email">Email</label>
        <input type="Email" class="form-control" id="Email" placeholder="entrer votre Email" name="email">

        </div>
        <div class="form-group">
      <label for="password">Mot de passe</label>
        <input type="password" class="form-control" id="password" placeholder="entrer votre mot de passe" name="motdepasse" >

     </div>


     <div class="form-group">
     
      <label for="password">verification Mot de passe</label>
        <input type="password" class="form-control" id="password" placeholder="confirmer votre mot de passe" name="confirm_mdp" >

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





</body>
</html>


   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="dist/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="dist/js/bootstrap.min.js"></script>
  </body>
</html>