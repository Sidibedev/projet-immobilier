



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



<div class="container">

  <div class="row">

    <div class="col-sm-3 col-md-6 col-xs-12 ">
      <?php
      if (isset($_GET['detailbien'])){
       
        
        
        $detail=intval($_GET['detailbien']);
        

        
      
        

        $conect=mysql_connect('localhost','root','');
        mysql_select_db('immobilier');
      
        $requete=mysql_query("SELECT * FROM bien WHERE id_bien='$detail'");
         

      
    
   
   while ($donne=mysql_fetch_array($requete)) {
    
    
     


   
  
    ?>



  <h3 class="text-success">Description</h3>
  <p >
    <?php echo $donne['description'];?>
     </p>
</div> <br> 


    <div class="col-sm-3 sscol-md-9 col-xs-12">
       <div class="nb-tel text-primary"><h3 class="text-info">Détails de l’annonce</h3>    </div>  
  
    <ul>
          
          <li class="ref" title="référence"><span>id du bien : <?php echo $donne['id_bien'];?> </span></li>
            
          <li class="ref" title="référence"><span>Localité : <?php echo $donne['localisation'];?></span></li>
            
          <li class="ref" title="référence"><span>Type de transaction : <?php echo $donne['transaction'];?></span></li>
            
          <li class="ref" title="référence"><span>Type de bien : <?php echo $donne['type_bien'];?> </span></li>
            
          <li class="ref" title="référence"><span>Surface :<?php echo $donne['superficie'];?></span></li>
            
       
            
          <li class="ref" title="référence"><span>Nbre de chambres :<?php echo $donne['nb_chambre'];?> </span></li>
                            
                 
      </ul>
  </div>


   

  

      <div id="carousel-example-generic2" class="carousel slide" data-ride="carousel">
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
      <img src=<?php echo $donne['lien_image_1']?> alt="im1" class="responsive">
      <div class="carousel-caption">
        

        ...
      </div>
    </div>
    <div class="item">
      <img src=<?php echo $donne['lien_image_2']?> alt="img2">
      <div class="carousel-caption">
      
        ...
      </div>
    </div>
    <div class="item">
      <img src=<?php echo $donne['lien_image_3']?> alt="img2">
      <div class="carousel-caption">
      
        ...
      </div>
    </div>
     <div class="item ">
      <img src=<?php echo $donne['lien_image_4']?> alt="im3">
      <div class="carousel-caption">
      

        ...
      </div>
    </div>
    ...
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic2" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic2" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    


  <div class="titlebien">
<h3><?php echo $donne['type_bien']." : ".$donne['superficie']." m2   "?> <span><?php echo $donne['localisation']." "?><br></span>Prix :<span class="price-detail"><?php echo $donne['prix']." " ?> FCFA</span></h3>


</div>  
</div>
   

 </div>

</div>
<hr>

    
    
     
       </div>

        <h4><i class="fa fa-envelope text-info"></i>Contactez Proprietaire si vous etes interreses</h4><br>

         <?php if ((isset($_GET['error'])) && (isset($_GET['detailbien'])))
          echo "<h3 class=text-danger>veuillez remplir tous les champs</h3>";

          if (isset($_GET['success']))
          echo "<h3 class=text-success>Votre message a ete bien envoyé , un accusé de reception vous sera envoyé a votre adresse email...</h3>";
          
           

           
        ?>
                    <form method="POST" action="control.php?">
        <div>
            <input type="text" name="nom" placeholder="votre Nom:" class="form-control">
                <input type="text" name="prenom" placeholder="votre prenom:" class="form-control">
            <input type="text" name="telephone" placeholder="votre Téléphone :" class="form-control">
            <input type="text" name="email" placeholder="votre Email :" class="form-control">
            <input type="hidden" name="id_proprietaire" value="<?php echo $donne['id_proprio']?>">
            <input type="hidden" name="id_bien" value="<?php echo $donne['id_bien']?>">
          
            <textarea name="message" placeholder="Message" rows="3" class="form-control"></textarea>
        </div>
        <input type="submit" name="envoyer" value="contacter"><br><br><br><br>

       
      <!--<a href="control.php?envoyer_msg=<?php// echo $donne['id_proprio']?>" class="btn btn-primary" role="button" name="envoyer"><span class="glyphicon glyphicon-inbox"></span>envoyer</a>-->
       
</form>

 <?php
}


} ?>
     
                           
   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="dist/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="dist/js/bootstrap.min.js"></script>
  </body>
</html>