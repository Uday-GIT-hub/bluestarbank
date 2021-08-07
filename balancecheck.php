<?php 

require_once 'config.php' ; 
$sender = mysqli_real_escape_string($mysqli, $_POST['sender']);
$receiver = mysqli_real_escape_string($mysqli, $_POST['receiver']);
$money = mysqli_real_escape_string($mysqli, $_POST['money']);

//VALIDATION
if ($sender == $receiver){
    echo 'same';
}
else if($sender == 'selectsender' or $receiver == 'selectreceiver')
{
    echo 'no';
}
else if ($money <= 0 ) {
    echo 'bnegative';
	
//VALIDATION
	
} else {
	
	
	$query = "SELECT * FROM users WHERE name='$sender'";
	$result = mysqli_query($mysqli, $query) or die(mysqli_error());
	$num_row = mysqli_num_rows($result);
	$row = mysqli_fetch_array($result);
	
	$sql = "SELECT * FROM users WHERE name='$receiver'";
	$res = mysqli_query($mysqli, $sql) or die(mysqli_error());
	$count = mysqli_num_rows($res);
	$rows = mysqli_fetch_array($res);
	
		if ($money <= $row['balance']) {
        
            $sender_money = $row['balance'] - $money;
            $receiver_money = $rows['balance'] + $money;
            
			$insert_row = $mysqli->query("INSERT INTO transactions (sender, receiver, money, time) VALUES ('$sender', '$receiver', $money, NOW())");
			
			$update_sender = $mysqli->query("UPDATE users SET balance = $sender_money WHERE name = '$sender'");
			
			$update_receiver = $mysqli->query("UPDATE users SET balance = $receiver_money WHERE name = '$receiver'");
			
			echo 'true';
			
		} else {
			echo 'false';
		}
		
}

?>