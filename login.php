<?php 
    require('connection.php');
    session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="style/login-style.css">
	<!-- LINKS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
	<title>Netflix | Login</title>
	

	<style>
		*{
			box-sizing: border-box;
		}
		body {
			background-image:linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)) , url("images/header-image.png");
			background-position: center;
			background-size: cover;
		}
		
        .logo {
   	        cursor: pointer;
	        width:150px;
            margin: 15px 0px 0px 100px;
		}
	</style>
</head>
<body>

	<div class="nav">
		<img class="logo" src="images/logo.png"/>
	</div>

	
<form method="POST" action="login-register.php">
    <div class="max-w-[450px] mx-auto h-[600px] border-dark border-2 rounded-2 text-center mt-[40px] pt-[30px] text-white bg-black/75">
		<div class="text-center mt-2 container">
			<h1 class="fs-1 fw-bold text-center pt-3">Log In</h1>
			<div class="pt-4 ">
				<input type="text" placeholder="Enter name or Email" name="email_username" class="w-[300px]  rounded-1 p-[12px] outline-none bg-neutral-700" required/>
				<input type="password" placeholder="Password" id="pass"  name="password" onkeyup="check(this)" class="w-[245px]  rounded-1 p-[12px] mt-[18px] bg-neutral-700 outline-none " required/>
				<button type="password"  onclick="toggle(this)" class="rounded-1 bg-neutral-700 text-[16px] p-[12px] w-[60px] ml-[-10px] text-gray-400">Show</button>
				<error id="alert"></error>
				<button class=" rounded-2 p-[13px] mt-4 w-[300px] bg-red-700 text-white text-[20px] hover:bg-red-600" name="Login">Log in</button><br>
				
				<div class="text-center">
				    <input type="checkbox" checked class="d-inline mt-4 ml-[-5px]">
				    <label class="ml-1">Remember Me</label> 
				    <a href="#" class="ml-3 text-right ml-[80px] hover:underline">Need Help?</a>
			    </div>

				<div class="mt-[80px]">
					<p class="ml-[-66px] text-[18px] text-neutral-700">New to Netflix?<a href="Register.php" class="text-[16px] text-white hover:underline">  SignUp Now.</a></p>
					<p class="ml-[10px] mt-2 text-[13px]">This page is protected by Google reCAPTCHA  to the <br> ensure that you're not a bot.   
						<a href="#" class="text-sky-800 text-[16px] ">  Learn more.</a></p>
				</div>
			</div>
		</div>
	</div>
</form>
	
	<script>
		var password = document.getElementById('pass');
		function toggle(elem){
			var type = password.getAttribute('type');

			if(type === 'password'){
				password.setAttribute('type','text');
				elem.innerText = "Hide";
			}else{
				password.setAttribute('type','password');
				elem.innerText ="Show";
			}
		}
	</script>

</body>
</html>