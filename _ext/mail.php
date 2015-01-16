<?php
function sendEmail($en, $subject){
    $to      = "{$en["name"]} <{$en["mail"]}>";
    $subject = "$subject";
    $body    = "This is a copy of your message. \r\n\r\n {$en["userMsg"]}";
     
    $headers = 'From: Inspanish Inc <no-reply@inspanishteaching.com>' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $body, $headers);
    
    $to = "joisochea@inspanishteaching.com, jaisveochea@inspanishteaching.com";
    $subject = "$subject";
    $body = "You have received a new email from contact form.\r\n\r\n 
            Name:  {$en["name"]}.\r\n\r\n 
            Email:  {$en["mail"]}.\r\n\r\n 
            Message:  {$en["userMsg"]}.\r\n\r\n "; 
            
    $headers = 'From: Inspanish Inc <no-reply@inspanishteaching.com>' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

    return mail($to, $subject, $body, $headers);
}

?>