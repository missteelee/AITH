<?php
// Edit or Replace this try/catch statement to work with the current PHT configuration

include  '../includes/db.inc.html.php';

        // Modify the If statement so the try only runs if the First Name field has been submitted AND the honeypot field is empty ''
if (isset($_POST['fullName']))
  {
      $full_name = $_POST['full_name'];
      $age = $_POST['age'];
      $role = $_POST['role'];
      $email = $_POST['email'];
      $emergency_contact = $_POST['emergency_contact'];
      $emergency_phone = $_POST['emergency_phone'];
      $gender = $_POST['gender'];
      $saturday_courses = $_POST['saturday_courses'];
      $sunday_courses = $_POST['sunday_courses'];
      $special_accommodations = $_POST['special_accommodations'];
    try {
      $sql = 'INSERT INTO registration SET
      
        full_name = :full_name,
        age = :age,
        role = :role,
        email = :email,
        emergency_contact = :emergency_contact,
        emergency_phone = :emergency_phone,
        gender = :gender,
        saturday_courses = :saturday_courses,
        sunday_courses = :sunday_courses,
        special_accommodations = :special_accommodations';

      $s = $pdo->prepare($sql);
      $s->bindValue(':full_name', $full_name);
      $s->bindValue(':age', $age);
      $s->bindValue(':role', $role);
      $s->bindValue(':email', $email);
      $s->bindValue(':emergency_contact', $emergency_contact);
      $s->bindValue(':emergency_phone', $emergency_phone);
      $s->bindValue(':gender', $gender);
        $s->bindValue(':saturday_courses', $saturday_courses);
        $s->bindValue(':sunday_courses', $sunday_courses);
      $s->bindValue(':special_accommodations', $special_accommodations);
      $s->execute();
    }
    catch (PDOException $e)
    {
      $error = 'Error adding submitted registration form: ' . $e->getMessage();
      include '../includes/error.html.php';
      exit();
    }
    // load the thank you page after the INSERT runs
      include 'success.html.php';
    // Add an else to load the initial page if the initial (line 19) if statement is false
    
  }
		
else {
  include 'registration.html.php';
}

?>

