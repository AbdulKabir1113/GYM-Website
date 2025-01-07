<?php
       // from the form
       $email= trim(strip_tags($_POST['e-mail']));
       $subject  = trim(strip_tags($_POST['subject']));
       $message = htmlentities($_POST['message']);

       // set here
       $subject = "Contact form submitted!";
       $to = 'abdulkabir0717@gmail.com';

       $body = <<<HTML
$message
HTML;

       $headers = "From: $email\r\n";
       $headers .= "Content-type: text/html\r\n";

       // send the email
       mail($to, $subject, $body, $headers);
       
       header('Location: thanks.html');
?>