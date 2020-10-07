<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
       $country="ksa";
        
        
       switch ($country) {
           case "egypt":

               echo 'pound';
               
               break;
  case "usa":

               echo '$';
               
               break;

           
   case "ksa":

               echo 'rialll';
               
               break;

           default:
               echo 'nooo';
               break;
       }
        
        ?>
    </body>
</html>
