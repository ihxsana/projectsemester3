<?php
include "databaseadmin.php";
session_start();

if (isset($_POST['signin'])) {
$username = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM `admin` WHERE email = '$username' AND password = '$password'";
$result = $db->query($sql);

if ($result->num_rows > 0) {
  $data = $result->fetch_assoc();
  $_SESSION["email"] = $data["username"];
  $_SESSION["isLogin"] = true;

header("location:dashboardbeta.php");
}else{
  echo "Invalid email or password";
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container" id="signIn">
    <h1 class="form-title">Login Admin</h1>
    <form method="POST" action="loginadmin.php">
      <div class="input-group"> 
        <i class="fas fa-envelope"></i>
        <input type="email" name="email" id="email" placeholder="Email" required>
      </div>
      <div class="input-group password">
        <i class="fas fa-lock"></i>
        <input type="password" name="password" id="password" placeholder="Password" required>
        <i id="eye" class="fa fa-eye"></i>
      </div>
      <p class="recover">
        <a href="#">Recover Password</a>
      </p>
      <input type="submit" class="btn" value="Sign In" name="signin">
    </form>
    <div class="links">
      <a href="index.php">Login as Member</a>
    </div>
  </div>
  <script src="script.js"></script>
</body>

</html>