

<!DOCTYPE html>
<html>
<head>
	<title>PHP MYSQL</title>
	<meta charset="utf-8">
 </head>
<body>
<div class="container">
	
	<?php 
		if(isset( $_SESSION['message'])) : ?>
		<div class="alert alert-<?= $_SESSION['msg_type']?>">
		<?php 
			echo $_SESSION['message'];
			unset($_SESSION['message']);
		?>
		</div>
		<?php endif ?>

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
        $_SESSION['msg_type'] = "success";    }
  ?>


	<div class="row justify-content-center">
		<table class="table">
			<thead>
				<tr>
					<th>Id</th>
					<th>Nom</th>
					<th>Prenom</th>
				</tr>
			</thead>
			<?php 
				while ($row = $result->fetch_assoc()): ?>

			<tr>
				<td><?php echo $row['id']; ?></td>
				<td><?php echo $row['nom']; ?></td>
				<td><?php echo $row['prenom']; ?></td>
			</tr>
			<?php endwhile; ?>
		</table>
	</div>
	<?php 
		function pre_r($array){
			echo '<pre>';
			print_r($array);
			echo '</pre>';
		}
	?>
	<center>
		<div class="row justify-content-center">
			<form action="process.php" method="POST" >
				<input type="hidden" name="id" value="<?php echo $id; ?>">
				<div class="form-group">
					<label>nom:</label>
					<input type="text" name="nom" class="form-control" 
						value="<?php echo $nom; ?>" >
				</div>
				<div class="form-group">
					<label>prenom:</label>
					<input type="text" name="prenom" class="form-control" 
						value="<?php echo $prenom; ?>" >
				</div>

			</form>
		</div>
	</center>
	</div>
</body>
</html>

