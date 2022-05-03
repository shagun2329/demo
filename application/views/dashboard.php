<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <title>Login</title>
</head>
<body>
    <h2 class="text-success text-center">
    <?php
    if($this->session->flashdata('status')){
            echo $this->session->flashdata('status');
        }
    ?>
    </h2>

        <table class="w-100 table table-striped table-inverse">
            <thead class="thead-inverse">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Delete</th>
                    <th>Update</th>
                </tr>
                </thead>
                <tbody>
                    
                
                <?php
                
                foreach($fetch as $row)
                
                {
                    ?>

                
                    <tr>
                        <td scope="row"><?php echo $row['name']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['num']; ?></td>
                        <td><a class="btn btn-danger" href="<?php echo base_url('dashboard/delete/'.$row['id']);?>" role="button">Delete</a></td>
                        <td><a class="btn btn-success" href="<?php echo base_url('dashboard/update/'.$row['id']);?>" role="button">update</a></td>
                    </tr>
               <?php
                }
                ?>
                
                    
                </tbody>
        </table>

</body>
</html>