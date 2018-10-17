<?php
    include('header.php');
    if(!isset($_SESSION['user']) and !isset($_SESSION['pass']))
    {   
        header("location: login.php");
        exit;
    }
?>
<!DOCTYPE HTML>
<html dir="ltr">
    <head>
        <title>Watches Responsive website</title>
        <link rel="icon" href="image/ph4.jpg" type="icon/png">
        <link rel="stylesheet" type="text/css" href="css/contact.css">
        <meta charset="utf-8" />
    </head>
<body>
     <div id="contact1">
        <h1>contact info</h1>
        <p>
            Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum
        </p><br>
        <div id="cont1">
            <div id="phone">
                Phone : +1 800 245 2365 <br><br>
                Website :<a href="">www.demolink.com</a>
            </div>
            <div id="email">
                    Email :<a href="">mail(at)watches.com</a><br><br>
                    Address : sana'a Hail street
            </div>
        </div>
         <h1 id="feed">Feedback</h1>
         
         <form action="contact.php#con_us" method="post">
         <div id="send">
             
             <div id="sendem">
                 <input type="text" placeholder="Name" name="name"><br>
                 <input type="email" placeholder="Email" name="email"><br>
                 <input type="text" placeholder="subject" name="subject"><br>
             </div>
                 <textarea placeholder="Message" cols="70" rows="12" name="message"></textarea>
         </div>
              <div id="sub">
              <input type="submit" name="submit" value="send message &gt;&gt; ">
             </div>
         </form>
         
         
    <?php
        if(isset($_POST['submit']))
        {
            if(empty($_POST['name']) or empty($_POST['email']) or empty($_POST['subject']) or empty($_POST['message']))
            {
                echo '<div style="width: 270px; text-align: center; margin: auto; color: red; font-size: 20px;">';
                echo "please enter data for all fields";
                echo '</div>'; 
            }
            else
            {
                $con = mysqli_connect('localhost', 'root', '', 'website') or die(mysqli_error());

                $name = $_POST['name'];
                $email = $_POST['email'];
                $subject = $_POST['subject'];
                $message = $_POST['message'];

                $sql = "insert into contacts(name, email, subject, message) values('$name', '$email', '$subject', '$message')";
                $result = @mysqli_query($con, $sql) or die(@mysqli_error());
                echo '<div style="width: 250px; text-align: center; margin: auto; color: red; font-size: 20px;" id="con_us">';
                echo "Thank you for contact us";
                echo '</div>'; 
                
                mysqli_close($con);
            }
        }
    
         ?>
         
         
         
         
         
         
         
         
         
         
         
         
         
   <?php include('fotter.php'); ?>
    </div>
</body>
</html>