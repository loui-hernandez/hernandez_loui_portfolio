<!DOCTYPE html>
<html lang="en">
<?php
session_start();
if (!$_SESSION['username']) {
    header('Location: login_form.php');
}
require_once('../includes/connect.php');
$query = 'SELECT * FROM projects WHERE projects.id = :projectId';
$stmt = $connection->prepare($query);
$projectId = $_GET['id'];
$stmt->bindParam(':projectId', $projectId, PDO::PARAM_INT);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Page</title>
    <link rel="stylesheet" href="../css/main.css" type="text/css">

</head>

<body>


    <form action="edit_project.php" method="POST">
        <input name="pk" type="hidden" value="<?php echo $row['id']; ?>">

        <label for="title">Project Name: </label>
        <input name="title" type="text" value="<?php echo $row['title']; ?>" required><br><br>

        <label for="desc">project description: </label>
        <textarea name="desc" required><?php echo $row['description']; ?></textarea><br><br>

        <label for="objective">Objective</label>
        <input name="objective" type="text" value="<?php echo $row['objective']; ?>" required><br><br>

        <label for="solution">Solution</label>
        <input name="solution" type="text" value="<?php echo $row['solution']; ?>" required><br><br>

        <label for="result">Result</label>
        <input name="result" type="text" value="<?php echo $row['result']; ?>" required><br><br>

        <label for="thumb">Project Thumbnail: </label>
        <input name="thumb" type="text" required value="<?php echo $row['image_url']; ?>"><br><br>

        <label for="logo">Project Logo</label>
        <input name="logo" type="text" required value="<?php echo $row['logo_url']; ?>"><br><br>

        <label for="imagedetails">Project Image Details</label>
        <input name="imagedetails" type="text" required value="<?php echo $row['image_details']; ?>"><br><br>

        <input name="submit" type="submit" value="Edit">

    </form>
    <?php
    $stmt = null;
    ?>
</body>

</html>