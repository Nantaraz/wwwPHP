<?php require_once 'process.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>PHP MYSQL</title>
	<meta charset="utf-8">
    <link   href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
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
		$mysqli = new mysqli('localhost','root','root','ecole') or die(mysqli_error($mysqli));
		$result = $mysqli->query("SELECT * FROM eleve") or  die($mysqli->error);
		//pre_r($result);
		//pre_r($result->fetch_assoc());
	?>
	<div class="row justify-content-center">
		<table class="table">
			<thead>
				<tr>
					<th>Id</th>
					<th>Nom</th>
					<th>Prenom</th>
					<th colspan="2">Action</th>
				</tr>
			</thead>
			<?php 
				while ($row = $result->fetch_assoc()): ?>

			<tr>
				<td><?php echo $row['id']; ?></td>
				<td><?php echo $row['nom']; ?></td>
				<td><?php echo $row['prenom']; ?></td>
				<td>
					<a href="index.php?edit=<?php echo $row['id']; ?>"
						class="btn btn-info">Edit</a>
					<a href="process.php?delete=<?php echo $row['id']; ?>"
						class="btn btn-danger">Delete</a>
				</td>
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
							<div class="input-group">
								<?php if($update == true): ?>
									<button type="submit" name="update" class="btn btn-primary">Update</button>
							
								<?php else: ?>
									<button type="submit"  name="save" class="btn btn-primary">Save</button>
								<?php endif; ?>
							</div>
			</form>
		</div>
	</center>
	</div>
</body>
</html>


