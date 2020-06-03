<!DOCTYPE html>

<html lang="en">
<head>
<title>Contact Form</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="Traci Lee">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins"> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.css" >
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <link rel="stylesheet" href="form.css" >
  <link href="../styles/style.less" rel="stylesheet/less" type="text/css">
  <link rel="stylesheet" href=../styles/style.css type="text/css">  
  <script src="form.js"></script>
    </head>
 <body>
  
<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-red w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
  
<section class="w3-container">
    <h3><img src="../images/logo.jpg" alt="Site Logo" style="width:50%;"></h3>
  <div class="w3-bar-block">
    <a href="../template/template.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Home</a> 
    <a href="../template/template.php#course_details" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Course Details</a> 
    <a href="../registration/registration.html.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Registration</a> 
    <a href="../template/template.php#faqs" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">FAQs</a> 
    <a href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Contact Us</a>
  </div>
  </section>
</nav>

  <div id="wrapper">
    
<?php include '../includes/header.inc.html.php'; ?>

<main>
 <section> 
        <div class="container">
                <h1>Contact Us</h1>
                <form method="post" id="reused_form" >
                  <div class="w3-section">
                    <label for="name">Your Name:</label>
                    <input id="name" type="text" name="Name" required maxlength="50">
                  </div>
                 <div class="w3-section">
                    <label for="email">Email Address:</label>
                    <input id="email" type="email" name="Email" required maxlength="50">
                  </div>
                  <div class="w3-section">
                    <label for="question">Question or Comment:</label>
                    <textarea id="question" name="Question" rows="10" maxlength="6000" required></textarea>
                  </div>
                  <div class="w3-section">
                  <label for="myrole">You have registered as</label>
                  <select class="w3-input w3-border"  size="1" name="myrole" id="myrole" required>
                <option value="">Choose Your Role</option>
                <option value="Athlete">Athlete</option>
                <option value="Volunteer">Volunteer</option>
                <option value="Interested">Interested Party</option>  
                </select>          
                </div>              
       <input id="mysubmit" type="submit" class="w3-button w3-block w3-padding-xlarge w3-red w3-margin-bottom" value="Submit">  
                </form>
          
                <div id="success_message" style="display:none">
                    <h3>Submitted the form successfully!</h3> 
                    <p> We will get back to you soon. </p>
                </div>
                <div id="error_message" style="width:100%; height:100%; display:none; "> <h3>Error</h3> Sorry there was an error sending your form. </div>
            </div>
        </div>
    </body>
</html>
