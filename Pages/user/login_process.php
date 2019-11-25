<?php

if (isset($_POST['login-submit'])) {

    require $_SERVER['DOCUMENT_ROOT'].'/zadatakhzs/templates/connect.php';

    $username = $_POST['user'];
    $password = $_POST['pass'];

    if (empty($username) || empty($password)) {
        header("Location: ../user/login_page.php?error_empty");
        exit();
    }

    $sql = "SELECT * FROM users WHERE username=?";
    $stmt = mysqli_stmt_init($connection);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../user/login_page.php?error_database");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($result)) {

        $pwdCheck = password_verify($password, $row['password']);
        if (!$pwdCheck) {
            header("Location: ../user/login_page.php?error_wrongpass");
            exit();
        }

        // logged in
        session_start();
        $_SESSION['id'] = $row['id'];
        $_SESSION['user'] = $row['username'];

        header("Location: ../user/login_page.php?login=success");
        exit();
    }
    else {
        header("Location: ../user/login_page.php?error_nouser");
        exit();
    }
}

else {
    echo 'Pogresan Ulaz';
}