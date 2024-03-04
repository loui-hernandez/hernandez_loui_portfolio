<?php
require_once('../includes/connect.php');

// image uploading code that moves the uploeaded image and will generate the new image name then save the image name e.g., $thumb


$query = "INSERT INTO projects (title,description,image_url) VALUES (?,?,?)";

$stmt = $connection->prepare($query);
$stmt->bindParam(1, $_POST['title'], PDO::PARAM_STR);
$stmt->bindParam(2, $_POST['desc'], PDO::PARAM_STR);
$stmt->bindParam(3, $_POST['thumb'], PDO::PARAM_STR);

$stmt->execute();
$last_id = $connection->lastInsertId();
// echo $last_id;

// INSERT INTO media(file_name, project_id) VALUES (?,?)
$stmt->bindParam(1, $_POST['title'], PDO::PARAM_STR);
$stmt->bindParam(2, $_last_id, PDO::PARAM_INT);

$stmt = null;
header('Location: project_list.php');
?>