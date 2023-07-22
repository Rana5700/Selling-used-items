<?php
include ('config.php');

if (isset($_POST['update'])){
    $ID = $_POST['Id'];
    $NAME = $_POST['name'];
    $PRICE = $_POST['price'];
    $IMAGE_LOCATION= $_FILES['image']['tmp_name'];
    $IMAGE_NAME= $_FILES['image']['name'];
    $IMAGE_UP = "images/" . $IMAGE_NAME;
    $update = "UPDATE prod SET name='$NAME', price='$PRICE', image='$IMAGE_UP' WHERE Id='$ID'";
    mysqli_query($x, $update);
    if(move_uploaded_file($IMAGE_LOCATION, 'images/' . $IMAGE_NAME)){
        echo "<script>alert('تم تحديث المنتج بنجاح')</script>";
    } else{
        echo "<script>alert('حدثت مشكلة لم يتم رفع المنتج')</script>";
    }
    header('location: index.php');
}
?>

