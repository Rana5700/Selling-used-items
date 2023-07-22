<?php
// create images directory if not exists
if (!is_dir('images')) {
    mkdir('images');
}

// set permissions for the images directory
chmod('images', 0777);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selling used items | بيع الاغراض المستعملة </title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <center> 
        <div class="main"></div>
            <form action="insert.php" method="post" enctype="multipart/form-data">
              <h2>موقع بيع الاغراض المستعملة</h2>
              <img src="download.jpeg" alt="logo" width="450px">
              <br>
              <input type="text" name='name'>
              <br>
              <input type="text" name='price'>
              <br>
              <input type="file" id="file" name='image' style='display:none'>
              <label for="file">اختيار صورة للمنتج </label>
              <button name='upload'>رفع المنتج</button>
              <br><br>
              <a href="prodect.php">عرض كل المنتجات</a>
            </form>
            <div>
            <p>developed by rana </p>
    </center>

</body>
</html>