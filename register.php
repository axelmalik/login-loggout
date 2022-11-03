<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
</head>
<body>
<form method="post" action="register_process.php">
    <table>
        <tr>
            <td>Name</td>
            <td><input type="text" name="name" placeholder="Masukkan Nama"></td>
        </tr>
        <tr>
            <td>Username</td>
            <td><input type="text" name="username" placeholder="Masukkan Username"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="password" placeholder="Masukkan Password"</td>
            <td></td>
            <td><input type="submit" name="register" value="register"></td>
        </tr>
    </table>
    <p>Jika sudah memiliki akun silahkan <a href="login.php">Login</p>
</form>
</body>
</html>