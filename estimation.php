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
         <li class="active"><a href="estimation.html">ESTIMATION</a></li>
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

        <div class="col-md-12">

     <h3 class="text-success"><u>Demande d'estimation d'un bien</u></h3>
</div>  
 </div>
    </div>
<hr>

                    </div>
                    <div class="col-md-9">
                    <div class="page-bg">
<a name="targetContactForm2"></a>



       <h4> </h4>
       <div class="texte-contact text-primary text-center "> Vous souhaitez faire estimer votre bien ? Seule une visite permet d'en déterminer le prix. Complétez et renvoyez le formulaire ci-dessous afin quun de nos conseillers vous contacte dans les meilleurs délais pour convenir d?un rendez-vous.</div><br>
        <?php  if (isset($_GET['success']))
          echo "<h3 class=text-success>Votre demande a ete bien envoyé , vous recevrez sous peu une estimation de votre bien</h3>";
          if (isset($_GET['error']))
          echo "<h3 class=text-danger>verifier bien</h3>";



          ?>
        <form method="post" action="estim.php" id="formcontac" class="text-center">
        <div class="infoPerso bienEstim text-center">
          <div class="col-md-6">
          <input type="text" class="form-control c_ required" name="nom" placeholder="Votre Nom" value="" /><br>
          </div>
                    <div class="col-md-6"> 
          <input type="text" class="form-control c_ required" name="prénom" placeholder=" Votre Prénom" value="" /><br>
          </div>
                    <div class="col-md-6">
          <input type="email" class="form-control c_ required" name="email" placeholder="Votre Email" value="" /><br>
          </div>
                    <div class="col-md-6">
          <input type="text" class="form-control c_ required" name="telephone" placeholder="Téléphone" value="" /><br>
          </div>
                    <div class="col-md-6">
          <input type="text" class="form-control c_ required" name="type_bien" placeholder="Type de bien a estimer" value="" /><br>
          </div>
                    <div class="col-md-6">
          <input type="text" class="form-control c_ required" name="surface" placeholder="Surface en m² du bien" value="" /><br>
          </div>
                    <div class="col-md-6">
          <input type="text" class="form-control c_" name="nbpiece" placeholder="Nombres de pièces "  value="" /><br>
          </div>
                    <div class="col-md-6">
          <input type="text" class="form-control c_ required" name="loc" placeholder="Ville / quartier" value="" /><br>
          </div>
                    <div class="col-md-12">
            <textarea  id="text"class="form-control c_ required" name="msg" placeholder="Précisez votre demande" ></textarea><br>
          </div>
                </div>
          <div class="linkSend">
            
            <button class="btn btn-success" name="estimer"> ENVOYER</button><br><br><br><br>  <br><br><br><br> <br><br><br><br>
          </div>
          </form>
          
          </div>                    </div>


                                                                        </div>
                        </div>
   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   
     <div class="footer">
      <div class="containerd">
        <p class="text-muted">@ Copyright >SIDIBE . 2016<br>keur massar , dakar,senegal</p>
      </div>
    </div>

 <script src="dist/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="dist/js/bootstrap.min.js"></script>
 

   
  </body>
</html>