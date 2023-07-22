<DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prducts page | المنتجات</title>
   <style>
    h3 {
        font-family:'Cairo' , sans-serif;
        font-wight:bold ;
    }
    .card{
        float: right;
        margin-top: 20px;
        margin-left:20px;
        margin-right : 20px;

    }
    .card img{
        width: 100px; 
        height: 200px;
    }
    main{
        width: 60%;
    }
    .navbar-brand{
        margin-left =70px ;
        text-decoation : none;
        color : white ;
    }
    </style>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <a id ="aa" class = "navbar-brand"  href="card.php">My card | عربتي </a>
    </nav>
    <center>
        <h3>جميع المنتجات المتوفرة</h3>
    </center>
    <?php
include('config.php');
$result = mysqli_query($x,"SELECT * FROM prod");
while ($row = mysqli_fetch_array($result)) {
    echo "
    <center>
    <main>
    <div class='card' style='width: 20rem;'>
        <img src='$row[images]' class='card-img-top'>
        <div class='card-body'>
            <h5 class='card-title'>$row[name]</h5>
            <p class='card-text'>$row[price]</p>
            <a href='val.php? Id=$row[Id]' class='btn btn-success'>  اضافة المنتج للعربة</a>
        </div>
     </div>
    </main>
    <center>      
    ";
}
?>
</body>
</html>