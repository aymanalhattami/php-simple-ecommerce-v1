
<!DOCTYPE html>
<html>
    <title>create account</title>
    <link type="text/css" rel="stylesheet" href="css/createAccount.css" >
</html>
<?php
    include('header.php');
?>

<br><br>
<div id="create-account">
    <form method="post" action="createAccount.php#goback"> 
        <h2 id="new">Create New Account</h2>
        First Name:<br>
        <input type="text" name="first_name" id="name" size="60" placeholder="Enter Your First Name" required="required" ><br><br>
        Last Name:<br>
        <input type="text" name="last_name" id="name" size="60" placeholder="Enter Your Last Name" required="required" ><br><br>
        Email: <br> 
        <input type="text" name="email" id="email" value="" size="60" required="required" placeholder="Enter Your Email" width="100px"/><br><br>
        Password: <br> 
        <input type="password" name="password" id="pass" value="" size="60" required="required" placeholder="Enter The Password"/><br><br>
        Confirm Password: <br> 
        <input type="password" name="confirm" id="confirm" value="" size="60" required="required" placeholder="Confirm Your Password"/><br><br>
        Phone:<br>
        <input type="text" name="phone" id="phone" value="" size="60" required="required" placeholder="Enter your phone"><br><br>
        Address:<br>
        <input type="text" name="address" id="address" value="" size="60" required="required" placeholder="Enter your address"><br><br>
        Country: <br> 
        <input type="text" name="country" id="country" value="" size="60" required="required" placeholder="Enter the country"><br><br>
        City:<br>
        <input type="text" name="city" id="city" value="" size="60" required="required" placeholder="Enter the city"><br><br>
           
        <input type="submit" value="Create The Account" name="submit" id="submitted"/>
    </form>
</div>


<!--     check the -->
<?php
    if(isset($_POST['submit']))
    {
        if(empty($_POST['first_name']) || empty($_POST['last_name']) || empty($_POST['email']) || empty($_POST['password']) ||                      empty($_POST['confirm']) ||  empty($_POST['country']) || empty($_POST['address']) || empty($_POST['city'] || empty($_POST['phone'])))
        {
            echo "<div style='color: red; margin-left: 550px;' >";
            echo "Error: please Enter data for all fields";
            echo "</div>";
        }
        else
        {
            $con = mysqli_connect("localhost","root","","website");
            if(mysqli_connect_errno())
            {
                echo "Failed to connect ! ".mysqli_connect_errno();
            }

            $first =$_POST['first_name'];
            $last =$_POST['last_name'];
            $email =$_POST['email'];
            $pass =$_POST['password'];
            $confirm = $_POST['confirm'];
            $country =$_POST['country'];
            $city = $_POST['city'];
            $address = $_POST['address'];
            $phone = $_POST['phone'];


            if($pass != $confirm)
            {
                echo "<div style='color: red; margin-left: 450px;'>";
                echo "The (confirm password) is not similar as the password ";
                echo '<a href="createAccount.php">Try again</a>';
                echo "</div>";
            }
            else
            {
                $sql="INSERT INTO users(fname,lname,email,password,con_password,country, city, address, phone)
                VALUES ('$first','$last','$email','$pass','$confirm','$country', '$city', '$address', '$phone')";

                if(!mysqli_query($con,$sql))
                {
                    die('Error: '.mysqli_error($con));
                }
                echo "<div style='margin-left: 550px; color: red;' id='goback'>";
                echo "Great now you have an acount on OUr site ^_^";
                echo "</div>";
            }
            mysqli_close($con);
        }
    }

?>




















<?php
    include('fotter.php');
?>
    