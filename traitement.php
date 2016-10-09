<?php 

if (isset($_POST['estimer'])){



	$estimation = $_POST['msg'];
	$email=$_POST['email'];
    $lieu=$_POST['lieu'];
    $type=$_POST['type'];

       
            $f='location:demande_estimation.php?estimer=success';
  header($f);

	

	$header="MIME-Version: 1.0\r\n";
            $header.='From:"PrimFx.com"<support@primfx.com>'."\n";
            $header.='Content-type:text/html; charset="utf-8"'."\n";
            $header.='Content-transfer-Encoding: 8bit';

            $message='
            <html>
             <body>
             <div align="center">
             NOtre agence a examiné votre demande d\'estimation a propos de votre '.$type . '  lieu du bien : '.$lieu. ' <br>
             et l\'estimation que nous vous donnons est de : '.$estimation. ' Merci de votre cooperation 
            

             <br />




             </div>

             </body>

             </html>

            ';

            
            mail($email,"estimation de votre bien",$message,$header);

    
}else 
header('location:demande_estimation.php?erreur=1');

?>