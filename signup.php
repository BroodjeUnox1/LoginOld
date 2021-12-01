 <?php
 	$connection = new mysqli("localhost", "root", "", "login");
 	var_dump($_POST);
 	if (isset($_POST['submit'])) {
 		$password = md5($_POST['password']);
 		$username = $_POST['username'];
 		$email = $_POST['email'];
 		$sql = "INSERT INTO users (username, password, email)VALUES('$username', '$password', '$email')";
 		$result = $connection->query($sql);
 		if($result){
	echo " Done";
	header("Location: http://localhost/login%20regritratie/login.php");
}else{
	echo "Error: de data is niet in de db gezet";
}
 	}
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<link rel="stylesheet" type="text/css" href="style.css">
 	<title>signup</title>
 </head>
 <body>
 	<div class="header">
 		<header style="text-align: center;"><h1>Signup</h1></header>
 	</div> 
 		<button style="width: 100px; height: 25px;" onclick="login()" class="loginbtn">Login</button>
 	<div class="login">
 	</div>
 	<div class="signup">
 		<button style="width: 100px; height: 25px;" onclick="index()" class="signupbtn">Home page</button>
 	</div>
 	<form style="border: 3px solid #f1f1f1; height: 40%;" method="POST">
 		<input type="text" name="username" placeholder="Enter Username" required="" maxlength="20">
 		<input type="email" name="email" placeholder="Enter Email" required="">
 		<input type="password" name="password" placeholder="Enter Password" required="" maxlength="20">
 		<button type="submit" class="lgn" name="submit">Sign up</button>
 	</form>



 	<script type="text/javascript">
 		function login() {
 			window.open("http://localhost/login%20regritratie/login.php", "_self",);
 		}
		
		function index() {
 			window.open("http://localhost/login%20regritratie/index.html", "_self",);
 		} 
 	</script>
 
 </body>
 </html>