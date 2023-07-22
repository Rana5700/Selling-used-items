<?php
include ('config.php');

if (isset($_POST['upload'])){
    $NAME = $_POST['name'];
    $PRICE = $_POST['price'];
    $IMAGE_LOCATION = $_FILES['image']['tmp_name'];
    $IMAGE_NAME = $_FILES['image']['name'];
    $IMAGE_UP = "images/" . $IMAGE_NAME;
    $INSERT = "INSERT INTO Prod (name, price, images) VALUES ('$NAME', '$PRICE', '$IMAGE_UP')";
    mysqli_query($x, $INSERT);
    if(move_uploaded_file($IMAGE_LOCATION, 'images/' . $IMAGE_NAME)){
        echo "<script>alert('تم رفع المنتج بنجاح')</script>";
    } else{
        echo "<script>alert('حدثت مشكلة لم يتم رفع المنتج')</script>";
    }
    header('location: index.php');
}
?>