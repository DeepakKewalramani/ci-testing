<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>HOME</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <!-- <link rel='stylesheet' type='text/css' media='screen' href='main.css'> -->
    <!-- <script src='main.js'></script> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
</head>
<body>
    <div class="container mt-5"> 
    <?php 
    if($this->session->flashdata('status')){
        echo $this->session->flashdata('status');
    }
    ?>
     <div class="form-group col-sm-5 mx-auto">
    <h1 class="text-center">Welcome <?php echo $NAME?></h1>
    <form method="POST" action="" class="form-group">
        <label for="name">NAME</label>
        <input type="text" name="new_name"class="form-control border border-dark"  value="<?php echo $NAME?>">
        <label for="username">USERNAME</label>
        <input type="text" name="new_username" class="form-control border border-dark"  value="<?php echo $USERNAME?>">
        <label for="password">PASSWORD</label>
        <input type="text" name="new_password" class="form-control border border-dark"  value="">
        <input type="submit" name="Submit" class="btn btn-primary btn-block">
    </form>
    <a href="delete" class="link-danger">Delete My Account</a>
    <br>
    <a href="logout" class="link-danger">LogOut</a>
    </div>
    </div>
</body>
</html>