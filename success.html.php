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
  <link rel="stylesheet" href="../styles/style.css" type="text/css">  
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
    <a href="../template/template.php#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Contact Us</a>
  </div>
  </section>
</nav>
    
  <div id="wrapper">
 <main>   
<?php include '../includes/header.inc.html.php'; ?>
                
        <h1>Thank you!</h1>
        <p>Our records show you submitted the following:<br>
            <strong>Full Name:</strong> <?php echo htmlspecialchars($full_name, ENT_QUOTES, 'UTF-8'); ?><br>
            <strong>Age: </strong> <?php echo htmlspecialchars($age, ENT_QUOTES, 'UTF-8'); ?><br>
            <strong>Role:</strong> <?php echo htmlspecialchars($role, ENT_QUOTES); ?><br>
            <strong>Email:</strong> <?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?><br>
            <strong>Emergency Contact:</strong> <?php echo htmlspecialchars($emergency_contact, ENT_QUOTES, 'UTF-8'); ?><br>
            <strong>Emergency Contact Phone:</strong> <?php echo htmlspecialchars($emergency_phone, ENT_QUOTES, 'UTF-8'); ?><br>
            <strong>Gender ID:</strong> <?php echo htmlspecialchars($gender, ENT_QUOTES, 'UTF-8'); ?><br>
            <strong>Saturday Event Registered for:</strong> <?php echo htmlspecialchars($saturday_courses, ENT_QUOTES, 'UTF-8'); ?><br>
            <strong>Sunday Event Registered for:</strong> <?php echo htmlspecialchars($sunday_courses, ENT_QUOTES, 'UTF-8'); ?><br>
            <strong>Special Accommodations:</strong> <?php echo htmlspecialchars($special_accommodations, ENT_QUOTES, 'UTF-8'); ?><br>                       
        </p>
   
<div class="w3-light-grey w3-container w3-padding-32" style="margin-top:75px;padding-right:58px"><p class="w3-right">
            
<?php include '../includes/footer.inc.html.php'; ?>
    </p>
</div>
</main>
</html>