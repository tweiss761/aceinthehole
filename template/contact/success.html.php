<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Ace in the Hole MultiSport Event</title>
        <meta name="description" content="Contact Us if you have questions!">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/style.css">
        <link href='https://fonts.googleapis.com/css?family=Cinzel' rel='stylesheet' type='text/css'>
        <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    <body>
        <div id="wrapper">

            <?php include '../includes/nav.inc.html.php'; ?>
            <?php include '../includes/header.inc.html.php'; ?>
            <main>
                <h1>Thank you!</h1>
                <p>Our records show you submitted the following:<br>
                  Name:  <?php echo htmlspecialchars($myname, ENT_QUOTES, 'UTF-8'); ?> <br>
                  Email: <?php echo htmlspecialchars($myemail, ENT_QUOTES, 'UTF-8'); ?> <br>
                  Questions/Comments: <?php echo htmlspecialchars($myquestionscomments, ENT_QUOTES, 'UTF-8'); ?> <br>
                  Position: <?php echo htmlspecialchars($myposition, ENT_QUOTES, 'UTF-8'); ?> <br>
                </p>
            </main>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <script src="../scripts/menu.js"></script>

            <?php include '../includes/footer.inc.html.php'; ?>
        </div>
    </body>
</html>