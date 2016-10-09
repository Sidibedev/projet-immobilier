<html>
<head>

<title>

</title>
</head>
<body>
<?php 

if (isset($_GET['rechercher'])) {
    $recherche=intval($_GET['rechercher']);
   
      

         $connect = mysql_connect('localhost','root','');
  mysql_select_db('immobilier');
    $req=mysql_query("SELECT * FROM recherche WHERE id_recherche='$recherche'");
    
   
    $resul = mysql_fetch_array($req);
    $localisation=$resul['localite'];
    $prixmin=$resul['prixmin'];
    $prixmax=$resul['prixmax'];
  
    $type=$resul['type'];

    
    
 $requete=mysql_query("SELECT * FROM bien WHERE localisation ='$localisation' OR type_bien='$type' OR (prix>$prixmin && prix<$prixmax) ");


 
    
    # code...
while($donne =mysql_fetch_array($requete)) {?>


 
<div class="container-fluid">




    <div class="row">


    
  <div class="col-sm-6 col-md-3">
    
 
    


      <img src="<?php echo $donne['lien_image_1']?>" class="img-responsive">
      
        <h3 class="text-warning"><?php echo $donne['type_bien']?></h3>
        <p classe="text-warning"><?php echo $donne['localisation']?></p>
           <h4 class="text-danger"><?php echo $donne['prix']."FCFA"?></p>

 <a href="detail.php?detailbien=<?php echo$donne['id_bien']?>" class="btn btn-danger" role="button" name="detail"><span class="glyphicone glyphicon-edit"></span>voir detail</a> <br><br>

      
      </div>
    </div>

  </div> 
  

<?php }

  
}?>




</body>

</html>