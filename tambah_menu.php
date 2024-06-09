<?php
include_once "koneksi.php";
if (isset($_POST["submit"]) && $_POST["nama"] != "" && $nama = $_POST["harga"] != "") {
    $nama = $_POST["nama"];
    $harga = $_POST["harga"];

    $masukin = mysqli_query($db, "INSERT INTO menu (nama, harga) VALUES ('$nama', '$harga')");

    if ($masukin) {
        echo "Data Berhasil dimasukkan";
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
        Nama : <input type="text" name="nama"><br>
        Harga : <input type="text" name="harga"><br>
        <button type="submit" name="submit">Kirim</button>
    </form>
</body>

</html>