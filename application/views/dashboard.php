<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Admin</title>
</head>
<body>
    <div class="container mt-5"> 
    <div class="form-group col-sm-10 mx-auto">
        <h1 class="">USERS RECORDS</h1>
    <?php 
     echo "<div class='table-responsive'><table class='table'><tr><th>ID</th><th>NAME</th><th>USERNAME</th><th>PASSWORD</th></tr><tr>";

     foreach($data as $row){
         echo "<tr><td>".$row['ID']."</td>";
         echo "<td>".$row['NAME']."</td>";
         echo "<td>".$row['USERNAME']."</td>";
         echo "<td>".$row['PASSWORD']."</td></tr>";
     }
     echo "</table>";
    ?>
    </div>
    </div>
</body>
</html>