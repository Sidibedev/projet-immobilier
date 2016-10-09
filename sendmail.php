<?php



$header="MIME-Version: 1.0\r\n";
            $header.='From:"PrimFx.com"<support@primfx.com>'."\n";
            $header.='Content-type:text/html; charset="utf-8"'."\n";
            $header.='Content-transfer-Encoding: 8bit';

            $message='
            <html>
             <body>
             <div align="center">
             VOtre message a bien ete envoyé

             <br />




             </div>

             </body>

             </html>

            ';
            mail("mouhamed.aly.sidibe96@gmail.com","accusé de reception",$message,$header);

            ?>