<?php
// Edit or Replace this try/catch statement to work with the current PHT configuration
include 'includes/db.inc.html.php';

// Modify the If statement so the try only runs if the First Name field has been submitted AND the honeypot field is empty ''
if (isset($_POST['myfname']) AND empty($_POST['honeypot'])) {
    $tour = $_POST['tour'];
    $myfname = $_POST['myfname'];
    $mylname = $_POST['mylname'];
    $myemail = $_POST['myemail'];
    $myphone = $_POST['myphone'];
    $mydate = $_POST['mydate'];
    $myparticipants = $_POST['myparticipants'];
    $myallergies = $_POST['myallergies'];
    $honeypot = $_POST['honeypot'];

    // If the if statement is true, save each form field value as a variable. These variable values will be used in the thank you page.

    // And run the try/catch to attempt to insert data in the database. Modify the INSERT statement to write all the form filed values (except the honeypot) to the database.
    try {
        $sql = 'INSERT INTO reservations SET
        tour = :tour, 
        fname = :fname,
        lname = :lname,
        email = :email,
        phone = :phone,
        date = :date,
        participants = :participants,
        allergies = :allergies';
        $s = $pdo->prepare($sql);
        $s->bindValue(':tour', $tour);
        $s->bindValue(':fname', $myfname);
        $s->bindValue(':lname', $mylname);
        $s->bindValue(':email', $myemail);
        $s->bindValue(':phone', $myphone);
        $s->bindValue(':date', $mydate);
        $s->bindValue(':participants', $myparticipants);
        $s->bindValue(':allergies', $myallergies);
        $s->execute();

    } catch (PDOException $e) {
        $error = 'Error adding reservation: ' . $e->getMessage();
        include '../includes/error.html.php';
        exit();
    }
    // load the thank you page after the INSERT runs
    include 'success.html.php';
} else {
      include 'reservations.html.php';
 //Modify this to include the initial file for this folder
}
?>