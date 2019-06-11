<?php

// Edit or Replace this try/catch statement to work with the current PHT configuration
try
{
    $pdo = new PDO('mysql:host=localhost;  dbname=tammywei_aith' , 'tammywei_aithuser' , 'Schvach1');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec('SET NAMES "utf8"');
}
catch (PDOException $e)
{
    $error = 'Unable to connect to the database server.';
    include '../includes/error.html.php';
    exit();
}



// Modify the If statement so the try only runs if the First Name field has been submitted AND the honeypot field is empty ''

        if ((isset($_POST['myname'])) && (empty($_POST['honeypot']))) {


            $myname = $_POST['myname'];
            $myemail = $_POST['myemail'];
            $myquestionscomments = $_POST['myquestionscomments'];
            $myposition = $_POST['myposition'];



            // And run the try/catch to attempt to insert data in the database. Modify the INSERT statement to write all the form filed values (except the honeypot) to the database.
        try {
         $sql = 'INSERT INTO contact SET
          name  = :name,
          email = :email,
          questionscomments = :questionscomments,
          position = :position';

         $s = $pdo->prepare($sql);
         $s->bindValue(':name',$myname);
         $s->bindValue(':email', $myemail);
         $s->bindValue(':questionscomments', $myquestionscomments);
         $s->bindValue(':position', $myposition);
         $s->execute();
    }
    catch (PDOException $e)
    {
        $error = 'Error adding submitted registration: ' . $e->getMessage();
        include '../includes/error.html.php';
        exit();
    }
    // load the thank you page after the INSERT runs

    include 'success.html.php';

    // Add an else to load the initial page if the initial (line 19) if statement is false

} else {
//Modify this to include the initial file for this folder
    include 'contact.php';
}


?>