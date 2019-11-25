<?php

if (isset($_POST['register-submit'])) {

    require $_SERVER['DOCUMENT_ROOT'].'/zadatakhzs/templates/connect.php';

    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];
    $username = $_POST['user'];
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $pass_re = $_POST['pass-re'];

    if (empty($firstname) || empty($lastname) || empty($username) || empty($email) || empty($password) || empty($pass_re)) {
        header("Location: ../user/login_page.php?error_empty");
        exit();
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../user/login_page.php?error_email");
        exit();
    }
    if ($password !== $pass_re) {
        header("Location: ../user/login_page.php?error_passdontmatch");
        exit();
    }

    echo 'HERE';

    $sql = "SELECT username FROM users WHERE username=?";
    $stmt = mysqli_stmt_init($connection);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../user/login_page.php?error_database");
        exit();
    }
    else {
        mysqli_stmt_bind_param($stmt, "s", $username);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        $resultCheck = mysqli_stmt_num_rows($stmt);
        if ($resultCheck > 0) {
            header("Location: ../user/login_page.php?error_exists");
            exit();
        }
    }

    // ITS ALL OKAY
    
    $sql = "INSERT INTO users (firstname, lastname, username, email, password) VALUES (?, ?, ?, ?, ?)";
    $stmt = mysqli_stmt_init($connection);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../user/login_page.php?error_database");
        exit();
    }
    else {
        $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

        mysqli_stmt_bind_param($stmt, "sssss", $firstname, $lastname, $username, $email, $hashedPwd);
        mysqli_stmt_execute($stmt);
        
        header("Location: ../user/login_page.php?signup=success");
        exit();
    }

    mysqli_stmt_close($stmt);
    mysqli_close($connection);

}

else {
    echo "Pogresan Ulaz";
}