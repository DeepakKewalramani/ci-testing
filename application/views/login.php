<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel='stylesheet' type='text/css' media='screen' href='main.css'> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>LOG IN</title>
</head>

<body>
    <div class="container">
        <?php if ($this->session->flashdata('status')) {
            echo $this->session->flashdata('status');
        }
        ?>
        <?= validation_errors("<div class='alert alert-danger text-center'>", "</div>"); ?>


        <div class="form-group col-sm-10 mx-auto">


            <h1 class="text-center mt-5">LOG IN</h1>
            <form method="POST" action="" class="form-control row">
                <div class="form-group col-sm-5 mx-auto">
                    <label class='control-label col-form-label'>USERNAME</label>
                    <input type="text" name="username" class="form-control border border-dark ">
                </div>
                <div class="form-group col-sm-5 mx-auto">
                    <label class='control-label col-form-label'>PASSWORD</label>
                    <input type="password" name="password" class="form-control border border-dark">
                </div>
                <input type="submit" name="submit" class="btn btn-primary col-sm-1 btn-block my-4 mx-auto">
            </form>
            <div class="col-lg-4 my-5 mx-auto">
                <p>Create a new account <a href="<?php echo base_url(); ?>index.php/signup">sign up </a></p>
                <p> <a href="forget.php">Forgot your password?</a></p>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>