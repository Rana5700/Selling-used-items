<?php
include('config.php');
$ID=$_GET['Id'];
$up = mysqli_query($x,"select * from  prod where Id = $ID");
$data = mysqli_fetch_array($up); 
?>
<!DOCTYPE html>
<html lang="enxz">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تاكيد شراء المنتج </title>
    <style>
        input{
            display: none ;
        }
        .main{
            width :30% ;
            padding : 20px;
            box-shadow :1px 1px 10px silver;
            margin-top :50px;
        }

    </style>
</head>
<body>
    <center>
        <div class="main">
           <form action="insert_card.php" method = "post">
            <h2>هل فعلا تريد شراء المنتج </h2>
            <input type="text" name="Id" value = '<?php echo $data ['Id']?>'>
            <input type="text" name="name"value = '<?php echo $data ['name']?> '>
            <input type="text" name="price" value = '<?php echo $data ['price']?>'>
            <button name = "add"  type = "submit"class = 'btn btn-warining'>تاكيد اضافة المنتج للعربة</button>
            <br>
            <a href="shop.php">الرجوع لصفحة المنتجات</a>

        </form> 
        </div>
    
    </center>
</body>
</html>