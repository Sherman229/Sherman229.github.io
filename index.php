<?php 
if(isset($_POST['submit'])){
    $to = $_POST['send_to']; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $subject = $_POST['subject'];
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
//    mail($to,$subject,$message,$headers);
    mail($from,$subject,$message,$headers); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>

<!DOCTYPE html>
<head>
<title>Email</title>
</head>
<body>

<form action="" method="post">
Send To: <input type="text" name="send_to"><br>
<!--Last Name: <input type="text" name="last_name"><br>-->
Send From Email: <input type="text" name="email"><br>
Subject: <input type="text" name="subject"><br>
Message:<br><textarea rows="5" name="message" cols="30"></textarea><br>
<input type="submit" name="submit" value="Submit">
</form>

</body>
</html>
