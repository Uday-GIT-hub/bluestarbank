<?php 

require_once 'config.php' ; 
$fname = mysqli_real_escape_string($mysqli, $_POST['fname']);
$email = mysqli_real_escape_string($mysqli, $_POST['email']);
$balance = mysqli_real_escape_string($mysqli, $_POST['balance']);

//VALIDATION

if (strlen($fname) < 2) {
    echo 'fname';
} elseif (strlen($email) <= 4) {
    echo 'eshort';
} elseif (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    echo 'eformat';
} elseif ($balance <= 0 ) {
    echo 'bnegative';
	
//VALIDATION
	
} else {
	
	
	$query = "SELECT * FROM users WHERE email='$email'";
	$result = mysqli_query($mysqli, $query) or die(mysqli_error());
	$num_row = mysqli_num_rows($result);
	$row = mysqli_fetch_array($result);
	
		if ($num_row < 1) {

			$insert_row = $mysqli->query("INSERT INTO users (name, email, balance) VALUES ('$fname', '$email', '$balance')");
			echo 'true';
		} else {
			echo 'false';
		}
		
}

?>