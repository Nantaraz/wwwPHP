<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>tri_paire</title>
</head>
<body>
   
     <?php

             $tab = array(6,12, 3, 1,2,9,7);
        for ($i=0; $i < count($tab); $i++) { 
           for ($j=$i+1; $j < count($tab) ; $j++) { 
                if ( $tab[$i] < $tab[$j]) {
                    $temp = $tab[$j];
                    $tab[$j] = $tab[$i];
                    $tab[$i] = $temp;
                }
           }
           
        }
        echo $tab;
       

           
                       /*$a = 5;
           $b = 8;
           $a = $b;
           $b = $a;
           echo $a;*/
      

      ?>
           
</body>
</html>
