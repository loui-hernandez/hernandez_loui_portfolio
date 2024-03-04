<?php
require_once('../includes/connect.php');
$query = "UPDATE projects SET title = ?, image_url = ?, description = ?, objective = ?, solution = ?, result = ?, logo_url = ?, image_details = ? WHERE id = ?";

$stmt = $connection->prepare($query);

$stmt->bindParam(1, $_POST['title'], PDO::PARAM_STR);
$stmt->bindParam(2, $_POST['thumb'], PDO::PARAM_STR);
$stmt->bindParam(3, $_POST['desc'], PDO::PARAM_STR);
$stmt->bindParam(4, $_POST['pk'], PDO::PARAM_INT);
$stmt->bindParam(5, $_POST['objective'], PDO::PARAM_STR);
$stmt->bindParam(6, $_POST['solution'], PDO::PARAM_STR);
$stmt->bindParam(7, $_POST['result'], PDO::PARAM_STR);
$stmt->bindParam(8, $_POST['logo'], PDO::PARAM_STR);
$stmt->bindParam(9, $_POST['imagedetails'], PDO::PARAM_STR);



$stmt->execute();
$stmt = null;
header('Location: project_list.php');
?>