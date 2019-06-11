
<!DOCTYPE html>
<html lang="en">
<head>
<title>Registration</title>
    <meta name="description" content="Register Today!">
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
    <h1>Register Today!</h1>
    <div id="source">Required fields are marked with an asterisk (*).</div>
    <div id="registration">
        <form method="post" action="">
            <input type="text" name="honeypot" id="honeypot" value="" title="if you fill this field out then your email will not be sent"/>
            <table>
                <tr>
                    <td><label for="myname">*Name:</label></td>
                    <td><input type="text" name="myname" id="myname" required></td>
                </tr>
                <tr>
                    <td><label for="myage">*Age:</label></td>
                    <td><input type="text" name="myage" id="myage" required></td>
                </tr>
                <tr>
                    <td><label for="myemail">*Email:</label></td>
                    <td><input type="email" name="myemail" id="myemail" required></td>
                </tr>
                <tr>
                   <td><label for="myemergencyname">*Emergency Contact Name:</label>
                   <td><input type="text" name="myemergencyname" id="myemergencyname"></td>
                </tr>
                <tr>
                    <td><label for="myemergencyphone">*Emergency Contact Phone:</label></td>
                    <td><input type="tel" name="myemergencyphone" id="myemergencyphone"></td>
                </tr>
                <tr>
                    <td><label for="mygender">Gender Identification:</label></td>
                 <td><select size="1" name="mygender" id="mygender">
                <option value="female">Female</option>
                <option value="male">Male</option>
                <option value="nonbinary">Nonbinary</option>
                     </select></td>
                </tr>
                <tr>
                    <td><label for="saturday">*Saturday:</label></td>
                    <td><select name="saturday" id="saturday">
                         <option value="Long Course Triathlon">Long Course Triathlon-$240</option>
                         <option value="Olympic">Olympic-$110 </option>
                         <option value="10k">10K- $50</option>
                         <option value="Half Marathon">Half Marathon-$75</option>
                         <option value="No Event">No Event</option>
                     </select></td>
                </tr>
                <tr>
                    <td><label for="sunday">*Sunday:</label></td>
                    <td><select name="sunday" id="sunday">
                        <option value="Sprint">Sprint-$90</option>
                        <option value="Try-a-Tri">Try-a-Tri-$65</option>
                        <option value="Splash n Dash">Splash n Dash</option>
                        <option value="No Event">No Event</option>
                     </select></td>
                </tr>
                <tr>
                    <td><label for="myposition">*Position:</label></td>
                    <td><select size="1" name="myposition" id="myposition">
                <option value="volunteer">Volunteer</option>
                <option value="participant">Participant</option>
                  </select></td>
                </tr>
                <tr>
                    <td><label for="mycomments">*Any Special Accommodations?</label></td>
                    <td><textarea name="mycomments" id="mycomments" rows="3" cols="10" required></textarea></td>
                </tr>
                <tr>
                    <td>
                        <input id="mysubmit" type="submit" value="Submit"></td>
                </tr>
            </table>
        </form>
    </div><br> <br>

Costs include:
<ul>
    <li>Food and Beer</li>
    <li>Access to the weekend's live entertainment and Fitness Expo</li>
    <li>Commemorative Finisher Medal</li>
    <li>Accurate chip timing for competitive races</li>
    <li>Ace in the Hole Multisport Weekend Tech Shirt</li>
    <li>Post-event party and entertainment</li>
</ul>
NOTE: <p>Tech shirts guaranteed to pre-registered participants only.</p> <br>
</main>


<?php include '../includes/footer.inc.html.php';?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="../scripts/menu.js"></script>

</body>
</html>