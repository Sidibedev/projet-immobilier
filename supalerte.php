<?php

 if (isset($_GET['sup'])) {
    $supprimer=intval($_GET['sup']);
   
      

         $connect = mysql_connect('localhost','root','');
  mysql_select_db('immobilier');
    mysql_query("DELETE FROM alerte WHERE id_alerte='$supprimer'");
    # code...
header("location:alerte.php");
  }?>

  