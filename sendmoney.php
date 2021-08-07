<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="img/icon.png">

        <title>Send Money</title>

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/style.css?v=<?php echo time(); ?>" rel="stylesheet">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <script src="js/jquery.js"></script>
        
        <script type="text/javascript">
            $(document).ready(function(){
                $("#transfer").click(function(){
                    sender = $("#sender").val()
                    receiver = $("#receiver").val()
                    money =$("#money").val();
                    
                    $.ajax({
                        type: "POST",
                        url: "balancecheck.php",
                        data: "sender="+sender+"&receiver="+receiver+"&money="+money,
                        success: function(html)
                        {
                            if(html=='true')
                            {
                                $("#add_err2").html('<div class="alert alert-success"> \<strong>Transaction successfull</strong> \ \</div>');
                                window.location.href = "transactions.php";
                            } 
                            else if(html == 'same')
                            {
                                 $("#add_err2").html('<div class="alert alert-danger"> \
                                                    <strong>Sender and Receiver cannot be same</strong>\ \</div>');
                            }
                            else if (html == 'no')
                            {
                                $("#add_err2").html('<div class="alert alert-danger"> \
                                                    <strong>Transaction Failure</strong>\ \</div>');
                            }
                            else if (html=='false') 
                            {
                                $("#add_err2").html('<div class="alert alert-danger"> \
                                                    <strong>Insufficient Balance</strong>\ \</div>');
                                    
                            } 
                            else if (html == 'bnegative') {
                                $("#add_err2").html('<div class="alert alert-danger"> \
                                                        <strong>Amount</strong> cannot be  Zero or Negative. \ \
                                                        </div>');
                            } 
                            else 
                            {
                                $("#add_err2").html('<div class="alert alert-danger"> \<strong>Error</strong> processing request. Please try again. \ \</div>');
                            }
                        },beforeSend:function()
                            {
                                $("#add_err2").html("loading...");
                            }
                    });
                        return false;
                });
            }); 
        </script>
        <style>
            
            td{
                font-size:20px;
                border:none;
                padding:10px;
            }
            tr:hover {
                background-color:none;
                color:none;
            }
            select{
                font-size:18px;
                padding:4px;
            }
            @media screen and (max-width:635px) {
                td{
                    font-size:15px;
                    padding:8px;
                }
                select{
                    font-size:15px;
                }
            }          
        </style>
        
    </head>
    <body>
        <?php require_once 'nav.php' ; ?>
        <div class="container2">
            <div class="row">
                <div class="col-lg-12">
                    <hr style="max-width:250px;">
                    <h2 class="heading text-center" style="font-weight:800;"><i class="fa fa-paper-plane" aria-hidden="true" style="font-size:30px;"></i> Send Money</h2>
                    <hr style="max-width:250px;">
                </div>
                
                <div class="col-lg-12">
                    <form role="form">
                        <table class="send-table">
                            <tr>
                                <td colspan='2' id="add_err2"></td>
                            </tr>
                            <tr>
                                <td>Sender's Name</td>
                                <td class="selection">
                                    <select id="sender" >
                                        <option value="selectsender">Select Sender</option>
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
                                        <option value="<?php echo $name ; ?>"><?php echo $name ; ?> (balance :<?php echo $balance ; ?>)</option>
                                 
                                        <?php
                                                }
                                                
                                            }
                                            else
                                            {
                                                 echo "<tr><td colspan='2' class='error'>No Customers had an account in Bank</tr></td>";
                                            }
                                        ?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Receiver's Name </td>
                                <td class="selection">
                                    <select id ="receiver">
                                        <option value="selectreceiver">Select Receiver</option>
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
                                        <option value="<?php echo $name ; ?>"><?php echo $name ; ?> (balance :<?php echo $balance ; ?>)</option>
                                         <?php
                                                }
                                            }
                                            else
                                            {
                                                 echo "<tr><td colspan='2' class='error'>No Customers had an account in Bank</tr></td>";
                                            }
                                        ?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Amount To Be transferred :</td>
                                <td><input type="number" id="money" name="money" maxlength="20"></td>
                              </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <div class="text-center"><button type="submit" id="transfer" class="btn btn-success">Transfer</button></div>
                                </td>
                            </tr>
                        </table>
                    </form>                   
                </div>
                <div class="col-lg-12 text-center">
                    <img src="img/img30.png" width="100%" >
                </div>
            </div>
        </div>
        <?php require_once 'footer.php'; ?>
       
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>