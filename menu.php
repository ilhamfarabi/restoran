<?php
include_once "koneksi.php";
$get_data = mysqli_query($db, "SELECT * FROM menu");
// $pecah = mysqli_fetch_assoc($get_data);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table border="2">
        <tr>
            <td>Nama</td>
            <td>Harga</td>
            <td>Action</td>
        </tr>
        <?php foreach ($get_data as $key) { ?>
            <tr>
                <td><?= $key['nama']; ?></td>
                <td><?= $key['harga']; ?></td>
                <td><a href="edit.php?id=<?= $key['id']; ?>">Edit</a>|<a href="hapus.php?id=<?= $key['id']; ?>">Hapus</a></td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>