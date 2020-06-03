<!DOCTYPE html>

<html lang="en">
<head>
<title>Ace in the Hole Multisport Events</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="Traci Lee">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">  
    <link href="../styles/style.less" rel="stylesheet/less" type="text/css">
  <link rel="stylesheet" href=../styles/style.css type="text/css">  
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
    <a href="../template/template.php#registration" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Registration</a> 
    <a href="../template/template.php#faqs" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">FAQs</a> 
    <a href="contact.html.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Contact Us</a>
  </div>
  </section>
</nav>

  <div id="wrapper">
    
<?php include '../includes/header.inc.html.php'; ?>

<main>
 <section>
  <!-- Contact -->
  <div class="w3-container" id="contact" style="margin-top:75px">
    <h1>Contact Us</h1>
    <hr>
    
    <p>Still have questions?<br>
      Fill out the form below and a member of our team will get back to you within 24 hours.</p>
    
<form id="contactform" method="POST" action="success.html.php">

      <div class="w3-section">
        <label for="myname">Name</label>
        <input class="w3-input w3-border" type="text" name="myname"  id="myname" required>
      </div>
      <div class="w3-section">
        <label for="myemail">Email</label>
        <input class="w3-input w3-border" type="text" name="myemail" id="myemail" required>
      </div>
      <div class="w3-section">
        <label for="myquestioncomment">Question or Comment</label>
        <input class="w3-input w3-border" type="text" name="myquestioncomment" id="myquestioncomment" required>
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
    
       <input id="mysubmit" type="submit" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom" value="Submit">   
      
    </form>    
    
  </div>
</section>
    
<div class="w3-light-grey w3-container w3-padding-32" style="margin-top:75px;padding-right:58px"><p class="w3-right">
  
<?php include '../includes/footer.inc.html.php'; ?>
  </p>
  </div>
    </main>
  </div>
  </body>
</html>