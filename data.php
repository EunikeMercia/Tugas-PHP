<?php
require ('datasiswa.php');
require ('user.php');

$role= check($_POST['user'], $_POST['pass'], $login);

function check($user, $pass, $array){
    foreach ($array as $record) {
        if ($user == $record['user'] && $pass == $record['pass']){
            return $record['role'];
        }
    }
    header("location: login.php?error");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>
    <?php if($role=="siswa"){
        echo("Data Siswa (Siswa)");
    }
    else if($role=="admin"){
        echo("Data Siswa (Admin)");
    }?>
    </title>
</head>
<body>

    <?php
    function siswa(){ ?>
    <h2>Data Siswa (siswa)</h2>
    <br>
        <table border="1" cellspasing = "1" cellpadding = "15">
        <th align="center">No</th>
        <th align="center">Foto</th>
        <th align="center">Nama</th>
        <?php foreach ($GLOBALS['data'] as $key => $value) { ?>
            <tr>
                <td align="center"><?= $value['no'] ?></td>
                <td>
                    <img src="images/touya.jpeg" width="200" heigth="200">
                </td>
                <td align="center"><?= $value['nama'] ?></td>
            </tr>
        <?php } ?>
        </table>
    <?php } ?>

    <?php function admin(){ ?>
        <h2>Data Siswa (admin)</h2>
    <br>
        <table border="1" cellspasing = "1" cellpadding = "15">
        <th align="center">No</th>
        <th align="center">Foto</th>
        <th align="center">Nama</th>
        <th align="center">Aksi</th>
        <?php foreach ($GLOBALS['data'] as $key => $value) { ?>
            <tr>
                <td align="center"><?= $value['no'] ?></td>
                <td>
                    <img src="images/touya.jpeg" width="200" heigth="200">
                </td>
                <td align="center"><?= $value['nama'] ?></td>
                <td align="center">
                    <a href="detail.php?nama=<?=$value['nama']?>&alamat=<?=$value['alamat']?>&telepon=<?=$value['telepon']?>"><button>detail</button>
                </td>
            </tr>
        <?php } ?>
        </table>
    <?php } ?>

    <?php if($role=="siswa"){
        siswa();
    }
    else if($role=="admin"){
        admin();
    }?>
</body>
</html>