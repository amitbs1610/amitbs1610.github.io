<!DOCTYPE html>

<html>

<head>


    <title>PVG's College of Engineering and Technology</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="./addform.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- <link rel="stylesheet" href"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">  -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

<style>
.error {color:#FF0000;}
</style>
    

    

</head>

<body>

    <!----------------------------------------------  top bar ----------------------------------------------->

    <div class="top">
        <div class="topele">

            <i class="fas fa-phone"></i>
            <span>+91 020 24228258/65/79</span>

            <div class="topele">
                <i class="fas fa-envelope"></i>
                <span>info@pvgcoet.ac.in</span>


                <div class="lef">
                    <a href="https://twitter.com/home">
                        <i class="fab fa-twitter-square"></i>
                    </a>

                    <a href="https://www.facebook.com/">
                        <i class="fab fa-facebook"></i>
                    </a>

                    <a href="https://www.youtube.com/watch?v=vQWlgd7hV4A">
                        <i class="fab fa-youtube"></i>
                    </a>

                    <a href="https://in.linkedin.com/">
                        <i class="fab fa-linkedin"></i>
                    </a>
                </div>

            </div>
        </div>

    </div>


    <!------------------------------------------------  nav bar ---------------------------------------------->
    <!-------------  nav bar ----------------->

    <div class="head0">

        <div class="logo">
            <a href="home.html"><img style="margin-left:25px;" src="logo.png" /></a>
        </div>

        <div class="navb">
            <ul>
                <li>
                    <a href="#">About Us</a>
                    <div class="submenu1">
                        <ul>
                            <li><a href="#">About PVG</a></li>
                            <li><a href="#">College history</a></li>
                            <li><a href="#">Governance</a></li>
                        </ul>
                    </div>
                </li>


                <li>
                    <a href="#">Admission</a>
                    <div class="submenu1">
                        <ul>
                            <li><a href="#">Admission Process</a></li>
                            <li><a href="#">Cutoff for FE</a></li>
                            <li><a href="#">Fees</a></li>
                            <li><a href="#">Online Admission from SE</a></li>

                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#">Academics</a>

                    <div class="submenu1">
                        <ul>
                            <li class="hoverme">
                                <a href="#">Department</a>
                                <div class="submenu2">
                                    <ul>
                                        <li><a href="#">Computer</a></li>
                                        <li><a href="depit1.html">Information Technology</a></li>
                                        <li><a href="#">Electrical</a></li>
                                    </ul>
                                </div>

                            </li>


                            <li><a href="#">Academic Calender</a> </li>
                            <li><a href="#">Curriculam</a></li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#">Student Corner</a>
                    <div class="submenu1">
                        <ul>
                            <li><a href="#">Student Login</a></li>
                            <li><a href="#">Alumni</a></li>
                            <li><a href="#">Student Council</a></li>
                            <li><a href="#">Anti-Ragging</a></li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#">Campus Life</a>
                    <div class="submenu1">
                        <ul>
                            <li><a href="#">Hostel</a></li>
                            <li><a href="#">Library</a></li>
                            <li><a href="#">Sport</a></li>
                            <li><a href="#">Clubs</a></li>
                        </ul>
                    </div>
                </li>

            </ul>
        </div>


    </div>




    <!-------------------------------------------Section 1 info--------------------------------------------------->
<br>
<br>



<?php

error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$fname = $mname = $lname = $email = $gender = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{


  if (empty($_POST["fname"])) {
    $fnameErr = "First Name is required";
  } else {
    $fname = test_input($_POST["fname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$fname)) {
      $fnameErr = "Only letters allowed";
    }
  }


  if (empty($_POST["mname"])) {
    $mnameErr = "Middle Name is required";
  } else {
    $mname = test_input($_POST["mname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$mname)) {
      $mnameErr = "Only letters allowed";
    }
  }



  if (empty($_POST["lname"])) 
  {
    $lnameErr = "Last Name is required";
  } 
  else {
    $lname = test_input($_POST["lname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$lname)) {
      $lnameErr = "Only letters allowed";
    }
  }



  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } 
  else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
    
  

  if (empty($_POST["mobile"])) {
    $mobileErr = "Mobile no is required";
  } 
  else {
    $mobile = test_input($_POST["mobile"]);
    // check if  mobile no is well-formed
    if (!preg_match("/^[1-9]{1}[0-9]{9}$/",$mobile)) {
      $mobileErr = "Invalid mobile number";
    }
  }
  

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } 
  else {
    $gender = test_input($_POST["gender"]);
  }


}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>





<div class="Patientregitration">

    <form onsubmit="return validate()" action="#" method="POST">

        <h1>Addmission Form (1/3)</h1>
        <br>

        <format>First name</format><br>
        <input type="text" name="fname" id="fname" placeholder="Enter first name">
        <span class="error">* <?php echo $fnameErr;?></span>
        <br>

        <format>Middle name</format><br>
        <input type="text" name="mname" id="mname" placeholder="Enter middle name">
        <span class="error">* <?php echo $mnameErr;?></span>
        <br>

        <format>Last name</format><br>
        <input type="text" name="lname" id="lname" placeholder="Enter last name">
        <span class="error">* <?php echo $lnameErr;?></span>
        <br>
        

        <format>Email id</format><br>
        <input type="text" name="email" id="email" placeholder="Enter Email id">
        <span class="error">* <?php echo $emailErr;?></span>
        <br>

        <format>Mobile no</format><br>
        <input type="text" name="mobile" id="mobile" placeholder="Enter mobile no">
        <span class="error">* <?php echo $mobileErr;?></span>
        <br>
        

        <format>Gender  :  </format>
        <input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="other">Other
        <span class="error">* <?php echo $genderErr;?></span>
        <br>
        
        

        
    
        <br>
        <br>
        <br>

        
        <input type="submit" value="Next">


    </form>

    
</div>


<br>
<br>



    <!-------------------------------------------Section 3 links-------------------------------------------------->

    <div class="container3">




        <div class="c31">
            <div class="c30">
                <div id="c3"> <p>About PVGCOET</p> </div>


                <pre>Established in 1985, Pune Vidhyarthi Griha�s
College of Engineering and Technology, an
affiliate to the University of Pune and
accredited 'A' by NAAC is one of the reputed
engineering colleges in India. College
provides courses on Engineering disciplines
and offers some of the most advanced
platform and infrastructure to its students.</pre>

                <p></p>



            </div>
        </div>

        <div class="c32">
            <div class="c30">
                <div id="c3"> <p>Useful Links</p> </div>
                <pre><a href="#">Code of Ethics for Research Publication</a>
<a href="#">How to Reach College</a>
<a href="#">NAAC SSR</a>
<a href="#">Online Admission</a>
<a href="#">Right To Information Act</a>
<a href="#">Apply for Transcripts</a>
<a href="#">Student Verification</a>
<a href="#">Staff & Student Mail</a>
<a href="#">Web Mail</a>
</pre>

            </div>
        </div>

        <div class="c33">
            <div class="c30">
                <div id="c3"> <p>Quick Links</p> </div>
                <pre><a href="stureg.html">STUDENT LOGIN</a>
<a href="#">Faculty Login</a>
<a href="#">NIRF</a>
<a href="#">Academic Calendar</a>
<a href="#">Syllabus</a>
<a href="#">Question Papers</a>
<a href="#">Time Table</a>
<a href="#">Campus</a>
<a href="addform.php">ADDMISSION FORM</a>
<a href="#">Downloads</a>
<a href="#"></a>
<a href="#"></a>

</pre>


            </div>
        </div>

        <div class="c34">
            <div class="c30">
                <div id="c3"> <p>Contact Us</p> </div>
                <pre>PVG's College of Engineering and Technology
44, Vidya Nagari, Shivdarshan, Parvati,
Pune - 411009 Maharashtra - INDIA
FAX: +91 020 24226858
TELEPHONE: +91 020 24228258 / 65 / 79
EMAIL:
<a href="#">enquiry@pvgcoet.ac.in | info@pvgcoet.ac.in</a>
Call for Admission
Prof. Mrs. Anjali Waghmare: 256151
Prof. Mrs. Archana Mirashi: 255365
</pre>

            </div>
        </div>


    </div>


    <!---------------------------------------footer------------------------------------------>

    <div class="foot">
        © PVG's College of Engineering and Technology, Pune.
    </div>



</body>

</html>