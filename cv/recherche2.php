 <!DOCTYPE html> 
<html>
<head>
<meta charset="utf-8" />
<link rel = "stylesheet" href = "style.css"/>
<title>Frame</title>
</head>
<?php
         $serveur = "localhost";
         $login = "root";
         $pass = "nanta";
         $dbname="polytech";
         try{
             $connexion = new PDO("mysql:host=$serveur;dbname=polytech",$login, $pass);
             $connexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
             }

       
         
         catch(PDOException $e){
             echo 'Echec de la connexion : ' .$e->getMessage();
         }

    $conn = mysqli_connect($serveur, $login, $pass, $dbname);
// On récupère tout le contenu de la table jeux_video
    $quer="select * from ".$_GET['table'] ;
$reponse = $connexion->query($quer);
 /* echo $_GET['table'];
    $quer="select * from ".$_GET['table'] ;
    echo "eto";
    $reponse=mysqli_query($conn, $quer);*/
// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
/*print_r($reponse);
    while($donnees = mysqli_fetch_assoc($reponse))*/
    {?>
    
<table>
   
		<tbody>
 
 
<td><a href="<?php echo $donnees['cv']; ?>" target="droite"><?php echo $donnees['nom']; ?></a></td>
<td><?php echo $donnees['prenoms']; ?></td>

    </tbody>
    </table>
<?php
}


//$reponse->closeCursor(); // Termine le traitement de la requête
?>
</html>