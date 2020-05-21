<!DOCTYPE html>

<html lang="en">
<head>
<title>Ace in the Hole Multisport Events</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="Traci Lee"><base target="_blank"> 
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">  
    <link href="style.less" rel="stylesheet/less" type="text/css">
  <link rel="stylesheet" href=style.css type="text/css">  
</head>

<body>
<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-red w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
  
<section class="w3-container">
    <h3><img src="images/logo.jpg" alt="Site Logo" style="width:50%;"></h3>
  <div class="w3-bar-block">
    <a href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Home</a> 
    <a href="#course_details" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Course Details</a> 
    <a href="#registration" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Registration</a> 
    <a href="#faqs" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">FAQs</a> 
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Contact Us</a>
  </div>
  </section>
</nav>

<body>
  <div id="wrapper">
      <?php include 'includes/header.inc.html.php'; ?>
    <main>
      <section>
  <!-- Contact -->
  <div class="w3-container" id="contact" style="margin-top:75px">
    <h1>Registration</h1>
    <hr>
    <form action="/action_page.php" target="_blank">
      <div class="w3-section">
        <label>Full Name</label>
        <input class="w3-input w3-border" type="text" name="fname" required>
      </div>
        <div class="w3-section">
        <label>Age</label>
        <input class="w3-input w3-border" type="number" name="age" required>
      </div>    
      <div class="w3-section">
          <label for="role">You have registered as</label>
              <select size="1" name="role" id="role">
                <option>Choose Your Role</option>
                <option value="Athlete">Athlete</option>
                <option value="Volunteer">Volunteer</option>  
                </select>          
      </div>
      <div class="w3-section">
        <label>E-mail Address</label>
        <input class="w3-input w3-border" type="text" name="Email" required>
      </div>
      <div class="w3-section">
        <label>Emergency Contact Name</label>
        <input class="w3-input w3-border" type="text" name="emergency_name" required>
      </div>      
         <div class="w3-section">
        <label>Emergency Contact Phone Number</label>
        <input class="w3-input w3-border" type="number" name="emergency_phone_number" required>
      </div>    
        <div class="w3-section">
          <label for="gender">Gender</label>
              <select size="1" name="gender" id="gender">
                <option>Select</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other/Non-Binary</option>  
                </select>          
      </div>   
           <div class="w3-section">
          <label for="saturday_courses">Saturday Events Registering For</label>
              <select size="1" name="saturday_courses" id="role">
                <option>Select a Course</option>
                <option value="Long Course Triathlon">Long Course Triathlon - 7:00AM - $240</option>
                <option value="Olympic Triathlon">Olympic Triathlon - 7:30AM - $110</option>
                <option value="10K">10K - 7:15AM - $50</option>  
                 <option value="Half Marathon">Half Marathon - 7:15AM - $75</option>  
             </select>          
      </div>  
           <div class="w3-section">
          <label for="sunday_courses">Sunday Events Registering For</label>
              <select size="1" name="saturday_courses" id="role">
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
      <button type="submit" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom">Register</button>
    </form>  
  </div>
</section>
    </main>
      <?php include 'includes/footer.inc.html.php'; ?>
  </div>
</body>
</html>