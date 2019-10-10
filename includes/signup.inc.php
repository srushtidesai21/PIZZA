<?php
if (isset($_POST['signup-submit'])) {

	include_once 'connectsignup.php';

	$username = $_POST['name'];
	$email = $_POST['mail'];
	$password = $_POST['pwd'];
	$contact = $_POST['cont'];
	$city = $_POST['cn'];
	$address = $_POST['addr'];

if (empty($username) || empty($email) || empty($password) || empty($contact) || empty($city) || empty($address)){
	header("Location:../signup1.php?error=emptyfields");
	
	exit();
}
else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/",$username)){
	header("Location:../signup1.php?error=invalidmailname");
	exit();
}
else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	header("Location:../signup1.php?error=invalidmail");
	exit();
}
else if (!preg_match("/^[a-zA-Z0-9]*$/",$username)) {
	header("Location:../signup1.php?error=invalidname");
	exit();
}

else {
//CHECK
	$sql = "SELECT emailUsers FROM users WHERE emailUsers=?";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		header("Location:../signup1.php?error=sqlerror");
		exit();
	}

	else{
		mysqli_stmt_bind_param($stmt, "s", $email);
		mysqli_stmt_execute($stmt);
		mysqli_stmt_store_result($stmt);
		$resultCheck = mysqli_stmt_num_rows($stmt);
		if ($resultCheck > 0) {
			header("Location:../signup1.php?error=emailtaken");
			exit();
		}
		else{ 

		$hashedPwd = password_hash($password, PASSWORD_DEFAULT);

		$insert_query="INSERT INTO users(nameUsers, emailUsers, pwdUsers, contactUsers, cityUsers, addrUsers) VALUES ('$username', '$email','$hashedPwd', '$contact', '$city', '$address');";

		mysqli_query($conn,$insert_query);
		header("Location:../signup1.php?signup=success");

		$_SESSION['username']=$username;
		

		exit();
		//}

		//$sql = "INSERT INTO users (;
		//$stmt = mysqli_stmt_init($conn);
		//if (!mysqli_stmt_prepare($stmt, $sql)) {
			//header("Location:../signup1.php?error=sqlerror");
			//exit();
		//}


		//else{
			//mysqli_stmt_execute($stmt,$sql);
			//header("Location:../signup1.php?signup=success");
			//exit();
		//}

		//}

		// $sql = "INSERT INTO users (nameUsers, emailUsers, pwdUsers, contactUsers, cityUsers, addrUsers) VALUES (?,?,?,?,?,?)";
		// $stmt = mysqli_stmt_init($conn);
		// if (!mysqli_stmt_prepare($stmt, $sql)) {
		// 	header("Location:../signup1.php?error=sqlerror");
		// 	exit();
		// }


		// else {
		// 	$hashedPwd = password_hash($password, PAASWORD_DEFAULT);
		// 	mysqli_stmt_bind_param($stmt, "sssiss", $username, $email, $hashedPwd, $contact, $city, $address);
		// 	mysqli_stmt_execute($stmt);
		// 	header("Location:../signup1.php?signup=success");
		// 	exit();
		// }

		// }
	}

}//outer else

}	
}


	//mysqli_stmt_close($stmt);
	//mysqli_close($conn);
//}//outer if

//else {
	//header("Location:../signup1.php");
	//exit();
//}






