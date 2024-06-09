<?php
include_once "koneksi.php";
if (isset($_GET["id"])) {
    $idnya = $_GET["id"];
    $get_db = mysqli_fetch_assoc(mysqli_query($db, "SELECT * FROM menu WHERE id=$idnya"));

    $nama = $get_db["nama"];
    $harga = $get_db["harga"];
} 

if (isset($_POST["submit"])){
    $namanya = $_POST["nama"];
    $harganya = $_POST["harga"];
    $masukin = mysqli_query($db, "UPDATE menu SET nama = '$namanya', harga = $harganya WHERE id=$idnya");

    if ($masukin) {
        echo "Data Berhasil diedit";
        header("Location: menu.php");
    } else {
        var_dump($masukin);
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        Nama : <input type="text" name="nama" value="<?= $nama ?>"><br>
        Harga : <input type="text" name="harga" value="<?= $harga ?>"><br>
        <button type="submit" name="submit">Kirim</button>
    </form>
</body>

</html>