<?php session_start(); ?>

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
	<div class="limiter">
		<div class="container-login100" style="background-image: url('img/banner/travel_HD.jpg'); background-position: center;  background-repeat: no-repeat; background-size: cover;">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="img/logo.png" style="margin-top: 100px" alt="IMG">
				</div>

				<form method="POST" class="login100-form validate-form" autocomplete="off">
					<span class="login100-form-title">
						Member Login
					</span>

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
							<button type="submit" class="login100-form-btn" style="width:290px" name="bttn">
								Login
							</button>
					</div>
<!-- 
						<input type="text" name="regName" value="">

					<form method="POST" action="home.php">
						<input type="text" name="regName" value="">
						<input type="submit">
					</form> -->

					<div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="#">
							Username / Password?
						</a>
					</div> 

					<?php
						include("connection.php");

						// IMPRIMIR TODOS OS USERS E PASS
/* 						$sql = "SELECT * FROM users";
						$result = $conn->query($sql);

						if ($result->num_rows > 0) {
						//   // output data of each row
						while($row = $result->fetch_assoc()) {
						echo "id: " . $row["id"]. " - Name: " . $row["nome"]. " - EMail: " . $row["email"]. " - pass: " . $row["pass"]. "<br>";
						}
						} else {
						echo "0 results";
						}  */

						if (isset($_POST['bttn']) && !empty($_POST['email'])) {
							

							$mail = $_POST['email'];
							$pass = $_POST['pass'];

							$query = "SELECT * FROM users WHERE email='".$mail."' AND NOT pass = '".$pass."'" ;
                        	$result = mysqli_query($conn,$query);

							if ($result->num_rows == 1){
								echo "<div class=\"container-login100-form-btn\" ><p style=\" color: red\">Invalid password!</p> </div>";
							} else {

								$q = "SELECT * FROM users WHERE email='".$mail."' AND pass = '".$pass."'" ;

								if (!mysqli_query($conn,$q))
								{
									echo 'Error: ' . mysqli_error($conn);
								} else {
								
									$result = mysqli_query($conn,$q);

									// $current_user -> Vari??vel que vai guardar o utilizador atual durante a sess??o no servidor (para fazer comments e isso...)
									$current_user = mysqli_fetch_array($result);

									if ($current_user) {
										// header('location: home.php');

										$_SESSION['user_nome'] = $current_user['nome'];
										$_SESSION['user_id'] = $current_user['id'];
										$_SESSION['user_email'] = $current_user['email'];	

										echo "<script> location.replace('home.php'); </script>";
										
									} else {
										echo "<div class=\"container-login100-form-btn\" ><p style=\" color: red\">Wrong credentials. Try again.</p> </div>";
									}
								}
							}

						}
					?>


					<div class="text-center p-t-136">
						<a class="txt2" href="./create.php">
							Create New Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>

	
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