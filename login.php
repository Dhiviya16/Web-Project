<!DOCTYPE html>
<html>
<head>

<!-- To control the page's dimensions and scaling -->
	<meta name="viewport" content="with=device-width, initial-scale=1.0">
	<title>Fixups</title>

<!-- Link to the css page -->
	<link rel="stylesheet" href="style.css">
	
</head>
<body>
	<div class="container">

		<div class="card">
			<nav>
		<a href="index.php"><img src="images/logo-login.png"></a>

<!-- Login Card -->

	</nav>
			<div class="inner-box" id="card">
					<div class="card-front">
						<h2>LOGIN</h2>
						
						<form action="validation.php" method="post">
							<input type="text" class="input-box" placeholder="Username" name ="username" required>
							<input type="email" class="input-box" placeholder="Email" name ="email" required>
							<input type="password"class="input-box" placeholder="Password" name = "password"required>
							<button type="submit" class="submit-btn">Submit</button> 
							
						</form>
						<button type="button" class="btn" onclick="openSignup()">I'm new here</button>
						<a href="">Forget Password</a>
					</div>

<!-- Sign Up Card -->
					<div class="card-back">
						<h2>SIGN UP</h2>
						<form action="insert.php" method="post">
							<input type="text" class="input-box" placeholder="Username" name ="username" required>
							<input type="email" class="input-box" placeholder="Email" name ="email" required>
							<input type="password" class="input-box" placeholder="Password"  name = "password" required>
							<button type="submit" id='btn' class="submit-btn" >Submit</button>
							
						</form>
						<button type="button" class="btn" onclick="openLogin()">I've an account</button>
						<a href="">Forget Password</a>
				</div>
			</div>
		</div>
	</div>

	<script>

	var card = document.getElementById('card');

	// Card rotation

	function openSignup(){
		card.style.transform = "rotateY(-180deg)";
	}
	function openLogin(){
		card.style.transform = "rotateY(0deg)";
	}

 
 
	</script>

</body>
</html>



	