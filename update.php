<?php
include("config.php");

//mengambil data dari form
$id = $_POST['id'];
$title = $_POST['title'];
$desc = $_POST['desc'];
$status = $_POST['status'];

if (!empty($title) && !empty($desc) && !empty($status)) { //apakah title, desc dan status memiliki nilai
    //jika seluruh kondisi bernilai true maka query sql akan di eksekusi
    $sql = "UPDATE tasks SET title ='$title', description= '$desc', status= '$status' WHERE  id ='$id'";
    $query = mysqli_query($db, $sql);
    header("Location: index.php"); //alihkan ke halaman index.php
} else {
    //jika kondisi bernilai false maka query sql tidak akan di eksekusi
    header("Location: edit.php"); //alihkan ke halaman edit.php
}
