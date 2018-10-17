<?php
    include('head.php');   
    if(!isset($_SESSION['user']) and !isset($_SESSION['pass']))
    {    header("location: login.php"); exit; }
    
    
?>
<!DOCTYPE HTML>
<html dir="ltr">
    <head>
        <title>Watches Responsive website</title>
        <link rel="icon" href="image/ph4.jpg" type="icon/png">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <meta charset="utf-8" />
    </head>
    <body>
  
        <div id="container1">
            <div id="side1">
                <h1>woman's <br>watches</h1>
                <span>Lorem ipsum dolor sit amet <br>consectetur adipisicing.</span><br><br>
                <a href="detail.php?id=18" id="moreDetail">more details...</a>    
                <p><a href="shoping.php#a">shop <br>now!</a></p>
            </div>
            <div id="side2">
                <h1>men's <br>watches</h1>
                <span>Lorem ipsum dolor sit amet <br>consectetur adipisicing.</span><br><br>
                <a href="detail.php?id=19" id="moreDetail">more details...</a>
                <p><a href="shoping.php#a">shop <br>now!</a></p>
            </div>
            <div id="side3">
               <h1>men's <br>watches</h1>
                <span>Lorem ipsum dolor sit amet <br>consectetur adipisicing.</span><br><br>
                <a href="detail.php?id=20" id="moreDetail" >more details...</a>
                <p><a href="shoping.php#a">shop <br>now!</a></p>
            </div>
      
            <div id="side4">
                <h1>woman's <br>watches</h1>
                <span>Lorem ipsum dolor sit amet <br>consectetur adipisicing.</span><br><br>
                <a href="detail.php?id=21" id="moreDetail" >more details...</a>
                <p><a href="shoping.php#a">shop <br>now!</a></p>
            </div>
            <div id="side5">
                <h1>woman's <br>watches</h1>
                <span>Lorem ipsum dolor sit amet <br>consectetur adipisicing.</span><br><br>
                <a href="detail.php?id=22" id="moreDetail" >more details...</a>
                <p><a href="shoping.php#a">shop <br>now!</a></p>
            </div>
            <div id="side6">
               <h1>men's <br>watches</h1>
                <span>Lorem ipsum dolor sit amet <br>consectetur adipisicing.</span><br><br>
                <a href="detail.php?id=23" id="moreDetail" >more details...</a>
                <p><a href="shoping.php#a">shop <br>now!</a></p>
            </div>
            <div id="side7">
                <h1>men's <br>watches</h1>
                <span>Lorem ipsum dolor sit amet <br>consectetur adipisicing.</span><br><br>
                <a href="detail.php?id=24" id="moreDetail" >more details...</a>
                <p><a href="shoping.php#a">shop <br>now!</a></p>
            </div>
            <div id="side8">
                <h1>men's <br>watches</h1>
                <span>Lorem ipsum dolor sit amet <br>consectetur adipisicing.</span><br><br>
                <a href="detail.php?id=25" id="moreDetail" >more details...</a>
                <p><a href="shoping.php#a">shop <br>now!</a></p>
            </div>
            <div id="side9">
               <h1>men's <br>watches</h1>
                <span>Lorem ipsum dolor sit amet <br>consectetur adipisicing.</span><br><br>
                <a href="detail.php?id=26" id="moreDetail" >more details...</a><br>
                <p><a href="shoping.php#a">shop <br>now!</a></p>
            </div>
        </div>
        <div id="welcome">
            <h1>welcome</h1>
            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected      humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.
            </p>
        </div>
        <div id="photo1">
            <a href="shoping.php" title=""><img src="image/g1.jpg" width="320px" height="300px"/></a>
            <a href="shoping.php" title=""><img src="image/g2.jpg" width="320px" height="300px"/></a>
            <a href="shoping.php" title=""><img src="image/img18.jpg" width="320px" height="300px"/></a>
            <a href="shoping.php" title=""><img src="image/g4.jpg" width="320px" height="300px"/></a>
            <a href="shoping.php" title=""><img src="image/img3.jpg" width="320px" height="300px"/></a>
            <a href="shoping.php" title=""><img src="image/img9.jpg" width="320px" height="300px"/></a>
            <a href="shoping.php" title=""><img src="image/img19.jpg" width="320px" height="300px"/></a>
            <a href="shoping.php" title=""><img src="image/img21.png" width="320px" height="300px"/></a>
        </div>
        <?php include('fotter.php') ?>
    </body>


</html>