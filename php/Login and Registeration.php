<!doctype html>

<head>

    <link rel="stylesheet" href="../css/Contacts.css">
    <meta charset="UTF-8">
    <link rel="icon" href="../photo/Gym.jpg" type="image" sizes="16*16">

    <script src="https://kit.fontawesome.com/4f8945698f.js"></script>
     

    <title>Contact Us</title>
   
</head>

<body>
    <!--Header-->
    <article>
    <button onclick="topFunction()" id="myBtn" title="Go to top">^</button>
        <nav>
            <div class="container">
                <section class="logo">
                    <img class="imgresponsive" src="../photo/icon.png" title="Gymx">
                </section>
                <section class="menu">

                    <ul>
                        <li><a href="..\Html\gymx.html">home</a></li>
                        <li><a href="..\Html\aboutus.html">about us</a></li>
                        <li><a href="..\Html\CLASSESS.html">classes</a></li>
                        <li><a href="Services.php">Service</a></li>
                        <li><a href="..\Html\Ourteam.html">Our Team</a></li>
                    </ul>
                    <a href="Login and Registeration.php"> <button>JOIN US</button></a>
                    <ul style="visibility:<?php session_start(); if(!empty($_SESSION['Username'])){echo "visible";}else{echo "hidden";}?>;" id="profile">
                                <div class="ele">
                                    <form action="connection.inc.php"  method="POST">
                                    <li class="Profile_1">
                                        <span>
                                    <?php
                                     $Username="";
                                     $kind="";
                                     $start="";
                                     $end="";
                                     $firstname="";
                                     if(!empty($_SESSION['Username'])){
                                     $Username=$_SESSION['Username'];                                     
                                     $kind=$_SESSION['kind'];
                                     $start=$_SESSION['start'];
                                     $end=$_SESSION['end'];
                                     $firstname=$_SESSION['firstname'];
                                     $fc=substr($firstname,0,1); 
                                     echo "$fc";}
                                        echo"<ul>";
                                            echo "<li>username:$Username</li>"; 
                                            echo "<li>plan:$kind</li>";
                                            echo "<li>Date of start:$start</li>";
                                            echo "<li>Date of end:$end</li>";
                                            echo "<li><button id='out' name='logout'>logout</button></li>";
                                       echo"</ul>";
                                        ?>
                                        </span>
                                    </li>
                                    </form>
                                    </div>
                                </ul>
                </section>
                <div class="cl"></div>
            </div>
        </nav>
        
        <h5 class="HH">GYMX<br>FITNESS CLUB</h5>
        <section class="head">
            <h3 class="Conf">WELCOME</h3>
            <h1 class="just">JOIN US </h1>
            <div class="divsec">
                <a class="ah" href="../Html/gymx.html">HOME</a>
                <span> > </span>
                <a class="ah1" href="Login and Registeration.php"> JOIN US</a>
            </div>
        </section>
        <div class="cl"></div>
    </article>
    <!--End Of Header-->
    <!--body-->
    <section id="all">
        <div id="container8">
            <div class="login">
                <span id="imgspan">
                    <i class="fas fa-dumbbell" style="font-size:100px;color:#FF4500;margin-top:40px;"></i>
                </span>
                <div class="but_regl">
                    <button style="visibility:<?php if(!empty($_SESSION['Username'])){echo "hidden";}else{echo "visible";}?>;" onclick="myFunction()" id="input_1">Register</button>
                    <button style="visibility:<?php if(!empty($_SESSION['Username'])){echo "hidden";}else{echo "visible";}?>;" onclick="myFunction2()" id="input_3">Login</button>

                </div>
                <div style="visibility:<?php if(!empty($_SESSION['Username'])){echo "hidden";}else{echo "visible";}?>;"  class="divline">
                    <div id="divline2"></div>
                </div>
                <form style="display:<?php if(!empty($_SESSION['Username'])){echo "none";}else{echo "table-column";}?>;" action="connection.inc.php" method="POST" id="formlogin" >
                    <table class="tabelform">
                        <tr>
                            <td><label class="labelform">UserName:</label> </td>
                            <td><input  id="input_2" name="Username" placeholder="Username" type="text"> </td>
                            
                        </tr>
                        <tr>
                            <td> <label class="labelform">Password:</label> </td>
                            <td> <input id="input_2" name="Password" placeholder="Password" type="password"></td>
                        </tr>
                    </table>
                    <button   type="submit" name="login" class="button_2" onclick="document.getElementById('input_4').click()">LOGIN</button>

                </form>
                <a href="#profile"><h1 style="color:#FF4500;padding-left: 100px;margin:0;font-size:40px;display:<?php if(!empty($_SESSION['Username'])){echo "inline";}else{echo "none";}?>;">You are already logged in</h1></a>

                <form  style="display:<?php if(!empty($_SESSION['Username'])){echo "none";}else{echo "inline";}?>;" action="connection.inc.php" method="POST" id="formreg">
                    <table class="tabelform">
                    <tr> 
<td><label class="labelform">First Name:</label>		</td> 
                   <td><input  id="input_2" placeholder="First Name" type="text" name="First_Name" onkeyup="showSuggestionfs(this.value)"></td>  
                   <td><span style="font-size:16px; color: #f48460;" id="FN"></span></p></td>
                </tr>
                     <tr>
					 <td><label class="labelform">Last Name:</label></td> 
                     <td><input  id="input_2" placeholder="Last Name" type="text" name="Last_Name" onkeyup="showSuggestionls(this.value)"> </td> 
                     <td><span style="font-size:16px; color: #f48460;" id="ln"></span></p></td>
                    
                    </tr> 
<tr>					  <td><label class="labelform">Email:</label>		</td> 
                     <td><input  id="input_2" placeholder="Email" type="text" name="Email"onkeyup="showSuggestionem(this.value)"> </td>     
                     <td><span style="font-size:16px; color: #f48460;" id="Em"></span></p></td>
</tr>                
                 <tr>  
				  <td><label class="labelform">Username:</label>		</td> 
                 <td><input  id="input_2" placeholder="Username" type="text" name="Username"onkeyup="showSuggestionus(this.value)"></td>    
                 <td><span style="font-size:16px; color: #f48460;" id="US"></span></p></td>

                </tr>                  
                <tr>  
<td><label class="labelform">Password:</label>		</td> 
                <td><input  id="input_2" placeholder="Password" type="password" name="password"onkeyup="showSuggestionps(this.value)"> </td>
                <td><span style="font-size:16px; color: #f48460;" id="ps"></span></p></td>

            </tr>
				<tr>
				<td><label class="labelform">Re-Password:</label>		</td> 
                   <td>  <input  id="input_2" placeholder="Re-Password" type="password" name="Re_Password"onkeyup="showSuggestionrps(this.value)"></td>
                   <td><span style="font-size:16px; color: #f48460;"  id="rps"></span></p></td>

                </tr>
				   <tr>
				   <td><label class="labelform">Date of birth:</label>		</td> 
                   <td> <input  id="input_2" placeholder="Date of birth" type="date" name="Date_of_birth"></td></tr>
					</table>
            <button class="button_2" type="submit" name="submit">JOIN US</button>
            </form>
           
            </div>


            <div id="Image_src1">
                <span id="imgspan">
                    <i class="fas fa-dumbbell"
                        style="font-size:100px;color:#FF4500;margin-top:10px;margin-left:30px;"></i>
                </span>
                <h1 style="color:#FF4500;padding-left: 100px;margin:0;font-size:40px;">WELCOME TO OUR GYMX</h1>
            </div>
        </div>
    </section>
    <!-- Start Footer-->
    <footer class="footer0">
        <div class="container10">
            <section class="lo">

                <span></span>
                <span></span>
                <span></span>
                <span></span>


                <div class="kalma"> GYMX</div>
            </section>

            <section class="card">
                <h4>OPENING HOURS</h4>
                <ul>
                    <li class="day">
                        Monday
                        <span class="time">07:00-17:00</span>
                    </li>
                    <li class="day">
                        Tuesday
                        <span class="time">07:00-17:00</span>
                    </li>
                    <li class="day">
                        Wednesday
                        <span class="time">07:00-17:00</span>
                    </li>
                    <li class="day">
                        Thursday
                        <span class="time">07:00-17:00</span>
                    </li>
                    <li class="day">
                        Friday
                        <span class="time">07:00-17:00</span>
                    </li>

                    <li class="day">
                        Saturday
                        <span class="time">07:00-17:00</span>
                    </li>
                    <li class="day">
                        Sunday
                        <span class="time">07:00-17:00</span>
                    </li>
                </ul>
            </section>

            <section class="card2">
                <h4>TWITTER TWEETS</h4>
                <ul>
                    <li>
                        <i class="fab fa-twitter"></i> Calluna Theme Installation Guide:
                        <a class="youtupe">http://youtu.be/OQdUhM6k-2o?a </a> über <span class="you">@Youtube</span>
                    </li>
                </ul>
                <ul>
                    <li>
                        <i class="fab fa-twitter"></i> Our new Gym, Fitness & Sports theme has been choosed site of the
                        day theme. Thank you very much <a class="youtupe">@designnominees
                            http://themetwins.com/recommends/gymx </a>

                    </li>
                </ul>

            </section>
            <section class="card3">
                <div class="final">
                    <h4>CONTACT</h4>
                    <i class="fas fa-phone-alt"></i>
                    <h6>08000 99911122</h6>
                    <p>Hotline available 24 hours</p>
                </div>
                <div class="final">
                    <i class="fas fa-envelope"></i>
                    <h6>EMAIL US</h6>
                    <p>info@themetwins.com</p>
                </div>
            </section>
            <div class="cl"></div>
        </div>
    </footer>
    <!--End Of Footer-->
    <script src="../Js/Login and Registerationn.js"></script>
</body>

</html>