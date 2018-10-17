<?php
    @session_start();
?>
<?php
    //shop من صفحة add to cart هذه الدالة لاضافة المنتج الى قاعدة البيانات عند الضغط على زر 
    // detail او من صفحة الـ 
    function add()
    {   
        header("refresh: 0");//تحديث الصفحة
        $con = mysqli_connect('localhost', 'root', '', 'website') or die(mysqli_error());

        $customer = $_SESSION['user'];// SESSION اسم الزبون لانه محفوظ في 
        //product information
        $id = $_POST['id'];
        $name = $_POST['watch'];
        $type = $_POST['type'];
        $price = $_POST['price'];
        @$path = $_POST['path'];
        @$quantity = $_POST['quantity'];

        // قاعدة البيانات cart قبل اضافة المنتج الى جدول الـ  ،
        // نستعلم هل موجود في الجدول ام لا ،
        //اذاكان ناتج 
        // الاستعلام يساوي صفر نضيف هذا المنتج الى الجدول ،واذاكان لايساوي صفر لا نعمل اي شي
        // (cart يعني المنتج موجود في جدول ال)
        //الخطوات من 27 الى 40
        $sql = "select * from cart where id = $id";
        
        $result = mysqli_query($con, $sql);
        
        $rowNum = mysqli_num_rows($result);
        
        if($rowNum == 0)
        {
        
            $add="INSERT INTO cart(id,name,price,type, quantity, path, customer_name) VALUES ('".$id."','".$name."','".$price."','".$type."', '".$quantity."', '".$path."', '".$customer."')";
            $q = mysqli_query($con,$add);
            //add to cart التي تعمل على زيادة السعر عند الضغط على زر total استدعاء لدالة الـ 
            //في كل مرة
             //total();
            header("refresh: 0");
            //header('location:'.$_SERVER['HTTP_REFERER']);
        }
        
    } 

    
//cart هذه الدالة تعمل على حذف المنتج من جدول الـ 
// pruchase من صفحة الـ delete product  عند الضغط على زر
//تبع المنتج الى الدالة كباراميتر  id حيث يتم ارسال ال 
    function deleteFromDB($id = 0)
    {
         @header("refresh: 0");
        $con2 = mysqli_connect("localhost", "root", "", "website") or die(mysqli_error());
           
        $sql1 = "delete from cart WHERE id='".$id."'";
         //تنفيد الاستعلام
        $result = mysqli_query($con2, $sql1);
        //
        //delete product التي تعمل على تخفيض السعر عند الضغط على زر  total استدعاء لدالة الـ 
        //pruchase من صفحة الـ
        //total();
        //هذه الدالة تعمل على تحديث الصفحة
        @header("refresh: 0");
    }




// SESSION هذه الدالة تعمل على جلب السعر من قاعدة البيانات وحفظة في 
/*
function total()
{
    @header("refresh:0");
    $con = mysqli_connect("localhost","root","","website")or die("hi");
    $sql = "SELECT * FROM cart";
    $result = mysqli_query($con,$sql);
    //if($result)
    //تعريف متغير واسناد القيمة صفر
    $total = 0;
    while($row = mysqli_fetch_assoc($result))
        $total = $total +$row['price'];
    //SESSION في total حقظ قيمة المتغير 
    // في كل الصفحات header من اجل عرض المجموع في ال 
    $_SESSION['total'] = $total;
     @header("refresh: 0");
    
}
*/




//     +  هذه الدالة تعمل على زيادة الكمية عند الضغط على زر
// purchase من صفحة الـ
function inc_quantity($id = 0)
{
    $con = mysqli_connect("localhost", "root", "", "website") or die(mysqli_error());
    $sql = "SELECT * FROM cart WHERE id='".$id."'";
    $result = mysqli_query($con,$sql);
    $addQuantity = 0;
    // $addQuantity من قاعدة البيانات تبع المنتج وحفظها في المتغير quantity يتم اخذ ال
    // ثم بعد ذلك يتم اضافة 1 الى الكمية
    //اخير يتم التعديل على قاعدة البيانات
    while($row = mysqli_fetch_assoc($result))
    {
        $addQuantity = $row['quantity'];
    }
    $addQuantity = $addQuantity + '1';

    $sql20 = "update cart set quantity = " . $addQuantity . " where id =".$id;

    $result20 = mysqli_query($con, $sql20);

}

?>





