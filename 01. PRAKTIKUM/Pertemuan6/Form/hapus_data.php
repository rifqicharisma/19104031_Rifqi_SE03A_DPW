<?php
    include "koneksi.php";
    $sql = "DELETE from data where id=".$_GET['mahasiswa_id'];
    if ($conn->query($sql) === TRUE) {
        $conn->close();
        header("location:index.php");
        exit();
    } else {
        $conn->close();
        header("location:index.php");
        exit();
    }
?>