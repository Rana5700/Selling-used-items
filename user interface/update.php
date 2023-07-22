<!DOCTYPE html>
<html lang="en">
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update | تعديل </title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <?php
    include('config.php');
    $ID=$_GET['Id'];
    $up = mysqli_query($x, "SELECT * FROM prod WHERE Id =$ID");
    $data = mysqli_fetch_array($up);


    
    ?>
    <center> 
        <div class="main"></div>
            <form action="up.php" method="post" enctype="multipart/form-data">
              <h2>تعديل المنتجات </h2>
              <input type="text" name='Id' value = '<?php     echo $data['Id'] ?>'>
              <br>
              <input type="text" name='name'value = '<?php     echo $data['name'] ?>'>
              <br>
              <input type="text" name='price'value = '<?php     echo $data['price'] ?>'>
              <br>
              <input type="file" id="file" name='image' style='display:none;'>
              <label for="file">تحديث صورة للمنتج </label>
              <button name='update'type='submit'>تعديل المنتج </button>
              <br><br>
              <a href="prodect.php">عرض كل المنتجات</a>
            </form>
            <div>
            <p>developed by rana </p>
    </center>
</body>
</html>