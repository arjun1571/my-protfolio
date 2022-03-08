
<!DOCTYPE html>

<?php include_once "dbconnect.php"; ?>
<?php
   $select_query= "SELECT * FROM `skills`";

  $skills= mysqli_query($myconnection1,$select_query);

  //print_r($skills);
?>
<?php while($skill=mysqli_fetch_assoc($skills)) {?>
    <ul>
        
    </ul>

    <?php } ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arjun Web Developer</title>
    <link rel="stylesheet" href="style1.css">
    
</head>
<body>
   <section class="top-banner"> 
        <div class="half-width">
            <h2>Arjun Chandra Das</h2>
            <h2>Phone: +8801824751931</h2>
            <h2> arjundasback515@gmail.com</h2>
            <h2>https://github.com/arjun1571</h2>
        </div>
        <div id="right">
            <img src="images/arjucv.jpg" alt="">
        </div>
   </section>

   <hr>

   <!-- <?php
   $select_query= "SELECT * FROM `skills`";

  $skills= mysqli_query($myconnection1,$select_query);

  //print_r($skills);
?>
<?php while($skill=mysqli_fetch_assoc($skills)) {?>
    <ul>
        <li> <?php echo $skill['web']; ?> </li>
    </ul>

    <?php } ?> -->
  
   <section class="dream-area">
       <div class="half-width">
            <h1>CARRER OBJECTIVE</h1>
       </div>
       <div class="half-width">
            <h3>To develop a better career in business organization where I will have the scope to utilize my potentially, adaptability and skills to do something innovative and opportunity for long term careers growth and advancement.</h3>
       </div>
   </section>

   <section class="dream-area">
    <div class="half-width">
        <h1>PERSONAL INFORMATION</h1>
    </div>
    <div class="half-width">
        <h3>Name : Arjun Chandra Das</h3>
        <h3>Father Name : Gouranga Chandra Das</h3>
        <h3>Mother Name : Monosa Rani Das</h3>
        <h3>Date of Birth : 02/03/2000</h3>
        <h3>Gender : Male</h3>
        <h3>Nationality : Bangladeshi</h3>
        <h3>Marital Status : Single</h3>
        <h3>Religion : Hinduism</h3>
        <h3>National ID : 1030066763</h3>
        <h3>Bload Group : O +(positive)</h3>
    </div>
 </section>

  <section class="dream-area">

    <div class="half-width">
     <h1>EDUCATIONAL QUALIFICATION</h1>

    </div>
    <div class="half-width">
        <h3>Bachelor of (B.Sc) Computer Science & Engineering</h3>
        <p>Final Year students</p>
        <p>City University</p>
        <p>Dhaka, Bangladesh</p>
        <br>
        <h3>Higher Secondary Certificate Science</h3>
        <p>GPA: 3.33(out of 5)</p>
        <p>Board : Dhaka</p>
        <p>Passing Year: 2018</p>
        <p>Palash Shilpanchal Govt. College, Ghorashal</p>
        <br>
        <h3>Secondary School Certificate Science</h3>
        <p>GPA : 4.56 (Out of 5)</p> 
        <p>Board : Dhaka</p> 
        <p>Passing Year: 2016</p> 
        <p>Jamalpur R. M. Bidyapith, Kaliganj, Gazipur</p>


    </div>

 </section>

 <section>
    <div class="half-width">
        <h1>PERSONAL QUALIFICATION</h1>
    
       </div>
       <div class="half-width">
           <h3>	Ability to cope up with different situation</h3>
           <h3>	Very good temperament and like to take challenge.</h3>
           <h3>	Co-operative and innovative.</h3>
           <h3>	Good communication skill and ability to interact will with subordinate work force. </h3>
           <h3>	Can learn quickly to necessary details of work.</h3>
           <h3>	Processes the necessary dynamism to achieve result.</h3>
           <h3>	Active reader and writer on Quora</h3>
           <h3>	Playing Chess.</h3>
       </div>
 </section>
 
   <div class="half-width">
        <h1>ADDRESS</h1>
   </div>
   <div class="half-width">
        <h3>Permanent</h3>
        <p>C/O: Gouranga Chandra Das </p>
        <p>Village: Ishawarpur.</p>
        <p>P.O: Dokhinbag.</p>
        <p>P.S: Kaliganj</p> 
        <p>District: Gazipur</p> 
        <h3>Present </h3>
        <p>Home# গ-133, Hazari Bari, Mohakhali, Dhaka Bangladesh</p> 
   </div>



    <div class="half-width">
        <h1>SKILLS</h1>
    </div>
    <div class="half-width">
        <h3>Programming</h3> 
 <?php
   $select_query= "SELECT * FROM `skills`";

   $skills= mysqli_query($myconnection1,$select_query);
 
   //print_r($skills);
 ?>
 <?php while($skill=mysqli_fetch_assoc($skills)) {?>
     <ul>
         <li> <?php echo $skill['P_language']; ?> </li>
     </ul>
  <?php } ?> 
        <!-- <p>C, C++, java</p>  -->
        <h3>Web</h3> 
<?php
   $select_query= "SELECT * FROM `skills`";

   $skills= mysqli_query($myconnection1,$select_query);
 
   //print_r($skills);
 ?>
 <?php while($skill=mysqli_fetch_assoc($skills)) {?>
     <ul>
         <li> <?php echo $skill['P_language']; ?> </li>
     </ul>
  <?php } ?>
        <!-- <p>JavaScript, HTML5, CSS,</p>  -->
        <h3>web framework</h3>
        <?php
   $select_query= "SELECT * FROM `skills`";

   $skills= mysqli_query($myconnection1,$select_query);
 
   //print_r($skills);
 ?>
 <?php while($skill=mysqli_fetch_assoc($skills)) {?>
     <ul>
         <li> <?php echo $skill['web_framework']; ?> </li>
     </ul>
  <?php } ?>
        <!-- <p>ReactJs, bootstrap</p> -->
        <h3>Dev Tools</h3>
        <?php
   $select_query= "SELECT * FROM `skills`";

   $skills= mysqli_query($myconnection1,$select_query);
 
   //print_r($skills);
 ?>
 <?php while($skill=mysqli_fetch_assoc($skills)) {?>
     <ul>
         <li> <?php echo $skill['Dev Tools']; ?> </li>
     </ul>
  <?php } ?>
        <!-- <p>Git</p>
        <p>Operating System Windows 10, MAC OS, and Linux installation with operating.</p> -->
        <h3>Video editing</h3> 
        <p>Wondershare Filmora</p>
        <h3>YouTube</h3>
        <p>Basic SEO of  Youtubeing</p> 
    </div>

    <div class="half-width">
        <h1>TRAINING</h1>
    </div>
    <div class="half-width">
        <h3>Six months training on WEB APPLICATION DEVELOPMENT-JavaScript from (Online platform) Bohubrihi Technologies Ltd. </h3> 
    </div>
   
  
  
</body>
</html>

<?php mysqli_close($myconnection1) ?>