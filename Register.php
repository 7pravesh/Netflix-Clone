<?php 
    require('connection.php');
    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registration | Form</title>
    
    <!-- LINKS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>

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

		label::after{
			content: "";
		}
		.password-check {
			display: flex;
			color: grey;
		}
		.password-check::after{
			content: "";
		}
	</style>
</head>
<body>
<form method="POST" action="login-register.php">
    <div class="max-w-[450px] mx-auto h-[700px] border-dark border-2 rounded-2 text-center mt-[40px] pt-[30px] text-white bg-black/75">
		<div class="text-center mt-2 container">
			<div class="d-flex text-center justify-content-evenly">
				<h1 class="fs-1 fw-bold text-center pt-3 ">Sign In</h1>
			    <button type="reset" onclick="popup()" class="text-center align-items-center text-[22px] mt-[15px] ml-[15px]">X</button>
			</div>
			<div class="pt-4 ">
                <input type="text"  placeholder="Enter Name" name="fullname" class="w-[300px]  rounded-1 p-[12px] outline-none bg-neutral-700" required>
                <input type="email" placeholder="Enter Email" name="email" class="w-[300px]  rounded-1 p-[12px] outline-none mt-[18px] bg-neutral-700" required>
				<input type="text"  placeholder="Username" name="username"  class="w-[300px]  rounded-1 p-[12px] outline-none mt-[18px] bg-neutral-700" required>
                <input type="number" placeholder="Enter Phone No." name="phoneNo" class="w-[300px] rounded-1 p-[12px] outline-none mt-[18px] bg-neutral-700" required>
                <input type="password" placeholder="Password" id="pass" name="password" onkeyup="passCheck(this.value)" class="w-[245px]  rounded-1 p-[12px] mt-[18px] bg-neutral-700 outline-none " required>
                <button type="password"  onclick="toggle(this)" class="rounded-1 bg-neutral-700 text-[16px] p-[12px] w-[60px] ml-[-10px] text-gray-400">Show</button>
               <!--- <input type="password" placeholder="Confirm-Password" id="conf-pass" onkeyup="check_conf(this)" class="w-[245px]  rounded-1 p-[12px] mt-[18px] bg-neutral-700 outline-none " required/>
                <button type="password"  onclick="toggleConf(this)" class="rounded-1 bg-neutral-700 text-[16px] p-[12px] w-[60px] ml-[-10px] text-gray-400">Show</button>-->
                <button type="submit" class=" rounded-2 p-[13px] mt-4 w-[300px] bg-red-700 text-white text-[20px] hover:bg-red-600" name="signup">SignUp</button><br>		
                <button class="mt-[20px] text-[12px] text-white-50">After SignUp Login from here..  <a href="login.php" class="text-[15px] text-white bg-red-600 ml-[15px] rounded-1 p-[3px] ">Login Here</a></button>
            </div>
			<div class="text-[14px] mt-[10px]">
			    <label class="password-check">8 Charcter</label>
			    <label class="password-check">1 lowercase</label>
			    <label class="password-check">1 Uppercase</label>
			    <label class="password-check">1 number</label>
			    <label class="password-check">1 special Charcter</label>
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

		function passCheck(data) {
			var passClass = document.getElementsByClassName('password-check')
            const eightChar= new RegExp('(?=.{8,})');
            const lowercase = new RegExp('(?=.*[a-z])');
            const uppercase= new RegExp('(?=.*[A-Z])');
            const number= new RegExp('(?=.*[0-9])');			
            const speicalChar= new RegExp('(?=.*[!@#$%^&*/\])');


            if (eightChar.test(data))
            {
            	passClass[0].style.color ="green";
            }else{
            	passClass[0].style.color ="grey";
            }

            if (lowercase.test(data))
            {
            	passClass[1].style.color ="green";
            }else{
            	passClass[1].style.color ="grey";
            }

            if (uppercase.test(data))
            {
            	passClass[2].style.color ="green";
            }else{
            	passClass[2].style.color ="grey";
            }

            if (number.test(data))
            {
            	passClass[3].style.color ="green";
            }else{
            	passClass[3].style.color ="grey";
            }

            if (speicalChar.test(data))
            {
            	passClass[4].style.color ="green";
            }else{
            	passClass[4].style.color ="grey";
            }

		}	

		

	</script>
    
</body>
</html>