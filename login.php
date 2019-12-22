<html lang="en">
<head>
  <title>Neelam Admin | Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>
		<?php

			session_start();

			if(isset($_SESSION['user']))
			{
				header('Location: dashboard.php');
				die();
			}
			else if(isset($_POST['name']) && isset($_POST['pass']))
			{
                if($_POST['name']=='admin' && $_POST['pass']=='admin123')
                {
                    $_SESSION['user'] = "loggedin";
                    header('Location: dashboard.php');
                    die();
                }
			}
			else{
			}


		?>

		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<a class="navbar-brand">Neelam Boutique Admin</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
		  			<li class="nav-item">
						<a class="navbar-link">Login</a>
		  			</li>
				</ul>
			</div>
		</nav>

		<section class="container site-section">
			<h1 class="text-center text-primary mt-5 mb-4"> Admin Login </h1>
		</section>

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

		<form class="site-section row justify-content-center" method="post" action="<?php $_PHP_SELF ?>">
		<div class="col-md-4 mr-4 ml-4">
		  <div class="form-group">
		    <label for="username">Username</label>
		    <input type="text" class="form-control" id="username" placeholder="Your Username" name="name" required>
		  </div>
		  <div class="form-group">
		    <label for="password">Password</label>
		    <input type="password" class="form-control" id="password" placeholder="Your Secret Password" name="pass" required>
		  </div>
		  <button type="submit" class="btn btn-primary mt-2">Submit</button>
	  	</div>
	  	</form>

</body>
</html>
