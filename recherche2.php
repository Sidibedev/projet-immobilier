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
      border: solid 1px #eee;
    }
    nav{
      margin:  0px;
    }
    #text{
      height: 160px;
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


/* Custom page CSS
-------------------------------------------------- */
/* Not required for template or sticky footer method. */

.container {
  width: auto;
  max-width: 680px;
  padding: 0 15px;
}
.container .text-muted {
  margin: 20px 0;
}


    </style>
  </head>
  <body>
    <!-- header -->
    <nav class="navbar navbar-default navbar-inverse" style="border-radius:0px !important;margin-bottom=0px;">
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
    <div class="collapse navbar-collapse text-right" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li class=" text-primary"><a href="index.php"> <span class="sr-only glyphicon glyphicon-home"></span>ACCEUIL</a></li>
        <li><a href="achat.php">ACHETER ou LOUER</a></li>
        <li><a href="vendre.php">VENDRE</a></li>
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
      <img src="dist/image/1.jpg" alt="im1" class="responsive">
      <div class="carousel-caption">
        

        ...
      </div>
    </div>
    <div class="item">
      <img src="dist/image/1.jpg" alt="img2">
      <div class="carousel-caption">
      
        ...
      </div>
    </div>
     <div class="item ">
      <img src="dist/image/1.jpg" alt="im3">
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

<?php
if (isset($_POST['rechercher'])){
  
$localisation = htmlspecialchars(trim($_POST['localite']));
$type = htmlspecialchars(trim($_POST['type']));
$prixmin = htmlspecialchars(trim($_POST['prixmin']));
$prixmax = htmlspecialchars(trim($_POST['prixmax']));
if ($localisation||$type||($prixmin&&$prixmax)){
	  $connect = mysql_connect('localhost','root','');
  mysql_select_db('immobilier');
 // $requete= mysql_query("SELECT * FROM bien WHERE localisation='$localisation' AND type_bien='$type' AND (prix<='$prixmax' AND prix>='$prixmin')");
 $requete="SELECT * FROM bien WHERE ";
 $req="INSERT INTO recherche (";
  $req1="VALUES (";
 if (!empty($localisation))
 $requete.="localisation='$localisation'" ;
 $req.="localite,";
 $req1.="$localisation,";
if(!empty($localisation)&&(!empty($type)))
  $requete.="AND type_bien='$type'";
   $req.="localite,type,";
 $req1.="$localisation,$type,";
if(empty($localisation)&&(!empty($type)))
  $requete.="type_bien='$type'";
   $req.="localite,type,";
 $req1.="pas precise,$type,";
if(!empty($prixmin) && (!empty($prixmax))&& empty($localisation) && empty($type))
  $requete.="(prix<='$prixmax' AND prix>='$prixmin')";
    $req.="localite,type,prixmin,prixmax,";
 $req1.="pas precise,pas precise,$prixmin,$prixmax";
if(!empty($prixmin) && (!empty($prixmax))&& (empty($localisation) || empty($type)))
  $requete.="AND prix<='$prixmax' AND prix>='$prixmin'";
   $req.="localite,type,prixmin,prixmax";
 $req1.="pas precise,pas precise,$prixmin,prixmax";
$requ="";
$requ.=$req.$req1;


$sql = mysql_query($requete) or die(mysql_error());
$sql1 = mysql_query($requ) or die(mysql_error());


if (mysql_num_rows($sql)) {
   
    # code...
   echo "<h3 class=text-info><u>Voici Le(s) bien(s) que vous recherchez</u> </h3><br><br>";
 
 if  (mysql_num_rows($sql1))
  echo '<body onLoad="alert(\'recherche sauvegarder...\')">';
 ?>
  <?php
   while ($donne=mysql_fetch_array($sql)) {
    ?>


 <div>




    <div class="row">


    
  <div class="col-sm-6 col-md-3">
    
 
    <div class="thumbnail">


      <img src="<?php echo $donne['lien_image_1']?>" class="img-responsive">
      <div class="caption">
        <h3 class="text-warning"><?php echo $donne['type_bien']?></h3>
        <p classe="text-warning"><?php echo $donne['localisation']?></p>
           <h4 class="text-danger"><?php echo $donne['prix']."FCFA"?></p>

 <a href="detail.php?detailbien=<?php echo$donne['id_bien']?>" class="btn btn-danger" role="button" name="detail"><span class="glyphicone glyphicon-edit"></span>voir detail</a> <br><br>

      
      </div>
    </div>

  </div> 
 
  <?php }
}else header('location:achat.php?rien=padebien');
}
else
header('location:achat.php?error=vide');
}
?> 


   
   
</div>
  </div>
 
   




</body>
</html>