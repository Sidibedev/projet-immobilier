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
      	
                
      
       
      </ul>
     
      <ul class="nav navbar-nav navbar-right">
      <li><a href="agence.html">home</a></li>
        <li><a href="demande_estimation.php">Demandes d'estimation</a></li>
        <li><a href="proprio.php">Proprietaire</a></li>
<li><a href="message2.php">Nos messages</a></li>
        <li><a href="decoadmin.php">Deconnexion</a></li>
        
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
  
  
$requ1=mysql_query("SELECT * FROM Proprietaire ORDER BY id_proprio");

   $donne = mysql_num_rows($requ1);

  
 $id_clien=$donne['id_client'];

?>
<h3 class="text-primary"><span class="glyphicon glyphicon-inbox"></span>vOici les liste des proprietaires</h3>

<?php 




 while ($donne=mysql_fetch_array($requ1)) {

 
    


  ?>
 
        <table class="table  table-bordered">


            <thead>
              <tr>

                <th class="text-warning">Nom et prenom</th>
                <th class="text-warning">email </th>
                
                <th class="text-warning">adresse</th>
                <th class="text-warning">supprimer</th>

                



              </tr>



            </thead>




            <tbody class="body">
              
 

              <tr>



                <td class="text-primary"><?php echo $donne['nom_proprio']." ".$donne['prenom_proprio']?></td>
                <td class="text-primary"><?php echo $donne['email']?></td>
                <td class="text-primary"><?php echo $donne['adresse'] ?></td>
                <td class="text-primary"><a href="suppro.php?id=<?php echo $donne['id_proprio'] ?>" class="btn btn-danger" role="button" name="supprimer"><span class="glyphicon glyphicon-remove"></span></a></td>
                
                






              </tr>


              </tbody>


    </table>          

    <?php


}
    ?>




</body>

</html>