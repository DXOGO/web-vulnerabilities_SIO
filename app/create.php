<!DOCTYPE html>
<html lang="en">
<head>
	<title>Spoton</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="img/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
<?php include "connection.php" ?>
	<div class="limiter">
		<div class="container-login100" style="background-image: url('img/banner/travel_HD.jpg'); background-position: center;  background-repeat: no-repeat; background-size: cover;">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="img/logo.png" style="margin-top: 100px" alt="IMG">
				</div>

				<form class="login100-form validate-form" method="POST" >
					<span class="login100-form-title">
						Create Account
					</span>

                    <div class="wrap-input100 validate-input" data-validate = "Valid username is required: usermame">
						<input class="input100" type="text" id="name" name="name" placeholder="Name">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" id="email" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" id="pass" name="pass" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<a href="./create.php">
							<button type="submit" class="login100-form-btn" style="width:290px" name="submit_btn">
								Create
							</button>
					</div>

					<?php
						if (isset($_POST['submit_btn'])){
							
							if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['pass'])){
								$name = $_POST['name'];
								$email = $_POST['email'];
								$pass = $_POST['pass'];

								// Use prepared statements to mitigate SQL injection attacks.
								$sql = "INSERT INTO `users` (`nome`, `email`, `pass`) VALUES ('$name', '$email', '$pass')";
								$result = mysqli_query($conn, $sql);	

								if ($result) {	// se faz o insert com sucesso na base de dados retorna true
									echo "<script> location.replace('home.php'); </script>";
								}
								mysqli_close($conn);

							} else {
								echo "<div class=\"container-login100-form-btn\" ><p style=\" color: red\">Erro! Verifica q todos os campos estão preenchidos</p> </div>";
							}
						}
					?>

					<div class="text-center p-t-136">
						<a class="txt2" href="./index.php">
							Already a member? Login Here
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>

	<!-- ------------------------------------------------------------- -->
	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>