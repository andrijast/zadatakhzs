<?php 
	// if(isset($_GET['submit'])){
	// 	echo $_GET['email'] . '<br />';
	// 	echo $_GET['title'] . '<br />';
	// 	echo $_GET['ingredients'] . '<br />';
	// }
	if(isset($_POST['submit'])){
		echo $_POST['email'] . '<br />';
		echo $_POST['title'] . '<br />';
		echo $_POST['ingredients'] . '<br />';
	}
?>

<!DOCTYPE html>
<html>

<head>
	<?php include '../templates/head.php' ?>
    <title>Ostavite povratnu informaciju</title>
</head>
	
<body>

	<?php include '../templates/header.php'; ?>

	<section class="container grey-text">
		<h4 class="center">Ostavite povratnu informaciju</h4>
		<form class="white" action="add.php" method="POST">
			<label>Vase ime</label>
			<input type="text" name="name">
			<label>Vas Email</label>
			<input type="text" name="email">
			<label>Pizza Title</label>
			<input type="text" name="title">
			<label>Ingredients (comma separated)</label>
			<input type="text" name="ingredients">
			<div class="center">
				<input type="submit" name="submit" value="Submit" class="btn brand z-depth-0">
			</div>
		</form>
	</section>

	<?php include '../templates/footer.php'; ?>
	
</body>

</html>