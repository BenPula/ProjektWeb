<?php
session_start();

$email = "";
$errors = array();

$db = mysqli_connect('localhost', 'root', '', 'project');

// REGISTRO
if (isset($_POST['email']) && isset($_POST['password'])) {

  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($email)) { 
    array_push($errors, "Email is required"); 
  }
  
  if (empty($password)) { 
    array_push($errors, "Password is required"); 
  }

  $user_check_query = "SELECT * FROM users WHERE email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { 
    if ($user['email'] === $email) {
      array_push($errors, "Email already exists");
    }
  }

  if (count($errors) == 0) {
    $password = md5($password); 
    $query = "INSERT INTO users (email, password) 
              VALUES('$email', '$password')";
    mysqli_query($db, $query);
    $_SESSION['email'] = $email;
    $_SESSION['success'] = "You are now logged in";
    header('location: adidas-allstar.php');
    exit();
  }
}

// LOGIN
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