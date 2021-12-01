<?php
if (isset($_POST['login'])) {
	$username = $_POST['username'];
	$password = md5($_POST['password']);
$conn = new mysqli("localhost", "root", "", "login");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id, username, password FROM users WHERE username = '". $username ."' AND password ='". $password ."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> id: ". $row["id"]. " - Name: ". $row["username"]. " " ." Password:" . $row["password"] . "<br>";
        $_SESSION["logged_in"] = true; 
    }
} else {
    echo "0 results";
}

$conn->close();
}
?>

 <!DOCTYPE html>
 <html>
 <head>
 	<link rel="stylesheet" type="text/css" href="style.css">
 	<title>login</title>
 </head>
 <body>
 	<div class="header">
 		<header style="text-align: center;"><h1>Login</h1></header>
 	</div> 
 	<div class="login">
 		<button style="width: 100px; height: 25px;" onclick="login()" class="loginbtn">Home page</button>
 	</div>
 	<div class="signup">
 		<button style="width: 100px; height: 25px;" onclick="signup()" class="signupbtn">Sign up</button>
 	</div>
 	<form style="border: 3px solid #f1f1f1; height: 40%;" method="POST">
 		<input type="text" name="username" placeholder="Enter Username" required="">
 		<input type="password" name="password" placeholder="Enter Password" required="">
 		<button type="submit" class="lgn" name="login">login</button>
 	</form>






 	<script type="text/javascript">
 		function login() {
 			window.open("http://localhost/login%20regritratie/index.html", "_self",);
 		}

 		function signup() {
 			window.open("http://localhost/login%20regritratie/signup.php", "_self",);
 		}
 	</script>
 
 </body>
 </html>