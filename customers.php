<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="img/icon.png">

        <title>Customers</title>

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
       <link href="css/style.css" rel="stylesheet">
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="js/jquery.js"></script>
        <style>
            tr:hover {background-color: #c8f888;
          color:black;
           }
        </style>
   
    </head>
    <body>
        <?php require_once 'nav.php' ; ?>
        <div class="container1">
            <div class="row">
                <div class="col-lg-12">
                    <hr style="max-width:250px;">
                    <h2 class="heading text-center" style="font-size:30px;font-weight:800;"><i class="fa fa-users" aria-hidden="true" style="font-size:30px;"></i> Customers</h2>
                    <hr style="max-width:250px;">
                </div>
                <div class="col-lg-12 table-div" style="overflow-x:auto;">
                    <table class="customers">
                        <tr>
                            <th>S.NO</th>
                            <th>Name</th>
                            <th>Email Address</th>
                            <th>Balance</th>
                         
                        </tr>
                        <?php 
                           $sql = "SELECT * FROM users ORDER BY id";
                           $result = mysqli_query($mysqli, $sql) or die(mysqli_error());
                           $num_row = mysqli_num_rows($result);
                           $sn = 1;
                           
                           if($num_row > 0)
                           {
                               while($row=mysqli_fetch_assoc($result))
                               {
                                   $name = $row['name'];
                                   $email = $row['email'];
                                   $balance = $row['balance'];
                        ?>
                                    <tr>
                                        <td><?php echo $sn++ ;?></td>
                                        <td><?php echo $name ;?></td>
                                        <td><?php echo $email ;?></td>
                                        <td><?php echo $balance ;?></td>
                                    </tr>
                            <?php
                                }
                             }
                             else
                             {
                                 echo "<tr><td colspan='4' class='error'>No Customers had an account in Bank</tr></td>";
                             }
                            ?>
                    </table>
                </div>
            </div>
        </div>
        <?php require_once 'footer.php'; ?>
        
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>