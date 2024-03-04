<!DOCTYPE html>
<html lang="en">

<?php
session_start();

if (!$_SESSION['username']) {
    header('Location: login_form.php');
}

require_once('../includes/connect.php');
$stmt = $connection->prepare('SELECT id,title FROM projects ORDER BY title ASC');
$stmt->execute();
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CMS Main Page</title>
    <link rel="stylesheet" href="../css/main.css" type="text/css">

</head>

<body>
    <style>
        .project-list {
            margin: 10px;
            padding: 10px;
            border: 1px solid #000;
        }

        .project-list a {
            margin-left: 10px;
        }

        .project-list a:hover {
            color: red;
        }

        .project-list a:visited {
            color: blue;
        }

        .project-list a:link {
            color: green;
        }

        .project-list a:active {
            color: yellow;
        }
    </style>

    <?php

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

        echo '<p class="project-list">' .
            $row['title'] .
            '<a href="edit_project_form.php?id=' . $row['id'] . '">edit</a>' .

            '<a href="delete_project.php?id=' . $row['id'] . '">delete</a></p>';
    }

    $stmt = null;

    ?>
    <br>
    <h3>Add a New Project</h3>
    <style>
        form {
            margin: 10px;
            padding: 10px;
            border: 1px solid #000;
        }

        input[type="text"],
        textarea {
            margin: 10px;
            padding: 10px;
            width: 300px;
        }

        input[type="submit"] {
            margin: 10px;
            padding: 10px;
            width: 100px;
            background-color: #000;
            color: #fff;
        }
    </style>
    <form action="add_project.php" method="post">
        <label for="title">Project Title: </label>
        <input name="title" type="text" required><br><br>

        <label for="desc">Project Description: </label>
        <textarea name="desc" required></textarea><br><br>

        <label for="objective">Objective</label>
        <textarea name="objective" type="text" required></textarea><br><br>

        <label for="solution">Solution</label>
        <textarea name="solution" type="text" required></textarea><br><br>

        <label for="result">Result</label>
        <textarea name="result" type="text" required></textarea><br><br>

        <label for="thumb">Project Thumbnail: </label>
        <input name="thumb" type="file" required><br><br>

        <label for="logo">Project Logo: </label>
        <input name="logo" type="file" optional><br><br>

        <label for="imagedetails">Project Image Details</label>
        <input name="imagedetails" type="file" optional></input><br><br>

        <label for=""></label>

        <input name="submit" type="submit" value="Add">
    </form>
    <br><br><br>
    <a href="logout.php">log out</a>

</body>

</html>