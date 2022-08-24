<?php

if (isset($_POST['submit'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $mailFrom = $_POST['mail'];
    $telephoneFrom = $_POST['telephone'];
    $sujet = $_POST['sujet'];
    $message = $_POST['message'];
    $file = $_POST['file'];
    
    $mailTo = "contact@bstech.fr";
    $header = "From: ".$mailFrom;
    $txt = "You have a received an e-mail from ".$firstname.$lastname. ".\n\n Sujet: ".$sujet."\n".$message;

    mail($mailTo, $header, $txt);
    header("Location: index.php?mailsend");
}

// https://www.codingnepalweb.com/create-working-contact-form-in-php/
// https://www.youtube.com/watch?v=el4ODMN4bYk