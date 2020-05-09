<!DOCTYPE html>
<html lang="en">
<head>
<title>Ace in the Hole Multisport Events</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<link href="style.css" rel="stylesheet" type="text/css">  
<head>

<body>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-red w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-container">
    <h3 class="w3-padding-64"><b>Ace in the Hole <br>Multisport Events</b></h3>
  </div>
  <div class="w3-bar-block">
    <a href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Home</a> 
    <a href="#showcase" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Course Details</a> 
    <a href="#services" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Registration</a> 
    <a href="#designers" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">FAQs</a> 
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Contact</a>
  </div>
</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-red w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-red w3-margin-right" onclick="w3_open()">☰</a>
  <span>AITH</span>
</header>

<main>
<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">

  <!-- Header -->
  <div class="w3-container" style="margin-top:80px" id="showcase">
    <h1 class="w3-jumbo"><b>Ace in the Hole Multisport Events</b></h1>
    <h1 class="w3-xlarge w3-text-red"><b>is proud to offer running and triathlon events to athletes of all shapes and sizes, national origins, gender identifications and cultural backgrounds. We offer Events for Every Body.</b></h1>
    <hr style="width:100%;border:3px solid black" class="w3-round">
  </div>
  
<section>
  <div class="w3-container" id="services" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>JavaScript Slidshow</b></h1>
    <hr style="width:100%;border:3px solid black" class="w3-round">
</section>

  <!-- Course Details -->
  <div class="w3-container" id="services" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Course Details</b></h1>
    <hr style="width:100%;border:3px solid black" class="w3-round">
    <p>We are a interior design service that focus on what's best for your home and what's best for you!</p>
    <p>Some text about our services - what we do and what we offer. We are lorem ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
    dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor
    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    </p>
  </div>
  
  <!-- Registration -->
  <div class="w3-container" id="registration" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Registration</b></h1>
    <hr style="width:100%;border:3px solid black" class="w3-round">
 <section>
 <h1>Registration</h1>
      <article id="registration">
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
            <li><i>NOTE: Tech shirts guaranteed to pre-registered participants only.</i></li>
        </ul>

        <strong>Packet Pick-Up</strong>
          <p>All packet pick up will occur at Why Worry Racing, 123 NW Everett, Portland OR.</p>
          <p>Packet pick up hours: Thursday 8-5, Friday 9-noon. No day of event packet pick up.</p>

      </article>
        <div id="registration">
        <form>
        <p>Enter your information here</p>
          <label for="name">Full Name</label>
          <input type="text" name="name" id="name"><br>

          <label for="age">Age</label>
          <input type="text" name="age" id="age"><br>
          
          <label for="role">You would register as</label>
          <select size="1" name="role" id="role">
                <option>Choose Your Role</option>
                <option value="Athlete">Athelete</option>
                <option value="Volunteer">Volunteer</option>
          </select><br>          

          <label for="email">E-mail Address</label>
          <input type="text" name="email" id="email"><br>

          <label for="emergency_name">Emergency Contact Name</label>
          <input type="text" name="emergency_name" id="emergency_name"><br>

          <label for="emergency_phone_number">Emergency Contact Phone Number</label>
          <input type="text" name="emergency_phone_number" id="emergency_phone_number"><br>

          <label for="gender">Gender</label>
          <select size="1" name="gender" id="gender">
              <option>Choose Your Gender</option>
              <option value="Female">Female</option>
              <option value="Male">Male</option>
              <option value="Non-Binary/Other">Non-Binary/Other</option>
          </select><br>          
          
          <label for="saturday_courses">Saturday Events Registering For</label>
          <select size="1" name="saturday_courses" id="saturday_courses">
                <option>Select a Course</option>
                <option value="Long Course Triathlon">Long Course Triathlon - 7:00AM - $240</option>
                <option value="Olympic Triathlon">Olympic Triathlon - 7:30AM - $110</option>
                <option value="10K">10K - 7:15AM - $50</option>
                <option value="Half Marathon">Half Marathon - 7:15AM - $75</option>
          </select><br>

          <label for="sunday_courses">Sunday Events Registering For</label>
          <select size="1" name="sunday_courses" id="sunday_courses">
                <option>Select a Course</option>
                <option value="Sprint Triathlon">Sprint Triathlon - 8:00AM - $90</option>
                <option value="Try-a-Tri">Try-a-Tri - 8:20AM - $65</option>
                <option value="Splash n Dash">Splash n Dash - 12:00PM </option>
          </select><br>
      <label for="special_accommodations">Special Accommodations Needed</label>
      <input type="text" name="special_accommodations" id="special_accommodations"><br>  
  
      <input type="submit" value="Register">
      </form>
        </div>
    </section>
    
    
    <p><b>Our designers are thoughtfully chosen</b>:</p>
  </div>

  <!-- The Team -->
  <div class="w3-row-padding w3-grayscale">
    <div class="w3-col m4 w3-margin-bottom">
      <div class="w3-light-grey">
        <img src="/w3images/team2.jpg" alt="John" style="width:100%">
        <div class="w3-container">
          <h3>John Doe</h3>
          <p class="w3-opacity">CEO & Founder</p>
          <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
        </div>
      </div>
    </div>
    <div class="w3-col m4 w3-margin-bottom">
      <div class="w3-light-grey">
        <img src="/w3images/team1.jpg" alt="Jane" style="width:100%">
        <div class="w3-container">
          <h3>Jane Doe</h3>
          <p class="w3-opacity">Designer</p>
          <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
        </div>
      </div>
    </div>
    <div class="w3-col m4 w3-margin-bottom">
      <div class="w3-light-grey">
        <img src="/w3images/team3.jpg" alt="Mike" style="width:100%">
        <div class="w3-container">
          <h3>Mike Ross</h3>
          <p class="w3-opacity">Architect</p>
          <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Packages / Pricing Tables -->
  <div class="w3-container" id="packages" style="margin-top:75px">
    <h1 class="w3-xxlarge w3-text-red"><b>Ace in the Hole Multisport Weekend</b></h1>
    <hr style="width:100%;border:3px solid black" class="w3-round">
    <p>Ace in the Hole Multisport events will hold a multisport event on June 20th and 21st, 2020, and would like the entire site to go live by June 9, 2020.</p>
  </div>

  <div class="w3-row-padding">
    <div class="w3-half w3-margin-bottom">
      <ul class="w3-ul w3-light-grey w3-center">
        <li class="w3-red w3-xlarge w3-padding-32">Saturday</li>
        <li class="w3-padding-16">Long Course Triathlon 7:00 AM</li>
        <li class="w3-padding-16">Olympic Triathlon 7:30 AM</li>
        <li class="w3-padding-16">10K 7:15 AM</li>
        <li class="w3-padding-16">Half Marathon 7:15 AM</li>
        <li class="w3-light-grey w3-padding-24">
          <button class="w3-button w3-red w3-padding-large w3-hover-black">Sign Up</button>
        </li>
      </ul>
    </div>   
      
    <div class="w3-half">
      <ul class="w3-ul w3-light-grey w3-center">
        <li class="w3-red w3-xlarge w3-padding-32">Sunday</li>
        <li class="w3-padding-16">Sprint Triathlon 8:00 AM</li>
        <li class="w3-padding-16">Try-a-Tri 8:20 AM</li>
        <li class="w3-padding-16">Splash n Dash 12:00 PM</li>
        <li class="w3-padding-16"><br></li>
        <li class="w3-light-grey w3-padding-24">
          <button class="w3-button w3-red w3-padding-large w3-hover-black">Sign Up</button>
        </li>
      </ul>
    </div>
  </div>
  
  <!-- Contact -->
  <div class="w3-container" id="contact" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Contact Us</b></h1>
    <hr style="width:100%;border:3px solid black" class="w3-round">
    <p>Still have questions? Fill out the form below and a member of our team will get back to you within 24 hours.</p>
    <form action="/action_page.php" target="_blank">
      <div class="w3-section">
        <label>Name</label>
        <input class="w3-input w3-border" type="text" name="Name" required>
      </div>
      <div class="w3-section">
        <label>Email</label>
        <input class="w3-input w3-border" type="text" name="Email" required>
      </div>
      <div class="w3-section">
        <label>Question or Comment</label>
        <input class="w3-input w3-border" type="text" name="Message" required>
      </div>
      <div class="w3-section">
          <label for="role">You have registered as</label>
              <select size="1" name="role" id="role">
                <option>Choose Your Role</option>
                <option value="Athlete">Athelete</option>
                <option value="Volunteer">Volunteer</option>
                <option value="Interested">Interested Party</option>  
                </select>          
      </div>        
      <button type="submit" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom">Send Message</button>
    </form>  
  </div>

<!-- End page content -->
</div>

<!-- W3.CSS Container -->
<div class="w3-light-grey w3-container w3-padding-32" style="margin-top:75px;padding-right:58px"><p class="w3-right"><a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-opacity"><?php include 'includes/footer.inc.html.php'; ?></a></p></div>

<script>
// Script to open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}
</script>

</main>

</body>
</html>
