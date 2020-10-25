<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>decroissante </title>
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
        for($k = 0; $k  < count($tab); $k++){
         echo ($tab[$k]. ',');
        }
        
    ?>
</body>
</html>