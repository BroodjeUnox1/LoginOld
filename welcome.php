 <!DOCTYPE html>
 <html>
 <head>
 	<link rel="stylesheet" type="text/css" href="style.css">
 	<title>index</title>
 </head>
 <body>
 	<div class="header">
 		<header style="text-align: center;"><h1>Home page</h1></header>
 	</div> 
 	<div class="login">
 		<button style="width: 100px; height: 25px;" onclick="login()" class="loginbtn">Login</button>
 	</div>
 	<div class="signup">
 		<button style="width: 100px; height: 25px;" onclick="signup()" class="signupbtn">Sign up</button>
 	</div>
 	<div>
 		<h1>WELCOME JE BENT INGELOGT PIK</h1>
 		<h1>WELCOME JE BENT INGELOGT PIK</h1>
 		<h1>WELCOME JE BENT INGELOGT PIK</h1>
 		<h1>WELCOME JE BENT INGELOGT PIK</h1>
 		
 	</div>
 	<script type="text/javascript">
 		function login() {
 			window.open("http://localhost/login%20regritratie/login.php", "_self",);
 		}

 		function signup() {
 			window.open("http://localhost/login%20regritratie/signup.php", "_self",);
 		}
 	</script>
 </html>