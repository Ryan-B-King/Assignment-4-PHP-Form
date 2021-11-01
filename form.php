<?php 

// Variable(s) Section
    
// test data returned
// print_r($_POST);

// Stored Data in Variables
$name = $_POST['name'];  // Name Variable
$email = $_POST['email']; // Email Variable
$phone = $_POST['phone']; // Phone Variable
$heard = $_POST['heard']; // Heard Varliable
$comments = $_POST['comments']; // Comments Variable

//Trimmed Variables
$name = htmlspecialchars(trim($name));
$email = htmlspecialchars(trim($email));
$comments = htmlspecialchars(trim($comments));

?>
<!DOCTYPE html> <!--Ryan King -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Results</title>
   <style>
    body {
    font-family: Arial, Helvetica, sans-serif;
    background: #666666;
    }
    main {
        width: 800px;
        margin: 0 auto;
        padding: 20px;
        background: #FFFFFF;
        border: 2px solid #000000;
    }
    h1 {
        color: navy;
        padding: 0;
        text-align: center;
    }
    p {
        margin: 1.5em 0 .5em 0;
    }
    </style>

</head>

<body>   

    <main>
        <h1>Form Results</h1>

        <h2>You Submitted the below information</h2>

        <p>Name: <?php print "<b>$name</b>"?></p> <!-- display $name data -->
        <p>Email: <?php print "<b>$email</b>"?></p> <!-- display $email data -->
        <p>Phone: <?php print "<b>$phone</b>"?></p> <!-- display $phone data -->
        <p>How you heard of us: <?php print "<b>$heard</b>"?></p> <!-- display $heard data -->
        <p>Comments: <?php print "<b>$comments</b>"?></p> <!-- display $comments data -->
    </main>

</body>
</html>