<?php

include ('config.php');

if(isset($_POST['add'])){
    $NAME = $_POST['name'];
    $PRICE = $_POST['price'];
    $insert = "INSERT INTO addcard (name , price) VALUES ('$NAME',$PRICE)";
    mysqli_query($x,$insert);
    header('Location:card.php');
}








?>