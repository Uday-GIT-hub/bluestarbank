<?php require_once 'config.php' ; ?>

<nav class="navbar navbar-default" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav1" style="background-color: rgb(228, 228, 228);margin-top:16px;">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar" style="background-color:black;"></span>
                <span class="icon-bar"  style="background-color:black;"></span>
                <span class="icon-bar"  style="background-color:black;"></span>
            </button>
            <img src="img/logo.png" style="float:left;padding:7px;"><a class="navbar-brand" style="color:black;">Blue Star Bank</a>
        </div>
        <div class="collapse navbar-collapse ul_div" id="nav1">   
            <ul class="nav navbar-nav">	  
                <li><a href="index.php" style="color:black;">HOME</a></li>		  
                <li><a href="customers.php" style="color:black;">CUSTOMERS</a></li>
                <li><a href="sendmoney.php" style="color:black;">SEND MONEY</a></li>
                <li><a href="transactions.php" style="color:black;">TRANSCATIONS</a></li>
            </ul>
        </div>
    </div>
</nav>