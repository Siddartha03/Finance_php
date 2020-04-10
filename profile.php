<?php
$error = array("adhar"=>"","pan"=>"","file"=>"","pin"=>"","address"=>"");
$adhar=$pan=$file=$pin=$address="";
    if(isset($_POST['submit']))
    {
        $adhar = $_POST['adhar'];
        $pan = $_POST['pan'];
        $file = $_FILES["file"];
        $pin = $_POST['pin'];
        $address = $_POST['address'];

        $fileName = $file["name"];
        $fileTmpLoc = $file["tmp_name"];
        $fileError = $file["error"];
        $fileSize = $file["size"];

        if(empty($adhar)){
            $error['adhar'] = "Please fill your adhar id<br>";
        }
        else{
            if(strlen($adhar)<12 && strlen($adhar)>12 ) {
              $error['adhar'] = "Your adhar id is inavalid please check it<br>";
            }
        }
        if(empty($pan)){
            $error['pan']="Please fill your PAN card number";
        }
        else{
            if(!preg_match('/([A-Z]){5}([0-9]){4}([A-Z]){1}$/',$pan)) {
              $error['pan']="Inavali PAN card";
            }
        }
        if(empty($file)){
            $error['file']="Please upload your photo";
        }
            if($fileSize>3000000)
            {
                $error['file']="File size should be leass than 3MB";
            }
            
        if(empty($pin)){
            $error['pin']="Please fill your Pincode";
        }
        else{
            if(!preg_match('/^[1-9][0-9]{5}$/',$pin)) {
                $error['pin']="Inavali PINCODE";
            }
        }
        if(empty($address)){
            $error['address']="Please enter your Address";
        }
    }
?>
<!DOCTYPE html>
<html>
<meta charset="utf-8">
    <link href="profile.css" rel="stylesheet">
    <title>Profile update</title>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

<body>
<input type="checkbox" id="check">
    <label for="check">
        <i class="fas fa-bars" id="btn"></i>
        <i class="fas fa-times" id="cancel"></i>
    </label>
    <div class="sidebar">
        <img class="image" src="images/IMG-20200206-WA0003.jpg" alt="user photo">
        <br>
        <p class="email">siddusiddartha2000@gmail.com</p>
        <ul>
            <li><a href="finance.php"><i class="fa fa-home"></i>Home</a></li>
            <li><a href="getcash.php"><i class="fas fa-rupee-sign"></i>Get Cash</a></li>
            <li><a href="profile.php"><i class="fas fa-user"></i>Profile</a></li>
            <li><a href="finance.php"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
        </ul>
    </div>
    <section>
    <h1>Pocket Cash</h1>
<div class="border">
    <form action="profile.php" style="max-width:500px;margin:auto" method="POST" enctype="multipart/form-data">
  <h2>KYC verification</h2>
  <div class="input-container">
    <input class="input-field" type="number" placeholder="Adhar number" name="adhar">
  </div>
  <div class="text_color"><?php echo $error['adhar'] ?></div>
  <div class="input-container">
    <input class="input-field" type="text" placeholder="PAN card number" name="pan">
  </div>
  <div class="text_color"><?php echo $error['pan'] ?></div>
  <div class="input-container" class="image_upload"><b>Upload your selfie</b>
    <input class="input-field" type="file" placeholder="Upload your selfie" name="file">
  </div>
  <div class="text_color"><?php echo $error['file'] ?></div>
  <div class="input-container">
    <input class="input-field" type="number" placeholder="Enter pin code" name="pin">
  </div>
  <div class="text_color"><?php echo $error['pin'] ?></div>
  <b>Enter Your Address</b>
  <div class="input-container">  
    <textarea class="input-field" rows="3" cols="50" name="address"></textarea>
  </div>
  <div class="text_color"><?php echo $error['address'] ?></div>
  <input type="submit" name="submit"  class="btn" value="Upload">
</form>
</div>
 </section>

</body>
</html>