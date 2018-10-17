<?php
    /*if(session_status() == PHP_SESSION_NONE)
    {
        @session_start();
    }*/
session_start()
?>
<html dir="ltr">
    <head>
        <title>Watches Responsive website</title>
        <link rel="icon" href="image/ph4.jpg" type="icon/png">
        <link rel="stylesheet" type="text/css" href="css/head.css">
        <meta charset="utf-8" />
    </head>
<body>
     <div id="header">
            <div id="clear"> </div> 
            <div style="color: white;">
                <?php  echo "Welcome " . $_SESSION['user']; ?>
            </div>
            <div id="search">
                <form action="search.php" method="post">
                    <input type="search" placeholder="Enter Your Search Item..." name="search"/>
                    <input type="submit" value="search" name="search">
                </form>
            </div>
            <div id="account">
                <a href="login.php">
                    my account <img src="image/account.jpg" width="16"/>
                </a>
            </div>
            <div id="cart">
                 <span id="carttttt">
                     
                <?php 
            header("refresh");
            $con = mysqli_connect("localhost", "root", "", "website") or die("error connect to the database");
            $sql = "select * from cart ";
            $sql2 = "select sum(price*quantity) as new from cart";
            $result2 = mysqli_query($con,$sql2);
            $total = 0;
            while($row2 = mysqli_fetch_assoc($result2))
            {
                $total =$row2['new'];
            
            }
            echo  '$'.$total;
            header("refresh");
             ?>
                </span>
                <a href="purchases.php"><img src="image/phoo.gif" width="60" /></a>
            </div>
            <div id="menu">
                <ul>
                    <li><a href="logout.php">logout</a></li>
                    <li><a href="login.php">login</a></li>
                    <li><a href="contact.php">contact</a></li>
                    <li><a href="purchases.php">buyings</a></li>
                    <li><a href="shoping.php">shop</a></li>
                    <li><a href="index.php">home</a></li>                
                </ul>
            </div>
            <div id="logo">
                <h1><a href="index.php">WATCHES</a></h1>
            </div>
        </div>
    
</body>
</html>