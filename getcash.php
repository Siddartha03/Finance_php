<!DOCTYPE html>
<html>
<meta charset="utf-8">
    <link href="getcash.css" rel="stylesheet">
    <title>Getcash</title>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    
<script>
    function check()
    {
        var p = parseInt(document.getElementById('t1').value);
        var t = parseInt(document.getElementById('t2').value);
        var r = 6;
        var res = (p*t*r)/100;
        var result = p+res;
        document.getElementById('t3').innerHTML=result;
    }
    function request()
    {
        var p = parseInt(document.getElementById('t1').value);
        alert("Your request has been processed within 24 hours. Thank You!");
    }
</script>
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
            <li><a href="home"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
        </ul>
    </div>
    <section>
    <h1>Pocket Cash</h1>
        <div class="anytime">
            <h1>Get Easy Loans.. <br>Anytime, Anywhere</h1>
        </div>
<div class="border">
<b>I WANT</b><br>
<b class="inr">INR</b>&nbsp
<select id='t1'>
    <option value="500">500</option>
    <option value="1000">1000</option>
    <option value="2000">2000</option>
</select><br><br>
<b class="inr">You repay after</b>
<select id='t2'>
    <option value=1>1</option>
    <option value=2>2</option>
</select>
<b style="color:red;">Month</b><br>
<br><input class="function" type="submit" onclick="check()" value="Check"><br><br>
<b class="inr">Adjusted repayment</b> <br><br>
<p id="t3"></p><br><br>
<input class="req" type="submit" name="submit" onclick="request()" value="Request">
</div>
</section>
</body>
</html>