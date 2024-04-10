<?php

require_once __DIR__ . DIRECTORY_SEPARATOR . '.././autoload.inc.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (
        !isset($_POST['csrf']) ||
        !password_verify('JIEk*^fd430odO&@', $_POST['csrf']) ||
        !isset($_POST['user_string']) ||
        !empty($_POST['user_string']) ||
        !isset($_POST['username']) ||
        !isset($_POST['password']) ||
        empty($_POST['username']) ||
        empty($_POST['password'])
    )
        die('404 not found');


    if (
        $_POST['username'] == 'user' &&
        $_POST['password'] == 'LDSd)$$343fdfwefdsfxvxcv'
    ) {
        session_start();
        $_SESSION['login_user'] = $_POST['username'];
        header("location: route-list.php");
    }
}

?>

<html>

<head>
    <title>Login Page</title>
</head>

<body>
    <h2>Login Page</h2>

    <form method="post">
        <input name="csrf" type="hidden" value="<?= password_hash('JIEk*^fd430odO&@', PASSWORD_BCRYPT) . ''; ?>">
        <label>User-string :</label><input name="user_string" type="text"><br><br>
        <label>Username :</label><input type="text" name="username" /><br /><br />
        <label>Password :</label><input type="password" name="password" /><br /><br />
        <input type="submit" value=" Submit " /><br />
    </form>
</body>

</html>