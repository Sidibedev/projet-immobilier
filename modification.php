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
      <ul class="nav navbar-nav">
      	<li><a href="proprietaire.php">home</a></li>
      	<li><a href="#">Mettre en ligne nouveau bien</a></li>
      
       
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="entrer la reference d' bien">
        </div>
        <button type="submit" class="btn btn-default">rechercher</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Mes messages</a></li>
        <li><a href="#">Deconnexion</a></li>
        
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<h3 class="text-primary">BONJOUR MONSIEUR,Bienvenue danns l'espace proprietaire</h3>
 <hr class="divider">
 

 <div class="container content">
  <h3 class="text-success">Modifier le bien</h3>

  <div class="row">

    

    <div class="col-xs-8">
     <form method="POST" action="">
   

     
      
           
                 
          
               <div class="form-search-top">                

                <input type="text" value="" class="form-control c_primax "  name="new_prix" id="primax" placeholder=" Nouveau Prix de  vente ou mensualite"><br>
                <input type="text" value="" class="form-control"  name="new_localisation" id="" placeholder="nouvelle localisation"><BR>
                   
                <input type="text" value="" class="form-control"   name="new_type_bien" id="" placeholder=" type "><br>
                 <input type="text" value="" class="form-control"  name="new_transaction" id="" placeholder="transaction"><br>
                  <input type="text" value="" class="form-control"  name="new_nb_chambre" id="" placeholder="nombre de chambres"><br>
                <input type="text" value="" class="form-control "  name="new_superficie" id="" placeholder="superficie"><br>
                <input type="text" value="" class="form-control "  name="new_im_1" id="" placeholder="entrer l'url de l'image"><br>
                <input type="text" value="" class="form-control "  name="new_im_2" id="" placeholder="entrer l'url de l'image"><br>
                <input type="text" value="" class="form-control "  name="new_im_3" id="" placeholder="entrer l'url de l'image"><br>
                <input type="text" value="" class="form-control "  name="new_im_4" id="" placeholder="entrer l'url de l'image"><br>
                    <textarea  id="msg" class="form-control c_ required" name="new_desc" placeholder=" Descrivez nous le bien " ></textarea><br>

                
                </div> 
                    
  <input type="hidden" name="p" id="p" value="1" />
<!--     <div class="col-cmd-1 hidden-xs hidden-md hidden-sm">
        <div class="linkMore ">
          <div class="btnBg ">
            <button class="btn btn-search-top" type="submit"><i class="fa fa-arrow-right"></i></button>
          </div>
        </div>
    </div> -->
    <br>
   
      <button class="btn btn-success text-right" type="submit" name="modifierbien"><i class="fa fa-arrow-right">Modifier bien</i></button><br>
  </div>
  </div>

</form>
  <?php

  if (isset($_GET['supprimer'])) {
    $supprimer=intval($_GET['supprimer']);
   
      

         $connect = mysql_connect('localhost','root','');
  mysql_select_db('immobilier');
    mysql_query("DELETE FROM bien WHERE id_bien='$supprimer'");
    # code...
header("location:proprietaire.php");
  }?>
<?php
if (isset($_GET['modifier'])){
  $modifier=intval($_GET['modifier']);
 // echo "test".$modifier;
 
    if(isset($_POST['modifierbien'])){
  
  $new_prix = htmlspecialchars($_POST['new_prix']);
  $new_type_bien = htmlspecialchars($_POST['new_type_bien']);
   $new_localisation = htmlspecialchars($_POST['new_localisation']);
   $new_superficie = htmlspecialchars($_POST['new_superficie']);
    $new_transaction = htmlspecialchars($_POST['new_transaction']);

     $new_nb_chambre = htmlspecialchars($_POST['new_nb_chambre']);
      $new_image_1= htmlspecialchars($_POST['new_im_1']);
       $new_image_2= htmlspecialchars($_POST['new_im_2']);
        $new_image_3= htmlspecialchars($_POST['new_im_3']);
        $new_image_4= htmlspecialchars($_POST['new_im_4']);
        $new_description=htmlspecialchars($_POST['new_desc']);

      if ($new_prix&&$new_type_bien&&$new_localisation&&$new_superficie&&$new_transaction&&$new_nb_chambre&&$new_image_1&&$new_image_2&&$new_image_3&&$new_image_4&&$new_description) {
    
         $connect = mysql_connect('localhost','root','');
  mysql_select_db('immobilier');
  $id_proprio = $_SESSION['id_proprietaire'];
  mysql_query("UPDATE bien SET id_proprio='$id_proprio',transaction='$new_transaction',localisation='$new_localisation',nb_chambre='$new_nb_chambre',superficie='$new_superficie',type_bien='$new_type_bien',lien_image_1='$new_image_1',lien_image_2='$new_image_2',lien_image_3='$new_image_3',lien_image_4='$new_image_4',prix='$new_prix',description='$new_description' WHERE id_bien='$modifier'") or die(mysql_error());


  
          # code...
   echo "<h3>le bien a bien ete modifier</h3>";
   header("location:proprietaire.php");
  
        }
      
     
     }

}



?>



</body>