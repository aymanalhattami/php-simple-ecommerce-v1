<?php
    //الاكواد من 3 الى 8 تمنع المتصفح من الدخول الى هذه الصفحة الا بعد تسجيل الدخول او انشاء حساب جديد
    include_once('header.php');
    if(!isset($_SESSION['user']) and !isset($_SESSION['pass']))
    {   
        header("location: login.php");
        exit;
    }
?>

<!DOCTYPE HTML>
<html>
    <head>
        <title>Watches Responsive website</title>
        <link rel="stylesheet" type="text/css" href="css/shop.css">
    </head>
    <body>
        <div id="container">
        <div id="right1">
            <div id="b">
                <img src="image/img6.jpg" width="250" id="one" />
                <span id="two">
                    <a href="" id="f">CASIO</a><br><br>
                    $150.00<br><br>
                    <form action="shoping.php" method="post">
                        <input type="hidden" name="id" value="1">
                        <input type="hidden" name="path" value="image/img6.jpg">
                        <input type="hidden" name="quantity" value="1">
                        <input type="hidden" name="watch" value="casio">
                        <input type="hidden" name="type" value="men">
                        <input type="hidden" name="price" value="150">
                        <input type="submit" name="addtocart" value="Add To Cart" id="ab1">
                    </form>
                    <a href="detail.php?id=1" id="more-details">more details...</a>
                </span>
            </div>
            <!--this php code is used to add selected products to the cart table in the database for all the products in this page-->
            <?php 
                // cart اضافة المنتج الى قاعدة البيانات في جدول ال
                // add to cart هذه الاكوادتنفذ عند الضغط على زر 
                // shop من صفحة ال
                include("cart.php");
                if(isset($_POST['addtocart']))
                {
                    // cart.php هذه الدالة في الملف 
                    add();
                }
            ?>
            <div id="c">
                <img src="image/img1.jpg" width="250" id="one" />
                <span id="two">
                    <a href="" id="f"> LLC</a><br><br>
                    $70.00<br><br>
                    <form action="shoping.php" method="post">
                        <input type="hidden" name="id" value="4">
                        <input type="hidden" name="path" value="image/img1.jpg">
                        <input type="hidden" name="quantity" value="1">
                        <input type="hidden" name="watch" value="LLC">
                        <input type="hidden" name="type" value="Men">
                        <input type="hidden" name="price" value="70.00">
                        <input type="submit" name="addtocart" value="Add To Cart" id="ab2">
                    </form>
                    <a href="detail.php?id=4" id="more-details">more details...</a>
                </span>
            </div>
            
            <div id="d">
                <img src="image/img26.jpg" width="250" id="one" />
                <span id="two">
                    <a href="" id="f">GUESS</a><br><br>
                    $80.30<br><br>
                    <form action="shoping.php" method="post">
                        <input type="hidden" name="id" value="7">
                        <input type="hidden" name="path" value="image/img26.jpg">
                        <input type="hidden" name="quantity" value="1">
                        <input type="hidden" name="watch" value="GUESS">
                        <input type="hidden" name="type" value="Men">
                        <input type="hidden" name="price" value="90.00">
                        <input type="submit" name="addtocart" value="Add To Cart" id="ab3">
                    </form>
                    <a href="detail.php?id=7" id="more-details">more details...</a>
                </span>
            </div>
            
            <div id="e">
                <img src="image/3.jpg" width="250" id="one"  />
                <span id="two">
                    <a href="" id="f">CITIZEN</a><br><br>
                    $250.00<br><br>
                    <form action="shoping.php" method="post">
                        <input type="hidden" name="id" value="10">
                        <input type="hidden" name="path" value="image/3.jpg">
                        <input type="hidden" name="quantity" value="1">
                        <input type="hidden" name="watch" value="CITIZEN">
                        <input type="hidden" name="type" value="Men">
                        <input type="hidden" name="price" value="250.00">
                        <input type="submit" name="addtocart" value="Add To Cart" id="ab4">
                    </form>
                    <a href="detail.php?id=10" id="more-details">more details...</a>
                </span>
            </div>
            
            <div id="h">
                <img src="image/img4.jpg" width="250"  id="one"  />
                <span id="two">
                    <a href="" id="f">GUESS</a><br><br>
                    $100.00<br><br>
                    <form action="shoping.php" method="post">
                        <input type="hidden" name="id" value="13">
                        <input type="hidden" name="path" value="image/img4.jpg">
                        <input type="hidden" name="quantity" value="1">
                        <input type="hidden" name="watch" value="GUESS">
                        <input type="hidden" name="type" value="Men">
                        <input type="hidden" name="price" value="100.00">
                        <input type="submit" name="addtocart" value="Add To Cart" id="ab5">
                    </form>
                    <a href="detail.php?id=13" id="more-details">more details...</a>
                </span>
            </div>
        </div>
        
        <div id="right2">
            <h4 id="a">RELATED PRODUCTS</h4>
            <div id="b">
                <img src="image/m2.jpg" width="150" id="one" />
                <span id="two">
                    <a href="" id="f">MAX</a><br><br>
                    $100.00<br><br>
                    <form action="shoping.php" method="post">
                        <input type="hidden" name="id" value="2">
                        <input type="hidden" name="path" value="image/m2.jpg">
                        <input type="hidden" name="quantity" value="1">
                        <input type="hidden" name="watch" value="MAX">
                        <input type="hidden" name="type" value="Men">
                        <input type="hidden" name="price" value="100.00">
                        <input type="submit" name="addtocart" value="Add To Cart" id="ab6">
                    </form>
                    <a href="detail.php?id=2" id="more-details">more details...</a>
                </span>
            </div>
            <div id="c">
                <img src="image/m3.jpg" width="150" id="one" />
                <span id="two">
                    <a href="" id="f">FENDI</a><br><br>
                    $150.00<br><br>
                    <form action="shoping.php" method="post">
                        <input type="hidden" name="id" value="5">
                        <input type="hidden" name="path" value="image/m3.jpg">
                        <input type="hidden" name="quantity" value="1">
                        <input type="hidden" name="watch" value="FENDI">
                        <input type="hidden" name="type" value="Men">
                        <input type="hidden" name="price" value="150">
                        <input type="submit" name="addtocart" value="Add To Cart" id="ab7">
                    </form>
                    <a href="detail.php?id=5" id="more-details">more details...</a>
                </span>
            </div>
            <div id="d">
                <img src="image/m5.jpg" width="150" id="one" />
                <span id="two">
                    <a href="" id="f">MOVADO</a><br><br>
                    $75.00<br><br>
                    <form action="shoping.php" method="post">
                        <input type="hidden" name="id" value="8">
                        <input type="hidden" name="path" value="image/m5.jpg">
                        <input type="hidden" name="quantity" value="1">
                        <input type="hidden" name="watch" value="MOVADO">
                        <input type="hidden" name="type" value="Men">
                        <input type="hidden" name="price" value="75.00">
                        <input type="submit" name="addtocart" value="Add To Cart" id="ab8">
                    </form>
                    <a href="detail.php?id=8" id="more-details">more details...</a>
                </span>
            </div>
            <div id="e">
                <img src="image/m6.jpg" width="150" id="one" />
                <span id="two">
                    <a href="" id="f">FENDI</a><br><br>
                    $75.00<br><br>
                    <form action="shoping.php" method="post">
                        <input type="hidden" name="id" value="11">
                        <input type="hidden" name="path" value="image/m6.jpg">
                        <input type="hidden" name="quantity" value="1">
                        <input type="hidden" name="watch" value="FENDI">
                        <input type="hidden" name="type" value="Men">
                        <input type="hidden" name="price" value="75.00">
                        <input type="submit" name="addtocart" value="Add To Cart" id="ab9">
                    </form>
                    <a href="detail.php?id=11" id="more-details">more details...</a>
                </span>
            </div>
            <!-------------------------------------------------------------------------------->
            <div id="e">
                <img src="image/images-13.jpg" width="150" id="one" />
                <span id="two">
                    <a href="" id="f">FENDI</a><br><br>
                    $75.00<br><br>
                    <form action="shoping.php" method="post">
                        <input type="hidden" name="id" value="27">
                        <input type="hidden" name="path" value="image/images-13.jpg">
                        <input type="hidden" name="quantity" value="1">
                        <input type="hidden" name="watch" value="FENDI">
                        <input type="hidden" name="type" value="Men">
                        <input type="hidden" name="price" value="90.00">
                        <input type="submit" name="addtocart" value="Add To Cart" id="ab9">
                    </form>
                    <a href="detail.php?id=27" id="more-details">more details...</a>
                </span>
            </div>
        </div>
        <div id="right3">
            <div id="b">
                <img src="image/images-21.jpg" width="150" id="one" height="200"/>
                <span id="two">
                    <a href="" id="f">OMAX</a><br><br>
                    $90.00<br><br>
                    <form action="shoping.php" method="post">
                        <input type="hidden" name="id" value="3">
                        <input type="hidden" name="path" value="image/images-21.jpg">
                        <input type="hidden" name="quantity" value="1">
                        <input type="hidden" name="watch" value="OMAX">
                        <input type="hidden" name="type" value="Men">
                        <input type="hidden" name="price" value="90.00">
                        <input type="submit" name="addtocart" value="Add To Cart" id="ab10">
                    </form>
                    <a href="detail.php?id=3" id="more-details">more details...</a>
                </span>
            </div>
            <div id="c">
                <img src="image/m4.jpg" width="150" id="one"/>
                <span id="two"><br>
                    <a href="" id="f">ICE</a><br><br>
                    $30.00<br><br>
                    <form action="shoping.php" method="post">
                        <input type="hidden" name="id" value="6">
                        <input type="hidden" name="path" value="image/m4.jpg">
                        <input type="hidden" name="quantity" value="1">
                        <input type="hidden" name="watch" value="ICE">
                        <input type="hidden" name="type" value="Men">
                        <input type="hidden" name="price" value="30.00">
                        <input type="submit" name="addtocart" value="Add To Cart" id="ab11">
                    </form>
                    <a href="detail.php?id=6" id="more-details">more details...</a>
                </span>
            </div>
            <div id="d">
                <img src="image/m1.jpg" width="150" id="one"  />
                <span id="two">
                    <a href="" id="f">MOVADO</a><br><br>
                    $80.00<br><br>
                    <form action="shoping.php" method="post">
                        <input type="hidden" name="id" value="9">
                        <input type="hidden" name="path" value="image/m1.jpg">
                        <input type="hidden" name="quantity" value="1">
                        <input type="hidden" name="watch" value="MOVADO">
                        <input type="hidden" name="type" value="Men">
                        <input type="hidden" name="price" value="80.00">
                        <input type="submit" name="addtocart" value="Add To Cart" id="ab12">
                    </form>
                    <a href="detail.php?id=9" id="more-details">more details...</a>
                </span>
            </div>
            <div id="e">
                <img src="image/images-14.jpg" width="150" height="190" id="one" />
                <span id="two">
                    <a href="" id="f">CROTON</a><br><br>
                    $80.00<br><br>
                    <form action="shoping.php" method="post">
                        <input type="hidden" name="id" value="12">
                        <input type="hidden" name="path" value="image/images-14.jpg">
                        <input type="hidden" name="quantity" value="1">
                        <input type="hidden" name="watch" value="CROTON">
                        <input type="hidden" name="type" value="Men">
                        <input type="hidden" name="price" value="80.00">
                        <input type="submit" name="addtocart" value="Add To Cart" id="ab13">
                    </form>
                    <a href="detail.php?id=12" id="more-details">more details...</a>
                </span>
            </div>
            <!--------------------------------------------------------------------------->
            <div id="e">
                <img src="image/images-11.jpg" width="150" height="190" id="one" />
                <span id="two">
                    <a href="" id="f">CROTON</a><br><br>
                    $80.00<br><br>
                    <form action="shoping.php" method="post">
                        <input type="hidden" name="id" value="28">
                        <input type="hidden" name="path" value="image/images-11.jpg">
                        <input type="hidden" name="quantity" value="1">
                        <input type="hidden" name="watch" value="CROTON">
                        <input type="hidden" name="type" value="Women">
                        <input type="hidden" name="price" value="85.00">
                        <input type="submit" name="addtocart" value="Add To Cart" id="ab13">
                    </form>
                    <a href="detail.php?id=28" id="more-details">more details...</a>
                </span>
            </div>
        </div>
        </div>
            <div id="base">
                <img src="image/images-8.jpg" width="300" id="img" height="200"/>
                <img src="image/images-10.jpg" width="300" id="img1" height="200"/>
                <img src="image/images-17.jpg" width="300" id="img2" height="200"/>
                <img src="image/2.jpg" width="300" id="img2" height="200"/>
            </div>
            <div id="base1">
                <div id="three">
                        <a href="" id="f">ICE</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        $60.00<br><br>
                        <form action="shoping.php" method="post" style="float: left;">
                            <input type="hidden" name="id" value="14">
                            <input type="hidden" name="path" value="image/images-8.jpg">
                            <input type="hidden" name="quantity" value="1">
                            <input type="hidden" name="watch" value="ICE">
                            <input type="hidden" name="type" value="Women">
                            <input type="hidden" name="price" value="60.00">
                            <input type="submit" name="addtocart" value="Add To Cart" id="ab14">
                        </form>    
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="detail.php?id=14" id="more-details" style="margin-left: 40px;">more details...</a>
                </div>
                
                <div id="four">
                        <a href="" id="f">CROTON</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        $56.00<br><br>
                        <form action="shoping.php" method="post" style="float: left;">
                            <input type="hidden" name="id" value="15">
                            <input type="hidden" name="path" value="image/images-10.jpg">
                            <input type="hidden" name="quantity" value="1">
                            <input type="hidden" name="watch" value="CROTON">
                            <input type="hidden" name="type" value="Women">
                            <input type="hidden" name="price" value="56.00">
                            <input type="submit" name="addtocart" value="Add To Cart" id="ab15">
                        </form>   
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="detail.php?id=15" id="more-details" style="margin-left: 40px;">more details...</a>
                </div>
                <div id="five">
                        <a href="" id="f">alerting</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        $20.00<br><br>
                        <form action="shoping.php" method="post" style="float: left;">
                            <input type="hidden" name="id" value="16">
                            <input type="hidden" name="path" value="image/images-17.jpg">
                            <input type="hidden" name="quantity" value="1">
                            <input type="hidden" name="watch" value="Alert">
                            <input type="hidden" name="type" value="alert">
                            <input type="hidden" name="price" value="20.00">
                            <input type="submit" name="addtocart" value="Add To Cart" id="ab16">
                        </form>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="detail.php?id=16" id="more-details" style="margin-left: 35px;">more details...</a>
                </div>
                <div id="six">
                        <a href="" id="f">SEIKO</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        $200.00<br><br>
                        <form action="shoping.php" method="post" style="float: left;">
                            <input type="hidden" name="id" value="17">
                            <input type="hidden" name="path" value="image/2.jpg">
                            <input type="hidden" name="quantity" value="1">
                            <input type="hidden" name="watch" value="SEIKO">
                            <input type="hidden" name="type" value="Men">
                            <input type="hidden" name="price" value="200.00">
                            <input type="submit" name="addtocart" value="Add To Cart" id="ab17">
                        </form>
                        <a href="detail.php?id=17" id="more-details" style="margin-left: 40px;">more details...</a>
                </div>
            </div>
        <?php
            include_once("fotter.php");
        ?>
    </body>
</html>