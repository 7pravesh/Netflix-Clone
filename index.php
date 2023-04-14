<?php 
    require('connection.php');
    session_start();
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Netflix | Clone</title>
	<link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>

   <div class="header" style="background-image: linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)) ,url(images/header-image.png);">
    	<nav>
    		<img src="images/logo.png" class="logo"/>
    		<div>
    			<button class="language-btn">English <img src="images/down-icon.png"></button>
    			<button class="btn"><a role="button" href="login.php">Log In</a></button>
    		</div>
    	</nav>

    	<div class="main-content">
    		<h1>Unlimited <span>movies</span> , TV shows and more.  </h1>
    		<h3>watch anywhere. Cancel anytime.</h3>
    		<p class="heading">Ready to watch? Enter your email to create or restart your membership.</p>
    		<form class="email-signup">
    		    <input type="email" placeholder="Email Address" required />
    		    <button type="submit" class="started-bttn"><a href="Register.php" style="color:white; text-decoration: none ;">Get Started</a></button>
    	    </form>
    	</div>
   </div>


   <div class="features">
   	<div class="row">
   		<div class="text-col">
   			<h2>Enjoy on your TV.</h2>
   			<p>Watch on smart TVs, playStation, Xbox, Chromecast, Apple TV, Blu-ray players and more.</p>
   		</div>
   		<div class="img-col">
   			<img src="images/feature-1.png">
   		</div>
   	</div>

   	<div class="row">
   		<div class="img-col">
   			<img src="images/feature-2.png">
   		</div>
   		<div class="text-col">
   			<h2>Download your shows to watch offline.</h2>
   			<p>Save your favourites easily and always have something to watch.</p>
   		</div>
   	</div>

   	<div class="row">
   		<div class="text-col">
   			<h2>Watch everwhere.</h2>
   			<p>Stream unlimited movies and TV shows on your phone, tablet, laptop, and TV.</p>
   		</div>
   		<div class="img-col">
   			<img src="images/feature-3.png">
   		</div>
   	</div>

   	<div class="row">
   		<div class="img-col">
   			<img src="images/feature-4.png">
   		</div>
   		<div class="text-col">
   			<h2>Create profiles for children.</h2>
   			<p>Send children on adventures with their favourite characters in a space made just for them-free with your membership.</p>
   		</div>
   	</div>
   </div>


   <div class="faq">
   	<h2>Frequently Ask Questions</h2>
   	<ul class="accordion">
   		<li>
   			<input type="radio" name="accordion" id="first">
   			<label for="first">What is Netflix?</label>
   			<div class="content">
   				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
   				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
   				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
   				consequat.</p>
   			</div>
   		</li>

   		<li>
   			<input type="radio" name="accordion" id="Second">
   			<label for="Second">How much does Netflix cost?</label>
   			<div class="content">
   				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
   				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
   				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
   				consequat.</p>
   			</div>
   		</li>

   		<li>
   			<input type="radio" name="accordion" id="Thrid">
   			<label for="Thrid">Where can i Watch?</label>
   			<div class="content">
   				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
   				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
   				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
   				consequat.</p>
   			</div>
   		</li>

   		<li>
   			<input type="radio" name="accordion" id="Fourth">
   			<label for="Fourth">How do i cancel?</label>
   			<div class="content">
   				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
   				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
   				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
   				consequat.</p>
   			</div>
   		</li>

   		<li>
   			<input type="radio" name="accordion" id="Fifth">
   			<label for="Fifth">What can I watch on Netflix?</label>
   			<div class="content">
   				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
   				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
   				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
   				consequat.</p>
   			</div>
   		</li>

   		<li>
   			<input type="radio" name="accordion" id="Sixth">
   			<label for="Sixth">Is Netflix is good for Kids?</label>
   			<div class="content">
   				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
   				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
   				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
   				consequat.</p>
   			</div>
   		</li>
   	</ul>

   	<small>Ready to watch? Enter your email to create or restart your membership.</small>
   	<form class="email-signup">
    		    <input type="email" placeholder="Email Address" required />
    		    <button type="submit" class="started-bttn"> Get Started</button>
    	</form>
   </div>

   <div class="footer" id="footer">
   	    <h2>Question? call 0112-1199-22</h2>

   	    <div class="row">
   	    	<div class="col">
   	    	   <a href="#">FAQ</a>
   	    	   <a herf="#">Investor Relations</a>
   	    	   <a herf="#">Privacy</a>
   	    	   <a herf="#">Speed Test</a>
   	       </div>
   	        <div class="col">
   	    	   <a href="#">Help Center</a>
   	    	   <a herf="#">Jobs</a>
   	    	   <a herf="#">Cookies Information</a>
   	    	   <a herf="#">Legal Notices</a>
   	       </div>
   	       <div class="col">
   	    	   <a href="#">Account</a>
   	    	   <a herf="#">Ways to watch</a>
   	    	   <a herf="#">Corporate Inromation</a>
   	    	   <a herf="#">Only on Netflix</a>
   	       </div>
   	        <div class="col">
   	    	   <a href="#">Media Center</a>
   	    	   <a herf="#">Terms of Use</a>
   	    	   <a herf="#">Contect Us</a>
   	       </div>
   	    </div>
            <button class="language-btn">English <img src="images/down-icon.png"></button>
        <p class="copright-txt">Netflix India</p>
		<footer style="font-size: 22px; color: white; text-align: center; "> Copyright &copy; Developed by
		    <span style="color:#db0001; font-size: 24px; font-weight: 600; " >Pravesh</span> Raturi [ Front End Developer ]
		<!-- <i class="fab fa-facebook" style="color:white;"></i>
		<i class="fab fa-facebook"></i>
        <i class="fab fa-twitter"></i>
        <i class="fab fa-linkedin"></i>
        <i class="fab fa-instagram"></i>-->
		</footer>
    </div>


 <!-- Script links -->

    <script src="https://kit.fontawesome.com/c0e285f281.js" crossorigin="anonymous"></script>


</body>
</html>