<!DOCTYPE html>

<html lang="en">
<head>
<title>Ace in the Hole Multisport Events</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="Traci Lee"><base target="_blank"> 
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">  
    <link href="../style.less" rel="stylesheet/less" type="text/css">
  <link rel="stylesheet" href="../styles/style.css" type="text/css">  
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
    
<?php include '../includes/header.inc.html.php'; ?>
    
            <main>
                <h1>Thank you!</h1>
                <p>Our records show you submitted the following:<br>
                    Name: <?php echo htmlspecialchars($mynameame, ENT_QUOTES, 'UTF-8'); ?> <br>
                    Email: <?php echo htmlspecialchars($myemailmail, ENT_QUOTES, 'UTF-8'); ?> <br>
                    Question: <?php echo htmlspecialchars($myquestioncomment, ENT_QUOTES, 'UTF-8'); ?><br>
                    You have registered as: <?php echo htmlspecialchars($myrole, ENT_QUOTES, 'UTF-8'); ?><br>                  
                </p>
            </main>
            <?php include '../includes/footer.inc.html.php'; ?>
        </div>
    </body>
</html>