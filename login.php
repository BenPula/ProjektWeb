<?php
  session_start();

  if(isset($_SESSION["email"])){
    header("location: adidas-allstar.php");
    exit;
  }

  $email = "";
  $errors = array();

  $db = mysqli_connect('localhost', 'root', '', 'project');

  if (isset($_POST['login_user'])) {

    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    if (empty($email)) {
      array_push($errors, "Email is required");
    }
    
    if (empty($password)) {
      array_push($errors, "Password is required");
    }

    if (count($errors) == 0) {
      $password = md5($password); 
      $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
      $results = mysqli_query($db, $query);
      if (mysqli_num_rows($results) == 1) {
        $user = mysqli_fetch_assoc($results);
        $_SESSION['email'] = $email;
        $_SESSION['id'] = $user['id']; 
        $_SESSION['success'] = "You are now logged in";
        if ($user['id'] == 1) {
          header('location: admin/dashboard.php');
          exit();
        } else {
          header('location: adidas-allstar.php');
          exit();
        }
      } else {
        array_push($errors, "Wrong email/password combination");
      }
    }
  }
?>
<!DOCTYPE html>
<html>
  <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="login.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <title>Login</title>
    </head>
  <body>
    <div class="form">
        <h1>Login form</h1>
        <form action="login.php" method="post">
            <div class="input-group">
                    <label>Email</label>
                    <input type="email" name="email">
              </div>
              <div class="input-group">
                    <label>Password</label>
                    <input type="password" name="password">
              </div>
        <br>
        <button type="submit" name="login_user">Submit</button>
        </form>
    </div>
  </body>
</html>

