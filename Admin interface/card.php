<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>عربتي | منتجاتي </title>
    <style>
        h3{
            font-family :'Cairo','sans-serif'
            font-weight = bold ;
        }
        main{
            width : 40% ;
            margin-top : 30px ;
        }
        table{
            box-shadow: 1px 1px 10px silver ;
            
        }
        thead {
            background-color:#B1C1DE;
            color:#050000;
            text-aline:center ;
        }
        tbody{
            text-aline:center ;
        }
    </style>
</head>
<body>
   
<center>
     <h3>
        منتجاتك المحجوزة
    </h3>
</center>
 <?php
 include ('config.php');
 $result = mysqli_query ($x,"SELECT * FROM addcard");
 while($row = mysqli_fetch_array($result)){
    echo "
    <center>
    <main>
        <table class = 'table'>
            <thead>
                <tr>
                    <th scope = 'col'>product name </th>
                    <th  scope = 'col'>product price </th>
                    <th  scope = 'col'>delelt product</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>$row[name]</td>
                    <td>$row[price]</td>
                    <td> <a href='del_card.php /? Id = $row[Id]' class = 'bth btn-danger'>ازالة</a></td>
                </tr>
           </tbody>

        </table>
  </main>
</center>
    
    
    "
   ; }
 
 
 
 
 ?>
 <center>
    <a href="shop.php">الرجوع لصفحة المنتجات</a>
 </center>
</body>
</html>