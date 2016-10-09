

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
        <li><a href="deconnexion.php">Deconnexion</a></li>
        
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<h3 class="text-primary">BONJOUR <?php echo $_SESSION['email']?>, <br> <h3 class="text-muted">Vous pouvez ajouter un nouveau bien</h3></h3><br>
 <?php

    if (isset($_GET['ajout']))
      echo "<h3 class=text-success>Votre bien a bien été ajouté</h3>";

    ?>
 <hr class="divider">

 <div class="">
  <h3 class="text-success">Donnez les informations du bien a ajouter</h3>

  <div class="row">
   

    

    <div class="col-xs-8">
     <form method="POST" action="nouveau-bien.php" >
    <input type="hidden" name="loc" id="loc" value="vente" />

     
      
           
                 
          
               <div class="form-search-top">                <input type="text" value="" class="form-control c_primax "  name="prix" id="primax" placeholder="Prix de  vente ou mensualite"><br>
                <input type="text" value="" class="form-control"  name="localisation" id="" placeholder="localisation"><BR>
                   
                <input type="text" value="" class="form-control"  name="type_bien" id="" placeholder="type du bien "><br>
                 <input type="text" value="" class="form-control" name="transaction" id="" placeholder="transaction"><br>
                  <input type="text" value="" class="form-control" name="nb_chambre" id="" placeholder="nombre de chambres"><br>
                <input type="text" value="" class="form-control "  name="superficie" id="" placeholder="superficie"><br>
                <input type="text" value="" class="form-control "  name="im_1" id="" placeholder="entrer l'url de l'image"><br>
                <input type="text" value="" class="form-control "  name="im_2" id="" placeholder="entrer l'url de l'image"><br>
                <input type="text" value="" class="form-control "  name="im_3" id="" placeholder="entrer l'url de l'image"><br>
                <input type="text" value="" class="form-control "  name="im_4" id="" placeholder="entrer l'url de l'image"><br>
                     <textarea  id="msg" class="form-control c_ required" name="desc" placeholder=" Descrivez nous le bien " ></textarea><br>

                
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
   
      <button class="btn btn-success text-right" type="submit" name="ajouter"><i class="fa fa-arrow-right">Ajouter bien</i></button><br>
  </div>
   <?php
if (isset($_POST['ajouter'])){
  $prix = htmlspecialchars($_POST['prix']);
  $type_bien = htmlspecialchars($_POST['type_bien']);
   $localisation = htmlspecialchars($_POST['localisation']);
   $superficie = htmlspecialchars($_POST['superficie']);
    $transaction = htmlspecialchars($_POST['transaction']);

     $nb_chambre = htmlspecialchars($_POST['nb_chambre']);
      $image_1= htmlspecialchars($_POST['im_1']);
       $image_2= htmlspecialchars($_POST['im_2']);
        $image_3= htmlspecialchars($_POST['im_3']);
        $image_4= htmlspecialchars($_POST['im_4']);
        $description=htmlspecialchars($_POST['desc']);

       if ($prix&&$type_bien&&$localisation&&$superficie&&$transaction&&$nb_chambre&&$image_1&&$image_2&&$image_3&&$image_4) {

         $connect = mysql_connect('localhost','root','');
  mysql_select_db('immobilier');
    $id_proprio=$_SESSION['id_proprietaire'];
  
  $requete=mysql_query("INSERT INTO bien(id_proprio,transaction,localisation,nb_chambre,superficie,type_bien,lien_image_1,lien_image_2,lien_image_3,lien_image_4,prix,description)VALUES('$id_proprio','$transaction','$localisation','$nb_chambre','$superficie','$type_bien','$image_1','$image_2','$image_3','$image_4','$prix','$description')");
  
  $req=mysql_query("SELECT * FROM alerte ");

 

  $donne = mysql_fetch_array($req);
  $id = $donne['id_ab'];
   $requ = mysql_query("SELECT * FROM abonne WHERE id_ab = '$id'");
   var_dump($requ);
  $resul = mysql_fetch_array($requ);
  $email = $resul['email_ab'];

  if (($donne['localisation'] == $localisation) || ($donne['type'] == $type_bien) || ($prix < $donne['prixmax'] && $prix > $donne['prixmin'])){
      $header="MIME-Version: 1.0\r\n";
            $header.='From:"PrimFx.com"<support@primfx.com>'."\n";
            $header.='Content-type:text/html; charset="utf-8"'."\n";
            $header.='Content-transfer-Encoding: 8bit';

            $message='
            <html>
             <body>
             <div align="center">
             On vous informe qu\'il ya un bien qui pourrait correspondre a vos attentes...

             <br />




             </div>

             </body>

             </html>

            ';
            mail($email,"accusé de reception",$message,$header);

  }
          # code...
  header('location:nouveau-bien.php?ajout=success');
        }

}



?>

   </form>


    </div>




  </div>



 


</div>


  <script src="dist/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="dist/js/bootstrap.min.js"></script>
  </body>
</html>