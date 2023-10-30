<?php
include("config.php");

if (isset($_POST['submit'])) { //cek apakah tombol submit sudah diklik
    //mengambil data dari form
    $title = mysqli_real_escape_string($db, htmlentities($_POST['title']));
    $desc = mysqli_real_escape_string($db, htmlentities($_POST['desc']));
    $status = mysqli_real_escape_string($db, htmlentities($_POST['status']));

    //membuat query insert ke dalam tabel
    $sql = "INSERT INTO tasks (title, description,status) VALUES ('$title','$desc','$status')";
    $query = mysqli_query($db, $sql); //eksekusi query dengan koneksi database

    if ($query) { //apakah query insert berhasil ?
        header("Location: index.php"); //jika berhasil akan dialihkan ke halaman index.php
    } else {
        header("Location: add.php"); //jika gagal akan dialihkan ke halaman add.php
    }
} else { // jika tombol submit tidak diklik
    header("Location: add.php"); //akan dialihkan ke halaman add.php
}
