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
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;    
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
        <li><a href="agence.html">home</a></li>
        <li class="active"><a href="nouveau-bien.html">Demandes d'estimation</a></li>
      
       
        <li><a href="message2.php" class="text-warning">Messages</a></li>
        <li><a href="decoadmin.php">Deconnexion</a></li>
        
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<?php 
  







    
  $connect = mysql_connect('localhost','root','');
  mysql_select_db('immobilier');
  
  


 
 

 

  $requ1=mysql_query("SELECT * FROM estimation");

   $resul = mysql_num_rows($requ1);

  
 






?>

<h3 class="text-primary">Voici les demandes d'estimation</h3>
<?php if ($resul)
    echo "<h3>vous avez des Demandes d'estimation</h3>";
   else echo "<h3>PAS DE DEMANDES D'ESTIMATION</h3>";?>
   
 <?php 

            
          

            if(isset($_GET['estimer'])){

            echo "<h4 class=text-success>ESTIMATION ENVOYEE</h4>";

            

 



          }

            if(isset($_GET['erreur']))

            echo "<h4 class=text-danger>ERREUR D'ENVOIE</h4>";




             



 while ($resul=mysql_fetch_array($requ1)) {

 
    


  ?>

 <table class="table">

            <thead>
              <tr>


                <th>nom et prenom</th>
                <th>Email</th>
                <th>telephone</th>
                <th>type du bien</th>
                <th>surface</th>
                <th>nbre de pieces</th>
                <th>ville/quartier</th>
                <th>message</th>
                
                



              </tr>


            </thead>
            <tbody>
              <tr>
                <td><?php echo $resul['prenom']." ".$resul['nom'] ?></td>
                <td><?php echo $resul['email']; ?></td>
                <td><?php echo $resul['telephone']; ?></td>
                <td><?php echo $resul['type']; ?></td>
                 <td><?php echo $resul['surface']; ?></td>
                  <td><?php echo $resul['nbpiece']; ?></td>
                   <td><?php echo $resul['localite']; ?></td>
                    <td><?php echo $resul['msg']; ?> </td>

                    

                






              </tr>
               
               
            </tbody>







          </table>
        
           <a href="reponse_estimation.php?email=<?php echo  $resul['email'];?>&id=<?php echo $resul['id_estimation'];?>&lieu=<?php echo $resul['localite'];?>&
            type=<?php echo $resul['type'];?>"><button class="btn btn-info">DONNER ESTIMATION</button></a> <a href="reponse_estimation.php?sup=<?php echo $resul['id_estimation'] ?>"><button class="btn btn-danger" name="sup">SUPPRIMER</button></a> <br><br><br><br>  

   <?php     }   ?>
        </body>

        </html>