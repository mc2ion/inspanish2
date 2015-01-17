<?php
require_once "./mail.php";

if (isset($_POST["add-career"])){
    $en["name"]         = $_POST["name"];
    $en["street"]       = $_POST["street"];
    $en["apartment"]    = $_POST["apartment"];
    $en["state"]        = $_POST["state"];
    $en["city"]         = $_POST["city"];
    $en["zipcode"]      = $_POST["zipcode"];
    $en["phone"]        = $_POST["phone"];
    $en["email"]        = $_POST["email"];
    $en["experience"]   = $_POST["experience"];
    
    $en["namerf1"]  = $_POST["namerf1"];
    $en["rshiprf1"] = $_POST["rshiprf1"];
    $en["cmprf1"]   = $_POST["cmprf1"];
    $en["phonerf1"] = $_POST["phonerf1"];
    $en["emailrf1"] = $_POST["emailrf1"];
    
    $en["namerf2"]  = $_POST["namerf2"];
    $en["rshiprf2"] = $_POST["rshiprf2"];
    $en["cmprf2"]   = $_POST["cmprf2"];
    $en["phonerf2"] = $_POST["phonerf2"];
    $en["emailrf2"] = $_POST["emailrf2"];
    
    $tmpName = $_FILES['attachment']['tmp_name']; 
    $fileType = $_FILES['attachment']['type']; 
    $fileName = $_FILES['attachment']['name']; 
    
    $to         = "joisochea@inspanishteaching.com, jaisveochea@inspanishteaching.com";
    $subject    = "New career application";
    $message    = "Hello, you have received a new career aplication: <br/>";
    $message    = "<h3>Information about the candidate:</h3><br/>";
    $message  .= "<b>Name</b> : {$en["name"]} <br/>";
    $message  .= "<b>Street</b> : {$en["street"]} <br/>";
    $message  .= "<b>Apartment</b> : {$en["apartment"]} <br/>";
    $message  .= "<b>State</b>: {$en["state"]} <br/>";
    $message  .= "<b>City</b> : {$en["city"]} <br/>";
    $message  .= "<b>Zipcode</b> : {$en["zipcode"]} <br/>";
    $message  .= "<b>Phone</b> : {$en["phone"]} <br/>";
    $message  .= "<b>Email</b> : {$en["email"]} <br/>";
    $message  .= "<b>Experience</b> : {$en["experience"]} <br/><br/>";
    
    $message  .= "<h3>Reference 1</h3> <br/>";
    $message  .= "<b>Name</b> : {$en["namerf1"]}<br/>";
    $message  .= "<b>Relationship</b> : {$en["rshiprf1"]} <br/>";
    $message  .= "<b>Company</b> : {$en["cmprf1"]} <br/>";
    $message  .= "<b>Phone</b> : {$en["phonerf1"]}<br/>";
    $message  .= "<b>Email</b> : {$en["emailrf1"]} <br/><br/>";
  
    $message  .= "<h3>Reference 2</h3> <br/>";
    $message  .= "<b>Name</b>: {$en["namerf2"]} <br/>";
    $message  .= "<b>Relationship</b>: {$en["rshiprf2"]} <br/>";
    $message  .= "<b>Company</b>: {$en["cmprf2"]} <br/>";
    $message  .= "<b>Phone</b>: {$en["phonerf2"]} <br/>";
    $message  .= "<b>Email</b>: {$en["emailrf2"]}<br/>";
    
    if ($tmpName != "" && file($tmpName)) { 
      /* Reading file ('rb' = read binary)  */
      $file = fopen($tmpName,'rb'); 
      $data = fread($file,filesize($tmpName)); 
      fclose($file); 
      
        $mime_boundary = md5(uniqid(time()));

        // from
        $header = "From: Inspanish <no-reply@inspanishteaching.com>" ."\r\n";
        $header .= "MIME-Version:1.0\r\n";
        $header .= "Content-Type:multipart/mixed; boundary=\"{$mime_boundary}\"\r\n\r\n";

        // message
        $header .= "--{$mime_boundary}\r\n";
        $header .= "Content-Type:text/html; charset=\"ISO-8859-1\"\r\n";
        $header .= "Content-Transfer-Encoding:7bit\r\n\r\n";
        $header .= "<html><body>$message</body></html>\r\n\r\n";

        // attachment
         $attachments = (array)$_REQUEST["attachment"];
        $attachmentNames = (array)$_REQUEST["attachmentName"];
        
        $tmpName = $_FILES['attachment']['tmp_name']; 
        $fileType = $_FILES['attachment']['type']; 
        $fileName = $_FILES['attachment']['name']; 
        
        $data = base64_encode($data);
        $header .= "--{$mime_boundary}\r\n";
        $header .= "Content-Type:application/octet-stream; name=\"{$fileName}\"\r\n";
        $header .= "Content-Transfer-Encoding:base64\r\n";
        $header .= "Content-Disposition:attachment; filename=\"{$fileName}\"\r\n";
        $header .= "{$data}\r\n\r\n";
        
        $flgchk = @mail($to, $subject, "", $header);
    } 
    else{
        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $headers    .= "From: Inspanish <no-reply@inspanishteaching.com>"; 
        $flgchk     = mail ("$to", "$subject", "$message", "$headers"); 
    }
    if($flgchk){
      header("Location: /careers.php?s=1");
      return;
    }
    else{
      header("Location: /careers.php?s=0");
      return;
    }
    
}


if (isset($_POST["contact"])){
    $en["name"]     = $_POST["name"];
    $en["mail"]     = $_POST["email"];
    $en["userMsg"]  = $_POST["userMsg"];
    
    $result = sendEmail($en, "Your message (Copy)");
    if ($result == "1")
        header("Location: /contact.php?s=1");
    else
        header("Location: /contact.php?s=0");
}

?>