<?php 
session_start();
    $mysqli = new mysqli('localhost','root','root','ecole') or die(mysqli_error($mysqli));
    $id = 0;
    $update = "";
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
    
    if(isset($_GET['delete'])){
        $id = $_GET['delete'];
        
        $mysqli->query("DELETE FROM eleve WHERE id = $id") or  die($mysqli->error);

        $_SESSION['message'] = "Record has been deleted";
        $_SESSION['msg_type'] = "danger";
        header("location: index.php");
    }

    if(isset($_GET['edit'])){
        $id = $_GET['edit'];
        $update = true;
        $result = $mysqli->query("SELECT * FROM eleve WHERE id = $id") or  die($mysqli->error);
        if(@count($result) == 1){
            $row = $result->fetch_array();
            $nom = $row['nom'];
            $prenom = $row['prenom'];
        }

       
    }
    if(isset($_POST['update'])){
        $id = $_POST['id'];
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $mysqli->query("UPDATE eleve SET nom='$nom', prenom='$prenom' WHERE id=$id") or  die($mysqli->error);

         $_SESSION['message'] = "Record has been updated";
        $_SESSION['msg_type'] = "warning";
        header("location: index.php");
    }
?>