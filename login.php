<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Loginv</title>
</head>
<body>
<form method="post" action="login_process.php">
    <table>
        <tr>
            <td>Username</td>
            <td><input type="text" name="username" placeholder="Masukkan Username"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="password" placeholder="Masukkan Password"</td>
            <td></td>
            <td><input type="submit" name="login" value="login"></td>
        </tr>
    </table>
    <p>Jika belum memiliki akun silahkan klik <a href="register.php">Register</p>
</form>
</body>
</html>