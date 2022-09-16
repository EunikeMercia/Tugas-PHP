<?php
    echo "LOGIN USER";
    echo "<br>";
    echo "<br>";
?>

<!DOCTYPE html>
<html>
<head>
    <title>LOGIN</title>
</head>
<body>
    <form action="data.php" method="POST">
        <label>username :</label>
        <input type="text" name="user" id="nama" required>
        <br>
        <br>

        <label>password :</label>
        <input type="password" name="pass" id="nama" required>
        <br>
        <?php if (isset($_GET["error"])) :?>
            <p style="color:red; font-size:small;"><i>Username atau Password salah.</i></p>
        <?php endif ?>
        <button type="submit">Login</button>
    </form>
</body>
</html>