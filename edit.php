
<?php  include('php_code.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>CRUD: Update</title>
<link rel="stylesheet" type="text/css" href="styles.css">

</head>
<body>
	<form method="post" action="php_code.php" >
		<div class="input-group">
			<label>Subject ID</label>
			<input type="text" name="name" value="">
		<label>Subject Name</label>
			<input type="text" name="sname" value="">
	
		</div>
			<div class="input-group">
			<button class="btn" type="submit" name="edit" >Edit</button>
		</div>
	</form>
<?php if (isset($_SESSION['message'])): ?>
	<div class="msg">
		<?php 
			echo $_SESSION['message']; 
			unset($_SESSION['message']);
		?>
	</div>
<?php endif ?>
</body>
</html>