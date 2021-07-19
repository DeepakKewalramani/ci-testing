<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel='stylesheet' type='text/css' media='screen' href='main.css'> -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 
    <title>upload profile</title>
</head>
<body>
    <div class="container">
    <div class="form-group col-md-12 mx-auto text-center">
    <form action="upload/upload_file" method="POST" enctype="multipart/form-data">
        <div class="form-controls">
        <label for="img">Image Upload</label>
        <br>
        <input type="file" name="file">
        </div>
        <input type="submit" name="submit" class="btn btn-success">
    </form>
    </div>
    </div>
</body>
</html>