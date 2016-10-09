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
    
    #div1{
      background-color:black;
      padding: 50px;
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
        <li  text-primary><a href="index.php"> <span class="sr-only glyphicon glyphicon-home"></span>ACCEUIL</a></li>
        <li class="active"><a href="achat.php">ACHETER ou LOUER</a></li>
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
      <img src="dist/image/7_bon.jpg" alt="im1" class="responsive">
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
      <img src="dist/image/7_bon.jpg" alt="im3">
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
<div>

  <div class="row">
    <div class="col-md-9 col-sm-9 col-xs-12">
      <h3 class="text-muted text-center"><u> Voici la liste de nos biens disponibles</u></h3>

      <?php
      $connect = mysql_connect('localhost','root','');
      mysql_select_db('immobilier');
      $query=mysql_query("SELECT * FROM bien");
      if (mysql_num_rows($query)) {
   
    # code...


 
 
  
   while ($donne=mysql_fetch_array($query)) {
    ?>


      
             <div class="col-sm-6 col-md-4">
   
    <div class="thumbnail">
      <img src="<?php echo $donne['lien_image_1']?>" class="img-responsive img-rounded">
      <div class="caption">
       
        <h3 class="text-muted"><?php echo $donne['type_bien']?></h3>
          <h4 class="text-danger text-right"><u><?php echo $donne['prix']."  FCFA"?></u></h4>
        <a href="detail.php?detailbien=<?php echo$donne['id_bien']?>" class="btn btn-info" role="button" name="detail"><span class="glyphicone glyphicon-edit"></span>voir detail</a> <br><br>
      </div>
    </div>
  </div>
  <?php } 
}?>
</div>


    <div class="col-sm-3 col-md-3 col-xs-12" id="div1">
      <h3 class="text-muted text-center"><u>Affiner Votre recherche</u></h3>
      <?php if (isset($_GET['error']))
            echo "<h3 class=text-danger>veuillez remplir au moins un champ<h3> ";
            if (isset($_GET['rien']))
            echo "<h3 class=text-danger>Nous ne possedons pas ce bien<h3> ";
?>

  <form method="post" action="recherche2.php"
  id="formcontac" class="text-center">
        <div class="infoPerso bienEstim text-center">
          <div class="col-md-12">
           <select class="form-control" id="" name="localite">
                                      <option>entrer la localité</option>
                                <?php
                                   
                                   $req1 = mysql_query("SELECT DISTINCT localisation FROM bien ") or die(mysql_error());

                                   if (mysql_num_rows($req1)>0){
                                    while ($result=mysql_fetch_array($req1)) {
                                      echo "<option>".$result['localisation']."</option>";
                                    }
                                    
                                   }
                                   
                                ?>
                              </select><br>
          </div><br>
          <div class="col-md-12">
         <select class="form-control" id="" name="type">
                                      <option>Entrer le type du bien</option>
                                <?php
                                   
                                   $req1 = mysql_query("SELECT DISTINCT type_bien FROM bien ") or die(mysql_error());

                                   if (mysql_num_rows($req1)>0){
                                    while ($result=mysql_fetch_array($req1)) {
                                      echo "<option>".$result['type_bien']."</option>";
                                    }
                                    
                                   }else echo "<h4 class=text-danger>NOUS NE POSSEDONS PAS CE BIEN!!!!!!!</h4>";
                                   
                                ?>
                              </select><br>
          </div><br>
          <div class="col-md-12">
          <input type="text" class="form-control c_ required" name="prixmin" placeholder="prix minimum" value="" /><br>
          </div><br>
          <div class="col-md-12">
          <input type="text" class="form-control c_ required" name="prixmax" placeholder="prix maximum" value="" /><br>
          </div>


          <div class="linkSend">
            
            <button class="btn btn-success" name="rechercher">Rechercher</button><br><br><br><br>  



          </div>
        </div>


      </form>
    </div>
    




   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="dist/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="dist/js/bootstrap.min.js"></script>
  </body>
</html>