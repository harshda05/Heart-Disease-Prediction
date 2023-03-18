<?php
include 'connection.php';
if (isset($_POST['submit'])) {
	$fname = $_POST['fname'];
	$email = $_POST['email'];
	$pass = $_POST['pass'];


	$query = "INSERT INTO reg (Full_Name, Email, Pass) VALUES ( '" . $fname . "','" . $email . "','" . $pass . "');";

	mysqli_query($db, $query) or die('Error in updating Database');
?>
	<script type="text/javascript">
		alert("Successfull Added.");
		window.location = "login1.php";
	</script>
<?php
}

?>


<?php
error_reporting(E_ERROR | E_PARSE);
session_start();
include 'connection.php';
if (isset($_POST['submit1'])) {
  $email = $_POST['email'];
  $pass = $_POST['pass'];
  $query = mysqli_query($db, "SELECT * FROM reg WHERE Email = '$email' AND Pass = '$pass'");
  $num_rows = mysqli_num_rows($query);
  $row = mysqli_fetch_array($query);
  if ($_SESSION["id"] = $row['SRno']);
  if ($num_rows > 0) {
?>
    <script>
      alert('Successfully Log In');
      document.location = 'profile.php'
    </script>
  <?php
  } else {

  ?>
    <script>
      alert('Enter Correct Username And Password');
    </script>
<?php
  }
}
?>


<!DOCTYPE html>
<html>

<head>
	<style>
	</style>
	<link rel="shortcut icon" type="png" href="images/icon/favicon.png">
	<title>Login SignUp</title>
	<link rel="stylesheet" type="text/css" href="loginStyle.css">
	<link rel="stylesheet" type="text/css" href="login1.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- 	It will redirect to the Home Page after submitting the form -->
	
</head>

<body>
	<div class="form-box">
		<div class="button-box">
			<div id="btn"></div>
			<button type="button" class="toggle-btn" id="log" onclick="login()" style="color: #fff;">Log In</button>
			<button type="button" class="toggle-btn" id="reg" onclick="register()">Register</button>
		</div>
		<div class="social-icons">
			<img src="images/icon/fb2.png">
			<img src="images/icon/insta2.png">
			<img src="images/icon/tt2.png">
		</div>

		<!-- Login Form -->
		<form id="login" class="input-group"  method="post">
			<div class="inp">
				<img src="images/icon/user.png"><input name="email" type="text" id="email" class="input-field" placeholder="Username or Phone Number" style="width: 88%; border:none;" required="required">
			</div>
			<div class="inp">
				<img src="images/icon/password.png"><input name="pass" type="password" id="password" class="input-field" placeholder="Password" style="width: 88%; border: none;" required="required">
			</div>
			<input type="checkbox" class="check-box">Remember Password
			<button type="submit" name="submit1" class="submit-btn"><a href="index.html">Log In</a></button>
		</form>


		<div class="other" id="other">
			<div class="instead">
				<h3>or</h3>
			</div>
			<button class="connect" onclick="google()">
				<img src="images/icon/google.png"><span>Sign in with Google</span>
			</button>
		</div>

		<!-- Registration Form -->
		<form id="register" method="post" class="input-group">
			<input type="text" class="input-field" placeholder="Full Name" name="fname" required="required">
			<input type="email" class="input-field" placeholder="Email Address" name="email" required="required">
			<input type="password" class="input-field" placeholder="Create Password" name="pass" required="required">
			<input type="password" class="input-field" placeholder="Confirm Password" name="pass" required="required">
			<input type="checkbox" class="check-box" id="chkAgree" onclick="goFurther()">I agree to the Terms & Conditions
			<button type="submit" name="submit" id="btnSubmit" class="submit-btn reg-btn">Register</button>
		</form>
	</div>
		 <script type="text/javascript" src="script1.js"></script>
</body>

</html>
