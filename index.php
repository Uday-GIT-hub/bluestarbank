<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="img/icon.png">

        <title>Blue Star Bank</title>

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/style.css" rel="stylesheet">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <script src="js/jquery.js"></script>
	
        <script type="text/javascript">
            $(document).ready(function(){
                $("#create").click(function(){
                    fname = $("#fname").val()
                    email = $("#email").val();
                    balance =$("#balance").val();
                    
                    $.ajax({
                        type: "POST",
                        url: "addcheck.php",
                        data: "fname="+fname+"&email="+email+"&balance="+balance,
                        success: function(html)
                        {
                            if(html=='true')
                            {
                                $("#add_err2").html('<div class="alert alert-success"> \<strong>Customer Added successfully</strong> \ \</div>');
                                window.location.href = "customers.php";
                            } 
                            else if (html=='false') 
                            {
                                $("#add_err2").html('<div class="alert alert-danger"> \
                                                    <strong>Email Address</strong> already Registered .Use different email Id\ \</div>');
                                    
                            } 
                            else if (html == 'fname') {
                                $("#add_err2").html('<div class="alert alert-danger"> \
                                                        <strong>First Name</strong> is required. \ \
                                                        </div>');
                                                        
                            } 
                            else if (html == 'eshort') {
                                $("#add_err2").html('<div class="alert alert-danger"> \
                                                        <strong>Email Address</strong> is required. \ \
                                                        </div>');

                            } 
                            else if (html == 'eformat') {
                                $("#add_err2").html('<div class="alert alert-danger"> \
                                                        <strong>Email Address</strong> format is not valid. \ \
                                                        </div>');
                                                        
                            } 
                            else if (html == 'bnegative') {
                                $("#add_err2").html('<div class="alert alert-danger"> \
                                                        <strong>Balance</strong> cannot be  Zero or Negative. \ \
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
    </head>
    <body>
        <?php require_once 'nav.php'; ?>
        <div class="container1">
            <div class="row">
                <div class="col-lg-4 heading-div">
                    <hr>
                    <h2 class="text-center heading"><strong>Welcome to the Bank that puts people fisrt</strong></h2>
                    <hr>
                    <h3>We’re next door & here for you.</h3>
                    <p>
                        Online, on the phone, or in one of our local bank branches. We’re here to help you write your story.
                        Open an Account  Find a Local Branch
                    </p> 
                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#Modal1"><strong><i class="fa fa-sign-in" aria-hidden="true"></i> Open Account</strong></button>
                    <div class="modal fade" id="Modal1">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title"><strong>Create Account</strong></h4>
                                </div>
                                <div class="modal-body">
                                    <div id="add_err2"></div>       
                                    <form role="form">
                                        <div class="row">
                                            <div class="form-group col-lg-12">
                                                <label><i class="fa fa-user" aria-hidden="true" style="font-size:16px;"></i> Name</label>
                                                <input type="text" id="fname" name="fname" class="form-control">
                                            </div>
                                            <div class="form-group col-lg-12">
                                                <label><i class="fa fa-envelope" aria-hidden="true" style="font-size:16px;"></i> Email Address</label>
                                                <input type="email" id="email" name="email" class="form-control">
                                            </div>
                                            <div class="clearfix"></div>
                                            <div class="form-group col-lg-12">
                                                <label><i class="fa fa-inr" aria-hidden="true" style="font-size:16px;"></i> Balance</label>
                                                <input type="number" id="balance" name="balance" class="form-control">
                                            </div>
                                            <div class="form-group col-lg-12 text-center">
                                                <button type="submit" id="create" class="btn btn-success">Create</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>   
                        </div>
                    </div>   
                </div>
                <div class="col-lg-8 img-div">
                    <img src="img/img4.png" width="100%" height="auto">
                </div>
            </div>
        </div>
        <div class="container1">
            <div class="row">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="heading text-center"><strong>Why Public Bank?</strong></h2>
                    <hr>
                </div>
                <div class="col-lg-3 cards1 text-center">
                    <div class="text-center">
                        <img src="img/img21.png" width="40%" class="icons">
                    </div>
                    <br>
                    <p><strong>Online Banking</strong></p>
                    <h4>Streamlined convenience for your everyday needs.</h4>
                </div>
                <div class="col-lg-3 cards1 text-center">
                    <div class="text-center">
                        <img src="img/img22.png" width="40%" class="icons">
                    </div>
                    <br>
                    <p><strong>Savings and Deposits</strong></p>
                    <h4>Savings and spending options to help you achieve your goals.</h4>
                </div>
                <div class="col-lg-3 cards1 text-center">
                    <div class="text-center">
                        <img src="img/img24.png" width="40%" class="icons">
                    </div>
                    <br>
                    <p><strong>Security</strong></p>
                    <h4>Because your peace of mind is essential.</h4>
                </div>
                <div class="col-lg-3 cards1 text-center">
                    <div>
                        <img src="img/img25.png" width="40%" class="icons">
                    </div>
                    <br>
                    <p><strong>Personal Loans</strong></p>
                    <h4>Lending options to fit your lifestyle and your budget.</h4>
                </div>
            </div>
        </div>
        <div class="container1">
            <div class="row">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="heading text-center"><strong>Banking Services</strong></h2>
                    <hr>
                </div>
                <div class="col-lg-4 cards">
                    <img src="img/img9.png" width="100%" height="auto">
                    <br>
                    <br>
                    <div class="text-center"><a href="customers.php"><button class="btn btn-default cards-btn btn1">View Customers</button></a></div>
                </div>
                <div class="col-lg-4 cards">
                    <img src="img/img12.png" width="100%" height="auto">
                    <div class="text-center"><a href="sendmoney.php"><button class="btn btn-default cards-btn btn2">Send Money</button></a></div>
                </div>
                <div class="col-lg-4 cards">
                    <img src="img/img15.png" width="100%" height="auto">
                    <div class="text-center"><a href="transactions.php"><button class="btn btn-default cards-btn btn3">Transcation History</button></a></div>
                </div>
            </div>
        </div>
        <?php require_once 'footer.php'; ?>
        
      
        <script src="js/bootstrap.min.js"></script>

        
    </body>
</html>