<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container bg-light p-4 ">
       <form action="<?php echo base_url('home/register');?>" method="post">
            <div class="form-group ">
            <label for="">NAME</label>
            <input type="text"
                class="form-control" name="name" id="" aria-describedby="helpId" placeholder="">
                <label for="">email id</label>
            <input type="text"
                class="form-control" name="email" id="" aria-describedby="helpId" placeholder="">
                <label for=""> phone number</label>
            <input type="text"
                class="form-control" name="num" id="" aria-describedby="helpId" placeholder="">
            <button type="submit" id="" class="btn btn-primary" href="#" role="button">Submit</button>
            
            </div>
    </form>
    </div>
    
</body>
</html>