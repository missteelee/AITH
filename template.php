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
<meta name="author" content="Traci Lee">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">  
<link href="../styles/style.less" rel="stylesheet/less" type="text/css">
<link rel="stylesheet" href="../styles/style.css" type="text/css">
</head>
  
  <header class="w3-container w3-top w3-hide-large w3-red w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-red w3-margin-right w3-padding" onclick="w3_open()">☰</a>
</header>
  
<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>
  

<body>
  
  <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v7.0" nonce="pRWS3S9Z"></script>
  
<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-red w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
  
    <section class="w3-container">
    <h3><img src="../images/logo.jpg" alt="Site Logo" style="width:50%;"></h3>
  
  <div class="w3-bar-block">
    <a href="#" onclick="" class="w3-bar-item w3-button w3-hover-white">Home</a> 
    <a href="#course_details" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Course Details</a> 
    <a href="../registration/registration.html.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Registration</a> 
    <a href="#faqs" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">FAQs</a> 
    <a href="../contact/contact.html.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Contact Us</a>
  </div>
  </section>
</nav>
    
  <div id="wrapper">
 <main>   
<?php include '../includes/header.inc.html.php'; ?>
    
    <p>is proud to offer running and triathlon events to athletes of all shapes and sizes, national origins, gender identifications and cultural backgrounds.<br>
      <strong>We offer Events for Every Body.</strong>
  </p>
  
  <section>
  <div class="w3-container" id="services" style="margin-top:75px">
    <hr>
 <style>
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
</style>

<body>   
    
 <div class="slideshow-container">
<div class="mySlides fade">
  <img src="../images/bike1.jpg" alt="Long Course Bike" style="width:100%">
  <div class="text">Long Course Bike</div>
</div>
   
<div class="mySlides fade">
  <img src="../images/run1.jpg" alt="Half Marathon" style="width:100%">
  <div class="text">Half Marathon</div>
</div>
   
<div class="mySlides fade">
  <img src="../images/swim1.jpg" alt="Long Course Swim" style="width:100%">
  <div class="text">Long Course Swim</div>
</div>
   
<div class="mySlides fade">
  <img src="../images/bike2.jpg" alt="Olympic Bike" style="width:100%">
  <div class="text">Olympic Bike</div>
</div>
   
<div class="mySlides fade">
  <img src="../images/run2.jpg" alt="Olympic Bike" style="width:100%">
  <div class="text">Olympic Run</div>
</div>
   
<div class="mySlides fade">
  <img src="../images/swim2.jpg" alt="Long Course Swim" style="width:100%">
  <div class="text">Long Course Swim</div>
</div>
   
<div class="mySlides fade">
  <img src="../images/bike3.jpg" alt="Long Course Bike" style="width:100%">
  <div class="text">Long Course Bike</div>
</div>
   
<div class="mySlides fade">
  <img src="../images/run3.jpg" alt="10K Run" style="width:100%">
  <div class="text">10K Run</div>
</div>
   
<div class="mySlides fade">
  <img src="../images/swim3.jpg" alt="Olympic Swim" style="width:100%">
  <div class="text">Olympic Swim</div>
</div>   

<div class="mySlides fade">
  <img src="../images/bike4.jpg" alt="Olympic Bike" style="width:100%">
  <div class="text">Olympic Bike</div>
</div>
   
<div class="mySlides fade">
  <img src="../images/run4.jpg" alt="Try-A-Tri" style="width:100%">
  <div class="text">Try-A-Tri</div>
</div>
   
<div class="mySlides fade">
  <img src="../images/swim4.jpg" alt="Long Course Swim" style="width:100%">
  <div class="text">Long Course Swim</div>
</div>   
   
 <div class="mySlides fade">
  <img src="../images/bike5.jpg" alt="Long Course Bike" style="width:100%">
  <div class="text">Long Course Bike</div>
</div>
   
<div class="mySlides fade">
  <img src="../images/run5.jpg" alt="Sprint" style="width:100%">
  <div class="text">Sprint</div>
</div>
   
<div class="mySlides fade">
  <img src="../images/swim5.jpg" alt="Olympic Swim" style="width:100%">
  <div class="text">Olympic Swim</div>
</div>  
   
<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
  </script>   </body></div>
  </section>
  
  

<div class="row">
  <div class="column">
     <div class="w3-container" id="weekend" style="margin-top:75px">
    <h1>Annual Multisport Weekend</h1>
    <hr>
    <p>The Annual Ace in the Hole Multisport Weekend is a legendary event in the Oregon triathlon and running community. It has become a traditional destination race for athletes from across the nation.</p>

    <p>There is something for every level of athletic ability. The weekend includes a first timer triathlon, a sprint, Olympic, and Half-Iron triathlons and 10K and Half marathon runs. Come to experience your first race or come to compete to win, but make sure you come to have fun!</p>
  </div>  
  </div>
  <div class="column">
    <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v7.0" nonce="pRWS3S9Z"></script>
  </div> 
</div>
<section>
    
    <div class="w3-row-padding">
    <div class="w3-half w3-margin-bottom">
      <ul class="w3-ul w3-light-grey w3-center">
        <li class="w3-red">Saturday</li>
        <li>Long Course Triathlon 7:00 AM</li>
        <li>Olympic Triathlon 7:30 AM</li>
        <li>10K 7:15 AM</li>
        <li>Half Marathon 7:15 AM</li>
      </ul>
    </div>   
        
    <div class="w3-half">
      <ul class="w3-ul w3-light-grey w3-center">
        <li class="w3-red">Sunday</li>
        <li>Sprint Triathlon 8:00 AM</li>
        <li>Try-a-Tri 8:20 AM</li>
        <li>Splash n Dash 12:00 PM</li>
        <li><br></li>
      </ul>
  </div>      
      
  <!-- Course Details -->
  <div class="w3-container" id="course_details" style="margin-top:300px">
        <h1>Course Details</h1>
       <hr> 
            <p><strong>WATER TEMPERATURE</strong> is expected to be between 62 &amp; 66 degrees. The temperature will be taken on Friday and the morning of the race. Wetsuits are recommended.</p>

            <strong>Long Course SWIM – 1.2 miles</strong>
            <p>Participants will make two counter-clockwise loops. Large buoys will mark the turn points. Kayakers will be positioned on the water to support the swimmers. Medical support will be present on the beach.</p>

            <strong>Long Course BIKE – 58 miles</strong>
            <p>A scenic point-to-point course that travels over gently rolling hills prior to three hard climbs. The bike course will be marked with large directional signage and there will be course marshals at key intersections to help direct you.</p>

            <strong>Long Course RUN – 13.1 miles</strong>
            <p>A mostly flat loop course on widely paved bike paths that traverse through and around this beautiful and scenic destination resort (two hills total with a minimal elevation gain).</p>

            <strong>Olympic SWIM – 1,500 meters</strong>
            <p>Participants will make two counter-clockwise loops. Large buoys will mark the turn points. Kayakers will be positioned on the water to support the swimmers. Medical support will be present on the beach.</p>

            <strong>Olympic BIKE – 28 miles</strong>
            <p>A scenic point-to-point course that travels over gently rolling hills. The bike course will be marked with large directional signage and course marshals will be present at key intersections.</p>

            <strong>Olympic RUN – 10K</strong>
            <p>A mostly flat loop course on widely paved bike paths that traverse through and around this beautiful and scenic destination resort (one hill total with a minimal elevation gain).</p>

            <strong>Sprint</strong>
            <p>Course will offer a 1-loop 1/2 mile swim, the exact same 28 mile Bike Course as the Olympic distance and a 5km run.</p>

            <strong>Try-A-Tri</strong>
            <p>This novice race is designed for the first time triathlete, those new to the sport, our Junior Triathletes. The swim is a shorter, more manageable 1/4 mile distance, (instead of the standard 1/2-mile Sprint distance swim), 10 mile bike ride (vs 12 miles and it's a 2 loop course making it very spectator friendly!) and a flat 2 mile run (vs 3 mile sprint course).</p>

            <strong>Half Marathon COURSE: Half-Marathon (13.1 miles)</strong>
            <p>Half-Marathon event starts and finishes in the Athletes Village to the cheers of the enthusiastic crowd. Once finished, runners can enjoy the finish line festivities, including the Sports &amp; Fitness Expo and live entertainment. Post-race refreshments will be provided and the Awards Ceremony for the Half-Marathon will begin once the results have been certified.</p>

            <strong>10K Course</strong>
            <p>The 10K event starts and finishes in the Athletes Village. The paths are approximately 6 ft wide, perfectly paved and wind around through the forest. Each course has only two small hills with a minimal elevation gain to navigate and a fast downhill to flat finish to the roaring cheers of the crowd.</p>

            <strong>Splash 'n' Dash</strong>
            <p>The Kids event for participants ages 4 to 15. This is a 100 yard swim and a 50 yard dash. It is free if an adult registers for an event otherwise it is $25.</p>
  </div> 
    </div>
    </section>  
    
<section>
    <div class="w3-container" id="faqs" style="margin-top:75px">
    <h1>Frequently Asked Questions</h1>
    <hr>
          <ul>
              <p><strong>What are the Rules?</strong></p>
                <p>We currently adhere to the USAT Rules for Triathlon &amp; Duathlon. Important rules include no drafting, you must wear a helmet and music is <strong>absolutely not</strong> allowed during the bike for obvious safety reasons.</p>

              <p><strong>Can I use a personal music device while cycling?</strong></p>
                <p>Absolutely no music devices are allowed during the bike segment for obvious safety risks and will result in immediate disqualification.</p>

                <p><strong>Can I use a personal music device while running?</strong></p>
                  <p>During any running segments, we prefer for athletes to NOT use music devices to maximize safety, assure a fair competitive environment and assure athletes can hear all course marshal instructions. With that said, we also understand that many athletes rely on music to help endure the challenge of running. To accommodate the needs of our athletes while still assuring maximum safety and a fair, competitive environment, here is the arrangement that we can accommodate.</p>
            
                  <p>If you chose to use a personal music device, you must always keep one ear open for instructions so only one ear-bud can be used at any time. In addition, if you opt to use music, you will not be eligible for awards, points and rankings. So as an athlete, you have to make a choice - music or awards/points/rankings.</p>
            
                  <p>If you are using a personal music devise with two earbuds, you will be immediately disqualified. Trust us, we don’t want to have to enforce a disqualification but in order to assure the safety of all athletes, this is a very important rule.</p>
                  
                  <p>We also request that if you chose to use a personal music device that you keep the volume to a minimum to assure all instructions can be heard.</p>
                  
                  <p><strong>Do I need to wear a wetsuit?</strong></p>
                  <p>No, you do not need to wear a wetsuit. Many will not wear a wetsuit while others will choose to wear a wetsuit because of the buoyancy and warmth factor.</p>

                  <p><strong>Do I have to use a road or racing bike? </strong></p>
                  <p>No. We welcome any type of bike as long as it is functioning properly with brakes and endcaps at the end of your handlebars.</p>
            </ul>
</div>
</section>

    
        <section>
      <div class="w3-container" id="weather" style="margin-top:75px">
      <h1>What to bring</h1>
      <hr>
    <a class="weatherwidget-io" href="https://forecast7.com/en/45d52n122d68/portland/?unit=us" data-label_1="PORTLAND" data-label_2="WEATHER" data-font="Roboto" data-icons="Climacons Animated" data-theme="dark" data-accent="rgba(255, 0, 0, 0)" data-textcolor="#FF0000" data-suncolor="#FF0000" >PORTLAND WEATHER</a>
        <script>
          !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
        </script>  
            <p>Watch the weather closely. The show goes on no matter what the weather is doing.</p>
 
        
            <p>You must wear your chip timing piece during the entire event. You will be given a band that will hold your chip timing piece around your ankle throughout the entire event. Be sure that it is snapped tightly. Be sure to have your Chip Timing piece on before you start the race and be sure to step over the timing mats after each segment of the race. If you are wearing a wet-suit, make sure the timing piece goes under your wetsuit otherwise, you will have a very difficult time getting off your wet suit.</p>
            <p><strong>Swim</strong>: Wetsuits are optional for the swim but will provide buoyancy and warmth. However, many people opt for no wetsuit for a triathlon so no worries.  We will provide you with a swim cap but you will want to bring your own goggles.</p>
            <p><strong>Bike</strong>: A biking helmet is mandatory. You will also receive 2 stickers in your package with your race number on them.  The small sticker should go on the front of your helmet. The bigger sticker will wrap around your bike frame. Road or mountain bikes are acceptable.  For safety reasons, be sure to have end-caps on the end of your handle-bars.</p>
            <p><strong>Run</strong>: You must finish the race with your bib number on the front of you. Some people choose to pin it on at the beginning of the race and have it on for the whole event so they don’t have to worry about it. Others pin it on a singlet that they put on once they finish the swim before they head out for the bike. Others use an elastic racing strap that they pin their bib number to and then quickly strap it on before they leave for the run.  Use whatever option feels best for you.</p>
            <p>Remember to bring a change of clothing so you can enjoy the post-event festivities.</p>
          </div> 
  </section>    

  
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
  
<?php include '../includes/footer.inc.html.php'; ?>
  </p>
    </div>
  </div>
  </body>
</html>
