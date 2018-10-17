<?php
    //start the session
    if(session_status() == PHP_SESSION_NONE)
    {
        session_start();
    }
?>
<!DOCTYPE HTML>
<html dir="ltr">
    <head>
        <title></title>
        <meta charset="utf-8" />
        <meta name="" content="" />
        <meta name="" content="" />
        <link href="css/login.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <?php
            include("header.php");
        ?>
        <div id="container">
            <div id="cheking">
                <div id="login">

                    <form method="POST" action="login.php#returnBack">
                        <fieldset>
                            <legend><h1>account</h1></legend>
                            first name: <br> <input type="text" name="name" size="60" required="required" placeholder="Enter Your name"                                                     width="100px"/>  <br><br>
                            password: <br> <input type="password" name="password" value="" size="60" required="required" 
                                     placeholder="Enter Your Password"/><br><br>
                            <input type="submit" value="login" name="submit" id="submit"/>
                        </fieldset>

                    </form>
                </div>
                
                <!--check user inputs -->
                <?php
                    if(isset($_POST['submit']))
                    {
                        $name = $_POST['name'];
                        $password = $_POST['password'];

                        if(empty($name) || empty($password))
                            echo "error";
                        else
                        {   
                            $con = mysqli_connect('localhost', 'root', '', 'website');
                            if(mysqli_connect_errno())
                                echo "error.... " . mysqli_connect_error();

                            $sql = "select fname, password from users";
                            $result = mysqli_query($con, $sql);
                            while($row = mysqli_fetch_array($result))
                            {
                                if($name == $row['fname'] and $password == $row['password'])
                                {
                                    //session variable
                                    $_SESSION['user'] = $name;
                                    $_SESSION['pass'] = $password;
                                    header('location: index.php');
                                }

                            }
                             echo "<div style='color: red; font-size: 20px; width: 500px; margin-left: 0;  max-height: 200px; margin-top: 280px; margin-left: 10px;' id='returnBack'>";
                                    echo "Your name and/or password is wrong.... <br>Do you have account? ";
                                    echo "<a href='createAccount.php'>click here </a>";
                                    echo "to create new account";
                                echo "</div>";
                        }
                    }

                ?>
            </div>





                <div id="side">
                    <a href=""><img src="image/s1.jpg" width="320px" /></a>
                    <a href="createAccount.php" id="accounting">create an account</a>
                </div>
        </div>
        <?php
            include("fotter.php");
        ?>