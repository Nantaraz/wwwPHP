<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>exercice </title>
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
    <?php
        $a = array(6, 3, 1, 1);
        $b = array(2, 1, 1, 1, 1);
        $sum = array();
        if ($a <$b) {
            $tab = $a;
        }else{
            $tab = $b;
        }

        for ($i=0; $i < count($tab); $i++) { 
            $sum  =  ($a[$i] +  $b[$i]) ;
            echo ($sum. '<br>');
        }
        
        for ($k=$i; $k < count($a) ; $k++) { 
            $sum  =  ($a[$k] ) ;
            echo($sum. '<br>');
        }
        for ($k=$i; $k < count($b) ; $k++) { 
            $sum  =  ($b[$k] ) ;
            echo($sum. '<br>');
        }
        
    ?>
</body>
<script>

</script>
</html>