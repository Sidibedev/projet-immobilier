<!-- boostrap navbar -->

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
    body{
      background-color:black;
    }
    .body{
      width: 100px;
      height: 100px;
    }
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

  table{
    border: 1px solid black;
    border-collapse: collapse;
    table-layout: fixed;
    width: 400px;  
}

th, td {
    border: 1px solid black;
    word-break: break-all;
}
    



    </style>
  </head>
  <body background="black">
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
        <li><a href="nouveau-bien.php">Mettre en ligne nouveau bien</a></li>
      
       
      </ul>
      <form class="navbar-form navbar-left" role="search" method="POST" action="recherche.php">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="entrer l'identifiant du bien" name="identifiant">
        </div>
        <button type="submit" class="btn btn-default" name="rechercher">rechercher bien</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Mes messages</a></li>
        <li><a href="deconnexion.php">Deconnexion</a></li>

      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
    <?php


/*if (isset($_GET['envoyer_msg'])){
  $id_proprio=intval($_GET['envoyer_msg']);
  echo $id_proprio;}*/




    
  $connect = mysql_connect('localhost','root','');
  mysql_select_db('immobilier');
  
  


 $id_prop = $_SESSION['id_proprietaire'];
 

 

  $requ1=mysql_query("SELECT DISTINCT * FROM message WHERE id_proprio='$id_prop'");

   $donne = mysql_num_rows($requ1);

  
 





$id_clien=$donne['id_client'];










  





       

      
      # code...
    
   
      # code...
    



    # code...
 

 

?>
<h3 class="text-primary"><span class="glyphicon glyphicon-inbox"></span>BOITE DE RECEPTION</h3>
 <?php if ($donne){
    echo "<h3>vous avez des messages</h3>";
   }else echo "<h3>vous n'avez pas de message</h3>";?>

<?php 




 while ($donne=mysql_fetch_array($requ1)) {

 
    


  ?>
 
        <table class="table  table-bordered">


            <thead>
              <tr>

                <th class="text-warning">Expediteur</th>
                <th class="text-warning">Contenu du Message </th>
                
                <th class="text-warning">Identifiant du bien</th>
                



              </tr>



            </thead>




            <tbody class="body">
              
 

              <tr>



                <td class="text-primary"><?php echo $donne['email_client']?></td>
                <td class="text-primary"><a href=""><?php echo $donne['contenu']?></a></td>
                <td class="text-primary"><?php echo $donne['id_bien'] ?></td>
                






              </tr>


              </tbody>


    </table>          

    <?php


}
    ?>

</body>
</htlm>