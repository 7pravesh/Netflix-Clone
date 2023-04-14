<?php 
    require('connection.php');
    session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Netflix | Dashboard </title>

    <!--links-->
	<link rel="stylesheet" type="text/css" href="style/dashboard.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body style="background-color: var(--body-color); transition: background 0.3s;">
<!--
    <div class="container-fluid max-w-[1400px] mx-auto">
        <div class="d-flex justify-content-between">
            <img src="images/logo.png" class="w-[150px] mt-[10px]">
                <div class="mt-[15px]">
                    <?php
	                if(isset($_SESSION['Logged_In']) && $_SESSION['Logged_In']==true)
	                {
	                    echo"
                            <div class='user p-[10px]'>
                               $_SESSION[username] <span class='border border-left-2  '></span> <a class='text-white pl-[20px] text-[22px] hover:text-red-600 ' href='logout.php'>Logout</a>
                            </div>
                        "; 
                    }		
                    ?>
                </div>
        </div>
    </div>
-->

    
    <nav>
        <div class="nav-left">
            <img src="images/logo.png" class="logo">
            <ul>
                <a href="#">Home</a>
                <a href="#">Series</a>
                <a href="#">Films</a>
                <a href="#">New & Popular</a>
                <a href="#">My List</a>
            </ul>
        </div>
        <div class="nav-right">
            <div class="search-box">
                <i class="fa-solid fa-magnifying-glass"></i>
                <input type="text" placeholder="Search..">
            </div>
            <li class="notification online" >
                <i class="fa-regular fa-bell"></i>
            </li>
            <div class="nav-user-icon " onclick="settingsMenuToggle()">
                <img src="images/profile-pic.png">
                <img class="arrow" src="images/down-icon.png">
            </div>
        </div>

          <!---   Setting - menu -->

        <div class="setting-menu">

            <div id="dark-btn" >
                <span></span>
            </div>

            <div class="setting-menu-inner">
                <div class="user-profile">
                    <img src="images/profile-pic.png">
                        <div class="user-info">
                            <?php
	                            if(isset($_SESSION['Logged_In']) && $_SESSION['Logged_In']==true)
	                            {
                                    echo"
                                       <p> $_SESSION[username] </p>                                    "; 
                                }		
                            ?>
                            <a href="#">See you profile</a>
                        </div>
                </div>
                <hr>
                <div class="user-profile">
                    <img src="images/feedback.png">
                    <div class="user-info">
                        <p style="color:red;">Give feedback </p>
                        <a href="#">Help us to improve the new design</a>
                    </div>
                </div>
                <hr>

                <div class="setting-links">
                    <img src="images/setting.png" class="settings-icon">
                    <a href="#"><p style="font-size: 18px ; font-weight: 600;">Setting & Privacy</p> <img src="images/arrow.png" width="10px" ></a>
                </div>

                <div class="setting-links">
                    <img src="images/help.png" class="settings-icon">
                    <a href="#"><p style="font-size: 18px ; font-weight: 600;">Help & Support</p><img src="images/arrow.png" width="10px"></a>
                </div>

                <div class="setting-links">
                    <img src="images/display.png" class="settings-icon">
                    <a href="#"><p style="font-size: 18px ; font-weight: 600;">Display & Accessbility </p><img src="images/arrow.png" width="10px"></a>
                </div>

                <div class="setting-links">
                    <img src="images/logout.png" class="settings-icon">
                    <a href="logout.php"><p style="font-size: 18px ; font-weight: 600;">Logout </p><img src="images/arrow.png" width="10px"></a>
                </div>
                <hr>
                <div class="nav-footer">    
                    <p>Privacy & Policy &ensp; T&C</p>
                    <span>v12.4.9.1171</span>
                </div> 
            </div>
        </div>
    </nav>


    <section>
        <div class="container">
            <div class="heading-text">
                <h1>Only on Netflix</h1>
                <p>Netflix is the home of amazing original programming that
                    you can't <br>find anywhere else. Movies, TV shows, 
                    specials and more, all tailored <br> specifically to you.</p>
            </div>
            <div class="netflix-series">
                <h1>Made in India</h1>
                <div class="series-img grid lg:grid-cols-5 mt-[25px] gap-[8px] ">
                    <div><img src="pictures/made-in-india-1.jpg" class="rounded-2"><p>Rana naidu</p></div>
                    <div><img src="pictures/made-in-india-2.jpg" class="rounded-2"><p>chor nikal ke bhaga</p></div>
                    <div><img src="pictures/made-in-india-3.jpg" class="rounded-2"><p>mighty little bheem</p></div>
                    <div><img src="pictures/made-in-india-4.jpg" class="rounded-2"><p>khakee:the bihar</p></div>
                    <div><img src="pictures/made-in-india-5.jpg" class="rounded-2"><p>the elephant whisperers</p></div>
                    <div><img src="pictures/made-in-india-6.jpg" class="rounded-2"><p>missmatched</p></div>
                    <div><img src="pictures/made-in-india-7.jpg" class="rounded-2"><p>mission majnu</p></div>
                    <div><img src="pictures/made-in-india-8.jpg" class="rounded-2"><p>jaddugar</p></div>
                    <div><img src="pictures/made-in-india-9.jpg" class="rounded-2"><p>kota factory</p></div>
                    <div><img src="pictures/made-in-india-10.jpg"class="rounded-2"><p>cat</p></div>
                </div>
            </div>

            <div class="netflix-series">
                <h1>Popular on Netflix</h1>
                <div class="series-img grid lg:grid-cols-5 mt-[25px] gap-[8px] ">
                    <div><img src="pictures/Popular on Netflix-1.jpg" class="rounded-2"><p>oggy and the cockroaches:next generation</p></div>
                    <div><img src="pictures/Popular on Netflix-2.jpg" class="rounded-2"><p>larva island</p></div>
                    <div><img src="pictures/Popular on Netflix-3.jpg" class="rounded-2"><p>mainfest</p></div>
                    <div><img src="pictures/Popular on Netflix-4.jpg" class="rounded-2"><p>the boss baby:back in business</p></div>
                    <div><img src="pictures/Popular on Netflix-5.jpg" class="rounded-2"><p>the worst witch</p></div>
                    <div><img src="pictures/Popular on Netflix-6.jpg" class="rounded-2"><p>lost in space</p></div>
                    <div><img src="pictures/Popular on Netflix-7.jpg" class="rounded-2"><p>kung fu panda:the dragon knight</p></div>
                    <div><img src="pictures/Popular on Netflix-8.jpg" class="rounded-2"><p>phantom pups</p></div>
                    <div><img src="pictures/Popular on Netflix-9.jpg" class="rounded-2"><p>stranger things</p></div>
                    <div><img src="pictures/Popular on Netflix-10.jpg"class="rounded-2"><p>raising dion</p></div>
                </div>
            </div>

            <div class="netflix-series">
                <h1>K-Dramas</h1>
                <div class="series-img grid lg:grid-cols-5 mt-[25px] gap-[8px] ">
                    <div><img src="pictures/K-Dramas-1.jpg" class="rounded-2"><p>business proposal</p></div>
                    <div><img src="pictures/K-Dramas-2.jpg" class="rounded-2"><p>extraordinary attorney woo</p></div>
                    <div><img src="pictures/K-Dramas-3.jpg" class="rounded-2"><p>it's okay to not be okay</p></div>
                    <div><img src="pictures/K-Dramas-4.jpg" class="rounded-2"><p>vincenzo</p></div>
                    <div><img src="pictures/K-Dramas-11.jpg"class="rounded-2"><p>squid game</p></div>
                    <div><img src="pictures/K-Dramas-6.jpg" class="rounded-2"><p>the king:eternal monarch</p></div>
                    <div><img src="pictures/K-Dramas-7.jpg" class="rounded-2"><p>hometown cha-cha-cha</p></div>
                    <div><img src="pictures/K-Dramas-8.jpg" class="rounded-2"><p>all of us are dead</p></div>
                    <div><img src="pictures/K-Dramas-9.jpg" class="rounded-2"><p>the glory</p></div>
                    <div><img src="pictures/K-Dramas-10.jpg"class="rounded-2"><p>start-up</p></div>
                </div>
            </div>

            <div class="netflix-series">
                <h1>Action Movies</h1>
                <div class="series-img grid lg:grid-cols-5 mt-[25px] gap-[8px] ">
                    <div><img src="pictures/Action Movies-1.jpg" class="rounded-2"><p>interceptor</p></div>
                    <div><img src="pictures/Action Movies-2.jpg" class="rounded-2"><p>troll</p></div>
                    <div><img src="pictures/Action Movies-3.jpg" class="rounded-2"><p>the gray man</p></div>
                    <div><img src="pictures/Action Movies-4.jpg" class="rounded-2"><p>murder mystery</p></div>
                    <div><img src="pictures/Action Movies-5.jpg"class="rounded-2"><p>6 underground</p></div>
                    <div><img src="pictures/Action Movies-6.jpg" class="rounded-2"><p>red notice</p></div>
                    <div><img src="pictures/Action Movies-7.jpg" class="rounded-2"><p>black crab</p></div>
                    <div><img src="pictures/Action Movies-8.jpg" class="rounded-2"><p>mowgli:the legend of the jungle</p></div>
                    <div><img src="pictures/Action Movies-9.jpg" class="rounded-2"><p>revenge</p></div>
                    <div><img src="pictures/Action Movies-10.jpg"class="rounded-2"><p>extraction</p></div>
                </div>
            </div>

            <div class="netflix-series">
                <h1>Bingeworthy TV Shows</h1>
                <div class="series-img grid lg:grid-cols-5 mt-[25px] gap-[8px] ">
                    <div><img src="pictures/Bingeworthy TV Shows-1.jpg" class="rounded-2"><p>wednesday</p></div>
                    <div><img src="pictures/Bingeworthy TV Shows-2.jpg" class="rounded-2"><p>the sandman</p></div>
                    <div><img src="pictures/Bingeworthy TV Shows-3.jpg" class="rounded-2"><p>residant evil</p></div>
                    <div><img src="pictures/Bingeworthy TV Shows-4.jpg" class="rounded-2"><p>marcos mexico</p></div>
                    <div><img src="pictures/Bingeworthy TV Shows-5.jpg"class="rounded-2"><p>baki</p></div>
                    <div><img src="pictures/Bingeworthy TV Shows-11.jpg" class="rounded-2"><p>class</p></div>
                    <div><img src="pictures/Bingeworthy TV Shows-7.jpg" class="rounded-2"><p>van helsing</p></div>
                    <div><img src="pictures/Bingeworthy TV Shows-8.jpg" class="rounded-2"><p>insatiable</p></div>
                    <div><img src="pictures/Bingeworthy TV Shows-9.jpg" class="rounded-2"><p>12 reason why</p></div>
                    <div><img src="pictures/Bingeworthy TV Shows-10.jpg"class="rounded-2"><p>locke & key</p></div>
                </div>
            </div>

            <div class="netflix-series">
                <h1>Documentaries</h1>
                <div class="series-img grid lg:grid-cols-5 mt-[25px] gap-[8px] ">
                    <div><img src="pictures/Documentaries-1.jpg" class="rounded-2"><p>our universe</p></div>
                    <div><img src="pictures/Documentaries-2.jpg" class="rounded-2"><p>wild babies</p></div>
                    <div><img src="pictures/Documentaries-3.jpg" class="rounded-2"><p>our planet</p></div>
                    <div><img src="pictures/Documentaries-4.jpg" class="rounded-2"><p>greatest events of WWII in color</p></div>
                    <div><img src="pictures/Documentaries-5.jpg" class="rounded-2"><p>our great national parks</p></div>
                    <div><img src="pictures/Documentaries-6.jpg" class="rounded-2"><p>top secret ufo projects:declassifed</p></div>
                    <div><img src="pictures/Documentaries-7.jpg" class="rounded-2"><p>the elephant whisperers</p></div>
                    <div><img src="pictures/Documentaries-8.jpg" class="rounded-2"><p>bad boy billionaires:india</p></div>
                    <div><img src="pictures/Documentaries-9.jpg" class="rounded-2"><p>act smart with money</p></div>
                    <div><img src="pictures/Documentaries-10.jpg"class="rounded-2"><p>animal</p></div>
                </div>
            </div>
        </div>

        <div class="netflix-series  blur">
            <h1>Action Movies</h1>
            <div class="series-img grid lg:grid-cols-5 mt-[25px] gap-[8px] ">
                <div><img src="pictures/Action Movies-1.jpg" class="rounded-2 "><p>interceptor</p></div>
                <div><img src="pictures/Action Movies-2.jpg" class="rounded-2"><p>troll</p></div>
                <div><img src="pictures/Action Movies-3.jpg" class="rounded-2"><p>the gray man</p></div>
                <div><img src="pictures/Action Movies-4.jpg" class="rounded-2"><p>murder mystery</p></div>
                <div><img src="pictures/Action Movies-5.jpg"class="rounded-2"><p>6 underground</p></div>
                <div><img src="pictures/Action Movies-6.jpg" class="rounded-2"><p>red notice</p></div>
                <div><img src="pictures/Action Movies-7.jpg" class="rounded-2"><p>black crab</p></div>
                <div><img src="pictures/Action Movies-8.jpg" class="rounded-2"><p>mowgli:the legend of the jungle</p></div>
                <div><img src="pictures/Action Movies-9.jpg" class="rounded-2"><p>revenge</p></div>
                <div><img src="pictures/Action Movies-10.jpg"class="rounded-2"><p>extraction</p></div>
            </div>
        </div>
        <div class="footer-text text-center mt-[30px]">
            <h1 class="text-[45px]">There's even more to watch.</h1>
            <p class="text-[20px] mt-[20px] mb-[20px]">Netflix has an extensive library of feature films, documentaries, TV <br>shows, anime, award-winning Netflix originals and more. Watch as <br> much as you want, anytime you want. </p>
        </div>
    </section>


<!--  footer section -->

    
    <div class="about-link">
        <p><a href="#">Read about Netflix TV shows and movies and watch bonus videos on Tudum.com.</a></p>
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
        <p class="copright-txt" style="cursor: pointer;">Only on Netflix India</p>
		<footer style="font-size: 26px; font-weight: 700;	color:var(--text-color); text-align: center; "> Copyright &copy; Developed by
		    <span style="color:#db0001; font-size: 26px; font-weight: 700; " >Pravesh</span> Raturi [ Front End Developer ]
		</footer>
    </div>

    <!-- Script links -->
    
    <script>
        /*dropdown*/
        var settingsmenu = document.querySelector(".setting-menu");
        function settingsMenuToggle(){
            settingsmenu.classList.toggle("settings-menu-height");
        }
        
        /*dark mode*/
        var darkBtn = document.getElementById("dark-btn");
        darkBtn.onclick = function(){
            darkBtn.classList.toggle("dark-btn-on");
            document.body.classList.toggle("dark-theme");

            if(localStorage.getItem("theme") == "light"){
                localStorage.setItem("theme" , "dark");
            }else{
                localStorage.setItem("theme" , "light");
            }
        }

        /*Refresh dark mode*/

        if(localStorage.getItem("theme") == "light"){
            darkBtn.classList.remove("dark-btn-on");
            document.body.classList.remove("dark-theme");
        }
        else if(localStorage.getItem("theme") == "dark"){
            darkBtn.classList.add("dark-btn-on");
            document.body.classList.add("dark-theme");
        }
        else {
            localStorage.setItem("theme" , "light");
        }

        localStorage.setItem("theme" , "dark");
        localStorage.getItem("theme");

    </script>


    <script src="https://kit.fontawesome.com/c0e285f281.js" crossorigin="anonymous"></script>
     
    
    
</body>
</html>













