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
    <?php if($this->session->flashdata('status')){
                echo $this->session->flashdata('status');
        }
        ?>
     <?= validation_errors("<div class='alert alert-danger text-center'>", "</div>"); ?>
     <div class="form-group col-sm-5 mx-auto">
    <h1 class="text-center">Welcome <?php echo $data->NAME?></h1>
    <img src="/Codeigniter/uploads/<?=$data->PROFILE_PATH ?>" width="250px" height="" class="rounded mx-auto d-block"></img>
    <form method="POST" action="" class="form-group">
        <label for="name">NAME</label>
        <input type="text" name="new_name"class="form-control border border-dark"  value="<?php echo $data->NAME?>">
        <label for="username">USERNAME</label>
        <input type="text" name="new_username" class="form-control border border-dark"  value="<?php echo $data->USERNAME?>">
        <label for="password">PASSWORD</label>
        <input type="password" name="new_password" class="form-control border border-dark"  value="">
        <input type="submit" name="Submit" class="btn btn-primary btn-block">
    </form>
    <div class="row">
    <a href="logout" class="link-danger col-lg-4 col-md-4 text-left">LogOut</a>
    <a href="upload" class="link-danger col-lg-4 col-md-4 text-center">Upload Profile</a>
    <a href="delete" class="link-danger col-lg-4 col-md-4 text-right">Delete My Account</a>
    </div>
    </div>
    </div>
</body>
</html>