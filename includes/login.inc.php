<?php
if (isset($_POST['login-submit'])) {

	include_once 'connectsignup.php';

	$email = $_POST['mail'];
	$password = $_POST['pwd'];

	if (empty($email) || empty($password)){
	header("Location:../login1.php?error=emptyfields");
	
	exit();
    }

    else{

    	$sql = "SELECT * FROM users WHERE emailUsers=?;";
    	$stmt = mysqli_stmt_init($conn);
    	if(!mysqli_stmt_prepare($stmt, $sql)){
    		header("Location: ../login1.php?error=sqlerror");
    		exit();
    	}
    	else{
    		mysqli_stmt_bind_param($stmt, "s", $email);
    		mysqli_stmt_execute($stmt);
    		$result = mysqli_stmt_get_result($stmt);
    		if ($row = mysqli_fetch_assoc($result)){
    			$pwdCheck = password_verify($password, $row['pwdUsers']);
    			if ($pwdCheck == false){
    				header("Location:../login1.php?error=wrongpassword");
    				exit();
    			}
    			else if($pwdCheck == true){
    				session_start();

    				$SESSION['username'] = $row['nameUsers'];
    				header("Location:../login1.php?login=success");
    				exit();
    			}
    			
    		}
    		else{
    			header("Location:../login1.php?error=nousers");
    			exit();
    		}
    	}
    }

 }

 else{
 	header("Location:../index1.php");
 	exit();
 }