<!DOCTYPE html>

<?php include_once 'dbconnect.php'; ?>

 <?php
    if($_SERVER["REQUEST_METHOD"]== "POST"){
        if(isset($_POST['submit'])){
            $user_name = $_POST['username'];
            $email = $_POST['email'];
            $sub = $_POST['sub'];
            $message = $_POST['mess'];


           $insert_query = "INSERT INTO `visitor`(`name`, `email`, `sub`, `message`) VALUES ('$user_name',' $email','$sub','$message')";

           $insert = mysqli_query($myconnection,$insert_query );
        //   print_r($insert);
        }
    }
?> 

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arjun Chandra Das</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>

</head>
<body>
    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>
    <nav class="navbar">
        <div class="max-width">
            <div class="logo"><a href="#">Portfo<span>lio.</span></a></div>
            <ul class="menu">
                <li><a href="#home" class="menu-btn">Home</a></li>
                <li><a href="#about" class="menu-btn">About</a></li>
                <li><a href="#services" class="menu-btn">Services</a></li>
                <li><a href="#skills" class="menu-btn">Skills</a></li>
                <li><a href="#teams" class="menu-btn">My Work</a></li>
                <li><a href="#contact" class="menu-btn">Contact</a></li>
                <li><a href="cv.php" class="menu-btn">CV</a></li>
                
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>

    <!-- home section start -->
    <section class="home" id="home">
        <div class="max-width">
            <div class="home-content">
                <div class="text-1">Hello, my name is</div>
                <div class="text-2">Arjun Das</div>
                <div class="text-3">And I'm a Web Devoloper</div>
                <a href="#">Hire me</a>
            </div>
            <div class="home-content">
                <img src="images/22.png" alt="">
            </div>
        </div>
    </section>

    <!-- about section start -->
    <section class="about" id="about">
        <div class="max-width">
            <h2 class="title">About me</h2>
            <div class="about-content">
                <div class="column left">
                    <img src="images/arjun.jpg" alt="">
                </div>
                <div class="column right">
                    <div class="text">I'm Arjun and I'm a font end web devoloper</span></div>
                    <p>My name is Arjun Chandra Das.I am junior WebDeveloper.My Debeloper Teachr Jonkar Mhahabub Sir.I am Seruous that's course.I already learned the basic HTML and CSS. I can bulid any simple website.I can even teach my grandma how to make sample website.My goal is ot build 3 website and lear advanced topices.</p>
                    <a onclick="window.print()" href="cv.php">Print CV</a>
                </div>
            </div>
        </div>
    </section>

    <!-- services section start -->
    <section class="services" id="services">
        <div class="max-width">
            <h2 class="title">My services</h2>
            <div class="serv-content">
                <div class="card">
                    <div class="box">
                        <i class="fas fa-paint-brush"></i>
                        <div class="text">Web Design</div>
                        <p>Creative Web Design and best service. Friest delivery....</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fas fa-solid fa-code"></i>
                        <div class="text">Web Devolopment</div>
                        <p>Creative Design and Responssive work and 6 month potential suport ... </p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fa-brands fa-searchengin"></i>
                        <div class="text">SEO</div>
                        <p>Website google ranking 1 st page and all maintain suport 1 year ..</p>
                    </div>
                </div>
               </div>
            </div>
        </div>
    </section>

    <!-- skills section start -->
    <section class="skills" id="skills">
        <div class="max-width">
            <h2 class="title">My skills</h2>
            <div class="skills-content">
                <div class="column left">
                    <div class="text">My creative skills & experiences.</div>
                    <p>
                    I already learned the basic html,css,JavaScript,reactjs,nodejs,mongodb.I can bulid any simple website and responsive website.my porject show that my work section.I can even teach my grandma how to make 16 website and real project on 3 website.My goal is  build 30 website create on 1 year and lear advanced topices.
                    </p>
                    <a href="#">Read more</a>
                </div>
                <div class="column right">
                    <div class="bars">
                        <div class="info">
                            <span>HTML</span>
                            <span>95%</span>
                        </div>
                        <div class="line html"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>CSS</span>
                            <span>60%</span>
                        </div>
                        <div class="line css"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>JavaScript</span>
                            <span>80%</span>
                        </div>
                        <div class="line js"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>reactJs</span>
                            <span>40%</span>
                        </div>
                        <div class="line php"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>reactNative</span>
                            <span>40%</span>
                        </div>
                        <div class="line php"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>NodeJs</span>
                            <span>60%</span>
                        </div>
                        <div class="line css"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>MongoDB</span>
                            <span>40%</span>
                        </div>
                        <div class="line php"></div>
                    </div>
                    
                      
                </div>
            </div>
        </div>
    </section>

    <!-- work section start -->
    <section class="teams" id="teams">
        <div class="max-width">
            <h2 class="title">My Work</h2>
            <div>
               <a href="https://arjun1571.github.io/web-portfolio/?fbclid=IwAR3b6MKC_pqNiRvXhwUOrQ4PB9rWWJ7t9XANMBaTRU_9_gKVkuCFT3YeqCw"> <img class="img" src="images/1.png" alt=""></a>
                <a href="https://arjun1571.github.io/panda-commerce/#"><img class="img" src="images/2.png" alt=""></a>
                <a href="https://arjun1571.github.io/48betch/"><img class="img" src="images/3.png" alt=""></a>
                <a href="https://arjun1571.github.io/hot-gadgates/"><img class="img" src="images/4.png" alt=""></a>
                <a href="https://arjun1571.github.io/arjun-bank/"><img class="img" src="images/5.png" alt=""></a>
                <a href="https://arjun1571.github.io/hot-gadgates/"><img class="img" src="images/4.png" alt=""></a>
            </div>
            
        </div>
        
        
    </section>

    <!-- contact section start -->
    <section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title">Contact me</h2>
            <div class="contact-content">
                <div class="column left">
                    <div class="text">Get in Touch</div>
                    <p>Do you contact me.follow the down instraction......</p>
                    <div class="icons">
                        <div class="row">
                            <i class="fas fa-user"></i>
                            <div class="info">
                                <div class="head">Name</div>
                                <div class="sub-title">Arjun Das</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="info">
                                <div class="head">Address</div>
                                <div class="sub-title">Dhaka, Bangladesh</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-envelope"></i>
                            <div class="info">
                                <div class="head">Email</div>
                                <div class="sub-title">arjundasback515@gmail.com</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column right">
                    <div class="text">Message me</div>
                    <form action="" method="post" >
                        <div class="fields">
                            <div class="field name">
                                <input type="text" name="username" placeholder="Name" required>
                            </div>
                            <div class="field email">
                                <input type="email" placeholder="Email" name="email" required>
                            </div>
                        </div>
                        <div class="field">
                            <input type="text" placeholder="Subject" name="sub" required>
                        </div>
                        <div class="field textarea">
                            <textarea cols="30" rows="10" placeholder="Message.." name="mess" required></textarea>
                        </div>
                        <div class="button-area">
                           <button name="submit" value="Send" type="submit" >Send message</button> 
                           <!-- <input type="submit" name="submit" value="Send"> -->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- footer section start -->
    <footer>
        <span>Created By <a href="https://arjun1571.github.io/web-portfolio/?fbclid=IwAR3b6MKC_pqNiRvXhwUOrQ4PB9rWWJ7t9XANMBaTRU_9_gKVkuCFT3YeqCw">Arjun</a> | <span class="far fa-copyright"></span> 2022 All rights reserved.</span>
    </footer>


    <script>
    
    </script>

    
</body>
</html>

<?php mysqli_close($myconnection) ?>