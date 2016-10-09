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
    
      <form class="navbar-form navbar-left" role="search">
        
        
      </form>
      <ul class="nav navbar-nav navbar-right">
          <li><a href="proprietaire.html">home</a></li>
        <li class="active"><a href="nouveau-bien.html">Demandes d'estimation</a></li>
        <li><a href="message2.php" class="text-warning">Messages</a></li>
        <li><a href="#">Deconnexion</a></li>
        
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<?php
if (isset($_GET['sup'])) {
    $supprimer=intval($_GET['sup']);
   
      

         $connect = mysql_connect('localhost','root','');
  mysql_select_db('immobilier');
    mysql_query("DELETE FROM estimation WHERE id_estimation='$supprimer'");
    # code...
header("location:demande_estimation.php");

}

?>
<h3 class="text-success">Donnez une estimation du bien</h3>
<hr>

<br>

  
          <br>
              
         
                  
                    <form method="POST" action="traitement.php">


                   
                    
                    <div class="col-md-12">
                       
            <textarea  id="msg" class="form-control c_ required" name="msg" placeholder="Donner une Estimation" ></textarea><br>
           <input type="hidden" name="email" value="<?php echo $_GET['email'];?>"> 
            <input type="hidden" name="lieu" value="<?php echo $_GET['lieu'];?>"> 
                <input type="hidden" name="type" value="<?php echo $_GET['type'];?>"> 



              <button class="btn btn-success" name="estimer">ESTIMER </button> 
          </div>
                </div>

       

         <?php



         ?>
            </form>

</body>