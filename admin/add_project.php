<?php
require_once('../includes/connect.php');

// image uploading code that moves the uploeaded image and will generate the new image name then save the image name e.g., $thumb
$fileUpload1 = '../images/img' . time();
$imageType1 = strtolower(pathinfo($_FILES['thumb']['name'], PATHINFO_EXTENSION));
$fileUpload1 = '.' . $imageType1;
move_uploaded_file($_FILES['thumb']['tmp_name'], $fileUpload1);

$fileUpload2 = '../images/img' . time();
$imageType2 = strtolower(pathinfo($_FILES['logo']['name'], PATHINFO_EXTENSION));
$fileUpload2 = '.' . $imageType2;
move_uploaded_file($_FILES['logo']['tmp_name'], $fileUpload2);

$fileUpload3 = '../images/img' . time();
$imageType3 = strtolower(pathinfo($_FILES['imagedetails']['name'], PATHINFO_EXTENSION));
$fileUpload3 = '.' . $imageType3;
move_uploaded_file($_FILES['imagedetails']['tmp_name'], $fileUpload3);


$query = "INSERT INTO projects (title,description,image_url) VALUES (?,?,?)";

$stmt = $connection->prepare($query);
$stmt->bindParam(1, $_POST['title'], PDO::PARAM_STR);
$stmt->bindParam(2, $_POST['desc'], PDO::PARAM_STR);
$stmt->bindParam(3, $_POST['thumb'], PDO::PARAM_STR);
$stmt->bindParam(4, $_POST['logo'], PDO::PARAM_STR);
$stmt->bindParam(5, $_POST['imagedetails'], PDO::PARAM_STR);
$stmt->bindParam(6, $_POST['objective'], PDO::PARAM_STR);
$stmt->bindParam(7, $_POST['solution'], PDO::PARAM_STR);
$stmt->bindParam(8, $_POST['result'], PDO::PARAM_STR);


$stmt->execute();
$last_id = $connection->lastInsertId();
// echo $last_id;

// INSERT INTO media(file_name, project_id) VALUES (?,?)
$stmt->bindParam(1, $_POST['title'], PDO::PARAM_STR);
$stmt->bindParam(2, $_last_id, PDO::PARAM_INT);

$stmt = null;
header('Location: project_list.php');
?>