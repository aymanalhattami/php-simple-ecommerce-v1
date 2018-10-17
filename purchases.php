<?php
    //الاكواد من 3 الى 8 تمنع المتصفح من الدخول الى هذه الصفحة الا بعد تسجيل الدخول او انشاء حساب جديد
    include('header.php');
    if(!isset($_SESSION['user']) and !isset($_SESSION['pass']))
    {   
        header("location: login.php");
        exit;
    }
?>


<?php
    // delete-product هذه  الاكواد تعمل على حذف منتج محدد عند الضغط على زر 
    //purchase من صفحة الـ 
    if(isset($_POST['id']))// id يتم اخذ ال 
        $id = $_POST['id'];

    // delete-product شرط تحقق انة اذا تم الضغط على زر 
    if(isset($_POST["delete-product1"]) && $_POST["delete-product1"] =='Delete Product')
    {
        //تضمين للملف الذي يحتوي على دالة الحذف
        include("cart.php");
        $id = $_POST['id'];   
        deleteFromDB($id);      
    }   
    @header("refresh");
?>
<?php
    if(isset($_POST['id']))
        $id = $_POST['id'];// id يتم اخذ الـ 
    // + هذه الاكواد تنفذ عند الضغط على زر 
    //تعمل هذه الاكواد على زيادة كمية المنتج
    //$addQuantity = 0;
    if(isset($_POST['quantity']))
    {
        //تضمين للملف الذي يحتوي على دالة زيادة الكمية
        include("cart.php");
        inc_quantity($id);
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <link href="css/purchases.css" type="text/css" rel="stylesheet">
    </head>
    <body>
        <?php
            // SESSION الزيون الذي دخل الى الموقع يكون مخزن في 
            // في متغير SESSION لذلك نحفظ قيمة الـ 
            $user = $_SESSION['user'];

            $con1 = mysqli_connect("localhost", "root", "", "website") or die(mysqli_error());
            // users استعلام لاخذ بيانات الزبون من جدول الـ 
            $sql1 = "select * from users where fname = '".$_SESSION['user']."'";
            
            $result1 = mysqli_query($con1, $sql1);
            // الاكواد من 59 الى 94 لعرض بيانات الزبون في هذ الصفحة بشكل منسق
            if(isset($result1))
            {
                while($row1 = @mysqli_fetch_array($result1))
                {
                    echo "<br>";
                    echo "<table border='0' style='margin: auto; width: 400px; margin-left: 500px;'>";
                        echo "<tr>";
                            echo "<td colspan='2' style='color: black; font-size: 25px;'>CUSTOMER &nbsp;&nbsp;&nbsp;INFORMATION</td>";
                        echo "</tr>";
                        echo "<tr>";
                            echo "<td style='color: #B31A1A; font-size: 20px;'>Name:  </td>";
                            echo "<td style='color: #B31A1A; font-size: 20px;'>" . $row1['fname'] . ' ' . $row1['lname'] . "</td>";
                        echo "</tr>";
                        echo "<tr>";
                            echo "<td style='color: #B31A1A; font-size: 20px;'>Phone:  </td>";
                            echo "<td style='color: #B31A1A; font-size: 20px;'>" . $row1['phone'] . "</td>";
                        echo "</tr>";
                        echo "<tr>";
                            echo "<td style='color: #B31A1A; font-size: 20px;'>Email:</td>";
                            echo "<td style='color: #B31A1A; font-size: 20px;'>" . $row1['email'] . "</td>";
                        echo "</tr>";
                        echo "<tr>";
                            echo "<td style='color: #B31A1A; font-size: 20px;'>Address:</td>";
                            echo "<td style='color: #B31A1A; font-size: 20px;'>" . $row1['address'] . "</td>";
                        echo "</tr>";
                        echo "<tr>";
                            echo "<td style='color: #B31A1A; font-size: 20px;'>City: </td>";
                            echo "<td style='color: #B31A1A; font-size: 20px;'>" . $row1['city'] . "</td>";
                        echo "</tr>";
                        echo "<tr>";
                            echo "<td style='color: #B31A1A; font-size: 20px;'>Country: </td>";
                            echo "<td style='color: #B31A1A; font-size: 20px;'>" . $row1['country'] . "</td>";
                        echo "</tr>";
                    echo "</table>";
                }
            }
        ?>  
        
        <?php
            //cart اخذ البيانات من جدول الـ 
            //  هذه الاكواد من 100 الى 147 لعرض المنتجات التي اختارها الزبون من الموقع بشكل منسق
            $con = mysqli_connect("localhost", "root", "", "website") or die("error connect to the database");

            $sql = "select * from cart ";
            //هذا الاستعلام يضرب الكمية في السعر
            //ثم يجمع كل اسعار المنتجات في الجدول
            // تبع كل الصفحات header من اجل عرضها في ال
            $sql2 = "select sum(price*quantity) as new from cart";
            $result2 = mysqli_query($con,$sql2);
            //  من اجل ان يحتفظ  $totalعرفنا متغير 
            //   بناتج الاستعلام  وهو ضرب الكمية في السعر ثم ايجاد المجوع لكل  المنتجات
            
            $total = 0;
            while($row2 = mysqli_fetch_assoc($result2))
            {
                $total =$row2['new'];
            
            }
            //SESSION في  $total حفظ قيمة المتغير 
            $_SESSION['total2']=$total;
            
            $result = mysqli_query($con, $sql);
    
            echo "<br><br>";
            while($row = mysqli_fetch_array($result))
            {
                //كل الاكواد التالية هي لاظهار المنتجات بشكل منسق
        ?>
            
            <div id="buying-img">
                <img src="<?php echo $row['path']; ?>" id="buy-img">
                <span id="buying-det">
                    <?php  
                        echo "Product Name: <span style='color: #B31A1A;'>" . $row['name'] . "</span><br><br>" ;
                        echo "Type of Product: <span style='color: #B31A1A;'>" . $row['type'] . "</span><br><br>";
                        echo "Product Price: <span style='color: #B31A1A;'>" . $row['price']*$row['quantity']  . "$" . "</span><br><br>";
                        echo "Quantity: <span style='color: #B31A1A;'>" . $row['quantity'] . "</span>" . "<br><br>";    
                        $pro_id = $row['id'];
                    ?>
                    <form action="purchases.php" method="post">
                        Increase Quantity:<input type="submit" name="quantity" id="quantity" value="+">
                        <input type="submit" name="delete-product1" value="Delete Product" id="delete">
                        <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                    </form>
                </span>
            </div>
        <?php            
            }
            ?>
        
        
        <?php
    // cart حذف كل البيانات من جدول الـ 
    // من كل البيانات cart هذه الاكواد تعمل على تفريغ جدول 
    // Empty Cart عند الضغط على زر 
    if(isset($_POST['deleteAll']) and $_POST['deleteAll'] == 'Empty Cart')
    { 
        @header("refresh:0");
        echo "<div style='float: left; font-size: 20px; margin-left: 600px;'>The cart is empty</div>";
        
        
        $conn = mysqli_connect("localhost", "root", "", "website") or die(mysqli_error());

        $sqll1 = "delete from cart";

        $resultt1 = mysqli_query($conn, $sqll1);

        include("cart.php");
        deleteFromDB();

        //@header("refresh:0");
        
    }
?>
        
        <br><br>
        <div id="deleteCArt">
            <form action="" method="post">
                <input type="submit" name="deleteAll" value="Empty Cart" id="deleteAll">
            </form>
            <form action="buyNow.php" method="post">
                <input type="submit" name="buyNow" value="Buy Now" id="buyNow">
            </form>
        </div>
        
        
        
        <div style="width: auto; height: 10px; "></div>
        <?php include("fotter.php"); ?>
    </body>
</html>