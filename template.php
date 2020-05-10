<!DOCTYPE html>

<!--
File Name: template.php
Date: 05/01/2020
Programmer: Traci Lee
-->

<html lang="en">
<head>
<title>Ace in the Hole Multisport Events</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="Traci Lee"><base target="_blank"> 
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">  
<link rel="stylesheet" href=style.css type="text/css">  
</head>

<body>
<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-red w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-container">
    <h3><img src="images/logo.jpg" alt="Site Logo" style="width:50%;"></h3>
  </div>
  <div class="w3-bar-block">
    <a href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Home</a> 
    <a href="#course_details" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Course Details</a> 
    <a href="#registration" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Registration</a> 
    <a href="#faqs" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">FAQs</a> 
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Contact</a>
  </div>
</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-red w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-red w3-margin-right" onclick="w3_open()">☰</a>
  <span><img src="images/logo.jpg" alt="Site Logo" style="width:5%;"></span>
</header>

<main>
<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">

  <!-- Header -->
  <div class="w3-container" style="margin-top:80px" id="showcase">
    
<?php include 'includes/header.inc.html.php'; ?>
    
    <h2>is proud to offer running and triathlon events to athletes of all shapes and sizes, national origins, gender identifications and cultural backgrounds.<br>
    <b style="color: black;">We offer Events for Every Body.</b></h2>
    <hr>
  </div>
  
<section>
  <div class="w3-container" id="services" style="margin-top:75px">
    <h1>JavaScript Slidshow</h1>
    <hr>
    
 <!-- Weekend Details -->
  <div class="w3-container" id="faqs" style="margin-top:75px">
    <h1>Ace in the Hole Multisport Weekend</h1>
    <hr>
    <p>The Annual Ace in the Hole Multisport Weekend is a legendary event in the Oregon triathlon and running community. It has become a traditional destination race for athletes from across the nation.</p>

    <p>There is something for every level of athletic ability. The weekend includes a first timer triathlon, a sprint, Olympic, and Half-Iron triathlons and 10K and Half marathon runs. Come to experience your first race or come to compete to win, but make sure you come to have fun!</p>
  </div>  
  
    <div class="w3-row-padding">
    <div class="w3-half w3-margin-bottom">
      <ul class="w3-ul w3-light-grey w3-center">
        <li class="w3-red w3-xlarge w3-padding-32">Saturday</li>
        <li class="w3-padding-16">Long Course Triathlon 7:00 AM</li>
        <li class="w3-padding-16">Olympic Triathlon 7:30 AM</li>
        <li class="w3-padding-16">10K 7:15 AM</li>
        <li class="w3-padding-16">Half Marathon 7:15 AM</li>
      </ul>
    </div>   
        
    <div class="w3-half">
      <ul class="w3-ul w3-light-grey w3-center">
        <li class="w3-red w3-xlarge w3-padding-32">Sunday</li>
        <li class="w3-padding-16">Sprint Triathlon 8:00 AM</li>
        <li class="w3-padding-16">Try-a-Tri 8:20 AM</li>
        <li class="w3-padding-16">Splash n Dash 12:00 PM</li>
        <li class="w3-padding-16"><br></li>
      </ul>
  </div>    
    
  <!-- Course Details -->
  <div class="w3-container" id="course_details" style="margin-top:75px">
        <h1>Course Details</h1>
       <hr> 
            <p><strong>WATER TEMPERATURE</strong> is expected to be between 62 &amp; 66 degrees. The temperature will be taken on Friday and the morning of the race. Wetsuits are recommended.</p>

            <strong>Long Course SWIM – 1.2mi</strong>
            <p>Participants will make two counter-clockwise loops. Large buoys will mark the turn points. Kayakers will be positioned on the water to support the swimmers. Medical support will be present on the beach.</p>

            <strong>Long Course BIKE – 58 Miles</strong>
            <p>A scenic point-to-point course that travels over gently rolling hills prior to three hard climbs. The bike course will be marked with large directional signage and there will be course marshals at key intersections to help direct you.</p>

            <strong>Long Course RUN – 13.1mi</strong>
            <p>A mostly flat loop course on widely paved bike paths that traverse through and around this beautiful and scenic destination resort (two hills total with a minimal elevation gain).</p>

            <strong>Olympic SWIM – 1,500 meters</strong>
            <p>Participants will make two counter-clockwise loops. Large buoys will mark the turn points. Kayakers will be positioned on the water to support the swimmers. Medical support will be present on the beach.</p>

            <strong>Olympic BIKE – 28mi</strong>
            <p>A scenic point-to-point course that travels over gently rolling hills. The bike course will be marked with large directional signage and course marshals will be present at key intersections.</p>

            <strong>Olympic RUN – 10K</strong>
            <p>A mostly flat loop course on widely paved bike paths that traverse through and around this beautiful and scenic destination resort (one hill total with a minimal elevation gain).</p>

            <strong>Sprint</strong>
            <p>Course will offer a 1-loop 1/2 mile swim, the exact same 28 mile Bike Course as the Olympic distance and a 5km run.</p>

            <strong>Try-A-Tri</strong>
            <p>This novice race is designed for the first time triathlete, those new to the sport, our Junior Triathletes. The swim is a shorter, more manageable 1/4 mile distance, (instead of the standard 1/2-mile Sprint distance swim), 10 mile bike ride (vs 12 miles and it's a 2 loop course making it very spectator friendly!) and a flat 2 mile run (vs 3 mile sprint course).</p>

            <strong>Half Marathon COURSE: Half-Marathon (13.1-miles)</strong>
            <p>Half-Marathon event starts and finishes in the Athletes Village to the cheers of the enthusiastic crowd. Once finished, runners can enjoy the finish line festivities, including the Sports &amp; Fitness Expo and live entertainment. Post-race refreshments will be provided and the Awards Ceremony for the Half-Marathon will begin once the results have been certified.</p>

            <strong>10k COURSE</strong>
            <p>The 10K event starts and finishes in the Athletes Village. The paths are approximately 6 ft wide, perfectly paved and wind around through the forest. Each course has only two small hills with a minimal elevation gain to navigate and a fast downhill to flat finish to the roaring cheers of the crowd.</p>

            <strong>Splash 'n' Dash</strong>
            <p>The Kids event for participants ages 4 to 15. This is a 100 yard swim and a 50 yard dash. It is free if an adult registers for an event otherwise it is $25.</p>
  </div> 
    
  <!-- Registration -->
  <div class="w3-container" id="registration" style="margin-top:75px">
    <h1>Registration</h1>
    <hr>
 <section>
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
            <li>Post-event party and entertainment</li>
          <li><i>NOTE: Tech shirts guaranteed to pre-registered participants only.</i></li>
        </ul>

        <strong>Packet Pick-Up</strong>
          <p>All packet pick up will occur at Why Worry Racing, 123 NW Everett, Portland OR.</p>
          <p>Packet pick up hours: Thursday 8-5, Friday 9-noon. No day of event packet pick up.</p>


     <section>
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
        <label>E-mail Address</label>
        <input class="w3-input w3-border" type="text" name="Email" required>
      </div>   
      
       <div class="w3-section">
          <label for="role">You have registered as</label>
              <select size="1" name="role" id="role">
                <option>Choose Your Role</option>
                <option value="Athlete">Athelete</option>
                <option value="Volunteer">Volunteer</option>
                </select>
         
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
                <option value="Male">Athelete</option>
                <option value="Female">Volunteer</option>
                <option value="Female">Non-Binary/Other</option>
          </select>          
      </div>  
      
       <div class="w3-section">
          <label for="role">You have registered as</label>
              <select size="1" name="role" id="role">
                <option>Choose Your Role</option>
                <option value="Athlete">Athelete</option>
                <option value="Volunteer">Volunteer</option>
                <option value="Interested">Interested Party</option> 
                </select>         
      
      <div class="w3-section">
          <label for="role">Saturday Events Registering For</label>
              <select size="1" name="role" id="role">
                <option>Select a Course</option>
                <option value="Long Course Tri">Long Course Triathlon - 7:00AM - $240</option>
                <option value="Olympic Tri">Olympic Triathlon - 7:30AM - $110</option>
                <option value="10K">10K - 7:15AM - $50</option>
                <option value="Half Marathon">Half Marathon - 7:15AM - $75</option></select>    
  
        <div class="w3-section">
          <label for="role">Sunday Events Registering For</label>
              <select size="1" name="role" id="role">
                <option>Select a Course</option>
                <option value="Sprint Triathlon">Sprint Triathlon - 8:00AM - $90</option>
                <option value="Try-a-Tri">Try-a-Tri - 8:20AM - $65</option>
                <option value="10K">10K - 7:15AM - $50</option>
                <option value="Splash n Dash">Splash n Dash - 12:00PM </option></select>          
      </div>   
     
     <div class="w3-section">
        <label>Special Accommodations Needed</label>
        <input class="w3-input w3-border" type="text" name="special_accommodations" required>
      </div>   
        
      <button type="submit" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom">Register</button>
</div>
</div>
  </form>      
  </section>
      
<section>
    <div class="w3-container" id="faqs" style="margin-top:75px">
    <h1>Frequently Asked Questions</h1>
    <hr>
          <ul>
              <p><b>What are the Rules?</b></p>
                <p>We currently adhere to the USAT Rules for Triathlon &amp; Duathlon. Important rules include no drafting, you must wear a helmet and music is <strong>absolutely not</strong> allowed during the bike for obvious safety reasons.</p>

              <p><b>Can I use a personal music device while cycling?</b></p>
                <p>Absolutely no music devices are allowed during the bike segment for obvious safety risks and will result in immediate disqualification.</p>

                <p><b>Can I use a personal music device while running?</b></p>
                  <p>During any running segments, we prefer for athletes to NOT use music devices to maximize safety, assure a fair competitive environment and assure athletes can hear all course marshal instructions. With that said, we also understand that many athletes rely on music to help endure the challenge of running. To accommodate the needs of our athletes while still assuring maximum safety and a fair, competitive environment, here is the arrangement that we can accommodate.</p>
                  <p>If you chose to use a personal music device, you must always keep one ear open for instructions so only one ear-bud can be used at any time. In addition, if you opt to use music, you will not be eligible for awards, points and rankings. So as an athlete, you have to make a choice - music or awards/points/rankings.</p>
                  <p>If you are using a personal music devise with two earbuds, you will be immediately disqualified. Trust us, we don’t want to have to enforce a disqualification but in order to assure the safety of all athletes, this is a very important rule.</p>
                  <p>We also request that if you chose to use a personal music device that you keep the volume to a minimum to assure all instructions can be heard.</p>
                  
                  <p><b>Do I need to wear a wetsuit?</b></p>
                  <p>No, you do not need to wear a wetsuit. Many will not wear a wetsuit while others will choose to wear a wetsuit because of the buoyancy and warmth factor.</p>

                  <p><b>Do I have to use a road or racing bike?</b></p>
                  <p>No. We welcome any type of bike as long as it is functioning properly with brakes and endcaps at the end of your handlebars.</p>
            </ul>
</div>
</section>
    
        <section>
            <h2>What to bring</h2>
            <p>Watch the weather closely. The show goes on no matter what the weather is doing.</p>
            <p>You must wear your chip timing piece during the entire event. You will be given a band that will hold your chip timing piece around your ankle throughout the entire event. Be sure that it is snapped tightly. Be sure to have your Chip Timing piece on before you start the race and be sure to step over the timing mats after each segment of the race. If you are wearing a wet-suit, make sure the timing piece goes under your wetsuit otherwise, you will have a very difficult time getting off your wet suit.</p>
            <p><strong>Swim</strong>: Wetsuits are optional for the swim but will provide buoyancy and warmth. However, many people opt for no wetsuit for a triathlon so no worries.  We will provide you with a swim cap but you will want to bring your own goggles.</p>
            <p><strong>Bike</strong>: A biking helmet is mandatory. You will also receive 2 stickers in your package with your race number on them.  The small sticker should go on the front of your helmet. The bigger sticker will wrap around your bike frame. Road or mountain bikes are acceptable.  For safety reasons, be sure to have end-caps on the end of your handle-bars.</p>
            <p><strong>Run</strong>: You must finish the race with your bib number on the front of you. Some people choose to pin it on at the beginning of the race and have it on for the whole event so they don’t have to worry about it. Others pin it on a singlet that they put on once they finish the swim before they head out for the bike. Others use an elastic racing strap that they pin their bib number to and then quickly strap it on before they leave for the run.  Use whatever option feels best for you.</p>
            <p><i>Remember to bring a change of clothing so you can enjoy the post-event festivities.</i> </p>
        </section>    

  
  <!-- Contact -->
  <div class="w3-container" id="contact" style="margin-top:75px">
    <h1>Contact Us</h1>
    <hr>
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
                <option value="Athlete">Athlete</option>
                <option value="Volunteer">Volunteer</option>
                <option value="Interested">Interested Party</option>  
                </select>          
      </div>      
      <button type="submit" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom">Send Message</button>
    </form>  
  </div>

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
  
<div class="w3-light-grey w3-container w3-padding-32" style="margin-top:75px;padding-right:58px"><p class="w3-right">
  
<?php include 'includes/footer.inc.html.php'; ?>
</div>
  
</body>
</html>
