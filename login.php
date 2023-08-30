<?php

session_start(); 

$error='';

if (isset($_POST['submit'])) {

	if (empty($_POST['username'])) {

	    $error= "   Please fill username field.";

	}

	if(empty($_POST['password'])){

	    $error="   Please fill password field.";

	}

	else{

		$uname = strip_tags(addslashes($_POST['username']));

		$pass = strip_tags(addslashes($_POST['password']));

		require 'connection.php';

		$sql="select * from users where username='$uname' and password = unhex(sha2('$pass',256))";

		$result=mysqli_query($conn,$sql);

		$rows=mysqli_num_rows($result);

		if ($rows == 1) { 

			$_SESSION['username']=$uname;

		    $res = mysqli_fetch_array($result);

			if ($res['roleID'] ==1){	

				$_SESSION['userID']=$res['userID'];

				$_SESSION['fullName']=$res['fullName'];

				$_SESSION['role']="admin";

				header("Location:index.php");

			}else if ($res['roleID'] ==2){

				$_SESSION['userID']=$res['userID'];

				$_SESSION['fullName']=$res['fullName'];

				$_SESSION['role']= "user";

				header("Location:card.php"); 

			}

		}else {

			$error = "Invalid username or password";
            $_SESSION['login_error'] = $error;
            header("Location: loginform.php");
            exit();

		}

		mysqli_close($conn);

	}

}

?>



