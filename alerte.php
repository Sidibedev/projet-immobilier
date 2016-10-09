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
      <a class="navbar-brand" href="index.php">SEN<em><small class="text-primary">immobilier <span class="glyphicon glyphicon-home"></span></small></em></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
       
     
      <ul class="nav navbar-nav navbar-right">
        <li><a href="client.php" class="text-warning">home</a></li>


        <li><a href="alerte.php">Mes alertes Mail</a></li>
        <li><a href="sauvegarde.php">Mes recherches </a></li>
                <li><a href="decoabonne.php">Deconnexion</a></li>
      
        
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
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
<img src="dist/image/logo.png"><br><br>

<div class="container">

   <div class="row">

    <h2 class="text-warning"><u>Gerer mes alertes e-mails</u></h2>
    <ul>

  <?php 


  $connect = mysql_connect('localhost','root','');
  mysql_select_db('immobilier');
  $id=$_SESSION['id'];
  
  
$requ1=mysql_query("SELECT * FROM alerte WHERE id_ab='$id'");

   $donne = mysql_num_rows($requ1);
    while ($donne=mysql_fetch_array($requ1)) {


      ?>


 <li>   <div style="width=900px;height:350px;border:1px solid #000;" class="col-md-9"> 

      <ul>
        <li><h3 class="text-info">type du bien :<h4 class="text-danger"> <?php echo $donne['type'] ?></h4></h3></li>

        <li><h3 class="text-info">localisation du bien :<h4 class="text-danger"> <?php echo $donne['localisation'] ?></h4></h3></li>

        <li><h3 class="text-info">prix min du bien : <h4 class="text-danger"><?php echo $donne['prixmin'] ?></h4></h3></li>

        <li><h3 class="text-info">prix max du bien : <h4 class="text-danger"><?php echo $donne['prixmax'] ?></h4></h3></li>


      </ul>




    </div>

     <div class="col-md-3">
      <a href="recheralerte.php?rechercher=<?php echo $donne['id_alerte'] ?>" class="btn btn-warning" role="button" name="modifier"><span class="glyphicone glyphicon-edit"></span>RECHERCHER</a> <br><br>
      <br><br>   <br><br>   

 <a href="supalerte.php?sup=<?php echo $donne['id_alerte'] ?>" class="btn btn-danger" role="button" name="supprimer"><span class="glyphicon glyphicon-remove"></span>SUPPRIMER</a>


     </div></li>
<?php }?>
</body>
</html>