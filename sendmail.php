<?php

require_once('connect.php');

///gather the form content
$fname = $_POST['first_name'];
$lname = $_POST['last_name'];
$email = $_POST['email'];
$msg = $_POST['comments'];

$errors = [];

//validate and clean these values

$fname = trim($fname);
$lname = trim($lname);
$email = trim($email);
$msg = trim($msg);


if(empty($fname)) {
    $errors['first_name'] = 'Please enter your first name.';
}

if(empty($lname)) {
    $errors['last_name'] = 'Please enter your last name.';
}

if(empty($email)) {
    $errors['email'] = 'You must provide an email.';
} else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['legit_email'] = 'You must provide a REAL email.';
}

if(empty($msg)) {
    $errors['comments'] = 'Please enter comments.';
}

if(empty($errors)) {

    //insert these values as a new row in the contacts table

    $query = "INSERT INTO contacts (first_name, last_name, email, comments) VALUES('$fname','$lname','$email','$msg')";

    if(mysqli_query($connect, $query)) {

    //format and send these values in an email

    $to = 'netyun@me.com';
    $subject = 'Message from my Portfolio site!';

    $message = "You have received a new contact form submission:\n\n";
    $message .= "Name: ".$fname." ".$lname."\n";
    $message .= "Email: ".$email."\n\n";
    //build out rest of message body...

    mail($to,$subject,$message);

    header('Location: thank_you.php');

    exit();
}

} else {
    foreach ($errors as $error) {
        echo $error . '<br>';
    }
}

?>