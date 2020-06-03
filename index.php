<?php
/**
 * This example shows how to handle a simple contact form.
 */
 
 include  '../includes/db.inc.html.php';

$msg = '';

//Don't run this unless we're handling a form submission
if (isset($_POST['myname'])) {
    date_default_timezone_set('Etc/UTC');

    $myname = $_POST['myname'];
    $myemail = $_POST['myemail'];
    $myrole = $_POST['myrole'];
    $myquestion = $_POST['myquestion'];

    try {
        $sql = 'INSERT INTO contact SET
        myname = :myname,
        myemail = :myemail,
        myrole = :myrole,
        myquestion = :myquestion';
        
        $s = $pdo->prepare($sql);
        $s->bindValue(':myname', $myname);
        $s->bindValue(':myemail', $myemail);
        $s->bindValue(':myrole', $myrole);
        $s->bindValue(':myquestion', $myquestion);
        $s->execute();
    }
    
    catch (PDOException $e)
    {
      $error = 'Error adding submitted registration: ' . $e->getMessage();
      include '../includes/error.html.php';
      exit();
    }
    
    require '../PHPMailer/PHPMailerAutoload.php';

    //Create a new PHPMailer instance
    $mail = new PHPMailer;
    //Tell PHPMailer to use SMTP - requires a local mail server
    //Faster and safer than using mail()
    $mail->isSMTP();
    $mail->Host = 'mail.tracilee.webhostingforstudents.com';
    $mail->Port = 465;
    //Set this to true if SMTP host requires authentication to send email
    $mail->SMTPAuth = true;
    //Provide username and password
    $mail->Username = "phpmailer@tracilee.webhostingforstudents.com";
    $mail->Password = "G03258374Traci";

    //Use a fixed address in your own domain as the from address
    //**DO NOT** use the submitter's address here as it will be forgery
    //and will cause your messages to fail SPF checks
    $mail->setFrom('phpmailer@tracilee.webhostingforstudents.com', 'Traci Lee');
    //Send the message to yourself, or whoever should receive contact for submissions
    $mail->addAddress('traci.lee@pcc.edu', 'Traci Lee');
    //Put the submitter's address in a reply-to header
    //This will fail if the address provided is invalid,
    //in which case we should ignore the whole request
    $mail->addReplyTo($myEmail, $myName);
        $mail->Subject = 'AITH Contact Form';
        //Keep it simple - don't use HTML
        $mail->isHTML(true);
        //Build a simple message body
        $mail->Body = <<<EOT
Contact Name: $myname<br>
Contact Email: $myemail<br>
Whether the person is an athlete, volunteer or interested party: $myrole<br>
Question or Comment: $myquestion
EOT;

    //Send the message, check for errors
    if (!$mail->send()) {
            //The reason for failing to send will be in $mail->ErrorInfo
            //but you shouldn't display errors to users - process the error, log it on your server.
            echo "Mailer Error:" .  $mail->ErrorInfo;
    } else {
            include 'success.html.php';
    }
        
//honey pot field
	$honeypot = $_POST['myname'];

	//check if the honeypot field is filled out. If not, send a mail.
	if( !empty( $honeypot ) ){
	    return;
	}
	else{
		include '../includes/error.html.php';
	}
	
    
}
    
    else {
        include 'contact.html.php';
    }
    	
?>