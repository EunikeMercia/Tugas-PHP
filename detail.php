<?php
require ('datasiswa.php');
?>
<!DOCTYPE html>
<head>
  <title>Detail Siswa</title>  
</head>    
<body>
    <table border="1" cellspasing = "1" cellpadding = "15">
            <tr>
                <td rowspan="3">
                    <img src="images/touya.jpeg" width="200" heigth="200">
                </td>
                <td align="center">Nama</td>
                <td align="center"><?= $_GET['nama'] ?></td>
            </tr>
            <tr>
                <td align="center">Alamat</td>
                <td align="center"><?= $_GET['alamat'] ?></td>
            </tr>
            <tr>
                <td align="center">Telepon</td>
                <td align="center"><?= $_GET['telepon'] ?></td>
            </tr>
    </table>
</body>