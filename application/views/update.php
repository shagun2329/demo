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
    
    <?php
    
    $i = $update['id'];
    $n = $update['name'];
    $e = $update['email'];
    $num = $update['num'];

    ?>
    <div class="container bg-light p-4 ">
       <form action="<?php echo base_url('dashboard/Update_data');?>" method="post">
            <div class="form-group ">
            <label for="">id</label>
            <input type="text"
                class="form-control" name="id"  readonly value="<?php echo $i?>" id="" aria-describedby="helpId" placeholder="">
               
            <label for="">NAME</label>
            <input type="text"
                class="form-control" name="name" value="<?php echo $n?>" id="" aria-describedby="helpId" placeholder="">
                <label for="">email id</label>
            <input type="text"
                class="form-control" name="email" id="" value="<?php echo $e?>" aria-describedby="helpId" placeholder="">
                <label for=""> phone number</label>
            <input type="text"
                class="form-control" name="num" value="<?php echo $num?>" id="" aria-describedby="helpId" placeholder="">
            <button type="submit" id="" class="btn btn-primary" href="#" role="button">UPDATE</button>
            
            </div>
    </form>
    </div>
    
</body>
</html>