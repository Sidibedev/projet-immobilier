 <?php

 if (isset($_GET['id'])) {
    $supprimer=intval($_GET['id']);
   
      

         $connect = mysql_connect('localhost','root','');
  mysql_select_db('immobilier');
    mysql_query("DELETE FROM proprietaire WHERE id_proprio='$supprimer'");
    # code...
header("location:proprio.php");
  }?>