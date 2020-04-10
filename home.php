<html lsng="en" dir="ltr">
 <head>
    <meta charset="utf-8">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <style>
        #profile {
            height: 40px;
            width: 40px;
            color: white;
            margin-left: 90px;
        }
    </style>
 </head>
 <body onload="startSlide2()">
    <input type="checkbox" id="check">
    <label for="check">
        <i class="fas fa-bars" id="btn"></i>
        <i class="fas fa-times" id="cancel"></i>
    </label>
    <div class="sidebar">
    <img class="image" src="./images/new-accout.png"></i><header>User photo</header>
        <ul>
            <li><a href="home.php"><i class="fa fa-home"></i>Home</a></li>
            <li><a href="signup.php"><i class="fas fa-rupee-sign"></i>Get Cash</a></li>
            <li><a href="signup.php"><i class="fas fa-user"></i>Profile</a></li>
            <li><a href="signup.php"><i class="fas fa-sign-out-alt"></i>SignUp/SignIn</a></li>
        </ul>
    </div>
    <section>
        <h1>Pocket Cash</h1>
        <div class="anytime">
            <h1>Get Easy Loans.. <br>Anytime, Anywhere</h1>
        </div><br><br>
        <div class="explain">
            <h1>About Pocket Cash</h1>
        </div>
        <div class="division">
	    <div class="column">
			<p class="para1">Our mission is to solve problems of financial inclusion through technology.
                We are a consumer lending sartup focused on providing micro-loans to the students.
            </p> <br><br><br>
            <p class="para2">With Pocket cash you can get loan from Rs. 1,000 to Rs. 20,000 with a tenure of 
                91 days to 120 days at a Minimum APR of 20% and Maximum APR of 36%. 
            </p>
        </div>
	<div class="column">
		<img class="slideshow2" src="./images/slide1.jpg" id="img2" width="320px" height="280px">
    
	    <script>
	        var id2;
	        var j=1;
	        const imagePath2=['./images/slide2.jpg' , './images/slide3.jpg', './images/slide4.jpg' , './images/slide5.jpg'];
	        function changeImage2(){
	            document.getElementById("img2").src=imagePath2[j];

	            if(j<imagePath2.length-1)
	            {   
	                j++;
	            }
	            else
	            {
	                j=0;
	            }
	        }

	        function startSlide2()
	        {
	            id2=setInterval(changeImage2,3000)
	        }
	    </script>	
        </div>
    </div>
    </section>
    
 </body>
 </html>