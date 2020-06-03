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
    <a href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Registration</a> 
    <a href="../template/template.php#faqs" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">FAQs</a> 
    <a href="../contact/contact.html.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Contact Us</a>
  </div>
  </section>
</nav>

  <div id="wrapper">
    
<?php include '../includes/header.inc.html.php'; ?>

  <main>
 <section>
  <!-- Registration -->
  <div class="w3-container" id="registration" style="margin-top:75px">
 <h1>Pricing</h1>
    <hr>
        <ul>
          <li><span>Long Course Triathlon</span> <span>$240</span></li>
          <li><span>Olympic Triathlon</span> <span>$110</span></li>
          <li><span>10K</span> <span>$50</span></li>
          <li><span>Half Marathon</span> <span>$75</span></li>
          <li><span>Sprint Triathlon</span> <span>$90</span></li>
          <li><span>Try-a-Tri</span> <span>$65</span></li>
          <li><span>Splash n Dash - It is free if an adult registers for an event otherwise it is $25</span></li>
        </ul>

        <strong>Cost Includes</strong>
        <ul>
          <li>Food &amp; Beer </li>
          <li>Access to the weekend’s live entertainment &amp; Fitness Expo</li>
          <li>Commemorative Finisher medal</li>
          <li>Accurate Chip Timing for competitive races</li>
          <li>Ace in the Hole Multisport Weekend Tech Shirt</li>
            <li>Post-event party and entertainment</li><br>
            <strong>NOTE:</strong> Tech shirts guaranteed to pre-registered participants only.
        </ul>

        <strong>Packet Pick-Up</strong>
          <p>All packet pick up will occur at Why Worry Racing at 123 NW Everett, Portland OR.</p>
    <p>Packet pick up hours: Thursday 8-5, Friday 9-noon. No day of event packet pick up.</p>
   </div>
    </section>
     
     <section>
  <!-- Contact -->
  <div class="w3-container" id="register" style="margin-top:75px">
    <h1>Registration</h1>
    <hr>
     <form method="post" id="reused_form" >
      <div class="w3-section">
        <label>Full Name</label>
        <input class="w3-input w3-border" type="text" name="full_name" id="full_name" required>
      </div>
        <div class="w3-section">
        <label>Age</label>
        <input class="w3-input w3-border" type="number" name="age" id="age">
      </div>    
      <div class="w3-section">
          <label for="role">You have registered as</label>
              <select class="w3-input w3-border"  size="1" name="role" id="role">
                <option>Choose Your Role</option>
                <option value="Athlete">Athlete</option>
                <option value="Volunteer">Volunteer</option>  
                </select>          
      </div>
      <div class="w3-section">
        <label>E-mail Address</label>
        <input class="w3-input w3-border" type="text" name="email" id="email" required>
      </div>
      <div class="w3-section">
        <label>Emergency Contact Name</label>
        <input class="w3-input w3-border" type="text" name="emergency_contact" id="emergency_contact" required>
      </div>      
         <div class="w3-section">
        <label>Emergency Contact Phone Number</label>
        <input class="w3-input w3-border" type="number" name="emergency_phone" id="emergency_phone" required>
      </div>    
        <div class="w3-section">
          <label for="gender">Gender</label>
              <select class="w3-input w3-border"  size="1" name="gender" id="gender">
                <option>Select</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other/Non-Binary</option>  
                </select>          
      </div>   
           <div class="w3-section">
          <label for="saturday_courses">Saturday Events Registering For</label>
              <select class="w3-input w3-border"  size="1" name="saturday_courses" id="saturday_courses">
                <option>Select a Course</option>
                <option value="Long Course Triathlon">Long Course Triathlon - 7:00AM - $240</option>
                <option value="Olympic Triathlon">Olympic Triathlon - 7:30AM - $110</option>
                <option value="10K">10K - 7:15AM - $50</option>  
                 <option value="Half Marathon">Half Marathon - 7:15AM - $75</option>  
             </select>          
      </div>  
           <div class="w3-section">
          <label for="sunday_courses">Sunday Events Registering For</label>
              <select class="w3-input w3-border"  size="1" name="sunday_courses" id="sunday_courses">
                <option>Select a Course</option>
                <option value="Sprint Triathlon">Sprint Triathlon - 8:00AM - $90</option>
                <option value="Try-a-Tri">Try-a-Tri - 8:20AM - $65</option>
                <option value="Splash n Dash">Splash n Dash - 12:00PM </option>  
                 <option value="Half Marathon">Half Marathon - 7:15AM - $75</option>  
             </select>          
      </div>       
      <div class="w3-section">
        <label>Special Accommodations Needed</label>
        <input class="w3-input w3-border" type="text" name="special_accommodations" required>
      </div>    
  
        <input id="mysubmit" type="submit" class="w3-button w3-block w3-padding-xlarge w3-red w3-margin-bottom" value="Submit"> 
    </form>  
    
 <div id="success_message" style="display:none">
                    <h3>Submitted the form successfully!</h3> 
                    <p> We will get back to you soon. </p>
                </div>
                <div id="error_message" style="width:100%; height:100%; display:none; "> <h3>Error</h3> Sorry there was an error sending your form. </div>
            </div> 
    
<div class="w3-light-grey w3-container w3-padding-32" style="margin-top:75px;padding-right:58px"><p class="w3-right">
  
<?php include '../includes/footer.inc.html.php'; ?>
  </p>
    </div>
  </div>
  </body>
</html>
