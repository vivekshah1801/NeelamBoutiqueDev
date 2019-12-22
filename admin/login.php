<!DOCTYPE html>
<html lang="en">
<head>
	<title>Home</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/linearicons-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/MagnificPopup/magnific-popup.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->	
</head>


<?php
			session_start();

			if(isset($_SESSION['user']))
			{
				header('Location: dashboard.php');
				die();
			}
			else if(isset($_POST['username']) && isset($_POST['password']))
			{
				$username = $_POST['username'];
				$password = $_POST['password'];

			
				$user_exists = False;
				if(strcmp($username,"admin")==0 && strcmp($password,"admin")==0)
				{
					$user_exists = True;
				}

				if(!$user_exists)
				{
					
					header('Location:login.php?msg=invalid_cred');
					session_close();
					die();
				}
				else {
					$_SESSION['user'] = $username;
					header('Location: dashboard.php');
					die();
				}
			}

?>



<body>
<main>
    <div class="container mx-auto">
        <h1 class="display-4 mt-2 text-center"> Admin Login </h1>

		<div id="notification">
			<?php
			 	if(isset($_GET['msg']))
				{
					if($_GET['msg']=="unauth")
					{
						echo '<div class="alert alert-danger text-center">
  						<strong> Unauthorized Access! </strong> Please login first.
 						</div>';
					}
					else if($_GET['msg']=="invalid_cred")
					{
						echo '<div class="alert alert-danger text-center">
  						<strong> Invalid Credentials </strong> contact admin in case you forgot credentials.
 						</div>';
					}
					else if($_GET['msg']=="logout")
					{
						echo '<div class="alert alert-success text-center">
  						<strong> Success! </strong> You logged out successfully.
 						</div>';
					}
				}
			?>
		</div>

		<form method="post" action="#" class="justify-content-center col-md-6 mx-auto mt-4">
			<div class="form-group">
				<label for="exampleInputEmail1">Admin Username</label>
				<input name="username" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Admin Username">
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Admin Password</label>
				<input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Admin Password">
			</div>
			<input type="hidden" name="data_in" value="1">
			<button type="submit" class="btn btn-primary">Login</button>
		</form>
		
    </div>
</main>
</body>

</html>