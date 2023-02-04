<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="proses_login.php" method="post">
     	<h2>LOGIN FORM</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>User Name</label>
     	<input type="text" name="user" placeholder="User Name"><br>

     	<label>Password</label>
     	<input type="password" name="pass" placeholder="Password"><br>

     	<button type="submit">Login Admin</button>
     </form>
</body>
</html>