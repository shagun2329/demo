<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="text-weight-bold">
            LOGIN PAGE
        </div>
        <form action="<?php echo base_url('home/login');?>"method="post">
            <div class="form-group">
              <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
            </div>
            <input name="" id="" class="btn btn-primary" type="submit" value="Login">
        </form>
    </div>
</body>
</html>