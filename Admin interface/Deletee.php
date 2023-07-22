<?php
include('config.php');
$ID=$_GET['Id'];
mysqli_query($x, "DELETE FROM prod WHERE Id=$ID");
header('location: prodect.php');

?>