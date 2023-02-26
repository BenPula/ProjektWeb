<?php include('server.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="register.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<title>Register</title>
</head>
<body>
	<div class="form">
		<h1>Register form</h1>
		<form method="POST" action="register.php">
			<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  		</div>
  		<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password">
  		</div>
	    <br>
	    <button type="submit" name="reg_user">Submit</button>
		</form>
	</div>
</body>
</html>