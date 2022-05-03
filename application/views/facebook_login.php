<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <style>
        .colour
        {
            background-color:#f0f2f5;
        }
    </style>
</head>
<body>
    <div class="container colour p-5 m-5 ">
        <div class="row  colour p-5 w-100">
            <div class="col-sm-7   colour p-5">
                <h1 class="text-primary bg-body font-weight-bold">FACEBOOK<h1>
                    <h5>Facebook helps you connect and share</h5><h5> with the people in your life.</h5>
            </div>
            <div class="col-sm-5 colour  w-100 ">
            <h2 class="text-success text-center">
    <?php
    if($this->session->flashdata('error_msg')){
            echo $this->session->flashdata('error_msg');
        }
    ?>
    </h2>
                <div class="  bg-light  p-2   ">                    
                    <div class="form-group boder border-dark   ">           
                    <form method="post" action="<?php echo base_url('login_pg/login');?>">
                      <input type="text"
                        class="form-control  " name="email" id="" aria-describedby="helpId" placeholder="email address">                      
                      <input type="text"
                        class="form-control mt-2" name="pass" id="" aria-describedby="helpId" placeholder="password">
                        <button type="submit" name="" id="" href="#" class="btn btn-primary w-100 mt-2">Log in</button>
                        <p class="text-primary text-center">forget password</p>
                        <hr>
                        <a name="" id="" class="btn btn-success w-100" href="#" role="button">Create new Account</a>
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>