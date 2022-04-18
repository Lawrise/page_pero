<?php
    $visitor_email = $_POST['email'];
    $email_subject = $_POST['subject'];
    $message = $_POST['message'];
    

    $to = "jembe20boisne@gmail.com";

    $headers = "Content-Type: text/plain; charset=utf-8\r\n";
    $headers = "From: $visitor_email\r\n";

    if (mail($to, $email_subject, $message, $headers))
        echo"envoye !";
    else 
        echo"erreur";

    
    
?>
