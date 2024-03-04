<?php

require_once('includes/connect.php');

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$msg = $_POST['message'];

$errors = [];


$name = trim($name);
$email = trim($email);
$phone = trim($phone);
$msg = trim($msg);



if (empty($name)) {
    $errors['name'] = 'First Name cant be empty';
}

if (empty($msg)) {
    $errors['message'] = 'Comment field cant be empty';
}
if (empty($phone)) {
    $errors['phone'] = 'Comment field cant be empty';
}

if (empty($email)) {
    $errors['email'] = 'You must provide an email';
} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['legit_email'] = 'You must provide a REAL email';
}

if (empty($errors)) {


    $query = "INSERT INTO contacts (name, email, message) VALUES('$name','$email', '$phone','$msg')";

    if (mysqli_query($connect, $query)) {


        $to = 'l_hernandez@fanshaweonline.ca';
        $subject = 'Message from your Portfolio site!';

        $message = "You have received a new contact form submission:\n\n";
        $message .= "Name: " . $name . "\n";
        $message .= "Email: " . $email . "\n\n";

        mail($to, $subject, $message);

        header('Location: thank_you.php');

    }








}


?>