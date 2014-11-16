<?php
// Pear Mail Library
require_once "./Mail/Mail.php";



function sendEmail($en, $subject){
    $from = "Inspanish Inc <joisochea@inspanishteaching.com>";
    $to = "{$en["name"]} <{$en["mail"]}>";
    $subject = "$subject";
    $body = "This is a copy of your message. \r\n\r\n {$en["userMsg"]}";
     
    $host = "ventuari.tepuyserver.net";
    $username = "joisochea@inspanishteaching.com";
    $password = "_Z18v~e[oy^C";
    
    $headers = array ('From' => $from,
                      'To' => $to,
                      'Subject' => $subject);
    $smtp = Mail::factory('smtp',
      array ('host' => $host,
        'auth' => true,
        'username' => $username,
        'password' => $password));
     
    $mail = $smtp->send($to, $headers, $body);
     
    if (PEAR::isError($mail)) {
      echo("0");
    } else {
      echo("1");
    }
    
}
?>