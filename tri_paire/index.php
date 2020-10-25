<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>tri_paire</title>
</head>
<body>
   
     <?php

            $tab = array(2,5,7,8,9,12);
            $n = 15;
            for ($i = 0;$i<count($tab) ;$i++){ 
                if($tab[$i]%2 == 0){ 
                    echo ($tab[$i]." et ".($n - $tab[$i])."<br/>" );
                }
            }

      ?>
           
</body>
</html>
