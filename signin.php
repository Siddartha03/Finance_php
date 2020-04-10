<?php
include('db1.php');
$error = array("email"=>"","password"=>"","details"=>"");
$email=$password=$details="";
session_start();
if(isset($_POST["submit"]))
{
  $email = $_POST['email'];
  $password = $_POST['password'];
  if(empty($email)){
    $error['email'] = "Please enter your email<br>";
  }
  if(empty($password)){
    $error['password'] = "Please enter the password!!<br>";
  }
  else {
    $q = mysqli_query($conn,"select email, password from profile where email='$email' and password='$password'");
    if(mysqli_num_rows($q)==1)
    {
      $_SESSION['email'] = $email;
      header('Location:finance.php');
    }
    else{
      $error['details']="Your Login id or Password is invalid";
    }
  }
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Signin</title>
	<link rel="stylesheet" href="bootstrap.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style type="text/css" media="screen">
    @import "https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css";
    body{
      margin: 0;
      padding: 0;
      font-family: sans-serif;
      background-image: url("./images/Colour1.jpg");
      background-size: cover;
    }
    .login-box {
      width: 280px;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      color: white;
      font-size: 13px;
    }
    .login-box h1 {
      float: left;
      font-size: 40px;
      border-bottom: 6px solid #4caf50;
      margin-bottom: 50px;
      padding: 13px;
    }
    .textbox {
      width: 100%;
      overflow: hidden;
      font-size: 20px;
      padding: 8px 0;
      margin: 8px 0;
      border-bottom: 1px solid #4caf50;
    }
    .textbox i {
      width: 26px;
      float: left;
      text-align: center;
    }
    .textbox input {
      border: none;
      outline: none;
      background: none;
      color: white;
      font-size: 18px;
      width: 80%;
      float: left;
      margin: 0 10px;
    }
    .btn {
      width: 100%;
      background: none;
      border: 2px solid #4caf50;
      color: white;
      padding:  5px;
      font-size: 18px;
      cursor: pointer;
      margin: 12px 0;
    }
    h1 {
      color: white;
      text-align: center;
    }
    .logo {
      display: block;
      margin-left: auto;
      margin-right: auto;
      border-radius: 10px 10px;
      margin-top: 10px; 
    }
    a {
        color: red;
        font-size: 20px;
    }
    .text_color2 {
      color:red;
      font-size: 23px;
      text-align:center;
    }
    .text_color {
      color:red;
      font-size: 17px;
    }
    </style>
    </head>

    <body>
    <form action="signin.php" method="POST">
    <br><br><div class="text_color2"><?php echo $error['details'] ?></div>
      <div class="login-box">
        <h1>Login</h1>
        <div class="textbox">
          <i class="fa fa-envelope-o" aria-hidden="true"></i>
          <input id="t1" type="text" name="email" placeholder="Email" value="">
        </div>
        <div class="text_color"><?php echo $error['email'] ?></div>
        <div class="textbox">
          <i class="fa fa-lock" aria-hidden="true"></i>
          <input id="t2" type="password" name="password" placeholder="password" value="">
        </div>
        <div class="text_color"><?php echo $error['password'] ?></div>
        <input class="btn" type="submit" name="submit" value="Login"><br>
        If you're not registerd pleace <a style="text-decoration: none" href="signup.php">Register</a>
      </div>
    </form>

</body>
</html>