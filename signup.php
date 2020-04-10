<!DOCTYPE html>
<html>

<?php
    include('dbconnection.php');
    include("db1.php");    // if file is not founded. then also the html block will execute
    //require( "arrays.php");      // if file is not founded. then the html block won't execute
$error = array("name"=>"","email"=>"","password"=>"","password_confirm"=>"","details"=>"");
$name=$email=$password=$password_confirm=$details="";
if(isset($_POST["submit"]))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];

    if(empty($name)){
        $error['name'] = "Name can't be blank!!<br>";
      }
      else{
        if(!preg_match('/^[A-Za-z ]+$/',$name)) {
          $error['name'] = "Name can contain alphabets and spaces only!<br>";
        }
      }
      if(empty($email)){
        $error['email'] = "Email can't be blank!!<br>";
      }
      else{
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
          $error['email'] = "Email has to be a valid email address!<br>";
        }
      }
      if(empty($password)){
        $error['password'] = "Password can't be blank!!<br>";
      }
      else{
        if(!preg_match('((?=.*\\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%]).{6,20})',$password)) {
          $error['password'] = "Password must include at least one upper case letter, one lower case letter, one numeric digit and one special characgter.<br>";
        }
      }
      if(empty($password_confirm)){
        $error['password_cofirm'] = "Password can't be blank!!<br>";
      }
      else{
        if($password!=$password_confirm) {
          $error['password_confirm'] = "Password and Confirm password must be equal<br>";
        }
      }
      $rs=mysqli_query($conn,"select * from profile where email='$email'");
      if (mysqli_num_rows($rs)>0)
      {
        $error['details'] = "This email id is already exists please signup with other email";
      }else{
        $q = "insert into profile(name,email,password) values('$name','$email','$password')";
        $res = $conn->query($q);
        if($res=true)
        {
          header('Location:signin.php');
        }
      }
}
?>
    <head>
        <link rel="stylesheet" href="style.css">
        <title>Sign up</title>
        <style>
            @import "https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css";
            body{
      margin: 0;
      padding: 0;
      font-family: sans-serif;
      background-image: url("./images/color3.jpg");
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
    a {
        color: red;
        font-size: 17px;
    }
    .p{
        color: red;
        border-radius: 10px;
    }
    .p:hover {
        cursor:pointer;
        color: blue;
    }
    .text_color {
      color:red;
      font-size: 17px;
    }
  .text_color2 {
      color:red;
      font-size: 23px;
      text-align:center;
  }
        </style>
  </head>
<body>
  <div class="text_color2"><?php echo $error['details'] ?></div>
    <form action="signup.php" method="POST">
      <div class="login-box">
		<h1>Sign Up</h1>
		  <div class="textbox">
        <i class="fa fa-user" aria-hidden="true"></i>
        <input id="t1" type="text" name="name" placeholder="Full name" value="">
		  </div>
      <div class="text_color"><?php echo $error['name'] ?></div>
        <div class="textbox">
			      <i class="fa fa-envelope-o" aria-hidden="true"></i>
            <input id="t3" type="text" name="email" placeholder="Email" value=""> 
        </div>
        <div class="text_color"><?php echo $error['email'] ?></div>
        <div class="textbox">
          	<i class="fa fa-lock" aria-hidden="true"></i>
          	<input id="t4" type="password" name="password" placeholder="password" value="">
        </div>
        <div class="text_color"><?php echo $error['password'] ?></div>
        <div class="textbox">
          	<i class="fa fa-lock" aria-hidden="true"></i>
          	<input id="t5" type="password" name="password_confirm" placeholder="Confirm password" value="">
        </div>
        <div class="text_color"><?php echo $error['password_confirm'] ?></div>
        <input class="btn" type="submit" value="SignUp" name="submit"><br>
        If you have already an account please <a style="text-decoration: none" href="signin.php">Login</a>
      </div>
    </form>
</body>

</html>