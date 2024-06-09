<?php
include_once "koneksi.php";
if (isset($_GET['id'])) {
    $idnya = $_GET['id'];

    $hapus = mysqli_query($db, "DELETE FROM menu WHERE id=$idnya");

    if ($hapus) {
        echo "Data berhasil dihapus";
        header("Location: menu.php");
    } else {
        var_dump($hapus);
    }
}