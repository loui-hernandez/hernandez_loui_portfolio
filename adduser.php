<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'portfolio_db';

$connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
$errors = array();

$fullname = mysqli_real_escape_string($connection, $_POST['fullname']);
if ($fullname == NULL) {
    $errors[] = "Full name field is empty";
}

$subject = mysqli_real_escape_string($connection, $_POST['subject']);
if ($subject == NULL) {
    $errors[] = "Subject field is empty";
}

$mobile = mysqli_real_escape_string($connection, $_POST['mobile']);
if ($mobile == NULL) {
    $errors[] = "Mobile number field is empty";
}

$comments = mysqli_real_escape_string($connection, $_POST['comments']);
if ($comments == NULL) {
    $errors[] = "Message field is empty";
}

$email = $_POST['email'];
if ($email == NULL) {
    $errors[] = "Email field is empty";
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "\"" . $email . "\" is not a valid email address";
}

$errcount = count($errors);
if ($errcount > 0) {
    $errmsg = array();
    for ($i = 0; $i < $errcount; $i++) {
        $errmsg[] = $errors[$i];
    }
    echo json_encode(array("errors" => $errmsg));
} else {
    $querystring = "INSERT INTO clients(id,fullname,suject,mobile,comments,email) VALUES(NULL,'" . $fullname . "','" . $subject . "','" . $mobile . "','" . $comments . "','" . $email . "')";
    $qpartner = mysqli_query($connection, $querystring);
    echo json_encode(array("message" => "Would you like to send another message? Please fill out all required sections"));
}
?>