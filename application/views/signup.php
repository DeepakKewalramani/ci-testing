<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>SIGN UP</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <!-- <link rel='stylesheet' type='text/css' media='screen' href='main.css'> -->
    <!-- <script src='main.js'></script> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
</head>
<body>
    <div class="container mt-5"> 
         <div class="form-group col-sm-10 mx-auto">
         <?php if($this->session->flashdata('status')){
                echo $this->session->flashdata('status');
            }?>
         <?=validation_errors()?>
    <h1 class="text-center">SIGN UP</h1>
    <form method="POST" action="" name="myForm" id="myForm" class="form-control row">
        <div class="form-group col-sm-4  mx-auto">
        <label class='control-label col-form-label'>NAME</label>
        <input type='text'  name='name' id='name' placeholder='Enter name' class='form-control border border-dark'>
        <label for="label">Enter your full name</label>   
    </div>
        <div class="form-group col-sm-4  mx-auto">
        <label class='control-label'>USERNAME</label>
        <input type='text'  name='username' id='username' placeholder='Enter username' class='form-control border border-dark'>
        <label for="label">username mininum 5 characters</label>
        </div>
        <div class="form-group col-sm-4 mx-auto">
        <label class='control-label'>PASSWORD</label>
        <input type='password' name='password' id='password'placeholder='Enter password' class='form-control border border-dark'>
        <label for="label">password mininum 8 characters</label>
        </div>
        <div class="form-group col-sm-4 mx-auto">
        <input type='submit' Name='Submit' value='Submit'  class='btn btn-primary my-4 mx-auto'>
        </div>
        </form>
        
        <div class="row col-sm-4 mb-5 mx-auto">
        <p>Your account already exists? <a href="<?php echo base_url();?>index.php/login" class="btn btn-secondary-outline btn-sm">Login</a>
        </p>
        </div>
        </div>
        </div>
</body>
</html>