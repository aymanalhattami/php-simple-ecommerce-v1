<?php include("header.php"); ?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/buyNow.css" type="text/css">
        <title></title>
    </head>
    <body>
        <div id="payment">
            <h2 id="online">Online Payment Form</h2>
            <form action="buyNow.php" method="post">
                <table border="0" width="500">
                    <tr>
                        <td>Card Number:</td>
                        <td><input type="text" name="cardNumber"></td>
                    </tr>
                    <tr>
                        <td>CVC</td>
                        <td><input type="text" name="cvc"></td>
                    </tr>
                    <tr>
                        <td>Full Name</td>
                        <td><input type="text" name="fullName"></td>
                    </tr>
                    <tr>
                        <td>Expiration(MM/YYYY)</td>
                        <td><input type="text" name="expirDate"></td>
                    </tr>
                    <tr>
                        <td>Amount to Pay</td>
                        <td><input type="text" name="amount"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="submit" name="submit" id="submit1" value="Submit"><input type="reset" name="reset" id="reset1" value="Clear"></td>
                    </tr>
                </table>
            </form>
        </div>
        
        
        
        
        
        <?php 
        // يتم الاتي buyNow من صفحة ال submit عند الضغط على زر 
        // selling وادخالها الى جدول الـ  users يتم جلب بيانات الزبون من جدول الـ 
        //2)selling واضافتها الى جدول الـ  cart يتم جلب المنتجات التي اختارها الزبون من جدول ال 
            if(isset($_POST['submit']))//when pressing the button submit in the browser
            {
                //connect to the database
                $con21 = mysqli_connect("localhost", "root", "", "website") or die(mysqli_error());
            
                // selling جلب كل بيانات الزبون من اجل ادخالها الى جدول الـ
                $sql21  = "select * from users where fname = '".$_SESSION['user']."'";
                    
                $result21 = mysqli_query($con21, $sql21);//execute the query
                
                while($row21 = mysqli_fetch_array($result21))
                {
                    //take infromation from the table users and store them in variables
                    $username = $row21['fname'] . ' ' . $row21['lname'];
                    $useremail = $row21['email'];
                    $userphone = $row21['phone'];
                    $useraddress = $row21['address'];
                    $userCountry = $row21['country'];
                    $userCity = $row21['city'];
                }
                
                //selling واضافتها الى جدول الـ  cart استعلام اخر لجلب المنتجات من جدول الـ 
                $sql22 = "select * from cart";
                
                $result22 = mysqli_query($con21, $sql22);//execute the query
                //لانه الزبون الواحد قد يكون لة اكثر من منتج while جعلناجملة الاخال الى قاعدة البيانات في 
                while($row22 = mysqli_fetch_array($result22))
                {
                    //store information in variables
                    $pro_name = $row22['name'];
                    $pro_quantity = $row22['quantity'];
                    
                    //insert the infromation stored in the variables above into sellings table 
                    $sql10 = "insert into sellings (customer_name, customer_email, customer_phone, customer_address, product_name, product_quantity, customer_country, customer_city) values('$username', '$useremail', '$userphone', '$useraddress', '$pro_name', '$pro_quantity', '$userCountry', '$userCity')";

                $result10 = mysqli_query($con21, $sql10);//ececute the query
                    if($result10)
                    echo "<span style='margin-left: 560px; color: blue; font-size: 20px;'>Thank you for shopping</span>";
                
                }
                
                    
        
            //insert the payment infromation to the payment table
                
            if(empty($_POST['cardNumber']) || empty($_POST['cvc']) || empty($_POST['fullName']) || empty($_POST['expirDate']) || empty($_POST['amount']))
            {
                echo "<div style='color: red; margin-left: 540px; font-size: 20px;'>please enter data for all fileds</div>";
            }
            $cardNo = $_POST['cardNumber'];
            $cvc = $_POST['cvc'];
            $fullName = $_POST['fullName'];
            $expire = $_POST['expirDate'];
            $amount = $_POST['amount'];

            $sql30 = "insert into payment (cardNo, cvc, fullName, expiration, amount) values ('$cardNo', '$cvc', '$fullName', '$expire', '$amount')";
            $result30 = mysqli_query($con21, $sql30);

            }
            
        
        ?>
        <?php include("fotter.php"); ?>
    </body>
</html>