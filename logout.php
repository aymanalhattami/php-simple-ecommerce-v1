
<?php
    $con = mysqli_connect("localhost", "root", "", "website") or die(mysqli_error());
    
    $sql = "delete from cart";
    
    $result = mysqli_query($con, $sql);

    mysqli_close($con);
    
    session_start();
    session_unset($_SESSION['user'], $_SESSION['pass']);  
    header("location: login.php");
?>