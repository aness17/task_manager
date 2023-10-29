<?php
include("config.php");

$id = $_POST['id'];
$title = $_POST['title'];
$desc = $_POST['desc'];
$status = $_POST['status'];

if (!empty($title) && !empty($desc) && !empty($status)) {
    $sql = "UPDATE tasks SET title ='$title', description= '$desc', status= '$status' WHERE  id ='$id'";
    $query = mysqli_query($db, $sql);
    header("Location: index.php");
} else {
    header("Location: edit.php");
}
