 <?php

 if (isset($_GET['sup'])) {
    $supprimer=intval($_GET['sup']);
   
      

         $connect = mysql_connect('localhost','root','');
  mysql_select_db('immobilier');
    mysql_query("DELETE FROM recherche WHERE id_recherche='$supprimer'");
    # code...
header("location:sauvegarde.php");
  }?>

  