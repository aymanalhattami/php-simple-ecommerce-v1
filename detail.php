<?php
    //الاكواد من 3 الى 8 تمنع المتصفح من الدخول الى هذه الصفحة الا بعد تسجيل الدخول او انشاء حساب جديد
    include('header.php');
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
        <link rel="stylesheet" type="text/css" href="css/detail.css">
    </head>
    <body>
       <div id="detail_con">
            <div id="right-one">
                <?php 
                    @$id = $_GET['id'];
                    $con = mysqli_connect("localhost","root","","website")or die("Error connect");
                    $sql = mysqli_query($con,"SELECT * FROM products WHERE id='".$id."'") or die("Error select");
                    while($row = mysqli_fetch_assoc($sql))
                    {
                        echo "<img src=" .$row['pic']." width='400px' height='300'><br>";
                    }
                ?>
           </div>
           <div id="left-one">
            <?php
                    $sql = mysqli_query($con,"SELECT * FROM products WHERE id='".$id."'") or die("Error select");
                    while($row = mysqli_fetch_assoc($sql))
                    {
                        echo "<span id='on-one'>Name: </span>" . "<span id='in-one'>" . $row['name'] . "</span><br><br>";
                        echo "<span id='on-two'>Type: </span>" . "<span id='in-two'>" . $row['type'] . "</span><br><br>";
                        echo "<span id='on-three'>Price: </span>" . "<span id='in-three'>" . $row['price'] . "</span><br><br>";
                        echo "<span id='on-four'>Color: </span>" . "<span id='in-four'>" . $row['color'] . "</span><br><br>";
                    
            ?>
               <form action="" method="post">
                    <input type="hidden" name="id" value="<?php echo $row['id'];  ?>">
                    <input type="hidden" name="watch" value="<?php echo $row['name'];  ?>">
                    <input type="hidden" name="path" value="<?php echo $row['pic'];  ?>">
                    <input type="hidden" name="quantity" value="1">
                    <input type="hidden" name="type" value="<?php echo $row['type']; ?>">
                    <input type="hidden" name="price" value="<?php echo $row['price']; ?>"><br>
                    <input type="submit" name="addtocart" value="Add To Cart" id="abc1">
               </form>
               <?php }; ?>
               <!--this php code is used to add selected products to the cart table in the database -->
                <?php 
                    // cart اضافة المنتج الى قاعدة البيانات الى جدول 
                    include("cart.php");//تضمين للملف الذي يحتوي على دالة الاضافة
                    if(isset($_POST['addtocart']))
                    {
                        add();//this function is used to insert the items to the database, and it's in the file cart.php
                        //header("shoping.php");
                    }
                    ?>   
           </div>
        </div>
        <div id="down">
                <?php
                    $sql = mysqli_query($con,"SELECT * FROM products WHERE id='".$id."'") or die("Error select");
                    while($row = mysqli_fetch_assoc($sql))
                    {
                        echo $row['des'];
                    }
                ?>
           </div>
        <?php
            include("fotter.php");
        ?>
    </body>
</html>