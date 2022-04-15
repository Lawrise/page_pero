<?php
    $name = "tristan";
    $visitor_email = "boisne.jembe@icloud.com";
    $message = "test";

    $email_from = "jembe20boisne@gmail.com";

    $email_subject = "New form Submission";

    $email_body = "user name : $name.\n".
                    "user email : $visitor_email.\n". 
                        "user message : $message.\n";
    
    $to = "jembe20boisne@gmail.com";

    $headers = "From: $email_form \r\n";

    $headers .= "Reply-to : $visitor_email \r\n";

    mail($to, $email_subject, $email_body, $headers);

    header("Location: index.html");

?>