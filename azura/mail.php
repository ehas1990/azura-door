<?php

$name = $_POST['name'];
$phone = $_POST['phone'];
$email= $_POST['email'];

$message= $_POST['message'];


$subject = "CabinsIndia" . $country . "- cabinsindia.com";
$to = "ehasalpha@gmail.com";
$txt = "Full Name : " . $name . "\r\nContact Number : " . $phone . "\r\nSubject : " . $topic . "\r\nMessage : " . $message;
$subject = " $subject";
$headers = "From: " . $email;

if (mail($to, $subject, $txt, $headers)) {
    // If email sent successfully, set JavaScript alert and redirect to index.html
    echo '<script> window.location.href = "index.html";alert("Message sent successfully!");</script>';
    exit(); // Make sure to exit after redirecting
} else {
    // If email failed to send, return error message
    $alert_message = "Something went wrong";
    $alert_type = "failure";
}

?>

