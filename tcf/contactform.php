<?php
    $mail_to = 'jmartinmtg@gmail.com';

    $name = $_POST['name'];
    $mail_from = $_POST['email'];
    $message = $_POST['message'];
    $subject = $_POST['subject'];
    $body_message = "From: $name\n E-Mail: $email\n Message:\n $message";

	$mail_sent = mail($mail_to, $subject, $body_message);

    if ($mail_sent == true){ ?>
        <script language="javascript" type="text/javascript">
        alert('Thank you for the message. We will contact you shortly.');
        window.location = 'Contact_Us.html';
        </script>
    <?php } else { ?>
    <script language="javascript" type="text/javascript">
        alert('Message not sent.');
        window.location = 'Contact_Us.html';
    </script>
    <?php
    }
?>