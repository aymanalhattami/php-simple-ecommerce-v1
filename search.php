<?php
//الاكواد من 3 الى 8 تمنع المتصفح من الدخول الى هذه الصفحة الا بعد تسجيل الدخول او انشاء حساب جديد
    include('header.php');
    if(!isset($_SESSION['user']) and !isset($_SESSION['pass']))
    {   
        header("location: login.php");
        exit;
    }
?>

<html>
    <head>
        <link href="css/search.css" type="text/css" rel="stylesheet">
    </head>
    <body>
        <div style='font-size: 20px; margin-left: 550px; margin-top: 20px;'>The Result of the Search </div>
<?php
    @$s =($_POST['search']);
    if($s == '')
    {
        echo "<span style='color: red; font-size: 20; margin-left: 500px;'>" . "you didn't enter a text to search for!" . "</span>";
    }
    else
    {
        $con = mysqli_connect('localhost', 'root', '', 'website') or die(mysqli_error());
        
        $sql = "select * from products where (name like '%$s%') || (color like '%$s%') || (price like '%$s%') || (type like '%$s%')";
        
        $query = @mysqli_query($con, $sql);
        
        $num = @mysqli_num_rows($query);
        
        echo "<div id='contain'>";
        while($row = mysqli_fetch_array($query))
        {     
?>
        <div id="all">
            <div id="search-img">
                <img src="<?php echo $row['pic']; ?>" width="300" height="200" style="border-radius: 30px;">
            </div>
            <div id="search-details">
                <span style="color: rgb(121, 101, 21); font-size: 20px; margin-left: 30px;"><a href="detail.php?id=<?php echo $row['id'];?>"><?php echo $row['name'] . '  ' . $row['type'] . '   ' . $row['price']  . '$  ' . $row['color']?></a></span><br> 
            </div>
        </div>
<?php
        }
        echo "</div>";
    }
?>
        
        
        
        <!-------------------------------------------------------------------------------->
        
        <!-------------------------------------------------------------------------------->
        
       
        
        <div style="width: auto; height: 10px; "></div>
        <?php include("fotter.php"); ?>
    </body>
</html>