
<!DOCTYPE html>
<html lang="en">
<head>
<title>Contact Us!</title>
    <meta name="description" content="Register now before its too late!">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/reset.css" rel="stylesheet" type="text/css">
    <link href="../css/helper.css" rel="stylesheet" type="text/css">
    <link href="../css/grid.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Cinzel' rel='stylesheet' type='text/css'>
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    </script>![endif]-->

</head>
<body>

<?php include '../includes/nav.inc.html.php';?>
<?php include '../includes/header.inc.html.php';?>

<main>
    <h1>Contact Us Today!</h1>
    <div id="source">Required fields are marked with an asterisk (*).</div>
    <div id="registration">
        <form method="post" action="">
            <input type="text" name="honeypot" id="honeypot" value="" title="if you fill this field out then your email will not be sent"/>
            <table>
                <tr>
                    <td> <label for="myname">*Name:</label></td>
                    <td><input type="text" name="myname" id="myname" required></td>
                </tr>
                <tr>
                    <td><label for="myemail">*Email:</label></td>
                    <td><input type="email" name="myemail" id="myemail" required></td>
                </tr>
                <tr>
                <td><label for="myquestionscomments">*Questions/Comments:</label></td>
                <td><textarea name="myquestionscomments" id="myquestionscomments" rows="2" cols="20" required></textarea></td>
            </tr>
                <tr>
                    <td><label for="myposition">*Position:</label></td>
                   <td><select size="1" name="myposition" id="myposition">
                <option value="athlete">Athlete</option>
                <option value="volunteer">Volunteer</option>
                <option value="interestedparty">Interested Party</option>
                 </select></td>
                </tr>
                <tr>
                    <td><input id="mysubmit" type="submit" value="Submit"></td>
                </tr>
            </table>
        </form>
    </div>
    <br>
    <div id="slideshow">
        <div>
          <img src="../images/allages1.jpg" alt="People of all ages" title="People of all ages">
        </div>
        <div>
            <img src="../images/swim.jpg" alt="Swimmers" title="Swimmers">
        </div>
       <div>
           <img src="../images/triathlon.jpg" alt="Triathlon"  title="Triathlon">
       </div>
        <div>
        <img src="../images/marathon.jpg" alt="Marathon" title="Marathon">
        </div>
    </div>
</main>
<?php include '../includes/footer.inc.html.php';?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="../scripts/menu.js"></script>

</body>
</html>