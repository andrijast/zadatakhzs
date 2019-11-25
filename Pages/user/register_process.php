<?php

function error() {
    header("Location: /login_page.php");
    exit();
}

if (isset($_POST['register-submit']) || true) {

    require $_SERVER['DOCUMENT_ROOT'].'/zadatakhzs/templates/connect.php';

    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];
    $username = $_POST['user'];
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $pass_re = $_POST['pass-re'];

    if (empty($firstname) || empty($lastname) || empty($username) || empty($email) || empty($password) || empty($pass_re)) {
        error();
    }
    if ($password != $pass_re) {
        error();
    }

}

else {
    echo "Pogresan Ulaz";
}