<?php
    if(isset($_POST['submit']))
    {
        //Send otp to user Email
        $name = $_POST['name'];
        $email = $_POST['email'];
        $msg=401562;

        $to = "siddusiddartha2000@gmail.com";
        $subject = "Contact form ".$name;
        $message = "<h2>Pocket cash<h2>
                    <h4>Name: ".$name."</h4>
                    <h4>Email: ".$email."</h4>
                    <br>
                    OPT: <h1>".$msg."</h1>
        ";
        $headers = "Content-Type:text/html; charset=utf-8"."\r\n";
        
        $headers .= "From: ".$name."<".$email.">";

        if(mail($to,$subject,$message,$headers))
        {
            echo "Mail sent Successfully!";
        }else{
            echo "Mail sending Failed!";
        }
    }
    
?>