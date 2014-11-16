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
    
    print_r($en);
}


if (isset($_POST["contact"])){
    $en["name"]     = $_POST["name"];
    $en["mail"]    = $_POST["email"];
    $en["userMsg"]  = $_POST["userMsg"];
    
    $result = sendEmail($en, "Your message (Copy)");
    if ($result == "1")
        header("Location: /inspanish/contact.php?s=1");
    else
        header("Location: /inspanish/contact.php?s=0");
    #print_r($en);
}

?>