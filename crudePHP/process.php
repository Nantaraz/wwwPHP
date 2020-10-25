<?php 
session_start();
    $mysqli = new mysqli('localhost','root','ecole') or die(mysqli_error($mysqli));
    $id = 0;
    $nom = '';
    $prenom = '';
	if(isset($_POST['save'])){
		$nom = $_POST['nom']; 
		$prenom = $_POST['prenom']; 
       
        $mysqli->query("INSERT INTO eleve (nom,prenom) VALUES('$nom','$prenom')") or  die($mysqli->error);

        $_SESSION['message'] = "Record has been saved";
        $_SESSION['msg_type'] = "success";
        header("location: index.php");
    }
  ?>