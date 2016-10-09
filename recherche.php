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
 <nav class="navbar navbar-default navbar-inverse " style="border-radius:0px !important;margin-bottom=0px;">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
   <div class="navbar-header ">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.html">SEN<em><small class="text-primary">immobilier <span class="glyphicon glyphicon-home"></span></small></em></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
      	<li><a href="proprietaire.php">home</a></li>
      	<li><a href="nouveau-bien.php">Mettre en ligne nouveau bien</a></li>
      
       
      </ul>
      <form class="navbar-form navbar-left" role="search" method="POST" action="recherche.php">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="entrer l'identifiant du bien" name="identifiant">
        </div>
        <button type="submit" class="btn btn-default" name="rechercher">rechercher bien</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="message.php" class="text-warning">Message</a></li>
        <li><a href="deconnexion.php">Deconnexion</a></li>
        
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<?php
if (isset($_POST['rechercher']))
  
 $identifiant = htmlspecialchars(trim($_POST['identifiant']));
if ($identifiant) {
	  $connect = mysql_connect('localhost','root','');
  mysql_select_db('immobilier');
  $id_proprio=$_SESSION['id_proprietaire'];
  $requete= mysql_query("SELECT * FROM bien WHERE id_proprio='$id_proprio' AND id_bien='$identifiant'");
  if (mysql_num_rows($requete)) {
   
    # code...
   echo "<h3 class=text-info><u>Voici le Bien correspondant a cet identifiant</u> </h3>";
 }else echo "<h3 class=text-danger> Vous ne posseder pas ce bien</h3>";
 
 ?>
  <?php
   while ($donne=mysql_fetch_array($requete)) {
    ?>


 <div class="container">


    <div class="row">


    
  <div class="col-sm-8 col-md-5 col-xs-12">
    
 <center>
    <div class="thumbnail">


      <img src="<?php echo $donne['lien_image_1']?>" class="img-responsive">
      <div class="caption">
        <h3 class="text-warning"><?php echo $donne['type_bien']?></h3>
        <p classe="text-warning"><?php echo $donne['localisation']?></p>
           <h4 class="text-danger"><?php echo $donne['prix']."FCFA"?></p>

 <a href="modification.php?modifier=<?php echo$donne['id_bien']?>" class="btn btn-warning" role="button" name="modifier"><span class="glyphicone glyphicon-edit"></span>modifer</a> <br><br>

 <a href="modification.php?supprimer=<?php echo$donne['id_bien']?>" class="btn btn-danger" role="button" name="supprimer"><span class="glyphicon glyphicon-remove"></span>supprimer</a>

      
      </div>
    </div>
  </div> 
 


   
   
</div>
  </div>
  </center>
   
  <?php }
}
?> 




</body>
</html>