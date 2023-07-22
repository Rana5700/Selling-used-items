<?php

include('config.php');
$ID = $_GET['id'];
mysqli_query($x, "DELETE FROM products WHERE id=$ID");
header('location: products.php')

?>
