
<?php  include('php_code.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>CRUD: CReate</title>
<link rel="stylesheet" type="text/css" href="styles.css">

</head>
<body>
	<form method="post" action="serveradd.php" >
		<div class="input-group">
			<label>Subject Name</label>
			<input type="text" name="name" value="">
		</div>
			<div class="input-group">
			<button class="btn" type="submit" name="save" >Save</button>
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