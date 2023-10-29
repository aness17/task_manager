<?php
include("config.php");

if (isset($_POST['submit'])) { //cek apakah tombol submit sudah diklik
    $title = $_POST['title'];
    $desc = $_POST['desc'];
    $status = $_POST['status'];

    $sql = "INSERT INTO tasks (title, description,status) VALUES ('$title','$desc','$status')";
    $query = mysqli_query($db, $sql);

    if ($query) {
        header("Location: index.php");
    } else {
        header("Location: add.php");
    }
} else {
    header("Location: add.php");
}
